<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class login_model1 extends CI_Model{
     function cek($username, $password){
          $this->db->where('username', $username);
           $this->db->where('password', $password);
           return $this->db->get('panitia');

     }
}
