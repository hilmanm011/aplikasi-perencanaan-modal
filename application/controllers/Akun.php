<?php

class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Akun_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Daftar Akun';
        $data['akun'] = $this->Akun_model->getAllAkun();
        if ($this->input->post('keyword')) {
            $data['akun'] = $this->Akun_model->cariDataAkun();
        }
        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('akun/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Konsumen';

        $this->form_validation->set_rules('nama', 'Nama', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('akun/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Akun_model->tambahDataAkun();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('akun');
        }
    }

    public function hapus($id)
    {
        $this->Akun_model->hapusDataAkun($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('akun');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Data Konsumen';
        $data['akun'] = $this->Akun_model->getAkunById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('akun/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Data Konsumen';
        $data['akun'] = $this->Akun_model->getAkunById($id);


        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('akun/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Akun_model->ubahDataAkun();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('akun');
        }
    }
}
