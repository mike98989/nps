<?php

class Recruit extends Controller {

	function __construct() {
		parent::__construct();
		$this->rootUrl = constant("URL") . 'recruit';
        
    $this->view->scripts = array('public/js/validateForms.js');
	}

	function done() {
	if (!Session::get('user_details')) {
			$this->redirect($this->rootUrl);
		}	
	$message='';
	$this->view->data['home'] = $this->rootUrl;
	$this->view->js = array('public/js/controllers/recruit/recruitRegistrationController.js'); 
    $this->view->render('recruit/done', $noinclude=false, $message);
    unset($_SESSION['loggedIn']);
	}
	
	function index() {
  	$message='';
  	//// IF THERE'S AN ALREADY INITIATED SESSION
  	if (Session::get('loggedIn')) {
  	  $this->redirect("{$this->rootUrl}/positions");
  	}

    //////////IF ITS A SIGNUP PROCESS
		if ($this->is_signup()) {

			///////////IF GOOGLE CAPTCHA IS TICKED, THE VISITOR IS A HUMAN
			if($_POST['g-recaptcha-response']!=''){
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$re_password = $_POST['re_password'];

			//////IF PASSWORDS ARE NOT THESAME
			if($password !=$re_password){
			$this->view->data['signupErrorMessage'] = 'Passwords are not the same!';
			$this->view->render('recruit/index', $noinclude=false, $message);
			die();
			}
			//////ELSE IF THE EMAIL ALREADY EXIST
			elseif ($this->model->email_exists($email)>0) {
				$this->view->data['signupErrorMessage'] = 'Email already used! Use the Login area to login.';
				$this->view->render('recruit/index', $noinclude=false, $message);
				die();
			}
			////////////ELSE INSERT INTO DB AND REDIRECT TO POSITONS PAGE
			else{
			$this->model->insert_user($fname, $lname, $email, $password);
			$this->login_user($email);
			$this->redirect("{$this->rootUrl}/positions");
			}
		}
		//////////ELSE THE VISITOR IS NOT A HUMAN
		else{      
			$this->view->data['signupErrorMessage'] = 'You are not Human!';
			$this->view->render('recruit/index', $noinclude=false, $message);
				die();
		}
	}
		///////////IF ITS A LOGIN PROCESS
		if ($this->is_login()) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			//////IF THE USERNAME OR PASSWORD IS NOT CORRECT
			if(!$this->model->validate_user($email, $password)) {
				$this->view->data['loginErrorMessage'] = 'Invalid email or password';
			} 
			//////////////ELSE DO THE REDIRECTING
			else {
				$user = $this->model->get_user_by($email, 'email');
				$this->login_user($email);
				if ($user['completed']) {
					$this->redirect("{$this->rootUrl}/done");
				}
				
				$this->redirect("{$this->rootUrl}/positions");
			}
		}

