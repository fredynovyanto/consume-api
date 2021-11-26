<?php 
use GuzzleHttp\Client;

class Siswa_model extends CI_model {

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://jagoanapi.000webhostapp.com/api/records/'
        ]);
    }
    public function getAllSiswa()
    {
        //return $this->db->get('mahasiswa')->result_array();
        $response = $this->_client->request('GET', 'siswa');
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['records'];
    }
    
    public function getSiswaById($id)
    {
        //return $this->db->get_where('Siswa', ['id' => $id])->row_array();
        $response = $this->_client->request('GET', 'siswa/' .$id);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function tambahDataSiswa()
    {
        $data = [
            "nis" => $this->input->post('nis', true),
            "nama_siswa" => $this->input->post('nama_siswa', true),
            "alamat" => $this->input->post('alamat', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "id_kelamin" => $this->input->post('id_kelamin', true),
            "telp" => $this->input->post('telp', true),
            "id_kelas" => $this->input->post('id_kelas', true)
        ];

        //$this->db->insert('Siswa', $data);
        $response = $this->_client->request('POST', 'siswa', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function hapusDataSiswa($id)
    {
        // $this->db->where('id', $id);
        //$this->db->delete('Siswa', ['id' => $id]);
        $response = $this->_client->request('GET', 'siswa/' .$id);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function ubahDataSiswa($id)
    {
        $data = [
            "nis" => $this->input->post('nis', true),
            "nama_siswa" => $this->input->post('nama_siswa', true),
            "alamat" => $this->input->post('alamat', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "id_kelamin" => $this->input->post('id_kelamin', true),
            "telp" => $this->input->post('telp', true),
            "id_kelas" => $this->input->post('id_kelas', true)
        ];

        //$this->db->where('id', $this->input->post('id'));
        //$this->db->update('Siswa', $data);
        $response = $this->_client->request('PUT', 'siswa/' .$id, [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function cariDataSiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('siswa')->result_array();
    }
}