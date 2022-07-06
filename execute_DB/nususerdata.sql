-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 01:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nusconsultinggroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `nususerdata`
--

CREATE TABLE `nususerdata` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `emailId` varchar(255) NOT NULL,
  `accountstatus` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nususerdata`
--

INSERT INTO `nususerdata` (`id`, `role`, `username`, `emailId`, `accountstatus`, `password`) VALUES
(37, 'Admin', 'Vijay', 'vkt973012@gmail.com', '0', '$2y$10$oKSWrJQAXrTszKvUdZbKhusLVB5M/JrUIb/A/.ALWI1WpQGMVXrnC'),
(38, 'Admin', 'admin1', 'admin1@nusconsulting.com', '1', 'admin'),
(39, 'NUS Manager', 'manager1', 'manager1@nusconsulting.com', '1', 'manager'),
(40, 'NUS User', 'user1', 'user1@nusconsulting.com', '1', 'user'),
(41, 'Parent Company', 'parent1', 'parentcompany1@nusconsulting.com', '1', 'parentcompany'),
(44, 'Client Company', 'client1', 'clientcompany1@nusconsulting.com', '1', 'clientcompany'),
(45, 'Admin', 'admin2', 'admin2@nusconsulting.com', '0', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nususerdata`
--
ALTER TABLE `nususerdata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`emailId`),
  ADD UNIQUE KEY `username_2` (`username`,`emailId`),
  ADD UNIQUE KEY `username_3` (`username`),
  ADD UNIQUE KEY `emailId` (`emailId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nususerdata`
--
ALTER TABLE `nususerdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
