<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Showcontent extends CI_Controller {
	/*function __construct(){
		parent::__construct();
		if (!$this->session->has_userdata('username')) {
			redirect('Login');
		}
	}*/
	public function show($id_Event){
		$data['show'] = $this->Show_model->show('event',$id_Event);
		
		$this->load->view('home/header');
		$this->load->view('home/showcontent',$data);
		$this->load->view('home/footer');
	}

}
