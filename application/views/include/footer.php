<script src="<?php echo base_url();?>assets1/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="<?php echo base_url();?>assets1/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets1/js/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets1/js/dataTables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
      $(function () {
        $("#example1").DataTable({          
          "language": {
            "url": "<?php echo base_url(); ?>assets/plugins/datatables/Indonesian.json",
            "sEmptyTable": "Tidak ada data di database"
        }
        });
      });
      $(function() {
          $( "#tgl_surat" ).datepicker({ 
            autoclose: true 
          });
        });
    </script>
<!-- CUSTOM SCRIPTS -->
<script src="<?php echo base_url();?>assets1/js/custom.js"></script>
