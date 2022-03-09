-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2022 at 06:43 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_account` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_account`, `username`, `password`) VALUES
('1', 'admin', 'adminadmin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id` int(11) NOT NULL,
  `kodebrg` char(10) NOT NULL,
  `namabrg` char(100) NOT NULL,
  `hargabeli` int(11) NOT NULL,
  `satuan` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id`, `kodebrg`, `namabrg`, `hargabeli`, `satuan`) VALUES
(1, '0668cd', 'Susu', 20000, 'Kotak'),
(2, '1662e2', 'Minyak Goreng', 20000, 'Liter');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dbeli`
--

CREATE TABLE `tbl_dbeli` (
  `id` int(11) NOT NULL,
  `notransaksi` char(10) NOT NULL,
  `kodebrg` char(10) NOT NULL,
  `hargabeli` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `diskonrp` int(11) NOT NULL,
  `totalrp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hbeli`
--

CREATE TABLE `tbl_hbeli` (
  `id` int(11) NOT NULL,
  `notransaksi` char(10) NOT NULL,
  `kodespl` char(10) NOT NULL,
  `tglbeli` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hutang`
--

CREATE TABLE `tbl_hutang` (
  `id` int(11) NOT NULL,
  `notransaksi` char(10) NOT NULL,
  `kodespl` char(10) NOT NULL,
  `tglbeli` datetime NOT NULL,
  `totalhutang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `kodebrg` char(10) NOT NULL,
  `qtybeli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stock`
--

INSERT INTO `tbl_stock` (`kodebrg`, `qtybeli`) VALUES
('0668cd', 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suplier`
--

CREATE TABLE `tbl_suplier` (
  `id` int(11) NOT NULL,
  `kodespl` char(10) NOT NULL,
  `namaspl` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_suplier`
--

INSERT INTO `tbl_suplier` (`id`, `kodespl`, `namaspl`) VALUES
(5, 'Tfbcd0ba9', 'f24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dbeli`
--
ALTER TABLE `tbl_dbeli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hbeli`
--
ALTER TABLE `tbl_hbeli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hutang`
--
ALTER TABLE `tbl_hutang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`kodebrg`);

--
-- Indexes for table `tbl_suplier`
--
ALTER TABLE `tbl_suplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_dbeli`
--
ALTER TABLE `tbl_dbeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_hbeli`
--
ALTER TABLE `tbl_hbeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_hutang`
--
ALTER TABLE `tbl_hutang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_suplier`
--
ALTER TABLE `tbl_suplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
