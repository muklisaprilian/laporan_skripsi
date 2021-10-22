<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_mahasiswa extends Ci_Model {

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

  public function AmbilIdMahasiswa($no_peserta = '') {
    $data = $this->db->query("select * from calon_mahasiswa where no_peserta = '$no_peserta'")->result_array();
    return $data[0]['id_mahasiswa'];
  }

   public function tampil_peraturan()
  {
    return $this->db->get('peraturan');
  }

   public function tampil_jawaban()
  {
    return $this->db->get('jawaban');
  }
}