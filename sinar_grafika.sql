-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jul 2019 pada 15.53
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinar_grafika`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_jenis` int(255) NOT NULL,
  `id_kategori` int(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `harga_Art` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_jenis`, `id_kategori`, `image`, `judul`, `harga_Art`, `deskripsi`, `updated_at`, `created_at`) VALUES
(1, 101, 'pasphoto.jpg', 'Banner', '15,000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pulvinar varius suscipit. Fusce tempor enim vitae lorem efficitur tincidunt. Phasellus a accumsan quam, vitae ultricies metus. Curabitur consectetur dapibus ipsum, eget eleifend odio semper at. Nulla facilisi. Sed lobortis velit at dui mollis, id eleifend nisl suscipit. In viverra, nunc a rhoncus cursus, tortor sem consectetur justo, quis iaculis ligula magna accumsan odio. Donec ultrices euismod laoreet. Donec vel diam odio. Nunc pulvinar aliquam mi a ultrices. Nam vel fringilla metus, ut gravida libero. Nullam nec tortor in elit auctor semper. Nam odio turpis, hendrerit eu neque vel, lobortis volutpat erat. Quisque ut libero et odio ornare blandit mollis non risus. Quisque tempus mauris sed fringilla venenatis. Suspendisse posuere est eu urna pellentesque sagittis.', '2019-07-19 14:46:13', '2019-07-16 05:08:57'),
(2, 101, 'bluePrint.jpg', 'Blue Print', '10000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pulvinar varius suscipit. Fusce tempor enim vitae lorem efficitur tincidunt. Phasellus a accumsan quam, vitae ultricies metus. Curabitur consectetur dapibus ipsum, eget eleifend odio semper at. Nulla facilisi. Sed lobortis velit at dui mollis, id eleifend nisl suscipit. In viverra, nunc a rhoncus cursus, tortor sem consectetur justo, quis iaculis ligula magna accumsan odio. Donec ultrices euismod laoreet. Donec vel diam odio. Nunc pulvinar aliquam mi a ultrices. Nam vel fringilla metus, ut gravida libero. Nullam nec tortor in elit auctor semper. Nam odio turpis, hendrerit eu neque vel, lobortis volutpat erat. Quisque ut libero et odio ornare blandit mollis non risus. Quisque tempus mauris sed fringilla venenatis. Suspendisse posuere est eu urna pellentesque sagittis.', '2019-07-19 14:52:35', '2019-07-16 08:11:38'),
(3, 101, 'printHP.png', 'Kalender', '50.000 s/d 75.000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pulvinar varius suscipit. Fusce tempor enim vitae lorem efficitur tincidunt. Phasellus a accumsan quam, vitae ultricies metus. Curabitur consectetur dapibus ipsum, eget eleifend odio semper at. Nulla facilisi. Sed lobortis velit at dui mollis, id eleifend nisl suscipit. In viverra, nunc a rhoncus cursus, tortor sem consectetur justo, quis iaculis ligula magna accumsan odio. Donec ultrices euismod laoreet. Donec vel diam odio. Nunc pulvinar aliquam mi a ultrices. Nam vel fringilla metus, ut gravida libero. Nullam nec tortor in elit auctor semper. Nam odio turpis, hendrerit eu neque vel, lobortis volutpat erat. Quisque ut libero et odio ornare blandit mollis non risus. Quisque tempus mauris sed fringilla venenatis. Suspendisse posuere est eu urna pellentesque sagittis.', '2019-07-19 14:52:45', '2019-06-06 13:48:23'),
(4, 101, 'fotocopy.jpg', 'Kop Surat', '23000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pulvinar varius suscipit. Fusce tempor enim vitae lorem efficitur tincidunt. Phasellus a accumsan quam, vitae ultricies metus. Curabitur consectetur dapibus ipsum, eget eleifend odio semper at. Nulla facilisi. Sed lobortis velit at dui mollis, id eleifend nisl suscipit. In viverra, nunc a rhoncus cursus, tortor sem consectetur justo, quis iaculis ligula magna accumsan odio. Donec ultrices euismod laoreet. Donec vel diam odio. Nunc pulvinar aliquam mi a ultrices. Nam vel fringilla metus, ut gravida libero. Nullam nec tortor in elit auctor semper. Nam odio turpis, hendrerit eu neque vel, lobortis volutpat erat. Quisque ut libero et odio ornare blandit mollis non risus. Quisque tempus mauris sed fringilla venenatis. Suspendisse posuere est eu urna pellentesque sagittis.', '2019-07-19 14:53:07', '2019-06-06 13:48:48'),
(5, 101, 'fotocopy.jpg', 'Fotocopy A4 - A3', '100', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pulvinar varius suscipit. Fusce tempor enim vitae lorem efficitur tincidunt. Phasellus a accumsan quam, vitae ultricies metus. Curabitur consectetur dapibus ipsum, eget eleifend odio semper at. Nulla facilisi. Sed lobortis velit at dui mollis, id eleifend nisl suscipit. In viverra, nunc a rhoncus cursus, tortor sem consectetur justo, quis iaculis ligula magna accumsan odio. Donec ultrices euismod laoreet. Donec vel diam odio. Nunc pulvinar aliquam mi a ultrices. Nam vel fringilla metus, ut gravida libero. Nullam nec tortor in elit auctor semper. Nam odio turpis, hendrerit eu neque vel, lobortis volutpat erat. Quisque ut libero et odio ornare blandit mollis non risus. Quisque tempus mauris sed fringilla venenatis. Suspendisse posuere est eu urna pellentesque sagittis.', '2019-07-19 14:53:19', '2019-07-16 08:13:35'),
(6, 101, 'scanning.jpeg', 'Scanning', '3000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pulvinar varius suscipit. Fusce tempor enim vitae lorem efficitur tincidunt. Phasellus a accumsan quam, vitae ultricies metus. Curabitur consectetur dapibus ipsum, eget eleifend odio semper at. Nulla facilisi. Sed lobortis velit at dui mollis, id eleifend nisl suscipit. In viverra, nunc a rhoncus cursus, tortor sem consectetur justo, quis iaculis ligula magna accumsan odio. Donec ultrices euismod laoreet. Donec vel diam odio. Nunc pulvinar aliquam mi a ultrices. Nam vel fringilla metus, ut gravida libero. Nullam nec tortor in elit auctor semper. Nam odio turpis, hendrerit eu neque vel, lobortis volutpat erat. Quisque ut libero et odio ornare blandit mollis non risus. Quisque tempus mauris sed fringilla venenatis. Suspendisse posuere est eu urna pellentesque sagittis.', '2019-07-19 14:53:30', '2019-07-16 08:14:28'),
(7, 102, 'printHP.png', 'Print Hitam Putih', '500', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pulvinar varius suscipit. Fusce tempor enim vitae lorem efficitur tincidunt. Phasellus a accumsan quam, vitae ultricies metus. Curabitur consectetur dapibus ipsum, eget eleifend odio semper at. Nulla facilisi. Sed lobortis velit at dui mollis, id eleifend nisl suscipit. In viverra, nunc a rhoncus cursus, tortor sem consectetur justo, quis iaculis ligula magna accumsan odio. Donec ultrices euismod laoreet. Donec vel diam odio. Nunc pulvinar aliquam mi a ultrices. Nam vel fringilla metus, ut gravida libero. Nullam nec tortor in elit auctor semper. Nam odio turpis, hendrerit eu neque vel, lobortis volutpat erat. Quisque ut libero et odio ornare blandit mollis non risus. Quisque tempus mauris sed fringilla venenatis. Suspendisse posuere est eu urna pellentesque sagittis.', '2019-07-19 14:53:46', '2019-07-16 08:16:20'),
(8, 102, 'printW.jpg', 'Print Warna', '1000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pulvinar varius suscipit. Fusce tempor enim vitae lorem efficitur tincidunt. Phasellus a accumsan quam, vitae ultricies metus. Curabitur consectetur dapibus ipsum, eget eleifend odio semper at. Nulla facilisi. Sed lobortis velit at dui mollis, id eleifend nisl suscipit. In viverra, nunc a rhoncus cursus, tortor sem consectetur justo, quis iaculis ligula magna accumsan odio. Donec ultrices euismod laoreet. Donec vel diam odio. Nunc pulvinar aliquam mi a ultrices. Nam vel fringilla metus, ut gravida libero. Nullam nec tortor in elit auctor semper. Nam odio turpis, hendrerit eu neque vel, lobortis volutpat erat. Quisque ut libero et odio ornare blandit mollis non risus. Quisque tempus mauris sed fringilla venenatis. Suspendisse posuere est eu urna pellentesque sagittis.', '2019-07-19 14:54:01', '2019-07-16 08:16:58'),
(9, 102, 'labelCD.jpg', 'Label Cd', '5000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pulvinar varius suscipit. Fusce tempor enim vitae lorem efficitur tincidunt. Phasellus a accumsan quam, vitae ultricies metus. Curabitur consectetur dapibus ipsum, eget eleifend odio semper at. Nulla facilisi. Sed lobortis velit at dui mollis, id eleifend nisl suscipit. In viverra, nunc a rhoncus cursus, tortor sem consectetur justo, quis iaculis ligula magna accumsan odio. Donec ultrices euismod laoreet. Donec vel diam odio. Nunc pulvinar aliquam mi a ultrices. Nam vel fringilla metus, ut gravida libero. Nullam nec tortor in elit auctor semper. Nam odio turpis, hendrerit eu neque vel, lobortis volutpat erat. Quisque ut libero et odio ornare blandit mollis non risus. Quisque tempus mauris sed fringilla venenatis. Suspendisse posuere est eu urna pellentesque sagittis.', '2019-07-19 14:54:26', '2019-07-16 08:17:42'),
(10, 102, 'sertifikat.jpg', 'Sertifikat', '3500', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pulvinar varius suscipit. Fusce tempor enim vitae lorem efficitur tincidunt. Phasellus a accumsan quam, vitae ultricies metus. Curabitur consectetur dapibus ipsum, eget eleifend odio semper at. Nulla facilisi. Sed lobortis velit at dui mollis, id eleifend nisl suscipit. In viverra, nunc a rhoncus cursus, tortor sem consectetur justo, quis iaculis ligula magna accumsan odio. Donec ultrices euismod laoreet. Donec vel diam odio. Nunc pulvinar aliquam mi a ultrices. Nam vel fringilla metus, ut gravida libero. Nullam nec tortor in elit auctor semper. Nam odio turpis, hendrerit eu neque vel, lobortis volutpat erat. Quisque ut libero et odio ornare blandit mollis non risus. Quisque tempus mauris sed fringilla venenatis. Suspendisse posuere est eu urna pellentesque sagittis.', '2019-07-19 14:54:39', '2019-07-16 08:18:28'),
(11, 104, 'scanning.jpeg', 'Buku Yasin', '10000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pulvinar varius suscipit. Fusce tempor enim vitae lorem efficitur tincidunt. Phasellus a accumsan quam, vitae ultricies metus. Curabitur consectetur dapibus ipsum, eget eleifend odio semper at. Nulla facilisi. Sed lobortis velit at dui mollis, id eleifend nisl suscipit. In viverra, nunc a rhoncus cursus, tortor sem consectetur justo, quis iaculis ligula magna accumsan odio. Donec ultrices euismod laoreet. Donec vel diam odio. Nunc pulvinar aliquam mi a ultrices. Nam vel fringilla metus, ut gravida libero. Nullam nec tortor in elit auctor semper. Nam odio turpis, hendrerit eu neque vel, lobortis volutpat erat. Quisque ut libero et odio ornare blandit mollis non risus. Quisque tempus mauris sed fringilla venenatis. Suspendisse posuere est eu urna pellentesque sagittis.', '2019-07-19 14:54:53', '2019-07-18 09:00:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga_barang` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_barang`, `updated_at`, `created_at`) VALUES
(11, 'Fotocopy', 100, '2019-07-17 11:42:15', '2019-07-17 11:42:15'),
(12, 'Print Warna', 1000, '2019-07-17 11:42:55', '2019-07-17 11:42:32'),
(13, 'Print hitam putih', 500, '2019-07-17 11:42:48', '2019-07-17 11:42:48'),
(14, 'scanning', 2500, '2019-07-17 11:43:14', '2019-07-17 11:43:14'),
(15, 'Label CD', 3000, '2019-07-17 11:43:41', '2019-07-17 11:43:41'),
(16, 'Kertas HVS 1rim', 56000, '2019-07-17 11:44:44', '2019-07-17 11:44:44'),
(17, 'Banner ukuran 1x1', 15000, '2019-07-17 11:47:00', '2019-07-17 11:47:00'),
(18, 'Banner ukuran 2x1', 30000, '2019-07-17 11:47:19', '2019-07-17 11:47:19'),
(19, 'Banner ukuran 2x2', 60000, '2019-07-17 11:47:46', '2019-07-17 11:47:46'),
(20, 'Banner ukuran 3x2', 90000, '2019-07-17 11:48:25', '2019-07-17 11:48:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` int(255) NOT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `harga_barang` int(11) DEFAULT NULL,
  `jumlah_barang` int(255) DEFAULT NULL,
  `total_harga` int(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail`, `nama_barang`, `harga_barang`, `jumlah_barang`, `total_harga`, `created_at`, `updated_at`) VALUES
(8, NULL, NULL, 2, NULL, '2019-06-18 15:07:34', '2019-06-18 15:07:34'),
(9, NULL, NULL, 1, NULL, '2019-06-18 15:12:06', '2019-06-18 15:12:06'),
(10, NULL, NULL, 4, NULL, '2019-06-25 09:43:53', '2019-06-25 09:43:53'),
(11, NULL, NULL, NULL, NULL, '2019-07-11 09:17:20', '2019-07-11 09:17:20'),
(12, NULL, NULL, 1, NULL, '2019-07-11 09:49:22', '2019-07-11 09:49:22'),
(13, NULL, NULL, NULL, NULL, '2019-07-11 10:20:17', '2019-07-11 10:20:17'),
(14, 'Print Warna', 1000, 5, 5000, '2019-07-17 06:31:04', '2019-07-17 06:31:04'),
(15, 'Print Warna', 1000, 5, 5000, '2019-07-17 06:31:58', '2019-07-17 06:31:58'),
(16, 'Banner 3x2', 50000, 1, 50000, '2019-07-17 06:32:19', '2019-07-17 06:32:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `id_kategori` int(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_barang`
--

INSERT INTO `kategori_barang` (`id_kategori`, `nama_kategori`, `updated_at`, `created_at`) VALUES
(101, 'Fotocopy', '2019-06-06 13:42:20', '2019-06-06 13:42:20'),
(102, 'Digital Printing', '2019-06-06 13:43:55', '2019-06-06 13:43:55'),
(103, 'Banner', '2019-06-06 13:44:14', '2019-06-06 13:44:14'),
(104, 'Binding', '2019-06-06 13:44:27', '2019-06-06 13:44:27'),
(105, 'Offset', '2019-06-06 13:44:46', '2019-06-06 13:44:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `harga_barang` int(255) DEFAULT NULL,
  `jumlah_barang` int(255) NOT NULL,
  `total_harga` int(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama_barang`, `harga_barang`, `jumlah_barang`, `total_harga`, `updated_at`, `created_at`) VALUES
(1, 'banner', 10000, 2, 20000, '2019-06-08 16:05:28', '2019-06-08 16:05:28'),
(3, 'Banner ukuran 2x1', 100, 1, 1111, '2019-06-18 14:55:44', '2019-06-18 14:55:44'),
(4, 'Print hitam putih', 500, 1, 1111, '2019-07-15 13:29:03', '2019-07-15 13:29:03'),
(5, 'Banner 3x2', 50000, 1, 50000, '2019-07-17 06:33:19', '2019-07-17 06:33:19'),
(6, 'Banner ukuran 2x1', 60000, 1, 60000, '2019-07-17 06:39:07', '2019-07-17 06:39:07'),
(7, 'Banner ukuran 2x1', 60000, 1, 60000, '2019-07-17 07:03:00', '2019-07-17 07:03:00'),
(8, 'Banner ukuran 2x1', 60000, 1, 60000, '2019-07-17 07:14:18', '2019-07-17 07:14:18'),
(9, 'Banner ukuran 2x1', 60000, 1, 60000, '2019-07-17 09:13:39', '2019-07-17 09:13:39'),
(10, 'scanning', 2500, 3, 7500, '2019-07-18 08:48:28', '2019-07-18 08:48:28'),
(11, 'scanning', 2500, 10, 25000, '2019-07-18 08:48:58', '2019-07-18 08:48:58'),
(13, 'Fotocopy', 100, 1, 100, '2019-07-19 13:28:53', '2019-07-19 13:28:53'),
(14, 'Fotocopy', 100, 1, 100, '2019-07-19 13:29:31', '2019-07-19 13:29:31'),
(15, 'Banner ukuran 3x2', 90000, 1, 90000, '2019-07-19 14:34:59', '2019-07-19 14:34:59'),
(16, 'Banner ukuran 1x1', 15000, 1, 15000, '2019-07-19 14:52:03', '2019-07-19 14:52:03'),
(17, 'Label CD', 3000, 10, 30000, '2019-07-19 15:15:42', '2019-07-19 15:15:42'),
(18, 'Print Warna', 1000, 10, 10000, '2019-07-21 06:39:57', '2019-07-21 06:39:57'),
(19, 'Banner ukuran 3x2', 90000, 10, 900000, '2019-07-21 06:40:27', '2019-07-21 06:40:27');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Wahyu Nc', 'wnc1304@gmail.com', NULL, '$2y$10$h7yDHhQDyzLKZvgpcZMWeOeZCjG2lxLJsER8tueScuMGnBmLeOiC.', 'lX4Y6OTa41vDRQt5gkjM2aCOIzm4QCUo3PghkkwEGz7NWf7ZT8yp3mm8pE27', '2019-06-07 12:57:24', '2019-06-07 12:57:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_jenis`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_jenis` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_barang` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
