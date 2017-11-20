-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 03:22 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nip` int(15) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `jk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nip`, `nama`, `pass`, `jk`) VALUES
(1234567890, 'Admin', '1234567890', 'laki laki'),
(1555301042, 'M. Ilham Novitra', 'muh4mm4d22', 'laki laki');

-- --------------------------------------------------------

--
-- Table structure for table `aspirasi`
--

CREATE TABLE `aspirasi` (
  `id` int(20) NOT NULL,
  `nim` int(15) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `pesan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aspirasi`
--

INSERT INTO `aspirasi` (`id`, `nim`, `nama`, `pesan`) VALUES
(17, 1621412011, 'M. Zikri Ardiansyah Putra', 'Sebaiknya dalam pembentukan kepanitiaan acara mahasiswa itu harus menggunakan CV dan penyeleksian yang tidak semena-mena, karena kebanyakan milihnya itu teman-teman dekat aja'),
(18, 1555301022, 'Elok Anugrah Al khalik', 'Sebaiknya dalam pembentukan kepanitiaan acara mahasiswa itu harus menggunakan CV dan penyeleksian yang tidak semena-mena, karena kebanyakan milihnya itu teman-teman dekat aja'),
(19, 1555301042, 'M. Ilham Novitra', 'Nilai pencapaian TAK di turunin dong');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(20) NOT NULL,
  `nim` int(15) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nim`, `nama`, `isi`) VALUES
(10, 1621412011, 'M. Zikri Ardiansyah Putra', 'Betul itu perlu seperti itu, mantap'),
(11, 1555301022, 'Elok Anugrah Al khalik', 'Bagus juga itu, saya juga melihat kepanitiaannya seperti itu'),
(12, 1621412011, 'M. Zikri Ardiansyah Putra', 'Menurut saya sih memang kurang kesadarnnya orang-orang yang makan dikantin'),
(13, 1555301042, 'M. Ilham Novitra', 'saya setuju');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(15) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `prodi` varchar(150) NOT NULL,
  `generasi` varchar(50) NOT NULL,
  `jk` varchar(25) NOT NULL,
  `pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `prodi`, `generasi`, `jk`, `pass`) VALUES
(1520301004, 'Ananda Putra Dasmito', 'Teknik Elektronika Telekomunikasi', '2015', 'Laki-laki', '1662401048'),
(1520401008, 'Angga Wardana', 'Teknik Elektronika', '2015', 'Laki-laki', '1520401008'),
(1520402023, 'Yholanda', 'Teknik Telekomunikasi', '2001', 'Laki-laki', '1520402023'),
(1521412035, 'Jesika Erventy Osman', 'Teknik Mekatronika', '2015', 'Perempuan', '1521412035'),
(1555301022, 'Elok Anugrah Al khalik', 'Teknik Informatika', '2015', 'Laki-laki', '1555301042'),
(1555301042, 'M. Ilham Novitra', 'Teknik Informatika', '2015', 'Laki-laki', 'ilham123'),
(1555301094, 'Yogi Armanda', 'Teknik Informatika', '2015', 'Laki-laki', '1555301094'),
(1557301012, 'Barkah Ibnu Amanah Siregar', 'Sistem Informasi', '2015', 'Laki-laki', '155221012'),
(1620301001, 'Karina Indra Wijaya', 'Teknik Elektronika Telekomunikasi', '2016', 'Perempuan', '1620301001'),
(1620301030, 'Dea Puspa Dewanti', 'Teknik Elektronika Telekomunikasi', '2016', 'Perempuan', '1620301030'),
(1620305021, 'Ridho Hidayat', 'Teknik Listrik', '2016', 'Laki-laki', '1620305021'),
(1620401013, 'Mia Arifadanti', 'Teknik Elektronika', '2016', 'Perempuan', '1620401013'),
(1620402015, 'Tri Dian Rizki Ramadhan', 'Teknik Telekomunikasi', '2016', 'Perempuan', '1620402015'),
(1621302030, 'Amanda Hidayat', 'Teknik Mesin', '2016', 'Laki-laki', '1620301030'),
(1621302046, 'Aryandana', 'Teknik Mesin', '2016', 'Laki-laki', '1621302046'),
(1621412001, 'Thalia Smart Aritonang', 'Teknik Mekatronika', '2016', 'Perempuan', '1621412001'),
(1621412011, 'M. Zikri Ardiansyah Putra', 'Teknik Mekatronika', '2016', 'Laki-laki', '1621412011'),
(1655301032, 'Nasha Hikmatia A.E', 'Teknik Informatika', '2016', 'Perempuan', '1655301032'),
(1655301059, 'Leony Veronica Wijaya', 'Teknik Informatika', '2016', 'Perempuan', '1655301059'),
(1656401025, 'Yoga Satria S', 'Teknik Komputer', '2016', 'Laki-laki', '1656401025'),
(1657301078, 'Nanda Pratama', 'Sistem Informasi', '2016', 'Laki-laki', '1657301078'),
(1662401006, 'Melsa Intan Sari', 'Akuntansi', '2016', 'Perempuan', '1662401006'),
(1662401048, 'Ester Vaulina', 'Akuntansi', '2016', 'Perempuan', '1662401048');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `nip` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1555301043;
--
-- AUTO_INCREMENT for table `aspirasi`
--
ALTER TABLE `aspirasi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `nim` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1662401049;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD CONSTRAINT `aspirasi_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
