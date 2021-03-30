<?php

class SiswaClient extends CI_Controller{

    public function __construct()
    {
      parent::__construct();
      $this->load->library('curl');
      $this->load->model("literasi_model");
      $this->API = "http://localhost:8080/RLiterasi/api/buku";
      $this->API1 = "http://localhost:8080/RLiterasi/api/ulasan";
    }

    public function index()
    {
        $this->load->view('user/header');
        $this->load->view('user/sidebar');
        $this->load->view('user/index_user');
        $this->load->view('user/footer');
    }

    public function buku()
    {
        $data['title'] = "Buku";
        $this->load->view('user/header');
        $this->load->view('user/sidebar');
        $this->load->view('user/buku', $data, FALSE);
        $this->load->view('user/footer');
    }

    public function literasi()
    {
        $data['buku'] = json_decode($this->curl->simple_get($this->API));
        $data['ulasan'] = json_decode($this->curl->simple_get($this->API1));
        $data_array = array(
            'buku' => $data
        );
        $data['title'] = "Buku";
        $this->load->view('user/header');
        $this->load->view('user/sidebar');
        $this->load->view('user/literasi', $data_array, FALSE);
        $this->load->view('user/footer');
    }
    public function ulasan()
  {
      $data['ulasan'] = json_decode($this->curl->simple_get($this->API1));
      $data['title'] = "Buku";
      $this->load->view('user/header');
      $this->load->view('user/sidebar');
      $this->load->view('user/post/ulasan', $data, FALSE);
      $this->load->view('user/footer');
  }
  public function ulasan_process()
  {
      $data = array(            
          'judul'      => $this->input->post('judul'),
          'keterangan'         => $this->input->post('keterangan'),
      );
      $this->literasi_model->input_data($data);
      redirect('siswaclient/berhasil ','refresh');
      
  }
  public function berhasil()
  {
      $data['title'] = "Berhasil";
      $this->load->view('user/header');
      $this->load->view('user/sidebar');
      $this->load->view('user/berhasil', $data, FALSE);
      $this->load->view('user/footer');
  }

}