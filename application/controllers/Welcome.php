<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('html','url','form','date'));
			$this->load->library(array('form_validation','session'));
    }
	public function index(){
		if($this->session->userdata('Logged')){
			$this->load->view('dashboard');
		}else{
			$this->load->view('login');
		}
	}
}
?>