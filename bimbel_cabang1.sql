-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2018 at 04:12 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimbel_cabang1`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `kode` char(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `mapel` varchar(30) NOT NULL,
  `id_cabang` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`kode`, `nama`, `email`, `no_hp`, `mapel`, `id_cabang`) VALUES
('YA', 'Yusuf Alli', 'yaaaaa@gmail.com', '087737373737', 'Matematika', 'ML1');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `kode` int(11) NOT NULL,
  `id_kelas` char(10) NOT NULL,
  `id_ruang` char(10) NOT NULL,
  `id_guru` char(10) NOT NULL,
  `hari` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kode` char(10) NOT NULL,
  `id_program` char(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kuota` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kode`, `id_program`, `nama`, `kuota`) VALUES
('SBMPTNA', 'SBMPTN', 'Kelas SBMPTN A', '25'),
('XIA', 'XIR', 'Kelas 11 A', '30');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `kode` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `nama_ortu` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `no_hp_ortu` varchar(20) NOT NULL,
  `id_program` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`kode`, `nama`, `alamat`, `email`, `no_hp`, `sekolah`, `nama_ortu`, `status`, `no_hp_ortu`, `id_program`) VALUES
(1, 'Dofa', 'Kiping', 'dofareng@gmail.com', '0852237373737', 'Boyolangu', 'Hadi', 'siswa', '0876636626262', 'XIR'),
(2, 'Acun2', 'Malang', 'acun@gmail.com', '09999299999', 'Malang', 'Harjo', 'siswa', '029292929', 'SBMPTN');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `kode` char(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tingkat` varchar(20) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`kode`, `nama`, `tingkat`, `keterangan`, `harga`) VALUES
('SBMPTN', 'Paket SBMPTN', '12', 'ini paket sbm', '90000'),
('XIR', 'Paket Kelas 11 Regular', '11 SMA', 'Regular Kelas XI SMA', '1200000');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `kode` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`kode`, `nama`) VALUES
('R001', 'Ruang 1'),
('R002', 'Ruang 2'),
('R003', 'Ruang 3');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `kode` int(11) NOT NULL,
  `id_daftar` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `id_cabang` char(10) NOT NULL,
  `id_kelas` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`kode`, `id_daftar`, `nama`, `email`, `no_hp`, `alamat`, `id_cabang`, `id_kelas`) VALUES
(1, 2, 'Acun2', 'acun@gmail.com', '09999299999', 'Malang', 'ML1', 'SBMPTNA');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kode` int(11) NOT NULL,
  `id_daftar` int(10) NOT NULL,
  `bayar` varchar(20) NOT NULL,
  `kurang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_ruang` (`id_ruang`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `id_program` (`id_program`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `id_program` (`id_program`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `id_daftar` (`id_daftar`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `id_daftar` (`id_daftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`kode`),
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`kode`),
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`kode`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_program`) REFERENCES `program` (`kode`);

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`id_program`) REFERENCES `program` (`kode`),
  ADD CONSTRAINT `pendaftaran_ibfk_2` FOREIGN KEY (`id_program`) REFERENCES `program` (`kode`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_daftar`) REFERENCES `pendaftaran` (`kode`),
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`kode`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_daftar`) REFERENCES `pendaftaran` (`kode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
