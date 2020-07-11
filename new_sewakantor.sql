-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Apr 2020 pada 08.34
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_sewakantor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kantor_cabang`
--

CREATE TABLE `kantor_cabang` (
  `id` int(11) NOT NULL,
  `id_regional` int(11) DEFAULT NULL,
  `nama_kantor` varchar(100) NOT NULL,
  `alamat` text DEFAULT NULL,
  `harga_beli` bigint(15) DEFAULT NULL,
  `harga_sewa` bigint(15) DEFAULT NULL,
  `deposit` bigint(15) DEFAULT NULL,
  `perjanjian_sewa` varchar(20) DEFAULT NULL,
  `pbb_2016` bigint(11) DEFAULT NULL,
  `periode_awal` date DEFAULT NULL,
  `periode_akhir` date DEFAULT NULL,
  `biaya_notaris` int(11) DEFAULT NULL,
  `pajak_sewa_beli` int(11) DEFAULT NULL,
  `status_kepemilikan` int(2) DEFAULT NULL,
  `masa_sewa` varchar(20) DEFAULT NULL,
  `biaya_renovasi` bigint(15) DEFAULT NULL,
  `tam_daya_listrik` bigint(15) DEFAULT NULL,
  `pasang_telp` bigint(15) DEFAULT NULL,
  `jth_tempo_pbb` date DEFAULT NULL,
  `lain2` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `email_cabang` varchar(150) DEFAULT NULL,
  `nama_bm` varchar(255) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `status_pbb` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kantor_cabang`
--

