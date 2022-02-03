-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Nov 23, 2021 at 03:57 AM
=======
<<<<<<< HEAD
-- Generation Time: Nov 23, 2021 at 03:57 AM
=======
-- Generation Time: Jan 14, 2022 at 09:05 AM
>>>>>>> e527bb3410f9e16eccad2826cd410e88b70fab92
>>>>>>> bd723499f3626a8949d983dfd97a14c6c73d6971
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `categoryUser` varchar(255) NOT NULL,
  `categoryPick` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
>>>>>>> e527bb3410f9e16eccad2826cd410e88b70fab92

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `categoryUser`, `categoryPick`) VALUES
(1, '6', 'Digital Arts'),
(2, '6', 'Publication Material'),
(3, '6', 'Traditional Arts'),
(4, '1', 'Digital Arts'),
(5, '1', 'Graphics Arts'),
(6, '1', 'Photography'),
(7, '2', 'Digital Arts'),
(8, '2', 'Graphics Arts'),
(9, '2', 'Photography');
>>>>>>> bd723499f3626a8949d983dfd97a14c6c73d6971

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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `imageId` int(11) NOT NULL,
  `imageUser` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `messageId` varchar(255) DEFAULT NULL,
  `senderId` int(11) DEFAULT NULL,
  `receiverId` int(11) DEFAULT NULL,
  `dateCreated` int(11) DEFAULT NULL,
  `messageContent` text DEFAULT NULL,
  `messageStatus` enum('Sent','Read','Delete','Edit') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `messageId`, `senderId`, `receiverId`, `dateCreated`, `messageContent`, `messageStatus`) VALUES
(1, '1', 1, 2, NULL, 'message1', 'Sent'),
(2, '1', 1, 2, NULL, 'messagesample2', 'Sent'),
(3, '1', 1, 2, 1642139154, 'asd', 'Sent'),
(4, '1', 1, 2, 1642139475, 'asdasd', 'Sent'),
(5, '1', 1, 2, 1642139495, 'asdasd23', 'Sent'),
(7, '1', 1, 2, 1642139769, 'asdasd234', 'Sent'),
(8, '1', 1, 2, 1642139890, 'asdasd2345\r\n', 'Sent'),
(9, '1', 1, 2, 1642140010, 'asdasd23456\r\n', 'Sent'),
(10, '1', 1, 2, 1642145986, 'asdasd23456\r\n', 'Sent'),
(11, '1', 1, 2, 1642146112, 'asdasdasd123', 'Sent'),
(12, '1', 1, 2, 1642146144, 'asdasdasd12345', 'Sent');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `reserveId` int(11) NOT NULL,
  `reserveVehicle` varchar(255) NOT NULL,
  `reserveTimeIn` date NOT NULL,
  `reserveTimeOut` date NOT NULL,
  `reserveUser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
>>>>>>> e527bb3410f9e16eccad2826cd410e88b70fab92
>>>>>>> bd723499f3626a8949d983dfd97a14c6c73d6971
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

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> bd723499f3626a8949d983dfd97a14c6c73d6971
INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`, `usersCategory`) VALUES
(1, 'Romeo Rojo', 'romeorojo45@gmail.com', 'Romeo', '$2y$10$uzgIwxfbU9RtFmSdeJipg.aBUbfllYqZ1OIgwD.htmMtvYKmHRkLy', ''),
(2, 'qwe', 'romeorojo@gmail.com', 'qwe', '$2y$10$I5YPLnxUwtBwbZxf1GJLw.9oWw96XVIAYf7LuSgeAKGlqoMP2WuMq', ''),
(3, 'romeo sandrino', 'romeorojooo@gmail.com', 'romeoromeo', '$2y$10$ftV0nZ/WoKHUscfsP5pX8.yNaTSVMfohZCHDLTjgahebBq7RsCQuq', ''),
(4, 'wqeqwewq', 'abc@gmail.com', '123123', '$2y$10$82HzyaDMrgMnqP6u5xYZbuub/X5SfAcl47I/mJ9qRoPo5DbkkwNZ.', 'buyer'),
(5, 'Dylan Jabla', 'dylanjabla@gmail.com', 'dylan', '$2y$10$ld9ES8jgJfr0UTuDT5MDleDNA0KZMJnwDGSkh40gV1XM43YHwCybS', 'buyer'),
(6, 'kenlordtanga', 'kentanga@gmail.com', 'kentanga', '$2y$10$Ky94yRnUjlzQ4j0SgO4qM.ELrJEhz3AqqCRldn7hiWrYaF0srg3HS', 'buyer'),
(7, 'Patrick Yee', 'yatrick@gmail.com', 'Yatrick', '$2y$10$ZPDtNUMPbCCfhpTWvB9ci.FdmZ26tTVhD79tCqm05mvQLr9veTQtS', 'buyer');
<<<<<<< HEAD
=======
=======
INSERT INTO `users` (`usersId`, `usersStatus`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`, `usersCategory`, `profilepic`) VALUES
(1, '0', 'Dylan Jabla', 'dylan@mail.com', 'dylan', '202cb962ac59075b964b07152d234b70', 'Buyer', 'http://localhost/php/public/uploads/image/0839dbac6e442.jpg'),
(2, '0', 'Dylan Jabla2', 'dylan2@mail.com', 'dylan2', '81dc9bdb52d04dc20036dbd8313ed055', 'Seller', 'http://localhost/php/public/uploads/image/e990561a09e61.jpg');
>>>>>>> e527bb3410f9e16eccad2826cd410e88b70fab92
>>>>>>> bd723499f3626a8949d983dfd97a14c6c73d6971

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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`imageId`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`reserveId`);

--
>>>>>>> e527bb3410f9e16eccad2826cd410e88b70fab92
>>>>>>> bd723499f3626a8949d983dfd97a14c6c73d6971
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
>>>>>>> e527bb3410f9e16eccad2826cd410e88b70fab92
>>>>>>> bd723499f3626a8949d983dfd97a14c6c73d6971
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
<<<<<<< HEAD
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
=======
<<<<<<< HEAD
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
=======
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `reserveId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
>>>>>>> e527bb3410f9e16eccad2826cd410e88b70fab92
>>>>>>> bd723499f3626a8949d983dfd97a14c6c73d6971

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
