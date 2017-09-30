-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2017 at 03:52 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

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
(1, 'admin', '123');

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

-- --------------------------------------------------------

--
-- Table structure for table `dbl_ques`
--

CREATE TABLE `dbl_ques` (
  `id` int(11) NOT NULL,
  `questionNo` tinyint(4) NOT NULL,
  `ques` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 'Fiaz Mughal', 'fiaz', '202cb962ac59075b964b07152d234b70', 'fmughal@gmail.com', 0);

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
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dbl_user`
--
ALTER TABLE `dbl_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
