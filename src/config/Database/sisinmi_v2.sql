-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Mar 2023 pada 06.23
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `nilai_bobot` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`absensi_id`, `npm`, `kode_matakuliah`, `tanggal`, `jumlah_hadir`, `nilai`, `nilai_bobot`) VALUES
(1, 1184000, 1, '2023-03-15', 'Hadir\r\n', '', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_acara`
--

CREATE TABLE `berita_acara` (
  `bap_id` int(11) NOT NULL,
  `absensi_id` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `kode_matakuliah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jam_selesai` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `topik` text NOT NULL,
  `hasil_pembelajran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(201561, 'Ilham Nugroho', '852041852', '2000-12-09', 'nugroho@gmail.com', 'ulbi123', 'dosen', '087812768954', 'Cirebon\r\n'),
(201562, 'Ucok Prasetya', '17216313613', '2023-03-16', 'ucok@gmail.com', 'ulbi123', 'admin', '0123131313', 'Cimahi\r\n'),
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
(1184000, 'Ariq Rai Kusumah', 'TI', 'ariq@gmail.com', '5813218120', 'Bandung'),
(1184001, 'Ilham Dwi', 'Ti', 'ilha@gmial.com', '.0649856123', 'Bali'),
(1184057, 'Nugroho', 'Manajemen Informatik', 'nugnug@gmail.com', '0998888222', 'Cikujang');

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
(1, 'GIS', 4, 'Manajemen Informatika');

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
(34, 201561, 'nugroho@gmail.com', 'ulbi123', 'dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`absensi_id`),
  ADD UNIQUE KEY `npm` (`npm`),
  ADD UNIQUE KEY `kode_matakuliah` (`kode_matakuliah`);

--
-- Indexes for table `berita_acara`
--
ALTER TABLE `berita_acara`
  ADD PRIMARY KEY (`bap_id`),
  ADD UNIQUE KEY `absensi_id` (`absensi_id`),
  ADD UNIQUE KEY `id_karyawan` (`id_karyawan`),
  ADD UNIQUE KEY `kode_matakuliah` (`kode_matakuliah`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kode_matakuliah`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_karyawan` (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `absensi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita_acara`
--
ALTER TABLE `berita_acara`
  MODIFY `bap_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201566;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `npm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1184058;
--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `kode_matakuliah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `mahasiswa` (`npm`),
  ADD CONSTRAINT `absensi_ibfk_2` FOREIGN KEY (`kode_matakuliah`) REFERENCES `matakuliah` (`kode_matakuliah`);

--
-- Ketidakleluasaan untuk tabel `berita_acara`
--
ALTER TABLE `berita_acara`
  ADD CONSTRAINT `berita_acara_ibfk_1` FOREIGN KEY (`absensi_id`) REFERENCES `absensi` (`absensi_id`),
  ADD CONSTRAINT `berita_acara_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`),
  ADD CONSTRAINT `berita_acara_ibfk_3` FOREIGN KEY (`kode_matakuliah`) REFERENCES `matakuliah` (`kode_matakuliah`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
