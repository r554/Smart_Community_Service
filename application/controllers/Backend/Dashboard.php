<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
            "count_pengaduan" => $show->count_tampil_data(),
            "count_diproses" => $show->count_tampil_data_diproses(),
            "count_dibatalkan" => $show->count_tampil_data_dibatalkan(),
            "count_selesai" => $show->count_tampil_data_selesai(),
        ];

        $this->load->view('Backend/Dashboard', $data);
    }
}
