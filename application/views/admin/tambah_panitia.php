<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1><i class="fa fa-list-alt faa-pulse animated"></i>
              Form Tambah Data Panitia
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-home faa-pulse animated"></i> <a href="<?php echo base_url(); ?>admin/index">Home</a></li>
              <li><i class="fa fa-table faa-pulse animated"></i> <a href="<?php echo base_url(); ?>admin/panitia">Tabel Data Panitia</a></li>
              <li class="active"><i class="fa fa-list-alt faa-pulse animated"></i> Tambah Data Panitia</li>
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
                <h3 class="box-title"></h3>
              </div>
              <div class="box-body">
              <div class="col-md-6">
                <!-- form start -->
                <?php echo form_open('admin/insert_panitia'); ?>
               <div class="form-group">
                    <label for="exampleInputEmail1">Id Panitia</label>
                    <input type="number" class="btn-default" method="post" name="id" min="1801" max="10000" step="1" placeholder="1801" autocomplete="off" required/>
              </div>
              <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" name="nama1" placeholder="Nama" autocomplete="off" required/>
              </div>
              <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control" name="username1" placeholder="Username" autocomplete="off" required/>              
              </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                      <input type="text" class="form-control" name="password1" placeholder="Password" autocomplete="off" required/>              
              </div>
              <div class="form-group">
                    <label for="exampleInputEmail1">Jalur Tes</label>
                      <select name="jalur1" class="form-control" required>
                      <option value="">-- Pilih --</option>
                        <?php  
                        $jalur1 = $this->db->query("SELECT * FROM materi_ujian")->result();
                        foreach ($jalur1 as $set) {
                          echo "<option  value='$set->jalur_tes'>".ucwords($set->jalur_tes)."</option>"; 
                        }
                        ?>
                        
                      </select>
                  </div>
                  <a href="<?php echo base_url(); ?>admin/panitia" class="btn btn-warning"><i class="fa fa-arrow-circle-left faa-horizontal animated"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save faa-pulse animated"></i> Simpan</button>
                <button type="reset" name="reset" class="btn btn-primary"><i class="fa fa-refresh fa-spin"></i> Reset</button>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
              </div>
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>
  