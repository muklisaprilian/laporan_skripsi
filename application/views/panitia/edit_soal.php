<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1><i class="fa fa-list-alt faa-pulse animated"></i>
              Form Edit Data Soal
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-home faa-pulse animated"></i> <a href="<?php echo base_url(); ?>panitia/index">Home</a></li>
              <li><i class="fa fa-table faa-pulse animated"></i> <a href="<?php echo base_url(); ?>panitia/soal">Tabel Data Soal</a></li>
              <li class="active"><i class="fa fa-list-alt faa-pulse animated"></i> Edit Data Soal</li>
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
                <h3 class="box-title">Silahkan Edit Data Soal</h3>
              </div>
              <div class="box-body">
              <div class="col-md-6">
                <!-- form start -->
                <?php echo form_open_multipart('panitia/update_soal'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Soal</label>
                  <textarea type="text-math" class="form-control" name="soal" required><?php echo $data->soal; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pilihan A</label>
                      <input type="text" class="form-control" name="a" value="<?php echo $data->a; ?>" autocomplete="off" required/>
                  </div>
                     <div class="form-group">
                    <label for="exampleInputEmail1">Pilihan B</label>
                      <input type="text" class="form-control" name="b" value="<?php echo $data->b; ?>" autocomplete="off" required/>
                  </div>
                     <div class="form-group">
                    <label for="exampleInputEmail1">Pilihan C</label>
                      <input type="text" class="form-control" name="c" value="<?php echo $data->c; ?>" autocomplete="off" required/>
                  </div>
                     <div class="form-group">
                    <label for="exampleInputEmail1">Pilihan D</label>
                      <input type="text" class="form-control" name="d" value="<?php echo $data->d; ?>" autocomplete="off" required/>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Pilihan E</label>
                      <input type="text" class="form-control" name="e" value="<?php echo $data->e; ?>" autocomplete="off" required/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pilih Kunci</label>
                      <select class="form-control" name="kunci" required>
                                        <option value="">-- <?php echo $data->kunci; ?> --</option>
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            <option>D</option>
                                            <option>E</option>
                                            </select>
                                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Jalur Tes</label>
                      <select name="jalur" class="form-control" required>
                      <option value="">-- <?php echo $data->jalur_tes; ?> --</option>
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
                    <input type="file" name="userfile" value=""/><?php echo $data->foto; ?>
                  </div>

                  <input type="hidden" name="id" value="<?php echo $data->id_soal ?>">
                  <a href="<?php echo base_url(); ?>panitia/soal" class="btn btn-warning"><i class="fa fa-arrow-circle-left faa-horizontal animated"></i> Batal</a>
              <button type="submit" name="simpan" value="upload" class="btn btn-success"><i class="fa fa-save faa-pulse animated"></i> Simpan</button>
                  <button type="reset" name="reset" class="btn btn-primary"><i class="fa fa-refresh fa-spin"></i> Reset</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
              </div>
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>