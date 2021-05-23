-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 02:28 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(10) NOT NULL,
  `aPsw` varchar(20) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `AdminUID` varchar(30) NOT NULL,
  `AdminName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `aPsw`, `email`, `AdminUID`, `AdminName`) VALUES
(1, '1234', 'hello@gmail.com', 'Admin1', 'Anjana Tharindu');

-- --------------------------------------------------------

--
-- Table structure for table `app`
--

CREATE TABLE `app` (
  `AppID` int(10) NOT NULL,
  `appName` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `appType` varchar(1) NOT NULL,
  `buildNo` varchar(100) NOT NULL,
  `devID` int(10) NOT NULL,
  `catID` int(10) NOT NULL,
  `size` int(10) DEFAULT NULL,
  `appCat` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app`
--

INSERT INTO `app` (`AppID`, `appName`, `Description`, `price`, `appType`, `buildNo`, `devID`, `catID`, `size`, `appCat`) VALUES
(1, 'pubg', 'this is pubg', 4.4, 'p', '1.4v', 1, 1, 10, 'G'),
(2, 'pubg', 'this is pubg', 4.4, 'p', '1.4v', 1, 1, 10, 'G'),
(3, 'pubg', 'this is pubg', 4.4, 'p', '1.4v', 1, 1, 10, 'G'),
(4, 'pubg', 'this is pubg', 4.4, 'p', '1.4v', 1, 1, 10, 'G'),
(5, 'pubg', 'this is pubg', 4.4, 'p', '1.4v', 1, 1, 10, 'G'),
(6, 'pubg', 'this is pubg', 4.4, 'p', '1.4v', 1, 1, 10, 'A'),
(7, 'pubg', 'this is pubg', 4.4, 'p', '1.4v', 1, 1, 10, 'A'),
(8, 'pubg', 'this is pubg', 4.4, 'p', '1.4v', 1, 1, 10, 'A'),
(9, 'pubg', 'this is pubg', 4.4, 'p', '1.4v', 1, 1, 10, 'A'),
(10, 'pubg', 'this is pubg', 4.4, 'p', '1.4v', 1, 1, 10, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `appdev`
--

CREATE TABLE `appdev` (
  `devID` int(10) NOT NULL,
  `AppID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appdev`
--

INSERT INTO `appdev` (`devID`, `AppID`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4),
(3, 5),
(3, 6),
(4, 7),
(4, 8),
(5, 9),
(5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `appdown`
--

CREATE TABLE `appdown` (
  `AppID` int(10) NOT NULL,
  `downloads` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appdown`
--

INSERT INTO `appdown` (`AppID`, `downloads`) VALUES
(1, 100),
(2, 200),
(3, 300),
(4, 400),
(5, 500),
(6, 600),
(7, 700),
(8, 800),
(9, 900),
(10, 950);

-- --------------------------------------------------------

--
-- Table structure for table `appss`
--

CREATE TABLE `appss` (
  `AppID` int(10) NOT NULL,
  `SS` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appss`
--

INSERT INTO `appss` (`AppID`, `SS`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4),
(3, 5),
(3, 6),
(4, 7),
(4, 8),
(5, 9),
(5, 10),
(6, 11),
(6, 12),
(7, 13),
(7, 14),
(8, 15),
(8, 16),
(9, 17),
(9, 18),
(10, 19),
(10, 20);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catID` int(10) NOT NULL,
  `catName` varchar(50) NOT NULL,
  `catSlug` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catID`, `catName`, `catSlug`) VALUES
(1, 'Educational', 'hhh'),
(2, 'Sports', 'hhh'),
(3, 'Educational', NULL),
(4, 'Sports', NULL),
(5, 'Educational', NULL),
(6, 'Educational', NULL),
(7, 'Educational', NULL),
(8, 'Educational', NULL),
(9, 'Educational', NULL),
(10, 'Educational', NULL),
(11, 'Educational', NULL),
(12, 'Educational', NULL),
(13, 'Educational', NULL),
(14, 'Educational', NULL),
(15, 'Educational', NULL),
(16, 'Educational', NULL),
(17, 'Educational', NULL),
(18, 'Educational', NULL),
(19, 'Educational', NULL),
(20, 'Educational', NULL),
(21, 'Educational', NULL),
(22, 'Educational', NULL),
(23, 'Educational', NULL),
(24, 'Educational', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dev`
--

CREATE TABLE `dev` (
  `devID` int(10) NOT NULL,
  `devName` varchar(100) NOT NULL,
  `DevPsw` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `devUID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dev`
--

INSERT INTO `dev` (`devID`, `devName`, `DevPsw`, `email`, `devUID`) VALUES
(1, 'mama', '1234', 'hello@gmail.com', 'dev1'),
(2, 'hello', '1234', 'hello@gmail.com', 'dev2'),
(3, 'how', '1234', 'hello@gmail.com', 'dev3'),
(4, 'Panda', '1234', 'hello@gmail.com', 'dev4'),
(5, 'Panda', '1234', 'hello@gmail.com', 'dev5');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PayID` int(10) NOT NULL,
  `UserID` int(10) NOT NULL,
  `AppID` int(10) NOT NULL,
  `Pdatetime` datetime NOT NULL,
  `Pammount` float NOT NULL,
  `pType` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(10) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `userPsw` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `uid`, `name`, `email`, `userPsw`) VALUES
(1, 'Nick', 'Nick Maroon', 'nick@gmail.com', '1234'),
(2, 'Nick', 'Nick Maroon', 'nick@gmail.com', '1234'),
(3, 'Nick', 'Nick Maroon', 'nick@gmail.com', '1234'),
(4, 'Nick', 'Nick Maroon', 'nick@gmail.com', '1234'),
(5, 'Nick', 'Nick Maroon', 'nick@gmail.com', '1234'),
(15, 'Darklane', 'hello', 'anjanadarklane@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`),
  ADD UNIQUE KEY `AdminUID` (`AdminUID`);

--
-- Indexes for table `app`
--
ALTER TABLE `app`
  ADD PRIMARY KEY (`AppID`),
  ADD KEY `devID` (`devID`),
  ADD KEY `catID` (`catID`);

--
-- Indexes for table `appdev`
--
ALTER TABLE `appdev`
  ADD PRIMARY KEY (`devID`,`AppID`),
  ADD KEY `AppID` (`AppID`);

--
-- Indexes for table `appdown`
--
ALTER TABLE `appdown`
  ADD PRIMARY KEY (`AppID`);

--
-- Indexes for table `appss`
--
ALTER TABLE `appss`
  ADD PRIMARY KEY (`AppID`,`SS`),
  ADD UNIQUE KEY `SS` (`SS`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `dev`
--
ALTER TABLE `dev`
  ADD PRIMARY KEY (`devID`),
  ADD UNIQUE KEY `devUID` (`devUID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PayID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `AppID` (`AppID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app`
--
ALTER TABLE `app`
  MODIFY `AppID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `dev`
--
ALTER TABLE `dev`
  MODIFY `devID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PayID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `app`
--
ALTER TABLE `app`
  ADD CONSTRAINT `app_ibfk_1` FOREIGN KEY (`devID`) REFERENCES `dev` (`devID`),
  ADD CONSTRAINT `app_ibfk_2` FOREIGN KEY (`catID`) REFERENCES `category` (`catID`);

--
-- Constraints for table `appdev`
--
ALTER TABLE `appdev`
  ADD CONSTRAINT `appdev_ibfk_1` FOREIGN KEY (`AppID`) REFERENCES `app` (`AppID`),
  ADD CONSTRAINT `appdev_ibfk_2` FOREIGN KEY (`devID`) REFERENCES `dev` (`devID`);

--
-- Constraints for table `appdown`
--
ALTER TABLE `appdown`
  ADD CONSTRAINT `appdown_ibfk_1` FOREIGN KEY (`AppID`) REFERENCES `app` (`AppID`);

--
-- Constraints for table `appss`
--
ALTER TABLE `appss`
  ADD CONSTRAINT `appss_ibfk_1` FOREIGN KEY (`AppID`) REFERENCES `app` (`AppID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`AppID`) REFERENCES `app` (`AppID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
