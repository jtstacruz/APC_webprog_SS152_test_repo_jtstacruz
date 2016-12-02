<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MyHobbies extends CI_Controller {
	public function index(){
		$this->load->view('myhobbies.php'); 
		$this->load->helper('html');
	}

}