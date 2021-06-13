<?php

class M_pengaduan extends CI_model
{

    // Tampil Data Pengaduan masuk
    public function tampil_data()
    {
        //$query = $this->db->get('tbl_produk');
        $this->db->from('tbl_lapor');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_lapor.id_user');
        $this->db->where('tbl_lapor.status', 1);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function count_tampil_data()
    {
        $this->db->from('tbl_lapor');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_lapor.id_user');
        $this->db->where('tbl_lapor.status', 1);
        $query = $this->db->get();
        return $query->num_rows();
    }

    // Tampil Data Pengaduan Diproses
    public function tampil_data_diproses()
    {
        $this->db->from('tbl_lapor');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_lapor.id_user');
        $this->db->where('tbl_lapor.status', 2);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function count_tampil_data_diproses()
    {
        $this->db->from('tbl_lapor');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_lapor.id_user');
        $this->db->where('tbl_lapor.status', 2);
        $query = $this->db->get();
        return $query->num_rows();
    }

    // Tampil Data Pengaduan Diproses
    public function tampil_data_dibatalkan()
    {
        $this->db->from('tbl_lapor');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_lapor.id_user');
        $this->db->where('tbl_lapor.status', 3);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function count_tampil_data_dibatalkan()
    {
        $this->db->from('tbl_lapor');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_lapor.id_user');
        $this->db->where('tbl_lapor.status', 3);
        $query = $this->db->get();
        return $query->num_rows();
    }

    // Tampil Data Pengaduan Diproses
    public function tampil_data_selesai()
    {
        $this->db->from('tbl_lapor');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_lapor.id_user');
        $this->db->where('tbl_lapor.status', 4);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function count_tampil_data_selesai()
    {
        $this->db->from('tbl_lapor');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_lapor.id_user');
        $this->db->where('tbl_lapor.status', 4);
        $query = $this->db->get();
        return $query->num_rows();
    }
}
