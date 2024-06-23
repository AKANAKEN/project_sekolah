<?php
// application/controllers/Kelas.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Class_teacher_input extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('M_teacher');
        $this->load->helper('form');
    }
    
    public function index() {
        $this->load->view('input_class');
    }

    public function insert_data() {
        $data = array(
            'NIP' => $this->input->post('NIP'),
            'nama_guru' => $this->input->post('nama_guru'),
            'Alamat_guru' => $this->input->post('Alamat_guru'),
            'JK' => $this->input->post('JK'),
            'Tanggal_Lahir_guru' => $this->input->post('Tanggal_Lahir_guru')
        );
        
        $this->M_teacher->insert($data);
        
        redirect('dashboard/class_teacher');
    }
}