INSERT INTO `kantor_cabang` (`id`, `id_regional`, `nama_kantor`, `alamat`, `harga_beli`, `harga_sewa`, `deposit`, `perjanjian_sewa`, `pbb_2016`, `periode_awal`, `periode_akhir`, `biaya_notaris`, `pajak_sewa_beli`, `status_kepemilikan`, `masa_sewa`, `biaya_renovasi`, `tam_daya_listrik`, `pasang_telp`, `jth_tempo_pbb`, `lain2`, `keterangan`, `email_cabang`, `nama_bm`, `status`, `status_pbb`) VALUES
(7, 19, 'Kantor Pusat', 'Jl. Pajajaran No.1, Kel. Babakan, Kec. Bogor Tengan, Kota Bogor', 44289117000, 0, 0, 'Sertifikat Ada, IMB ', 44434360, '0000-00-00', '0000-00-00', 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icang88@gmail.com', 'Hardi', 1, NULL),
(10, 18, 'Surabaya 2', 'Jl. Bung Tomo No. 10 Surabaya', 450000000, 0, 0, 'Lengkap', 500000, '2019-09-29', '2025-09-29', 200000, 100000, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icang88@gmail.com', NULL, 1, NULL),
(11, 3, 'Bogor', 'Jl. Bangbarung Raya No. 18 Rt. 005 Rw. 007 Kel. Bantarjati Kec. Bogor Utara Kota Bogor', 4800000000, 0, 0, 'Lengkap', 0, '0000-00-00', '0000-00-00', 0, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'systemhanif@gmail.com', 'Hanif', 1, NULL),
(12, 3, 'Pandu Raya', 'Ruko pandu raya kavling 10-11 rt 001 Rw 005 kel.tegal gundil kec. Bogor utara kota bogor', 4800000000, 0, 0, 'Lengkap', 0, '0000-00-00', '0000-00-00', 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icang88@gmail.com', NULL, 1, NULL),
(13, 3, 'Sindang Barang', 'Jl. Ibrahim Adjie No 394 ruko A sindang Barang', 2800000000, 0, 0, 'Lengkap', 0, '0000-00-00', '0000-00-00', 0, 0, 1, '5 tahun', NULL, NULL, NULL, NULL, NULL, NULL, 'icang88@gmail.com', NULL, 1, 1),
(14, 3, 'Cianjur', 'Jl.Raya Pangeran hidayatullah No.10 Rt.02/04 Kel. Sawah Gede Kec. Cianjur Kab.Cianjur', 0, 537500000, 0, 'Ada', 0, '2015-10-12', '2020-10-12', 0, 59722220, 2, '5 tahun', NULL, NULL, NULL, NULL, NULL, NULL, 'zfathurrahman59@gmail.com', 'hanifabirama', 2, NULL),
(15, 6, 'Cempaka Putih', 'Jl. Cempaka Putih Tengah II Blok B Jakarta Pusat', 0, 925000000, 10000000, 'Ada', 0, '2015-01-01', '2020-01-01', 2000000, 0, 2, '5 tahun', NULL, NULL, NULL, NULL, NULL, NULL, 'zfathurrahman59@gmail.com', 'icang88', 2, NULL),
(16, 6, 'Kalimalang & Pinjaman Jakarta 1', 'Jl. KH. Noer Alie Ruko Tunas Plaza No. 8-H Kalimalang Bekasi 17145', 1875000000, 0, 0, 'Lengkap', 0, '0000-00-00', '0000-00-00', 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icang88@gmail.com', NULL, 1, NULL),
(17, 9, 'Cibubur', 'Jl. Raya Lapangan Tembak No. 9A-B Rt. 007/004 Cibubur Jakarta Timur', 0, 650000000, 5000000, 'Ada', 0, '2015-10-20', '2020-10-20', 0, 0, 2, '5 tahun', NULL, NULL, NULL, NULL, NULL, NULL, 'icang88@gmail.com', NULL, 2, NULL),
(18, 9, 'Pinjaman Jakarta 2', 'Jl Raya Kalimulya kampung serab Rt 03 Rw 04 Kel Tirtajaya Kec Sukmajaya Depok (sebelah mie ayam choy', 2300000000, 0, 0, 'Lengkap', 0, '0000-00-00', '0000-00-00', 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icang88@gmail.com', NULL, 1, NULL),
(19, 10, 'Pamulang', 'Jl. Parakan Raya No. 14 RT 003 RW 001, Kel. Pondok Benda, Kecamatan Pamulang Kota Tangerang Selatan ', 2625000000, 0, 0, 'On Progress', 0, '0000-00-00', '0000-00-00', 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icang88@gmail.com', NULL, 1, NULL),
(20, 10, 'Ahmad Yani Serang', 'Jl. Raya Ahmad Yani No. 134 Kel. Sumur Pecung,  Kec. Serang Kota Serang', 0, 675000000, 10000000, 'Ada', 0, '2015-03-31', '2020-03-31', 0, 0, 2, '5 tahun', NULL, NULL, NULL, NULL, NULL, NULL, 'icang88@gmail.com', NULL, 2, NULL),
(21, 11, 'Pasir Kaliki', 'JL. Pasir kaliki No161 kelurahan pamoyanan kecamatan cicendo kota bandung', 0, 1350000000, 0, 'Ada', 0, '2019-05-15', '2024-05-14', 0, 0, 2, '5 tahun', NULL, NULL, NULL, NULL, NULL, NULL, 'icang88@gmail.com', NULL, 1, NULL),
(25, 3, 'cibinong', 'Jl. Raya Bogor Jakarta C6/38 RT. 006 Rw. 09 Kel. Pakansari Kec. Cibinong Kabupaten Bogor', 2300000000, 0, 0, 'lengkap', 435630, '0000-00-00', '0000-00-00', 17300000, 0, 1, '', 126200000, 0, 0, '2018-08-31', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(26, 3, 'martadinata sukabumi', 'Jl. RE Martadinata RT 004/06 Kel.Cikole Kec.Cikole Kota Sukabumi', 5075000000, 0, 0, 'lengkap', 931000, '0000-00-00', '0000-00-00', 0, 0, 1, '', 255450000, 0, 0, '2019-09-30', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(27, 3, 'tajur', 'Ruko Jl. Raya Tajur No. 127 Bogor', 5900000000, 0, 0, 'lengkap', 1875390, '0000-00-00', '0000-00-00', 52438425, 0, 1, '', 334800000, 23800000, 0, '0000-00-00', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(28, 3, 'KPP Tapos', 'Ruko Mutiara Residen No 4 Jl. Veteran  kel banjar wangi kec ciawi Kab. Bogor ', 1400000000, 0, 0, 'lengkap', 0, '0000-00-00', '0000-00-00', 22000000, 0, 1, '', 150000000, 9900000, 2000000, '0000-00-00', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(29, 6, 'Pinjaman Jakarta I', 'Jl. KH. Noer Alie Ruko Tunas Plaza No. 8-H Kalimalang Bekasi 17145', 1875000000, 0, 0, 'lengkap', 0, '0000-00-00', '0000-00-00', 0, 0, 1, '', 0, 0, 0, '0000-00-00', '', 'satu ruko dengan kalimalang', 'icang88@gmail.com', NULL, 1, NULL),
(30, 6, 'Betos', 'Bekasi Twon Square Jl. Cutmutia Raya Betos Blok J  No 8 Bekasi', 2260000000, 0, 0, 'sertifikat ada, IMB ', 496062, '0000-00-00', '0000-00-00', 0, 0, 1, '', 0, 0, 0, '2019-09-09', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(31, 6, 'kelapa gading', 'Jl. Boulevard Artha Gading, Ruko Kirana Blok A7D no. 9 (sebrang Mall Artha Gading)', 0, 735000000, 0, 'ada', 7458654, '2016-03-24', '2021-03-24', 1500000, 0, 2, '5 tahun', 150000000, 0, 0, '2018-08-31', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(32, 6, 'Tanjung Priok', 'Ruko Enggano Megah, No/ 11 T Jalan Raya Enggano Tanjung Priok, Jakarta Utara', 0, 600000000, 0, 'perjanjian sewa ada', 1741525, '2017-03-06', '2022-03-05', 750000, 0, 2, '5 tahun', 175000000, 0, 0, '0000-00-00', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(33, 6, 'Tanah Abang', 'Jl. Cideng Barat No. 12B, Kelurahan Duri Kec. Gambir, Kota Jakarta Pusat', 0, 1500000001, 40000000, 'perjanjian sewa ada', 8036480, '2018-04-23', '2023-04-22', 0, 97222222, 2, '5 tahun', 216000000, 0, 0, '2018-09-14', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(34, 6, 'Mangga Dua', 'Ruko Bahan Bangunan Blok F1 - 12 Jl. Mangga Dua Dalam, RT.1/RW.12, Mangga Dua Sel., Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10730', 0, 875000000, 20000000, 'perjanjian sewa ada', 0, '2018-04-02', '2023-04-01', 0, 0, 2, '5 tahun', 243000000, 0, 0, '0000-00-00', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(35, 9, 'pangkalan jati', 'Jl. Pahlawan Revolusi No. 10 HG 1 Pangkalan Jati Kel. Pondok Bambu Kec. Duren Sawit Kota Jakarta Timur 13430', 3800000000, 0, 0, 'lengkap', 1371385, '0000-00-00', '0000-00-00', 19000000, 0, 1, '', 297000000, 3500000, 0, '2019-09-16', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(36, 9, 'Depok', 'Jl. Margonda Raya No. 48B Pancoran Mas, Depok (seberang bank BJB depok samping pool bus Sinar jaya)', 2700000000, 0, 0, 'lengkap', 6781250, '0000-00-00', '0000-00-00', 0, 0, 1, '', 585700000, 7583800, 0, '2019-08-31', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(37, 9, 'Cilandak', 'Jl.Raya Cilandak KKO no 01 Rt/Rw 004/005 Kel. Ragunan Kec. Pasar Minggu Kota Administrasi Jakarta Selatan', 0, 900000000, 0, 'perjanjian sewa ada', 0, '2019-06-01', '2021-06-01', 1500000, 0, 2, '5 tahun', 195680000, 7168500, 327500, '0000-00-00', '', 'PBB di bayarkan oleh pemilik gedung', 'icang88@gmail.com', NULL, 1, NULL),
(38, 9, 'ITC Fatmawati', 'JL.Rs.Fatmawati No. 35D  Kel. Cilandak Barat Kec. Cilandak (Samping OCDC NISP) Jakarta Selatan 12150', 0, 1050000000, 0, 'perjanjian sewa ada', 0, '2018-01-01', '2023-01-01', 2000000, 116666666, 2, '5 tahun', 250000000, 0, 0, '0000-00-00', '', 'PBB di bayarkan oleh pemilik gedung', 'icang88@gmail.com', NULL, 1, NULL),
(39, 9, 'Bendungan Hilir', 'Jl. Bendungan Hilir Raya No. 14D Jakarta Pusat', 0, 1500000000, 25000000, 'perjanjian sewa ada', 0, '2017-07-15', '2022-07-14', 0, 0, 2, '5 tahun', 185000000, 0, 0, '0000-00-00', '', 'PBB di bayarkan oleh pemilik gedung', 'icang88@gmail.com', NULL, 1, NULL),
(40, 10, 'Pinjaman Jakarta III', 'Jl. Pahlawan No8 kel Rempoa kec ciputat kabupaten tangerang', 0, 400000000, 0, 'perjanjian sewa ada', 0, '2019-05-02', '2024-05-01', 0, 44444444, 2, '5 tahun', 185000000, 8382500, 0, '0000-00-00', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(41, 10, 'Bintaro', 'Jl. Rumah Sakit Cacat Veteran No. 8A Bintaro - Jakarta Selatan', 4870000000, 0, 0, 'lengkap', 0, '0000-00-00', '0000-00-00', 0, 0, 1, '', 280000000, 0, 0, '0000-00-00', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(42, 10, 'Ciledug', 'Jl.Hoscokrominoto NO.1 S Ciledug Raya', 0, 675000000, 15000000, 'perjanjian sewa ada', 0, '2015-03-01', '2020-03-01', 0, 0, 2, '5 tahun', 3500000, 0, 0, '0000-00-00', '', '', 'icang88@gmail.com', NULL, 2, NULL),
(44, 10, 'BSD', 'Ruko Golden Boulevard Blok D No. 5 Jl..Pahlawan Seribu.Kel.Lengkong Wetan kec.Serpong Kota Tanggerang Selatan 15322', 0, 700000000, 14000000, 'perjanjian sewa ada', 0, '2018-04-01', '2023-03-31', 0, 0, 2, '', 0, 0, 0, '0000-00-00', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(45, 10, 'Kebon Jeruk', 'JL.pesanggrahan raya no.71 RT.11 RW.3 meruya utara kembangan jakarta barat', 0, 875000000, 0, 'perjanjian sewa ada', 0, '2015-04-01', '2020-04-01', 0, 0, 2, '5 tahun', 9245000, 0, 0, '0000-00-00', '', '', 'icang88@gmail.com', NULL, 2, NULL),
(46, 11, 'Kopo Bandung', 'Jl. Terusan Pasir Koja No. 52  RT. 001 RW. 005 Kel. Cibadak Kec. Astana Kota Bandung', 3700000000, 0, 0, 'lengkap', 0, '0000-00-00', '0000-00-00', 0, 0, 1, '', 205000000, 0, 0, '0000-00-00', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(47, 11, 'Rajawali', 'Jl. Rajawali Timur No 251 B  RT 008 RW 003 Kel.Dunguscariang kec.Andir Bandung', 2856159470, 0, 0, 'sertifikat ada, IMB ', 339683, '0000-00-00', '0000-00-00', 0, 0, 1, '', 95000000, 0, 0, '2019-09-30', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(48, 11, 'BKR Bandung', 'Jl. BKR No. 54 Bandung', 2850000000, 0, 0, 'sertifikat ada, IMB ', 0, '0000-00-00', '0000-00-00', 0, 0, 1, '', 43000000, 448000, 0, '0000-00-00', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(49, 11, 'Cimahi', 'JL. Jend H Amirmacmud no. 755 Rt/Rw 003/016 Kel. Padasuka Kec Cimahi Tengah Kota Cimahi ', 0, 750000000, 0, 'perjanjian sewa ada', 0, '2019-09-01', '2019-12-31', 0, 75000000, 2, '5 tahun', 336186400, 0, 0, '0000-00-00', '', '', 'icang88@gmail.com', 'icang88', 2, NULL),
(50, 11, 'Pinjaman batununggal ', 'JL. Batu nunggal indah raya No 370 Kel. Batununggal Kec. Bandung Kidul Kota Bandunng', 3350000000, 0, 0, 'belum ada', 0, '0000-00-00', '0000-00-00', 190000000, 0, 1, '', 0, 0, 0, '0000-00-00', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(51, 12, 'Ramdhan', 'Jl. Mochamad Ramdhan No. 41C Bandung 40254', 4750000000, 0, 0, 'lengkap', 0, '0000-00-00', '0000-00-00', 0, 0, 1, '', 250000000, 12750000, 0, '0000-00-00', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(52, 12, 'Gatot Subroto', 'Jl. Gatot Subroto No. 252-254 RT: 004/001 Kel. Binong, Kec.  Batununggal, Batu Nunggal Bandung 40257', 5135000000, 0, 0, 'sertifikat tidak ada', 5296180, '0000-00-00', '0000-00-00', 0, 0, 1, '', 292000000, 11981700, 450000, '2019-09-29', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(53, 12, 'Batununggal', 'Jl. Batu Nunggal Indah Raya No 255 RT. 03/05 Kel. Batununggal Kec. Bandung Kidul, Kota Bandung', 2815000000, 0, 0, 'sertifikat ada, AJB ', 2524450, '0000-00-00', '0000-00-00', 0, 0, 1, '', 215780000, 1635000, 0, '2018-08-30', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(54, 12, 'A.H. Nasution', 'Ruko Bandung Timur Plaza Blok B-1 Ujung Berung Jl. AH. Nasution No. 46A - Kota Bandung  40612', 1200000000, 0, 0, 'sertifikat ada, AJB ', 804048, '0000-00-00', '0000-00-00', 0, 0, 1, '', 128600000, 0, 0, '2019-09-30', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(55, 12, 'Sudirman Ciamis', 'Jl. Jend. Sudirman no 125 Lingkungan Kota Kulon RT 001/002 Ciamis 46211', 1357000000, 0, 0, 'Sertifikat ada, AJB ', 798921, '0000-00-00', '0000-00-00', 0, 0, 1, '', 525000000, 0, 0, '2019-09-30', '', '', 'icang88@gmail.com', NULL, 1, NULL),
(63, 3, 'Cabang Pohon', 'jln raya dekeng atas', 15000, 2500, 0, '', 0, '2015-02-28', '2020-02-28', 0, 0, 2, '5', 0, 0, 0, '0000-00-00', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `regional`
--

CREATE TABLE `regional` (
  `id` int(11) NOT NULL,
  `kode_reg` varchar(5) NOT NULL,
  `nama_regional` varchar(20) NOT NULL,
  `nama_rm` varchar(255) DEFAULT NULL,
  `email_rm` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `regional`
--

INSERT INTO `regional` (`id`, `kode_reg`, `nama_regional`, `nama_rm`, `email_rm`) VALUES
(3, '0', 'Bogor', 'systemhanif', 'systemhanif@gmail.com'),
(6, '0', 'Jakarta 1', 'abirama', 'abirama221@gmail.com'),
(9, '0', 'Jakarta 2', '', ''),
(10, '0', 'Jakarta 3', 'gembul', 'hanifabirama@gmail.com'),
(11, '0', 'Bandung 1', 'habi', 'hanifabirama@gmail.com'),
(12, '0', 'Bandung 2', NULL, NULL),
(13, '0', 'Cirebon', NULL, NULL),
(14, '0', 'Semarang', NULL, NULL),
(15, '0', 'Surakarta', NULL, NULL),
(16, '0', 'Yogyakarta', NULL, NULL),
(17, '0', 'Surabaya 1', NULL, NULL),
(18, '0', 'Surabaya 2', NULL, NULL),
(19, '', 'KPS', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dokumen`
--

CREATE TABLE `tbl_dokumen` (
  `id_dokumen` int(12) NOT NULL,
  `kode_cabang` varchar(12) NOT NULL,
  `nama_cabang` varchar(255) NOT NULL,
  `doc_1` varchar(255) NOT NULL,
  `doc_2` varchar(255) NOT NULL,
  `doc_3` varchar(255) NOT NULL,
  `doc_4` varchar(255) NOT NULL,
  `doc_5` varchar(255) NOT NULL,
  `doc_6` varchar(255) NOT NULL,
  `doc_7` varchar(255) NOT NULL,
  `doc_8` varchar(255) NOT NULL,
  `doc_9` varchar(30) NOT NULL,
  `doc_10` varchar(255) NOT NULL,
  `status` int(2) DEFAULT NULL,
  `kode_regional` varchar(50) DEFAULT NULL,
  `status_dokumen1` varchar(50) DEFAULT NULL,
  `status_dokumen2` varchar(50) DEFAULT NULL,
  `status_dokumen3` varchar(50) DEFAULT NULL,
  `status_dokumen4` varchar(50) DEFAULT NULL,
  `status_dokumen5` varchar(50) DEFAULT NULL,
  `status_dokumen6` varchar(50) DEFAULT NULL,
  `status_dokumen7` varchar(50) DEFAULT NULL,
  `status_dokumen8` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dokumen`
--

INSERT INTO `tbl_dokumen` (`id_dokumen`, `kode_cabang`, `nama_cabang`, `doc_1`, `doc_2`, `doc_3`, `doc_4`, `doc_5`, `doc_6`, `doc_7`, `doc_8`, `doc_9`, `doc_10`, `status`, `kode_regional`, `status_dokumen1`, `status_dokumen2`, `status_dokumen3`, `status_dokumen4`, `status_dokumen5`, `status_dokumen6`, `status_dokumen7`, `status_dokumen8`) VALUES
(56, '004', 'Cibinong', 'd1-1.pdf', 'a1.pdf', 'a2.pdf', 'a3.pdf', 'a4.pdf', 'a5.pdf', 'a6.pdf', 'relaxing-cat.jpg', '089655211515', 'gaada', 2, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, '009', 'Cipto', 'd1-2.pdf', 'a2.pdf', 'a3.pdf', 'a4.pdf', 'a5.pdf', 'a6.pdf', 'a7.pdf', 'anggrek.jpg', '083818906068', 'sebelahnya', 2, '13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, '042', 'Klaten', 'd1-3.pdf', 'a7.pdf', 'a6.pdf', 'a5.pdf', 'a1.pdf', 'a2.pdf', 'a3.pdf', '170468.jpg', '*123#', 'jl. raya dekeng atas rt 003/003 kel genteng kec bogor selatan', 1, '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, '031', 'Ciledug', 'a6.pdf', 'a3.pdf', 'd1-1.pdf', 'makalah fix.pdf', 'a2.pdf', 'rambu.pdf', 'a6.pdf', 'Picture1.png', '*888#', 'sebelahnya', 1, '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, '047', 'Cianjur', 'rambu.pdf', 'a7.pdf', 'a2.pdf', 'd1-3.pdf', 'd1-1.pdf', 'makalah fix.pdf', 'a1.pdf', 'Koala.jpg', '*123#', 'gatau dimana', 2, '3', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(5) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `level` int(2) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `aktif` int(2) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `kode_reg` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `nama`, `level`, `last_login`, `created_at`, `aktif`, `foto`, `email`, `kode_reg`) VALUES
(1, 'admin', '123', 'Administrator', 1, '2017-11-13 22:36:39', '2017-11-13 22:36:39', 1, NULL, 'admin@admin.com', '0'),
(6, 'bogor', '123', 'Regional_Bogor', 2, '2020-02-14 02:59:00', '2020-02-14 02:59:00', 1, '../files/foto/2020-02-14-02-59-00', '', '3'),
(7, 'jakarta1', '123', 'Regional_Jakarta_1', 2, '2020-02-20 03:43:19', '2020-02-20 03:43:19', 1, '../files/foto/2020-02-20-03-43-19_', '', '6'),
(8, 'jakatra2', '123', 'Regional_Jakarta_2', 2, '2020-02-20 03:43:49', '2020-02-20 03:43:49', 1, '../files/foto/2020-02-20-03-43-49_', '', '9'),
(9, 'jakarta3', '123', 'Regional Jakarta 3', 2, '2020-02-20 03:44:25', '2020-02-20 03:44:25', 1, '../files/foto/2020-02-20-03-44-25_', '', '10'),
(10, 'bandung1', '123', 'Regional Bandung 1', 2, '2020-02-20 03:44:51', '2020-02-20 03:44:51', 1, '../files/foto/2020-02-20-03-44-51_', '', '11'),
(11, 'bandung2', '123', 'Regional Bandung 2', 2, '2020-02-20 03:45:34', '2020-02-20 03:45:34', 1, '../files/foto/2020-02-20-03-45-34_', '', '12'),
(12, 'cirebon', '123', 'Regional Cirebon', 2, '2020-02-20 03:45:54', '2020-02-20 03:45:54', 1, '../files/foto/2020-02-20-03-45-54_', '', '13'),
(13, 'surabaya1', '123', 'Regional Surabaya 1', 2, '2020-02-20 03:46:45', '2020-02-20 03:46:45', 1, '../files/foto/2020-02-20-03-46-45_', '', '17'),
(14, 'surabaya2', '123', 'Regional Surabaya 2', 2, '2020-02-20 03:47:12', '2020-02-20 03:47:12', 1, '../files/foto/2020-02-20-03-47-12_', '', '18'),
(15, 'yogyakarta', '123', 'Regional Yogyakarta', 2, '2020-02-20 03:47:46', '2020-02-20 03:47:46', 1, '../files/foto/2020-02-20-03-47-46_', '', '16'),
(16, 'surakarta', '123', 'Regonal Surakarta Hadiningrat', 2, '2020-02-20 03:54:44', '2020-02-20 03:54:44', 1, '../files/foto/2020-02-20-03-54-44_', '', '15'),
(17, 'semarang', '123', 'Regional Semarang', 2, '2020-02-20 03:57:11', '2020-02-20 03:57:11', 1, '../files/foto/2020-02-20-03-57-11_', '', '14'),
(18, 'pinjaman', '123', 'Kantor Pinjaman', 2, '2020-02-20 03:57:40', '2020-02-20 03:57:40', 1, '../files/foto/2020-02-20-03-57-40_', '', '20'),
(20, '004', '004', 'Cibinong', 3, '2020-02-20 07:46:31', '2020-02-20 07:46:31', 1, '../files/foto/2020-02-20-07-46-31_', '', NULL),
(21, '005', '005', 'Pakuan Indah', 3, '2020-02-20 07:56:38', '2020-02-20 07:56:38', 1, '../files/foto/2020-02-20-07-56-38_', '', NULL),
(22, '006', '006', 'Sukabumi', 3, '2020-02-20 07:57:01', '2020-02-20 07:57:01', 1, '../files/foto/2020-02-20-07-57-01_', '', NULL),
(23, '047', '047', 'Cianjur', 3, '2020-02-20 07:57:57', '2020-02-20 07:57:57', 1, '../files/foto/2020-02-20-07-57-57_', '', NULL),
(24, '056', '056', 'Wangun', 3, '2020-02-20 07:58:18', '2020-02-20 07:58:18', 1, '../files/foto/2020-02-20-07-58-18_', '', NULL),
(25, '057', '057', 'Sindang Barang', 3, '2020-02-20 07:59:14', '2020-02-20 07:59:14', 1, '../files/foto/2020-02-20-07-59-14_', '', NULL),
(26, '002', '002', 'Kalimalang', 3, '2020-02-20 08:03:36', '2020-02-20 08:03:36', 1, '../files/foto/2020-02-20-08-03-36_', '', NULL),
(27, '032', '032', 'Cempaka Putih', 3, '2020-02-20 08:04:05', '2020-02-20 08:04:05', 1, '../files/foto/2020-02-20-08-04-05_', '', NULL),
(28, '034', '034', 'Betos Bekasi', 3, '2020-02-20 08:04:49', '2020-02-20 08:04:49', 1, '../files/foto/2020-02-20-08-04-49_', '', NULL),
(29, '078', '078', 'Kelapa Gading', 3, '2020-02-20 08:05:17', '2020-02-20 08:05:17', 1, '../files/foto/2020-02-20-08-05-17_', '', NULL),
(30, '087', '087', 'Tanjung Priok', 3, '2020-02-20 08:05:57', '2020-02-20 08:05:57', 1, '../files/foto/2020-02-20-08-05-57_', '', NULL),
(31, '093', '093', 'Tanah Abang', 3, '2020-02-20 08:06:21', '2020-02-20 08:06:21', 1, '../files/foto/2020-02-20-08-06-21_', '', NULL),
(32, '095', '095', 'Mangga Dua', 3, '2020-02-20 08:06:48', '2020-02-20 08:06:48', 1, '../files/foto/2020-02-20-08-06-48_', '', NULL),
(33, '003', '003', 'Depok', 3, '2020-02-20 08:07:51', '2020-02-20 08:07:51', 1, '../files/foto/2020-02-20-08-07-51_', '', NULL),
(34, '028', '028', 'Cibubur', 3, '2020-02-20 08:08:21', '2020-02-20 08:08:21', 1, '../files/foto/2020-02-20-08-08-21_', '', NULL),
(35, '029', '029', 'Cilandak', 3, '2020-02-20 08:08:54', '2020-02-20 08:08:54', 1, '../files/foto/2020-02-20-08-08-54_', '', NULL),
(36, '051', '051', 'Pangkalan Jati', 3, '2020-02-20 08:09:24', '2020-02-20 08:09:24', 1, '../files/foto/2020-02-20-08-09-24_', '', NULL),
(37, '052', '052', 'ITC Fatmawati', 3, '2020-02-20 08:09:54', '2020-02-20 08:09:54', 1, '../files/foto/2020-02-20-08-09-54_', '', NULL),
(38, '088', '088', 'Benhil', 3, '2020-02-20 08:10:19', '2020-02-20 08:10:19', 1, '../files/foto/2020-02-20-08-10-19_', '', NULL),
(39, '030', '030', 'Bintaro', 3, '2020-02-20 08:10:52', '2020-02-20 08:10:52', 1, '../files/foto/2020-02-20-08-10-52_', '', NULL),
(40, '031', '031', 'Cileudug', 3, '2020-02-20 08:11:23', '2020-02-20 08:11:23', 1, '../files/foto/2020-02-20-08-11-23_', '', NULL),
(41, '033', '033', 'Kebon_Jeruk', 3, '2020-02-20 08:11:47', '2020-02-20 08:11:47', 1, '../files/foto/2020-02-20-08-11-47_', '', '10'),
(42, '035', '035', 'Serang', 3, '2020-02-20 08:12:09', '2020-02-20 08:12:09', 1, '../files/foto/2020-02-20-08-12-09_', '', NULL),
(43, '049', '049', 'BSD', 3, '2020-02-20 08:14:50', '2020-02-20 08:14:50', 1, '../files/foto/2020-02-20-08-14-50_', '', NULL),
(44, '094', '094', 'Pamulang', 3, '2020-02-20 08:15:22', '2020-02-20 08:15:22', 1, '../files/foto/2020-02-20-08-15-22_', '', NULL),
(45, '011', '011', 'Rajawali', 3, '2020-02-20 08:15:56', '2020-02-20 08:15:56', 1, '../files/foto/2020-02-20-08-15-56_', '', NULL),
(46, '012', '012', 'Kopo', 3, '2020-02-20 08:16:24', '2020-02-20 08:16:24', 1, '../files/foto/2020-02-20-08-16-24_', '', NULL),
(47, '013', '013', 'BKR', 3, '2020-02-20 08:16:48', '2020-02-20 08:16:48', 1, '../files/foto/2020-02-20-08-16-48_', '', NULL),
(48, '017', '017', 'Pasir Kaliki', 3, '2020-02-20 08:19:34', '2020-02-20 08:19:34', 1, '../files/foto/2020-02-20-08-19-34_', '', NULL),
(49, '058', '058', 'Cimahi', 3, '2020-02-20 08:20:04', '2020-02-20 08:20:04', 1, '../files/foto/2020-02-20-08-20-04_', '', NULL),
(50, '007', '007', 'Ramdhan', 3, '2020-02-20 08:20:28', '2020-02-20 08:20:28', 1, '../files/foto/2020-02-20-08-20-28_', '', NULL),
(51, '010', '010', 'Tasikmalaya', 3, '2020-02-20 08:20:55', '2020-02-20 08:20:55', 1, '../files/foto/2020-02-20-08-20-55_', '', NULL),
(52, '014', '014', 'Gatot Subroto', 3, '2020-02-20 08:21:27', '2020-02-20 08:21:27', 1, '../files/foto/2020-02-20-08-21-27_', '', NULL),
(53, '015', '015', 'Batununggal', 3, '2020-02-20 08:21:59', '2020-02-20 08:21:59', 1, '../files/foto/2020-02-20-08-21-59_', '', NULL),
(54, '016', '016', 'A.H Nasution', 3, '2020-02-20 08:22:30', '2020-02-20 08:22:30', 1, '../files/foto/2020-02-20-08-22-30_', '', NULL),
(55, '017', '017', 'Ciamis', 3, '2020-02-20 08:22:53', '2020-02-20 08:22:53', 1, '../files/foto/2020-02-20-08-22-53_', '', NULL),
(56, '090', '090', 'Jendral Ahmad Yani', 3, '2020-02-20 08:23:23', '2020-02-20 08:23:23', 1, '../files/foto/2020-02-20-08-23-23_', '', NULL),
(57, '009', '009', 'Cipto', 3, '2020-02-20 08:28:31', '2020-02-20 08:28:31', 1, '../files/foto/2020-02-20-08-28-31_', '', NULL),
(58, '018', '018', 'Tuparev', 3, '2020-02-20 08:28:54', '2020-02-20 08:28:54', 1, '../files/foto/2020-02-20-08-28-54_', '', NULL),
(59, '019', '019', 'Kuningan', 3, '2020-02-20 08:34:02', '2020-02-20 08:34:02', 1, '../files/foto/2020-02-20-08-34-02_', '', NULL),
(60, '020', '020', 'Majalengka', 3, '2020-02-20 08:34:38', '2020-02-20 08:34:38', 1, '../files/foto/2020-02-20-08-34-38_', '', NULL),
(61, '021', '021', 'Indramayu', 3, '2020-02-20 08:35:02', '2020-02-20 08:35:02', 1, '../files/foto/2020-02-20-08-35-02_', '', NULL),
(62, '055', '055', 'Tegal', 3, '2020-02-20 08:35:25', '2020-02-20 08:35:25', 1, '../files/foto/2020-02-20-08-35-25_', '', NULL),
(63, '059', '059', 'Purwokerto', 3, '2020-02-20 08:35:58', '2020-02-20 08:35:58', 1, '../files/foto/2020-02-20-08-35-58_', '', NULL),
(64, '075', '075', 'Pemalang', 3, '2020-02-20 08:36:22', '2020-02-20 08:36:22', 1, '../files/foto/2020-02-20-08-36-22_', '', NULL),
(65, '024', '024', 'Kupang Jaya', 3, '2020-02-20 08:36:49', '2020-02-20 08:36:49', 1, '../files/foto/2020-02-20-08-36-49_', '', NULL),
(66, '026', '026', 'Ngagel', 3, '2020-02-20 08:37:11', '2020-02-20 08:37:11', 1, '../files/foto/2020-02-20-08-37-11_', '', NULL),
(67, '027', '027', 'Rungkut', 3, '2020-02-20 08:41:50', '2020-02-20 08:41:50', 1, '../files/foto/2020-02-20-08-41-50_', '', NULL),
(68, '050', '050', 'Citraland', 3, '2020-02-20 08:42:25', '2020-02-20 08:42:25', 1, '../files/foto/2020-02-20-08-42-25_', '', NULL),
(69, '062', '062', 'Kapas Krampung', 3, '2020-02-20 08:42:51', '2020-02-20 08:42:51', 1, '../files/foto/2020-02-20-08-42-51_', '', NULL),
(70, '076', '076', 'Gresik', 3, '2020-02-20 08:43:15', '2020-02-20 08:43:15', 1, '../files/foto/2020-02-20-08-43-15_', '', NULL),
(71, '077', '077', 'Mulyosari', 3, '2020-02-20 08:43:59', '2020-02-20 08:43:59', 1, '../files/foto/2020-02-20-08-43-59_', '', NULL),
(72, '023', '023', 'Wonokromo', 3, '2020-02-20 08:44:40', '2020-02-20 08:44:40', 1, '../files/foto/2020-02-20-08-44-40_', '', NULL),
(73, '046', '046', 'Kediri', 3, '2020-02-20 08:45:18', '2020-02-20 08:45:18', 1, '../files/foto/2020-02-20-08-45-18_', '', NULL),
(74, '048', '048', 'Mojokerto', 3, '2020-02-20 09:06:55', '2020-02-20 09:06:55', 1, '../files/foto/2020-02-20-09-06-55_', '', NULL),
(75, '072', '072', 'Jenggolo Sidoarjo', 3, '2020-02-20 09:08:09', '2020-02-20 09:08:09', 1, '../files/foto/2020-02-20-09-08-09_', '', NULL),
(76, '080', '080', 'Tulungagung', 3, '2020-02-20 09:08:39', '2020-02-20 09:08:39', 1, '../files/foto/2020-02-20-09-08-39_', '', NULL),
(77, '083', '083', 'Gateway', 3, '2020-02-20 09:09:03', '2020-02-20 09:09:03', 1, '../files/foto/2020-02-20-09-09-03_', '', NULL),
(78, '106', '106', 'Kediri II', 3, '2020-02-20 09:09:32', '2020-02-20 09:09:32', 1, '../files/foto/2020-02-20-09-09-32_', '', NULL),
(79, '115', '115', 'Bojonegoro', 3, '2020-02-20 10:39:56', '2020-02-20 10:39:56', 1, '../files/foto/2020-02-20-10-39-56_', '', NULL),
(80, '036', '036', 'Hayam Wuruk', 3, '2020-02-20 10:40:23', '2020-02-20 10:40:23', 1, '../files/foto/2020-02-20-10-40-23_', '', NULL),
(81, '040', '040', 'Pandega', 3, '2020-02-20 10:41:08', '2020-02-20 10:41:08', 1, '../files/foto/2020-02-20-10-41-08_', '', NULL),
(82, '041', '041', 'Sisingamangaraja', 3, '2020-02-20 10:41:36', '2020-02-20 10:41:36', 1, '../files/foto/2020-02-20-10-41-36_', '', NULL),
(83, '066', '066', 'Magelang', 3, '2020-02-20 10:41:56', '2020-02-20 10:41:56', 1, '../files/foto/2020-02-20-10-41-56_', '', NULL),
(84, '101', '101', 'Godean', 3, '2020-02-20 10:42:17', '2020-02-20 10:42:17', 1, '../files/foto/2020-02-20-10-42-17_', '', NULL),
(85, '039', '039', 'Manahan Solo', 3, '2020-02-20 10:54:53', '2020-02-20 10:54:53', 1, '../files/foto/2020-02-20-10-54-53_', '', NULL),
(86, '042', '042', 'Klaten', 3, '2020-02-20 10:55:17', '2020-02-20 10:55:17', 1, '../files/foto/2020-02-20-10-55-17_', '', NULL),
(87, '043', '043', 'Solo Baru', 3, '2020-02-20 11:19:35', '2020-02-20 11:19:35', 1, '../files/foto/2020-02-20-11-19-35_', '', NULL),
(88, '081', '081', 'Ir. Sutami Solo', 3, '2020-02-20 11:20:07', '2020-02-20 11:20:07', 1, '../files/foto/2020-02-20-11-20-07_', '', NULL),
(89, '112', '112', 'Boyolali', 3, '2020-02-20 11:20:31', '2020-02-20 11:20:31', 1, '../files/foto/2020-02-20-11-20-31_', '', NULL),
(90, '037', '037', 'Majapahit', 3, '2020-02-20 11:20:55', '2020-02-20 11:20:55', 1, '../files/foto/2020-02-20-11-20-55_', '', NULL),
(91, '044', '044', 'Ngaliyan', 3, '2020-02-20 11:21:41', '2020-02-20 11:21:41', 1, '../files/foto/2020-02-20-11-21-41_', '', NULL),
(92, '045', '045', 'Gombel', 3, '2020-02-20 11:22:04', '2020-02-20 11:22:04', 1, '../files/foto/2020-02-20-11-22-04_', '', NULL),
(93, '053', '053', 'Sudirman', 3, '2020-02-20 11:22:29', '2020-02-20 11:22:29', 1, '../files/foto/2020-02-20-11-22-29_', '', NULL),
(94, '067', '067', 'Ungaran', 3, '2020-02-20 11:22:53', '2020-02-20 11:22:53', 1, '../files/foto/2020-02-20-11-22-53_', '', NULL),
(95, '069', '069', 'Metro', 3, '2020-02-20 11:23:17', '2020-02-20 11:23:17', 1, '../files/foto/2020-02-20-11-23-17_', '', NULL),
(96, '085', '085', 'Kudus', 3, '2020-02-20 11:23:46', '2020-02-20 11:23:46', 1, '../files/foto/2020-02-20-11-23-46_', '', NULL),
(97, '060', '060', 'Pinjaman-Bandung I', 3, '2020-02-20 11:26:10', '2020-02-20 11:26:10', 1, '../files/foto/2020-02-20-11-26-10_', '', NULL),
(98, '061', '061', 'Pinjaman-Semarang', 3, '2020-02-20 11:31:00', '2020-02-20 11:31:00', 1, '../files/foto/2020-02-20-11-31-00_', '', NULL),
(99, '063', '063', 'Pinjaman-Cirebon I', 3, '2020-02-20 11:31:57', '2020-02-20 11:31:57', 1, '../files/foto/2020-02-20-11-31-57_', '', NULL),
(100, '064', '064', 'Pinjaman-Surabaya I', 3, '2020-02-20 11:32:20', '2020-02-20 11:32:20', 1, '../files/foto/2020-02-20-11-32-20_', '', NULL),
(101, '068', '068', 'Pinjaman-Bogor', 3, '2020-02-20 11:32:49', '2020-02-20 11:32:49', 1, '../files/foto/2020-02-20-11-32-49_', '', NULL),
(102, '070', '070', 'Pinjaman-Jakarta I (Kalimalang)', 3, '2020-02-20 11:33:20', '2020-02-20 11:33:20', 1, '../files/foto/2020-02-20-11-33-20_', '', NULL),
(103, '071', '071', 'Pinjaman-Jakarta II (ITC Fatmawati)', 3, '2020-02-20 11:34:36', '2020-02-20 11:34:36', 1, '../files/foto/2020-02-20-11-34-36_', '', NULL),
(104, '073', '073', 'Pinjaman-Yogyakarta', 3, '2020-02-20 11:35:00', '2020-02-20 11:35:00', 1, '../files/foto/2020-02-20-11-35-00_', '', NULL),
(105, '074', '074', 'Pinjaman-Tasikmalaya', 3, '2020-02-20 11:35:26', '2020-02-20 11:35:26', 1, '../files/foto/2020-02-20-11-35-26_', '', NULL),
(106, '079', '079', 'Pinjaman-Surabaya II', 3, '2020-02-20 11:36:00', '2020-02-20 11:36:00', 1, '../files/foto/2020-02-20-11-36-00_', '', NULL),
(107, '082', '082', 'Pinjaman-Bandung II', 2, '2020-02-20 11:36:27', '2020-02-20 11:36:27', 1, '../files/foto/2020-02-20-11-36-27_', '', NULL),
(108, '084', '084', 'Pinjaman-Malang', 3, '2020-02-20 11:36:51', '2020-02-20 11:36:51', 1, '../files/foto/2020-02-20-11-36-51_', '', NULL),
(109, '086', '086', 'Pinjaman-Cirebon II', 3, '2020-02-20 11:37:27', '2020-02-20 11:37:27', 1, '../files/foto/2020-02-20-11-37-27_', '', NULL),
(110, '089', '089', 'Pinjaman-Jakarta III', 3, '2020-02-20 11:37:59', '2020-02-20 11:37:59', 1, '../files/foto/2020-02-20-11-37-59_', '', NULL),
(111, '091', '091', 'Pinjaman-KPP Ciawi-Tasikmalaya', 3, '2020-02-20 11:38:35', '2020-02-20 11:38:35', 1, '../files/foto/2020-02-20-11-38-35_', '', NULL),
(112, '092', '092', 'Pinjaman-KPP Singaparna', 3, '2020-02-20 11:39:20', '2020-02-20 11:39:20', 1, '../files/foto/2020-02-20-11-39-20_', '', NULL),
(113, '096', '096', 'Pinjaman-KPP Tapos', 3, '2020-02-20 11:39:43', '2020-02-20 11:39:43', 1, '../files/foto/2020-02-20-11-39-43_', '', NULL),
(114, '097', '097', 'Pinjaman-Bandung III', 3, '2020-02-20 11:40:09', '2020-02-20 11:40:09', 1, '../files/foto/2020-02-20-11-40-09_', '', NULL),
(115, '098', '098', 'Pinjaman-KPP Soreang', 3, '2020-02-20 11:40:31', '2020-02-20 11:40:31', 1, '../files/foto/2020-02-20-11-40-31_', '', NULL),
(116, '099', '099', 'Pinjaman-KPP Kuningan', 3, '2020-02-20 11:40:56', '2020-02-20 11:40:56', 1, '../files/foto/2020-02-20-11-40-56_', '', NULL),
(117, '100', '100', 'Pinjaman-Kudus', 3, '2020-02-20 11:43:14', '2020-02-20 11:43:14', 1, '../files/foto/2020-02-20-11-43-14_', '', NULL),
(118, '103', '103', 'Pinjaman-Majalengka', 3, '2020-02-20 11:43:36', '2020-02-20 11:43:36', 1, '../files/foto/2020-02-20-11-43-36_', '', NULL),
(119, '104', '104', 'Pinjaman-Tegal', 3, '2020-02-20 11:43:59', '2020-02-20 11:43:59', 1, '../files/foto/2020-02-20-11-43-59_', '', NULL),
(120, '105', '105', 'Pinjaman-Kediri', 3, '2020-02-20 11:44:22', '2020-02-20 11:44:22', 1, '../files/foto/2020-02-20-11-44-22_', '', NULL),
(121, '107', '107', 'Pinjaman-KPP Banjar', 3, '2020-02-20 11:44:50', '2020-02-20 11:44:50', 1, '../files/foto/2020-02-20-11-44-50_', '', NULL),
(122, '108', '108', 'Pinjaman-KPP Manahan Solo', 3, '2020-02-20 11:45:28', '2020-02-20 11:45:28', 1, '../files/foto/2020-02-20-11-45-28_', '', NULL),
(123, '109', '109', 'Pinjaman-KPP Garut', 3, '2020-02-20 11:45:54', '2020-02-20 11:45:54', 1, '../files/foto/2020-02-20-11-45-54_', '', NULL),
(124, '110', '110', 'Pinjaman-KPP Salatiga', 3, '2020-02-20 11:46:15', '2020-02-20 11:46:15', 1, '../files/foto/2020-02-20-11-46-15_', '', NULL),
(125, '111', '111', 'Pinjaman-KPP Ciamis', 3, '2020-02-20 11:46:36', '2020-02-20 11:46:36', 1, '../files/foto/2020-02-20-11-46-36_', '', NULL),
(126, '113', '113', 'Pinjaman-KPP Purwokerto', 3, '2020-02-20 11:46:59', '2020-02-20 11:46:59', 1, '../files/foto/2020-02-20-11-46-59_', '', NULL),
(127, '114', '114', 'Pinjaman-KPP Tulung Agung', 3, '2020-02-20 11:48:55', '2020-02-20 11:48:55', 1, '../files/foto/2020-02-20-11-48-55_', '', NULL),
(128, '116', '116', 'Pinjaman-KPP Sukabumi', 3, '2020-02-20 11:49:31', '2020-02-20 11:49:31', 1, '../files/foto/2020-02-20-11-49-31_', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kantor_cabang`
--
ALTER TABLE `kantor_cabang`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id_regional` (`id_regional`) USING BTREE;

--
-- Indeks untuk tabel `regional`
--
ALTER TABLE `regional`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `idx_tbl_user` (`id`,`username`,`password`,`nama`,`level`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kantor_cabang`
--
ALTER TABLE `kantor_cabang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `regional`
--
ALTER TABLE `regional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  MODIFY `id_dokumen` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
