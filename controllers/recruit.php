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
    
    
    
}
