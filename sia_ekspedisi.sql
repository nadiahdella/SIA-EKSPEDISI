-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 09:47 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sia_ekspedisi`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `kode_akun` int(100) NOT NULL,
  `nama_akun` varchar(100) NOT NULL,
  `posisi` varchar(10) DEFAULT NULL,
  `laba_rugi` varchar(10) DEFAULT NULL,
  `pm` varchar(10) DEFAULT NULL,
  `grup` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`kode_akun`, `nama_akun`, `posisi`, `laba_rugi`, `pm`, `grup`) VALUES
(11, 'Kas', 'L', 'N', '0', 'debit'),
(12, 'Piutang', 'L', 'N', '0', 'debit'),
(13, 'Perlengkapan', 'L', 'N', '0', 'debit'),
(14, 'Peralatan', 'L', 'N', '0', 'debit'),
(15, 'Prive', NULL, 'N', '1', 'debit'),
(31, 'Modal', 'R', 'N', '1', 'kredit'),
(41, 'Pendapatan Jasa\r\n', NULL, 'T', '0', 'kredit'),
(51, 'Beban Listrik', NULL, 'B', '0', 'debit'),
(52, 'Beban Iklan\r\n', NULL, 'B', '0', 'debit'),
(53, 'Beban Serba-Serbi', NULL, 'B', '0', 'debit');

-- --------------------------------------------------------

--
-- Table structure for table `beban`
--

CREATE TABLE `beban` (
  `id_beban` int(100) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_akun` varchar(100) NOT NULL,
  `nama_beban` varchar(100) NOT NULL,
  `total` int(100) NOT NULL,
  `keterangan` text NOT NULL,
  `no_transaksi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beban`
--

