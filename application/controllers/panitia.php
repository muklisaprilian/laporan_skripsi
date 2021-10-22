<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panitia extends CI_Controller {

	function index(){
		$a['soal']	= $this->model_panitia->tampil_soal()->num_rows();
		$a['peraturan']	= $this->model_panitia->tampil_peraturan()->num_rows();
		$a['jawaban'] = $this->model_panitia->tampil_jawaban()->num_rows();
		$a['grafik'] = $this->model_panitia->tampil_grafik()->num_rows();
		$a['page']	= "home";
		
		$this->load->view('panitia/index', $a);
	}
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('model_panitia');
		$this->load->model('model_jawaban');
		$this->load->model('modelpanitia');
		$this->load->model('model_admin');
	}

		/* Fungsi Soal */
	function soal(){
		$a['data']	= $this->model_panitia->tampil_soal()->result_object();
		$a['page']	= "soal";
		
		$this->load->view('panitia/index', $a);
	}
	
	function tambah_soal(){
		$a['page']	= "tambah_soal";
		
		$this->load->view('panitia/index', $a);
	}

	function insert_soal(){

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['max_widht'] = '5000';
		$config['max_height'] = '5000';

		$this->load->library('upload', $config);
		$this->upload->do_upload(); 
		

		$img = $this->upload->data();
		$id = $this->input->post('id');
		$soal = $this->input->post('soal');
		$a = $this->input->post('a');
		$b = $this->input->post('b');
		$c = $this->input->post('c');
		$d = $this->input->post('d');
		$e = $this->input->post('e');
		$kunci = $this->input->post('kunci');
		$jalur = $this->input->post('jalur');
		$foto = $img['file_name'];
		$data = array(
				'id_soal' => $id,
				'soal' => $soal,
				'a' => $a,
				'b' => $b,
				'c' => $c,
				'd' => $d,
				'e' => $e,
				'kunci' => $kunci,
				'jalur_tes' => $jalur,
				'foto' => $foto
			);
		$this->db->insert('soal', $data);

		redirect('panitia/soal','refresh');
	}

	function edit_soal($id){
		$a['editdata']	= $this->db->get_where('soal',array('id_soal'=>$id))->result_object();		
		$a['page']	= "edit_soal";
		
		$this->load->view('panitia/index', $a);
	}

	function update_soal(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['max_widht'] = '5000';
		$config['max_height'] = '5000';

		$this->load->library('upload', $config);
		$this->upload->do_upload(); 
		

		$img = $this->upload->data();
		$id = $this->input->post('id');
		$soal = $this->input->post('soal');
		$a = $this->input->post('a');
		$b = $this->input->post('b');
		$c = $this->input->post('c');
		$d = $this->input->post('d');
		$e = $this->input->post('e');
		$kunci = $this->input->post('kunci');
		$jalur = $this->input->post('jalur');
		$foto = $img['file_name'];
		$object = array(
				'id_soal' => $id,
				'soal' => $soal,
				'a' => $a,
				'b' => $b,
				'c' => $c,
				'd' => $d,
				'e' => $e,
				'kunci' => $kunci,
				'jalur_tes' => $jalur,
				'foto' => $foto
			);
		$this->db->where('id_soal', $id);
		$this->db->update('soal', $object); 

		redirect('panitia/soal','refresh');
	}

	function hapus_soal($id){
		
		$this->model_panitia->hapus_soal($id);
		redirect('panitia/soal','refresh');
	}

	/* Fungsi Peraturan */
	function peraturan(){
		$a['data']	= $this->model_panitia->tampil_peraturan()->result_object();
		$a['page']	= "peraturan";
		
		$this->load->view('panitia/index', $a);
	}

	function tambah_peraturan(){
		$a['page']	= "tambah_peraturan";
		
		$this->load->view('panitia/index', $a);
	}

	function insert_peraturan(){

		$id1 = $this->input->post('id1');
		$aturan = $this->input->post('aturan');
		$id = $this->input->post('id');
		$object = array(
				'id_peraturan' => $id1,
				'peraturan' => $aturan,
				'id_panitia' => $id
			);
		$this->db->insert('peraturan', $object);

		redirect('panitia/peraturan','refresh');
	}

	function edit_peraturan($id){
		$a['editdata']	= $this->db->get_where('peraturan',array('id_peraturan'=>$id))->result_object();		
		$a['page']	= "edit_peraturan";
		
		$this->load->view('panitia/index', $a);
	}

	function update_peraturan(){
		$id1 = $this->input->post('id1');
		$aturan = $this->input->post('aturan');
		$id = $this->input->post('id');
		$object = array(
				'id_peraturan' => $id1,
				'peraturan' => $aturan,
				'id_panitia' => $id
			);
		$this->db->where('id_peraturan', $id1);
		$this->db->update('peraturan', $object); 

		redirect('panitia/peraturan','refresh');
	}

	function hapus_peraturan($id){
		
		$this->model_panitia->hapus_peraturan($id);
		redirect('panitia/peraturan','refresh');
	}

	public function nilai(){

		$data["nilai"]=$this->model_jawaban->ambildata()->result();	
		$this->load->view('panitia/nilai', $data);
	}

	public function lihat_grafik(){
		
	$data = $this->model_jawaban->ambildata1()->result();
     $x['data'] = json_encode($data);
     $this->load->view('panitia/lihat_grafik', $x);
	}	

	public function cari_hasil(){

	$fakultas_satu = $this->input->post('fakultas_satu');
	$keterangan = $this->input->post('keterangan');
	$thn_akademik = $this->input->post('thn_akademik');

	$aktif = array(

    		'fakultas_satu' => $fakultas_satu,
    		'keterangan' => $keterangan,
    		'thn_akademik' => $thn_akademik,

    	);

	// query memanggil function 
    $data['nilai'] = $this->model_jawaban->Ambil3($aktif);
  	$this->load->view('panitia/nilai', $data);  
  
 	}

	public function cetak_hasil(){

	$fakultas_satu = $this->input->post('fakultas_satu');
	$keterangan = $this->input->post('keterangan');
	$thn_akademik = $this->input->post('thn_akademik');

	$aktif = array(

    		'fakultas_satu' => $fakultas_satu,
    		'keterangan' => $keterangan,
    		'thn_akademik' => $thn_akademik

    	);

	// query memanggil function 
    $data['nilai'] = $this->model_jawaban->Ambil3($aktif); 		
	$this->load->library('fpdf');
	$this->load->view('panitia/cetak_hasil', $data);
	
	}

	public function dnilai($kode = 0){
		

		$data = array(
			'nilai'=>$this->modelpanitia->AmbilDetailNilai($kode)->result_array(),				
			'kode'=>$kode,				
		);
		$this->load->view('panitia/dnilai', $data);
	}

	/* Fungsi Grafik */
	function grafik(){
		$a['data']	= $this->model_panitia->tampil_grafik()->result_object();
		$a['page']	= "grafik";
		
		$this->load->view('panitia/index', $a);
	}

	function tambah_grafik(){
		$a['page']	= "tambah_grafik";
		
		$this->load->view('panitia/index', $a);
	}

	function insert_grafik(){

		$id = $this->input->post('id');
		$thn = $this->input->post('thn');
		$fkip = $this->input->post('fkip');
		$fe = $this->input->post('fe');
		$ft = $this->input->post('ft');
		$ftp = $this->input->post('ftp');
		$fkm = $this->input->post('fkm');
		$fai = $this->input->post('fai');
		$object = array(
				'id_grafik' => $id,
				'thn_akademik' => $thn,
				'fkip' => $fkip,
				'fe' => $fe,
				'ft' => $ft,
				'ftp' => $ftp,
				'fkm' => $fkm,
				'fai' => $fai
			);
		$this->db->insert('grafik', $object);

		redirect('panitia/grafik','refresh');
	}

	function edit_grafik($id){
		$a['editdata']	= $this->db->get_where('grafik',array('id_grafik'=>$id))->result_object();		
		$a['page']	= "edit_grafik";
		
		$this->load->view('panitia/index', $a);
	}

	function update_grafik(){
		
		$id = $this->input->post('id');
		$thn = $this->input->post('thn');
		$fkip = $this->input->post('fkip');
		$fe = $this->input->post('fe');
		$ft = $this->input->post('ft');
		$ftp = $this->input->post('ftp');
		$fkm = $this->input->post('fkm');
		$fai = $this->input->post('fai');
		$object = array(
				'id_grafik' => $id,
				'thn_akademik' => $thn,
				'fkip' => $fkip,
				'fe' => $fe,
				'ft' => $ft,
				'ftp' => $ftp,
				'fkm' => $fkm,
				'fai' => $fai
			);
		$this->db->where('id_grafik', $id);
		$this->db->update('grafik', $object); 

		redirect('panitia/grafik','refresh');
	}

	function hapus_grafik($id){
		
		$this->model_panitia->hapus_grafik($id);
		redirect('panitia/grafik','refresh');
	}

}

