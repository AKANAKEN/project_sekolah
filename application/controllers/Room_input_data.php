<?php
// application/controllers/Kelas.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Room_input_data extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('M_room');
        $this->load->helper('form');
    }
    
    public function index() {
        $this->load->view('input_room');
    }

    public function insert_data() {
        $data = array(
            'kode_ruangan' => $this->input->post('kode_ruangan'),
            'kapasitas_ruangan' => $this->input->post('kapasitas_ruangan')
        );
        
        $this->M_room->insert($data);
        
        redirect('dashboard/room_data');
    }
}