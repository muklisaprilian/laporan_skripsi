<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Apps UMB Universitas Serambi Mekkah | Login</title>
    <link href="<?php echo base_url();?>/assets1/img/faviconn.png" rel="shortcut icon"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/ionicons/css/ionicons.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.8/font-awesome-animation.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
        <body style="background-color:#000a0a;">
          <center><img style="margin-top:5pt" src="<?php echo base_url(); ?>assets/image/bbb.png"></center>
             <form method="post">
               <div class="col-md-4 col-md-offset-4" style="margin-left:130px">
                    <div class="panel panel-default"><center><h4><b>Selamat Datang Panitia !</b></h4></center>
                          <div class="panel-body"><h4>Silahkan input username serta password dan anda akan dialihkan ke menu utama, panitia adalah orang yang di perbolehkan untuk melakukan operasi sesuai hak 
                          aksesnya dalam pengolahan data soal, data peraturan, dan data hasil ujian mahasiswa baru.</h4>
                              <br>
                              <br>
                        </div>
                  </div>
                </div>
          </form>
          <form action="<?php echo base_url('login1/masuk');?>" method="post">
               <div class="col-md-4 col-md-offset-4" style="margin-left:200px">
                    <div class="panel panel-default"><center><h4><b>Login Panitia</b></h4></center>
                          <div class="panel-body"><br>
                              <div class="row form-group">
                              <label class="col-md-3" style="margin-top: -8pt"><i class="fa fa-user fa-lg faa-pulse animated"></i><h4 style="margin-top: -14pt; margin-left: 13pt"><b>Username</b></h4></label>
                              <div class="col-md-9" style="margin-top: -10pt">
                                   <input type="text" name="username" class="form-control input-sm" id="username" placeholder="Isi Dengan Nama Depan Anda" autocomplete="off" required>
                              </div>
                              </div><br>

                              <div class="row form-group">
                              <label class="col-md-3" style="margin-top: -8pt"><i class="fa fa-lock fa-lg faa-pulse animated"></i><h4 style="margin-top: -14pt; margin-left: 13pt"><b>Password</b></h4></label>
                              <div class="col-md-9" style="margin-top: -10pt">
                              <input type="password" name="password" class="form-control input-sm" id="password"  placeholder="Isi Dengan Tgl Lahir Anda" autocomplete="off" required>
                              </div>
                              </div>

                              <div class="row form-group">
                              <label class="col-md-3"></label>
                              <div class="col-md-9">
                              <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-arrow-circle-right faa-horizontal animated"></i> LOGIN</button>
                              </div>
                              </div>
                        </div>
                  </div>

          <?php
          if($this->session->flashdata('pesan') <> ''){
          ?>
               <div class="alert alert-dismissible alert-danger">
                    <?php echo $this->session->flashdata('pesan');?>
               </div>
          <?php
          }
          ?>
                </div>
        </form>
        </body>
</html>
