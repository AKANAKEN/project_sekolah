<?php
// application/models/M_mapel.php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_study extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function insert($data) {
        $this->db->insert('mapel', $data); // Ganti 'nama_tabel_database' dengan nama tabel sesuai dengan yang Anda miliki
    }

    public function get_all_mapel() {
        return $this->db->get('mapel')->result();
    }

    public function get_mapel_by_kode_mapel($kode_mapel) {
        return $this->db->get_where('mapel', array('kode_mapel' => $kode_mapel))->row();
    }

    public function update_mapel($kode_mapel, $data) {
        $this->db->where('kode_mapel', $kode_mapel);
        $this->db->update('mapel', $data);
    }

    public function delete_mapel($kode_mapel) {
        $this->db->delete('mapel', array('kode_mapel' => $kode_mapel));
    }


    
}

