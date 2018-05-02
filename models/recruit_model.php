<?php

class recruit_Model extends Model {

	function __construct() {
		parent::__construct();
    $this->table = 'recruit';
    $this->personal_details_table = 'personal_details';
    $this->edu_qualifactions_table = 'educational_qualifications';
    $this->prof_qualifactions_table = 'professional_qualifications';
    $this->experience_table = 'work_experience';
    $this->attachment_table = 'attachments';
    $this->attachments_list_table = 'attachments_list';
    $this->country_table = 'countries';

    $this->lga_table = 'lgas';

	}

	public function email_exists($email) {
		$result = $this->db->query("SELECT COUNT(*) AS result FROM {$this->table} WHERE email='{$email}' LIMIT 1")or die(mysql_error());
    
    return $result->rows[0]['result'];
	}

	public function insert_user($fname, $sname, $email, $pwd) {
		$pwd_hash = password_hash($pwd, PASSWORD_DEFAULT);
		$query = "INSERT INTO {$this->table}(fname, sname, email, password) VALUES ('{$fname}', '{$sname}', '{$email}', '{$pwd_hash}')";
		
		$res = $this->db->query($query) or die(mysql_error());
		return $res->rows;
	}

	public function load_educationals($id) {
		$query = "SELECT * FROM {$this->edu_qualifactions_table} WHERE recruit_id={$id}";
		$res = $this->db->query($query) or die(mysql_error());
		return $res->rows;
	}

	public function load_professionals($id) {
		$query = "SELECT * FROM {$this->prof_qualifactions_table} WHERE recruit_id={$id}";
		$res = $this->db->query($query) or die(mysql_error());
		return $res->rows;
	}

	public function load_experience($id) {
		$query = "SELECT * FROM {$this->experience_table} WHERE recruit_id={$id}";
		$res = $this->db->query($query) or die(mysql_error());
		return $res->rows;
	}

	public function load_attachments($id) {
		$query = "SELECT * FROM {$this->attachment_table} WHERE recruit_id={$id}";
		$res = $this->db->query($query) or die(mysql_error());
		return $res->rows;
	}

  public function load_attachments_list() {
    $query = "SELECT * FROM {$this->attachments_list_table} ORDER BY degree ASC";
    $res = $this->db->query($query) or die(mysql_error());
    return $res->rows;
  }

  public function load_countries() {
    $res = $this->db->query("SELECT * FROM {$this->country_table}") or die(mysql_error());
    return $res->rows;
  }

  public function load_lgas() {
    $res = $this->db->query("SELECT * FROM {$this->lga_table}") or die(mysql_error());
    return $res->rows;
  }


	public function save_details($id, $details) {
		$query = "SELECT COUNT(*) AS result FROM {$this->personal_details_table} WHERE recruit_id={$id}";
		$result = $this->db->query($query)->rows;

		if ($result[0]['result']) {
			return $this->update_personal_details($id, $details);
		} else {
			$details['recruit_id'] = $id;
			return $this->insert_personal_details($details);
		}

	}

	function insert_personal_details($details) {
		$columns = "";
		$values = "";
		foreach ($details as $column => $value) {
			$columns .= "{$column},";
			if ($column == 'recruit_id') {
				$values .= "{$value},";
			} else {
				$values .= "'{$value}',";
			}
		}
		$columns = substr($columns, 0, -1);
		$values = substr($values, 0, -1);

		$query = "INSERT INTO {$this->personal_details_table} ({$columns}) VALUES ({$values})";
		$res = $this->db->query($query) or die(mysql_error());

		$user_details= $this->db->query("SELECT * FROM personal_details INNER JOIN recruit ON personal_details.recruit_id=recruit.id WHERE personal_details.recruit_id='".$details['recruit_id']."'")or die(mysql_error());
			session_start();
			$_SESSION['user_details']=$user_details->row;


		return $res->rows[0];
	}

	function update_personal_details($id, $details) {
		$query = "UPDATE {$this->personal_details_table} SET ";
		foreach ($details as $column => $value) {
			$query .= "{$column} = '{$value}',";
		}
		$query = substr($query, 0, -1);
		$query .= " WHERE recruit_id={$id}";

		$res = $this->db->query($query) or die(mysql_error());

		$user_details= $this->db->query("SELECT * FROM personal_details INNER JOIN recruit ON personal_details.recruit_id=recruit.id WHERE personal_details.recruit_id='".$id."'")or die(mysql_error());
			session_start();
			$_SESSION['user_details']=$user_details->row;


		return $res->rows[0];
	}

