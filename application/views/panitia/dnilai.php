<?php $this->load->view('include/head') ?>
<body>           
         <div id="page-wrapper" >
        <div id="page-inner">
        <div class="row">
        <div class="col-md-12">
        <section class="content-header">
          <h1><i class="fa fa-list-ol faa-pulse animated"></i>
            Detail Data Hasil Ujian Mahasiswa Baru
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>panitia/index"><i class="fa fa-home faa-pulse animated"></i> Home</a></li>
            <li class="active"><i class="fa fa-list-ol faa-pulse animated"></i> Detail Data Hasil Ujian Mahasiswa Baru</li>
          </ol>
        </section>  
        </div>
        </div>              
            <!-- /. ROW  -->             
            <div class="row">
                <div class="col-md-12">                
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <b>Hasil Ujian - <b href="#"><?php echo strtoupper($this->session->userdata('username')); ?></b></b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php $total=0; $no=0; foreach($nilai as $kon) { 
                                    $total += $kon['nilai'];
                                    $jawaban = strtolower($kon['jawaban']);
                                    $no++?>

                                    <p><?php echo $no.". ".$kon['soal'];?></p>
                                    <p><img style="margin-left:15px; margin-top:-5px;" src="<?php echo base_url() ?>uploads/<?php echo $kon['foto']; ?>" alt="" /></p> 
                                    <p>A. <?php echo $kon['a'];?></p>
                                    <p>B. <?php echo $kon['b'];?></p>
                                    <p>C. <?php echo $kon['c'];?></p>
                                    <p>D. <?php echo $kon['d'];?></p>
                                    <p>E. <?php echo $kon['e'];?></p> 
                                    <p><b>Kunci : <?php echo $kon['kunci'];?></b></p>                                    
                                    <?php if($kon['jawaban']== $kon['kunci']) { ?>
                                        <p><b>Jawaban : <?php echo $kon['jawaban']." (".$kon[$jawaban].") <span class='label label-primary'>Benar</span>";?></b></p>
                                    <?php } else { ?>
                                        <p><b>Jawaban : <?php echo $kon['jawaban']." (".$kon[$jawaban].") <span class='label label-danger'>Salah</span>";?></b></p>
                                    <?php } ?>
                                    <hr>
                                <?php } ?>           

                                <?php echo "<h1>Nilai Anda $total</<h1>" ?>                     
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