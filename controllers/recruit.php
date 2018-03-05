<?php

class Recruit extends Controller {

	function __construct() {
		parent::__construct();
        
        //$this->view->js = array('public/js/landingpageapp.js');
	}

	function index() {
	$message='';

     $this->view->render('recruit/index', $noinclude=false, $message);
	}

	function registration() {
		$message='';
    $this->view->render('recruit/registration', $noinclude=false, $message);
	}

	function qualifications() {
		$message='';
    $this->view->render('recruit/qualifications', $noinclude=false, $message);
	}

	function experience() {
		$message='';
    $this->view->render('recruit/experience', $noinclude=false, $message);
	}
    
    
    
}
