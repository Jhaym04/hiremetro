-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2017 at 01:06 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hm_updated`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_information`
--

CREATE TABLE `employee_information` (
  `employee_id` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `picture` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_information`
--

INSERT INTO `employee_information` (`employee_id`, `fname`, `mname`, `lname`, `address`, `birthday`, `sex`, `contact`, `email`, `picture`) VALUES
('1', 'Celine Joy', 'Q.', 'Macaraeg', 'Bacoor, Cavite', '1998-11-04', 'Female', '09121212121', 'cjmacaraeg@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_ratings`
--

CREATE TABLE `employee_ratings` (
  `employee_id` varchar(20) NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_ratings`
--

INSERT INTO `employee_ratings` (`employee_id`, `rating`) VALUES
('1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `languages_spoken`
--

CREATE TABLE `languages_spoken` (
  `employee_id` varchar(20) NOT NULL,
  `language` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages_spoken`
--

INSERT INTO `languages_spoken` (`employee_id`, `language`) VALUES
('1', 'Filipino'),
('1', 'French'),
('1', 'Chinese');

-- --------------------------------------------------------

--
-- Table structure for table `login_credentials`
--

CREATE TABLE `login_credentials` (
  `employee_id` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_credentials`
--

INSERT INTO `login_credentials` (`employee_id`, `username`, `password`, `email`) VALUES
('1', 'Sample', '12345', 'cjmacaraeg@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` varchar(20) NOT NULL,
  `employee_id` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `suggestion_id` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `suggestion` varchar(500) NOT NULL,
  `viewed` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`suggestion_id`, `date`, `suggestion`, `viewed`) VALUES
('101520171', '2017-10-15', 'Lorem ipsum bacaah as', 0);

-- --------------------------------------------------------

--
-- Table structure for table `work_details`
--

CREATE TABLE `work_details` (
  `employee_id` varchar(20) NOT NULL,
  `work_title` varchar(50) NOT NULL,
  `work_description` varchar(250) NOT NULL,
  `work_pay` decimal(25,2) NOT NULL,
  `worker_location` varchar(100) NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_details`
--

INSERT INTO `work_details` (`employee_id`, `work_title`, `work_description`, `work_pay`, `worker_location`, `date_posted`) VALUES
('1', 'Maid', 'Maid at your service. You can call me..anytime.', '5000.00', 'Quezon City', '2017-10-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_information`
--
ALTER TABLE `employee_information`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `login_credentials`
--
ALTER TABLE `login_credentials`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`suggestion_id`);

--
-- Indexes for table `work_details`
--
ALTER TABLE `work_details`
  ADD PRIMARY KEY (`employee_id`,`work_title`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
