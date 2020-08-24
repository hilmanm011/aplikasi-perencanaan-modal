-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 04:37 PM
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
(1, 'Widyawati', 'Subang, Jawa Barat'),
(6, 'Sana Kardi', 'Pagaden'),
(9, 'Heru Hermansyah', 'Subang, Jawa Barat'),
(10, 'Jhon Key', 'Subang, Jawa Barat'),
(11, 'Muhamad Hilman', 'Subang, Jawa Barat'),
(12, 'Hermansyah', 'Subang, Jawa Barat'),
(13, 'Kiki A', 'Subang, Jawa Barat'),
(14, 'Rendi Pan', 'Subang, Jawa Barat');

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
(3, '66666675'),
(4, '100000088'),
(5, '2000');

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
(5, '288', '3445');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `no_order` varchar(125) NOT NULL,
  `tgl_order` date NOT NULL,
  `nama_konsumen` varchar(125) NOT NULL,
  `alamat` varchar(125) NOT NULL,
  `nama_project` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `no_order`, `tgl_order`, `nama_konsumen`, `alamat`, `nama_project`) VALUES
(1, 'Order-01', '2020-07-12', 'Hasanul Ramadhan', 'Subang', 'Project '),
(2, 'Order-02', '2020-07-09', 'M Hilman', 'Subang', 'Project B'),
(3, 'Order-03', '2020-07-02', 'Hasanul', 'Subang', 'Project B'),
(4, 'Order-05', '2020-07-26', 'Faisal Rizki Adam', 'Subang', 'Project B'),
(5, '0rder-06', '2020-06-07', 'Rizki Adam', 'Subang', 'Project B'),
(7, 'Order-019', '2020-08-12', 'Faisaki Adam', 'Subang, Jawa Barat', 'Project A'),
(8, 'order-67', '2020-08-04', 'Faisal Rizki A', 'subang', 'Project B');

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
(1, 'P-01', '2020-07-01', 'Cash', '8000'),
(2, 'P-02', '2020-07-02', 'Tempo', '1000'),
(3, 'P-03', '2020-07-03', 'Cash', '30000'),
(4, 'P-04', '2020-07-04', 'Cash', '40000'),
(5, 'P-05', '2020-07-05', 'Tempo', '5000'),
(6, 'P-06', '2020-07-06', 'Tempo', '10000'),
(7, 'P-07', '2020-07-07', 'Cash', '20000'),
(8, 'P-08', '2020-07-08', 'Tempo', '10000'),
(9, 'P-09', '2020-07-09', 'Cash', '50000'),
(10, 'P-10', '2020-07-10', 'Tempo', '10000'),
(11, 'P-11', '2020-07-11', 'Cash', '30000'),
(12, 'P-12', '2020-07-11', 'Tempo', '30000'),
(13, 'P-13', '2020-07-12', 'Cash', '10000'),
(14, 'P-14', '2020-07-13', 'Tempo', '10000'),
(15, 'P-15', '2020-07-14', 'Tempo', '30000'),
(16, 'P-017', '2020-07-04', 'Tempo', '600'),
(17, 'P-018', '2020-06-29', 'Cash', '80000'),
(18, 'P-019', '2020-07-02', 'Cash', '600'),
(19, 'P-020', '2020-07-09', 'Cash', '80000'),
(20, 'P-022', '2020-07-11', 'Cash', '80000'),
(25, 'order-01', '2020-08-06', 'Tempo', '80000');

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
(5, 'Hasanul Ramadhan', 'hasanul', '$2y$10$tUv/q46oNEnmVyZ3mWccG.N3o8CUzAvch5vW4998G5Hlza0MjRx.2', 'default.jpg', 1, 1),
(6, 'Muhamad Hilman', 'hilman', '$2y$10$orQn4759Cv2EjXHKxi3Vee2Im9E1s2Z8SOaxVn5KmzQHYPEqeOFSu', 'default.jpg', 2, 1),
(7, 'Blodz', 'blodz', '$2y$10$8PzgSI6KUo/SXwc6/If4zeo/tI402waE.3/FWz6a1FuVTR4fECmea', 'default.jpg', 3, 1),
(8, 'Sana Kardi', 'bld', '$2y$10$6gLiRIiX9aCoyQVIlGJzSOdqf/gOFnSXnj/w0KK3n3VDc94uutymu', 'default.jpg', 2, 1);

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
(2, 'Konsumen'),
(3, 'Direktur');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `estimasi`
--
ALTER TABLE `estimasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `modal`
--
ALTER TABLE `modal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
