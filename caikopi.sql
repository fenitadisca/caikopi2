-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2022 at 03:41 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caikopi`
--

-- --------------------------------------------------------

--
-- Table structure for table `identity_koperasi`
--

CREATE TABLE `identity_koperasi` (
  `id` int(128) NOT NULL,
  `nik` varchar(128) NOT NULL,
  `form` varchar(128) NOT NULL,
  `nama_koperasi` varchar(128) NOT NULL,
  `nomor` varchar(128) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `pengesahan` varchar(128) NOT NULL,
  `tempat_kedudukan` varchar(128) NOT NULL,
  `notaris` varchar(128) NOT NULL,
  `npwp` varchar(128) NOT NULL,
  `alamat_jalan` varchar(128) NOT NULL,
  `kelurahan` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `kabupaten` varchar(128) NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `kodepos` varchar(128) NOT NULL,
  `no_hp` varchar(128) NOT NULL,
  `no_kantor` varchar(128) NOT NULL,
  `no_fax` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `website` varchar(128) NOT NULL,
  `catatan` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `skalabesar` varchar(128) NOT NULL,
  `bentuk_koperasi` varchar(128) NOT NULL,
  `jenis_koperasi` varchar(128) NOT NULL,
  `kelompok` varchar(128) NOT NULL,
  `sektor` varchar(128) NOT NULL,
  `koperasi_binaan` varchar(128) NOT NULL,
  `pengesahan_badan` varchar(128) NOT NULL,
  `tempatkedudukan2` varchar(128) NOT NULL,
  `notaris_koperasi` varchar(128) NOT NULL,
  `nomor_pad` varchar(128) NOT NULL,
  `tanggal_pad` varchar(128) NOT NULL,
  `notaris_pad` varchar(128) NOT NULL,
  `jangka_waktu` varchar(128) NOT NULL,
  `alasan` varchar(128) NOT NULL,
  `nomor_usaha` varchar(128) NOT NULL,
  `terbit_usaha` varchar(128) NOT NULL,
  `dikeluarkan_usaha` varchar(128) NOT NULL,
  `pjawab_usaha` varchar(128) NOT NULL,
  `nomor_tempat` varchar(128) NOT NULL,
  `terbit_tempat` varchar(128) NOT NULL,
  `dikeluarkan_tempat` varchar(128) NOT NULL,
  `berlaku_tempat` varchar(128) NOT NULL,
  `pjawab_tempat` varchar(128) NOT NULL,
  `nomor_tanda` varchar(128) NOT NULL,
  `terbit_tanda` varchar(128) NOT NULL,
  `dikeluarkan_tanda` varchar(128) NOT NULL,
  `berlaku_tanda` varchar(128) NOT NULL,
  `pjawab_tanda` varchar(128) NOT NULL,
  `norek_1` varchar(128) NOT NULL,
  `pemilik_norek1` varchar(128) NOT NULL,
  `bank_norek1` varchar(128) NOT NULL,
  `norek_2` varchar(128) NOT NULL,
  `pemilik_norek2` varchar(128) NOT NULL,
  `bank_norek2` varchar(128) NOT NULL,
  `usp` varchar(128) NOT NULL,
  `jika_iya` varchar(128) NOT NULL,
  `noizin_simpanpinjam` varchar(128) NOT NULL,
  `terbit_simpanpinjam` varchar(128) NOT NULL,
  `dikeluarkan_simpanpinjam` varchar(128) NOT NULL,
  `berlaku_simpanpinjam` varchar(128) NOT NULL,
  `pjawab_simpanpinjam` varchar(128) NOT NULL,
  `nosertif_syariah` varchar(128) NOT NULL,
  `terbit_syariah` varchar(128) NOT NULL,
  `dikeluarkan_syariah` varchar(128) NOT NULL,
  `berlaku_syariah` varchar(128) NOT NULL,
  `pjawab_syariah` varchar(128) NOT NULL,
  `nosertif_mui` varchar(128) NOT NULL,
  `terbit_mui` varchar(128) NOT NULL,
  `dikeluarkan_mui` varchar(128) NOT NULL,
  `berlaku_mui` varchar(128) NOT NULL,
  `pjawab_mui` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identity_koperasi`
--

