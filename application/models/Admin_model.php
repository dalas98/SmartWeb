<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{
	/*function __construct() {
		parent::__construct();
		$this->load->database();
	}*/
	function count()
	{
		$query = $this->db->query("SELECT * from users");	
		return $query->result_array();
	}

	function See_acc()
	{
		$query = $this->db->query("SELECT * FROM users");
        	$total = $query->num_rows();
        	return $total;
	}
	function See_event()
	{
		$query = $this->db->query("SELECT * FROM event");
        	$total = $query->num_rows();
        	return $total;
	}
	function updatebalance($id_user,$newbalance)
	{
		$hasil = $this->db->query("UPDATE users SET balance='$newbalance' WHERE id_user='$id_user'");
		return $hasil;
	}
	function See_all_event()
	{
		$query = $this->db->query("SELECT * FROM event");
        	$total = $query->result_array();
        	return $total;
	}
	public function IDEvent()
	{
        $this->db->select("RIGHT(id_Event,2) AS kode ");
        $this->db->order_by('id_Event', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('event');
        if($query->num_rows()>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;
        }
        $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
        $kodejadi  = "E".$kodemax;
        return $kodejadi;
   	}
   	public function createvent($table,$data){
		$create = $this->db->insert($table,$data);
		return $create;
	}
}