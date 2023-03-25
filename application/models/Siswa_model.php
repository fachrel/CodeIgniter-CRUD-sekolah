<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Siswa_model extends CI_Model{
    public function get_data($table){
        return $this->db->get($table);
    }

    function add_data($data){
        $this->db->insert('siswa',$data);
    }

    function hapus($id){
        $this->db->where('id', $id);
        $this->db->delete('siswa');
    }

    function get_siswa_id($id){
        $query = $this->db->get_where('siswa', array('id' => $id));
        return $query;
    }

    function update($data){
        $this->db->where('id', $data['id']);
        $this->db->update('siswa', $data);
      }
}