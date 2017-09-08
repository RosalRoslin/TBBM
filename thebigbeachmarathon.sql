-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 08, 2017 at 01:44 AM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

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
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contactid` int(11) NOT NULL,
  `firstname` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `website` varchar(100) NOT NULL,
  `message` varchar(400) NOT NULL,
  `msgtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`contactid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactid`, `firstname`, `email`, `website`, `message`, `msgtime`) VALUES
(0, 'Mickey', 'vidhimangal.v@gmail.com', '987654321', 'Hiiiiiiii', '2017-09-08 05:51:36');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `transactions_id` int(11) DEFAULT NULL,
  `txnid` varchar(255) DEFAULT NULL,
  `tickets` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `tshirt` varchar(255) DEFAULT NULL,
  `KM` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) DEFAULT NULL,
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
  `userid` varchar(255) DEFAULT NULL,
  `profiile` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FirstName`, `LastName`, `email`, `password`, `DOB`, `Gender`, `ContactNumber`, `Height`, `Weight`, `Membership`, `userid`, `profiile`, `created`) VALUES
(7, 'Pradeep', 'Jeyachandran', 'pradeep@orbiten.in', '$2y$10$Meu2U..8kXhnjnfraXjPDuo4f4GheGBvonmwNhfosbUaZh8OSX2Gu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-08-18 10:35:13'),
(8, 'vasanthaprakash', 'chandrasekaran', 'vasanth1407@gmail.com', '$2y$10$QByBHvuLg6VzQFex6ASCg.xZit5lC9pbDRm6BUNh5.44MS0sFZ/vy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-08-21 23:26:58'),
(9, 'lakshmi narasimhan', 'N', 'nl.adarsh@gmail.com', '$2y$10$8wBslw9ie8ssnqlPYzVzDOSoqIEr5fV0oRmKSKmnv5WDLzYG9CoYC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-01 08:43:25'),
(10, 'Roslin', 'a', 'roslin.albert@gmail.com', '$2y$10$F8U5LXoBFyfP0vQg2sJAr.gZvgSgKM6FssGTLhonL0qYjKQZBqGi6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-06 04:13:21');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
