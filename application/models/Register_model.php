<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model{

	public function createuser($table,$data){
		$create = $this->db->insert($table,$data);
		return $create;
	}

	public function IDUser()
	{
        $this->db->select("RIGHT(id_user,2) AS kode ");
        $this->db->order_by('id_user', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('users');
        if($query->num_rows()>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;
        }
        $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
        $kodejadi  = "U".$kodemax;
        return $kodejadi;
    }
    
    public function checkduplicate($user)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username',$user);
        $query = $this->db->get();
        return $query->num_rows();
    }
}