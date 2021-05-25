-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 11:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah_sewa_kamera`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kamera`
--

CREATE TABLE `jenis_kamera` (
  `id_jenis` int(20) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_lensa`
--

CREATE TABLE `jenis_lensa` (
  `id_jenis` int(20) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kamera`
--

CREATE TABLE `kamera` (
  `id_kamera` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_jenis` int(20) NOT NULL,
  `id_tag` int(20) NOT NULL,
  `id_merk` int(20) NOT NULL,
  `battery_life` varchar(255) NOT NULL,
  `frame_rates` varchar(255) NOT NULL,
  `image_sensor` varchar(255) NOT NULL,
  `aspect_ratio` varchar(255) NOT NULL,
  `pixels` varchar(255) NOT NULL,
  `resolution` varchar(255) NOT NULL,
  `iso` varchar(255) NOT NULL,
  `shuter_speed` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(20) NOT NULL,
  `media` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lensa`
--

CREATE TABLE `lensa` (
  `id_lensa` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_jenis` int(20) NOT NULL,
  `id_tag` int(20) NOT NULL,
  `id_merk` int(20) NOT NULL,
  `focal_length` varchar(255) NOT NULL,
  `maximum_aperture` varchar(255) NOT NULL,
  `mount_type` varchar(255) NOT NULL,
  `format` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `id_merk` int(20) NOT NULL,
  `merk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id_tag` int(20) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tag_kamera`
--

CREATE TABLE `tag_kamera` (
  `id_tagkamera` int(11) NOT NULL,
  `id_kamera` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tag_lensa`
--

CREATE TABLE `tag_lensa` (
  `id_taglensa` int(11) NOT NULL,
  `id_lensa` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`, `level`, `foto`) VALUES
(1, 'Nicky Erlangga Setiawan', 'nickyerlangga@gmail.com', 'nicky', '72db64f6f4298af089b237efab0ed158', 'Superadmin', 'Nicky-removebg.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_kamera`
--
ALTER TABLE `jenis_kamera`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `jenis_lensa`
--
ALTER TABLE `jenis_lensa`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kamera`
--
ALTER TABLE `kamera`
  ADD PRIMARY KEY (`id_kamera`),
  ADD UNIQUE KEY `id_jenis` (`id_jenis`,`id_tag`,`id_merk`),
  ADD KEY `rel_merk` (`id_merk`),
  ADD KEY `rel_tagkamera` (`id_tag`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `lensa`
--
ALTER TABLE `lensa`
  ADD PRIMARY KEY (`id_lensa`),
  ADD UNIQUE KEY `id_jenis` (`id_jenis`,`id_tag`,`id_merk`),
  ADD KEY `rel_taglensa` (`id_tag`),
  ADD KEY `rel_merklensa` (`id_merk`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `tag_kamera`
--
ALTER TABLE `tag_kamera`
  ADD PRIMARY KEY (`id_tagkamera`),
  ADD UNIQUE KEY `id_kamera` (`id_kamera`,`id_tag`),
  ADD KEY `rel_tag1` (`id_tag`);

--
-- Indexes for table `tag_lensa`
--
ALTER TABLE `tag_lensa`
  ADD PRIMARY KEY (`id_taglensa`),
  ADD UNIQUE KEY `id_lensa` (`id_lensa`,`id_tag`),
  ADD KEY `rel_tag2` (`id_tag`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_kamera`
--
ALTER TABLE `jenis_kamera`
  MODIFY `id_jenis` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_lensa`
--
ALTER TABLE `jenis_lensa`
  MODIFY `id_jenis` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kamera`
--
ALTER TABLE `kamera`
  MODIFY `id_kamera` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lensa`
--
ALTER TABLE `lensa`
  MODIFY `id_lensa` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `id_merk` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id_tag` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tag_kamera`
--
ALTER TABLE `tag_kamera`
  MODIFY `id_tagkamera` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tag_lensa`
--
ALTER TABLE `tag_lensa`
  MODIFY `id_taglensa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kamera`
--
ALTER TABLE `kamera`
  ADD CONSTRAINT `rel_jeniskamera` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_kamera` (`id_jenis`),
  ADD CONSTRAINT `rel_merk` FOREIGN KEY (`id_merk`) REFERENCES `merk` (`id_merk`),
  ADD CONSTRAINT `rel_tagkamera` FOREIGN KEY (`id_tag`) REFERENCES `tag_kamera` (`id_tagkamera`);

--
-- Constraints for table `lensa`
--
ALTER TABLE `lensa`
  ADD CONSTRAINT `rel_jenislensa` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_lensa` (`id_jenis`),
  ADD CONSTRAINT `rel_merklensa` FOREIGN KEY (`id_merk`) REFERENCES `merk` (`id_merk`),
  ADD CONSTRAINT `rel_taglensa` FOREIGN KEY (`id_tag`) REFERENCES `tag_lensa` (`id_taglensa`);

--
-- Constraints for table `tag_kamera`
--
ALTER TABLE `tag_kamera`
  ADD CONSTRAINT `rel_kamera` FOREIGN KEY (`id_kamera`) REFERENCES `kamera` (`id_kamera`),
  ADD CONSTRAINT `rel_tag1` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`);

--
-- Constraints for table `tag_lensa`
--
ALTER TABLE `tag_lensa`
  ADD CONSTRAINT `rel_lensa` FOREIGN KEY (`id_lensa`) REFERENCES `lensa` (`id_lensa`),
  ADD CONSTRAINT `rel_tag2` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
