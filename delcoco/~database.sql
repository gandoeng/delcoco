-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 29, 2021 at 08:11 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `delcoco`
--

-- --------------------------------------------------------

--
-- Table structure for table `benefit`
--

CREATE TABLE `benefit` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_benefit` int(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `editable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `author_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(128) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `title2` varchar(255) NOT NULL DEFAULT '',
  `title3` varchar(255) NOT NULL DEFAULT '',
  `benefit` text NOT NULL,
  `benefit2` text NOT NULL,
  `benefit3` text NOT NULL,
  `lang` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `benefit`
--

INSERT INTO `benefit` (`id`, `id_benefit`, `created`, `updated`, `deletable`, `editable`, `author_id`, `name`, `title`, `title2`, `title3`, `benefit`, `benefit2`, `benefit3`, `lang`) VALUES
(1, 1, '2016-05-20 00:15:49', '2021-04-29 01:51:59', 1, 1, 2, 'Desiccated Coconut', 'Source of Energy', 'Essential Nutrients', '', '1-ounce serving of full fat desiccated coconut provides over 80% of the amount of saturated fat an adult should consume daily!', 'Desiccated coconut is rich in dietary fiber, manganese, copper and selenium.', '', 'english'),
(2, 2, '2016-05-20 00:17:20', '2021-04-29 01:52:01', 1, 1, 2, 'Coconut Milk', 'Easy Applications on Food and Beverage', 'Helpful for Losing Weight', 'As a Substitute', 'Coconut milk can be easily combined with many food and beverage ingredients, creating a rich and flavorful taste.', 'Contrary to popular beliefs, coconut milk is actually a very fllling, fat-burning food. It hydrates and helps digestive organs to help metabolize fat and remove waste from the body.', 'Coconut milk is now widely used as a substitute ingredient for milk and soymilk.', 'english'),
(3, 3, '2016-05-20 00:18:43', '2021-04-29 01:52:03', 1, 1, 2, 'Coconut Water', 'Better than Some Sugary Drinks', 'Lowers Blood Pressure', 'A Great Antidote', 'Coconut water is refreshing and flavorful, but contain less sugar than most sport drinks, sodas, and some fruit juices.', 'Coconut water is rich in potassium, magnesium, and Vitamin C content, which is good to control high blood pressure and hypertension.', 'Coconut water replenishes the electrolytes in the body and boosts hydration. Also, its antioxidants help fighting oxidative stress in our body.', 'english'),
(4, 4, '2016-05-20 00:19:44', '2021-04-29 01:52:05', 1, 1, 2, 'Nata De Coco', 'A Great Mix With Beverages', 'Nutrient Rich', 'Low Fat Content', 'Nata De Coco\'s distinctive flavor and texture makes it a great mix with variety of cold drinks and dessert menus.', 'Nata De Coco contains a lot of calcium, iron, phosphorus, vitamin B1, and protein.', 'Due to the low presence of fat in Nata De Coco, it is a great choice for those of us who want to maintain body weight.', 'english'),
(5, 1, '2021-04-29 01:52:18', '2021-04-29 01:54:26', 1, 1, 2, 'Kelapa Kering', 'Sumber Energi', 'Nutrisi Esensial', '', '1 ons kelapa kering lemak penuh menyediakan lebih dari 80% jumlah lemak jenuh yang harus dikonsumsi orang dewasa setiap hari!', 'Kelapa kering kaya akan serat makanan, mangan, tembaga, dan selenium.', '', 'indonesia'),
(6, 2, '2021-04-29 01:54:38', '2021-04-29 01:56:08', 1, 1, 2, 'Santan', 'Aplikasi Mudah pada Makanan dan Minuman', 'Bermanfaat untuk Menurunkan Berat Badan', 'Sebagai Pengganti', 'Santan dapat dengan mudah dipadukan dengan banyak bahan makanan dan minuman, menciptakan rasa yang kaya dan beraroma.', 'Bertentangan dengan kepercayaan populer, santan sebenarnya adalah makanan yang sangat menyegarkan dan membakar lemak. Ini menghidrasi dan membantu organ pencernaan untuk membantu memetabolisme lemak dan membuang limbah dari tubuh.', 'Santan kini banyak digunakan sebagai bahan pengganti santan dan susu kedelai.', 'indonesia'),
(7, 3, '2021-04-29 01:56:13', '2021-04-29 01:58:01', 1, 1, 2, 'Air Kelapa', 'Lebih baik dari Beberapa Minuman Manis', 'Menurunkan Tekanan Darah', 'Antioksidan Hebat', 'Air kelapa menyegarkan dan beraroma, tetapi mengandung lebih sedikit gula daripada kebanyakan minuman olahraga, soda, dan beberapa jus buah.', 'Air kelapa kaya akan kandungan kalium, magnesium, dan vitamin C yang baik untuk mengontrol tekanan darah tinggi dan hipertensi.', 'Coconut water replenishes the electrolytes in the body and boosts hydration. Also, its antioxidants help fighting oxidative stress in our body.', 'indonesia'),
(8, 4, '2021-04-29 01:58:09', '2021-04-29 01:59:41', 1, 1, 2, 'Nata De Coco', 'Campuran Yang Hebat Dengan Minuman', 'Kaya Nutrisi', 'Rendah Lemak', 'Rasa dan tekstur khas Nata De Coco membuatnya sangat cocok dipadukan dengan berbagai minuman dingin dan menu pencuci mulut.', 'Nata De Coco banyak mengandung kalsium, zat besi, fosfor, vitamin B1, dan protein.', 'Karena kandungan lemak yang rendah di Nata De Coco, nata de coco adalah pilihan yang cocok bagi kita yang ingin menjaga berat badan.', 'indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(10) UNSIGNED NOT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `editable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `author_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(128) NOT NULL DEFAULT '',
  `summary` text NOT NULL,
  `qualification` text NOT NULL,
  `description` text NOT NULL,
  `education` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_category` int(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `editable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `author_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(128) NOT NULL DEFAULT '',
  `lang` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `id_category`, `created`, `updated`, `deletable`, `editable`, `author_id`, `name`, `lang`) VALUES
(1, 1, '1999-12-31 10:00:00', '2021-04-29 03:00:28', 0, 1, 1, 'International Dishes', 'english'),
(2, 2, '1999-12-31 10:00:00', '2021-04-29 03:00:31', 0, 1, 1, 'Traditional Dishes', 'english'),
(3, 3, '1999-12-31 10:00:00', '2021-04-29 03:00:33', 0, 1, 1, 'Dessert', 'english'),
(4, 1, '2021-04-29 03:00:43', '2021-04-29 03:21:44', 0, 1, 1, 'Internasional', 'indonesia'),
(5, 2, '2021-04-29 03:01:48', '2021-04-29 03:21:50', 0, 1, 1, 'Tradisional', 'indonesia'),
(6, 3, '2021-04-29 03:02:28', '2021-04-29 03:02:49', 0, 1, 1, 'Pencuci Mulut', 'indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(10) UNSIGNED NOT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `editable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `author_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(128) NOT NULL DEFAULT '',
  `question` varchar(255) NOT NULL DEFAULT '',
  `answer` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(10) UNSIGNED NOT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `editable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `author_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(128) NOT NULL DEFAULT '',
  `link` varchar(128) NOT NULL DEFAULT '',
  `lang` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `created`, `updated`, `deletable`, `editable`, `author_id`, `name`, `link`, `lang`) VALUES
(1, '1999-12-31 10:00:00', '2021-04-28 03:47:20', 0, 1, 1, 'Home', '', 'english'),
(2, '1999-12-31 10:00:00', '2021-04-28 03:47:25', 0, 1, 1, 'About Us', 'aboutus/', 'english'),
(3, '1999-12-31 10:00:00', '2021-04-28 03:47:27', 0, 1, 1, 'Story', 'story/', 'english'),
(4, '1999-12-31 10:00:00', '2021-04-28 03:47:29', 0, 1, 1, 'Product', 'product/', 'english'),
(5, '1999-12-31 10:00:00', '2021-04-28 03:47:30', 0, 1, 1, 'Recipe', 'recipe/all/', 'english'),
(6, '1999-12-31 10:00:00', '2021-04-28 03:47:31', 0, 1, 1, 'Contact', 'contactus/', 'english'),
(7, '0000-00-00 00:00:00', '2021-04-26 21:34:04', 0, 1, 1, 'Beranda', '', 'indonesia'),
(8, '0000-00-00 00:00:00', '2021-04-26 21:35:11', 0, 1, 1, 'Tentang Kami', 'aboutus/', 'indonesia'),
(9, '0000-00-00 00:00:00', '2021-04-26 21:37:17', 0, 1, 1, 'Cerita', 'story/', 'indonesia'),
(10, '0000-00-00 00:00:00', '2021-04-26 21:36:07', 0, 1, 1, 'Produk', 'product/', 'indonesia'),
(11, '0000-00-00 00:00:00', '2021-04-26 21:36:36', 0, 1, 1, 'Resep', 'recipe/all/', 'indonesia'),
(12, '0000-00-00 00:00:00', '2021-04-26 21:37:04', 0, 1, 1, 'Kontak', 'contactus/', 'indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(10) UNSIGNED NOT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `editable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `author_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `benefit_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `product_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `recipe_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `section_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `section_item_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `slideshow_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(128) NOT NULL DEFAULT '',
  `type` varchar(128) NOT NULL DEFAULT '',
  `ext` varchar(128) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `created`, `updated`, `deletable`, `editable`, `author_id`, `benefit_id`, `product_id`, `recipe_id`, `section_id`, `section_item_id`, `slideshow_id`, `name`, `type`, `ext`) VALUES
