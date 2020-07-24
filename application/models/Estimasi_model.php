<?php

class Estimasi_model extends CI_model
{

    public function getJmlEstimasi()
    {
        return $this->db->count_all('estimasi');
    }

    public function getAllEstimasi()
    {
        return $this->db->get('estimasi')->result_array();
    }

    public function tambahDataEstimasi()
    {
        $data = [
            "biaya_material" => $this->input->post('biaya_material', true)
        ];

        $this->db->insert('estimasi', $data);
    }

    public function hapusDataEstimasi($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('estimasi', ['id' => $id]);
    }

    public function getEstimasiById($id)
    {
        return $this->db->get_where('estimasi', ['id' => $id])->row_array();
    }

    public function ubahDataEstimasi()
    {
        $data = [
            "biaya_material" => $this->input->post('biaya_material', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('estimasi', $data);
    }

    public function cariDataEstimasi()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('biaya_material', $keyword);
        return $this->db->get('estimasi')->result_array();
    }
}
