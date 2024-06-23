<?php
// application/models/M_ruangan.php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_room extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function insert($data) {
        $this->db->insert('ruangan', $data); // Ganti 'nama_tabel_database' dengan nama tabel sesuai dengan yang Anda miliki
    }

    public function get_all_ruangan() {
        return $this->db->get('ruangan')->result();
    }

    public function get_ruangan_by_kode_ruangan($kode_ruangan) {
        return $this->db->get_where('ruangan', array('kode_ruangan' => $kode_ruangan))->row();
    }

    public function update_ruangan($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete_ruangan($kode_ruangan) {
        $this->db->delete('ruangan', array('kode_ruangan' => $kode_ruangan));
    }


    
}

