<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show_model extends CI_Model {
	public function show($table,$id_Event)
	{
		$this->db->where('id_Event',$id_Event);
		$get_data = $this->db->get($table);
		return $get_data->row();
	}
}