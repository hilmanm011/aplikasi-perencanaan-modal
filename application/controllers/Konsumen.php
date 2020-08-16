<?php

class Konsumen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Estimasi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Home Konsumen';
        $data['estimasi'] = $this->Estimasi_model->getAllEstimasi();
        if ($this->input->post('keyword')) {
            $data['estimasi'] = $this->Estimasi_model->cariDataEstimasi();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('konsumen/index', $data);
        $this->load->view('templates/footer');
    }

    // public function tambah()
    // {
    //     $data['title'] = 'Form Tambah Data estimasi';

    //     $this->form_validation->set_rules('biaya_material', 'Biaya_material', 'required');


    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('estimasi/tambah');
    //         $this->load->view('templates/footer');
    //     } else {
    //         $this->Estimasi_model->tambahDataEstimasi();
    //         $this->session->set_flashdata('flash', 'Ditambahkan');
    //         redirect('estimasi');
    //     }
    // }

    // public function hapus($id)
    // {
    //     $this->Estimasi_model->hapusDataEstimasi($id);
    //     $this->session->set_flashdata('flash', 'Dihapus');
    //     redirect('estimasi');
    // }

    // public function detail($id)
    // {
    //     $data['title'] = 'Detail Data Estimasi';
    //     $data['estimasi'] = $this->Estimasi_model->getEstimasiById($id);
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('estimasi/detail', $data);
    //     $this->load->view('templates/footer');
    // }

    // public function ubah($id)
    // {
    //     $data['title'] = 'Form Ubah Data Estimasi';
    //     $data['estimasi'] = $this->Estimasi_model->getEstimasiById($id);


    //     $this->form_validation->set_rules('biaya_material', 'Biaya_material', 'required');

    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('estimasi/ubah', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         $this->Estimasi_model->ubahDataEstimasi();
    //         $this->session->set_flashdata('flash', 'Diubah');
    //         redirect('estimasi');
    //     }
    // }
}
