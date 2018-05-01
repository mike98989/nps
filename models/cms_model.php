<?php
header('Access-Control-Allow-Origin: *');

class cms_Model extends Model {

	function __construct() {
		parent::__construct();
            
	}

    ////UPLOAD TO CLOUD
    public function upload_to_remote_server($data){
        echo 'reach here';
        print_r($data);
        exit;
    //$connect = mysqli_connect('localhost','root','','prison_cms')or die(mysqli_error());
    $data = json_decode($_POST['data'], true); 
    $exclude = array('id');
    for($a=0; $a<count($data); $a++){
    foreach($data[$a] as $key[$a]=>$column[$a]) { 
    if(!in_array($key[$a], $exclude) ) {   
    $fields[$a][] = "`$key[$a]`";   
    $values[$a][] = "'" . $this->db->escape($column[$a])."'";  
    }
    }
    $fields_imp[$a] = implode(",", $fields[$a]);
    $values_imp[$a] = implode(",", $values[$a]);
    $sql[$a] = "INSERT INTO `inmates_allclassregister` ($fields_imp[$a]) VALUES ($values_imp[$a])";

    //// CHECK IF RECORDS EXIST BEFORE INSERTING INTO DB
    $check = $this->db->query("SELECT PrisonerNo, prison_id FROM inmates_allclassregister WHERE PrisonerNo='".$data[$a]['PrisonerNo']."' AND prison_id='".$data[$a]['prison_id']."'")or die(mysql_error());
    //echo $check->num_rows;exit;
    if($check->num_rows==0){
    $mysql = $this->db->query($sql[$a]) or die(mysqli_error());
    }else{
    $sets = array();
     $combine = array_combine($fields[$a], $values[$a]);

     foreach($combine as $colum => $value){
      $sets[] = "" .$colum. " = ".$value." ";
     }
     $whereSQL = "WHERE PrisonerNo='".$data[$a]['PrisonerNo']."' AND prison_id='".$data[$a]['prison_id']."'";
    $message="true";
     $mysql =$this->db->query("UPDATE inmates_allclassregister" . " SET " .implode("," ,$sets) . $whereSQL)or die(mysql_error());
     }


    }
    echo $mysql; 
    //print_r($fields);
    }



	//////////////////POST NEWS/////
	function post_news(){
    if(isset($_POST['newsTitle'])){
	$exclude = array('');
    foreach(array_keys($_POST) as $key ) {
    if(!in_array($key, $exclude) ) {
    $fields[] = "`$key`";
    $values[] = "'" .$this->db->escape($_POST[$key])."'";
    }
    }
          
    if($_FILES['featured_image']['name']!=''){
    require_once('miscellenous_model.php');
     $featured_image = $_FILES['featured_image'];
     $explode_image = explode('.',$featured_image['name']);
     $ext_image = end($explode_image);
     $uploadarray = array('jpg','jpeg','png','gif');
     $misc = new miscModel;
     $rand = rand(100000,10000000);
     $image_name = str_replace(" ","-",strtolower($explode_image[0]));
     $move1 = $misc->file_upload($featured_image,'2000000','public/images/uploads/',$uploadarray,$image_name);
     if($move1[0]=='1'){
     $imagearray=array("'".substr($move1[1],7)."'");
     $fieldarray=array("`picture`");
     $data = $values = array_merge($values,$imagearray);
     $keys = $fields = array_merge($fields,$fieldarray);
     }
     else{
     $message['msg'] = $move1[0];
     return $message;
     }

     }
          
     //str_replace(" ","-",strtolower($explod_track[0]));
    $fields = implode(",", $fields);
    $values = implode(",", $values);

          
   if($this->db->query("INSERT INTO `news` ($fields) VALUES ($values)") ) {
    return $message['msg']='true';
    } else {
    return $message['msg'] = mysql_error();

    }
          
          
          
      }
	}
    

