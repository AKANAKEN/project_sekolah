<?php
// application/controllers/Kelas.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Student_input extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('M_student');
        $this->load->helper('form');
    }
    
    public function index() {
        $data['siswa'] = $this->M_student->get_all_siswa();
        $this->load->view('view_class', $data); // ganti 'view_class' sesuai dengan nama view Anda
    }

    public function insert_data() {
        $data = array(
            'NIS' => $this->input->post('NIS'),
            'nama_siswa' => $this->input->post('nama_siswa'),
            'Alamat' => $this->input->post('Alamat'),
            'Tanggal_lahir' => $this->input->post('Tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'kode_kelas' => $this->input->post('kode_kelas')
        );
        
        $this->M_student->insert($data);
        
        redirect('dashboard/student_data');
    }

    public function edit($NIS) {
        $data['siswa'] = $this->M_student->get_siswa_by_nis($NIS);
        $this->load->view('edit_student', $data);
    }

    public function update(){
        $NIS = $this->input->post('NIS', true);
        $nama_siswa = $this->input->post('nama_siswa', true);
        $Alamat = $this->input->post('Alamat', true);
        $Tanggal_lahir = $this->input->post('Tanggal_lahir', true);
        $jenis_kelamin = $this->input->post('jenis_kelamin', true);
        $kode_kelas = $this->input->post('kode_kelas', true);
        $data = array(
            'NIS' => $NIS,
            'nama_siswa' => $nama_siswa,
            'Alamat' => $Alamat,
            'Tanggal_lahir' => $Tanggal_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'kode_kelas' => $kode_kelas
        );
        $where = array('NIS' => $NIS);
        $this->M_student->update_siswa($where, $data, 'siswa');
        redirect('dashboard/student_data');
    }
}