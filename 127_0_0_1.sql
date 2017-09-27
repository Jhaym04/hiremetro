-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2017 at 11:49 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hiremetro`
--
CREATE DATABASE IF NOT EXISTS `hiremetro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hiremetro`;

-- --------------------------------------------------------

--
-- Table structure for table `employee_information`
--

CREATE TABLE `employee_information` (
  `employee_id` int(200) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `contact_number` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `gender` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_information`
--

INSERT INTO `employee_information` (`employee_id`, `fname`, `lname`, `contact_number`, `email`, `birthday`, `gender`) VALUES
(1, 'John Mher Dhexs ', 'Emotin', '09156105259', 'ejohnmher@gmail.com', '2017-10-27', 'Male'),
(2, 'John Mher Dhexs', 'Emotin', '09156105259', 'ejohnmher@gmail.com', '0000-00-00', 'on'),
(3, 'John Mher Dhexs', 'Emotin', '09156105259', 'ejohnmher@gmail.com', '0000-00-00', 'on'),
(4, 'John Mher Dhexs', 'Emotin', '09156105259', 'ejohnmher@gmail.com', '0000-00-00', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `login_credentials`
--

CREATE TABLE `login_credentials` (
  `employee_id` int(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_credentials`
--

INSERT INTO `login_credentials` (`employee_id`, `username`, `password`, `email`) VALUES
(1, 'johnmher', 'johnmher', 'ejohnmher@gmail.com'),
(2, 'johnmher', 'johnmher', 'johnmher'),
(3, 'johnmher', 'johnmher', 'ejohnmher@gmail.com'),
(4, 'johnmher', 'johnmher', 'ejohnmher@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_information`
--
ALTER TABLE `employee_information`
  ADD PRIMARY KEY (`employee_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
