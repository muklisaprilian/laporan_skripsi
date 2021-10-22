<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1><i class="fa fa-list-alt faa-pulse animated"></i>
              Form Edit Data Materi Ujian 
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-home faa-pulse animated"></i> <a href="<?php echo base_url(); ?>admin/index"> Home</a></li>
              <li><i class="fa fa-table faa-pulse animated"></i> <a href="<?php echo base_url(); ?>admin/materi_ujian">Tabel Data Materi Ujian</a></li>
              <li class="active"><i class="fa fa-list-alt faa-pulse animated"></i> Edit Data Materi Ujian</li>
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
                <h3 class="box-title">Silahkan Edit Data Materi Ujian</h3>
              </div>
              <div class="box-body">
              <div class="col-md-6">
                <!-- form start -->
                <?php echo form_open('admin/update_materi_ujian'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Materi Ujian</label>
                      <input type="number" class="btn-default" name="id" value="<?php echo $data->id_materi; ?>" readonly/>
                  </div>
                  <div class="form-group">
                   <label for="exampleInputEmail1">Jalur Tes</label>
                    <select class="form-control" name="jalur" required>
                    <option value="">-- <?php echo $data->jalur_tes; ?> --</option>
                    <option value="Ujian Masuk Bersama">Ujian Masuk Bersama</option>
                    <option value="Ujian Jalur Mandiri">Ujian Jalur Mandiri</option>
                    <option value="Ujian Bidikmisi">Ujian Bidikmisi</option>
                    </select>
                  </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Soal</label>
                      <input type="text" class="form-control" name="jumlah" value="<?php echo $data->j_soal; ?>" autocomplete="off" required/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Durasi</label>
                      <input type="text" class="form-control" name="durasi" value="<?php echo $data->durasi; ?>" autocomplete="off" required/>
                  </div>
                  <input type="hidden" name="id" value="<?php echo $data->id_materi ?>">
                  <a href="<?php echo base_url(); ?>admin/materi_ujian" class="btn btn-warning"><i class="fa fa-arrow-circle-left faa-horizontal animated"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save faa-pulse animated"></i> Simpan</button>
                  <button type="reset" name="reset" class="btn btn-primary"><i class="fa fa-refresh fa-spin"></i> Reset</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
              </div>
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>