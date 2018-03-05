<?php

class recruit_Model extends Model {

	function __construct() {
		parent::__construct();
    $this->table = 'recruit';  
	}

	public function email_exists($email) {
		$result = $this->db->query("SELECT COUNT(*) AS result FROM {$this->table} WHERE email='{$email}' LIMIT 1")or die(mysql_error());
    return $result->rows;     
	}

	public function insert_user($fname, $sname, $email, $pwd) {
		$pwd_hash = password_hash($pwd, PASSWORD_DEFAULT);
		$query = "INSERT INTO {$this->table}(fname, sname, email, password) VALUES ('{$fname}', '{$sname}', '{$email}', '{$pwd_hash}')";
		$result = $this->db->query($query);
		return $result->rows;
	}

   
}
