<?php

class Anggota extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Anggota_model');
    }



    public function index()
    {
        $data['judul'] = 'Daftar Anggota';

        // digunakan jika tidak menggunakan construt
        // $this->load->model('Anggota_model');
        $data['anggota'] = $this->Anggota_model->getAllAnggota();

        $this->load->view('templates/header', $data);
        $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'tambah data anggota';

        $this->load->view('templates/header', $data);
        $this->load->view('anggota/tambah');
        $this->load->view('templates/footer');
    }

    public function prosesTambah()
    {
        $data_input = array(
            'nama' => $this->input->post('txtnama'),
            'tlpn' => $this->input->post('txttlpn'),
            'jurusan' => $this->input->post('txtjurusan'),
            'email' => $this->input->post('txtemail'),

        );
        // var_dump($data_input);

        //digunakan jika tidak menggunakan construk
        // $this->load->model('Anggota_model');
        $this->Anggota_model->prosesTambah($data_input);
        redirect(site_url('anggota'));
    }
}
