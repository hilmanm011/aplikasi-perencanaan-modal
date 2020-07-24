<?php

class Modal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modal_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Daftar Data Modal';
        $data['modal'] = $this->Modal_model->getAllModal();
        if ($this->input->post('keyword')) {
            $data['modal'] = $this->Modal_model->cariDataModal();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('modal/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Modal';

        $this->form_validation->set_rules('biaya_material', 'Biaya_material', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('modal/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Modal_model->tambahDataModal();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('modal');
        }
    }

    public function hapus($id)
    {
        $this->Modal_model->hapusDataModal($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('modal');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Data Modal';
        $data['modal'] = $this->Modal_model->getModalById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('modal/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Data Modal';
        $data['modal'] = $this->Modal_model->getModalById($id);


        $this->form_validation->set_rules('biaya_material', 'Biaya_material', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('modal/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Modal_model->ubahDataModal();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('modal');
        }
    }
}
