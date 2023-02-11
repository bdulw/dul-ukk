-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2022 pada 09.38
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkasir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `batch_uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(1, 'default', 'Menambahkan Menu', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-03-30 02:50:16', '2022-03-30 02:50:16'),
(2, 'default', 'Menambahkan Menu', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-03-30 02:51:24', '2022-03-30 02:51:24'),
(3, 'default', 'Menambahkan Menu', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-03-30 02:52:25', '2022-03-30 02:52:25'),
(4, 'default', 'Menambahkan Menu', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-03-30 02:54:28', '2022-03-30 02:54:28'),
(5, 'default', 'Menghapus Menu', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-03-30 02:54:40', '2022-03-30 02:54:40'),
(6, 'default', 'Menambahkan Menu', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-03-30 02:55:17', '2022-03-30 02:55:17'),
(7, 'default', 'Menghapus Menu', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-03-30 03:02:04', '2022-03-30 03:02:04'),
(8, 'default', 'Menambahkan Menu', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-03-30 03:02:44', '2022-03-30 03:02:44'),
(9, 'default', 'Menambahkan Menu', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-03-30 03:03:35', '2022-03-30 03:03:35'),
(10, 'default', 'Menambahkan Menu', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-03-30 03:04:30', '2022-03-30 03:04:30'),
(11, 'default', 'Sukses Menambahkan User', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-03-30 03:39:53', '2022-03-30 03:39:53'),
(12, 'default', 'Menambahkan Menu', NULL, NULL, NULL, 'App\\Models\\User', 4, '[]', NULL, '2022-03-30 04:16:35', '2022-03-30 04:16:35'),
(13, 'default', 'Menambahkan Menu', NULL, NULL, NULL, 'App\\Models\\User', 4, '[]', NULL, '2022-03-30 04:17:03', '2022-03-30 04:17:03'),
(14, 'default', 'Menambahkan Transaksi Baru', NULL, NULL, NULL, 'App\\Models\\User', 4, '[]', NULL, '2022-03-30 05:29:38', '2022-03-30 05:29:38'),
(15, 'default', 'Sukses Menambahkan User', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-03-30 05:31:57', '2022-03-30 05:31:57'),
(16, 'default', 'Menambahkan Transaksi Baru', NULL, NULL, NULL, 'App\\Models\\User', 5, '[]', NULL, '2022-03-30 05:33:37', '2022-03-30 05:33:37'),
(17, 'default', 'Menambahkan Transaksi Baru', NULL, NULL, NULL, 'App\\Models\\User', 5, '[]', NULL, '2022-03-30 05:35:34', '2022-03-30 05:35:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_28_144628_create_products_table', 1),
(6, '2022_02_28_144800_create_customers_table', 1),
(7, '2022_03_10_045434_create_settings_table', 1),
(8, '2022_03_10_045902_create_user_carts_table', 1),
(9, '2022_03_11_025012_create_orders_table', 1),
(10, '2022_03_11_025355_create_order_items_table', 1),
(11, '2022_03_11_025502_create_payments_table', 1),
(12, '2022_03_23_040735_create_transaksi_details_table', 1),
(13, '2022_03_23_040752_create_transaksi_headers_table', 1),
(14, '2022_03_23_161419_create_activity_log_table', 1),
(15, '2022_03_23_161420_add_event_column_to_activity_log_table', 1),
(16, '2022_03_23_161421_add_batch_uuid_column_to_activity_log_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `barcode`, `price`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pisang Crispy', 'Gurih, Renyah dan pastinya enak', 'product/ohkPheuMe88z3T5bA9ik51iq7jPyXp78odHwHSpy.png', 'cde12wj', '15000.00', 9, 1, '2022-03-30 02:50:16', '2022-03-30 05:34:58'),
(2, 'Nasi Goreng', 'enaaaak', 'product/pvyz1VdfLoqPXTGKo8d6jmNGFfXwLljHp9PxWjHM.jpg', 'vg67hkjjl', '20000.00', 4, 1, '2022-03-30 02:51:24', '2022-03-30 05:32:56'),
(3, 'Ayam Goreng', 'Termasuk sambal dll', 'product/9UXHu0I4dhQnFIqERk2pYz9r2uSqhA51eBaIKURC.jpg', 'cas6a5s', '20000.00', 20, 1, '2022-03-30 02:52:25', '2022-03-30 02:52:25'),
(6, 'Cah Kangkung', 'enaaaaaak', 'product/bSy1QAScjcGOfVqdXhOvHFNkene06XJ487caUjoQ.jpg', 'ais8ssd', '10000.00', 0, 0, '2022-03-30 03:02:44', '2022-03-30 03:02:44'),
(7, 'Ikan Goreng', 'enaaaaaak', 'product/CA1LI6FdKhYhneK3n3GXxNr151jBK9KM3UZsEU2o.jpg', 'sjdnxc', '25000.00', 5, 1, '2022-03-30 03:03:35', '2022-03-30 03:03:35'),
(8, 'Mie Goreng', 'enaaaaak', 'product/XMu2i2uNnxUJKRI5xhBgfxVl7Fl18XkN4qGyizi7.jpg', 'bs2nj2k', '15000.00', 14, 1, '2022-03-30 03:04:30', '2022-03-30 05:35:13'),
(9, 'Mie', 'enaaaaak', 'product/IyyY9zMH3OuHfTUIhrvIBaJqYM4NAvUoFiso8BWj.jpg', 'ghffghfv', '25000.00', 1, 1, '2022-03-30 04:16:35', '2022-03-30 04:16:35'),
(10, 'Mie  2', 'enaaaaaaaaaaak', 'product/3sPxM5CpjPeJcGz0lmYftvZLQzWdzCdXLLEC6RQm.jpg', 'vg67hkjjl', '15000.00', 1, 1, '2022-03-30 04:17:03', '2022-03-30 04:17:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_details`
--

