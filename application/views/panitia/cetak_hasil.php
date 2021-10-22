<?php	
	$this->fpdf->FPDF('L','cm','A4');
	$this->fpdf->AliasNbPages();
	$this->fpdf->AddPage();

	$this->fpdf->Image('assets/image/mm.jpg',1,0.5,2.7);

	$this->fpdf->SetLineWidth(0.1);	

	$this->fpdf->SetFont('arial','B',19);
	$this->fpdf->Cell(0,1,'UNIVERSITAS SERAMBI MEKKAH',0,0,'C');

	$this->fpdf->SetFont('arial','B',18);
	$this->fpdf->Ln(0.7);	
	$this->fpdf->Cell(0,1,'PROVINSI ACEH',0,0,'C');

	$this->fpdf->SetFont('arial','',11);
	$this->fpdf->Ln(0.6);
	$this->fpdf->Cell(0,1,'Jl. Tgk. Imum Lueng Bata, Telp. (0651) 26160 dan (0651) 22471 Fax 22471 Banda Aceh',0,0,'C');


	$this->fpdf->SetFont('arial','B',10);
	$this->fpdf->Ln(1.5);
	$this->fpdf->Cell(0,1,'','ET',0,'C');

	$this->fpdf->SetFont('arial','B',12);
	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(0,1,'LAPORAN HASIL UJIAN MAHASISWA BARU PADA UNIVERSITAS SERAMBI MEKKAH',0,0,'C');
	
	$this->fpdf->SetLineWidth(0);
	$this->fpdf->SetFont('arial','B',7);
	$this->fpdf->Ln(1.2);
	$this->fpdf->Cell(0.7,0.5,'No',1,0,'C');
	$this->fpdf->Cell(1.2,0.5,'No. Tes',1,0,'C');		
	$this->fpdf->Cell(2.2,0.5,'Tanggal Tes',1,0,'C');
	$this->fpdf->Cell(2.9,0.5,'Nama',1,0,'C');
	$this->fpdf->Cell(1.4,0.5,'JK',1,0,'C');
	$this->fpdf->Cell(1.9,0.5,'Tempat Lahir',1,0,'C');
	$this->fpdf->Cell(1.9,0.5,'Tanggal Lahir',1,0,'C');
	$this->fpdf->Cell(4.3,0.5,'Fakultas',1,0,'C');
	$this->fpdf->Cell(5.0,0.5,'Program Studi',1,0,'C');
	$this->fpdf->Cell(2.5,0.5,'Jalur Tes',1,0,'C');
	$this->fpdf->Cell(1.6,0.5,'Keterangan',1,0,'C');	
	$this->fpdf->Cell(2.2,0.5,'Tahun Akademik',1,0,'C');		
	

 	$this->fpdf->SetFont('arial','',6.6);
	$no=1;
	foreach($nilai as $kon) {		
		$this->fpdf->Ln(0.5);
	  	$this->fpdf->Cell(0.7,0.5,$no,1,0,'L');	
	  	$this->fpdf->Cell(1.2,0.5,$kon->no_peserta,1,0,'C');	
	  	$this->fpdf->Cell(2.2,0.5,tgl_indo($kon->tgl_tes),1,0,'C');
	  	$this->fpdf->Cell(2.9,0.5,$kon->nama_mahasiswa,1,0,'C');
	  	$this->fpdf->Cell(1.4,0.5,$kon->jenis_kelamin,1,0,'C');
	  	$this->fpdf->Cell(1.9,0.5,$kon->tempat,1,0,'C');
	  	$this->fpdf->Cell(1.9,0.5,tgl_indo($kon->tgl_lahir),1,0,'C');
	  	$this->fpdf->Cell(4.3,0.5,$kon->fakultas_satu,1,0,'C');
	  	$this->fpdf->Cell(5.0,0.5,$kon->prodi_satu,1,0,'C');
	  	$this->fpdf->Cell(2.5,0.5,$kon->jalur_tes,1,0,'C');	
		$this->fpdf->Cell(1.6,0.5,$kon->keterangan,1,0,'C');
		$this->fpdf->Cell(2.2,0.5,$kon->thn_akademik,1,0,'C');

	 $no++;
	}

	$this->fpdf->SetLineWidth(0);
	$this->fpdf->SetFont('arial','',8);
	$this->fpdf->Ln(0.9);
	$this->fpdf->Cell(25.0,0.5,'Banda Aceh,',0,0,'R');
					
	$this->fpdf->Cell(1.7,0.5,(tgl_indo("Y-m-d")),0,0,'R');		


	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(24.2,0.5,'Rektor',0,0,'R');

	$this->fpdf->Ln(1.0);
	$this->fpdf->Cell(23.8,0.5,'Dto',0,0,'R');

	$this->fpdf->Ln(1.0);
	$this->fpdf->Cell(27.6,0.5,'Dr. H. Said Usman, S.Pd., M.Kes.',0,0,'R');
	


	$this->fpdf->Output();
?>