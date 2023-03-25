<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('siswa_model');
	}

	public function index()
	{		
		$this->load->view('templates/header');
		$this->load->view('pages/dashboard');
		$this->load->view('templates/footer');
	}

	public function tambah_siswa()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/tambah_siswa');
		$this->load->view('templates/footer');
	}

	public function daftar_siswa()
	{
        $data['siswa'] = $this->siswa_model->get_data('siswa')->result();
		$this->load->view('templates/header');
		$this->load->view('pages/daftar_siswa', $data);
		$this->load->view('templates/footer');
	}

	public function simpan_siswa(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'umur' => $this->input->post('umur'),
			'nis' => $this->input->post('nis'),
			'kelas' => $this->input->post('kelas')
		);
		$this->siswa_model->add_data($data);
		redirect('siswa');
	}

	function hapus($id){
		$this->siswa_model->hapus($id);
		redirect('siswa');
	}

	function edit($id){
		$result = $this->siswa_model->get_siswa_id($id);
		if($result->num_rows() > 0){
			$i = $result->row_array();
			$data = array(
				'id'    => $i['id'],
				'nama'    => $i['nama'],
				'umur'  => $i['umur'],
				'nis'  => $i['nis'],
				'kelas'     => $i['kelas']
			);
			$this->load->view('templates/header');
			$this->load->view('pages/edit_siswa',$data);
			$this->load->view('templates/footer');
		}else{
			echo "Data Was Not Found";
		}
	}

	function update(){
		$data = array(
			'id' => $this->input->post('id'),
			'nama' => $this->input->post('nama'),
			'umur' => $this->input->post('umur'),
			'nis' => $this->input->post('nis'),
			'kelas' => $this->input->post('kelas')
		);
		$this->siswa_model->update($data);
		redirect('siswa');
	 }

	
}
