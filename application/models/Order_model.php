<?php

class Order_model extends CI_model
{

    public function getJmlOrder()
    {
        return $this->db->count_all('order');
    }

    public function getAllOrder()
    {
        return $this->db->get('order')->result_array();
    }

    public function tambahDataOrder()
    {
        $data = [
            "no_order" => $this->input->post('no_order', true),
            "tgl_order" => $this->input->post('tgl_order', true),
            "nama_konsumen" => $this->input->post('nama_konsumen', true),
            "nama_project" => $this->input->post('nama_project', true)
        ];

        $this->db->insert('order', $data);
    }

    public function hapusDataOrder($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('order', ['id' => $id]);
    }

    public function getOrderById($id)
    {
        return $this->db->get_where('order', ['id' => $id])->row_array();
    }

    public function ubahDataOrder()
    {
        $data = [
            "no_order" => $this->input->post('no_order', true),
            "tgl_order" => $this->input->post('tgl_order', true),
            "nama_konsumen" => $this->input->post('nama_konsumen', true),
            "nama_project" => $this->input->post('nama_project', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('order', $data);
    }

    public function cariDataOrder()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('no_order', $keyword);
        $this->db->like('nama_konsumen', $keyword);
        return $this->db->get('order')->result_array();
    }
}
