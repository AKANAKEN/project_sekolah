<?php
// application/models/M_guru.php

defined('BASEPATH') or exit('No direct script access allowed');

class M_teacher extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function insert($data)
    {
        $this->db->insert('guru', $data); // Ganti 'nama_tabel_database' dengan nama tabel sesuai dengan yang Anda miliki
    }

    public function get_all_guru()
    {
        return $this->db->get('guru')->result();
    }

    public function get_guru_by_nip($NIP)
    {
        return $this->db->get_where('guru', array('NIP' => $NIP))->row();
    }

    public function edit_guru($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_guru($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete_guru($NIP)
    {
        $this->db->delete('guru', array('NIP' => $NIP));
    }
}
