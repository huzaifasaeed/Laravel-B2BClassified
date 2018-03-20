-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2016 at 08:10 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boot_classified`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Get_Adds_According_to_Categories` (IN `category_id` INT)  NO SQL
SELECT advertisements.id,
advertisements.add_type,
advertisements.is_approved,
advertisements.is_deleted,
advertisements.Adtitle,
advertisements.describe,
advertisements.Price,
advertisements.Number,
advertisements.address,
cities.city,
advertisements.pic1,
advertisements.pic2,
advertisements.pic3,
advertisements.pic4,
users.name,users.email,
sub_categories.name as 'Sub_category_Name',
categories.name as 'Category_Name'
from advertisements
INNER JOIN cities on advertisements.city_id=cities.id
INNER JOIN users ON advertisements.user_id=users.id
INNER JOIN sub_categories on sub_categories.id=advertisements.sub_categorie_id
INNER JOIN categories on categories.id=sub_categories.categorie_id
WHERE categories.id=category_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Get_Adds_According_to_Search_Pattern` (IN `search_Pattern` VARCHAR(220))  NO SQL
SELECT advertisements.id,
advertisements.add_type,
advertisements.is_approved,
advertisements.is_deleted,
advertisements.Adtitle,
advertisements.describe,
advertisements.Price,
advertisements.Number,
advertisements.address,
cities.city,
advertisements.pic1,
advertisements.pic2,
advertisements.pic3,
advertisements.pic4,
users.name,users.email,
sub_categories.name as 'Sub_category_Name',
categories.name as 'Category_Name'
from advertisements
INNER JOIN cities on advertisements.city_id=cities.id
INNER JOIN users ON advertisements.user_id=users.id
INNER JOIN sub_categories on sub_categories.id=advertisements.sub_categorie_id
INNER JOIN categories on categories.id=sub_categories.categorie_id
WHERE ((advertisements.Adtitle LIKE '%',@search_Pattern,'%')OR(advertisements.describe LIKE '% ',@search_Pattern,'%'))$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Get_Adds_According_to_Sub_Category_id` (IN `sub_category_id` INT)  NO SQL
SELECT advertisements.id,
advertisements.add_type,
advertisements.is_approved,
advertisements.is_deleted,
advertisements.Adtitle,
advertisements.describe,
advertisements.Price,
advertisements.Number,
advertisements.address,
cities.city,
advertisements.pic1,
advertisements.pic2,
advertisements.pic3,
advertisements.pic4,
users.name,users.email,
sub_categories.name as 'Sub_category_Name',
categories.name as 'Category_Name'
from advertisements
INNER JOIN cities on advertisements.city_id=cities.id
INNER JOIN users ON advertisements.user_id=users.id
INNER JOIN sub_categories on sub_categories.id=advertisements.sub_categorie_id
INNER JOIN categories on categories.id=sub_categories.categorie_id
WHERE advertisements.sub_categorie_id=sub_category_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Get_Add_According_to_Id` (IN `add_id` INT)  NO SQL
SELECT advertisements.id,
advertisements.add_type,
advertisements.is_approved,
advertisements.is_deleted,
advertisements.Adtitle,
advertisements.describe,
advertisements.Price,
advertisements.Number,
advertisements.address,
cities.city,
advertisements.pic1,
advertisements.pic2,
advertisements.pic3,
advertisements.pic4,
users.name,users.email,
sub_categories.name as 'sub_category',
categories.name as 'category'
from advertisements
INNER JOIN cities on advertisements.city_id=cities.id
INNER JOIN users ON advertisements.user_id=users.id
INNER JOIN sub_categories on sub_categories.id=advertisements.sub_categorie_id
INNER JOIN categories on categories.id=sub_categories.categorie_id
WHERE advertisements.id=add_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Get_All_Adds` ()  NO SQL
SELECT advertisements.id,
advertisements.add_type,
advertisements.is_approved,
advertisements.is_deleted,
advertisements.Adtitle,
advertisements.describe,
advertisements.Price,
advertisements.Number,
advertisements.address,
cities.city,
advertisements.pic1,
advertisements.pic2,
advertisements.pic3,
advertisements.pic4,
users.name,users.email,
sub_categories.name as 'Sub_category_Name',
categories.name as 'Category_Name'
from advertisements
INNER JOIN cities on advertisements.city_id=cities.id
INNER JOIN users ON advertisements.user_id=users.id
INNER JOIN sub_categories on sub_categories.id=advertisements.sub_categorie_id
INNER JOIN categories on categories.id=sub_categories.categorie_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Get_Categories` ()  NO SQL
SELECT * FROM categories$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Get_Comments_According_to_Add_Id` (IN `add_id` INT)  NO SQL
SELECT comments.comment,users.name
FROM comments
INNER JOIN users ON comments.user_id=users.id
WHERE comments.advertisements_id =add_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Get_Sub_Categories` ()  NO SQL
SELECT * from sub_categories$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Get_Top_Cities` ()  NO SQL
SELECT cities.city,cities.id FROM cities$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Store_Comments` (IN `user_id` INT, IN `advertisement_id` INT, IN `comment_text` VARCHAR(550))  NO SQL
INSERT INTO comments (advertisements_id,user_id,comment) VALUES(advertisement_id,user_id,comment_text)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_categorie_id` int(10) UNSIGNED NOT NULL,
  `add_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Adtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `describe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `Number` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `is_approved` int(11) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `pic1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `sub_categorie_id`, `add_type`, `Adtitle`, `describe`, `Price`, `Number`, `address`, `city_id`, `is_approved`, `is_deleted`, `pic1`, `pic2`, `pic3`, `pic4`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Private', 'House for Sale', 'House (ground flour + 1st flour) fore sale in the prime location of nazimabad at affordable price 2500000', 2500000, '03148083350', 'b412', 1, 1, 0, 'house.jpg', 'house.jpg', 'house.jpg', 'house.jpg', 1, NULL, NULL),
(2, 6, 'Private', 'German Shephard for sale', 'German Shephard for sale at very Affordable price', 20000, '03148083350', 'R-290.block 16 F.B area Karachi', 2, 0, 0, 'Mixed_Pets.jpg', 'Mixed_Pets.jpg', 'Mixed_Pets.jpg', 'Mixed_Pets.jpg', 1, NULL, NULL),
(3, 1, 'Private', '2 floor 120 sqyard house in F.B area', '2 floor 120 sqyard house in the prime location of gulberg near jama masjid', 9000000, '03148083350', 'R-450 Block 17 F.B area Karachi', 1, 1, 0, '629x450.jpg', '121461487_4_1000x700_saadi-town-120-sq-yd-house-available-in-saadi-town-karachi-property_rev005.jpg', '11415457751405330019.jpg', '13104872521406195953.jpg', 1, NULL, NULL),
(4, 4, 'Private', '120 sq yard plot is available for sale', '120 sq yard plot is available for sale in the prime location of Nazimabad', 9000000, '03148083350', 'R-290.block T F.B area Karachi', 1, 1, 0, '11415457751405330019.jpg', '629x450.jpg', '13104872521406195953.jpg', '121461487_4_1000x700_saadi-town-120-sq-yd-house-available-in-saadi-town-karachi-property_rev005.jpg', 1, NULL, NULL),
(5, 8, 'Private', 'Hens for sale', ' 4 hens for sale at affordable price 400 each', 400, '03148083350', 'R-290 block 15 F.B area Karachi', 1, 1, 0, 'Mixed_Pets.jpg', 'Mixed_Pets.jpg', 'Mixed_Pets.jpg', 'Mixed_Pets.jpg', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_shown_on_index` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `category_logo`, `category_pic`, `is_active`, `is_shown_on_index`, `created_at`, `updated_at`) VALUES
(1, 'Automobiles', 'car-4-xxl.png', 'car-2.jpg', 1, 1, NULL, NULL),
(2, 'Real State', 'house-512.png', 'house.jpg', 1, 1, NULL, NULL),
(3, 'Electronics', 'sistema-turnos-equipos-estandar.png', 'tv.jpg', 1, 1, NULL, NULL),
(4, 'Pets', 'Pets Cat.png', 'Mixed_Pets.jpg', 1, 1, NULL, NULL),
(5, 'Kids', '2159_-_Standing_with_child-512.png', 'toy.jpg', 1, 1, NULL, NULL),
(6, 'Bikes', '60633773-motorcycle-motor-motorbike-transportation-icon-isolated-and-flat-illustration-vector-graphic.jpg', 'pics-of-bikes.jpg', 1, 1, NULL, NULL),
(7, 'Mobiles', 'cell_phone_mobile_phone-999px.png', 'Old-Mobile-Phone.jpg', 1, 1, NULL, NULL),
(8, 'Computer & Accessories', 'computer_icon_by_drunkensandwich.png', 'hdd.jpg', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provence_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city`, `provence_id`, `created_at`, `updated_at`) VALUES
(1, 'Karachi', 4, NULL, NULL),
(2, 'Larkana', 4, NULL, NULL),
(3, 'Hyderabad', 4, NULL, NULL),
(4, 'Sukkar', 4, NULL, NULL),
(5, 'Nawabshah', 4, NULL, NULL),
(6, 'Jam shoro', 4, NULL, NULL),
(7, 'Badin', 4, NULL, NULL),
(8, 'Khanewal ', 5, NULL, NULL),
(9, 'Faisal', 4, NULL, NULL),
(10, 'Faisalabad', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `advertisements_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `is_deleted`, `user_id`, `advertisements_id`, `created_at`, `updated_at`) VALUES
(1, 'What is the final price???', 0, 1, 1, NULL, NULL),
(2, 'Huzaifa', 0, 1, 3, NULL, NULL),
(3, '  2 floor 120 sqyard house in the prime location of gulberg near jama masjid', 0, 1, 3, NULL, NULL),
(4, '  2 floor 120 sqyard house in the prime location of gulberg near jama masjid', 0, 1, 3, NULL, NULL),
(5, 'what is the final price', 0, 1, 5, NULL, NULL),
(6, 'tasveer sahe daal', 0, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2016_11_16_121911_Create_Adds_table', 1),
(12, '2016_11_16_122001_Create_Comments_table', 1),
(13, '2016_11_16_122034_Create_Sub_Categories_table', 1),
(14, '2016_11_16_122052_Create_Categories_table', 1),
(15, '2016_12_02_034835_create_Provence_table', 1),
(16, '2016_12_02_034919_create_City_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(10) UNSIGNED NOT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `province`, `created_at`, `updated_at`) VALUES
(4, 'Sindh', NULL, NULL),
(5, 'Punjab', NULL, NULL),
(6, 'Balochistan', NULL, NULL),
(7, 'Azad Kashmir', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `categorie_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `is_active`, `categorie_id`, `created_at`, `updated_at`) VALUES
(1, 'Houses', 1, 2, NULL, NULL),
(2, 'Apartments', 1, 2, NULL, NULL),
(3, 'PG & Roommates', 1, 2, NULL, NULL),
(4, 'Land & plots', 1, 2, NULL, NULL),
(5, 'Guest Houses & Rental Appartments', 1, 2, NULL, NULL),
(6, 'Dogs', 1, 4, NULL, NULL),
(7, 'Aquariums ', 1, 4, NULL, NULL),
(8, 'Birds', 1, 4, NULL, NULL),
(10, 'Other Pets', 1, 4, NULL, NULL),
(11, 'Commercial Vehicles ', 1, 1, NULL, NULL),
(12, 'Spare Parts', 1, 1, NULL, NULL),
(13, 'Other Vehicals', 1, 1, NULL, NULL),
(15, 'Kitchen & Other Appliances ', 1, 3, NULL, NULL),
(16, ' Fridge - AC - Washing Machin', 1, 3, NULL, NULL),
(18, '  Games & Entertainment', 1, 3, NULL, NULL),
(19, 'TV - Video - Audio', 1, 3, NULL, NULL),
(22, ' Cameras & Accessories', 1, 3, NULL, NULL),
(23, 'Accessories', 1, 5, NULL, NULL),
(24, 'Prams & Walkers', 1, 5, NULL, NULL),
(25, '      Furniture And Toys', 1, 5, NULL, NULL),
(26, ' Motorcycles', 1, 6, NULL, NULL),
(27, ' Scooters', 1, 6, NULL, NULL),
(28, 'Bicycles', 1, 6, NULL, NULL),
(29, 'Spare Parts ', 1, 6, NULL, NULL),
(30, 'Computers ', 1, 8, NULL, NULL),
(31, ' Hard Disk', 1, 8, NULL, NULL),
(33, ' Internet', 1, 8, NULL, NULL),
(34, ' Laptops', 1, 8, NULL, NULL),
(35, 'Monitors', 1, 8, NULL, NULL),
(36, '  Printers', 1, 8, NULL, NULL),
(37, 'Other Accessories ', 1, 8, NULL, NULL),
(38, 'Android', 1, 7, NULL, NULL),
(39, 'Tablets', 1, 7, NULL, NULL),
(40, 'Accessories', 1, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_applied_for_admin` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `is_active`, `is_applied_for_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abdullah Mukhtar', 'abdullahmukhtar95@hotmail.com', '$2y$10$VHpTsbkxRdD7r50xVXDgLu9Jc81/hUWlcbdndGO2mO1vja.YugP0q', 0, 1, 0, 'Uh8wyFDS0bT0IGnviWSbTapPZcEb1CPiGHQ4jDMLZtD2vIWnrPDBLnR9PpQz', '2016-12-02 02:07:12', '2016-12-08 02:03:37'),
(2, 'Huzaifa', 'Huzaifa@ymail.com', '$2y$10$mv0DRkmgxqxT.WXFm9pq1Ojj4IxPG9TGDjvrS0AW4TNxtv6qYOGNK', 0, 1, 0, 'QQPBqeD9My3OHNKp7Vnt5QeS9lI28XE9ehKYVbmYzUh3IMGAKBafgLMEdpfX', '2016-12-08 01:48:22', '2016-12-08 01:54:25'),
(3, 'wegjhgsfd`fhgf', 'Sheheryarnadeem@yahoo.com', '$2y$10$wv3ZgRHmFRTvzX5q4qEEVunhLbjp04ThjN75T5ZMXYV6pJS3v9mmu', 0, 0, 0, 'Lw2DQOe5jqW5TXZRyDPxQSZl8BJ09zSIqlexyQysH5qhX6Ai6T8FWDGWe9YI', '2016-12-08 01:58:35', '2016-12-08 02:01:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advertisements_sub_categorie_id_index` (`sub_categorie_id`),
  ADD KEY `advertisements_city_id_index` (`city_id`),
  ADD KEY `advertisements_user_id_index` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_provence_id_index` (`provence_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_index` (`user_id`),
  ADD KEY `comments_advertisements_id_index` (`advertisements_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_categorie_id_index` (`categorie_id`);

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
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
