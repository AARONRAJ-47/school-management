-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 05:20 PM
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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Aaron', 'b4u.aaron@gmail.com', 'jgcfhfgxzgdfxfdkxychjfgvy'),
(2, 'vimal', 'vimal@gmail.com', 'gdshdfhfgjgjgfj'),
(3, 'vimal', 'vimal@gmail.com', 'gdshdfhfgjgjgfj');

-- --------------------------------------------------------

--
-- Table structure for table `dada`
--

CREATE TABLE `dada` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dada`
--

INSERT INTO `dada` (`id`, `name`, `password`) VALUES
(1, 'sam', 'farmer'),
(2, 'arun', 'tata'),
(3, 'dgfdhg', 'dgdfgdfg'),
(4, 'dfsg', 'dfsg'),
(5, 'dfsg', 'dsg'),
(6, 'vimal', 'sfdgdf5435'),
(7, 'vimal', 'sfdgdf5435');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `id` int(11) NOT NULL,
  `tamil` int(3) NOT NULL,
  `english` int(3) NOT NULL,
  `maths` int(3) NOT NULL,
  `science` int(3) NOT NULL,
  `social` int(3) NOT NULL,
  `result` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`id`, `tamil`, `english`, `maths`, `science`, `social`, `result`) VALUES
(1, 40, 40, 40, 40, 40, 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `mselect`
--

CREATE TABLE `mselect` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `std` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mselect`
--

INSERT INTO `mselect` (`id`, `name`, `std`) VALUES
(1, 'Aaron', '5'),
(2, 'vimal', '10'),
(3, 'Aaron', '8'),
(4, 'Aaron', '10');

-- --------------------------------------------------------

--
-- Table structure for table `mstd`
--

CREATE TABLE `mstd` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `father` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mstd`
--

INSERT INTO `mstd` (`id`, `name`, `father`, `phone`, `address`) VALUES
(1, 'vimal', 'john', 2147483647, 'sgshgjdt'),
(2, 'Aaron', 'jonni', 2147483647, 'fsdgdfhreyeujtjgy'),
(3, 'Aaron', 'jonni', 2147483647, 'rtttsd'),
(4, 'Aaron', 'jonni', 2147483647, 'rtttsd'),
(5, 'arun', 'john', 2147483647, 'drgf'),
(6, 'mai', 'jai', 2147483647, 'fdhghgh'),
(7, 'Aaron', 'john', 2147483647, 'drgf'),
(8, 'arun', 'jai', 9999999999, 'fsdgdfhreyeujtjgy'),
(9, 'Aaron', 'jonni', 2323312345, 'edede');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(70) NOT NULL,
  `phone` int(10) NOT NULL,
  `teacher` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `phone`, `teacher`) VALUES
(1, 'Aaron', 'b4u.aaron@gmail.com', 'c1165f606ddf7820561110e8c9ac3d0e', 2147483647, 'vimal'),
(2, 'mai', 'bala420@gmail.com', '28aa3e6d23803ab662a53cd635a73728', 2147483647, 'john'),
(3, 'mai', 'gum@gmail.com', '69bec8bfbec2b535dd39444f2b82774d', 2147483647, 'sfffff'),
(4, 'sas', 'sas@gmail.com', 'cde15d3be7a0275d3ffdafd2781dfb24', 1234567891, 'ddddd'),
(5, 'ggg', 'ggg@gamil.com', '84ae9922af012732ba7fc59d96e98d5b', 1234567891, 'sfffff');

-- --------------------------------------------------------

--
-- Table structure for table `std_detials`
--

CREATE TABLE `std_detials` (
  `id` int(3) NOT NULL,
  `no` varchar(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `section` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_detials`
--

INSERT INTO `std_detials` (`id`, `no`, `name`, `section`) VALUES
(1, '2oucs541', 'arun', 'A'),
(2, '', 'Aaron', ''),
(3, '', 'Aaron', ''),
(4, '', 'Aaron', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mnumber` int(10) NOT NULL,
  `native` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `community` varchar(10) NOT NULL,
  `std` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `mnumber`, `native`, `email`, `dob`, `community`, `std`) VALUES
(1, 'Aaron', 2147483647, 'chennai', 'b4u.aaron@gmail.com', '2005-08-07', 'MEN', 11),
(9, 'Aaron', 5777, 'salam', 'b4u.aaron@gmail.com', '0003-03-05', 'MEN', 10),
(10, 'gfjhgtfurt', 2147483647, 'cuddlore', 'b4u.aaron@gmail.com', '2000-03-22', 'MEN', 10),
(11, 'user', 2147483647, 'madurai', 'user@gmail.com', '2023-02-06', '', 12);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `password`) VALUES
(1, 'vimal', 'vimal@gmail.com', 'vimal12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dada`
--
ALTER TABLE `dada`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mselect`
--
ALTER TABLE `mselect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mstd`
--
ALTER TABLE `mstd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std_detials`
--
ALTER TABLE `std_detials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dada`
--
ALTER TABLE `dada`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mselect`
--
ALTER TABLE `mselect`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mstd`
--
ALTER TABLE `mstd`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `std_detials`
--
ALTER TABLE `std_detials`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
