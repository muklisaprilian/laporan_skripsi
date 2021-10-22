<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_panitia extends Ci_Model {	

	public function tampil_soal()
	{
		return $this->db->get('soal');
	}

	public function tampil_peraturan()
	{
		return $this->db->get('peraturan');
	}

	public function tampil_jawaban()
	{
		return $this->db->get('jawaban');
	}

	public function tampil_grafik()
	{
		return $this->db->get('grafik');
	}

	public function hapus_soal($id)
	{
		return $this->db->delete('soal', array('id_soal' => $id));
	}

	public function hapus_grafik($id)
	{
		return $this->db->delete('grafik', array('id_grafik' => $id));
	}

	public function hapus_peraturan($id)
	{
		return $this->db->delete('peraturan', array('id_peraturan' => $id));
	}					
	
}