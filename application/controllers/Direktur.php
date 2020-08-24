<?php

class Direktur extends CI_Controller
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
        // is_logged_in();
    }

    public function index()
    {
        $data['akun'] = $this->Akun_model->getJmlAkun();
        $data['modal'] = $this->Modal_model->getJmlModal();
        $data['j_order'] = $this->Order_model->getJmlOrder();
        $data['order'] = $this->Order_model->getAllOrder();
        $data['pembayaran'] = $this->Pembayaran_model->getJmlPembayaran();
        $data['data'] = $this->M_grafik->get_data_nominal();
        $data['user'] =  $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        // $data['estimasi'] = $this->Estimasi_model->getJmlEstimasi();

        $data['title'] = 'Home Direktur';

        $this->load->view('templates/header', $data);
        $this->load->view('direktur/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Data Order';
        $data['order'] = $this->Order_model->getOrderById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('direktur/d_order', $data);
        $this->load->view('templates/footer');
    }
}
