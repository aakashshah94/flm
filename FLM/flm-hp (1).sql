-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2015 at 05:14 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flm-hp`
--

-- --------------------------------------------------------

--
-- Table structure for table `appdemo`
--

CREATE TABLE IF NOT EXISTS `appdemo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `type_leave` varchar(20) NOT NULL,
  `permission` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `appdemo`
--

INSERT INTO `appdemo` (`id`, `name`, `gender`, `type_leave`, `permission`) VALUES
(1, 'miti', '0.5', 'CL', 1),
(2, 'aakash', '1', 'ExL', 0),
(3, 'Harsh', '0.5', 'CL', 0),
(4, 'Harsh', '0.5', 'CL', 0),
(5, 'Harsh', '0.5', 'CL', 1),
(6, 'Harsh', '0.5', 'CL', 0),
(7, 'utsavi', '0.5', 'CL', 1),
(8, 'Harsh', '1', 'CL', 0),
(9, 'Harsh', '0.5', 'CL', 0),
(11, 'Harsh', '1', 'ExL', 0),
(12, 'Harsh', '0.5', 'CL', 0),
(13, 'utsavi', '1', 'ExL', 0),
(15, 'aakash', '1', 'CL', 0),
(16, 'Harsh', '0.5', 'CL', 0),
(17, 'Harsh', '1', 'CL', 0),
(18, 'Miti', '0.5', 'ExL', 0),
(19, 'utsavi', '0.5', 'ExL', 0),
(20, 'harsh', '1', 'ExL', 0),
(21, 'Harsh', '1', 'CL', 0),
(22, 'Harsh', '1', 'CL', 0),
(23, 'Miti', '0.5', 'CL', 0),
(24, 'Miti', '0.5', 'CL', 0),
(25, 'Miti', '0.5', 'CL', 0),
(26, 'Harsh', '1', 'CL', 0);

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `type_leave` varchar(20) NOT NULL,
  `day` varchar(10) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `caddress` varchar(100) NOT NULL,
  `cnumber` varchar(20) NOT NULL,
  `permission` int(11) NOT NULL DEFAULT '0',
  `num_days` float NOT NULL,
  `remarks` varchar(200) DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `Time` (`Time`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=164 ;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`Time`, `id`, `name`, `emp_id`, `type_leave`, `day`, `start_date`, `end_date`, `reason`, `caddress`, `cnumber`, `permission`, `num_days`, `remarks`) VALUES
('2015-01-28 12:07:18', 144, 'harsh', 'E004', 'EL', 'full', '2015-01-30', '2015-02-28', 'personal', '', '', -1, 30, 'no plz'),
('2015-01-28 12:09:13', 145, 'harsh', 'E004', 'ExL', 'full', '2015-01-30', '2015-02-28', 'personal', '', '', -1, 30, 'yess'),
('2015-01-28 12:45:53', 146, 'harsh', 'E004', 'LWP', 'full', '2015-01-28', '2015-01-28', 'personal', '', '', -1, 1, ''),
('2015-01-28 21:06:40', 147, 'harsh', 'E004', 'RH', 'full', '2015-01-30', '2015-01-31', 'personal', '', '', -1, 2, ''),
('2015-01-29 15:26:18', 148, 'harsh', 'E004', 'CL', 'full', '2015-01-16', '2015-01-31', 'personal', '', '', 1, 16, ''),
('2015-01-29 15:27:34', 149, 'harsh', 'E004', 'CL', 'full', '2015-01-16', '2015-01-31', 'personal', '', '', -1, 16, ''),
('2015-01-29 15:55:43', 150, 'harsh', 'E004', 'EL', 'full', '2015-01-10', '2015-01-15', 'personal', '', '', 1, 6, ''),
('2015-01-29 15:58:01', 151, 'harsh', 'E004', 'ExL', 'full', '2015-01-04', '2015-01-16', 'personal', '', '', 1, 13, ''),
('2015-01-29 15:58:17', 152, 'harsh', 'E004', 'ExL', 'full', '2015-01-04', '2015-01-16', 'personal', '', '', 1, 13, ''),
('2015-01-29 16:00:08', 153, 'harsh', 'E004', 'ExL', 'full', '2015-01-04', '2015-01-16', 'personal', '', '', -1, 13, ''),
('2015-01-29 16:00:37', 154, 'harsh', 'E004', 'ExL', 'full', '2015-01-04', '2015-01-16', 'personal', '', '', 0, 13, ''),
('2015-01-29 16:02:28', 155, 'harsh', 'E004', 'ExL', 'full', '2015-01-04', '2015-01-16', 'personal', '', '', 0, 13, ''),
('2015-01-29 16:02:37', 156, 'harsh', 'E004', 'SL', 'full', '2015-01-04', '2015-01-16', 'personal', '', '', 0, 13, ''),
('2015-01-29 16:04:49', 157, 'harsh', 'E004', 'SL', 'full', '2015-01-04', '2015-01-16', 'personal', '', '', 0, 13, ''),
('2015-01-29 16:04:57', 158, 'harsh', 'E004', 'ExL', 'full', '2015-01-04', '2015-01-16', 'personal', '', '', 0, 13, ''),
('2015-01-29 16:05:58', 159, 'harsh', 'E004', 'ExL', 'full', '2015-01-04', '2015-01-16', 'personal', '', '', 0, 13, ''),
('2015-01-29 16:06:31', 160, 'harsh', 'E004', 'ExL', 'full', '2015-01-04', '2015-01-16', 'personal', '', '', 0, 13, ''),
('2015-01-30 12:30:51', 161, 'miti', 'E002', 'SL', 'full', '2015-01-30', '2015-02-04', 'personal', '', '', 1, 6, ''),
('2015-01-30 17:55:02', 162, 'miti', 'E002', 'EL', 'full', '2015-01-30', '2015-01-30', 'personal', '', '', -1, 1, 'have fun!'),
('2015-01-30 18:10:17', 163, 'miti', 'E002', 'EL', 'full', '2015-01-11', '2015-01-30', 'personal', '', '', -1, 20, '');

