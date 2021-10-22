<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1><i class="fa fa-table faa-pulse animated"></i>
            Tabel Data Calon Mahasiswa
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-home faa-pulse animated"></i>Home</a></li>
            <li class="active"><i class="fa fa-table faa-pulse animated"></i> Tabel Data Calon Mahasiswa</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          	<div class="row">          	
          	<div class="col-xs-12">
          		<div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                  	<a href="<?php echo base_url(); ?>admin/tambah_calon_mahasiswa" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-plus faa-pulse animated"></i> Tambah</a>
                  </h3>
                  <div class="box-tools">
                  	<!--
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    -->
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                
                  <table id="example1" class="table table-bordered table-hover dataTable">
                    <thead>
                      <tr>
                        <th>Aksi <i class="fa fa-cog fa-spin"></i></th>
                        <th>No</th>
                        <th>No. Peserta</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Jadwal dan Tempat Ujian</th>
                        <th>Pilihan Satu (Fakultas)</th>
                        <th>Pilihan Satu (Prodi)</th>
                        <th>Pilihan Dua (Fakultas)</th>
                        <th>Pilihan Dua (Prodi)</th>
                        <th>Pilihan Tiga (Fakultas)</th>
                        <th>Pilihan Tiga (Prodi)</th>
                        <th>Jalur Tes</th>
                        <th>Tahun Akademik</th>
                        </tr>
                    </thead>
                    <tbody>
                      	<?php  
                        $no = 1;
                        foreach ($data as $lihat):
                        ?>
                    	 <tr>
                        <td align="center">
                          <div class="btn-group" role="group">
                            <a href="<?php echo base_url(); ?>admin/edit_calon_mahasiswa/<?php echo $lihat->id_mahasiswa ?>" class="btn btn-info btn-xs" href title="Edit"><i class="fa fa-edit faa-pulse animated"></i> Edit</a>
                            <a href="<?php echo base_url(); ?>admin/hapus_calon_mahasiswa/<?php echo $lihat->id_mahasiswa ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-danger btn-xs" href title="Hapus"><i class="fa fa-trash faa-pulse animated"></i> Hapus</a>
                            <a href="<?php echo base_url(); ?>admin/cetak1/<?php echo $lihat->id_mahasiswa ?>" class="btn btn-success btn-xs" href title="Cetak"><i class="fa fa-print faa-pulse animated"> 
                            </i> Cetak</a>
                          </div>
                        </td>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo ucwords($lihat->no_peserta) ?></td>
                        <td><?php echo ucwords($lihat->nama_mahasiswa) ?></td>
                        <td><?php echo ucwords($lihat->jenis_kelamin) ?></td>
                        <td><?php echo ucfirst($lihat->tempat) ?></td> 
                        <td><?php echo tgl_indo($lihat->tgl_lahir) ?></td> 
                        <td><?php echo ucwords($lihat->username) ?></td>
                        <td><?php echo ucwords($lihat->password) ?></td>
                        <td><?php echo ucfirst($lihat->jadwal_dan_tempat) ?></td>
                        <td><?php echo ucwords($lihat->fakultas_satu) ?></td>
                        <td><?php echo ucwords($lihat->prodi_satu) ?></td>
                        <td><?php echo ucwords($lihat->fakultas_dua) ?></td>
                        <td><?php echo ucwords($lihat->prodi_dua) ?></td>
                        <td><?php echo ucwords($lihat->fakultas_tiga) ?></td>
                        <td><?php echo ucwords($lihat->prodi_tiga) ?></td>
                        <td><?php echo ucwords($lihat->jalur_tes) ?></td>
                        <td><?php echo ucwords($lihat->thn_akademik) ?></td>                 		
                    	</tr>
                    	<?php endforeach; ?>
                    </tbody>
                  </table>
                  
                </div><!-- /.box-body -->
                </div>
             </div>
          </div>
        

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
