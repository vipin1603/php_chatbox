-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2016 at 08:10 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fbchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_chat_messages`
--

CREATE TABLE `user_chat_messages` (
  `id` int(11) NOT NULL,
  `message_content` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `message_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `recipient` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_chat_messages`
--

INSERT INTO `user_chat_messages` (`id`, `message_content`, `username`, `message_time`, `recipient`) VALUES
(5, '111', 'otpl', '2016-05-02 05:29:57', 'admin'),
(6, 'qqq', 'admin', '2016-05-02 05:30:09', 'otpl'),
(7, 'hiiii', 'admin', '2016-05-02 05:46:25', 'otpl'),
(8, 'hello', 'otpl', '2016-05-02 05:47:04', 'admin'),
(9, '111', 'otpl', '0000-00-00 00:00:00', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_chat_messages`
--
ALTER TABLE `user_chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_chat_messages`
--
ALTER TABLE `user_chat_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
