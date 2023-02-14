<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Model
{
    public function get_kelas($id)
    {
        $this->db->select('*');
        $this->db->from('petugas');
        $this->db->where('id', $id);
        $this->db->join('kelas', 'kelas.id_kelas=kelas.id_kelas');
        $query = $this->db->get_where()->row_array();
        return $query;
    }

    public function get_all()
    {
        $this->db->select('*');
        $this->db->from('petugas');
        $this->db->where('level', 'Murid');
        $this->db->join('kelas', 'kelas.id_kelas=kelas.id_kelas');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_petugas()
    {
        $this->db->select('*');
        $this->db->from('petugas');
        $this->db->where('level', 'Admin');
        $query = $this->db->get()->result_array();
        return $query;
    }
}
