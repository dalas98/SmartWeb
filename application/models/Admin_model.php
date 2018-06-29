<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{
	/*function __construct() {
		parent::__construct();
		$this->load->database();
	}*/

	function See_acc()
	{
		$query = $this->db->query("SELECT * from users");	
		return $query->result_array();
	}
}