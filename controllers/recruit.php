<?php

class Recruit extends Controller {

	function __construct() {
		parent::__construct();
		$this->rootUrl = constant("URL") . 'recruit';
        
    $this->view->js = array('public/js/authenticationPage.js');
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

			$res = $this->model->email_exists($email);
			$email_exists = $res[0]['result'] == '1';

			if ($email_exists) {
				$this->view->data['signupErrorMessage'] = 'Email already used';
				$this->view->render('recruit/index', $noinclude=false, $message);
				die();
			}

			$this->model->insert_user($fname, $lname, $email, $password);
			Session::init();
			Session::set('loggedIn', true);
			Session::set('email', $email);
			Session::set('lname', $lname);
			Session::set('fname', $fname);
			$this->redirect("{$this->rootUrl}/registration");
		}

		if ($this->is_login()) {

		}

		$message='';
    $this->view->render('recruit/index', $noinclude=false, $message);
	}

	function registration() {
		if (!Session::get('loggedIn')) {
			$this->redirect($this->rootUrl);
		}

		$this->view->data['email'] = Session::get('email');
		$this->view->data['lname'] = Session::get('lname');
		$this->view->data['fname'] = Session::get('fname');

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

	function is_signup() {
		return isset($_POST['form']) && $_POST['form'] == 'signup';
	}

	function is_login() {
		return isset($_POST['form']) && $_POST['form'] == 'login';
	}
    
    
    
}
