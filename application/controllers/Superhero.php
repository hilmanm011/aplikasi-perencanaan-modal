<?php

class Superhero extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Superhero_model');

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'X - MEN';
        $data['superhero'] = $this->Superhero_model->getAllSuperhero();
        
        if ($this->input->post('keyword')) {
            $data['superhero'] = $this->Superhero_model->cariDataSuperhero();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('superhero/index', $data);
    }

    public function tambah()
    {
        $data['title'] = 'X - MEN';

        $this->form_validation->set_rules('nama', 'Nama', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('superhero/tambah');

        } else {
            
            $this->Superhero_model->tambahDataSuperhero();
            // $this->session->set_flashdata('flash', 'Ditambahkan');

            redirect('superhero');
            
        }
    }

    public function hapus($id)
    {
        $this->Superhero_model->hapusDataSuperhero($id);
        // $this->session->set_flashdata('flash', 'Dihapus');
        redirect('superhero');
    }

    public function detail($id)
    {
        $data['title'] = 'X - MEN';

        $data['superhero'] = $this->Superhero_model->getSuperheroById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('superhero/detail', $data);


    }

    public function ubah($id)
    {
        $data['title'] = 'X - MEN';
        $data['superhero'] = $this->Superhero_model->getSuperheroById($id);
   


        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('superhero/detail', $data);

        } else {
            $this->Superhero_model->ubahDataSuperhero();
            // $this->session->set_flashdata('flash', 'Diubah');
            redirect('superhero');
        }
    }
}
