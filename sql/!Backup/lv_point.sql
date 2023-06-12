-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 28 เม.ย. 2022 เมื่อ 10:20 AM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.4.24-MariaDB-log
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zford_lamocha`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_point`
--

CREATE TABLE `lv_point` (
  `point_id` int(11) NOT NULL,
  `point_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `point_name_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `point_name_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `point_name_ch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `point_use_point` int(11) NOT NULL,
  `point_datetime_create` datetime NOT NULL,
  `point_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lv_point`
--
ALTER TABLE `lv_point`
  ADD PRIMARY KEY (`point_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lv_point`
--
ALTER TABLE `lv_point`
  MODIFY `point_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
