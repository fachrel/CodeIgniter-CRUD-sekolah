<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

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
	public function daftar_siswa()
	{
        $data['siswa'] = $this->Siswa_model->get_data('siswa')->result();
		$this->load->view('templates/header');
		$this->load->view('pages/daftar_siswa', $data);
		$this->load->view('templates/footer');
        // echo "ini adalah method index di controller siswa";
	}
}