		$message='';
        $this->view->render('recruit/index', $noinclude=false, $message);
	}

	function positions(){
	$message='';

	if (!Session::get('loggedIn')) {
			$this->redirect($this->rootUrl);
		}
			
	if(isset($_POST['position_applied_for'])){
		if($_POST['position_applied_for']!=''){
		$this->model->save_position_applied();
		$update=$this->model->update_stage($_POST['recruit_id']);
		$this->redirect("{$this->rootUrl}/registration");
		}else{
		$this->view->data['msg'] = "Please select position";	
		}
	}	

	$this->view->js = array('public/js/controllers/recruit/recruitRegistrationController.js');      
    $this->view->render('recruit/positions', $noinclude=false, $message);
	}


	function registration() {
		if($_SESSION['user_details']['application_stage']<2){
		$this->redirect("{$this->rootUrl}/positions");	
		}	

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
			$update=$this->model->update_stage($id);
			$this->redirect("{$this->rootUrl}/qualifications");
		}

		$details = $this->model->registration_details($id);
		if($details!=''){
		foreach ($details as $key => $value) {
			$this->view->data["{$key}"] = $value;
		}
	}
    $this->view->data['countries'] = $this->model->load_countries();
    $this->view->data['lgas'] = $this->model->load_lgas();
    $this->view->data['states'] = array();
    $this->view->data['curLgas'] = array();
    $this->view->data['permLgas'] = array();

    $curState = $details['curState'] ?  $details['curState'] : 'Abia';
    $permState = $details['permState'] ?  $details['permState'] : 'Abia';
    

    for ($i=0; $i < count($this->view->data['lgas']); $i++) { 
      $state = $this->view->data['lgas'][$i]['state'];
      $lga = $this->view->data['lgas'][$i]['name'];

      if (!in_array($state, $this->view->data['states'])) {
        $this->view->data['states'][] = $state;
      }

      if ($state == $curState) {
        $this->view->data['curLgas'][] = $lga;
      }

      if ($state == $permState) {
        $this->view->data['permLgas'][] = $lga;
      }
    }

		$message='';
	$this->view->js = array('public/js/controllers/recruit/recruitRegistrationController.js');	
    $this->view->render('recruit/registration', $noinclude=false, $message);
	}

	function qualifications() {
		if($_SESSION['user_details']['application_stage']<3){
		$this->redirect("{$this->rootUrl}/positions");	
		}	

		if (!Session::get('loggedIn')) {
			$this->redirect($this->rootUrl);
		}

		$id = (int) Session::get('id');
		if(isset($_POST['form'])){
		if ($_POST['form'] == 'next') {
			$update=$this->model->update_stage($id);
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
		}

		$this->view->data['educationals'] = $this->model->load_educationals($id);
    $this->view->data['professionals'] = $this->model->load_professionals($id);
		$this->view->data['countries'] = $this->model->load_countries();

		$message='';
    $this->view->js = array('public/js/controllers/recruit/recruitRegistrationController.js');      
    $this->view->render('recruit/qualifications', $noinclude=false, $message);
	}

	function experience() {
		if($_SESSION['user_details']['application_stage']<4){
		$this->redirect("{$this->rootUrl}/positions");	
		}	
		if (!Session::get('loggedIn')) {
			$this->redirect($this->rootUrl);
		}

		$id = (int) Session::get('id');
		if(isset($_POST['form'])){
		if ($_POST['form'] == 'next') {
			$update=$this->model->update_stage($id);
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
		}
		$this->view->data['experience'] = $this->model->load_experience($id);

		$message='';
    $this->view->render('recruit/experience', $noinclude=false, $message);
	}

	function attachments() {
		if($_SESSION['user_details']['application_stage']<5){
		$this->redirect("{$this->rootUrl}/positions");	
		}
		if (!Session::get('loggedIn')) {
			$this->redirect($this->rootUrl);
		}

		$id = (int) Session::get('id');
		$size_limit = constant("UPLOAD_SIZE");
		$acceptable_types = array(
      'application/pdf',
      'application/msword', // .doc
      'application/vnd.openxmlformats-officedocument.wordprocessingml.document', // .docx
      'image/jpeg',
      'image/jpg',
      'image/png');
		$file_store = constant("UPLOAD_DIR");
		if(isset($_POST['form'])){
		if ($_POST['form'] == 'next') {
			$this->model->set_complete($id);
			//Session::destroy();
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
        $this->view->data['err_msg'] = 'File size is too large. File must be less than 2 megabytes.';

        $message='';
        
        //$this->view->render('recruit/attachments', $noinclude=false, $message);
        //return;
      }

      elseif(!in_array($_FILES['file']['type'], $acceptable_types) && (!empty($_FILES["file"]["type"]))) {
        $this->view->data['err_msg'] = 'Only PDF, JPG, PNG and Word files are accepted.';
        
        $message='';
         
        //$this->view->render('recruit/attachments', $noinclude=false, $message);
        //return;
      }
      else{
      if (!is_dir($file_store)) {
        mkdir($file_store, 0777, true);
      }

      $random_number = intval("0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9));
      $file_name = "{$id}_{$random_number}_{$_FILES['file']['name']}";
      $location = "{$file_store}/{$file_name}";
      $uploaded = move_uploaded_file($_FILES['file']['tmp_name'], $location);
      $file_type = strtolower(end(explode('.',$_FILES['file']['name'])));
      if ($uploaded) {
        $details = array(
          'title' => trim($_POST['title']),
          'path' => $file_name,
          'recruit_id' => $id,
          'file_type'=>$file_type
        );
				$this->model->insert_attachment($details);
			}
		
		}


		}

}
	$this->view->data['attachments_list'] = $this->model->load_attachments_list();
    $this->view->data['attachments'] = $this->model->load_attachments($id);
    $this->view->data['position'] = $this->model->load_chosen_position($_SESSION['user_details']['position_applied_for']);
    $count = count($this->view->data['attachments']);
    $passport_uploaded = false;
    $ssce_uploaded = false;
    $medical_cert = false;
    $cert_of_identity = false;
    $birth_cert=false;
    $fslc=false;

    for ($i=0; $i < $count; $i++) { 
      $title = $this->view->data['attachments'][$i]['title'];
      if ($title == 'Passport Photograph') {
        $passport_uploaded = true;
      }

      if ($title == 'Medical Fitness Certificate') {
        $medical_cert = true;
      }

      if ($title == 'First School Leaving Certificate') {
        $fslc = true;
      }

      if (strpos($title, 'SSCE') !== false) {
        $ssce_uploaded = true;
      }

      if ($title == 'Certificate of Identification/Origin') {
        $cert_of_identity = true;
      }
      if ($title == 'Birth Certificate/Age Declaration') {
        $birth_cert = true;
      }
    }

    $this->view->data['files_attached'] = $count >= 5 && $passport_uploaded && $ssce_uploaded && $medical_cert && $cert_of_identity && $birth_cert && $fslc;
		$message='';
	$this->view->js = array('public/js/controllers/recruit/recruitRegistrationController.js');
    $this->view->render('recruit/attachments', $noinclude=false, $message);
	}

	function handle_registration() {
		$details = array(
      'title' => $_POST['title'],
			'mname' => $_POST['mname'],
			'gender' => $_POST['gender'],
			'nationality' => $_POST['nationality'],
		      'dob' => $_POST['dob'],
		      'age'=>$_POST['age'],
			'height' => $_POST['height'],
			'nin' => $_POST['nin'],
			'phone' => $_POST['phone'],
			'permAddress' => $_POST['permAddress'],
			'permLga' => $_POST['permLga'],
			'permState' => $_POST['permState'],
			'curAddress' => $_POST['curAddress'],
			'curLga' => $_POST['curLga'],
      'curState' => $_POST['curState'],
			'prefAddress' => $_POST['prefAddress']
		);
		$this->model->save_details((int)Session::get('id'), $details);

	}

	function create_professional() {
		$details = array(
			'startdate' => $_POST['startdate'],
			'enddate' => $_POST['enddate'],
			'institution' => $_POST['institution'],
			'certificate_title' => $_POST['certificate_title'],
			'city' => $_POST['city'],
			'country' => $_POST['country'],
			//'reg_no' => $_POST['reg_no'],
			//'level' => $_POST['level'],
			//'grade' => $_POST['grade'],
			//'fos' => $_POST['fos'],
			//'highest_qual' => $_POST['highest_qual'],
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
			if ($user['completed']) {
			Session::set('user_details', $user);
			}else{
			Session::set('loggedIn', true);
			Session::set('id', $user['id']);
			Session::set('user_details', $user);	
			}
		}
	}  

	function print_ref(){
	if(isset($_GET['id'])){	
	if($_GET['id']==$_SESSION['user_details']['id']){	
	$message='';
	$this->view->data['details'] = $this->model->get_applicant_details($json=false);
	$this->view->data['passport'] = $this->model->get_applicant_photo($json=false);	
	$this->view->js = array('public/js/controllers/recruit/recruitRegistrationController.js');      
    $this->view->render('recruit/print_ref', $noinclude=true, $message);
    }else{
    echo "INVALID URL";	
    }
    }else{
    echo "INVALID URL";
    }	
	}

	function print_referee(){
	if(isset($_GET['id'])){	
	if($_GET['id']==$_SESSION['user_details']['id']){	
	$message='';
	$this->view->data['details'] = $this->model->get_applicant_details($json=false);
	$this->view->data['passport'] = $this->model->get_applicant_photo($json=false);	
	$this->view->js = array('public/js/controllers/recruit/recruitRegistrationController.js');      
    $this->view->render('recruit/print_referee', $noinclude=true, $message);
    }else{
    echo "INVALID URL";	
    }
    }else{
    echo "INVALID URL";
    }	
	}


	function info(){
	$message='';	
	$this->view->render('recruit/info', $noinclude=false, $message);	
	}


	function logout()
			{

			Session::destroy();
			die(header('location:'.URL.'./recruit'));
			exit;
			}  
}
