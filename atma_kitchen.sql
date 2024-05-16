-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 02:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `harga_hampers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hampers`
--

INSERT INTO `hampers` (`id_hampers`, `tgl_mulai_promo`, `tgl_akhir_promo`, `nama_hampers`, `harga_hampers`) VALUES
(1, '2024-04-18 00:00:00', '2024-05-18 00:00:00', 'Paket A', 650000000),
(2, '2024-03-14 00:00:00', '2024-04-14 00:00:00', 'Paket B', 500000000),
(4, '2024-08-02 00:00:00', '2024-09-02 00:00:00', 'Palet C', 350000000);

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
  `status` varchar(15) DEFAULT NULL,
  `jenis_delivery` varchar(10) NOT NULL,
  `tanggal_lunas` datetime DEFAULT NULL,
  `alamat` text NOT NULL,
  `poin_digunakan` int(11) DEFAULT NULL,
  `pembayaran` int(11) DEFAULT NULL,
  `poin_didapat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `no_nota`, `id_customer`, `tanggal_ambil`, `tanggal_pesan`, `status`, `jenis_delivery`, `tanggal_lunas`, `alamat`, `poin_digunakan`, `pembayaran`, `poin_didapat`) VALUES
(1, '2024.03.01', 1, '2024-03-27 00:00:00', '2024-03-26 00:00:00', 'Selesai', 'Antar', '2024-03-27 00:00:00', 'jalan pengangsaan, Caturtunggal ,Depok ,Sleman ,DI Yogyakarta', 120, 723000, 106),
(2, '2024.03.02', 2, '2024-03-27 00:00:00', '2024-03-26 00:00:00', 'Selesai', 'Antar', '2024-03-27 00:00:00', 'jalan pengangsaan, Caturtunggal ,Depok ,Sleman ,DI Yogyakarta', 100, 140000, 19),
(3, '2024.03.03', 3, '2024-03-27 00:00:00', '2024-03-26 00:00:00', 'Selesai', 'Antar', '2024-03-27 00:00:00', 'jalan pengangsaan, Caturtunggal ,Depok ,Sleman ,DI Yogyakarta', 100, 190000, 60),
(4, '2024.03.04', 5, '2024-03-27 00:00:00', '2024-03-26 00:00:00', 'Selesai', 'Antar', '2024-03-27 00:00:00', 'jalan pengangsaan, Caturtunggal ,Depok ,Sleman ,DI Yogyakarta', 100, 440000, 64),
(5, '2024.03.05', 6, '2024-03-27 00:00:00', '2024-03-26 00:00:00', 'Selesai', 'Antar', '2024-03-27 00:00:00', 'jalan pengangsaan, Caturtunggal ,Depok ,Sleman ,DI Yogyakarta', 100, 75000, 6),
(6, '2024.03.03', 3, '2024-03-27 00:00:00', '2024-03-26 00:00:00', 'Selesai', 'Antar', '2024-03-27 00:00:00', 'jalan pengangsaan, Caturtunggal ,Depok ,Sleman ,DI Yogyakarta', 100, 190000, 24),
(23, NULL, 3, '3322-03-12 00:00:00', '2024-05-14 21:04:51', 'Selesai', 'delivery', NULL, '1233312', 60, NULL, NULL);

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
  `gambar_produk` longtext NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_stok` int(11) DEFAULT NULL,
  `tipe_produk` varchar(20) NOT NULL,
  `porsi` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_hampers`, `id_resep`, `id_penitip`, `nama_produk`, `gambar_produk`, `harga`, `jumlah_stok`, `tipe_produk`, `porsi`) VALUES
(1, NULL, 1, NULL, 'lapis legit (uk.20x20)', 'data:image/webp;base64,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', 850000, 0, 'Asli', 1);
INSERT INTO `produk` (`id_produk`, `id_hampers`, `id_resep`, `id_penitip`, `nama_produk`, `gambar_produk`, `harga`, `jumlah_stok`, `tipe_produk`, `porsi`) VALUES
(3, 1, 1, NULL, 'Lapis Legit (uk.10x20)', '', 450000, 0, 'Asli', 0.5),
(4, NULL, 2, NULL, 'Lapis Surabaya (uk.20x20)', '', 550000, 0, 'Asli', 1),
(5, 2, 2, NULL, 'Lapis Surabaya (uk.10x20)', '', 300000, 0, 'Asli', 0.5),
(7, NULL, 3, NULL, 'Brownies (uk.20x20)', '', 250000, 0, 'Asli', 1),
(8, 1, 3, NULL, 'Brownies (uk.10x20)', '', 150000, 0, 'Asli', 0.5),
(10, NULL, 4, NULL, 'Mandarin  (uk.20x20)', '', 450000, 0, 'Asli', 1),
(11, NULL, 4, NULL, 'Madarin (uk.10x20)', '', 250000, 0, 'Asli', 0.5),
(12, NULL, 5, NULL, 'Spikoe (uk.20x20)', '', 350000, 0, 'Asli', 1),
(13, 4, 5, NULL, 'Spikoe (uk.10x20)', '', 200000, 0, 'Asli', 0.5),
(14, 2, 6, NULL, 'Roti Sosis ', '', 180000, 0, 'Asli', 1),
(15, NULL, 7, NULL, 'Milk Bun', '', 120000, 0, 'Asli', 1),
(16, NULL, 8, NULL, 'Roti Keju', '', 150000, 0, 'Asli', 1),
(17, NULL, 9, NULL, 'Choco Creamy Latte', '', 75000, 0, 'Asli', 1),
(19, 4, 10, NULL, 'Matcha Creamy Latte', '', 100000, 0, 'Asli', 1),
(23, NULL, NULL, 6, 'Keripik Kentang 250 gr', '', 75000, 50, 'Titipan', 1),
(24, NULL, NULL, 6, 'Kopi Luwak Bubuk 250 gr', '', 250000, 25, 'Titipan', 1),
(26, NULL, NULL, 7, 'Kopi Luwak Bubuk 250 gr', '', 120000, 25, 'Titipan', 1),
(27, NULL, NULL, 5, 'Matcha Organik Bubuk 100 gr', '', 300000, 40, 'Titipan', 1);

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
('HCqNcmhkhz1VXjbreg71ZtDvAbCHa26pz4xiXSYe', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibDZXZGJMZUYxMjc3OGtCZFBya2RBdENSckVHY1NOWEFZQW90SlFXeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wZXNhbmFuL3Blc2FuUHJvZHVrL2hvbWVTY3JpcHQuanMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1715695492);

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
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
