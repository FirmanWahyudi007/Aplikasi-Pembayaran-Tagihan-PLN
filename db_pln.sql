-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 07:06 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pln`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` varchar(2) NOT NULL,
  `level` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `level`) VALUES
('1', 'admin'),
('2', 'pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` varchar(255) NOT NULL,
  `id_tingkatan` varchar(2) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `daya` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `id_tingkatan`, `username`, `email`, `nama`, `password`, `alamat`, `daya`) VALUES
('0972278162617', '2', 'trial', 'trial@gmail.com', 'trial', 'trial123', 'trial', 0),
('1425767024389221', '2', 'mariaul', 'mariaulfa@gmail.com', 'Maria Ulfa ', 'maria123', 'Desa Arjasa Kecamatan Arjasa RT 02 RW 04', 900),
('1425767024389909', '2', 'nurulqur', 'nurulqrn@gmail.com', 'Nurul Qurani', 'nurul123', 'Null', 900),
('209002533014668', '2', 'ilhampb', 'ilhampb@gmail.com', 'Ilham Pratama Bustyan', 'ilham123', 'Gg Seruni No 46 Desa Trigonco Kec Asembagus', 450),
('249075738971633', '2', 'adetwp', 'adetyowidanap@gmail.com', 'Adetyo Widana Putra', 'adet123', 'Jln Raya Banyuwangi - Asembagus Desa Trigonco Kec Asembagus', 900),
('410528349349138', '2', 'wendy', 'wendywidodo@gmail.com', 'Wendy Widodo', 'wendy123', 'Jln Raya Banyuwangi Desa Kesambirampak Kec Kapongan', 450),
('872222206202634', '2', 'faisalss', 'faisalsiswa@gmail.com', 'Faisal Siswa Satriana', '12345', 'Griya Panji Mulya', 350);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(22) NOT NULL,
  `id_tagihan` int(11) DEFAULT NULL,
  `administrasi` int(11) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `total_bayar` varchar(255) NOT NULL,
  `via` varchar(255) NOT NULL,
  `no_rek` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `id_tagihan`, `administrasi`, `tanggal_bayar`, `total_bayar`, `via`, `no_rek`) VALUES
(1, 17, 2500, '2018-11-15', '52500', 'BNI', '2147483647'),
(2, 13, 2500, '2018-11-15', '102500', 'MANDIRI', '2147483647'),
(3, 16, 2500, '2018-11-15', '102500', 'BRI', '8083729271272'),
(4, 14, 2500, '2018-11-15', '102500', 'BRI', '508363816247453'),
(5, 15, 2500, '2018-11-15', '52500', 'BRI', '508363816247453'),
(6, 18, 2500, '2018-11-24', '27500', 'BRI', '808372927127221');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` varchar(255) NOT NULL,
  `id_level` varchar(2) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `id_level`, `username`, `nama`, `email`, `password`) VALUES
('1', '1', 'admin1', 'null', 'faisalsiswa@gmail.com', 'admin12345'),
('2', '1', 'admin', 'Firman Wahyudi', 'admin@admin.com', 'admin111');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tagihan`
--

CREATE TABLE `tb_tagihan` (
  `id_tagihan` int(11) NOT NULL,
  `id_pelanggan` varchar(255) DEFAULT NULL,
  `tgl_tagihan` date DEFAULT NULL,
  `tagihan` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tagihan`
--

INSERT INTO `tb_tagihan` (`id_tagihan`, `id_pelanggan`, `tgl_tagihan`, `tagihan`, `status`) VALUES
(1, '1425767024389221', '2018-09-01', 100000, 'dibayar'),
(2, '1425767024389909', '2018-09-01', 100000, 'dibayar'),
(3, '209002533014668', '2018-09-01', 50000, 'dibayar'),
(4, '249075738971633', '2018-09-01', 100000, 'dibayar'),
(5, '410528349349138', '2018-09-01', 50000, 'dibayar'),
(6, '872222206202634', '2018-09-01', 25000, 'dibayar'),
(7, '1425767024389221', '2018-10-01', 100000, 'dibayar'),
(8, '1425767024389909', '2018-10-11', 100000, 'dibayar'),
(9, '209002533014668', '2018-10-11', 50000, 'dibayar'),
(10, '249075738971633', '2018-10-11', 100000, 'dibayar'),
(11, '410528349349138', '2018-10-11', 50000, 'dibayar'),
(12, '872222206202634', '2018-10-11', 25000, 'dibayar'),
(13, '1425767024389221', '2018-11-11', 100000, 'dibayar'),
(14, '1425767024389909', '2018-11-11', 100000, 'dibayar'),
(15, '209002533014668', '2018-11-11', 50000, 'dibayar'),
(16, '249075738971633', '2018-11-11', 100000, 'dibayar'),
(17, '410528349349138', '2018-11-11', 50000, 'dibayar'),
(18, '872222206202634', '2018-11-11', 25000, 'belum bayar'),
(19, '209002533014668', '2018-12-11', 50000, 'belum bayar'),
(20, '249075738971633', '2018-12-11', 100000, 'belum bayar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `id_tingkatan` (`id_tingkatan`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_tagihan` (`id_tagihan`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  ADD PRIMARY KEY (`id_tagihan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD CONSTRAINT `id_tingkatan` FOREIGN KEY (`id_tingkatan`) REFERENCES `tb_level` (`id_level`);

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `id_tagihan` FOREIGN KEY (`id_tagihan`) REFERENCES `tb_tagihan` (`id_tagihan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD CONSTRAINT `id_level` FOREIGN KEY (`id_level`) REFERENCES `tb_level` (`id_level`);

--
-- Constraints for table `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  ADD CONSTRAINT `id_pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
