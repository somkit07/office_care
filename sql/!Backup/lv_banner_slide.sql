-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 05:36 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

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
-- Table structure for table `lv_banner_slide`
--

CREATE TABLE `lv_banner_slide` (
  `banner_slide_id` int(11) NOT NULL,
  `banner_slide_image_th` varchar(255) NOT NULL,
  `banner_slide_image_en` varchar(255) NOT NULL,
  `banner_slide_image_ch` varchar(255) NOT NULL,
  `banner_slide_datetime_create` datetime NOT NULL,
  `banner_slide_ip_create` varchar(255) NOT NULL,
  `banner_slide_datetime_update` datetime NOT NULL,
  `banner_slide_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lv_banner_slide`
--
ALTER TABLE `lv_banner_slide`
  ADD PRIMARY KEY (`banner_slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lv_banner_slide`
--
ALTER TABLE `lv_banner_slide`
  MODIFY `banner_slide_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
