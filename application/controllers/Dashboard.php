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
		$data['status_val'] = false;
		$this->load->view('dashboard',$data);
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
		$data['department'] = $this->input->post('department');
		$data['faculty'] = $this->input->post('faculty');
		$data['Password'] = $this->input->post('password');
		$data['card_id'] = $this->input->post('card_id');
		if ($data != null){
			$this->crud->_addUser($data);
			redirect('welcome');
		}
	}
	// Call Status 
	public function callStatus(){
		$date = $this->input->post('date');
		$time = $this->input->post('time');
		if (isset($date)&&isset($time)){
			$data['status'] = $this->crud->_callStatusBydate($date, $time);
			$data['status_val'] = true;
			$this->load->view('dashboard',$data);
		}else{
			// $this->load->view('dashboard',$data);
		}
	}

	// Del user
	public function deluser(){
		$data = json_decode($_POST['data'],true);
		$manage_user_id = $data['manage_user_id'];
		$this->crud->_userdelete($manage_user_id);
	}
}

?>