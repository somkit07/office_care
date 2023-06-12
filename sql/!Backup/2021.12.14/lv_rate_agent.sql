-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 04:17 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

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
-- Table structure for table `lv_rate_agent`
--

CREATE TABLE `lv_rate_agent` (
  `rate_agent_id` int(11) NOT NULL,
  `rate_agent_drop_ship_1_9` float(10,2) NOT NULL,
  `rate_agent_drop_ship_10_29` float(10,2) NOT NULL,
  `rate_agent_drop_ship_30_59` float(10,2) NOT NULL,
  `rate_agent_drop_ship_60_149` float(10,2) NOT NULL,
  `rate_agent_drop_ship_150_999` float(10,2) NOT NULL,
  `rate_agent_drop_ship_1000_4999` float(10,2) NOT NULL,
  `rate_agent_drop_ship_5000_10000` float(10,2) NOT NULL,
  `rate_agent_member_thai_franchise_online` float(10,2) NOT NULL,
  `rate_agent_dealer_partner_1_9` float(10,2) NOT NULL,
  `rate_agent_dealer_partner_10_29` float(10,2) NOT NULL,
  `rate_agent_dealer_partner_30_59` float(10,2) NOT NULL,
  `rate_agent_dealer_partner_60_149` float(10,2) NOT NULL,
  `rate_agent_dealer_partner_150_999` float(10,2) NOT NULL,
  `rate_agent_dealer_partner_1000_4999` float(10,2) NOT NULL,
  `rate_agent_dealer_partner_5000_10000` float(10,2) NOT NULL,
  `rate_agent_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lv_rate_agent`
--

INSERT INTO `lv_rate_agent` (`rate_agent_id`, `rate_agent_drop_ship_1_9`, `rate_agent_drop_ship_10_29`, `rate_agent_drop_ship_30_59`, `rate_agent_drop_ship_60_149`, `rate_agent_drop_ship_150_999`, `rate_agent_drop_ship_1000_4999`, `rate_agent_drop_ship_5000_10000`, `rate_agent_member_thai_franchise_online`, `rate_agent_dealer_partner_1_9`, `rate_agent_dealer_partner_10_29`, `rate_agent_dealer_partner_30_59`, `rate_agent_dealer_partner_60_149`, `rate_agent_dealer_partner_150_999`, `rate_agent_dealer_partner_1000_4999`, `rate_agent_dealer_partner_5000_10000`, `rate_agent_datetime_update`) VALUES
(1, 0.00, 20.00, 26.40, 31.60, 41.60, 45.00, 50.00, 20.00, 0.00, 20.00, 26.40, 31.60, 41.60, 45.00, 50.00, '2021-12-10 03:16:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lv_rate_agent`
--
ALTER TABLE `lv_rate_agent`
  ADD PRIMARY KEY (`rate_agent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lv_rate_agent`
--
ALTER TABLE `lv_rate_agent`
  MODIFY `rate_agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
