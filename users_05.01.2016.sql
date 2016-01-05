-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2016 at 06:10 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_pass`) VALUES
(0, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `session_begin_end` varchar(20) NOT NULL,
  `session_status` varchar(10) NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `user_email`, `user_name`, `session_begin_end`, `session_status`) VALUES
(50, 'kazarev@gmail.com', 'Kiril', '1451816293', 'Active'),
(51, 'bobi@gmail.com', 'bobi', '1451816462', 'Active'),
(52, 'kazarev@gmail.com', 'Kiril', '1451816658', 'Active'),
(53, 'sss@ggg.bg', 'asd', '124567', 'Closed'),
(54, 'sss@ggg.bg', 'asd', '555555', 'Closed'),
(55, 'sss@ggg.bg', 'asd', '555555', 'Closed'),
(56, 'kazarev@gmail.com', 'asd', '555555', 'Closed'),
(57, 'kazarev@gmail.com', 'asd', '555555', 'Closed'),
(58, 'bobi@gmail.com', 'bobi', '1451817723', 'Active'),
(59, 'bobi@gmail.com', 'asd', '555555', 'Closed'),
(60, 'kazarev@gmail.com', 'Kiril', '1451817834', 'Active'),
(61, 'kazarev@gmail.com', 'asd', '555555', 'Closed'),
(62, 'bobi@gmail.com', 'bobi', '1451818015', 'Active'),
(63, 'bobi@gmail.com', 'bobi', '555555', 'Closed'),
(64, 'kazarev@gmail.com', 'Kiril', '1451818109', 'Active'),
(65, 'kazarev@gmail.com', 'Kiril', '1451818113', 'Closed'),
(66, 'bobi@gmail.com', 'bobi', '1451818506', 'Active'),
(67, 'kazarev@gmail.com', 'Kiril', '1451818564', 'Active'),
(68, 'kazarev@gmail.com', 'Kiril', '1451819420', 'Active'),
(69, 'kazarev@gmail.com', 'Kiril', '1451819428', 'Active'),
(70, 'kazarev@gmail.com', 'Kiril', '1451819439', 'Active'),
(71, 'bobi@gmail.com', 'bobi', '1451819588', 'Active'),
(72, 'bobi@gmail.com', 'bobi', '1451819594', 'Active'),
(73, 'kazarev@gmail.com', 'Kiril', '1451851855', 'Active'),
(74, 'kazarev@gmail.com', 'Kiril', '1451856070', 'Active'),
(75, 'kazarev@gmail.com', 'Kiril', '1451856104', 'Active'),
(76, 'kazarev@gmail.com', 'Kiril', '1452011789', 'Active'),
(77, 'bobi@gmail.com', 'bobi', '1452011865', 'Active'),
(78, 'kazarev@gmail.com', 'Kiril', '1452012824', 'Active'),
(79, 'kazarev@gmail.com', 'Kiril', '1452012886', 'Closed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_pass`, `user_email`) VALUES
(1, '123', 'sdds', 'setgssd@ssfcom'),
(3, 'fed', '123', 'fed@gma.com'),
(4, 'bobi', '123', 'bobi@gmail.com'),
(5, 'b', '12345a', 'b@g.com'),
(6, 'Kiril', '12345', 'kazarev@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
