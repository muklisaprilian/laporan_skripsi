<?php $this->load->view('include/head')?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>           
        <div id="page-wrapper" >
        <div id="page-inner">
        <div class="row">
        <div class="col-md-12">
        <section class="content-header">
          <h1><i class="fa fa-table faa-pulse animated"></i>
            Tabel Data Hasil Ujian Mahasiswa Baru 
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-home faa-pulse animated"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url(); ?>panitia/nilai"><i class="fa fa-table faa-pulse animated"></i> Tabel Data Hasil Ujian Mahasiswa Baru</a></li>
          </ol>
        </section>  
                    </div>
                </div>          
                 <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                           
                    <!-- Advanced Tables -->
                <div class="panel panel-default">
                <div class="panel-heading"><br>
                <?php echo form_open("panitia/cari_hasil"); ?>
                    <div class="form-close" style="width: 15.5%; margin-top: -8pt" rowspan="1" colspan="1">
                      <select name="fakultas_satu" class="form-control" required>
                        <option value="">-- Fakultas --</option>
                        <option value="Fakultas Keguruan dan Ilmu Pendidikan">Fakultas Keguruan dan Ilmu Pendidikan</option>
                        <option value="Fakultas Ekonomi">Fakultas Ekonomi</option>
                        <option value="Fakultas Teknik">Fakultas Teknik</option>
                        <option value="Fakultas Teknologi Pertanian">Fakultas Teknologi Pertanian</option>
                        <option value="Fakultas Kesehatan Masyarakat">Fakultas Kesehatan Masyarakat</option>
                        <option value="Fakultas Agama Islam">Fakultas Agama Islam</option>
                      </select>
                  </div><br>
                  <div class="form-close" style="width: 15.5%; margin-left: 160pt; margin-top: -41pt" rowspan="1" colspan="1">
                       <select name="keterangan" class="form-control" required>
                        <option value="">-- Keterangan --</option>
                        <option value="Lulus">Lulus</option>
                        <option value="Tidak Lulus">Tidak Lulus</option>
                      </select>
                  </div>
                  <div class="form-close" style="width: 15.5%; margin-left: 320pt; margin-top: -26pt" rowspan="1" colspan="1">
                      <select name="thn_akademik" class="form-control" required>
                        <option value="">-- Tahun Akademik --</option>
                        <option value="2019/2020">2019-2020</option>
                        <option value="2020/2021">2020-2021</option>
                        <option value="2021/2022">2021-2022</option>
                        <option value="2022/2023">2022-2023</option>
                        <option value="2023/2024">2023-2024</option>
                      </select>
                  </div>
                   <button type="submit" name="Cari" class="btn btn-primary btn-flat" title="Telusuri" style="margin-left:475pt; margin-top: -42pt; width: 9.3%"><i class="fa fa-search faa-pulse animated"></i> Telusuri</button>
                <?php echo form_close(); ?>

                 <?php echo form_open("panitia/cetak_hasil"); ?>
                    <div class="form-close" style="width: 15.5%; margin-top: -8pt" rowspan="1" colspan="1">
                      <select name="fakultas_satu" class="form-control" required>
                        <option value="">-- Fakultas --</option>
                        <option value="Fakultas Keguruan dan Ilmu Pendidikan">Fakultas Keguruan dan Ilmu Pendidikan</option>
                        <option value="Fakultas Ekonomi">Fakultas Ekonomi</option>
                        <option value="Fakultas Teknik">Fakultas Teknik</option>
                        <option value="Fakultas Teknologi Pertanian">Fakultas Teknologi Pertanian</option>
                        <option value="Fakultas Kesehatan Masyarakat">Fakultas Kesehatan Masyarakat</option>
                        <option value="Fakultas Agama Islam">Fakultas Agama Islam</option>
                      </select>
                  </div><br>
                  <div class="form-close" style="width: 15.5%; margin-left: 160pt; margin-top: -41pt" rowspan="1" colspan="1">
                       <select name="keterangan" class="form-control" required>
                        <option value="">-- Keterangan --</option>
                        <option value="Lulus">Lulus</option>
                        <option value="Tidak Lulus">Tidak Lulus</option>
                      </select>
                  </div>
                  <div class="form-close" style="width: 15.5%; margin-left: 320pt; margin-top: -26pt" rowspan="1" colspan="1">
                      <select name="thn_akademik" class="form-control" required>
                        <option value="">-- Tahun Akademik --</option>
                        <option value="2019/2020">2019/2020</option>
                        <option value="2020/2021">2020/2021</option>
                        <option value="2021/2022">2021/2022</option>
                        <option value="2022/2023">2022/2023</option>
                        <option value="2023/2024">2023/2024</option>
                      </select>
                  </div>
                  <button type="submit" name="Cari" class="btn btn-success btn-flat" title="Cetak Hasil" style="margin-left:475pt; margin-top: -42pt"><i class="fa fa-print faa-pulse animated"></i> Cetak Hasil</button>
                <?php echo form_close(); ?>
                    </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-hover dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th> 

                                            <th>No. Tes</th>

                                            <th>Tanggal Tes</th> 

                                            <th>Nama</th>                                                                                        
                                            <th>Jenis Kelamin</th>                                                                                        
                                            <th>Tempat Lahir</th>

                                            <th>Tanggal Lahir</th>

                                            <th>Fakultas</th>                                                                                        
                                            <th>Program Studi</th>

                                            <th>Jalur Tes</th> 

                                            <th>Keterangan</th>

                                            <th>Tahun Akademik</th> 

                                            <th>Aksi <i class="fa fa-cog fa-spin"></i></th>                                                                                     
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 0; foreach($nilai as $kon)
                                    
                                    { $no++?>

                                        <tr>
                                            <td><?php echo $no; ?></td>

                                            <td><?php echo $kon->no_peserta; ?></td>

                                            <td><?=tgl_indo($kon->tgl_tes); ?></td>                                                                            
                                            <td><?php echo $kon->nama_mahasiswa; ?></td>                                                                                                                       
                                            <td><?php echo $kon->jenis_kelamin; ?></td>                                                                                                                       
                                            <td><?php echo $kon->tempat; ?></td>

                                            <td><?=tgl_indo($kon->tgl_lahir); ?></td>

                                            <td><?php echo $kon->fakultas_satu; ?></td>
                                             
                                            <td><?php echo $kon->prodi_satu; ?></td>
                                                                                                       
                                            <td><?php echo $kon->jalur_tes; ?></td>

                                            <td><?php echo $kon->keterangan; ?></td>

                                            <td><?php echo $kon->thn_akademik; ?></td>

                                            <td width='5%' align='center'><a class='btn btn-warning btn-xs' title='Detail' href="<?php echo base_url();?>panitia/dnilai/<?php echo $kon->id_jawaban; ?>"><span class="glyphicon glyphicon-eye-open faa-pulse animated"></span> Detail</a></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            </div>
            </div>
			
<?php $this->load->view('include/footer') ?>
</body>
</html>

