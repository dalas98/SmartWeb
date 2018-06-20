<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventCalendar extends CI_Controller {

	public function index()
	{
		$this->load->view('home/header');
		$this->load->view('home/calendar');
		$this->load->view('home/footer');
	}

}

/* End of file EventCalendar.php */
/* Location: ./application/controllers/EventCalendar.php */