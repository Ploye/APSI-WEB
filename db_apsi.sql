-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 03:28 AM
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
(25, 1, 'P001', '2020-12-24 15:53:08', '2020-12-25 00:41:47'),
(31, 1, 'P001', '2020-12-25 01:13:07', '2020-12-25 01:14:22'),
(32, 0, 'P002', '2020-12-25 01:13:08', '2020-12-25 01:13:08'),
(33, 0, 'P003', '2020-12-25 01:13:08', '2020-12-25 01:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `baju`
--

CREATE TABLE `baju` (
  `id_baju` int(10) UNSIGNED NOT NULL,
  `kode_baju` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_baju` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahan` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_baju` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint(20) UNSIGNED NOT NULL,
  `stok` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('P001', 'musa', 'Laki', 821231, 'obos', 'dimanawe', 'musa7076@gmail.com', '2020-12-24 15:53:07', '2020-12-24 15:53:07'),
('P002', 'ujang', 'Laki', 3232, 'babu', 'asdasd', 'admin@gmail.com', '2020-12-24 15:53:24', '2020-12-24 15:53:24'),
('P003', 'sahawe', 'Laki', 3232, 'dasd', 'adw', 'sass', '2020-12-25 00:34:12', '2020-12-25 00:34:12');

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
(61, 40000, 2, 80000, 'P001', 'musa', 'obos', NULL, '2020-11-26 15:53:08', '2020-12-25 01:14:22'),
(62, 40000, 0, 0, 'P002', 'ujang', 'babu', NULL, '2020-12-24 15:53:26', '2020-12-24 15:53:42'),
(63, 40000, 0, NULL, 'P003', 'sahawe', 'dasd', NULL, '2020-12-25 00:34:12', '2020-12-25 00:34:12');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Musa', 'musa7076@gmail.com', NULL, '$2y$10$egaK1ZN5E/nr3Yb9s5iYduXPF9dbEomrd2XI5fxKraygvC6PuTs6e', NULL, '2020-12-06 07:04:47', '2020-12-06 07:04:47'),
(2, 'husen', 'husen@gmail.com', NULL, '$2y$10$Eu4otd3fbe2hGv7SpJgITee4OWy/aENvRejwWOGtNol01PwjmoK7e', NULL, '2020-12-20 05:35:27', '2020-12-20 05:35:27');

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `baju`
--
ALTER TABLE `baju`
  MODIFY `id_baju` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penggajian`
--
ALTER TABLE `penggajian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
