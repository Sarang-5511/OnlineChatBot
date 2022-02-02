-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 05:56 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinebot`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `usermsg` varchar(100) NOT NULL,
  `botmsg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `usermsg`, `botmsg`) VALUES
(1, 'Hello', 'Hello there!'),
(2, 'How are you?', 'I am good.Thank you for asking.'),
(3, 'How old are you?', 'I was born on 25 Jan 2022.\r\n'),
(4, 'What is your name?', 'I am OnlineChat Bot created by Sarang.'),
(5, 'Where are you from?', 'I am from India'),
(6, 'hi', 'Hello there!'),
(7, 'Heyy', 'Hello there!'),
(8, 'How you doing?', 'I am good.Thank you for asking.'),
(9, 'What is your age?', 'I was born on 25 Jan 2022.'),
(10, 'When were you born?', 'I was born on 25 Jan 2022.'),
(11, 'When is your bday?', 'I was born on 25 Jan 2022.'),
(12, 'Whats ur name?', 'I am OnlineChat Bot created by Sarang.'),
(13, 'OK||okay', 'tahnk you');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
