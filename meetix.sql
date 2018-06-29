-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2018 at 09:29 PM
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
('E0003', 'Ennichisai 2018', '2018-06-30 10:00:00', 'Plaza Blok M, JL. Sultan Hasanudin,Kebayoran Baru, Melawai, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta', 'http://localhost/SmartWeb/assets/images/upload/ennichisai.jpg', 0, 'Reguler'),
('E0004', 'Seminar Entreprenur', '2018-09-04 08:00:00', 'Grand Tebu Hotel, Bandung', 'http://localhost/SmartWeb/assets/images/upload/seminar.jpg', 300000, 'Reguler'),
('E0005', 'Starlight with KAHITNA', '2018-07-15 19:00:00', 'Premier Basko Hotel Padang', 'http://localhost/SmartWeb/assets/images/upload/starlight.jpg', 300000, 'VIP'),
('E0006', 'Jazz Gunung Bromo 2018', '2018-07-27 16:00:00', 'Amfiteater Terbuka Jiwa Jawa Resort, Sukapura, Probolinggo, Jawa Timur', 'http://localhost/SmartWeb/assets/images/upload/jazz.jpg', 500000, 'VIP'),
('E0007', 'Boyzone 25 Years Farewell Concert', '2018-08-18 15:00:00', 'Trans Luxury Hotel, Bandung', 'http://localhost/SmartWeb/assets/images/upload/boyzone.jpg', 600000, 'VIP'),
('E0008', 'Saturdate : Sheila On 7 In Concert ', '2018-07-20 17:00:00', 'Waterbom Jakarta, Pantai Indah Kapuk, Jakarta', 'http://localhost/SmartWeb/assets/images/upload/so7.jpg', 200000, 'VIP'),
('E0009', 'Glenn Fredly on Concert', '2018-07-13 15:00:00', 'Grand Pacific Hall Yogyakarta', 'http://localhost/SmartWeb/assets/images/upload/glen.jpg', 250000, 'Reguler');

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

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_Event`, `id_user`, `tanggal_beli`, `harga_tiket`) VALUES
('TRANS0001', 'E0002', 'U0001', '2018-06-28 22:44:37', 1000000),
('TRANS0002', 'E0001', 'U0001', '2018-06-28 22:46:29', 25000),
('TRANS0003', 'E0001', 'U0001', '2018-06-29 01:13:53', 25000),
('TRANS0004', 'E0002', 'U0001', '2018-06-29 01:19:10', 1000000),
('TRANS0005', 'E0008', 'U0003', '2018-06-29 04:19:53', 200000),
('TRANS0006', 'E0001', 'U0001', '2018-06-29 04:27:38', 25000),
('TRANS0007', 'E0001', 'U0001', '2018-06-29 06:09:07', 25000),
('TRANS0008', 'E0002', 'U0001', '2018-06-29 06:30:52', 1000000),
('TRANS0009', 'E0008', 'U0001', '2018-06-29 06:36:12', 200000),
('TRANS0010', 'E0001', 'U0001', '2018-06-29 06:39:09', 25000),
('TRANS0011', 'E0007', 'U0001', '2018-06-29 07:01:35', 600000),
('TRANS0012', 'E0001', 'U0001', '2018-06-29 07:02:11', 25000),
('TRANS0013', 'E0001', 'U0001', '2018-06-29 07:15:56', 25000),
('TRANS0014', 'E0001', 'U0001', '2018-06-29 08:43:48', 25000),
('TRANS0015', 'E0005', 'U0001', '2018-06-29 15:07:25', 300000),
('TRANS0016', 'E0002', 'AD001', '2018-06-29 16:50:00', 1000000),
('TRANS0017', 'E0002', 'AD001', '2018-06-29 19:14:38', 1000000),
('TRANS0018', 'E0001', 'AD001', '2018-06-29 19:17:05', 25000),
('TRANS0019', 'E0001', 'AD001', '2018-06-29 19:18:22', 25000),
('TRANS0020', 'E0001', 'AD001', '2018-06-29 19:19:32', 25000),
('TRANS0021', 'E0001', 'AD001', '2018-06-29 19:24:00', 25000),
('TRANS0022', 'E0001', 'AD001', '2018-06-29 19:24:33', 25000),
('TRANS0023', 'E0003', 'AD001', '2018-06-29 19:25:32', 0);

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
('AD001', 'Yusuf Farhan', 'dalas98', 'd1bbb2af69fd350b6d6bd88655757b47', 0, 'admin'),
('U0001', 'Saiful Hadi', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 1650000, 'member'),
('U0002', 'widya lestari', 'widya ', '81dc9bdb52d04dc20036dbd8313ed055', 1000000, 'member'),
('U0003', 'devia ardyani', 'dev', '202cb962ac59075b964b07152d234b70', 300000, 'member'),
('U0004', 'balance ', 'balance', '0079fcb602361af76c4fd616d60f9414', 50000000, 'member');

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
