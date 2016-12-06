<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('users_model');
  }
  public function index(){
    $data['user_list'] = $this->users_model->get_all_users();
    $this->load->view('view_records', $data);
  }
  public function add_form(){
    $this->load->view('insert.php');
  }
  public function insert_user_db(){
    $udata['name'] = $this->input->post('name');
    $udata['email'] = $this->input->post('email');
    $udata['website'] = $this->input->post('website');
    $udata['gender'] = $this->input->post('gender');
    $res = $this->users_model->insert_users_to_db($udata);
    if($res){
      header('location:'.base_url()."index.php/users/".$this->index());
    }
  }
  // OPEN EDIT FORM WITH DATA
  function show_users_id() {
    $id = $this->uri->segment(3);
    $data['users'] = $this->users_model->show_users();
    $data['single_users'] = $this->users_model->show_users_id($id);
    $this->load->view('view_edit', $data);
  }
  function update_users_id1() {
    $id= $this->input->post('did');
    $data = array(
    'name' => $this->input->post('name'),
    'email' => $this->input->post('email'),
    'website' => $this->input->post('website'),
    'gender' => $this->input->post('gender'),
    );
    $this->users_model->update_users_id1($id, $data);
    $this->show_users_id();
    $this->load->helper('url');
    redirect('index.php/users/index', 'refresh');
  }
  public function delete($user_id){
    $this->users_model->delete_a_user($user_id);
  }
}