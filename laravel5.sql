-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 02:55 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel5`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usertype` char(1) COLLATE utf8_unicode_ci DEFAULT 'W'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `usertype`) VALUES
(1, 'vinay', 'vinay@gmail.com', '$2y$10$RjRuerDIO/Ld4S658wYiPu/3IlfuXZS6mpmlVoTLfvw5m1tFFpcXy', '4Ub4QcgCZVAkIYztIwi13N92rVJs4J40y5AtLruGbcHMN4kUuTfeWSvGwjXX', NULL, '2018-03-19 01:44:16', 'W'),
(2, 'aman', 'vinay@radicalreflex.com', '$2y$10$RjRuerDIO/Ld4S658wYiPu/3IlfuXZS6mpmlVoTLfvw5m1tFFpcXy', '40lyMHsOGqDZcyokELWBcB8veZs2Xdwree2TdPYHx7GqgCZmhXz3UsDmvhSW', '2017-04-02 22:47:52', '2017-12-27 00:42:29', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `admins_passowrd_resets`
--

CREATE TABLE `admins_passowrd_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `short_description` text,
  `long_description` text,
  `feature_image` varchar(100) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` text,
  `meta_description` text,
  `active` varchar(10) DEFAULT '1',
  `orders` varchar(25) DEFAULT '0',
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `short_description`, `long_description`, `feature_image`, `meta_title`, `meta_keyword`, `meta_description`, `active`, `orders`, `updated_at`, `created_at`) VALUES
(2, 'Amit', 'women3', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2', '2018-03-30', '2018-03-30'),
(3, 'sdfsdfa', 'women3', 'hello this is testing', 'hello', NULL, 'Laravel Testing', '', '', '1', '0', '2018-03-30', '2018-03-30'),
(4, 'Amit', 'women3', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '2018-03-30', '2018-03-30'),
(5, 'Women', 'women3', 'this  is testing', '<p>hello</p>', NULL, '', '', '', '1', '3', '2018-03-30', '2018-03-30'),
(6, 'Women2', 'women3', 'this  is testing 3', '<p>hello4</p>', NULL, '', '', '', '1', '4', '2018-03-30', '2018-03-30'),
(7, 'Women2', 'women3', 'this  is testing 3', '<p>hello4</p>', NULL, '', '', '', '1', '5', '2018-03-30', '2018-03-30'),
(8, 'sadfsd', 'women3', '', '', NULL, '', '', '', '1', '6', '2018-03-30', '2018-03-30'),
(9, 'Test category1', 'category', 'this is testing', '<p>test</p>', NULL, '', '', '', '1', '7', '2018-03-30', '2018-03-30'),
(10, 'Amit', 'women3', 'hello this is testing', 'hello', NULL, 'Laravel Testing', '', '', '1', '8', '2018-03-30', '2018-03-30'),
(11, 'Amit', 'women3', 'hello this is testing', 'hello', NULL, 'Laravel Testing', '', '', '1', '9', '2018-03-30', '2018-03-30');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('vinay@radicalreflex.com', '5579482eac4bd0b434a853db0b2a0e9ff37f991c2a202f9aff166eabedaee650', '2017-02-06 03:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `tblcampaignphotos`
--

CREATE TABLE `tblcampaignphotos` (
  `id` int(255) NOT NULL,
  `proj_id` int(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcampaignphotos`
--

INSERT INTO `tblcampaignphotos` (`id`, `proj_id`, `image`, `caption`) VALUES
(3, 1, '1521283069-3efbf1c60a53c1ac4d8de8e489f3a8c6.jpeg', 'test'),
(4, 1, '1521887197-3efbf1c60a53c1ac4d8de8e489f3a8c6.jpeg', 'sdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_homepage_text`
--

CREATE TABLE `tbl_homepage_text` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `sub_header` text,
  `header_image` varchar(255) DEFAULT NULL,
  `active` varchar(25) DEFAULT '1',
  `orders` varchar(255) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_homepage_text`
--

INSERT INTO `tbl_homepage_text` (`id`, `name`, `link`, `sub_header`, `header_image`, `active`, `orders`) VALUES
(1, 'Amit', 'www.googel.com', 'test', '04493_Roger-Federer.jpg', '1', '0'),
(2, 'sdfsd', 'sdfsdf', 'sdfsdf', NULL, '1', '1'),
(3, 'adfsdf', 'asdff', 'asddfsdf', '29180_p.jpg', '0', '2'),
(4, 'This is testing ', 'www.googel.com', 'test', '31598_salinas jarabo favela lima.jpg', '1', '0'),
(5, 'vinay', 'www.googel.com', 'test', '31632_Roger-Federer.jpg', '1', '2'),
(6, 'vinay', 'www.googel.com', 'test', '31651_Roger-Federer.jpg', '0', '5'),
(7, 'Testing first', 'www.googel.com', 'test', '00288_salinas jarabo favela lima.jpg', '1', '6'),
(8, 'sdfsd', 'sdfsd', 'sadfsd', '87551_maxresdefault.jpg', '1', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_seo`
--

CREATE TABLE `tbl_page_seo` (
  `id` int(255) NOT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_disc` text,
  `meta_keyword` text,
  `active` varchar(255) DEFAULT '1',
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page_seo`
--

INSERT INTO `tbl_page_seo` (`id`, `page_name`, `meta_title`, `meta_disc`, `meta_keyword`, `active`, `created_date`) VALUES
(2, 'Home', 'Homgepage', 'Description', 'keywords', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ghfg', 'vinay@radicalreflex.com', '$2y$10$RjRuerDIO/Ld4S658wYiPu/3IlfuXZS6mpmlVoTLfvw5m1tFFpcXy', 'NjCV8WBXfEZmQmjecz1lQoITyAr0mWkmNME2SJSWtxTfFnqgsLBcPRfRrulF', '2017-01-24 18:24:33', '2017-12-27 01:53:23'),
(2, 'Vinay', 'vinay@gmail.com', '$2y$10$6R.sAw0lY.80niWWYqerm.xOWu.4Tf1/OeroYgcQCPm8vDle0iLBO', '6XfuoHY6cEWftJorfUO4IbiuJv1rmt68iQmaJPX8PXbUdJPt733Hf5GNuiYp', '2017-01-24 18:57:55', '2017-12-27 01:53:38'),
(3, 'Amit', 'amit@ass.com', '$2y$10$PZkym1R5ofKNJRn0m8aiZuuvC5DJAKvwRyE6qhvQHGEstvc5EI3J6', 'FU7g7DPa1PmVSvpACdgPkrmDV5O6E0fT3PVXI3oQI98vd2t21fqp1dzqgYfw', '2017-01-31 20:10:34', '2017-01-31 20:11:01'),
(4, 'vinay', 'vinay1@radicalreflex.com', '$2y$10$KOPf6wKwXYxyzWVO5HL0Pe2Rb6As8T95SQk4sspw8nLKfZdfuWtU6', '98hFWgSbfg70HaUAPlv4aE4pTs6QHucRnxucmHopXXLKRKJ2XdKfsBLIiBO3', '2017-02-06 02:12:52', '2017-02-06 02:30:52'),
(5, 'aman', 'vinay.radicalreflex@gmail.com', '1234567', NULL, '2017-03-23 23:29:26', '2017-03-23 23:29:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `admins_passowrd_resets`
--
ALTER TABLE `admins_passowrd_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tblcampaignphotos`
--
ALTER TABLE `tblcampaignphotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_homepage_text`
--
ALTER TABLE `tbl_homepage_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_seo`
--
ALTER TABLE `tbl_page_seo`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblcampaignphotos`
--
ALTER TABLE `tblcampaignphotos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_homepage_text`
--
ALTER TABLE `tbl_homepage_text`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_page_seo`
--
ALTER TABLE `tbl_page_seo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
