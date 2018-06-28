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
		$url=base_url("meetix-api-event.php?id_Event=".$id_Event);
		// $data['show'] = $this->Show_model->show('event',$id_Event);

		$json = file_get_contents($url);
		$jsonToArray = json_decode($json);
		$data['api'] = $jsonToArray->Event[0];
		$id_user = $this->session->userdata('id_user');
		$balance['tampil'] = $this->Home_model->see_balance($id_user);
		$this->load->view('home/header',$balance);
		$this->load->view('home/showcontent',$data);
		$this->load->view('home/footer');
	}

}
