-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2017 at 01:59 PM
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
CREATE DATABASE IF NOT EXISTS `hm_updated` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hm_updated`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `social_id` int(11) NOT NULL,
  `social_media` varchar(50) NOT NULL,
  `account` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`social_id`, `social_media`, `account`) VALUES
(0, 'facebook', 'fb.com/hiremetro'),
(1, 'twitter', '@hiremetro'),
(2, 'gmail', 'hiremetro@gmail.com');

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
  `picture` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_information`
--

INSERT INTO `employee_information` (`employee_id`, `fname`, `mname`, `lname`, `address`, `birthday`, `sex`, `contact`, `email`, `picture`) VALUES
('1', 'Celine Joy', 'Q.', 'Macaraeg', 'Bacoor, Cavite', '1998-11-04', 'Female', '09121212121', 'cjmacaraeg@gmail.com', ''),
('3', 'John Mher Dhexs', '-', 'Emotin', 'Blk 13 Lot 8 Aries St., Tanza Aries St.,', '1999-07-04', 'Male', '09156105259', 'ejohnmher@gmail.com', '/images/user_image/18121630_1406512676109484_2611103488144679197_o.jpg'),
('7', 'Celine Joy ', '-', 'Macaraeg', 'Cavite', '1998-11-04', 'Female', '09000000000', 'macaraeg.celine@tup.edu.ph', '/images/user_image/123.JPG'),
('5', 'Mark Augustine', 'P', 'Mercado', 'Cavite', '1999-08-05', 'Male', '', '', '/images/user_image/IMG_1350.JPG');

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
-- Table structure for table `login_credentials`
--

CREATE TABLE `login_credentials` (
  `employee_id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_credentials`
--

INSERT INTO `login_credentials` (`employee_id`, `username`, `password`, `email`) VALUES
(1, 'Sample', '12345', 'cjmacaraeg@gmail.com'),
(7, 'celine', 'macaraeg', 'macaraeg.celine@tup.edu.ph'),
(0, 'admin', 'admin', 'hiremetro@gmail.com'),
(3, 'johnmher', 'johnmher', 'ejohnmher@gmail.com'),
(5, 'markus', 'mercado', 'markaugustine.mercado@tup.edu.ph');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `employee_id` int(100) NOT NULL,
  `report_id` int(100) NOT NULL,
  `report_subject` text NOT NULL,
  `report_body` text NOT NULL,
  `report_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`employee_id`, `report_id`, `report_subject`, `report_body`, `report_date`) VALUES
(1, 2, 'MASUNGIT', 'Lorem Ipsum na dito', '2017-10-17'),
(1, 1, 'Masungit', 'KUTUSAN NA YAN', '2017-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `suggestion_id` int(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `suggestion` varchar(500) NOT NULL,
  `viewed` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`suggestion_id`, `subject`, `date`, `suggestion`, `viewed`) VALUES
(10151701, 'Sample 1', '2017-10-15', 'Lorem ipsum bacaah as', 1),
(10161701, 'Sample 2', '2017-10-16', 'Lorem ipsum bacaah as', 0),
(10161702, 'Sample 3', '2017-10-16', 'Lorem ipsum bacaah as', 1),
(10161703, 'Sample 4', '2017-10-16', 'Lorem ipsum', 0),
(10161704, 'Sample 5', '2017-10-16', 'Lorem ipsum', 1),
(10161705, 'Sample 6', '2017-10-16', 'Lorem ipsum', 0),
(10161706, 'Sample 7', '2017-10-16', 'Lorem ipsum', 0),
(10161707, 'Sample 8', '2017-10-16', 'Lorem Ipsum', 0),
(10161708, 'Sample 9', '2017-10-16', 'Lorem Ipsum', 1);

-- --------------------------------------------------------

--
-- Table structure for table `work_details`
--

CREATE TABLE `work_details` (
  `employee_id` int(20) NOT NULL,
  `work_title` varchar(50) NOT NULL,
  `work_description` varchar(250) NOT NULL,
  `work_pay` decimal(25,2) NOT NULL,
  `worker_location` varchar(100) NOT NULL,
  `work_language` text NOT NULL,
  `date_posted` date NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_details`
--

INSERT INTO `work_details` (`employee_id`, `work_title`, `work_description`, `work_pay`, `worker_location`, `work_language`, `date_posted`, `status`) VALUES
(1, 'Maid', 'Maid at your service. You can call me..anytime.', '5000.00', 'Quezon City', 'Tagalog', '2017-10-02', 'show'),
(3, 'Bartender', 'bars', '500.00', 'Navotas', 'Tagalog', '2017-10-14', 'show'),
(5, 'Janitor', 'Linis Everywhere !', '1.00', 'Cavite', 'Tagalog', '2017-10-15', 'show'),
(7, 'Maid', 'Tulong Everywhere', '600.00', 'Cavite', 'Tagalog', '2017-10-15', 'show');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`social_id`);

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
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

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
