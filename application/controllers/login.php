<?php 
defined('BASEPATH') or exit('No direct script access allowed');
 
class login extends CI_Controller{
     public function index(){
          $d['title'] = '';
          $d['judul'] = '';
          $this->load->view('dash', $d);
     }


          function tampil()
          {
               $this->load->view('home');
               
          }

          function masuk()
          {
               $username = $this->input->post("username");
               $password = $this->input->post("password");

               $cek = $this->login_model->cek($username, $password);
               if($cek->num_rows() == 1)
               {
                    foreach ($cek->result() as $data){
                         $sess_data['id_admin'] = $data->id_username;
                         $sess_data['username'] = $data->username;
                         $this->session->set_userdata($sess_data);
                    }

                    redirect('admin/index');
               }
               else
               {
                    $this->session->set_flashdata('pesan', 'Maaf, kombinasi Username dengan Password salah.');
                    redirect('login/tampil');
               }
          }

          function keluar()
          {
               $this->session->sess_destroy(); 
               redirect('login');
          }
     }




               
               
 