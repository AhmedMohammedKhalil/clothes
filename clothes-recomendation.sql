-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 06:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothes-recomendation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'المسئول', 'admin@gmail.com', '$2y$10$qf64IlxCJvD3Cs/WOTnLvenG9quv4.izyAWIUMdsjTCd.XQ4iXJD2', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(191) NOT NULL DEFAULT 'open',
  `total` double NOT NULL DEFAULT 0,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `status`, `total`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'close', 277, 6, '2023-04-16 01:28:30', '2023-04-17 00:06:46'),
(2, 'open', 0, 6, '2023-04-17 00:06:46', '2023-04-17 00:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'قمصان', 'ac492df3389a81c3481f9f25f1f865d3c5877e5c.jpg', NULL, NULL),
(2, 'شورتات', 'ef6fe902358d74205ea7fa8e54c90a1d7cade223.jpg', NULL, NULL),
(3, 'بنطالونات', '2402bdfe7310deec8a17adec34f90508c7c5a9d9.jpg', NULL, NULL),
(4, 'السترات', 'b5ad302779e7de0f290dc17750e404ce267a334b.jpg', NULL, NULL),
(5, 'المعاطف', '6c9e0f6913eceaaae9e076d44a6a16088611ce41.jpg', NULL, NULL),
(6, 'البلوزات', 'c1c7c571501511ebdc7a89ffed728270fb704e2d.jpg', NULL, NULL),
(7, 'الفساتين', '0d88d22a3a637c94f5703a3dbd7e4c34cabda9ac.jpg', NULL, NULL),
(8, 'جلاليب', '10813.jpg', '2023-04-22 18:24:11', '2023-04-22 18:24:11'),
(9, 'عبايات', '7gYAdVaDbsMEGlE9gykd0ZucxkdMsvzC2YpgUyrA.jpg', '2023-04-22 18:25:17', '2023-04-22 18:25:17'),
(10, 'اسدال', 'ssss.jpg', '2023-04-22 18:27:27', '2023-04-22 18:27:27'),
(11, 'تيشيرت', 'autJ0J66bN5pQuYQJIjzmTtjggmJ66Iv5bVoVKUo.jpg', '2023-04-22 18:39:17', '2023-04-22 18:39:17'),
(12, 'سويت شيرت', 'f16711109344747My project2222.jpg', '2023-04-22 18:40:25', '2023-04-22 18:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `owner` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `phone` varchar(8) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `address` text NOT NULL,
  `details` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `owner`, `email`, `password`, `phone`, `image`, `address`, `details`, `created_at`, `updated_at`) VALUES
(1, 'اوف وايت كويت', 'آسيل ناصف', 'offwhite@clothes.com', '$2y$10$XcRt5WcXgwuf4XQj5X5TAupBPH5LdNao3yD2XW0.VZFRbTmJuR.Qi', '32165487', 'c753269bbb75cc33e23737401bbc137786ec7947.jpg', 'الكويت ,الفروانية جمعية الرحاب', 'متجر ملابس حريمي', NULL, '2023-04-22 18:42:45'),
(2, 'ناس بوتيك', 'بتول محسن', 'nass@clothes.com', '$2y$10$f246BuRwidmfemgOkh4sAu7zKbm2.y4TwHYvlwLdIi2WpVg5YbViW', '32100087', NULL, 'الكويت , افينوس مول', 'متجر ملابس حريمي', NULL, NULL),
(3, 'بربري ستور', 'عدي  سامر', 'barbary@clothes.com', '$2y$10$5ngpkfg5P2CLRLqxQ.jDF.9wCdptNeDWVUUa64sESG7xyo3k2W4Ai', '23610008', NULL, 'منطقة الخيران', 'متجر ملابس رجالي', NULL, NULL),
(4, 'ماكس اند كو', 'طلال عابد', 'maxandcoo@clothes.com', '$2y$10$CmBFT/zKaKTbgUhjfv446eb384rJM4jEF1XhOL2s5vZIep.QPIPMG', '21615648', NULL, 'نطقة حولي', 'متجر ملابس رجالي', NULL, NULL),
(5, 'اتش اند اس', 'راشد تمام', 'hands@clothes.com', '$2y$10$sfm1iW84SLKe0u9OTsPop.5aWGvqlElFr30/8Tce4.y5Z7nysB/UC', '35615558', NULL, 'منطقة جنوب السرة', 'متجر ملابس رجالي', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'رجالى', NULL, NULL),
(2, 'نسائى', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_url` text DEFAULT NULL,
  `cover_name` varchar(50) DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`, `cover_name`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'P00769978.jpg', 'cover_1', 11, '2023-04-16 21:53:28', '2023-04-22 18:12:46'),
(2, 'P00769978_b1.jpg', 'cover_2', 11, '2023-04-16 21:53:28', '2023-04-22 18:12:46'),
(3, 'chatbot for mental health.png', NULL, 11, '2023-04-16 21:53:28', '2023-04-16 21:53:28'),
(4, '54333-01-M-01-230209_700x.jpg', 'cover_1', 2, '2023-04-21 03:22:27', '2023-04-22 18:14:40'),
(5, 'P00769978_d1.jpg', NULL, 11, '2023-04-22 18:12:46', '2023-04-22 18:12:46'),
(6, '54333-01-M-02-230209_700x.jpg', 'cover_2', 2, '2023-04-22 18:14:40', '2023-04-22 18:14:40'),
(7, '54333-01-M-07-230209_700x.jpg', NULL, 2, '2023-04-22 18:14:40', '2023-04-22 18:14:40'),
(8, '4f7cc12b576d682959c74f23f0bb68c360727f69.jpg', 'cover_1', 1, '2023-04-22 18:19:36', '2023-04-22 18:19:36'),
(9, 'c753269bbb75cc33e23737401bbc137786ec7947.jpg', 'cover_2', 1, '2023-04-22 18:19:36', '2023-04-22 18:19:36'),
(10, 'c753269bbb75cc33e23737401bbc137786ec7947.jpg', NULL, 1, '2023-04-22 18:19:36', '2023-04-22 18:19:36'),
(11, 'R4352AZ_23SP_WT34_01_01.jpg', 'cover_1', 3, '2023-04-22 18:44:38', '2023-04-22 18:44:38'),
(12, 'R4352AZ_23SP_WT34_02_01.jpg', 'cover_2', 3, '2023-04-22 18:44:38', '2023-04-22 18:44:38'),
(13, 'R4352AZ_23SP_WT34_04_01.jpg', NULL, 3, '2023-04-22 18:44:38', '2023-04-22 18:44:38'),
(14, '51ElQJCWUZL._AC_SX569_.jpg', 'cover_1', 4, '2023-04-22 18:46:16', '2023-04-22 18:46:16'),
(15, '51B5ep4Tk2L._AC_SX679_.jpg', 'cover_2', 4, '2023-04-22 18:46:16', '2023-04-22 18:46:16'),
(16, '51+CBWJCnYL._AC_SX569_.jpg', NULL, 4, '2023-04-22 18:46:16', '2023-04-22 18:46:16'),
(17, 'half-sleeve-normal-thoub-4644.jpg', 'cover_1', 12, '2023-04-23 01:01:33', '2023-04-23 01:01:33'),
(18, 'cover-1.jpg', 'cover_2', 12, '2023-04-23 01:01:33', '2023-04-23 01:01:33'),
(19, 'cover-2.jpg', NULL, 12, '2023-04-23 01:01:33', '2023-04-23 01:01:33'),
(20, '86bb396db0bb680fdd7c5bc5b9bfeb5645d0f7d9.jpg', 'cover_1', 13, '2023-04-23 01:04:59', '2023-04-23 01:04:59'),
(21, '2863a7ac54307b503e5888e583b7aad437b844e9.jpg', 'cover_2', 13, '2023-04-23 01:04:59', '2023-04-23 01:04:59'),
(22, 'bdbab10a58795ed4a7c863f89995f378acc970fb.jpg', NULL, 13, '2023-04-23 01:04:59', '2023-04-23 01:04:59'),
(23, 'ssss.jpg', 'cover_1', 14, '2023-04-23 01:07:05', '2023-04-23 01:07:05'),
(24, '7gYAdVaDbsMEGlE9gykd0ZucxkdMsvzC2YpgUyrA.jpg', 'cover_2', 14, '2023-04-23 01:07:05', '2023-04-23 01:07:05'),
(25, '7gYAdVaDbsMEGlE9gykd0ZucxkdMsvzC2YpgUyrA.jpg', NULL, 14, '2023-04-23 01:07:05', '2023-04-23 01:07:05'),
(26, 'PhotoRetouch1675883315561.jpg', 'cover_1', 15, '2023-04-23 03:35:32', '2023-04-23 03:35:32'),
(27, 'PhotoRetouch1675883362887.jpg', 'cover_2', 15, '2023-04-23 03:35:32', '2023-04-23 03:35:32'),
(28, 'PhotoRetouch1675883512612-1.jpg', NULL, 15, '2023-04-23 03:35:32', '2023-04-23 03:35:32'),
(29, '71dsr4Z0ylL._AC_SX679_.jpg', 'cover_1', 16, '2023-04-23 03:37:55', '2023-04-23 03:37:55'),
(30, '71Sr-kqO-DL._AC_SX679_.jpg', 'cover_2', 16, '2023-04-23 03:37:55', '2023-04-23 03:37:55'),
(31, '81ayCmbtP8L._AC_SX679_.jpg', NULL, 16, '2023-04-23 03:37:55', '2023-04-23 03:37:55'),
(32, 'اسدال-حجاب-2023-3.jpg', 'cover_1', 17, '2023-04-23 03:40:46', '2023-04-23 03:40:46'),
(33, 'اسدال-حجاب-2023-2.jpg', 'cover_2', 17, '2023-04-23 03:40:46', '2023-04-23 03:40:46'),
(34, 'اسدال-حجاب-2023-1.jpg', NULL, 17, '2023-04-23 03:40:46', '2023-04-23 03:40:46'),
(35, 'download.jpg', 'cover_1', 18, '2023-04-23 03:46:39', '2023-04-23 03:46:39'),
(36, 'images.jpeg', 'cover_2', 18, '2023-04-23 03:46:39', '2023-04-23 03:46:39'),
(37, 'جلابة-صوف-حبة-لفصل-الشتاء-2.jpg', NULL, 18, '2023-04-23 03:46:39', '2023-04-23 03:46:39'),
(38, '61kzoud-WwL._AC_SX679_.jpg', 'cover_1', 19, '2023-04-23 03:48:53', '2023-04-23 03:48:53'),
(39, 'cover2.jpg', 'cover_2', 19, '2023-04-23 03:48:53', '2023-04-23 03:48:53'),
(40, '61RaNgidFdL._AC_SX679_.jpg', NULL, 19, '2023-04-23 03:48:53', '2023-04-23 03:48:53'),
(41, 'A1FhyFrTdpL._AC_SX679_.jpg', 'cover_1', 20, '2023-04-23 03:51:31', '2023-04-23 03:51:31'),
(42, 'A1TICK-svbL._AC_SX679_.jpg', 'cover_2', 20, '2023-04-23 03:51:31', '2023-04-23 03:51:31'),
(43, 'A1FhyFrTdpL._AC_SX679_.jpg', NULL, 20, '2023-04-23 03:51:31', '2023-04-23 03:51:31'),
(44, '0181_2378_309_l1.jpg', 'cover_1', 21, '2023-04-23 03:56:55', '2023-04-23 03:56:55'),
(45, '0181_2378_309_b.jpg', 'cover_2', 21, '2023-04-23 03:56:55', '2023-04-23 03:56:55'),
(46, '0181_2378_309_f.jpg', NULL, 21, '2023-04-23 03:56:55', '2023-04-23 03:56:55'),
(47, 'M7676AZ_23SP_GN245_01_03.jpg', 'cover_1', 22, '2023-04-23 03:59:08', '2023-04-23 03:59:08'),
(48, 'M7676AZ_23SP_GN245_04_02.jpg', 'cover_2', 22, '2023-04-23 03:59:08', '2023-04-23 03:59:08'),
(49, 'M7676AZ_23SP_GN245_02_03.jpg', NULL, 22, '2023-04-23 03:59:08', '2023-04-23 03:59:08'),
(50, '1457_1901_309_of.jpg', 'cover_1', 23, '2023-04-23 04:03:03', '2023-04-23 04:03:03'),
(51, '1457_1901_309_ob.jpg', 'cover_2', 23, '2023-04-23 04:03:03', '2023-04-23 04:03:03'),
(52, '1457_1901_309_of.jpg', NULL, 23, '2023-04-23 04:03:03', '2023-04-23 04:03:03'),
(53, 'حاجاتي-ستور-سويت-شيرت-كابيتشو-حريمي-1-600x600.jpg', 'cover_1', 24, '2023-04-23 04:08:35', '2023-04-23 04:08:35'),
(54, 'حاجاتي-ستور-سويت-شيرت-كابيتشو-حريمي-3-600x600.jpg', 'cover_2', 24, '2023-04-23 04:08:35', '2023-04-23 04:08:35'),
(55, 'حاجاتي-ستور-سويت-شيرت-كابيتشو-حريمي-7-600x600.jpg', NULL, 24, '2023-04-23 04:08:35', '2023-04-23 04:08:35'),
(56, '311SLDofd7L._SL500_._AC_SL500_.jpg', 'cover_1', 25, '2023-04-23 04:12:09', '2023-04-23 04:12:45'),
(57, '1631546103_7a228b5f-2685-4ad3-9a72-05679d6a30ec.jpg', 'cover_2', 25, '2023-04-23 04:12:09', '2023-04-23 04:12:45'),
(58, '1631546103_7a228b5f-2685-4ad3-9a72-05679d6a30ec.jpg', NULL, 25, '2023-04-23 04:12:09', '2023-04-23 04:12:09'),
(59, '31oIZ858EkL._SL500_._AC_SL500_.jpg', NULL, 25, '2023-04-23 04:12:45', '2023-04-23 04:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'قطن', NULL, NULL),
(2, 'صوف', NULL, NULL),
(3, 'الكتان', NULL, NULL),
(4, 'حرير', NULL, NULL),
(5, 'الشيفون', NULL, NULL),
(6, 'الأورجانزا', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_15_053119_create_admins_table', 1),
(7, '2023_03_15_053150_create_companies_table', 1),
(8, '2023_03_24_033622_create_categories_table', 1),
(9, '2023_03_24_033811_create_sizes_table', 1),
(10, '2023_03_24_033856_create_genders_table', 1),
(11, '2023_03_24_033856_create_materials_table', 1),
(12, '2023_03_24_033856_create_products_table', 1),
(13, '2023_03_24_034246_create_carts_table', 1),
(14, '2023_03_24_034307_create_images_table', 1),
(15, '2023_03_24_072949_orders', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `cart_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `cart_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, 8, NULL, NULL),
(2, 5, 1, 2, 14, NULL, NULL),
(3, 6, 1, 1, 7, NULL, NULL),
(4, 8, 1, 7, 14, NULL, NULL),
(6, 11, 1, 3, 40, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `available` varchar(191) NOT NULL DEFAULT '1',
  `color` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `offer` double NOT NULL,
  `details` text NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `gender_id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `material_id` int(10) UNSIGNED NOT NULL,
  `size_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `available`, `color`, `price`, `offer`, `details`, `category_id`, `gender_id`, `company_id`, `material_id`, `size_id`, `created_at`, `updated_at`) VALUES
(1, 'بلوزة قطن', '1', 'ابيض', 10, 8, ' بلوزة من القطن بأكمام طويلة', 6, 2, 1, 1, 2, NULL, '2023-04-22 18:19:36'),
(2, 'فستان دينغري  ', '1', 'ابيض', 15, 11, 'فستان دينغري من الكوردوري', 7, 2, 1, 6, 2, NULL, '2023-04-22 18:14:40'),
(3, 'قميص أوكسفورد بقصة عادية', '1', 'ابيض', 20, 17, 'قميص أوكسفورد بقصة عادية', 1, 1, 2, 2, 2, NULL, '2023-04-22 18:44:38'),
(4, 'بنطلون كارجو  ', '1', 'ابيض', 13, 9, 'بنطلون كارجو بقصة مريحة', 3, 1, 2, 1, 2, NULL, '2023-04-22 18:46:16'),
(5, 'بنطلون رياضي', '1', 'ابيض', 17, 14, 'بنطلون بقصة مريحة', 3, 1, 3, 1, 1, NULL, NULL),
(6, 'سويت شيرت ', '1', 'ابيض', 15, 7, 'سويت شيرت مرنة بقصّة عادية', 4, 1, 3, 5, 1, NULL, NULL),
(7, 'شورت', '1', 'ابيض', 22, 18, 'شورت رياضي للركض', 2, 1, 4, 1, 3, NULL, NULL),
(8, 'هودي رياضي', '1', 'ابيض', 19, 14, 'هودي رياضي منسوج من قماش دراي موف', 4, 1, 4, 6, 3, NULL, NULL),
(9, 'تيشيرت', '1', 'ابيض', 12, 11, 'تي-شيرت بقصّة عادية مع جيب', 6, 1, 5, 3, 4, NULL, NULL),
(10, 'تيشيرت ملون', '1', 'ابيض', 20, 15, 'تي-شيرت مزين بطبعة وبقصة مريحة', 6, 1, 5, 3, 4, NULL, NULL),
(11, 'فستان حرير', '1', 'اصفر', 5, 0, 'انطلقي إلى رؤية الفستان الخيالية مع هذا الفستان القصير من الحرير. تظهر مع لمسات من الحنين إلى الماضي ، والأكمام شبه الشفافة تهبط على الأصفاد المخددة بينما ياقة بيتر بان متناقضة مع خط العنق المستدير.\n\nتعليمات العناية: تنظيف جاف\n', 7, 2, 1, 4, 1, '2023-04-16 21:53:28', '2023-04-22 18:12:46'),
(12, 'جلابية ', '1', 'رمادي', 4, 0, 'جلابية قطن ', 8, 1, 2, 1, 4, '2023-04-23 01:01:33', '2023-04-23 01:01:33'),
(13, 'سويتشيرت', '1', 'اسود', 3, 0, 'هودي اسود شيفون', 12, 1, 2, 5, 4, '2023-04-23 01:04:59', '2023-04-23 01:04:59'),
(14, 'عباية كتان', '1', 'ازرق', 4, 0, 'عباية كتان', 9, 2, 2, 3, 5, '2023-04-23 01:07:05', '2023-04-23 01:07:05'),
(15, 'اسدال اورجانزا', '1', 'ملون', 8, 0, 'اسدال اورجانزا عالي الجودة', 10, 2, 3, 6, 4, '2023-04-23 03:35:32', '2023-04-23 03:35:32'),
(16, 'اسدال شيفون', '1', 'ملون', 6, 4, 'اسدال شيفون جودة رائعة ', 10, 2, 3, 5, 4, '2023-04-23 03:37:55', '2023-04-23 03:37:55'),
(17, 'اسدال كتان', '1', 'لبني', 7, 4, 'اسدال كتان عالي الجودة', 10, 2, 3, 3, 2, '2023-04-23 03:40:46', '2023-04-23 03:40:46'),
(18, 'جلابية عربي', '1', 'رمادي', 7, 5, 'جلابية عربي رمادي اللون من خامة الصوف', 8, 1, 3, 2, 4, '2023-04-23 03:46:39', '2023-04-23 03:46:39'),
(19, 'معطف قطن', '1', 'ملون', 8, 6, 'معطف قطن ', 5, 1, 3, 1, 3, '2023-04-23 03:48:53', '2023-04-23 03:48:53'),
(20, 'معطف كتان', '1', 'رمادي', 7, 0, 'معطف كتان رمادي ', 5, 1, 3, 3, 4, '2023-04-23 03:51:31', '2023-04-23 03:51:31'),
(21, 'تيشيرت قطن', '1', 'تركواز', 15, 14, 'تيشيرت قطن تركوازي اللون', 11, 1, 4, 1, 4, '2023-04-23 03:56:55', '2023-04-23 03:56:55'),
(22, 'تيشيرت بولو برقبة', '1', 'اخضر ', 20, 18, 'تيشيرت بولو برقبة قطن', 11, 1, 4, 1, 4, '2023-04-23 03:59:08', '2023-04-23 03:59:08'),
(23, 'سوتشيرت حريمي', '1', 'اخضر فاتح', 10, 9, 'سوتشيرت حريمي اخضر فاتح', 12, 2, 5, 6, 2, '2023-04-23 04:03:03', '2023-04-23 04:03:03'),
(24, 'سويتشيرت حرير', '1', 'اوف وايت', 18, 14, 'سويتشيرت حرير اوفوايت', 12, 2, 5, 4, 4, '2023-04-23 04:08:35', '2023-04-23 04:08:35'),
(25, 'عباية صلاة', '1', 'اسود', 10, 7, 'عباية سوداء شيفون', 9, 2, 5, 5, 2, '2023-04-23 04:12:09', '2023-04-23 04:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'S', NULL, NULL),
(2, 'M', NULL, NULL),
(3, 'L', NULL, NULL),
(4, 'XL', NULL, NULL),
(5, 'XXL', NULL, NULL),
(6, 'XXXL', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `phone` varchar(8) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `image`, `created_at`, `updated_at`) VALUES
(1, 'طلال ظاهر', 'talal@gmail.com', '$2y$10$c/YzDBbS.bz5woQ.sZ7bEOTyoQl3NSYy7hp.s8kHebpHxQg73KJIe', '12345678', NULL, NULL, NULL),
(2, 'كساب  كرم', 'kassab@gmail.com', '$2y$10$Cxw1CeUCI0.mQzqixeepgOZZY3UP9LKg8vdOECg0jknuZ4w//G33O', '12345678', NULL, NULL, NULL),
(3, 'رشيد  بشار', 'rasheed@gmail.com', '$2y$10$GhwopTmO3ngKM9InwfG/N.AZTCHZabl0zsNeURqHKAKDhfjav372K', '12345678', NULL, NULL, NULL),
(4, 'فراس  كريم', 'feraas@gmail.com', '$2y$10$8yNJcybZxpS8cbnczYnWgOXWzfRZFAP7TkGsiLG2WJH9eXclu/R7q', '12345678', NULL, NULL, NULL),
(5, 'خاطر  معوض', 'khater@gmail.com', '$2y$10$FGm3j/sSe9Ptf7tkPXVP0usTAweN8vn/Q91t2X4t5Z6H5WHEhd.ZC', '12345678', NULL, NULL, NULL),
(6, 'اسلام السعداوي', 'elsaadawy@gmail.com', '$2y$10$6ACKbeHCugp9O0iD1FOiiuDwHuDm6nmjIAmXqmlIldaoKcP2b8vz.', '12345678', NULL, '2023-04-16 01:28:30', '2023-04-16 01:28:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_product_id_foreign` (`product_id`),
  ADD KEY `orders_cart_id_foreign` (`cart_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_gender_id_foreign` (`gender_id`),
  ADD KEY `products_company_id_foreign` (`company_id`),
  ADD KEY `products_material_id_foreign` (`material_id`),
  ADD KEY `products_size_id_foreign` (`size_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_gender_id_foreign` FOREIGN KEY (`gender_id`) REFERENCES `genders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_material_id_foreign` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
