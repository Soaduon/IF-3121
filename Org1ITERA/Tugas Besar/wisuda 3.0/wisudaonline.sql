-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 08, 2017 at 04:31 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `bukti_pembayaran` varchar(20) NOT NULL,
  `validasi_keuangan` enum('sudah','belum') NOT NULL,
  `validasi_dosen` enum('sudah','belum') NOT NULL,
  `validasi_pembayaran` enum('sudah','belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_daftarwisuda`
--

INSERT INTO `tbl_daftarwisuda` (`nama`, `email`, `handphone`, `nim`, `prodi`, `bukti_pembayaran`, `validasi_keuangan`, `validasi_dosen`, `validasi_pembayaran`) VALUES
('Tobi Santoso', 'tobi.14115029@student.itera.ac.id', 81245454421, 14115029, 'IF', '14115029.jpg', 'sudah', 'sudah', 'sudah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `nama` varchar(50) NOT NULL,
  `id` int(12) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `username` varchar(35) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`nama`, `id`, `jenis_kelamin`, `username`, `jabatan`, `alamat`, `foto`) VALUES
('Agus Laksono', 18099919, 'L', 'agus@if.itera.ac.id', 'Dosen Informatika', 'Bandar Lampung, Lampung.', '18099919.jpg');

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
  `id_dosenpembimbing` int(12) NOT NULL,
  `kp` enum('sudah','belum') NOT NULL,
  `kkn` enum('sudah','belum') NOT NULL,
  `sidangta_1` enum('sudah','belum') NOT NULL,
  `sidangta_2` enum('sudah','belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`nim`, `prodi`, `username`, `nama`, `jenis_kelamin`, `telp`, `alamat`, `foto`, `id_dosenpembimbing`, `kp`, `kkn`, `sidangta_1`, `sidangta_2`) VALUES
(14115019, 'IF', 'nanda.14115019@student.itera.ac.id', 'Nanda Nur Septama', 'L', '082278301833', 'Perum Rajeg Asri Blok AA3 NO3, Desa Rajeg Kecamatan Rajeg, Kabupaten Tangerang, Banten.', '14115019.png', 18099919, 'sudah', 'sudah', 'sudah', 'sudah'),
(14115021, 'IF', 'rizal.14115021@student.itera.ac.id', 'Afrizal Sofyan Afandi', 'L', '082123339887', 'Kalirejo, Lampung Tengah, Provinsi Lampung.', '14115021.png', 18099919, 'sudah', 'sudah', 'belum', 'belum'),
(14115029, 'IF', 'tobi.1415029@student.itera.ac.id', 'Tobi Santoso', 'L', '081247594248', 'sini aja guys', '14115019.png', 18099919, 'sudah', 'sudah', 'sudah', 'sudah');

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
(14115029, 'tobi.1415029@student.itera.ac.id', 'pw', 'mhs', '1', '2017-10-08 21:05:14'),
(18099919, 'agus@if.itera.ac.id', '123456', 'dosen', '1', '2017-09-30 09:05:54'),
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
-- Indexes for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`id`);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
