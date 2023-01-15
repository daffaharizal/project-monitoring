-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jan 2023 pada 08.04
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_monitoring`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_project_monitoring`
--

CREATE TABLE `tabel_project_monitoring` (
  `id` int(50) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `client` varchar(50) NOT NULL,
  `project_leader` varchar(50) NOT NULL,
  `leader_email` varchar(50) NOT NULL,
  `progress` int(10) NOT NULL,
  `end_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_project_monitoring`
--

INSERT INTO `tabel_project_monitoring` (`id`, `start_date`, `project_name`, `client`, `project_leader`, `leader_email`, `progress`, `end_date`) VALUES
(2, '14 Jan 2022', 'Pembuatan SI Keuangan', 'Indra Setiawan', 'Indra Setiawan', 'indra.setiawan@gmail.com', 30, '14 Agu 2022'),
(4, '30 jan 2022', 'Learning Management System', 'Ruang Guru', 'Hilman Syaputera', 'hilman.syah@gmail.com', 80, '10 Mar 2022'),
(6, '02 Feb 2022', 'SI Pendataan Atlet Daerah', 'Dispora Jawa Timur', 'Febri  Gunawan', 'febri.gunawan@gmail.com', 40, '30 Mei 2022'),
(8, '02 Sep 2021', 'Employee Monitoring', 'PT. Bina Sarana Sukses', 'Handoko Aji', 'handoko.aji@gmail.com', 100, '15 Jan 2022'),
(40, '15 Jan 2023', 'Aplikasi Sisfo Campus', 'Palcomtech', 'LOKO IT', 'loko.it@gmail.com', 60, '15 Mei 2023'),
(41, '12 Des 2022', 'Aplikasi Pengelolaan Stok Gudang', 'JNE Irigasi', 'Daffa Harizal Fitri', 'harizal.daffa46@gmail.com', 100, '12 Jan 2023'),
(42, '02 Jan 2023', 'Sistem Informasi Elektronik', 'Koko Beni', 'Sofian Wardana', 'wardana@gmail.com', 70, '12 Mar 2023');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_project_monitoring`
--
ALTER TABLE `tabel_project_monitoring`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_project_monitoring`
--
ALTER TABLE `tabel_project_monitoring`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
