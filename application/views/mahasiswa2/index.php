<!DOCTYPE html>
<html>
<meta http-equiv="refresh" content="10">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Apps UMB Universitas Serambi Mekkah | Dashboard</title>
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
  <body class="hold-transition skin-black sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>U</b>M<B>B</B></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Aplikasi</b> UMB</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown">
        			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Selamat Datang, Mahasiswa <span class="caret"></span></a>
          			  <ul class="dropdown-menu" role="menu">
                  <label class="col-md-2"></label>
                  <div class="col-md-4">
          				 <button type="button" class="btn btn-default btn-sm"><a href="<?php echo base_url(); ?>login4/keluar" onclick="return confirm('Anda ingin keluar ?');"><b>LOG OUT</b></a></button>
                  </div>
        			  </ul>
      			  </li>              
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?php if($page == 'home'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>mahasiswa2/index">
                <i class="fa fa-home faa-pulse animated"></i> <span>DASHBOARD</span> 
              </a>
            </li>   
            <li class="<?php if($page == 'soal'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>mahasiswa2/daftar" onclick="return confirm(' Apakah anda sudah siap mengikuti ujian ?');">
                <i class="fa fa-file faa-pulse animated"></i> <span>MULAI UJIAN</span>
              </a>
            </li> 
            <li class="<?php if($page == 'jawaban'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>mahasiswa2/nilai">
                <i class="fa fa-list faa-pulse animated"></i> <span>HASIL UJIAN</span>
              </a>
            </li>  
            <li class="<?php if($page == 'logout'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>login4/keluar" onclick="return confirm('Anda ingin keluar ?');">
                <i class="fa fa-user faa-pulse animated"></i> <span>LOG OUT</span>
              </a>
            </li>                           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      <?php $this->load->view('mahasiswa2/'.$page); ?>
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
        <strong> <a href="#"></a>.</strong>
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $(function () {
        $("#example1").DataTable({          
          "language": {
            "url": "<?php echo base_url(); ?>assets/plugins/datatables/Indonesian.json",
            "sEmptyTable": "Tidak ada data di database"
        }
        });
      });
      $(function() {
          $( "#tgl_surat" ).datepicker({ 
            autoclose: true 
          });
        });
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
  </body>
</html>
