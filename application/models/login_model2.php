<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class login_model2 extends CI_Model{
     function cek($jalur_tes, $username, $password){
     	   $this->db->where('jalur_tes', $jalur_tes);
           $this->db->where('username', $username);
           $this->db->where('password', $password);
           return $this->db->get('calon_mahasiswa');

     }
     
}


