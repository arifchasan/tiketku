-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2024 at 02:32 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_event`
--

CREATE TABLE `tb_event` (
  `event_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `nama` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lokasi` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `waktu` datetime NOT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_event`
--

INSERT INTO `tb_event` (`event_id`, `user_id`, `nama`, `gambar`, `lokasi`, `deskripsi`, `waktu`, `status`) VALUES
(7, 4, 'Pestapora Jakarta', '1710943456_14c68b4a6cf34b9e72f2.jpg', 'Jakarta', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sed feugiat nisi. Nulla placerat posuere risus volutpat accumsan. Nulla facilisi. Sed sagittis nibh a orci lobortis vestibulum. Nunc porta consectetur varius. Integer sed dui eu odio fermentum venenatis maximus in erat. Nam auctor pharetra nulla id tempor.</p><p><span style=\"letter-spacing: 0.1px; font-family: var(--bs-body-font-family); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Ut augue risus, posuere a felis sit amet, tempor porta odio. Phasellus rutrum, enim quis bibendum maximus, ex odio ultricies nulla, blandit pharetra leo sapien at arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla ultricies suscipit sapien in gravida. Fusce finibus lobortis urna non scelerisque. Pellentesque euismod blandit purus, semper condimentum augue consequat vel. Suspendisse bibendum, mi a commodo malesuada, nisl est finibus ipsum, in mollis leo nisl at erat. Phasellus sit amet pellentesque augue.</span><br></p><p><span style=\"letter-spacing: 0.1px; font-family: var(--bs-body-font-family); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Integer a dolor eu diam lacinia fringilla ut nec velit. Phasellus ullamcorper semper est a facilisis. Quisque ex libero, aliquet nec venenatis ac, vehicula eget nibh. Quisque nibh purus, tincidunt sed tellus a, egestas viverra magna. Morbi finibus accumsan pretium. Nullam id condimentum elit, nec semper ipsum. Morbi ac quam mauris. Nunc at tortor tellus. In accumsan nunc vitae lectus aliquet tempor et nec lectus. Praesent congue volutpat arcu. Proin rhoncus mi at dui aliquet, et aliquam lorem volutpat. Integer mattis blandit felis quis accumsan.</span></p>', '2025-01-01 19:00:00', 'publish'),
(8, 4, 'Fun Run 2024', '1711428011_61aca9f78866efbca920.jpg', 'Istana Merdeka', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sed feugiat nisi. Nulla placerat posuere risus volutpat accumsan. Nulla facilisi. Sed sagittis nibh a orci lobortis vestibulum. Nunc porta consectetur varius. Integer sed dui eu odio fermentum venenatis maximus in erat. Nam auctor pharetra nulla id tempor.</p><p><span style=\"letter-spacing: 0.1px; font-family: var(--bs-body-font-family); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Ut augue risus, posuere a felis sit amet, tempor porta odio. Phasellus rutrum, enim quis bibendum maximus, ex odio ultricies nulla, blandit pharetra leo sapien at arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla ultricies suscipit sapien in gravida. Fusce finibus lobortis urna non scelerisque. Pellentesque euismod blandit purus, semper condimentum augue consequat vel. Suspendisse bibendum, mi a commodo malesuada, nisl est finibus ipsum, in mollis leo nisl at erat. Phasellus sit amet pellentesque augue.</span><br></p><p><span style=\"letter-spacing: 0.1px; font-family: var(--bs-body-font-family); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Integer a dolor eu diam lacinia fringilla ut nec velit. Phasellus ullamcorper semper est a facilisis. Quisque ex libero, aliquet nec venenatis ac, vehicula eget nibh. Quisque nibh purus, tincidunt sed tellus a, egestas viverra magna. Morbi finibus accumsan pretium. Nullam id condimentum elit, nec semper ipsum. Morbi ac quam mauris. Nunc at tortor tellus. In accumsan nunc vitae lectus aliquet tempor et nec lectus. Praesent congue volutpat arcu. Proin rhoncus mi at dui aliquet, et aliquam lorem volutpat. Integer mattis blandit felis quis accumsan.</span><br></p>', '2024-08-01 07:00:00', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `pembelian_id` int NOT NULL,
  `user_id` int NOT NULL,
  `event_id` int NOT NULL,
  `kode` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `link_pembayaran` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_pembelian` datetime NOT NULL,
  `total_harga` int NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pembelian`
--

INSERT INTO `tb_pembelian` (`pembelian_id`, `user_id`, `event_id`, `kode`, `link_pembayaran`, `tanggal_pembelian`, `total_harga`, `status`) VALUES
(9, 2, 8, 'EB791C3B53C37D7D3A96', 'https://checkout-staging.xendit.co/v2/660d19ab591bac2960b43d8e', '2024-04-03 08:56:11', 1000000, 'sukses'),
(10, 2, 7, 'E974D9715A5C11474687', 'https://checkout-staging.xendit.co/v2/660d5945256f65f2083196f6', '2024-04-03 13:27:34', 1000000, 'sukses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembelian_detail`
--

CREATE TABLE `tb_pembelian_detail` (
  `pembelian_detail_id` int NOT NULL,
  `pembelian_id` int NOT NULL,
  `tiket_id` int NOT NULL,
  `jumlah` int NOT NULL,
  `harga` int NOT NULL,
  `total` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pembelian_detail`
--

INSERT INTO `tb_pembelian_detail` (`pembelian_detail_id`, `pembelian_id`, `tiket_id`, `jumlah`, `harga`, `total`) VALUES
(11, 9, 10, 1, 1000000, 1000000),
(12, 9, 11, 0, 2000000, 0),
(13, 10, 12, 1, 1000000, 1000000),
(14, 10, 13, 0, 100000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tiket`
--

CREATE TABLE `tb_tiket` (
  `tiket_id` int NOT NULL,
  `event_id` int DEFAULT NULL,
  `nama` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `harga` int NOT NULL,
  `total` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_tiket`
--

INSERT INTO `tb_tiket` (`tiket_id`, `event_id`, `nama`, `harga`, `total`) VALUES
(8, NULL, 'VVIP', 1000000, 100),
(9, NULL, 'Festival', 100000, 1000),
(10, 8, '10K', 1000000, 100),
(11, 8, '15K', 2000000, 100),
(12, 7, 'VIP', 1000000, 100),
(13, 7, 'Festival', 100000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `key_forgot` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `nama`, `password`, `email`, `telp`, `role`, `key_forgot`, `status`) VALUES
(2, 'Arif Pembeli', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'pembeli@mail.com', '08999', 'pembeli', '', 'active'),
(3, 'Dian Sastro', 'ac554b9c4f60a8d81b6edec2e9cda9fbc7e5bb5f', 'dian@mail.com', '0899999', 'eo', NULL, 'active'),
(4, 'Admin Event', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'eo@mail.com', '08512345', 'eo', NULL, 'active'),
(5, 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@mail.com', '08123', 'admin', NULL, 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`pembelian_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `tb_pembelian_detail`
--
ALTER TABLE `tb_pembelian_detail`
  ADD PRIMARY KEY (`pembelian_detail_id`),
  ADD KEY `pembelian_id` (`pembelian_id`),
  ADD KEY `tiket_id` (`tiket_id`);

--
-- Indexes for table `tb_tiket`
--
ALTER TABLE `tb_tiket`
  ADD PRIMARY KEY (`tiket_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `event_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `pembelian_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_pembelian_detail`
--
ALTER TABLE `tb_pembelian_detail`
  MODIFY `pembelian_detail_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_tiket`
--
ALTER TABLE `tb_tiket`
  MODIFY `tiket_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD CONSTRAINT `tb_event_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`);

--
-- Constraints for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD CONSTRAINT `tb_pembelian_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`),
  ADD CONSTRAINT `tb_pembelian_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `tb_event` (`event_id`);

--
-- Constraints for table `tb_pembelian_detail`
--
ALTER TABLE `tb_pembelian_detail`
  ADD CONSTRAINT `tb_pembelian_detail_ibfk_1` FOREIGN KEY (`pembelian_id`) REFERENCES `tb_pembelian` (`pembelian_id`),
  ADD CONSTRAINT `tb_pembelian_detail_ibfk_2` FOREIGN KEY (`tiket_id`) REFERENCES `tb_tiket` (`tiket_id`);

--
-- Constraints for table `tb_tiket`
--
ALTER TABLE `tb_tiket`
  ADD CONSTRAINT `tb_tiket_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `tb_event` (`event_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
