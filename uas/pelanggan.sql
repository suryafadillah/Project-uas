-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2024 pada 17.05
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `no_antrian` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `nomorhp` varchar(15) NOT NULL,
  `berat` int(10) NOT NULL,
  `jenis_pesanan` varchar(150) NOT NULL,
  `catatan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`no_antrian`, `nama`, `alamat`, `nomorhp`, `berat`, `jenis_pesanan`, `catatan`) VALUES
(223, 'Surya', 'Kisaran', '8888', 4, 'Cuci Gosok', 'Di ambil 23/3/2024 jam 09.00'),
(677, 'Izat', 'kisaran', '08888', 1, 'Cuci gosok', 'Di ambil 21/4/2024 jam 09.00'),
(678, 'Ipin', 'Kisaran', '8888', 8, 'Cuci Kering', 'Di ambil 2/4/2024 jam 15.00'),
(777, 'Jarwo', 'Kisaran', '8888', 1, 'Cuci gosok', 'Di ambil 7/4/2024 jam 09.00'),
(788, 'Tok dalang', 'kisaran', '8888', 8, 'Cuci Lipat', 'Di ambil 15/4/2024 jam 08.00'),
(989, 'Upin', 'Kisaran', '8888', 8, 'Cuci Lipat', 'Di ambil 30/3/2024 jam 11.00'),
(998, 'Kak Ros', 'Durian runtuh', '8888', 7, 'Cuci lipat', 'Di ambil 10/4/2024 jam 17.00'),
(999, 'Raju', 'Aek bamban', '08888', 9, 'Cuci Lipat', 'Di ambil 20/4/2024 jam 16.00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`no_antrian`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `no_antrian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
