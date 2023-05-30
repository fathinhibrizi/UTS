-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 01:12 PM
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
-- Database: `db_warung`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_makanan`
--

CREATE TABLE `tb_makanan` (
  `id_makanan` int(50) NOT NULL,
  `nama_makanan` varchar(100) NOT NULL,
  `hrg_makanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_makanan`
--

INSERT INTO `tb_makanan` (`id_makanan`, `nama_makanan`, `hrg_makanan`) VALUES
(0, 'nasi gorengfghj', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_minuman`
--

CREATE TABLE `tb_minuman` (
  `id_minuman` int(50) NOT NULL,
  `nama_minuman` varchar(100) NOT NULL,
  `hrg_minuman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_minuman`
--

INSERT INTO `tb_minuman` (`id_minuman`, `nama_minuman`, `hrg_minuman`) VALUES
(0, 'brown sugar ice', '22000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_snack`
--

CREATE TABLE `tb_snack` (
  `id_snack` int(50) NOT NULL,
  `nama_snack` varchar(100) NOT NULL,
  `hrg_snack` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_snack`
--

INSERT INTO `tb_snack` (`id_snack`, `nama_snack`, `hrg_snack`) VALUES
(0, 'nopal', '10000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_makanan`
--
ALTER TABLE `tb_makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indexes for table `tb_minuman`
--
ALTER TABLE `tb_minuman`
  ADD PRIMARY KEY (`id_minuman`);

--
-- Indexes for table `tb_snack`
--
ALTER TABLE `tb_snack`
  ADD PRIMARY KEY (`id_snack`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
