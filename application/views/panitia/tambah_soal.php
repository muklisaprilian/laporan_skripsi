<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1><i class="fa fa-list-alt faa-pulse animated"></i>
              Form Tambah Data Soal
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-home faa-pulse animated"></i> <a href="<?php echo base_url(); ?>panitia/index">Home</a></li>
              <li><i class="fa fa-table faa-pulse animated"></i> <a href="<?php echo base_url(); ?>panitia/soal">Tabel Data Soal</a></li>
              <li class="active"><i class="fa fa-list-alt faa-pulse animated"></i> Tambah Data Soal</li>
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
                <h3 class="box-title">Silahkan Masukkan Data Soal</h3>
              </div>
              <div class="box-body">
              <div class="col-md-6">
                <!-- form start -->
                <?php echo form_open_multipart('panitia/insert_soal'); ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Soal</label>
                      <textarea type="text" class="form-control" rows="3" name="soal" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pilihan A</label>
                      <input type="text" class="form-control" name="a" placeholder="Pilihan A" autocomplete="off" required/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pilihan B</label>
                      <input type="text" class="form-control" name="b" placeholder="Pilihan B" autocomplete="off" required/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pilihan C</label>
                    <input type="text" class="form-control" name="c" placeholder="Pilihan C" autocomplete="off" required/>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Pilihan D</label>
                    <input type="text" class="form-control" name="d" placeholder="Pilihan D" autocomplete="off" required/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pilihan E</label>
                    <input type="text" class="form-control" name="e" placeholder="Pilihan E" autocomplete="off" required/>
                  </div>
                  <div class="form-group">
                                        <label for="exampleInputEmail1">Pilih Kunci</label>
                                        <select class="form-control" name="kunci" required>
                                        <option value="">-- Pilih --</option>
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            <option>D</option>
                                            <option>E</option>
                                        </select>
                                        <?php
                                            if(isset($_POST['submit'])){
                                            $pilihan=$_POST["kunci"];
                                            $id_soal=$_POST["id"];
                                            $score=0;
                                            $benar=1;
                                            $salah=0;
                                            $kosong=0;
                                            for ($i=0;$i<$jumlah;$i++){
                                            //id nomor soal
                                            $nomor=$id_soal[$i];
                                            //jika mahasiswa tidak memilih jawaban
                                            if (empty($pilihan[$nomor])){
                                            $kosong++;
                                            }else{
                                            //jawaban dari mahasiswa
                                            $jawaban=$pilihan[$nomor];
                                            //cocokan jawaban mahasiswa dengan jawaban di database
                                            if($cek){
                                            //jika jawaban cocok (benar)
                                            $benar++;
                                            }else{
                                            //jika salah
                                            $salah++;
                                            }}
                                            $score = $benar*5;
                                            }}
                                            ?>

                                    </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jalur Tes</label>
                      <select name="jalur" class="form-control" required>
                      <option value="">-- Pilih --</option>
                        <?php  
                        $jalur = $this->db->query("SELECT * FROM materi_ujian")->result();
                        foreach ($jalur as $set) {
                          echo "<option  value='$set->jalur_tes'>".ucwords($set->jalur_tes)."</option>"; 
                        }
                        ?>
                        
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Foto</label>
                    <input type="file" name="userfile" size="20" />
                  </div>
      
                  <a href="<?php echo base_url(); ?>panitia/soal" class="btn btn-warning"><i class="fa fa-arrow-circle-left faa-horizontal animated"></i> Batal</a>
                  <button type="submit" name="simpan" value="upload" class="btn btn-success"><i class="fa fa-save faa-pulse animated"></i> Simpan</button>
                  <button type="reset" name="reset" class="btn btn-primary"><i class="fa fa-refresh fa-spin"></i> Reset</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
              </div>
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>