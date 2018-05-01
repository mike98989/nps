<?php

    class  news_Model extends Model {

	function __construct() {
		parent::__construct();
            
	}
 
    ////////GET NEWS BY ID
    public function get_news_content(){   
    $newsId = $this->db->escape($_GET['id']);    
    $slider = $this->db->query("SELECT * FROM news WHERE link='".$newsId."' AND status=1")or die(mysql_error());
    return $slider->row;      
    }  

   
    
}
