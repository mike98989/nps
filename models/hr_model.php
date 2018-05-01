<?php

class hr_Model extends Model {

	function __construct() {
		parent::__construct();
            
	}
    
    
    function get_dashboard_counter($json){
    $counter = $this->db->query("SELECT (SELECT count(*) from recruit) applicants, (SELECT count(*) from recruit WHERE completed='1') completed, (SELECT count(*) from recruit WHERE verified =2) eligible, (SELECT count(*) from recruit WHERE accepted='1') accepted, (SELECT count(*) from recruit WHERE denied='1') denied, (SELECT count(*) from recruit WHERE position_category='1' AND completed !='0') superintendent_cadre, (SELECT count(*) from recruit WHERE position_category='2' AND completed !='0') inspectorate_cadre,  (SELECT count(*) from recruit WHERE position_category='3' AND completed !='0') assistant_cadre")or die(mysql_error());

    $return = $this->returnjson($counter->rows);
    print_r($return); 
        
    }
    
    
    function get_all_applicants($json){
    $all_applicants = $this->db->query("SELECT * from personal_details P INNER JOIN recruit R ON P.id=R.id ORDER BY P.id DESC")or die(mysql_error());
    if($json==true){
        $return = $this->returnjson($all_applicants->rows);
        print_r($return);
        exit;
        }else{
        return $all_applicants->rows;
        }
    } 
    
    function get_all_completed($json){
    $query=''; 
    $join2='';
    $select2=''; 
    $on2='';  
    if($_GET['state']!=''){
    $query=$query." AND P.permState='".$this->db->escape($_GET['state'])."'";    
    } 
    if($_GET['category']!=''){
    $query=$query." AND R.position_category=".$this->db->escape($_GET['category']);     
    }  
    if($_GET['age']!=''){
    $explode = explode('@',$this->db->escape($_GET['age']));  
    $query=$query." AND P.age ".$explode[0].$explode[1];    
    } 
    if($_GET['search_name']!=''){
    $query=$query." AND R.fname ='".$this->db->escape($_GET['search_name'])."' OR R.sname ='".$this->db->escape($_GET['search_name'])."'";    
    } 
    if($_GET['edu_qualification']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.type='".$this->db->escape($_GET['edu_qualification'])."'";    
    }
    if($_GET['edu_classification']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.classification='".$this->db->escape($_GET['edu_classification'])."'";   
    }
    if($_GET['edu_start_year']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.startdate='".$this->db->escape($_GET['edu_start_year'])."'";   
    }
    if($_GET['edu_end_year']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.enddate='".$this->db->escape($_GET['edu_end_year'])."'";   
    }
    $completed_applicants = $this->db->query("SELECT P.*,R.*,S.sub_title,S.position_id, P2.title".$select2." FROM personal_details P INNER JOIN recruit R INNER JOIN sub_positions S INNER JOIN positions P2 ".$join2." ON R.position_applied_for=S.sub_position_id  AND P.recruit_id=R.id AND P2.id=S.position_id".$ON2." WHERE R.completed='1' ".$query." ORDER BY P.recruit_id DESC")or die(mysql_error());
    if($json==true){
        $return = $this->returnjson($completed_applicants->rows);
        print_r($return);
        exit;
        }else{
        return $completed_applicants->rows;
        }
    } 

    function get_all_eligible($json){
    $query='';
    $join2='';
    $select2=''; 
    $on2='';     
    if($_GET['state']!=''){
    $query=$query." AND P.permState='".$this->db->escape($_GET['state'])."'";    
    } 
    if($_GET['category']!=''){
    $query=$query." AND R.position_category=".$this->db->escape($_GET['category']);     
    }  
    if($_GET['age']!=''){
    $explode = explode('@',$this->db->escape($_GET['age']));  
    $query=$query." AND P.age ".$explode[0].$explode[1];    
    } 
    if($_GET['search_name']!=''){
    $query=$query." AND R.fname ='".$this->db->escape($_GET['search_name'])."' OR R.sname ='".$this->db->escape($_GET['search_name'])."'";    
    }
    if($_GET['edu_qualification']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.type='".$this->db->escape($_GET['edu_qualification'])."'";    
    }
    if($_GET['edu_classification']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.classification='".$this->db->escape($_GET['edu_classification'])."'";   
    }
    if($_GET['edu_start_year']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.startdate='".$this->db->escape($_GET['edu_start_year'])."'";   
    }
    if($_GET['edu_end_year']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.enddate='".$this->db->escape($_GET['edu_end_year'])."'";   
    }     
    $eligible_applicants = $this->db->query("SELECT P.*,R.*,S.sub_title,S.position_id, P2.title".$select2."  FROM personal_details P INNER JOIN recruit R INNER JOIN sub_positions S INNER JOIN positions P2 ".$join2." ON R.position_applied_for=S.sub_position_id  AND P.recruit_id=R.id AND P2.id=S.position_id".$ON2." WHERE R.verified='2' ".$query." ORDER BY P.recruit_id DESC")or die(mysql_error());
    if($json==true){
        $return = $this->returnjson($eligible_applicants->rows);
        print_r($return);
        exit;
        }else{
        return $eligible_applicants->rows;
        }
    }


