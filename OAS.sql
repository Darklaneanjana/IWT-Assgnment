-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 07:39 PM
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
(1, 'App1', 'this is pubg', 4.4, 'p', '1.4v', 1, 1, 10, 'G'),
(2, 'App2', 'this is pubg', 4.4, 'p', '1.4v', 1, 1, 10, 'G'),
(3, 'App3', 'this is pubg', 4.4, 'p', '1.4v', 1, 1, 10, 'G'),
(4, 'App4', 'this is pubg', 4.4, 'p', '1.4v', 1, 1, 10, 'G'),
(5, 'App5', 'this is pubg', 4.4, 'p', '1.4v', 1, 1, 10, 'G'),
(6, 'App6', 'this is pubg', 4.4, 'f', '1.4v', 1, 1, 10, 'A'),
(7, 'App7', 'this is pubg', 4.4, 'f', '1.4v', 1, 1, 10, 'A'),
(8, 'App8', 'this is pubg', 4.4, 'f', '1.4v', 1, 2, 10, 'A'),
(9, 'App9', 'this is pubg', 4.4, 'f', '1.4v', 1, 2, 10, 'A'),
(10, 'App10', 'this is pubg', 4.4, 'f', '1.4v', 1, 2, 10, 'A');

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
(1, 'Category1', 'hhh'),
(2, 'Category2', 'hhh'),
(3, 'Educational', NULL),
(4, 'Sports', NULL),
(5, 'Category5', NULL),
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
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `cid` int(10) NOT NULL,
  `AppID` int(10) NOT NULL,
  `UserID` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cid`, `AppID`, `UserID`, `date`, `message`) VALUES
(2, 1, 3, '2021-05-24 13:33:15', 'hello'),
(3, 1, 4, '2021-05-24 13:33:15', 'fffff'),
(10, 2, 15, '2021-05-24 17:22:17', 'hfhfhf'),
(15, 3, 1, '2021-05-25 01:01:35', 'mmmm'),
(16, 3, 1, '2021-05-25 01:02:00', 'kkkiiii'),
(17, 3, 1, '2021-05-25 01:02:00', 'kkkiiii'),
(32, 1, 1, '2021-05-29 17:42:17', 'hello this is a good app');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `subject`, `phone`, `email`, `message`, `date_time`) VALUES
(8, 'pinsara chandika', 'maths bio section', '0771803460', 'pinsaracb@gmail.com', 'A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea. Paragraphs add one idea at a time to your broader argument.', '2021-05-31 06:20:56'),
(9, 'pinsara chandika', 'jhgfjgsddjhfjksduf dgsdgs', '0771803460', 'pinsaracb@gmail.com', 'smdbfhjbsjdh mnksdnfkjsbd bsjdbfjks dbsdjfbjsbfj sdnfjsndk huifgsduguif jhuifhlieg hweflwei kwniofhielwo wnjiofjwhei kwA paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea. Paragraphs add one idea at a time to your broader argument.neojfowe', '2021-05-31 06:25:29'),
(10, 'pinsara chandika', 'maths bio section', '0771803460', 'pinsaracb@gmail.com', 'A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea. Paragraphs add one idea at a time to your broader argument.', '2021-05-31 11:14:04'),
(11, '', '', '', '', '', '2021-05-31 11:16:21'),
(12, '', 'maths bio section', '', '', '', '2021-05-31 11:16:31'),
(13, 'pinsara chandika', 'maths bio section', '0771803460', 'pinsaracb@gmail.com', '', '2021-05-31 11:16:37'),
(14, 'pinsara chandika', 'maths bio section', '0771803460', 'pinsaracb@gmail.com', '', '2021-05-31 11:16:56'),
(15, 'pinsara chandika', 'maths bio section', '0771803460', 'pinsaracb@gmail.com', 'dvskjhghdfui kjjsdoighdfshi kjaiodfghfdhsliu kjdifoghfdg nmjiog;oidsfhigdf;iogjoidf dfnogh;doifshgo dnfiogdiofhgio gdfiogodo;fgd hiuoghidfhug whpigiuore ietuioretr ieroghriohg er;joihrtigipr erihjtoirejipyort', '2021-05-31 12:27:28'),
(16, 'pinsara chandika', 'maths bio section', '0771803460', 'pinsaracb@gmail.com', 'sdfsd dfghihdihg dfigjisudhfg ijdfgidifhgidjfng dnfgnodfnilgng fndignfdn gfdnigjnfdigoidshpodisfg hguidsifugo dhfgshdiufhg dfhgidfiuhgoids dfgbsbdfgbuid dfgbisbdigf fgbibdsilfbg dfbglibdflbgd dfgiludfnigudf dfgliundflgubdf', '2021-05-31 14:00:47'),
(17, 'ffffffffffffffffff', 'fffffffffffffffffffff', 'fffffffffffffffffffffffffffffff', 'ffffffffffffffffffffffffffffffffffffffffff', 'fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', '2021-05-31 16:29:50');

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
(1, 'dev1', '1234', 'hello@gmail.com', 'dev1'),
(2, 'dev2', '1234', 'hello@gmail.com', 'dev2'),
(3, 'dev3', '1234', 'hello@gmail.com', 'dev3'),
(4, 'dev4', '1234', 'hello@gmail.com', 'dev4'),
(5, 'dev5', '1234', 'hello@gmail.com', 'dev5');

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
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `card_number` varchar(12) NOT NULL,
  `exp_month` varchar(45) DEFAULT NULL,
  `cvv` varchar(45) DEFAULT NULL,
  `exp_year` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `Rid` int(11) NOT NULL,
  `AppID` int(10) DEFAULT NULL,
  `rating` int(10) DEFAULT NULL,
  `uid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`Rid`, `AppID`, `rating`, `uid`) VALUES
(1, 1, 5, 1),
(2, 1, 4, 2),
(3, 1, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `userf`
--

CREATE TABLE `userf` (
  `uid` int(10) NOT NULL,
  `UserID` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userf`
--

INSERT INTO `userf` (`uid`, `UserID`, `name`, `email_address`, `password`) VALUES
(1, 'Nick1', 'Nick Maroon', 'nick@gmail.com', '1234'),
(2, 'Nick2', 'Nick Maroon', 'nick@gmail.com', '1234'),
(3, 'Nick3', 'Nick Maroon', 'nick@gmail.com', '1234'),
(4, 'Nick4', 'Nick Maroon', 'nick@gmail.com', '1234'),
(5, 'Nick5', 'Nick Maroon', 'nick@gmail.com', '1234'),
(15, 'Darklane', 'hello', 'anjanadarklane@gmail.com', '1234');

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
(1, 'Nick1', 'Nick Maroon', 'nick@gmail.com', '1234'),
(2, 'Nick2', 'Nick Maroon', 'nick@gmail.com', '1234'),
(3, 'Nick3', 'Nick Maroon', 'nick@gmail.com', '1234'),
(4, 'Nick4', 'Nick Maroon', 'nick@gmail.com', '1234'),
(5, 'Nick5', 'Nick Maroon', 'nick@gmail.com', '1234'),
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
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`card_number`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`Rid`);

--
-- Indexes for table `userf`
--
ALTER TABLE `userf`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uid` (`UserID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `uid` (`uid`);

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
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `Rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userf`
--
ALTER TABLE `userf`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
