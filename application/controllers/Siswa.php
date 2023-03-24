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
        // echo "ini adalah method index di controller siswa";
	}

	public function tambah_siswa()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/tambah_siswa');
		$this->load->view('templates/footer');
        // echo "ini adalah method index di controller siswa";
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

	public function daftar_siswa()
	{
        $data['siswa'] = $this->siswa_model->get_data('siswa')->result();
		$this->load->view('templates/header');
		$this->load->view('pages/daftar_siswa', $data);
		$this->load->view('templates/footer');
        // echo "ini adalah method index di controller siswa";
	}
}
