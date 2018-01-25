<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->helper(array('html','url','form','date'));
		$this->load->library(array('form_validation','session'));
		$this->load->model('Service_genjson','model');
		$this->load->model('CRUD','crud');
    }
    public function index(){
		$data['status'] = $this->crud->_callStatus();
		$this->load->view('dashboard', $data);
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('welcome');
	}
	public function getManageUser()
	{		
		$data['data'] = $this->model->getUser();
		$this->load->view('json/json',$data);
	}
	public function getHostory()
	{		
		$data['data'] = $this->model->_callHistory();
		$this->load->view('json/json',$data);
	}
	public function home()
	{		
		$this->load->view('home');
	}
	// add user
	public function addUser(){
		$data['name'] = $this->input->post('name');
		$data['Department'] = $this->input->post('department');
		$data['Faculty'] = $this->input->post('factory');
		$data['Password'] = $this->input->post('password');
		if ($data != null){
			$this->crud->_addUser($data);
			redirect('welcome');
		}
	}
	// Call Status
	public function callStatus(){
		$this->crud->_callStatus();
	}

}

?>