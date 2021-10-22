<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Halaman Ujian Bidikmisi
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
                  <h3><?php echo $peraturan ?></h3>
                  <p>MULAI UJIAN</p>
                </div>
                <div class="icon">
                  <i class="fa fa-file faa-pulse animated"></i>
                </div>
                <a href="<?php echo base_url(); ?>mahasiswa2/daftar" class="small-box-footer" onclick="return confirm(' Apakah anda sudah siap mengikuti ujian ?');">Info selanjutnya <i class="fa fa-arrow-circle-right faa-horizontal animated"></i></a>
              </div>
            </div><!-- ./col -->
          <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $jawaban ?></h3>
                  <p>HASIL UJIAN</p>
                </div>
                <div class="icon">
                  <i class="fa fa-list faa-pulse animated"></i>
                </div>
                <a href="<?php echo base_url(); ?>mahasiswa2/nilai" class="small-box-footer">Info selanjutnya <i class="fa fa-arrow-circle-right faa-horizontal animated"></i></a>
              </div>
            </div><!-- ./col -->
            </div><!-- ./col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
