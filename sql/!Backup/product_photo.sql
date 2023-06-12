-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2022 at 10:27 AM
-- Server version: 10.4.26-MariaDB-log
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zford_office_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_photo`
--

CREATE TABLE `product_photo` (
  `product_photo_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `product_photo_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_photo_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_photo`
--

INSERT INTO `product_photo` (`product_photo_id`, `product_id`, `color_id`, `product_photo_image`, `product_photo_datetime_create`) VALUES
(1, 1, 0, '202211100323310.png', '2022-11-10 03:23:31'),
(4, 1, 0, '202211100323313.png', '2022-11-10 03:23:31'),
(5, 2, 0, '202211140806250.png', '2022-11-14 08:06:25'),
(6, 3, 0, '202211150224310.png', '2022-11-15 02:24:31'),
(7, 3, 0, '202211150224311.png', '2022-11-15 02:24:31'),
(8, 3, 0, '202211150224312.png', '2022-11-15 02:24:31'),
(9, 3, 0, '202211150224323.png', '2022-11-15 02:24:32'),
(10, 4, 0, '202211150607320.png', '2022-11-15 06:07:32'),
(11, 4, 0, '202211150607321.png', '2022-11-15 06:07:32'),
(12, 4, 0, '202211150607322.png', '2022-11-15 06:07:32'),
(13, 4, 0, '202211150607323.png', '2022-11-15 06:07:33'),
(14, 5, 0, '202211150609360.png', '2022-11-15 06:09:36'),
(15, 5, 0, '202211150609361.png', '2022-11-15 06:09:36'),
(16, 5, 0, '202211150609362.png', '2022-11-15 06:09:36'),
(17, 5, 0, '202211150609363.png', '2022-11-15 06:09:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_photo`
--
ALTER TABLE `product_photo`
  ADD PRIMARY KEY (`product_photo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_photo`
--
ALTER TABLE `product_photo`
  MODIFY `product_photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
