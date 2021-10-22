<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_jawaban extends Ci_Model {

  public function Ambil3($aktif) {
  $this->db->select('*');
  $this->db->from('jawaban');
  $this->db->join('calon_mahasiswa','calon_mahasiswa.id_mahasiswa=jawaban.id_mahasiswa');
  $this->db->where($aktif);
  $query = $this->db->get();
  return $query->result();
  }

  public function Ambil4($fakultas,$prodi) {
  $this->db->select('*');
  $this->db->from('jawaban');
  $this->db->join('calon_mahasiswa','calon_mahasiswa.id_mahasiswa=jawaban.id_mahasiswa');
  $this->db->like('fakultas_satu',$fakultas);
  $this->db->or_like('fakultas_dua',$fakultas);
  $this->db->or_like('fakultas_tiga',$fakultas);
  $this->db->or_like('prodi_satu',$prodi);
  $this->db->or_like('prodi_dua',$prodi);
  $this->db->or_like('prodi_tiga',$prodi);
  return $this->db->get()->result();
  }

  public function ambildata(){
    $this->db->select('*');
    $this->db->from('jawaban');
    $this->db->join('calon_mahasiswa','calon_mahasiswa.id_mahasiswa=jawaban.id_mahasiswa');
    return $this->db->get();
  }

  public function ambildata1(){
    $this->db->select('thn_akademik,fkip,fe,ft,ftp,fkm,fai');
      $result = $this->db->get('grafik');
      return $result;
  }

  public function Ambil() {
    $data = $this->db->query("select * from jawaban, calon_mahasiswa where jawaban.id_mahasiswa=calon_mahasiswa.id_mahasiswa");
    return $data;
  }

  public function AmbilNilai2($idmahasiswa) {
    $data = $this->db->query("select * from jawaban, calon_mahasiswa where jawaban.id_mahasiswa=calon_mahasiswa.id_mahasiswa AND jawaban.id_mahasiswa='$idmahasiswa'");
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

  public function AmbilHasilTes1($where= "") {
    $data = $this->db->query('select * from calon_mahasiswa '.$where);
    return $data;
  }

  public function UpdateTotalNilai($id_jawaban,$data)
  {
    $this->db->where('id_jawaban',$id_jawaban);
    $this->db->update('jawaban',$data);

  }
}