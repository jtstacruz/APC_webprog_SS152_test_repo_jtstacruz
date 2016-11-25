<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->helper('url');
    }
 
    public function index()
    {
        $data['user_list'] = $this->news_model->get_all_users();
		$this->load->view('view_records', $data);
        
    }
 
    public function add_form(){
		$this->load->view('insert.php')
	}
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a news item';
 
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('news/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->news_model->set_news();
            $this->load->view('templates/header', $data);
            $this->load->view('news/success');
            $this->load->view('templates/footer');
        }
    }
    
    public function edit()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Edit a news item';        
        $data['news_item'] = $this->news_model->get_news_by_id($id);
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('news/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->news_model->set_news($id);
            //$this->load->view('news/success');
            redirect( base_url() . 'index.php/news');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $news_item = $this->news_model->get_news_by_id($id);
        
        $this->news_model->delete_news($id);        
        redirect( base_url() . 'index.php/news');        
    }
}