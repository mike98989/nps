<?php

class Bootstrap {

	function __construct() {
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);

		//print_r($url);

		if (empty($url[0])) {
			require 'controllers/index.php';
			$controller = new Index();
			$controller->loadModel('index');
			$controller->index();
			
			return false;
		}
        $arbitraryPage=array('function_of_nps','history_of_nps','mission_vision','roll_of_honours','operations','admin_supplies','inmates_training','finance_budget','works_logistics','health_social_welfare','admin_structure','contact_us','statistics','newspress_1','newspress_2','command_structure','prison_locations');
        
        if(in_array($url[0],$arbitraryPage)){
            require 'controllers/index.php';
			$controller = new Index();
			$controller->load_index_controllers($url);
            //$controller->loadModel('index');
			return false;     
        }
		/*
        
        if(($url[0]=='create')||($url[0]=='invoices')||($url[0]=='invoice_print')||($url[0]=='admin')||($url[0]=='profile')||($url[0]=='customers')){
            //echo $url[0];
            require 'controllers/index.php';
			$controller = new Index();
			$controller->$url[0]();
            //echo $controller->loadModel('index');
			return false;

        }
        */

		$file = 'controllers/' . $url[0] . '.php';
		if (file_exists($file)) {

			require $file;
		}




		elseif (is_numeric($url[0])) {
			header('location: ./registration?ref='.$url[0]);
		}

		else {
			$this->error();
		}

		$controller = new $url[0];
		$controller->loadModel($url[0]);
		//echo $url[0];
		// calling methods
		if (isset($url[2])) {

			if (method_exists($controller, $url[1])) {
				$controller->{$url[1]}($url[2]);
			} else {
				$this->error();
			}
		} else {
			if (isset($url[1])) {
				if (method_exists($controller, $url[1])) {
					$controller->{$url[1]}();
				} else {
					$this->error();
				}
			} else {

				$controller->index();
			}
		}


	}

	function error() {
		require 'controllers/error.php';
		$controller = new Error();
		$controller->index();
		return false;
	}

}
