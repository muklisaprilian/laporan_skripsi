<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_user extends Ci_Model {

  public function takeUser($username, $password) 
  { 
    $this->db->select('*');
    $this->db->from('calon_mahasiswa');
     $this->db->where('id_mahasiswa', 1);
    $this->db->where('nama_mahasiswa', $nama_mahasiswa);
    $this->db->where('jenis_kelamin', $jenis_kelamin);
    $this->db->where('ttl', $ttl);
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $this->db->where('prodi_satu', $prodi_satu);
    $this->db->where('prodi_dua', $prodi_dua);
    $this->db->where('prodi_tiga', $prodi_tiga);
    //$this->db->where('jalur_tes', $jalur_tes);
    $query = $this->db->get();
    return $query->num_rows(); 
  }

  public function Ambil($where= "") {
    $data = $this->db->query('select * from calon_mahasiswa '.$where);
    return $data;
  }


  public function Simpan($tabel, $data){
    $res = $this->db->insert($tabel, $data);
    return $res;
  }

  public function Rubah($data)
  {
    $this->db->where('id_mahasiswa',$data['id_mahasiswa']);
    $this->db->update('calon_mahasiswa',$data);

  }

  public function Hapus($table,$where){
    return $this->db->delete($table,$where);
  }

  public function manualQuery($q)
  {
      return $this->db->query($q);
  }

  public function AmbilProdi($username = '') {
    $data = $this->db->query("select * from calon_mahasiswa where username = '$username'")->result_array();
    return $data[0]['prodi_satu'];
  }

  public function AmbilProdi1($username = '') {
    $data = $this->db->query("select * from calon_mahasiswa where username = '$username'")->result_array();
    return $data[0]['prodi_dua'];
  }

  public function AmbilProdi2($username = '') {
    $data = $this->db->query("select * from calon_mahasiswa where username = '$username'")->result_array();
    return $data[0]['prodi_tiga'];
  }

  public function AmbilNoPeserta($username = '') {
    $data = $this->db->query("select * from calon_mahasiswa where username = '$username'")->result_array();
    return $data[0]['no_peserta'];
  }

  public function UpdateStatusUser($username,$data)
  {
    $this->db->where('username',$username);
    $this->db->update('calon_mahasiswa',$data);

  } 

  public function userData($username) 
  { 
    $this->db->select('username'); 
    $this->db->select('nama_mahasiswa'); 
    $this->db->where('username', $username); 
    $query = $this->db->get('calon_mahasiswa'); 
    return $query->row(); 
  }

  public function getBarangById($id){
        $this->db->where('no_peserta',$id);
        $query = $this->db->get('calon_mahasiswa');
        return $query->result();
    }

    
}