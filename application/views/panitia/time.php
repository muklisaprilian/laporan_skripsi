<html xmlns="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script>
          function viewjam(){
                   var jam;
                   var jamku = new Date();//membuat objek waktu
                   jam = ":" + jamku.getHours()+":"+jamku.getMinutes()+":"+jamku.getSeconds();//menempatkan data waktu pada variabel
                   document.getElementById('tampiljam').innerHTML=jam;//menampilkan variabel jam pada html
                   setTimeout('viewjam()',0);//meload function secara terus menerus
          }

var hariseminggu = new Array('Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
          var bulansetahun = new Array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
         
          function hari(){
                   var hariini;
                   var hari = new Date();//membuat objek waktu
                   hariini = ":" + hariseminggu[hari.getDay()]+", "+hari.getDate()+" "+bulansetahun[hari.getMonth()]+" "+hari.getFullYear();//menempatkan data waktu pada variabel
                   document.getElementById('tampilhari').innerHTML=hariini; //menampilkan variabel hariini pada html
                   setTimeout('hari()',300); //meload function secara terus menerus
          }

</script>

</head>
<body onload="viewjam(); hari();">

<div></div>
<div>SEKARANG JAM <strong><big><a id="tampiljam"></a></big></strong></div>
<div>HARI <strong><big><a id="tampilhari"></a></big></strong></div>

</body>
</html>