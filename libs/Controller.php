<?php
 
class Controller {
	

	function __construct() {
		
		//echo 'Main controller<br />';
		$this->view = new View();

	}
	
	public function loadModel($name) {
		
		$path = 'models/'.$name.'_model.php';

		if (file_exists($path)) {
			require 'models/'.$name.'_model.php';
			
			$modelName = $name . '_Model';
			
			$this->model = new $modelName();
			
		}		
	}

	public function redirect($url) {
		ob_start();
		header('Location: ' . $url);
		ob_end_flush();
		die();
	}

}