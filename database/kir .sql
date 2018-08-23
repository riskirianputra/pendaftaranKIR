-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2018 at 04:24 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `email`, `password`) VALUES
(1, 'iyank', 'riskirianputra@gmail.com', '3D9D1C31198E02B87FA5070D8C699CDD'),
(3, 'admin', 'admin@gmail.com', '21232F297A57A5A743894A0E4A801FC3');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
`idpendaftaran` int(11) NOT NULL,
  `no_kendaraan` varchar(45) DEFAULT NULL,
  `no_stnk` varchar(45) DEFAULT NULL,
  `no_mesin` varchar(45) DEFAULT NULL,
  `no_rangka` varchar(45) DEFAULT NULL,
  `merk_kend` varchar(45) DEFAULT NULL,
  `jenis_kend` varchar(45) DEFAULT NULL,
  `tahun_kend` varchar(45) DEFAULT NULL,
  `tgl_pendaftaran` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`idpendaftaran`, `no_kendaraan`, `no_stnk`, `no_mesin`, `no_rangka`, `merk_kend`, `jenis_kend`, `tahun_kend`, `tgl_pendaftaran`) VALUES
(5, 'BA 1234 MM', '12324555', '1235', '214214214', 'Toyota', 'pribadi', '2001', '2018-08-10'),
(8, '12355', '834289', '834923', '894283', 'Toyota', 'Truck', '', '2018-08-24');

-- --------------------------------------------------------

--
-- Table structure for table `perpanjangan`
--

CREATE TABLE IF NOT EXISTS `perpanjangan` (
`idpanjang` int(11) NOT NULL,
  `no_uji` int(11) DEFAULT NULL,
  `no_bukuuji` varchar(45) DEFAULT NULL,
  `no_kendaraan` varchar(45) DEFAULT NULL,
  `no_mesin` varchar(45) DEFAULT NULL,
  `jenis_kendaraan` varchar(45) DEFAULT NULL,
  `tgl_pendaftaran` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `perpanjangan`
--

INSERT INTO `perpanjangan` (`idpanjang`, `no_uji`, `no_bukuuji`, `no_kendaraan`, `no_mesin`, `jenis_kendaraan`, `tgl_pendaftaran`) VALUES
(1, 123213, 'asda43', '435435', 'dsfoi90', 'grobak', '2018-08-15'),
(2, 123213, 'asda43', '234234', '432423', 'truck', '2018-08-10'),
(3, 1235345, '1234', 'adasd', 'Badasd', 'truck', '2018-08-17'),
(4, 1235345, '1234', 'adasd', 'Badasd', 'truck', '2018-08-17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`iduser` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `NIK` int(11) DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nama`, `alamat`, `NIK`, `no_telp`, `username`, `email`, `password`) VALUES
(1, 'rayes', 'Balai cacang', 12345, '08128327389', 'ayes', 'ayes@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'lilik', 'payakumbuh', 12345, '0812932392392', 'lilik', 'lilik@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
 ADD PRIMARY KEY (`idpendaftaran`);

--
-- Indexes for table `perpanjangan`
--
ALTER TABLE `perpanjangan`
 ADD PRIMARY KEY (`idpanjang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
MODIFY `idpendaftaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `perpanjangan`
--
ALTER TABLE `perpanjangan`
MODIFY `idpanjang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
