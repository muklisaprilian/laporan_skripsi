-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 08:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laporan_skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(12) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'rahmat kurniawan', 'rahmat', '21031995');

-- --------------------------------------------------------

--
-- Table structure for table `calon_mahasiswa`
--

CREATE TABLE `calon_mahasiswa` (
  `id_mahasiswa` int(12) NOT NULL,
  `no_peserta` varchar(100) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jadwal_dan_tempat` varchar(200) NOT NULL,
  `fakultas_satu` varchar(100) NOT NULL,
  `fakultas_dua` varchar(100) NOT NULL,
  `fakultas_tiga` varchar(100) NOT NULL,
  `prodi_satu` varchar(100) NOT NULL,
  `prodi_dua` varchar(100) NOT NULL,
  `prodi_tiga` varchar(100) NOT NULL,
  `jalur_tes` enum('Ujian Masuk Bersama','Ujian Jalur Mandiri','Ujian Bidikmisi') NOT NULL,
  `thn_akademik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon_mahasiswa`
--

INSERT INTO `calon_mahasiswa` (`id_mahasiswa`, `no_peserta`, `nama_mahasiswa`, `jenis_kelamin`, `tempat`, `tgl_lahir`, `username`, `password`, `jadwal_dan_tempat`, `fakultas_satu`, `fakultas_dua`, `fakultas_tiga`, `prodi_satu`, `prodi_dua`, `prodi_tiga`, `jalur_tes`, `thn_akademik`) VALUES
(1, '12001', 'Ari Ridwan', 'Laki-Laki', 'Banda Aceh', '2000-12-22', 'ari', '2', '---------------------------------', 'Fakultas Keguruan dan Ilmu Pendidikan', 'Fakultas Teknik', 'Fakultas Agama Islam', 'Pendidikan Jasmani, Kesehatan dan Rekreasi', 'Teknik Komputer', 'Pendidikan Agama Islam', 'Ujian Jalur Mandiri', '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(12) NOT NULL,
  `fakultas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `fakultas`) VALUES
(1011, 'Fakultas Keguruan dan Ilmu Pendidikan'),
(1012, 'Fakultas Ekonomi'),
(1013, 'Fakultas Teknik'),
(1014, 'Fakultas Teknologi Pertanian'),
(1015, ' Fakultas Kesehatan Masyarakat'),
(1016, 'Fakultas Agama Islam');

-- --------------------------------------------------------

--
-- Table structure for table `grafik`
--