	public function insert_qualification($details) {
		$columns = "";
		$values = "";
		foreach ($details as $column => $value) {
			$columns .= "{$column},";
			if ($column == 'recruit_id') {
				$values .= "{$value},";
			} else {
				$values .= "'{$value}',";
			}
		}
		$columns = substr($columns, 0, -1);
		$values = substr($values, 0, -1);

		$query = "INSERT INTO {$this->edu_qualifactions_table} ({$columns}) VALUES ({$values})";
		$res = $this->db->query($query) or die(mysql_error());
		return $res->rows[0];
	}

	public function delete_qualification($id, $recruit_id) {
		$query = "DELETE FROM {$this->edu_qualifactions_table} WHERE id={$id} AND recruit_id={$recruit_id}";
		$res = $this->db->query($query) or die(mysql_error());
		return $res->rows[0];
	}

	function insert_professional($details) {
		$columns = "";
		$values = "";
		foreach ($details as $column => $value) {
			$columns .= "{$column},";
			if ($column == 'recruit_id') {
				$values .= "{$value},";
			} else {
				$values .= "'{$value}',";
			}
		}
		$columns = substr($columns, 0, -1);
		$values = substr($values, 0, -1);

		$query = "INSERT INTO {$this->prof_qualifactions_table} ({$columns}) VALUES ({$values})";
		$res = $this->db->query($query) or die(mysql_error());
		return $res->rows[0];
	}

	public function delete_professional($id, $recruit_id) {
		$query = "DELETE FROM {$this->prof_qualifactions_table} WHERE id={$id} AND recruit_id={$recruit_id}";
		$res = $this->db->query($query) or die(mysql_error());
		return $res->rows[0];
	}

	public function insert_experience($details) {
		$columns = "";
		$values = "";
		foreach ($details as $column => $value) {
			$columns .= "{$column},";
			if ($column == 'recruit_id') {
				$values .= "{$value},";
			} else {
				$values .= "'{$value}',";
			}
		}
		$columns = substr($columns, 0, -1);
		$values = substr($values, 0, -1);

		$query = "INSERT INTO {$this->experience_table} ({$columns}) VALUES ({$values})";
		$res = $this->db->query($query) or die(mysql_error());
		return $res->rows[0];
	}

	public function delete_experience($id, $recruit_id) {
		$query = "DELETE FROM {$this->experience_table} WHERE id={$id} AND recruit_id={$recruit_id}";
		$res = $this->db->query($query) or die(mysql_error());
		return $res->rows[0];
	}

	public function insert_attachment($details) {
		$columns = "";
		$values = "";
		foreach ($details as $column => $value) {
			$columns .= "{$column},";
			if ($column == 'recruit_id') {
				$values .= "{$value},";
			} else {
				$values .= "'{$value}',";
			}
		}
		$columns = substr($columns, 0, -1);
		$values = substr($values, 0, -1);

		$query = "INSERT INTO {$this->attachment_table} ({$columns}) VALUES ({$values})";
    	$res = $this->db->query($query) or die(mysql_error());
		return $res->rows[0];
	}

	function delete_attachment($id, $recruit_id) {
		$query = "DELETE FROM {$this->attachment_table} WHERE id={$id} AND recruit_id={$recruit_id}";
		$res = $this->db->query($query) or die(mysql_error());
		return $res->rows[0];
	}

	function get_attachment_path($id, $recruit_id) {
		$query = "SELECT path FROM {$this->attachment_table} WHERE id={$id} AND recruit_id={$recruit_id}";
		$res = $this->db->query($query) or die(mysql_error());
		return $res->rows[0]['path'];
	}

	public function registration_details($id) {
		$query = "SELECT * FROM {$this->personal_details_table} WHERE recruit_id={$id}";
		$res = $this->db->query($query) or die(mysql_error());
		if($res->num_rows!=0){
		return $res->rows[0];
		}
	}

	public function registration_filled($id) {
		$result = $this->registration_details((int) $id);
		return $result[0]['filled'] == 1;
	}

