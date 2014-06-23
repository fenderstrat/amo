-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 21 Apr 2014 pada 01.52
-- Versi Server: 5.6.16
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kpumuko1_mukomuko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `idArtikel` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL,
  `judul` varchar(250) NOT NULL,
  `artikel` longtext NOT NULL,
  `image` text,
  `status` varchar(50) NOT NULL DEFAULT 'draft',
  `pembuat` varchar(100) NOT NULL,
  PRIMARY KEY (`idArtikel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`idArtikel`, `tanggal`, `judul`, `artikel`, `image`, `status`, `pembuat`) VALUES
(43, '2014-03-31 06:03:00', 'TATA CARA PENCOBLOSAN PADA PEMILU ANGGOTA DPR, DPD DAN DPRD TAHUN 2014', '<p>Berdasarkan Peraturan &nbsp;Komisi Pemilihan Umum Nomor 05 Tahun 2014 Tentang Perubahan Atas&nbsp;Peraturan Komisi Pemilihan Umum Nomor 26 Tahun 2013 Tentang Pemungutan Dan Penghitungan Suara Di Tempat Pemungutan Suara Dalam Pemilihan Umum Angota Dewan Perwakilan Rakyat, Dewan Perwakilan Daerah Dan Dewan Perwakilan Rakyat Daerah Provinsi Dan Dewan Perwakilan Rakyat Daerah Kabupaten/ Kota</p>\r\n<p>Surat Suara untuk Anggota DPR, DPRD Provinsi dan DPRD Kabupaten/Kota:</p>\r\n<ol>\r\n<li>1 (satu) surat suara hanya dapat untuk dihitung 1 (satu) suara;</li>\r\n<li>Surat suara sebagaimana dimaksud pada angka 1 dinyatakan sah atau tidak sah;</li>\r\n<li>tanda coblos pada kolom yang memuat nomor urut, tanda gambar, dan nama Partai Politik, suaranya dinyatakan sah untuk Partai Politik;</li>\r\n<li>tanda coblos pada kolom yang memuat nomor urut dan nama calon anggota, suaranya dinyatakan sah untuk nama calon yang bersangkutan dari Partai Politik yang mencalonkan;</li>\r\n<li>tanda coblos pada kolom yang memuat nomor urut, tanda gambar dan nama Partai Politik, serta tanda coblos pada kolom yang memuat nomor urut dan nama calon dari Partai Politik yang bersangkutan, suaranya dinyatakan sah untuk nama calon yang bersangkutan dari Partai Politik yang mencalonkan;</li>\r\n<li>tanda coblos pada kolom yang memuat nomor urut, tanda gambar, dan nama Partai Politik, serta tanda coblos lebih dari 1 (satu) calon pada kolom yang memuat nomor urut dan nama calon dari Partai Politik yang sama, suaranya dinyatakan sah 1 (satu) suara untuk Partai Politik;</li>\r\n<li>tanda coblos lebih dari 1 (satu) calon pada kolom yang memuat nomor urut dan nama calon dari Partai Politik yang sama, suaranya dinyatakan sah 1 (satu) suara untuk Partai Politik;</li>\r\n<li>tanda coblos lebih dari 1 (satu) kali pada kolom yang memuat nomor urut, tanda gambar, dan nama Partai Politik, tanpa mencoblos salah satu calon pada kolom yang memuat nomor urut dan nama calon dari</li>\r\n<li>Partai Politik yang sama, suaranya dinyatakan sah 1 (satu) suara untuk Partai Politik;</li>\r\n<li>tanda coblos pada surat suara yang diblok warna abu-abu dibawah nomor urut dan nama calon terakhir, suaranya dinyatakan sah 1 (satu) suara untuk Partai Politik;</li>\r\n<li>tanda coblos tepat pada garis kolom yang memuat nomor urut, tanda gambar dan nama Partai Politik tanpa mencoblos salah satu calon pada kolom yang memuat nomor urut dan nama calon dari Partai Politik yang sama, suaranya dinyatakan sah 1 (satu) suara untuk Partai Politik;</li>\r\n<li>tanda coblos tepat pada garis kolom yang memuat 1 (satu) nomor urut dan nama calon suaranya dinyatakan sah untuk nama calon yang bersangkutan;</li>\r\n<li>tanda coblos tepat pada garis yang memisahkan antara nomor urut dan nama calon dengan nomor urut dan nama calon lain dari Partai Politik yang sama, sehingga tidak dapat dipastikan tanda coblos tersebut mengarah pada 1 (satu) nomor urut dan nama calon, suaranya dinyatakan sah 1 (satu) suara untuk Partai Politik;</li>\r\n<li>tanda coblos pada satu kolom yang memuat nomor urut tanpa nama calon disebabkan calon tersebut tidak lagi memenuhi syarat, dinyatakan sah 1 (satu) suara untuk Partai Politik;</li>\r\n<li>tanda coblos pada satu kolom yang memuat nomor urut dan nama calon atau tanpa nama calon yang disebabkan calon tersebut meninggal dunia/tidak lagi memenuhi syaratdan tanda coblos pada satu kolom nomor urut dan nama calon dari satu Partai politik, dinyatakan sah 1 (satu) suara untuk calon yang masih memenuhi syarat;</li>\r\n<li>tanda coblos lebih dari 1 (satu) kali pada kolom yang memuat nomor urut dan nama calon, dinyatakan sah 1 (satu) suara untuk calon yang bersangkutan;</li>\r\n<li>tanda coblos pada satu kolom yang memuat nomor dan nama calon dan tanda coblos pada kolom abu-abu, dinyatakan sah untuk 1 (satu) calon yang memenuhi syarat;</li>\r\n<li>tanda coblos pada kolom yang memuat nomor, nama dan gambar Partai Politik yang tidak mempunyai daftar calon, dinyatakan sah 1 (satu) suara untuk Partai Politik.</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p>b. Surat Suara sah untuk Anggota DPD:</p>\r\n<ol>\r\n<li>1 (satu) surat suara hanya dapat dihitung untuk 1 (satu) suara;</li>\r\n<li>Surat suara sebagaimana dimaksud pada angka 1 dinyatakan sah atau tidak sah;</li>\r\n<li>tanda coblos pada kolom 1 (satu) calon yang memuat nomor urut, nama calon dan foto calon anggota DPD, dinyatakan sah 1 (satu) suara untuk Calon Anggota DPD yang bersangkutan;</li>\r\n<li>tanda coblos lebih dari satu kali pada kolom 1 (satu) calon yang memuat nomor urut, nama alon dan foto calon anggota DPD, dinyatakan sah 1 (satu) suara untuk Calon Anggota DPD yang bersangkutan;</li>\r\n<li>tanda coblos tepat pada garis kolom 1 (satu) calon yang memuat nomor urut, nama calon dan foto calon anggota DPD, dinyatakan sah 1</li>\r\n<li>(satu) suara untuk Calon Anggota DPD yang bersangkutan.</li>\r\n</ol>', 'Feature_img_TATA-CARA-PENCOBLOSAN-PADA-PEMILU-ANGGOTA-DPR-DPD-DAN-DPRD-TAHUN-2014.jpg', 'publish', ''),
(45, '2014-03-31 04:03:00', 'PERSYARATAN PEMANTAU PEMILU ANGGOTA DPR, DPD DAN DPRD TAHUN 2014', '<p>Berdasarkan Undang-Undang Nomor 15 Tahun 2011 dan Peraturan KPU Nomor 10 Tahun 2012 Tentang Pemantau dan Tata Cara Pemantau Pemilihan Umum Anggota DPR, DPD dan DPRD Tahun 2014.</p>\n<p>Dalam rangka melaksanakan Pemilihan Umum Anggota DPR, DPD dan DPRD Tahun 2014, maka KPU Kota Bengkulu membuka Pendaftaran Pemantau se-Kota Bengkulu meliputi Lembaga Swadaya Masyarakat, Badan Hukum Dalam Negeri, Pemantau Pemilu dari Perwakilan Negara Lain dan perseorangan dalam negeri yang tidak berkedudukan sebagai pengurus dan/atau anggota partai politik, serta perseorangan dari luar negeri. dengan persyaratan sebagai berikut :</p>\n<p>1. Persyaratan Umum :</p>\n<p>a) Bersifat Independent</p>\n<p>b) Mempunyai Sumber Dana Yang Jelas</p>\n<p>c) Terdaftar dan Memperoleh Akreditasi dari KPU, KPU Provinsi dan KPU Kab/Kota sesuai dengan cakupan wilayah pemantaunya.</p>\n<p>d) Bersifat Sukarela (Menanggung sendiri biaya pemantauan)</p>\n<p>2. Pengambilan blanko tanggal 14 Agustus 2012 s/d 02 April 2014 (pada hari kerja) di Sekretariat KPU Kota Bengkulu, Jln. WR. Supratman No.08 Kel. Bentiring Permai Kota Bengkulu pada pukul 08.00 WIB s/d 14.00 WIB.</p>\n<p>3. Blanko pendaftaran diserahkan paling lambat tanggal 02 April 2014 pukul 14.00 WIB di Sekretariat KPU Kota Bengkulu, Jln. WR. Supratman No.08 Kel. Bentiring Permai Kota Bengkulu dengan menyerahkan kelengkapan administrasi meliputi :</p>\n<p>a. Profil organisasi/lembaga;</p>\n<p>b. Nama dan jumlah anggota pemantau;</p>\n<p>c. Alokasi anggota pemantau yang akan ditempatkan ke daerah;</p>\n<p>d. Rencana dan jadwal kegiatan pemantauan serta daerah yang akan dipantau;</p>\n<p>e. Nama, alamat dan pekerjaan penanggung jawab pemantau yang dilampiri 2 (dua) buah pas foto diri terbaru 4&times;6 berwarna;</p>\n<p>f. Surat Pernyataan mengenai sumber dana yang ditandatangani oleh ketua lembaga Pemantau Pemilu;</p>\n<p>g. Surat pernyataan mengenai independensi lembaga pemantau yang ditandatangani oleh ketua lembaga Pemantau Pemilu;</p>\n<p>h. Surat pernyataan atau pengalaman dibidang pemantauan dari organisasi pemantau yang bersangkutan atau dari pemerintah negara lain tempat yang bersangkutan pernah melakukan pemantauan bagi pemantau pemilu luar negeri;</p>\n<p>i. Surat pernyataan atau pengalaman dibidang pemantauan dari pemantau perseorangan yang bersangkutan atau dari pemerintah negara lain tempat yang bersangkutan pernah melakukan pemantauan bagi pemantau pemilu perseorangan yang berasal dari luar negeri;</p>\n<p>j. Surat pernyataan mengenai independensi pemantau Pemilu perseorangan yang ditandatangani oleh pemantau Pemilu yang bersangkutan;</p>\n<p>k. Surat rekomendasi dari Menteri Luar Negeri Republik Indonesia bagi pemantau pemilu yang berasal dari perwakilan negara sahabat.</p>\n<p>4. Persyaratan dibuat dalam rangkap 3 (tiga), map plastik warna hijau.</p>\n<p>Demikian pengumuman ini, agar dapat menjadi perhatian.</p>', 'Feature_img_PERSYARATAN-PEMANTAU-PEMILU-ANGGOTA-DPR-DPD-DAN-DPRD-TAHUN-2014.png', 'publish', ''),
(46, '2014-04-05 04:04:00', 'DISTRIBUSI LOGISTIK KPU KABUPATEN MUKOMUKO', '<p style="text-align: justify;">Mukomuko, Distribusi logistik keperluan pemilu di kabupaten mukomuko tahun 2014 telah mulai didistribusikan mulai hari ini sabtu tanggal 5 april 2014. proses pendistribusian logistik ini mendapat pengawalan yang ketat baik dari pihak kepolisian maupun dari pihak panwas yang telah berada di kpu sejak pagi hari. adapun logistik yang dikirim hari ini adalah logistik untuk kecamatan di seluruh wilayah kabupaten mukomuko.&nbsp; Proses distribusi logistik dibuka langsung oleh BUPATI mukomuko yang disampaikan oleh sekretaris daerah kabupaten mukomuko, ditandai dengan pelepasan balon sebagai tanda telah dimulainya tahapan pendistribusian logistik pemilu tahun 2014. Sehubungan dengan hal tersebut, dana untuk seluruh tahapan pemilu juga telah disalurkan ke rekening masing-masing kecamatan. (Bpoh)</p>', NULL, 'publish', ''),
(47, '2014-04-08 12:04:01', 'REKAPITULASI HASIL PENGHITUNGAN SUARA', '<p style="text-align: center;"><strong>REKAPITULASI HASIL PENGHITUNGAN SUARA&nbsp;</strong></p>\r\n<p style="text-align: center;"><strong>KPU KABUPATEN MUKOMUKO</strong></p>\r\n<p style="text-align: center;"><strong><a href="http://pemilu2014.kpu.go.id/c1.php" target="_blank">KLIK DISINI</a>&nbsp;</strong></p>\r\n\r\n<iframe style="height:1000px; width:100%;" src="http://pemilu2014.kpu.go.id/c1.php" seamless></iframe>', NULL, 'publish', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;