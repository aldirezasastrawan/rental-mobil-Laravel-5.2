-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jun 2017 pada 10.13
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental-mobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usia` int(11) NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `nama`, `usia`, `jenis_kelamin`, `alamat`, `telepon`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Aldi Reza Sastrawan', 23, 'Laki-laki', 'Bekasi Jaya Joss', '02144475545', 'aldirezasastrawan@gmail.com', '2017-06-01 07:33:18', '2017-06-02 02:26:25'),
(2, 'Moh Rahmat Wira', 22, 'Laki-laki', 'Bintara', '0211155564789', 'mor@gmail.com', '2017-06-01 07:34:14', '2017-06-01 07:34:14'),
(3, 'Yachinda Elma O.F', 22, 'Perempuan', 'Cawang Jaktim', '08445133', 'elma@gmail.com', '2017-06-01 07:50:40', '2017-06-01 07:50:40'),
(4, 'Azzah Firdaningsih', 22, 'Perempuan', 'Tanjung Ubang', '024455788', 'azzah@yahoo.com', '2017-06-01 07:51:38', '2017-06-01 07:51:38'),
(5, 'Fazri Ramadhan', 22, 'Laki-laki', 'Depok', '78933014', 'fazri@gmail.com', '2017-06-01 12:18:39', '2017-06-01 12:18:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_06_04_154316_buat_tabel_customer', 1),
('2016_06_05_091137_buat_tabel_mobil', 2),
('2017_06_01_142034_buat_tabel_sewa', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id` int(10) UNSIGNED NOT NULL,
  `plat_nomor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_mobil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_mobil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tarif_sewa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id`, `plat_nomor`, `nama_mobil`, `jenis_mobil`, `tarif_sewa`, `created_at`, `updated_at`) VALUES
(12, 'B 1 SAF', 'Mercedes Benz C 320 AMG', 'Sedan', 'Rp. 800.000', '2017-06-05 22:52:16', '2017-06-05 22:52:16'),
(13, 'B 1780 TZR', 'Hoda Brio', 'City Car', 'Rp. 350.000', '2017-06-05 22:54:53', '2017-06-05 22:54:53'),
(14, 'F 411', 'Mercedes Benz-Maybach S 600 Pullman Guard', 'Sedan', 'Rp. 1.500.000', '2017-06-05 23:04:11', '2017-06-05 23:04:11'),
(15, 'B 32 RFS', 'BMW 730Li  M3 Sport Edition', 'Sedan', 'Rp. 1.000.000', '2017-06-05 23:04:37', '2017-06-05 23:04:37'),
(16, 'B 3013 KZY', 'Kijang Innova Venturer', 'Mini Bus', 'Rp. 500.000', '2017-06-05 23:05:01', '2017-06-05 23:05:01'),
(17, 'B 313 KWR', 'Honda Odysey', 'Mini Bus', 'Rp. 800.000', '2017-06-05 23:05:38', '2017-06-05 23:05:38'),
(18, 'B 1 PFA', 'Mazda 2', 'City Car', 'Rp. 350.000', '2017-06-06 02:47:55', '2017-06-06 02:47:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa`
--

CREATE TABLE `sewa` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED DEFAULT NULL,
  `mobil_id` int(10) UNSIGNED DEFAULT NULL,
  `tanggal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tarif_sewa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `sewa`
--

INSERT INTO `sewa` (`id`, `customer_id`, `mobil_id`, `tanggal`, `tarif_sewa`, `created_at`, `updated_at`) VALUES
(8, 1, 14, '2017-06-06', 'Rp. 1.500.000', '2017-06-05 23:06:18', '2017-06-05 23:06:18'),
(9, 3, 16, '2017-06-08', 'Rp. 500.000', '2017-06-06 00:15:58', '2017-06-06 00:15:58'),
(10, 2, 18, '2017-06-30', 'Rp. 350.000', '2017-06-06 02:48:36', '2017-06-06 02:48:36'),
(11, 5, 13, '2017-06-01', 'Rp. 350.000', '2017-06-06 02:50:12', '2017-06-06 02:50:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sewa_customer_id_foreign` (`customer_id`),
  ADD KEY `sewa_mobil_id_foreign` (`mobil_id`);

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
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `sewa`
--
ALTER TABLE `sewa`
  ADD CONSTRAINT `sewa_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sewa_mobil_id_foreign` FOREIGN KEY (`mobil_id`) REFERENCES `mobil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
