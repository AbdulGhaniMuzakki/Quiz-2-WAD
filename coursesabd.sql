-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Dec 11, 2022 at 04:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coursesabd`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_mobil`
--

CREATE TABLE `daftar_mobil` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tahun_produksi` date NOT NULL,
  `deskripsi` text NOT NULL,
  `harga_mobil` int(255) NOT NULL,
  `foto_mobil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_mobil`
--

INSERT INTO `daftar_mobil` (`id_mobil`, `nama_mobil`, `merk_mobil`, `tahun_produksi`, `deskripsi`, `harga_mobil`, `foto_mobil`) VALUES
(40, 'Fullstack Machine Learning', 'Deep Learning', '2022-12-08', 'Deep Learning adalah metode pengenalan pada sistem untuk kecerdasan buatan dalam perangkat.', 215000, 'machine learning.jpg'),
(41, 'Data Science', 'Deep Analytics', '2022-12-29', 'Data science merupakan rumpun dari ilmu statistika yang dapat memberikan keputusan terbaik', 300000, 'hunter-harritt-Ype9sdOPdYc-unsplash.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_mobil`
--
ALTER TABLE `daftar_mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_mobil`
--
ALTER TABLE `daftar_mobil`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
