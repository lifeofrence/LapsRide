-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 06:34 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laps`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `pwd` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pwd`) VALUES
(1, 'law', 'law'),
(2, 'law', 'b4214c2396967e34b6674406f');

-- --------------------------------------------------------

--
-- Table structure for table `bookride`
--

CREATE TABLE `bookride` (
  `id` int(9) NOT NULL,
  `pickup` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `time` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookride`
--

INSERT INTO `bookride` (`id`, `pickup`, `destination`, `name`, `time`, `date`, `phone`, `email`) VALUES
(1, 'Veritas University Abuja ', 'Community B10 Kabusa Garden Estate, Lokogoma', 'Ben Anemba', '1pm', '2021-12-16', '0802083982', 'ben@gmail.com'),
(2, '	Veritas University Abuja', '12 Ogbona onu', 'Lawrence Chris', '1pm', '2022-01-02', '00090292023', 'law@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(40) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `created`) VALUES
(1, 'TIME FOR TODAY MASS', '2021-08-24 23:36:17'),
(2, 'New Update coming soon', '2021-12-30 06:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `news_body`
--

CREATE TABLE `news_body` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_body`
--

INSERT INTO `news_body` (`id`, `body`) VALUES
(1, 'Mass today will be 12:10 '),
(2, 'The new update will be able to allow you make payment online, and lot more ');

-- --------------------------------------------------------

--
-- Table structure for table `sendmessage`
--

CREATE TABLE `sendmessage` (
  `id` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sendmessage`
--

INSERT INTO `sendmessage` (`id`, `fullName`, `email`, `message`, `date`) VALUES
(1, 'law', 'NPWR/2020/006487108', 'ugvh', '2021-12-14 05:39:56'),
(2, 'Momoh ', 'momoh123@gmail.com', 'i love all my woofer very much and equally ', '2021-12-29 10:39:58'),
(3, 'Peter Momoh', 'gshockchris@gmail.com', 'erfg', '2021-12-30 03:17:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookride`
--
ALTER TABLE `bookride`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_body`
--
ALTER TABLE `news_body`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sendmessage`
--
ALTER TABLE `sendmessage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news_body`
--
ALTER TABLE `news_body`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sendmessage`
--
ALTER TABLE `sendmessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
