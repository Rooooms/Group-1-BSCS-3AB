-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 03:57 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artstop`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(255) NOT NULL,
  `usersEmail` varchar(255) NOT NULL,
  `usersUid` varchar(255) NOT NULL,
  `usersPwd` varchar(255) NOT NULL,
  `usersCategory` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`, `usersCategory`) VALUES
(1, 'Romeo Rojo', 'romeorojo45@gmail.com', 'Romeo', '$2y$10$uzgIwxfbU9RtFmSdeJipg.aBUbfllYqZ1OIgwD.htmMtvYKmHRkLy', ''),
(2, 'qwe', 'romeorojo@gmail.com', 'qwe', '$2y$10$I5YPLnxUwtBwbZxf1GJLw.9oWw96XVIAYf7LuSgeAKGlqoMP2WuMq', ''),
(3, 'romeo sandrino', 'romeorojooo@gmail.com', 'romeoromeo', '$2y$10$ftV0nZ/WoKHUscfsP5pX8.yNaTSVMfohZCHDLTjgahebBq7RsCQuq', ''),
(4, 'wqeqwewq', 'abc@gmail.com', '123123', '$2y$10$82HzyaDMrgMnqP6u5xYZbuub/X5SfAcl47I/mJ9qRoPo5DbkkwNZ.', 'buyer'),
(5, 'Dylan Jabla', 'dylanjabla@gmail.com', 'dylan', '$2y$10$ld9ES8jgJfr0UTuDT5MDleDNA0KZMJnwDGSkh40gV1XM43YHwCybS', 'buyer'),
(6, 'kenlordtanga', 'kentanga@gmail.com', 'kentanga', '$2y$10$Ky94yRnUjlzQ4j0SgO4qM.ELrJEhz3AqqCRldn7hiWrYaF0srg3HS', 'buyer'),
(7, 'Patrick Yee', 'yatrick@gmail.com', 'Yatrick', '$2y$10$ZPDtNUMPbCCfhpTWvB9ci.FdmZ26tTVhD79tCqm05mvQLr9veTQtS', 'buyer');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `img` varchar(256) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;