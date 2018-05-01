<?php
class register_Model extends Model {

	function __construct() {
		parent::__construct();
	}


function register($json){
	if(isset($_POST['user_fname'])){
	$exclude = array('user_password','confirm_password','premium_level','premium_user');
        
	//////CHECK IF BOTH PASSWORDS ARE THESAME//////
	if($_POST['user_password']==$_POST['confirm_password']){
	//////CHECK IF EMAIL ALREADY EXIST!/////
	$check_table_for_email = $this->db->query("SELECT * FROM `members` WHERE user_email='".$this->db->escape($_POST['user_email'])."'")or die(mysql_error());

    /////CHECK IF USER URL EXIST//////  
    $user_url = strtolower(str_replace(' ','_',$_POST['user_fname']));
    $check_table_for_user_url = $this->db->query("SELECT * FROM `members` WHERE user_url='".$user_url."'")or die(mysql_error());  
        
	if($check_table_for_email->num_rows==0){
		foreach(array_keys($_POST) as $key ) {
		if(!in_array($key, $exclude) ) {
		$fields[] = "`$key`";
		$values[] = "'" .$this->db->escape($_POST[$key])."'";
		}
		}
    
    //////IF THE USER URL ACTUALLY EXIST; THEN ADD SOME RANDOM NUMBERS TO THE URL////
    if($check_table_for_user_url->num_rows!=0){
    $user_url=$user_url.rand(100,1000);    
    }
    if(isset($_POST['premium_user'])){
    $account_type='2';
    $split = explode('@',$_POST['premium_level']);    
    $level =  $split[0];    
    }else{
    $account_type='1';
    $level = '0';    
    }
    //echo $account_type;exit;    
	$addedfieldvalue=array("'".md5($_POST['user_password'])."'","'".$user_url."'","'".$account_type."'","'".$level."'");
	$addedfieldarray=array("`user_pass`","user_url","account_type","level");

	$data = $values = array_merge($values,$addedfieldvalue);
	$keys = $fields = array_merge($fields,$addedfieldarray);

        
		$fields = implode(",", $fields);
		$values = implode(",", $values);

		if($this->db->query("INSERT INTO `members` ($fields) VALUES ($values)") ) {
	  $message['msg'] = "USER DETAILS SAVED SUCCESSFULLY!";
		$message['sendstatus'] = '0';
        $message['payment_page_details'] = array('level'=>$level,'payable'=>$split[1],'account_plan'=>'Premium');    
        ////// CONFIRMATION EMAIL SHOULD ONLY BE SENT AFTER PAYMENT IS SUCCESS    
        if($account_type=='1'){   
        $message['sendstatus'] = '1';    
		include_once("api/smsandemail.php");
		$send=new smsandemail();

		$email_message = "
		<div style='text-align:center;font-size:17px;'>
		<h3 style='color:#666666'>Hello ".$_POST['user_fname']."</h3>
		<p style='line-height:20px'>
		Welcome to <strong>Hello gospel</strong>. We bring you a world of possibilities. Get ready to explore. To activate your account, click the link below:<br/><br/>
		<a href=".URL."confirm_email?value=".$_POST['user_confirm_id']."><button style='background:#333825;font-size:15px;color:#fff;padding:10px 15px;border-radius:13px;border:none'>Confirm my email address</button></a>
		</p>
        </div>
        ";

		$sender_name = "Hello gospel";
		$subject = "Hello gospel Welcomes You!";

		$emailing = $send->emailing($_POST['user_email'],$email_message,$sender_name,$subject,'','');

		//print_r($emailing);
        }
	    }else {
	        $message['msg'] = mysql_error();
	    }
			return $message;
	}
	else{$message['msg']="<i class='fa fa-warning'></i> Email address already exist! Please try again.";}
	return $message;
}
else{
		$message['msg']="<i class='fa fa-warning'></i> Ooops. Passwords do not match! Please try again";
		return $message;
	}



}

}


    
    
    
public function confirm_email($value,$json){
//////CHECK IF VALUE EXIST!/////
$check_table_for_value = $this->db->query("SELECT * FROM `members` WHERE user_confirm_id='".$this->db->escape($value)."'")or die(mysql_error());
if($check_table_for_value->num_rows==1){
$update=$this->db->query("UPDATE `members` SET user_status='1'  WHERE user_confirm_id='".$this->db->escape($value)."'");
$message['msg']="<h2>Voila!!!<h2> <h3>You just earned 100 coins. You can now proceed to login area</h3>

<div style='font-size:30px;'><span class='count'>100</span><br/>
      
      <img src='".URL."views/images/coin_icon2.png' style='width:80px'/>
      </div> 
    <a class='btn btn-purple' href='".URL."userlogin' style='margin-top:10px'>Continue <i class='fa fa-arrow-right'></i></a>
";
return $message;
}else{
$message['msg']="<h3 style='margin-top:20px'>Invalid Confirmation Link!</h3> <a class='btn btn-purple'>Resend Link</a>";
return $message;
}


}
    
    



  }
