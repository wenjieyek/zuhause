-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2016 at 10:23 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'admin2', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `advertisment`
--

CREATE TABLE IF NOT EXISTS `advertisment` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisment`
--

INSERT INTO `advertisment` (`id`, `link`, `picture`, `type`) VALUES
(3, 'www.bing.com', 'advertisment/091142_2.jpg', 'ad1'),
(4, 'www.yahoo.com', 'advertisment/091155_3.jpg', 'ad2'),
(6, 'www.google.com.my', 'advertisment/101152_1.jpg', 'mainpage');

-- --------------------------------------------------------

--
-- Table structure for table `designer`
--

CREATE TABLE IF NOT EXISTS `designer` (
  `id` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `userpassword` varchar(255) NOT NULL,
  `useremail` varchar(30) NOT NULL,
  `userfullname` varchar(100) NOT NULL,
  `usercompanyname` varchar(100) NOT NULL,
  `userphonenumber` varchar(100) NOT NULL,
  `userpicture` varchar(100) NOT NULL,
  `userdescription` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designer`
--

INSERT INTO `designer` (`id`, `username`, `userpassword`, `useremail`, `userfullname`, `usercompanyname`, `userphonenumber`, `userpicture`, `userdescription`) VALUES
(4, 'Nayoung', '827ccb0eea8a706c4c34a16891f84e7b', 'nayoung@hotmail.com', 'Im Nayoung', 'Nayoung Company', '1234567', 'picture/131154_DT4dVtB.jpg', 'Hi, This is Nayoung'),
(5, 'So Hye', '827ccb0eea8a706c4c34a16891f84e7b', 'sohye@hotmail.com', 'Kim So Hye', 'S&P Company', '1234567', 'picture/131120_DT4dVtB.jpg', 'This is So Hye, IOI'),
(6, 'Wenjie ', '827ccb0eea8a706c4c34a16891f84e7b', 'dx3152@hotmail.com', 'Wenjie Yek', 'Wenjie Company', '0167193152', 'picture/131131_DT4dVtB.jpg', 'Hi');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `description`, `picture`, `tags`, `userid`, `title`, `thumbnail`) VALUES
(16, 'test', 'portfolio/Nayoung_20161128_172137_1.png', 'test', 'nayoung@hotmail.com', 'Test', 0),
(17, 'test', 'portfolio/Nayoung_20161128_172137_2.png', 'test', 'nayoung@hotmail.com', 'Test', 0),
(18, 'test', 'portfolio/Nayoung_20161128_172137_3.png', 'test', 'nayoung@hotmail.com', 'Test', 0),
(19, 'test', 'portfolio/Nayoung_20161128_172137_4.png', 'test', 'nayoung@hotmail.com', 'Test', 0),
(20, 'test', 'portfolio/Nayoung_20161128_172137_5.png', 'test', 'nayoung@hotmail.com', 'Test', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisment`
--
ALTER TABLE `advertisment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designer`
--
ALTER TABLE `designer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `advertisment`
--
ALTER TABLE `advertisment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `designer`
--
ALTER TABLE `designer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