	public function validate_user($email, $pwd) {
		$result = $this->get_user_by($email, 'email');
		/* UPDATING LGA TABLE WITH STATE SHORT CODE
		echo $update = $this->db->query("UPDATE lgas SET state_short_code='SOK' WHERE state='Sokoto'");
		*/
		
		if(!$result) {
			return false;
		}

		return password_verify($pwd, $result['password']);
	}

	public function get_user_by($param, $which_param = 'id') {
		if ($which_param == 'id') {
			$query = "SELECT * FROM {$this->table} WHERE id='{$param}'";
		}

		if ($which_param == 'email') {
			$query = "SELECT * FROM {$this->table} WHERE email='{$param}'";
		}

		$res = $this->db->query($query) or die(mysql_error());
		return $res->rows[0];
	}

	function set_complete($id) {
	$user_details= $this->db->query("SELECT * FROM personal_details INNER JOIN recruit INNER JOIN lgas INNER JOIN positions INNER JOIN sub_positions ON personal_details.recruit_id=recruit.id AND personal_details.permState=lgas.state AND recruit.position_category=positions.id AND recruit.position_applied_for=sub_positions.sub_position_id WHERE personal_details.recruit_id='".$id."'")or die(mysql_error());
	//echo $user_details->row['sub_position_id'];
	//print_r($user_details->row);exit;
	$rand=rand(10000000,100000000);

	$reference = "NPS/".$user_details->row['state_short_code']."/".$user_details->row['short_code'].$user_details->row['sub_position_id']."/".$rand;
	$_SESSION['user_details']['reference']=$reference;	
    $query = "UPDATE recruit SET completed=1, reference ='".$reference."' WHERE id={$id}";
		$res = $this->db->query($query) or die(mysql_error());
		return $res->rows[0];

	}

    public function get_all_related_tables($json){
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

    function get_positions(){
    $positions = $this->db->query("SELECT * FROM positions WHERE status='1'")or die(mysql_error());	
    $sub_positions = $this->db->query("SELECT * FROM sub_positions WHERE status='1'")or die(mysql_error());	
    $user_id=$this->db->escape($_GET['id']);
    $user_details = $this->db->query("SELECT * FROM recruit WHERE id='".$user_id."'")or die(mysql_error());	
    $return['positions'] = $this->returnjson($positions->rows);
    $return['sub_positions'] = $this->returnjson($sub_positions->rows);
    $return['user_details'] = $this->returnjson($user_details->row);
   	print_r(json_encode($return));
   	exit;
    }


      function get_applicant_details($json){
    $query='';        
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

    function get_applicant_photo($json){
    $id=$this->db->escape($_GET['id']);
    $photo = $this->db->query("SELECT * FROM attachments WHERE title='Passport Photograph' AND recruit_id='".$id."'")or die(mysql_error());
    if($json==true){
    $return = $this->returnjson($photo->row);
    print_r($return);
    exit;    
    }else{
    return $photo->row;   
    }	

    }

    function load_chosen_position($position_id){
    $positions = $this->db->query("SELECT * FROM sub_positions INNER JOIN positions ON sub_positions.position_id=positions.id WHERE sub_positions.sub_position_id='".$position_id."'")or die(mysql_error());
    return $positions->row;
    }

    function save_position_applied(){
     if(isset($_POST['position_applied_for'])){
         
    $exclude = array('recruit_id','application_stage');
    foreach(array_keys($_POST) as $key ) {
    if(!in_array($key, $exclude) ) {
    $keys[] = $fields[] = "`$key`";
    $data[] = $values[] = "'" .$this->db->escape($_POST[$key])."'";
    }
    }
    $fields = implode(",", $fields);
    $values = implode(",", $values);

    $sets = array();
     $combine = array_combine($keys, $data);

     foreach($combine as $column => $value){
      $sets[] = "" .$column. " = ".$value." ";
     }
     $whereSQL = "WHERE id='".$this->db->escape($_POST['recruit_id'])."'";
    $message="true";
     $sql ="UPDATE recruit" . " SET " .implode("," ,$sets) . $whereSQL;
     if($this->db->query($sql)) {
     $msg = $message;
     }else {
     $msg = mysql_error();
     }
     return $msg;
    

 	}

    }

    function update_stage($id){
    $update = $this->db->query("UPDATE recruit SET application_stage='".$_POST['application_stage']."' WHERE id='".$id."'")or die(mysql_error());
    $_SESSION['user_details']['application_stage']=$_POST['application_stage'];
    }
    
    
   
}
