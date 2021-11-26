<?php 
use GuzzleHttp\Client;

class Kelas_model extends CI_model {

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://jagoanapi.000webhostapp.com/api/records/'
        ]);
    }
    public function getAllKelas()
    {
        //return $this->db->get('Kelas')->result_array();
        $response = $this->_client->request('GET', 'kelas');
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['records'];
    }
    
    public function getKelasById($id)
    {
        //return $this->db->get_where('Kelas', ['id' => $id])->row_array();
        $response = $this->_client->request('GET', 'kelas/' .$id);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function tambahDataKelas()
    {
        $data = [
            "nama_kelas" => $this->input->post('nama_kelas', true),
            "id_guru" => $this->input->post('id_guru', true),
            "jml_siswa" => $this->input->post('jml_siswa', true)
        ];

        //$this->db->insert('Kelas', $data);
        $response = $this->_client->request('POST', 'kelas', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function hapusDataKelas($id)
    {
        // $this->db->where('id', $id);
        //$this->db->delete('Kelas', ['id' => $id]);
        $response = $this->_client->request('GET', 'kelas/' .$id);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function ubahDataKelas($id)
    {
        $data = [
            "nama_kelas" => $this->input->post('nama_kelas', true),
            "id_guru" => $this->input->post('id_guru', true),
            "jml_siswa" => $this->input->post('jml_siswa', true)
        ];

        //$this->db->where('id', $this->input->post('id'));
        //$this->db->update('Kelas', $data);
        $response = $this->_client->request('PUT', 'kelas/' .$id, [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function cariDataKelas()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}