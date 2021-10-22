<?php $this->load->view('include/headsis') ?>
<body>
<div id="page-wrapper" >
<div id="page-inner">
<div class="row">
        <div class="col-md-12">
        <section class="content-header">
          <h1><i class="fa fa-list-ol faa-pulse animated"></i>
            Form Data Soal Ujian Masuk Bersama
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>mahasiswa/index"><i class="fa fa-home faa-pulse animated"></i> Home</a></li>
            <li class="active"><i class="fa fa-list-ol faa-pulse animated"></i> Form Data Soal Ujian Masuk Bersama</li>
          </ol>
        </section>  
        </div>
        </div>
<div class="alert alert-info alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<?php  
 $peraturan = $this->db->query("SELECT * FROM peraturan")->result();
 foreach ($peraturan as $set) 
 ?>
 <div class="form-group">
  <label for="exampleInputEmail1">"PERATURAN"</label>
    <div type="text"><?php echo $set->peraturan; ?></div>
    </div>
</div>
    <div id="wrapper"></div>
        <div id="page-inner">           
           <div class="row">
            <div class="col-md-12">                              
                <div class="panel panel-primary">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body" >
                        <div id="morris-bar-chart">
                            <h5>&nbsp;<?php include('timer1.php'); ?></h5>
                        </div>
                       
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
               
                        <!-- /. NAV SIDE  -->
                

	<script type="text/javascript" src="mantap/js/jquery-1.4.2.min.js"></script>		
    <script type="text/javascript" src="mantap/js/jquery.form.js"></script>
    <script type="text/javascript" src="mantap/js/jquery.validate.js"></script>
    <script type="text/javascript" src="mantap/js/bbq.js"></script>
    <script type="text/javascript" src="mantap/js/jquery-ui-1.8.5.custom.min.js"></script>
    <script type="text/javascript" src="mantap/js/jquery.form.wizard.js"></script>
    
    <script type="text/javascript">
			$(function(){
				$("#demoForm").formwizard({ 
				 	formPluginEnabled: true,
				 	validationEnabled: true,
				 	focusFirstInput : true,
				 	formOptions :{
						success: function(data){$("#status").fadeTo(500,1,function(){ $(this).html("You are now registered!").fadeTo(5000, 0); })},
						beforeSubmit: function(data){$("#data").html("data sent to the server: " + $.param(data));},
						dataType: 'json',
						resetForm: true
				 	},
				 	inAnimation : {height: 'show'},
			        outAnimation: {height: 'hide'},
					inDuration : 700,
					outDuration: 700,
					easing: 'easeOutBounce'	//see e.g. http://gsgd.co.uk/sandbox/jquery/easing/ for information on easing
				 }
				);
  		});
		  </script>
		  
<script type="text/javascript" src="assets1/js/jquery.plugin.min.js"></script>
<script type="text/javascript" src="assets1/js/jquery.countdown.min.js"></script>
<!-- /. WRAPPER  -->
<?php $this->load->view('include/footer') ?>
</div>
</div>
</body>

