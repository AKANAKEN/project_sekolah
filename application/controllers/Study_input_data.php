<?php
// application/controllers/Kelas.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Study_input_data extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('M_study');
        $this->load->helper('form');
    }
    
    public function index() {
        $this->load->view('input_study');
    }

    public function insert_data() {
        $data = array(
            'kode_mapel' => $this->input->post('kode_mapel'),
            'nama_mapel' => $this->input->post('nama_mapel')
        );
        
        $this->M_study->insert($data);
        
        redirect('dashboard/study_data');
    }

    public function update(){
        $kode_mapel = $this->input->post('kode_mapel', true);
        $nama_mapel = $this->input->post('nama_mapel', true);
        $data = array(
            'kode_mapel' => $kode_mapel,
            'nama_mapel' => $nama_mapel
        );
        $where = array('kode_mapel' => $kode_mapel);
        $this->M_student->update_siswa($where, $data, 'mapel');
        redirect('dashboard/student_data');
    }
}