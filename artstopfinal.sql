-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2022 at 01:46 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

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
(8, '8', 'Photography'),
(9, '9', 'Digital Arts'),
(10, '9', 'Graphics Arts'),
(11, '9', 'Photography'),
(12, '12', 'Graphics Arts'),
(13, '12', 'Publication Material'),
(14, '12', 'Typography');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

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
  `senderId` varchar(255) DEFAULT NULL,
  `receiverId` varchar(255) DEFAULT NULL,
  `dateCreated` int(11) DEFAULT NULL,
  `messageContent` text DEFAULT NULL,
  `messageStatus` enum('Sent','Read','Delete','Edit') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `senderId`, `receiverId`, `dateCreated`, `messageContent`, `messageStatus`) VALUES
(11, 'newbuyer', 'newbuyer2', 1644274604, 'hi', 'Sent'),
(12, 'newbuyer2', 'newbuyer', 1644274652, 'hello', 'Sent'),
(13, 'Dylan', 'newbuyer', 1644276376, 'hello', 'Sent'),
(14, 'newbuyer', 'Dylan', 1644276486, 'Hi', 'Sent'),
(15, 'newbuyer', 'Dylan', 1644295060, 'hello po', 'Sent'),
(16, 'newbuyer', 'Dylan', 1644297315, 'hello', 'Sent'),
(17, 'newbuyer', 'Dylan', 1644297484, 'hello', 'Sent'),
(18, 'newbuyer', 'Dylan', 1644297511, 'konichiwa', 'Sent'),
(19, 'newbuyer', 'Dylan', 1644297530, 'konichiwa', 'Sent'),
(20, 'newbuyer', 'Dylan', 1644297539, 'konichiwa', 'Sent'),
(21, 'newbuyer', 'Rellmon', 1644298495, 'qwertyuiop', 'Sent'),
(22, 'newbuyer', 'Dylan', 1644318713, 'try', 'Sent'),
(23, 'newbuyer', 'newbuyer2', 1644322323, 'sayonara', 'Sent'),
(24, 'newbuyer', 'mamamoblueandred', 1644322337, 'asdasdads', 'Sent');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

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
(8, '3', 'http://localhost/php/public/uploads/serviceImage/5f0aea49c723c.png', 'Sample', 'Sample', 'Graphics Arts', '1000', 'Digital Delivery', '1 Week'),
(9, '10', 'http://localhost/php/public/uploads/serviceImage/67921e9f09254.jfif', 'TestingOnly', 'Subok lang', 'Digital Arts', '1500', 'Physical Delivery', '5-7 days'),
(10, '10', 'http://localhost/php/public/uploads/serviceImage/55fa2a6a762d1.png', 'ajgfsakdf', 'sakhdfkasd', 'Publication Material', '1200', 'Digital Delivery', '5-7 days');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersStatus` enum('0','1') NOT NULL,
  `usersName` varchar(255) NOT NULL,
  `usersEmail` varchar(255) NOT NULL,
  `usersUid` varchar(255) NOT NULL,
  `usersPwd` varchar(255) NOT NULL,
  `usersCategory` varchar(255) NOT NULL,
  `profilepic` varchar(255) NOT NULL,
  `usersTel` varchar(255) NOT NULL,
  `usersLoc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersStatus`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`, `usersCategory`, `profilepic`, `usersTel`, `usersLoc`) VALUES
(1, '0', 'Romeo', 'romeorojo@gmail.com', 'Roms', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Buyer', 'http://localhost/php/public/uploads/image/8dedaf9c8c4a9.png', '', ''),
(2, '0', 'Romeo', 'romeorojooo@gmail.com', 'Romssss', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Seller', 'http://localhost/php/public/uploads/image/a24d1a97ec52f.png', '', ''),
(3, '0', 'Dylan', 'dylan@gmail.com', 'Dylan', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Seller', 'http://localhost/php/public/uploads/image/e398d9852939d.png', '', ''),
(4, '0', 'Dylan', 'dylan@mail.com', 'Dylann', '202cb962ac59075b964b07152d234b70', 'Seller', 'http://localhost/php1/public/uploads/image/685503ff95ebb.png', '', ''),
(5, '0', 'Patrick', 'patrickbobo@gmail.com', 'Patricktanga', '202cb962ac59075b964b07152d234b70', 'Buyer', 'http://localhost/php1/public/uploads/image/e4946ebb58bbf.png', '', ''),
(6, '0', 'Rellmon', 'rellmon@mail.com', 'Rellmon', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Seller', 'http://localhost/php/public/uploads/image/e3b8a16b6db11.png', '', ''),
(7, '0', 'New', 'new@gmail.com', 'New', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Buyer', 'http://localhost/php1/public/uploads/image/186b804f40935.png', '', ''),
(8, '0', 'Romeo', 'mamamoblueandred@gmail.com', 'mamamoblueandred', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Buyer', '', '', ''),
(9, '0', 'New Buyer', 'newbuyer@mail.com', 'newbuyer', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Buyer', '', '', ''),
(10, '0', 'New Seller', 'newseller@mail.com', 'newseller', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Seller', '', '', ''),
(11, '0', 'New Seller 2', 'newseller2@mail.com', 'newseller2', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Seller', '', '', ''),
(12, '0', 'New Buyer 2', 'newbuyer2@mail.com', 'newbuyer2', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Buyer', 'http://localhost/php/public/uploads/image/da0d52a1f4643.jpg', '', ''),
(13, '0', 'Bago', 'bago@mail.com', 'bago', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Seller', 'http://localhost/php/public/uploads/image/ef8021c5bbfa1.png', '', ''),
(14, '0', 'Panibago', 'panibago@mail.com', 'panibago', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Seller', 'http://localhost/php/public/uploads/image/803a516a5f14b.jpg', '', ''),
(15, '0', 'Kahit Ano', 'kahitano@mail.com', 'kahitano', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Seller', 'http://localhost/php/public/uploads/image/b973640f9d1ba.jpg', '', ''),
(16, '0', 'Ism Pogi', 'ismpogi@mail.com', 'ism', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Seller', 'http://localhost/php/public/uploads/image/1d632ba477566.jfif', '', ''),
(17, '0', 'New Ito', 'newito@mail.com', 'newito', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Seller', 'http://localhost/php/public/uploads/image/ddfda92220472.jpg', '', ''),
(18, '0', 'Kenlord P', 'kenlordp@mail.com', 'kenlordp', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Seller', 'http://localhost/php/public/uploads/image/0d39d660aa444.jpg', '123456', 'pogi cavite');

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
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `projectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serviceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
