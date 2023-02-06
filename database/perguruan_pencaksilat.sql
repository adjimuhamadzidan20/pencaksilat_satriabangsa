-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Feb 2023 pada 14.30
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perguruan_pencaksilat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_anggota`
--

CREATE TABLE `dt_anggota` (
  `ID_anggota` int(10) NOT NULL,
  `Nama_lengkap` varchar(100) NOT NULL,
  `Jenis_kelamin` varchar(15) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Sabuk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_cabang`
--

CREATE TABLE `dt_cabang` (
  `ID_cabang` int(10) NOT NULL,
  `Nama_cabang` varchar(100) NOT NULL,
  `Penanggung_jawab` varchar(100) NOT NULL,
  `Jumlah_anggota` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_jadwal_latihan`
--

CREATE TABLE `dt_jadwal_latihan` (
  `ID_latihan` int(10) NOT NULL,
  `Hari` varchar(20) NOT NULL,
  `ID_pelatih` int(10) NOT NULL,
  `ID_cabang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_keuangan`
--

CREATE TABLE `dt_keuangan` (
  `ID_keuangan` int(10) NOT NULL,
  `Tanggal_Pembayaran` varchar(20) NOT NULL,
  `Nominal` int(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL,
  `ID_anggota` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_pelatih`
--

CREATE TABLE `dt_pelatih` (
  `ID_pelatih` int(10) NOT NULL,
  `Nama_pelatih` varchar(100) NOT NULL,
  `Tanggal_lahir` varchar(20) NOT NULL,
  `Jenis_kelamin` varchar(15) NOT NULL,
  `Sabuk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dt_anggota`
--
ALTER TABLE `dt_anggota`
  ADD PRIMARY KEY (`ID_anggota`);

--
-- Indeks untuk tabel `dt_cabang`
--
ALTER TABLE `dt_cabang`
  ADD PRIMARY KEY (`ID_cabang`);

--
-- Indeks untuk tabel `dt_jadwal_latihan`
--
ALTER TABLE `dt_jadwal_latihan`
  ADD PRIMARY KEY (`ID_latihan`),
  ADD KEY `ID_pelatih` (`ID_pelatih`),
  ADD KEY `ID_cabang` (`ID_cabang`);

--
-- Indeks untuk tabel `dt_keuangan`
--
ALTER TABLE `dt_keuangan`
  ADD PRIMARY KEY (`ID_keuangan`),
  ADD KEY `ID_anggota` (`ID_anggota`);

--
-- Indeks untuk tabel `dt_pelatih`
--
ALTER TABLE `dt_pelatih`
  ADD PRIMARY KEY (`ID_pelatih`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dt_anggota`
--
ALTER TABLE `dt_anggota`
  MODIFY `ID_anggota` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1086;

--
-- AUTO_INCREMENT untuk tabel `dt_cabang`
--
ALTER TABLE `dt_cabang`
  MODIFY `ID_cabang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1115;

--
-- AUTO_INCREMENT untuk tabel `dt_jadwal_latihan`
--
ALTER TABLE `dt_jadwal_latihan`
  MODIFY `ID_latihan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dt_keuangan`
--
ALTER TABLE `dt_keuangan`
  MODIFY `ID_keuangan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dt_pelatih`
--
ALTER TABLE `dt_pelatih`
  MODIFY `ID_pelatih` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1224;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dt_jadwal_latihan`
--
ALTER TABLE `dt_jadwal_latihan`
  ADD CONSTRAINT `dt_jadwal_latihan_ibfk_1` FOREIGN KEY (`ID_pelatih`) REFERENCES `dt_pelatih` (`ID_pelatih`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dt_jadwal_latihan_ibfk_2` FOREIGN KEY (`ID_cabang`) REFERENCES `dt_cabang` (`ID_cabang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dt_keuangan`
--
ALTER TABLE `dt_keuangan`
  ADD CONSTRAINT `dt_keuangan_ibfk_1` FOREIGN KEY (`ID_anggota`) REFERENCES `dt_anggota` (`ID_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
