-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 08:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokosparepart`
--

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE `sparepart` (
  `id_part` int(11) NOT NULL,
  `nama_part` varchar(50) NOT NULL,
  `warna_part` varchar(50) NOT NULL,
  `made_in_part` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar_part` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sparepart`
--

INSERT INTO `sparepart` (`id_part`, `nama_part`, `warna_part`, `made_in_part`, `tanggal`, `gambar_part`) VALUES
(10001, 'Spakbor ', 'Merah ', 'Thailand', '2023-11-01', 'spakbor.jpg'),
(10002, 'Headlamp Vario', 'Putih', 'Indonesia', '2023-11-02', 'lampu.jpg'),
(10003, 'Spion Universal', 'Hitam', 'Vietnam', '2023-11-03', 'spion.jpg'),
(10004, 'Busi Iridium', 'Putih', 'Jepang', '2023-11-04', 'busi.jpg'),
(10005, 'Knalpot', 'Hitam', 'Malaysia', '2023-11-05', 'knalpot.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`id_part`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sparepart`
--
ALTER TABLE `sparepart`
  MODIFY `id_part` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10021;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