        //////////////////POST NEWS/////
    function edit_news(){
    if(isset($_POST['newsTitle'])){
         
    $exclude = array('edit');
    foreach(array_keys($_POST) as $key ) {
    if(!in_array($key, $exclude) ) {
    $keys[] = $fields[] = "`$key`";
    $data[] = $values[] = "'" .$this->db->escape($_POST[$key])."'";
    }
    }
      
    if($_FILES['featured_image']['name']!=''){
    require_once('miscellenous_model.php');
     $featured_image = $_FILES['featured_image'];
     $explode_image = explode('.',$featured_image['name']);
     $ext_image = end($explode_image);
     $uploadarray = array('jpg','jpeg','png','gif');
     $misc = new miscModel;
     $rand = rand(100000,10000000);
     $image_name = str_replace(" ","-",strtolower($explode_image[0]));
     $move1 = $misc->file_upload($featured_image,'2000000','public/images/uploads/',$uploadarray,$image_name);
     if($move1[0]=='1'){
     $imagearray=array("'".substr($move1[1],7)."'");
     $fieldarray=array("`picture`");
     $data = $values = array_merge($values,$imagearray);
     $keys = $fields = array_merge($fields,$fieldarray);
     }
     else{
     $message['msg'] = $move1[0];
     return $message;
     }

     }
          
     //str_replace(" ","-",strtolower($explod_track[0]));
    $fields = implode(",", $fields);
    $values = implode(",", $values);

    

    $sets = array();
     $combine = array_combine($keys, $data);

     foreach($combine as $column => $value){
      $sets[] = "" .$column. " = ".$value." ";
     }
     $whereSQL = "WHERE id='".$this->db->escape($_POST['edit'])."'";
    $message="true";
     $sql ="UPDATE news" . " SET " .implode("," ,$sets) . $whereSQL;
     if($this->db->query($sql)) {
     $msg = $message;
     }else {
     $msg = mysql_error();
     }
     
     return $msg;
          
          
          
      }
    }

    //////DELETE POST////
    function delete($news_id){
    $news_id = $this->db->escape($news_id);
    $update= $this->db->query("DELETE FROM news WHERE id='".$news_id."'")or die(mysql_error());
    return;    
    }

    //////////////////UNPUBLISH POST//////
    function unpublish($news_id){
    $news_id = $this->db->escape($news_id);
    $update= $this->db->query("UPDATE news SET status='0' WHERE id='".$news_id."'")or die(mysql_error());
    return;    
    }

    ////////////////PUBLISH POST
     function publish($news_id){
    $news_id = $this->db->escape($news_id);
    $update= $this->db->query("UPDATE news SET status='1' WHERE id='".$news_id."'")or die(mysql_error());
    return;    
    }

    ///////GETTING ALL NEWS
    function get_all_news($json){
    $news = $this->db->query("SELECT * FROM news  ORDER BY id DESC")or die(mysql_error());
        //print_r($songs);
		if($json==true){
		$return = $this->returnjson($news->rows);
		print_r($return);
		exit;
		}else{
		return $news->rows;
		}    
    }


    ///////GETTING ALL NEWS
    function get_statistics($json=false){
    $statistics = $this->db->query("SELECT * FROM statistics")or die(mysql_error());
        //print_r($songs);
        if($json==true){
        $return = $this->returnjson($statistics->rows);
        print_r($return);
        exit;
        }else{
        return $statistics->row;
        }    
    }
     //////////////////GET A SPECIFIC NEWS DETAILS
    function get_news($news_id){
        $news_id = $this->db->escape($news_id);

         $news = $this->db->query("SELECT * FROM news WHERE id='".$news_id."'")or die(mysql_error());
        //print_r($songs);
        if($json==true){
        $return = $this->returnjson($news->row);
        print_r($return);
        exit;
        }else{
        return $news->row;
        }    
    } 
      

