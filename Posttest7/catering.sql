-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2023 pada 17.06
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catering`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL,
  `quantity` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `name`, `datetime`, `quantity`, `address`, `message`, `foto`) VALUES
(17, 'Arin', '2023-10-25 23:35:00', '50', 'Jl. Alam Segar', 'Untuk acara ulang tahun', '653935df51f9e_2023-10-22 Profil1.png'),
(18, 'Zahrina', '2023-10-11 14:40:00', '100', 'Jl. Perjuangan', 'Untuk acara syukuran', '6539360026eef_2023-10-23 Profil2.png'),
(19, 'Dinda', '2023-10-11 03:36:00', '25', 'Jl. M Yamin', 'untuk acara kegiatan kampus', '2023-10-24 Profil3.png.png'),
(20, 'Vista', '2023-10-06 12:40:00', '30', 'Jl. Pramuka', 'untuk acara party', '6539365a4aa45_2023-10-25 Profil4.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(13, 'zahrina', 'azahrinathiraha051@gmail.com', '$2y$10$YCsQP5R3Ct5zuqczlOP8GOl8ySwEGGDLGUsdi.WuM.rJi3LG6MGFu'),
(14, 'arin', 'arin@gmail.com', '$2y$10$eppJxNlU00eh88Gaf3liJOAUubZZHGC4ycg7admDpXvRz0Gk.y63e');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
