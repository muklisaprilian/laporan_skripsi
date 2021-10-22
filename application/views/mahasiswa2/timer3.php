<?php 
    $server     = "localhost";      //sesuaikan dengan nama server 
    $username   = "root";           //sesuaikan dengan username server, username default adalah root 
    $password   = "";               //sesuaikan dengan password server, apabila tidak ada dikosongi saja 
    $database   = "laporan_skripsi";    //sesuaikan dengan nama database yang sudah dibuat
     
    // Koneksi dan memilih database di server 
    mysql_connect($server,$username,$password) or die("Koneksi gagal"); 
    mysql_select_db($database) or die("database tidak ada"); 
?>
<?php
    //untuk memulai session
    session_start();
     
    //set session dulu dengan nama $_SESSION["mulai"]
    if (isset($_SESSION["mulai"])) { 
        //jika session sudah ada
        $telah_berlalu = time() - $_SESSION["mulai"];
    } else { 
        //jika session belum ada
        $_SESSION["mulai"]  = time();
        $telah_berlalu      = 0;
    } 
?>
<?php
    $sql    = mysql_query("select * from materi_ujian");   
    $data   = mysql_fetch_array($sql);
 
    $temp_waktu = ($data['durasi']*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
    $temp_menit = (int)($temp_waktu/60);                //dijadikan menit lagi
    $temp_detik = $temp_waktu%60;                       //sisa bagi untuk detik
     
    if ($temp_menit < 60) { 
        /* Apabila $temp_menit yang kurang dari 60 meni */
        $jam    = 0; 
        $menit  = $temp_menit; 
        $detik  = $temp_detik; 
    } else { 
        /* Apabila $temp_menit lebih dari 60 menit */           
        $jam    = (int)($temp_menit/60);    //$temp_menit dijadikan jam dengan dibagi 60 dan dibulatkan menjadi integer 
        $menit  = $temp_menit%60;           //$temp_menit diambil sisa bagi ($temp_menit%60) untuk menjadi menit
        $detik  = $temp_detik;
    }   
?>
<head>
    <!-- Kita membutuhkan jquery, disini saya menggunakan langsung dari jquery.com, jquery ini bisa didownload dan ditaruh dilocal -->
    <script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
  
    <!-- Script Timer -->
    <script type="text/javascript">
        $(document).ready(function() {
            /** Membuat Waktu Mulai Hitung Mundur Dengan 
                * var detik;
                * var menit;
                * var jam;
            */
            var detik   = <?= $detik; ?>;
            var menit   = <?= $menit; ?>;
            var jam     = <?= $jam; ?>;
                  
            /**
               * Membuat function hitung() sebagai Penghitungan Waktu
            */
            function hitung() {
                /** setTimout(hitung, 1000) digunakan untuk 
                     * mengulang atau merefresh halaman selama 1000 (1 detik) 
                */
                setTimeout(hitung,1000);
  
                /** Jika waktu kurang dari 20 menit maka Timer akan berubah menjadi warna merah */
                if(menit < 20 && jam == 0){
                    var peringatan = 'style="color:red"';
                };
  
                /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
                $('#timer').html(
                    '<h1 align="center"'+peringatan+'>Waktu Anda <br />' + jam + ':' + menit + ':' + detik + '</h1><hr>'
                );
  
                /** Melakukan Hitung Mundur dengan Mengurangi variabel detik - 1 */
                detik --;
  
                /** Jika var detik < 0
                    * var detik akan dikembalikan ke 59
                    * Menit akan Berkurang 1
                */
                if(detik < 0) {
                    detik = 59;
                    menit --;
  
                   /** Jika menit < 0
                        * Maka menit akan dikembali ke 59
                        * Jam akan Berkurang 1
                    */
                    if(menit < 0) {
                        menit = 59;
                        jam --;
  
                        /** Jika var jam < 0
                            * clearInterval() Memberhentikan Interval dan submit secara otomatis
                        */
                             
                        if(jam < 0) { 
                            clearInterval(hitung); 
                            /** Variable yang digunakan untuk submit secara otomatis di Form */
                            alert('Waktu Anda Telah Habis');
                            var dat3 = document.getElementById('dat3'); 
                            dat3.submit(); 
                        } 
                    } 
                } 
            }           
            /** Menjalankan Function Hitung Waktu Mundur */
            hitung();
        });
    </script>
</head>
<body>
    <div id='timer'></div>
   <div class="row">
        <div class="col-md-12"> 
        <div class="panel-body" style="height: 800px; overflow: auto;">
        <form role="form" action="<?php echo base_url(); ?>mahasiswa2/jawab" id="dat3" method="post">
                             <input type="hidden" name="jumlah_soal" value="<?php echo $total_soal; ?>">
                             <input type="hidden" name="id_jawaban" value="<?php echo $id_jawaban; ?>">
                                <?php $no=0; foreach($soal as $soal) { $no++ ?>
                                    <div class="form-group">
                                        <div style="margin-top:0pt"><b><?php echo $no; ?>. </b></div>
                                        <div style="margin-left:24pt; margin-top:-12pt"><label><?php echo $soal['soal']; ?></label></div>
                                        <?php if($soal['foto'] == ""){ echo '';?><?php } else { ?> <img style="margin-left:15px; margin-top:-5px;" src="<?php echo base_url() ?>uploads/<?php echo $soal['foto']; ?>" alt="" /><?php } ?>
                                        <input type='hidden' name='soal[]' value='<?php echo $soal['id_soal']; ?>'/>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $soal['id_soal']; ?>]" id="optionsRadios1" value="A" required/><b>A. </b> <?php echo $soal['a']; ?>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $soal['id_soal']; ?>]" id="optionsRadios2" value="B" required/><b>B. </b><?php echo $soal['b']; ?>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $soal['id_soal']; ?>]" id="optionsRadios3" value="C" required/><b>C. </b><?php echo $soal['c']; ?>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $soal['id_soal']; ?>]" id="optionsRadios4" value="D" required/><b>D. </b><?php echo $soal['d']; ?>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $soal['id_soal']; ?>]" id="optionsRadios5" value="E" required/><b>E. </b><?php echo $soal['e']; ?>
                                            </label>
                                        </div>
                                        
                    </div>
                        <?php } ?>                                
                                 <button type="submit" class="btn btn-primary" onsubmit="return confirm('Anda Yakin ?')"><i class="fa fa-arrow-circle-right faa-horizontal animated"></i> Selesai</button> 
                                </form>
                              
                        </div>

                    </div>
                    </div>                       
</body>
