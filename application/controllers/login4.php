<?php 
defined('BASEPATH') or exit('No direct script access allowed');
 
class login4 extends CI_Controller{
     public function index(){
          $d['title'] = '';
          $d['judul'] = '';
          $this->load->view('dash', $d);
     }


          function tampil()
          {
               $this->load->view('home4');
               
          }

          function masuk()
          {
               $jalur_tes = $this->input->post("jalur_tes");
               $username = $this->input->post("username");
               $password = $this->input->post("password");

               $cek = $this->login_model4->cek($jalur_tes, $username, $password);
               if($cek->num_rows() == 1)
               {
                    foreach ($cek->result() as $data){
                         $sess_data['id_mahasiswa'] = $data->id_username;
                         $sess_data['username'] = $data->username;
                         $this->session->set_userdata($sess_data);
                    }

                    redirect('mahasiswa2/index');
               }
               else
               {
                    $this->session->set_flashdata('pesan', 'Maaf, kombinasi Username dengan Password salah.');
                    redirect('login4/tampil');
               }
          }

          function keluar()
          {
               $this->session->sess_destroy(); 
               redirect('login4');
          }
     }




               
               
 