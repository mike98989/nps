<?php

class Recruit extends Controller {

	function __construct() {
		parent::__construct();
		$this->rootUrl = constant("URL") . 'recruit';
        
    $this->view->scripts = array('public/js/validateForms.js');
	}

	function done() {
		$message='';
		$this->view->data['home'] = $this->rootUrl;
    $this->view->render('recruit/done', $noinclude=false, $message);
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
				$user = $this->model->get_user_by($email, 'email');
				if ($user['filled']) {
					$this->redirect("{$this->rootUrl}/done");
				}
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
    $this->view->data['countries'] = $this->model->load_countries();

    $this->view->data['lgas'] = $this->model->load_lgas();
    $this->view->data['states'] = array();
    for ($i=0; $i < count($this->view->data['lgas']); $i++) { 
      $state = $this->view->data['lgas'][$i]['state'];
      if (!in_array($state, $this->view->data['states']))
      $this->view->data['states'][] = $state;
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
		$this->view->data['countries'] = $this->model->load_countries();

		$message='';
    $this->view->js = array('public/js/controllers/recruit/recruitRegistrationController.js');      
    $this->view->render('recruit/qualifications', $noinclude=false, $message);
	}

	function experience() {
		if (!Session::get('loggedIn')) {
			$this->redirect($this->rootUrl);
		}

		$id = (int) Session::get('id');

		if ($_POST['form'] == 'next') {
			$this->redirect("{$this->rootUrl}/attachments");
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

	function attachments() {
		if (!Session::get('loggedIn')) {
			$this->redirect($this->rootUrl);
		}

		$id = (int) Session::get('id');
		$size_limit = constant("UPLOAD_SIZE");
		$acceptable_types = constant("UPLOAD_TYPES");
		$file_store = constant("UPLOAD_DIR");

		if ($_POST['form'] == 'next') {
			$this->model->set_complete($id);
			Session::destroy();
			$this->redirect("{$this->rootUrl}/done");
		}

		if ($_POST['form'] == 'back') {
			$this->redirect("{$this->rootUrl}/experience");
		}

		if ($_POST['form'] == 'delete_attachment') {
      $path = $this->model->get_attachment_path((int) $_POST['id'], $id);

      if ($path) {
        unlink("{$file_store}/{$path}");
        $this->model->delete_attachment((int) $_POST['id'], $id);
      }
    }

    if ($_POST['form'] == 'attachment') {
      if(($_FILES['file']['size'] >= $size_limit) || ($_FILES["file"]["size"] == 0)) {
        $this->view->data['err_msg'] = 'File must be less than 2 megabytes.';

        $message='';
        $this->view->render('recruit/attachments', $noinclude=false, $message);
        return;
      }

      if(!in_array($_FILES['file']['type'], $acceptable_types) && (!empty($_FILES["file"]["type"]))) {
        $this->view->data['err_msg'] = 'Only PDF, JPG, PNG and Word files are accepted.';
        
        $message='';
        $this->view->render('recruit/attachments', $noinclude=false, $message);
        return;
      }

      if (!is_dir($file_store)) {
        mkdir($file_store, 0777, true);
      }

      $random_number = intval("0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9));
      $file_name = "{$id}_{$random_number}_{$_FILES['file']['name']}";
      $location = "{$file_store}/{$file_name}";
      $uploaded = move_uploaded_file($_FILES['file']['tmp_name'], $location);
      if ($uploaded) {
        $details = array(
          'title' => trim($_POST['title']),
          'path' => $file_name,
          'recruit_id' => $id
        );
				$this->model->insert_attachment($details);
			}
		}

		$this->view->data['attachments'] = $this->model->load_attachments($id);
		$this->view->data['attachments_list'] = $this->model->load_attachments_list();
		$message='';
    $this->view->render('recruit/attachments', $noinclude=false, $message);
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
			'course_of_study'=>$_POST['course_of_study'],
            'type' => $_POST['type'],
            'classification' => $_POST['classification'],
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
