<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Akun_model');
        $this->load->model('Modal_model');
        $this->load->model('Order_model');
        $this->load->model('Pembayaran_model');
        $this->load->model('M_grafik');
        // $this->load->model('Estimasi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['akun'] = $this->Akun_model->getJmlAkun();
        $data['modal'] = $this->Modal_model->getJmlModal();
        $data['order'] = $this->Order_model->getJmlOrder();
        $data['pembayaran'] = $this->Pembayaran_model->getJmlPembayaran();
        $data['data'] = $this->M_grafik->get_data_nominal();

        // $data['estimasi'] = $this->Estimasi_model->getJmlEstimasi();

        $data['title'] = 'Home Admin Dashboard';

        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }

    // public function grafik()
    // {
    //     $data['akun'] = $this->Akun_model->getAllAkun();
    //     $this->load->view('chart', $data);
    // }
}
