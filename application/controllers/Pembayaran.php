<?php

class Pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembayaran_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Daftar Data Pembayaran';
        $data['pembayaran'] = $this->Pembayaran_model->getAllPembayaran();
        if ($this->input->post('keyword')) {
            $data['pembayaran'] = $this->Pembayaran_model->cariDataPembayaran();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('pembayaran/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Pembayaran';

        $this->form_validation->set_rules('no_order', 'No_order', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pembayaran/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Pembayaran_model->tambahDataPembayaran();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('pembayaran');
        }
    }

    public function hapus($id)
    {
        $this->Pembayaran_model->hapusDataPembayaran($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pembayaran');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Data Pembayaran';
        $data['pembayaran'] = $this->Pembayaran_model->getPembayaranById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('pembayaran/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Data Pembayaran';
        $data['pembayaran'] = $this->Pembayaran_model->getPembayaranById($id);
        $data['pm'] = ['Cash', 'Tempo'];


        $this->form_validation->set_rules('no_order', 'No_order', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pembayaran/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pembayaran_model->ubahDataPembayaran();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('pembayaran');
        }
    }
}
