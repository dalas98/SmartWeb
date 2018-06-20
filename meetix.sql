-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2018 at 01:16 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meetix`
--
CREATE DATABASE IF NOT EXISTS `meetix` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `meetix`;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_Event` varchar(5) NOT NULL,
  `nama_event` varchar(50) NOT NULL,
  `jadwal_event` datetime NOT NULL,
  `lokasi_event` varchar(200) NOT NULL,
  `image_event` varchar(150) NOT NULL,
  `harga_tiket` int(9) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_Event`, `nama_event`, `jadwal_event`, `lokasi_event`, `image_event`, `harga_tiket`, `metode_pembayaran`) VALUES
('E0001', 'Gelar Jepang UI', '2018-08-26 10:00:00', 'Gedung FIB Universitas Indonesia Depok', 'http://192.168.0.19/SmartWeb/assets/images/upload/gjui.jpg', 25000, 'BCA, BNI, BRI, Lawson'),
('E0002', 'Paramore in Jakarta', '2018-08-25 18:00:00', 'ICE BSD City, Jl. BSD Grand Boulevard, BSD City, Kota Tangerang', 'http://192.168.0.19/SmartWeb/assets/images/upload/paramore.jpg', 1000000, 'BNI, BRI, BCA, Mandiri, Indomaret, Alfamart'),
('E0003', 'Ennichisai 2018', '2018-06-30 10:00:00', 'Plaza Blok M, JL. Sultan Hasanudin,Kebayoran Baru, Melawai, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta', 'http://192.168.0.19/SmartWeb/assets/images/upload/ennichisai.jpg', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` varchar(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(55) NOT NULL,
  `role` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `role`) VALUES
('AD001', 'Yusuf Farhan', 'dalas98', 'd1bbb2af69fd350b6d6bd88655757b47', 'admin'),
('U0001', 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_Event`),
  ADD UNIQUE KEY `nama_event` (`nama_event`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
