-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 09:37 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hasanposresto`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id_admin` int(15) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_role` int(5) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`, `id_role`, `created_at`) VALUES
(1, 'admin utama', 'hasanadmin', 'hasanadmin', 5, '0000-00-00 00:00:00'),
(9, 'demo', 'demo', 'demo', 6, '2021-05-09 09:12:58');

-- --------------------------------------------------------

--
-- Table structure for table `histori_admin`
--

DROP TABLE IF EXISTS `histori_admin`;
CREATE TABLE `histori_admin` (
  `id_histori` int(15) NOT NULL,
  `id_admin` int(15) NOT NULL,
  `id_kategori` int(15) NOT NULL,
  `aksi` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `histori_admin`
--

INSERT INTO `histori_admin` (`id_histori`, `id_admin`, `id_kategori`, `aksi`, `created_at`) VALUES
(1, 1, 3, 'Hapus Admin kosong', '2021-05-09 14:11:20'),
(2, 1, 3, 'Hapus Admin coba baru edittttt', '2021-05-09 14:11:22'),
(3, 1, 3, 'Hapus Admin coba baru', '2021-05-09 14:11:23'),
(4, 1, 3, 'Hapus Admin coba baru', '2021-05-09 14:11:24'),
(5, 1, 3, 'Hapus Admin coba baru', '2021-05-09 14:11:26'),
(6, 1, 3, 'Hapus Admin second', '2021-05-09 14:11:28'),
(7, 1, 2, 'Edit Admin admin utama', '2021-05-09 14:11:40'),
(8, 1, 12, 'hapus Role All', '2021-05-09 14:11:48'),
(9, 1, 12, 'hapus Role Biasa', '2021-05-09 14:11:51'),
(10, 1, 12, 'hapus Role hasan', '2021-05-09 14:11:53'),
(11, 1, 11, 'Edit Role demo', '2021-05-09 14:12:14'),
(12, 1, 1, 'Tambah Admin demo', '2021-05-09 14:12:58'),
(13, 1, 7, 'Tambah menu Martabak Manis', '2021-05-09 14:24:10'),
(14, 1, 7, 'Tambah menu Gado Gado', '2021-05-09 14:25:04'),
(15, 1, 7, 'Tambah menu Es Campur', '2021-05-09 14:25:25'),
(16, 1, 7, 'Tambah menu Martabak Manis', '2021-05-09 14:25:38'),
(17, 1, 7, 'Tambah menu Lontong Isi', '2021-05-09 14:25:53'),
(18, 1, 7, 'Tambah menu Singkong Keju', '2021-05-09 14:26:08'),
(19, 1, 7, 'Tambah menu Gurame Goreng', '2021-05-09 14:26:23'),
(20, 1, 7, 'Tambah menu Es Blewah', '2021-05-09 14:26:41'),
(21, 1, 7, 'Tambah menu Es Campur 2', '2021-05-09 14:26:57'),
(22, 1, 7, 'Tambah menu Es Susu', '2021-05-09 14:27:23'),
(23, 1, 7, 'Tambah menu Es Pisang Ijo', '2021-05-09 14:27:40'),
(24, 1, 7, 'Tambah menu Es Teh', '2021-05-09 14:27:49'),
(25, 1, 7, 'Tambah menu Ketoprak', '2021-05-09 14:28:02'),
(26, 1, 7, 'Tambah menu Martabak Manis', '2021-05-09 14:28:18'),
(27, 1, 7, 'Tambah menu Nasi Goreng', '2021-05-09 14:28:29'),
(28, 1, 7, 'Tambah menu Es Lemon', '2021-05-09 14:28:41'),
(29, 1, 7, 'Tambah menu Wedang jahe', '2021-05-09 14:28:56');

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

DROP TABLE IF EXISTS `kasir`;
CREATE TABLE `kasir` (
  `id_kasir` int(11) NOT NULL,
  `nama_kasir` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `nama_kasir`, `created_at`, `username`, `password`, `last_login`) VALUES
(1, 'kasir gauledits', '2021-04-24 00:00:00', 'edit', 'edit', '2021-05-09 08:05:25'),
(2, 'hasan', '2021-05-02 12:46:16', 'hasan', 'hasan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id_kategori` int(15) NOT NULL,
  `nama_kategori` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Makanan'),
(2, 'Minuman'),
(3, 'All'),
(4, 'Desert'),
(5, 'Snack');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_histori`
--

DROP TABLE IF EXISTS `kategori_histori`;
CREATE TABLE `kategori_histori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_histori`
--

INSERT INTO `kategori_histori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Tambah Admin'),
(2, 'Edit Admin'),
(3, 'Hapus Admin'),
(4, 'Tambah Kasir'),
(5, 'Edit Kasir'),
(6, 'Hapus Kasir'),
(7, 'Tambah Menu'),
(8, 'Edit Menu'),
(9, 'Hapus Menu'),
(10, 'Tambah Role'),
(11, 'Edit Role'),
(12, 'Hapus ROle');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

DROP TABLE IF EXISTS `keranjang`;
CREATE TABLE `keranjang` (
  `id_keranjang` int(15) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `id_produk` varchar(15) NOT NULL,
  `qty` int(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_user`, `id_produk`, `qty`, `created_at`, `updated_at`) VALUES
(1, '1', '12', 10, '2021-05-09', NULL),
(2, '1', '7', 1, '2021-05-09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id_menu` int(255) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `id_kategori` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `id_kategori`, `harga`, `foto`, `created_at`) VALUES
(1, 'Martabak Manis', '4', '20000', 'Martabak_Manis-2021-05-09-09-24-10.jpg', '2021-05-09 09:24:10'),
(2, 'Gado Gado', '1', '21000', 'Gado_Gado-2021-05-09-09-25-04.jpg', '2021-05-09 09:25:04'),
(3, 'Es Campur', '2', '15000', 'Es_Campur-2021-05-09-09-25-25.jpg', '2021-05-09 09:25:25'),
(4, 'Martabak Manis', '1', '19000', 'Martabak_Manis-2021-05-09-09-25-38.jpg', '2021-05-09 09:25:38'),
(5, 'Lontong Isi', '1', '11000', 'Lontong_Isi-2021-05-09-09-25-53.jpg', '2021-05-09 09:25:53'),
(6, 'Singkong Keju', '4', '13000', 'Singkong_Keju-2021-05-09-09-26-08.jpg', '2021-05-09 09:26:08'),
(7, 'Gurame Goreng', '1', '18000', 'Gurame_Goreng-2021-05-09-09-26-23.jpg', '2021-05-09 09:26:23'),
(8, 'Es Blewah', '2', '15000', 'Es_Blewah-2021-05-09-09-26-41.jpg', '2021-05-09 09:26:41'),
(9, 'Es Campur 2', '2', '19000', 'Es_Campur_2-2021-05-09-09-26-57.jpg', '2021-05-09 09:26:57'),
(10, 'Es Susu', '2', '9000', 'Es_Susu-2021-05-09-09-27-23.jpg', '2021-05-09 09:27:23'),
(11, 'Es Pisang Ijo', '2', '10000', 'Es_Pisang_Ijo-2021-05-09-09-27-40.jpg', '2021-05-09 09:27:40'),
(12, 'Es Teh', '2', '10000', 'Es_Teh-2021-05-09-09-27-49.jpg', '2021-05-09 09:27:49'),
(14, 'Martabak Manis', '1', '22000', 'Martabak_Manis-2021-05-09-09-28-18.jpg', '2021-05-09 09:28:18'),
(15, 'Nasi Goreng', '1', '22000', 'Nasi_Goreng-2021-05-09-09-28-29.jpg', '2021-05-09 09:28:29'),
(16, 'Es Lemon', '2', '22000', 'Es_Lemon-2021-05-09-09-28-41.jpg', '2021-05-09 09:28:41'),
(17, 'Wedang jahe', '2', '20000', 'Wedang_jahe-2021-05-09-09-28-56.jpg', '2021-05-09 09:28:56');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id_role` int(15) NOT NULL,
  `nama_role` varchar(255) NOT NULL,
  `data_admin` int(1) NOT NULL DEFAULT '0',
  `data_kasir` int(1) NOT NULL DEFAULT '0',
  `master_menu` int(1) NOT NULL DEFAULT '0',
  `master_transaksi` int(1) NOT NULL DEFAULT '0',
  `histori` int(1) NOT NULL DEFAULT '0',
  `seeting` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`, `data_admin`, `data_kasir`, `master_menu`, `master_transaksi`, `histori`, `seeting`) VALUES
(5, 'hasan', 1, 1, 1, 1, 1, 1),
(6, 'demo', 0, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id_setting` int(15) NOT NULL,
  `konten` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `konten`, `isi`) VALUES
(1, 'Nama Resto', 'Hasan Resto\'s'),
(2, 'Jalan', 'Jalan Cengkareng'),
(3, 'Nomor Telpon', '089602350857'),
(4, 'facebook', 'abdul.gostand'),
(5, 'instagram', 'heyiamhasan'),
(6, 'twitter', 'heyiamhasan'),
(7, 'youtube', 'heyiamhasan'),
(8, 'facebook', 'abdul.gostand'),
(9, 'instagram', 'heyiamhasan'),
(10, 'twitter', 'heyiamhasan'),
(11, 'youtube', 'abdul.hasan388');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `id_slider` int(15) NOT NULL,
  `nama_foto` varchar(255) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `nama_foto`, `foto`) VALUES
(1, 'foto_1', 'foto1.jpg'),
(2, 'foto_2', '2-2021-05-02-17-04-02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id_transaksi` int(155) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `tipe_pesan` enum('dine_in','makan_luar','','') NOT NULL,
  `nomor_meja` varchar(15) DEFAULT NULL,
  `harga_total` int(155) NOT NULL,
  `uang_custumer` int(155) DEFAULT NULL,
  `kembalian` int(155) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

DROP TABLE IF EXISTS `transaksi_detail`;
CREATE TABLE `transaksi_detail` (
  `id_transaksi_detail` int(15) NOT NULL,
  `id_transaksi` int(15) NOT NULL,
  `id_menu` int(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `histori_admin`
--
ALTER TABLE `histori_admin`
  ADD PRIMARY KEY (`id_histori`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_histori`
--
ALTER TABLE `kategori_histori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id_transaksi_detail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `histori_admin`
--
ALTER TABLE `histori_admin`
  MODIFY `id_histori` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori_histori`
--
ALTER TABLE `kategori_histori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(155) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id_transaksi_detail` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
