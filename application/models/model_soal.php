<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_soal extends Ci_Model {

   public function Ambil($where= "") {
    $data = $this->db->query('select * from soal '.$where);
    return $data;
  }

  public function Simpan($tabel, $data){
    $res = $this->db->insert($tabel, $data);
    return $res;
  }

  public function Rubah($soal,$data)
  {
    $this->db->where('id_soal',$soal);
    $this->db->update('soal',$data);

  }

  public function Hapus($table,$where){
    return $this->db->delete($table,$where);
  }

  public function AmbilJalurTest2($kode = 0) {
    $data = $this->db->query("select * from soal where id_soal = '$kode'")->result_array();
    return $data[0]['jalur_tes'];
  } 

  public function AmbilJawaban($kode = 0) {
    $data = $this->db->query("select * from soal where id_soal = '$kode'")->result_array();
    return $data[0]['kunci'];
  }
}