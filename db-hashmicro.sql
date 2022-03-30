-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2022 at 11:10 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-hashmicro`
--

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
-- Table structure for table `history_stnk`
--

CREATE TABLE `history_stnk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_stnk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kendaraans_id` int(11) DEFAULT NULL,
  `silinder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tnkb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pkb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_stnk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_pajak_stnk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_polisi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_mesin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swdkllj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bahan_bakar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warna` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pajak_jasa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_rangka` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masa_berlaku` date DEFAULT NULL,
  `jasa_perpanjang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_kendaraan` int(11) DEFAULT NULL,
  `no_bpkb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pajak_stnk` date DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stnk_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_stnk`
--

INSERT INTO `history_stnk` (`id`, `no_stnk`, `jenis_kendaraans_id`, `silinder`, `tnkb`, `pkb`, `nama_stnk`, `nilai_pajak_stnk`, `no_polisi`, `model`, `no_mesin`, `swdkllj`, `bahan_bakar`, `warna`, `pajak_jasa`, `merk`, `no_rangka`, `masa_berlaku`, `jasa_perpanjang`, `tahun_kendaraan`, `no_bpkb`, `pajak_stnk`, `status_id`, `users_id`, `created_at`, `updated_at`, `stnk_id`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-03-22 08:44:45', '2022-03-22 08:44:45', 1),
(2, NULL, NULL, NULL, NULL, NULL, 'Endi Update', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Alparzd Urerr', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-22 08:50:35', '2022-03-22 08:50:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kendaraans`
--

CREATE TABLE `jenis_kendaraans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_kendaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_kendaraans`
--

INSERT INTO `jenis_kendaraans` (`id`, `jenis_kendaraan`, `created_at`, `updated_at`) VALUES
(1, 'Pesawat', '2022-03-22 15:24:53', NULL),
(2, 'Mobil', NULL, NULL),
(3, 'Motor', '2022-03-22 15:25:43', NULL),
(4, 'Sepeda', '2022-03-22 15:25:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2022-03-22 15:21:46', NULL);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_14_125216_create_status_table', 1),
(6, '2021_12_14_125358_create_jenis_kendaraans_table', 1),
(7, '2021_12_14_125511_create_stnk_table', 1),
(8, '2021_12_14_162243_create_level_table', 1),
(9, '2021_12_14_162443_add_level_id_to_users_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Active', '2022-03-22 15:24:12', NULL),
(2, 'Non Active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stnk`
--

CREATE TABLE `stnk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_stnk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kendaraans_id` int(11) NOT NULL,
  `silinder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tnkb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_stnk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_pajak_stnk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_polisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_mesin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `swdkllj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahan_bakar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pajak_jasa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rangka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_berlaku` date NOT NULL,
  `jasa_perpanjang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_kendaraan` int(11) NOT NULL,
  `no_bpkb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pajak_stnk` date NOT NULL,
  `status_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stnk`
--

INSERT INTO `stnk` (`id`, `no_stnk`, `jenis_kendaraans_id`, `silinder`, `tnkb`, `pkb`, `nama_stnk`, `nilai_pajak_stnk`, `no_polisi`, `model`, `no_mesin`, `swdkllj`, `bahan_bakar`, `warna`, `pajak_jasa`, `merk`, `no_rangka`, `masa_berlaku`, `jasa_perpanjang`, `tahun_kendaraan`, `no_bpkb`, `pajak_stnk`, `status_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, '4123B79B', 2, '3434', 'abc123', 'Rp. 140.000', 'Endi Julian', 'Rp. 100.000', 'B1234AB', 'Mini Bus', 'DC817902', 'Rp. 35.000', 'Bensin Update', 'Hitam', 'Rp. 100.000', 'Alparzd Urerr', 'MHIFKLMN9808', '2022-03-23', 'Rp. 50.000', 7089, 'NO01234578', '2022-03-22', 1, 1, '2022-03-22 08:33:13', '2022-03-22 08:50:35');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level_id`) VALUES
(1, 'Endi Julian', 'endijulian080798@gmail.com', NULL, '$2y$10$fFJGiHNpTBfSUxx2wZLRV.pfFY0lChc800hT2OgNAtraTBZRzpBKi', NULL, '2022-03-22 15:20:47', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `history_stnk`
--
ALTER TABLE `history_stnk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_kendaraans`
--
ALTER TABLE `jenis_kendaraans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stnk`
--
ALTER TABLE `stnk`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_stnk`
--
ALTER TABLE `history_stnk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_kendaraans`
--
ALTER TABLE `jenis_kendaraans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stnk`
--
ALTER TABLE `stnk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
