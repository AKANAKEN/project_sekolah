<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_schedule extends CI_Model {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        // public function get_query($data_input) {
        //     // Lakukan query
        //     $this->db->select('*');
        //     $this->db->from('jadwal_pelajaran');
        //     $this->db->JOIN('kelas');
        //     $this->db->on('jadwal_pelajaran.kode_kelas = kelas.kode_kelas');
        //     $this->db->JOIN('ruangan ');
        //     $this->db->on('jadwal_pelajaran.kode_ruangan = ruangan.kode_ruangan');
        //     $this->db->JOIN('guru ');
        //     $this->db->on('jadwal_pelajaran.NIP = guru.NIP');
        //     $this->db->JOIN('mapel ');
        //     $this->db->on('jadwal_pelajaran.kode_mapel = mapel.kode_mapel');
        //     $query = $this->db->get();
    
        //     // Kembalikan hasil query
        //     return $query->result();
        // }

        public function insert($data)
        {
            $this->db->insert('jadwal_pelajaran', $data); // Ganti 'nama_tabel_database' dengan nama tabel sesuai dengan yang Anda miliki
        }
    
        public function get_all_jadwal()
        {
            return $this->db->get('jadwal_pelajaran')->result();
        }
    
        public function get_jadwal_by_id_jadwal($id_jadwal)
        {
           
        return $this->db->get_where('jadwal_pelajaran', array('id_jadwal' => $id_jadwal))->row(); 
    }
    
        public function edit_jadwal($where, $table)
        {
            return $this->db->get_where($table, $where);
        }
        public function update_jadwal($where, $data, $table)
        {
            $this->db->where($where);
            $this->db->update($table, $data);
        }
    
        public function delete_jadwal($id_jadwal)
        {
            $this->db->delete('jadwal_pelajaran', array('id_jadwal' => $id_jadwal));
        }
    
    

}