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
	}

	public function email_exists($email) {
		$result = $this->db->query("SELECT COUNT(*) AS result FROM {$this->table} WHERE email='{$email}' LIMIT 1")or die(mysql_error());
    
    return $result->rows[0]['result'] == '1';
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
    $query = "SELECT * FROM {$this->attachments_list_table}";
    $res = $this->db->query($query) or die(mysql_error());
    return $res->rows;
  }

  public function load_countries() {
    $res = $this->db->query("SELECT * FROM {$this->country_table}") or die(mysql_error());
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
		return $res->rows[0];
	}

	public function registration_filled($id) {
		$result = $this->registration_details((int) $id);
		return $result[0]['filled'] == 1;
	}

	public function validate_user($email, $pwd) {
		$result = $this->get_user_by($email, 'email');

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
		$query = "UPDATE {$this->table} SET filled=1 WHERE id={$id}";
		$res = $this->db->query($query) or die(mysql_error());
		return $res->rows[0];
	}

    public function get_all_related_tables($json){
        $type_of_degree = $this->db->query("SELECT * FROM attachments_list WHERE status='1'")or die(mysql_error());
        $classification = $this->db->query("SELECT * FROM result_classifications WHERE status='1'")or die(mysql_error());
        //print_r($songs);
        if($json==true){
        $return['type_of_degree'] = $this->returnjson($type_of_degree->rows);
        $return['classifications'] = $this->returnjson($classification->rows);    
        print_r(json_encode($return));
        exit;
        }   
    }
    
    
   
}
