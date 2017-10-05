-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2017 at 12:34 AM
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
  `quesNo` int(11) NOT NULL,
  `rightAns` int(11) NOT NULL DEFAULT '0',
  `ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbl_ans`
--

INSERT INTO `dbl_ans` (`id`, `quesNo`, `rightAns`, `ans`) VALUES
(1, 1, 1, '30 Birds'),
(2, 1, 0, '60 Birds'),
(3, 1, 0, '80 Birds'),
(4, 1, 0, '120 Birds'),
(5, 2, 0, '34'),
(6, 2, 0, '38'),
(7, 2, 1, '42'),
(8, 2, 0, '62'),
(10, 3, 0, '4 km/hr\r\n'),
(11, 3, 0, '6 km/hr\r\n'),
(12, 3, 1, '8 km/hr\r\n'),
(13, 3, 0, 'Data inadequate\r\n'),
(14, 4, 0, 'I alone sufficient while II alone not sufficient to answer\r\n'),
(15, 4, 1, 'II alone sufficient while I alone not sufficient to answer\r\n'),
(16, 4, 0, 'Either I or II alone sufficient to answer\r\n'),
(17, 4, 0, 'Both I and II are not sufficient to answer\r\n');

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
(1, 1, 'A fires 5 shots to B\'s 3 but A kills only once in 3 shots while B kills once in 2 shots. When B has missed 27 times, A has killed:'),
(2, 2, 'What is the sum of two consecutive even numbers, the difference of whose squares is 84?'),
(3, 3, 'A boat running downstream covers a distance of 16 km in 2 hours while for covering the same distance upstream, it takes 4 hours. What is the speed of the boat in still water?'),
(4, 4, 'Two towns are connected by railway. Can you find the distance between them?');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `dbl_ques`
--
ALTER TABLE `dbl_ques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dbl_user`
--
ALTER TABLE `dbl_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
