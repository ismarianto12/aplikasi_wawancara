-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 09:20 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wawancara`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level` enum('admin','user','staff','') NOT NULL,
  `foto` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `log` varchar(40) DEFAULT NULL,
  `active` enum('y','n') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `nama`, `level`, `foto`, `email`, `log`, `active`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Zayed', 'admin', 'foto1580567817.jpg', 'ismarianto@gmail.com', '2020-02-01 21:36:57', 'y'),
(2, 'kepala', 'ac5ae9e8fb93598276c9b3dc4cd28d40', 'Drs H.Munir, M.Hum', 'admin', 'foto1577693796.jpg', 'hmunir2166@gmail.com', '2019-12-30 15:16:36', 'y'),
(9, 'rahma', '202cb962ac59075b964b07152d234b70', 'Front Office2', 'admin', 'foto1574649110.png', 'frontoffice@gmail.com', '2019-12-30 15:05:40', 'y'),
(10, 'arsiparis', '202cb962ac59075b964b07152d234b70', 'Yayun Indrawati, S.Sos.', 'admin', 'foto1577242685.jpg', 'kotamadiun@kemenag.go.id', '2019-12-30 15:04:30', 'y'),
(11, 'elok', '202cb962ac59075b964b07152d234b70', 'Front Office1', 'admin', '', 'frontoffice@kemenag.go.id', '2019-12-30 15:06:21', 'y'),
(12, 'kasubbag', '202cb962ac59075b964b07152d234b70', 'Ahmad Khotib', 'admin', '', 'ahmadkhotib@kemenag.go.id', '2019-12-30 15:04:08', 'y'),
(13, 'pontren', '202cb962ac59075b964b07152d234b70', 'Ahmad Khotib', 'admin', '', 'ahmadkhotib@kemenag.go.id', '2019-12-30 15:05:16', 'y'),
(14, 'phu', '202cb962ac59075b964b07152d234b70', 'M. Arif Fauzi', 'admin', '', 'mariffauzi@kemenag.go.id', '2019-12-30 15:03:44', 'y'),
(15, 'pais', '202cb962ac59075b964b07152d234b70', 'Koirul Kamami', 'admin', '', 'koirulkamami@kemenag.go.id', '2019-12-30 15:06:36', 'y'),
(16, 'syariah', '202cb962ac59075b964b07152d234b70', 'Amil Wahib', 'admin', '', 'amilwahib@kemenag.go.id', '2020-01-10 09:53:04', 'y'),
(17, 'bimasislam', '202cb962ac59075b964b07152d234b70', 'Agus Burhani', 'admin', '', 'agusburhani@kemenag.go.id', '2019-12-30 15:07:06', 'y'),
(18, 'pendma', '202cb962ac59075b964b07152d234b70', 'Sigit Harianto', 'user', '', 'sigitharianto@kemenag.go.id', '2020-01-06 15:12:40', 'y'),
(19, 'wawa', '202cb962ac59075b964b07152d234b70', 'Awawina Nur Hami', 'admin', 'foto1579751730.jpg', 'wawa@kemenag.go.id', '2020-01-23 10:55:30', 'y'),
(20, 'humas', '202cb962ac59075b964b07152d234b70', 'Dany Primasari Narendrani', 'admin', '', 'dany@kemenag.go.id', NULL, 'y'),
(21, 'support', '82d21e53f74b7a30c620f25404837be9', 'support', 'admin', 'foto1578298467.png', 'support@gmail.com', '2020-01-06 15:14:27', 'y'),
(22, 'staff', '202cb962ac59075b964b07152d234b70', 'Zayed', 'user', 'foto1580567817.jpg', 'ismarianto@gmail.com', '2020-02-01 21:36:57', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(25) NOT NULL,
  `no_reg` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nik` varchar(40) NOT NULL,
  `nk` varchar(50) NOT NULL,
  `ttl` varchar(59) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `no_reg`, `nama`, `nik`, `nk`, `ttl`, `date_created`, `date_updated`) VALUES
(1, 'asd', 'asd', 'asd', 'assd', 'ssd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '1313', 'testing', '3324324', '3324324', 'padang , 01-januari-1987', '2020-08-21 00:00:00', '2020-08-21 00:00:00'),
(3, '12123A', 'Edit nama', '131231', '12313', 'padang sidempuan ,12-oktober-2016', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
