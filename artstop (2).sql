-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2022 at 03:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

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
CREATE DATABASE IF NOT EXISTS `artstop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `artstop`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `categoryUser` varchar(255) NOT NULL,
  `categoryPick` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `categoryUser`, `categoryPick`) VALUES
(1, '1', 'Digital Arts'),
(2, '1', 'Graphics Arts'),
(3, '1', 'Photography'),
(4, '7', 'Publication Material'),
(5, '7', 'Traditional Arts'),
(6, '8', 'Digital Arts'),
(7, '8', 'Graphics Arts'),
(8, '8', 'Photography');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

DROP TABLE IF EXISTS `checkout`;
CREATE TABLE `checkout` (
  `checkoutId` int(11) NOT NULL,
  `buyerName` varchar(255) NOT NULL,
  `buyerEmail` varchar(255) NOT NULL,
  `buyerAddress` varchar(255) NOT NULL,
  `MOP` varchar(255) NOT NULL,
  `Mode_of_Delivery` varchar(255) NOT NULL,
  `instruction` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`checkoutId`, `buyerName`, `buyerEmail`, `buyerAddress`, `MOP`, `Mode_of_Delivery`, `instruction`) VALUES
(1, 'Roms', 'romeo@gmail.com', 'USA', 'PayPal', 'Digital', 'basta doon');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE `image` (
  `imageId` int(11) NOT NULL,
  `imageUser` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE `project` (
  `projectId` int(11) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `projectImage` varchar(255) NOT NULL,
  `projectTitle` varchar(255) NOT NULL,
  `projectCategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectId`, `userId`, `projectImage`, `projectTitle`, `projectCategory`) VALUES
(1, '3', 'http://localhost/php/public/uploads/projectImage/e655f90020ba8.jfif', 'Hoshi', 'Photography'),
(2, '3', 'http://localhost/php/public/uploads/projectImage/068bded1c4184.jfif', 'Hoshi', 'Photography');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE `service` (
  `serviceId` int(11) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `serviceImage` varchar(255) NOT NULL,
  `serviceTitle` varchar(255) NOT NULL,
  `serviceDescrp` varchar(255) NOT NULL,
  `serviceCategory` varchar(255) NOT NULL,
  `servicePrice` varchar(255) NOT NULL,
  `serviceMOD` varchar(255) NOT NULL,
  `serviceTimeFrame` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serviceId`, `userId`, `serviceImage`, `serviceTitle`, `serviceDescrp`, `serviceCategory`, `servicePrice`, `serviceMOD`, `serviceTimeFrame`) VALUES
(1, '2', 'http://localhost/php1/public/uploads/serviceImage/3fbbb20030071.png', 'Cute', 'Romeo Cute', 'Photography', '1000', 'Digital Delivery', '1 Week'),
(2, '', 'http://localhost/php/public/uploads/serviceImage/e84104d02891a.png', 'Sample', 'Sample', 'Photography', '1000', 'Digital Delivery', '1 Week'),
(3, '', 'http://localhost/php/public/uploads/serviceImage/ca4aee2f4c3ed.png', 'Sample', 'Sample', 'Photography', '1000', 'Digital Delivery', '1 Week'),
(4, '1', 'http://localhost/php/public/uploads/serviceImage/af6f6b98b43bc.png', 'Sample', 'Sample', 'Photography', '1000', 'Digital Delivery', '1 Week'),
(5, '1', 'http://localhost/php/public/uploads/serviceImage/29b36c0bfa38d.png', 'Sample', 'Sample', 'Digital Arts', '1000', 'Digital Delivery', '1 Week'),
(6, '3', 'http://localhost/php/public/uploads/serviceImage/12199f91fdead.png', 'Sample', 'Sample', 'Graphics Arts', '1000', 'Physical Delivery', '1 Week'),
(7, '3', 'http://localhost/php/public/uploads/serviceImage/5f0aea49c723c.png', 'Sample', 'Sample', 'Graphics Arts', '1000', 'Digital Delivery', '1 Week'),
(8, '3', 'http://localhost/php/public/uploads/serviceImage/5f0aea49c723c.png', 'Sample', 'Sample', 'Graphics Arts', '1000', 'Digital Delivery', '1 Week');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersStatus` enum('0','1') NOT NULL,
  `usersName` varchar(255) NOT NULL,
  `usersEmail` varchar(255) NOT NULL,
  `usersUid` varchar(255) NOT NULL,
  `usersPwd` varchar(255) NOT NULL,
  `usersCategory` varchar(255) NOT NULL,
  `profilepic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersStatus`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`, `usersCategory`, `profilepic`) VALUES
(1, '0', 'Romeo', 'romeorojo@gmail.com', 'Roms', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Buyer', 'http://localhost/php/public/uploads/image/8dedaf9c8c4a9.png'),
(2, '0', 'Romeo', 'romeorojooo@gmail.com', 'Romssss', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Seller', 'http://localhost/php/public/uploads/image/a24d1a97ec52f.png'),
(3, '0', 'Dylan', 'dylan@gmail.com', 'Dylan', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Seller', 'http://localhost/php/public/uploads/image/e398d9852939d.png'),
(4, '0', 'Dylan', 'dylan@mail.com', 'Dylann', '202cb962ac59075b964b07152d234b70', 'Seller', 'http://localhost/php1/public/uploads/image/685503ff95ebb.png'),
(5, '0', 'Patrick', 'patrickbobo@gmail.com', 'Patricktanga', '202cb962ac59075b964b07152d234b70', 'Buyer', 'http://localhost/php1/public/uploads/image/e4946ebb58bbf.png'),
(6, '0', 'Rellmon', 'rellmon@mail.com', 'Rellmon', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Seller', 'http://localhost/php/public/uploads/image/e3b8a16b6db11.png'),
(7, '0', 'New', 'new@gmail.com', 'New', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Buyer', 'http://localhost/php1/public/uploads/image/186b804f40935.png'),
(8, '0', 'Romeo', 'mamamoblueandred@gmail.com', 'mamamoblueandred', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Buyer', '');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

DROP TABLE IF EXISTS `works`;
CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `img` varchar(256) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`checkoutId`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`imageId`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`projectId`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serviceId`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `checkoutId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `projectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serviceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
