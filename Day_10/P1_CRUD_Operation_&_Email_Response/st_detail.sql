-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 11:23 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `15_days_internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `st_detail`
--

CREATE TABLE `st_detail` (
  `st_id` int(5) NOT NULL,
  `st_fname` varchar(25) NOT NULL,
  `st_mname` varchar(25) NOT NULL,
  `st_lname` varchar(25) NOT NULL,
  `st_age` int(5) NOT NULL,
  `st_dob` date NOT NULL,
  `st_gender` varchar(25) NOT NULL,
  `st_bloodgroup` varchar(5) NOT NULL,
  `st_email` varchar(50) NOT NULL,
  `st_mobile` varchar(10) NOT NULL,
  `st_password` varchar(25) NOT NULL,
  `st_address` varchar(50) NOT NULL,
  `st_city` varchar(25) NOT NULL,
  `st_pincode` int(10) NOT NULL,
  `is_deleted` tinyint(1) DEFAULT 0,
  `activation_code` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `st_detail`
--
ALTER TABLE `st_detail`
  ADD PRIMARY KEY (`st_id`),
  ADD UNIQUE KEY `st_email` (`st_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `st_detail`
--
ALTER TABLE `st_detail`
  MODIFY `st_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
