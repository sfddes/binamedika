-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 06:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `damabis_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `a2pdomestik`
--

CREATE TABLE `a2pdomestik` (
  `id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `nama_skembis` varchar(255) NOT NULL,
  `valid_from` date NOT NULL,
  `valid_until` date NOT NULL,
  `file_skembis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `a2pdomestik`
--

INSERT INTO `a2pdomestik` (`id`, `sender`, `nama_skembis`, `valid_from`, `valid_until`, `file_skembis`) VALUES
(1, 'test', 'coba', '2023-02-01', '2023-02-03', 'lagi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a2pdomestik`
--
ALTER TABLE `a2pdomestik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a2pdomestik`
--
ALTER TABLE `a2pdomestik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
damabis_db