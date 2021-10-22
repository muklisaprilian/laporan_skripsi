<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	
	function index(){
		$a['peraturan'] = $this->model_mahasiswa->tampil_peraturan()->num_rows();  
		$a['jawaban'] = $this->model_mahasiswa->tampil_jawaban()->num_rows();  
		$a['page']	= "home";
		
		$this->load->view('mahasiswa/index', $a);
	}

	function __construct()
	{
		parent::__construct();				
		$this->load->helper(array('url','form'));
		$this->load->model('model_mahasiswa');
		$this->load->model('model_jawaban');
		$this->load->model('model_user');
		$this->load->model('model_soal');
		$this->load->model('model_jawaban_detail');
		$this->load->model('modelpanitia');
	}

	public function cetak()
	{
		
		$this->load->model('model_user');	
		$this->load->model('model_mahasiswa');	
		$user = $this->session->userdata('username');		
		$user = $this->model_user->userData($user);	

		$user2 = $this->session->userdata('username');	
        $no_peserta = $this->model_user->AmbilNoPeserta($user2);
        $idMahasiswa = $this->model_mahasiswa->AmbilIdMahasiswa($no_peserta);

		$data = array(
			'nilai'=>$this->model_jawaban->AmbilNilai2($idMahasiswa)->result_array(),
			'user' =>$user,			
		);  

		$this->load->library('fpdf');	
		$this->load->view('mahasiswa/cetak', $data);
	}

	public function nilai(){

		$this->load->model('model_user');	
		$this->load->model('model_mahasiswa');	
		$user = $this->session->userdata('username');		
		$user = $this->model_user->userData($user);	

		$user2 = $this->session->userdata('username');	
        $no_peserta = $this->model_user->AmbilNoPeserta($user2);
        $idMahasiswa = $this->model_mahasiswa->AmbilIdMahasiswa($no_peserta);

		$data = array(
			'nilai'=>$this->model_jawaban->AmbilNilai2($idMahasiswa)->result_array(),
			'user' =>$user,			
		);  

		$this->load->view('mahasiswa/nilai', $data);
	}

	public function dnilai($kode = 0){
				
		$data = array(
			'nilai'=>$this->modelpanitia->AmbilDetailNilai($kode)->result_array(),				
			'kode'=>$kode,				
		);
		$this->load->view('mahasiswa/dnilai', $data);
	}

	public function daftar(){
	
		$this->load->model('model_user');
		$this->load->model('model_mahasiswa');

		$user = $this->session->userdata('username');
        $no_peserta = $this->model_user->AmbilNoPeserta($user);
        $idMahasiswa = $this->model_mahasiswa->AmbilIdMahasiswa($no_peserta);

		$data = array(			
			'id_mahasiswa' => $idMahasiswa,
			'tgl_tes' =>date("Y-m-d"),			
		);

		$this->model_jawaban->Simpan('jawaban', $data);
		$id=mysql_insert_id();		

		redirect('mahasiswa/soal/'.$id);
	}

	public function soal($id = 0){	
		$a['page']	= "soal";	
        	
    	$this->load->model('model_soal');	

    	$soal = $this->model_soal->Ambil("where soal.jalur_tes = 'Ujian Masuk Bersama' order by RAND()");
    	        
        $data = array(
			"soal" => $soal->result_array(),
			"total_soal" =>$soal->num_rows(),
			"id_jawaban" => $id,
		);

        $this->load->view('mahasiswa/soal', $data);
            
    }

    public function jawab(){
         
        $this->load->model('model_soal');    
        $this->load->model('model_user');    
        $this->load->model('model_jawaban_detail');    
        $id_jawaban = $this->input->post('id_jawaban'); 
        
        $jawaban=$_POST["jawaban"];
		$id_soal=$_POST["soal"];
		$jumlah=$_POST['jumlah_soal'];

        for ($i=0;$i<$jumlah;$i++){   		

        	$nomor=$id_soal[$i];
        	$jawaban[$nomor];		    

        	$data = array(
				'id_jawaban' => $id_jawaban,						
				'id_soal' => $nomor,						
				'id_materi' => $this->model_soal->AmbilJalurTest2($nomor),						
				'jawaban' => $jawaban[$nomor],						
				'kunci' =>$this->model_soal->AmbilJawaban($nomor),						
			);
		    //echo "<p>ID SOAL ".$nomor." Jawaban = ".$jawaban[$nomor]." Kunci = ".$this->modelpanitia->AmbilJawaban($nomor)."</p>";
			$this->model_jawaban_detail->Simpan('jawaban_detail', $data);
		}

        $sql = $this->model_jawaban_detail->AmbilHasilTes("where id_jawaban = $id_jawaban ");			
		$jumlah= $sql->num_rows();

		foreach($sql->result_array() as $data) {
			if($data['id_materi']==113 OR $data['id_materi']==114){
				$id_jawaban_detail = $data['id_jawaban_detail'];
				if($data['jawaban']==$data['kunci']){
					$data = array(
						'nilai' => 0,						
					);
					$this->model_jawaban_detail->UpdateNilai($id_jawaban_detail, $data);
				}
			}
			else {
				$id_jawaban_detail = $data['id_jawaban_detail'];
				if($data['jawaban']==$data['kunci']){
					$data = array(
						'nilai' => 1,						
					);
					$this->model_jawaban_detail->UpdateNilai($id_jawaban_detail, $data);
				}
				else {
					$data = array(
						'nilai' => 0,						
					);
					$this->model_jawaban_detail->UpdateNilai($id_jawaban_detail, $data);
				}

			}
		}
     	     			
	    $benar=0;
		$salah=0;
		$total_nilai=0;
	
		$sql = $this->model_jawaban_detail->AmbilHasilTes("where id_jawaban = $id_jawaban ");			
		$jumlah= $sql->num_rows();

		foreach($sql->result_array() as $data) {
			if($data['jawaban']==$data['kunci']){
				$benar++;
			}
			else {
				$salah++;
			}
			$total_nilai += $data['nilai'];
			$total_soal = $_POST['jumlah_soal'];

			$total_nilai > 13;
			if($total_nilai > 13){
   				 $keterangan = "Lulus";
			} else {
   				 $keterangan = "Tidak Lulus";
			}

			echo "$keterangan";
			echo "$total_nilai";

			
		}		

		$data = array(
		 	'benar' => $benar,
            'salah' => $salah,
            'total_nilai' => $total_nilai,
            'total_soal' => $total_soal,
            'keterangan' => $keterangan,
    	);		
	
		$this->model_jawaban->UpdateTotalNilai($id_jawaban, $data);

		$data2 = array(
		 	'password' => 2,            
    	);		

    	$username = $this->session->userdata('username');

		$this->model_user->UpdateStatusUser($username, $data2);
		redirect('mahasiswa/dnilai/'.$id_jawaban);
    }
}
	