-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 12:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_planner`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbleventplanned`
--

CREATE TABLE `tbleventplanned` (
  `event_name` varchar(244) NOT NULL,
  `department` varchar(244) NOT NULL,
  `event_time_fr` time(4) NOT NULL,
  `event_time_to` time(4) NOT NULL,
  `event_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbleventplanned`
--

INSERT INTO `tbleventplanned` (`event_name`, `department`, `event_time_fr`, `event_time_to`, `event_date`) VALUES
('a', 'a', '11:11:00.0000', '14:22:00.0000', '2023-05-30'),
('', '', '00:00:00.0000', '00:00:00.0000', '0000-00-00'),
('', '', '00:00:00.0000', '00:00:00.0000', '0000-00-00'),
('CITEC DAY', 'CITEC', '11:11:00.0000', '12:12:00.0000', '2023-06-29'),
('CITEC week', 'CITEC', '11:22:00.0000', '15:30:00.0000', '2023-05-31'),
('', '', '00:00:00.0000', '00:00:00.0000', '0000-00-00'),
('', '', '00:00:00.0000', '00:00:00.0000', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tblregister`
--

CREATE TABLE `tblregister` (
  `Username` varchar(244) NOT NULL,
  `Password` varchar(244) NOT NULL,
  `Confirm Password` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblregister`
--

INSERT INTO `tblregister` (`Username`, `Password`, `Confirm Password`) VALUES
('SAEPadmin1', '123', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
