<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
        parent::__construct();
         if (!$this->session->has_userdata('username')) {
			redirect('Login');
		}else if($this->session->userdata('role') =='member'){
			redirect('Users');
		}  
        }

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/content');
		$this->load->view('admin/footer');
	}

	public function test()
	{
		// request list of contacts from Web API
		$url=base_url("meetix-api-all.php");

		
		$json = file_get_contents($url);
		$jsonToArray = json_decode($json);
		echo "<pre>";
		print_r($jsonToArray);
		echo "</pre>";
	}
}
