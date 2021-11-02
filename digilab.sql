-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Okt 2021 pada 06.33
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digilab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbanggota`
--

CREATE TABLE `tbanggota` (
  `idanggota` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbanggota`
--

INSERT INTO `tbanggota` (`idanggota`, `nama`, `jeniskelamin`, `alamat`, `status`) VALUES
('AG001', 'Syahril', 'Pria', 'Pandeglang', 'Tidak Meminjam'),
('AG002', 'Hidayat', 'Pria', 'Banten', 'Tidak Meminjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbuku`
--

CREATE TABLE `tbbuku` (
  `idbuku` varchar(10) NOT NULL,
  `judul` varchar(64) NOT NULL,
  `kategori` varchar(64) NOT NULL,
  `pengarang` varchar(64) NOT NULL,
  `penerbit` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbbuku`
--

INSERT INTO `tbbuku` (`idbuku`, `judul`, `kategori`, `pengarang`, `penerbit`) VALUES
('BK001', 'Web Programing', 'Ilmu Komputer', 'Syahril Hidayat', 'Media Cetak'),
('BK002', 'Cyber Security', 'Ilmu Komputer', 'Syahril Hidayat', 'Media Cetak'),
('BK003', 'Web Hacking', 'Ilmu Komputer', 'Syahril Hidayat', 'Media Cetak'),
('BK004', 'Laravel 8 For Beginer', 'Ilmu Komputer', 'Syahril Hidayat', 'Media Cetak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtransaksi`
--

CREATE TABLE `tbtransaksi` (
  `idtransaksi` varchar(20) NOT NULL,
  `idanggota` varchar(5) NOT NULL,
  `idbuku` varchar(10) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbtransaksi`
--

INSERT INTO `tbtransaksi` (`idtransaksi`, `idanggota`, `idbuku`, `tgl_peminjaman`, `tgl_pengembalian`) VALUES
('TR001', 'AG001', 'BK001', '2021-10-25', '2021-10-28'),
('TR004', 'AG002', 'BK005', '2021-10-26', '2021-10-27'),
('TR005', 'AG001', 'BK002', '2021-10-26', '2021-10-26'),
('TR006', 'AG001', 'BK003', '2021-10-26', '2021-10-27'),
('TR007', 'AG001', 'BK004', '2021-10-27', NULL),
('TR008', 'AG001', 'BK003', '2021-10-27', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbusers`
--

CREATE TABLE `tbusers` (
  `iduser` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `alamat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbusers`
--

INSERT INTO `tbusers` (`iduser`, `nama`, `username`, `password`, `alamat`) VALUES
(1, 'Syahril Hidayat', 'admin', 'admin', 'Banten');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbanggota`
--
ALTER TABLE `tbanggota`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indeks untuk tabel `tbbuku`
--
ALTER TABLE `tbbuku`
  ADD PRIMARY KEY (`idbuku`);

--
-- Indeks untuk tabel `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  ADD PRIMARY KEY (`idtransaksi`);

--
-- Indeks untuk tabel `tbusers`
--
ALTER TABLE `tbusers`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbusers`
--
ALTER TABLE `tbusers`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
