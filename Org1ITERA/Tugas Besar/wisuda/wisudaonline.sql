-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 02, 2017 at 01:55 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisudaonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daftarwisuda`
--

CREATE TABLE `tbl_daftarwisuda` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(45) NOT NULL,
  `handphone` bigint(14) NOT NULL,
  `nim` int(14) NOT NULL,
  `prodi` varchar(2) NOT NULL,
  `validasi_keuangan` varchar(6) NOT NULL,
  `validasi_dosen` varchar(6) NOT NULL,
  `validasi_pembayaran` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_daftarwisuda`
--

INSERT INTO `tbl_daftarwisuda` (`nama`, `email`, `handphone`, `nim`, `prodi`, `validasi_keuangan`, `validasi_dosen`, `validasi_pembayaran`) VALUES
('Nanda Nur Septama', 'nandanurseptama@gmail.com', 82278301833, 14115019, 'IF', 'belum', 'belum', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `nim` int(12) NOT NULL,
  `prodi` varchar(2) NOT NULL,
  `username` varchar(35) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(13) NOT NULL,
  `kp` varchar(6) NOT NULL,
  `kkn` varchar(6) NOT NULL,
  `sidangta_1` varchar(6) NOT NULL,
  `sidangta_2` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`nim`, `prodi`, `username`, `nama`, `jenis_kelamin`, `telp`, `alamat`, `foto`, `kp`, `kkn`, `sidangta_1`, `sidangta_2`) VALUES
(14115019, 'IF', 'nanda.14115019@student.itera.ac.id', 'Nanda Nur Septama', 'L', '082278301833', 'Perum Rajeg Asri Blok AA3 NO3, Desa Rajeg Kecamatan Rajeg, Kabupaten Tangerang, Banten.', '14115019.png', 'sudah', 'sudah', 'sudah', 'sudah'),
(14115021, 'IF', 'rizal.14115021@student.itera.ac.id', 'Afrizal Sofyan Afandi', 'L', '082123339887', 'Kalirejo, Lampung Tengah, Provinsi Lampung.', '14115021.png', 'sudah', 'sudah', 'sudah', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `id` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `username` varchar(35) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`id`, `nama`, `jenis_kelamin`, `username`, `jabatan`, `alamat`, `foto`) VALUES
(98111012, 'Aziz Setya Budi', 'L', 'aziz@staff.itera.ac.id', 'Staff Keuangan', 'Kalianda, Lampung Selatan.', '98111012.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(12) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(10) NOT NULL,
  `type` varchar(5) NOT NULL,
  `active` enum('0','1') NOT NULL DEFAULT '1',
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `type`, `active`, `last_login`) VALUES
(14115019, 'nanda.14115019@student.itera.ac.id', 'septama18', 'mhs', '1', '2017-09-30 09:05:54'),
(14115021, 'rizal.14115021@student.itera.ac.id', 'rizalbreak', 'mhs', '1', '2017-10-01 21:36:23'),
(18099919, 'hafiz.budi@if.itera.ac.id', '123456', 'dosen', '1', '2017-09-30 09:05:54'),
(98111012, 'aziz@staff.itera.ac.id', '12345678', 'staff', '1', '2017-10-02 12:13:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_daftarwisuda`
--
ALTER TABLE `tbl_daftarwisuda`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
