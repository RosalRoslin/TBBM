-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2017 at 07:13 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thebigbeachmarathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `ContactNumber` varchar(255) DEFAULT NULL,
  `Height` varchar(255) DEFAULT NULL,
  `Weight` varchar(255) DEFAULT NULL,
  `Membership` varchar(255) DEFAULT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `profiile` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FirstName`, `LastName`, `email`, `password`, `DOB`, `Gender`, `ContactNumber`, `Height`, `Weight`, `Membership`, `userid`, `profiile`, `created`) VALUES
(6, 'Pradeep', 'Jeyachandran', 'pradeep@orbiten.in', '$2y$10$OXYSrDBQSVifvolPRQ4kqORs86vF23mJKO1b9yDA.1fGr3yz84LG6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-08-18 21:03:55');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
