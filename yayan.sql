-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 01:23 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yayan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE `data_barang` (
  `kode_barang` varchar(15) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `harga_masuk` int(11) DEFAULT NULL,
  `harga_eceran` int(11) DEFAULT NULL,
  `harga_grosir` int(11) NOT NULL,
  `varian_barang` varchar(20) NOT NULL,
  `ukuran_barang` varchar(20) NOT NULL,
  `ukuran2_barang` varchar(10) NOT NULL,
  `jumlah_minimum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_barang`
--

INSERT INTO `data_barang` (`kode_barang`, `nama_barang`, `jumlah`, `satuan`, `harga_masuk`, `harga_eceran`, `harga_grosir`, `varian_barang`, `ukuran_barang`, `ukuran2_barang`, `jumlah_minimum`) VALUES
('1', '', 0, '--Pilih Satuan-', 0, 0, 0, '', '', 'gram', 0),
('1000', 'lwqqliewqeqwe', 0, '--Pilih Satuan-', 0, 0, 0, '', '', 'gram', 0),
('100000', '', 0, '--Pilih Satuan-', 0, 0, 0, '', '', 'gram', 0),
('131239812', 'Chocolatos', 10000, '--Pilih Satuan-', 10000, 12500, 11500, '', '', 'gram', 10),
('17238731', '', 0, '--Pilih Satuan-', 0, 0, 0, '', '', 'gram', 0),
('1872183912', '', 0, '--Pilih Satuan-', 0, 0, 0, '', '', 'gram', 0),
('2342', '', 0, '--Pilih Satuan-', 0, 0, 0, '', '', 'gram', 0),
('723837193', '', 0, '--Pilih Satuan-', 0, 0, 0, '', '', 'gram', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_hutang`
--

CREATE TABLE `data_hutang` (
  `Id_Hutang` varchar(15) NOT NULL,
  `nama_hutang` varchar(100) NOT NULL,
  `jumlah_hutang` int(11) NOT NULL,
  `tanggal_hutang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `kode_barang` varchar(15) DEFAULT NULL,
  `nomor` int(11) NOT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `jumlah_barang` int(11) DEFAULT NULL,
  `satuan_barang` varchar(15) DEFAULT NULL,
  `harga_satuan` int(11) DEFAULT NULL,
  `jumlah_harga` int(11) DEFAULT NULL,
  `tanggal_transaksi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_hutang`
--

CREATE TABLE `master_hutang` (
  `id_hutang` varchar(15) NOT NULL,
  `nama_hutang` varchar(100) DEFAULT NULL,
  `jumlah_hutang` int(11) DEFAULT NULL,
  `tanggal_hutang` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_hutang`
--

INSERT INTO `master_hutang` (`id_hutang`, `nama_hutang`, `jumlah_hutang`, `tanggal_hutang`) VALUES
('asas', 'asa', 1231313, '2018-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `nik_pelanggan` varchar(16) NOT NULL,
  `nama_depan_pelanggan` varchar(20) NOT NULL,
  `nama_belakang_pelanggan` varchar(20) NOT NULL,
  `status_pelanggan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `nama_pegawai` varchar(30) NOT NULL,
  `nama_pengguna` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`nama_pegawai`, `nama_pengguna`, `password`, `level`) VALUES
('admin', 'admin', '1', 1),
('Taupiq', 'Cro', '1232', 2),
('Diki perdana Y', 'silervang', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_penjualan`
--

CREATE TABLE `transaksi_penjualan` (
  `nama_barang` varchar(100) NOT NULL,
  `kode_barang` varchar(15) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `harga` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `tanggal_transaksi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_penjualan`
--

INSERT INTO `transaksi_penjualan` (`nama_barang`, `kode_barang`, `jumlah_barang`, `satuan`, `harga`, `total_harga`, `tanggal_transaksi`) VALUES
('indomie goreng', '979899', 2, 'pcs', 2300, 4600, '0000-00-00'),
('indomie goreng', '979899', 10, 'pcs', 2300, 23000, '0000-00-00'),
('indomie goreng', '979899', 1, 'pcs', 2300, 2300, '0000-00-00'),
('hhksakkdhasa', '13109', 1, '--Pilih Satuan-', 12500, 12500, '2018-01-04'),
('hhksakkdhasa', '13109', 1, '--Pilih Satuan-', 12500, 12500, '2018-01-04'),
('hhksakkdhasa', '13109', 1, '--Pilih Satuan-', 12500, 12500, '2018-01-04'),
('hhksakkdhasa', '13109', 1, '--Pilih Satuan-', 12500, 12500, '2018-01-04'),
('indomie goreng', '90993121', 2, 'pcs', 2500, 5000, '2018-01-04');

--
-- Triggers `transaksi_penjualan`
--
DELIMITER $$
CREATE TRIGGER `data_barang` AFTER INSERT ON `transaksi_penjualan` FOR EACH ROW BEGIN
UPDATE data_barang SET jumlah=jumlah-NEW.jumlah_barang WHERE kode_barang=NEW.kode_barang;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`kode_barang`),
  ADD UNIQUE KEY `Kode_Barang` (`kode_barang`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `master_hutang`
--
ALTER TABLE `master_hutang`
  ADD PRIMARY KEY (`id_hutang`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`nama_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
