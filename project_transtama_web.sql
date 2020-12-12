-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Nov 2020 pada 06.54
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_transtama_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `driver`
--

CREATE TABLE `driver` (
  `idDriver` int(11) NOT NULL,
  `namaDriver` varchar(100) NOT NULL,
  `ktp` int(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kondisiSupir` varchar(25) NOT NULL,
  `cekSupir` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `driver`
--

INSERT INTO `driver` (`idDriver`, `namaDriver`, `ktp`, `alamat`, `kondisiSupir`, `cekSupir`) VALUES
(14, 'soponoooo', 2147483646, 'Jalan Margonda Raya No.152', 'Baik', 'Tidak Ada'),
(15, 'iqbal', 234234234, 'jalan kramat jaya', 'Baik', 'Tidak Ada'),
(16, 'arie', 324234234, 'jalan kedung', 'Baik', 'Ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `idKendaraan` int(11) NOT NULL,
  `namaKendaraan` varchar(100) NOT NULL,
  `merkKendaraan` varchar(100) NOT NULL,
  `bahanBakar` varchar(100) NOT NULL,
  `tglPajak` varchar(100) NOT NULL,
  `platKendaraan` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`idKendaraan`, `namaKendaraan`, `merkKendaraan`, `bahanBakar`, `tglPajak`, `platKendaraan`) VALUES
(1, 'Kijang', 'Innova', 'Bensin', '27-03-2019', 'B 1391 RF'),
(2, 'Kijang', 'Innova', 'Bensin', '27-03-2019', 'B 1392 RF'),
(3, 'Kijang', 'Innova', 'Bensin', '27-03-2019', 'B 1013 RF'),
(4, 'Kijang', 'Innova', 'Bensin', '15-04-2019', 'B 2645 SQ'),
(5, 'Toyota', 'Avanza', 'Bensin', '29-11-2018', 'B 2196 SQ'),
(6, 'Honda', 'Honda Stream', 'Bensin', '13-04-2019', 'B 1432 GQ'),
(7, 'Hyundai', 'Trajet', 'Bensin', '20-04-2019', 'B 1091 WQ'),
(8, 'Hyundai', 'Trajet', 'Bensin', '20-04-2019', 'B 1092 WQ'),
(9, 'Kijang ', 'Kijang Kapsul', 'Bensin', '09-09-2019', 'B 2376 JQ'),
(10, 'YamahMUD', 'Mio', 'Bensin', '30-11-2018', 'B 3497 ST');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi_log`
--

CREATE TABLE `mutasi_log` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `status_karyawan` varchar(255) NOT NULL,
  `perubahan_status` varchar(255) NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `tanggal_status` date NOT NULL,
  `tanggal_gaji` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mutasi_log`
--

INSERT INTO `mutasi_log` (`id`, `status`, `FullName`, `status_karyawan`, `perubahan_status`, `divisi`, `jabatan`, `tanggal_status`, `tanggal_gaji`) VALUES
(1, 'TAMBAH', 'Abdul Rifai Natanegara', 'Calon Pegawai', 'Promosi', 'Finance', 'Staff', '2016-01-01', '2016-01-01'),
(2, 'UPDATE', 'Abdul Rifai Natanegara', 'Pegawai', 'Promosi', 'Finance', 'Staff', '2016-02-01', '2016-02-01'),
(3, 'TAMBAH', 'Anita Ratnasari', 'Pegawai', 'Promosi', 'Finance', 'Staff', '2017-02-01', '2017-02-01'),
(4, 'UPDATE', 'Anita Ratnasari', 'Pegawai', 'Promosi', 'Finance', 'Manager ', '2018-02-01', '2018-02-01'),
(5, 'UPDATE', 'Anita Ratnasari', 'Pegawai', 'Mutasi', 'Marketing', 'Supervisor', '2019-02-01', '2019-02-01'),
(6, 'UPDATE', 'Anita Ratnasari', 'Pegawai', 'Demosi', 'Marketing', 'Staff', '2019-02-01', '2019-02-01'),
(7, 'UPDATE', 'Abdul Rifai Natanegara', 'Pegawai', 'Promosi', 'Finance', 'Supervisor', '2017-02-01', '2017-02-01'),
(8, 'UPDATE', 'Abdul Rifai Natanegara', 'Pegawai', 'Mutasi', 'Marketing', 'Staff', '2018-02-01', '2018-02-01'),
(9, 'UPDATE', 'Anita Ratnasari', 'Pegawai', 'Mutasi', 'International Network', 'Staff', '2019-11-01', '2019-11-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `idPegawai` int(200) NOT NULL,
  `namaPegawai` varchar(200) NOT NULL,
  `jabatanPegawai` varchar(200) NOT NULL,
  `statusPegawai` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`idPegawai`, `namaPegawai`, `jabatanPegawai`, `statusPegawai`) VALUES
(5, 'Prof. Muchlisin Arief, Ph.D.', 'CEO Lapan', 'Aktif'),
(6, 'Dr. Wikanti Asriningrum, M.Si', 'CTO Lapan', 'Aktif'),
(7, 'Ir. Wawan Kusnawan Harsanugraha, M.Si.', 'CEO Pusfatja', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeliharaan`
--

CREATE TABLE `pemeliharaan` (
  `idPemeliharaan` int(11) NOT NULL,
  `platKendaraan` varchar(20) NOT NULL,
  `oliMesin` varchar(100) NOT NULL,
  `airRadiator` varchar(100) NOT NULL,
  `kondisiRem` varchar(100) NOT NULL,
  `kondisiAccu` varchar(100) NOT NULL,
  `kondisiLampu` varchar(100) NOT NULL,
  `statusMobil` enum('Available','Service') NOT NULL,
  `cekMobil` varchar(25) NOT NULL,
  `tglPrint` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemeliharaan`
--

INSERT INTO `pemeliharaan` (`idPemeliharaan`, `platKendaraan`, `oliMesin`, `airRadiator`, `kondisiRem`, `kondisiAccu`, `kondisiLampu`, `statusMobil`, `cekMobil`, `tglPrint`) VALUES
(1, 'B 1391 RF', 'YA', 'YA', 'YA', 'YA', 'YA', 'Available', 'Tersedia', '2017-11-10'),
(2, 'B 1392 RF', 'TIDAK', 'YA', 'YA', 'YA', 'YA', 'Service', 'Tersedia', '2018-10-11'),
(3, 'B 1013 RF', 'YA', 'YA', 'YA', 'YA', 'YA', 'Available', 'TidakTersedia', '2017-10-09'),
(4, 'B 2645 SQ', 'YA', 'YA', 'YA', 'YA', 'YA', 'Available', 'Tersedia', '2018-11-11'),
(5, 'B 1091 WQ', 'YA', 'YA', 'YA', 'YA', 'TIDAK', 'Service', 'Tersedia', '2018-08-11'),
(6, 'B 1432 GQ', 'YA', 'YA', 'YA', 'YA', 'YA', 'Available', 'Tidak Tersedia', '2018-11-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pribadi_karyawan`
--

CREATE TABLE `pribadi_karyawan` (
  `id` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `NIK` varchar(255) NOT NULL,
  `noKK` varchar(255) NOT NULL,
  `noBPJSkesehatan` varchar(255) NOT NULL,
  `noBPJSketenagakerjaan` varchar(255) NOT NULL,
  `noNPWP` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pribadi_karyawan`
--

INSERT INTO `pribadi_karyawan` (`id`, `FullName`, `NIK`, `noKK`, `noBPJSkesehatan`, `noBPJSketenagakerjaan`, `noNPWP`, `foto`) VALUES
(1, 'Abdul Rifai Natanegara', '317412199012', '3175112199012', '0001454326918', '12345678901 000', '91.279.119.1-1289', 'PngItem_42408.png'),
(2, 'Anita Ratnasari', '317412179012', '3175112189012', '0121454326918', '154345678901 000', '91.589.129.1-1289', 'face-avatar-boy-man-male-1.png'),
(3, 'Fathimah Hilda Nur Fitriyani', '317412199012', '715223781221', '00014543269112', '000145432691212', '91.279.119.1-1289', 'foto42.jpg'),
(4, 'Fitria Rahmawati Chaerunissa', '317456211199812', '712523287129121', '0001454322269112', '00121454322269112', '921.589.129.1-1289', 'foto32.jpg'),
(5, 'Rahayu Putri Salsabila', '3174121790444', '3174121790442', '156238812131', '12345678901 000', '941.589.129.1-1289', 'foto1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_karyawan`
--

CREATE TABLE `tabel_karyawan` (
  `id` int(255) NOT NULL,
  `NIP` varchar(255) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `usia` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `Jabatan` varchar(255) NOT NULL,
  `MobileNo` varchar(255) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `lama_bekerja` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kode_pos` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_karyawan`
--

INSERT INTO `tabel_karyawan` (`id`, `NIP`, `FullName`, `agama`, `usia`, `status`, `tempat_lahir`, `tanggal_lahir`, `gender`, `divisi`, `Jabatan`, `MobileNo`, `EmailAddress`, `tanggal_masuk`, `lama_bekerja`, `alamat`, `kode_pos`, `foto`) VALUES
(1, '1308121', 'Abdul Rifai Natanegara', 'Islam', '29', 'Married', 'Jakarta', '1990-11-12', 'Laki-laki', 'International Network', 'Manager', '087892912451', 'abdulrifai90@gmail.com', '2013-08-12', '7', 'Jl. KH Agus Salim 16, Sabang, Menteng Jakarta Pusat', '10110', 'PngItem_424084.png'),
(2, '1708112', 'Anita Ratnasari', 'Islam', '24', 'Single', 'Bandung', '1995-12-01', 'Perempuan', 'Finance', 'Staff', '089612345217', 'anita_ratnasari@gmail.com', '2017-08-11', '3', 'Jalan Bukit Arco Kel. Cipete Selatan, Cilandak Kota Jakarta Selatan 12410', '12210', 'asian-1294777_6405.png'),
(3, '1708112', 'Anita Ratnasari', 'Islam', '24', 'Single', 'Jakarta Pusat', '1996-01-12', 'Perempuan', 'International Network', 'Staff', '087892912412', 'anita_ratnasari@gmail.com', '2017-01-12', '3', 'Jalan Asia Baru Kel. Duri Kepa, Kebon Jeruk Kota Jakarta Barat 11510', '10110', 'face-avatar-boy-man-male-13.png'),
(4, '05011012', 'Hary Djaja and Ratna Endang Hartatiek', 'Kristen', '49', 'Married', 'Medan, Sumatra Utara', '1970-12-01', 'Laki-laki', 'Marketing', 'Operational Direktur', '08125678123', 'hary_djaja70@gmail.com', '2005-11-01', '15', 'Jalan Bukit Asri Kel. Kalideres, Kalideres Kota Jakarta Barat 11840', '10110', 'face-avatar-man-male-nerdy-13.png'),
(5, '08119812', 'Anna Solana Hamami Kadarachman', 'Kristen', '50', 'Married', 'Surabaya, Jawa Timur', '1969-11-12', 'Perempuan', 'Finance', 'Operational Direktur', '086798712512', 'annaholana96@gmail.com', '2008-12-02', '11', 'Jalan Bali 1 Kel. Kalideres, Kalideres Kota Jakarta Barat 11840 Zone : Kalideres  dan Jalan di Kalideres', '10110', 'Cartoon-Avatar-PNG-High-Quality-Image2.png'),
(6, '11082712', 'Henny Kusumawati Tanuhardja', 'Kristen', '30', 'Married', 'Jakarta, DKI Jakarta', '1990-08-21', 'Perempuan', 'Finance', 'Manager', '08781267812', 'henny78@gmail.com', '2011-09-01', '9', 'Jalan Bali 2 Kel. Kalideres, Kalideres Kota Jakarta Barat 11840', '10110', 'asian-1294777_6407.png'),
(7, '1601021', 'Fathimah Hilda Nur Fitriyani', 'Islam', '25', 'Single', 'Bandung, Jawa Barat', '1995-01-04', 'Perempuan', 'Finance', 'Staff', '08712721891', 'fathimah_zahra@gmail.com', '2016-02-01', '4', 'Jalan Cibubur 1 Kel. Cibubur, Ciracas Kota Jakarta Timur 13720', '13720', 'foto4.jpg'),
(8, '1811981', 'Fitria Rahmawati Chaerunissa', 'Islam', '26', 'Single', 'Surabaya, Jawa Timur', '1994-11-01', 'Perempuan', 'Key Account', 'Staff', '08712721891', 'fitria_rahmawati23@gmail.com', '2018-12-12', '1', 'Jalan Bunga Kel. Meruya Selatan, Kembangan Kota Jakarta Barat 11650', '10110', 'foto3.jpg'),
(9, '1901021', 'Rahayu Putri Salsabila', 'Islam', '22', 'Single', 'Surabaya, Jawa Timur', '1997-12-11', 'Perempuan', 'Finance', 'Staff', '08219765412', 'rahayurahmawati23@gmail.com', '2019-01-01', '1', 'Jl. KH Agus Salim 16, Sabang, Menteng Jakarta Pusat', ' 11850', 'foto1.jpg'),
(10, '0701021', 'Nurul Aini Indah ', 'Islam', '41', 'Married', 'Bogor, Jawa Barat', '1978-11-10', 'Perempuan', 'Finance', 'Operational Direktur', '08125678123', 'indah@gmail.com', '2007-01-12', '13', 'Jalan Bali 1 Kel. Kalideres, Kalideres Kota Jakarta Barat 11840 ', '12110', 'foto5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_mutasi`
--

CREATE TABLE `tabel_mutasi` (
  `id` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `status_karyawan` varchar(255) NOT NULL,
  `perubahan_status` varchar(255) NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `tanggal_status` date NOT NULL,
  `tanggal_gaji` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_mutasi`
--

INSERT INTO `tabel_mutasi` (`id`, `FullName`, `status_karyawan`, `perubahan_status`, `divisi`, `jabatan`, `tanggal_status`, `tanggal_gaji`) VALUES
(1, 'Abdul Rifai Natanegara', 'Pegawai', 'Mutasi', 'Marketing', 'Staff', '2018-02-01', '2018-02-01'),
(2, 'Anita Ratnasari', 'Pegawai', 'Mutasi', 'Finance', 'Staff', '2019-11-01', '2019-11-01');

--
-- Trigger `tabel_mutasi`
--
DELIMITER $$
CREATE TRIGGER `TAMBAH STATUS` AFTER INSERT ON `tabel_mutasi` FOR EACH ROW INSERT INTO mutasi_log (status, FullName, status_karyawan, perubahan_status, divisi, jabatan, tanggal_status, tanggal_gaji) VALUES ('TAMBAH', new.FullName, new.status_karyawan,new.perubahan_status, new.divisi, new.Jabatan, new.tanggal_status, new.tanggal_gaji)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `UPDATE` AFTER UPDATE ON `tabel_mutasi` FOR EACH ROW INSERT INTO mutasi_log (status, FullName, status_karyawan, perubahan_status, divisi, jabatan, tanggal_status, tanggal_gaji) VALUES ('UPDATE', new.FullName, new.status_karyawan,new.perubahan_status, new.divisi, new.Jabatan, new.tanggal_status, new.tanggal_gaji)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_upraisal`
--

CREATE TABLE `tabel_upraisal` (
  `id` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `abjad` varchar(10) NOT NULL,
  `angka` varchar(10) NOT NULL,
  `tanggal_penilaian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_upraisal`
--

INSERT INTO `tabel_upraisal` (`id`, `FullName`, `abjad`, `angka`, `tanggal_penilaian`) VALUES
(1, 'Abdul Rifai Natanegara', 'A', '9.00', '2015-01-12'),
(2, 'Anita Ratnasari', 'A', '9.00', '2019-01-09');

--
-- Trigger `tabel_upraisal`
--
DELIMITER $$
CREATE TRIGGER `TAMBAH NILAI` AFTER INSERT ON `tabel_upraisal` FOR EACH ROW INSERT INTO upraisal_log (FullName, status, abjad, angka, tanggal_penilaian) VALUES (new.FullName, 'TAMBAH', new.abjad,new.angka, new.tanggal_penilaian)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `UPDATE NILAI` AFTER UPDATE ON `tabel_upraisal` FOR EACH ROW INSERT INTO upraisal_log (FullName, status, abjad, angka, tanggal_penilaian) VALUES (new.FullName, 'UPDATE', new.abjad,new.angka, new.tanggal_penilaian)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `upraisal_log`
--

CREATE TABLE `upraisal_log` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `abjad` varchar(10) NOT NULL,
  `angka` varchar(10) NOT NULL,
  `tanggal_penilaian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `upraisal_log`
--

INSERT INTO `upraisal_log` (`id`, `status`, `FullName`, `abjad`, `angka`, `tanggal_penilaian`) VALUES
(1, 'TAMBAH', 'Abdul Rifai Natanegara', 'B', '8.10', '2014-01-12'),
(2, 'UPDATE', 'Abdul Rifai Natanegara', 'A', '9.00', '2015-01-12'),
(3, 'TAMBAH', 'Anita Ratnasari', 'B', '8.25', '2018-01-09'),
(4, 'UPDATE', 'Anita Ratnasari', 'A', '9.00', '2019-01-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(2) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `stuser` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `stuser`) VALUES
(1, 'Admin', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 'User', 'e10adc3949ba59abbe56e057f20f883e', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`idDriver`);

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`idKendaraan`);

--
-- Indeks untuk tabel `mutasi_log`
--
ALTER TABLE `mutasi_log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idPegawai`);

--
-- Indeks untuk tabel `pemeliharaan`
--
ALTER TABLE `pemeliharaan`
  ADD PRIMARY KEY (`idPemeliharaan`);

--
-- Indeks untuk tabel `pribadi_karyawan`
--
ALTER TABLE `pribadi_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_mutasi`
--
ALTER TABLE `tabel_mutasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_upraisal`
--
ALTER TABLE `tabel_upraisal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `upraisal_log`
--
ALTER TABLE `upraisal_log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `driver`
--
ALTER TABLE `driver`
  MODIFY `idDriver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `mutasi_log`
--
ALTER TABLE `mutasi_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `idPegawai` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pemeliharaan`
--
ALTER TABLE `pemeliharaan`
  MODIFY `idPemeliharaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pribadi_karyawan`
--
ALTER TABLE `pribadi_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tabel_mutasi`
--
ALTER TABLE `tabel_mutasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tabel_upraisal`
--
ALTER TABLE `tabel_upraisal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `upraisal_log`
--
ALTER TABLE `upraisal_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
