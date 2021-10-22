<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1><i class="fa fa-list-alt faa-pulse animated"></i>
              Form Edit Data Grafik
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-home faa-pulse animated"></i> <a href="<?php echo base_url(); ?>panitia/index">Home</a></li>
              <li><i class="fa fa-table faa-pulse animated"></i> <a href="<?php echo base_url(); ?>panitia/grafik">Tabel Data Grafik</a></li>
              <li class="active"><i class="fa fa-list-alt faa-pulse animated"></i> Edit Data Grafik</li>
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
                <h3 class="box-title">Silahkan Edit Data Grafik</h3>
              </div>
              <div class="box-body">
              <div class="col-md-6">
                <!-- form start -->
                <?php echo form_open_multipart('panitia/update_grafik'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun Akademik</label>
                      <select name="thn" class="form-control" autocomplete="off" required>
                      <option value="">-- <?php echo $data->thn_akademik; ?> --</option>
                        <?php  
                        $thn = $this->db->query("SELECT * FROM tahun_akademik")->result();
                        foreach ($thn as $set) {
                          echo "<option  value='$set->thn_akademik'>".ucwords($set->thn_akademik)."</option>"; 
                        }
                        ?>
                        
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Fakultas Keguruan dan Ilmu Pendidikan</label>
                    <input type="number" class="form-control" name="fkip" value="<?php echo $data->fkip; ?>" autocomplete="off" required/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Fakultas Ekonomi</label>
                    <input type="number" class="form-control" name="fe" value="<?php echo $data->fe; ?>" autocomplete="off" required/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Fakultas Teknik</label>
                    <input type="number" class="form-control" name="ft" value="<?php echo $data->ft; ?>" autocomplete="off" required/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Fakultas Teknologi Pertanian</label>
                    <input type="number" class="form-control" name="ftp" value="<?php echo $data->ftp; ?>" autocomplete="off" required/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Fakultas Kesehatan Masyarakat</label>
                    <input type="number" class="form-control" name="fkm" value="<?php echo $data->fkm; ?>" autocomplete="off" required/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Fakultas Agama Islam</label>
                    <input type="number" class="form-control" name="fai" value="<?php echo $data->fai; ?>" autocomplete="off" required/>
                  </div>
                  <input type="hidden" name="id" value="<?php echo $data->id_grafik ?>">
                  <a href="<?php echo base_url(); ?>panitia/grafik" class="btn btn-warning"><i class="fa fa-arrow-circle-left faa-horizontal animated"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save faa-pulse animated"></i> Simpan</button>
                  <button type="reset" name="reset" class="btn btn-primary"><i class="fa fa-refresh fa-spin"></i> Reset</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
              </div>
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>