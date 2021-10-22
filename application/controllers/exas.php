<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa1 extends CI_Controller {
	
	function index(){
		$a['soal'] = $this->model_mahasiswa->tampil_soal()->num_rows(); 
		$a['penilaian']	= $this->model_mahasiswa->tampil_penilaian()->num_rows(); 
		$a['page']	= "home";
		
		$this->load->view('mahasiswa/index', $a);
	}

	function __construct()
	{
		parent::__construct();				
		$this->load->helper(array('url','form'));
		$this->load->model('model_mahasiswa');
	}

	function jawab_soal(){
		$a['page']	= "jawab_soal";
		
		$this->load->view('mahasiswa/index', $a);
	}


	public function soal($id = 0){
		$a['jawabdata']	= $this->model_mahasiswa->tampil_soal("where soal.mata_uji = 'Ujian Tes Masuk Bersama' order by RAND()")->result_object();
		$a['page']	= "jawab_soal";

		
		$this->load->view('mahasiswa/index', $a);
	}

    
}