INSERT INTO `beban` (`id_beban`, `tanggal`, `kode_akun`, `nama_beban`, `total`, `keterangan`, `no_transaksi`) VALUES
(3, '2020-05-02', '52', 'Beban Iklan', 600000, 'Pemasangan Iklan', '00004/JU/IV/2020'),
(5, '2020-05-06', '51', 'Beban Listrik', 170000, 'Beban Listrik', '00019/JU/IV/2020'),
(6, '2020-05-06', '53', 'Beban Serba-Serbi', 1020000, 'Beban Transportasi', '00020/JU/IV/2020'),
(7, '2020-06-09', '51', 'Beban Listrik', 150000, 'Beban Listrik', '00027/JU/IV/2020'),
(8, '2020-06-10', '53', 'Beban Serba-Serbi', 1150000, 'Beban Transportasi', '00028/JU/IV/2020'),
(9, '2020-07-09', '51', 'Beban Listrik', 165000, 'Beban Listrik', '00032/JU/IV/2020'),
(10, '2020-07-10', '53', 'Beban Serba-Serbi', 1100000, 'Beban Transportasi', '00033/JU/IV/2020');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_umum`
--

CREATE TABLE `jurnal_umum` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_jurnal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kode_akun` int(11) NOT NULL,
  `tipe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `debit` int(11) NOT NULL,
  `kredit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jurnal_umum`
--

INSERT INTO `jurnal_umum` (`id`, `id_jurnal`, `kode_akun`, `tipe`, `keterangan`, `tanggal`, `debit`, `kredit`) VALUES
(29, '00001/JU/IV/2020', 11, 'Setoran Modal', 'Modal Awal', '2020-05-01', 3500000, 0),
(30, '00001/JU/IV/2020', 31, 'Setoran Modal', 'Modal Awal', '2020-05-01', 0, 3500000),
(31, '00002/JU/IV/2020', 14, 'Peralatan', 'Pembelian Timbangan', '2020-05-01', 540000, 0),
(32, '00002/JU/IV/2020', 11, 'Peralatan', 'Pembelian Timbangan', '2020-05-01', 0, 540000),
(33, '00003/JU/IV/2020', 14, 'Peralatan', 'Pembelian Seragam', '2020-05-01', 155000, 0),
(34, '00003/JU/IV/2020', 11, 'Peralatan', 'Pembelian Seragam', '2020-05-01', 0, 155000),
(35, '00004/JU/IV/2020', 52, 'Beban Iklan', 'Pemasangan Iklan', '2020-05-02', 600000, 0),
(36, '00004/JU/IV/2020', 11, 'Beban Iklan', 'Pemasangan Iklan', '2020-05-02', 0, 600000),
(37, '00005/JU/IV/2020', 11, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-05-03', 50000, 0),
(38, '00005/JU/IV/2020', 41, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-05-03', 0, 50000),
(39, '00006/JU/IV/2020', 11, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-05-03', 22000, 0),
(40, '00006/JU/IV/2020', 41, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-05-03', 0, 22000),
(41, '00007/JU/IV/2020', 11, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Express', '2020-05-03', 70000, 0),
(42, '00007/JU/IV/2020', 41, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Express', '2020-05-03', 0, 70000),
(43, '00008/JU/IV/2020', 11, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Express', '2020-05-04', 110000, 0),
(44, '00008/JU/IV/2020', 41, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Express', '2020-05-04', 0, 110000),
(45, '00009/JU/IV/2020', 11, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Express', '2020-05-04', 200000, 0),
(46, '00009/JU/IV/2020', 41, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Express', '2020-05-04', 0, 200000),
(47, '00010/JU/IV/2020', 11, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-05-05', 250000, 0),
(48, '00010/JU/IV/2020', 41, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-05-05', 0, 250000),
(49, '00011/JU/IV/2020', 11, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-05-05', 50000, 0),
(50, '00011/JU/IV/2020', 41, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-05-05', 0, 50000),
(51, '00012/JU/IV/2020', 11, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Express', '2020-05-05', 300000, 0),
(52, '00012/JU/IV/2020', 41, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Express', '2020-05-05', 0, 300000),
(53, '00013/JU/IV/2020', 11, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-05-05', 58000, 0),
(54, '00013/JU/IV/2020', 41, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-05-05', 0, 58000),
(55, '00014/JU/IV/2020', 11, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-05-05', 30000, 0),
(56, '00014/JU/IV/2020', 41, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-05-05', 0, 30000),
(57, '00015/JU/IV/2020', 11, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Express', '2020-05-05', 200000, 0),
(58, '00015/JU/IV/2020', 41, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Express', '2020-05-05', 0, 200000),
(59, '00016/JU/IV/2020', 11, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Express', '2020-05-05', 200000, 0),
(60, '00016/JU/IV/2020', 41, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Express', '2020-05-05', 0, 200000),
(61, '00017/JU/IV/2020', 13, 'Perlengkapan', 'Pembelian Alat Tulis Kantor', '2020-05-06', 45000, 0),
(62, '00017/JU/IV/2020', 11, 'Perlengkapan', 'Pembelian Alat Tulis Kantor', '2020-05-06', 0, 45000),
(65, '00019/JU/IV/2020', 51, 'Beban Listrik', 'Beban Listrik', '2020-05-06', 170000, 0),
(66, '00019/JU/IV/2020', 11, 'Beban Listrik', 'Beban Listrik', '2020-05-06', 0, 170000),
(67, '00020/JU/IV/2020', 53, 'Beban Serba-Serbi', 'Beban Transportasi', '2020-05-06', 1020000, 0),
(68, '00020/JU/IV/2020', 11, 'Beban Serba-Serbi', 'Beban Transportasi', '2020-05-06', 0, 1020000),
(69, '00021/JU/IV/2020', 13, 'Perlengkapan', 'Pembelian Alat Tulis Kantor', '2020-05-07', 60000, 0),
(70, '00021/JU/IV/2020', 11, 'Perlengkapan', 'Pembelian Alat Tulis Kantor', '2020-05-07', 0, 60000),
(71, '00022/JU/IV/2020', 11, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-05-07', 350000, 0),
(72, '00022/JU/IV/2020', 41, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-05-07', 0, 350000),
(73, '00023/JU/IV/2020', 11, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-05-07', 400000, 0),
(74, '00023/JU/IV/2020', 41, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-05-07', 0, 400000),
(75, '00024/JU/IV/2020', 11, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Express', '2020-05-07', 587000, 0),
(76, '00024/JU/IV/2020', 41, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Express', '2020-05-07', 0, 587000),
(77, '00025/JU/IV/2020', 11, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Express', '2020-05-07', 500000, 0),
(78, '00025/JU/IV/2020', 41, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Express', '2020-05-07', 0, 500000),
(79, '00026/JU/IV/2020', 11, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-05-07', 50000, 0),
(80, '00026/JU/IV/2020', 41, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-05-07', 0, 50000),
(81, '00027/JU/IV/2020', 51, 'Beban Listrik', 'Beban Listrik', '2020-06-09', 150000, 0),
(82, '00027/JU/IV/2020', 11, 'Beban Listrik', 'Beban Listrik', '2020-06-09', 0, 150000),
(83, '00028/JU/IV/2020', 53, 'Beban Serba-Serbi', 'Beban Transportasi', '2020-06-10', 1150000, 0),
(84, '00028/JU/IV/2020', 11, 'Beban Serba-Serbi', 'Beban Transportasi', '2020-06-10', 0, 1150000),
(85, '00029/JU/IV/2020', 11, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-06-12', 800000, 0),
(86, '00029/JU/IV/2020', 41, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-06-12', 0, 800000),
(87, '00030/JU/IV/2020', 11, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-06-12', 500000, 0),
(88, '00030/JU/IV/2020', 41, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-06-12', 0, 500000),
(89, '00031/JU/IV/2020', 11, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-06-12', 590000, 0),
(90, '00031/JU/IV/2020', 41, 'Pendapatan Jasa Pengiriman', 'Jasa Pengiriman Reguler', '2020-06-12', 0, 590000),
(91, '00032/JU/IV/2020', 51, 'Beban Listrik', 'Beban Listrik', '2020-07-09', 165000, 0),
(92, '00032/JU/IV/2020', 11, 'Beban Listrik', 'Beban Listrik', '2020-07-09', 0, 165000),
(93, '00033/JU/IV/2020', 53, 'Beban Serba-Serbi', 'Beban Transportasi', '2020-07-10', 1100000, 0),
(94, '00033/JU/IV/2020', 11, 'Beban Serba-Serbi', 'Beban Transportasi', '2020-07-10', 0, 1100000);

-- --------------------------------------------------------

--
-- Table structure for table `modal`
--

CREATE TABLE `modal` (
  `id_modal` int(100) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_akun` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `total` int(100) NOT NULL,
  `no_transaksi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modal`
