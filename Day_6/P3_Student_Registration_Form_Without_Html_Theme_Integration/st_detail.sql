-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 02, 2021 at 11:08 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.0

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
  `st_fname` varchar(25) DEFAULT NULL,
  `st_mname` varchar(25) DEFAULT NULL,
  `st_lname` varchar(25) DEFAULT NULL,
  `st_age` int(5) DEFAULT NULL,
  `st_dob` date DEFAULT NULL,
  `st_gender` varchar(25) DEFAULT NULL,
  `st_bloodgroup` varchar(5) DEFAULT NULL,
  `st_email` varchar(50) DEFAULT NULL,
  `st_mobile` varchar(10) DEFAULT NULL,
  `st_password` varchar(25) DEFAULT NULL,
  `st_address` varchar(50) DEFAULT NULL,
  `st_city` varchar(25) DEFAULT NULL,
  `st_pincode` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_detail`
--

INSERT INTO `st_detail` (`st_id`, `st_fname`, `st_mname`, `st_lname`, `st_age`, `st_dob`, `st_gender`, `st_bloodgroup`, `st_email`, `st_mobile`, `st_password`, `st_address`, `st_city`, `st_pincode`) VALUES
(7, 'Keval', 'Ashwinbhai', 'Parmar', 21, '2000-12-13', 'Male', 'B+', 'kevalparmar3233@gmail.com', '8160155499', 'KEval@8160', 'Yogeshwar Residency', 'Ahmedabad', 382350);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `st_detail`
--
ALTER TABLE `st_detail`
  ADD PRIMARY KEY (`st_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `st_detail`
--
ALTER TABLE `st_detail`
  MODIFY `st_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
