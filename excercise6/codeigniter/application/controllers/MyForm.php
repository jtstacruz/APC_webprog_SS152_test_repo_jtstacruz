<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MyForm extends CI_Controller {
	public function index(){
		$this->load->view('form.php'); 
		$this->load->helper('html');
	}

}