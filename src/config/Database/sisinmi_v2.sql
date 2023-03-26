-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Mar 2023 pada 15.27
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisinmi_v2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `absensi_id` int(11) NOT NULL,
  `npm` int(11) NOT NULL,
  `kode_matakuliah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_hadir` varchar(255) NOT NULL,
  `nilai` varchar(3) NOT NULL,
  `nilai_bobot` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`absensi_id`, `npm`, `kode_matakuliah`, `tanggal`, `jumlah_hadir`, `nilai`, `nilai_bobot`) VALUES
(8, 1184077, 123566, '2023-03-21', '14', 'B', '3'),
(9, 1184057, 1158428, '2023-03-21', '13', 'A', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_acara`
--

CREATE TABLE `berita_acara` (
  `bap_id` int(11) NOT NULL,
  `jumlah_hadir` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `nama_matakuliah` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `topik` text NOT NULL,
  `hasil_pembelajran` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita_acara`
--

INSERT INTO `berita_acara` (`bap_id`, `jumlah_hadir`, `id_karyawan`, `nama_matakuliah`, `tanggal`, `jam_mulai`, `jam_selesai`, `topik`, `hasil_pembelajran`, `status`) VALUES
(9, 45, 201565, 'GIS', '2023-03-26', '16:16:00', '17:16:00', 'GIS', 'PENGENALAN GIS', 'Cancel'),
(10, 45, 201562, 'Algoritma 1', '2023-03-26', '15:18:00', '17:18:00', 'Flowmap', 'Flowchart', 'Pending'),
(11, 35, 201564, 'Algoritma 1', '2023-03-26', '15:20:00', '15:20:00', 'Flowmap', 'Algoritman Flowchart', 'Approved');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','dosen','kaprodi','baak') NOT NULL,
  `no_handphone` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_lengkap`, `nip`, `tanggal_lahir`, `email`, `password`, `role`, `no_handphone`, `alamat`) VALUES
(201562, 'Ucok Prasetyi', '17216313613', '2023-03-16', 'ucok@gmail.com', 'ulbi123', 'admin', '0123131313', 'Cimahi\r\n'),
(201564, 'Agus Comel', '189441165198198', '2023-03-01', 'comel@gmail.com', '', 'kaprodi', '025887898587', 'Cibiru'),
(201565, 'Ariq Rafi', '8228855', '2023-02-13', 'ariq@gmail.com', 'ulbi123', 'admin', '02121215454', 'Cilandak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `program_studi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_handphone` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama_lengkap`, `program_studi`, `email`, `no_handphone`, `alamat`) VALUES
(1184057, 'Ariq Rai', 'D3 Manajemen Informatika', 'rai@gmail.com', '852853460', 'Cirebon'),
(1184077, 'Arkafa', 'D3 Manajemen Informatika', 'arkaf@gmail.com', '815205845515', 'Jekardah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_matakuliah` int(11) NOT NULL,
  `nama_matakuliah` varchar(255) NOT NULL,
  `sks` int(11) NOT NULL,
  `program_studi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`kode_matakuliah`, `nama_matakuliah`, `sks`, `program_studi`) VALUES
(123566, 'Algoritma 1', 4, 'D3 Manajemen Informatika'),
(1158428, 'GIS', 3, 'D3 Manajemen Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','baak','kaprodi','dosen') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_karyawan`, `email`, `password`, `role`) VALUES
(30, 201250, 'militer@gmail.com', 'ulbi123', 'dosen'),
(33, 201562, 'ucok@gmail.com', 'ulbi123', 'admin'),
(36, 201561, 'nugroho@gmail.com', 'ulbi123', 'baak'),
(37, 201565, 'ariq@gmail.com', 'ulbi123', 'baak'),
(38, 20213, 'kaprodi@gmail.com', 'ulbi123', 'kaprodi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`absensi_id`);

--
-- Indeks untuk tabel `berita_acara`
--
ALTER TABLE `berita_acara`
  ADD PRIMARY KEY (`bap_id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kode_matakuliah`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_karyawan` (`id_karyawan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `absensi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `berita_acara`
--
ALTER TABLE `berita_acara`
  MODIFY `bap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201566;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `npm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1184078;

--
-- AUTO_INCREMENT untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `kode_matakuliah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1158429;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
