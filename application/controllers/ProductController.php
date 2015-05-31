<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProductController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->Model('ProductModel');
	}

	public function index()
	{
		$this->load->view('inedx.html');
	}

	public function SaveGlassess(){
		$this->ProductModel->SaveProduct();
	}

	public function SaveProducts(){
		$this->ProductModel->SaveProduct();
	}

}