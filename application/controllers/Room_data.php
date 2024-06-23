<?php
// application/controllers/ruangan.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Room_data extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('M_room');
        $this->load->helper('form');
    }
    
    public function index() {
        $data['ruangan'] = $this->M_room->get_all_ruangan();
        $this->load->view('view_room', $data);
    }
    // public function add() {
    //     $this->load->view('input_class');
    // }
    public function edit($kode_ruangan) {
        $data['ruangan'] = $this->M_room->get_ruangan_by_kode_ruangan($kode_ruangan);
        $this->load->view('edit_room', $data);
    }

    public function update(){
        $kode_ruangan = $this->input->post('kode_ruangan');
        $kapasitas_ruangan = $this->input->post('kapasitas_ruangan');
        $data = array(
            'kode_ruangan'=> $kode_ruangan,
            'kapasitas_ruangan'=> $kapasitas_ruangan
        );
        $where = array('kode_ruangan' => $kode_ruangan);
        $this->M_room->update_ruangan($where, $data, 'ruangan');
        redirect('dashboard/room_data');
    }

    public function insert_data() {
        $data = array(
            'kode_ruangan' => $this->input->post('kode_ruangan'),
            'kapasitas_ruangan' => $this->input->post('kapasitas_ruangan')
        );

        $this->M_room->insert($data);
        redirect('view_room');
    }

    public function delete($kode_ruangan) {
        $this->M_room->delete_ruangan($kode_ruangan);
        redirect('ruangan');
    }
    

}


