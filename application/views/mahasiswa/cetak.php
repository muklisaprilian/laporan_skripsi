<?php	
	$this->fpdf->FPDF('P','cm','A4');
	$this->fpdf->AliasNbPages();
	$this->fpdf->AddPage();

	$this->fpdf->Image('assets/image/mm.jpg',1,0.5,2.7);

	$this->fpdf->SetLineWidth(0.1);	

	$this->fpdf->SetFont('arial','B',16);
	$this->fpdf->Cell(0,1,'UNIVERSITAS SERAMBI MEKKAH',0,0,'C');

	$this->fpdf->SetFont('arial','B',15);
	$this->fpdf->Ln(0.7);	
	$this->fpdf->Cell(0,1,'PROVINSI ACEH',0,0,'C');

	$this->fpdf->SetFont('arial','',9.5);
	$this->fpdf->Ln(0.6);
	$this->fpdf->Cell(0,1,'Jl. Tgk. Imum Lueng Bata, Telp. (0651) 26160 dan (0651) 22471 Fax 22471 Banda Aceh',0,0,'C');


	$this->fpdf->SetFont('arial','B',10);
	$this->fpdf->Ln(1.3);
	$this->fpdf->Cell(0,1,'','ET',0,'C');

	$this->fpdf->SetFont('arial','B',10);
	$this->fpdf->Ln(0.3);
	$this->fpdf->Cell(0,1,'LAPORAN HASIL UJIAN MASUK BERSAMA',0,0,'C');
	
	$this->fpdf->SetLineWidth(0);
	$this->fpdf->SetFont('arial','B',9);
	$this->fpdf->Ln(1.5);
	$this->fpdf->Cell(2.8,0.5,'Nama Peserta',0,0,'L');
	$this->fpdf->Cell(0.3,0.5,':',0,0,'L');
	foreach($nilai as $kon) {				
	$this->fpdf->Cell(3.0,0.5,$kon['nama_mahasiswa'],0,0,'L');		
	}

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(2.8,0.5,'Jenis Kelamin',0,0,'L');
	$this->fpdf->Cell(0.3,0.5,':',0,0,'L');
	foreach($nilai as $kon) {				
	$this->fpdf->Cell(3.0,0.5,$kon['jenis_kelamin'],0,0,'L');		
	}

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(2.8,0.5,'Tempat &',0,0,'L');
	$this->fpdf->Cell(0.3,0.5,':',0,0,'L');
	foreach($nilai as $kon) {				
	$this->fpdf->Cell(3.0,0.5,$kon['tempat'],0,0,'L');		
	}

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(2.8,0.5,'Tanggal Lahir',0,0,'L');
	$this->fpdf->Cell(0.3,0.5,':',0,0,'L');
	foreach($nilai as $kon) {				
	$this->fpdf->Cell(3.0,0.5,tgl_indo($kon['tgl_lahir']),0,0,'L');		
	}

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(2.8,0.5,'Fakultas',0,0,'L');
	$this->fpdf->Cell(0.3,0.5,':',0,0,'L');
	foreach($nilai as $kon) {
	$this->fpdf->Cell(3.0,0.5,$kon['fakultas_satu'],0,0,'L');							
	}

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(2.8,0.5,'Program Studi',0,0,'L');
	$this->fpdf->Cell(0.3,0.5,':',0,0,'L');
	foreach($nilai as $kon) {
	$this->fpdf->Cell(3.0,0.5,$kon['prodi_satu'],0,0,'L');	
	}

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(2.8,0.5,'Jalur Tes',0,0,'L');
	$this->fpdf->Cell(0.3,0.5,':',0,0,'L');
	foreach($nilai as $kon) {				
	$this->fpdf->Cell(3.0,0.5,$kon['jalur_tes'],0,0,'L');		
	}

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(2.8,0.5,'Tahun Akademik',0,0,'L');
	$this->fpdf->Cell(0.3,0.5,':',0,0,'L');
	foreach($nilai as $kon) {				
	$this->fpdf->Cell(3.0,0.5,$kon['thn_akademik'],0,0,'L');		
	}
	
	$this->fpdf->SetFont('arial','B',9);
	$this->fpdf->Ln(1.3);
	$this->fpdf->Cell(1.0,0.5,'No',1,0,'C');
	$this->fpdf->Cell(2.0,0.5,'No. Tes',1,0,'C');		
	$this->fpdf->Cell(3.0,0.5,'Tanggal Tes',1,0,'C');
	$this->fpdf->Cell(2.5,0.5,'Benar',1,0,'C');
	$this->fpdf->Cell(2.5,0.5,'Salah',1,0,'C');
	$this->fpdf->Cell(2.5,0.5,'Nilai',1,0,'C');
	$this->fpdf->Cell(2.5,0.5,'Total Soal',1,0,'C');
	$this->fpdf->Cell(3.0,0.5,'Keterangan',1,0,'C');	
	
 	$this->fpdf->SetFont('arial','',8);
	$no=1;
	foreach($nilai as $kon) {		
		$this->fpdf->Ln(0.5);
	  	$this->fpdf->Cell(1.0,0.5,$no,1,0,'C');	
	  	$this->fpdf->Cell(2.0,0.5,$kon['no_peserta'],1,0,'C');	
	  	$this->fpdf->Cell(3.0,0.5,tgl_indo($kon['tgl_tes']),1,0,'C');
	  	$this->fpdf->Cell(2.5,0.5,$kon['benar'],1,0,'C');
	  	$this->fpdf->Cell(2.5,0.5,$kon['salah'],1,0,'C');
	  	$this->fpdf->Cell(2.5,0.5,$kon['total_nilai'],1,0,'C');
	  	$this->fpdf->Cell(2.5,0.5,$kon['total_soal'],1,0,'C');	
	  	$this->fpdf->Cell(3.0,0.5,$kon['keterangan'],1,0,'C');	
		
	 $no++;
	}

	$this->fpdf->SetLineWidth(0);
	$this->fpdf->SetFont('arial','',8);
	$this->fpdf->Ln(0.7);
	$this->fpdf->Cell(1.0,0.5,'Catatan :',0,0,'L');
	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(1.0,0.5,'-/- Selamat Anda Dinyatakan Lulus',0,0,'L');
	$this->fpdf->Ln(0.4);
	$this->fpdf->Cell(1.0,0.5,'-/- Bagi Peserta Yang Tidak Lulus Tes Diharapkan Segera Hubungi Bapak Syamsudin (085260189973)',0,0,'L');


	$this->fpdf->SetLineWidth(0);
	$this->fpdf->SetFont('arial','',8);
	$this->fpdf->Ln(2.0);
	$this->fpdf->Cell(1.0,0.5,'Panitia Penerima Mahasiswa Baru USM 20.....',0,0,'L');
	$this->fpdf->Cell(14.9,0.5,'Banda Aceh,',0,0,'R');

	$this->fpdf->Cell(1.7,0.5,(tgl_indo("Y-m-d")),0,0,'R');		

	$this->fpdf->Ln(2.5);
	$this->fpdf->Cell(0.1,1.0,'',0,0,'L');
	$this->fpdf->Cell(3.0,0.0,'',1,0,'L');
	$this->fpdf->Cell(11.1,1.0,'',0,0,'R');
	$this->fpdf->Cell(3.0,0.0,'',1,0,'R');

	$this->fpdf->Ln(0.1);
	$this->fpdf->Cell(0.1,0.5,'Tanda Tangan Petugas',0,0,'L');
	$this->fpdf->Cell(17.1,0.5,'Tanda Tangan Peserta',0,0,'R');

	$this->fpdf->Output();
?>