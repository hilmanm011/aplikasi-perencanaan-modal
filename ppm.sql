-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 10:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppm`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `alamat`) VALUES
(1, 'Widya W', 'Subang, Jawa Barat'),
(6, 'Sana Kardi', 'Kp.ciwera RT 04 RW 02');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `nama`, `nrp`, `email`, `jurusan`) VALUES
(25, 'Doddy Ferdiansyah', '133040123', 'doddy@yahoo.com', 'Teknik Informatika'),
(30, 'Sandhika Galih', '043040023', 'sandhikagalih@unpas.ac.id', 'Teknik Informatika'),
(31, 'Nofariza Handayani', '083030030', 'nofa@yahoo.com', 'Teknik Lingkungan'),
(33, 'Erik Doank', '133040123', 'erik@gmail.com', 'Teknik Mesin');

-- --------------------------------------------------------

--
-- Table structure for table `datapenduduk`
--

CREATE TABLE `datapenduduk` (
  `id` int(11) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datapenduduk`
--

INSERT INTO `datapenduduk` (`id`, `provinsi`, `jumlah`) VALUES
(1, 'Aceh', 5189500),
(2, 'Bali', 4246500),
(3, 'Banten', 12448200),
(4, 'Bengkulu', 1934300),
(5, 'DI Yogyakarta', 3762200),
(6, 'DKI Jakarta', 10374200),
(7, 'Gorontalo', 1168200),
(8, 'Jambi', 3515000),
(9, 'Jawa Barat', 48037600),
(10, 'Jawa Tengah', 34257900),
(11, 'Jawa Timur', 39293000),
(12, 'Kalimantan Barat', 4932500),
(13, 'Kalimantan Selatan', 4119800),
(14, 'Kalimantan Tengah', 2605300),
(15, 'Kalimantan Timur', 3575400),
(16, 'Kalimantan Utara', 691100),
(17, 'Kepulauan Bangka Belitung', 1430900),
(18, 'Kepulauan Riau', 2082700),
(19, 'Lampung', 8289600),
(20, 'Maluku', 1744700),
(21, 'Maluku Utara', 1209300),
(22, 'Nusa Tenggara Barat', 4955600),
(23, 'Nusa Tenggara Timur', 5287300),
(24, 'Papua', 3265200),
(25, 'Papua Barat', 915400),
(26, 'Riau', 6657900),
(27, 'Sulawesi Barat', 1331000),
(28, 'Sulawesi Selatan', 8690300),
(29, 'Sulawesi Tengah', 2966300),
(30, 'Sulawesi Tenggara', 2602400),
(31, 'Sulawesi Utara', 2461000),
(32, 'Sumatera Barat', 5321500),
(33, 'Sumatera Selatan', 8267000),
(34, 'Sumatera Utara', 14262100);

-- --------------------------------------------------------

--
-- Table structure for table `estimasi`
--

CREATE TABLE `estimasi` (
  `id` int(11) NOT NULL,
  `biaya_material` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estimasi`
--

INSERT INTO `estimasi` (`id`, `biaya_material`) VALUES
(1, '100006'),
(2, '20000'),
(3, '666');

-- --------------------------------------------------------

--
-- Table structure for table `modal`
--

CREATE TABLE `modal` (
  `id` int(11) NOT NULL,
  `biaya_material` decimal(10,0) NOT NULL,
  `biaya_pegawai` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modal`
--

INSERT INTO `modal` (`id`, `biaya_material`, `biaya_pegawai`) VALUES
(2, '2000', '2059'),
(3, '5000', '1646'),
(4, '1111', '1222'),
(5, '288', '344555');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `no_order` int(125) NOT NULL,
  `tgl_order` date NOT NULL,
  `nama_konsumen` varchar(125) NOT NULL,
  `nama_project` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `no_order`, `tgl_order`, `nama_konsumen`, `nama_project`) VALUES
(1, 12234, '2020-07-12', 'Hasanul', 'Project '),
(2, 11123, '2020-07-09', 'hilman', 'Project B');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `no_order` varchar(100) DEFAULT NULL,
  `tgl_order` date NOT NULL,
  `jenis_pembayaran` varchar(200) DEFAULT NULL,
  `nominal_pembayaran` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `no_order`, `tgl_order`, `jenis_pembayaran`, `nominal_pembayaran`) VALUES
(1, 'P-01', '2020-07-01', 'Pembayaran A', '20000'),
(2, 'P-02', '2020-07-02', 'Pembayaran B', '10000'),
(3, 'P-03', '2020-07-03', 'Pembayaran C', '30000'),
(4, 'P-04', '2020-07-04', 'Pembayaran A', '40000'),
(5, 'P-05', '2020-07-05', 'Pembayaran B', '5000'),
(6, 'P-06', '2020-07-06', 'Pembayaran A', '10000'),
(7, 'P-07', '2020-07-07', 'Pembayaran A', '20000'),
(8, 'P-08', '2020-07-08', 'Pembayaran A', '10000'),
(9, 'P-09', '2020-07-09', 'Pembayaran B', '50000'),
(10, 'P-10', '2020-07-10', 'Pembayaran C', '10000'),
(11, 'P-11', '2020-07-11', 'Pembayaran B', '30000'),
(12, 'P-12', '2020-07-11', 'Pembayaran C', '30000'),
(13, 'P-13', '2020-07-12', 'Pembayaran B', '10000'),
(14, 'P-14', '2020-07-13', 'Pembayaran C', '10000'),
(15, 'P-15', '2020-07-14', 'Pembayaran D', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `image`, `role_id`, `is_active`) VALUES
(5, 'Hasanul Ramadhan', 'hasanul', '$2y$10$tUv/q46oNEnmVyZ3mWccG.N3o8CUzAvch5vW4998G5Hlza0MjRx.2', 'default.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapenduduk`
--
ALTER TABLE `datapenduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estimasi`
--
ALTER TABLE `estimasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modal`
--
ALTER TABLE `modal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `datapenduduk`
--
ALTER TABLE `datapenduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `estimasi`
--
ALTER TABLE `estimasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `modal`
--
ALTER TABLE `modal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
