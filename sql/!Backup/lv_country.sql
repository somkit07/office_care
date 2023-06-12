-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 05:41 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamocha`
--

-- --------------------------------------------------------

--
-- Table structure for table `lv_country`
--

CREATE TABLE `lv_country` (
  `country_id` int(11) NOT NULL,
  `country_name_th` varchar(255) NOT NULL,
  `country_name_en` varchar(255) NOT NULL,
  `country_name_ch` varchar(255) NOT NULL,
  `country_delivery_day` varchar(255) NOT NULL,
  `country_rate_normal_1_2` float(10,2) DEFAULT NULL,
  `country_rate_normal_3_5` float(10,2) DEFAULT NULL,
  `country_rate_normal_6_9` float(10,2) DEFAULT NULL,
  `country_rate_normal_10_29` float(10,2) DEFAULT NULL,
  `country_rate_normal_30_59` float(10,2) DEFAULT NULL,
  `country_rate_normal_60_149` float(10,2) DEFAULT NULL,
  `country_rate_normal_150_499` float(10,2) DEFAULT NULL,
  `country_rate_normal_500_4999` float(10,2) NOT NULL,
  `country_rate_normal_5000_10000` float(10,2) DEFAULT NULL,
  `country_rate_except_1_2` float(10,2) DEFAULT NULL,
  `country_rate_except_3_5` float(10,2) DEFAULT NULL,
  `country_rate_except_6_9` float(10,2) DEFAULT NULL,
  `country_rate_except_10_29` float(10,2) DEFAULT NULL,
  `country_rate_except_30_59` float(10,2) DEFAULT NULL,
  `country_rate_except_60_149` float(10,2) DEFAULT NULL,
  `country_rate_except_150_499` float(10,2) DEFAULT NULL,
  `country_rate_except_500_4999` float(10,2) NOT NULL,
  `country_rate_except_5000_10000` float(10,2) DEFAULT NULL,
  `country_except_product_id_1_2` int(11) DEFAULT NULL,
  `country_except_product_id_3_5` int(11) DEFAULT NULL,
  `country_except_product_id_6_9` int(11) DEFAULT NULL,
  `country_except_product_id_10_29` int(11) DEFAULT NULL,
  `country_except_product_id_30_59` int(11) DEFAULT NULL,
  `country_except_product_id_60_149` int(11) DEFAULT NULL,
  `country_except_product_id_150_499` int(11) DEFAULT NULL,
  `country_except_product_id_500_4999` float(10,2) DEFAULT NULL,
  `country_except_product_id_5000_10000` int(11) DEFAULT NULL,
  `country_datetime_create` datetime NOT NULL,
  `country_ip_create` varchar(255) NOT NULL,
  `country_datetime_update` datetime NOT NULL,
  `country_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lv_country`
--

INSERT INTO `lv_country` (`country_id`, `country_name_th`, `country_name_en`, `country_name_ch`, `country_delivery_day`, `country_rate_normal_1_2`, `country_rate_normal_3_5`, `country_rate_normal_6_9`, `country_rate_normal_10_29`, `country_rate_normal_30_59`, `country_rate_normal_60_149`, `country_rate_normal_150_499`, `country_rate_normal_500_4999`, `country_rate_normal_5000_10000`, `country_rate_except_1_2`, `country_rate_except_3_5`, `country_rate_except_6_9`, `country_rate_except_10_29`, `country_rate_except_30_59`, `country_rate_except_60_149`, `country_rate_except_150_499`, `country_rate_except_500_4999`, `country_rate_except_5000_10000`, `country_except_product_id_1_2`, `country_except_product_id_3_5`, `country_except_product_id_6_9`, `country_except_product_id_10_29`, `country_except_product_id_30_59`, `country_except_product_id_60_149`, `country_except_product_id_150_499`, `country_except_product_id_500_4999`, `country_except_product_id_5000_10000`, `country_datetime_create`, `country_ip_create`, `country_datetime_update`, `country_ip_update`) VALUES
(4, 'กัมพูชา', 'กัมพูชา', 'กัมพูชา', '7-10 business days', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, NULL, '2020-10-08 03:12:45', '::1', '2022-01-06 02:13:59', '::1'),
(6, 'Australia', 'Australia', 'Australia', '7-10 business days', 1000.00, 1400.00, 1600.00, 1800.00, 4000.00, 8000.00, 20000.00, 32000.00, 320000.00, 1400.00, 1600.00, 1800.00, 2000.00, 4400.00, 8400.00, 8600.00, 39000.00, 390000.00, 1, 1, 1, 1, 1, 1, 1, 1.00, 1, '2022-01-06 02:17:02', '::1', '2022-01-27 03:52:03', '::1'),
(7, 'Switzerland', 'Switzerland', 'Switzerland', '7-10 business days', 1000.00, 1400.00, 1600.00, 1800.00, 5200.00, 3600.00, 9000.00, 45000.00, 450000.00, 1400.00, 1600.00, 1800.00, 2000.00, 2200.00, 4000.00, 9600.00, 56000.00, 560000.00, 1, 1, 1, 1, 1, 1, 1, 1.00, 1, '2022-01-27 03:20:01', '::1', '2022-01-27 03:54:08', '::1'),
(8, 'USA', 'USA', 'USA', '7-10 business days', 1700.00, 1900.00, 2100.00, 2300.00, 4000.00, 8000.00, 20000.00, 200000.00, 1800000.00, 1400.00, 2100.00, 2300.00, 2500.00, 4400.00, 8400.00, 24000.00, 250000.00, 2900000.00, 1, 1, 1, 1, 1, 1, 1, 1.00, 1, '2022-01-27 04:06:13', '::1', '2022-01-27 04:09:57', '::1'),
(9, 'Hongkong', 'Hongkong', 'Hongkong', '7-10 business days', 650.00, 800.00, 900.00, 1000.00, 2300.00, 4600.00, 11500.00, 57500.00, 575000.00, 890.00, 1000.00, 1100.00, 1200.00, 2600.00, 4800.00, 13000.00, 62000.00, 590000.00, 1, 1, 1, 1, 1, 1, 1, 1.00, 1, '2022-01-27 04:12:51', '::1', '2022-01-27 04:12:51', '::1'),
(10, 'Singapore', 'Singapore', 'Singapore', '7-10 business days', 500.00, 800.00, 900.00, 1000.00, 2300.00, 4600.00, 11500.00, 57500.00, 575000.00, 600.00, 950.00, 1100.00, 1200.00, 2600.00, 4800.00, 13500.00, 62000.00, 590000.00, 1, 1, 1, 1, 1, 1, 1, 1.00, 1, '2022-01-27 04:15:34', '::1', '2022-01-27 04:15:42', '::1'),
(11, 'Macau', 'Macau', 'Macau', '7-10 business days', 1650.00, 1850.00, 2050.00, 2500.00, 4500.00, 9000.00, 22500.00, 90500.00, 904999.00, 1890.00, 2050.00, 2250.00, 2700.00, 4800.00, 9400.00, 23500.00, 92500.00, 907500.00, 1, 1, 1, 1, 1, 1, 1, 1.00, 1, '2022-01-27 04:19:50', '::1', '2022-01-27 04:19:50', '::1'),
(12, 'United kingdom(อังกฤษ)', 'United kingdom(อังกฤษ)', 'United kingdom(อังกฤษ)', '7-10 business days', 1129.00, 1300.00, 1600.00, 1700.00, 3900.00, 7800.00, 19500.00, 77500.00, 775000.00, 1390.00, 1500.00, 1800.00, 1900.00, 4100.00, 8000.00, 23000.00, 82000.00, 801000.00, 1, 1, 1, 1, 1, 1, 1, 1.00, 1, '2022-01-27 04:22:11', '::1', '2022-01-27 04:23:37', '::1'),
(13, 'Indonesia', 'Indonesia', 'Indonesia', '7-10 business days', 800.00, 950.00, 1300.00, 1600.00, 4100.00, 8200.00, 20500.00, 87500.00, 875000.00, 890.00, 1200.00, 1500.00, 1800.00, 4300.00, 8600.00, 21500.00, 92000.00, 920000.00, 1, 1, 1, 1, 1, 1, 1, 1.00, 1, '2022-01-27 04:26:18', '::1', '2022-01-27 04:26:18', '::1'),
(14, 'Dobai', 'Dobai', 'Dobai', '7-10 business days', 800.00, 1200.00, 1300.00, 1500.00, 3700.00, 7400.00, 18500.00, 75000.00, 750000.00, 1000.00, 1400.00, 1500.00, 1700.00, 4200.00, 7800.00, 21000.00, 82000.00, 820000.00, 1, 1, 1, 1, 1, 1, 1, 1.00, 1, '2022-01-27 04:28:37', '::1', '2022-01-27 04:28:37', '::1'),
(15, 'Malaysia', 'Malaysia', 'Malaysia', '7-10 business days', 650.00, 800.00, 900.00, 1100.00, 2800.00, 5600.00, 14000.00, 57500.00, 575000.00, 890.00, 1000.00, 1100.00, 1300.00, 3000.00, 5800.00, 15900.00, 62000.00, 590000.00, 1, 1, 1, 1, 1, 1, 1, 1.00, 1, '2022-01-27 04:31:14', '::1', '2022-01-27 04:31:14', '::1'),
(16, 'Laos', 'Laos', 'Laos', '1-2 business days', 100.00, 100.00, 100.00, 100.00, 100.00, 200.00, 500.00, 700.00, 1000.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-27 04:38:50', '::1', '2022-01-27 04:38:58', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lv_country`
--
ALTER TABLE `lv_country`
  ADD PRIMARY KEY (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lv_country`
--
ALTER TABLE `lv_country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
