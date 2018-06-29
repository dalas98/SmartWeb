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
	public function test2($id_user)
	{
		$balance[] = $this->Home_model->see_balance($id_user);
		print_r($balance[0][0]['balance']);
	}
}
