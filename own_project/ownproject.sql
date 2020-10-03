-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 03, 2020 at 08:54 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ownproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `age` int(2) NOT NULL,
  `residence` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `clients` int(4) NOT NULL,
  `hours` int(5) NOT NULL,
  `awards` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `age`, `residence`, `address`, `email`, `phone`, `clients`, `hours`, `awards`) VALUES
(3, 33, 'Bangladesh', 'Satkhira, Bangladesh', 'official2050@yahoo.com', '+8801717411100', 393, 8090, 402);

-- --------------------------------------------------------

--
-- Table structure for table `clientsinfo`
--

CREATE TABLE `clientsinfo` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientsinfo`
--

INSERT INTO `clientsinfo` (`id`, `name`, `email`, `created_at`) VALUES
(19, 'Raj Hassan', 'official2050@gmail.com', '2020-10-03 18:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(1) NOT NULL,
  `name` varchar(50) NOT NULL,
  `work` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `movcat1` varchar(50) NOT NULL,
  `movcat2` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `name`, `work`, `image`, `movcat1`, `movcat2`, `created_at`) VALUES
(13, 'Raj Hassan', 'Web Developer', 'Web Developer.png', 'Web Designer', 'Web Developer', '2020-09-30 09:21:20');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `created_at`) VALUES
(1, 'raj@gmail.com', '123', '2020-09-30 08:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(2) NOT NULL,
  `knowledgeone` varchar(30) NOT NULL,
  `knowledgetwo` varchar(30) NOT NULL,
  `knowledgethree` varchar(30) NOT NULL,
  `knowledgefour` varchar(30) NOT NULL,
  `knowledgefive` varchar(30) NOT NULL,
  `knowledgesix` varchar(30) NOT NULL,
  `knowledgeseven` varchar(30) NOT NULL,
  `knowledgeeight` varchar(30) NOT NULL,
  `knowledgenine` varchar(30) NOT NULL,
  `knowledgeten` varchar(30) NOT NULL,
  `knowledgeeleven` varchar(30) NOT NULL,
  `knowledgetwelve` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `knowledgeone`, `knowledgetwo`, `knowledgethree`, `knowledgefour`, `knowledgefive`, `knowledgesix`, `knowledgeseven`, `knowledgeeight`, `knowledgenine`, `knowledgeten`, `knowledgeeleven`, `knowledgetwelve`, `created_at`) VALUES
(14, 'Data Entry', 'Web Design', 'Web Development', 'Photoshop', 'Communication', 'English Language', 'PHP Scraping', 'Website', 'Google Searching', 'Computer', 'MS Office', 'Communication', '2020-10-02 09:30:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientsinfo`
--
ALTER TABLE `clientsinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clientsinfo`
--
ALTER TABLE `clientsinfo`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
