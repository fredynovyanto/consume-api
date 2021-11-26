<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
		$this->load->model('Guru_model');
		$this->load->model('Karyawan_model');
		$this->load->model('Kelas_model');
        $this->load->library('form_validation');
    }

	public function index()
    {
        $data['judul'] = 'Daftar Siswa';
        $data['siswa'] = $this->Siswa_model->getAllSiswa();
		$data['guru'] = $this->Guru_model->getAllGuru();
		$data['karyawan'] = $this->Karyawan_model->getAllKaryawan();
		$data['kelas'] = $this->Kelas_model->getAllKelas();
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

	public function coba()
	{
		echo "Welcome / coba";
	}
}
