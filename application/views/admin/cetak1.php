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
	$this->fpdf->Cell(0,1,'LAPORAN DATA CALON MAHASISWA',0,0,'C');
	
	$this->fpdf->SetLineWidth(0);
	$this->fpdf->SetFont('arial','',9);
	$this->fpdf->Ln(1.3);
	$this->fpdf->Cell(3.5,0.5,'No. Peserta',0,0,'L');				
	$this->fpdf->Cell(4.5,0.5,' :  '.$no_peserta,0,0,'L');		

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(3.5,0.5,'Nama',0,0,'L');		
	$this->fpdf->Cell(4.5,0.5,' :  '.$nama_mahasiswa,0,0,'L');		

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(3.5,0.5,'Jenis Kelamin',0,0,'L');
	$this->fpdf->Cell(4.5,0.5,' :  '.$jenis_kelamin,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(3.5,0.5,'Tempat &',0,0,'L');
	$this->fpdf->Cell(4.5,0.5,' :  '.$tempat,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(3.5,0.5,'Tanggal Lahir',0,0,'L');
	$this->fpdf->Cell(4.5,0.5,' :  '.tgl_indo($tgl_lahir),0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(3.5,0.5,'Username',0,0,'L');
	$this->fpdf->Cell(4.5,0.5,' :  '.$username,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(3.5,0.5,'Password',0,0,'L');
	$this->fpdf->Cell(4.5,0.5,' :  '.$password,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(3.5,0.5,'Jadwal & Tempat Ujian',0,0,'L');
	$this->fpdf->Cell(0.3,0.5,' :  ',0,0,'L');
	$this->fpdf->MultiCell(10.0,0.5,''.$jadwal_dan_tempat,0,'L');

	$this->fpdf->Ln(0.1);
	$this->fpdf->Cell(3.5,0.5,'Jalur Tes',0,0,'L');
	$this->fpdf->Cell(4.5,0.5,' :  '.$jalur_tes,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(3.5,0.5,'Tahun Akademik',0,0,'L');
	$this->fpdf->Cell(4.5,0.5,' :  '.$thn_akademik,0,0,'L');

	$this->fpdf->Ln(1.5);
	$this->fpdf->Cell(3.5,0.5,'Pilihan Satu',0,0,'L');
	$this->fpdf->Cell(0.3,0.5,' :',0,0,'L');
	$this->fpdf->Cell(0.2,-0.6,'    Fakultas',0,0,'L');
	$this->fpdf->Cell(6.2,0.5,'  '.$fakultas_satu,1,0,'L');
	$this->fpdf->Cell(0.2,-0.6,'    Prodi',0,0,'L');
	$this->fpdf->Cell(7.0,0.5,'  '.$prodi_satu,1,0,'L');

	$this->fpdf->Ln(0.7);
	$this->fpdf->Cell(3.5,0.5,'Pilihan Dua',0,0,'L');
	$this->fpdf->Cell(0.3,0.5,' :',0,0,'L');
	$this->fpdf->Cell(0.2,-0.6,'',0,0,'L');
	$this->fpdf->Cell(6.2,0.5,'  '.$fakultas_dua,1,0,'L');
	$this->fpdf->Cell(0.2,-0.6,'',0,0,'L');
	$this->fpdf->Cell(7.0,0.5,'  '.$prodi_dua,1,0,'L');

	$this->fpdf->Ln(0.7);
	$this->fpdf->Cell(3.5,0.5,'Pilihan Tiga',0,0,'L');
	$this->fpdf->Cell(0.3,0.5,' :',0,0,'L');
	$this->fpdf->Cell(0.2,-0.6,'',0,0,'L');
	$this->fpdf->Cell(6.2,0.5,'  '.$fakultas_tiga,1,0,'L');
	$this->fpdf->Cell(0.2,-0.6,'',0,0,'L');
	$this->fpdf->Cell(7.0,0.5,'  '.$prodi_tiga,1,0,'L');
	

	$this->fpdf->SetLineWidth(0);
	$this->fpdf->SetFont('arial','',8);
	$this->fpdf->Ln(2.5);
	$this->fpdf->Cell(1.0,0.5,'Catatan :',0,0,'L');
	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(1.0,0.5,'Bagi Peserta Yang Telah Mendaftar Diharapkan',0,0,'L');
	$this->fpdf->Ln(0.4);
	$this->fpdf->Cell(1.0,0.5,'Mengikuti Ujian Tes Tulis Pada Tanggal Yang Sudah Ditetapkan.',0,0,'L');


	$this->fpdf->SetLineWidth(0);
	$this->fpdf->SetFont('arial','',8);
	$this->fpdf->Ln(2.0);
	$this->fpdf->Cell(1.0,0.5,'YPSM,',0,0,'L');
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