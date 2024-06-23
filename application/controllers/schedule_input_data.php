<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule_input_data extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('M_schedule'); // Load model jadwal_pelajaran
        $this->load->model('M_class');
        $this->load->model('M_teacher'); // Load the M_teacher model
        $this->load->model('M_room');
        $this->load->model('M_student');
        $this->load->model('M_study');
        $this->load->helper('form');
    }
    
    public function index() {
        // Menampilkan form input untuk data siswa
        $data['jadwal'] = $this->M_schedule->get_all_jadwal();
        $data['siswa'] = $this->M_student->get_all_siswa();
        $this->load->view('input_schedule');
    }

    public function insert_data() {
        // Mengambil data dari form input siswa
        
        $this->db->select('jadwal_pelajaran.*, kelas.kode_kelas, ruangan.kode_ruangan, guru.NIP, mapel.kode_mapel'); 		
        $this->db->from('jadwal_pelajaran'); 		
        $this->db->join('kelas', 'kelas.kode_kelas = jadwal_pelajaran.kode_kelas');
        $this->db->join('ruangan', 'ruangan.kode_ruangan = jadwal_pelajaran.kode_ruangan'); 		
        $this->db->join('guru', 'guru.NIP = jadwal_pelajaran.NIP');
        $this->db->join('mapel', 'mapel.kode_mapel = jadwal_pelajaran.kode_mapel'); 		
        $query = $this->db->get();
        
        $data = array(
            'Hari' => $this->input->post('Hari'),
            'Jam_mulai' => $this->input->post('jam_mulai'),
            'Jam_selesai' => $this->input->post('jam_selesai'),
            'kode_kelas' => $this->input->post('kode_kelas'),
            'kode_ruangan' => $this->input->post('kode_ruangan'),
            'NIP' => $this->input->post('nip'),
            'kode_mapel' => $this->input->post('kode_mapel')
        );
        
        $this->M_schedule->insert($data);
        
        redirect('dashboard/schedule_data');
    }

    public function get_table2(){
        $this->db->select('jadwal_pelajaran.*, kelas.kode_kelas, ruangan.kode_ruangan, guru.NIP, mapel.kode_mapel'); 		
        $this->db->from('jadwal_pelajaran'); 		
        $this->db->join('kelas', 'kelas.kode_kelas = jadwal_pelajaran.kode_kelas');
        $this->db->join('ruangan', 'ruangan.kode_ruangan = jadwal_pelajaran.kode_ruangan'); 		
        $this->db->join('guru', 'guru.NIP = jadwal_pelajaran.NIP');
        $this->db->join('mapel', 'mapel.kode_mapel = jadwal_pelajaran.kode_mapel'); 		
        $query = $this->db->get(); 		
        return $query->result(); 	
    }

    public function get_table() {
        // Tangkap data dari form
        $data_input = $this->input->post('id_jadwal');

        // Lakukan query berdasarkan data input
        $this->load->model('M_schedule');
        $data['jadwal'] = $this->M_schedule->get_query($data_input);

        // Load view yang menampilkan hasil
        $this->load->view('view_hasil_query', $data);
    }

    // Fungsi lain untuk edit, update, dan delete data siswa bisa ditambahkan di sini

    // Contoh fungsi untuk menampilkan data jadwal_pelajaran
    public function show_jadwal() {
        $data['jadwals'] = $this->M_schedule->get_jadwals(); // Ambil data jadwal_pelajaran dari model
        $this->load->view('view_schedule', $data); // Tampilkan data jadwal_pelajaran menggunakan view
    }
}