CREATE TABLE `grafik` (
  `id_grafik` int(12) NOT NULL,
  `thn_akademik` varchar(60) NOT NULL,
  `fkip` varchar(60) NOT NULL,
  `fe` varchar(60) NOT NULL,
  `ft` varchar(60) NOT NULL,
  `ftp` varchar(60) NOT NULL,
  `fkm` varchar(60) NOT NULL,
  `fai` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grafik`
--

INSERT INTO `grafik` (`id_grafik`, `thn_akademik`, `fkip`, `fe`, `ft`, `ftp`, `fkm`, `fai`) VALUES
(1, '2019/2020', '1', '1', '2', '1', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(12) NOT NULL,
  `id_mahasiswa` int(12) NOT NULL,
  `tgl_tes` date NOT NULL,
  `benar` int(10) NOT NULL DEFAULT 0,
  `salah` int(10) NOT NULL DEFAULT 0,
  `total_nilai` int(10) NOT NULL DEFAULT 0,
  `total_soal` int(10) NOT NULL,
  `keterangan` enum('Lulus','Tidak Lulus') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_detail`
--

CREATE TABLE `jawaban_detail` (
  `id_jawaban_detail` int(12) NOT NULL,
  `id_jawaban` int(12) NOT NULL,
  `id_soal` int(12) NOT NULL,
  `id_materi` int(12) NOT NULL,
  `jawaban` varchar(10) DEFAULT NULL,
  `kunci` varchar(10) NOT NULL,
  `nilai` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `materi_ujian`
--

CREATE TABLE `materi_ujian` (
  `id_materi` int(12) NOT NULL,
  `jalur_tes` enum('Ujian Masuk Bersama','Ujian Jalur Mandiri','Ujian Bidikmisi') NOT NULL,
  `j_soal` varchar(100) NOT NULL,
  `durasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi_ujian`
--

INSERT INTO `materi_ujian` (`id_materi`, `jalur_tes`, `j_soal`, `durasi`) VALUES
(113, 'Ujian Masuk Bersama', '100', '60 Menit'),
(114, 'Ujian Jalur Mandiri', '100', '60 Menit'),
(115, 'Ujian Bidikmisi', '100', '60 Menit');

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE `panitia` (
  `id_panitia` int(12) NOT NULL,
  `nama_panitia` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jalur_tes` enum('Ujian Masuk Bersama','Ujian Jalur Mandiri','Ujian Bidikmisi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panitia`
--

INSERT INTO `panitia` (`id_panitia`, `nama_panitia`, `username`, `password`, `jalur_tes`) VALUES
(1801, 'Hendri Saputra', 'Hendri', '22031995', 'Ujian Masuk Bersama'),
(1802, 'Reza Gunawan', 'Reza', '14021995', 'Ujian Jalur Mandiri'),
(1803, 'Dede Fariadi', 'Dede', '25011995', 'Ujian Bidikmisi');

-- --------------------------------------------------------

--
-- Table structure for table `peraturan`
--

CREATE TABLE `peraturan` (
  `id_peraturan` int(12) NOT NULL,
  `peraturan` varchar(500) NOT NULL,
  `id_panitia` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peraturan`
--

INSERT INTO `peraturan` (`id_peraturan`, `peraturan`, `id_panitia`) VALUES
(1110, 'Kerjakan soal dengan sebaik-baiknya dan tetaplah jujur dalam mengerjakannya, selama proses menjawab soal dilarang untuk berbuat curang, jika calon mahasiswa didapati berbuat curang maka ujian UMB dianggap gagal.\n\n--Panitia UMB--', 1801);

-- --------------------------------------------------------

--
-- Table structure for table `program_studi`
--

CREATE TABLE `program_studi` (
  `id_prodi` int(12) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `id_fakultas` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_studi`
--

INSERT INTO `program_studi` (`id_prodi`, `prodi`, `id_fakultas`) VALUES
(13201, 'Kesehatan Masyarakat', 1015),
(24201, 'Teknik Kimia', 1013),
(25201, 'Teknik Lingkungan', 1013),
(26201, 'Teknik Industri', 1013),
(41211, 'Teknologi Industri Pertanian', 1014),
(41221, 'Teknologi Pangan', 1014),
(55201, 'Teknik Komputer', 1013),
(61201, 'Manajemen', 1012),
(61206, 'Perbankan Syariah', 1016),
(62201, 'Akuntansi', 1012),
(70233, 'Komunikasi dan Penyiaran Islam', 1016),
(84202, 'Pendidikan Matematika', 1011),
(84203, 'Pendidikan Fisika', 1011),
(84204, 'Pendidikan Kimia', 1011),
(84205, 'Pendidikan Biologi', 1011),
(85201, 'Pendidikan Jasmani, Kesehatan dan Rekreasi', 1011),
(86206, 'Pendidikan Guru Sekolah Dasar', 1011),
(86208, 'Pendidikan Agama Islam', 1016),
(86233, 'Pendidikan Islam Anak Usia Dini', 1016),
(87201, 'Pendidikan Sejarah', 1011),
(87203, 'Pendidikan Ekonomi', 1011),
(88201, 'Pendidikan Bahasa dan Sastra Indonesia', 1011),
(88203, 'Pendidikan Bahasa Inggris', 1011);

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(12) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(200) NOT NULL,
  `b` varchar(200) NOT NULL,
  `c` varchar(200) NOT NULL,
  `d` varchar(200) NOT NULL,
  `e` varchar(200) NOT NULL,
  `kunci` varchar(10) NOT NULL,
  `jalur_tes` enum('Ujian Masuk Bersama','Ujian Jalur Mandiri','Ujian Bidikmisi') NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `soal`, `a`, `b`, `c`, `d`, `e`, `kunci`, `jalur_tes`, `foto`) VALUES
(30, '(MATEMATIKA DASAR)', '...', '...', '...', '...', '...', 'C', 'Ujian Masuk Bersama', '1.jpg'),
(31, '(MATEMATIKA DASAR)', '8', '5', '6', '4', '9', 'D', 'Ujian Masuk Bersama', '2.jpg'),
(32, '(MATEMATIKA DASAR)', '2', '3', '- 1', '- 2', '1', 'D', 'Ujian Masuk Bersama', '3.jpg'),
(33, '(MATEMATIKA DASAR)', '...', '...', '...', '...', '...', 'A', 'Ujian Masuk Bersama', '4.jpg'),
(34, '(MATEMATIKA DASAR)', '...', '...', '...', '...', '...', 'B', 'Ujian Masuk Bersama', '5.jpg'),
(35, '(MATEMATIKA DASAR)', '3/32', '2/25', '4/54', '9/76', '11/72', 'D', 'Ujian Masuk Bersama', '6.jpg'),
(36, '(MATEMATIKA DASAR)', '3', '4', '-12', '-3', '5', 'A', 'Ujian Masuk Bersama', '7.jpg'),
(37, '(MATEMATIKA DASAR)\r\n\r\nAndi menabung uang, uang yang ditabung pertama kali adalah Rp. 200,00. Setiap  akhir pekan berikutnya  Andi Menabung  Rp. 100,00 lebih besar dari sebelumnya. Jumlah tabungan Andi setelah 50 pekan adalah...', 'Rp. 125.500,00', 'Rp. 132.500,00', 'Rp. 175.000,00', 'Rp. 135.000,00', 'Rp. 165.500,00', 'B', 'Ujian Masuk Bersama', ''),
(38, '(MATEMATIKA DASAR)', '5', '-6', '7', '9', '6', 'E', 'Ujian Masuk Bersama', '8.jpg'),
(39, '(MATEMATIKA DASAR)', '...', '...', '...', '...', '...', 'C', 'Ujian Masuk Bersama', '9.jpg'),
(40, '(BIOLOGI)\r\nTeori Mengenai  asal usul makhluk hidup yang menyatakan bahwa makhluk hidup berasal dari hasil reaksi molekul-molekul yang ada dalam laut/air adalah dikemukakan oleh:\r\n', 'Oparin', 'H. Urey', 'Aristoteles', 'Stanley Miller', 'Leeuwenhook', 'B', 'Ujian Masuk Bersama', ''),
(41, '(BIOLOGI)\r\nVirus juga dapat digolongkan ke dalam benda mati karena mempunyai sifat...', 'Dapat menyebabkan penyakit pada manusia', 'Tidak dapat bergerak berpindah tempat', 'Mempunyai pembungkus yang terdiri dari protein', 'Dapat menyebabkan lahirnya bakteri', 'Dapat dikristalkan', 'E', 'Ujian Masuk Bersama', ''),
(42, '(BIOLOGI)\r\nJamur di bawah ini dapat digunakan dalam pembuatan tape...', 'Rhisopus orizae', 'Aspergillus orizae', 'Aspergillus wentil', 'Monila sitophila', 'Penicillium requeforti', 'B', 'Ujian Masuk Bersama', ''),
(43, '(BIOLOGI)\r\nProses reproduksi ganggang biru secara generatif berlangsung dengan cara...', 'Konjungsi', 'Fragmentasi', 'Heterokist', 'Meiosis', 'Suksesi', 'D', 'Ujian Masuk Bersama', ''),
(44, '(BIOLOGI)\r\nManusia akan terinfeksi cacing tambang bila...', 'Termakan telur yang infektious', 'Termakan larva filarialform', 'Termakan cacing dewasa', 'Larva filarialform menembus kulit', 'Terhirup telurnya', 'D', 'Ujian Masuk Bersama', ''),
(45, '(BIOLOGI)\r\nLapisan terdalam dari struktur batang adalah...', 'Xylem', 'Phloem', 'Perikambium', 'stele', 'Cortex', 'A', 'Ujian Masuk Bersama', ''),
(46, '(BIOLOGI)\r\nProses  penyerbukan yang dibantu oleh burung  disebut juga...', 'Malakogami', 'Ornitokori', 'Entogami', 'Ornitogami', 'Hydrogami', 'D', 'Ujian Masuk Bersama', ''),
(47, '(BIOLOGI)\r\nPada tumbuhan berbiji terbuka yang menjadi penghasil sperma adalah...', 'Serbuk sari', 'Bakal buah ', 'Sel nusellus', 'Kantong lembaga', 'Endosperm', 'A', 'Ujian Masuk Bersama', ''),
(48, '(BIOLOGI)\r\nYang bukan merupakan lingkungan fisik adalah...', 'Tanah', 'Air ', 'Udara', 'Temperatur', 'Makhluk hidup', 'E', 'Ujian Masuk Bersama', ''),
(49, '(BIOLOGI)\r\nPernyataan di bawah ini adalah benar mengenai burung, kecuali...', 'Peredaran darah ganda', 'Suhu tubuh dipengaruhi lingkungan', 'Bernafas dengan kantong hawa', 'Sistem peredaran darah tertutup', 'Alat pendengaran berkembang dengan baik', 'B', 'Ujian Masuk Bersama', ''),
(50, '(KIMIA)\r\n', '11 gram', '22 gram', '24 gram', '44 gram', '88 gram', 'B', 'Ujian Masuk Bersama', '10.jpg'),
(51, '(KIMIA)\r\nKe dalam 2 kg air dilarutkan 400 gr NaOH (Mr = 40) maka kadar larutan tersebut adalah...', '2M', '5M', '2m', '5m', '10m', 'D', 'Ujian Masuk Bersama', ''),
(52, '(KIMIA)', '...', '...', '...', '...', '...', 'C', 'Ujian Masuk Bersama', '11.jpg'),
(53, '(KIMIA)\r\nSuatu larutan  asam metanoat 0,1 M mempunyai pH = 2 Derajat ionisasi asam ini adalah...', '0,001', '0,01', '0,1', '0,2', '0,3', 'C', 'Ujian Masuk Bersama', ''),
(54, '(KIMIA)\r\nKecepatan reaksi dipengaruhi beberapa faktor di bawah ini, kecuali...', 'suhu', 'konsentrasi', 'katalisator', 'luas permukaan sentuhan', 'jenis reaksinya homogen atau tidak', 'E', 'Ujian Masuk Bersama', '');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id_thn` int(12) NOT NULL,
  `thn_akademik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id_thn`, `thn_akademik`) VALUES
(1, '2019/2020'),
(2, '2020/2021'),
(3, '2021/2022'),
(4, '2022/2023'),
(5, '2023/2024');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `calon_mahasiswa`
--
ALTER TABLE `calon_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `grafik`
--
ALTER TABLE `grafik`
  ADD PRIMARY KEY (`id_grafik`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `jawaban_detail`
--
ALTER TABLE `jawaban_detail`
  ADD PRIMARY KEY (`id_jawaban_detail`);

--
-- Indexes for table `materi_ujian`
--
ALTER TABLE `materi_ujian`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `panitia`
--
ALTER TABLE `panitia`
  ADD PRIMARY KEY (`id_panitia`);

--
-- Indexes for table `peraturan`
--
ALTER TABLE `peraturan`
  ADD PRIMARY KEY (`id_peraturan`);

--
-- Indexes for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`id_thn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `calon_mahasiswa`
--
ALTER TABLE `calon_mahasiswa`
  MODIFY `id_mahasiswa` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1017;

--
-- AUTO_INCREMENT for table `grafik`
--
ALTER TABLE `grafik`
  MODIFY `id_grafik` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jawaban_detail`
--
ALTER TABLE `jawaban_detail`
  MODIFY `id_jawaban_detail` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=801;

--
-- AUTO_INCREMENT for table `materi_ujian`
--
ALTER TABLE `materi_ujian`
  MODIFY `id_materi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `panitia`
--
ALTER TABLE `panitia`
  MODIFY `id_panitia` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1804;

--
-- AUTO_INCREMENT for table `peraturan`
--
ALTER TABLE `peraturan`
  MODIFY `id_peraturan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1111;

--
-- AUTO_INCREMENT for table `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `id_prodi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88204;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;

--
-- AUTO_INCREMENT for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `id_thn` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
