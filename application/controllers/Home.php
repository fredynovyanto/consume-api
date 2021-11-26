<?php 

class Home extends CI_Controller {

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
        $data['judul'] = 'Halaman Home';
        $data['siswa'] = $this->Siswa_model->getAllSiswa();
		$data['guru'] = $this->Guru_model->getAllGuru();
		$data['karyawan'] = $this->Karyawan_model->getAllKaryawan();
		$data['kelas'] = $this->Kelas_model->getAllKelas();
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}