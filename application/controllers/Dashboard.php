<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->helper(array('html','url','form','date'));
        $this->load->library(array('form_validation','session'));
    }
    public function index(){
		$this->load->view('dashboard');
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('welcome');
	}
}

?>