    ///////GETTING ALL HOME CONTENTS
    function get_home_content($json){
    $home_content = $this->db->query("SELECT * FROM home_content  LIMIT 1")or die(mysql_error());
        //print_r($songs);
		if($json==true){
		$return = $this->returnjson($home_content->row);
		print_r($return);
		exit;
		}else{
		return $home_content->row;
		}    
    }
    
    
    ///////GETTING ALL GALLERY
    function get_all_gallery($json){
    $gallery = $this->db->query("SELECT * FROM gallery WHERE status=1 ORDER BY id DESC")or die(mysql_error());
        //print_r($songs);
		if($json==true){
		$return = $this->returnjson($gallery->rows);
		print_r($return);
		exit;
		}else{
		return $gallery->rows;
		}    
    }
        
    
    ///////GETTING ALL PRISONS
    function get_all_prisons($json){
    $prisons = $this->db->query("SELECT * FROM prisons INNER JOIN states ON prisons.state_id = states.state_id ORDER BY states.state ASC")or die(mysql_error());
        //print_r($songs);
		if($json==true){
		$return = $this->returnjson($prisons->rows);
		print_r($return);
		exit;
		}else{
		return $prisons->rows;
		}    
    }
     //////////////////GET A SPECIFIC PRISON DETAILS
    function get_prison($prison_id){
         $prison_id = $this->db->escape($prison_id);
         $prison = $this->db->query("SELECT * FROM prisons INNER JOIN states ON prisons.state_id = states.state_id WHERE prison_id='".$prison_id."'")or die(mysql_error());
        //print_r($songs);
        if($json==true){
        $return = $this->returnjson($prison->row);
        print_r($return);
        exit;
        }else{
        return $prison->row;
        }    
    } 


        
    ///////GETTING ALL PRISONS
    function get_all_states($json){
    $state = $this->db->query("SELECT * FROM states ORDER BY states.state ASC")or die(mysql_error());
        //print_r($songs);
		if($json==true){
		$return = $this->returnjson($state->rows);
		print_r($return);
		exit;
		}else{
		return $state->rows;
		}    
    }
     
    
    ///////UPDATE HOME CONTENT
    function update_home_content(){
    $exclude = array('update_home_content');
	  foreach(array_keys($_POST) as $key) {

		if(!in_array($key, $exclude) ) {
		$keys[] = $fields[] = "`$key`";
		$data[] = $values[] = "'" .$_POST[$key]."'";
		}
		}

    $sets = array();
     $combine = array_combine($keys, $data);

     foreach($combine as $column => $value){
      $sets[] = "" .$column. " = ".$value." ";
     }
     $whereSQL = "WHERE id='".$_POST['update_home_content']."'";
    $message="Home content update was successful!";
     $sql ="UPDATE home_content" . " SET " .implode("," ,$sets) . $whereSQL;
     if($this->db->query($sql)) {
     $msg = $message;
     }else {
     $msg = mysql_error();
     }
     
     return $msg;
    }

    /////////////////UPDATE PRISON STATISTICS 
    function update_statistics(){
    $exclude = array('update_statistics');
      foreach(array_keys($_POST) as $key) {

        if(!in_array($key, $exclude) ) {
        $keys[] = $fields[] = "`$key`";
        $data[] = $values[] = "'" .$_POST[$key]."'";
        }
        }

    $sets = array();
     $combine = array_combine($keys, $data);

     foreach($combine as $column => $value){
      $sets[] = "" .$column. " = ".$value." ";
     }
     $whereSQL = "WHERE id='".$_POST['update_statistics']."'";
    $message="Statistics records update was successful!";
     $sql ="UPDATE statistics" . " SET " .implode("," ,$sets) . $whereSQL;
     if($this->db->query($sql)) {
     $msg = $message;
     }else {
     $msg = mysql_error();
     }
     
     return $msg;
    }

