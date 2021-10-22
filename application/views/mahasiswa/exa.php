<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>Data Soal Ujian</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>mahasiswa/soal">Data Soal Ujian</a></li>
              <li class="active">ambil_soal</li>
              <!--
              <li><a href="#">Layout</a></li>
              <li class="active">Top Navigation</li>
              -->
            </ol>
          </section>
          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Data Edit Soal Ujian</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
               <div class="col-md-12"> 
                        <div class="panel-body" style="height: 800px; overflow: auto;">
                             <form role="form" action="<?php echo base_url(); ?>mahasiswa/jawab" method="post" onsubmit="return confirm('Anda Yakin ?')">
                                <?php $no=0; foreach($jawabdata as $data) { $no++ ?>
                                    <div class="form-group">
                                         <b><?php echo $no; ?>. </b
                                        <label><?php echo $data->soal; ?></label>
                                        <input type='hidden' name='soal' value='<?php echo $data->soal['id_soal']; ?>'/>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $data->soal['id_soal']; ?>]" id="optionsRadios1" value="A" required/><b>A. </b> <?php echo $data->pilihan_a; ?>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $data->soal['id_soal']; ?>]" id="optionsRadios2" value="B" required/><b>B. </b><?php echo $data->pilihan_b; ?>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $data->soal['id_soal']; ?>]" id="optionsRadios3" value="C" required/><b>C. </b><?php echo $data->pilihan_c; ?>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $data->soal['id_soal']; ?>]" id="optionsRadios4" value="D" required/><b>D. </b><?php echo $data->pilihan_d; ?>
                                            </label>
                                        </div>
                    </div> 
                          <?php } ?>                                
                      <button type="submit" class="btn btn-primary">Selesai</button> 
                      </form>
                        </div>
                    </div>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
          </div>   