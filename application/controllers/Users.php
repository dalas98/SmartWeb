<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	function __construct(){
        parent::__construct();
        if (!$this->session->has_userdata('username')) {
			redirect('Login');
		}else if($this->session->userdata('role') =='admin'){
			redirect('Admin');
		}  
        }

	public function index()
	{
		$this->load->view('user/header');
		$this->load->view('user/content');
		$this->load->view('user/footer');
	}
}
