<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MyTrivias extends CI_Controller {
	public function index(){
		$this->load->view('trivias.php'); 
		$this->load->helper('html');
	}

}