-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2021 at 06:05 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `first_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternate_address`
--

CREATE TABLE `alternate_address` (
  `user_id` int(11) NOT NULL,
  `address_line_1` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `parish` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternate_address`
--

INSERT INTO `alternate_address` (`user_id`, `address_line_1`, `city`, `parish`, `country`) VALUES
(1, '71637 Cleo Causeway', 'Lake Katelyn', 'Illinois', 'Argentina'),
(2, '6087 Waelchi Parkways', 'New Jude', 'Minnesota', 'Latvia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternate_address`
--
ALTER TABLE `alternate_address`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
