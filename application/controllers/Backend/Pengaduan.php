<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Backend/M_pengaduan');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $show = $this->M_pengaduan;
        $data = [
            "pengaduan" => $show->tampil_data()
        ];

        $this->load->view('Backend/Pengaduan_Baru', $data);
    }

    public function terima_pengaduan($id = null)
    {

        $status = '2';
        $this->db->set('status', $status);
        $this->db->where('id_lapor', $id);
        $this->db->update('tbl_lapor');

        redirect(site_url('Backend/Pengaduan'));
    }

    public function tolak_pengaduan($id = null)
    {

        $status = '3';
        $this->db->set('status', $status);
        $this->db->where('id_lapor', $id);
        $this->db->update('tbl_lapor');

        redirect(site_url('Backend/Pengaduan'));
    }

    public function tampil_pengaduan_diproses()
    {
        $show = $this->M_pengaduan;
        $data = [
            "pengaduan" => $show->tampil_data_diproses()
        ];

        $this->load->view('Backend/Pengaduan_Diproses', $data);
    }

    public function selesai_pengaduan($id = null)
    {

        $status = '4';
        $this->db->set('status', $status);
        $this->db->where('id_lapor', $id);
        $this->db->update('tbl_lapor');

        redirect(site_url('Backend/Pengaduan'));
    }

    public function tampil_pengaduan_dibatalkan()
    {
        $show = $this->M_pengaduan;
        $data = [
            "pengaduan" => $show->tampil_data_dibatalkan()
        ];

        $this->load->view('Backend/Pengaduan_Dibatalkan', $data);
    }

    public function tampil_pengaduan_selesai()
    {
        $show = $this->M_pengaduan;
        $data = [
            "pengaduan" => $show->tampil_data_selesai()
        ];

        $this->load->view('Backend/Pengaduan_Selesai', $data);
    }
}
