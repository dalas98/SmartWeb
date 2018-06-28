<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{
	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function see_balance($id_user)
	{
		$query = $this->db->query("SELECT balance from users WHERE id_user='$id_user'");
		
		return $query->result_array();
	}

	function newevent(){		
		$query = $this->db->get('event');
		return $query->result_array();
	}
	function idtrans()
	{
		$this->db->select("RIGHT(id_transaksi,2) AS kode ");
        $this->db->order_by('id_transaksi', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('transaksi');
        if($query->num_rows()>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;
        }
        $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
        $kodejadi  = "TRANS".$kodemax;
        return $kodejadi;
	}
	function confirm_tiket($table,$data){
		$create = $this->db->insert($table,$data);
		return $create;
	}
	function detail_buy($id_transaksi)
	{

		$query = $this->db->query("SELECT event.nama_event, users.nama, event.kategori_event, transaksi.harga_tiket, transaksi.id_transaksi FROM ((transaksi INNER JOIN users ON users.id_user = transaksi.id_user) INNER JOIN event ON event.harga_tiket = transaksi.harga_tiket) WHERE id_transaksi='$id_transaksi'");
		
		return $query->result_array();
	}

	function updatebalance($id_user,$minbalance)
	{	
		$hasil = $this->db->query("UPDATE users SET balance='$minbalance' WHERE id_user='$id_user'");
        return $hasil;
	}
}