    ///////POST A NEW GALLERY
    function post_gallery(){
    if(isset($_POST['galleryTitle'])){
	$exclude = array('');    
    foreach(array_keys($_POST) as $key ) {
    if(!in_array($key, $exclude) ) {
    $fields[] = "`$key`";
    $values[] = "'" .$this->db->escape($_POST[$key])."'";
    }
    }
          
    if($_FILES['galleryImage']['name']!=''){
    require_once('miscellenous_model.php');
     $featured_image = $_FILES['galleryImage'];
     $explode_image = explode('.',$featured_image['name']);
     $ext_image = end($explode_image);
     $uploadarray = array('jpg','jpeg','png','gif');
     $misc = new miscModel;
     $rand = rand(100000,10000000);
     $image_name = str_replace(" ","-",strtolower($explode_image[0]));
     $move1 = $misc->file_upload($featured_image,'2000000','public/images/gallery/',$uploadarray,$image_name.$rand);
     if($move1[0]=='1'){
     $imagearray=array("'".substr($move1[1],7)."'");
     $fieldarray=array("`path`");
     $data = $values = array_merge($values,$imagearray);
     $keys = $fields = array_merge($fields,$fieldarray);
     }
     else{
     $message['msg'] = $move1[0];
     return $message;
     }

     }
          
     //str_replace(" ","-",strtolower($explod_track[0]));
    $fields = implode(",", $fields);
    $values = implode(",", $values);

          
   if($this->db->query("INSERT INTO `gallery` ($fields) VALUES ($values)") ) {
    return $message['msg']='New image saved!';
    } else {
    return $message['msg'] = mysql_error();

    }
          
          
          
      }
	}
    
    ///////DELETE IMAGE
    public function delete_image($json){
    $path = 'public/'.$_GET['path'];
    if(unlink($path)){
    $msg = "Image Deleted successfully!";
    }else{
    $msg = "Image is deleted already!";    
    }
    $delete = $this->db->query("DELETE FROM gallery WHERE id=".$_GET['id']);    
    echo $msg;    
        
    }
    
    
    //////////////////POST PRISON/////
	function post_prison(){
    if(isset($_POST['prison_name'])){

    ////////////IF THE POST IS NOT AN EDIT PRISON POST    
    if(!isset($_POST['edit'])){    
	$exclude = array('');
    foreach(array_keys($_POST) as $key ) {
    if(!in_array($key, $exclude) ) {
    $fields[] = "`$key`";
    $values[] = "'" .$this->db->escape($_POST[$key])."'";
    }
    }
            
     //str_replace(" ","-",strtolower($explod_track[0]));
    $fields = implode(",", $fields);
    $values = implode(",", $values);
   
    if($_POST['state_id']=='0'){
        return $message['msg']='Please select Prison state';
    }else{    
   if($this->db->query("INSERT INTO `prisons` ($fields) VALUES ($values)") ) {
    return $message['msg']='true';
    } else {
    return $message['msg'] = mysql_error();

    }
          
    }
          
          
    }

        /////////////////IF THE POST IS AN EDIT PRISON POST
    elseif(isset($_POST['edit'])){
       
    $exclude = array('edit');
      foreach(array_keys($_POST) as $key) {

        if(!in_array($key, $exclude) ) {
        $keys[] = $fields[] = "`$key`";
        $data[] = $values[] = "'" .$_POST[$key]."'";
        }
        }

    $sets = array();
     $combine = array_combine($keys, $data);

     foreach($combine as $column => $value){
      $sets[] = "" .$column. " = ".$value." ";
     }
     $whereSQL = "WHERE prison_id='".$_POST['edit']."'";
    $message="true";
     $sql ="UPDATE prisons" . " SET " .implode("," ,$sets) . $whereSQL;
     if($this->db->query($sql)) {
     $msg = $message;
     }else {
     $msg = mysql_error();
     }
     
     return $msg;
    }
}

}
}
