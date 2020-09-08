-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2019 at 08:20 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin`, `password`, `nama_admin`) VALUES
(1, 'admin', 'admin', 'hagai');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `iddriver` int(20) NOT NULL,
  `nama_lengkap` varchar(300) NOT NULL,
  `no_telepon` varchar(300) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `repassword` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`iddriver`, `nama_lengkap`, `no_telepon`, `username`, `password`, `repassword`) VALUES
(5, 'Supir', '082370247900', 'supir12', 'supir12', 'supir12');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id` int(50) NOT NULL,
  `mobil` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id`, `mobil`, `harga`) VALUES
(3, '8', '600.000'),
(4, '9', '400.000'),
(5, '10', '400.000'),
(9, '16', '400.000'),
(10, '17', '400.000'),
(12, '19', '400.000'),
(13, '20', '200.000'),
(14, '21', '300.000'),
(15, '22', '200.000'),
(21, '24', '120000'),
(22, '25', '500000');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(50) NOT NULL,
  `merek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `merek`) VALUES
(2, 'Honda'),
(3, 'Kijang'),
(5, 'Suzuki'),
(6, 'Lainnya'),
(10, 'Daihatsu'),
(11, 'Mazda');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id` int(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `kursi` int(11) NOT NULL,
  `no_plat` varchar(50) NOT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id`, `merek`, `nama`, `tahun`, `kursi`, `no_plat`, `gambar`) VALUES
