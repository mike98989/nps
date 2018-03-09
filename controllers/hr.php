<?php

class Hr extends Controller {

	function __construct() {
		parent::__construct();
        
        Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == false) {
			Session::destroy();
			header('location:'.URL.'hr_login');
			exit;
		}
        
        
        //$this->view->js = array('public/js/landingpageapp.js');
	}

	function index() {
	$message='';
    $this->view->js = array('public/js/controllers/hrDashboardController.js');    
    //$this-view->data['dashboard'] = $this->model->count_records();    
    $this->view->render('hr/landingpage', $noinclude=false, $message);
	}
    
    
    
    function applicants(){
      
    $message='';
    if(isset($_GET['id'])){
    $this->view->data['details'] = $this->model->get_applicant_details($json=false);    
    }
    $this->view->js = array('public/js/controllers/hrApplicantsController.js');    
    //$this-view->data['dashboard'] = $this->model->count_records();    
    $this->view->render('hr/applicants', $noinclude=false, $message);
        
    }


    function completed(){
      
    $message='';
    
    $this->view->js = array('public/js/controllers/hrApplicantsController.js');    
    //$this-view->data['dashboard'] = $this->model->count_records();    
    $this->view->render('hr/completed', $noinclude=false, $message);
        
    }
    
    
    
    
    
    

    function logout()
    {

        Session::destroy();
        die(header('location:'.URL.'hr_login'));
        exit;
    }
}
