-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 02, 2015 at 12:00 AM
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

--
-- Dumping data for table `REGISTRATION`
--

INSERT INTO `REGISTRATION` (`roll`, `event_id`, `position`) VALUES
('1', 2, 1),
('1', 3, 2),
('12', 103, 1),
('13015', 101, 0),
('13015', 103, 0),
('13015', 104, 0),
('14003', 102, 0),
('14003', 103, 0),
('14003', 104, 0),
('3344', 103, 1212),
('4', 204, 0),
('4', 208, 0),
('4', 243, 0),
('55', 1, 0),
('55', 6, 0),
('55', 11, 0),
('7', 1, 0),
('7', 6, 0),
('7', 11, 0),
('88', 1, 0),
('88', 6, 0),
('88', 11, 0),
('979', 1, 0),
('979', 6, 0),
('979', 11, 0);

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

--
-- Dumping data for table `STUDENT`
--

INSERT INTO `STUDENT` (`roll`, `name`, `batch`, `gender`, `phone`, `email`) VALUES
('', '', '', '', '', ''),
('12', '123', 'cse', '1234', '12345', ''),
('122', '211', '313', '1313', '1321', '31'),
('13015', 'Arjun', 'bca', 'male', '12345', ''),
('14003', 'KC', 'bca', 'male', '12345', ''),
('3344', '923', 'eee', 'female', 'dscd', ''),
('4', '444', '4', 'female', '4', '44'),
('55', '5555', '5', '2', '5', '5'),
('7', '77', '7', '1', '7', '77'),
('879', '9', '879', '1', '797', '97'),
('88', '8', '8', '1', '8', '8'),
('89898', 'iuo', 'dskhd', '1', 'kj', 'dsfsd'),
('97', '98722', '987', '1', '987', '97'),
('979', '98722', '987', '2', '79', '87987'),
('9872325', '87222', '9872323', '1', '9879', '79'),
('AM.AR.U313BCA018', 'Arun', 'S4BCA', '1', '9995882273', 'arunudayan2013@gmail.com'),
('AM.AR.U313BCA026', 'Vivek', 'S4BCA', '1', '12345', 'vivekravi44@gmail.com'),
('AM.AR.U313BCA87654', 'Shiva', 'S1BCA', '1', '2233', 's@d.com'),
('AM.EN.U4CSE12051', 'Harish', 'S6CSE', '1', '123456', 'a@h.com'),
('AM.EN.U4CSE13128', 'Joyce', 'S4CSE', '1', '12345', 'abc@xyz.com'),
('AM.EN.U4EEE87654', 'Neeraja', 'S1EEE', '2', '21368', 'a@b.c'),
('sdf', 'iuo', 'dskhd', '1', 'kj', 'dsfsd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
