<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modelpanitia extends Ci_Model {
	public function AmbilDetailNilai($idjawaban) {
		$data = $this->db->query("select * from jawaban_detail a, soal b where a.id_soal=b.id_soal AND a.id_jawaban='$idjawaban'");
		return $data;
	}

	public function AmbilJawabanABCD($kode = 0, $abcd) {
		$data = $this->db->query("select * from soal where id_soal = '$kode'")->result_array();
		if($abcd=='A'){
			return $data[0]['a'];
		}
		else if($abcd=='B'){
			return $data[0]['b'];
		}
		else if($abcd=='C'){
			return $data[0]['c'];
		}
		else if($abcd=='D'){
			return $data[0]['d'];
		}
		else if($abcd=='E'){
			return $data[0]['e'];
		}
	}				

	public function UpdateSoal($soal, $data)
	{
		$this->db->where('id_soal', $soal);
		$this->db->update('soal', $data);

	}

	function UpdateKonten($data){
        $this->db->where('id_soal',$data['id_soal']);
        $this->db->update('soal',$data);
    }

    //Calon Mahasiswa	   

	function UpdateMhs($data){
        $this->db->where('id_mahasiswa',$data['id_mahasiswa']);
        $this->db->update('calon_mahasiswa',$data);
    }

    //Peserta    

    public function getBarangById($id){
        $this->db->where('no_peserta',$id);
        $query = $this->db->get('calon_mahasiswa');
        return $query->result();
    }    


    //Peserta

    public function cek_user($data){
		$query = $this->db->get_where('calon_mahasiswa',$data);
		return $query;
	}

	public function userData($username){ 
    $this->db->select('username'); 
    $this->db->select('nama_mahasiswa'); 
    $this->db->where('username', $username); 
    $query = $this->db->get('calon_mahasiswa'); 
    return $query->row(); 
  }	
  
}