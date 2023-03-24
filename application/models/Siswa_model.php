<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Siswa_model extends CI_Model{
    public function get_data($table){
        return $this->db->get($table);
    }

    function add_data($data){
        $this->db->insert('siswa',$data);
      }
}