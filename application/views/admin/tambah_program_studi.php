<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1><i class="fa fa-list-alt faa-pulse animated"></i>
              Form Tambah Data Program Studi
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-home faa-pulse animated"></i> <a href="<?php echo base_url(); ?>admin/index">Home</a></li>
              <li><i class="fa fa-table faa-pulse animated"></i> <a href="<?php echo base_url(); ?>admin/program_studi">Tabel Data Program Studi</a></li>
              <li class="active"><i class="fa fa-list-alt faa-pulse animated"></i> Tambah Data Program Studi</li>
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
                <h3 class="box-title">Silahkan Masukkan Data Program Studi</h3>
              </div>
              <div class="box-body">
              <div class="col-md-6">
                <!-- form start -->
                <?php echo form_open('admin/insert_program_studi'); ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kode Prodi</label>
                    <input type="number" class="btn-default"  method="post" name="id" min="101" max="1000" step="1" placeholder="101" autocomplete="off" required/>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Program Studi</label>
                    <input type="text" class="form-control" name="prodi" placeholder="Program Studi" autocomplete="off" required/>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kode Fakultas</label>
                      <select name="id1" class="form-control" required>
                      <option value="">-- Pilih --</option>
                        <?php  
                        $id1 = $this->db->query("SELECT * FROM fakultas")->result();
                        foreach ($id1 as $set) {
                          echo "<option  value='$set->id_fakultas'>".ucwords($set->id_fakultas)."</option>"; 
                        }
                        ?>
                        
                      </select>
                  </div>
                  <a href="<?php echo base_url(); ?>admin/program_studi" class="btn btn-warning"><i class="fa fa-arrow-circle-left faa-horizontal animated"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save faa-pulse animated"></i> Simpan</button>
                  <button type="reset" name="reset" class="btn btn-primary"><i class="fa fa-refresh fa-spin"></i> Reset</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
              </div>
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>