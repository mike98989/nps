<?php

class hr_Model extends Model {

	function __construct() {
		parent::__construct();
            
	}
    
    
    function get_dashboard_counter($json){
    $counter = $this->db->query("SELECT (SELECT count(*) from personal_details WHERE filled='1' AND status!='0') applicants, (SELECT count(*) from personal_details WHERE completed='1' AND status!='0') completed, (SELECT count(*) from personal_details WHERE verified='1' AND status !='0') verified, (SELECT count(*) from personal_details WHERE accepted='1' AND status !='0') accepted, (SELECT count(*) from personal_details WHERE denied='1' AND status !='0') denied")or die(mysql_error());

    $return = $this->returnjson($counter->rows);
    print_r($return); 
        
    }
    
    
    function get_all_applicants($json){
    $all_applicants = $this->db->query("SELECT *  from personal_details P INNER JOIN recruit R ON P.id=R.id ")or die(mysql_error());

        
    if($json==true){
        $return = $this->returnjson($all_applicants->rows);
        print_r($return);
        exit;
        }else{
        return $all_applicants->row;
        }
        
        
    } 
    
    
    
    
}
