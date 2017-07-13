-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 11, 2017 at 03:26 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tranning`
--

-- --------------------------------------------------------

--
-- Table structure for table `modelhouse`
--

CREATE TABLE IF NOT EXISTS `modelhouse` (
`id` int(11) NOT NULL,
  `modelhouse` int(11) NOT NULL,
  `datechose` date NOT NULL,
  `time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `phoneNumber` text COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `modelhouse`
--

INSERT INTO `modelhouse` (`id`, `modelhouse`, `datechose`, `time`, `name`, `email`, `phoneNumber`, `note`) VALUES
(1, 1, '0000-00-00', '11:00', 'VuNgoc', 'vdngoc.hust@gmail.com', '01649619245', 'aaa'),
(2, 2, '0000-00-00', '11:00', 'VuNgoc', 'vdngoc.hust@gmail.com', '01649619245', 'aaa'),
(3, 2, '0000-00-00', '11:00', 'VuNgoc', 'vdngoc.hust@gmail.com', '01649619245', 'aaa'),
(4, 1, '0000-00-00', '13:00', 'Ngoc', 'vdngoc.hust@gmail.com', '01649619245', 'aaa'),
(5, 1, '0000-00-00', '13:00', 'VuNgoc', 'vdngoc.hust@gmail.com', '01649619245', 'aaa'),
(6, 1, '0000-00-00', '13:00', 'VuNgoc', 'vdngoc.hust@gmail.com', '01649619245', 'aaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `modelhouse`
--
ALTER TABLE `modelhouse`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `modelhouse`
--
ALTER TABLE `modelhouse`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
