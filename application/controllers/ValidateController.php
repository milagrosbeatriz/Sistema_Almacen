<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ValidateController extends CI_Controller {

	public function index()
	{
		$this->load->view('Menu.php');
	}

	public function Route($page){
		if($page == "RegisterGlasses"){
			$this->load->view("RegisterGlasses");
		}
		if($page=="RegisterProducts"){
			$this->load->view("RegisterProducts");
		}
		else{
			$this->load->view("RegisterUser");
		}

		
	}

}