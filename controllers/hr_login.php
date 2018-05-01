<?php

class Hr_login extends Controller {

	function __construct() {
		parent::__construct();
        
        /*
        Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == false) {
			Session::destroy();
			header('location: ./login');
			exit;
		}
        
        */
        //$this->view->js = array('public/js/landingpageapp.js');
	}

	function index() {
	$message='';
        
    	/////// IF LOGIN TYPE IS USER///
    if(isset($_POST['user_email'])){
		
		$message = $this->run();
		
    }    
     $this->view->render('login/hr', $noinclude=true, $message);
	}
    
    
    function run(){
    $password=md5($_POST['user_password']);
    $email=$_POST['user_email'];
    $office=$_POST['office'];
    return $this->model->run($email,$password,$office);
	}

   
 

 
}
