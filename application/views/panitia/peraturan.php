<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1><i class="fa fa-table faa-pulse animated"></i>
            Tabel Data Peraturan
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-home faa-pulse animated"></i>Home</a></li>
            <li class="active"><i class="fa fa-table faa-pulse animated"></i> Tabel Data Peraturan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

             <div class="row">            
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                    <a href="<?php echo base_url(); ?>panitia/tambah_peraturan" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-plus faa-pulse animated"></i> Tambah</a>
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
                        <th>No</th>
                        <th>Id Peraturan</th>
                        <th>Peraturan</th>
                        <th>Id Panitia</th>
                        <th>Aksi <i class="fa fa-cog fa-spin"></i></th>
                    </thead>
                    <tbody>
                        <?php  
                        $no = 1;
                        foreach ($data as $lihat):
                        ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                       <td><?php echo $lihat->id_peraturan?></td>
                      <td><?php echo ($lihat->peraturan) ?></td> 
                       <td><?php echo $lihat->id_panitia?></td> 
                        <td align="center">
                          <div class="btn-group" role="group">
                            <a href="<?php echo base_url(); ?>panitia/edit_peraturan/<?php echo $lihat->id_peraturan ?>" class="btn btn-info btn-xs" href title="Edit"><i class="fa fa-edit faa-pulse animated"></i> Edit</a>
                            <a href="<?php echo base_url(); ?>panitia/hapus_peraturan/<?php echo $lihat->id_peraturan ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-danger btn-xs" href title="Hapus"><i class="fa fa-trash faa-pulse animated"></i> Hapus</a>
                          </div>
                        </td>                     
                      </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
            
                </div><!-- /.box-body -->
                </div>
             </div>
          </div>
          
         

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
