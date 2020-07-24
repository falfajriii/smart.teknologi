-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 06:05 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `st_kom`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(3) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `akses` enum('admin','team') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `akses`) VALUES
(1, 'admin-st', 'jakarta', 'admin'),
(2, 'team-st', 'team-partner', 'team');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pesan` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `layanan` varchar(25) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pesan`, `nama`, `email`, `layanan`, `deskripsi`, `tanggal`) VALUES
(5, 'Roberto Ferguso', 'Ferguso@gmail.com', 'Mesin Doorlock', 'Service CPU Komputer merk Samsung. Kipas terbakar dan Upgrade RAM.\r\nHubungi email saya lebih lanjut.\r\nTerima Kasih', '2018-11-25'),
(6, 'Erika Julia', 'Erika@gmail.com', 'Rakit Komputer', 'Desain Gambar untuk iklan produk makanan anak. Lebih detail hubungi saya lebih lanjut lewat email.\r\nTerimakasih', '2018-11-25'),
(7, 'Fandi Setiado', 'fandi@gmail.com', 'Desain Gambar', 'Gambar Anime', '2019-01-26'),
(8, 'Miftha Namira', 'djakarta@gmail.com', 'Service Hardware', 'Service\r\n\r\n', '2019-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `layanan` varchar(25) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `nama`, `email`, `layanan`, `deskripsi`, `tanggal`) VALUES
(6, 'Roberto Ferguso', 'Ferguso@gmail.com', 'Service Hardware', 'Project Selesai', '2018-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id_proyek` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `layanan` varchar(25) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id_proyek`, `nama`, `email`, `layanan`, `deskripsi`, `tanggal`) VALUES
(5, 'Roberto Ferguso', 'Ferguso@gmail.com', 'Service Hardware', 'Service CPU Komputer merk Samsung. Kipas terbakar dan Upgrade RAM. Jl.Hisana, Kebayoran Baru\r\nHubungi email saya lebih lanjut.\r\nTerima Kasih', '2018-11-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_proyek`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pesan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id_proyek` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
