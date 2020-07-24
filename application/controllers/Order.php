<?php

class Order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Order_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Daftar Data Order';
        $data['order'] = $this->Order_model->getAllOrder();
        if ($this->input->post('keyword')) {
            $data['order'] = $this->Order_model->cariDataOrder();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('order/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Order';

        $this->form_validation->set_rules('no_order', 'No_order', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('order/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Order_model->tambahDataOrder();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('order');
        }
    }

    public function hapus($id)
    {
        $this->Order_model->hapusDataOrder($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('order');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Data Order';
        $data['order'] = $this->Order_model->getOrderById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('order/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Data Order';
        $data['order'] = $this->Order_model->getOrderById($id);


        $this->form_validation->set_rules('no_order', 'No_order', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('order/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Order_model->ubahDataOrder();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('order');
        }
    }
    public function print()
    {
        $data['order'] = $this->Order_model->getAllOrder();
        $this->load->view('print_laporan', $data);
    }
}
