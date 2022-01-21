-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 10:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpsmstr5`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_mahasiswa`
--

CREATE TABLE `calon_mahasiswa` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(40) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Jenis_Kelamin` varchar(9) NOT NULL,
  `Agama` varchar(20) NOT NULL,
  `Asal_Sekolah` varchar(20) NOT NULL,
  `foto_maba` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon_mahasiswa`
--

INSERT INTO `calon_mahasiswa` (`ID`, `Nama`, `Alamat`, `Jenis_Kelamin`, `Agama`, `Asal_Sekolah`, `foto_maba`) VALUES
(1, 'Arista Edgar', 'Citra Raya', 'Perempuan', 'Islam', 'MAN 1', 'user'),
(2, 'Yaqdhan Rakha', 'Graha Rafflasia II', 'Laki-laki', 'Islam', 'Cordova', 'cowo'),
(3, 'Rafly Akbar Ravsanjani', 'Citra Raya, Kabupaten Tangerang', 'Laki-laki', 'Islam', 'SMK 1 Kab.Tangerang', 'cowo'),
(4, 'Hera Amalia Agustin', 'Tigaraksa, Tangerang', 'Perempuan', 'Islam', 'SMA 4 Kab.Tangerang', 'user'),
(5, 'Yulia Karlina', 'Bandung', 'Perempuan', 'Islam', 'MAN 1', 'user'),
(6, 'Mahmudin', 'Subang', 'Laki-laki', 'Islam', 'SMK 1 Kab.Tangerang', 'cowo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_mahasiswa`
--
ALTER TABLE `calon_mahasiswa`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_mahasiswa`
--
ALTER TABLE `calon_mahasiswa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
