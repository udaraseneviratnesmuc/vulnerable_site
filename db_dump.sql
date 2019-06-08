-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2019 at 01:38 AM
-- Server version: 5.7.26-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `security`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Jameel', 'jameel@test.com', 'Get in touch'),
(2, 'jameel', 'jameel@test.com', 'Get in touch'),
(3, 'jameel', 'jameel@test.com', 'Get in touch'),
(4, 'hgfjhgj', 'hgjhg', 'hjgjhgkjh'),
(5, 'hgfjhgj', 'hgjhg', 'hjgjhgkjh'),
(6, 'hgfjhgj', 'hgjhg', 'hjgjhgkjh'),
(7, 'hgfjhgj', 'hgjhg', 'hjgjhgkjh'),
(8, 'hgfjhgj', 'hgjhg', 'hjgjhgkjh'),
(9, 'hgfjhgj', 'hgjhg', 'hjgjhgkjh'),
(10, 'hgfjhgj', 'hgjhg', 'hjgjhgkjh'),
(11, 'hgfjhgj', 'hgjhg', 'hjgjhgkjh'),
(12, 'hgfjhgj', 'hgjhg', 'hjgjhgkjh'),
(13, 'hgfjhgj', 'hgjhg', 'hjgjhgkjh');

-- --------------------------------------------------------

--
-- Table structure for table `exam_results`
--

CREATE TABLE `exam_results` (
  `id` int(3) NOT NULL,
  `exam_number` int(6) NOT NULL,
  `result` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_results`
--

INSERT INTO `exam_results` (`id`, `exam_number`, `result`) VALUES
(1, 123456, 'A'),
(2, 456789, 'C'),
(3, 789456, 'A'),
(4, 456123, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `address`, `role`, `status`) VALUES
(1, 'admin', 'admin@123', '		<script type="text/javascript"> 			alert("Danger"); 		</script>', 'Montecarlo', 'Administrator', 'INACTIVE'),
(2, 'root', 'updated', 'Sandra Kelly', 'Pathway, Canada', 'Administrator', 'INACTIVE'),
(3, 'test', 'updated', 'Michel Morgan', 'Michigon, USA', 'User', 'ACTIVE'),
(4, 'hj', 'jhkj', 'Administrator', 'kjhkj', 'jhkj', 'ACTIVE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_results`
--
ALTER TABLE `exam_results`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exam_number` (`exam_number`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `exam_results`
--
ALTER TABLE `exam_results`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
