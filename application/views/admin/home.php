<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home fa-2x faa-pulse animated"></i>Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
         <div class="navbar navbar-inner block-header">
          <div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
        </div>
        </section>
        <!-- Main content -->
        <section class="content">

          <!-- Small boxes (Stat box) -->
          <div class="row">

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $panitia ?></h3>
                  <p>PANITIA</p>
                </div>
                <div class="icon">
                  <i class="fa fa-file faa-pulse animated"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/panitia" class="small-box-footer">Info selanjutnya <i class="fa fa-arrow-circle-right faa-horizontal animated"></i></a>
              </div>
            </div><!-- ./col -->
          <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $calon_mahasiswa ?></h3>
                  <p>CALON MAHASISWA</p>
                </div>
                <div class="icon">
                  <i class="fa fa-file faa-pulse animated"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/calon_mahasiswa" class="small-box-footer">Info selanjutnya <i class="fa fa-arrow-circle-right faa-horizontal animated"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3><?php echo $fakultas ?></h3>
                  <p>FAKULTAS</p>
                </div>
                <div class="icon">
                  <i class="fa fa-file faa-pulse animated"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/fakultas" class="small-box-footer">Info selanjutnya <i class="fa fa-arrow-circle-right faa-horizontal animated"></i></a>
              </div>
            </div><!-- ./col -->
             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                  <h3><?php echo $program_studi ?></h3>
                  <p>PROGRAM STUDI</p>
                </div>
                <div class="icon">
                  <i class="fa fa-file faa-pulse animated"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/program_studi" class="small-box-footer">Info selanjutnya <i class="fa fa-arrow-circle-right faa-horizontal animated"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $materi_ujian ?></h3>
                  <p>MATERI UJIAN</p>
                </div>
                <div class="icon">
                  <i class="fa fa-file faa-pulse animated"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/materi_ujian" class="small-box-footer">Info selanjutnya <i class="fa fa-arrow-circle-right faa-horizontal animated"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-navy">
                <div class="inner">
                  <h3><?php echo $tahun_akademik ?></h3>
                  <p>TAHUN AKADEMIK</p>
                </div>
                <div class="icon">
                  <i class="fa fa-file faa-pulse animated"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/tahun_akademik" class="small-box-footer">Info selanjutnya <i class="fa fa-arrow-circle-right faa-horizontal animated"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