    function get_all_accepted($json){
    $query=''; 
    $join2='';
    $select2=''; 
    $on2='';   
    if($_GET['state']!=''){
    $query=$query." AND P.permState='".$this->db->escape($_GET['state'])."'";    
    } 
    if($_GET['category']!=''){
    $query=$query." AND R.position_category=".$this->db->escape($_GET['category']);     
    }  
    if($_GET['age']!=''){
    $explode = explode('@',$this->db->escape($_GET['age']));  
    $query=$query." AND P.age ".$explode[0].$explode[1];    
    } 
    if($_GET['search_name']!=''){
    $query=$query." AND R.fname ='".$this->db->escape($_GET['search_name'])."' OR R.sname ='".$this->db->escape($_GET['search_name'])."'";    
    }     
    if($_GET['edu_qualification']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.type='".$this->db->escape($_GET['edu_qualification'])."'";    
    }
    if($_GET['edu_classification']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.classification='".$this->db->escape($_GET['edu_classification'])."'";   
    }
    if($_GET['edu_start_year']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.startdate='".$this->db->escape($_GET['edu_start_year'])."'";   
    }
    if($_GET['edu_end_year']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.enddate='".$this->db->escape($_GET['edu_end_year'])."'";   
    } 

    $accepted_applicants = $this->db->query("SELECT P.*,R.*,S.sub_title,S.position_id, P2.title".$select2."  FROM personal_details P INNER JOIN recruit R INNER JOIN sub_positions S INNER JOIN positions P2 ".$join2." ON R.position_applied_for=S.sub_position_id  AND P.recruit_id=R.id AND P2.id=S.position_id".$ON2." WHERE R.accepted='1'".$query."  ORDER BY P.recruit_id DESC")or die(mysql_error());
    if($json==true){
        $return = $this->returnjson($accepted_applicants->rows);
        print_r($return);
        exit;
        }else{
        return $accepted_applicants->rows;
        }
    }

    function get_all_denied($json){
    $query=''; 
    $join2='';
    $select2=''; 
    $on2='';   
    if($_GET['state']!=''){
    $query=$query." AND P.permState='".$this->db->escape($_GET['state'])."'";    
    } 
    if($_GET['category']!=''){
    $query=$query." AND R.position_category=".$this->db->escape($_GET['category']);     
    }  
    if($_GET['age']!=''){
    $explode = explode('@',$this->db->escape($_GET['age']));  
    $query=$query." AND P.age ".$explode[0].$explode[1];    
    } 
    if($_GET['search_name']!=''){
    $query=$query." AND R.fname ='".$this->db->escape($_GET['search_name'])."' OR R.sname ='".$this->db->escape($_GET['search_name'])."'";    
    }     
    if($_GET['edu_qualification']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.type='".$this->db->escape($_GET['edu_qualification'])."'";    
    }
    if($_GET['edu_classification']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.classification='".$this->db->escape($_GET['edu_classification'])."'";   
    }
    if($_GET['edu_start_year']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.startdate='".$this->db->escape($_GET['edu_start_year'])."'";   
    }
    if($_GET['edu_end_year']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.enddate='".$this->db->escape($_GET['edu_end_year'])."'";   
    }     
    $denied_applicants = $this->db->query("SELECT P.*,R.*,S.sub_title,S.position_id, P2.title".$select2."  FROM personal_details P INNER JOIN recruit R INNER JOIN sub_positions S INNER JOIN positions P2 ".$join2." ON R.position_applied_for=S.sub_position_id  AND P.recruit_id=R.id AND P2.id=S.position_id".$ON2." WHERE R.denied='1'".$query." ORDER BY P.recruit_id DESC")or die(mysql_error());
    if($json==true){
        $return = $this->returnjson($denied_applicants->rows);
        print_r($return);
        exit;
        }else{
        return $denied_applicants->rows;
        }
    }


