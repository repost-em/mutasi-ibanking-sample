-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 04:09 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mutasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_mutasi`
--

CREATE TABLE `detail_mutasi` (
  `id_dmutasi` int(11) NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `d_begin` int(100) NOT NULL,
  `d_end` int(100) NOT NULL,
  `saldo_akhir` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mutasi_ibanking`
--

CREATE TABLE `mutasi_ibanking` (
  `id_mutasi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah` int(100) NOT NULL,
  `saldo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_mutasi`
--
ALTER TABLE `detail_mutasi`
  ADD PRIMARY KEY (`id_dmutasi`);

--
-- Indexes for table `mutasi_ibanking`
--
ALTER TABLE `mutasi_ibanking`
  ADD PRIMARY KEY (`id_mutasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_mutasi`
--
ALTER TABLE `detail_mutasi`
  MODIFY `id_dmutasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mutasi_ibanking`
--
ALTER TABLE `mutasi_ibanking`
  MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
