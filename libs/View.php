<?php

class View {
public $data = array();
	function __construct() {
        
        error_reporting( E_ERROR | E_PARSE | E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_COMPILE_WARNING );
        Session::init();
		//echo 'this is the view';
        $this->view = new \stdClass();
		//if(Session::get('loggedIn')){
		$this->view->logged = Session::get('loggedIn');
		$this->view->loggedType = Session::get('loggedType');
		//}
         
	   }

    
	public function render($name, $noInclude, $message)
	{
              
		if ($noInclude == true) {
			$js=null;    
            if(!empty($this->js)){   
            $js=$this->js;    
            }
			extract($this->data);
			require 'views/snipets/headerref.php';
			require 'views/' .$name. '.php';
			require 'views/snipets/footerref.php';
		}

		else {
			extract($this->data);
			$url=explode('/',$_SERVER['REQUEST_URI']);
			
            if($url[1]=='nps'){
            array_splice($url, 1, 1);    
            }
            ////IF THE USER IS AN ADMIN
            if(($this->view->loggedType == 'admin')&&($url[1]=='admindashboard')){
			//echo 'yessss';
			}
            
            
            
            ////IF THE USER IS HR
            elseif(($this->view->loggedType == 'hr')&&($url[1]=='hr')){
			  /////ASSIGN JAVASCRIPT   
            $js=null;    
            if(!empty($this->js)){   
            $js=$this->js;    
            }
                
                
			require 'views/hr/snipets/headerref.php';
			require 'views/hr/snipets/header.php';
			require 'views/' . $name . '.php';           
			require 'views/hr/snipets/footer.php';     
			require 'views/hr/snipets/footerref.php';
			}
            
            
			////ELSE IF THE USER IS FULLY INTEGRATED
			elseif(($this->view->loggedType == 'user')&&($url[1]=='cms')){
             /////ASSIGN JAVASCRIPT   
            $js=null;    
            if(!empty($this->js)){   
            $js=$this->js;    
            }
                
                
			require 'views/cms/snipets/headerref.php';
			require 'views/cms/snipets/header.php';
			require 'views/' . $name . '.php';           
			require 'views/cms/snipets/footer.php';     
			require 'views/cms/snipets/footerref.php';
			}

            
            ////ELSE IT IS A VISITOR PAGE
            else{
             /////ASSIGN JAVASCRIPT   
             
            $js=null;    
            if(!empty($this->js)){   
            $js=$this->js;    
            }
          
			require 'views/snipets/headerref.php';
			require 'views/snipets/header.php';
			require 'views/' . $name . '.php';
			require 'views/snipets/footer.php';
			require 'views/snipets/footerref.php';
               
            }


		}
	}
    
    



}