-- --------------------------------------------------------

--
-- Table structure for table `current_status`
--

CREATE TABLE IF NOT EXISTS `current_status` (
  `name` varchar(20) NOT NULL,
  `CL` int(11) NOT NULL,
  `ExL` int(11) NOT NULL,
  `EL` int(11) NOT NULL,
  `SL` int(11) NOT NULL,
  `RH` int(11) NOT NULL,
  `DL` int(11) NOT NULL,
  `LWP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_status`
--

INSERT INTO `current_status` (`name`, `CL`, `ExL`, `EL`, `SL`, `RH`, `DL`, `LWP`) VALUES
('Harsh', 12, 10, 5, 4, 3, 2, -29),
('Utsavi', 18, 20, 66, 33, 99, 0, -2);

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE IF NOT EXISTS `demo` (
  `Name` varchar(20) NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `CL` float DEFAULT NULL,
  `ExL` float DEFAULT NULL,
  `EL` float DEFAULT NULL,
  `SL` float DEFAULT NULL,
  `RH` float DEFAULT NULL,
  `DL` float DEFAULT NULL,
  `LWP` float DEFAULT NULL,
  `total_credits` float DEFAULT NULL,
  UNIQUE KEY `Name` (`Name`),
  UNIQUE KEY `emp_id` (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`Name`, `emp_id`, `CL`, `ExL`, `EL`, `SL`, `RH`, `DL`, `LWP`, `total_credits`) VALUES
('aakash', 'E001', 10, 10, 10, 10, 10, 10, 10, 0),
('harsh', 'E004', 6, -4, 16, 22, 22, 22, 22, -1.3),
('miti', 'E002', 12, 12, 12, 6, 12, 12, 12, 0),
('utsavi', 'E003', 20, 20, 20, 20, 20, 20, 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `demo_init`
--

CREATE TABLE IF NOT EXISTS `demo_init` (
  `Emp_id` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `CL` float DEFAULT NULL,
  `ExL` float DEFAULT NULL,
  `EL` float DEFAULT NULL,
  `SL` float DEFAULT NULL,
  `RH` float DEFAULT NULL,
  `DL` float DEFAULT NULL,
  `LWP` float DEFAULT NULL,
  UNIQUE KEY `Emp_id` (`Emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo_init`
--

INSERT INTO `demo_init` (`Emp_id`, `Name`, `CL`, `ExL`, `EL`, `SL`, `RH`, `DL`, `LWP`) VALUES
('E001', 'aakash', 10, 10, 10, 10, 10, 10, 10),
('E002', 'miti', 12, 12, 12, 12, 12, 12, 12),
('E003', 'utsavi', 20, 20, 20, 20, 20, 20, 20),
('E004', 'harsh', 22, 22, 22, 22, 22, 22, 22);

-- --------------------------------------------------------

--
-- Table structure for table `leave_report`
--

CREATE TABLE IF NOT EXISTS `leave_report` (
  `lr_id` int(11) NOT NULL AUTO_INCREMENT,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `app_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lr_sdate` varchar(20) NOT NULL,
  `lr_edate` varchar(20) NOT NULL,
  `CL` float NOT NULL,
  `ExL` float NOT NULL,
  `EL` float NOT NULL,
  `SL` float NOT NULL,
  `RH` float NOT NULL,
  `DL` float NOT NULL,
  `LWP` float NOT NULL,
  `credits` float DEFAULT NULL,
  UNIQUE KEY `lr_id` (`lr_id`),
  UNIQUE KEY `app_id` (`app_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `leave_report`
--

INSERT INTO `leave_report` (`lr_id`, `Time`, `app_id`, `name`, `lr_sdate`, `lr_edate`, `CL`, `ExL`, `EL`, `SL`, `RH`, `DL`, `LWP`, `credits`) VALUES
(58, '2015-01-30 05:09:12', 152, 'harsh', '2015-01-04', '2015-01-16', 0, 13, 0, 0, 0, 0, 0, NULL),
(59, '2015-01-30 05:09:59', 148, 'harsh', '2015-01-16', '2015-01-31', 16, 0, 0, 0, 0, 0, 0, -1.3),
(61, '2015-01-30 05:13:03', 150, 'harsh', '2015-01-10', '2015-01-15', 0, 0, 6, 0, 0, 0, 0, NULL),
(62, '2015-01-30 05:13:04', 151, 'harsh', '2015-01-04', '2015-01-16', 0, 13, 0, 0, 0, 0, 0, NULL),
(63, '2015-01-30 12:31:49', 161, 'miti', '2015-01-30', '2015-02-04', 0, 0, 0, 6, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `emp_id` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin` varchar(11) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`time_stamp`, `emp_id`, `username`, `password`, `admin`, `id`) VALUES
('2015-01-30 06:51:21', 'E004', 'harsh', 'harsh', '1', 43),
('2015-01-30 06:51:21', 'E001', 'aakash', 'aakash', '0', 44),
('2015-01-30 06:51:21', 'E003', 'utsavi', 'utsavi', '0', 45),
('2015-01-30 06:51:21', 'E002', 'miti', 'miti', '0', 46),
('2015-01-30 16:38:32', 'admin', 'admin', 'admin', '1', 65);

-- --------------------------------------------------------

--
-- Table structure for table `tab1`
--

CREATE TABLE IF NOT EXISTS `tab1` (
  `name` varchar(100) NOT NULL,
  `emil` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab1`
--

INSERT INTO `tab1` (`name`, `emil`, `website`, `comment`, `gender`) VALUES
('harshj', 'lkjklj', 'dc', 's', 'female'),
('harshj', 'lkjklj', 'dc', 's', 'female'),
('', '', '', '', ''),
('harsh', 'pandya.hv1995@gmail.com', 'http://confluencemagazine.com/', 'c1', 'male'),
('', '', '', '', ''),
('harsh', 'pokjpoj', 'pknipnj', 'pknipj', 'female'),
('', '', '', '', ''),
('Harsh', 'pandya.hv1995@gmail.com', 'http://confluencemagazine.com/', 'assfc', 'male'),
('', '', '', '', ''),
('', '', '', '', ''),
('Harsh Pandya', 'pandya.hv1995@gmail.com', 'http://confluencemagazine.com/', 'lnhihn', 'male'),
('Harsh', 'pandya.hv1995@gmail.com', 'http://confluencemagazine.com/', 'vgfv', 'male'),
('Harsh', 'pandya.hv1995@gmail.com', 'http://confluencemagazine.com/', 'vgfv', 'male'),
('Harsh', 'pandya.hv1995@gmail.com', 'http://confluencemagazine.com/', 'lolol', 'male'),
('Harsh', 'pandya.hv1995@gmail.com', 'http://confluencemagazine.com/', 'lolol', 'male'),
('Harsh', '', '', '', 'female');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
