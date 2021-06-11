-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2021 pada 01.58
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

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
-- Struktur dari tabel `jenis_kamera`
--

CREATE TABLE `jenis_kamera` (
  `id_jenis` int(20) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_kamera`
--

INSERT INTO `jenis_kamera` (`id_jenis`, `jenis`) VALUES
(2, 'DSLR'),
(3, 'Mirrorless'),
(4, 'Action Cam'),
(5, 'Compact Digital');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_lensa`
--

CREATE TABLE `jenis_lensa` (
  `id_jenis` int(20) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_lensa`
--

INSERT INTO `jenis_lensa` (`id_jenis`, `jenis`) VALUES
(2, 'Wide lens'),
(3, 'Fish Eye'),
(4, 'Lensa Fixed'),
(5, 'Lensa normal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamera`
--

CREATE TABLE `kamera` (
  `id_kamera` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_jenis` int(20) NOT NULL,
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

--
-- Dumping data untuk tabel `kamera`
--

INSERT INTO `kamera` (`id_kamera`, `nama`, `id_jenis`, `id_merk`, `battery_life`, `frame_rates`, `image_sensor`, `aspect_ratio`, `pixels`, `resolution`, `iso`, `shuter_speed`, `weight`, `harga`, `foto`) VALUES
(2, 'DSLR Canon EOS 700D', 2, 4, 'With viewfinder shooting: Approx. 440 shots at 23°C / 73°F Approx. 400 shots at 0°C / 32°F With Live View shooting: Approx. 180 shots at 23°C / 73°F Approx. 150 shots at 0°C / 32°F Movie shooting: Approx. 1hr. 40mins. at 23°C / 73°F Approx. 1 hr. 20 mi', '2', 'Approx. 22.3 x 14.9mm CMOS sensor', '3:2', 'Approx. 18.5 megapixels', 'L (Large): Approx. 17.90 megapixels (5184 x 3456) M (Medium): Approx. 8.00 megapixels (3456 x 2304) S1 (Small 1): Approx. 4.50 megapixels (2592 x 1728) S2 (Small 2): Approx. 2.50 megapixels (1920 x 1280) S3 (Small 3): Approx. 350,000 pixels (720 x 480) RA', 'Basic Zone modes*: ISO 100 - ISO 6400 set automatically *Portrait: ISO 100, Handheld Night Scene: ISO 100 - ISO 12800 set automatically Creative zone modes: ISO 100 - ISO 12800 set manually (whole-stop increments), ISO 100 - ISO 6400 set automatically, m', '1/4000sec. to 30secs. (Total shutter speed range. Available range varies by shooting mode.), Bulb, X-sync at 1/200sec.', 'Approx. 580g / 20.5oz. (CIPA Guidelines) Approx. 525g / 18.5oz. (Body only)', '125.000', 'dslr-canon-eos-700d.jpg'),
(9, 'DSLR Canon EOS 800D', 2, 4, 'With viewfinder shooting: Approx. 440 shots at 23°C / 73°F Approx. 400 shots at 0°C / 32°F With Live View shooting: Approx. 180 shots at 23°C / 73°F Approx. 150 shots at 0°C / 32°F Movie shooting: Approx. 1hr. 40mins. at 23°C / 73°F Approx. 1 hr. 20 mi', '50', 'APS-C (1.6x Crop Factor) with CMOS', '3:2', '24.2MP', 'JPEG 3:2: (L) 6000 x 4000, (M) 3984 x 2656, (S1) 2976 x 1984, (S2) 2400x1600, JPEG 4:3: (L) 5328x4000, (M) 3552x2664, (S1) 2656x1992, (S2) 2112x1600, JPEG 16:9: (L) 6000x3368, (M) 3984x2240, (S1) 2976x1680, (S2) 2400x1344, JPEG 1:1: (L) 4000x4000, (M)', 'Auto (100-25600), 100-25600 (in 1/3-stop or whole stop increments) ISO can be expanded to H: 51200 During Movie shooting: Auto (100-12800), 100-12800 (in 1/3-stop or whole stop increments) ISO can be expanded to H: 256007', '30-1/4000 sec (1/2 or 1/3 stop increments), Bulb (Total shutter speed range. Available range varies by shooting mode)', 'Approx. 532g', '150.000', 'dslr-canon-eos-800d.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(20) NOT NULL,
  `media` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `media`, `kontak`) VALUES
(1, 'Whatsapp', '081234567891'),
(2, 'Gmail', 'kamerakita@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lensa`
--

CREATE TABLE `lensa` (
  `id_lensa` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_jenis` int(20) NOT NULL,
  `id_merk` int(20) NOT NULL,
  `focal_length` varchar(255) NOT NULL,
  `maximum_aperture` varchar(255) NOT NULL,
  `mount_type` varchar(255) NOT NULL,
  `format` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lensa`
--

INSERT INTO `lensa` (`id_lensa`, `nama`, `id_jenis`, `id_merk`, `focal_length`, `maximum_aperture`, `mount_type`, `format`, `harga`, `foto`) VALUES
(2, 'Canon EF 14mm f/2.8L II USM', 2, 4, '14mm', '1.4', 'EF', 'Full Frame', '250000', 'canon-ef-14mm-f2.8L.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE `merk` (
  `id_merk` int(20) NOT NULL,
  `merk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `merk`
--

INSERT INTO `merk` (`id_merk`, `merk`) VALUES
(4, 'Canon'),
(5, 'Nikon'),
(6, 'Gopro'),
(7, 'Sony');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tag`
--

CREATE TABLE `tag` (
  `id_tag` int(20) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tag`
--

INSERT INTO `tag` (`id_tag`, `tag`) VALUES
(2, 'Tersedia'),
(4, 'Terlaris'),
(5, 'Terbaru'),
(7, 'Rekomendasi'),
(9, 'Sedang disewa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tag_kamera`
--

CREATE TABLE `tag_kamera` (
  `id_tagkamera` int(11) NOT NULL,
  `id_kamera` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tag_kamera`
--

INSERT INTO `tag_kamera` (`id_tagkamera`, `id_kamera`, `id_tag`) VALUES
(7, 2, 2),
(17, 2, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tag_lensa`
--

CREATE TABLE `tag_lensa` (
  `id_taglensa` int(11) NOT NULL,
  `id_lensa` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tag_lensa`
--

INSERT INTO `tag_lensa` (`id_taglensa`, `id_lensa`, `id_tag`) VALUES
(5, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`, `level`, `foto`) VALUES
(1, 'Nicky Erlangga Setiawan', 'nickyerlangga@gmail.com', 'nicky', '72db64f6f4298af089b237efab0ed158', 'Superadmin', 'Nicky-removebg.png'),
(3, 'Admin1', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'coffee.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_kamera`
--
ALTER TABLE `jenis_kamera`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `jenis_lensa`
--
ALTER TABLE `jenis_lensa`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `kamera`
--
ALTER TABLE `kamera`
  ADD PRIMARY KEY (`id_kamera`),
  ADD KEY `rel_merk` (`id_merk`),
  ADD KEY `id_jenis` (`id_jenis`,`id_merk`) USING BTREE;

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `lensa`
--
ALTER TABLE `lensa`
  ADD PRIMARY KEY (`id_lensa`),
  ADD UNIQUE KEY `id_jenis` (`id_jenis`,`id_merk`) USING BTREE,
  ADD KEY `rel_merklensa` (`id_merk`);

--
-- Indeks untuk tabel `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indeks untuk tabel `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indeks untuk tabel `tag_kamera`
--
ALTER TABLE `tag_kamera`
  ADD PRIMARY KEY (`id_tagkamera`),
  ADD UNIQUE KEY `id_kamera` (`id_kamera`,`id_tag`),
  ADD KEY `rel_tag1` (`id_tag`);

--
-- Indeks untuk tabel `tag_lensa`
--
ALTER TABLE `tag_lensa`
  ADD PRIMARY KEY (`id_taglensa`),
  ADD UNIQUE KEY `id_lensa` (`id_lensa`,`id_tag`),
  ADD KEY `rel_tag2` (`id_tag`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_kamera`
--
ALTER TABLE `jenis_kamera`
  MODIFY `id_jenis` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jenis_lensa`
--
ALTER TABLE `jenis_lensa`
  MODIFY `id_jenis` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kamera`
--
ALTER TABLE `kamera`
  MODIFY `id_kamera` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `lensa`
--
ALTER TABLE `lensa`
  MODIFY `id_lensa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `merk`
--
ALTER TABLE `merk`
  MODIFY `id_merk` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tag`
--
ALTER TABLE `tag`
  MODIFY `id_tag` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tag_kamera`
--
ALTER TABLE `tag_kamera`
  MODIFY `id_tagkamera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tag_lensa`
--
ALTER TABLE `tag_lensa`
  MODIFY `id_taglensa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kamera`
--
ALTER TABLE `kamera`
  ADD CONSTRAINT `rel_jeniskamera` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_kamera` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rel_merk` FOREIGN KEY (`id_merk`) REFERENCES `merk` (`id_merk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `lensa`
--
ALTER TABLE `lensa`
  ADD CONSTRAINT `rel_jenislensa` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_lensa` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rel_merklensa` FOREIGN KEY (`id_merk`) REFERENCES `merk` (`id_merk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tag_kamera`
--
ALTER TABLE `tag_kamera`
  ADD CONSTRAINT `rel_kamera` FOREIGN KEY (`id_kamera`) REFERENCES `kamera` (`id_kamera`),
  ADD CONSTRAINT `rel_tag1` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`);

--
-- Ketidakleluasaan untuk tabel `tag_lensa`
--
ALTER TABLE `tag_lensa`
  ADD CONSTRAINT `rel_lensa` FOREIGN KEY (`id_lensa`) REFERENCES `lensa` (`id_lensa`),
  ADD CONSTRAINT `rel_tag2` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
