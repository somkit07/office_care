-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 09, 2022 at 09:51 AM
-- Server version: 10.4.21-MariaDB-log
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
-- Table structure for table `lv_agent_shipping_address`
--

CREATE TABLE `lv_agent_shipping_address` (
  `agent_shipping_address_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `agent_shipping_address_address` text COLLATE utf8_unicode_ci NOT NULL,
  `agent_shipping_address_province` int(11) NOT NULL,
  `agent_shipping_address_amphur` int(11) NOT NULL,
  `agent_shipping_address_country` int(11) NOT NULL,
  `agent_shipping_address_zipcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agent_shipping_address_datetime_create` datetime NOT NULL,
  `agent_shipping_address_ip_create` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agent_shipping_address_datetime_update` datetime NOT NULL,
  `agent_shipping_address_ip_update` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lv_agent_shipping_address`
--
ALTER TABLE `lv_agent_shipping_address`
  ADD PRIMARY KEY (`agent_shipping_address_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lv_agent_shipping_address`
--
ALTER TABLE `lv_agent_shipping_address`
  MODIFY `agent_shipping_address_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
