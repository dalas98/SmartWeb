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
		$data['show'] = $this->Admin_model->See_acc();
		$event['see'] = $this->Admin_model->See_event();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar',$event);
		$this->load->view('admin/content',$data);
		$this->load->view('admin/footer');
	}
	public function listacc()
	{
		$data['show'] = $this->Admin_model->count();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/table_acc',$data);
		$this->load->view('admin/footer');
	}

	public function insertbalance()
	{
		$id_user = $this->input->post('id_user');
		$new = $this->input->post('balanceupdate');
		$before = $this->input->post('balancebefore');

		$newbalance = $new+$before;
		$update = $this->Admin_model->updatebalance($id_user, $newbalance);
		redirect('Admin/listacc');

	}
	public function reducebalance()
	{
		$id_user = $this->input->post('id_user');
		$new = $this->input->post('balanceupdate');
		$before = $this->input->post('balancebefore');

		$newbalance = $before-$new;
		$update = $this->Admin_model->updatebalance($id_user, $newbalance);
		redirect('Admin/listacc');
	}
	public function event()
	{
		$event['see'] = $this->Admin_model->See_all_event();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/add_event',$event);
		$this->load->view('admin/footer');
	}
	public function insertevent()
	{
		$img = [
			'upload_path' => './assets/images/upload/',
			'allowed_types' => 'gif|jpg|png|jpeg'
		];
		
		$this->load->library('upload', $img);
		
		if ( ! $this->upload->do_upload('img')){
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('salah', 'true');
			redirect('Admin/event');
		}
		else{
			$id_Event 	= $this->Admin_model->IDEvent();
			$nama_event 	= $this->input->post('nama');
			$date 		= $this->input->post('date');
			$time 		= $this->input->post('time');
			$datetime 	= $date." ".$time;	
			$loc			= $this->input->post('lokasi');
			$price		= $this->input->post('harga');
			$category		= $this->input->post('kategori');
			$info 		= $this->upload->data();
			$data 		= array(
							'id_Event' => $id_Event, 
							'nama_event' => $nama_event, 
							'jadwal_event' => $datetime, 
							'lokasi_event' => $loc,
							'image_event' => $info['file_name'],
							'harga_tiket' => $price,
							'kategori_event' => $category);
			$add 		= $this->Admin_model->createvent('event',$data);
			if ($add > 0) {
				$this->session->set_flashdata('sucess', 'true');
				redirect('Admin/event');
			}else{
				echo 'Record Failed';
			}
		}

	}
	public function test()
	{
		// request list of contacts from Web API
		// $url=base_url("meetix-api-all.php");
		$url=base_url("meetix-api-event.php?id_Event=E0001");

		
		$json = file_get_contents($url);
		$jsonToArray = json_decode($json);
		$data = $jsonToArray->Event[0]->harga_tiket;
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}
	public function test2()
	{
		
	}
}
