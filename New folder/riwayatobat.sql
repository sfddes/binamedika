-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2023 at 12:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `riwayatobat`
--

CREATE TABLE `riwayatobat` (
  `id_riwayat` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `jenis_pasien` varchar(255) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `diagnosa` varchar(255) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `jmlh_obat` int(11) NOT NULL,
  `aturan_pakai` varchar(255) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `tot_adm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayatobat`
--

INSERT INTO `riwayatobat` (`id_riwayat`, `nama_pasien`, `jenis_pasien`, `nama_dokter`, `diagnosa`, `nama_obat`, `jmlh_obat`, `aturan_pakai`, `tgl_periksa`, `tot_adm`) VALUES
(1, 'ade rukmita', 'binamedika', 'sophia', 'flu', 'mixagrip', 1, '3x4 sehari', '2002-02-12', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `riwayatobat`
--
ALTER TABLE `riwayatobat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `riwayatobat`
--
ALTER TABLE `riwayatobat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
