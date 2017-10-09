-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 03:05 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbl_admin`
--

CREATE TABLE `dbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminUser` varchar(50) NOT NULL,
  `adminPass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbl_admin`
--

INSERT INTO `dbl_admin` (`adminId`, `adminUser`, `adminPass`) VALUES
(2, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `dbl_ans`
--

CREATE TABLE `dbl_ans` (
  `id` int(11) NOT NULL,
  `questionNo` int(11) NOT NULL,
  `rightAns` int(11) NOT NULL DEFAULT '0',
  `ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbl_ans`
--

INSERT INTO `dbl_ans` (`id`, `questionNo`, `rightAns`, `ans`) VALUES
(18, 1, 0, 'Margaret Thacher'),
(19, 1, 1, 'Bucher'),
(20, 1, 0, 'Diana'),
(21, 1, 0, 'Batman'),
(22, 2, 0, 'Ball'),
(23, 2, 1, 'Bat'),
(24, 2, 0, 'Wicket'),
(25, 2, 0, 'Gloves'),
(26, 2, 0, 'sdfs df'),
(27, 2, 1, 'sdfsdfsdf'),
(28, 2, 0, 'adfasdasd'),
(29, 2, 0, 'sdfsdfsdf'),
(30, 3, 0, 'asdf sdfsdf'),
(31, 3, 1, 'sdfs dfsdf asdf'),
(32, 3, 0, 'fsdgsdfgfdg sdf'),
(33, 3, 0, 'sdf dghfgdsvsdfsh');

-- --------------------------------------------------------

--
-- Table structure for table `dbl_ques`
--

CREATE TABLE `dbl_ques` (
  `id` int(11) NOT NULL,
  `questionNo` int(11) NOT NULL,
  `ques` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbl_ques`
--

INSERT INTO `dbl_ques` (`id`, `questionNo`, `ques`) VALUES
(5, 1, 'Name of the President?'),
(6, 2, 'Name of the Game?'),
(7, 3, 'What is the of your place?'),
(33, 4, 'City'),
(34, 4, 'City'),
(35, 4, 'City'),
(36, 4, 'City'),
(37, 4, 'City');

-- --------------------------------------------------------

--
-- Table structure for table `dbl_user`
--

CREATE TABLE `dbl_user` (
  `userId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbl_user`
--

INSERT INTO `dbl_user` (`userId`, `name`, `username`, `password`, `email`, `status`) VALUES
(1, 'Sarder Iftekhar', 'sarder', '202cb962ac59075b964b07152d234b70', 'sarder2008@gmail.com', 0),
(2, 'Fiaz Mughal', 'fiaz', '202cb962ac59075b964b07152d234b70', 'fmughal@gmail.com', 0),
(3, 'Fiaz MUghal', 'fiaz', '202cb962ac59075b964b07152d234b70', 'fiaz@lhlocums.co.uk', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbl_admin`
--
ALTER TABLE `dbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `dbl_ans`
--
ALTER TABLE `dbl_ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbl_ques`
--
ALTER TABLE `dbl_ques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbl_user`
--
ALTER TABLE `dbl_user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dbl_admin`
--
ALTER TABLE `dbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dbl_ans`
--
ALTER TABLE `dbl_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `dbl_ques`
--
ALTER TABLE `dbl_ques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `dbl_user`
--
ALTER TABLE `dbl_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
