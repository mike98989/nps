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

		$id = (int) Session::get('id');

		$current_user = $this->model->get_user_by($id);
		if ($current_user) {
			$this->view->data['email'] = $current_user['email'];
			$this->view->data['sname'] = $current_user['sname'];
			$this->view->data['fname'] = $current_user['fname'];		
		}

		if (isset($_POST['email'])) {
			$this->handle_registration();
			$this->redirect("{$this->rootUrl}/qualifications");
		}

		$details = $this->model->registration_details($id);
		foreach ($details as $key => $value) {
			$this->view->data["{$key}"] = $value;
		}

		$message='';
    $this->view->render('recruit/registration', $noinclude=false, $message);
	}

	function qualifications() {
		if (!Session::get('loggedIn')) {
			$this->redirect($this->rootUrl);
		}

		$id = (int) Session::get('id');

		if ($_POST['form'] == 'next') {
			$this->redirect("{$this->rootUrl}/experience");
		}

		if ($_POST['form'] == 'back') {
			$this->redirect("{$this->rootUrl}/registration");
		}

		if ($_POST['form'] == 'professional') {
			$this->create_professional();
		}

		if ($_POST['form'] == 'educational') {
			$this->create_qualification();
		}

		if ($_POST['form'] == 'delete_professional') {
			$this->delete_professional();
		}

		if ($_POST['form'] == 'delete_educational') {
			$this->delete_qualification();
		}

		$this->view->data['educationals'] = $this->model->load_educationals($id);
		$this->view->data['professionals'] = $this->model->load_professionals($id);

		$message='';
    $this->view->render('recruit/qualifications', $noinclude=false, $message);
	}

	function experience() {
		if (!Session::get('loggedIn')) {
			$this->redirect($this->rootUrl);
		}

		$id = (int) Session::get('id');

		if ($_POST['form'] == 'next') {
			$this->redirect("{$this->rootUrl}/experience");
		}

		if ($_POST['form'] == 'back') {
			$this->redirect("{$this->rootUrl}/qualifications");
		}

		if ($_POST['form'] == 'delete_experience') {
			$this->delete_experience();
		}

		if ($_POST['form'] == 'experience') {
			$this->create_experience();
		}

		$this->view->data['experience'] = $this->model->load_experience($id);
		
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
			'curState' => $curState
		);
		$this->model->save_details((int)Session::get('id'), $details);
	}

	function create_professional() {
		$details = array(
			'startdate' => $_POST['startdate'],
			'enddate' => $_POST['enddate'],
			'institution' => $_POST['institution'],
			'qualification' => $_POST['qualification'],
			'city' => $_POST['city'],
			'country' => $_POST['country'],
			'reg_no' => $_POST['reg_no'],
			'level' => $_POST['level'],
			'grade' => $_POST['grade'],
			'fos' => $_POST['fos'],
			'highest_qual' => $_POST['highest_qual'],
			'recruit_id' => ((int) Session::get('id'))
		);
		$this->model->insert_professional($details);
	}

	function delete_professional() {
		$this->model->delete_professional((int) $_POST['id'], (int) Session::get('id'));
	}

	function create_qualification() {
		$details = array(
			'startdate' => $_POST['startdate'],
			'enddate' => $_POST['enddate'],
			'institution' => $_POST['institution'],
			'qualification' => $_POST['qualification'],
			'city' => $_POST['city'],
			'country' => $_POST['country'],
			'recruit_id' => ((int) Session::get('id'))
		);
		$this->model->insert_qualification($details);
	}

	function delete_qualification() {
		$this->model->delete_qualification((int) $_POST['id'], (int) Session::get('id'));
	}

	function create_experience() {
		$details = array(
			'startdate' => $_POST['startdate'],
			'enddate' => $_POST['enddate'],
			'organization' => $_POST['organization'],
			'role' => $_POST['role'],
			'recruit_id' => ((int) Session::get('id'))
		);
		$this->model->insert_experience($details);
	}

	function delete_experience() {
		$this->model->delete_experience((int) $_POST['id'], (int) Session::get('id'));
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
