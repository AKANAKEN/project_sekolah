<?php
// application/controllers/mapel.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Study_data extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('M_study');
        $this->load->helper('form');
    }
    
    public function index() {
        $data['mapel'] = $this->M_study->get_all_mapel();
        $this->load->view('view_study', $data);
    }
    // public function add() {
    //     $this->load->view('input_class');
    // }
    public function edit($kode_mapel) {
        $data['mapel'] = $this->M_study->get_mapel_by_kode_mapel($kode_mapel);
        $this->load->view('edit_laern', $data);
    }

    public function insert_data() {
        $data = array(
            'kode_mapel' => $this->input->post('kode_mapel'),
            'nama_mapel' => $this->input->post('nama_mapel')
        );

        $this->M_study->insert($data);
        redirect('view_study');
    }

    public function delete($kode_mapel) {
        $this->M_study->delete_mapel($kode_mapel);
        redirect('mapel');
    }
    

}


