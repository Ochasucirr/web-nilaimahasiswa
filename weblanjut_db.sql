-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Feb 2022 pada 08.56
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblanjut_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `uts`
--

CREATE TABLE `uts` (
  `npm_nilai` int(10) NOT NULL,
  `nama_nilai` varchar(50) NOT NULL,
  `kelas_nilai` varchar(10) NOT NULL,
  `uts_nilai` int(5) NOT NULL,
  `huruf_nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `uts`
--

INSERT INTO `uts` (`npm_nilai`, `nama_nilai`, `kelas_nilai`, `uts_nilai`, `huruf_nilai`) VALUES
(1203030, 'Anandha Ika Setyanti', '2b D3 TI', 95, 'A'),
(1203036, 'Suci Rahma Rosa', '2b D3 TI', 95, 'A'),
(1203037, 'Sri Gustina Situmeang', '2b D3 TI', 95, 'A');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `uts`
--
ALTER TABLE `uts`
  ADD PRIMARY KEY (`npm_nilai`,`nama_nilai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