(1, '1999-12-31 10:00:00', '1999-12-31 10:00:00', 1, 1, 2, 0, 0, 0, 3, 0, 0, '', '', 'jpg'),
(2, '1999-12-31 10:00:00', '1999-12-31 10:00:00', 1, 1, 2, 0, 0, 0, 6, 0, 0, '', '', 'jpg'),
(3, '1999-12-31 10:00:00', '1999-12-31 10:00:00', 1, 1, 2, 0, 0, 0, 7, 0, 0, '', '', 'jpg'),
(4, '1999-12-31 10:00:00', '1999-12-31 10:00:00', 1, 1, 2, 0, 0, 0, 0, 7, 0, '', '', 'png'),
(5, '1999-12-31 10:00:00', '1999-12-31 10:00:00', 1, 1, 2, 0, 0, 0, 0, 8, 0, '', '', 'png'),
(6, '1999-12-31 10:00:00', '1999-12-31 10:00:00', 1, 1, 2, 0, 0, 0, 0, 9, 0, '', '', 'png'),
(7, '2016-05-09 02:05:51', '2016-05-18 21:31:17', 1, 1, 2, 0, 0, 0, 0, 0, 0, '', '', 'png'),
(8, '2016-05-18 21:31:05', '2016-05-18 21:31:17', 1, 1, 2, 0, 0, 1, 0, 0, 0, '', '', 'jpg'),
(9, '2016-05-19 01:46:55', '2016-05-19 01:46:55', 1, 1, 2, 0, 0, 0, 13, 0, 0, '', '', 'png'),
(10, '2016-05-19 01:47:03', '2016-05-19 01:47:03', 1, 1, 2, 0, 0, 0, 13, 0, 0, '', '', 'png'),
(11, '2016-05-20 00:15:37', '2016-05-20 00:17:52', 1, 1, 2, 0, 0, 0, 0, 0, 0, '', '', 'png'),
(12, '2016-05-20 00:15:44', '2016-05-20 00:17:52', 1, 1, 2, 0, 0, 0, 0, 0, 0, '', 'Thumbnail', 'png'),
(13, '2016-05-20 00:17:08', '2016-09-02 02:59:52', 1, 1, 2, 2, 0, 0, 0, 0, 0, '', '', 'png'),
(14, '2016-05-20 00:17:15', '2016-05-20 00:18:58', 1, 1, 2, 0, 0, 0, 0, 0, 0, '', 'Thumbnail', 'png'),
(15, '2016-05-20 00:17:36', '2016-09-02 02:47:12', 1, 1, 2, 1, 0, 0, 0, 0, 0, '', '', 'png'),
(16, '2016-05-20 00:17:50', '2016-05-20 00:47:34', 1, 1, 2, 0, 0, 0, 0, 0, 0, '', 'Thumbnail', 'png'),
(17, '2016-05-20 00:18:33', '2016-09-02 03:22:04', 1, 1, 2, 3, 0, 0, 0, 0, 0, '', '', 'png'),
(18, '2016-05-20 00:18:38', '2016-05-20 00:49:03', 1, 1, 2, 0, 0, 0, 0, 0, 0, '', 'Thumbnail', 'png'),
(19, '2016-05-20 00:18:56', '2016-05-20 00:48:38', 1, 1, 2, 0, 0, 0, 0, 0, 0, '', 'Thumbnail', 'png'),
(20, '2016-05-20 00:19:30', '2016-09-02 03:27:33', 1, 1, 2, 4, 0, 0, 0, 0, 0, '', '', 'png'),
(21, '2016-05-20 00:19:37', '2016-05-20 00:48:17', 1, 1, 2, 0, 0, 0, 0, 0, 0, '', 'Thumbnail', 'png'),
(22, '2016-05-20 00:47:31', '2016-09-02 02:47:12', 1, 1, 2, 1, 0, 0, 0, 0, 0, '', 'Thumbnail', 'png'),
(23, '2016-05-20 00:48:14', '2016-09-02 03:27:33', 1, 1, 2, 4, 0, 0, 0, 0, 0, '', 'Thumbnail', 'png'),
(24, '2016-05-20 00:48:35', '2016-09-02 02:59:52', 1, 1, 2, 2, 0, 0, 0, 0, 0, '', 'Thumbnail', 'png'),
(25, '2016-05-20 00:49:01', '2016-09-02 03:22:04', 1, 1, 2, 3, 0, 0, 0, 0, 0, '', 'Thumbnail', 'png'),
(26, '2016-05-20 01:14:50', '2016-05-20 01:14:54', 1, 1, 2, 0, 1, 0, 0, 0, 0, '', 'Thumbnail', 'png'),
(27, '2016-05-20 01:15:05', '2016-05-20 01:15:05', 1, 1, 2, 0, 1, 0, 0, 0, 0, '', '', 'png'),
(28, '2016-05-20 01:15:10', '2016-05-20 01:15:10', 1, 1, 2, 0, 1, 0, 0, 0, 0, '', '', 'png'),
(29, '2016-05-20 01:15:16', '2016-05-20 01:15:16', 1, 1, 2, 0, 1, 0, 0, 0, 0, '', '', 'png'),
(30, '2016-05-20 01:51:36', '2016-09-02 02:13:47', 1, 1, 2, 0, 0, 0, 0, 0, 0, '', 'Thumbnail', 'png'),
(36, '2016-05-22 18:35:15', '2016-05-22 18:35:16', 1, 1, 2, 0, 0, 0, 0, 0, 1, '', '', 'jpg'),
(37, '2016-07-29 01:29:37', '2016-09-02 02:17:35', 1, 1, 2, 0, 0, 0, 0, 0, 0, '', 'Thumbnail', 'jpg'),
(38, '2016-07-29 01:34:27', '2016-07-29 01:34:27', 1, 1, 2, 0, 0, 0, 0, 0, 0, '', 'Thumbnail', 'jpg'),
(39, '2016-07-29 01:39:59', '2016-09-02 02:19:18', 1, 1, 2, 0, 0, 0, 0, 0, 0, '', 'Thumbnail', 'jpg'),
(40, '2016-07-29 01:45:23', '2016-08-28 01:27:49', 1, 1, 2, 0, 0, 0, 0, 0, 0, '', 'Thumbnail', 'jpg'),
(46, '2016-08-28 01:27:47', '2016-09-02 02:11:35', 1, 1, 2, 0, 0, 0, 0, 0, 0, '', 'Thumbnail', 'png'),
(48, '2016-08-28 01:32:30', '2016-08-28 01:32:30', 1, 1, 2, 0, 0, 0, 0, 0, 0, '', 'Thumbnail', 'jpg'),
(55, '2016-09-02 00:40:12', '2016-09-02 00:40:12', 1, 1, 2, 0, 1, 0, 0, 0, 0, '', '', 'png'),
(56, '2016-09-02 00:42:15', '2016-09-02 00:42:15', 1, 1, 2, 0, 1, 0, 0, 0, 0, '', '', 'png'),
(57, '2016-09-02 00:48:21', '2016-09-02 00:48:21', 1, 1, 2, 0, 1, 0, 0, 0, 0, '', '', 'png'),
(80, '2019-09-03 21:35:05', '2019-09-03 21:35:05', 1, 1, 2, 0, 4, 0, 0, 0, 0, '', '', 'png'),
(81, '2019-09-03 21:38:40', '2019-09-03 21:38:43', 1, 1, 2, 0, 3, 0, 0, 0, 0, '', 'Thumbnail', 'jpg'),
(63, '2016-09-02 02:03:27', '2016-09-02 02:03:27', 1, 1, 2, 0, 5, 0, 0, 0, 0, '', '', 'png'),
(64, '2016-09-02 02:03:49', '2016-09-02 02:03:49', 1, 1, 2, 0, 5, 0, 0, 0, 0, '', '', 'png'),
(65, '2016-09-02 02:03:59', '2016-09-02 02:03:59', 1, 1, 2, 0, 5, 0, 0, 0, 0, '', '', 'png'),
(68, '2016-09-02 02:10:14', '2016-09-02 02:10:14', 1, 1, 2, 0, 5, 0, 0, 0, 0, '', '', 'png'),
(69, '2016-09-02 02:10:23', '2016-09-02 02:10:23', 1, 1, 2, 0, 5, 0, 0, 0, 0, '', '', 'png'),
(70, '2016-09-02 02:11:32', '2016-09-02 02:11:35', 1, 1, 2, 0, 5, 0, 0, 0, 0, '', 'Thumbnail', 'png'),
(71, '2016-09-02 02:13:40', '2016-09-02 02:13:47', 1, 1, 2, 0, 2, 0, 0, 0, 0, '', 'Thumbnail', 'jpeg'),
(72, '2016-09-02 02:16:01', '2016-09-02 02:16:01', 1, 1, 2, 0, 0, 0, 0, 0, 0, '', 'Thumbnail', ''),
(73, '2016-09-02 02:17:23', '2019-09-03 21:17:34', 1, 1, 2, 0, 0, 0, 0, 0, 0, '', 'Thumbnail', 'jpg'),
(74, '2016-09-02 02:19:16', '2016-09-02 02:19:18', 1, 1, 2, 0, 4, 0, 0, 0, 0, '', 'Thumbnail', 'jpg'),
(75, '2016-09-02 02:24:00', '2016-09-02 02:24:00', 1, 1, 2, 0, 3, 0, 0, 0, 0, '', '', 'png'),
(76, '2016-09-02 03:37:31', '2016-09-02 03:37:31', 1, 1, 2, 0, 2, 0, 0, 0, 0, '', '', 'jpeg'),
(77, '2016-12-08 00:25:05', '2016-12-08 00:25:05', 1, 1, 2, 0, 5, 0, 0, 0, 0, '', '', 'png'),
(78, '2019-09-03 21:17:31', '2019-09-03 21:38:43', 1, 1, 2, 0, 0, 0, 0, 0, 0, '', 'Thumbnail', 'jpg'),
(79, '2019-09-03 21:32:15', '2019-09-03 21:32:15', 1, 1, 2, 0, 3, 0, 0, 0, 0, '', '', 'png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `editable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `author_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(128) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `type` text NOT NULL,
  `storage` text NOT NULL,
  `category` varchar(128) NOT NULL DEFAULT '',
  `lang` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_product`, `created`, `updated`, `deletable`, `editable`, `author_id`, `name`, `description`, `type`, `storage`, `category`, `lang`) VALUES
(1, 1, '2016-05-20 01:14:54', '2021-04-28 10:03:18', 1, 1, 2, 'Desiccated Coconut', 'High Fat Desiccated Coconut and Low Fat Desiccated Coconut', '<p>Desiccated Coconut is shredded fresh and dried white meat of mature coconuts which have natural taste, flavor and aroma of fresh coconut.</p>\n<p>It could be applied for baking, dessert,&nbsp;cooking, and further processing in industrial use.</p>\n<p><strong>Type of High Fat Desiccated Coconut:</strong></p>\n<p style=\"padding-left: 30px;\">- Extra Fine Grade<br />- Fine Grade<br />- Medium Grade</p>\n<p><strong>Type of Low Fat Desiccated Coconut:</strong></p>\n<p style=\"padding-left: 30px;\">- Fine Grade<br />- Medium Grade</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>', '<h4>Packaging</h4>\n<p>Blue polyethylene liner in multi-wall kraft bag:<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - 25 kg<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - 25 lbs<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - 100 lbs</p>\n<p>&nbsp;</p>\n<h4>Storage&nbsp;and Handling Instructions</h4>\n<p>Desiccated Coconut could be stored in room temperature (15<sup>o</sup>C - 21<sup>o</sup>C) at 50% - 60% RH.<br />Store on pallets or dunnage in cool, dry, odor-free area, out of sunlight and away from walls.<br />Reseal the package tightly when the product is not completely used up.</p>\n<p>&nbsp;</p>\n<h4>Shelf Life</h4>\n<p>12 months under recommended storage conditions</p>', 'Main', 'english'),
(2, 2, '2016-05-20 01:51:37', '2021-04-28 10:03:22', 1, 1, 2, 'Coconut Water', 'Pure Coconut Water', '<p>Coconut water is the substitute for isotonic drink. Coconut Water has been consumed for centuries in tropical countries and is believed to treat a variety of health-related ailments. Coconut water is not only an incredibly popular thirst-quencher, but it packs quite lots of nutritional benefits as well. Our coconut water is made from pure coconut without any additives, so we can guarantee the freshness and the healthiest of our product. We also use UHT system to assure our customer about the hygienic of our coconut water.</p>\n<p>The application of Coconut Water is for drinking and for cooking. In Indonesia, people use coconut water to give natural sweetness in the cuisine.</p>', '<h4>Packaging</h4>\n<p>The packaging for our coconut water:</p>\n<p style=\"padding-left: 30px;\">- 20 kg (Aseptic bag with carton box outer)<br />- 200 kg (Aseptic bag with drum outer)<br />- 1000 kg (Aseptic bag with flexibox outer)</p>\n<p>&nbsp;</p>\n<h4>Storage and Handling Instructions</h4>\n<p>Store in ambient temperature in dry, odor free area, out of sunlight and away from wall.</p>\n<p>&nbsp;</p>\n<h4>Shelf Life</h4>\n<p>12 months under recommended storage conditions</p>', 'Main', 'english'),
(3, 3, '2016-07-29 01:29:40', '2021-04-28 10:03:24', 1, 1, 2, 'Coconut Cream', 'Coconut Cream Fat 24% ± 1%', '<p>Coconut Cream with additives is a creamy white product aseptically processed from the natural extract of fresh and matured coconut meat. UHT processing technology is used to preserve the freshness and natural flavor and aroma of fresh coconuts.</p>\n<p>It could be as major ingredient in Asian households for preparation of&nbsp;<strong>exotic oriental dishes,</strong>&nbsp;<strong>desserts, and beverage drinks</strong>. Not only can be applied for household but also for i<strong>ndustrial applications</strong>&nbsp;such as&nbsp;<strong>Dairy Products (Ice Cream), Bakery Products (Biscuits, Cookies, and Confectionery).</strong></p>', '<h4>Packaging</h4>\n<p><strong>Retail packaging:</strong><br />- 65 ml (Tetrapak)<br />- 200 ml (Tetrapak)<br />- 500 ml (Tetrapak)</p>\n<p><strong>Industrial packaging:</strong><br />- 20 kg (Aseptic bag with carton box outer)<br />- 200 kg (Aseptic bag with drum outer)<br />- 1000 kg (Aseptic bag with flexbox outer)</p>\n<p>&nbsp;</p>\n<h4>Storage and Handling Instructions</h4>\n<p>Product must be stored under cool and dry condition.<br />Refrigeration is recommended once the pack has been opened, however do not freeze to avoid irreversible damage to the product.</p>\n<p>&nbsp;</p>\n<h4>Shelf Life</h4>\n<p>18 months under recommended storage conditions</p>\n<p>&nbsp;</p>', 'Main', 'english'),
(4, 4, '2016-07-29 01:40:06', '2021-04-28 10:03:26', 1, 1, 2, 'Coconut Milk', 'Coconut Milk Fat 17% ± 1%', '<p>Coconut Milk with additives is a creamy white product aseptically processed from the natural extract of fresh and matured coconut meat.</p>\n<p>UHT processing technology is used to preserve the freshness and natural flavor and aroma of fresh coconuts.</p>\n<p>It could be as major ingredient in Asian households for preparation of <strong>exotic oriental dishes,</strong> <strong>desserts, and beverage drinks</strong>. Not only can be applied for household but also for i<strong>ndustrial applications</strong> such as <strong>Dairy Products (Ice Cream), Bakery Products (Biscuits, Cookies, and Confectionery).</strong></p>', '<h4>Packaging</h4>\n<p style=\"font-weight: 400;\"><strong>Retail packaging:</strong><br />- 65 ml (Tetrapak)<br />- 200 ml (Tetrapak)<br />- 500 ml (Tetrapak)</p>\n<p style=\"font-weight: 400;\"><strong>Industrial packaging:</strong><br />- 20 kg (Aseptic bag with carton box outer)<br />- 200 kg (Aseptic bag with drum outer)<br />- 1000 kg (Aseptic bag with flexbox outer)</p>\n<p style=\"font-weight: 400;\">&nbsp;</p>\n<h4>Storage and Handling Instructions</h4>\n<p style=\"font-weight: 400;\">Product must be stored under cool and dry condition.<br />Refrigeration is recommended once the pack has been opened, however do not freeze to avoid irreversible damage to the product.</p>\n<p style=\"font-weight: 400;\">&nbsp;</p>\n<h4>Shelf Life</h4>\n<p style=\"font-weight: 400;\">18 months under recommended storage conditions</p>\n<p style=\"font-weight: 400;\">&nbsp;</p>', 'Main', 'english'),
(5, 5, '2016-07-29 01:45:36', '2021-04-28 10:03:31', 1, 1, 2, 'Nata De Coco', 'Nata De Coco in Light Syrup', '<p>Nata de Coco (some referred as Coconut Gel or Coconut Jelly) is a popular dessert in Asia. Made&nbsp;from fermentation of coconut water, Nata De Coco is highly regarded for its high dietary fiber content and zero cholesterol. Nata De Coco is often cut into small cubes and could very well be mixed with several popular desserts such as ice cream, pudding, and fruit mixes.</p>', '<h4>Packaging</h4>\n<p>Our Nata De Coco is packed in:</p>\n<p style=\"padding-left: 30px;\">- PE Plastic&nbsp;Cup 240 gram<br />- PE Stand Pouch 360 gram<br />- PE Plastic Bag 1,000 gram</p>\n<p style=\"padding-left: 30px;\">&nbsp;</p>\n<h4>Storage and Handling Instructions</h4>\n<p>Keep at room temperature<br />Avoid direct sunlight<br />Refrigerate after opening</p>\n<p>&nbsp;</p>\n<h4>Shelf Life</h4>\n<p>14 months under recommended storage conditions</p>', 'Main', 'english'),
(6, 1, '2021-04-28 10:04:04', '2021-04-29 02:45:25', 1, 1, 2, 'Kelapa Kering', 'Kelapa Kering Tinggi Lemak dan Kelapa Kering Rendah Lemak', '<p>Desiccated Coconut adalah suwiran daging putih segar dan kering dari buah kelapa matang yang memiliki rasa, rasa dan aroma alami kelapa segar.</p>\r\n<p>Ini dapat diterapkan untuk memanggang, pencuci mulut,&nbsp;memasak, dan pemrosesan lebih lanjut dalam penggunaan industri.</p><p><strong>Jenis Kelapa Kering Berlemak Tinggi:</strong></p>\r\n<p> <strong> Jenis Kelapa Kering Berlemak Tinggi:</strong></p>\r\n<p style=\"padding-left: 30px;\">- Tingkat Sangat Halus <br />- Tingkat Halus <br />- Tingkat Sedang </p>\r\n<p><strong>Jenis Kelapa Kering Rendah Lemak: </strong></p>\r\n<p style=\"padding-left: 30px;\">- Tingkat Baik <br />- Tingkat Sedang </p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '<h4>Kemasan</h4>\r\n<p>Lapisan polietilen biru dalam tas kraft multi-dinding:<br/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - 25 kg<br/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - 25 lbs<br/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - 100 lbs</p>\r\n<p>&nbsp;</p>\r\n<h4>Penyimpanan&nbsp;dan Petunjuk Penanganan</h4>\r\n<p>Kelapa Kering dapat disimpan dalam suhu kamar (15<sup>o</sup>C - 21<sup>o</sup>C) pada 50% - 60% RH.<br/>Simpan di palet atau dunnage di tempat yang sejuk, kering, bebas bau, jauh dari sinar matahari dan jauh dari dinding.<br/> Tutup kembali kemasannya dengan rapat saat produk tidak benar-benar habis.</p>\r\n<p> & nbsp; </p>\r\n<h4> Shelf Life </h4>\r\n<p> 12 bulan dalam kondisi penyimpanan yang disarankan </p> ', 'Main', 'indonesia'),
(7, 2, '0000-00-00 00:00:00', '2021-04-29 02:38:36', 1, 1, 2, 'Air Kelapa', 'Air Kelapa Murni', '<p>Air kelapa adalah pengganti minuman isotonik. Air Kelapa telah dikonsumsi selama berabad-abad di negara tropis dan dipercaya dapat mengobati berbagai penyakit yang berhubungan dengan kesehatan. Air kelapa tidak hanya sebagai pelepas dahaga yang sangat populer, tetapi juga mengandung banyak manfaat nutrisi. Air kelapa kami terbuat dari kelapa murni tanpa bahan tambahan apapun, sehingga kami menjamin kesegaran dan kesehatan produk kami. Kami juga menggunakan sistem UHT untuk meyakinkan pelanggan kami tentang higienisnya air kelapa kami.</p>\r\n<p>Aplikasi Air Kelapa untuk minum dan memasak. Di Indonesia, orang menggunakan air kelapa untuk memberikan rasa manis alami pada masakannya.</p>', '<h4>Kemasan</h4>\r\n<p>Kemasan untuk air kelapa kami:</p>\r\n<p style=\"padding-left: 30px;\">- 20 kg (Kantong aseptik dengan bagian luar kotak karton) <br/> - 200 kg (Kantong aseptik dengan bagian luar drum) <br/> - 1000 kg (Kantong aseptik dengan flexibox luar)</p>\r\n<p>&nbsp;</p>\r\n<h4>Petunjuk Penyimpanan dan Penanganan</h4>\r\n<p>Simpan dalam suhu kamar di tempat yang kering, bebas bau, jauh dari sinar matahari, dan jauh dari dinding.</p>\r\n<p>&nbsp;</p>\r\n<h4>Shelf Life</h4>\r\n<p>12 bulan dalam kondisi penyimpanan yang disarankan</p>', 'Main', 'indonesia'),
(8, 3, '2021-04-28 10:16:04', '2021-04-29 02:38:41', 1, 1, 2, 'Krim Kelapa', 'Lemak Krim Kelapa 24% ± 1%', '<p>Krim Kelapa dengan bahan tambahan adalah produk berwarna putih krem yang diproses secara aseptik dari ekstrak alami daging kelapa yang segar dan matang. Teknologi pengolahan UHT digunakan untuk menjaga kesegaran dan rasa alami serta aroma kelapa segar.</p>\r\n<p>Ini bisa menjadi bahan utama dalam rumah tangga Asia untuk menyiapkan &nbsp;<strong> hidangan oriental yang eksotis,</strong> &nbsp;<strong> makanan penutup, dan minuman minuman</strong>. Tidak hanya dapat diterapkan untuk rumah tangga tetapi juga untuk <strong>aplikasi industri </strong>&nbsp;seperti &nbsp; <strong> Produk Susu (Es Krim), Produk Roti (Biskuit, Kue Kering, dan Biskuit).</strong></p>', '<h4>Kemasan</h4>\r\n<p><strong>Kemasan eceran: </strong><br/>- 65 ml (Tetrapak) <br/>- 200 ml (Tetrapak) <br/> - 500 ml (Tetrapak) </p>\r\n<p><strong>Kemasan industri: </strong><br/>- 20 kg (Kantong aseptik dengan bagian luar kotak karton) <br/>- 200 kg (Kantong aseptik dengan bagian luar drum)<br/> - 1000 kg ( Kantong aseptik dengan bagian luar flexbox)</p>\r\n<p>&nbsp;</p>\r\n<h4> Petunjuk Penyimpanan dan Penanganan </h4>\r\n<p> Produk harus disimpan dalam kondisi sejuk dan kering. <br /> Sebaiknya didinginkan setelah kemasan dibuka, namun jangan dibekukan untuk menghindari kerusakan permanen pada produk. </p>\r\n<p> & nbsp; </p>\r\n<h4> Shelf Life </h4>\r\n<p> 18 bulan dalam kondisi penyimpanan yang direkomendasikan </p>\r\n<p> & nbsp; </p>', 'Main', 'indonesia'),
(9, 4, '2021-04-28 10:21:29', '2021-04-29 02:38:45', 1, 1, 2, 'Santan', 'Lemak Santan 17% ± 1%', '<p>Santan dengan bahan tambahan adalah produk berwarna putih krem yang diproses secara aseptik dari ekstrak alami daging kelapa yang segar dan matang.</p>\r\n<p>Teknologi pemrosesan UHT digunakan untuk menjaga kesegaran dan rasa alami serta aroma kelapa segar.</p>\r\n<p>Ini bisa menjadi bahan utama dalam rumah tangga Asia untuk menyiapkan <strong>hidangan oriental yang eksotis</strong> <strong>makanan penutup, dan minuman minuman</strong>. Tidak hanya dapat diaplikasikan untuk rumah tangga tetapi juga untuk <strong>aplikasi ndustrial </strong> seperti<strong> Produk Susu (Ice Cream), Produk Bakery (Biskuit, Cookies, dan Confectionery).</strong></ p >', '<h4>Kemasan</h4>\r\n<p style=\"font-weight:400;\"><strong>Kemasan eceran: </strong><br/>- 65 ml (Tetrapak) <br/>- 200 ml (Tetrapak) <br/>- 500 ml (Tetrapak) </p>\r\n<p style=\"font-weight: 400;\"><strong>Kemasan industri: </strong><br/>- 20 kg (Kantong aseptik dengan bagian luar kotak karton) <br/>- 200 kg (Kantong aseptik dengan drum luar) <br/>- 1000 kg (Kantong aseptik dengan bagian luar flexbox)</p>\r\n<p style=\"font-weight:400;\">&nbsp;</p>\r\n<h4>Petunjuk Penyimpanan dan Penanganan</h4>\r\n<p style =\"font-weight:400;\">Produk harus disimpan dalam kondisi sejuk dan kering.<br/>Sebaiknya didinginkan setelah kemasan dibuka, namun jangan membeku untuk menghindari kerusakan permanen pada produk.</p>\r\n<p style = \"font-weight: 400;\"> & nbsp; </p>\r\n<h4> Shelf Life </h4>\r\n<p style = \"font-weight: 400;\"> 18 bulan dalam kondisi penyimpanan yang disarankan </p>\r\n<p style = \"font-weight: 400;\"> & nbsp; </p>', 'Main', 'indonesia'),
(10, 5, '2021-04-28 10:26:37', '2021-04-29 02:38:49', 1, 1, 2, 'Nata De Coco', 'Nata De Coco dalam Sirup Ringan', '<p>Nata de Coco (beberapa disebut Coconut Gel atau Coconut Jelly) adalah makanan penutup populer di Asia. Terbuat&nbsp;dari fermentasi air kelapa, Nata De Coco sangat terkenal karena kandungan serat makanannya yang tinggi dan tanpa kolesterol. Nata De Coco sering dipotong dadu kecil dan sangat cocok untuk dicampur dengan beberapa makanan penutup populer seperti es krim, puding, dan campuran buah-buahan.</p>', '<h4>Kemasan</h4>\r\n<p>Nata De Coco kami dikemas dalam:</p>\r\n<p style=\"padding-left: 30px;\">- Plastik PE &nbsp; Cup 240 gram <br/>- Kantong Berdiri PE 360 gram <br/>- Kantong Plastik PE 1.000 gram</p>\r\n<p style=\"padding-left: 30px;\">&nbsp;</p>\r\n<h4>Petunjuk Penyimpanan dan Penanganan</h4>\r\n<p>Simpan pada suhu kamar<br/> Hindari sinar matahari langsung<br/> Dinginkan setelah dibuka</p>\r\n<p> & nbsp; </p>\r\n<h4> Shelf Life </h4>\r\n<p> 14 bulan dalam kondisi penyimpanan yang direkomendasikan </p>', 'Main', 'indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_recipe` int(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `editable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `author_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `category_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(128) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `ingredients` text NOT NULL,
  `preparations` text NOT NULL,
  `likes` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `lang` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `id_recipe`, `created`, `updated`, `deletable`, `editable`, `author_id`, `category_id`, `name`, `description`, `ingredients`, `preparations`, `likes`, `keyword`, `lang`) VALUES
(1, 1, '2016-05-09 02:05:52', '2021-04-29 04:30:31', 1, 1, 2, 1, 'Coconut Cream Meringue Pie', 'This is a pie that was created for our daughter\'s birthday. She loved her grandmother\'s coconut cream pie. We did not have the exact recipe so we came up with this. It could take up to 30 minutes for the custard to get thick and come to a boil.', '<ul>\n<li>1 1/2 cups half-and-h</li>\n<li>1 1/2 cups coconut milk</li>\n<li>2 eggs, beaten</li>\n<li>3/4 cup white sugar</li>\n<li>1/2 cup cornstarch</li>\n<li>1/4 teaspoon salt</li>\n<li>3/4 cup flaked coconut</li>\n<li>1 teaspoon vanilla extract</li>\n<li>1 (9 inch) baked pie crust</li>\n<li>3 egg whites</li>\n<li>1/4 teaspoon cream of tartar</li>\n<li>6 tablespoons white sugar</li>\n<li>1/2 cup flaked coconut</li>\n</ul>', '<ol>\n<li>Preheat oven to 350 degrees F (175 degrees C).</li>\n<li>Stir half-and-half, coconut milk, eggs, 3/4 cup sugar, cornstarch, and salt together in a saucepan; stirring constantly, slowly bring to a boil over low heat and cook until thick, about 30 minutes. Remove saucepan from heat; fold 3/4 cup coconut into the mixture with the vanilla extract. Pour the coconut mixture into the baked pie crust.</li>\n<li>Beat egg whites in a glass or metal bowl until foamy. Gradually add cream of tartar and 6 tablespoons white sugar, continuing to beat until soft peaks form. Lift your beater or whisk straight up: the egg whites will form soft mounds rather than a sharp peak. Spread egg white mixture over the pie. Sprinkle 1/2 cup coconut over the pie.</li>\n<li>Bake in preheated oven until the top is golden brown, 12 to 15 minutes. Move to a wire rack to cool until completely cooled to the touch, about 1 hour. Refrigerate at least 3 hours before serving.</li>\n</ol>', 1391, 'coconut', 'english'),
(2, 1, '2021-04-29 02:48:02', '2021-04-29 03:34:22', 1, 1, 2, 1, 'Pai Meringue Krim Kelapa', 'Ini adalah kue yang dibuat untuk ulang tahun putri kami. Dia menyukai pai krim kelapa neneknya. Kami tidak memiliki resep persisnya, jadi kami membuat ini. Diperlukan waktu hingga 30 menit agar puding mengental dan mendidih.', '<ul>\r\n<li>1 1/2 cangkir half-and-h</li>\r\n<li>1 1/2 cangkir santan</li>\r\n<li>2 telur, kocok</li>\r\n<li>3/4 cangkir gula putih</li>\r\n<li>1/2 cangkir tepung jagung</li>\r\n<li>1/4 sendok teh garam</li>\r\n<li>3/4 cangkir kelapa parut</li>\r\n<li>1 sendok teh ekstrak vanili</li>\r\n<li>1 (9 inci) kulit pai panggang</li>\r\n<li>3 putih telur</li>\r\n<li>1/4 sendok teh krim tartar</li>\r\n<li>6 sendok makan gula putih</li>\r\n<li>1/2 cangkir kelapa parut</li>\r\n</ul>', '<ol>\r\n<li>Panaskan oven sampai 350 derajat F (175 derajat C).</li>\r\n<li>Aduk setengah-setengah, santan, telur, 3/4 cangkir gula, tepung maizena, dan garam bersama-sama dalam panci; aduk terus, perlahan didihkan dengan api kecil dan masak sampai kental, sekitar 30 menit. Angkat panci dari api; lipat 3/4 cangkir kelapa ke dalam campuran dengan ekstrak vanili. Tuang adonan kelapa ke dalam kulit pai panggang.</li>\r\n<li>Kocok putih telur dalam gelas atau mangkuk logam sampai berbusa. Tambahkan krim tartar dan 6 sendok makan gula putih secara bertahap, terus kocok hingga lembut. Angkat pengocok atau pengocok Anda lurus ke atas: putih telur akan membentuk gundukan lunak, bukan puncak yang tajam. Oleskan campuran putih telur di atas pai. Taburkan 1/2 cangkir kelapa di atas pai.</li>\r\n<li>Panggang dalam oven yang sudah dipanaskan sampai bagian atasnya berwarna cokelat keemasan, 12 hingga 15 menit. Pindah ke rak kawat untuk mendinginkan hingga benar-benar dingin saat disentuh, sekitar 1 jam. Dinginkan setidaknya 3 jam sebelum disajikan.</li>\r\n</ol>', 1390, 'Kelapa', 'indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_section` int(10) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `editable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `author_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `header_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `section` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `content` text NOT NULL,
  `no_subtitle` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `no_content` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `no_image` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `item` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `images` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `lang` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `id_section`, `created`, `updated`, `deletable`, `editable`, `author_id`, `header_id`, `section`, `title`, `subtitle`, `content`, `no_subtitle`, `no_content`, `no_image`, `item`, `images`, `lang`) VALUES
(1, 1, '1999-12-31 10:00:00', '2021-04-28 04:09:19', 0, 1, 1, 1, 1, 'Your COCONUT journey starts here!', '', '', 0, 1, 1, 0, 0, 'english'),
(2, 2, '1999-12-31 10:00:00', '2021-04-28 04:09:24', 0, 1, 1, 1, 2, 'Coconut Republic', 'In Sanskrit, coconuts are called Kalpa Vriksha, which means: the tree that gives all that is necessary for living', '', 0, 1, 1, 0, 0, 'english'),
(3, 3, '1999-12-31 10:00:00', '2021-04-28 04:09:26', 0, 1, 1, 1, 3, 'WHO WE ARE?', 'Bringing The Goodness Of Nature', '<p>PT. Sari Segar Husada has engaged in coconut processing industry since 1986. We are now one of the biggest coconut product manufacturers in Indonesia.</p>\n<p>Our diverse portfolio of products include: desiccated coconut, coconut cream, coconut milk, coconut water, and coconut gel. Not only made for retail markets, our coconut products are also specialized for Confectionery and Food Industry mainly for added flavor and health ingredient. Our products have already shipped overseas to Asia, Australia, Europe and America.&nbsp;</p>\n<p>&nbsp;</p>', 0, 0, 0, 0, 0, 'english'),
(4, 4, '1999-12-31 10:00:00', '2021-04-28 04:09:27', 0, 1, 1, 1, 4, 'COCONUT BENEFITS', 'APPLICATIONS TO PRODUCTS:', '', 0, 1, 1, 1, 0, 'english'),
(5, 5, '1999-12-31 10:00:00', '2021-04-28 04:09:28', 0, 1, 1, 2, 1, 'ABOUT US', 'Healthy Choice Made By Care. Find Out How We Do It.', '', 0, 1, 1, 0, 0, 'english'),
(6, 6, '1999-12-31 10:00:00', '2021-04-28 04:09:29', 0, 1, 1, 2, 2, 'WHO WE ARE', 'Bringing the Goodness of Nature', '<p>PT. Sari Segar Husada has engaged in coconut processing industry since 1986. We are now one of the biggest coconut product manufacturers in Indonesia.</p>\n<p>Our diverse portfolio of products include: desiccated coconut, coconut cream, coconut milk, coconut water, and coconut gel. Not only made for retail markets, our coconut products are also specialized for Confectionery and Food Industry mainly for added flavor and health ingredient. Our products have already shipped overseas to Asia, Australia, Europe and America.&nbsp;</p>\n<p>As an international company, we maintain our product qualities and product diversifications by complying to international standards. Today, our company is certified with ISO:22000, Kosher, and Halal, making us one of competitive companies recognized by customers around the world.</p>\n<p>We also believe that good products come from great technology. Over the years, we have equipped ourselves in the latest technology from Europe and the USA to create the best product we can provide. We also put high standard on hygiene in our factory to ensure that our product is clean and safe for our customers.</p>\n<p>&nbsp;</p>', 0, 0, 0, 0, 0, 'english'),
(7, 7, '1999-12-31 10:00:00', '2021-04-28 04:09:32', 0, 1, 1, 2, 3, 'OUR VISION AND MISSION', '', '<p>We strive&nbsp;to highlight the goodness of coconut by connecting with valuable partners around the world.</p>\n<p>To achieve this, we promote the healthy state of our product. We extract what is good from the coconut and preserve&nbsp;its natural state by not using added preservatives, food coloring, and artificial flavoring during production process. We dedicate to the best quality we can offer so our end customers can enjoy the ultimate benefit of our products.</p>\n<p>Honesty and integrity are our key values to maintain positive relationship with stakeholders. We listen to our partners and customers\' needs and act accordingly. We also&nbsp;respect the different values our partners might share with us, so we can ensure that mutual benefits could be achieved.</p>\n<p>Social responsibility and sustainability have also been an increased focus for us. We stress the importance of responsible sourcing, while ensuring&nbsp;that our suppliers are treated according to regulations.&nbsp;We want to make us, our suppliers, and our customers to grow together as one.</p>', 1, 0, 0, 0, 0, 'english'),
(8, 8, '1999-12-31 10:00:00', '2021-04-28 04:09:33', 0, 1, 1, 3, 1, 'WHERE DOES DELCOCO START?', 'OUR FARMERS, OUR HEROES', '<p>Every bit of DELCOCO product&nbsp;that ended up on your shelves (or warehouse!) starts under the care of these diligent farmers. They groom the coconuts strictly in a traditional way. We contact farmers all across Sumatra island to help process further their hard-growned coconuts. Thank you farmers, you are our heroes!</p>', 0, 0, 1, 0, 0, 'english'),
(9, 9, '1999-12-31 10:00:00', '2021-04-28 04:09:35', 0, 1, 1, 3, 2, 'SUMATERA ORIGIN', '', '<p>Sumatera is the largest coconut producing island in Indonesia.&nbsp;We are proud to present to you our single-origin coconuts from Sumatera. Statistically in 2015, the Sumatera island alone produced roughly 937,000 Tons of coconuts!</p>', 1, 0, 1, 0, 0, 'english'),
(10, 10, '1999-12-31 10:00:00', '2021-04-28 04:09:36', 0, 1, 1, 3, 3, 'PRESERVING THE EXOTIC WAYS', '', '<p>Very way back then, before machines even invented, farmers used natural ways to transport coconuts. Before mounting the coconuts to the trucks, &nbsp;farmers used cow wagon as a transportation. Other&nbsp;farmers&nbsp;used the river to flow the coconuts all the way to the gathering place. We\'d like to keep it that way, don\'t you agree?</p>', 1, 0, 1, 0, 0, 'english'),
(11, 11, '1999-12-31 10:00:00', '2021-04-28 04:09:37', 0, 1, 1, 3, 4, 'PASSING THROUGH UNDER OUR CARE', '', '<p>Now that the coconuts have arrived at our factory, the estafete staff has passed to us. We pare the hard shells, deshell the soft shells, take the coconut water, and continue the process further in a closely observed area. This is where hygiene standard should be as high as possible. Luckily, certification bodies are there to get us prepared! (FSSC 22000, BRC, Kosher, and Halal)</p>', 1, 0, 1, 0, 0, 'english'),
(12, 12, '1999-12-31 10:00:00', '2021-04-28 04:09:40', 0, 1, 1, 3, 5, 'SAVOUR THE COCONUT FRESHNESS ANYTIME', '', '<p>Our labors have taken the hardest part to help you enjoy the&nbsp;coconut freshness anytime you need!</p>\n<p>Between Desiccated Coconut, Coconut Water, or Coconut Cream, you can enjoy adding the coconut richness flavour to your foods and beverages!</p>', 1, 0, 1, 1, 0, 'english'),
(13, 13, '1999-12-31 10:00:00', '2021-04-28 04:09:42', 0, 1, 1, 3, 6, 'MEET DELCOCO', 'At last, we are very proud to present Delcoco. Let\'s indulge the freshness of the coconut in your very own way. And don\'t forget to share your story with us!', '', 0, 1, 1, 0, 1, 'english'),
(14, 14, '1999-12-31 10:00:00', '2021-04-28 04:09:43', 0, 1, 1, 4, 1, 'OUR RANGE OF PRODUCTS', 'Find your coconut needs here!', '', 0, 1, 1, 0, 0, 'english'),
(15, 15, '1999-12-31 10:00:00', '2021-04-28 04:09:44', 0, 1, 1, 4, 2, 'In Sanskrit, coconuts are called Kalpa Vriksha, which means: the tree that gives all that is necessary for living - Coconut Republic', '', '', 1, 1, 1, 0, 0, 'english'),
(16, 16, '1999-12-31 10:00:00', '2021-04-28 04:09:45', 0, 1, 1, 4, 3, 'OUR PRODUCTS', '', '', 0, 1, 1, 0, 0, 'english'),
(17, 17, '1999-12-31 10:00:00', '2021-04-28 04:09:49', 0, 1, 1, 4, 4, 'OTHER PRODUCT', '', '', 1, 1, 1, 0, 0, 'english'),
(18, 18, '1999-12-31 10:00:00', '2021-04-28 04:09:51', 0, 1, 1, 5, 1, 'OUR RECIPES', 'Learn how to apply coconut ingredients for your favourite food and drink!', '', 0, 1, 1, 0, 0, 'english'),
(19, 19, '1999-12-31 10:00:00', '2021-04-28 04:09:53', 0, 1, 1, 5, 2, 'RELATED RECIPES', '', '', 1, 1, 1, 0, 0, 'english'),
(20, 20, '1999-12-31 10:00:00', '2021-04-28 04:09:55', 0, 1, 1, 6, 1, 'CONTACT US', 'Got Questions? We Got Answers. And Coconuts.', '', 0, 1, 1, 0, 0, 'english'),
(21, 21, '1999-12-31 10:00:00', '2021-04-28 04:09:56', 0, 1, 1, 7, 1, 'FREQUENTLY ASKED QUESTIONS', 'This is Photoshop\'s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.', '', 0, 1, 1, 0, 0, 'english'),
(22, 22, '1999-12-31 10:00:00', '2021-04-28 04:09:58', 0, 1, 1, 8, 1, 'SARI SEGAR HUSADA CAREERS', '', '', 0, 0, 1, 0, 0, 'english'),
(23, 1, '2021-04-27 18:39:13', '2021-04-28 07:05:46', 0, 1, 1, 1, 1, 'Penjelajahan KELAPA mu mulai dari sini!', '', '', 0, 1, 1, 0, 0, 'indonesia'),
(24, 2, '2021-04-27 18:43:20', '2021-04-28 04:14:53', 0, 1, 1, 1, 2, 'Republik Kelapa', 'Dalam bahasa Sansekerta, kelapa disebut Kalpa Vriksha yang artinya: pohon yang memberikan segala yang diperlukan untuk hidup ', '', 0, 1, 1, 0, 0, 'indonesia'),
(25, 3, '2021-04-27 18:46:15', '2021-04-28 04:14:55', 0, 1, 1, 1, 3, 'SIAPA KITA ?', 'Membawa Kebaikan Alam', '<p>PT. Sari Segar Husada telah bergerak di industri pengolahan kelapa sejak 1986. Saat ini kami adalah salah satu produsen produk kelapa terbesar di Indonesia.</p><p>Portofolio produk kami yang beragam meliputi: kelapa kering, krim kelapa, santan, air kelapa, dan gel kelapa. Tidak hanya dibuat untuk pasar retail, produk kelapa kami juga dikhususkan untuk Confectionery dan Industri Makanan terutama untuk tambahan rasa dan bahan kesehatan. Produk kami telah dikirim ke luar negeri ke Asia, Australia, Eropa dan Amerika.&nbsp;</p><p>&nbsp;</p>', 0, 0, 0, 0, 0, 'indonesia'),
(26, 4, '2021-04-27 18:49:40', '2021-04-28 06:57:26', 0, 1, 1, 1, 4, 'MANFAAT KELAPA', 'MENGAPLIKASIKAN KE PRODUK:', '', 0, 1, 1, 1, 0, 'indonesia'),
(27, 5, '2021-04-27 18:52:50', '2021-04-28 06:57:42', 0, 1, 1, 2, 1, 'TENTANG KAMI', 'Pilihan Sehat Dibuat Dengan Perawatan. Cari Tahu Bagaimana Kami Melakukannya.', '', 0, 1, 1, 0, 0, 'indonesia'),
(28, 6, '2021-04-27 18:54:28', '2021-04-28 07:21:47', 0, 1, 1, 2, 2, 'SIAPA KAMI', 'Membawa Kebaikan Alam', '<P>PT. Sari Segar Husada telah bergerak di industri pengolahan kelapa sejak 1986. Saat ini kami adalah salah satu produsen produk kelapa terbesar di Indonesia.</p><p>Portofolio produk kami yang beragam meliputi: kelapa kering, krim kelapa, santan, air kelapa, dan gel kelapa. Tidak hanya dibuat untuk pasar retail, produk kelapa kami juga dikhususkan untuk Confectionery dan Industri Makanan terutama untuk tambahan rasa dan bahan kesehatan. Produk kami telah dikirim ke luar negeri ke Asia, Australia, Eropa dan Amerika.&nbsp;</p><p>Sebagai perusahaan internasional, kami menjaga kualitas produk dan diversifikasi produk dengan memenuhi standar internasional. Saat ini, perusahaan kami bersertifikat ISO: 22000, Kosher, dan Halal, menjadikan kami salah satu perusahaan kompetitif yang diakui oleh pelanggan di seluruh dunia.</p><p>Kami juga percaya bahwa produk yang bagus berasal dari teknologi yang hebat. Selama bertahun-tahun, kami telah melengkapi diri kami dengan teknologi terbaru dari Eropa dan Amerika Serikat untuk menciptakan produk terbaik yang dapat kami sediakan. Kami juga menerapkan standar tinggi pada kebersihan di pabrik kami untuk memastikan bahwa produk kami bersih dan aman bagi pelanggan kami.</p>\r\n<p>&nbsp;</p>', 0, 0, 0, 0, 0, 'indonesia'),
(29, 7, '2021-04-27 19:00:48', '2021-04-28 07:21:44', 0, 1, 1, 2, 3, 'VISI DAN MISI KAMI', '', '<P>Kami berusaha keras&nbsp;untuk menyoroti kebaikan kelapa dengan terhubung dengan mitra berharga di seluruh dunia.</p><p>Untuk mencapai ini, kami mempromosikan produk kami yang sehat. Kami mengekstrak apa yang baik dari kelapa dan mempertahankan&nbsp;keadaan alaminya dengan tidak menggunakan bahan pengawet tambahan, pewarna makanan, dan perasa buatan selama proses produksi. Kami mendedikasikan untuk kualitas terbaik yang dapat kami tawarkan sehingga pelanggan akhir kami dapat menikmati manfaat akhir dari produk kami.</p><p>Kejujuran dan integritas adalah nilai utama kami untuk menjaga hubungan positif dengan pemangku kepentingan. Kami mendengarkan kebutuhan mitra dan pelanggan kami dan bertindak sesuai dengan itu. Kami juga&nbsp;menghormati nilai-nilai berbeda yang mungkin dibagikan mitra kami dengan kami, sehingga kami dapat memastikan bahwa saling menguntungkan dapat dicapai.</p><p>Tanggung jawab sosial dan keberlanjutan juga menjadi fokus yang ditingkatkan bagi kami. Kami menekankan pentingnya pengadaan yang bertanggung jawab, sambil memastikan&nbsp;bahwa pemasok kami diperlakukan sesuai dengan peraturan.&nbsp;Kami ingin menjadikan kami, pemasok, dan pelanggan kami tumbuh bersama sebagai satu kesatuan.</p>', 1, 0, 0, 0, 0, 'indonesia'),
(30, 8, '2021-04-27 19:09:21', '2021-04-27 20:21:35', 0, 1, 1, 3, 1, 'DIMANA DELCOCO DIMULAI?', 'PETANI KAMI, PAHLAWAN KAMI', '<p>Setiap produk DELCOCO&nbsp;yang berakhir di rak Anda (atau gudang!) Dimulai di bawah perawatan para petani yang rajin ini. Mereka merawat kelapa secara ketat dengan cara tradisional. Kami menghubungi petani di seluruh pulau Sumatera untuk membantu memproses lebih lanjut kelapa keras mereka. Terima kasih para petani, Anda adalah pahlawan kami!</p>', 0, 0, 1, 0, 0, 'indonesia'),
(31, 9, '2021-04-27 19:13:07', '2021-04-28 08:27:40', 0, 1, 1, 3, 2, 'ASAL SUMATERA', '', '<p>Sumatera adalah pulau penghasil kelapa terbesar di Indonesia.&nbsp;Kami dengan bangga mempersembahkan kepada Anda kelapa asal Sumatera kami. Secara statistik pada tahun 2015, pulau Sumatera saja menghasilkan sekitar 937.000 Ton kelapa! </p>', 1, 0, 1, 0, 0, 'indonesia'),
(32, 10, '2021-04-27 19:15:49', '2021-04-27 20:21:40', 0, 1, 1, 3, 3, 'MENJAGA CARA EKSPOTIK', '', '<p>Dahulu kala, bahkan sebelum mesin ditemukan, para petani menggunakan cara-cara alami untuk mengangkut kelapa. Sebelum mengangkut kelapa ke truk,&nbsp;para petani menggunakan gerobak sapi sebagai transportasi. Petani&nbsp;lain&nbsp;memanfaatkan sungai untuk mengalirkan kelapa sampai ke tempat berkumpul. Kami ingin tetap seperti itu, bukankah Anda setuju?</p>', 1, 0, 1, 0, 0, 'indonesia'),
(33, 11, '2021-04-27 19:21:28', '2021-04-27 20:21:42', 0, 1, 1, 3, 4, 'MELALUI DI BAWAH PERAWATAN KAMI', '', '<p>Sekarang kelapa telah sampai di pabrik kami, staf estafete telah menyerahkan kepada kami. Kami mengupas cangkang keras, membuang cangkang lunak, mengambil air kelapa, dan melanjutkan proses lebih lanjut di tempat yang diamati dengan cermat. Di sinilah standar kebersihan harus setinggi mungkin. Untungnya, badan sertifikasi ada untuk mempersiapkan kami! (FSSC 22000, BRC, Kosher, dan Halal)</p>', 1, 0, 1, 0, 0, 'indonesia'),
(34, 12, '2021-04-27 19:23:59', '2021-04-28 08:28:38', 0, 1, 1, 3, 5, 'MENIKMATI KELAPA SEGAR KAPAN SAJA ', '', '<p>Tenaga kerja kami telah mengambil bagian tersulit untuk membantu Anda menikmati&nbsp;kesegaran kelapa kapan saja Anda butuhkan!</p><p>Antara Kelapa Kering, Air Kelapa, atau Krim Kelapa, Anda dapat menikmati menambahkan rasa kaya kelapa ke makanan dan minuman Anda!</p>', 1, 0, 1, 1, 0, 'indonesia'),
(35, 13, '2021-04-27 19:27:52', '2021-04-27 20:21:50', 0, 1, 1, 3, 6, 'TEMUI DELCOCO', 'Akhirnya, kami sangat bangga mempersembahkan Delcoco. Mari manjakan diri Anda dengan kesegaran kelapa dengan cara Anda sendiri. Dan jangan lupa untuk berbagi cerita Anda dengan kami!', '', 0, 1, 1, 0, 1, 'indonesia'),
(36, 14, '2021-04-27 19:29:56', '2021-04-27 20:21:52', 0, 1, 1, 4, 1, 'BERBAGAI PRODUK KAMI', 'Temukan kebutuhan kelapa Anda di sini!', '', 0, 1, 1, 0, 0, 'indonesia'),
(37, 15, '2021-04-27 19:35:40', '2021-04-29 04:42:42', 0, 1, 1, 4, 2, 'Dalam bahasa Sansekerta, kelapa disebut Kalpa Vriksha, yang artinya: pohon yang memberikan semua yang diperlukan untuk hidup - Coconut Republic ', '', '', 1, 1, 1, 0, 0, 'indonesia'),
(44, 22, '2021-04-27 19:57:35', '2021-04-27 20:22:20', 0, 1, 1, 8, 1, 'KARIR SARI SEGAR HUSADA', '', '', 0, 0, 1, 0, 0, 'indonesia'),
(38, 16, '2021-04-27 19:41:52', '2021-04-27 20:21:59', 0, 1, 1, 4, 3, 'PRODUK KAMI', '', '', 0, 1, 1, 0, 0, 'indonesia'),
(39, 17, '2021-04-27 19:44:14', '2021-04-27 20:22:03', 0, 1, 1, 4, 4, 'PRODUK LAINNYA', '', '', 1, 1, 1, 0, 0, 'indonesia'),
(40, 18, '2021-04-27 19:45:10', '2021-04-27 20:22:07', 0, 1, 1, 5, 1, 'RESEP KAMI', 'Pelajari cara mengaplikasikan bahan kelapa untuk makanan dan minuman favorit Anda!', '', 0, 1, 1, 0, 0, 'indonesia'),
(41, 19, '2021-04-27 19:46:46', '2021-04-27 20:22:11', 0, 1, 1, 5, 2, 'RESEP TERKAIT', '', '', 1, 1, 1, 0, 0, 'indonesia'),
(42, 20, '2021-04-27 19:53:18', '2021-04-29 04:38:38', 0, 1, 1, 6, 1, 'KONTAK KAMI', 'Punya Pertanyaan? Kami Mendapat Jawaban. Dan Kelapa. ', '', 0, 1, 1, 0, 0, 'indonesia'),
(43, 21, '2021-04-27 19:54:47', '2021-04-29 04:42:36', 0, 1, 1, 7, 1, 'PERTANYAAN YANG SERING DIAJUKAN ', 'ini adalaha versi Photoshop dari Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.', '', 0, 1, 1, 0, 0, 'indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `section_item`
--

CREATE TABLE `section_item` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_section_item` int(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `editable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `author_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `section_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(128) NOT NULL DEFAULT '',
  `title` varchar(128) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `no_image` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `lang` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_item`
--

INSERT INTO `section_item` (`id`, `id_section_item`, `created`, `updated`, `deletable`, `editable`, `author_id`, `section_id`, `name`, `title`, `content`, `no_image`, `lang`) VALUES
(1, 1, '1999-12-31 10:00:00', '2021-04-28 05:02:03', 0, 1, 1, 4, 'motion', 'Coconut Coir', '<p>Floor mats and doormats</p>\n<p>Brushes</p>\n<p>Rope and strings</p>\n<p>Stuffing for mattresses</p>\n<p>Fishing nets</p>', 1, 'english'),
(2, 2, '1999-12-31 10:00:00', '2021-04-28 05:02:05', 0, 1, 1, 4, 'motion', 'Coconut Water & Coconut Meat', '<p>&nbsp;Desiccated Coconut</p>\n<p>Coconut Cream/ Milk</p>\n<p>Coconut Water</p>\n<p>Nata De Coco</p>\n<p>Coconut Oil</p>', 1, 'english'),
(3, 3, '1999-12-31 10:00:00', '2021-04-28 05:02:06', 0, 1, 1, 4, 'motion ', 'Coconut Husk & Shells', '<p class=\"MsoNormal\"><span style=\"font-family: Calibri, sans-serif; font-size: 14.6667px; line-height: 16.8667px;\">Pot for plants</span></p>\n<p class=\"MsoNormal\"><span style=\"font-family: Calibri, sans-serif; font-size: 14.6667px; line-height: 16.8667px;\">Bowls, utensils, and handicrafts</span></p>\n<p class=\"MsoNormal\"><span style=\"font-family: Calibri, sans-serif;\"><span style=\"font-size: 14.6667px;\">Coconut Charcoal</span></span></p>\n<p class=\"MsoNormal\"><span style=\"font-family: Calibri, sans-serif; font-size: 14.6667px; line-height: 16.8667px;\">Activated Carbon</span></p>\n<p class=\"MsoNormal\">&nbsp;</p>', 1, 'english'),
(4, 4, '1999-12-31 10:00:00', '2021-04-28 05:02:08', 0, 1, 1, 4, '', 'Coconut Milk', '', 1, 'english'),
(5, 5, '1999-12-31 10:00:00', '2021-04-28 05:02:09', 0, 1, 1, 4, '', 'Coconut Water', '', 1, 'english'),
(6, 6, '1999-12-31 10:00:00', '2021-04-28 05:02:11', 0, 1, 1, 4, '', 'Desiccated Coconut', '', 1, 'english'),
(7, 7, '1999-12-31 10:00:00', '2021-04-28 05:02:13', 0, 1, 1, 12, '', 'COCONUT OIL', '', 0, 'english'),
(8, 8, '1999-12-31 10:00:00', '2021-04-28 05:02:14', 0, 1, 1, 12, '', 'NATA DE COCO', '', 0, 'english'),
(9, 9, '1999-12-31 10:00:00', '2021-04-28 05:02:15', 0, 1, 1, 12, '', 'DESSICATED COCONUT', '', 0, 'english'),
(10, 1, '2021-04-28 04:47:29', '2021-04-28 05:02:22', 0, 1, 1, 4, 'motion', 'Sabut Kelapa', '<p>Keset lantai dan keset</p>\r\n<p>Kuas</p>\r\n<p>Tali dan senar</p>\r\n<p>Isian untuk kasur</p>\r\n<p>Jaring ikan</p>', 1, 'indonesia'),
(11, 2, '2021-04-28 04:50:02', '2021-04-28 05:02:24', 0, 1, 1, 4, 'motion', 'Air Kelapa & Daging Kelapa', '<p>&nbsp;Kelapa Kering</p>\r\n<p>Krim Kelapa/Susu</p>\r\n<p>Air Kelapa</p>\r\n<p>Nata De Coco</p>\r\n<p>Minyak Kelapa</p>', 1, 'indonesia'),
(12, 3, '2021-04-28 04:51:59', '2021-04-28 05:06:07', 1, 1, 0, 4, 'motion', 'Kulit & Batok Kelapa', '<p class=\"MsoNormal\"><span style=\"font-family: Calibri, sans-serif; font-size: 14.6667px; line-height: 16.8667px;\">Pot untuk tanaman</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Calibri, sans-serif; font-size: 14.6667px; line-height: 16.8667px;\">Mangkuk, perkakas, dan kerajinan tangan</span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Calibri, sans-serif;\"><span style=\"font-size: 14.6667px;\">Arang Kelapa</span></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Calibri, sans-serif; font-size: 14.6667px; line-height: 16.8667px;\">karbon aktif</span></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>', 1, 'indonesia'),
(13, 4, '2021-04-28 04:55:27', '2021-04-28 05:02:27', 0, 1, 1, 4, '', 'Santan', '', 1, 'indonesia'),
(14, 5, '2021-04-28 04:56:19', '2021-04-28 05:02:29', 0, 1, 1, 4, '', 'Air Kelapa', '', 1, 'indonesia'),
(15, 6, '2021-04-28 04:57:01', '2021-04-28 05:02:31', 0, 1, 1, 4, '', 'Kelapa Kering', '', 1, 'indonesia'),
(16, 7, '2021-04-28 04:58:01', '2021-04-28 05:02:32', 0, 1, 1, 12, '', 'MINYAK KELAPA', '', 0, 'indonesia'),
(17, 8, '2021-04-28 04:58:38', '2021-04-28 05:02:34', 0, 1, 1, 12, '', 'NATA DE COCO', '', 0, 'indonesia'),
(18, 9, '2021-04-28 04:59:59', '2021-04-28 05:02:35', 0, 1, 1, 12, '', 'KELAPA DITANGGUNG', '', 0, 'indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `name` varchar(64) NOT NULL DEFAULT '',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `value` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`name`, `updated`, `value`) VALUES
('company_address', '2016-05-19 01:06:07', '<p>&nbsp;Wisma Budi 8th Floor</p><p>Jl. H.R. Rasuna Said Kav C-6</p><p>Kuningan, South Jakarta 12940</p>'),
('company_bbm', '1999-12-31 10:00:00', ''),
('company_email', '2016-05-19 00:47:55', 'info@sarisegarhusada.com'),
('company_fax', '1999-12-31 10:00:00', ''),
('company_line', '1999-12-31 10:00:00', ''),
('company_name', '1999-12-31 10:00:00', 'PT. SARI SEGAR HUSADA'),
('company_opening_hours_weekday_name', '1999-12-31 10:00:00', ''),
('company_opening_hours_weekday_time', '1999-12-31 10:00:00', ''),
('company_opening_hours_weekend_name', '1999-12-31 10:00:00', ''),
('company_opening_hours_weekend_time', '1999-12-31 10:00:00', ''),
('company_opening_time', '1999-12-31 10:00:00', ''),
('company_phone', '2016-05-19 00:47:55', '+62 21 521 3383'),
('company_phone2', '1999-12-31 10:00:00', ''),
('company_recruitment_email', '2019-09-03 21:22:50', 'info@sarisegarhusada.com'),
('company_whatsapp', '1999-12-31 10:00:00', ''),
('setting__limit_page', '1999-12-31 10:00:00', '25'),
('setting__map_latitude', '1999-12-31 10:00:00', ''),
('setting__map_longitude', '1999-12-31 10:00:00', ''),
('setting__social_media_facebook_link', '2016-05-19 01:06:07', 'http://www.facebook.com'),
('setting__social_media_instagram_link', '2016-05-19 01:06:07', 'http://www.instagram.com'),
('setting__social_media_twitter_link', '2016-05-19 01:06:07', 'http://www.twitter.com'),
('setting__social_media_youtube_link', '2016-05-19 01:06:07', 'http://www.instagram.com'),
('setting__system_admin_url', '1999-12-31 10:00:00', ''),
('setting__system_award_link', '1999-12-31 10:00:00', ''),
('setting__system_main_website_url', '1999-12-31 10:00:00', ''),
('setting__system_press_link', '1999-12-31 10:00:00', ''),
('setting__system__url_source', '1999-12-31 10:00:00', ''),
('setting__system__website_contact_us_email', '1999-12-31 10:00:00', ''),
('setting__website_subscribe_on', '1999-12-31 10:00:00', '0'),
('setting__website__header_posititon', '1999-12-31 10:00:00', ''),
('system_company_name', '1999-12-31 10:00:00', 'SARI SEGAR HUSADA'),
('system_copyright', '1999-12-31 10:00:00', '&copy; 2016'),
('system_mac', '1999-12-31 10:00:00', 'ssh_cms'),
('system_product_name', '1999-12-31 10:00:00', 'SSH CMS'),
('system_vendor_name', '1999-12-31 10:00:00', 'Label Ideas & Co.'),
('system_version', '1999-12-31 10:00:00', '1.0.0');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_slideshow` int(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `editable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `author_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(128) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `lang` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `id_slideshow`, `created`, `updated`, `deletable`, `editable`, `author_id`, `title`, `content`, `lang`) VALUES
(1, 1, '2016-05-22 18:35:16', '2021-04-29 02:54:28', 1, 1, 2, 'Sari Segar Husada Recipe', 'This is Photoshop\'s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor', 'english'),
(2, 1, '2021-04-29 02:54:43', '2021-04-29 02:55:28', 1, 1, 2, 'Resep Sari Segar Husada', 'Ini adalah photoshop dari Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor', 'indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(10) UNSIGNED NOT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `editable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `author_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(128) NOT NULL DEFAULT '',
  `email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `created`, `updated`, `deletable`, `editable`, `author_id`, `name`, `email`) VALUES
(1, '2016-05-19 19:34:21', '2016-05-19 19:34:21', 1, 1, 0, '', 'sugianto@labelideas.co'),
(176, '2019-09-12 20:37:03', '2019-09-12 20:37:03', 1, 1, 0, '', ''),
(3, '2016-09-02 01:22:21', '2016-09-02 01:22:21', 1, 1, 0, '', ''),
(4, '2016-09-05 22:23:32', '2016-09-05 22:23:32', 1, 1, 0, '', ''),
(5, '2016-09-08 19:49:27', '2016-09-08 19:49:27', 1, 1, 0, '', ''),
(6, '2016-09-09 20:21:58', '2016-09-09 20:21:58', 1, 1, 0, '', ''),
(7, '2016-09-15 12:04:41', '2016-09-15 12:04:41', 1, 1, 0, '', ''),
(8, '2016-10-18 09:10:45', '2016-10-18 09:10:45', 1, 1, 0, '', ''),
(9, '2016-11-05 12:37:20', '2016-11-05 12:37:20', 1, 1, 0, '', ''),
(10, '2016-11-24 09:01:46', '2016-11-24 09:01:46', 1, 1, 0, '', ''),
(11, '2016-12-06 12:24:50', '2016-12-06 12:24:50', 1, 1, 0, '', ''),
(12, '2016-12-11 00:54:59', '2016-12-11 00:54:59', 1, 1, 0, '', ''),
(13, '2017-01-31 04:15:51', '2017-01-31 04:15:51', 1, 1, 0, '', 'helena.woro@gmail.com'),
(14, '2017-02-08 10:01:43', '2017-02-08 10:01:43', 1, 1, 0, '', ''),
(15, '2017-02-12 01:53:40', '2017-02-12 01:53:40', 1, 1, 0, '', ''),
(16, '2017-04-10 08:52:10', '2017-04-10 08:52:10', 1, 1, 0, '', ''),
(17, '2017-04-11 05:05:06', '2017-04-11 05:05:06', 1, 1, 0, '', ''),
(18, '2017-06-04 07:05:23', '2017-06-04 07:05:23', 1, 1, 0, '', ''),
(19, '2017-06-05 12:36:19', '2017-06-05 12:36:19', 1, 1, 0, '', ''),
(20, '2017-07-06 00:12:47', '2017-07-06 00:12:47', 1, 1, 0, '', 'trade@chamundayinternational.com'),
(21, '2017-07-19 06:12:33', '2017-07-19 06:12:33', 1, 1, 0, '', 'paralia.andrew@optusnet.com.au'),
(22, '2017-07-21 22:19:39', '2017-07-21 22:19:39', 1, 1, 0, '', 'ariska.tarigan@gmail.com'),
(23, '2017-07-22 00:21:01', '2017-07-22 00:21:01', 1, 1, 0, '', 'sureshkumartj@yahoo.com'),
(24, '2017-07-24 05:48:49', '2017-07-24 05:48:49', 1, 1, 0, '', 'teguhsubagiyo@ymail.com'),
(25, '2017-08-15 03:52:23', '2017-08-15 03:52:23', 1, 1, 0, '', ''),
(26, '2017-08-16 08:02:54', '2017-08-16 08:02:54', 1, 1, 0, '', ''),
(27, '2017-09-11 04:42:19', '2017-09-11 04:42:19', 1, 1, 0, '', ''),
(28, '2017-09-15 21:36:31', '2017-09-15 21:36:31', 1, 1, 0, '', ''),
(29, '2017-09-17 01:03:20', '2017-09-17 01:03:20', 1, 1, 0, '', ''),
(30, '2017-09-18 20:46:36', '2017-09-18 20:46:36', 1, 1, 0, '', ''),
(31, '2017-09-25 03:24:46', '2017-09-25 03:24:46', 1, 1, 0, '', ''),
(32, '2017-09-28 02:17:35', '2017-09-28 02:17:35', 1, 1, 0, '', ''),
(33, '2017-09-29 12:46:27', '2017-09-29 12:46:27', 1, 1, 0, '', 'ppbossay@gmail.com'),
(34, '2017-09-29 12:46:27', '2017-09-29 12:46:27', 1, 1, 0, '', 'ppbossay@gmail.com'),
(35, '2017-09-29 17:24:53', '2017-09-29 17:24:53', 1, 1, 0, '', 'Intanfitria23@gmail.com'),
(36, '2017-10-09 00:05:51', '2017-10-09 00:05:51', 1, 1, 0, '', 'Frengkysbolon@gmail.com'),
(37, '2017-10-11 07:20:46', '2017-10-11 07:20:46', 1, 1, 0, '', 'Faisal.spr82013@gmail.com'),
(38, '2017-11-15 19:06:11', '2017-11-15 19:06:11', 1, 1, 0, '', 'bimaputerasetiawan329@yahoo.co.id'),
(39, '2017-12-06 05:32:25', '2017-12-06 05:32:25', 1, 1, 0, '', ''),
(40, '2017-12-11 19:02:36', '2017-12-11 19:02:36', 1, 1, 0, '', 'hussam_19860@yahoo.com'),
(41, '2017-12-14 08:19:40', '2017-12-14 08:19:40', 1, 1, 0, '', 'aldy679@gmail.com'),
(42, '2017-12-26 11:32:26', '2017-12-26 11:32:26', 1, 1, 0, '', ''),
(43, '2017-12-26 11:34:20', '2017-12-26 11:34:20', 1, 1, 0, '', ''),
(44, '2018-01-01 04:46:06', '2018-01-01 04:46:06', 1, 1, 0, '', ''),
(45, '2018-01-02 05:42:14', '2018-01-02 05:42:14', 1, 1, 0, '', ''),
(46, '2018-02-16 02:12:10', '2018-02-16 02:12:10', 1, 1, 0, '', 'Benysufrianto1997@gmail.com'),
(47, '2018-02-22 23:07:17', '2018-02-22 23:07:17', 1, 1, 0, '', 'tridoyoafit11@gmail.com'),
(48, '2018-03-21 04:20:44', '2018-03-21 04:20:44', 1, 1, 0, '', 'nico.corrado@gmail.com'),
(49, '2018-03-21 20:26:42', '2018-03-21 20:26:42', 1, 1, 0, '', 'eba.marketing4@yahoo.com'),
(50, '2018-04-14 12:19:23', '2018-04-14 12:19:23', 1, 1, 0, '', ''),
(51, '2018-04-25 07:38:12', '2018-04-25 07:38:12', 1, 1, 0, '', 'orestis1@cytanet.com.cy'),
(52, '2018-05-01 04:03:52', '2018-05-01 04:03:52', 1, 1, 0, '', ''),
(53, '2018-05-06 08:14:08', '2018-05-06 08:14:08', 1, 1, 0, '', ''),
(54, '2018-05-14 14:36:16', '2018-05-14 14:36:16', 1, 1, 0, '', 'nfo@sarisegarhusada.com'),
(55, '2018-05-19 14:07:12', '2018-05-19 14:07:12', 1, 1, 0, '', ''),
(56, '2018-05-19 14:08:28', '2018-05-19 14:08:28', 1, 1, 0, '', ''),
(57, '2018-05-21 20:58:57', '2018-05-21 20:58:57', 1, 1, 0, '', 'richard@chemoscience.co.id'),
(58, '2018-06-13 09:05:53', '2018-06-13 09:05:53', 1, 1, 0, '', 'Nibohimport@yahoo.com'),
(59, '2018-06-14 19:30:54', '2018-06-14 19:30:54', 1, 1, 0, '', ''),
(60, '2018-07-10 17:41:35', '2018-07-10 17:41:35', 1, 1, 0, '', ''),
(61, '2018-07-15 19:33:47', '2018-07-15 19:33:47', 1, 1, 0, '', ''),
(62, '2018-07-23 16:09:32', '2018-07-23 16:09:32', 1, 1, 0, '', ''),
(63, '2018-07-26 00:41:34', '2018-07-26 00:41:34', 1, 1, 0, '', 'sahraparke961@gmail.com'),
(64, '2018-07-27 11:47:57', '2018-07-27 11:47:57', 1, 1, 0, '', ''),
(65, '2018-08-15 20:29:41', '2018-08-15 20:29:41', 1, 1, 0, '', 'afaiz1619@gmail.com'),
(66, '2018-08-16 04:21:03', '2018-08-16 04:21:03', 1, 1, 0, '', ''),
(67, '2018-09-01 00:10:52', '2018-09-01 00:10:52', 1, 1, 0, '', ''),
(68, '2018-09-09 23:04:58', '2018-09-09 23:04:58', 1, 1, 0, '', ''),
(69, '2018-09-18 23:59:44', '2018-09-18 23:59:44', 1, 1, 0, '', 'sifu-purchase@sifushangmao.com'),
(70, '2018-09-25 05:11:00', '2018-09-25 05:11:00', 1, 1, 0, '', 'Kem@kem-EU.he'),
(71, '2018-09-25 23:49:05', '2018-09-25 23:49:05', 1, 1, 0, '', 'cameron@tmduche.com'),
(72, '2018-10-06 09:47:36', '2018-10-06 09:47:36', 1, 1, 0, '', ''),
(73, '2018-10-06 09:48:49', '2018-10-06 09:48:49', 1, 1, 0, '', ''),
(74, '2018-10-15 16:37:22', '2018-10-15 16:37:22', 1, 1, 0, '', ''),
(75, '2018-10-15 23:51:16', '2018-10-15 23:51:16', 1, 1, 0, '', 'dian.putri40@gmail.com'),
(76, '2018-11-12 12:06:39', '2018-11-12 12:06:39', 1, 1, 0, '', 'triprmst@gmail.com'),
(77, '2018-11-20 07:15:12', '2018-11-20 07:15:12', 1, 1, 0, '', ''),
(78, '2018-11-20 07:15:34', '2018-11-20 07:15:34', 1, 1, 0, '', ''),
(79, '2018-11-20 07:15:55', '2018-11-20 07:15:55', 1, 1, 0, '', ''),
(80, '2018-11-20 07:21:49', '2018-11-20 07:21:49', 1, 1, 0, '', ''),
(81, '2018-11-20 07:22:18', '2018-11-20 07:22:18', 1, 1, 0, '', ''),
(82, '2018-11-20 07:29:27', '2018-11-20 07:29:27', 1, 1, 0, '', ''),
(83, '2018-11-20 07:31:46', '2018-11-20 07:31:46', 1, 1, 0, '', ''),
(84, '2018-11-20 07:32:09', '2018-11-20 07:32:09', 1, 1, 0, '', ''),
(85, '2018-11-20 07:32:33', '2018-11-20 07:32:33', 1, 1, 0, '', ''),
(86, '2018-11-20 07:32:53', '2018-11-20 07:32:53', 1, 1, 0, '', ''),
(87, '2018-11-20 07:32:53', '2018-11-20 07:32:53', 1, 1, 0, '', ''),
(88, '2018-11-20 19:57:38', '2018-11-20 19:57:38', 1, 1, 0, '', 'mkhan9432@yahoo.com'),
(89, '2018-11-23 19:35:50', '2018-11-23 19:35:50', 1, 1, 0, '', 'Gustafharyanto@gmail.com'),
(90, '2018-12-10 03:06:28', '2018-12-10 03:06:28', 1, 1, 0, '', 'amyfitriani35@gmail.com'),
(91, '2018-12-24 00:12:03', '2018-12-24 00:12:03', 1, 1, 0, '', ''),
(92, '2018-12-24 00:12:03', '2018-12-24 00:12:03', 1, 1, 0, '', ''),
(93, '2019-01-02 22:22:07', '2019-01-02 22:22:07', 1, 1, 0, '', 'rizamuhammad332415@gmail.com'),
(94, '2019-01-04 19:27:33', '2019-01-04 19:27:33', 1, 1, 0, '', ''),
(95, '2019-01-04 21:43:29', '2019-01-04 21:43:29', 1, 1, 0, '', 'sisiliawidiyaastuti@gmail.com'),
(96, '2019-01-06 03:36:14', '2019-01-06 03:36:14', 1, 1, 0, '', ''),
(97, '2019-01-14 21:02:10', '2019-01-14 21:02:10', 1, 1, 0, '', 'uron.salum@gmail.com'),
(98, '2019-01-23 17:56:03', '2019-01-23 17:56:03', 1, 1, 0, '', 'info@gruporodrigo.com.do'),
(99, '2019-01-24 11:57:07', '2019-01-24 11:57:07', 1, 1, 0, '', ''),
(100, '2019-02-09 00:14:04', '2019-02-09 00:14:04', 1, 1, 0, '', '1990.vhie.rank@gmail.com'),
(101, '2019-02-11 05:28:52', '2019-02-11 05:28:52', 1, 1, 0, '', 'Alfajridina@gmail.com'),
(102, '2019-02-14 00:30:44', '2019-02-14 00:30:44', 1, 1, 0, '', 'essayad12@hotmail.com'),
(103, '2019-02-17 07:28:25', '2019-02-17 07:28:25', 1, 1, 0, '', ''),
(104, '2019-03-02 20:17:09', '2019-03-02 20:17:09', 1, 1, 0, '', ''),
(105, '2019-03-02 20:17:41', '2019-03-02 20:17:41', 1, 1, 0, '', ''),
(106, '2019-03-10 10:36:16', '2019-03-10 10:36:16', 1, 1, 0, '', ''),
(107, '2019-04-08 05:05:53', '2019-04-08 05:05:53', 1, 1, 0, '', 'purchasing.t.prestizh@gmail.com'),
(108, '2019-04-11 11:00:13', '2019-04-11 11:00:13', 1, 1, 0, '', 'neudsodias@gmail.com'),
(109, '2019-04-12 02:32:24', '2019-04-12 02:32:24', 1, 1, 0, '', ''),
(110, '2019-04-12 02:33:40', '2019-04-12 02:33:40', 1, 1, 0, '', ''),
(111, '2019-04-12 02:35:11', '2019-04-12 02:35:11', 1, 1, 0, '', ''),
(112, '2019-04-12 02:36:29', '2019-04-12 02:36:29', 1, 1, 0, '', ''),
(113, '2019-04-12 02:39:27', '2019-04-12 02:39:27', 1, 1, 0, '', ''),
(114, '2019-04-12 02:42:00', '2019-04-12 02:42:00', 1, 1, 0, '', ''),
(115, '2019-04-12 02:47:52', '2019-04-12 02:47:52', 1, 1, 0, '', ''),
(116, '2019-04-12 02:51:15', '2019-04-12 02:51:15', 1, 1, 0, '', ''),
(117, '2019-04-12 02:53:03', '2019-04-12 02:53:03', 1, 1, 0, '', ''),
(118, '2019-04-12 02:54:38', '2019-04-12 02:54:38', 1, 1, 0, '', ''),
(119, '2019-04-12 02:55:50', '2019-04-12 02:55:50', 1, 1, 0, '', ''),
(120, '2019-04-12 02:55:54', '2019-04-12 02:55:54', 1, 1, 0, '', ''),
(121, '2019-04-12 02:57:03', '2019-04-12 02:57:03', 1, 1, 0, '', ''),
(122, '2019-04-12 02:57:57', '2019-04-12 02:57:57', 1, 1, 0, '', ''),
(123, '2019-04-12 02:59:12', '2019-04-12 02:59:12', 1, 1, 0, '', ''),
(124, '2019-05-03 03:14:53', '2019-05-03 03:14:53', 1, 1, 0, '', 'madarsana@gmail.com'),
(125, '2019-05-21 08:14:48', '2019-05-21 08:14:48', 1, 1, 0, '', 'amira.hamidah@gmail.com'),
(126, '2019-05-31 05:02:28', '2019-05-31 05:02:28', 1, 1, 0, '', '389453959@qq.com'),
(127, '2019-06-03 03:38:54', '2019-06-03 03:38:54', 1, 1, 0, '', '22485425@qq.com'),
(128, '2019-06-09 19:24:31', '2019-06-09 19:24:31', 1, 1, 0, '', '987933695@qq.com'),
(129, '2019-06-28 17:14:59', '2019-06-28 17:14:59', 1, 1, 0, '', ''),
(130, '2019-06-28 17:15:11', '2019-06-28 17:15:11', 1, 1, 0, '', ''),
(131, '2019-06-28 17:15:27', '2019-06-28 17:15:27', 1, 1, 0, '', ''),
(132, '2019-06-28 17:15:39', '2019-06-28 17:15:39', 1, 1, 0, '', ''),
(133, '2019-06-28 17:16:03', '2019-06-28 17:16:03', 1, 1, 0, '', ''),
(134, '2019-06-28 17:16:23', '2019-06-28 17:16:23', 1, 1, 0, '', ''),
(135, '2019-06-28 17:17:29', '2019-06-28 17:17:29', 1, 1, 0, '', ''),
(136, '2019-06-28 17:17:58', '2019-06-28 17:17:58', 1, 1, 0, '', ''),
(137, '2019-06-28 17:18:10', '2019-06-28 17:18:10', 1, 1, 0, '', ''),
(138, '2019-06-28 17:18:23', '2019-06-28 17:18:23', 1, 1, 0, '', ''),
(139, '2019-06-28 17:18:40', '2019-06-28 17:18:40', 1, 1, 0, '', ''),
(140, '2019-06-28 17:18:41', '2019-06-28 17:18:41', 1, 1, 0, '', ''),
(141, '2019-07-02 19:39:59', '2019-07-02 19:39:59', 1, 1, 0, '', ''),
(142, '2019-07-02 19:40:50', '2019-07-02 19:40:50', 1, 1, 0, '', ''),
(143, '2019-07-02 19:41:25', '2019-07-02 19:41:25', 1, 1, 0, '', ''),
(144, '2019-07-02 19:41:59', '2019-07-02 19:41:59', 1, 1, 0, '', ''),
(145, '2019-07-02 19:49:06', '2019-07-02 19:49:06', 1, 1, 0, '', ''),
(146, '2019-07-02 19:49:59', '2019-07-02 19:49:59', 1, 1, 0, '', ''),
(147, '2019-07-02 20:03:13', '2019-07-02 20:03:13', 1, 1, 0, '', ''),
(148, '2019-07-02 20:22:43', '2019-07-02 20:22:43', 1, 1, 0, '', ''),
(149, '2019-07-02 20:23:17', '2019-07-02 20:23:17', 1, 1, 0, '', ''),
(150, '2019-07-02 20:28:55', '2019-07-02 20:28:55', 1, 1, 0, '', ''),
(151, '2019-07-02 20:28:57', '2019-07-02 20:28:57', 1, 1, 0, '', ''),
(152, '2019-07-07 21:17:18', '2019-07-07 21:17:18', 1, 1, 0, '', ''),
(153, '2019-07-07 21:17:31', '2019-07-07 21:17:31', 1, 1, 0, '', ''),
(154, '2019-07-07 21:17:50', '2019-07-07 21:17:50', 1, 1, 0, '', ''),
(155, '2019-07-07 21:18:10', '2019-07-07 21:18:10', 1, 1, 0, '', ''),
(156, '2019-07-07 21:18:41', '2019-07-07 21:18:41', 1, 1, 0, '', ''),
(157, '2019-07-07 21:19:07', '2019-07-07 21:19:07', 1, 1, 0, '', ''),
(158, '2019-07-07 21:20:39', '2019-07-07 21:20:39', 1, 1, 0, '', ''),
(159, '2019-07-07 21:21:10', '2019-07-07 21:21:10', 1, 1, 0, '', ''),
(160, '2019-07-07 21:21:24', '2019-07-07 21:21:24', 1, 1, 0, '', ''),
(161, '2019-07-07 21:21:39', '2019-07-07 21:21:39', 1, 1, 0, '', ''),
(162, '2019-07-07 21:21:50', '2019-07-07 21:21:50', 1, 1, 0, '', ''),
(163, '2019-07-07 21:21:53', '2019-07-07 21:21:53', 1, 1, 0, '', ''),
(164, '2019-07-17 11:51:10', '2019-07-17 11:51:10', 1, 1, 0, '', ''),
(165, '2019-07-18 03:06:57', '2019-07-18 03:06:57', 1, 1, 0, '', ''),
(166, '2019-07-22 03:16:29', '2019-07-22 03:16:29', 1, 1, 0, '', ''),
(167, '2019-07-30 13:50:16', '2019-07-30 13:50:16', 1, 1, 0, '', 'jeff@chicago-consulting.com'),
(168, '2019-08-12 18:41:15', '2019-08-12 18:41:15', 1, 1, 0, '', 'ronikembaren99@gmail.com'),
(169, '2019-08-14 22:51:55', '2019-08-14 22:51:55', 1, 1, 0, '', ''),
(170, '2019-08-24 23:59:35', '2019-08-24 23:59:35', 1, 1, 0, '', ''),
(171, '2019-08-25 00:00:40', '2019-08-25 00:00:40', 1, 1, 0, '', ''),
(172, '2019-08-26 07:17:21', '2019-08-26 07:17:21', 1, 1, 0, '', 'renata@avicennafood.com'),
(173, '2019-08-29 03:54:07', '2019-08-29 03:54:07', 1, 1, 0, '', ''),
(174, '2019-08-29 12:42:01', '2019-08-29 12:42:01', 1, 1, 0, '', ''),
(175, '2019-09-01 20:29:32', '2019-09-01 20:29:32', 1, 1, 0, '', 'Arshidrahman6@gmail.com'),
(177, '2019-09-15 19:44:18', '2019-09-15 19:44:18', 1, 1, 0, '', ''),
(178, '2019-09-15 19:44:46', '2019-09-15 19:44:46', 1, 1, 0, '', ''),
(179, '2019-09-15 19:45:13', '2019-09-15 19:45:13', 1, 1, 0, '', ''),
(180, '2019-09-15 19:46:02', '2019-09-15 19:46:02', 1, 1, 0, '', ''),
(181, '2019-09-15 19:46:37', '2019-09-15 19:46:37', 1, 1, 0, '', ''),
(182, '2019-09-15 19:47:44', '2019-09-15 19:47:44', 1, 1, 0, '', ''),
(183, '2019-09-15 19:50:05', '2019-09-15 19:50:05', 1, 1, 0, '', ''),
(184, '2019-09-15 19:50:26', '2019-09-15 19:50:26', 1, 1, 0, '', ''),
(185, '2019-09-15 19:50:46', '2019-09-15 19:50:46', 1, 1, 0, '', ''),
(186, '2019-09-15 19:51:03', '2019-09-15 19:51:03', 1, 1, 0, '', ''),
(188, '2019-10-09 18:26:02', '2019-10-09 18:26:02', 1, 1, 0, '', ''),
(189, '2019-10-11 13:13:23', '2019-10-11 13:13:23', 1, 1, 0, '', ''),
(190, '2019-10-15 19:39:24', '2019-10-15 19:39:24', 1, 1, 0, '', ''),
(191, '2019-10-22 13:06:48', '2019-10-22 13:06:48', 1, 1, 0, '', 'usman120888@gmail.com'),
(192, '2019-10-29 20:18:27', '2019-10-29 20:18:27', 1, 1, 0, '', ''),
(193, '2019-10-30 08:30:01', '2019-10-30 08:30:01', 1, 1, 0, '', ''),
(194, '2019-10-31 06:02:58', '2019-10-31 06:02:58', 1, 1, 0, '', ''),
(195, '2019-11-01 17:09:41', '2019-11-01 17:09:41', 1, 1, 0, '', 'binimanagroalliedindsltd@yahoo.com'),
(196, '2019-11-25 03:16:58', '2019-11-25 03:16:58', 1, 1, 0, '', 'glauciok@hotmail.com'),
(197, '2019-11-25 07:13:34', '2019-11-25 07:13:34', 1, 1, 0, '', 'reskyvictorius04@gmail.com'),
(198, '2019-11-28 17:13:11', '2019-11-28 17:13:11', 1, 1, 0, '', ''),
(199, '2019-12-05 02:18:54', '2019-12-05 02:18:54', 1, 1, 0, '', ''),
(200, '2019-12-05 02:19:07', '2019-12-05 02:19:07', 1, 1, 0, '', ''),
(201, '2019-12-05 02:19:35', '2019-12-05 02:19:35', 1, 1, 0, '', ''),
(202, '2019-12-05 02:19:56', '2019-12-05 02:19:56', 1, 1, 0, '', ''),
(203, '2019-12-05 02:20:43', '2019-12-05 02:20:43', 1, 1, 0, '', ''),
(204, '2019-12-05 02:21:05', '2019-12-05 02:21:05', 1, 1, 0, '', ''),
(205, '2019-12-05 02:22:05', '2019-12-05 02:22:05', 1, 1, 0, '', ''),
(206, '2019-12-05 02:24:17', '2019-12-05 02:24:17', 1, 1, 0, '', ''),
(207, '2019-12-05 02:24:31', '2019-12-05 02:24:31', 1, 1, 0, '', ''),
(208, '2019-12-05 02:24:46', '2019-12-05 02:24:46', 1, 1, 0, '', ''),
(209, '2019-12-05 02:25:04', '2019-12-05 02:25:04', 1, 1, 0, '', ''),
(210, '2019-12-05 02:25:04', '2019-12-05 02:25:04', 1, 1, 0, '', ''),
(211, '2019-12-07 04:21:51', '2019-12-07 04:21:51', 1, 1, 0, '', 'sumurungparasian@gmail.com'),
(212, '2019-12-11 09:15:56', '2019-12-11 09:15:56', 1, 1, 0, '', ''),
(213, '2019-12-11 09:16:39', '2019-12-11 09:16:39', 1, 1, 0, '', ''),
(214, '2019-12-11 09:17:42', '2019-12-11 09:17:42', 1, 1, 0, '', ''),
(215, '2019-12-11 09:18:17', '2019-12-11 09:18:17', 1, 1, 0, '', ''),
(216, '2019-12-11 09:20:20', '2019-12-11 09:20:20', 1, 1, 0, '', ''),
(217, '2019-12-11 09:21:41', '2019-12-11 09:21:41', 1, 1, 0, '', ''),
(218, '2019-12-11 09:23:36', '2019-12-11 09:23:36', 1, 1, 0, '', ''),
(219, '2019-12-11 09:25:54', '2019-12-11 09:25:54', 1, 1, 0, '', ''),
(220, '2019-12-11 09:27:15', '2019-12-11 09:27:15', 1, 1, 0, '', ''),
(221, '2019-12-11 09:28:08', '2019-12-11 09:28:08', 1, 1, 0, '', ''),
(222, '2019-12-11 09:28:53', '2019-12-11 09:28:53', 1, 1, 0, '', ''),
(223, '2019-12-11 09:28:55', '2019-12-11 09:28:55', 1, 1, 0, '', ''),
(224, '2019-12-11 18:46:07', '2019-12-11 18:46:07', 1, 1, 0, '', ''),
(225, '2019-12-11 18:46:25', '2019-12-11 18:46:25', 1, 1, 0, '', ''),
(226, '2019-12-11 18:46:41', '2019-12-11 18:46:41', 1, 1, 0, '', ''),
(227, '2019-12-11 18:46:58', '2019-12-11 18:46:58', 1, 1, 0, '', ''),
(228, '2019-12-11 18:47:33', '2019-12-11 18:47:33', 1, 1, 0, '', ''),
(229, '2019-12-11 18:48:08', '2019-12-11 18:48:08', 1, 1, 0, '', ''),
(230, '2019-12-11 18:49:38', '2019-12-11 18:49:38', 1, 1, 0, '', ''),
(231, '2019-12-11 18:50:19', '2019-12-11 18:50:19', 1, 1, 0, '', ''),
(232, '2019-12-11 18:50:38', '2019-12-11 18:50:38', 1, 1, 0, '', ''),
(233, '2019-12-11 18:50:53', '2019-12-11 18:50:53', 1, 1, 0, '', ''),
(234, '2019-12-11 18:52:13', '2019-12-11 18:52:13', 1, 1, 0, '', ''),
(235, '2019-12-11 18:52:14', '2019-12-11 18:52:14', 1, 1, 0, '', ''),
(236, '2020-01-07 19:41:02', '2020-01-07 19:41:02', 1, 1, 0, '', ''),
(237, '2020-01-07 19:41:21', '2020-01-07 19:41:21', 1, 1, 0, '', ''),
(238, '2020-01-14 00:15:41', '2020-01-14 00:15:41', 1, 1, 0, '', ''),
(239, '2020-01-14 00:17:08', '2020-01-14 00:17:08', 1, 1, 0, '', ''),
(240, '2020-01-15 06:51:21', '2020-01-15 06:51:21', 1, 1, 0, '', 'astandik.sky@gmail.com'),
(241, '2020-02-06 11:05:33', '2020-02-06 11:05:33', 1, 1, 0, '', ''),
(242, '2020-02-08 20:46:36', '2020-02-08 20:46:36', 1, 1, 0, '', ''),
(243, '2020-02-14 06:56:56', '2020-02-14 06:56:56', 1, 1, 0, '', ''),
(244, '2020-02-14 18:56:39', '2020-02-14 18:56:39', 1, 1, 0, '', ''),
(245, '2020-02-24 11:05:32', '2020-02-24 11:05:32', 1, 1, 0, '', ''),
(246, '2020-02-25 20:04:51', '2020-02-25 20:04:51', 1, 1, 0, '', ''),
(247, '2020-03-05 23:46:29', '2020-03-05 23:46:29', 1, 1, 0, '', ''),
(248, '2020-03-10 06:08:48', '2020-03-10 06:08:48', 1, 1, 0, '', ''),
(249, '2020-03-11 23:55:15', '2020-03-11 23:55:15', 1, 1, 0, '', 'edi.m@maxindojayagemilang.co.id'),
(250, '2020-03-14 16:05:59', '2020-03-14 16:05:59', 1, 1, 0, '', ''),
(251, '2020-03-23 15:33:00', '2020-03-23 15:33:00', 1, 1, 0, '', ''),
(252, '2020-03-25 00:48:19', '2020-03-25 00:48:19', 1, 1, 0, '', ''),
(253, '2020-04-01 18:09:39', '2020-04-01 18:09:39', 1, 1, 0, '', ''),
(254, '2020-04-03 02:20:49', '2020-04-03 02:20:49', 1, 1, 0, '', ''),
(255, '2020-04-12 13:28:50', '2020-04-12 13:28:50', 1, 1, 0, '', ''),
(256, '2020-04-18 00:10:50', '2020-04-18 00:10:50', 1, 1, 0, '', 'arygunawan.5656@gmail.com'),
(257, '2020-05-21 15:33:13', '2020-05-21 15:33:13', 1, 1, 0, '', ''),
(258, '2020-05-21 15:33:40', '2020-05-21 15:33:40', 1, 1, 0, '', ''),
(259, '2020-05-26 02:46:18', '2020-05-26 02:46:18', 1, 1, 0, '', 'pawanbargaway@gmail.com'),
(260, '2020-07-06 11:46:21', '2020-07-06 11:46:21', 1, 1, 0, '', 'indriani.vera1900@gmail.com'),
(261, '2020-07-09 04:41:57', '2020-07-09 04:41:57', 1, 1, 0, '', ''),
(262, '2020-07-10 07:24:19', '2020-07-10 07:24:19', 1, 1, 0, '', ''),
(263, '2020-07-13 22:29:33', '2020-07-13 22:29:33', 1, 1, 0, '', ''),
(264, '2020-07-23 03:52:55', '2020-07-23 03:52:55', 1, 1, 0, '', 'Info@sarisegarhusada.com'),
(265, '2020-07-29 00:16:07', '2020-07-29 00:16:07', 1, 1, 0, '', 'fenton.salim@gmail.com'),
(266, '2020-07-29 09:07:11', '2020-07-29 09:07:11', 1, 1, 0, '', 'ariestris@gmail.com'),
(267, '2020-08-01 02:06:17', '2020-08-01 02:06:17', 1, 1, 0, '', 'oca_softness@yahoo.con'),
(268, '2020-08-08 00:41:19', '2020-08-08 00:41:19', 1, 1, 0, '', 'regpalupi@gmail.com'),
(269, '2020-08-12 00:28:40', '2020-08-12 00:28:40', 1, 1, 0, '', ''),
(270, '2020-08-12 21:05:30', '2020-08-12 21:05:30', 1, 1, 0, '', ''),
(271, '2020-08-13 06:01:39', '2020-08-13 06:01:39', 1, 1, 0, '', ''),
(272, '2020-08-13 23:52:41', '2020-08-13 23:52:41', 1, 1, 0, '', 'rico.saputra1512@gmail.com'),
(273, '2020-09-23 16:26:38', '2020-09-23 16:26:38', 1, 1, 0, '', ''),
(274, '2020-09-24 06:40:14', '2020-09-24 06:40:14', 1, 1, 0, '', ''),
(275, '2020-09-25 04:42:47', '2020-09-25 04:42:47', 1, 1, 0, '', 'aziz_50@yahoo.com'),
(276, '2020-10-16 14:12:49', '2020-10-16 14:12:49', 1, 1, 0, '', ''),
(277, '2020-10-16 14:12:55', '2020-10-16 14:12:55', 1, 1, 0, '', ''),
(278, '2020-10-16 14:13:04', '2020-10-16 14:13:04', 1, 1, 0, '', ''),
(279, '2020-10-16 14:13:13', '2020-10-16 14:13:13', 1, 1, 0, '', ''),
(280, '2020-10-16 14:13:25', '2020-10-16 14:13:25', 1, 1, 0, '', ''),
(281, '2020-10-16 14:13:37', '2020-10-16 14:13:37', 1, 1, 0, '', ''),
(282, '2020-10-16 14:14:08', '2020-10-16 14:14:08', 1, 1, 0, '', ''),
(283, '2020-10-16 14:14:24', '2020-10-16 14:14:24', 1, 1, 0, '', ''),
(284, '2020-10-16 14:14:33', '2020-10-16 14:14:33', 1, 1, 0, '', ''),
(285, '2020-10-16 14:14:43', '2020-10-16 14:14:43', 1, 1, 0, '', ''),
(286, '2020-10-16 14:14:50', '2020-10-16 14:14:50', 1, 1, 0, '', ''),
(287, '2020-10-16 14:14:50', '2020-10-16 14:14:50', 1, 1, 0, '', ''),
(288, '2020-10-19 00:34:03', '2020-10-19 00:34:03', 1, 1, 0, '', ''),
(289, '2020-10-23 00:32:01', '2020-10-23 00:32:01', 1, 1, 0, '', ''),
(290, '2020-10-23 00:32:02', '2020-10-23 00:32:02', 1, 1, 0, '', ''),
(291, '2020-10-28 04:25:43', '2020-10-28 04:25:43', 1, 1, 0, '', ''),
(292, '2020-10-30 01:09:48', '2020-10-30 01:09:48', 1, 1, 0, '', ''),
(293, '2020-10-30 01:09:49', '2020-10-30 01:09:49', 1, 1, 0, '', ''),
(294, '2020-11-03 22:58:56', '2020-11-03 22:58:56', 1, 1, 0, '', 'haricahyono253@yahoo.com'),
(295, '2020-11-08 21:18:38', '2020-11-08 21:18:38', 1, 1, 0, '', ''),
(296, '2020-11-08 21:18:39', '2020-11-08 21:18:39', 1, 1, 0, '', ''),
(297, '2020-11-11 12:11:10', '2020-11-11 12:11:10', 1, 1, 0, '', ''),
(298, '2020-11-12 22:20:46', '2020-11-12 22:20:46', 1, 1, 0, '', 'deniswiraadelia12@gmail.com'),
(299, '2020-11-16 20:35:11', '2020-11-16 20:35:11', 1, 1, 0, '', 'eduardianwar@gmail.com'),
(300, '2020-11-17 02:42:33', '2020-11-17 02:42:33', 1, 1, 0, '', 'tomchik.nuscoconuts@gmail.com'),
(301, '2020-11-19 23:47:28', '2020-11-19 23:47:28', 1, 1, 0, '', 'wekanet@cbn.net.id'),
(302, '2020-11-24 22:17:40', '2020-11-24 22:17:40', 1, 1, 0, '', ''),
(303, '2020-11-24 22:17:41', '2020-11-24 22:17:41', 1, 1, 0, '', ''),
(304, '2020-11-24 22:17:41', '2020-11-24 22:17:41', 1, 1, 0, '', ''),
(305, '2020-11-24 22:17:44', '2020-11-24 22:17:44', 1, 1, 0, '', ''),
(306, '2020-12-21 17:29:57', '2020-12-21 17:29:57', 1, 1, 0, '', ''),
(307, '2020-12-30 16:09:37', '2020-12-30 16:09:37', 1, 1, 0, '', ''),
(308, '2021-01-02 12:12:58', '2021-01-02 12:12:58', 1, 1, 0, '', ''),
(309, '2021-01-06 08:44:41', '2021-01-06 08:44:41', 1, 1, 0, '', ''),
(310, '2021-01-08 03:59:45', '2021-01-08 03:59:45', 1, 1, 0, '', ''),
(311, '2021-01-08 05:02:38', '2021-01-08 05:02:38', 1, 1, 0, '', ''),
(312, '2021-01-09 08:08:35', '2021-01-09 08:08:35', 1, 1, 0, '', ''),
(313, '2021-01-11 23:57:20', '2021-01-11 23:57:20', 1, 1, 0, '', ''),
(314, '2021-01-13 18:02:32', '2021-01-13 18:02:32', 1, 1, 0, '', ''),
(315, '2021-01-15 06:53:06', '2021-01-15 06:53:06', 1, 1, 0, '', 'pujawatidewi92@gmail.com'),
(316, '2021-01-16 04:29:42', '2021-01-16 04:29:42', 1, 1, 0, '', ''),
(317, '2021-01-19 03:21:26', '2021-01-19 03:21:26', 1, 1, 0, '', ''),
(318, '2021-01-23 14:44:12', '2021-01-23 14:44:12', 1, 1, 0, '', ''),
(319, '2021-01-26 07:01:24', '2021-01-26 07:01:24', 1, 1, 0, '', ''),
(320, '2021-01-26 20:50:57', '2021-01-26 20:50:57', 1, 1, 0, '', 'official.rosadi@outlook.co.id'),
(321, '2021-01-29 12:55:08', '2021-01-29 12:55:08', 1, 1, 0, '', ''),
(322, '2021-02-04 16:33:20', '2021-02-04 16:33:20', 1, 1, 0, '', ''),
(323, '2021-02-06 04:42:28', '2021-02-06 04:42:28', 1, 1, 0, '', ''),
(324, '2021-02-09 03:01:32', '2021-02-09 03:01:32', 1, 1, 0, '', 'babajan.g@tazeay.com'),
(325, '2021-02-21 02:28:01', '2021-02-21 02:28:01', 1, 1, 0, '', 'wiyahwi20@gmail.com'),
(326, '2021-02-22 01:34:06', '2021-02-22 01:34:06', 1, 1, 0, '', ''),
(327, '2021-02-28 17:52:39', '2021-02-28 17:52:39', 1, 1, 0, '', ''),
(328, '2021-03-01 01:05:48', '2021-03-01 01:05:48', 1, 1, 0, '', ''),
(329, '2021-03-01 01:05:49', '2021-03-01 01:05:49', 1, 1, 0, '', ''),
(330, '2021-03-09 07:16:22', '2021-03-09 07:16:22', 1, 1, 0, '', ''),
(331, '2021-03-09 12:27:56', '2021-03-09 12:27:56', 1, 1, 0, '', ''),
(332, '2021-03-12 22:43:25', '2021-03-12 22:43:25', 1, 1, 0, '', ''),
(333, '2021-03-16 01:12:57', '2021-03-16 01:12:57', 1, 1, 0, '', 'cvsuparmanberkahmandiri@gmail.com'),
(334, '2021-03-16 11:45:20', '2021-03-16 11:45:20', 1, 1, 0, '', 'Orangpenting5@gmail.com'),
(335, '2021-03-18 05:53:25', '2021-03-18 05:53:25', 1, 1, 0, '', ''),
(336, '2021-03-20 14:16:23', '2021-03-20 14:16:23', 1, 1, 0, '', ''),
(337, '2021-03-24 00:30:51', '2021-03-24 00:30:51', 1, 1, 0, '', ''),
(338, '2021-03-25 19:51:20', '2021-03-25 19:51:20', 1, 1, 0, '', ''),
(339, '2021-03-26 19:20:08', '2021-03-26 19:20:08', 1, 1, 0, '', ''),
(340, '2021-03-28 13:17:16', '2021-03-28 13:17:16', 1, 1, 0, '', ''),
(341, '2021-03-29 17:44:08', '2021-03-29 17:44:08', 1, 1, 0, '', ''),
(342, '2021-04-07 09:46:28', '2021-04-07 09:46:28', 1, 1, 0, '', ''),
(343, '2021-04-08 15:32:19', '2021-04-08 15:32:19', 1, 1, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `editable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `access_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `author_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(128) NOT NULL DEFAULT '',
  `position` varchar(128) NOT NULL DEFAULT '',
  `address` text,
  `phone` varchar(16) NOT NULL DEFAULT '',
  `email` varchar(320) NOT NULL DEFAULT '',
  `username` varchar(16) NOT NULL DEFAULT '',
  `password` varchar(16) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `created`, `updated`, `deletable`, `editable`, `access_id`, `author_id`, `name`, `position`, `address`, `phone`, `email`, `username`, `password`) VALUES
(1, '1999-12-31 10:00:00', '1999-12-31 10:00:00', 0, 0, 0, 0, 'Super Admin', '', NULL, '', '', 'superadmin', 'zxcv123!'),
(2, '1999-12-31 10:00:00', '2016-12-07 21:43:13', 0, 1, 0, 0, 'Admin', '', NULL, '', '', 'admin', 'ssh123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `benefit`
--
ALTER TABLE `benefit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `section_item`
--
ALTER TABLE `section_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `benefit`
--
ALTER TABLE `benefit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `section_item`
--
ALTER TABLE `section_item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=344;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
