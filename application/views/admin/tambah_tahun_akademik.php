<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1><i class="fa fa-list-alt faa-pulse animated"></i>
              Form Tambah Data Tahun Akademik
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-home faa-pulse animated"></i> <a href="<?php echo base_url(); ?>admin/index">Home</a></li>
              <li><i class="fa fa-table faa-pulse animated"></i> <a href="<?php echo base_url(); ?>admin/tahun_akademik">Tabel Data Tahun Akademik</a></li>
              <li class="active"><i class="fa fa-list-alt faa-pulse animated"></i> Tambah Data Tahun Akademik</li>
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
                <h3 class="box-title">Silahkan Masukkan Data Tahun Akademik</h3>
              </div>
              <div class="box-body">
              <div class="col-md-6">
                <!-- form start -->
                <?php echo form_open('admin/insert_tahun_akademik'); ?>
              <div class="form-group">
                    <label for="exampleInputEmail1">Kode Tahun Akademik</label>
                    <input type="number" class="btn-default" method="post" name="id" min="1" max="100" step="1" placeholder="1" autocomplete="off" required/>
              </div>
             <div class="form-group">
                    <label for="exampleInputEmail1">Tahun Akademik</label>
                    <input type="text" class="form-control" name="thn_akademik1" placeholder="2019/2020" autocomplete="off" required/>
              </div>
                  <a href="<?php echo base_url(); ?>admin/tahun_akademik" class="btn btn-warning"><i class="fa fa-arrow-circle-left faa-horizontal animated"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save faa-pulse animated"></i> Simpan</button>
                  <button type="reset" name="reset" class="btn btn-primary"><i class="fa fa-refresh fa-spin"></i> Reset</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
              </div>
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>