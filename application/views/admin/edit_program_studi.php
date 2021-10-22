<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1><i class="fa fa-list-alt faa-pulse animated"></i>
              Form Edit Data Program Studi
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-home faa-pulse animated"></i> <a href="<?php echo base_url(); ?>admin/index">Home</a></li>
              <li><i class="fa fa-table faa-pulse animated"></i> <a href="<?php echo base_url(); ?>admin/program_studi">Tabel Data Program Studi</a></li>
              <li class="active"><i class="fa fa-list-alt faa-pulse animated"></i> Edit Data Program Studi</li>
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
                <h3 class="box-title">Silahkan Edit Data Program Studi</h3>
              </div>
              <div class="box-body">
              <div class="col-md-6">
                <!-- form start -->
                <?php echo form_open('admin/update_program_studi'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Kode Prodi</label>
                    <input type="number" class="btn-default" name="id" value="<?php echo $data->id_prodi; ?>" readonly/>
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Program Studi</label>
                    <input type="text" class="form-control" name="prodi" value="<?php echo $data->prodi; ?>" autocomplete="off" required/>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Kode Fakultas</label>
                      <select name="id1" class="form-control" required>
                      <option value="">-- <?php echo $data->id_fakultas; ?> --</option>
                        <?php  
                        $id1 = $this->db->query("SELECT * FROM fakultas")->result();
                        foreach ($id1 as $set) {
                          echo "<option  value='$set->id_fakultas'>".ucwords($set->id_fakultas)."</option>"; 
                        }
                        ?>
                        
                      </select>
                  </div>
                  <input type="hidden" name="id" value="<?php echo $data->id_prodi ?>">
                  <a href="<?php echo base_url(); ?>admin/program_studi" class="btn btn-warning"><i class="fa fa-arrow-circle-left faa-horizontal animated"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save faa-pulse animated"></i> Simpan</button>
                  <button type="reset" name="reset" class="btn btn-primary"><i class="fa fa-refresh fa-spin"></i> Reset</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
              </div>
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>