-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table food.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table food.admins: ~1 rows (approximately)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
	(1, 'ngviet', 'ngvviet0306@gmail.com', '$2y$10$gj4C3ji3szpjWgGPDeyj/exh0ctB6.6xRuQfK12jAQqGiMB98fQcW', '2021-12-11 15:08:37', '2021-12-11 15:08:37');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping structure for table food.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table food.categories: ~7 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Starters', 'starters', NULL, '2021-12-14 03:44:24', '2021-12-15 08:20:30'),
	(2, 'BBQ Platters', 'bbq-platters', NULL, '2021-12-14 03:44:24', '2021-12-15 08:23:11'),
	(3, 'Salads', 'salads', NULL, '2021-12-14 03:44:24', '2021-12-15 08:23:44'),
	(4, 'Ribs & Steak', 'ribs-steak', NULL, '2021-12-14 03:44:24', '2021-12-15 08:23:59'),
	(5, 'Chef\'s Selection', 'chefs-selection', NULL, '2021-12-14 03:44:24', NULL),
	(6, 'Burger', 'burger', NULL, '2021-12-14 03:44:24', NULL),
	(14, 'Pasta', 'pasta', NULL, '2021-12-18 14:56:54', '2021-12-18 14:56:54');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table food.districts
CREATE TABLE IF NOT EXISTS `districts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table food.districts: ~19 rows (approximately)
/*!40000 ALTER TABLE `districts` DISABLE KEYS */;
INSERT INTO `districts` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Phường Vũ Ninh', '2021-12-26 09:45:23', NULL),
	(2, 'Phường Đáp Cầu', '2021-12-26 09:45:23', NULL),
	(3, 'Phường Thị Cầu', '2021-12-26 09:45:23', NULL),
	(4, 'Phường Kinh Bắc', '2021-12-26 09:45:23', NULL),
	(5, 'Phường Vệ An', '2021-12-26 09:45:23', NULL),
	(6, 'Phường Tiền An', '2021-12-26 09:45:23', NULL),
	(7, 'Phường Đại Phúc', '2021-12-26 09:45:23', NULL),
	(8, 'Phường Ninh Xá', '2021-12-26 09:45:23', NULL),
	(9, 'Phường Suối Hoa', '2021-12-26 09:45:23', NULL),
	(10, 'Phường Võ Cường', '2021-12-26 09:45:23', NULL),
	(11, 'Phường Hòa Long', '2021-12-26 09:45:23', NULL),
	(12, 'Phường Vạn An', '2021-12-26 09:45:23', NULL),
	(13, 'Phường Khúc Xuyên', '2021-12-26 09:45:23', NULL),
	(14, 'Phường Phong Khê', '2021-12-26 09:45:23', NULL),
	(15, 'Phường Kim Chân', '2021-12-26 09:45:23', NULL),
	(16, 'Phường Vân Dương', '2021-12-26 09:45:23', NULL),
	(17, 'Phường Nam Sơn', '2021-12-26 09:45:23', NULL),
	(18, 'Phường Khắc Niệm', '2021-12-26 09:45:23', NULL),
	(19, 'Phường Hạp Lĩnh', '2021-12-26 09:45:23', NULL);
/*!40000 ALTER TABLE `districts` ENABLE KEYS */;

-- Dumping structure for table food.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table food.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table food.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table food.migrations: ~16 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2021_12_11_150337_create_admins_table', 2),
	(7, '2021_12_14_024209_create_categories_table', 3),
	(9, '2021_12_17_025338_create_slides_table', 4),
	(10, '2021_12_17_142646_create_toppings_table', 5),
	(12, '2021_12_18_044103_create_products_table', 6),
	(13, '2021_12_18_095447_create_product_toppings_tables', 7),
	(14, '2021_12_26_091645_create_districts_table', 8),
	(16, '2021_12_26_091921_create_wards_table', 9),
	(17, '2021_12_27_033745_create_orders_table', 10),
	(18, '2021_12_27_033846_create_order_details_table', 11),
	(19, '2021_12_27_041920_create_orders_detail_table', 12),
	(20, '2021_12_27_042857_create_order_details_table', 13);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table food.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table food.orders: ~6 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `user_id`, `name`, `phone`, `province`, `district`, `ward`, `note`, `created_at`, `updated_at`) VALUES
	(3, 3, 'dsadsa', '123456', 'Thành phố Bắc Ninh', 'Phường Vũ Ninh', 'Cổ Mễ', 'dsa', '2021-12-27 04:33:13', '2021-12-27 04:33:13'),
	(4, 2, 'hieu', 'dáddsadsadsadsa', 'Thành phố Bắc Ninh', 'Phường Ninh Xá', 'Đường Đỗ Trọng Vỹ1-83', NULL, '2021-12-27 04:37:00', '2021-12-27 04:37:00'),
	(5, 2, 'test', '123456', 'Thành phố Bắc Ninh', 'Phường Phong Khê', 'Đào Xá', NULL, '2021-12-27 04:38:54', '2021-12-27 04:38:54'),
	(6, 2, 'Blaine Mason', '+1 (474) 425-7842', 'Thành phố Bắc Ninh', 'Phường Đại Phúc', 'Đường Trần Hưng Đạo', 'Accusamus tempore e', '2021-12-27 08:20:37', '2021-12-27 08:20:37'),
	(7, 4, 'quang', '123456', 'Thành phố Bắc Ninh', 'Phường Đáp Cầu', 'Hoàng Quốc Việt1-585, 2-742', 'Blanditiis ipsam id', '2021-12-27 08:24:47', '2021-12-27 08:24:47'),
	(8, 5, 'Ivory Sims', '+1 (796) 475-8588', 'Thành phố Bắc Ninh', 'Phường Tiền An', 'Đường Vũ Kiệt1-21, 2-56', 'Aut exercitation exp', '2021-12-27 08:34:46', '2021-12-27 08:34:46');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table food.order_details
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `name_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_topping` int(11) NOT NULL,
  `list_topping` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table food.order_details: ~12 rows (approximately)
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
INSERT INTO `order_details` (`id`, `order_id`, `name_product`, `image`, `price`, `qty`, `total_topping`, `list_topping`, `note`, `status`, `created_at`, `updated_at`) VALUES
	(4, 3, 'Soup Of The Day', '/storage/1639836194Alfrescos-Hanoi-Soup-Of-The-Day.jpg', 80000, 2, 0, NULL, NULL, 0, '2021-12-27 04:33:13', '2021-12-27 04:33:13'),
	(5, 3, 'AMERICAN FRIES', '/storage/1639838503Alfrescos-Hanoi-American-Fries.jpg', 90000, 1, 0, NULL, NULL, 0, '2021-12-27 04:33:13', '2021-12-27 04:33:13'),
	(6, 3, 'QUESADILLAS (6PCS)', '/storage/1639838908QUESADILLAS-5.jpg', 150000, 2, 30000, 'Phômát-30000', 'ok', 0, '2021-12-27 04:33:13', '2021-12-27 04:33:13'),
	(7, 4, 'AMERICAN FRIES', '/storage/1639838503Alfrescos-Hanoi-American-Fries.jpg', 90000, 1, 0, NULL, NULL, 1, '2021-12-27 04:37:00', '2021-12-27 04:37:00'),
	(8, 4, 'BEEF SALAD', '/storage/1639839163BEEF-SALAD.jpg', 155000, 2, 67000, 'Tôm-25000, Gà-42000', NULL, 1, '2021-12-27 04:37:00', '2021-12-27 04:37:00'),
	(9, 4, 'CAESAR SALAD', '/storage/1639839061Alfrescos-Hanoi-Caesar-Salad.jpg', 145000, 1, 65000, 'Thịt bò xay-65000', 'cho mình 1 chút tương xì dầu', 1, '2021-12-27 04:37:00', '2021-12-27 04:37:00'),
	(10, 5, 'AL\'S CHICKEN WING', '/storage/1639838792Alfrescos-Hanoi-Chicken-Wings.jpg', 130000, 2, 0, NULL, NULL, 1, '2021-12-27 04:38:54', '2021-12-27 04:38:54'),
	(11, 5, 'POTATO WEDGES', '/storage/1639838735Alfrescos-Hanoi-Potato-Wedges.jpg', 90000, 1, 0, NULL, NULL, 0, '2021-12-27 04:38:54', '2021-12-27 04:38:54'),
	(12, 6, 'AMERICAN FRIES', '/storage/1639838503Alfrescos-Hanoi-American-Fries.jpg', 90000, 2, 0, NULL, NULL, 0, '2021-12-27 08:20:38', '2021-12-27 08:20:38'),
	(13, 6, 'BBQ SAUSAGES', '/storage/1639838834Alfrescos-Hanoi-BBQ-Sausages.jpg', 135000, 2, 0, NULL, NULL, 0, '2021-12-27 08:20:38', '2021-12-27 08:20:38'),
	(14, 7, 'AUSSIE BURGER', '/storage/1639840493Alfrescos-Hanoi-Aussie-Burger.jpg', 220000, 2, 15000, 'Jăm Bông-15000', 'nhieu thit', 0, '2021-12-27 08:24:47', '2021-12-27 08:24:47'),
	(15, 8, 'MEXICAN FAJITAS (STEAK)', '/storage/1639840003Alfrescos-Hanoi-Mexican-Beef-Fajitas.jpg', 250000, 2, 30000, 'Phômát-30000', NULL, 0, '2021-12-27 08:34:46', '2021-12-27 08:34:46');
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;

-- Dumping structure for table food.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table food.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table food.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table food.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table food.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `short_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table food.products: ~34 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `slug`, `image`, `price`, `short_desc`, `category_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(8, 'Soup Of The Day', 'soup-of-the-day', '/storage/1639836194Alfrescos-Hanoi-Soup-Of-The-Day.jpg', 80000, 'Xin hỏi nhân viên phục vụ về món súp đặc biệt trong ngày.', 1, NULL, '2021-12-18 14:03:14', '2021-12-18 14:03:14'),
	(9, 'AMERICAN FRIES', 'american-fries', '/storage/1639838503Alfrescos-Hanoi-American-Fries.jpg', 90000, 'Khoai tây Mỹ chiên giòn dùng kèm với xốt tương cà & mayonnaise.', 1, NULL, '2021-12-18 14:41:43', '2021-12-18 14:41:43'),
	(10, 'POTATO WEDGES', 'potato-wedges', '/storage/1639838735Alfrescos-Hanoi-Potato-Wedges.jpg', 90000, 'Khoai tây múi chiên giòn dùng kèm xốt kem chua & thịt ba chỉ xông khói.', 1, NULL, '2021-12-18 14:45:35', '2021-12-18 14:45:35'),
	(11, 'AL\'S CHICKEN WING', 'als-chicken-wing', '/storage/1639838792Alfrescos-Hanoi-Chicken-Wings.jpg', 130000, 'Lựa chọn cách chế biến: cánh gà nướng dùng kèm xốt BBQ, cánh gà chiên dùng kèm xốt...', 1, NULL, '2021-12-18 14:46:32', '2021-12-18 14:46:32'),
	(12, 'BBQ SAUSAGES', 'bbq-sausages', '/storage/1639838834Alfrescos-Hanoi-BBQ-Sausages.jpg', 135000, 'Xúc xích Đức nướng', 1, NULL, '2021-12-18 14:47:14', '2021-12-18 14:47:14'),
	(13, 'QUESADILLAS (6PCS)', 'quesadillas-6pcs', '/storage/1639838908QUESADILLAS-5.jpg', 150000, '6 miếng bánh kẹp áp chảo Mêhicô, dùng kèm các loại xốt. Tự chọn nhân: Thịt gà cay...', 1, NULL, '2021-12-18 14:48:28', '2021-12-18 14:48:28'),
	(14, 'STARTER PLATTER', 'starter-platter', '/storage/1639838978Alfrescos-Hanoi-Starter-Platter.jpg', 420000, 'Đĩa tổng hợp gồm: Sườn nướng, khoai tây múi chiên giòn, mực tẩm bột chiên, cánh gà nướng,...', 2, NULL, '2021-12-18 14:49:38', '2021-12-18 14:49:38'),
	(15, 'MEAT LOVER\'S PLATTER', 'meat-lovers-platter', '/storage/1639839010Alfrescos-Hanoi-Meat-Lover-Combo.jpg', 440000, 'Đĩa lớn gồm: cánh gà chiên, xúc xích nướng, bò nhập khẩu xiên nướng, sườn nướng, bánh mỳ...', 2, NULL, '2021-12-18 14:50:10', '2021-12-18 14:50:10'),
	(16, 'CAESAR SALAD', 'caesar-salad', '/storage/1639839061Alfrescos-Hanoi-Caesar-Salad.jpg', 145000, 'Salát Ceasar với xà lách thái nhỏ, bánh mỳ nướng, thịt ba chỉ xông khói, trứng chần, trộn...', 3, NULL, '2021-12-18 14:51:01', '2021-12-18 14:51:01'),
	(17, 'GREEN GARDEN SALAD', 'green-garden-salad', '/storage/1639839099Alfrescos-Hanoi-Green-Garden-Salad.jpg', 110000, 'Salát với xà lách, cà chua, dưa chuột, hành tây, trộn xốt dầu dấm đặc biệt của Al...', 3, NULL, '2021-12-18 14:51:39', '2021-12-18 14:51:39'),
	(18, 'BEEF SALAD', 'beef-salad', '/storage/1639839163BEEF-SALAD.jpg', 155000, 'Salát với thịt bò nhập khẩu tẩm xốt ớt cay nướng, khoai tây bi, ớt Đà Lạt ...', 3, NULL, '2021-12-18 14:52:43', '2021-12-18 14:52:43'),
	(19, 'DALAT SALAD', 'dalat-salad', '/storage/1639839301Alfrescos-Hanoi-Dalat-Salad.jpg', 110000, 'Salát dưa chuột, cà chua, ngô hạt, trộn xốt dầu dấm đặc biệt của Al Fresco\'s.', 3, NULL, '2021-12-18 14:55:01', '2021-12-18 14:55:01'),
	(20, 'MANGO, AVOCADO & PRAWN SALAD', 'mango-avocado-prawn-salad', '/storage/1639839379MANGO,-AVOCADO-&-PRAWN-SALAD.jpg', 150000, 'Salát tôm với xoài và quả bơ tươi, dùng kèm xốt mù tạt mật ong.', 3, NULL, '2021-12-18 14:56:19', '2021-12-18 14:56:19'),
	(21, 'SPAGHETTI BOLOGNAISE', 'spaghetti-bolognaise', '/storage/1639839451Alfrescos-Hanoi-Spaghetti-Bolognaise.jpg', 190000, 'Mỳ Ý sợi dài với xốt thịt bò hầm & cà chua.', 14, NULL, '2021-12-18 14:57:31', '2021-12-18 14:57:31'),
	(22, 'SPAGHETTI CARBONARA', 'spaghetti-carbonara', '/storage/1639839622undefined-182.jpg', 190000, 'Mỳ Ý sợi dài với jămbông & phomát xốt kem.', 14, NULL, '2021-12-18 15:00:22', '2021-12-18 15:00:22'),
	(23, 'SPAGHETTI SEAFOOD', 'spaghetti-seafood', '/storage/1639839653Alf-hn-spaghetti-spicy.jpg', 190000, 'Mỳ Ý sợi dài với hải sản. Lựa chọn: xốt cà chua cay hoặc xốt kem tỏi.', 14, NULL, '2021-12-18 15:00:53', '2021-12-18 15:00:53'),
	(24, 'FETTUCCINE SALMON', 'fettuccine-salmon', '/storage/1639839691Alfrescos-Hanoi-Fettuccine-Salmon.jpg', 200000, 'Mỳ Ý sợi dẹt với cá hồi, măng tây và xốt kem cà chua.', 14, NULL, '2021-12-18 15:01:31', '2021-12-18 15:01:31'),
	(25, 'STEAK & MUSHROOM SPAGHETTI', 'steak-mushroom-spaghetti', '/storage/1639839719Alfrescos-Hanoi-Steak-&-Mushroom-Spaghetti.jpg', 200000, 'Mỳ Ý sợi dài với thịt bò Úc, nấm & xốt kem đậu đen.', 14, NULL, '2021-12-18 15:01:59', '2021-12-18 15:01:59'),
	(26, 'BEEF LASAGNA', 'beef-lasagna', '/storage/1639839768Alfrescos-Hanoi-Beef-Lasagna-1.jpg', 200000, 'Món thịt bò nghiền dùng kèm bánh mỳ bơ tỏi.', 14, NULL, '2021-12-18 15:02:48', '2021-12-18 15:02:48'),
	(27, 'CHICKEN PARMIGIANA', 'chicken-parmigiana', '/storage/1639839933Alfrescos-Hanoi-Chicken-Parmigiana.jpg', 250000, '2 miếng lườn gà tẩm bột chiên phủ xốt Napoletana & phomát nướng chảy. Ăn kèm khoai tây...', 5, NULL, '2021-12-18 15:05:33', '2021-12-18 15:05:33'),
	(28, 'CRISPY SKIN SALMON', 'crispy-skin-salmon', '/storage/1639839971Alfrescos-Hanoi-Crispy-Skin-Salmon-150g.jpg', 280000, 'Cá hồi nguyên da nướng giòn, dùng kèm khoai tây nghiền, rau củ & xốt bơ chanh.', 5, NULL, '2021-12-18 15:06:11', '2021-12-18 15:06:11'),
	(29, 'MEXICAN FAJITAS (STEAK)', 'mexican-fajitas-steak', '/storage/1639840003Alfrescos-Hanoi-Mexican-Beef-Fajitas.jpg', 250000, 'Món cuốn Mêhicô với thịt bò nhập khẩu nướng, ớt Đà Lạt, hành tây. Dùng kèm 4 lá...', 5, NULL, '2021-12-18 15:06:43', '2021-12-18 15:06:43'),
	(30, 'MEXICAN FAJITAS (CHICKEN)', 'mexican-fajitas-chicken', '/storage/1639840045Alfrescos-Hanoi-Mexican-Chicken-Fajitas.jpg', 250000, 'Món cuốn Mêhicô với thịt gà tẩm ướp, ớt Đà Lạt, hành tây trên đĩa nóng. Dùng kèm...', 5, NULL, '2021-12-18 15:07:25', '2021-12-18 15:07:25'),
	(31, 'BARAMUNDI FILLET', 'baramundi-fillet', '/storage/1639840068Alfrescos-Hanoi-Baramundi-Fillet.jpg', 290000, 'Lựa chọn cách chế biến món filê cá vược: nướng hoặc tẩm bột chiên dùng kèm khoai tây...', 5, NULL, '2021-12-18 15:07:48', '2021-12-18 15:07:48'),
	(32, 'PYGMY PLATTER (6PCS)', 'pygmy-platter-6pcs', '/storage/1639840180Alfrescos-Hanoi-Chefs-Sliced-Steak.jpg', 290000, '6 dẻ sườn nhỏ nướng dùng kèm khoai tây bổ cau chiên.', 4, NULL, '2021-12-18 15:09:40', '2021-12-18 15:09:40'),
	(33, 'PYGMY PLATTER (10PCS)', 'pygmy-platter-10pcs', '/storage/1639840204Alfrescos-Hanoi-Family-Sliced-Steak.jpg', 390000, '10 dẻ sườn nhỏ nướng dùng kèm khoai tây bổ cau chiên.', 4, NULL, '2021-12-18 15:10:04', '2021-12-18 15:10:04'),
	(34, 'JUMBO RIBS (OUR SPECIALTY)', 'jumbo-ribs-our-specialty', '/storage/1639840223Alfrescos-Hanoi-Jumbo-Ribs.jpg', 690000, '10-12 dẻ sườn lớn nướng dùng kèm khoai tây bổ cau chiên.', 4, NULL, '2021-12-18 15:10:24', '2021-12-18 15:10:24'),
	(35, 'MINI RIBS (NOT SO "MINI")', 'mini-ribs-not-so-mini', '/storage/1639840256Alfrescos-Hanoi-Mini-Ribs.jpg', 390000, '5-6 dẻ sườn lớn nướng dùng kèm khoai tây bổ cau chiên.', 4, NULL, '2021-12-18 15:10:57', '2021-12-18 15:10:57'),
	(36, 'NZ RIB EYE STEAK (250GR)', 'nz-rib-eye-steak-250gr', '/storage/1639840336Alfrescos-Hanoi-NZ-Rib-Eye-Steak-250gr.jpg', 490000, 'Thăn bò New Zealand nướng mềm dùng kèm khoai tây bổ cau chiên.', 4, NULL, '2021-12-18 15:12:16', '2021-12-18 15:12:16'),
	(37, 'NZ SIZZLING RIB EYE STEAK (250G)', 'nz-sizzling-rib-eye-steak-250g', '/storage/1639840365Alfrescos-Hanoi-NZ-Sizzling-Rib-Eye-Steak-250gr.jpg', 490000, 'Thăn bò New Zealand nướng mềm dùng kèm hành tây & nấm xào', 4, NULL, '2021-12-18 15:12:45', '2021-12-18 15:12:45'),
	(38, 'CHEF\'S SLICED STEAK (200g)', 'chefs-sliced-steak-200g', '/storage/1639840426Alfrescos-Hanoi-Pygmy-Platter-10pcs.jpg', 290000, '200gr Thăn bò Mỹ nhập khẩu nướng. Dùng kèm ngô nướng, khoai tây bổ cau chiên.', 4, NULL, '2021-12-18 15:13:46', '2021-12-18 15:13:46'),
	(39, 'AUSSIE BURGER', 'aussie-burger', '/storage/1639840493Alfrescos-Hanoi-Aussie-Burger.jpg', 220000, 'Bơgơ với thịt bò Úc xay, phủ với phô mai Cheddar, thịt ba chỉ xông khói, trứng, cà...', 6, NULL, '2021-12-18 15:14:53', '2021-12-18 15:14:53'),
	(40, 'CHEESE BURGER (CHICKEN)', 'cheese-burger-chicken', '/storage/1639840519Alfrescos-Hanoi-Chicken-Burger.jpg', 180000, 'Bơ gơ với lườn gà nướng', 6, NULL, '2021-12-18 15:15:19', '2021-12-18 15:15:19'),
	(41, 'Philip Johnston', 'philip-johnston', '/storage/1639924625Landscape-Color.jpg', 848, 'Quia est quasi dolor', 1, '2021-12-19 14:38:19', '2021-12-19 14:37:06', '2021-12-19 14:38:19');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table food.product_toppings
CREATE TABLE IF NOT EXISTS `product_toppings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `topping_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table food.product_toppings: ~44 rows (approximately)
/*!40000 ALTER TABLE `product_toppings` DISABLE KEYS */;
INSERT INTO `product_toppings` (`id`, `product_id`, `topping_id`, `created_at`, `updated_at`) VALUES
	(7, 12, 11, '2021-12-18 14:47:14', '2021-12-18 14:47:14'),
	(8, 12, 12, '2021-12-18 14:47:14', '2021-12-18 14:47:14'),
	(9, 13, 4, '2021-12-18 14:48:28', '2021-12-18 14:48:28'),
	(10, 13, 9, '2021-12-18 14:48:28', '2021-12-18 14:48:28'),
	(11, 13, 11, '2021-12-18 14:48:28', '2021-12-18 14:48:28'),
	(12, 16, 5, '2021-12-18 14:51:01', '2021-12-18 14:51:01'),
	(13, 16, 8, '2021-12-18 14:51:01', '2021-12-18 14:51:01'),
	(14, 16, 13, '2021-12-18 14:51:01', '2021-12-18 14:51:01'),
	(15, 17, 5, '2021-12-18 14:51:39', '2021-12-18 14:51:39'),
	(16, 17, 6, '2021-12-18 14:51:39', '2021-12-18 14:51:39'),
	(17, 17, 10, '2021-12-18 14:51:39', '2021-12-18 14:51:39'),
	(18, 18, 5, '2021-12-18 14:52:43', '2021-12-18 14:52:43'),
	(19, 18, 8, '2021-12-18 14:52:44', '2021-12-18 14:52:44'),
	(20, 18, 9, '2021-12-18 14:52:44', '2021-12-18 14:52:44'),
	(21, 19, 5, '2021-12-18 14:55:02', '2021-12-18 14:55:02'),
	(22, 19, 6, '2021-12-18 14:55:02', '2021-12-18 14:55:02'),
	(23, 19, 7, '2021-12-18 14:55:02', '2021-12-18 14:55:02'),
	(24, 19, 8, '2021-12-18 14:55:02', '2021-12-18 14:55:02'),
	(25, 19, 10, '2021-12-18 14:55:02', '2021-12-18 14:55:02'),
	(26, 20, 5, '2021-12-18 14:56:19', '2021-12-18 14:56:19'),
	(27, 20, 6, '2021-12-18 14:56:19', '2021-12-18 14:56:19'),
	(28, 20, 9, '2021-12-18 14:56:19', '2021-12-18 14:56:19'),
	(29, 20, 11, '2021-12-18 14:56:19', '2021-12-18 14:56:19'),
	(30, 22, 5, '2021-12-18 15:00:22', '2021-12-18 15:00:22'),
	(31, 22, 6, '2021-12-18 15:00:22', '2021-12-18 15:00:22'),
	(32, 22, 8, '2021-12-18 15:00:22', '2021-12-18 15:00:22'),
	(33, 29, 4, '2021-12-18 15:06:43', '2021-12-18 15:06:43'),
	(34, 29, 10, '2021-12-18 15:06:43', '2021-12-18 15:06:43'),
	(35, 30, 4, '2021-12-18 15:07:25', '2021-12-18 15:07:25'),
	(36, 30, 6, '2021-12-18 15:07:25', '2021-12-18 15:07:25'),
	(37, 30, 12, '2021-12-18 15:07:25', '2021-12-18 15:07:25'),
	(38, 36, 5, '2021-12-18 15:12:16', '2021-12-18 15:12:16'),
	(39, 36, 7, '2021-12-18 15:12:16', '2021-12-18 15:12:16'),
	(40, 36, 11, '2021-12-18 15:12:16', '2021-12-18 15:12:16'),
	(41, 39, 9, '2021-12-18 15:14:53', '2021-12-18 15:14:53'),
	(42, 39, 11, '2021-12-18 15:14:53', '2021-12-18 15:14:53'),
	(43, 40, 4, '2021-12-18 15:15:19', '2021-12-18 15:15:19'),
	(44, 40, 10, '2021-12-18 15:15:19', '2021-12-18 15:15:19'),
	(45, 40, 11, '2021-12-18 15:15:19', '2021-12-18 15:15:19'),
	(46, 41, 5, '2021-12-19 14:37:06', '2021-12-19 14:37:06'),
	(47, 41, 6, '2021-12-19 14:37:06', '2021-12-19 14:37:06'),
	(48, 41, 7, '2021-12-19 14:37:06', '2021-12-19 14:37:06'),
	(49, 41, 10, '2021-12-19 14:37:06', '2021-12-19 14:37:06'),
	(50, 41, 13, '2021-12-19 14:37:06', '2021-12-19 14:37:06');
/*!40000 ALTER TABLE `product_toppings` ENABLE KEYS */;

-- Dumping structure for table food.slides
CREATE TABLE IF NOT EXISTS `slides` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table food.slides: ~3 rows (approximately)
/*!40000 ALTER TABLE `slides` DISABLE KEYS */;
INSERT INTO `slides` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
	(5, '/storage/1639729290undefined-247.jpg', 1, '2021-12-17 08:21:30', '2021-12-18 13:58:58'),
	(6, '/storage/1639729295undefined-248.jpg', 1, '2021-12-17 08:21:35', '2021-12-18 13:33:56'),
	(7, '/storage/1639835956PC_ALF-APP-VN.jpg', 1, '2021-12-18 13:59:16', '2021-12-18 13:59:16');
/*!40000 ALTER TABLE `slides` ENABLE KEYS */;

-- Dumping structure for table food.toppings
CREATE TABLE IF NOT EXISTS `toppings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table food.toppings: ~10 rows (approximately)
/*!40000 ALTER TABLE `toppings` DISABLE KEYS */;
INSERT INTO `toppings` (`id`, `name`, `slug`, `price`, `created_at`, `updated_at`) VALUES
	(4, 'Phômát', 'phomat', 30000, NULL, NULL),
	(5, 'Tôm', 'tom', 25000, NULL, NULL),
	(6, 'Cá', 'ca', 30000, NULL, NULL),
	(7, 'Mực', 'muc', 35000, NULL, NULL),
	(8, 'Gà', 'ga', 42000, NULL, NULL),
	(9, 'Jăm Bông', 'jam-bong', 15000, NULL, NULL),
	(10, 'Thịt hun khói', 'thit-hun-khoi', 20000, NULL, NULL),
	(11, 'Khoai tây chiên', 'khoai-tay-chien', 10000, NULL, NULL),
	(12, 'Trứng', 'trung', 7000, NULL, NULL),
	(13, 'Thịt bò xay', 'thit-bo-xay', 65000, NULL, NULL);
