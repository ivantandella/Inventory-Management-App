-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 10:06 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_pwl`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_transaksi` bigint(20) UNSIGNED NOT NULL,
  `kode_barang` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sales_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`id_transaksi`, `kode_barang`, `nama_barang`, `jumlah`, `sales_id`, `tanggal_keluar`, `status`, `created_at`, `updated_at`) VALUES
(14, '1210', 'Kabel USB V-8', 25, 3, '2021-06-16', 'accepted', '2021-06-15 20:52:16', '2021-06-15 20:56:56'),
(15, '1212', 'Klip 20s', 50, 3, '2021-06-16', 'accepted', '2021-06-15 20:52:29', '2021-06-15 20:58:29'),
(16, '1208', 'Kotak Hadiah 31x22x11cm', 10, 3, '2021-06-16', 'rejected', '2021-06-15 20:52:41', '2021-06-15 20:58:32'),
(17, '1201', 'Lakban Kertas 60mm', 100, 5, '2021-06-16', 'accepted', '2021-06-15 20:53:23', '2021-06-15 20:58:08'),
(18, '1206', 'Sarung Tangan Plastik 100s', 100, 5, '2021-06-16', 'accepted', '2021-06-15 20:53:36', '2021-06-15 20:59:03'),
(19, '1202', 'Double Tape 24mm', 200, 7, '2021-06-16', 'accepted', '2021-06-15 20:54:28', '2021-06-15 20:57:40'),
(20, '1213', 'Hex Key Set', 25, 7, '2021-06-16', 'rejected', '2021-06-15 20:54:46', '2021-06-15 20:58:47'),
(21, '1201', 'Lakban Kertas 60mm', 50, 7, '2021-06-16', 'rejected', '2021-06-15 20:54:53', '2021-06-15 20:58:02'),
(22, '1203', 'Stick Note Pad', 50, 3, '2021-06-16', 'waiting', '2021-06-15 21:00:31', '2021-06-15 21:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_transaksi` bigint(20) UNSIGNED NOT NULL,
  `kode_barang` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_transaksi`, `kode_barang`, `nama_barang`, `supplier`, `harga`, `jumlah`, `tanggal_masuk`, `created_at`, `updated_at`) VALUES
(9, '1201', 'Lakban Kertas 60mm', 'Toko Serba Ada', 15500, 500, '2021-06-16', '2021-06-15 20:21:02', '2021-06-15 20:21:02'),
(10, '1202', 'Double Tape 24mm', 'Toko Serba Ada', 10000, 500, '2021-06-16', '2021-06-15 20:22:08', '2021-06-15 20:22:08'),
(11, '1203', 'Stick Note Pad', 'D\'Stationary', 9000, 200, '2021-06-16', '2021-06-15 20:23:18', '2021-06-15 20:23:18'),
(12, '1204', 'Cutter Set', 'Ok Store', 13500, 250, '2021-06-16', '2021-06-15 20:25:28', '2021-06-15 20:25:28'),
(13, '1205', 'Meteran 3m', 'Abadi Jaya', 16500, 100, '2021-06-16', '2021-06-15 20:27:02', '2021-06-15 20:27:02'),
(14, '1206', 'Sarung Tangan Plastik 100s', 'Comspace', 8000, 200, '2021-06-16', '2021-06-15 20:29:10', '2021-06-15 20:29:10'),
(15, '1207', 'Kuas Masak 2pcs', 'Baking Town', 15500, 150, '2021-06-16', '2021-06-15 20:32:27', '2021-06-15 20:32:27'),
(16, '1208', 'Kotak Hadiah 31x22x11cm', 'Toko Serba Ada', 58000, 100, '2021-06-16', '2021-06-15 20:33:47', '2021-06-15 20:33:47'),
(17, '1209', 'Buku Catatan A5', 'D\'Stationary', 20000, 300, '2021-06-16', '2021-06-15 20:35:41', '2021-06-15 20:39:38'),
(18, '1210', 'Kabel USB V-8', 'Jovitech', 27500, 100, '2021-06-16', '2021-06-15 20:37:26', '2021-06-15 20:37:26'),
(19, '1211', 'Saringan 18cm', 'Toko Serba Ada', 34000, 125, '2021-06-16', '2021-06-15 20:39:10', '2021-06-15 20:39:10'),
(20, '1210', 'Kabel USB V-8', 'Jovitech', 27500, 50, '2021-06-16', '2021-06-15 20:39:25', '2021-06-15 20:39:25'),
(21, '1212', 'Klip 20s', 'D\'Stationary', 12500, 600, '2021-06-16', '2021-06-15 20:42:44', '2021-06-15 20:42:44'),
(22, '1213', 'Hex Key Set', 'Abadi Jaya', 78000, 200, '2021-06-16', '2021-06-15 20:44:17', '2021-06-15 20:44:17'),
(23, '1214', 'Gunting Kebun', 'Comspace', 48500, 50, '2021-06-16', '2021-06-15 20:45:59', '2021-06-15 20:45:59'),
(24, '1215', 'Tatakan Panci', 'Baking Town', 17500, 100, '2021-06-16', '2021-06-15 20:47:03', '2021-06-15 20:47:03'),
(25, '1216', 'Gembok Kunci Kombinasi', 'Ok Store', 29500, 125, '2021-06-16', '2021-06-15 20:48:07', '2021-06-15 20:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(10, '2021_06_10_134357_create_stok_barang_table', 2),
(12, '2021_06_11_140918_create_barang_masuk_table', 3),
(13, '2021_06_14_050057_create_barang_keluar_table', 4),
(14, '2021_06_15_032237_add_soft_delete_to_users', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$zyjQl90Y69KdphyIkDgXjeiRIwykOV3XGYtcsqZXHe4LZBi9rahtG', '2021-06-15 04:51:03');

-- --------------------------------------------------------

--
-- Table structure for table `stok_barang`
--

CREATE TABLE `stok_barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_barang` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stok_barang`
--

INSERT INTO `stok_barang` (`id`, `kode_barang`, `nama_barang`, `supplier`, `harga`, `jumlah`, `created_at`, `updated_at`) VALUES
(13, '1201', 'Lakban Kertas 60mm', 'Toko Serba Ada', 15500, 400, '2021-06-15 20:21:02', '2021-06-15 20:58:08'),
(14, '1202', 'Double Tape 24mm', 'Toko Serba Ada', 10000, 300, '2021-06-15 20:22:08', '2021-06-15 20:57:40'),
(15, '1203', 'Stick Note Pad', 'D\'Stationary', 9000, 200, '2021-06-15 20:23:18', '2021-06-15 20:23:18'),
(16, '1204', 'Cutter Set', 'Ok Store', 13500, 250, '2021-06-15 20:25:28', '2021-06-15 20:25:28'),
(17, '1205', 'Meteran 3m', 'Abadi Jaya', 16500, 100, '2021-06-15 20:27:02', '2021-06-15 20:27:02'),
(18, '1206', 'Sarung Tangan Plastik 100s', 'Comspace', 8000, 100, '2021-06-15 20:29:10', '2021-06-15 20:59:03'),
(19, '1207', 'Kuas Masak 2pcs', 'Baking Town', 15500, 150, '2021-06-15 20:32:27', '2021-06-15 20:32:27'),
(20, '1208', 'Kotak Hadiah 31x22x11cm', 'Toko Serba Ada', 58000, 100, '2021-06-15 20:33:47', '2021-06-15 20:33:47'),
(21, '1209', 'Buku Catatan A5', 'D\'Stationary', 20000, 300, '2021-06-15 20:35:41', '2021-06-15 20:39:38'),
(22, '1210', 'Kabel USB V-8', 'Jovitech', 27500, 125, '2021-06-15 20:37:26', '2021-06-15 20:56:56'),
(23, '1211', 'Saringan 18cm', 'Toko Serba Ada', 34000, 125, '2021-06-15 20:39:09', '2021-06-15 20:39:09'),
(24, '1212', 'Klip 20s', 'D\'Stationary', 12500, 550, '2021-06-15 20:42:44', '2021-06-15 20:58:29'),
(25, '1213', 'Hex Key Set', 'Abadi Jaya', 78000, 200, '2021-06-15 20:44:17', '2021-06-15 20:44:17'),
(26, '1214', 'Gunting Kebun', 'Comspace', 48500, 50, '2021-06-15 20:45:59', '2021-06-15 20:45:59'),
(27, '1215', 'Tatakan Panci', 'Baking Town', 17500, 100, '2021-06-15 20:47:02', '2021-06-15 20:47:02'),
(28, '1216', 'Gembok Kunci Kombinasi', 'Ok Store', 29500, 125, '2021-06-15 20:48:07', '2021-06-15 20:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `hp`, `alamat`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Rich Brian', 'Admin', '08123456789', 'Jl. Anggrek II', 'admin@gmail.com', NULL, '$2y$10$jzfHGNq.cK0ks0ViDzOA3OWVpHbSqhyaWJUXdhpSqzFB5d/0WLVWO', '9NdjtyL7sDoqb2uSgmSc8dBJPyG3WPd4HuNnu5IujZBVXQAcGSze0e6kPmbH', '2021-06-09 07:30:44', '2021-06-16 01:00:14', NULL),
(2, 'John Doe', 'Gudang', '08123456789', 'Jl. Melati, Medan', 'gudang@gmail.com', NULL, '$2y$10$xFMnMpKN2A/5gAI48dZr3OtDu0VDIN4KT2EDeuqRjXK2qHNdRJQFC', NULL, '2021-06-09 07:42:42', '2021-06-09 07:42:42', NULL),
(3, 'Masaru Edo', 'Sales', '08123456789', 'Jl. Mawar, Medan', 'sales@gmail.com', NULL, '$2y$10$b8JhbNpuh9ytGXunbfRM0OYOn8d.0IbJ0Q0dMrz2dtg6MM5gI6UAG', NULL, '2021-06-09 07:43:39', '2021-06-09 07:43:39', NULL),
(5, 'James Bond', 'Sales', '08123456789', 'Jl. Neraka', 'sales2@gmail.com', NULL, '$2y$10$jrW2XSwdqPobHtZmH9G/y.7k1lWadd5cmjNMqEqaYPPNN7PEpiG8a', NULL, '2021-06-13 05:00:57', '2021-06-13 05:01:48', NULL),
(6, 'Adam Maria', 'Gudang', '08123456789', 'Jl. Kita Berdua', 'gudang2@gmail.com', NULL, '$2y$10$KAcBymi22Ca3xBzbuCOC8OMXPzO9hHTTA0shG/QNbjWtffN67EDgO', NULL, '2021-06-14 20:11:36', '2021-06-14 20:28:34', '2021-06-14 20:28:34'),
(7, 'Anne Miles', 'Sales', '08123456789', 'Jl. Abadi', 'sales3@gmail.com', NULL, '$2y$10$Yum8rF8IbTgFTYg0V6CRJOxIcdbsumZSRDm05gjwWja6dd4CkhKkC', NULL, '2021-06-14 21:56:22', '2021-06-14 21:56:22', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `barang_keluar_sales_id_foreign` (`sales_id`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `stok_barang`
--
ALTER TABLE `stok_barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stok_barang_kode_barang_unique` (`kode_barang`);

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
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id_transaksi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id_transaksi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stok_barang`
--
ALTER TABLE `stok_barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD CONSTRAINT `barang_keluar_sales_id_foreign` FOREIGN KEY (`sales_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
