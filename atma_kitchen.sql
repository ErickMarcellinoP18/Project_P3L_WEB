-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 02:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atma_kitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `id_alamat` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `jalan` varchar(30) DEFAULT NULL,
  `kelurahan` varchar(20) DEFAULT NULL,
  `kecamatan` varchar(10) DEFAULT NULL,
  `kabupaten` varchar(20) DEFAULT NULL,
  `provinsi` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`id_alamat`, `id_customer`, `jalan`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`) VALUES
(1, 1, 'jalan pengangsaan', 'Caturtunggal', 'Depok', 'Sleman', 'DI Yogyakarta'),
(2, 2, 'jalan pengangsaan', 'Caturtunggal', 'Depok', 'Sleman', 'DI Yogyakarta'),
(3, 3, 'jalan pengangsaan', 'Caturtunggal', 'Depok', 'Sleman', 'DI Yogyakarta'),
(15, 5, 'jalan pengangsaan', 'Caturtunggal', 'Depok', 'Sleman', 'DI Yogyakarta'),
(16, 6, 'jalan pengangsaan', 'Caturtunggal', 'Depok', 'Sleman', 'DI Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id_bahan_baku` int(11) NOT NULL,
  `nama_bahan` char(50) NOT NULL,
  `stok_bahan` int(11) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bahan_baku`
--

INSERT INTO `bahan_baku` (`id_bahan_baku`, `nama_bahan`, `stok_bahan`, `satuan`) VALUES
(1, 'butter', 6000, 'gr'),
(2, 'creamer', 4000, 'gr'),
(3, 'telur', 1000, 'butir'),
(4, 'gula pasir', 54673, 'gr'),
(5, 'susu bubuk', 54352, 'gr'),
(6, 'tepung terigu', 12397, 'gr'),
(7, 'garam', 7542, 'gr'),
(8, 'coklat bubuk', 54300, 'gr'),
(9, 'selai strawberry', 7318, 'gr'),
(10, 'coklat batang', 71356, 'gr'),
(11, 'minyak goreng', 893644, 'ml'),
(12, 'tepung maizena', 78647, 'gr'),
(13, 'baking powder', 767, 'gr'),
(14, 'kacang kenari', 7482, 'gr'),
(15, 'ragi', 343, 'gr'),
(16, 'susu cair', 89623, 'ml'),
(17, 'sosis blackpapper', 431, 'buah'),
(18, 'whipped cream', 2846, 'ml'),
(19, 'susu full cream', 3217, 'ml'),
(20, 'keju mozzarella', 34564, 'gr'),
(21, 'creamer', 2342, 'gr'),
(22, 'matcha bubuk', 452, 'gr'),
(23, 'box 20x20cm', 300, 'buah'),
(24, 'box 20x10cm', 500, 'buah'),
(25, 'botol 1 liter', 200, 'buah'),
(26, 'box premium', 100, 'buah'),
(27, 'kartu ucapan', 100, 'buah'),
(28, 'tas spunbond', 100, 'buah');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `ulang_tahun` date NOT NULL,
  `saldo` int(11) DEFAULT NULL,
  `jumlah_poin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `password`, `email`, `ulang_tahun`, `saldo`, `jumlah_poin`) VALUES