/*!40000 ALTER TABLE `toppings` ENABLE KEYS */;

-- Dumping structure for table food.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table food.users: ~5 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Martina Sweet', 'ngvviet0306@gmail.com', NULL, '$2y$10$Y6WHgl3ZQ6LsT7wVJhb1JOl5h0/VVNUDN9RLudWuNNIwDvxtP1/ni', NULL, '2021-12-11 07:54:14', '2021-12-11 07:54:14'),
	(2, 'Viet', 'ngviet0001@gmail.com', NULL, '$2y$10$1V5jLtPc15xF51.29SAFvuKs1xl4GofmSSojYWILinJ0O0bOwT/Vy', NULL, '2021-12-22 01:03:44', '2021-12-22 01:03:44'),
	(3, 'hoang', 'hoang@gmail.com', NULL, '$2y$10$6y3I9ok6Ip5FFqT3bmXx0.tQjtXlBaZfWbkFvayh/xvlocGbDTeGG', NULL, '2021-12-26 07:00:22', '2021-12-26 07:00:22'),
	(4, 'quang123', 'quang@gmail.com', NULL, '$2y$10$LadsNQ.KABc1iyq/Ca0dpO.dxNjuyYRjvtsmRYQ2oo0j4vqCAa8E.', NULL, '2021-12-27 08:23:52', '2021-12-27 08:23:52'),
	(5, 'quan', 'quan@gmail.com', NULL, '$2y$10$iB/u83MJgPvGJQKfIoX/F.ZmmhqCZW3W.czB4Dr7B65DBDy3NGiEq', NULL, '2021-12-27 08:34:31', '2021-12-27 08:34:31');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table food.wards
