<?php
header('Access-Control-Allow-Origin: *');

class recruit_api extends Controller {

	function __construct() {
		parent::__construct();
		Session::init();
		$this->logged = Session::get('loggedIn');
		$this->loggedType= Session::get('loggedType');;
		$this->view->session_details=Session::get('details');

	}


    
    /////// GET ALL APPLICANTS
	function get_all_related_tables(){
	include("./models/recruit_model.php");
	$recruit = new recruit_Model;		
	$this->model=$recruit->get_all_related_tables($json=true);
	}   
    
    //////////////GET QUALIFICATION
    function get_qualifications(){
    include("./models/recruit_model.php");
	$recruit = new recruit_Model;	
	$return['qualifications']=$recruit->load_educationals($_GET['id']);
    $return['professionals'] =$recruit->load_professionals($_GET['id']);
    print_r(json_encode($return));
    }

    /////// DELETE RESULT
	function delete_result(){
	include("./models/recruit_model.php");
	$recruit = new recruit_Model;
    $model="delete_".$_GET['table'];
    $id=$_GET['id'];
    $user_id=$_GET['user_id'];   
	$delete=$recruit->$model($id,$user_id);
    print_r($delete);    
	}   
    
   
}
