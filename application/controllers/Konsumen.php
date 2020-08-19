<?php

class Konsumen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Order_model');
        $this->load->library('form_validation');
        // is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Home Konsumen ';
        $data['order'] = $this->Order_model->getAllOrder();
        $data['user'] =  $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        if ($this->input->post('keyword')) {
            $data['order'] = $this->Order_model->cariDataOrder();
        }
        $this->load->view('templates/header', $data);

        $this->load->view('k_order/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Order';
        $data['order'] = $this->Order_model->getAllOrder();

        $this->form_validation->set_rules('no_order', 'No_order', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('k_order/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Order_model->tambahDataOrder();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('konsumen');
        }
    }

    public function hapus($id)
    {
        $this->Order_model->hapusDataOrder($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('konsumen');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Data Order';
        $data['order'] = $this->Order_model->getOrderById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('k_order/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Data Order';
        $data['order'] = $this->Order_model->getOrderById($id);


        $this->form_validation->set_rules('no_order', 'No_order', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('k_order/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Order_model->ubahDataOrder();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('konsumen');
        }
    }
}
