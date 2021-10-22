<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1><i class="fa fa-list-alt faa-pulse animated"></i>
              Form Tambah Data Materi Ujian
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-home faa-pulse animated"></i> <a href="<?php echo base_url(); ?>admin/index">Home</a></li>
              <li><i class="fa fa-table faa-pulse animated"></i> <a href="<?php echo base_url(); ?>admin/materi_ujian">Tabel Data Materi Ujian</a></li>
              <li class="active"><i class="fa fa-list-alt faa-pulse animated"></i> Tambah Data Materi Ujian</li>
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
                <h3 class="box-title">Silahkan Masukkan Data Materi Ujian</h3>
              </div>
              <div class="box-body">
              <div class="col-md-6">
                <!-- form start -->
                <?php echo form_open('admin/insert_materi_ujian'); ?>
              <div class="form-group">
                    <label for="exampleInputEmail1">Kode Materi Ujian</label>
                    <input type="number" class="btn-default" method="post" name="id" min="110" max="10000" step="1" placeholder="110" autocomplete="off" required/>
              </div>
             <div class="form-group">
                    <label for="exampleInputEmail1">Jalur Tes</label>
                     <select class="form-control" name="jalur" required>
                     <option value="">-- Pilih --</option>
                    <option value="Ujian Masuk Bersama">Ujian Masuk Bersama</option>
                    <option value="Ujian Jalur Mandiri">Ujian Jalur Mandiri</option>
                    <option value="Ujian Bidikmisi">Ujian Bidikmisi</option>
                    </select>
              </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Soal</label>
                      <input type="text" class="form-control" name="jumlah" placeholder="Jumlah Soal" autocomplete="off" required/>              
              </div>
              <div class="form-group">
                    <label for="exampleInputEmail1">Durasi</label>
                      <input type="text" class="form-control" name="durasi" placeholder="Durasi" autocomplete="off" required/>              
              </div>
                  <a href="<?php echo base_url(); ?>admin/materi_ujian" class="btn btn-warning"><i class="fa fa-arrow-circle-left faa-horizontal animated"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save faa-pulse animated"></i> Simpan</button>
                  <button type="reset" name="reset" class="btn btn-primary"><i class="fa fa-refresh fa-spin"></i> Reset</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
              </div>
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>