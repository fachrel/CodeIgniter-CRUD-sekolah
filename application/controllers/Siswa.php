<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
        // echo "ini adalah method index di controller siswa";
	}
	public function daftar_siswa()
	{
		$this->load->view('daftar_siswa');
        // echo "ini adalah method index di controller siswa";
	}
	public function tambah_siswa()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/tambah_siswa');
		$this->load->view('templates/footer');
        // echo "ini adalah method index di controller siswa";
	}
}
