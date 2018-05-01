<?php
class hr_login_Model extends Model
{
	public function __construct()
	{
		parent::__construct();

	}

	public function run($email,$password,$office)
	{
		$email = $this->db->escape($email);
		$password = $this->db->escape($password);
		$sth = $this->db->query("SELECT * FROM hr_admin WHERE admin_email ='$email' AND admin_pass='$password' AND account_type='$office'")or die(mysql_error());
		$count =  $sth->num_rows;
		if ($count > 0) {

			if($sth->row['admin_status']=='0'){
				$message['error'] = "Your account is not yet active. Please click on the validation link sent to your email or contact administrator!<br/>
				<br/>
				<a href=".URL."password_reset?value=".$sth->row['user_email']."&id=".$sth->row['confirm_id']."><button class='btn btn-primary'><i class='fa fa-envelope'></i> Resend Password Validation Mail</button></a><br/><br/>

				<a href='".URL."resend_link?value=".$sth->row['user_email']."' class='btn btn-success'><i class='fa fa-envelope'></i> Resend Account Activation Mail
				</a>
				<div style='clear:both'></div>
				";
				return $message;
			}else{
			// login
			$user_id = $sth->row['admin_email'];
			$user_details = $sth->rows;
			Session::init();
			Session::set('loggedIn', true);
			Session::set('loggedType', 'hr');
			Session::set('details', $user_details);
			header('location: ./hr');

		}

		} else {
			$message['error'] = "Ooopss. Wrong Username or Password! Please try again";

			return $message;

			//header('location: ../login');
		}
	}

	

}
?>
