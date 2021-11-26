<?php

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Guru_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Guru';
        $data['guru'] = $this->Guru_model->getAllGuru();
        if( $this->input->post('keyword') ) {
            $data['guru'] = $this->Guru_model->cariDataGuru();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('guru/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Guru';

        $this->form_validation->set_rules('nama_guru', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('guru/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Guru_model->tambahDataGuru();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('guru');
        }
    }

    public function hapus($id)
    {
        $this->Guru_model->hapusDataGuru($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('guru');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Guru';
        $data['guru'] = $this->Guru_model->getGuruById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('guru/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Guru';
        $data['guru'] = $this->Guru_model->getGuruById($id);
        //$data['jurusan'] = ['Teknik Informatika', 'Teknik Mesin', 'Teknik Planologi', 'Teknik Pangan', 'Teknik Lingkungan'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nis', 'NIS', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('guru/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Guru_model->ubahDataGuru($id);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('guru');
        }
    }

}
