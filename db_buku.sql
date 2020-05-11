-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Bulan Mei 2020 pada 16.58
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `penulis` varchar(225) NOT NULL,
  `penerbit` varchar(225) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `stock` int(11) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `kode_buku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_buku`
--

INSERT INTO `tbl_buku` (`id`, `judul`, `penulis`, `penerbit`, `tahun`, `stock`, `harga`, `kode_buku`) VALUES
(1, 'Laskar Pelangi', 'Andrea Hirata', 'Bintang Pustaka ', '2005', 2, '100000', 'LP01'),
(2, 'Edensor', 'Andrea Hirata', 'Bintang Pustaka', '2007', 2, '100000', 'ED01'),
(3, 'Promise', 'Dwitasari', 'Loveable', '2016', 1, '125000', 'P001'),
(4, 'Rumah Kaca', 'Pramoedya Ananta Toer', 'Lentera Dipantera', '2010', 5, '130000', 'RK01'),
(5, 'Koala Kumal', 'Raditya Dika', 'Gagas Media', '2015', 2, '100000', 'KK01'),
(6, '5 Cm', 'Dhonny Dhirgantoro', 'PT. Grasindo, Yogyakarta', '2005', 3, '130000', '5CM01'),
(7, 'Surat Kecil untuk Tuhan', 'Agnes Davonar', 'Inandra Published', '2008', 1, '150000', 'SKUT01'),
(8, 'Negeri 5 Menara', 'Ahmad Fuadi', 'PT. Gramedia Pustaka Utama', '2019', 2, '160000', 'N5M01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
