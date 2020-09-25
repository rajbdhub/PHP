-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 25, 2020 at 05:11 PM
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
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(2) NOT NULL,
  `book_name` varchar(70) NOT NULL,
  `book_image` varchar(100) NOT NULL,
  `book_author_name` varchar(50) NOT NULL,
  `book_publication_name` varchar(50) NOT NULL,
  `book_purchase_date` varchar(50) NOT NULL,
  `book_price` varchar(10) NOT NULL,
  `book_quantity` int(3) NOT NULL,
  `available_quantity` int(3) NOT NULL,
  `libraian_username` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `book_image`, `book_author_name`, `book_publication_name`, `book_purchase_date`, `book_price`, `book_quantity`, `available_quantity`, `libraian_username`, `created_at`) VALUES
(7, 'php easy', 'jhonkar.jpg', 'jhonkar', 'mahbub', '2020-09-21', '500', 10, 9, 'admin', '2020-09-21 17:58:28'),
(9, 'web development', 'nishu.jpg', 'nishu', 'hassan', '2020-09-01', '1000', 50, 50, 'admin', '2020-09-24 16:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `id` int(3) NOT NULL,
  `student_id` int(3) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `book_id` int(3) NOT NULL,
  `book_issue_date` varchar(20) NOT NULL,
  `book_return_date` varchar(20) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`id`, `student_id`, `student_name`, `book_id`, `book_issue_date`, `book_return_date`, `datetime`) VALUES
(1, 4, 'Raj Hassan', 7, '24-09-2020', '25-09-2020', '2020-09-24 16:50:40'),
(2, 5, 'Roni Akbar', 9, '24-09-2020', '25-09-2020', '2020-09-24 16:53:45'),
(3, 4, 'Raj Hassan', 7, '25-09-2020', '25-09-2020', '2020-09-25 08:02:32'),
(4, 5, 'Roni Akbar', 9, '25-09-2020', '25-09-2020', '2020-09-25 08:04:09'),
(5, 5, 'Roni Akbar', 9, '25-09-2020', '25-09-2020', '2020-09-25 08:08:18'),
(6, 4, 'Raj Hassan', 7, '25-09-2020', '', '2020-09-25 09:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `libraian`
--

CREATE TABLE `libraian` (
  `id` int(3) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `libraian`
--

INSERT INTO `libraian` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `created_at`) VALUES
(1, 'Raj', 'Libraian', 'admin@gmail.com', 'admin', '123', '2020-09-20 16:39:24');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `class` int(2) NOT NULL,
  `email` varchar(100) NOT NULL,
  `roll` varchar(6) NOT NULL,
  `reg_no` varchar(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `c_password` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `lastname`, `class`, `email`, `roll`, `reg_no`, `username`, `password`, `c_password`, `phone`, `image`, `status`, `created_at`) VALUES
(4, 'Raj', 'Hassan', 2, 'raj@gmail.com', '112233', '111111', 'rajhassan', 'd0970714757783e6cf17b26fb8e2298f', 'd0970714757783e6cf17b26fb8e2298f', '01717411100', 'rajhassan.png', 1, '2020-09-20 06:34:14'),
(5, 'Roni', 'Akbar', 5, 'moni@gmail.com', '223344', '223344', 'roniakbar', '77b3e6926e7295494dd3be91c6934899', '77b3e6926e7295494dd3be91c6934899', '01919411100', 'roniakbar.png', 1, '2020-09-20 13:24:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_book`
--
ALTER TABLE `issue_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libraian`
--
ALTER TABLE `libraian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `issue_book`
--
ALTER TABLE `issue_book`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `libraian`
--
ALTER TABLE `libraian`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
