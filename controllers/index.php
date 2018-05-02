<?php

class Index extends Controller {

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
    $this->view->data["slider"] = $this->model->get_slider_image();
    $this->view->data["all_news"] = $this->model->get_all_news($json=false); 
    $this->view->data["content"] = $this->model->get_home_content($json=false);     
    $this->view->render('index/index', $noinclude=false, $message);
	}
    
    function load_index_controllers($url){
     
    if($url[0]=='prison_locations'){
    include("./models/index_model.php");
	$index = new index_Model;
	$this->view->data["states"]=$index->get_states();    
    
    if(isset($_GET['state'])){
    $this->view->data["prisons"]=$index->get_prisons($_GET['state']);      
        
    }
        
    }
     
    if($url[0]=='statistics'){
    include("./models/cms_model.php");
	$cms = new cms_Model;    
    $this->view->data["statistics"] =  $cms->get_statistics();
    }

    $this->view->render('index/'.$url[0], $noinclude=false,'');    
    }
   
   
 

 
}
