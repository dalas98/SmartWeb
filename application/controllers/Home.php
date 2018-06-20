<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		/*if ($this->session->has_userdata('username')) {
			if($this->session->userdata('role') =='member'){
				redirect('Users');
			}
		}  */
     }

	public function index()
	{
		$data['event'] = $this->Home_model->newevent();
		$this->load->view('home/header');
		$this->load->view('home/index',$data);
		$this->load->view('home/footer');
	}
}
