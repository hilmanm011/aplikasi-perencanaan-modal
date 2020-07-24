<?php
class M_grafik extends CI_Model
{

    function get_data_nominal()
    {
        $query = $this->db->query("SELECT jenis_pembayaran,SUM(nominal_pembayaran) AS nominal_pembayaran FROM pembayaran GROUP BY jenis_pembayaran");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}
