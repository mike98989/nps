<?php
header('Access-Control-Allow-Origin: *');
class api extends Controller {

	function __construct() {
		parent::__construct();
		/*
		Session::init();
		$this->logged = Session::get('loggedIn');
		$this->loggedType= Session::get('loggedType');;
		$this->view->session_details=Session::get('details');
		*/

	}

	function login_user(){
 	$json = file_get_contents('php://input');	
 	$obj = json_decode($json,true);	
	$username=$obj['username'];
	$password=md5($obj['password']);
	include("./models/login_model.php");
	$login = new login_Model;		
	$login_user = $this->model=$login->run($username,$password);
	echo json_encode($login_user);	
	}

	function check_connection(){
	echo '1';	
	}

	/////// UPLOAD TO CLOUD
	function upload_to_cloud(){
	if(isset($_GET['data'])){
	include("./models/cms_model.php");
	$cms = new cms_Model;		
	$this->model=$cms->upload_to_remote_server($_POST['data']);
	}

	}



    ///////GET ALL RELATED TABLES
	function get_all_news(){
    include("./models/cms_model.php");
	 $cms = new cms_Model;
	 $this->model=$cms->get_all_news($json=true);
	}

    
    function get_all_gallery(){
    include("./models/cms_model.php");
	 $cms = new cms_Model;
	 $this->model=$cms->get_all_gallery($json=true);
	}   
    
     function get_all_prisons(){
    include("./models/cms_model.php");
	 $cms = new cms_Model;
	 $this->model=$cms->get_all_prisons($json=true);
	}
     
     function get_all_states(){
    include("./models/cms_model.php");
	 $cms = new cms_Model;
	 $this->model=$cms->get_all_states($json=true);
	}
    //////DELETE IMAGE
    function delete_image(){  
    include("./models/cms_model.php");
	 $cms = new cms_Model;
	 $this->model=$cms->delete_image($json=true);    
    }


	   
}

