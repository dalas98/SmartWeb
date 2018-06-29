<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	function __construct(){
		parent::__construct();
		if (!$this->session->has_userdata('username')) {
			redirect('Login');
		}
	}

	public function index()
	{
		redirect();
		/*$this->load->view('home/header');
		$this->load->view('home/index');
		$this->load->view('user/footer');*/
	}
	public function detail($id_Event)
	{
		$url=base_url("meetix-api-event.php?id_Event=".$id_Event);
		$id_user = $this->session->userdata('id_user');
		$balance['tampil'] = $this->Home_model->see_balance($id_user);
		$json = file_get_contents($url);
		$jsonToArray = json_decode($json);
		$data['api'] = $jsonToArray->Event[0];

		$this->load->view('home/header',$balance);
		$this->load->view('home/detail',$data);
		$this->load->view('home/footer');
	}
	public function confirmbuy($id_Event)
	{
		$url=base_url("meetix-api-event.php?id_Event=".$id_Event);
		$json = file_get_contents($url);
		$jsonToArray = json_decode($json);
		$data = $jsonToArray->Event[0]->harga_tiket;
		$id_user = $this->session->userdata('id_user');
		$balance['tampil'] = $this->Home_model->see_balance($id_user);

		$id_transaksi = $this->Home_model->idtrans();
		$id_user = $this->session->userdata('id_user');
		$harga = $data;
		$balanceup = $balance['tampil'][0]['balance'];
		$minbalance = $balanceup-$harga;
		if ($minbalance < 0) {
			$this->session->set_flashdata('kurang', 'true');
			redirect('Users/detail/'.$id_Event);
		}else{
		$update = $this->Home_model->updatebalance($id_user, $minbalance);

		$data = array('id_transaksi' => $id_transaksi, 'id_Event' => $id_Event, 'id_user' => $id_user , 'tanggal_beli' => NULL, 'harga_tiket' => $harga);
		$add = $this->Home_model->confirm_tiket('transaksi',$data);
		redirect('Users/ticket/'.$id_transaksi);
		}
	}
	public function ticket($id_transaksi)
	{
		$id_user = $this->session->userdata('id_user');
		$balance['tampil'] = $this->Home_model->see_balance($id_user);	
		$data['show'] = $this->Home_model->detail_buy($id_transaksi);
		$this->load->view('home/header',$balance);
		$this->load->view('home/detail_buy',$data);
		$this->load->view('home/footer');
	}
	public function loginpay($id_Event)
	{
		$password = md5($this->input->post('password'));
		$passtrue = $this->session->userdata('password');
		if ($password == $passtrue) {
			redirect('Users/confirmbuy/'.$id_Event);
		}else{
			$this->session->set_flashdata('info', 'true');
			redirect('Users/detail/'.$id_Event);
		}

	}
}
