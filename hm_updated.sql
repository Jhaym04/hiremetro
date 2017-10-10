-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2017 at 01:38 AM
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
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_information`
--

INSERT INTO `employee_information` (`employee_id`, `fname`, `mname`, `lname`, `address`, `birthday`, `sex`, `contact`, `email`) VALUES
('1', 'Celine Joy', 'Q.', 'Macaraeg', 'Bacoor, Cavite', '1998-11-04', 'Female', '09121212121', 'cjmacaraeg@gmail.com'),
('2', 'John Mher Dhexs', '-', 'Emotin', 'Blk 13 Lot 8 Aries St., Tanza Aries St.,', '0000-00-00', 'Male', '09156105259', 'ejohnmher@gmail.com'),
('3', 'Lei Dian', 'T.', 'Mendoza', 'Tera Alta', '0000-00-00', 'Female', '09123456789', 'leidian@gmail.com'),
('4', '', '', '', '', '0000-00-00', 'Male', '', ''),
('5', 'John Mher Dhexs', '-', 'Emotin', 'Blk 13 Lot 8 Aries St., Tanza Aries St.,', '0000-00-00', 'Male', '09156105259', 'ejohnmher@gmail.com'),
('10', 'aa', '', 'aa', 'aa', '0000-00-00', 'Male', 'aa', 'aa@gmail.com'),
('11', 'asdasda', 'asd', 'sdasdasd', 'sdasda', '0000-00-00', 'Male', 'asdasda', 'asdasdas@gmail.com'),
('9', 'John Mher Dhexs', '-', 'Emotin', 'Blk 13 Lot 8 Aries St., Tanza Aries St.,', '0000-00-00', 'Male', '09156105259', 'ejohnmher@gmail.com'),
('8', 'John Mher Dhexs', '-', 'Emotin', 'Blk 13 Lot 8 Aries St., Tanza Aries St.,', '0000-00-00', 'Male', '09156105259', 'ejohnmher@gmail.com'),
('7', 'John Mher Dhexs', '-', 'Emotin', 'Blk 13 Lot 8 Aries St., Tanza Aries St.,', '0000-00-00', 'Male', '09156105259', 'ejohnmher@gmail.com'),
('6', 'John Mher Dhexs', '-', 'Emotin', 'Blk 13 Lot 8 Aries St., Tanza Aries St.,', '0000-00-00', 'Male', '09156105259', 'ejohnmher@gmail.com'),
('13', 'John Mher Dhexs', 'Mercado', 'Emotin', 'Blk 13 Lot 8 Aries St., Tanza Aries St.,', '0000-00-00', 'Male', '', '');

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
(2, 'JHAYM04', 'johnmher', 'ejohnmher@gmail.com'),
(3, '', '', 'leidian@gmail.com'),
(4, '', '', ''),
(5, 'JHAYM05', 'johnmher', 'ejohnmher@gmail.com'),
(10, 'aa', 'aa', 'aa@gmail.com'),
(9, '', '', 'ejohnmher@gmail.com'),
(8, '', '', 'ejohnmher@gmail.com'),
(7, '', '', 'ejohnmher@gmail.com'),
(6, '', '', 'ejohnmher@gmail.com'),
(11, 'asdas', 'dasdasdasd', 'asdasdas@gmail.com'),
(13, 'JHAYM06', 'johnmher', 'ejohnmher@gmail.com');

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
  `date_posted` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_details`
--

INSERT INTO `work_details` (`employee_id`, `work_title`, `work_description`, `work_pay`, `worker_location`, `date_posted`) VALUES
(1, 'Maid', 'Maid at your service. You can call me..anytime.', '5000.00', 'Quezon City', '2017-10-02'),
(2, 'Bartender', 'HAHAHAHAHA NOHHH ??', '500.00', 'Navotas', '2017-10-05'),
(3, 'Bartender', '', '0.00', '', '2017-10-05'),
(4, 'Bartender', '', '0.00', '', '2017-10-06'),
(5, 'Cook', 'Tagapagluto mo ko', '500.00', 'Navotas City', '2017-10-06'),
(9, 'Bartender', 'Ohhebebeb', '700.00', 'hahahahha', '2017-10-06'),
(8, 'Bartender', 'Ohhebebeb', '988.00', 'hahahahha', '2017-10-06'),
(7, 'Bartender', 'Ohhebebeb', '988.00', 'hahahahha', '2017-10-06'),
(6, 'Bartender', 'Ohhebebeb', '988.00', 'hahahahha', '2017-10-06'),
(10, 'Bartender', 'aaaa', '11.00', 'aaaa', '2017-10-06'),
(11, 'Bartender', 'asdasd', '1.00', 'asdasd', '2017-10-06'),
(13, 'Bartender', 'Barts', '900.00', 'navotas', '2017-10-06');

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
-- Indexes for table `work_details`
--
ALTER TABLE `work_details`
  ADD PRIMARY KEY (`employee_id`,`work_title`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
