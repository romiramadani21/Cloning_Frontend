-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 12:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp_c`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat_tujuan`
--

CREATE TABLE `alamat_tujuan` (
  `nama_perusahaan` varchar(50) NOT NULL,
  `provinsi` varchar(55) NOT NULL,
  `kabupaten` varchar(45) NOT NULL,
  `kecamatan` varchar(40) NOT NULL,
  `kode_pos` int(30) NOT NULL,
  `id` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alamat_tujuan`
--

INSERT INTO `alamat_tujuan` (`nama_perusahaan`, `provinsi`, `kabupaten`, `kecamatan`, `kode_pos`, `id`) VALUES
('dfh', 'aaa', 'aaaaa', 'aaaaa', 8899, 1);

-- --------------------------------------------------------

--
-- Table structure for table `anggaran_management`
--

CREATE TABLE `anggaran_management` (
  `id` int(20) NOT NULL,
  `nama_barang` varchar(225) NOT NULL,
  `jumlah_barang` varchar(225) NOT NULL,
  `harga_barang` varchar(225) NOT NULL,
  `modal` varchar(225) NOT NULL,
  `keuntungan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggaran_management`
--

INSERT INTO `anggaran_management` (`id`, `nama_barang`, `jumlah_barang`, `harga_barang`, `modal`, `keuntungan`) VALUES
(1, 'et4 555', '41', '51', '61', '71');

-- --------------------------------------------------------

--
-- Table structure for table `bill_off_material`
--

CREATE TABLE `bill_off_material` (
  `id` int(10) NOT NULL,
  `nama_komponen` varchar(255) NOT NULL,
  `deskripsi_komponen` varchar(255) NOT NULL,
  `kualitas` varchar(255) NOT NULL,
  `lead_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `financial_dashboard`
--

CREATE TABLE `financial_dashboard` (
  `id` int(20) NOT NULL,
  `pendapatan` varchar(225) NOT NULL,
  `accounts_receivable` varchar(225) NOT NULL,
  `accounts_payable` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financial_dashboard`
--

INSERT INTO `financial_dashboard` (`id`, `pendapatan`, `accounts_receivable`, `accounts_payable`) VALUES
(1, 'aaa', 'bbb', 'ccc');

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `nama_gudang` varchar(100) NOT NULL,
  `kode_gudang` int(50) NOT NULL,
  `alamat_gudang` varchar(55) NOT NULL,
  `jenis_gudang` varchar(45) NOT NULL,
  `jadwal_gudang` date NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inventorymmgl`
--

CREATE TABLE `inventorymmgl` (
  `id_gudang` int(255) NOT NULL,
  `nama_gudang` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventorymnsbn`
--

CREATE TABLE `inventorymnsbn` (
  `id` int(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `nomor_seri` varchar(255) NOT NULL,
  `batch_number` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kalkulasi_penyusutan`
--

CREATE TABLE `kalkulasi_penyusutan` (
  `id` int(20) NOT NULL,
  `nama_barang` varchar(225) NOT NULL,
  `harga_perolehan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kalkulasi_penyusutan`
--

INSERT INTO `kalkulasi_penyusutan` (`id`, `nama_barang`, `harga_perolehan`) VALUES
(1, 'ra', 'ra');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(20) NOT NULL,
  `tanggal` varchar(225) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `debet` varchar(225) NOT NULL,
  `kredit` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `tanggal`, `keterangan`, `debet`, `kredit`) VALUES
(1, '2021-01-07', 'ra', '11', '13');

-- --------------------------------------------------------

--
-- Table structure for table `management_manufacturing`
--

CREATE TABLE `management_manufacturing` (
  `id` int(10) NOT NULL,
  `nama_material` varchar(255) NOT NULL,
  `mesin` varchar(255) NOT NULL,
  `target_pemasaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjadwalan_produksi`
--

CREATE TABLE `penjadwalan_produksi` (
  `id` int(10) NOT NULL,
  `nama_item` varchar(255) NOT NULL,
  `jumlah_produksi` varchar(255) NOT NULL,
  `tanggal_mulai` varchar(255) NOT NULL,
  `tanggal_selesai` varchar(255) NOT NULL,
  `jumlah_produksi_gagal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(18) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` int(50) NOT NULL,
  `diskon` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `probabilitas`
--

CREATE TABLE `probabilitas` (
  `id` int(20) NOT NULL,
  `nama_barang` varchar(225) NOT NULL,
  `probabilitas_didaerah` varchar(225) NOT NULL,
  `probabilitas_dalam_negeri` varchar(225) NOT NULL,
  `probabilitas_diluar_negeri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `probabilitas`
--

INSERT INTO `probabilitas` (`id`, `nama_barang`, `probabilitas_didaerah`, `probabilitas_dalam_negeri`, `probabilitas_diluar_negeri`) VALUES
(1, 'ab', 'ab', 'ab', 'ab');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `nama_product` varchar(50) NOT NULL,
  `kode_product` int(20) NOT NULL,
  `harga` int(25) NOT NULL,
  `discount` varchar(20) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `id` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`nama_product`, `kode_product`, `harga`, `discount`, `tanggal_pesan`, `id`) VALUES
('xfghdfhdh', 6777, 12000000, 'e4340000', '2021-01-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_management`
--

CREATE TABLE `sales_order_management` (
  `id` int(20) NOT NULL,
  `tgl_pembelian` varchar(225) NOT NULL,
  `nama_item` varchar(225) NOT NULL,
  `harga_satuan` varchar(225) NOT NULL,
  `harga_total` varchar(225) NOT NULL,
  `jumlah_item` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `nama_perusahaan` varchar(50) NOT NULL,
  `kode_perusahaan` varchar(255) NOT NULL,
  `alamat_perusahaan` varchar(40) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `kode_pos` varchar(255) NOT NULL,
  `id` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`nama_perusahaan`, `kode_perusahaan`, `alamat_perusahaan`, `no_hp`, `kode_pos`, `id`) VALUES
('asffa', '214', 'l', '22', '2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `email`, `username`, `password`) VALUES
(1, 'Romi Ramadani', 'Rumbai', 'romi@gmail.com', 'romi', '910b6c78a8482033b971116f02441ce4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat_tujuan`
--
ALTER TABLE `alamat_tujuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggaran_management`
--
ALTER TABLE `anggaran_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill_off_material`
--
ALTER TABLE `bill_off_material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financial_dashboard`
--
ALTER TABLE `financial_dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventorymmgl`
--
ALTER TABLE `inventorymmgl`
  ADD PRIMARY KEY (`id_gudang`);

--
-- Indexes for table `inventorymnsbn`
--
ALTER TABLE `inventorymnsbn`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomor_seri` (`nomor_seri`);

--
-- Indexes for table `kalkulasi_penyusutan`
--
ALTER TABLE `kalkulasi_penyusutan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `management_manufacturing`
--
ALTER TABLE `management_manufacturing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjadwalan_produksi`
--
ALTER TABLE `penjadwalan_produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `probabilitas`
--
ALTER TABLE `probabilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_order_management`
--
ALTER TABLE `sales_order_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamat_tujuan`
--
ALTER TABLE `alamat_tujuan`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anggaran_management`
--
ALTER TABLE `anggaran_management`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bill_off_material`
--
ALTER TABLE `bill_off_material`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `financial_dashboard`
--
ALTER TABLE `financial_dashboard`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventorymmgl`
--
ALTER TABLE `inventorymmgl`
  MODIFY `id_gudang` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inventorymnsbn`
--
ALTER TABLE `inventorymnsbn`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kalkulasi_penyusutan`
--
ALTER TABLE `kalkulasi_penyusutan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `management_manufacturing`
--
ALTER TABLE `management_manufacturing`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penjadwalan_produksi`
--
ALTER TABLE `penjadwalan_produksi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `probabilitas`
--
ALTER TABLE `probabilitas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales_order_management`
--
ALTER TABLE `sales_order_management`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
