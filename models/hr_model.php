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
        return $all_applicants->rows;
        }
    } 
    
    function get_all_completed($json){
    $completed_applicants = $this->db->query("SELECT *  from personal_details P INNER JOIN recruit R ON P.id=R.id WHERE P.completed='1'")or die(mysql_error());
    if($json==true){
        $return = $this->returnjson($completed_applicants->rows);
        print_r($return);
        exit;
        }else{
        return $completed_applicants->rows;
        }
    } 

    function get_applicant_details($json){
    $id=$this->db->escape($_GET['id']);
    $details = $this->db->query("SELECT *  from personal_details P INNER JOIN recruit R ON P.id=R.id WHERE P.id='".$id."'")or die(mysql_error());
    if($json==true){
    $return = $this->returnjson($details->row);
    print_r($return);
    exit;    
    }else{
    return $details->row;   
    }
    }
    

    function get_applicants_other_details($json){
    $id=$this->db->escape($_GET['id']);
    $educational_qualifications = $this->db->query("SELECT * from educational_qualifications E WHERE E.recruit_id='".$id."'")or die(mysql_error()); 
    $professional_qualifications = $this->db->query("SELECT * from professional_qualifications P WHERE P.recruit_id='".$id."'")or die(mysql_error()); 
    $work_experience = $this->db->query("SELECT * from work_experience W WHERE W.recruit_id='".$id."'")or die(mysql_error());
    $attachments = $this->db->query("SELECT * from attachments A WHERE A.recruit_id='".$id."'")or die(mysql_error());
    if($json==true){
    $return['educational_qualifications'] = $this->returnjson($educational_qualifications->rows);
    $return['professional_qualifications'] = $this->returnjson($professional_qualifications->rows);
    $return['work_experience'] = $this->returnjson($work_experience->rows);
    $return['attachments'] = $this->returnjson($attachments->rows);
    print_r(json_encode($return));
    exit;    
    }

    }
    
    
}