--

INSERT INTO `modal` (`id_modal`, `tanggal`, `kode_akun`, `keterangan`, `total`, `no_transaksi`) VALUES
(2, '2020-05-01', '31', 'Modal Awal', 3500000, '00001/JU/IV/2020');

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id_pemasukan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `nm_pengirim` varchar(50) NOT NULL,
  `telp_pengirim` varchar(20) NOT NULL,
  `nm_penerima` varchar(50) NOT NULL,
  `telp_penerima` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nm_brg` varchar(50) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`id_pemasukan`, `tanggal`, `nm_pengirim`, `telp_pengirim`, `nm_penerima`, `telp_penerima`, `alamat`, `nm_brg`, `total`) VALUES
('00005/JU/IV/2020', '2020-05-03', 'Agus Haryono', '087653533339', 'Suci Hartati', '087662517000', 'Bali', 'Kue Kering', 50000),
('00006/JU/IV/2020', '2020-05-03', 'Listyawati', '085323415789', 'Suripto', '083452618777', 'Bekasi', 'Pakaian', 22000),
('00007/JU/IV/2020', '2020-05-03', 'Didi Dino', '088524526281', 'Ayu Putri', '089989764235', 'Semarang', 'Powerbank', 70000),
('00008/JU/IV/2020', '2020-05-04', 'Rike', '087653111999', 'Ida Kusuma', '083212544231', 'Jember', 'Skincare', 110000),
('00009/JU/IV/2020', '2020-05-04', 'Sahda Faith', '088954121333', 'Ubaidillah', '085754321111', 'Solo', 'Handphone', 200000),
('00010/JU/IV/2020', '2020-05-05', 'Diana', '088865321121', 'Udin Saparudin', '085432120009', 'Medan', 'Helm', 250000),
('00011/JU/IV/2020', '2020-05-05', 'Ferdian', '089987543211', 'Rizky Febian', '082123128890', 'Jakarta', 'Jaket', 50000),
('00012/JU/IV/2020', '2020-05-05', 'Mawar Melati', '087765444321', 'Yuni ', '08567890000', 'Batam', 'Laptop', 300000),
('00013/JU/IV/2020', '2020-05-05', 'Tegar', '087654333222', 'Putra Dwi', '088654321111', 'Padang', 'Beras', 58000),
('00014/JU/IV/2020', '2020-05-05', 'Della', '087654222134', 'Diah Rahmi', '089666547999', 'Surabaya', 'Keyboard', 30000),
('00015/JU/IV/2020', '2020-05-05', 'Ferra', '083222888777', 'Elviera', '087654333777', 'Lamongan', 'Buku', 200000),
('00016/JU/IV/2020', '2020-05-05', 'Elviera', '087644499000', 'Ferra', '085655551234', 'Sidoarjo', 'Sepatu', 200000),
('00022/JU/IV/2020', '2020-05-07', 'Fathur Putra', '087654333222', 'Budi Rizal', '088987651234', 'Papua', 'Parfum', 350000),
('00023/JU/IV/2020', '2020-05-07', 'I Gusti', '087654444567', 'Made Bli', '08211234567', 'Madura', 'Rok', 400000),
('00024/JU/IV/2020', '2020-05-07', 'Dian', '087212666545', 'Ayu', '081234568888', 'Lampung', 'Meja Rias', 587000),
('00025/JU/IV/2020', '2020-05-07', 'Reni', '087654990000', 'Kusnaedi', '089765213555', 'Sragen', 'Kasur', 500000),
('00026/JU/IV/2020', '2020-05-07', 'Anggun Nia', '087654123888', 'Nia Anggun', '081234567890', 'Gresik', 'Pakaian', 50000),
('00029/JU/IV/2020', '2020-06-12', 'Kafia', '087655555666', 'Diana', '082333333333', 'Tangerang', 'Keramik', 800000),
('00030/JU/IV/2020', '2020-06-12', 'Bima Nusantara', '082123448890', 'Feby Juna', '087654666766', 'Palembang', 'Kayu', 500000),
('00031/JU/IV/2020', '2020-06-12', 'Shintia', '087654333334', 'Shinta', '088986441234', 'Papua', 'Mesin', 590000);

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nm_pengeluaran` varchar(100) NOT NULL,
  `total` int(10) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `tanggal`, `nm_pengeluaran`, `total`, `keterangan`) VALUES