CREATE TABLE `transaksi_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaksi_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `harga` double(8,2) NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subTotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi_details`
--

INSERT INTO `transaksi_details` (`id`, `transaksi_id`, `product_id`, `user_id`, `harga`, `qty`, `subTotal`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 4, 15000.00, '1', '15000', '2022-03-30 05:29:38', '2022-03-30 05:29:38'),
(2, '2', '2', 5, 20000.00, '1', '20000', '2022-03-30 05:33:37', '2022-03-30 05:33:37'),
(3, '3', '8', 5, 15000.00, '1', '15000', '2022-03-30 05:35:34', '2022-03-30 05:35:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_headers`
--

CREATE TABLE `transaksi_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dibayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` double(8,2) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi_headers`
--

INSERT INTO `transaksi_headers` (`id`, `user_id`, `tipe_pembayaran`, `dibayar`, `jumlah`, `status`, `created_at`, `updated_at`) VALUES
(1, '4', 'tunai', '100000', 82500.00, 'proses', '2022-03-30 05:29:38', '2022-03-30 05:29:38'),
(2, '5', 'tunai', '100000', 88000.00, 'proses', '2022-03-30 05:33:37', '2022-03-30 05:33:37'),
(3, '5', 'tunai', '20000', 16500.00, 'proses', '2022-03-30 05:35:34', '2022-03-30 05:35:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('admin','manager','kasir') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Arsil N', 'admin@seeder.com', '2022-03-30 02:48:58', '$2y$10$sZbGPh8/TkWi2vF2mHLxnOubBqHLz7jUv3pyvx4x.pIQg.Fw0scbG', 'admin', NULL, '2022-03-30 02:48:59', '2022-03-30 02:48:59'),
(2, 'Alfian Nurdiansyah', 'manager@seeder.com', '2022-03-30 02:48:58', '$2y$10$RMNsbbEKBtBiiCB3OKY56uyeVoYMOBMcNYcyC0dNRWORYYGHcski6', 'manager', NULL, '2022-03-30 02:48:59', '2022-03-30 02:48:59'),
(3, 'Alfian Yudohyono', 'kasir@seeder.com', '2022-03-30 02:48:59', '$2y$10$gvVXpTduKmSbS47pV4qsk.Gsia8/0Y7MRNl1f72xNUUaDDPt3H47u', 'kasir', NULL, '2022-03-30 02:48:59', '2022-03-30 02:48:59'),
(4, 'Alfian Aja', 'alfinaja@gmail.com', NULL, '$2y$10$pfnd0UCfp..RA3vec8Jwz.K0IKHn32xYu48fJ9O8Ypky.yvb/tsjW', 'kasir', NULL, '2022-03-30 03:39:53', '2022-03-30 03:39:53'),
(5, 'Alfian lala', 'kasir@lala.com', NULL, '$2y$10$bMl6J/0jPGnJfYZI5qLJfOhB7Wmsb5SSRKxoItH/Mt534cbBXbDWi', 'kasir', NULL, '2022-03-30 05:31:57', '2022-03-30 05:31:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_carts`
--

CREATE TABLE `user_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL,
  `subTotal` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

--
-- Indeks untuk tabel `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_order_id_foreign` (`order_id`),
  ADD KEY `payments_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_details`
--
ALTER TABLE `transaksi_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_headers`
--
ALTER TABLE `transaksi_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `user_carts`
--
ALTER TABLE `user_carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_carts_user_id_foreign` (`user_id`),
  ADD KEY `user_carts_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi_details`
--
ALTER TABLE `transaksi_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaksi_headers`
--
ALTER TABLE `transaksi_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_carts`
--
ALTER TABLE `user_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ketidakleluasaan untuk tabel `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_carts`
--
ALTER TABLE `user_carts`
  ADD CONSTRAINT `user_carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `user_carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
