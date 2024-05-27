-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2024 pada 02.48
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tamu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tamu`
--

CREATE TABLE `data_tamu` (
  `NO` int(11) NOT NULL,
  `NAMA` text NOT NULL,
  `INSTANSI` text NOT NULL,
  `ALAMAT` text NOT NULL,
  `TUJUAN` text NOT NULL,
  `WA` text NOT NULL,
  `DATE` date NOT NULL,
  `CVC` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_tamu`
--

INSERT INTO `data_tamu` (`NO`, `NAMA`, `INSTANSI`, `ALAMAT`, `TUJUAN`, `WA`, `DATE`, `CVC`) VALUES
(13, 'TIM RPL SMKN 2 SUBANG', 'SMKN 2 SUBANG', 'DANGDEUR', 'PRAKTEK KERJA LAPANGAN', '083812345678', '2024-05-21', '10:56:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_tamu`
--
ALTER TABLE `data_tamu`
  ADD PRIMARY KEY (`NO`),
  ADD UNIQUE KEY `NAMA` (`NAMA`,`INSTANSI`,`ALAMAT`,`TUJUAN`,`WA`,`DATE`,`CVC`) USING HASH;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_tamu`
--
ALTER TABLE `data_tamu`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
