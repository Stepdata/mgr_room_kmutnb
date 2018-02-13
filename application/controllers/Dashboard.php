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
		if($this->session->flashdata('status')||$this->session->flashdata('hist')){
			$data['status'] = $this->session->flashdata('status');
			$data['history'] = $this->session->flashdata('hist');
			$this->load->view('dashboard',$data);
		}else{
			$data['status'] = $this->crud->_callStatus();
			$data['history'] = $this->crud->_callHistory();
			$this->load->view('dashboard',$data);
		}
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
	public function getHostoryBy()
	{
		$mode = $this->input->post('date');
		$date_start = $this->input->post('date_start');
		$time_start = $this->input->post('time_start');
		$time_end = $this->input->post('time_end');
		$date_end = $this->input->post('date_end');
		if($mode != "now"){
			if($date_start&&$time_start&&$time_end&&$date_end){
				$data = $this->crud->_callHistoryBy($date_start, $time_start, $time_end, $date_end);
				if($data){
					$this->session->set_flashdata('hist', $data);
					$this->load->view('dashboard',$data);
				}else{
					echo "<script type='text/javascript'>alert('ไม่มีข้อมูล');</script>";
					$data = $this->crud->_callHistory();
					$this->session->set_flashdata('hist', $data);
					$this->load->view('dashboard',$data);
				}
			}
		}else{
			$data = $this->crud->_callHistoryNow();
			$this->session->set_flashdata('hist', $data);
			$this->load->view('dashboard',$data);
		}
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
			$data = $this->crud->_callStatusBydate($date, $time);
			$this->session->set_flashdata('status', $data);
			$this->load->view('dashboard',$data);
		}
	}
	// debug
	public function debug($date, $time){
		if (isset($date)&&isset($time)){
			$data['statu_by'] = $this->crud->_callStatusBydate($date, $time);
			$this->load->view('json/debug',$data);
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