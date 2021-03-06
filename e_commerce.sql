-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 07:24 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `barus`
--

CREATE TABLE `barus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barus`
--

INSERT INTO `barus` (`id`, `nama`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Kaos Dreambirds Artwear', 200000, 'images/Sd6A2WKcd7DanfpNvB8GKHQkCJ4SzTpybUzi5dhl.jpg', NULL, '2020-12-21 02:34:36'),
(3, 'Sweater Rajut Zico', 160000, 'images/M8HRCvZrkj3QZyxFPF0zFola5iVBj1XOLbu2QNXz.jpg', '2020-12-21 02:43:20', '2020-12-21 02:43:20'),
(4, 'Jaket Uniqlo', 500000, 'images/qc8JY0klHMMCiUb8Kj2EkY4viBDamULJVamrqxDf.jpg', '2020-12-21 02:44:46', '2020-12-21 02:44:46'),
(5, 'Kaos Herschel', 500000, 'images/Ouxc3ejsiIMt4h0oK6xB81HHdMgB3IFQEGzLhmku.jpg', '2020-12-21 04:57:24', '2020-12-21 04:57:24'),
(6, 'Gamis Elzatta', 329000, 'images/t99mtEEXJn4wtdi0V7P3iymZZmBfx8zLvfbgIW2O.jpg', '2020-12-21 04:59:04', '2020-12-21 04:59:04'),
(7, 'Sweater Hush Puppies', 150000, 'images/oOQBwmRb8xdyMPIsZjroLqc0b3VCww70gvLEj8wu.png', '2020-12-21 04:59:45', '2020-12-21 04:59:45'),
(8, 'Kaos Oshkosh Bgosh', 133000, 'images/hYpWl3uTXvDsJwfkCKobYYYXKhadqEUJX6tgfBz0.jpg', '2020-12-21 05:00:43', '2020-12-21 05:00:43'),
(9, 'Jaket Sport Anak', 209000, 'images/xIS2xYzyyy4OAl8BKd02SCs9uYip0NpRl2tB475i.jpg', '2020-12-21 05:01:31', '2020-12-21 05:01:31'),
(10, 'Sweater Anak', 179500, 'images/HBH0DOzaZcCTJGaaGrWY3iTT0AfiGwH4F3aHM8Ci.jpg', '2020-12-21 05:02:16', '2020-12-21 05:02:16'),
(11, 'abc', 1000000, 'images/V37zn8p3XFzgsSUSAfJyNQSXn2aAzYKL1HQg3MRY.jpg', '2020-12-24 04:32:20', '2020-12-24 04:32:20');

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
(4, '2020_12_20_122036_create_terbaru_table', 2),
(5, '2020_12_21_072104_create_news_table', 3),
(6, '2020_12_21_073509_create_barus_table', 4),
(7, '2020_12_24_131142_create_womens_table', 5),
(8, '2020_12_25_124411_create_womens_table', 6);

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

-- --------------------------------------------------------

--
-- Table structure for table `womens`
--

CREATE TABLE `womens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `womens`
--

INSERT INTO `womens` (`id`, `nama_produk`, `keterangan`, `harga`, `jenis`, `ukuran`, `stok`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Kaos Herschel', 'Bahannya sangat berkualitas dan nyaman dipakai\r\nStok untuk ukuran S = 25, ukuran M = 25, ukuran L = 25, ukuran M = 25', 500000, 'Kaos lengan pendek', 'S,M,L,XL', 100, 'images/rritQakg49ilub8KV9g1b1cp8vxp44MSe864awiP.jpg', NULL, '2020-12-25 23:08:12'),
(2, 'Kaos long sleeve', 'Kaos berbahan cotton combed yang didesain trendi\r\nStok untuk ukuran S = 10, ukuran M = 30, ukuran L = 30', 150000, 'Kaos lengan pendek', 'S,M,L', 70, 'images/lMZgalAyfhyWKC1oW6OZSM01taidFGxyqVXuHKym.jpg', '2020-12-25 06:46:40', '2020-12-25 23:11:18'),
(3, 'Sweater Hush Puppies', 'Bahannya lembut dan nyaman dipakai\r\nStok ukuran L = 30, ukuran XL = 15, ukuran XXL = 10', 150000, 'Kaos lengan pendek', 'L,XL,XXL', 55, 'images/UMubrCbHae2JrFbO5GrNhRa2RQrkwlXBiJQtgvxo.png', '2020-12-25 07:32:06', '2020-12-25 23:12:39'),
(4, 'Jaket Rimas Fleece', 'Desainnya trendi dan material fleece\r\nStok ukuran S = 5, ukuran M = 10, ukuran L = 10, ukuran XL = 5, ukuran XXL = 6, ukuran XXXL = 4', 116000, 'Kaos lengan pendek', 'S,M,L,XL,XXL,XXXL', 40, 'images/MPLb5ADaciKC3FY49ByHxdH01wA3GcULNy2ZT3Mn.jpg', '2020-12-25 08:25:38', '2020-12-25 23:16:18'),
(5, 'Gamis Elzatta', 'Bahannya lembut, banyak motif, dan trendi\r\nStok ukuran M = 2, ukuran L = 2, ukuran XL = 2, ukuran XXL = 2, ukuran XXXL = 2', 329000, 'Kaos lengan pendek', 'M,L,XL,XXL,XXXL', 10, 'images/amCM1AUzjdXJpEewCExJp8PJjltANgPCK9VXl2xi.jpg', '2020-12-25 08:28:19', '2020-12-25 23:17:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barus`
--
ALTER TABLE `barus`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `womens`
--
ALTER TABLE `womens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barus`
--
ALTER TABLE `barus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `womens`
--
ALTER TABLE `womens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
