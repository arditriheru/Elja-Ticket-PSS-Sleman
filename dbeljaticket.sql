-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 09, 2017 at 07:18 
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbeljaticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(5) NOT NULL,
  `password` varchar(5) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE IF NOT EXISTS `bayar` (
  `kode_bayar` varchar(20) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jml_bayar` int(6) NOT NULL,
  `kode_pesan` int(16) NOT NULL,
  `jadwal` varchar(50) NOT NULL,
  PRIMARY KEY (`kode_bayar`),
  KEY `kode_pesan` (`kode_pesan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bayar`
--

INSERT INTO `bayar` (`kode_bayar`, `tgl_bayar`, `jml_bayar`, `kode_pesan`, `jadwal`) VALUES
('03012017105023', '2017-01-03', 50000, 141220286, 'PSS Sleman vs Persija Jakarta'),
('29122016012329', '2016-12-29', 60000, 141220280, 'PSS Sleman vs Persija Jakarta'),
('03012017024509', '2017-01-03', 40000, 141220292, ' PSS Sleman vs Persija Jakarta '),
('29122016122208', '2016-12-29', 40000, 141220276, 'PSS Sleman vs Persija Jakarta'),
('29122016010702', '2016-12-29', 50000, 141220277, 'PSS Sleman vs Persija Jakarta'),
('29122016010822', '2016-12-29', 150000, 141220278, 'PSS Sleman vs Persija Jakarta'),
('29122016011010', '2016-12-29', 40000, 141220279, 'PSS Sleman vs Persija Jakarta'),
('03012017123938', '2017-01-03', 150000, 141220275, 'PSS Sleman vs Persija Jakarta'),
('03012017124010', '2017-01-03', 30000, 141220274, 'PSS Sleman vs Persija Jakarta'),
('03012017124110', '2017-01-03', 100000, 141220273, 'PSS Sleman vs Persija Jakarta'),
('03012017124148', '2017-01-03', 100000, 141220265, 'PSS Sleman vs Persija Jakarta'),
('03012017124238', '2017-01-03', 30000, 141220261, 'PSS Sleman vs Persija Jakarta'),
('03012017124253', '2017-01-03', 40000, 141220251, 'PSS Sleman vs Persija Jakarta'),
('03012017124400', '2017-01-03', 30000, 141220249, 'PSS Sleman vs Persija Jakarta'),
('03012017124531', '2017-01-03', 60000, 141220245, 'PSS Sleman vs Persija Jakarta'),
('03012017021921', '2017-01-03', 20000, 141220290, 'PSS Sleman vs Persija Jakarta'),
('03012017023907', '2017-01-03', 50000, 141220291, ' PSS Sleman vs Persebaya Surabaya '),
('04012017120645', '2017-01-04', 40000, 141220295, 'PSS Sleman vs Persebaya Surabaya'),
('04012017045312', '2017-01-04', 50000, 141220297, 'PSS Sleman vs Persebaya Surabaya'),
('04012017054011', '2017-01-04', 50000, 141220298, 'PSS Sleman vs Persebaya Surabaya'),
('04012017062245', '2017-01-04', 20000, 141220299, 'PSS Sleman vs Persebaya Surabaya'),
('04012017065554', '2017-01-04', 30000, 141220300, 'PSS Sleman vs Persebaya Surabaya'),
('04012017083836', '2017-01-04', 50000, 141220302, 'PSS Sleman vs Persebaya Surabaya'),
('05012017104045', '2017-01-05', 50000, 141220303, 'PSS Sleman vs Persija Jakarta'),
('05012017021138', '2017-01-05', 40000, 141220336, 'PSS Sleman vs Persija Jakarta'),
('05012017023443', '2017-01-05', 90000, 141220337, 'PSS Sleman vs Persija Jakarta'),
('16012017084438', '2017-01-16', 150000, 141220341, 'PSS Sleman vs Persita Tangerang'),
('10012017065615', '2017-01-10', 20000, 141220340, 'PSS Sleman vs Persita Tangerang'),
('16012017092818', '2017-01-16', 40000, 141220342, 'PSS Sleman vs Persita Tangerang'),
('24012017083652', '2017-01-24', 50000, 141220343, 'PSS Sleman vs Persita Tangerang'),
('24012017103335', '2017-01-24', 50000, 141220345, 'PSS Sleman vs Persita Tangerang'),
('24012017104019', '2017-01-24', 50000, 141220346, 'PSS Sleman vs Persita Tangerang'),
('30012017125014', '2017-01-30', 20000, 141220347, 'PSS Sleman vs Persita Tangerang'),
('30012017080135', '2017-01-30', 60000, 141220348, 'PSS Sleman vs Persita Tangerang'),
('31012017063504', '2017-01-31', 50000, 141220349, 'PSS Sleman vs PSIS Semarang'),
('31012017084123', '2017-01-31', 50000, 141220350, 'PSS Sleman vs PSIS Semarang'),
('31012017090956', '2017-01-31', 50000, 141220351, 'PSS Sleman vs Persija Jakarta'),
('31012017091305', '2017-01-31', 25000, 141220352, 'PSS Sleman vs Persija Jakarta'),
('01022017013828', '2017-02-01', 100000, 141220354, 'PSS Sleman vs Persija Jakarta'),
('01022017041240', '2017-02-01', 50000, 141220355, 'PSS Sleman vs Persija Jakarta'),
('01022017045918', '2017-02-01', 60000, 141220356, 'PSS Sleman vs Persija Jakarta'),
('01022017063846', '2017-02-01', 0, 0, 'PSS Sleman vs Persija Jakarta'),
('01022017063859', '2017-02-01', 0, 0, 'PSS Sleman vs Persija Jakarta'),
('01022017064033', '2017-02-01', 0, 0, 'PSS Sleman vs Persija Jakarta'),
('01022017064052', '2017-02-01', 0, 0, 'PSS Sleman vs Persija Jakarta'),
('06022017032704', '2017-02-06', 40000, 141220358, 'PSS Sleman vs PSIS Semarang'),
('07022017063859', '2017-02-07', 60000, 141220360, 'PSS Sleman vs PSIS Semarang'),
('07022017070214', '2017-02-07', 60000, 141220361, 'PSS Sleman vs PSIS Semarang'),
('09022017022234', '2017-02-09', 50000, 141220362, 'PSS Sleman vs PSIS Semarang');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `kode_jadwal` int(1) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(100) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`kode_jadwal`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`kode_jadwal`, `gambar`, `keterangan`, `tanggal`, `status`) VALUES
(48, 'persebaya.jpg', 'PSS Sleman vs Persebaya Surabaya', '2017-03-18', 'Aktif'),
(49, 'persija.jpg', 'PSS Sleman vs Persija Jakarta', '2017-03-04', 'Tidak Aktif'),
(50, 'persita.jpg', 'PSS Sleman vs Persita Tangerang', '2017-03-11', 'Tidak Aktif'),
(52, 'persib.jpg', 'PSS Sleman vs Persib Bandung', '2017-04-01', 'Tidak Aktif'),
(53, 'persipura.jpg', 'PSS Sleman vs Persipura Jayapura', '2017-03-25', 'Tidak Aktif'),
(55, 'psis.jpg', 'PSS Sleman vs PSIS Semarang', '2017-04-08', 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE IF NOT EXISTS `konfirmasi` (
  `kode_konfirmasi` int(5) NOT NULL AUTO_INCREMENT,
  `pemesanan` varchar(16) NOT NULL,
  `kode_bayar` varchar(20) NOT NULL,
  `jml_transfer` int(6) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl_konfirmasi` date NOT NULL,
  `jadwal` varchar(50) NOT NULL,
  PRIMARY KEY (`kode_konfirmasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`kode_konfirmasi`, `pemesanan`, `kode_bayar`, `jml_transfer`, `gambar`, `tgl_konfirmasi`, `jadwal`) VALUES
(38, '141220276', '29122016122208', 40000, 'bukti1.jpg', '2016-12-29', 'PSS Sleman vs Persija Jakarta'),
(39, '141220277', '29122016010702', 50000, 'bukti3.jpg', '2016-12-29', 'PSS Sleman vs Persija Jakarta'),
(40, '141220278', '29122016010822', 150000, 'bukti1.jpg', '2016-12-29', 'PSS Sleman vs Persija Jakarta'),
(41, '141220279', '29122016011010', 40000, 'bukti4.jpg', '2016-12-29', 'PSS Sleman vs Persija Jakarta'),
(42, '141220280', '29122016012329', 60000, 'bukti2.jpg', '2016-12-29', 'PSS Sleman vs Persija Jakarta'),
(43, '141220286', '03012017105023', 50000, 'bukti3.jpg', '2017-01-03', 'PSS Sleman vs Persija Jakarta'),
(44, '141220275', '03012017123938', 150000, 'bukti1.jpg', '2017-01-03', 'PSS Sleman vs Persija Jakarta'),
(45, '141220274', '03012017124010', 30000, 'bukti4.jpg', '2017-01-03', 'PSS Sleman vs Persija Jakarta'),
(46, '141220273', '03012017124110', 100000, 'bukti5.jpg', '2017-01-03', 'PSS Sleman vs Persija Jakarta'),
(47, '141220265', '03012017124148', 100000, 'bukti3.jpg', '2017-01-03', 'PSS Sleman vs Persija Jakarta'),
(48, '141220261', '03012017124238', 30000, 'bukti4.jpg', '2017-01-03', 'PSS Sleman vs Persija Jakarta'),
(49, '141220251', '03012017124253', 40000, 'bukti2.jpg', '2017-01-03', 'PSS Sleman vs Persija Jakarta'),
(50, '141220249', '03012017124400', 30000, 'bukti2.jpg', '2017-01-03', 'PSS Sleman vs Persija Jakarta'),
(51, '141220245', '03012017124531', 60000, 'bukti2.jpg', '2017-01-03', 'PSS Sleman vs Persija Jakarta'),
(52, '141220290', '03012017021921', 20000, 'bukti3.jpg', '2017-01-03', 'PSS Sleman vs Persija Jakarta'),
(53, '141220291', '03012017023907', 50000, 'bukti1.jpg', '2017-01-03', ' PSS Sleman vs Persebaya Surabaya '),
(54, '141220292', '03012017024509', 40000, 'bukti4.jpg', '2017-01-03', ' PSS Sleman vs Persija Jakarta '),
(55, '141220295', '04012017120645', 40000, 'bukti3.jpg', '2017-01-04', 'PSS Sleman vs Persebaya Surabaya'),
(56, '141220297', '04012017045312', 50000, 'bukti2.jpg', '2017-01-04', 'PSS Sleman vs Persebaya Surabaya'),
(57, '141220298', '04012017054011', 50000, 'bukti2.jpg', '2017-01-04', 'PSS Sleman vs Persebaya Surabaya'),
(58, '141220299', '04012017062245', 20000, 'bukti1.jpg', '2017-01-04', 'PSS Sleman vs Persebaya Surabaya'),
(59, '141220300', '04012017065554', 30000, 'bukti4.jpg', '2017-01-04', 'PSS Sleman vs Persebaya Surabaya'),
(60, '141220302', '04012017083836', 50000, 'bukti5.jpg', '2017-01-04', 'PSS Sleman vs Persebaya Surabaya'),
(61, '141220303', '05012017104045', 50000, 'bukti2.jpg', '2017-01-05', 'PSS Sleman vs Persija Jakarta'),
(62, '141220336', '05012017021138', 40000, 'bukti3.jpg', '2017-01-05', 'PSS Sleman vs Persija Jakarta'),
(63, '141220337', '05012017023443', 90000, 'bukti3.jpg', '2017-01-05', 'PSS Sleman vs Persija Jakarta'),
(65, '141220340', '10012017065615', 20000, 'bukti2.jpg', '2017-01-10', 'PSS Sleman vs Persita Tangerang'),
(66, '141220341', '16012017084438', 150000, 'bukti4.jpg', '2017-01-16', 'PSS Sleman vs Persita Tangerang'),
(67, '141220342', '16012017092818', 40000, 'bukti1.jpg', '2017-01-16', 'PSS Sleman vs Persita Tangerang'),
(68, '141220343', '24012017083652', 50000, 'bukti2.jpg', '2017-01-24', 'PSS Sleman vs Persita Tangerang'),
(69, '141220345', '24012017103335', 50000, 'bukti5.jpg', '2017-01-24', 'PSS Sleman vs Persita Tangerang'),
(70, '141220346', '24012017104019', 50000, 'bukti3.jpg', '2017-01-24', 'PSS Sleman vs Persita Tangerang'),
(71, '141220347', '30012017125014', 20000, 'bukti2.jpg', '2017-01-30', 'PSS Sleman vs Persita Tangerang'),
(72, '141220348', '30012017080135', 60000, 'bukti3.jpg', '2017-01-30', 'PSS Sleman vs Persita Tangerang'),
(73, '141220349', '31012017063504', 50000, 'bukti4.jpg', '2017-01-31', 'PSS Sleman vs PSIS Semarang'),
(74, '141220350', '31012017084123', 50000, 'bukti2.jpg', '2017-01-31', 'PSS Sleman vs PSIS Semarang'),
(75, '141220351', '31012017090956', 50000, 'bukti2.jpg', '2017-01-31', 'PSS Sleman vs Persija Jakarta'),
(76, '141220352', '31012017091305', 25000, 'bukti2.jpg', '2017-01-31', 'PSS Sleman vs Persija Jakarta'),
(77, '141220354', '01022017013828', 100000, 'bukti3.jpg', '2017-02-01', 'PSS Sleman vs Persija Jakarta'),
(78, '141220355', '01022017041240', 50000, 'bukti1.jpg', '2017-02-01', 'PSS Sleman vs Persija Jakarta'),
(79, '141220356', '01022017045918', 60000, 'bukti3.jpg', '2017-02-01', 'PSS Sleman vs Persija Jakarta'),
(80, '', '01022017063846', 0, '', '2017-02-01', 'PSS Sleman vs Persija Jakarta'),
(81, '', '01022017063859', 0, '', '2017-02-01', 'PSS Sleman vs Persija Jakarta'),
(82, '', '01022017064033', 0, '', '2017-02-01', 'PSS Sleman vs Persija Jakarta'),
(83, '', '01022017064052', 0, '', '2017-02-01', 'PSS Sleman vs Persija Jakarta'),
(84, '141220358', '06022017032704', 40000, 'bukti2.jpg', '2017-02-06', 'PSS Sleman vs PSIS Semarang'),
(85, '141220360', '07022017063859', 60000, 'bukti1.jpg', '2017-02-07', 'PSS Sleman vs PSIS Semarang'),
(86, '141220361', '07022017070214', 60000, 'bukti2.jpg', '2017-02-07', 'PSS Sleman vs PSIS Semarang'),
(87, '141220362', '09022017022234', 50000, 'bukti2.jpg', '2017-02-09', 'PSS Sleman vs PSIS Semarang');

-- --------------------------------------------------------

--
-- Table structure for table `penonton`
--

CREATE TABLE IF NOT EXISTS `penonton` (
  `id_penonton` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id_penonton`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penonton`
--

INSERT INTO `penonton` (`id_penonton`, `nama`, `username`, `password`) VALUES
('133110043', 'Ardi Tri Heru Hatmoko', 'ardi', 'ardi'),
('133110044', 'Yogo Prasetya', 'yogo', 'yogo'),
('133110045', 'Karolus Juniarto', 'arto', 'arto'),
('133110046', 'Diah Yuniarsih', 'diah', 'diah'),
('133110047', 'Dwi Saputra', 'dwi', 'dwi'),
('133110057', 'Agus Rizal Setiyawan', 'agus', 'agus'),
('133110049', 'Dewangga Satya Yudha', 'dewa', 'dewa'),
('133110050', 'Wahyu Sigit Pratama', 'sigit', 'sigit'),
('133110051', 'Sela Hendi Kurniawan', 'sela', 'sela'),
('133110052', 'Andreas Erlanda Pradipta', 'andre', 'andre'),
('133110054', 'Dwi Susilo Wibowo', 'susilo', 'susilo'),
('133110055', 'Mark Subaktiyanto', 'mark', 'mark'),
('133110056', 'Volta Mega Stiawan', 'volta', 'volta'),
('135410037', 'Muhammad Darma Aji', 'aji', 'aji'),
('133210013', 'Fikry Ashab', 'FA', 'qwertyui'),
('133110058', 'Young Alexander', 'younglex', 'younglex'),
('085729096048', 'Iwan Fals', 'iwanfals', 'iwanfals'),
('123456789', 'Agus Salim', 'agussalim', 'agussalim');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `kode_pesan` int(16) NOT NULL AUTO_INCREMENT,
  `status` varchar(11) DEFAULT 'Belum Bayar',
  `id_penonton` varchar(16) NOT NULL,
  `jumlah` int(1) NOT NULL,
  `kode_tiket` varchar(7) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `jadwal` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`kode_pesan`),
  KEY `id_penonton` (`id_penonton`),
  KEY `id_penonton_2` (`id_penonton`),
  KEY `id_penonton_3` (`id_penonton`),
  KEY `id_penonton_4` (`id_penonton`),
  KEY `id_penonton_5` (`id_penonton`),
  KEY `id_penonton_6` (`id_penonton`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=141220363 ;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`kode_pesan`, `status`, `id_penonton`, `jumlah`, `kode_tiket`, `tgl_pesan`, `jadwal`, `tanggal`) VALUES
(141220245, 'Bayar', '133110054', 3, 'Utara', '2016-12-19', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220249, 'Bayar', '133110055', 1, 'Timur', '2016-12-20', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220251, 'Bayar', '133110043', 2, 'Utara', '2016-12-21', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220261, 'Bayar', '133110043', 1, 'Timur', '2016-12-24', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220265, 'Bayar', '133110044', 2, 'Barat', '2016-12-28', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220273, 'Bayar', '133110043', 2, 'Barat', '2016-12-28', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220274, 'Bayar', '133110057', 1, 'Timur', '2016-12-28', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220275, 'Bayar', '133110057', 3, 'Barat', '2016-12-29', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220276, 'Bayar', '133110049', 2, 'Selatan', '2016-12-29', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220277, 'Bayar', '133110049', 1, 'Barat', '2016-12-29', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220278, 'Bayar', '133110044', 3, 'Barat', '2016-12-29', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220279, 'Bayar', '133110047', 2, 'Selatan', '2016-12-29', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220280, 'Bayar', '133110055', 3, 'Utara', '2016-12-29', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220281, 'Belum Bayar', '133110043', 3, 'Utara', '2016-12-29', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220286, 'Bayar', '133110051', 2, 'Timur', '2017-01-03', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220289, 'Belum Bayar', '133110054', 1, 'Barat', '2017-01-03', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220290, 'Bayar', '133110046', 1, 'Utara', '2017-01-03', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220291, 'Bayar', '133110047', 2, 'Timur', '2017-01-03', ' PSS Sleman vs Persebaya Surabaya ', '2017-03-18'),
(141220292, 'Bayar', '133110049', 2, 'Selatan', '2017-01-03', ' PSS Sleman vs Persija Jakarta ', '2017-03-04'),
(141220293, 'Belum Bayar', '133110051', 2, 'Timur', '2017-01-04', 'PSS Sleman vs Persebaya Surabaya', '2017-03-18'),
(141220294, 'Belum Bayar', '133110051', 3, 'Timur', '2017-01-04', 'PSS Sleman vs Persebaya Surabaya', '2017-03-18'),
(141220295, 'Bayar', '135410037', 2, 'Selatan', '2017-01-04', 'PSS Sleman vs Persebaya Surabaya', '2017-03-18'),
(141220296, 'Belum Bayar', '135410037', 1, 'Barat', '2017-01-04', 'PSS Sleman vs Persebaya Surabaya', '2017-03-18'),
(141220297, 'Bayar', '133110056', 1, 'Barat', '2017-01-04', 'PSS Sleman vs Persebaya Surabaya', '2017-03-18'),
(141220298, 'Bayar', '133110044', 2, 'Timur', '2017-01-04', 'PSS Sleman vs Persebaya Surabaya', '2017-03-18'),
(141220299, 'Bayar', '133110055', 1, 'Selatan', '2017-01-04', 'PSS Sleman vs Persebaya Surabaya', '2017-03-18'),
(141220300, 'Bayar', '133110054', 1, 'Timur', '2017-01-04', 'PSS Sleman vs Persebaya Surabaya', '2017-03-18'),
(141220301, 'Belum Bayar', '133110046', 2, 'Utara', '2017-01-04', 'PSS Sleman vs Persebaya Surabaya', '2017-03-18'),
(141220302, 'Bayar', '133210013', 2, 'Barat', '2017-01-04', 'PSS Sleman vs Persebaya Surabaya', '2017-03-18'),
(141220303, 'Bayar', '133110043', 2, 'Timur', '2017-01-05', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220336, 'Belum Bayar', '133110055', 2, 'Selatan', '2017-01-05', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220337, 'Bayar', '133110047', 3, 'Timur', '2017-01-05', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220338, 'Belum Bayar', '133110046', 1, 'Timur', '2017-01-05', 'PSS Sleman vs Persita Tangerang', '2017-03-11'),
(141220340, 'Bayar', '133110058', 1, 'Utara', '2017-01-10', 'PSS Sleman vs Persita Tangerang', '2017-03-11'),
(141220341, 'Bayar', '133110057', 3, 'Barat', '2017-01-16', 'PSS Sleman vs Persita Tangerang', '2017-03-11'),
(141220342, 'Bayar', '133110043', 2, 'Utara', '2017-01-16', 'PSS Sleman vs Persita Tangerang', '2017-03-11'),
(141220343, 'Bayar', '133110043', 1, 'Barat', '2017-01-24', 'PSS Sleman vs Persita Tangerang', '2017-03-11'),
(141220344, 'Belum Bayar', '133110051', 1, 'Barat', '2017-01-24', 'PSS Sleman vs Persebaya Surabaya', '2017-03-18'),
(141220345, 'Bayar', '133110044', 1, 'Barat', '2017-01-24', 'PSS Sleman vs Persebaya Surabaya', '2017-03-18'),
(141220346, 'Bayar', '133110058', 1, 'Barat', '2017-01-24', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220347, 'Bayar', '133110047', 1, 'Utara', '2017-01-30', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220348, 'Bayar', '085729096048', 3, 'Utara', '2017-01-30', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220349, 'Bayar', '085729096048', 1, 'Barat', '2017-01-31', 'PSS Sleman vs Persib Bandung', '2017-04-01'),
(141220350, 'Bayar', '123456789', 2, 'Barat', '2017-01-31', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220351, 'Belum Bayar', '133110043', 1, 'Barat', '2017-01-31', 'PSS Sleman vs PSIS Semarang', '2017-04-08'),
(141220352, 'Belum Bayar', '133110047', 1, 'Timur', '2017-01-31', 'PSS Sleman vs PSIS Semarang', '2017-04-08'),
(141220353, 'Belum Bayar', '133110047', 2, 'Barat', '2017-01-31', 'PSS Sleman vs PSIS Semarang', '2017-04-08'),
(141220354, 'Bayar', '133110043', 2, 'Barat', '2017-02-01', 'PSS Sleman vs PSIS Semarang', '2017-04-08'),
(141220355, 'Bayar', '133110047', 1, 'Barat', '2017-02-01', 'PSS Sleman vs PSIS Semarang', '2017-04-08'),
(141220356, 'Bayar', '133110045', 3, 'Utara', '2017-02-01', 'PSS Sleman vs PSIS Semarang', '2017-04-08'),
(141220357, 'Belum Bayar', '133110049', 3, 'Barat', '2017-02-01', 'PSS Sleman vs PSIS Semarang', '2017-04-08'),
(141220358, 'Belum Bayar', '133110043', 2, 'Utara', '2017-02-06', 'PSS Sleman vs Persebaya Surabaya', '2017-03-18'),
(141220359, 'Belum Bayar', '133110043', 3, 'Barat', '2017-02-07', 'PSS Sleman vs Persebaya Surabaya', '2017-03-18'),
(141220360, 'Bayar', '133110051', 3, 'Utara', '2017-02-07', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220361, 'Bayar', '133110045', 3, 'Selatan', '2017-02-07', 'PSS Sleman vs Persija Jakarta', '2017-03-04'),
(141220362, 'Belum Bayar', '133110043', 1, 'Barat', '2017-02-09', 'PSS Sleman vs Persija Jakarta', '2017-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE IF NOT EXISTS `tiket` (
  `kode_tiket` varchar(7) NOT NULL,
  `harga` int(5) NOT NULL,
  `stok` int(4) NOT NULL,
  `tribun` varchar(6) NOT NULL,
  PRIMARY KEY (`kode_tiket`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`kode_tiket`, `harga`, `stok`, `tribun`) VALUES
('Timur', 25000, 978, 'Merah'),
('Barat', 50000, 961, 'Biru'),
('Selatan', 20000, 986, 'Kuning'),
('Utara', 20000, 971, 'Hijau');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