(3, '2020-05-01', 'Peralatan', 540000, 'Pembelian Timbangan'),
(4, '2020-05-01', 'Peralatan', 155000, 'Pembelian Seragam'),
(5, '2020-05-06', 'Perlengkapan', 45000, 'Pembelian Alat Tulis Kantor'),
(6, '2020-05-07', 'Perlengkapan', 60000, 'Pembelian Alat Tulis Kantor');

-- --------------------------------------------------------

--
-- Table structure for table `prive`
--

CREATE TABLE `prive` (
  `id_prive` int(100) NOT NULL,
  `kode_akun` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `total` int(100) NOT NULL,
  `no_transaksi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `usernames` varchar(50) NOT NULL,
  `passwords` varchar(50) NOT NULL,
  `level` int(5) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `usernames`, `passwords`, `level`, `foto`) VALUES
(9, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, ''),
(10, 'owner', 'owner', '72122ce96bfec66e2396d2e25225d70a', 3, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`kode_akun`);

--
-- Indexes for table `beban`
--
ALTER TABLE `beban`
  ADD PRIMARY KEY (`id_beban`);

--
-- Indexes for table `jurnal_umum`
--
ALTER TABLE `jurnal_umum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jurnal_umums_id_akun_foreign` (`kode_akun`);

--
-- Indexes for table `modal`
--
ALTER TABLE `modal`
  ADD PRIMARY KEY (`id_modal`);

--
-- Indexes for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id_pemasukan`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `prive`
--
ALTER TABLE `prive`
  ADD PRIMARY KEY (`id_prive`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beban`
--
ALTER TABLE `beban`
  MODIFY `id_beban` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jurnal_umum`
--
ALTER TABLE `jurnal_umum`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `modal`
--
ALTER TABLE `modal`
  MODIFY `id_modal` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `prive`
--
ALTER TABLE `prive`
  MODIFY `id_prive` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
