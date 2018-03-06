-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2018 at 08:23 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prison_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `recruit`
--

CREATE TABLE IF NOT EXISTS `recruit` (
  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `fname` tinytext NOT NULL,
  `sname` tinytext NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `personal_details` (
  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `recruit_id` int(11) UNSIGNED UNIQUE,
  `title` varchar(3),
  `mname` tinytext,
  `gender` varchar(6),
  `nationality` tinytext,
  `dob` varchar(20),
  `height` varchar(20),
  `nin` varchar(20),
  `phone` varchar(100),
  `permAddress` tinytext,
  `permStreet` tinytext,
  `permLga` tinytext,
  `permState` tinytext,
  `curAddress` tinytext,
  `curStreet` tinytext,
  `curLga` tinytext,
  `curState` tinytext,
  `prefAddress` tinytext,
  `filled` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
