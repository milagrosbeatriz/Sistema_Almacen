<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ValidateController extends CI_Controller {

	public function index()
	{
		$this->load->view('Menu.php');
	}

	public function Route($page){
		if($page == "RegisterGlasses"){
			$this->load->view("RegisterGlasses");
<<<<<<< HEAD
		}
		if($page=="RegisterProducts"){
			$this->load->view("RegisterProducts");
		}
		else{
			$this->load->view("RegisterUser");
		}

=======
		}else{
			$this->load->view("RegisterProducts");
		}
>>>>>>> ae27949bae87a356e2009d386d223b244a1ad27b
		
	}

}