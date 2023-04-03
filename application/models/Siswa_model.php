<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Siswa_model extends CI_Model{
    protected $rules = [
        [
            'field' => 'nis',
            'label' => 'NIS',
            'rules' => 'required|min_length[4]|integer'
        ], 
        [
            'field' => 'nama',
            'label' => 'Nama',  
            'rules' => 'required'
        ],
        [
            'field' => 'umur',
            'label' => 'Umur',  
            'rules' => 'required'
        ],
        [
            'field' => 'kelamin',
            'label' => 'Kelamin',  
            'rules' => 'required|in_list[Laki-laki, Perempuan]'
        ],
        [
            'field' => 'kelas',
            'label' => 'Kelas',
            'rules' => 'required|in_list[X RPL A, X RPL B, X RPL C]'
        ]
        ];

    public function __construct()
    {
        $this->load->library('form_validation');
    }

    public function get_data($table){
        return $this->db->get($table);
    }

    private function validation(){
        $this->form_validation->set_rules($this->rules);
        
        if ($this->form_validation->run() == TRUE){

            $siswa = [
                'nis' => $this->input->post('nis'), 
                'nama' => $this->input->post('nama'),
                'nama' => $this->input->post('umur'),
                'kelamin' => $this->input->post('kelamin'),
                'kelas' => $this->input->post('kelas')
            ];

            return $siswa;
        }

        return FALSE;
    }

    function add_data($data){
        $this->db->insert('siswa',$data);
        return TRUE;
    }

    public function insert_data_siswa(){
        $validation_siswa = $this->validation();
        if ($validation_siswa)
        {
            return $this->add_data($validation_siswa);
        } else 
        {
            return FALSE;
        }
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

    function get_jumlah_siswa(){
        $jumlah = $this->db->from("siswa")->count_all_results();
        return $jumlah;
    }
    function get_jumlah_lakiLaki(){
        $this->db->where('kelamin', 'Laki-laki');
        $jumlah = $this->db->from("siswa")->count_all_results();
        return $jumlah;
    }
    function get_jumlah_perempuan(){
        $this->db->where('kelamin', 'Perempuan');
        $jumlah = $this->db->from("siswa")->count_all_results();
        return $jumlah;
    }

    function get_jumlah_ra(){
        $this->db->where('kelas', 'X RPL A');
        $jumlah = $this->db->from("siswa")->count_all_results();
        return $jumlah;
    }
    function get_jumlah_rb(){
        $this->db->where('kelas', 'X RPL B');
        $jumlah = $this->db->from("siswa")->count_all_results();
        return $jumlah;
    }
    function get_jumlah_rc(){
        $this->db->where('kelas', 'X RPL C');
        $jumlah = $this->db->from("siswa")->count_all_results();
        return $jumlah;
    }
}