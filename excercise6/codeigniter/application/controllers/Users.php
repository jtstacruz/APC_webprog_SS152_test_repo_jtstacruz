<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('user_model');
  }
  public function index(){
    $data['user_list'] = $this->user_model->get_all_users();
    $this->load->view('index', $data);
  }
  public function add_form(){
    $this->load->view('form.php');
  }
  public function insert_user_db(){
    $udata['name'] = $this->input->post('name');
    $udata['email'] = $this->input->post('email');
    $udata['website'] = $this->input->post('website');
    $udata['comment'] = $this->input->post('comment');
    $udata['gender'] = $this->input->post('gender');
    $res = $this->user_model->insert_users_to_db($udata);
    if($res){
      header('location:'.base_url()."index.php/users/".$this->index());
    }
  }
  // OPEN EDIT FORM WITH DATA
  function show_users_id() {
    $id = $this->uri->segment(3);
    $data['users'] = $this->user_model->show_users();
    $data['single_users'] = $this->user_model->show_users_id($id);
    $this->load->view('edit_data', $data);
  }
  function update_users_id1() {
    $id= $this->input->post('did');
    $data = array(
    'name' => $this->input->post('name'),
    'email' => $this->input->post('email'),
    'website' => $this->input->post('website'),
    'comment' => $this->input->post('comment'),
    'gender' => $this->input->post('gender') 
    );
    $this->user_model->update_users_id1($id, $data);
    $this->show_users_id();
    $this->load->helper('url');
    redirect('users/index', 'refresh');
  }
    public function delete($user_id){
    $this->user_model->delete_a_user($user_id);
    
  }
}