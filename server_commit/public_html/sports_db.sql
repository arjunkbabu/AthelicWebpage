-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2015 at 01:20 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sports_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `EVENT`
--

CREATE TABLE IF NOT EXISTS `EVENT` (
  `event_id` int(11) NOT NULL DEFAULT '0',
  `event_name` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `EVENT`
--

INSERT INTO `EVENT` (`event_id`, `event_name`) VALUES
(101, '100 m'),
(102, '200 m'),
(103, '400 m'),
(104, '800 m'),
(105, '1500 m'),
(106, '5000 m'),
(107, '10000'),
(111, '100 m Hurdles'),
(112, '400 m Hurdles'),
(131, 'Long Jump'),
(132, 'High Jump'),
(133, 'Triple Jump'),
(141, 'Shot Put'),
(142, 'Discuss Throw'),
(143, 'Javelin Throw'),
(144, 'Hammer Throw'),
(201, '100 m'),
(202, '200 m'),
(203, '400 m'),
(204, '800 m'),
(205, '1500 m'),
(208, '3000 m'),
(213, '100 m Hurdles'),
(231, 'Long Jump'),
(241, 'Shot Put'),
(242, 'Discuss Throw'),
(243, 'Javelin Throw'),
(244, 'Hammer Throw');

-- --------------------------------------------------------

--
-- Table structure for table `REGISTRATION`
--

CREATE TABLE IF NOT EXISTS `REGISTRATION` (
  `roll` varchar(20) NOT NULL DEFAULT '',
  `event_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`roll`,`event_id`),
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT`
--

CREATE TABLE IF NOT EXISTS `STUDENT` (
  `roll` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(20) DEFAULT NULL,
  `batch` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
