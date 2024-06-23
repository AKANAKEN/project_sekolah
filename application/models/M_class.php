<?php
// application/models/Kelas_model.php

defined('BASEPATH') or exit('No direct script access allowed');

class M_class extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert($data)
    {
        $this->db->insert('kelas', $data); // Ganti 'nama_tabel_database' dengan nama tabel sesuai dengan yang Anda miliki
    }

    // fungsi untuk di view tabel
    public function get_classes()
    {
        return $this->db->get('kelas')->result(); // Tidak perlu menggunakan result() di sini
    }

    public function get_class_by_id($kode_kelas)
    {
        return $this->db->get_where('kelas', array('kode_kelas' => $kode_kelas))->row();
    }

    public function edit_class($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_class($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete_class($kode_kelas)
    {
        $this->db->delete('kelas', array('kode_kelas' => $kode_kelas));
    }
}
