-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 03, 2024 at 11:05 AM
-- Server version: 5.7.40
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multivendor_master_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `behind` text COLLATE utf8mb4_unicode_ci,
  `mission` text COLLATE utf8mb4_unicode_ci,
  `service` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `subtitle`, `description`, `image`, `behind`, `mission`, `service`, `created_at`, `updated_at`) VALUES
(1, 'Dream Shop', 'Trends and Seasons', 'Trends and Seasons Fashion trends often change with the seasons, with designers and brands releasing new collections for spring/summer and autumn/winter. These trends are influenced by a variety of factors, including cultural events, technological innovations, and the creative visions of designers.', 'images/GGMVAezPS7gATI8zU6do8KZoJ3R6c2I7kSe6T9Lf.gif', 'Fashion Shows Fashion weeks in cities like Paris, Milan, New York, and London are major events in the fashion calendar. Designers showcase their latest collections to buyers, media, and fashion enthusiasts, setting the tone for upcoming trends.', 'These trends are influenced by a variety of factors, including cultural events, technological innovations, and the creative visions of designers.', 'Designers showcase their latest collections to buyers, media, and fashion enthusiasts, setting the tone for upcoming trends.', '2024-09-03 02:15:00', '2024-09-03 02:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `admincontacts`
--

DROP TABLE IF EXISTS `admincontacts`;
CREATE TABLE IF NOT EXISTS `admincontacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admincontacts`
--

INSERT INTO `admincontacts` (`id`, `map`, `address`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4921.18537852755!2d4.475172!3d51.923142000000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c434a706ede0d7%3A0xe432417746a7aa9b!2sWeena-Zuid%20130%2C%203012%20NC%20Rotterdam%2C%20Netherlands!5e0!3m2!1sen!2sbd!4v1725351378362!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Weena zuid 130, 3012 NC Rotterdam, Netherlands.', 'info@dreamdiver.nl', '+31644215009', '2024-09-03 02:18:11', '2024-09-03 02:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `size`, `color`, `created_at`, `updated_at`) VALUES
(8, '13e1201c-d800-4669-bf4a-de44303dfdb4', 3, 1, 'l', 'green', '2024-09-02 03:25:01', '2024-09-02 03:25:01'),
(7, '19932726-0f7b-4a77-ba3d-bf3af67e1ed6', 2, 5, 's', 'green', '2024-09-01 05:17:08', '2024-09-01 05:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Men', 'categories/7H3ZiqFXuMEzaobbUGPoibXXaHJ6Wx0TLgVlAlSe.jpg', 'Fashion trends often change with the seasons', '2024-08-31 04:45:15', '2024-09-03 00:20:24'),
(2, 'Women', 'categories/vebz3seK8Ghw7GNoQlwEdjRI0OO0a7OVuBDS2eVk.gif', 'designers and brands releasing new collections', '2024-09-03 00:21:02', '2024-09-03 00:21:02'),
(3, 'Baby', 'categories/QvD8pCgE8oGTJExClVvS4hYbIZHu1IBWAYbOqcxi.jpg', 'Trends and Seasons Fashion trends often change with the seasons.', '2024-09-03 00:21:49', '2024-09-03 00:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'images/cGROfyYAy4ltiix2I9TmPRhhCnSbeb8w3HPupKDl.jpg', '2024-09-01 03:20:52', '2024-09-01 03:21:17'),
(2, 'images/ONravfBvdKmXUugjKzsD45IB5RNL170hoVQ2xaqv.jpg', '2024-09-01 03:25:53', '2024-09-01 03:25:53'),
(3, 'images/UCmghyydIMe7y9Nd6AqGZX3Rdaw3krtjEHYqchXM.jpg', '2024-09-01 03:26:32', '2024-09-01 03:26:32'),
(4, 'images/SzR1cLYeQ0SvA68emaKae6c1QTeu4lyAHmKEo9Vd.jpg', '2024-09-01 03:26:54', '2024-09-01 03:26:54'),
(5, 'images/wMwYW7vwhBYrUsmU7QI55iNLDEOd3Tycfhcx3LOL.jpg', '2024-09-01 03:27:16', '2024-09-01 03:27:16'),
(8, 'images/bqkTHY3hRocJzmfakvqahsKbHKndkJ9vFjt5p0yx.jpg', '2024-09-01 03:32:47', '2024-09-01 03:32:47'),
(7, 'images/UF679UBUboQUcduaCaGdN3KznDw8Zke2W2WVBdh7.jpg', '2024-09-01 03:28:07', '2024-09-01 03:28:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `featureds`
--

DROP TABLE IF EXISTS `featureds`;
CREATE TABLE IF NOT EXISTS `featureds` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `information` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

DROP TABLE IF EXISTS `heroes`;
CREATE TABLE IF NOT EXISTS `heroes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Men', 'Fashion trends often change with the seasons', 'images/ck32ciT82kOJ5M9Q1D36hXM4Kk9kfUdeYqiGQ2ce.gif', '2024-09-01 04:04:20', '2024-09-03 00:17:38'),
(2, 'Women', 'designers and brands releasing new collections', 'images/1OMLwcHNbeUCg0bpOT5VzvjykDmqPfUg4pIAIteo.gif', '2024-09-01 04:04:53', '2024-09-03 00:18:30'),
(3, 'Baby', '5PKT JEAN AY 22 23: MEDIUM BLUE', 'images/4xzAKAUw2ZHRT0wzbSieom01TaBIL3is8AMnD9Pc.gif', '2024-09-03 00:18:53', '2024-09-03 00:18:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_06_072612_create_heroes_table', 1),
(6, '2024_07_07_072212_create_summers_table', 1),
(7, '2024_07_07_091426_create_winters_table', 1),
(8, '2024_07_08_084510_create_usercontacts_table', 1),
(9, '2024_07_08_092413_create_admincontacts_table', 1),
(10, '2024_07_09_084343_create_abouts_table', 1),
(11, '2024_07_14_082911_create_cache_table', 1),
(12, '2024_07_16_094149_create_clients_table', 1),
(13, '2024_07_16_095457_create_featureds_table', 1),
(14, '2024_07_16_100236_create_recents_table', 1),
(15, '2024_07_29_045835_create_categories_table', 1),
(16, '2024_07_29_050255_create_subcategories_table', 1),
(17, '2024_07_29_050531_create_products_table', 1),
(18, '2024_08_18_063109_create_carts_table', 1),
(19, '2024_08_18_063132_create_orders_table', 1),
(20, '2024_08_18_110731_create_order_items_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` decimal(8,2) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_amount`, `status`, `shipping_address`, `payment_method`, `first_name`, `last_name`, `email`, `mobile_no`, `address_line1`, `address_line2`, `country`, `city`, `state`, `zip_code`, `created_at`, `updated_at`) VALUES
('9ce78150-5de2-47b0-8628-7215f69fe96f', '13e1201c-d800-4669-bf4a-de44303dfdb4', '1670.00', 'Pending', '52 Milton Freeway Perspiciatis dolore', 'cash_on_delivery', 'Oliver', 'Avery', 'sazaldreamdiver@gmail.com', '+1 (682) 908-2991', '52 Milton Freeway', 'Perspiciatis dolore', 'Netherland', 'Aut in culpa dicta q', 'Voluptatibus quasi m', '54420', '2024-09-01 03:00:09', '2024-09-01 03:00:09'),
('9ceb7f73-3e77-4a09-a883-c0bbd76ed7c9', '12d072a0-1066-4736-89c2-a7521b77172a', '468.00', 'Delivered', '190 Oak Avenue Aut culpa autem ad d', 'credit_card', 'Sazal', 'Padilla', 'sazaldreamdiver@gmail.com', '+1 (566) 771-5515', '190 Oak Avenue', 'Aut culpa autem ad d', 'Algeria', 'Minus est enim labor', 'Officia qui earum ma', '66399', '2024-09-03 02:38:15', '2024-09-03 02:44:39'),
('9ceb8076-71c4-4137-aaee-8ba9c3ec22be', '12d072a0-1066-4736-89c2-a7521b77172a', '621.00', 'Pending', '21 South Cowley Extension Eligendi eum soluta', 'credit_card', 'Sazal Abdullah', 'Whitley', 'sazaldreamdiver@gmail.com', '+1 (709) 843-8214', '21 South Cowley Extension', 'Eligendi eum soluta', 'Netherland', 'Sed maxime in labori', 'Aspernatur itaque au', '83677', '2024-09-03 02:41:04', '2024-09-03 02:41:04'),
('9ceb80c2-554c-4534-a975-dbd4e6248cd3', '12d072a0-1066-4736-89c2-a7521b77172a', '468.00', 'Pending', '903 North Hague Extension Amet ea corporis of', 'bank_transfer', 'Hilel', 'Dunlap', 'sazaldreamdiver@gmail.com', '+1 (979) 478-6195', '903 North Hague Extension', 'Amet ea corporis of', 'Albania', 'Rerum quos do et eiu', 'Libero repellendus', '85746', '2024-09-03 02:41:54', '2024-09-03 02:41:54'),
('9ceb80f6-0072-4f70-9a26-d94ee09e7012', '12d072a0-1066-4736-89c2-a7521b77172a', '581.00', 'Pending', '152 East White Oak Court Quam earum quis dolo', 'credit_card', 'Penelope', 'Mason', 'sazaldreamdiver@gmail.com', '+1 (922) 967-3295', '152 East White Oak Court', 'Quam earum quis dolo', 'Bangladesh', 'Omnis autem aut qui', 'Ullamco maiores libe', '62666', '2024-09-03 02:42:28', '2024-09-03 02:42:28'),
('9ceb8177-385e-4a66-9378-f3e99515f265', '12d072a0-1066-4736-89c2-a7521b77172a', '581.00', 'Delivered', '11 East New Extension Nihil quis aliqua E', 'credit_card', 'Hayfa', 'Pittman', 'pyjytubov@mailinator.com', '+1 (275) 902-9562', '11 East New Extension', 'Nihil quis aliqua E', 'Algeria', 'Odio officia dolore', 'Officiis dignissimos', '84613', '2024-09-03 02:43:53', '2024-09-03 02:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_product_id_foreign` (`product_id`),
  KEY `order_items_order_id_foreign` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `size`, `color`, `total_price`, `created_at`, `updated_at`) VALUES
(1, '9ce78150-5de2-47b0-8628-7215f69fe96f', 3, 1, '468.00', 'l', 'green', '468.00', '2024-09-01 03:00:09', '2024-09-01 03:00:09'),
(2, '9ce78150-5de2-47b0-8628-7215f69fe96f', 4, 1, '581.00', 'l', 'green', '581.00', '2024-09-01 03:00:09', '2024-09-01 03:00:09'),
(3, '9ce78150-5de2-47b0-8628-7215f69fe96f', 1, 1, '621.00', 'm', 'green', '621.00', '2024-09-01 03:00:09', '2024-09-01 03:00:09'),
(5, '9ceb7f73-3e77-4a09-a883-c0bbd76ed7c9', 6, 1, '468.00', 'M', 'White', '468.00', '2024-09-03 02:38:15', '2024-09-03 02:38:15'),
(6, '9ceb8076-71c4-4137-aaee-8ba9c3ec22be', 9, 1, '621.00', 'S', 'Green', '621.00', '2024-09-03 02:41:04', '2024-09-03 02:41:04'),
(7, '9ceb80c2-554c-4534-a975-dbd4e6248cd3', 11, 1, '468.00', '30', 'White', '468.00', '2024-09-03 02:41:54', '2024-09-03 02:41:54'),
(8, '9ceb80f6-0072-4f70-9a26-d94ee09e7012', 18, 1, '581.00', 's', 'green', '581.00', '2024-09-03 02:42:28', '2024-09-03 02:42:28'),
(9, '9ceb8177-385e-4a66-9378-f3e99515f265', 34, 1, '581.00', 's', 'green', '581.00', '2024-09-03 02:43:53', '2024-09-03 02:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sizes` json NOT NULL,
  `colors` json NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `old_price` decimal(8,2) DEFAULT NULL,
  `sub_description` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `information` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Regular',
  PRIMARY KEY (`id`),
  KEY `products_subcategory_id_foreign` (`subcategory_id`),
  KEY `products_category_id_foreign` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `subcategory_id`, `category_id`, `name`, `title`, `sub_title`, `sizes`, `colors`, `image`, `price`, `old_price`, `sub_description`, `description`, `information`, `created_at`, `updated_at`, `status`) VALUES
(6, 2, 1, 'Shirt-1', 'new', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '[\"M\", \"L\"]', '[\"White\"]', 'products/CMZhLdZJXfqVxT4CdsUQG289ImoD90XPNGnqiuMc.jpg', '468.00', '690.00', 'Fashion trends often change with the seasons', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'designers and brands releasing new collections', '2024-09-03 00:44:50', '2024-09-03 00:56:02', 'Regular'),
(5, 2, 1, 'Shirt-2', 'new', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '[\"S\", \"M\"]', '[\"green\"]', 'products/JhBxTpNkz1mPZxReYlfjkXLmIFVu3fAj5dpzEtBW.jpg', '621.00', '690.00', 'designers and brands releasing new collections', 'Fashion trends often change with the seasons', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 00:43:10', '2024-09-03 00:56:10', 'Regular'),
(7, 2, 1, 'Shirt-3', 'New', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '[\"XL\"]', '[\"green\"]', 'products/LD7wVwW66DQhKCkUJJcBXDfTHUq0YUpxzPY0LKVZ.jpg', '647.00', '772.00', 'Fashion trends often change with the seasons', 'Fashion trends often change with the seasons', 'designers and brands releasing new collections', '2024-09-03 00:49:32', '2024-09-03 00:49:32', 'Regular'),
(8, 2, 1, 'Shirt-4', 'new', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '[\"L\"]', '[\"Black\"]', 'products/049OkDvjYDGU4FxNcjwQkRRDbIGhA2IFxXZuOgwk.jpg', '581.00', '689.00', 'Fashion trends often change with the seasons', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'designers and brands releasing new collections', '2024-09-03 00:53:46', '2024-09-03 00:53:46', 'Regular'),
(9, 2, 1, 'Shirt-5', 'new', 'Architecto voluptate', '[\"S\", \"M\"]', '[\"Green\", \"White\"]', 'products/EvFJ2ggQKIQciEYIxwVg9J4E4Lxl0VhM8iddxonv.jpg', '621.00', '772.00', 'designers and brands releasing new collections', 'Fashion trends often change with the seasons', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 00:55:17', '2024-09-03 00:55:21', 'Featured'),
(10, 3, 1, 'Pent-1', 'new', 'Fashion trends often change with the seasons', '[\"30\", \"32\"]', '[\"Black\"]', 'products/ruV6GKBL76vR9DIsVvltZo69DcGdYGbglpVBbTHL.jpg', '647.00', '690.00', 'Fashion trends often change with the seasons', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'designers and brands releasing new collections', '2024-09-03 00:58:31', '2024-09-03 00:58:31', 'Regular'),
(11, 3, 1, 'Pent-2', 'New', 'Officia ad asperiore', '[\"30\"]', '[\"White\"]', 'products/7zjjCc8h4G60mYzma1ni4gz4eh28uJjtk00z4dJd.jpg', '468.00', '690.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Fashion trends often change with the seasons', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 00:59:42', '2024-09-03 01:02:13', 'Regular'),
(12, 3, 1, 'Pent-3', 'New', 'Officia ad asperiore', '[\"34\"]', '[\"green\"]', 'products/qVqkzErgtEdwPce85T5sTLwVRlX4brT9k5fbBrc2.jpg', '601.00', '690.00', 'designers and brands releasing new collections', 'Fashion trends often change with the seasons', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:00:31', '2024-09-03 01:02:29', 'Regular'),
(13, 3, 1, 'Pent-3', 'new', 'Architecto voluptate', '[\"30\"]', '[\"green\"]', 'products/09yYGNJvzygjeqkFcRqnOhMZf3Y3WN7eQxRwK3wo.jpg', '468.00', '690.00', 'designers and brands releasing new collections', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Fashion trends often change with the seasons', '2024-09-03 01:01:40', '2024-09-03 01:02:43', 'Regular'),
(14, 3, 1, 'Pent-5', 'new', 'Voluptate libero et', '[\"34\"]', '[\"green\"]', 'products/On7uBA8PM0rw1PkRjDIWH1Ot9ow6xJMJjG9GUEJ6.jpg', '621.00', '772.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Fashion trends often change with the seasons', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:04:03', '2024-09-03 01:04:08', 'Featured'),
(15, 4, 1, 'Blazer-1', 'new', 'Architecto voluptate', '[\"M\", \"L\"]', '[\"Sky\"]', 'products/2uLi4QVIbidW0AR9E6wogQtlMleFX6rkNs01CZwm.jpg', '621.00', '690.00', 'Fashion trends often change with the seasons', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'designers and brands releasing new collections', '2024-09-03 01:14:02', '2024-09-03 01:14:02', 'Regular'),
(16, 4, 1, 'Blazer-2', 'new', 'Voluptate libero et', '[\"L\"]', '[\"Merun\"]', 'products/ahmxIFoptfCnpl7XzH2Nyg6Q6gmemASK503n553c.jpg', '468.00', '690.00', 'designers and brands releasing new collections', 'Fashion trends often change with the seasons', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:16:17', '2024-09-03 01:16:34', 'Regular'),
(17, 4, 1, 'Blazer-3', 'new', 'Voluptate libero et', '[\"s\"]', '[\"Black\"]', 'products/QYYA7OMkpKnzm3yVLPcmXKAC69XOVVqn3QYTkgeJ.jpg', '581.00', '689.00', 'Fashion trends often change with the seasons', 'designers and brands releasing new collections', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:17:56', '2024-09-03 01:17:56', 'Regular'),
(18, 4, 1, 'Blazer-4', 'hot', 'Architecto voluptate', '[\"s\"]', '[\"green\"]', 'products/2hyXHRaR603oDF0cbEQSSsd7Y6pMTDo1Qwrx3bDx.jpg', '581.00', '772.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'designers and brands releasing new collections', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:18:50', '2024-09-03 01:19:06', 'Recent'),
(19, 4, 1, 'Blazer-6', 'Offer', 'Architecto voluptate', '[\"s\"]', '[\"green\"]', 'products/aHQMnPu2N5HxQW44r2ru3EZti1FyD2ZcixISufn1.jpg', '468.00', '690.00', 'Fashion trends often change with the seasons', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'designers and brands releasing new collections', '2024-09-03 01:20:59', '2024-09-03 01:21:06', 'Offer'),
(20, 4, 1, 'Blazer', 'new', 'Architecto voluptate', '[\"s\"]', '[\"green\"]', 'products/wRm121Ve4XlWE6svnAhOPvNQ7AvH87m4afeTFNqj.jpg', '647.00', '690.00', 'Fashion trends often change with the seasons', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'designers and brands releasing new collections', '2024-09-03 01:22:41', '2024-09-03 01:38:35', 'Regular'),
(21, 5, 1, 't-shirt', 'new', 'Sed totam cillum ull', '[\"s\"]', '[\"green\"]', 'products/z9wVSRTQ8UCJgVsw0SUuaRSM9TUgYds5O1OJgaND.jpg', '468.00', '690.00', 'Fashion trends often change with the seasons', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'designers and brands releasing new collections', '2024-09-03 01:25:03', '2024-09-03 01:25:03', 'Regular'),
(22, 5, 1, 'T-shirt', 'new', 'Voluptate libero et', '[\"s\"]', '[\"black\"]', 'products/FhVsoFeudEoQ1obLjq9K0g1ppVc9OqUSdcF0YWXg.jpg', '621.00', '772.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:27:54', '2024-09-03 01:28:03', 'Regular'),
(23, 5, 1, 'T-Shirt', 'offer', 'Architecto voluptate', '[\"s\"]', '[\"green\"]', 'products/wEUXHOoapMxu0TWOLYaP5CAJmPcQsAj9iDbY2hsT.jpg', '139.00', '294.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:28:50', '2024-09-03 01:29:09', 'Offer'),
(24, 6, 2, 'Dress', 'new', 'Officia ad asperiore', '[\"s\"]', '[\"green\"]', 'products/K2Quwr9vugNBbokVqw0azzPW1Ai2h3yHUlELGkns.jpg', '621.00', '690.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:31:49', '2024-09-03 01:31:49', 'Regular'),
(25, 6, 2, 'Dress', 'new', 'Voluptate libero et', '[\"s\"]', '[\"green\"]', 'products/uMwrZ9OeH5PBZlQ3AztCpCulK4cBrwZRQwQAQ18T.jpg', '647.00', '772.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:32:27', '2024-09-03 01:32:27', 'Regular'),
(26, 6, 2, 'Dress', 'new', 'Architecto voluptate', '[\"s\"]', '[\"green\"]', 'products/CZGYAF3AZfvnVBknK0uZCJvr8CwCJZwbVqSeefOk.jpg', '621.00', '772.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:33:08', '2024-09-03 01:33:08', 'Regular'),
(27, 6, 2, 'Dress', 'new', 'Voluptate libero et', '[\"s\"]', '[\"green\"]', 'products/XZonEX1SJyeI5hkO0cXgbq28TdGAWmFbbeKd6SgR.jpg', '647.00', '689.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:34:16', '2024-09-03 01:34:16', 'Regular'),
(28, 6, 2, 'Dress', 'new', 'Architecto voluptate', '[\"s\"]', '[\"green\"]', 'products/sNVR27culqNiqqOz2g79UdQifCQaRtx3ixFHMwpE.jpg', '581.00', '772.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:34:59', '2024-09-03 01:35:13', 'Featured'),
(30, 7, 2, 'Kameez', 'new', 'Voluptate libero et', '[\"s\"]', '[\"green\"]', 'products/yx7HczJEW5lPwZaHM3H4Q6PCJZMqDUPkCD2KS9k0.jpg', '581.00', '689.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:41:04', '2024-09-03 01:41:04', 'Regular'),
(31, 7, 2, 'Kameez', 'new', 'Architecto voluptate', '[\"s\"]', '[\"green\"]', 'products/MQ776a3Bu1onxR7VJs9yH8zHKtl2ogumvvzywthF.jpg', '581.00', '772.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:42:42', '2024-09-03 01:42:42', 'Regular'),
(32, 7, 2, 'Kameez', 'new', 'Sed totam cillum ull', '[\"s\"]', '[\"green\"]', 'products/BE8MmDciS3IkjDPWJ4QV9HwyBOWPbqbLbeHbPjCL.jpg', '468.00', '690.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:43:40', '2024-09-03 01:43:40', 'Regular'),
(33, 7, 2, 'Kameez', 'new', 'Architecto voluptate', '[\"s\"]', '[\"green\"]', 'products/zddLakK3y793pQB9IsFu5dWnYnJ72Hq9fFcELpnF.jpg', '621.00', '772.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:44:43', '2024-09-03 01:44:50', 'Recent'),
(34, 7, 2, 'Kameez', 'offer', 'Architecto voluptate', '[\"s\"]', '[\"green\"]', 'products/9soNMJ1lZokaMiHFTJfnW3896P0GV8HVw7ym9w2s.jpg', '581.00', '772.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:46:48', '2024-09-03 01:46:55', 'Offer'),
(35, 8, 2, 'tops', 'new', 'Officia ad asperiore', '[\"s\"]', '[\"green\"]', 'products/1iCjYGvR3eQ9SgeRJxlMvgHTLllPjqAiZdrVj6X5.jpg', '139.00', '689.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:49:15', '2024-09-03 01:49:15', 'Regular'),
(36, 8, 2, 'tops', 'new', 'Sed totam cillum ull', '[\"s\"]', '[\"green\"]', 'products/JnakqMhDd6keCoQtbb971kZAIkrgot0Jm2sIq9xL.jpg', '468.00', '690.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:50:15', '2024-09-03 01:50:15', 'Regular'),
(37, 8, 2, 'tops', 'new', 'Architecto voluptate', '[\"s\"]', '[\"green\"]', 'products/RGQdLwRux4OpjvWzrdMfVCPOK10Mb2bcIj1vbPvU.jpg', '581.00', '689.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:50:59', '2024-09-03 01:50:59', 'Regular'),
(38, 8, 2, 'tops', 'new', 'Esse officiis verita11', '[\"s\"]', '[\"green\"]', 'products/R6qF27R1rrZZb7EeI1vDznYK7qmXPPeTPqw2Yx8Q.jpg', '581.00', '772.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:51:44', '2024-09-03 01:51:44', 'Regular'),
(39, 8, 2, 'tops', 'new', 'Esse officiis verita11', '[\"s\"]', '[\"green\"]', 'products/QLBsJrqVHnP8ZNNWv1M7VKtRHhEIyypAYAfRfo23.jpg', '581.00', '689.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:52:47', '2024-09-03 01:52:53', 'Recent'),
(40, 9, 2, 'pent', 'new', 'Sed totam cillum ull', '[\"s\"]', '[\"green\"]', 'products/jH8yuFa9TlQpvz99RcBrzFMyv3LshuxFoPaLt9bk.jpg', '581.00', '689.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:54:06', '2024-09-03 01:54:06', 'Regular'),
(41, 9, 2, 'pent', 'new', 'Officia ad asperiore', '[\"s\"]', '[\"green\"]', 'products/A6w2U4dvglYGOP06NR4cBdO0sNNFcDft6qRFTyv2.jpg', '468.00', '690.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:55:02', '2024-09-03 01:55:02', 'Regular'),
(42, 9, 2, 'pent', 'new', 'Voluptate libero et', '[\"s\"]', '[\"green\"]', 'products/2NEhbkcAfDSYRPCHiQSP6GKfeacnQL63Qy0em9Cy.jpg', '621.00', '772.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:55:38', '2024-09-03 01:55:38', 'Regular'),
(43, 9, 2, 'pent', 'new', 'Architecto voluptate', '[\"s\"]', '[\"green\"]', 'products/QxedI8zlylB3sCVszI7fF6HCYkToPF2EJceDVcAX.jpg', '601.00', '689.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:56:13', '2024-09-03 01:56:13', 'Regular'),
(44, 9, 2, 'pent', 'new', 'Officia ad asperiore', '[\"s\"]', '[\"green\"]', 'products/Ant0Bfsjd5PPypaVwKarP3HvBFWlDddf2fhdLVvn.jpg', '621.00', '772.00', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', 'Slim fit  made of Cotton fabric. Notched lapel collar. Long sleeves with buttoned cuffs. Welt pocket at chest and flap pockets at hip. Interior pocket. Back vents. Front button closure.', '2024-09-03 01:57:13', '2024-09-03 01:57:21', 'Recent'),
(45, 5, 1, 'tshirt', 'new', 'Voluptate libero et', '[\"s\"]', '[\"green\"]', 'products/sdxTb4YUgORzZMMvfME2vl9f3RIYJy5c1RHDvI6D.jpg', '647.00', '772.00', '<a href=\"{{ route(\'shop\') }}\" class=\"nav-item nav-link\">Baby\'s Dresses</a>', '<a href=\"{{ route(\'shop\') }}\" class=\"nav-item nav-link\">Baby\'s Dresses</a>', '<a href=\"{{ route(\'shop\') }}\" class=\"nav-item nav-link\">Baby\'s Dresses</a>', '2024-09-03 02:02:41', '2024-09-03 02:02:50', 'Featured'),
(46, 9, 2, 'pent', 'offer', 'Voluptate libero et', '[\"s\"]', '[\"green\"]', 'products/JX8vo9f8MSb9K3ohJDHtq1DUJjZ1l8syc3rlLhjl.jpg', '581.00', '689.00', '<a href=\"{{ route(\'shop\') }}\" class=\"nav-item nav-link\">Baby\'s Dresses</a>', '<a href=\"{{ route(\'shop\') }}\" class=\"nav-item nav-link\">Baby\'s Dresses</a>', '<a href=\"{{ route(\'shop\') }}\" class=\"nav-item nav-link\">Baby\'s Dresses</a>', '2024-09-03 02:04:57', '2024-09-03 02:05:01', 'Offer'),
(47, 10, 3, 'food', 'new', 'Architecto voluptate', '[\"1k\"]', '[\"green\"]', 'products/SXwpoL7iEfXPIlexDY5o57jFNoZeF4ROHveLu0oB.jpg', '581.00', '689.00', '<a href=\"{{ route(\'shop\') }}\" class=\"nav-item nav-link\">Baby\'s Dresses</a>', '<a href=\"{{ route(\'shop\') }}\" class=\"nav-item nav-link\">Baby\'s Dresses</a>', '<a href=\"{{ route(\'shop\') }}\" class=\"nav-item nav-link\">Baby\'s Dresses</a>', '2024-09-03 02:07:03', '2024-09-03 02:07:03', 'Regular'),
(48, 10, 3, 'food', 'new', 'Voluptate libero et', '[\"1kg\"]', '[\"green\"]', 'products/i0zPx2aASYQnWejZuvPJLxj3QIgu3MwCM828GnAq.jpg', '581.00', '689.00', '<a href=\"{{ route(\'shop\') }}\" class=\"nav-item nav-link\">Baby\'s Dresses</a>', '<a href=\"{{ route(\'shop\') }}\" class=\"nav-item nav-link\">Baby\'s Dresses</a>', '<a href=\"{{ route(\'shop\') }}\" class=\"nav-item nav-link\">Baby\'s Dresses</a>', '2024-09-03 02:08:04', '2024-09-03 02:08:04', 'Regular'),
(49, 11, 3, 'Dress', 'new', 'Architecto voluptate', '[\"s\"]', '[\"green\"]', 'products/eLbc4sFUMb26iVHFmN357kZTS9Nq5jlffWz84P5J.jpg', '139.00', '294.00', '<a href=\"{{ route(\'shop\') }}\" class=\"nav-item nav-link\">Baby\'s Dresses</a>', '<a href=\"{{ route(\'shop\') }}\" class=\"nav-item nav-link\">Baby\'s Dresses</a>', '<a href=\"{{ route(\'shop\') }}\" class=\"nav-item nav-link\">Baby\'s Dresses</a>', '2024-09-03 02:09:27', '2024-09-03 02:09:27', 'Regular'),
(50, 11, 3, 'Dress', 'nre', 'Voluptate libero et', '[\"s\"]', '[\"green\"]', 'products/7WrvrSTCNfV8ATGEBPTow2LAEHJcPbk6LSxv147X.jpg', '468.00', '689.00', '<a href=\"{{ route(\'shop\') }}\" class=\"nav-item nav-link\">Baby\'s Dresses</a>', '<a href=\"{{ route(\'shop\') }}\" class=\"nav-item nav-link\">Baby\'s Dresses</a>', '<a href=\"{{ route(\'shop\') }}\" class=\"nav-item nav-link\">Baby\'s Dresses</a>', '2024-09-03 02:10:07', '2024-09-03 02:11:35', 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `recents`
--

DROP TABLE IF EXISTS `recents`;
CREATE TABLE IF NOT EXISTS `recents` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `information` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

DROP TABLE IF EXISTS `subcategories`;
CREATE TABLE IF NOT EXISTS `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subcategories_category_id_foreign` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(2, 1, 'Shirt', 'subcategories/jHqryv80LJVY2phQmrRI1IFjhqOGQTuVG3yMfonp.jpg', NULL, '2024-09-03 00:24:17', '2024-09-03 00:24:17'),
(3, 1, 'Pent', 'subcategories/lvcsHkQ14FqtzrMch6xw01TleTeaifRc1UaY3bz7.jpg', NULL, '2024-09-03 00:24:55', '2024-09-03 00:24:55'),
(4, 1, 'Blazer', 'subcategories/3SJpOQK1yGJdxB00bmDJgK0yF6DZPttM4VZjA5lL.jpg', NULL, '2024-09-03 00:25:21', '2024-09-03 00:29:32'),
(5, 1, 'T-Shirt', 'subcategories/eQHKoSXJAdYYzIUBB4O1ztQ1YDLbCjSMoFIaNT1d.jpg', NULL, '2024-09-03 00:25:46', '2024-09-03 00:25:46'),
(6, 2, 'Dress', 'subcategories/kOL9V1BKEkGG0ABWhshfVbHT6aSIfNjIaPGnWZNJ.jpg', NULL, '2024-09-03 00:32:22', '2024-09-03 00:32:22'),
(7, 2, 'Kameez', 'subcategories/K74ld9qfe5CaO6me3xPSGBvLEg2QVK9uFqSmXH3f.jpg', NULL, '2024-09-03 00:33:00', '2024-09-03 00:33:00'),
(8, 2, 'Tops', 'subcategories/50WLJ6xb58mY29N7YTjlTUVo4k7wk41IENNGAn88.jpg', NULL, '2024-09-03 00:33:37', '2024-09-03 00:33:37'),
(9, 2, 'Pent', 'subcategories/tvB6pLymbthsw98zCR4N8HfZqKWuHOY0ZswgJchr.jpg', NULL, '2024-09-03 00:34:37', '2024-09-03 00:34:37'),
(10, 3, 'Food', 'subcategories/wni8GUjxj0PbmASaws55AfJp1DLmjuYAc6ysxq5l.png', NULL, '2024-09-03 00:36:56', '2024-09-03 00:36:56'),
(11, 3, 'Dress', 'subcategories/NVuHV4alj96Nt3ZPhR1tzPTxgrMW6eO4NeNqawQd.jpg', NULL, '2024-09-03 00:37:39', '2024-09-03 00:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `summers`
--

DROP TABLE IF EXISTS `summers`;
CREATE TABLE IF NOT EXISTS `summers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `summers`
--

INSERT INTO `summers` (`id`, `title`, `subtitle`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Summer Special Offer', '50% sel', 'images/XDbJaRfNmpOKdShc9pPPCavej05y6E4mH1ug6ZHj.gif', '2024-09-01 03:57:43', '2024-09-01 03:57:43');

-- --------------------------------------------------------

--
-- Table structure for table `usercontacts`
--

DROP TABLE IF EXISTS `usercontacts`;
CREATE TABLE IF NOT EXISTS `usercontacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usercontacts`
--

INSERT INTO `usercontacts` (`id`, `name`, `email`, `phone`, `subject`, `note`, `created_at`, `updated_at`) VALUES
(8, 'Bruce Sharp', 'merojujux@mailinator.com', '+1 (578) 632-4253', 'Nesciunt recusandae', 'Eius non in quam ips', '2024-09-03 04:29:42', '2024-09-03 04:29:42'),
(9, 'sazal', 'sutiha@mailinator.com', '+1 (356) 266-9966', 'Quia temporibus aut', 'Velit numquam moles', '2024-09-03 04:30:09', '2024-09-03 04:30:09'),
(11, 'Meredith Brewer', 'fodagos@mailinator.com', '+1 (641) 713-7586', 'Qui nulla libero ali', 'Aperiam voluptas quo', '2024-09-03 04:30:57', '2024-09-03 04:30:57'),
(12, 'Zeus Munoz', 'pyheh@mailinator.com', '+1 (287) 944-4749', 'Nihil necessitatibus', 'Recusandae Laborum', '2024-09-03 04:43:02', '2024-09-03 04:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `role` enum('admin','vendor','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `vendor_short_info` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `photo`, `phone`, `address`, `role`, `status`, `vendor_short_info`, `remember_token`, `created_at`, `updated_at`) VALUES
('5c7eb89b-6dd8-42b3-8c44-7ec884293511', 'Admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$tnmrvHTtHWlyioglxJ/.0ewM6fVt/yVf9uQpYDcfvzz7B1rohY4iW', NULL, NULL, NULL, 'admin', 'active', NULL, NULL, '2024-08-31 04:44:50', '2024-08-31 04:44:50'),
('2f223ea1-76c4-493a-9ff2-69ac5192022a', 'Vendor', 'vendor', 'vendor@gmail.com', NULL, '$2y$10$LMEZRhCCAdot3etuBYr57.cewvEbIFryD1GrUfLRh5fpzCQpvQvyG', NULL, NULL, NULL, 'vendor', 'active', NULL, NULL, '2024-08-31 04:44:50', '2024-08-31 04:44:50'),
('13e1201c-d800-4669-bf4a-de44303dfdb4', 'User', 'user', 'user@gmail.com', NULL, '$2y$10$g8QLu5d7A9RGbmItLbd2d.0e1Ytq6IEJSjwOMXPk9EgQWgaTJ/5v6', NULL, NULL, NULL, 'user', 'active', NULL, NULL, '2024-08-31 04:44:50', '2024-08-31 04:44:50'),
('19932726-0f7b-4a77-ba3d-bf3af67e1ed6', 'Arif Ur Rahman', 'Arif', 'arifurrahman.it.doc@gmail.com', NULL, '$2y$10$YgEn9AvygDr/EexZkHlqf.ZudI7KEstDrZsyT8PdaSCrPsuk0rf4G', NULL, NULL, NULL, 'user', 'active', NULL, NULL, '2024-09-01 04:59:02', '2024-09-01 04:59:02'),
('12d072a0-1066-4736-89c2-a7521b77172a', 'Sazal', 'Sazalabdullah', 'sazaldreamdiver@gmail.com', NULL, '$2y$10$w2egbOPol1mSiYnhfXyo9upBXULUOpWYz82Do9zFSQ0TPheBgbsOO', NULL, NULL, NULL, 'user', 'active', NULL, NULL, '2024-09-03 02:37:37', '2024-09-03 02:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `winters`
--

DROP TABLE IF EXISTS `winters`;
CREATE TABLE IF NOT EXISTS `winters` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `winters`
--

INSERT INTO `winters` (`id`, `title`, `subtitle`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Winter Special Offer', '50% sel', 'images/3smJ69TwMv3SNbcCH7HJujTD5Hu8Whb5WBZNhFhl.gif', '2024-09-01 03:59:32', '2024-09-01 03:59:32');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
