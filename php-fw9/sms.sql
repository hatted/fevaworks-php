-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2016 at 06:29 AM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` varchar(140) DEFAULT NULL,
  `createdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`id`, `message`, `createdate`) VALUES
(1, 'Hi', '2016-11-21 00:00:01'),
(2, 'Hello', '2016-11-21 00:00:02'),
(3, 'How are you?', '2016-11-21 00:00:03'),
(4, 'I am fine', '2016-11-21 00:00:04'),
(5, 'Good', '2016-11-21 00:00:05'),
(6, 'How about you?', '2016-11-21 00:00:06'),
(7, 'I am great.', '2016-11-21 00:00:07'),
(8, 'Great', '2016-11-21 00:00:08'),
(9, 'Let\'s go dinner', '2016-11-21 00:00:09'),
(10, 'sure', '2016-11-21 00:00:10'),
(11, 'What time?', '2016-11-21 00:00:11'),
(12, '7pm?', '2016-11-21 00:00:12'),
(13, 'sure.  see you tonight', '2016-11-21 00:00:13'),
(14, 'ok. bye', '2016-11-21 00:00:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