CREATE TABLE IF NOT EXISTS `wards` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `district_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table food.wards: ~98 rows (approximately)
/*!40000 ALTER TABLE `wards` DISABLE KEYS */;
INSERT INTO `wards` (`id`, `district_id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 14, 'Đống Cao', '2021-12-27 02:27:19', NULL),
	(2, 14, 'Đào Xá', '2021-12-27 02:27:19', NULL),
	(3, 14, 'Châm Khê', '2021-12-27 02:27:19', NULL),
	(4, 14, 'Ngô khê', '2021-12-27 02:27:19', NULL),
	(5, 19, 'Phố Và', '2021-12-27 02:27:19', NULL),
	(6, 19, 'Ất', '2021-12-27 02:27:19', NULL),
	(7, 19, 'Sơn', '2021-12-27 02:27:19', NULL),
	(8, 19, 'Tiên Xá', '2021-12-27 02:27:19', NULL),
	(9, 19, 'Trần', '2021-12-27 02:27:19', NULL),
	(10, 7, 'Đường Trần Hưng Đạo', '2021-12-27 02:27:19', NULL),
	(11, 7, 'Khu 1', '2021-12-27 02:27:19', NULL),
	(12, 7, 'Khu 2', '2021-12-27 02:27:19', NULL),
	(13, 7, 'Khu 3', '2021-12-27 02:27:19', NULL),
	(14, 7, 'Khu 4', '2021-12-27 02:27:19', NULL),
	(15, 7, 'Khu 5', '2021-12-27 02:27:19', NULL),
	(16, 7, 'Khu 6', '2021-12-27 02:27:19', NULL),
	(17, 7, 'Khu 7', '2021-12-27 02:27:19', NULL),
	(18, 7, 'Khu 8', '2021-12-27 02:27:19', NULL),
	(19, 7, 'Khu 9', '2021-12-27 02:27:19', NULL),
	(20, 7, 'Khu 10', '2021-12-27 02:27:19', NULL),
	(21, 7, 'Khu 11', '2021-12-27 02:27:19', NULL),
	(22, 2, 'Hoàng Quốc Việt1-585, 2-742', '2021-12-27 02:27:19', NULL),
	(23, 2, 'Hoàng Quốc Việt Ngõ 148', '2021-12-27 02:27:19', NULL),
	(24, 2, 'Đường Hoàng Quốc Việt Ngõ 52', '2021-12-27 02:27:19', NULL),
	(25, 2, 'Đường Hoàng Quốc Việt Ngõ 60', '2021-12-27 02:27:19', NULL),
	(26, 2, 'Đường Hoàng Quốc Việt Ngõ 78', '2021-12-27 02:27:19', NULL),
	(27, 2, 'Đường Hoàng Quốc ViệtNgõ 80', '2021-12-27 02:27:19', NULL),
	(28, 2, 'Đường Hoàng Quốc Việt Ngõ Chợ', '2021-12-27 02:27:19', NULL),
	(29, 2, 'Đường Lý Thường Kiệt1-161, 2-90', '2021-12-27 02:27:19', NULL),
	(30, 2, 'Khu dân cư Khu 6 Đáp Cầu', '2021-12-27 02:27:19', NULL),
	(31, 2, 'Đường Như Nguyệt', '2021-12-27 02:27:19', NULL),
	(32, 2, 'Khu phố 1 Đáp Cầu', '2021-12-27 02:27:19', NULL),
	(33, 2, 'Khu phố 3 Đáp Cầu', '2021-12-27 02:27:19', NULL),
	(34, 2, 'Khu phố Khu 4 Đáp Cầu ngõ 1', '2021-12-27 02:27:19', NULL),
	(35, 2, 'Khu phố Khu 5 Đáp Cầu ngõ 2', '2021-12-27 02:27:19', NULL),
	(36, 4, 'Niềm Xá', '2021-12-27 02:27:19', NULL),
	(37, 4, 'Thị Chung', '2021-12-27 02:27:19', NULL),
	(38, 4, 'Yên Mẫn', '2021-12-27 02:27:19', NULL),
	(39, 4, 'Yna', '2021-12-27 02:27:19', NULL),
	(40, 8, 'Đường Đỗ Trọng Vỹ1-83', '2021-12-27 02:27:19', NULL),
	(41, 8, 'Đường Lê Thái Tổ', '2021-12-27 02:27:19', NULL),
	(42, 8, 'Đường Ngọc Hân Công Chúa', '2021-12-27 02:27:19', NULL),
	(43, 8, 'Đường Ngô Gia Tự1-185, 2-110', '2021-12-27 02:27:19', NULL),
	(44, 8, 'Đường Ngô Gia Tự539-711, 596-774', '2021-12-27 02:27:19', NULL),
	(45, 8, 'Đường Nguyễn Cao', '2021-12-27 02:27:19', NULL),
	(46, 8, 'Đường Nguyễn Cao Ngõ Khu Chung Cư Mới', '2021-12-27 02:27:19', NULL),
	(47, 8, 'Đường Nguyễn CaoNgõ Khu Vực Chợ Ninh Xá', '2021-12-27 02:27:19', NULL),
	(48, 8, 'Đường Nguyễn Du1-89, 2-36', '2021-12-27 02:27:19', NULL),
	(49, 8, 'Đường Nguyễn Trãi1-253, 2-264', '2021-12-27 02:27:19', NULL),
	(50, 8, 'Đường Nguyễn TrãiKhu chung cư 30/4	', '2021-12-27 02:27:19', NULL),
	(51, 8, 'Đường Nguyễn TrãiNgõ Làng Đọ Xá', '2021-12-27 02:27:19', NULL),
	(52, 8, 'Đường Nguyễn Văn Cừ1-257, 2-210', '2021-12-27 02:27:19', NULL),
	(53, 8, 'Đường Thành Bắc1-97, 2-96', '2021-12-27 02:27:19', NULL),
	(54, 8, 'Đường Trần quốc Toản', '2021-12-27 02:27:19', NULL),
	(55, 8, 'Khu phố Làng Đọ Xá', '2021-12-27 02:27:19', NULL),
	(56, 8, 'Khu tập thể Tập Thể Công Ty Xây Dựng Số 3, Lô nhà 1', '2021-12-27 02:27:19', NULL),
	(57, 8, 'Khu tập thể Trường Sỹ quan chính trị', '2021-12-27 02:27:19', NULL),
	(58, 9, 'Đường Cao Lỗ Vương2-22', '2021-12-27 02:27:19', NULL),
	(59, 9, 'Đường Hai Bà Trưng1-11, 2-120', '2021-12-27 02:27:19', NULL),
	(60, 9, 'Đường Kinh Dương Vương', '2021-12-27 02:27:19', NULL),
	(61, 9, 'Đường Kinh Dương VươngKhu chung cư 5 Tầng', '2021-12-27 02:27:19', NULL),
	(62, 9, 'Đường Lê Quý Đôn1-129, 2-92', '2021-12-27 02:27:19', NULL),
	(63, 9, 'Đường Lê Văn Thịnh1-79, 2-58', '2021-12-27 02:27:19', NULL),
	(64, 9, 'Đường Lê Văn Thịnh1-81, 2-76', '2021-12-27 02:27:19', NULL),
	(65, 3, 'Đường Đấu Mã1-69, 2-50', '2021-12-27 02:27:19', NULL),
	(66, 3, 'Đường Hoàng Quốc ViệtNgõ 11', '2021-12-27 02:27:19', NULL),
	(67, 3, 'Đường Hoàng Quốc ViệtNgõ 111', '2021-12-27 02:27:19', NULL),
	(68, 6, 'Đường Vũ Kiệt1-21, 2-56', '2021-12-27 02:27:19', NULL),
	(69, 6, 'Đường Hai Bà Trưng128-158', '2021-12-27 02:27:19', NULL),
	(70, 6, 'Đường Ngô Gia TựNgõ Bảy Mẫu', '2021-12-27 02:27:19', NULL),
	(71, 12, 'Đương Xá', '2021-12-27 02:27:19', NULL),
	(72, 12, 'Thụ Ninh', '2021-12-27 02:27:19', NULL),
	(73, 12, 'Thượng Đồng', '2021-12-27 02:27:19', NULL),
	(74, 12, 'Vạn Phúc', '2021-12-27 02:27:19', NULL),
	(75, 16, 'Chu Mẫu', '2021-12-27 02:27:19', NULL),
	(76, 16, 'Cầu Ngà', '2021-12-27 02:27:19', NULL),
	(77, 16, 'Lãm Làng', '2021-12-27 02:27:19', NULL),
	(78, 5, 'Đường Thiên ĐứcNgõ 148', '2021-12-27 02:27:19', NULL),
	(79, 5, 'Đường Thiên ĐứcNgõ 184', '2021-12-27 02:27:19', NULL),
	(80, 5, 'Đường Thiên ĐứcNgõ 248', '2021-12-27 02:27:19', NULL),
	(81, 10, 'Xuân Ổ A', '2021-12-27 02:27:19', NULL),
	(82, 10, 'Xuân Ổ B', '2021-12-27 02:27:19', NULL),
	(83, 10, 'Bò Sơn', '2021-12-27 02:27:19', NULL),
	(84, 1, 'Cổ Mễ', '2021-12-27 02:27:19', NULL),
	(85, 1, 'Đồi Ban', '2021-12-27 02:27:19', NULL),
	(86, 1, 'Phúc Sơn', '2021-12-27 02:27:19', NULL),
	(87, 11, 'Viêm Xá', '2021-12-27 02:27:19', NULL),
	(88, 11, 'Xuân Ái', '2021-12-27 02:27:19', NULL),
	(89, 11, 'Xuân Đồng', '2021-12-27 02:27:19', NULL),
	(90, 18, 'Đoài', '2021-12-27 02:27:19', NULL),
	(91, 18, 'Đông', '2021-12-27 02:27:19', NULL),
	(92, 18, 'Sơn', '2021-12-27 02:27:19', NULL),
	(93, 13, 'Khúc Toại', '2021-12-27 02:27:19', NULL),
	(94, 13, 'Trà Xuyên', '2021-12-27 02:27:19', NULL),
	(95, 15, 'Đạo Chân', '2021-12-27 02:27:19', NULL),
	(96, 15, 'Kim Đôi', '2021-12-27 02:27:19', NULL),
	(97, 17, 'Đa Cấu', '2021-12-27 02:27:19', NULL),
	(98, 17, 'Sơn Đông', '2021-12-27 02:27:19', NULL);
/*!40000 ALTER TABLE `wards` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
