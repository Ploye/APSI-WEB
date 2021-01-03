-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 05:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_apsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_pegawai` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id`, `status`, `id_pegawai`, `created_at`, `updated_at`) VALUES
(56, 1, 'P001', '2021-01-01 07:25:13', '2021-01-01 07:36:29'),
(57, 0, 'P002', '2021-01-01 07:32:10', '2021-01-01 13:03:24'),
(58, 0, 'P003', '2021-01-01 07:32:10', '2021-01-01 13:03:23'),
(59, 0, 'P004', '2021-01-01 07:32:10', '2021-01-01 13:03:22'),
(60, 0, 'P005', '2021-01-01 07:32:10', '2021-01-01 13:03:22'),
(61, 1, 'P001', '2021-01-03 11:52:37', '2021-01-03 12:54:31'),
(62, 1, 'P002', '2021-01-03 11:52:37', '2021-01-03 11:52:54'),
(63, 1, 'P003', '2021-01-03 11:52:37', '2021-01-03 11:52:55'),
(64, 1, 'P004', '2021-01-03 11:52:37', '2021-01-03 11:52:55'),
(65, 1, 'P005', '2021-01-03 11:52:37', '2021-01-03 11:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `baju`
--

CREATE TABLE `baju` (
  `id_baju` int(10) UNSIGNED NOT NULL,
  `kode_baju` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_baju` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahan` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warnabaju` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_baju` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint(20) UNSIGNED NOT NULL,
  `stok` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baju`
--

INSERT INTO `baju` (`id_baju`, `kode_baju`, `nama_baju`, `bahan`, `warnabaju`, `ukuran`, `jenis_baju`, `harga`, `stok`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'B001', 'suprim', 'KAIN FLECE', 'SEMUA WARNA ADA', 'L', 'PANJANG PENDEK', 70000, '10', 'order.jpg', '2020-12-31 09:21:44', '2020-12-31 09:40:59'),
(2, 'PUBG', 'BAJU PUBG', 'KAIN FLECE', 'SEMUA WARNA ADA', 'ALL SIZE', 'PANJANG PENDEK', 70000, '23', 'pubg.png', '2020-12-31 13:14:54', '2020-12-31 13:18:05'),
(3, 'B02', 'SUPREM', 'KAIN FLECE', 'SEMUA WARNA ADA', 'ALL SIZE', 'TANGAN PANJANG', 60000, '1', 'design.jpg', '2021-01-03 07:49:12', '2021-01-03 08:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Musa', 'musa7076@gmail.com', NULL, '$2y$10$egaK1ZN5E/nr3Yb9s5iYduXPF9dbEomrd2XI5fxKraygvC6PuTs6e', NULL, '2020-12-06 07:04:47', '2020-12-06 07:04:47'),
(2, 'husen', 'husen@gmail.com', NULL, '$2y$10$Eu4otd3fbe2hGv7SpJgITee4OWy/aENvRejwWOGtNol01PwjmoK7e', NULL, '2020-12-20 05:35:27', '2020-12-20 05:35:27'),
(3, 'cika', 'cika@gmail.com', NULL, '$2y$10$CK4U7N4/v2.P9Fd2bIg3q.s7TF.xbeNd.P5PcSvu5mAL.OOMQwOFC', NULL, '2020-12-27 13:13:28', '2020-12-27 13:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_baju` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_baju` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahan` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warnabaju` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_baju` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint(20) UNSIGNED NOT NULL,
  `stok` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporanbeli`
--

CREATE TABLE `laporanbeli` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_baju` char(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_baju` char(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bahan` char(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warnabaju` char(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ukuran` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_baju` char(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` bigint(20) UNSIGNED DEFAULT NULL,
  `qty` int(5) DEFAULT NULL,
  `bayar` bigint(20) UNSIGNED DEFAULT NULL,
  `avatar` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_cs` char(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_cs` char(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_cs` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metodeByr` char(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporanbeli`
--

INSERT INTO `laporanbeli` (`id`, `kode_baju`, `nama_baju`, `bahan`, `warnabaju`, `ukuran`, `jenis_baju`, `harga`, `qty`, `bayar`, `avatar`, `nama_cs`, `email_cs`, `alamat_cs`, `metodeByr`, `created_at`, `updated_at`) VALUES
(5, 'B001', 'suprim', 'KAIN FLECE', 'SEMUA WARNA ADA', 'M', 'TANGAN PANJANG', 70000, 1, 70000, NULL, 'ggdgd', 'saidinahusen12@gmail.com', 'Jl didi prawirakusumah no. 48 Maleber Kp. Jero 002/003', 'DIANTAR KURIR', '2021-01-02 13:14:30', '2021-01-02 13:14:30'),
(6, 'B001', 'suprim', 'KAIN FLECE', 'SEMUA WARNA ADA', 'M', 'TANGAN PANJANG', 70000, 1, 70000, 'order.jpg', 'SAIDINA HUSEN', 'dgd@gmail.com', 'Jl didi prawirakusumah no. 48 Maleber Kp. Jero 002/003', 'DIANTAR KURIR', '2021-01-02 13:19:09', '2021-01-02 13:19:09'),
(7, 'B001', 'suprim', 'KAIN FLECE', 'SEMUA WARNA ADA', 'M', 'TANGAN PANJANG', 70000, 1, 70000, 'order.jpg', 'SAIDINA HUSEN', 'dgd@gmail.com', 'Jl didi prawirakusumah no. 48 Maleber Kp. Jero 002/003', 'DIANTAR KURIR', '2021-01-02 13:25:05', '2021-01-02 13:25:05'),
(8, 'B001', 'suprim', 'KAIN FLECE', 'HITAM', 'M', 'TANGAN PANJANG', 70000, 1, 70000, 'order.jpg', 'SAIDINA HUSEN', 'dgd@gmail.com', 'Jl didi prawirakusumah no. 48 Maleber Kp. Jero 002/003', 'DATANG KE TOKO', '2021-01-02 13:30:08', '2021-01-02 13:30:08'),
(9, 'B001', 'suprim', 'KAIN FLECE', 'HIJAU', 'M', 'TANGAN PANJANG', 70000, 1, 70000, 'order.jpg', 'SAIDINA HUSEN', 'dgd@gmail.com', 'Jl didi prawirakusumah no. 48 Maleber Kp. Jero 002/003', 'DATANG KE TOKO', '2021-01-02 13:31:41', '2021-01-02 13:31:41'),
(10, 'B001', 'suprim', 'KAIN FLECE', 'HIJAU', 'M', 'TANGAN PANJANG', 70000, 1, 70000, 'order.jpg', 'SAIDINA HUSEN', 'dgd@gmail.com', 'Jl didi prawirakusumah no. 48 Maleber Kp. Jero 002/003', 'DATANG KE TOKO', '2021-01-02 13:35:05', '2021-01-02 13:35:05'),
(11, 'B001', 'suprim', 'KAIN FLECE', 'HIJAU', 'M', 'TANGAN PANJANG', 70000, 1, 70000, 'order.jpg', 'SAIDINA HUSEN', 'dgd@gmail.com', 'Jl didi prawirakusumah no. 48 Maleber Kp. Jero 002/003', 'DATANG KE TOKO', '2021-01-02 13:36:05', '2021-01-02 13:36:05'),
(12, 'B001', 'suprim', 'KAIN FLECE', 'SEMUA WARNA ADA', 'M', 'TANGAN PANJANG', 70000, 1, 70000, 'order.jpg', 'ggdgd', 'saidinahusen12@gmail.com', 'Jl didi prawirakusumah no. 48 Maleber Kp. Jero 002/003', 'DIANTAR KURIR', '2021-01-02 13:49:16', '2021-01-02 13:49:16'),
(13, 'PUBG', 'BAJU PUBG', 'KAIN FLECE', 'SEMUA WARNA ADA', 'M', 'TANGAN PANJANG', 70000, 1, 70000, 'pubg.png', 'SAIDINA HUSEN', 'saidinahusen12@gmail.com', 'dsadsa dadasdasd', 'DIANTAR KURIR', '2021-01-02 13:51:35', '2021-01-02 13:51:35'),
(14, 'B001', 'suprim', 'KAIN FLECE', 'PUTIH', 'M', 'TANGAN PANJANG', 70000, 1, 70000, 'order.jpg', 'adsda', 'dgd@gmail.com', 'Jl didi prawirakusumah no. 48 Maleber Kp. Jero 002/003', 'DIANTAR KURIR', '2021-01-03 04:30:55', '2021-01-03 04:30:55'),
(15, 'PUBG', 'BAJU PUBG', 'KAIN FLECE', 'PUTIH', 'M', 'TANGAN PANJANG', 70000, 1, 70000, 'pubg.png', 'yaniiiii', 'yani@gmail.com', 'bunpas', 'DIANTAR KURIR', '2021-01-03 04:41:00', '2021-01-03 04:41:00'),
(16, 'PUBG', 'BAJU PUBG', 'KAIN FLECE', 'PUTIH', 'M', 'TANGAN PANJANG', 70000, 1, 70000, 'pubg.png', 'nanii', 'yani@gmail.com', 'bunpas', 'DIANTAR KURIR', '2021-01-03 04:43:40', '2021-01-03 04:43:40'),
(17, 'PUBG', 'BAJU PUBG', 'KAIN FLECE', 'PUTIH', 'M', 'TANGAN PANJANG', 70000, 1, 70000, 'pubg.png', 'nanii', 'yani@gmail.com', 'bunpas', 'DIANTAR KURIR', '2021-01-03 04:44:08', '2021-01-03 04:44:08'),
(18, 'PUBG', 'BAJU PUBG', 'KAIN FLECE', 'PUTIH', 'M', 'TANGAN PANJANG', 70000, 1, 70000, 'pubg.png', 'nanii', 'yani@gmail.com', 'bunpasww', 'DIANTAR KURIR', '2021-01-03 04:52:18', '2021-01-03 04:52:18'),
(19, 'PUBG', 'BAJU PUBG', 'KAIN FLECE', 'PUTIH', 'M', 'TANGAN PANJANG', 70000, 1, 70000, 'pubg.png', 'nanii', 'yani@gmail.com', 'bunpasww', 'DIANTAR KURIR', '2021-01-03 04:54:36', '2021-01-03 04:54:36'),
(20, 'B001', 'suprim', 'KAIN FLECE', 'PUTIH', 'M', 'TANGAN PANJANG', 70000, NULL, 70000, 'order.jpg', 'ggdgd', 'dgd@gmail.com', 'bunpasww', 'DATANG KE TOKO', '2021-01-03 06:00:14', '2021-01-03 06:00:14'),
(21, 'PO-husen', NULL, 'KAIN FLECE', 'PUTIH', 'M', 'TANGAN PANJANG', NULL, 1, NULL, NULL, 'SAIDINA HUSEN', 'saidinahusen12@gmail.com', 'bunpasww', 'DIANTAR KURIR', '2021-01-03 07:42:58', '2021-01-03 07:42:58'),
(22, 'PO-husen', NULL, 'KAIN FLECE', 'PUTIH', 'M', 'TANGAN PANJANG', NULL, 1, NULL, '43625434_635db99c-1a21-4e8e-8eff-7e11a6df0008_2048_2048.jpg', 'ggdgd', 'yani@gmail.com', 'dsadsa dadasdasd', 'DIANTAR KURIR', '2021-01-03 07:56:58', '2021-01-03 07:56:58'),
(23, 'PO-husen', NULL, 'KAIN FLECE', 'PUTIH', 'M', 'TANGAN PANJANG', NULL, 1, NULL, '43625434_635db99c-1a21-4e8e-8eff-7e11a6df0008_2048_2048.jpg', 'SAIDINA HUSEN', 'saidinahusen12@gmail.com', 'Jl didi prawirakusumah no. 48 Maleber Kp. Jero 002/003', 'DIANTAR KURIR', '2021-01-03 08:48:59', '2021-01-03 08:48:59'),
(24, 'PO-husen', NULL, 'KAIN FLECE', 'PUTIH', 'M', 'TANGAN PANJANG', NULL, 1, NULL, 'HARGA-BAJU-DAN-KAOS-SABLON-TERJANGKAU-KUALITAS-TERBAIK.jpg', 'SAIDINA HUSEN', 'saidinahusen12@gmail.com', 'dsadsa dadasdasd', 'DIANTAR KURIR', '2021-01-03 08:51:34', '2021-01-03 08:51:34'),
(25, 'PO-husen', NULL, 'KAIN FLECE', 'PUTIH', 'M', 'TANGAN PANJANG', NULL, 1, NULL, 'HARGA-BAJU-DAN-KAOS-SABLON-TERJANGKAU-KUALITAS-TERBAIK.jpg', 'ggdgd', 'saidinahusen12@gmail.com', 'dsadsa dadasdasd', 'DIANTAR KURIR', '2021-01-03 08:54:17', '2021-01-03 08:54:17'),
(26, 'B02', 'SUPREM', 'KAIN FLECE', 'PUTIH', 'M', 'TANGAN PANJANG', 60000, 2, 120000, NULL, 'SAIDINA HUSEN', 'saidinahusen12@gmail.com', 'Jl didi prawirakusumah no. 48 Maleber Kp. Jero 002/003', 'DATANG KE TOKO', '2021-01-03 10:12:05', '2021-01-03 10:12:05'),
(27, 'B001', 'suprim', 'KAIN FLECE', 'PUTIH', 'M', 'TANGAN PANJANG', 70000, 3, 210000, NULL, 'ggdgd', 'saidinahusen12@gmail.com', 'Jl didi prawirakusumah no. 48 Maleber Kp. Jero 002/003', 'DIANTAR KURIR', '2021-01-03 10:21:53', '2021-01-03 10:21:53'),
(28, 'B001', 'suprim', 'KAIN FLECE', 'PUTIH', 'M', 'TANGAN PANJANG', 70000, 4, 280000, NULL, 'ggdgd', 'saidinahusen12@gmail.com', 'Jl didi prawirakusumah no. 48 Maleber Kp. Jero 002/003', 'DIANTAR KURIR', '2021-01-03 10:23:42', '2021-01-03 10:23:42'),
(29, 'B001', 'suprim', 'KAIN FLECE', 'PUTIH', 'M', 'TANGAN PANJANG', 70000, 4, 280000, 'order.jpg', 'SAIDINA HUSEN', 'saidinahusen12@gmail.com', 'Jl didi prawirakusumah no. 48 Maleber Kp. Jero 002/003', 'DIANTAR KURIR', '2021-01-03 10:30:54', '2021-01-03 10:30:54'),
(30, 'PO-husen', NULL, 'KAIN FLECE', 'PUTIH', 'M', 'TANGAN PANJANG', NULL, 5, NULL, 'Inilah-Manfaat-Kaos-Sablon-Untuk-Berbagai-Kegiatan.jpg', 'SAIDINA HUSEN', 'saidinahusen12@gmail.com', 'Jl didi prawirakusumah no. 48 Maleber Kp. Jero 002/003', 'DATANG KE TOKO', '2021-01-03 10:32:43', '2021-01-03 10:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_26_134931_create_pegawai_table', 1),
(5, '2020_11_26_135458_create_penggajian_table', 1),
(6, '2020_11_28_054534_create_absen_table', 1),
(7, '2020_12_03_065758_create_baju_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` bigint(20) UNSIGNED NOT NULL,
  `jabatan` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` char(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `jenis_kelamin`, `no_hp`, `jabatan`, `alamat`, `email`, `created_at`, `updated_at`) VALUES
('P001', 'musa m', 'Laki-Laki', 821231, 'Admin', 'dimanawe', 'musa7076@gmail.com', '2021-01-01 07:22:39', '2021-01-01 13:06:00'),
('P002', 'Alvin', 'Laki-Laki', 8212312312, 'Produksi', 'teing', 'alvin@gmail.com', '2021-01-01 07:25:49', '2021-01-01 07:25:49'),
('P003', 'Alma', 'Perempuan', 8212312221, 'Admin', 'diditu', 'alma@gmail.com', '2021-01-01 07:26:16', '2021-01-01 13:05:20'),
('P004', 'Ridho', 'Laki-Laki', 821231321, 'Admin', 'Cikalog', 'ridho@gmail.com', '2021-01-01 07:26:52', '2021-01-01 07:26:52'),
('P005', 'Lingga', 'Laki-Laki', 821231999, 'Admin', 'dimanawe', 'lingga@gmail.com', '2021-01-01 07:27:23', '2021-01-01 13:05:30');

-- --------------------------------------------------------

--
-- Table structure for table `penggajian`
--

CREATE TABLE `penggajian` (
  `id` int(11) NOT NULL,
  `gaji_pokok` bigint(20) DEFAULT NULL,
  `jml_hadir` bigint(20) UNSIGNED DEFAULT NULL,
  `gaji_diterima` bigint(20) DEFAULT NULL,
  `id_pegawai` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `absen_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penggajian`
--

INSERT INTO `penggajian` (`id`, `gaji_pokok`, `jml_hadir`, `gaji_diterima`, `id_pegawai`, `nama`, `jabatan`, `absen_id`, `created_at`, `updated_at`) VALUES
(66, 40000, 2, 80000, 'P001', 'musa m', 'Admin', NULL, '2021-01-01 07:32:21', '2021-01-03 12:54:31'),
(67, 40000, 1, 40000, 'P002', 'Alvin', 'Produksi', NULL, '2021-01-01 07:32:21', '2021-01-03 11:52:54'),
(68, 40000, 1, 40000, 'P003', 'Alma', 'Admin', NULL, '2021-01-01 07:32:22', '2021-01-03 11:52:55'),
(69, 40000, 1, 40000, 'P004', 'Ridho', 'Admin', NULL, '2021-01-01 07:32:22', '2021-01-03 11:52:55'),
(70, 40000, 1, 40000, 'P005', 'Lingga', 'Admin', NULL, '2021-01-01 07:32:23', '2021-01-03 11:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Musa', 'musa7076@gmail.com', NULL, '$2y$10$egaK1ZN5E/nr3Yb9s5iYduXPF9dbEomrd2XI5fxKraygvC6PuTs6e', NULL, NULL, '2020-12-06 07:04:47', '2020-12-06 07:04:47'),
(2, 'husen', 'husen@gmail.com', NULL, '$2y$10$Eu4otd3fbe2hGv7SpJgITee4OWy/aENvRejwWOGtNol01PwjmoK7e', NULL, NULL, '2020-12-20 05:35:27', '2020-12-20 05:35:27'),
(3, 'cika', 'cika@gmail.com', NULL, '$2y$10$CK4U7N4/v2.P9Fd2bIg3q.s7TF.xbeNd.P5PcSvu5mAL.OOMQwOFC', NULL, NULL, '2020-12-27 13:13:28', '2020-12-27 13:13:28'),
(4, 'saha', 'saha@gmail.com', NULL, '$2y$10$qJBqrbVM7HkJbA.MoXmpyONEUWyB01YYtED6fuYDeJq4tZMOuDcDW', NULL, NULL, '2021-01-03 15:41:58', '2021-01-03 15:41:58'),
(5, 'coba', 'coba@gmail.com', NULL, '$2y$10$GavEUqK.FKHGJi5D7VxRL.U0UlumFuFQVyOTYDMvODRjoK2LF7QDe', NULL, NULL, '2021-01-03 15:52:57', '2021-01-03 15:52:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absen_id_pegawai_index` (`id_pegawai`);

--
-- Indexes for table `baju`
--
ALTER TABLE `baju`
  ADD PRIMARY KEY (`id_baju`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporanbeli`
--
ALTER TABLE `laporanbeli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `penggajian`
--
ALTER TABLE `penggajian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penggajian_id_pegawai_index` (`id_pegawai`),
  ADD KEY `penggajian_id_absen_index` (`absen_id`),
  ADD KEY `absen_id` (`absen_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `baju`
--
ALTER TABLE `baju`
  MODIFY `id_baju` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporanbeli`
--
ALTER TABLE `laporanbeli`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penggajian`
--
ALTER TABLE `penggajian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON UPDATE CASCADE;

--
-- Constraints for table `penggajian`
--
ALTER TABLE `penggajian`
  ADD CONSTRAINT `penggajian_ibfk_1` FOREIGN KEY (`absen_id`) REFERENCES `absen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penggajian_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