(8, '2', 'Jazz', '2018', 4, 'M 3334 AG', 'jazz.jpg'),
(9, '1', 'Avanza', '2016', 7, 'M 3286 GT', 'avanzahitam.jpg'),
(10, '5', 'Ertiga', '2014', 6, 'M 5555 GT', 'ertiga.png'),
(16, '5', 'APV', '2018', 7, 'M 3337 AG', 'apv.jpg'),
(17, '1', 'Avanza Veloz', '2016', 7, 'M 3287 GT', 'avanza.jpg'),
(19, '3', 'Innova', '2016', 6, 'M 5220 AG', 'invova.jpg'),
(20, '3', 'Kijang', '2010', 6, 'M 5028 AG', 'kijang.jpg'),
(21, '5', 'Xenia', '2015', 7, 'M 1020 AG', 'xenia.jpg'),
(22, '6', 'Panther', '2012', 7, 'M 9020 AG', 'panther.jpg'),
(23, '2', 'Bemo', '1990', 4, 'BK 5665 ew', 'aventador-coupe-facebook-og.jpg'),
(24, '3', 'Panther isuzu', '2007', 5, 'BK 2323 CK', 'suzuki.jpg'),
(25, '11', 'Mazda GT', '2018', 4, 'BK 2345 CA', 'aventador-coupe-facebook-og.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `idPemesanan` int(20) NOT NULL,
  `Harga` int(11) NOT NULL,
  `status` varchar(45) NOT NULL,
  `tanggal` date NOT NULL,
  `user_id` int(50) NOT NULL,
  `id_tujuan` int(11) NOT NULL,
  `alamat_penjemputan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`idPemesanan`, `Harga`, `status`, `tanggal`, `user_id`, `id_tujuan`, `alamat_penjemputan`) VALUES
(48, 0, 'Confirmed', '2018-12-13', 2, 3, 'Jl. Pemuda'),
(49, 0, 'Confirmed', '2018-12-13', 4, 5, 'Jl. Srimurni'),
(62, 0, 'Confirmed', '2019-01-10', 2, 9, 'Jl. Penggaansari'),
(63, 0, 'On Progress', '2019-01-10', 3, 6, 'Jl. Joseph'),
(64, 0, 'Confirmed', '2019-01-10', 8, 7, 'Jl. Singamangaraja'),
(65, 0, 'Confirmed', '2019-01-10', 2, 9, 'Jl. Pembangunan'),
(66, 0, 'On Progress', '2019-01-10', 4, 10, 'Jl. Surabaya'),
(67, 0, 'On Progress', '2019-01-10', 5, 9, 'Jl. Bandung'),
(68, 0, 'On Progress', '2019-01-10', 9, 2, 'Jl. Srimurni'),
(69, 0, 'Confirmed', '2019-01-10', 13, 5, 'Jl. Toba'),
(70, 0, 'Confirmed', '2019-01-10', 14, 3, 'Jl. KM Parapat'),
(71, 0, 'Confirmed', '2019-01-11', 9, 1, 'JL. Laguboti No. 2'),
(72, 0, 'On Progress', '2019-01-11', 9, 16, 'JL. Tarutung No. 2'),
(73, 0, 'On Progress', '2019-01-11', 9, 16, 'JL. Tarutung No. 2'),
(74, 0, 'Confirmed', '2019-01-11', 6, 16, 'JL. Tarutung No. 3'),
(75, 0, 'On Progress', '2019-01-11', 0, 1, 'JL. Laguboti No. 2'),
(76, 0, 'On Progress', '2019-01-17', 0, 12, 'JL. Tarutung No. 3'),
(77, 0, 'On Progress', '2019-01-17', 11, 5, 'JL. Tarutung No. 3');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id` int(50) NOT NULL,
  `nobooking` varchar(100) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `id_mobil` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id`, `nobooking`, `tgl_pinjam`, `tgl_kembali`, `id_mobil`, `user_id`, `harga`, `status`) VALUES
(73, 'Q819G686C2', '2018-12-07', '2018-12-08', 9, 2, '400.000', 'Confirmed'),
(74, '59UU4CJ935', '2018-12-10', '2018-12-11', 9, 2, '400.000', 'Confirmed'),
(75, 'AIM4HO7QGH', '2018-12-08', '2018-12-09', 16, 5, '400.000', 'Confirmed'),
(76, 'K2QMNACKOC', '2018-12-10', '2018-12-11', 10, 6, '400.000', 'Confirmed'),
(77, 'MT6POG4JAL', '2018-12-11', '2018-12-12', 34, 2, '120000', 'Confirmed'),
(78, '12SMQKR40H', '2018-12-06', '2018-12-19', 10, 2, '400.000', 'Confirmed'),
(79, 'M0IKSEJ1BT', '2018-12-14', '2018-12-15', 8, 2, '600.000', 'Confirmed'),
(80, 'ET4I3817QR', '2018-12-14', '2018-12-15', 18, 2, '400.000', 'Confirmed'),
(81, 'BRH1P13FQG', '2018-12-14', '2018-12-15', 8, 2, '600.000', 'Confirmed'),
(82, '5MM0JKC6SS', '2018-12-15', '2018-12-16', 8, 2, '600.000', 'Confirmed'),
(83, 'HDRNHD754J', '2019-01-10', '2018-12-11', 8, 2, '600.000', 'Confirmed'),
(84, 'PPDE1LUGFA', '2018-12-06', '1970-01-01', 10, 8, '400.000', 'Confirmed'),
(91, '51670HKKPH', '2019-01-11', '2019-01-12', 8, 2, '600.000', 'Confirmed'),
(92, '37PLS6F2O8', '2019-01-10', '2019-01-16', 8, 10, '600.000', 'Confirmed'),
(93, 'IBQ7UUBHK0', '2019-01-11', '2019-01-12', 18, 10, '400.000', 'Confirmed'),
(94, 'J5JH82P0CP', '2019-01-16', '2019-01-18', 8, 11, '600.000', 'Confirmed'),
(95, '3C1D2ITC4C', '2019-01-11', '2019-01-14', 8, 11, '600.000', 'Confirmed'),
(96, '0UAFDNTTGK', '2019-01-12', '2019-01-17', 18, 9, '400.000', 'Confirmed'),
(97, '700MBAG00R', '2019-01-11', '2019-01-14', 20, 13, '200.000', 'Confirmed'),
(99, 'P39F4IFB4H', '2019-01-11', '2019-01-19', 18, 9, '400.000', 'Confirmed'),
(100, '6QE51UN0R1', '2019-01-11', '2019-01-19', 18, 9, '400.000', 'Confirmed'),
(101, 'HCNOPU3JGC', '2019-01-18', '2019-01-19', 18, 2, '400.000', 'Confirmed'),
(102, 'OEQM1UNUT9', '2019-01-12', '2019-01-13', 8, 9, '600.000', 'On Progress'),
(103, '1ETDBC4EAG', '2019-01-14', '2019-01-19', 24, 6, '120000', 'On Progress'),
(104, 'KK848NQDFQ', '2019-01-12', '2019-01-13', 8, 9, '600.000', 'Confirmed'),
(105, 'P60ND5N0GG', '2019-01-12', '2019-01-14', 19, 9, '400.000', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE `tujuan` (
  `id_tujuan` int(11) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `tarif` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tujuan`
--

INSERT INTO `tujuan` (`id_tujuan`, `tujuan`, `tarif`) VALUES
(1, 'Laguboti - Balige (Rp. 5000)', ''),
(2, 'Laguboti - Tarutung (Rp. 25.000)', ''),
(3, 'Laguboti - Porsea (Rp. 5.000)', ''),
(4, 'Laguboti - Parapat (Rp. 20.000)', ''),
(5, 'Balige - Tarutung (Rp. 15.000)', ''),
(6, 'Balige - Laguboti (Rp. 5.000)', ''),
(12, 'Balige - Porsea (Rp. 5.000)', ''),
(13, 'Balige - Parapat (Rp. 25.000)', ''),
(16, 'Tarutung - Balige (Rp. 15.000)', ''),
(17, 'Tarutung - Laguboti (Rp. 25.000)', ''),
(18, 'Tarutung - Porsea (Rp. 25.000)', ''),
(19, 'Tarutung - Laguboti (Rp. 25.000)', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `username`, `alamat`, `telepon`, `password`) VALUES
(2, 'hagai', 'hagai', 'parapat', '082147483647', 'hagai'),
(4, 'Lionel Andres Messi', 'leomessi', 'Rosario, Argentina ', '082281221', 'messi'),
(5, 'Rizky Mokodompit', 'kiky', 'Jl. Toba 14 PematangSiantar', '062147483647', 'kiky'),
(6, 'dwi', 'Dwi Putri', 'Saiddolok, Ronggurnihuta', '0812147483647', 'dwi'),
(7, 'Obrian Tobing', 'brili', 'Jl. Tangki Tarutung', '0216782738', 'brili'),
(8, 'hernan', 'hernan', 'siantar', '09876543', 'hernan'),
(9, 'Jhosua Sinambela', 'Jola', 'PematangSiantar', '082272021313', 'jola'),
(10, 'messi', 'messi', 'messi', '1234', 'messi'),
(11, 'Sweta', 'sweta', 'Jl. Pemuda', '081232', 'sweta'),
(12, 'Suci Sianturi', 'suci', 'Jl. Pemuda Balige', '0822122838', 'suci'),
(13, 'Sweta Marito', 'swet', 'Jl. M. Samosir Tarutung', '08231356273', 'swet'),
(14, 'uwak', 'uwak', 'jln siantar', '09928182111', 'uwak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`iddriver`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`idPemesanan`),
  ADD KEY `idPemesanan` (`idPemesanan`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id_tujuan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `iddriver` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `idPemesanan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id_tujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
