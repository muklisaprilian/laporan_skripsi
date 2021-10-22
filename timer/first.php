<?php

	session_start();
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"laporan_skripsi");
	$durasi="";
	$res=mysqli_query($link,"select * from materi_ujian");
	while ($row=mysqli_fetch_array($res)) 

	{
		$durasi=$row["durasi"];
	}

	$_SESSION["durasi"]=$durasi;
	$_SESSION["start_time"]=date("Y-m-d H:i:s");

	$end_time=$end_time=date('Y-m-d H:i:s', strtotime('+'.$_SESSION["durasi"].'minutes', strtotime($_SESSION["start_time"])));

		$_SESSION["end_time"]=$end_time;

	?>
	<script type="text/javascript">
		window.location="index1.php";
	</script>