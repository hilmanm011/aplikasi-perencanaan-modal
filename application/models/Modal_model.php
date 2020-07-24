<?php

class Modal_model extends CI_model
{

    public function getJmlModal()
    {
        return $this->db->count_all('modal');
    }

    public function getAllModal()
    {
        return $this->db->get('modal')->result_array();
    }

    public function tambahDataModal()
    {
        $data = [
            "biaya_material" => $this->input->post('biaya_material', true),
            "biaya_pegawai" => $this->input->post('biaya_pegawai', true)
        ];

        $this->db->insert('modal', $data);
    }

    public function hapusDataModal($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('modal', ['id' => $id]);
    }

    public function getModalById($id)
    {
        return $this->db->get_where('modal', ['id' => $id])->row_array();
    }

    public function ubahDataModal()
    {
        $data = [
            "biaya_material" => $this->input->post('biaya_material', true),
            "biaya_pegawai" => $this->input->post('biaya_pegawai', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('modal', $data);
    }

    public function cariDataModal()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('biaya_material', $keyword);
        return $this->db->get('modal')->result_array();
    }
}
