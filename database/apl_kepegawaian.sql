-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 02:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apl_kepegawaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `kode_agama` char(3) NOT NULL,
  `agama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`kode_agama`, `agama`) VALUES
('001', 'islam'),
('002', 'KRISTEN'),
('003', 'HINDU'),
('004', 'BUDHA'),
('005', 'KHONGHUCU');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `kode_cuti` char(5) NOT NULL,
  `jenis_cuti` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`kode_cuti`, `jenis_cuti`) VALUES
('001', 'Cuti Sakit'),
('002', 'Cuti Bersama'),
('003', 'Cuti Besar'),
('004', 'Cuti DiluarTanggungan Negara'),
('005', 'Cuti Karna Alasan Penting'),
('006', 'Cuti Melahirkan'),
('007', 'Cuti Tahunan');

-- --------------------------------------------------------

--
-- Table structure for table `datamutasi`
--

CREATE TABLE `datamutasi` (
  `id_mutasi` int(11) NOT NULL,
  `NIK` char(16) NOT NULL,
  `NamaPegawai` varchar(20) NOT NULL,
  `TanggalMutasi` date NOT NULL,
  `LampiranSurat` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datamutasi`
--

INSERT INTO `datamutasi` (`id_mutasi`, `NIK`, `NamaPegawai`, `TanggalMutasi`, `LampiranSurat`) VALUES
(1, '123456', 'udin', '2222-02-22', 0x6262672e6a7067),
(2, '123553', 'Aldi', '2022-12-21', 0x494d472d32303232303731382d5741303030342e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `datauser`
--

CREATE TABLE `datauser` (
  `username` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `namaUser` varchar(150) NOT NULL,
  `levelUser` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datauser`
--

INSERT INTO `datauser` (`username`, `password`, `namaUser`, `levelUser`) VALUES
('Admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin DPKPP', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id_golongan` int(11) NOT NULL,
  `kode_golongan` int(15) NOT NULL,
  `golongan` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id_golongan`, `kode_golongan`, `golongan`) VALUES
(1, 1, 'A/I'),
(2, 2, 'A/III'),
(3, 3, 'A/III'),
(4, 4, 'B/I'),
(5, 5, 'B/II'),
(6, 6, 'B/III');

-- --------------------------------------------------------

--
-- Table structure for table `kepegawaian`
--

CREATE TABLE `kepegawaian` (
  `id_pegawai` int(11) NOT NULL,
  `NIK` char(16) NOT NULL,
  `NIP` int(25) NOT NULL,
  `nama` char(50) NOT NULL,
  `tempat_lahir` char(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `agama` varchar(50) NOT NULL,
  `golongan` char(5) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tlp` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jenis_pegawai` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kepegawaian`
--

INSERT INTO `kepegawaian` (`id_pegawai`, `NIK`, `NIP`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `agama`, `golongan`, `alamat`, `no_tlp`, `email`, `jenis_pegawai`, `status`) VALUES
(2, '167107160496005', 2147483647, 'GARDILA SATYA NUR WIRASPAMA, S.Kom', 'Palembang', '1996-04-16', 'L', '', '', 'Gang Ciasem Barat No 225', 2147483647, 'wirasatya01@gmail.com', 'Umum', 'PNS'),
(3, '3208082910810001', 2147483647, 'DANI NUGRAHA, SE', 'Kuningan', '1982-02-28', 'L', '', '', 'Desa Garawangi', 2147483647, 'daninugraha@gmail.com', 'Kawasan Permukiman', 'PNS'),
(4, '3208091201670000', 2147483647, 'Ir.I.PUTU BAGIASNA,SE', 'Kuningan', '1979-12-09', 'L', '', '', 'jln.Cilame rt 14 rw03 Cigadung Kec.Cigugur Kab.Kuningan', 2147483647, 'putubagiasna560@gmail,com', 'pns', 'Kepala Dinas'),
(5, '3208092712780001', 2147483647, 'ASEP ANDRIYANA, SE.,M.Si', 'Kuningan', '1988-04-12', 'L', '', '', 'Rt 22, Rw 01 Link. Cikedung, Kel. Cirendang Kuningan', 2147483647, 'asepandri@gmail.com', 'Pertanahan', 'PNS'),
(6, '3208092901770002', 2147483647, 'Dadi Sunendi', 'Kuningan', '1989-05-21', 'L', '', '', 'rt 08,rw 05 link.aton kec.cijoho,Kuningan', 2147483647, 'dadisunendi08@gmail.com', 'PNS', 'Pertanahan'),
(7, '3208132704740000', 2147483647, 'Eman Herman,SE', 'Kuningan', '1987-03-24', 'L', '', '', 'Desa Bojong rt 17/06 Dusun Pon. Kec.Cilimus', 2147483647, 'hermanEman06@gmail.com', 'PNS', 'Keuangan'),
(8, '3208135010640010', 2147483647, 'Saidah', 'Kuningan', '1985-08-18', 'P', '', '', 'Desa Caracas,Cillmus', 2147483647, 'saidah20@gmail.com', 'PNS', 'Kawasan Permukiman'),
(9, '3208150406810003', 2147483647, 'INDA PRAHASTA, S.IP', 'Kuningan', '1989-09-15', 'L', '', '', 'Dusub Selajambe 2, Rt. 09, Rw. 02, Kec. Selajambe, Kab. Kuningan', 2147483647, 'indraprahasta@gmail.com', 'Perumahan', 'PNS'),
(10, '3208171803920003', 2147483647, 'ALEX CANDER, ST', 'Kuningan', '1992-03-18', 'L', '', '', 'Dusun Segog 12/03 Desa Karangsari, Darma', 2147483647, 'alexcander@gmail.com', 'Pertanahan', 'PNS'),
(11, '3208182905650002', 2147483647, 'ASEP SURYAMAN, SE', 'Kuningan', '1974-05-08', 'L', '', '', 'Jl. Cilame RT/RW 14/03 Cigadung Kab. Kuningan ', 2147483647, 'asepsuryaman12@gmail.com', 'Sekertaris Dinas', 'PNS');

-- --------------------------------------------------------

--
-- Table structure for table `naik_pangkat`
--

CREATE TABLE `naik_pangkat` (
  `id_pangkat` int(11) NOT NULL,
  `NIK` char(16) NOT NULL,
  `golongan` char(5) NOT NULL,
  `tmt_naik_pangkat` char(5) NOT NULL,
  `tanggal_pengajuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `naik_pangkat`
--

INSERT INTO `naik_pangkat` (`id_pangkat`, `NIK`, `golongan`, `tmt_naik_pangkat`, `tanggal_pengajuan`) VALUES
(1, '167107160496005', 'A/I', '2022-', '2022-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai_cuti`
--

CREATE TABLE `pegawai_cuti` (
  `id_cuti` int(11) NOT NULL,
  `NIK` char(16) NOT NULL,
  `jenis_cuti` varchar(50) NOT NULL,
  `Lama_cuti` varchar(10) NOT NULL,
  `Dari_tanggal` date NOT NULL,
  `Sampai_tanggal` date NOT NULL,
  `Foto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai_cuti`
--

INSERT INTO `pegawai_cuti` (`id_cuti`, `NIK`, `jenis_cuti`, `Lama_cuti`, `Dari_tanggal`, `Sampai_tanggal`, `Foto`) VALUES
(1, '1234', 'Cuti Bersama', '1 hari', '2022-02-21', '2022-02-23', 0x494d472d32303232303731382d5741303030342e6a7067),
(2, '12345678', 'Cuti Sakit', '1 Hari', '2022-09-09', '2022-10-10', 0x6c6f676f2e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai_pensiun`
--

CREATE TABLE `pegawai_pensiun` (
  `id_pensiun` int(11) NOT NULL,
  `nama` char(50) NOT NULL,
  `tanggal_pensiun` date NOT NULL,
  `foto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`kode_agama`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`kode_cuti`);

--
-- Indexes for table `datamutasi`
--
ALTER TABLE `datamutasi`
  ADD PRIMARY KEY (`id_mutasi`);

--
-- Indexes for table `datauser`
--
ALTER TABLE `datauser`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `kepegawaian`
--
ALTER TABLE `kepegawaian`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `naik_pangkat`
--
ALTER TABLE `naik_pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- Indexes for table `pegawai_cuti`
--
ALTER TABLE `pegawai_cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `pegawai_pensiun`
--
ALTER TABLE `pegawai_pensiun`
  ADD PRIMARY KEY (`id_pensiun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datamutasi`
--
ALTER TABLE `datamutasi`
  MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kepegawaian`
--
ALTER TABLE `kepegawaian`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `naik_pangkat`
--
ALTER TABLE `naik_pangkat`
  MODIFY `id_pangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pegawai_cuti`
--
ALTER TABLE `pegawai_cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pegawai_pensiun`
--
ALTER TABLE `pegawai_pensiun`
  MODIFY `id_pensiun` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
