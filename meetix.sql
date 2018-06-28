-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2018 at 12:43 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

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
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` varchar(4) NOT NULL,
  `image_banner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `kategori_event` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_Event`, `nama_event`, `jadwal_event`, `lokasi_event`, `image_event`, `harga_tiket`, `kategori_event`) VALUES
('E0001', 'Gelar Jepang UI', '2018-08-26 10:00:00', 'Gedung FIB Universitas Indonesia Depok', 'http://localhost/SmartWeb/assets/images/upload/gjui.jpg', 25000, 'VIP'),
('E0002', 'Paramore in Jakarta', '2018-08-25 18:00:00', 'ICE BSD City, Jl. BSD Grand Boulevard, BSD City, Kota Tangerang', 'http://localhost/SmartWeb/assets/images/upload/paramore.jpg', 1000000, 'Reguler'),
('E0003', 'Ennichisai 2018', '2018-06-30 10:00:00', 'Plaza Blok M, JL. Sultan Hasanudin,Kebayoran Baru, Melawai, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta', 'http://localhost/SmartWeb/assets/images/upload/ennichisai.jpg', 0, 'Reguler');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(3) NOT NULL,
  `id_Event` varchar(5) NOT NULL,
  `kategori_event` varchar(9) NOT NULL,
  `harga_tiket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `id_Event`, `kategori_event`, `harga_tiket`) VALUES
('C01', 'E0001', 'VIP', 25000),
('C02', 'E0001', 'Reguler', 15000),
('C03', 'E0002', 'VIP', 1000000),
('C04', 'E0002', 'Reguler', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(9) NOT NULL,
  `id_Event` varchar(5) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `tanggal_beli` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `harga_tiket` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` varchar(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(55) NOT NULL,
  `balance` int(8) NOT NULL,
  `role` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `balance`, `role`) VALUES
('AD001', 'Yusuf Farhan', 'dalas98', 'd1bbb2af69fd350b6d6bd88655757b47', 1000000, 'admin'),
('U0001', 'Saiful Hadi', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 3950000, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_Event`),
  ADD UNIQUE KEY `nama_event` (`nama_event`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `id_Event` (`id_Event`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_Event` (`id_Event`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`id_Event`) REFERENCES `event` (`id_Event`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_Event`) REFERENCES `event` (`id_Event`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