    function approve_applicants(){

    foreach($_POST['cg_approval'] as $post){
    $explode=explode('@',$post);
    $recruit_id=$explode[0];
    $cg_approval=$explode[1];
    //print_r($explode[1]);
    $update = $this->db->query("UPDATE recruit SET cg_approval ='".$cg_approval."' WHERE id='".$recruit_id."'")or die(mysql_error);
    }

    }

    function update_approved_list($json){
    $approval_value = $_GET['value'];
    $recruit_id = $_GET['recruit_id'];    
    $update = $this->db->query("UPDATE recruit SET cg_approval ='".$approval_value."' WHERE id='".$recruit_id."'")or die(mysql_error);    
    }

    function get_all_cg_approved($json){
    $query=''; 
    $join2='';
    $select2=''; 
    $on2='';   
    if($_GET['state']!=''){
    $query=$query." AND P.permState='".$this->db->escape($_GET['state'])."'";    
    } 
    if($_GET['category']!=''){
    $query=$query." AND R.position_category=".$this->db->escape($_GET['category']);     
    }  
    if($_GET['age']!=''){
    $explode = explode('@',$this->db->escape($_GET['age']));  
    $query=$query." AND P.age ".$explode[0].$explode[1];    
    } 
    if($_GET['search_name']!=''){
    $query=$query." AND R.fname ='".$this->db->escape($_GET['search_name'])."' OR R.sname ='".$this->db->escape($_GET['search_name'])."'";    
    }     
    if($_GET['edu_qualification']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.type='".$this->db->escape($_GET['edu_qualification'])."'";    
    }
    if($_GET['edu_classification']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.classification='".$this->db->escape($_GET['edu_classification'])."'";   
    }
    if($_GET['edu_start_year']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.startdate='".$this->db->escape($_GET['edu_start_year'])."'";   
    }
    if($_GET['edu_end_year']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.enddate='".$this->db->escape($_GET['edu_end_year'])."'";   
    }     
    $cg_approved_applicants = $this->db->query("SELECT P.*,R.*,S.sub_title,S.position_id, P2.title".$select2."  FROM personal_details P INNER JOIN recruit R INNER JOIN sub_positions S INNER JOIN positions P2 ".$join2." ON R.position_applied_for=S.sub_position_id  AND P.recruit_id=R.id AND P2.id=S.position_id".$ON2." WHERE R.cg_approval='1'".$query." ORDER BY P.recruit_id DESC")or die(mysql_error());
    if($json==true){
        $return = $this->returnjson($cg_approved_applicants->rows);
        print_r($return);
        exit;
        }else{
        return $cg_approved_applicants->rows;
        }
    }


    function get_all_unverified($json){
    $query=''; 
    $join2='';
    $select2=''; 
    $on2='';   
    if($_GET['state']!=''){
    $query=$query." AND P.permState='".$this->db->escape($_GET['state'])."'";    
    } 
    if($_GET['category']!=''){
    $query=$query." AND R.position_category=".$this->db->escape($_GET['category']);     
    }  
    if($_GET['age']!=''){
    $explode = explode('@',$this->db->escape($_GET['age']));  
    $query=$query." AND P.age ".$explode[0].$explode[1];    
    } 
    if($_GET['search_name']!=''){
    $query=$query." AND R.fname ='".$this->db->escape($_GET['search_name'])."' OR R.sname ='".$this->db->escape($_GET['search_name'])."'";    
    }     
    if($_GET['edu_qualification']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.type='".$this->db->escape($_GET['edu_qualification'])."'";    
    }
    if($_GET['edu_classification']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.classification='".$this->db->escape($_GET['edu_classification'])."'";   
    }
    if($_GET['edu_start_year']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.startdate='".$this->db->escape($_GET['edu_start_year'])."'";   
    }
    if($_GET['edu_end_year']!=''){
    $select2 = ', EQ.*';    
    $join2="INNER JOIN educational_qualifications EQ";
    $ON2=" AND P.recruit_id=EQ.recruit_id";
    $query=$query." AND EQ.enddate='".$this->db->escape($_GET['edu_end_year'])."'";   
    }     
    $unverified_applicants = $this->db->query("SELECT P.*,R.*,S.sub_title,S.position_id, P2.title".$select2."  FROM personal_details P INNER JOIN recruit R INNER JOIN sub_positions S INNER JOIN positions P2 ".$join2." ON R.position_applied_for=S.sub_position_id  AND P.recruit_id=R.id AND P2.id=S.position_id".$ON2." WHERE R.completed='1' AND verified='0'".$query." ORDER BY P.recruit_id DESC")or die(mysql_error());
    if($json==true){
        $return = $this->returnjson($unverified_applicants->rows);
        print_r($return);
        exit;
        }else{
        return $unverified_applicants->rows;
        }
    }




