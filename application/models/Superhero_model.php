<?php

class Superhero_model extends CI_model
{
    public function getJmlSuperhero()
    {
        return $this->db->count_all('superhero');
    }
    public function getAllSuperhero()
    {
        return $this->db->get('superhero')->result_array();
    }

    public function tambahDataSuperhero()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true)
        ];

        $this->db->insert('superhero', $data);
    }

    public function hapusDataSuperhero($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('superhero', ['id' => $id]);
    }

    public function getSuperheroById($id)
    {
        return $this->db->get_where('superhero', ['id' => $id])->row_array();
    }

    public function ubahDataSuperhero()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('superhero', $data);
    }

    public function cariDataSuperhero()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        return $this->db->get('superhero')->result_array();
    }
}
