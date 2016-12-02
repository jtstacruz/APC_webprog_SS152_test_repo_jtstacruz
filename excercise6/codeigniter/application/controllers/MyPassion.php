<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MyPassion extends CI_Controller {
	public function index(){
		$this->load->view('mypassion.php'); 
		$this->load->helper('html');
	}

}