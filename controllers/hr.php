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
    /////IF THE ELIBILITY STATUS IS CLICKED    
    if(isset($_GET['status'])){
    $this->view->data['status'] = $this->model->set_applicant_status($json=false); 
    header('location:'.URL.'hr/applicants?id='.$_GET['id']);   
    }
    if(isset($_GET['approval'])){
    $this->view->data['approval'] = $this->model->set_applicant_approval($json=false); 
    header('location:'.URL.'hr/applicants?id='.$_GET['id'].'&&eligible=2');    
    }
    $this->view->data['next_applicant'] = $this->model->get_next_applicant($_GET['id']);    
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

    function unverified(){
      
    $message='';
    
    $this->view->js = array('public/js/controllers/hrApplicantsController.js');    
    //$this-view->data['dashboard'] = $this->model->count_records();    
    $this->view->render('hr/unverified', $noinclude=false, $message);
        
    }


    function sorting(){
      
    $message='';
    
    $this->view->js = array('public/js/controllers/hrApplicantsController.js');    
    //$this-view->data['dashboard'] = $this->model->count_records();    
    $this->view->render('hr/sorting', $noinclude=false, $message);
        
    }


    function eligible(){
      
    $message='';

    if(isset($_GET['id'])){
    /////IF THE ELIBILITY STATUS IS CLICKED    
    if(isset($_GET['approval'])){
    $this->view->data['approval'] = $this->model->set_applicant_approval($json=false); 
    header('location:'.URL.'hr/eligible?id='.$_GET['id']);    
    }
    $this->view->data['next_applicant'] = $this->model->get_next_eligible_applicant($_GET['id']);    
    $this->view->data['details'] = $this->model->get_applicant_details($json=false);    
    }

    
    $this->view->js = array('public/js/controllers/hrApplicantsController.js');    
    //$this-view->data['dashboard'] = $this->model->count_records();    
    $this->view->render('hr/eligible', $noinclude=false, $message);
        
    }
    

    function accepted(){

    if(isset($_POST['approve'])){
    $this->view->data['approve_applicants'] = $this->model->approve_applicants($json=false);
    }  

    $message='';
    
    $this->view->js = array('public/js/controllers/hrApplicantsController.js');    
    //$this-view->data['dashboard'] = $this->model->count_records();    
    $this->view->render('hr/accepted', $noinclude=false, $message);
        
    }

    function cg_approved(){

    $message='';
    
    $this->view->js = array('public/js/controllers/hrApplicantsController.js');    
    //$this-view->data['dashboard'] = $this->model->count_records();    
    $this->view->render('hr/cg_final', $noinclude=false, $message);
        
    }

    function denied(){
      
    $message='';
    
    $this->view->js = array('public/js/controllers/hrApplicantsController.js');    
    //$this-view->data['dashboard'] = $this->model->count_records();    
    $this->view->render('hr/denied', $noinclude=false, $message);
        
    }



    
    
    
    
    

    function logout()
    {

        Session::destroy();
        die(header('location:'.URL.'hr_login'));
        exit;
    }
}
