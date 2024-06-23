<?php
// application/controllers/Guru.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Class_teacher extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('M_teacher');
        $this->load->helper('form');
    }
    
    public function index() {
        $data['guru'] = $this->M_teacher->get_all_guru();
        $this->load->view('view_teacher', $data);
    }
    // public function add() {
    //     $this->load->view('input_class');
    // }
    public function edit($NIP) {
        $data['guru'] = $this->M_teacher->get_guru_by_nip($NIP);
        $this->load->view('edit_teacher', $data);
    }

    public function update(){
        // Mendapatkan data dari form
        $NIP = $this->input->post('NIP');
        $nama_guru = $this->input->post('nama_guru');
        $Alamat_guru = $this->input->post('Alamat_guru');
        $JK = $this->input->post('JK');
        $Tanggal_Lahir_guru = $this->input->post('Tanggal_Lahir_guru');
        
        // Menyiapkan data untuk update
        $data = array(
            'nama_guru'=> $nama_guru,
            'Alamat_guru'=> $Alamat_guru,
            'JK'=> $JK,
            'Tanggal_Lahir_guru'=> $Tanggal_Lahir_guru
        );
        
        // Menyiapkan kondisi untuk update
        $where = array('NIP' => $NIP);
        
        // Memanggil fungsi update_guru dari model M_teacher untuk melakukan update
        $this->M_teacher->update_guru($where, $data, 'guru');
        
        // Redirect ke halaman dashboard/class_teacher setelah proses update selesai
        redirect('dashboard/class_teacher');
    }
    


    public function insert_data() {
        $data = array(
            'nama_guru' => $this->input->post('nama_guru'),
            'Alamat_guru' => $this->input->post('Alamat_guru'),
            'JK' => $this->input->post('JK'),
            'Tanggal_Lahir_guru' => $this->input->post('Tanggal_Lahir_guru')
        );

        $this->M_teacher->insert($data);
        redirect('view_teacher');
    }

    public function delete($nip) {
        $this->M_teacher->delete_guru($nip);
        redirect('guru');
    }
   

}


