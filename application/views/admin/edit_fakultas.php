<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1><i class="fa fa-list-alt faa-pulse animated"></i>
              Form Edit Data Fakultas
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-home faa-pulse animated"></i> <a href="<?php echo base_url(); ?>admin/index">Home</a></li>
              <li><i class="fa fa-table faa-pulse animated"></i> <a href="<?php echo base_url(); ?>admin/fakultas">Tabel Data Fakultas</a></li>
              <li class="active"><i class="fa fa-list-alt faa-pulse animated"></i> Edit Data Fakultas</li>
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
                <h3 class="box-title">Silahkan Edit Data Fakultas</h3>
              </div>
              <div class="box-body">
              <div class="col-md-6">
                <!-- form start -->
                <?php echo form_open('admin/update_fakultas'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Fakultas</label>
                      <input type="number" class="btn-default" name="id" value="<?php echo $data->id_fakultas; ?>" readonly/>
                  </div>
                  <div class="form-group">
                   <label for="exampleInputEmail1">Fakultas</label>
                      <input type="text" class="form-control" name="fakulti" value="<?php echo $data->fakultas; ?>" autocomplete="off" required/>
                  </div>
                  <input type="hidden" name="id" value="<?php echo $data->id_fakultas ?>">
                  <a href="<?php echo base_url(); ?>admin/fakultas" class="btn btn-warning"><i class="fa fa-arrow-circle-left faa-horizontal animated"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save faa-pulse animated"></i> Simpan</button>
                  <button type="reset" name="reset" class="btn btn-primary"><i class="fa fa-refresh fa-spin"></i> Reset</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
              </div>
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>