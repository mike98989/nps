<?php

    class index_Model extends Model {

	function __construct() {
		parent::__construct();
            
	}
    ////////////////GET STATES
    public function get_states(){ 
    $states = $this->db->query("SELECT * FROM states ORDER BY state ASC")or die(mysql_error());
    return $states->rows;      
    }
       
    ////////GET ALL SLIDER IMAGE    
    public function get_slider_image(){   
    $slider = $this->db->query("SELECT * FROM gallery WHERE galleryType=1 AND status=1 ORDER BY id DESC")or die(mysql_error());
    return $slider->rows;      
    }  

        ///////GETTING ALL NEWS
    function get_all_news($json){
    $news = $this->db->query("SELECT * FROM news WHERE status=1 ORDER BY id DESC")or die(mysql_error());
        //print_r($songs);
        if($json==true){
        $return = $this->returnjson($news->rows);
        print_r($return);
        exit;
        }else{
        return $news->rows;
        }    
    }

    ///////GETTING HOME CONTENT
    function get_home_content($json){
    $home_content = $this->db->query("SELECT * FROM home_content")or die(mysql_error());
        //print_r($songs);
        if($json==true){
        $return = $this->returnjson($home_content->row);
        print_r($return);
        exit;
        }else{
        return $home_content->row;
        }    
    }

    ///////////////////////GET PRISONS
    public function get_prisons($state_id){ 
    $state = $this->db->escape($state_id);    
    $prisons = $this->db->query("SELECT * FROM prisons INNER JOIN states ON prisons.state_id=states.state_id WHERE prisons.state_id='".$state."' AND prisons.status=1 ORDER BY prisons.prison_name ASC")or die(mysql_error());
    return $prisons->rows;      
    }
    
}
