<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends CI_Controller {

	public function index()
	{
		$id_user = $this->session->userdata('id_user');
		$balance['tampil'] = $this->Home_model->see_balance($id_user);

		$this->load->view('home/header',$balance);
		$this->load->view('home/Help');
		$this->load->view('home/footer');
	}

}

/* End of file helpus.php */
/* Location: ./application/controllers/helpus.php */