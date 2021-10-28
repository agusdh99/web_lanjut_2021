<?php

class Anggota extends CI_Controller
{
    public function index()
    {
        $this->load->model('Anggota_model');
        $data['judul'] = 'Daftar Anggota';
        $data['anggota'] = $this->Anggota_model->getAllAnggota();
        $this->load->view('templates/header', $data);
        $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');
    }
}
