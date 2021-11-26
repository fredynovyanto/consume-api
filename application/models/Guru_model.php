<?php 
use GuzzleHttp\Client;

class Guru_model extends CI_model {

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://jagoanapi.000webhostapp.com/api/records/'
        ]);
    }
    public function getAllGuru()
    {
        //return $this->db->get('Guru')->result_array();
        $response = $this->_client->request('GET', 'guru');
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['records'];
    }
    
    public function getGuruById($id)
    {
        //return $this->db->get_where('Guru', ['id' => $id])->row_array();
        $response = $this->_client->request('GET', 'guru/' .$id);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function tambahDataGuru()
    {
        $data = [
            "nama_guru" => $this->input->post('nama_guru', true),
            "alamat" => $this->input->post('alamat', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "kelamin" => $this->input->post('kelamin', true),
            "telp" => $this->input->post('telp', true),
            "id_kelas" => $this->input->post('id_kelas', true)
        ];

        //$this->db->insert('Guru', $data);
        $response = $this->_client->request('POST', 'guru', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function hapusDataGuru($id)
    {
        // $this->db->where('id', $id);
        //$this->db->delete('Guru', ['id' => $id]);
        $response = $this->_client->request('GET', 'guru/' .$id);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function ubahDataGuru($id)
    {
        $data = [
            "nis" => $this->input->post('nis', true),
            "nama_guru" => $this->input->post('nama_guru', true),
            "alamat" => $this->input->post('alamat', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "kelamin" => $this->input->post('kelamin', true),
            "telp" => $this->input->post('telp', true),
            "id_kelas" => $this->input->post('id_kelas', true)
        ];

        //$this->db->where('id', $this->input->post('id'));
        //$this->db->update('Guru', $data);
        $response = $this->_client->request('PUT', 'guru/' .$id, [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function cariDataGuru()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}