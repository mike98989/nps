<?php

class recruit_Model extends Model {

	function __construct() {
		parent::__construct();
    $this->table = 'recruit';  
	}

	public function email_exists($email) {
		$result = $this->db->query("SELECT COUNT(*) AS result FROM {$this->table} WHERE email='{$email}' LIMIT 1")or die(mysql_error());
    
    return $result->rows[0]['result'] == '1';
	}

	public function insert_user($fname, $sname, $email, $pwd) {
		$pwd_hash = password_hash($pwd, PASSWORD_DEFAULT);
		$query = "INSERT INTO {$this->table}(fname, sname, email, password) VALUES ('{$fname}', '{$sname}', '{$email}', '{$pwd_hash}')";
		
		return $this->db->query($query)->rows;
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

		return $this->db->query($query)->rows[0];
	}

   
}
