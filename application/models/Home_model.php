<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{
	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function newevent(){		
		$query = $this->db->get('event');
		return $query->result_array();
	}
}