<?php

class Cms extends Controller {

	function __construct() {
		parent::__construct();
        
        Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == false) {
			Session::destroy();
			header('location: ./login');
			exit;
		}
        
        
        //$this->view->js = array('public/js/landingpageapp.js');
	}

	function index() {
     
	$message='';

     $this->view->render('cms/landingpage', $noinclude=false, $message);
	}
    
    
    function news(){
    if(isset($_POST['newsTitle'])){
    if(!isset($_POST['edit'])){    
    $this->view->data["msg"] =  $this->model->post_news();  
    }
    elseif(isset($_POST['edit'])){    
    $this->view->data["msg"] =  $this->model->edit_news();  
    }

    } 
    
    if(isset($_GET['edit'])){
    $this->view->data["news"] =  $this->model->get_news($_GET['edit']);    
    }    

    if(isset($_GET['unpublish'])){
    $this->view->data["news"] =  $this->model->unpublish($_GET['unpublish']);    
    } 

    if(isset($_GET['delete'])){
    $this->view->data["delete"] =  $this->model->delete($_GET['delete']); 
    die(header('location:'.URL.'cms/news'));   
    } 


    if(isset($_GET['publish'])){
    $this->view->data["news"] =  $this->model->publish($_GET['publish']);    
    } 

    $this->view->js = array('public/js/controllers/cmsNewsController.js');    
    $this->view->render('cms/content/news', $noinclude=false, '');    
    }
    
    
    function home_content(){
    if(isset($_POST['update_home_content'])){
    $this->view->data["msg"] =  $this->model->update_home_content();    
    }
    $this->view->data["home_content"] = $this->model->get_home_content(); 
    //$this->view->js = array('public/js/controllers/cmsNewsController.js');    
    $this->view->render('cms/content/home_content', $noinclude=false, '');    
    }
    
   
    function gallery(){
    if(isset($_POST['galleryTitle'])){  
    $this->view->data["msg"] =  $this->model->post_gallery();    
    }
    //$this->view->data["gallery"] = $this->model->get_home_content(); 
    $this->view->js = array('public/js/controllers/cmsGalleryController.js');    
    $this->view->render('cms/content/gallery', $noinclude=false, '');    
    }
 
    function prison_locations(){
    if(isset($_POST['prison_name'])){ 
    $this->view->data["msg"] =  $this->model->post_prison();    
    }
    if(isset($_GET['edit'])){
    $this->view->data["prison"] =  $this->model->get_prison($_GET['edit']);    
    }
    //$this->view->data["gallery"] = $this->model->get_home_content(); 
    $this->view->js = array('public/js/controllers/cmsPrisonController.js');    
    $this->view->render('cms/content/prison_locations', $noinclude=false, '');    
    }

     function prison_statistics(){
    if(isset($_POST['heading'])){ 
    $this->view->data["msg"] =  $this->model->update_statistics();    
    }
    $this->view->data["statistics"] =  $this->model->get_statistics();

    //$this->view->data["gallery"] = $this->model->get_home_content(); 
    $this->view->js = array('public/js/controllers/cmsStatisticsController.js');    
    $this->view->render('cms/content/prison_statistics', $noinclude=false, '');    
    }

    	function logout()
			{

				Session::destroy();
				die(header('location:'.URL.'./login'));
				exit;
			}
}
