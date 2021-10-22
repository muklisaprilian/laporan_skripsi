<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home1 extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('username'))
		{
			redirect('login1');
		}
	}
	public function index(){
		 $d['title'] = 'Selamat Datang Di Aplikasi Ujian Mahasiswa Baru Universitas Serambi Mekkah &minus; App';
         $d['judul'] = 'Selamat Datang Di Aplikasi Ujian Mahasiswa Baru Universitas Serambi Mekkah';
         $d['username'] = $this->session->userdata('username');
          $this->load->view('panitia/index', $d);
	}
}