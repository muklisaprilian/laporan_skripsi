<?php $this->load->view('include/head')?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css/morris.css">
  </head><br>
  <body>
        <div id="page-inner">
        <div class="row">
        <div class="col-md-12">
        <section class="content-header">
          <h1><i class="fa fa-table faa-pulse animated"></i>
           Data Grafik Hasil Ujian Mahasiswa Baru 
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-home faa-pulse animated"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url(); ?>panitia/lihat_grafik"><i class="fa fa-table faa-pulse animated"></i> Data Grafik Hasil Ujian Mahasiswa Baru</a></li>
          </ol>
        </section>
        <div id="graph">
        <script src="<?php echo base_url();?>assets2/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets2/js/raphael-min.js"></script>
        <script src="<?php echo base_url();?>assets2/js/morris.min.js"></script>
        <script>
        Morris.Bar({
          element: 'graph',
          data: <?php echo $data;?>,
          xkey: 'thn_akademik',
          ykeys: ['fkip', 'fe', 'ft', 'ftp', 'fkm', 'fai'],
          labels: ['Fakultas Keguruan dan Ilmu Pendidikan', 'Fakultas Ekomomi', 'Fakultas Teknik', 'Fakultas Teknologi Pertanian', 'Fakultas Kesehatan Masyarakat', 'Fakultas Agama Islam']
        });
    </script>
  </div></div></div>
    <?php $this->load->view('include/footer') ?>
  </body>
</html>
          
        