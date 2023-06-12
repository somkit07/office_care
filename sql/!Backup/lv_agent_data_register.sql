-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 09, 2022 at 08:25 AM
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
-- Table structure for table `lv_agent_data_register`
--

CREATE TABLE `lv_agent_data_register` (
  `agent_data_register_id` int(11) NOT NULL,
  `agent_data_register_detail_th` longtext COLLATE utf8_unicode_ci NOT NULL,
  `agent_data_register_detail_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `agent_data_register_detail_ch` longtext COLLATE utf8_unicode_ci NOT NULL,
  `agent_data_register_datetime_update` datetime NOT NULL,
  `agent_data_register_ip_update` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lv_agent_data_register`
--

INSERT INTO `lv_agent_data_register` (`agent_data_register_id`, `agent_data_register_detail_th`, `agent_data_register_detail_en`, `agent_data_register_detail_ch`, `agent_data_register_datetime_update`, `agent_data_register_ip_update`) VALUES
(1, '', '', '', '0000-00-00 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lv_agent_data_register`
--
ALTER TABLE `lv_agent_data_register`
  ADD PRIMARY KEY (`agent_data_register_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lv_agent_data_register`
--
ALTER TABLE `lv_agent_data_register`
  MODIFY `agent_data_register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
