<?php 
use GuzzleHttp\Client;

class Karyawan_model extends CI_model {

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://jagoanapi.000webhostapp.com/api/records/'
        ]);
    }
    public function getAllKaryawan()
    {
        //return $this->db->get('Karyawan')->result_array();
        $response = $this->_client->request('GET', 'karyawan');
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['records'];
    }
    
    public function getKaryawanById($id)
    {
        //return $this->db->get_where('Karyawan', ['id' => $id])->row_array();
        $response = $this->_client->request('GET', 'karyawan/' .$id);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function tambahDataKaryawan()
    {
        $data = [
            "nik" => $this->input->post('nik', true),
            "nama_karyawan" => $this->input->post('nama_karyawan', true),
            "alamat" => $this->input->post('alamat', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "kelamin" => $this->input->post('kelamin', true),
            "telp" => $this->input->post('telp', true),
            "kode_jabatan" => $this->input->post('kode_jabatan', true)
        ];

        //$this->db->insert('Karyawan', $data);
        $response = $this->_client->request('POST', 'karyawan', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function hapusDataKaryawan($id)
    {
        // $this->db->where('id', $id);
        //$this->db->delete('Karyawan', ['id' => $id]);
        $response = $this->_client->request('GET', 'karyawan/' .$id);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function ubahDataKaryawan($id)
    {
        $data = [
            "nik" => $this->input->post('nik', true),
            "nama_karyawan" => $this->input->post('nama_karyawan', true),
            "alamat" => $this->input->post('alamat', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "kelamin" => $this->input->post('kelamin', true),
            "telp" => $this->input->post('telp', true),
            "kode_jabatan" => $this->input->post('kode_jabatan', true)
        ];

        //$this->db->where('id', $this->input->post('id'));
        //$this->db->update('Karyawan', $data);
        $response = $this->_client->request('PUT', 'karyawan/' .$id, [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function cariDataKaryawan()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}