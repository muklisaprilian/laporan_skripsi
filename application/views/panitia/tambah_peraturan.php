<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1><i class="fa fa-list-alt faa-pulse animated"></i>
              Form Tambah Data Peraturan
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-home faa-pulse animated"></i> <a href="<?php echo base_url(); ?>panitia/index">Home</a></li>
              <li><i class="fa fa-table faa-pulse animated"></i> <a href="<?php echo base_url(); ?>panitia/peraturan">Tabel Data Peraturan</a></li>
              <li class="active"><i class="fa fa-list-alt faa-pulse animated"></i> Tambah Data Peraturan</li>
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
                <h3 class="box-title">Silahkan Masukkan Data Peraturan</h3>
              </div>
              <div class="box-body">
              <div class="col-md-6">
                <!-- form start -->
                <?php echo form_open('panitia/insert_peraturan'); ?>
              <div class="form-group">
                    <label for="exampleInputEmail1">Id Peraturan</label>
                    <input type="number" class=""  method="post" name="id1" min="1110" max="10000" step="1" placeholder="1110" autocomplete="off" required/>
              </div>
              <div class="form-group">
                    <label for="exampleInputEmail1">Peraturan</label>
                    <textarea type="text" class="form-control" rows="3" name="aturan" autocomplete="off" required></textarea>
              </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Id Panitia</label>
                      <select name="id" class="form-control" required>
                      <option value="">-- Pilih --</option>
                        <?php  
                        $id = $this->db->query("SELECT * FROM panitia")->result();
                        foreach ($id as $set) {
                          echo "<option  value='$set->id_panitia'>".ucwords($set->id_panitia)."</option>"; 
                        }
                        ?>
                        
                      </select>
                  </div>
                  <a href="<?php echo base_url(); ?>panitia/peraturan" class="btn btn-warning"><i class="fa fa-arrow-circle-left faa-horizontal animated"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save faa-pulse animated"></i> Simpan</button>
                  <button type="reset" name="reset" class="btn btn-primary"><i class="fa fa-refresh fa-spin"></i> Reset</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
              </div>
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>