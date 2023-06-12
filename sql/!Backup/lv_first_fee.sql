-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 05:59 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

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
-- Table structure for table `lv_first_fee`
--

CREATE TABLE `lv_first_fee` (
  `first_fee_id` int(11) NOT NULL,
  `first_fee_amount` float(10,2) NOT NULL,
  `first_fee_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lv_first_fee`
--

INSERT INTO `lv_first_fee` (`first_fee_id`, `first_fee_amount`, `first_fee_datetime_update`) VALUES
(1, 500.00, '2021-10-22 05:59:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lv_first_fee`
--
ALTER TABLE `lv_first_fee`
  ADD PRIMARY KEY (`first_fee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lv_first_fee`
--
ALTER TABLE `lv_first_fee`
  MODIFY `first_fee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
