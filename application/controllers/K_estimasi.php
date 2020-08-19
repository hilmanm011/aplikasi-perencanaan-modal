<?php

class K_estimasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Order_model');
        $this->load->model('Estimasi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Home Estimasi Konsumen';
        $data['order'] = $this->Order_model->getAllOrder();
        $data['estimasi'] = $this->Estimasi_model->getAllEstimasi();
        if ($this->input->post('keyword')) {
            $data['order'] = $this->Order_model->cariDataOrder();
        }
        $this->load->view('templates/header', $data);

        $this->load->view('k_estimasi/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Rincian Data Order';
        $data['order'] = $this->Order_model->getOrderById($id);
        $data['estimasi'] = $this->Estimasi_model->getEstimasiById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('k_estimasi/detail', $data);
        $this->load->view('templates/footer');
    }
}
