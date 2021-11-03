<?php

class About extends CI_Controller
{

    public function index()
    {

        $data['judul'] = 'Tugas 2';
        $this->load->view('templates/header', $data);
        $this->load->view('about/index');
        $this->load->view('templates/footer');
    }
}
