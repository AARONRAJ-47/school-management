-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 05:42 PM
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
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `app`
--

CREATE TABLE `app` (
  `name` varchar(20) NOT NULL,
  `mnumber` int(10) NOT NULL,
  `native` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `community` varchar(20) NOT NULL,
  `std` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app`
--

INSERT INTO `app` (`name`, `mnumber`, `native`, `email`, `dob`, `community`, `std`) VALUES
('Aaron', 93522366, 'chennai', 'mari@gmail.com', '2000-04-06', 'MEN', '11'),
('sriman', 653467568, 'salam', 'jkggv@gmail.com', '2000-04-10', 'MEN', '10');

-- --------------------------------------------------------

--
-- Table structure for table `love today`
--

CREATE TABLE `love today` (
  `arun` varchar(20) NOT NULL,
  `roll_no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `tamil` int(10) NOT NULL,
  `english` int(10) NOT NULL,
  `maths` int(10) NOT NULL,
  `science` int(10) NOT NULL,
  `social` int(10) NOT NULL,
  `no` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`tamil`, `english`, `maths`, `science`, `social`, `no`) VALUES
(100, 99, 99, 999, 99, NULL),
(100, 98, 89, 89, 89, 502),
(98, 89, 89, 89, 89, 504),
(90, 78, 89, 80, 78, 551),
(50, 80, 60, 70, 84, 544);

-- --------------------------------------------------------

--
-- Table structure for table `std_info`
--

CREATE TABLE `std_info` (
  `name` varchar(20) NOT NULL,
  `roll_no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_info`
--

INSERT INTO `std_info` (`name`, `roll_no`) VALUES
('Arun', 541);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
