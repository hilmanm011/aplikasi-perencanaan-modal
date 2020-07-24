<?php

class Akun_model extends CI_model
{
    public function getJmlAkun()
    {
        return $this->db->count_all('akun');
    }
    public function getAllAkun()
    {
        return $this->db->get('akun')->result_array();
    }

    public function tambahDataAkun()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true)
        ];

        $this->db->insert('akun', $data);
    }

    public function hapusDataAkun($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('akun', ['id' => $id]);
    }

    public function getAkunById($id)
    {
        return $this->db->get_where('akun', ['id' => $id])->row_array();
    }

    public function ubahDataAkun()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('akun', $data);
    }

    public function cariDataAkun()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        return $this->db->get('akun')->result_array();
    }
}
