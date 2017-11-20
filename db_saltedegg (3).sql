-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2017 at 02:48 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_saltedegg`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `umur` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama`, `alamat`, `no_telepon`, `umur`, `username`, `password`, `status`) VALUES
(4, 'Sukijanto', 'jl jawa 7 no 149', '081336700169', 36, 'admin', 'admin1', 'admin'),
(5, 'ahmad feril', 'perum taman kampus C3/1', '081222333444', 21, 'feril', 'feril11', 'pengguna'),
(7, 'bambang', 'jl kalimantan 10', '081222333777', 70, 'bambang', 'bambang', 'pengguna'),
(9, 'sukirman', 'jl sumatra 7', '089222111999', 22, 'user', 'user', 'pengguna'),
(10, 'sujiman', 'jln. bajul mati no 1', '081222111999', 80, 'sujiman', 'sujiman', 'pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `tb_telurasin`
--

CREATE TABLE `tb_telurasin` (
  `id_telurasin` int(11) NOT NULL,
  `id_pemakai` int(11) NOT NULL,
  `jumlahtelur` int(11) NOT NULL,
  `kualitas` varchar(50) NOT NULL,
  `jumlahgaram` varchar(11) NOT NULL,
  `bubukbata` int(11) NOT NULL,
  `jumlahair` varchar(11) NOT NULL,
  `jumlahhari` int(11) NOT NULL,
  `tanggalmemakai` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_telurasin`
--

INSERT INTO `tb_telurasin` (`id_telurasin`, `id_pemakai`, `jumlahtelur`, `kualitas`, `jumlahgaram`, `bubukbata`, `jumlahair`, `jumlahhari`, `tanggalmemakai`) VALUES
(18, 9, 20, 'medium', '0.3', 2, '1', 10, '2017-11-09 22:32:06'),
(19, 9, 12, 'deep', '0.5', 2, '1', 15, '2017-11-09 22:46:18'),
(20, 9, 70, 'medium', '0.7', 3, '1.5', 10, '2017-11-09 23:05:18'),
(21, 9, 67, 'medium', '0.7', 3, '1.5', 10, '2017-11-09 23:35:02'),
(22, 9, 80, 'medium', '0.7', 3, '1.5', 10, '2017-11-09 23:42:34'),
(23, 5, 111, 'deep', '1.5', 4, '2', 15, '2017-11-13 17:07:07'),
(24, 5, 10, 'medium', '0.3', 2, '1', 10, '2017-11-16 00:58:20'),
(25, 9, 200, 'deep', '2', 5, '2.5', 15, '2017-11-16 01:47:58'),
(26, 9, 60, 'normal', '0.5', 3, '1.5', 7, '2017-11-16 01:55:22'),
(27, 9, 10, 'deep', '0.5', 2, '1', 15, '2017-11-16 04:14:43'),
(28, 9, 10, 'deep', '0.5', 2, '1', 15, '2017-11-16 04:17:20'),
(29, 9, 100, 'normal', '0.5', 3, '1.5', 7, '2017-11-16 04:18:40'),
(30, 9, 10, 'deep', '0.5', 2, '1', 15, '2017-11-16 04:19:19'),
(31, 9, 100, 'medium', '0.7', 3, '1.5', 10, '2017-11-16 05:42:13'),
(32, 9, 250, 'deep', '2.5', 6, '3', 15, '2017-11-16 05:54:34'),
(34, 9, 90, 'medium', '0.7', 3, '1.5', 10, '2017-11-16 06:52:40'),
(35, 9, 20, 'medium', '0.3', 2, '1', 10, '2017-11-16 08:17:50'),
(36, 9, 12, 'medium', '0.3', 2, '1', 10, '2017-11-16 08:20:56'),
(37, 7, 200, 'deep', '2', 5, '2.5', 15, '2017-11-17 00:17:31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_telurbebek`
--

CREATE TABLE `tb_telurbebek` (
  `id_telurbebek` int(11) NOT NULL,
  `id_pakai` int(11) NOT NULL,
  `jumlahbebek` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jenisbebek` varchar(255) NOT NULL,
  `umurbebek` varchar(255) NOT NULL,
  `pakanbebek` varchar(255) NOT NULL,
  `vitaminbebek` varchar(255) NOT NULL,
  `kelembapan` varchar(255) NOT NULL,
  `suhu` varchar(255) NOT NULL,
  `totalbobot` varchar(60) NOT NULL,
  `hasiltelur` int(11) NOT NULL,
  `totalpenjualan` int(11) NOT NULL,
  `hasilkualitas` varchar(255) NOT NULL,
  `tanggalpakai` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_telurbebek`
--

INSERT INTO `tb_telurbebek` (`id_telurbebek`, `id_pakai`, `jumlahbebek`, `harga`, `jenisbebek`, `umurbebek`, `pakanbebek`, `vitaminbebek`, `kelembapan`, `suhu`, `totalbobot`, `hasiltelur`, `totalpenjualan`, `hasilkualitas`, `tanggalpakai`) VALUES
(1, 9, 1, 1000, 'B2', 'B1', 'P2', 'V3', 'K2', 'S1', '55.56', 75, 75000, 'Buruk', '2017-11-16 17:10:49'),
(3, 9, 2, 2500, 'B2', 'B2', 'P1', 'V1', 'K2', 'S3', '83.35000000000001', 150, 375000, 'Baik', '2017-11-16 17:28:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_telurasin`
--
ALTER TABLE `tb_telurasin`
  ADD PRIMARY KEY (`id_telurasin`),
  ADD KEY `id_pemakai` (`id_pemakai`);

--
-- Indexes for table `tb_telurbebek`
--
ALTER TABLE `tb_telurbebek`
  ADD PRIMARY KEY (`id_telurbebek`),
  ADD KEY `id_pakai` (`id_pakai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_telurasin`
--
ALTER TABLE `tb_telurasin`
  MODIFY `id_telurasin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tb_telurbebek`
--
ALTER TABLE `tb_telurbebek`
  MODIFY `id_telurbebek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
