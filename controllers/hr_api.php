<?php
header('Access-Control-Allow-Origin: *');

class hr_api extends Controller {

	function __construct() {
		parent::__construct();
		Session::init();
		$this->logged = Session::get('loggedIn');
		$this->loggedType= Session::get('loggedType');;
		$this->view->session_details=Session::get('details');

	}

	

	/////// GET COUNTED RECORDS FOR DASHBOARD
	function get_dashboard_counter(){
	include("./models/hr_model.php");
	$hr = new hr_Model;		
	$this->model=$hr->get_dashboard_counter($json=true);
	}

	////////////UPDATE APPROVED LIST////
	function update_approved_list(){
	include("./models/hr_model.php");
	$hr = new hr_Model;		
	$this->model=$hr->update_approved_list($json=true);	
	}
    
    /////// GET ALL APPLICANTS
	function get_all_applicants(){
	include("./models/hr_model.php");
	$hr = new hr_Model;		
	$this->model=$hr->get_all_applicants($json=true);
	}  


	/////// GET ALL COMPLETED
	function get_all_completed(){
	include("./models/hr_model.php");
	$hr = new hr_Model;		
	$this->model=$hr->get_all_completed($json=true);
	}  

		/////// GET ALL ELIGIBLE
	function get_all_eligible(){
	include("./models/hr_model.php");
	$hr = new hr_Model;		
	$this->model=$hr->get_all_eligible($json=true);
	}  


	/////// GET ALL ACCEPTED
	function get_all_accepted(){
	include("./models/hr_model.php");
	$hr = new hr_Model;		
	$this->model=$hr->get_all_accepted($json=true);
	}  

	/////// GET ALL DENIED
	function get_all_denied(){
	include("./models/hr_model.php");
	$hr = new hr_Model;		
	$this->model=$hr->get_all_denied($json=true);
	}  

	/////// GET ALL CG_APPROVED	
	function get_all_cg_approved(){
	include("./models/hr_model.php");
	$hr = new hr_Model;		
	$this->model=$hr->get_all_cg_approved($json=true);
	}

	/////// GET ALL UNVERIFIED
	function get_all_unverified(){
	include("./models/hr_model.php");
	$hr = new hr_Model;		
	$this->model=$hr->get_all_unverified($json=true);
	}  

	/////// GET ALL STATES
	function get_all_states(){
	include("./models/hr_model.php");
	$hr = new hr_Model;		
	$this->model=$hr->get_all_states($json=true);
	}  

	/////// GET APPLICANTS OTHER INFORMATION
	function get_applicants_other_details(){
	include("./models/hr_model.php");
	$hr = new hr_Model;		
	$this->model=$hr->get_applicants_other_details($json=true);	
	}  

   
}
