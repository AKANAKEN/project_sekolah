<?php
// application/controllers/Kelas.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Class_input_data extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('M_class');
        $this->load->helper('form');
    }
    
    public function index() {
        $this->load->view('input_class');
    }

    public function insert_data() {
        $data = array(
            'kode_kelas' => $this->input->post('kode_kelas'),
            'wali_kelas' => $this->input->post('wali_kelas'),
            'tahun_ajaran' => $this->input->post('tahun_ajaran'),
            'jumlah_siswa' => $this->input->post('jumlah_siswa')
        );
        
        $this->M_class->insert($data);
        
        redirect('dashboard/class_input_tabel');
    }
}
