<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apps UMB Universitas Serambi Mekkah | Dashboard</title>

    <link href="<?php echo base_url();?>/assets1/img/faviconn.png" rel="shortcut icon"/>

    <link href="<?php echo base_url();?>assets1/css/bootstrap.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.8/font-awesome-animation.min.css">

    <link href="<?php echo base_url();?>assets1/css/font-awesome.css" rel="stylesheet" />
     
    <link href="<?php echo base_url();?>assets1/css/custom.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets1/css/chosen.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets1/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">

    <style type="text/css">
        .chzn-container-single .chzn-search input{
            width: 100%;
        }
    </style>
            

<script src="<?php echo base_url();?>assets1/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>assets1/js/jquery.js"></script>

<script src="<?php echo base_url();?>assets1/js/custom.js"></script>
<script src="<?php echo base_url();?>assets1/js/chosen.jquery.js"></script>

<script type="text/javascript">
        $(function(){
            $('.chzn-select').chosen();
            $('.chzn-select-deselect').chosen({allow_single_deselect:true});
        });

    </script>
    
</head>
<div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>panitia">Aplikasi UMB</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown user-dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i></i>Selamat Datang, Panitia<b class="caret"></b></a>
                     <ul class="dropdown-menu">
                         <li class="divider"></li>
                         <li><a href="<?php echo base_url(); ?>login1/keluar" onclick="return confirm('Anda ingin keluar ?');"><i class="fa fa-power-off"></i> LOG OUT</a></li>
                     </ul>
                 </li>
             </ul>
         </div>
     </nav>
     <!-- /#page-wrapper -->
 </div>