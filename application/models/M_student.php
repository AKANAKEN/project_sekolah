<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_student extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert($data) {
        $this->db->insert('siswa', $data); // Ganti 'nama_tabel_database' dengan nama tabel sesuai dengan yang Anda miliki
    }
    // Mendapatkan semua data siswa
    public function get_all_siswa() {
        return $this->db->get('siswa')->result();
    }

    // Menambahkan data siswa baru
    public function add_siswa($data) {
        return $this->db->insert('siswa', $data);
    }

    // Mendapatkan data siswa berdasarkan NIS
    public function get_siswa_by_nis($NIS) {
        return $this->db->get_where('siswa', array('NIS' => $NIS))->row();
    }

    // Update data siswa berdasarkan NIS
    public function update_siswa($where, $data, $table) {
        $this->db->where($where);
        return $this->db->update($table, $data);
    }
}