INSERT INTO `identity_koperasi` (`id`, `nik`, `form`, `nama_koperasi`, `nomor`, `tanggal`, `pengesahan`, `tempat_kedudukan`, `notaris`, `npwp`, `alamat_jalan`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `kodepos`, `no_hp`, `no_kantor`, `no_fax`, `email`, `website`, `catatan`, `status`, `skalabesar`, `bentuk_koperasi`, `jenis_koperasi`, `kelompok`, `sektor`, `koperasi_binaan`, `pengesahan_badan`, `tempatkedudukan2`, `notaris_koperasi`, `nomor_pad`, `tanggal_pad`, `notaris_pad`, `jangka_waktu`, `alasan`, `nomor_usaha`, `terbit_usaha`, `dikeluarkan_usaha`, `pjawab_usaha`, `nomor_tempat`, `terbit_tempat`, `dikeluarkan_tempat`, `berlaku_tempat`, `pjawab_tempat`, `nomor_tanda`, `terbit_tanda`, `dikeluarkan_tanda`, `berlaku_tanda`, `pjawab_tanda`, `norek_1`, `pemilik_norek1`, `bank_norek1`, `norek_2`, `pemilik_norek2`, `bank_norek2`, `usp`, `jika_iya`, `noizin_simpanpinjam`, `terbit_simpanpinjam`, `dikeluarkan_simpanpinjam`, `berlaku_simpanpinjam`, `pjawab_simpanpinjam`, `nosertif_syariah`, `terbit_syariah`, `dikeluarkan_syariah`, `berlaku_syariah`, `pjawab_syariah`, `nosertif_mui`, `terbit_mui`, `dikeluarkan_mui`, `berlaku_mui`, `pjawab_mui`) VALUES
(6, '3277026402020014', '', 'asdffgg', '0843874', '2022-09-22', 'option2', 'akjfkldfhd', 'asdfnkkdlshfd', '9324073829', 'adskfhaljdskf', 'akafljkadfkldasf', 'alkdsfhladsjkf', 'adkfhlakdsjfdas', '', 'adsfkhldaskgfjlads', '03284932937523', '2309482037423', '23409328490327', 'fenitadiscaa@gmail.com', 'www.jdsfdhsj.com', 'asfjasdkjfdlf', 'option2', 'option2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(7, '2328914382947399', '', 'akdfjjdlsfhsa', '0843924782', '2022-09-08', 'option2', 'adadjfhuriesfhgu', 'idjsfalfhief', '34873294564', 'akjdflhadfhald', 'adljfahlhdfdjkasf', 'adfkjioepwyarielw', 'adskjfadklsfhdkashf', '', '9894730', '23419589453249073802', '12349170328943', '134870574594', 'nabila@gmail.com', 'wwwjflifohl', 'dsfhdalskfjdflhdkf', 'option2', 'option2', 'option2', 'option2', '64', '', 'option2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(8, '2328914382947399', '', 'akdfjjdlsfhsa', '0843924782', '2022-09-08', 'option2', 'adadjfhuriesfhgu', 'idjsfalfhief', '34873294564', 'akjdflhadfhald', 'adljfahlhdfdjkasf', 'adfkjioepwyarielw', 'adskjfadklsfhdkashf', '', '9894730', '23419589453249073802', '12349170328943', '134870574594', 'nabila@gmail.com', 'wwwjflifohl', 'dsfhdalskfjdflhdkf', 'option2', 'option2', 'option2', '', '64', '', 'option2', 'option2', 'gladsfjknkadsjfj', 'adsfnasjdklfjasd', '218743984', '2022-09-15', 'sadfjalfkdsbfdf', '2022-09-10', 'adsfjadsklfdlsaf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'FENITA DISCA', 'fenitadiscaa@gmail.com', 'default.jpg', '$2y$10$MvZNHej6QXRrHECluZO21ubt.WBb85iEYlJw66d9ngtC17wuoP9NK', 1, 1, 1643180368),
(4, 'Nabila Putri', 'nabila@gmail.com', 'default.jpg', '$2y$10$YdT/D9nEUhbKKDlc1R4VUO1X6KT/Avg3e0EgL5.Poi/yK/E7Y4Wcy', 2, 1, 1643185880),
(5, 'Ratna', 'ratna@gmail.com', 'default.jpg', '$2y$10$VAwUmeaIv8K82D6MUibs4eXTuUaI9/9CT4MFAvm1JtFb77eRPVEIG', 2, 1, 1643357197),
(6, 'Ceccilia Christi Natalina', 'cecciliachristi@gmail.com', 'default.jpg', '$2y$10$OR1xQAcLnYdy2kdndqV3We5wP3fZfZjoRkQOtpgMIG5as8D0camfy', 2, 1, 1663256117);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 2, 3),
(6, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Form'),
(4, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user-circle', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Form Nomor Induk Koperasi', 'form', 'fas fa-fw fa-chart-area', 1),
(5, 4, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(6, 4, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `identity_koperasi`
--
ALTER TABLE `identity_koperasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `identity_koperasi`
--
ALTER TABLE `identity_koperasi`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
