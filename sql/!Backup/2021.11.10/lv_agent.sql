-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2021 at 04:45 PM
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
-- Table structure for table `lv_agent`
--

CREATE TABLE `lv_agent` (
  `agent_id` int(11) NOT NULL,
  `agent_image` varchar(255) NOT NULL,
  `agent_wait` enum('No','Yes') NOT NULL,
  `agent_name` varchar(255) NOT NULL,
  `agent_surname` varchar(255) NOT NULL,
  `agent_gender` int(11) NOT NULL,
  `agent_age` int(11) NOT NULL,
  `agent_date` date NOT NULL,
  `agent_tiktok` varchar(255) NOT NULL,
  `agent_favourite` varchar(255) NOT NULL,
  `agent_sale_online` varchar(255) NOT NULL,
  `agent_sale_offline` varchar(255) NOT NULL,
  `agent_type_product` text NOT NULL,
  `agent_email` varchar(255) NOT NULL,
  `agent_telephone` varchar(255) NOT NULL,
  `agent_mobile` varchar(255) NOT NULL,
  `agent_current_address` text NOT NULL,
  `agent_shipping_address` text NOT NULL,
  `agent_shipping_address_address` text NOT NULL,
  `agent_shipping_province` varchar(255) NOT NULL,
  `agent_shipping_district` varchar(255) NOT NULL,
  `agent_shipping_amphur` varchar(255) NOT NULL,
  `agent_shipping_postcode` varchar(255) NOT NULL,
  `agent_birth_day` date NOT NULL,
  `agent_shirt_size` varchar(255) NOT NULL,
  `agent_line` varchar(255) NOT NULL,
  `agent_facebook` varchar(255) NOT NULL,
  `agent_instagram` varchar(255) NOT NULL,
  `agent_type` varchar(255) NOT NULL,
  `agent_area_sale_comfortable` text NOT NULL,
  `agent_password` varchar(255) NOT NULL,
  `agent_new_address` text DEFAULT NULL,
  `agent_new_province` varchar(255) DEFAULT NULL,
  `agent_new_amphur` varchar(255) DEFAULT NULL,
  `agent_new_district` varchar(255) DEFAULT NULL,
  `agent_new_postal_code` varchar(255) DEFAULT NULL,
  `agent_google_map` text DEFAULT NULL,
  `agent_register_500` enum('No','Yes') NOT NULL,
  `agent_age_25_55` enum('No','Yes') NOT NULL,
  `agent_meta_500` enum('No','Yes') NOT NULL,
  `agent_look_at_the_world` enum('No','Yes') NOT NULL,
  `agent_lifestyle` enum('No','Yes') NOT NULL,
  `agent_product_thai` enum('No','Yes') NOT NULL,
  `agent_social` enum('No','Yes') NOT NULL,
  `agent_sale` enum('No','Yes') NOT NULL,
  `agent_doing` enum('No','Yes') NOT NULL,
  `agent_datetime_create` datetime NOT NULL,
  `agent_ip_create` varchar(255) NOT NULL,
  `agent_datetime_update` datetime NOT NULL,
  `agent_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lv_agent`
--
ALTER TABLE `lv_agent`
  ADD PRIMARY KEY (`agent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lv_agent`
--
ALTER TABLE `lv_agent`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
