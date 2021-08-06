<?php

class Peserta extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_peserta');
    }

    public function index()
    {
        $data['peserta'] = $this->M_peserta->viewPeserta();
        $this->load->view('peserta', $data);
    }

    public function add()
    {
        $this->load->view('add');
    }

    public function prosesadd()
    {
        $this->M_peserta->addPeserta();
        $this->session->set_flashdata('successadd', 'Peserta baru berhasil ditambahkan.');
        redirect('peserta');
    }

    public function delete($id_peserta)
    {
        $this->M_peserta->delete($id_peserta);
        $this->session->set_flashdata('successdelete', 'Peserta berhasil dihapus.');
        redirect('peserta');
    }

    public function edit()
    {
        $this->load->view('edit');
    }

    
}