<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['jumlah'] = $this->siswa_model->get_jumlah_siswa();
        $data['lakiLaki'] = $this->siswa_model->get_jumlah_lakiLaki();
        $data['perempuan'] = $this->siswa_model->get_jumlah_perempuan();

        $data['ra'] = $this->siswa_model->get_jumlah_ra();
        $data['rb'] = $this->siswa_model->get_jumlah_rb();
        $data['rc'] = $this->siswa_model->get_jumlah_rc();


        $this->load->view('templates/header');
        $this->load->view('pages/dashboard', $data);
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

    public function simpan_siswa()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('nis', 'Nis', 'required|min_length[4]');
        $this->form_validation->set_rules('kelamin', 'Kelamin', 'required|in_list[Laki-laki,Perempuan]');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|in_list[X RPL A,X RPL B,X RPL C]');

        if ($this->form_validation->run() != false) {
            $data = [
                'nama' => $this->input->post('nama'),
                'umur' => $this->input->post('umur'),
                'nis' => $this->input->post('nis'),
                'kelamin' => $this->input->post('kelamin'),
                'kelas' => $this->input->post('kelas'),
            ];
            $this->siswa_model->add_data($data);
            redirect('siswa');
        } else {
            $this->load->view('templates/header');
            $this->load->view('pages/tambah_siswa');
            $this->load->view('templates/footer');
            return false;

        }
    }

    public function hapus($id)
    {
        $this->siswa_model->hapus($id);
        redirect('siswa');
    }

    public function edit($id)
    {
        $result = $this->siswa_model->get_siswa_id($id);
        if ($result->num_rows() > 0) {
            $i = $result->row_array();
            $data = array(
                'id' => $i['id'],
                'nama' => $i['nama'],
                'umur' => $i['umur'],
                'nis' => $i['nis'],
                'kelamin' => $i['kelamin'],
                'kelas' => $i['kelas'],
            );
            $this->load->view('templates/header');
            $this->load->view('pages/edit_siswa', $data);
            $this->load->view('templates/footer');
        } else {
            echo "Data Was Not Found";
        }
    }

    public function update()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('nis', 'Nis', 'required|min_length[4]');
        $this->form_validation->set_rules('kelamin', 'Kelamin', 'required|in_list[Laki-laki,Perempuan]');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|in_list[X RPL A,X RPL B,X RPL C]');

        if ($this->form_validation->run() != false) {

            $data = array(
                'id' => $this->input->post('id'),
                'nama' => $this->input->post('nama'),
                'umur' => $this->input->post('umur'),
                'nis' => $this->input->post('nis'),
                'kelamin' => $this->input->post('kelamin'),
                'kelas' => $this->input->post('kelas'),
            );
            $this->siswa_model->update($data);
            redirect('siswa');
        }else{
			$this->edit($this->input->post('id'));
			return false;
		}
    }

	public function view($id){
		$result = $this->siswa_model->get_siswa_id($id);
        if ($result->num_rows() > 0) {
            $i = $result->row_array();
            $data = array(
                'id' => $i['id'],
                'nama' => $i['nama'],
                'umur' => $i['umur'],
                'nis' => $i['nis'],
                'kelamin' => $i['kelamin'],
                'kelas' => $i['kelas'],
            );
            $this->load->view('templates/header');
            $this->load->view('pages/view_siswa', $data);
            $this->load->view('templates/footer');
		} else {
			redirect('siswa');
		}
	}
}
