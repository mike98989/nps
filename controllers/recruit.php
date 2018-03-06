<?php

class Recruit extends Controller {

	function __construct() {
		parent::__construct();
		$this->rootUrl = constant("URL") . 'recruit';
        
    $this->view->scripts = array('public/js/validateForms.js');
	}

	function index() {
		if (Session::get('loggedIn')) {
			$this->redirect("{$this->rootUrl}/registration");
		}

		if ($this->is_signup()) {
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$password = $_POST['password'];

			if ($this->model->email_exists($email)) {
				$this->view->data['signupErrorMessage'] = 'Email already used';
				$this->view->render('recruit/index', $noinclude=false, $message);
				die();
			}

			$this->model->insert_user($fname, $lname, $email, $password);
			$this->login_user($email);
			$this->redirect("{$this->rootUrl}/registration");
		}

		if ($this->is_login()) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			if(!$this->model->validate_user($email, $password)) {
				$this->view->data['loginErrorMessage'] = 'Invalid email or password';
			} else {
				$this->login_user($email);
				$this->redirect("{$this->rootUrl}/registration");
			}
		}

		$message='';
    $this->view->render('recruit/index', $noinclude=false, $message);
	}

	function registration() {
		if (!Session::get('loggedIn')) {
			$this->redirect($this->rootUrl);
		}

		$current_user = $this->model->get_user_by((int)Session::get('id'));
		if ($current_user) {
			$this->view->data['email'] = $current_user['email'];
			$this->view->data['sname'] = $current_user['sname'];
			$this->view->data['fname'] = $current_user['fname'];		
		}

		if (isset($_POST['email'])) {
			$this->handle_registration();
		}

		if ($this->model->registration_filled((int) Session::get('id'))) {
			$this->redirect("{$this->rootUrl}/qualifications");
		}

		$details = $this->model->registration_details((int) Session::get('id'));
		foreach ($details as $key => $value) {
			$this->view->data["{$key}"] = $value;
		}

		$message='';
    $this->view->render('recruit/registration', $noinclude=false, $message);
	}

	function qualifications() {
		$message='';
    $this->view->render('recruit/qualifications', $noinclude=false, $message);
	}

	function experience() {
		$message='';
    $this->view->render('recruit/experience', $noinclude=false, $message);
	}

	function handle_registration() {
		$title = $_POST['title'];
		$mname = $_POST['mname'];
		$gender = $_POST['gender'];
		$nationality = $_POST['nationality'];
		$dob = $_POST['dob'];
		$height = $_POST['height'];
		$nin = $_POST['nin'];
		$phone = $_POST['phone'];
		$permAddress = $_POST['permAddress'];
		$permStreet = $_POST['permStreet'];
		$permLga = $_POST['permLga'];
		$permState = $_POST['permState'];
		$curAddress = $_POST['curAddress'];
		$curStreet = $_POST['curStreet'];
		$curLga = $_POST['curLga'];
		$curState = $_POST['curState'];
		$prefAddress = $_POST['prefAddress'];

		$filled = $title && $gender && $nationality && $dob && $nin && $phone &&
			$permAddress &&	$permStreet && $permLga && $permState &&
			$curAddress &&	$curStreet && $curLga && $curState;

		$details = array(
			'title' => $title,
			'gender' => $gender,
			'nationality' => $nationality,
			'dob' => $dob,
			'nin' => $nin,
			'phone' => $phone,
			'permAddress' => $permAddress,
			'permStreet' => $permStreet,
			'permLga' => $permLga,
			'permState' => $permState,
			'curAddress' => $curAddress,
			'curStreet' => $curStreet,
			'curLga' => $curLga,
			'curState' => $curState,
			'filled' => $filled
		);
		$this->model->save_details((int)Session::get('id'), $details);
	}

	function is_signup() {
		return isset($_POST['form']) && $_POST['form'] == 'signup';
	}

	function is_login() {
		return isset($_POST['form']) && $_POST['form'] == 'login';
	}

	function login_user($email) {
		$user = $this->model->get_user_by($email, 'email');
		
		if ($user) {
			Session::init();
			Session::set('loggedIn', true);
			Session::set('id', $user['id']);
		}
	}
    
    
    
}
