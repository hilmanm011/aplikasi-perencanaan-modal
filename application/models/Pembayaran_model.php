<?php

class Pembayaran_model extends CI_model
{

    public function getJmlPembayaran()
    {
        return $this->db->count_all('pembayaran');
    }

    public function getAllPembayaran()
    {
        return $this->db->get('pembayaran')->result_array();
    }

    public function tambahDataPembayaran()
    {
        $data = [
            "no_order" => $this->input->post('no_order', true),
            "tgl_order" => $this->input->post('tgl_order', true),
            "nominal_pembayaran" => $this->input->post('nominal_pembayaran', true),
            "jenis_pembayaran" => $this->input->post('jenis_pembayaran', true)
        ];

        $this->db->insert('pembayaran', $data);
    }

    public function hapusDataPembayaran($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('pembayaran', ['id' => $id]);
    }

    public function getPembayaranById($id)
    {
        return $this->db->get_where('pembayaran', ['id' => $id])->row_array();
    }

    public function ubahDataPembayaran()
    {
        $data = [
            "no_order" => $this->input->post('no_order', true),
            "tgl_order" => $this->input->post('tgl_order', true),
            "nominal_pembayaran" => $this->input->post('nominal_pembayaran', true),
            "jenis_pembayaran" => $this->input->post('jenis_pembayaran', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pembayaran', $data);
    }

    public function cariDataPembayaran()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('no_order', $keyword);
        $this->db->like('jenis_pembayaran', $keyword);
        return $this->db->get('pembayaran')->result_array();
    }
}
