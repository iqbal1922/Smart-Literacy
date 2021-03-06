<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Buku extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_buku');
        if ($id == '') {
            $buku = $this->db->get('buku')->result();
        } else {
            $this->db->where('id_buku', $id);
            $buku = $this->db->get('buku')->result();
        }
        $this->response($buku, 200);
    }
    function index_post()
    {
        $data = array(
            'nama_buku'         =>$this->post('nama_buku'),
            'diskripsi'         =>$this->post('diskripsi'),
            'file_pdf'          =>$this->post('file_pdf'),
        );
        $insert = $this->db->insert('buku', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put()
    {
        $id = $this->put('id_buku');
        $data = array(
            // 'file_pdf'              => $this->put('file_pdf'),
            'nama_buku'         => $this->put('nama_buku'),
            'diskripsi'         => $this->put('diskripsi'),
            );
        $this->db->where('id_buku', $id);
        $update = $this->db->update('buku', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    
    function index_delete()
    {
        $id = $this->delete('id_buku');
        $this->db->where('id_buku', $id);
        $delete = $this->db->delete('buku');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>