    function get_all_states($json){
    $states = $this->db->query("SELECT * FROM states ORDER BY state ASC")or die(mysql_error());
    if($json==true){
        $return = $this->returnjson($states->rows);
        print_r($return);
        exit;
        }else{
        return $states->rows;
        }
    }


    function get_applicant_details($json){
    $query='';    
    if(isset($_GET['eligible'])){
    $query = "AND R.verified='".$this->db->escape($_GET['eligible'])."'";     
    }    
    $id=$this->db->escape($_GET['id']);
    $details = $this->db->query("SELECT P.*,R.*,S.sub_title,S.position_id,S.hint, P2.title  from personal_details P INNER JOIN recruit R ON P.recruit_id=R.id INNER JOIN sub_positions S ON R.position_applied_for=S.sub_position_id INNER JOIN positions P2 ON S.position_id=P2.id WHERE P.recruit_id='".$id."' ".$query)or die(mysql_error());
    if($json==true){
    $return = $this->returnjson($details->row);
    print_r($return);
    exit;    
    }else{
    return $details->row;   
    }
    }

    function get_next_applicant($id){
    $id=$this->db->escape($id);   
    $query='';    
    if(isset($_GET['eligible'])){
    $query = "AND verified='".$this->db->escape($_GET['eligible'])."'";     
    }  
    $next  =  $this->db->query("SELECT (SELECT id FROM recruit WHERE id >$id AND completed='1' $query ORDER BY id ASC LIMIT 1) next, (SELECT id FROM recruit WHERE id <$id AND completed='1' $query ORDER BY id DESC LIMIT 1) prev")or die(mysql_error()); 
    return $next->row;  
    }
    

    function get_next_eligible_applicant($id){
    $id=$this->db->escape($id);   
    $next  =  $this->db->query("SELECT (SELECT id FROM recruit WHERE id > $id AND completed='1' AND verified='2' $query ORDER BY id ASC LIMIT 1) next, (SELECT id FROM recruit WHERE id < $id AND completed='1' AND verified='2' ORDER BY id DESC LIMIT 1) prev")or die(mysql_error()); 
    return $next->row;  
    }
    

    function set_applicant_status($json){
    $status = $this->db->escape($_GET['status']);
    $id=$this->db->escape($_GET['id']);
    $update = $this->db->query("UPDATE recruit SET  verified='".$status."' WHERE id='".$id."'")or die(mysql_error());    
    } 


     function set_applicant_approval($json){
    $approval = $this->db->escape($_GET['approval']);
    $id=$this->db->escape($_GET['id']);
    if($approval=='1'){
    $update = $this->db->query("UPDATE recruit SET denied='0',  accepted='1' WHERE id='".$id."'")or die(mysql_error());}
    elseif($approval=='0'){
    $update = $this->db->query("UPDATE recruit SET  accepted='0', denied='1' WHERE id='".$id."'")or die(mysql_error());}

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

/*
    public function get_all_search_related_tables($json){
        $type_of_degree = $this->db->query("SELECT * FROM attachments_list WHERE status='1' ORDER BY degree ASC ")or die(mysql_error());
        $classification = $this->db->query("SELECT * FROM result_classifications WHERE status='1'")or die(mysql_error());
        
        //print_r($songs);
        if($json==true){
        $return['type_of_degree'] = $this->returnjson($type_of_degree->rows);
        $return['classifications'] = $this->returnjson($classification->rows);
        $return['countries'] = $this->returnjson($this->load_countries());  
        print_r(json_encode($return));
        exit;
        }   
    }
    */
    
}
