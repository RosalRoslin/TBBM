-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2017 at 05:24 AM
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
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `txnid` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `productinfo` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `unmappedstatus` varchar(255) DEFAULT NULL,
  `field9` varchar(255) DEFAULT NULL,
  `bank_ref_num` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
  `blood` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `groups` varchar(255) DEFAULT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FirstName`, `LastName`, `email`, `password`, `DOB`, `Gender`, `ContactNumber`, `Height`, `Weight`, `Membership`, `blood`, `role`, `groups`, `userid`, `profile`, `created`) VALUES
(6, 'Pradeep', 'J', 'pradeep@orbiten.in', '$2y$10$OXYSrDBQSVifvolPRQ4kqORs86vF23mJKO1b9yDA.1fGr3yz84LG6', '0000-00-00', 'Male', '9677859889', '', '', NULL, 'A+', 'User', 'Bangalore', NULL, 'profile_08-30-2017_0302pm.jpg', '2017-08-18 21:03:55');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
