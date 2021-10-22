<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1><i class="fa fa-list-alt faa-pulse animated"></i>
            
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-home faa-pulse animated"></i>Home</a></li>
            <li class="active"><i class="fa fa-list-alt faa-pulse animated"></i> Pengumuman</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
            <div class="row">           
            <div style="margin-left:120pt;" class="col-xs-9">
                <div class="box">
                <div class="box-header">
                  <div class="box-tools">
                    <!--
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    -->
                  </div>
                </div><!-- /.box-header -->
                <div class="row">
                <div class="col-md-12">               
                    <!-- Advanced Tables -->
                  <div class="panel panel-default">
                  <div class="panel-heading">
                    
                <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert"></button>
                <h3><b style="color: black;">Keterangan :</b></h3>
                <label><b style="color: black;">"Berikut adalah daftar calon mahasiswa yang lulus dan diurut berdasarkan (Fakultas) masing-masing".<b style="color: black;"></b></label>
              </b></label>
          <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown" style="margin-left:50pt;">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><h4><b>--Pilih Fakultas--<span class="caret" style="margin-left:190pt;"></span></b></h4></a>
                  <ul class="dropdown-menu" role="menu">
                  <div class="col-md-4">
                   <button type="button" class="btn btn-default btn-flat">
                    <a href="<?php echo base_url(); ?>panitia/nilai1">
                      <label class="btn btn-success btn-flat" style="width: 280px;">
                        <?php  
                        $a = $this->db->query("SELECT * FROM fakultas where fakultas = 'Fakultas Keguruan dan Ilmu Pendidikan'")->result();
                        foreach ($a as $set) {
                          echo "<option  value='$set->fakultas'>".ucwords($set->fakultas)."</option>"; 
                        }
                        ?>
                      </label></a></button>
                      <button type="button" class="btn btn-default btn-flat" >
                    <a href="<?php echo base_url(); ?>panitia/nilai2">
                      <label class="btn btn-success btn-flat" style="width: 280px;">
                         <?php  
                        $a = $this->db->query("SELECT * FROM fakultas where fakultas = 'Fakultas Teknologi Pertanian'")->result();
                        foreach ($a as $set) {
                          echo "<option  value='$set->fakultas'>".ucwords($set->fakultas)."</option>"; 
                        }
                        ?>
                      </label></a></button>
                      <button type="button" class="btn btn-default btn-flat" >
                    <a href="<?php echo base_url(); ?>panitia/nilai3">
                      <label class="btn btn-success btn-flat" style="width: 280px;">
                        <?php  
                        $a = $this->db->query("SELECT * FROM fakultas where fakultas = 'Fakultas Ekonomi'")->result();
                        foreach ($a as $set) {
                          echo "<option  value='$set->fakultas'>".ucwords($set->fakultas)."</option>"; 
                        }
                        ?>
                      </label></a></button>
                      <button type="button" class="btn btn-default btn-flat" >
                    <a href="<?php echo base_url(); ?>panitia/nilai4">
                      <label class="btn btn-success btn-flat" style="width: 280px;">
                        <?php  
                        $a = $this->db->query("SELECT * FROM fakultas where fakultas = 'Fakultas Tarbiyah'")->result();
                        foreach ($a as $set) {
                          echo "<option  value='$set->fakultas'>".ucwords($set->fakultas)."</option>"; 
                        }
                        ?>
                      </label></a></button>
                      <button type="button" class="btn btn-default btn-flat" >
                    <a href="<?php echo base_url(); ?>panitia/nilai5">
                      <label class="btn btn-success btn-flat" style="width: 280px;">
                         <?php  
                        $a = $this->db->query("SELECT * FROM fakultas where fakultas = 'Fakultas Teknik'")->result();
                        foreach ($a as $set) {
                          echo "<option  value='$set->fakultas'>".ucwords($set->fakultas)."</option>"; 
                        }
                        ?>
                      </label></a></button>
                      <button type="button" class="btn btn-default btn-flat" >
                    <a href="<?php echo base_url(); ?>panitia/nilai6">
                      <label class="btn btn-success btn-flat" style="width: 280px;">
                         <?php  
                        $a = $this->db->query("SELECT * FROM fakultas where fakultas = 'Fakultas Kesehatan Masyarakat'")->result();
                        foreach ($a as $set) {
                          echo "<option  value='$set->fakultas'>".ucwords($set->fakultas)."</option>"; 
                        }
                        ?>
                      </label></a></button>
                      <button type="button" class="btn btn-default btn-flat" >
                    <a href="<?php echo base_url(); ?>panitia/nilai7">
                      <label class="btn btn-success btn-flat" style="width: 280px;">
                         <?php  
                        $a = $this->db->query("SELECT * FROM fakultas where fakultas = 'Fakultas Syariah'")->result();
                        foreach ($a as $set) {
                          echo "<option  value='$set->fakultas'>".ucwords($set->fakultas)."</option>"; 
                        }
                        ?>
                      </label></a></button>
                      <button type="button" class="btn btn-default btn-flat" >
                    <a href="<?php echo base_url(); ?>panitia/nilai8">
                      <label class="btn btn-success btn-flat" style="width: 280px;">
                        <?php  
                        $a = $this->db->query("SELECT * FROM fakultas where fakultas = 'Fakultas Dakwah dan Komunikasi'")->result();
                        foreach ($a as $set) {
                          echo "<option  value='$set->fakultas'>".ucwords($set->fakultas)."</option>"; 
                        }
                        ?>
                      </label></a></button>
                  </div>
                </ul>
              </li>              
            </ul>
          </div>
        </nav>

                  <form role="form" action="" method="post">
                    <label></label>
                      
                   
                 </form><br>
                 <form role="form" action="" method="post">
                    <label></label>
                      
                   
                 </form><br>
                 <form role="form" action="" method="post">
                    <label></label>
                      
                   
                 </form><br>
                 <form role="form" action="" method="post">
                    <label></label>
                      
                   
                 </form><br>
                 <form role="form" action="" method="post">
                    <label></label>
                      
                   
                 </form><br>
                 <form role="form" action="" method="post">
                    <label></label>
                      
                   
                 </form><br>
                 <form role="form" action="" method="post">
                    <label></label>
                      
                   
                 </form><br>
                 <form role="form" action="" method="post">
                    <label></label>
                      
                   
                 </form><br>
                 <form role="form" action="" method="post">
                    <label></label>
                      
                   
                 </form><br>
                 <form role="form" action="" method="post">
                    <label></label>
                      
                   
                 </form></div><br>
                 <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert"></button>
                  
                  <form role="form" action="<?php echo base_url(); ?>panitia/nilai9" method="post">
                   
                      <div style="margin-left:55pt; width: 280px" class="btn btn-default btn-flat">
                        <option>Daftar Calon Mahasiswa Yang Tidak Lulus</option>
                      </div>
                    <button type="submit" class="btn btn-danger btn-flat"><i class="fa fa-arrow-circle-right faa-horizontal animated"></i> Lihat</button>
                 </form>

                </div>
           
          

                  
                  </div>
                  </div>
                  
                  
                    <!--End Advanced Tables -->
                </div>
            </div>
                </div>
             </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

             