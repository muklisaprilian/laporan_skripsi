<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_admin extends CI_Model {

	public function tampil_panitia()
	{
		return $this->db->get('panitia');
	}

	public function Ambil($where= "") {
      $data = $this->db->query('select * from panitia '.$where);
      return $data;
  	}
	
	public function tampil_calon_mahasiswa()
	{
		return $this->db->get('calon_mahasiswa');
	}

	public function Ambil1($where= "") {
      $data = $this->db->query('select * from calon_mahasiswa '.$where);
      return $data;
  	}

	public function tampil_materi_ujian()
	{
		return $this->db->get('materi_ujian');
	}

	public function Ambil2($where= "") {
      $data = $this->db->query('select * from materi_ujian '.$where);
      return $data;
  	}

	public function tampil_program_studi()
	{
		return $this->db->get('program_studi');
	}

	public function tampil_fakultas()
	{
		return $this->db->get('fakultas');
	}

	public function tampil_tahun_akademik()
	{
		return $this->db->get('tahun_akademik');
	}

	public function hapus_panitia($id)
	{
		return $this->db->delete('panitia', array('id_panitia' => $id));
	}

	public function hapus_calon_mahasiswa($id)
	{
		return $this->db->delete('calon_mahasiswa', array('id_mahasiswa' => $id));
	}

	public function hapus_materi_ujian($id)
	{
		return $this->db->delete('materi_ujian', array('id_materi' => $id));
	}

	public function hapus_program_studi($id)
	{
		return $this->db->delete('program_studi', array('id_prodi' => $id));
	}

	public function hapus_fakultas($id)
	{
		return $this->db->delete('fakultas', array('id_fakultas' => $id));
	}

	public function hapus_tahun_akademik($id)
	{
		return $this->db->delete('tahun_akademik', array('id_thn' => $id));
	}

}
