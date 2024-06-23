<?php
// application/controllers/Kelas.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Class_data extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('M_class');
        $this->load->helper('form');

    }
    

public function index() {
    $data['classes'] = $this->M_class->get_classes();
    $this->load->view('view_class', $data); // ganti 'view_class' sesuai dengan nama view Anda
}


    public function add() {
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
        
        redirect('Dashboard/class_tabel');
    }

    public function edit($kode_kelas) {
        $data['class'] = $this->M_class->get_class_by_id($kode_kelas);
        $this->load->view('edit_class', $data);
    }

    public function update(){
        $kode_kelas = $this->input->post('kode_kelas', true);
        $wali_kelas = $this->input->post('wali_kelas', true);
        $tahun_ajaran = $this->input->post('tahun_ajaran', true);
        $jumlah_siswa = $this->input->post('jumlah_siswa', true);
        $data = array(
            'kode_kelas'=> $kode_kelas,
            'wali_kelas'=> $wali_kelas,
            'tahun_ajaran'=> $tahun_ajaran,
            'jumlah_siswa'=> $jumlah_siswa
        );
        $where = array('kode_kelas' => $kode_kelas);
        $this->M_class->update_class($where, $data, 'kelas');
        redirect('dashboard/class_tabel');
    }


    public function delete($kode_kelas) {
        $this->M_class->delete_class($kode_kelas);
        redirect('class_data');
    }




}
