<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function index(){
		$a['panitia']	= $this->model_admin->tampil_panitia()->num_rows(); 
		$a['calon_mahasiswa']	= $this->model_admin->tampil_calon_mahasiswa()->num_rows(); 
		$a['materi_ujian']	= $this->model_admin->tampil_materi_ujian()->num_rows(); //untuk ambil data dari file model_admin.php dengan function tampil_materi_ujian
		$a['program_studi']	= $this->model_admin->tampil_program_studi()->num_rows(); //untuk ambil data dari file model_admin.php dengan function tampil_program_studi
		$a['fakultas']	= $this->model_admin->tampil_fakultas()->num_rows(); //untuk ambil data dari file model_admin.php dengan function tampil_fakultas
		$a['tahun_akademik']	= $this->model_admin->tampil_tahun_akademik()->num_rows(); //untuk ambil data dari file model_admin.php dengan function tampil_tahun_akademik
		$a['page']	= "home";
		
		$this->load->view('admin/index', $a);
	}
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('model_admin');
	}

		/* Fungsi Panitia */
	function panitia(){
		$a['data']	= $this->model_admin->tampil_panitia()->result_object();
		$a['page']	= "panitia";
		
		$this->load->view('admin/index', $a);
		
	}

	function tambah_panitia(){
		$a['page']	= "tambah_panitia";
		
		$this->load->view('admin/index', $a);
	}

	function insert_panitia(){

		$id = $this->input->post('id');
		$nama1 = $this->input->post('nama1');
		$username1 = $this->input->post('username1');
		$password1 = $this->input->post('password1');
		$jalur1 = $this->input->post('jalur1');
		$object = array(
				'id_panitia' => $id,
				'nama_panitia' => $nama1,
				'username' => $username1,
				'password' => $password1,
				'jalur_tes' => $jalur1
			);
		$this->db->insert('panitia', $object);

		redirect('admin/panitia','refresh');
	}

	function cetak($kode = 0){

			$panitia = $this->model_admin->Ambil("where id_panitia='$kode'")->result_array();
			
			$data = array(
			'id_panitia' => $panitia[0]['id_panitia'],
			'nama_panitia' => $panitia[0]['nama_panitia'],
			'username' => $panitia[0]['username'],
			'password' => $panitia[0]['password'],
			'jalur_tes' => $panitia[0]['jalur_tes'],
			
		);		
		$this->load->library('fpdf');	
		$this->load->view('admin/cetak', $data);
	}


	function edit_panitia($id){
		$a['editdata']	= $this->db->get_where('panitia',array('id_panitia'=>$id))->result_object();		
		$a['page']	= "edit_panitia";
		
		$this->load->view('admin/index', $a);
	}

	function update_panitia(){
		$id = $this->input->post('id');
		$nama1 = $this->input->post('nama1');
		$username1 = $this->input->post('username1');
		$password1 = $this->input->post('password1');
		$jalur1 = $this->input->post('jalur1');
		$object = array(
				'id_panitia' => $id,
				'nama_panitia' => $nama1,
				'username' => $username1,
				'password' => $password1,
				'jalur_tes' => $jalur1
			);
		$this->db->where('id_panitia', $id);
		$this->db->update('panitia', $object); 

		redirect('admin/panitia','refresh');
	}

	function hapus_panitia($id){
		
		$this->model_admin->hapus_panitia($id);
		redirect('admin/panitia','refresh');
	}

		/* Fungsi Calon Mahasiswa */
	function calon_mahasiswa(){
		$a['data']	= $this->model_admin->tampil_calon_mahasiswa()->result_object();
		$a['page']	= "calon_mahasiswa";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_calon_mahasiswa(){
		$a['page']	= "tambah_calon_mahasiswa";
		
		$this->load->view('admin/index', $a);
	}

	function insert_calon_mahasiswa(){

		$id = $this->input->post('id');
		$no = $this->input->post('no');
		$nama2 = $this->input->post('nama2');
		$kelamin = $this->input->post('kelamin');
		$tmpt = $this->input->post('tmpt');
		$tl = $this->input->post('tl');
		$username2 = $this->input->post('username2');
		$password2 = $this->input->post('password2');
		$jadwal = $this->input->post('jadwal');
		$fakultas_satu = $this->input->post('fakultas_satu');
		$fakultas_dua = $this->input->post('fakultas_dua');
		$fakultas_tiga = $this->input->post('fakultas_tiga');
		$prodi_satu = $this->input->post('prodi_satu');
		$prodi_dua = $this->input->post('prodi_dua');
		$prodi_tiga = $this->input->post('prodi_tiga');
		$jalur2 = $this->input->post('jalur2');
		$thn = $this->input->post('thn');
		$object = array(
				'id_mahasiswa' => $id,
				'no_peserta' => $no,
				'nama_mahasiswa' => $nama2,
				'jenis_kelamin' => $kelamin,
				'tempat' => $tmpt,
				'tgl_lahir' => $tl,
				'username' => $username2,
				'password' => $password2,
				'jadwal_dan_tempat' => $jadwal,
				'fakultas_satu' => $fakultas_satu,
				'fakultas_dua' => $fakultas_dua,
				'fakultas_tiga' => $fakultas_tiga,
				'prodi_satu' => $prodi_satu,
				'prodi_dua' => $prodi_dua,
				'prodi_tiga' => $prodi_tiga,
				'jalur_tes' => $jalur2,
				'thn_akademik' => $thn
			);
		$this->db->insert('calon_mahasiswa', $object);

		redirect('admin/calon_mahasiswa','refresh');
	}

	function cetak1($kode = 0){

			$mahasiswa = $this->model_admin->Ambil1("where id_mahasiswa='$kode'")->result_array();
			
			$data = array(
			'id_mahasiswa' => $mahasiswa[0]['id_mahasiswa'],
			'no_peserta' => $mahasiswa[0]['no_peserta'],
			'nama_mahasiswa' => $mahasiswa[0]['nama_mahasiswa'],
			'jenis_kelamin' => $mahasiswa[0]['jenis_kelamin'],
			'tempat' => $mahasiswa[0]['tempat'],
			'tgl_lahir' => $mahasiswa[0]['tgl_lahir'],
			'username' => $mahasiswa[0]['username'],
			'password' => $mahasiswa[0]['password'],
			'jadwal_dan_tempat' => $mahasiswa[0]['jadwal_dan_tempat'],
			'fakultas_satu' => $mahasiswa[0]['fakultas_satu'],
			'fakultas_dua' => $mahasiswa[0]['fakultas_dua'],
			'fakultas_tiga' => $mahasiswa[0]['fakultas_tiga'],
			'prodi_satu' => $mahasiswa[0]['prodi_satu'],
			'prodi_dua' => $mahasiswa[0]['prodi_dua'],
			'prodi_tiga' => $mahasiswa[0]['prodi_tiga'],
			'jalur_tes' => $mahasiswa[0]['jalur_tes'],
			'thn_akademik' => $mahasiswa[0]['thn_akademik'],
			
		);		
		$this->load->library('fpdf');	
		$this->load->view('admin/cetak1', $data);
	}

	function edit_calon_mahasiswa($id){
		$a['editdata']	= $this->db->get_where('calon_mahasiswa',array('id_mahasiswa'=>$id))->result_object();		
		$a['page']	= "edit_calon_mahasiswa";
		
		$this->load->view('admin/index', $a);
	}

	function update_calon_mahasiswa(){
		$id = $this->input->post('id');
		$no = $this->input->post('no');
		$nama2 = $this->input->post('nama2');
		$kelamin = $this->input->post('kelamin');
		$tmpt = $this->input->post('tmpt');
		$tl = $this->input->post('tl');
		$username2 = $this->input->post('username2');
		$password2 = $this->input->post('password2');
		$jadwal = $this->input->post('jadwal');
		$fakultas_satu = $this->input->post('fakultas_satu');
		$fakultas_dua = $this->input->post('fakultas_dua');
		$fakultas_tiga = $this->input->post('fakultas_tiga');
		$prodi_satu = $this->input->post('prodi_satu');
		$prodi_dua = $this->input->post('prodi_dua');
		$prodi_tiga = $this->input->post('prodi_tiga');
		$jalur2 = $this->input->post('jalur2');
		$thn = $this->input->post('thn');
		$object = array(
				'id_mahasiswa' => $id,
				'no_peserta' => $no,
				'nama_mahasiswa' => $nama2,
				'jenis_kelamin' => $kelamin,
				'tempat' => $tmpt,
				'tgl_lahir' => $tl,
				'username' => $username2,
				'password' => $password2,
				'jadwal_dan_tempat' => $jadwal,
				'fakultas_satu' => $fakultas_satu,
				'fakultas_dua' => $fakultas_dua,
				'fakultas_tiga' => $fakultas_tiga,
				'prodi_satu' => $prodi_satu,
				'prodi_dua' => $prodi_dua,
				'prodi_tiga' => $prodi_tiga,
				'jalur_tes' => $jalur2,
				'thn_akademik' => $thn
			);
		$this->db->where('id_mahasiswa', $id);
		$this->db->update('calon_mahasiswa', $object); 

		redirect('admin/calon_mahasiswa','refresh');
	}

	function hapus_calon_mahasiswa($id){
		
		$this->model_admin->hapus_calon_mahasiswa($id);
		redirect('admin/calon_mahasiswa','refresh');
	}
		

		/* Fungsi Materi Ujian */
	function materi_ujian(){
		$a['data']	= $this->model_admin->tampil_materi_ujian()->result_object();
		$a['page']	= "materi_ujian";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_materi_ujian(){
		$a['page']	= "tambah_materi_ujian";
		
		$this->load->view('admin/index', $a);
	}

	function insert_materi_ujian(){

		$id = $this->input->post('id');
		$jalur = $this->input->post('jalur');
		$jumlah = $this->input->post('jumlah');
		$durasi = $this->input->post('durasi');
		$object = array(
				'id_materi' => $id,
				'jalur_tes' => $jalur,
				'j_soal' => $jumlah,
				'durasi' => $durasi
			);
		$this->db->insert('materi_ujian', $object);

		redirect('admin/materi_ujian','refresh');
	}

	function cetak2($kode = 0){

			$materi = $this->model_admin->Ambil2("where id_materi='$kode'")->result_array();
			
			$data = array(
			'id_materi' => $materi[0]['id_materi'],
			'jalur_tes' => $materi[0]['jalur_tes'],
			'j_soal' => $materi[0]['j_soal'],
			'durasi' => $materi[0]['durasi'],
			
		);		
		$this->load->library('fpdf');	
		$this->load->view('admin/cetak2', $data);
	}

	function edit_materi_ujian($id){
		$a['editdata']	= $this->db->get_where('materi_ujian',array('id_materi'=>$id))->result_object();		
		$a['page']	= "edit_materi_ujian";
		
		$this->load->view('admin/index', $a);
	}

	function update_materi_ujian(){
		$id = $this->input->post('id');
		$jalur = $this->input->post('jalur');
		$jumlah = $this->input->post('jumlah');
		$durasi = $this->input->post('durasi');
		$object = array(
				'id_materi' => $id,
				'jalur_tes' => $jalur,
				'j_soal' => $jumlah,
				'durasi' => $durasi
			);
		$this->db->where('id_materi', $id);
		$this->db->update('materi_ujian', $object); 

		redirect('admin/materi_ujian','refresh');
	}

	function hapus_materi_ujian($id){
		
		$this->model_admin->hapus_materi_ujian($id);
		redirect('admin/materi_ujian','refresh');
	}


	/* Fungsi Program Studi */
	function program_studi(){
		$a['data']	= $this->model_admin->tampil_program_studi()->result_object();
		$a['page']	= "program_studi";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_program_studi(){
		$a['page']	= "tambah_program_studi";
		
		$this->load->view('admin/index', $a);
	}

	function insert_program_studi(){

		$id = $this->input->post('id');
		$prodi = $this->input->post('prodi');
		$id1 = $this->input->post('id1');
		$object = array(
				'id_prodi' => $id,
				'prodi' => $prodi,
				'id_fakultas' => $id1
			);
		$this->db->insert('program_studi', $object);

		redirect('admin/program_studi','refresh');
	}

	function edit_program_studi($id){
		$a['editdata']	= $this->db->get_where('program_studi',array('id_prodi'=>$id))->result_object();		
		$a['page']	= "edit_program_studi";
		
		$this->load->view('admin/index', $a);
	}

	function update_program_studi(){
		$id = $this->input->post('id');
		$prodi = $this->input->post('prodi');
		$id1 = $this->input->post('id1');
		$object = array(
				'id_prodi' => $id,
				'prodi' => $prodi,
				'id_fakultas' => $id1
			);
		$this->db->where('id_prodi', $id);
		$this->db->update('program_studi', $object); 

		redirect('admin/program_studi','refresh');
	}

	function hapus_program_studi($id){
		
		$this->model_admin->hapus_program_studi($id);
		redirect('admin/program_studi','refresh');
	}

	/* Fungsi Fakultas */
	function fakultas(){
		$a['data']	= $this->model_admin->tampil_fakultas()->result_object();
		$a['page']	= "fakultas";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_fakultas(){
		$a['page']	= "tambah_fakultas";
		
		$this->load->view('admin/index', $a);
	}

	function insert_fakultas(){

		$id = $this->input->post('id');
		$fakulti = $this->input->post('fakulti');
		$object = array(
				'id_fakultas' => $id,
				'fakultas' => $fakulti
			);
		$this->db->insert('fakultas', $object);

		redirect('admin/fakultas','refresh');
	}

	function edit_fakultas($id){
		$a['editdata']	= $this->db->get_where('fakultas',array('id_fakultas'=>$id))->result_object();		
		$a['page']	= "edit_fakultas";
		
		$this->load->view('admin/index', $a);
	}

	function update_fakultas(){
		$id = $this->input->post('id');
		$fakulti = $this->input->post('fakulti');
		$object = array(
				'id_fakultas' => $id,
				'fakultas' => $fakulti
			);
		$this->db->where('id_fakultas', $id);
		$this->db->update('fakultas', $object); 

		redirect('admin/fakultas','refresh');
	}

	function hapus_fakultas($id){
		
		$this->model_admin->hapus_fakultas($id);
		redirect('admin/fakultas','refresh');
	}


	/* Fungsi Tahun Akademik  */
	function tahun_akademik(){
		$a['data']	= $this->model_admin->tampil_tahun_akademik()->result_object();
		$a['page']	= "tahun_akademik";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_tahun_akademik(){
		$a['page']	= "tambah_tahun_akademik";
		
		$this->load->view('admin/index', $a);
	}

	function insert_tahun_akademik(){

		$id = $this->input->post('id');
		$thn_akademik1 = $this->input->post('thn_akademik1');
		$object = array(
				'id_thn' => $id,
				'thn_akademik' => $thn_akademik1
			);
		$this->db->insert('tahun_akademik', $object);

		redirect('admin/tahun_akademik','refresh');
	}

	function edit_tahun_akademik($id){
		$a['editdata']	= $this->db->get_where('tahun_akademik',array('id_thn'=>$id))->result_object();		
		$a['page']	= "edit_tahun_akademik";
		
		$this->load->view('admin/index', $a);
	}

	function update_tahun_akademik(){
		$id = $this->input->post('id');
		$thn_akademik1 = $this->input->post('thn_akademik1');
		$object = array(
				'id_thn' => $id,
				'thn_akademik' => $thn_akademik1
			);
		$this->db->where('id_thn', $id);
		$this->db->update('tahun_akademik', $object); 

		redirect('admin/tahun_akademik','refresh');
	}

	function hapus_tahun_akademik($id){
		
		$this->model_admin->hapus_tahun_akademik($id);
		redirect('admin/tahun_akademik','refresh');
	}


}