(1, 'MSSQL', 'wwweed', 'wdawdaw@gmail.com', '2000-03-01', 0, 106),
(2, 'Python', 'zenwwfa', 'loremipsum@gmail.com', '1997-06-07', 200000, 19),
(3, 'django@!#', 'qqqqqrvv', 'anaoconda@gmail.com', '2005-04-18', 0, 24),
(5, 'javaking', '54yghrysf', 'javaking@gmail.com', '2004-05-14', 0, 64),
(6, 'powerbiExcel', 'excelbisa', 'excelmudah@gmail.com', '1987-12-14', 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `detail_resep`
--

CREATE TABLE `detail_resep` (
  `id_resep` int(11) NOT NULL,
  `id_bahan_baku` int(11) NOT NULL,
  `takaran` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_resep`
--

INSERT INTO `detail_resep` (`id_resep`, `id_bahan_baku`, `takaran`) VALUES
(1, 1, '500'),
(1, 2, '50'),
(1, 3, '50'),
(1, 4, '300'),
(1, 5, '100'),
(1, 6, '20'),
(2, 1, '500'),
(2, 2, '50'),
(2, 3, '40'),
(2, 4, '300'),
(2, 6, '100'),
(2, 5, '100'),
(2, 7, '10'),
(2, 8, '25'),
(2, 9, '100'),
(3, 10, '250'),
(3, 1, '100'),
(3, 11, '50'),
(3, 3, '6'),
(3, 4, '200'),
(3, 6, '150'),
(3, 8, '60'),
(4, 1, '300'),
(4, 2, '30'),
(4, 3, '30'),
(4, 4, '200'),
(4, 6, '80'),
(4, 5, '80'),
(4, 7, '5'),
(4, 8, '25'),
(4, 9, '50'),
(5, 3, '20'),
(5, 4, '200'),
(5, 6, '90'),
(5, 12, '20'),
(5, 5, '10'),
(5, 13, '5'),
(5, 1, '200'),
(5, 14, '100'),
(6, 6, '250'),
(6, 4, '30'),
(6, 15, '3'),
(6, 3, '3'),
(6, 16, '150'),
(6, 1, '50'),
(6, 7, '2'),
(6, 17, '10'),
(7, 6, '250'),
(7, 4, '30'),
(7, 15, '3'),
(7, 3, '4'),
(7, 16, '300'),
(7, 1, '60'),
(7, 7, '3'),
(7, 18, '200'),
(7, 5, '50'),
(8, 6, '250'),
(8, 4, '30'),
(8, 15, '3'),
(8, 3, '3'),
(8, 19, '150'),
(8, 1, '50'),
(8, 7, '2'),
(8, 20, '350'),
(9, 8, '120'),
(9, 21, '80'),
(9, 16, '800'),
(10, 22, '120'),
(10, 21, '80'),
(10, 16, '800');

-- --------------------------------------------------------

--
-- Table structure for table `detil_pesanan`
--

CREATE TABLE `detil_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detil_pesanan`
--

INSERT INTO `detil_pesanan` (`id_pesanan`, `id_produk`, `kuantitas`, `subtotal`, `harga_produk`) VALUES
(1, 3, 1, 450000, 450000),
(1, 8, 1, 150000, 150000),
(1, 23, 1, 75000, 75000),
(2, 23, 2, 150000, 75000),
(3, 13, 1, 200000, 200000),
(4, 10, 1, 450000, 450000),
(5, 17, 1, 75000, 75000);

-- --------------------------------------------------------

--
-- Table structure for table `detil_poin`
--

CREATE TABLE `detil_poin` (
  `id_pesanan` int(11) NOT NULL,
  `potongan_poin` int(11) NOT NULL,
  `poin_pesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detil_poin`
--

INSERT INTO `detil_poin` (`id_pesanan`, `potongan_poin`, `poin_pesanan`) VALUES
(1, 75, 0),
(1, 30, 0),
(1, 1, 0),
(2, 15, 0),
(2, 4, 0),
(3, 15, 0),
(3, 9, 0),
(4, 60, 0),
(4, 4, 0),
(5, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hampers`
--

CREATE TABLE `hampers` (
  `id_hampers` int(11) NOT NULL,
  `tgl_mulai_promo` datetime NOT NULL,
  `tgl_akhir_promo` datetime NOT NULL,
  `nama_hampers` varchar(30) NOT NULL,
  `gambar_hampers` varchar(255) NOT NULL,
  `harga_hampers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hampers`
--

INSERT INTO `hampers` (`id_hampers`, `tgl_mulai_promo`, `tgl_akhir_promo`, `nama_hampers`, `gambar_hampers`, `harga_hampers`) VALUES
(1, '2024-04-18 00:00:00', '2024-05-18 00:00:00', 'Paket A', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_hampers A.jpg', 650000000),
(2, '2024-03-14 00:00:00', '2024-04-14 00:00:00', 'Paket B', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_hampers B.jpg', 500000000),
(4, '2024-08-02 00:00:00', '2024-09-02 00:00:00', 'Palet C', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_hampers C.jpg', 350000000);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `honor_harian` int(11) NOT NULL,
  `bonus` int(11) NOT NULL DEFAULT 0,
  `nama_karyawan` varchar(30) DEFAULT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `password`, `honor_harian`, `bonus`, `nama_karyawan`, `jabatan`) VALUES
(2, '12345678', 10000, 0, 'Asep', 'admin'),
(3, '23456789', 10000, 0, 'Elu', 'mo'),
(4, '34567890', 10000, 0, 'Klasik', 'owner'),
(5, 'qwertyui', 10000, 0, 'Eric', 'admin'),
(7, 'asdfghjk', 15000, 0, 'Bona', 'mo'),
(8, '09876543', 20000, 0, 'Sql', 'owner');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '2024_05_03_064214_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_bahan_baku`
--

CREATE TABLE `pembelian_bahan_baku` (
  `id_bahan_baku` int(11) NOT NULL,
  `harga_bahan_baku` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `tanggal_pengeluaran` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembelian_bahan_baku`
--

INSERT INTO `pembelian_bahan_baku` (`id_bahan_baku`, `harga_bahan_baku`, `kuantitas`, `tanggal_pengeluaran`) VALUES
(2, 2334536, 500, '2024-03-25 00:00:00'),
(3, 2545235, 250, '2024-03-24 00:00:00'),
(4, 324534, 100, '2024-03-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran_lain`
--

CREATE TABLE `pengeluaran_lain` (
  `id_pengeluaran` int(11) NOT NULL,
  `total_pengeluaran` float NOT NULL,
  `jenis` char(20) NOT NULL,
  `tanggal_pengeluaran` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengeluaran_lain`
--

INSERT INTO `pengeluaran_lain` (`id_pengeluaran`, `total_pengeluaran`, `jenis`, `tanggal_pengeluaran`) VALUES
(5, 3890000, 'Listrik', '2024-03-25 00:00:00'),
(6, 11800000, 'Gaji Karyawan', '2024-03-25 00:00:00'),
(8, 500000, 'Iuran RT', '2024-03-25 00:00:00'),
(9, 900000, 'Bensin', '2024-03-25 00:00:00'),
(10, 2200000, 'Gas', '2024-03-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `penggunaan_bahan_baku`
--

CREATE TABLE `penggunaan_bahan_baku` (
  `id_bahan_baku` int(11) NOT NULL,
  `tgl_pengeluaran` datetime NOT NULL,
  `kuantitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penggunaan_bahan_baku`
--

INSERT INTO `penggunaan_bahan_baku` (`id_bahan_baku`, `tgl_pengeluaran`, `kuantitas`) VALUES
(1, '2024-03-26 00:00:00', 300),
(2, '2024-03-26 00:00:00', 345),
(3, '2024-03-26 00:00:00', 200),
(4, '2024-03-26 00:00:00', 100),
(5, '2026-03-26 00:00:00', 50);

-- --------------------------------------------------------

--
-- Table structure for table `penitip`
--

CREATE TABLE `penitip` (
  `id_penitip` int(11) NOT NULL,
  `nama_penitip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penitip`
--

INSERT INTO `penitip` (`id_penitip`, `nama_penitip`) VALUES
(1, 'mongoDB'),
(2, 'cassandra'),
(3, 'tensorflow'),
(4, 'numpy'),
(5, 'cisco'),
(6, 'Celli'),
(7, 'Ollie');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `no_nota` varchar(20) DEFAULT NULL,
  `id_customer` int(11) NOT NULL,
  `tanggal_ambil` datetime DEFAULT NULL,
  `tanggal_pesan` datetime NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `jenis_delivery` varchar(10) NOT NULL,
  `tanggal_lunas` datetime DEFAULT NULL,
  `alamat` text NOT NULL,
  `jarak` float NOT NULL DEFAULT 0,
  `poin_digunakan` int(11) DEFAULT NULL,
  `total_biaya` int(11) NOT NULL DEFAULT 0,
  `ongkir` int(11) NOT NULL DEFAULT 0,
  `pembayaran` int(11) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `poin_didapat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `no_nota`, `id_customer`, `tanggal_ambil`, `tanggal_pesan`, `status`, `jenis_delivery`, `tanggal_lunas`, `alamat`, `jarak`, `poin_digunakan`, `total_biaya`, `ongkir`, `pembayaran`, `bukti_pembayaran`, `poin_didapat`) VALUES
(1, '2024.03.01', 1, '2024-03-27 00:00:00', '2024-03-26 00:00:00', 'Pesanan Diterima', 'Antar', '2024-03-27 00:00:00', 'jalan pengangsaan, Caturtunggal ,Depok ,Sleman ,DI Yogyakarta', 0, 120, 0, 0, 723000, '', 106),
(2, '2024.03.02', 2, '2024-03-27 00:00:00', '2024-03-26 00:00:00', 'Pesanan Diterima', 'Antar', '2024-03-27 00:00:00', 'jalan pengangsaan, Caturtunggal ,Depok ,Sleman ,DI Yogyakarta', 0, 100, 0, 0, 140000, '', 19),
(3, '2024.03.03', 3, '2024-03-27 00:00:00', '2024-03-26 00:00:00', 'menunggu konfirmasi', 'Antar', '2024-03-27 00:00:00', 'jalan pengangsaan, Caturtunggal ,Depok ,Sleman ,DI Yogyakarta', 40, 100, 215000, 25000, 190000, '1716049293.png', 60),
(4, '2024.03.04', 5, '2024-03-27 00:00:00', '2024-03-26 00:00:00', 'Pesanan Diterima', 'Antar', '2024-03-27 00:00:00', 'jalan pengangsaan, Caturtunggal ,Depok ,Sleman ,DI Yogyakarta', 0, 100, 0, 0, 440000, '', 64),
(5, '2024.03.05', 6, '2024-03-27 00:00:00', '2024-03-26 00:00:00', 'Pesanan Diterima', 'Antar', '2024-03-27 00:00:00', 'jalan pengangsaan, Caturtunggal ,Depok ,Sleman ,DI Yogyakarta', 0, 100, 0, 0, 75000, '', 6),
(6, '2024.03.03', 3, '2024-03-27 00:00:00', '2024-03-26 00:00:00', 'Selesai', 'Antar', '2024-03-27 00:00:00', 'jalan pengangsaan, Caturtunggal ,Depok ,Sleman ,DI Yogyakarta', 0, 100, 0, 0, 190000, '', 24);

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `tanggal_presensi` date NOT NULL,
  `status_presensi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`id_presensi`, `id_karyawan`, `tanggal_presensi`, `status_presensi`) VALUES
(1, 2, '2024-03-26', 'Hadir'),
(5, 2, '2024-03-27', 'Tidak Hadir'),
(6, 3, '2024-03-26', 'Hadir'),
(7, 4, '2024-03-26', 'Hadir'),
(8, 5, '2024-03-26', 'Tidak Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_hampers` int(11) DEFAULT NULL,
  `id_resep` int(11) DEFAULT NULL,
  `id_penitip` int(11) DEFAULT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `gambar_produk` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_stok` int(11) DEFAULT NULL,
  `tipe_produk` varchar(20) NOT NULL,
  `porsi` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_hampers`, `id_resep`, `id_penitip`, `nama_produk`, `gambar_produk`, `harga`, `jumlah_stok`, `tipe_produk`, `porsi`) VALUES
(1, NULL, 1, NULL, 'lapis legit (uk.20x20)', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_lapis legit.webp', 850000, 0, 'Asli', 1),
(3, 1, 1, NULL, 'Lapis Legit (uk.10x20)', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_lapis legit.webp', 450000, 0, 'Asli', 0.5),
(4, NULL, 2, NULL, 'Lapis Surabaya (uk.20x20)', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_lapis surabaya.jpg', 550000, 0, 'Asli', 1),
(5, 2, 2, NULL, 'Lapis Surabaya (uk.10x20)', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_lapis surabaya.jpg', 300000, 0, 'Asli', 0.5),
(7, NULL, 3, NULL, 'Brownies (uk.20x20)', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_brownies.jpg', 250000, 0, 'Asli', 1),
(8, 1, 3, NULL, 'Brownies (uk.10x20)', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_brownies.jpg', 150000, 0, 'Asli', 0.5),
(10, NULL, 4, NULL, 'Mandarin  (uk.20x20)', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_mandarin.jpg', 450000, 0, 'Asli', 1),
(11, NULL, 4, NULL, 'Madarin (uk.10x20)', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_mandarin.jpg', 250000, 0, 'Asli', 0.5),
(12, NULL, 5, NULL, 'Spikoe (uk.20x20)', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_spikoe.jpg', 350000, 0, 'Asli', 1),
(13, 4, 5, NULL, 'Spikoe (uk.10x20)', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_spikoe.jpg', 200000, 0, 'Asli', 0.5),
(14, 2, 6, NULL, 'Roti Sosis ', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_roti sosis.jpg', 180000, 0, 'Asli', 1),
(15, NULL, 7, NULL, 'Milk Bun', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_milk buns.jpg', 120000, 0, 'Asli', 1),
(16, NULL, 8, NULL, 'Roti Keju', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_roti keju.jpg', 150000, 0, 'Asli', 1),
(17, NULL, 9, NULL, 'Choco Creamy Latte', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_choco creamy latte.jpg', 75000, 0, 'Asli', 1),
(19, 4, 10, NULL, 'Matcha Creamy Latte', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_matcha creamy latte.jpg', 100000, 0, 'Asli', 1),
(23, NULL, NULL, 6, 'Keripik Kentang 250 gr', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_keripik kentang.jpg', 75000, 50, 'Titipan', 1),
(24, NULL, NULL, 6, 'Kopi Luwak Bubuk 250 gr', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_kopi luak.jpg', 250000, 25, 'Titipan', 1),
(26, NULL, NULL, 7, 'Kopi Luwak Bubuk 250 gr', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_kopi luak.jpg', 120000, 25, 'Titipan', 1),
(27, NULL, NULL, 5, 'Matcha Organik Bubuk 100 gr', 'https://res.cloudinary.com/dbzicavs6/image/upload/v1715950866/atma_kitchen/2024-05-17_200105_Matcha Organik Bubuk.png', 300000, 40, 'Titipan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id_resep` int(11) NOT NULL,
  `nama_resep` varchar(30) NOT NULL,
  `kuota_harian` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id_resep`, `nama_resep`, `kuota_harian`) VALUES
(1, 'lapis legit', 10),
(2, 'lapis surabaya', 40),
(3, 'brownies', 30),
(4, 'mandarin', 20),
(5, 'spikoe', 30),
(6, 'roti sosis', 40),
(7, 'milk bun', 40),
(8, 'roti keju', 40),
(9, 'choco creamy latte', 50),
(10, 'matcha creamy latte', 50);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('F9s9TWTkJiG5uQRJkVObNjERij1jI7PIZISQOIMC', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZmRuaUc2OEhRbkU4NHhiQ2lmY1d3TUwzNm1Yb2RxY2tWZk82MFlKMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9pbnB1dGphcmFrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716121253);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ulang_tahun` date DEFAULT NULL,
  `poin` int(20) DEFAULT 0,
  `saldo` int(11) NOT NULL DEFAULT 0,
  `verify_key` varchar(255) NOT NULL,
  `active` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `ulang_tahun`, `poin`, `saldo`, `verify_key`, `active`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Klasik', '$2y$12$Ll8i2GfRNPs.uPDVf5Bmgu5o7.I2YI1wDTqQqtgFxcv7qxRflV5MO', 'taidiklasik@gmail.com', '2024-05-08', 0, 0, 'q3KSvMXTdMfi7mL6aSxx0koDYjLqUHsdpQ60w2VtI5f1uMPCpxbK8LBi5qkoIT4mfLbFVHtVighI9Sahlx7d6qiwn2RQH8DHgulD', 1, NULL, NULL, '2024-05-05 20:11:34', '2024-05-05 20:12:51'),
(3, 'Elluy', '$2y$12$G30vwwBRdBhaBEIwgCgRLeNVqKY25MzjeRx..07kP96/KFZxOQp6i', 'elluygabrielpanambe@gmail.com', '2024-03-26', 60, 0, 'QAxwimt1TavgIdwal5CkLQbqsLtApeYpc70haAba94WTsNrw7st3DHPnA9wo1kkkULYPSGD4Fll67qp7oLVfOW7uOoqPHL0SWRpb', 1, '2024-05-10 13:03:05', NULL, '2024-05-10 13:01:51', '2024-05-14 13:14:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id_alamat`),
  ADD KEY `fk_customer` (`id_customer`);

--
-- Indexes for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id_bahan_baku`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `detail_resep`
--
ALTER TABLE `detail_resep`
  ADD KEY `fk_bahanbaku` (`id_bahan_baku`),
  ADD KEY `fk_resep_detail` (`id_resep`);

--
-- Indexes for table `detil_pesanan`
--
ALTER TABLE `detil_pesanan`
  ADD KEY `fk_produk` (`id_produk`),
  ADD KEY `fk_datail_pesanan` (`id_pesanan`);

--
-- Indexes for table `detil_poin`
--
ALTER TABLE `detil_poin`
  ADD KEY `fk_pesanan` (`id_pesanan`);

--
-- Indexes for table `hampers`
--
ALTER TABLE `hampers`
  ADD PRIMARY KEY (`id_hampers`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pembelian_bahan_baku`
--
ALTER TABLE `pembelian_bahan_baku`
  ADD KEY `fk_pembelian` (`id_bahan_baku`);

--
-- Indexes for table `pengeluaran_lain`
--
ALTER TABLE `pengeluaran_lain`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `penggunaan_bahan_baku`
--
ALTER TABLE `penggunaan_bahan_baku`
  ADD KEY `fk_penggunaan` (`id_bahan_baku`);

--
-- Indexes for table `penitip`
--
ALTER TABLE `penitip`
  ADD PRIMARY KEY (`id_penitip`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `fk_customer_pesanan` (`id_customer`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD KEY `fk_karyawan` (`id_karyawan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `fk_hampers` (`id_hampers`),
  ADD KEY `fk_penitip` (`id_penitip`),
  ADD KEY `fk_resep` (`id_resep`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  MODIFY `id_bahan_baku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hampers`
--
ALTER TABLE `hampers`
  MODIFY `id_hampers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengeluaran_lain`
--
ALTER TABLE `pengeluaran_lain`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penitip`
--
ALTER TABLE `penitip`
  MODIFY `id_penitip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alamat`
--
ALTER TABLE `alamat`
  ADD CONSTRAINT `fk_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);

--
-- Constraints for table `detail_resep`
--
ALTER TABLE `detail_resep`
  ADD CONSTRAINT `fk_bahanbaku` FOREIGN KEY (`id_bahan_baku`) REFERENCES `bahan_baku` (`id_bahan_baku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_resep_detail` FOREIGN KEY (`id_resep`) REFERENCES `resep` (`id_resep`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detil_pesanan`
--
ALTER TABLE `detil_pesanan`
  ADD CONSTRAINT `fk_datail_pesanan` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`),
  ADD CONSTRAINT `fk_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `detil_poin`
--
ALTER TABLE `detil_poin`
  ADD CONSTRAINT `fk_pesanan` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`);

--
-- Constraints for table `pembelian_bahan_baku`
--
ALTER TABLE `pembelian_bahan_baku`
  ADD CONSTRAINT `fk_pembelian` FOREIGN KEY (`id_bahan_baku`) REFERENCES `bahan_baku` (`id_bahan_baku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penggunaan_bahan_baku`
--
ALTER TABLE `penggunaan_bahan_baku`
  ADD CONSTRAINT `fk_penggunaan` FOREIGN KEY (`id_bahan_baku`) REFERENCES `bahan_baku` (`id_bahan_baku`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_customer_pesanan` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);

--
-- Constraints for table `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `fk_karyawan` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_hampers` FOREIGN KEY (`id_hampers`) REFERENCES `hampers` (`id_hampers`),
  ADD CONSTRAINT `fk_penitip` FOREIGN KEY (`id_penitip`) REFERENCES `penitip` (`id_penitip`),
  ADD CONSTRAINT `fk_resep` FOREIGN KEY (`id_resep`) REFERENCES `resep` (`id_resep`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
