<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1><i class="fa fa-list-alt faa-pulse animated"></i>
              Form Tambah Data Calon Mahasiswa
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-home faa-pulse animated"></i> <a href="<?php echo base_url(); ?>admin/index">Home</a></li>
              <li><i class="fa fa-table faa-pulse animated"></i> <a href="<?php echo base_url(); ?>admin/calon_mahasiswa">Tabel Data Calon Mahasiswa</a></li>
              <li class="active"><i class="fa fa-list-alt faa-pulse animated"></i> Tambah Data Calon Mahasiswa</li>
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
                <h3 class="box-title">Silahkan Masukkan Data Calon Mahasiswa</h3>
              </div>
              <div class="box-body">
              <div class="col-md-6">
                <!-- form start -->
                <?php echo form_open('admin/insert_calon_mahasiswa'); ?>
              <div class="form-group">
                    <label for="exampleInputEmail1">No. Peserta</label>
                    <input type="number" class="btn-default"  method="post" name="no" min="00001" max="100000" step="1" placeholder="00001" required/>
              </div>
              <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" name="nama2" placeholder="Nama" autocomplete="off" required/>
              </div>
              <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                     <select class="btn-default" name="kelamin" required>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                    </select>
              </div>
              <div class="form-group">
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tmpt" placeholder="Tempat Lahir" autocomplete="off" required/>
              </div>
              <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                     <input type="date" class="form-control" name="tl" id="tgl_lahir" data-date-format="yyyy-mm-dd" placeholder="Tanggal Lahir" required/>
              </div>
              <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control" name="username2" placeholder="Username" autocomplete="off" required/>              
              </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                      <input type="text" class="form-control" name="password2" placeholder="Password" autocomplete="off" required/>              
              </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Jadwal dan Tempat Ujian</label>
                    <textarea class="form-control" rows="3" name="jadwal" placeholder="Jadwal dan Tempat Ujian" autocomplete="off" required></textarea>
              </div>
              <div class="form-group">
                    <label for="exampleInputEmail1">Pilihan Satu</label>
                    <select name="fakultas_satu" class="form-control" required>
                      <option value="">-- Pilih Fakultas --</option>
                        <?php  
                        $fakultas_satu = $this->db->query("SELECT * FROM fakultas")->result();
                        foreach ($fakultas_satu as $set) {
                          echo "<option  value='$set->fakultas'>".ucwords($set->fakultas)."</option>"; 
                        }
                        ?>
                        
                      </select><br>
                      <select name="prodi_satu" class="form-control" required>
                      <option value="">-- Pilih Prodi --</option>
                        <?php  
                        $prodi_satu = $this->db->query("SELECT * FROM program_studi")->result();
                        foreach ($prodi_satu as $set) {
                          echo "<option  value='$set->prodi'>".ucwords($set->prodi)."</option>"; 
                        }
                        ?>
                        
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pilihan Dua</label>
                    <select name="fakultas_dua" class="form-control" required>
                      <option value="">-- Pilih Fakultas --</option>
                        <?php  
                        $fakultas_dua = $this->db->query("SELECT * FROM fakultas")->result();
                        foreach ($fakultas_dua as $set) {
                          echo "<option  value='$set->fakultas'>".ucwords($set->fakultas)."</option>"; 
                        }
                        ?>
                        
                      </select><br>
                      <select name="prodi_dua" class="form-control" required>
                      <option value="">-- Pilih Prodi --</option>
                        <?php  
                        $prodi_dua = $this->db->query("SELECT * FROM program_studi")->result();
                        foreach ($prodi_dua as $set) {
                          echo "<option  value='$set->prodi'>".ucwords($set->prodi)."</option>"; 
                        }
                        ?>
                        
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pilihan Tiga</label>
                    <select name="fakultas_tiga" class="form-control" required>
                      <option value="">-- Pilih Fakultas --</option>
                        <?php  
                        $fakultas_tiga = $this->db->query("SELECT * FROM fakultas")->result();
                        foreach ($fakultas_tiga as $set) {
                          echo "<option  value='$set->fakultas'>".ucwords($set->fakultas)."</option>"; 
                        }
                        ?>
                        
                      </select><br>
                      <select name="prodi_tiga" class="form-control" required>
                      <option value="">-- Pilih Prodi --</option>
                        <?php  
                        $prodi_tiga = $this->db->query("SELECT * FROM program_studi")->result();
                        foreach ($prodi_tiga as $set) {
                          echo "<option  value='$set->prodi'>".ucwords($set->prodi)."</option>"; 
                        }
                        ?>
                        
                      </select>
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jalur Tes</label>
                      <select name="jalur2" class="form-control" required>
                      <option value="">-- Pilih Jalur Tes --</option>
                        <?php  
                        $jalur2 = $this->db->query("SELECT * FROM materi_ujian")->result();
                        foreach ($jalur2 as $set) {
                          echo "<option  value='$set->jalur_tes'>".ucwords($set->jalur_tes)."</option>"; 
                        }
                        ?>
                        
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun Akademik</label>
                      <select name="thn" class="form-control" required>
                      <option value="">-- Pilih Tahun Akademik --</option>
                        <?php  
                        $thn = $this->db->query("SELECT * FROM tahun_akademik")->result();
                        foreach ($thn as $set) {
                          echo "<option  value='$set->thn_akademik'>".ucwords($set->thn_akademik)."</option>"; 
                        }
                        ?>
                        
                      </select>
                  </div>
                  <a href="<?php echo base_url(); ?>admin/calon_mahasiswa" class="btn btn-warning"><i class="fa fa-arrow-circle-left faa-horizontal animated"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save faa-pulse animated"></i> Simpan</button>
                  <button type="reset" name="reset" class="btn btn-primary"><i class="fa fa-refresh fa-spin"></i> Reset</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
              </div>
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>