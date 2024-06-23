<?php
// application/controllers/Jadwal.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule_data extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('M_schedule');
        $this->load->model('M_study');
        $this->load->model('M_room');
        $this->load->model('M_teacher');
        $this->load->model('M_class');
        $this->load->helper('form');

    }
    

    public function index() {
        $data['jadwals'] = $this->M_schedule->get_jadwals();
        
        $this->load->view('view_schedule', $data); // Sesuaikan nama view dengan yang Anda buat
        
        // $data1['guru'] = $this->M_teacher->get_all_guru();
        // $this->load->view('schedule_detail', $data1); // Sesuaikan nama view dengan yang Anda buat
    }


    public function add() {
        $this->load->view('input_schedule');
    }

    public function insert_data() {
        $data = array(
            'Hari' => $this->input->post('hari'),
            'Jam_mulai' => $this->input->post('jam_mulai'),
            'Jam_selesai' => $this->input->post('jam_selesai'),
            'kode_kelas' => $this->input->post('kode_kelas'),
            'kode_ruangan' => $this->input->post('kode_ruangan'),
            'NIP' => $this->input->post('nip'),
            'kode_mapel' => $this->input->post('kode_mapel')
        );
        
        $this->M_schedule->insert($data);
        
        redirect('schedule');
    }

    public function edit($id_jadwal) {
        $data['jadwal'] = $this->M_schedule->get_jadwal_by_id($id_jadwal);
        $this->load->view('edit_schedule', $data);
    }

    public function update(){
        $id_jadwal = $this->input->post('id_jadwal', true);
        $Hari = $this->input->post('Hari', true);
        $Jam_mulai = $this->input->post('Jam_mulai', true);
        $Jam_selesai = $this->input->post('Jam_selesai', true);
        $kode_kelas = $this->input->post('kode_kelas', true);
        $kode_ruangan = $this->input->post('kode_ruangan', true);
        $NIP = $this->input->post('NIP', true);
        $kode_mapel = $this->input->post('kode_mapel', true);
        
        $data = array(
            'Hari' => $Hari,
            'Jam_mulai' => $Jam_mulai,
            'Jam_selesai' => $Jam_selesai,
            'kode_kelas' => $kode_kelas,
            'kode_ruangan' => $kode_ruangan,
            'NIP' => $NIP,
            'kode_mapel' => $kode_mapel
        );

        $where = array('id_jadwal' => $id_jadwal);
        $this->M_schedule->update_jadwal($where, $data, 'jadwal_pelajaran');
        redirect('dashboard/schedule_data');
    }


    public function delete($id_jadwal) {
        $this->M_schedule->delete_jadwal($id_jadwal);
        $this->db->where('id_jadwal', $id_jadwal);
        $this->db->delete('jadwal_pelajaran');
        redirect('view_schedule');
    }
}
