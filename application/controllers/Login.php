<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
        parent::__construct();
        if (isset($_GET['logout']) == 'signout') {
            $this->session->sess_destroy();
            redirect('page');
        }else{
         if ($this->session->has_userdata('username')) {
           if ($this->session->userdata('role') == "admin") {
                    redirect('Admin');
                }else if($this->session->userdata('role') =='member'){
                    redirect('Users');
                }
            }  
        }
   }

	public function index()
	{
		$this->load->view('Login');
	}

	public function Validate()
	{
		$username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
            );
        $cek = $this->Login_model->cek_login("users",$where)->num_rows();
        if($cek > 0){
            $result = $this->db->get_where('users',$where)->row_array();
            $datasession = array(
                'username' => $result['username'],
                'role'=> $result['role'],
                'nama' => $result['nama']
            );
            $this->session->set_userdata($datasession);
            if ($result['role']=='admin') 
            {
                redirect('Admin');
            }else if ($result['role']=='member')
            {
                redirect('Users');
            }
        }else{
            redirect('Login');
            echo "Username dan password salah !";
        }
        
	}

	
}