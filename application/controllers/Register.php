<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	function __construct(){
		parent::__construct();
		if ($this->session->has_userdata('username')) {
			if ($this->session->userdata('role') == "admin") {
				redirect('Admin');
			}else if($this->session->userdata('role') =='member'){
				redirect('Users');
			}
		}  
     }

	public function index()
	{
		$this->load->view('Register');
	}

	public function create()
	{
		$id_user    = $this->Register_model->IDUser();

		$fname = $_POST['first_name'];
		$lname = $_POST['last_name'];
		$name = $fname." ".$lname;
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$passc = $_POST['password_confirmation'];

		$usernamecheck = $this->Register_model->checkduplicate($user);
		if($usernamecheck > 0){
			$this->session->set_flashdata('user', 'true');
			redirect('Register');
		}
		if ($pass != $passc) {
			$this->session->set_flashdata('nomatch', 'true');
			redirect('Register');
		}
		$password = md5($pass);
		$data = array('id_user' => $id_user, 'nama' => $name, 'username' => $user, 'password' => $password, 'role' => 'member');
		$add = $this->Register_model->createuser('users',$data);
		if ($add > 0) {
			$this->session->set_flashdata('sucess', 'true');
			redirect('Register');
		}else{
			echo 'Record Failed';
		}
	}
}
