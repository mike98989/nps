<?php

class News extends Controller {

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
 	if(isset($_GET['id'])){
 	$this->view->data["details"] = $this->model->get_news_content(); 
 	$this->view->render('index/news', $noinclude=false, $message);	
 	}else{
 		
 	echo "This a wrong link!";	
 	}  
    
	}
    
    
    
}
