-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2021 pada 08.19
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mocomanga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`email`, `username`, `password`) VALUES
('kirby@gmail.com', 'ilham', '123'),
('mochammadilham.afriandhi@gmail.com', 'ile', '123'),
('sdfdsf', 'ddgfd', '334'),
('wsgg', 'wrchjo', '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre`
--

CREATE TABLE `genre` (
  `id_genre` varchar(20) NOT NULL,
  `id_manga` varchar(100) NOT NULL,
  `nama_genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `manga`
--

CREATE TABLE `manga` (
  `id_manga` varchar(20) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `cover` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mylist`
--

CREATE TABLE `mylist` (
  `email` varchar(100) NOT NULL,
  `id_manga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`),
  ADD KEY `FK_MANGA` (`id_manga`);

--
-- Indeks untuk tabel `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`id_manga`);

--
-- Indeks untuk tabel `mylist`
--
ALTER TABLE `mylist`
  ADD KEY `FK_EMAIL` (`email`),
  ADD KEY `FK_MANGALIS` (`id_manga`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `genre`
--
ALTER TABLE `genre`
  ADD CONSTRAINT `FK_MANGA` FOREIGN KEY (`id_manga`) REFERENCES `manga` (`id_manga`);

--
-- Ketidakleluasaan untuk tabel `mylist`
--
ALTER TABLE `mylist`
  ADD CONSTRAINT `FK_EMAIL` FOREIGN KEY (`email`) REFERENCES `account` (`email`),
  ADD CONSTRAINT `FK_MANGALIS` FOREIGN KEY (`id_manga`) REFERENCES `manga` (`id_manga`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
