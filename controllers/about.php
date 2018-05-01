<?php

class about extends Controller {

	function __construct() {
		parent::__construct();
        
		/*Session::init();
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

     $this->view->render('index/about', $noinclude=false, $message);
	}
    
   
 

 
}
