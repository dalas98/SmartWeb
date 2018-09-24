<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class REST_API extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $event = $this->db->get('event')->result();
        } else {
            $this->db->where('id_Event', $id);
            $event = $this->db->get('event')->result();
        }
        $this->response($event, 200);
    }

    function index_post() {
        $data = array(
                    'id_Event'      => $this->post('id'),
                    'nama_event'    => $this->post('nama'),
                    'jadwal_event'  => $this->post('jadwal'),
                    'lokasi_event'  => $this->post('loc'),
                    'image_event'   => $this->post('img'),
                    'harga_tiket'   => $this->post('htm'),
                    'kategori_event'=> $this->post('kat'));
        $insert = $this->db->insert('event', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put() {
        $id = $this->put('id');
        $data = array(
                    'id_Event'      => $this->post('id'),
                    'nama_event'    => $this->post('nama'),
                    'jadwal_event'  => $this->post('jadwal'),
                    'lokasi_event'  => $this->post('loc'),
                    'image_event'   => $this->post('img'),
                    'harga_tiket'   => $this->post('htm'),
                    'kategori_event'=> $this->post('kat'));
        $this->db->where('id', $id);
        $update = $this->db->update('event', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id_Event', $id);
        $delete = $this->db->delete('event');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}
?>