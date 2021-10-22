<?php $this->load->view('include/headsis') ?>
<body>           
        <div id="page-wrapper" >
        <div id="page-inner">
        <div class="row">
        <div class="col-md-12">
        <section class="content-header">
          <h1><i class="fa fa-table faa-pulse animated"></i>
            Tabel Data Hasil Ujian Masuk Bersama
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-home faa-pulse animated"></i> Home</a></li>
            <li class="active"><i class="fa fa-table faa-pulse animated"></i> Tabel Data Hasil Ujian Masuk Bersama</li>
          </ol>
        </section>  
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <div class="row">
                <div class="col-md-12">                
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        
                    <div class="panel panel-default">
                    <div class="panel-heading">
                     <?php $no=0; foreach($nilai as $kon) { $no++?>
                        <thead><b>Nama Peserta<b style="margin-left:25pt"> : <?php echo $kon['nama_mahasiswa']; ?></b></b></thead>                            
                                       
                        <?php } ?> 
                    </div>
                    <div class="panel-heading">
                     <?php $no=0; foreach($nilai as $kon) { $no++?>
                        <thead><b>Jenis Kelamin<b style="margin-left:24pt"> : <?php echo $kon['jenis_kelamin']; ?></b></b></thead>                            
                                       
                        <?php } ?> 
                    </div>
                    <div class="panel-heading">
                     <?php $no=0; foreach($nilai as $kon) { $no++?>
                        <thead><b>Tempat &<b style="margin-left:47pt"> : <?php echo $kon['tempat']; ?></b></b></thead>                               
                        <?php } ?> 
                    </div>
                    <div class="panel-heading">
                     <?php $no=0; foreach($nilai as $kon) { $no++?>
                        <thead><b>Tanggal Lahir<b style="margin-left:26pt"> : <?php echo tgl_indo($kon['tgl_lahir']); ?></b></b></thead>                            
                                       
                        <?php } ?> 
                    </div>
                    <div class="panel-heading">
                     <?php $no=0; foreach($nilai as $kon) { $no++?>
                        <thead><b>Fakultas<b style="margin-left:52pt"> : <?php echo $kon['fakultas_satu']; ?></b></b></thead>
                    

                        <?php } ?> 
                    </div>
                    <div class="panel-heading">
                     <?php $no=0; foreach($nilai as $kon) { $no++?>
                        <thead><b>Program Studi<b style="margin-left:22pt"> : <?php echo $kon['prodi_satu']; ?></b></b></thead>
                    

                        <?php } ?> 
                    </div>
                    <div class="panel-heading">
                     <?php $no=0; foreach($nilai as $kon) { $no++?>
                        <thead><b>Jalur Tes<b style="margin-left:49pt"> : <?php echo $kon['jalur_tes']; ?></b></b></thead>                                        
                        <?php } ?> 
                    </div>
                     <div class="panel-heading">
                     <?php $no=0; foreach($nilai as $kon) { $no++?>
                        <thead><b>Tahun Akademik<b style="margin-left:12pt"> : <?php echo $kon['thn_akademik']; ?></b></b></thead>                                        
                        <?php } ?> 
                    </div>
                    </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            <th>No</th>

                                            <th>No. Tes</th>

                                            <th>Tanggal Tes</th>
                                                                                        
                                            <th>Benar</th>                                                                                        
                                            <th>Salah</th>                                                                                        
                                            <th>Nilai</th>

                                            <th>Total Soal</th>

                                            <th>Keterangan</th>

                                            <th>Aksi <i class="fa fa-cog fa-spin"></i></th>                                                                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=0; foreach($nilai as $kon) { $no++?>
                                        <tr>
                                            <td><?php echo $no; ?></td>

                                            <td><?php echo $kon['no_peserta']; ?></td>

                                            <td><?php echo tgl_indo($kon['tgl_tes']); ?></td>                                                                                                                  
                                            <td><?php echo $kon['benar']; ?></td>                                                                                                                       
                                            <td><?php echo $kon['salah']; ?></td>                                                                                                                       
                                            <td><?php echo $kon['total_nilai']; ?></td>

                                            <td><?php echo $kon['total_soal']; ?></td>

                                            <td><?php echo $kon['keterangan']; ?></td> 
                                            <td width='5%' align='center'><a class='btn btn-warning btn-xs' title='Detail' href="<?php echo base_url();?>mahasiswa/dnilai/<?php echo $kon['id_jawaban']; ?>"><span class="glyphicon glyphicon-eye-open faa-pulse animated"></span> Detail</a>
                                            <a class='btn btn-success btn-xs' title='Cetak' href="<?php echo base_url();?>mahasiswa/cetak"><span class="glyphicon glyphicon-print faa-pulse animated"></span> Cetak</a></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            </div>
            </div>
			
<?php $this->load->view('include/footer') ?>
</body>
</html>