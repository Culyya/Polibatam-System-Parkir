-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 27, 2022 at 07:14 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_polpar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `id` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `noplat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`id`, `nama`, `nim`, `noplat`) VALUES
('235FCH39', 'Ultraman', '3312001015', 'BP 3105 SG'),
('417A8212', 'Gaia', '3211901011', 'BP 3121 FQ'),
('534D8713', 'Surya Tirta Chandra', '33120001017', 'BP 1234 SS'),
('54OD6F0D', 'Lambureke', '4412001019', 'BP 3333 KL'),
('73DD0C0C', 'Fairuz', '3211901014', 'BP 1234 FQ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_parkir`
--

CREATE TABLE `tb_parkir` (
  `id` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `noplat` varchar(30) NOT NULL,
  `jam_masuk` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_parkir`
--

INSERT INTO `tb_parkir` (`id`, `nama`, `nim`, `noplat`, `jam_masuk`) VALUES
('73DD0C0C', 'Fairuz ', '33120001017 ', 'BP 1234 FQ ', '11:52:57'),
('73DD0C0C', 'Fairuz ', '33120001017 ', 'BP 1234 FQ ', '11:53:46'),
('534D8713', 'Ultraman ', '3312030210 ', 'BP 7841 SS ', '11:55:14'),
('29183912831', 'ultraman gaia ', '32119010121 ', 'BP 1234 JK ', '12:05:19'),
('534D8713', 'Ultraman ', '3312030210 ', 'BP 7841 SS ', '12:06:30'),
('235FCH39', 'Ultraman ', '3312001015 ', 'BP 3105 SG ', '12:12:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
