-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 10:24 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_community_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dinas`
--

CREATE TABLE `tbl_dinas` (
  `id_dinas` int(11) NOT NULL,
  `nama_dinas` varchar(50) NOT NULL,
  `alamat_dinas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dinas`
--

INSERT INTO `tbl_dinas` (`id_dinas`, `nama_dinas`, `alamat_dinas`) VALUES
(1, 'Dinas Perhubungan', 'Jl Gatot Subroto Jember');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lapor`
--

CREATE TABLE `tbl_lapor` (
  `id_lapor` varchar(30) NOT NULL,
  `tanggal_pengaduan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `keterangan_pengaduan` varchar(200) NOT NULL,
  `id_user` varchar(30) NOT NULL,
  `id_dinas` int(11) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `status` varchar(5) NOT NULL,
  `lokasi_tkp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_lapor`
--

INSERT INTO `tbl_lapor` (`id_lapor`, `tanggal_pengaduan`, `keterangan_pengaduan`, `id_user`, `id_dinas`, `longitude`, `latitude`, `status`, `lokasi_tkp`) VALUES
('232323', '2021-06-12 19:46:34', 'Jalan Berlubang Cukup Parah', '515', 1, '928838323', '984098034', '4', 'Jl Malhera 234 Jember');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `alamat_petugas` varchar(200) NOT NULL,
  `no_petugas` varchar(16) NOT NULL,
  `email_petugas` varchar(50) NOT NULL,
  `username_petugas` varchar(30) NOT NULL,
  `password_petugas` varchar(50) NOT NULL,
  `foto_petugas` varchar(50) NOT NULL,
  `level` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`id_petugas`, `nama_petugas`, `alamat_petugas`, `no_petugas`, `email_petugas`, `username_petugas`, `password_petugas`, `foto_petugas`, `level`) VALUES
(1, 'Erwin Andrianto', 'Banyuwangi, Alas Purwo', '081333992731', 'erwin@gmail.com', 'erwin', 'e10adc3949ba59abbe56e057f20f883e', 'default.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(30) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `alamat_user` varchar(200) NOT NULL,
  `no_user` varchar(16) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `username_user` varchar(30) NOT NULL,
  `password_user` varchar(30) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `alamat_user`, `no_user`, `email_user`, `username_user`, `password_user`, `status`) VALUES
('515', 'Agus Priyat', 'Jl Bungur Gebang Jember', '083333993245', 'agus@gmail.com', 'agus', '123456', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_dinas`
--
ALTER TABLE `tbl_dinas`
  ADD PRIMARY KEY (`id_dinas`);

--
-- Indexes for table `tbl_lapor`
--
ALTER TABLE `tbl_lapor`
  ADD PRIMARY KEY (`id_lapor`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_dinas` (`id_dinas`);

--
-- Indexes for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_dinas`
--
ALTER TABLE `tbl_dinas`
  MODIFY `id_dinas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_lapor`
--
ALTER TABLE `tbl_lapor`
  ADD CONSTRAINT `tbl_lapor_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`),
  ADD CONSTRAINT `tbl_lapor_ibfk_2` FOREIGN KEY (`id_dinas`) REFERENCES `tbl_dinas` (`id_dinas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
