-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2018 at 10:00 AM
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
-- Table structure for table `attachments_list`
--

CREATE TABLE IF NOT EXISTS `attachments_list` (
`id` int(11) NOT NULL,
  `degree` tinytext NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attachments_list`
--

INSERT INTO `attachments_list` (`id`, `degree`, `status`) VALUES
(1, 'MPhil/Phd', 1),
(2, 'MBA/Msc', 1),
(3, 'MBBS', 1),
(4, 'BSc', 1),
(5, 'HND', 1),
(6, 'OND', 1),
(7, 'N.C.E', 1),
(8, 'Diploma', 1),
(9, 'SSCE(WAEC)', 1),
(10, 'SSCE(NECO)', 1),
(11, 'Vocational', 1),
(12, 'Others', 1),
(13, 'Birth Certificate/Age Declaration', 0),
(14, 'Passport Photograph', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attachments_list`
--
ALTER TABLE `attachments_list`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attachments_list`
--
ALTER TABLE `attachments_list`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
