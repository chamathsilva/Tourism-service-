-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2015 at 01:58 AM
-- Server version: 5.6.26-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingrooms`
--

CREATE TABLE `bookingrooms` (
  `roomID` varchar(5) NOT NULL,
  `userID` varchar(5) NOT NULL,
  `bookingDate` date NOT NULL,
  `checkInDate` date NOT NULL,
  `checkOutDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotelID` varchar(5) NOT NULL,
  `userID` varchar(45) DEFAULT NULL,
  `hotelName` varchar(100) NOT NULL,
  `hotelOwnerName` varchar(45) NOT NULL,
  `city` varchar(20) NOT NULL,
  `hotelAddress` varchar(100) NOT NULL,
  `imagePath` varchar(100) DEFAULT NULL,
  `Type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hotelroom`
--

CREATE TABLE `hotelroom` (
  `roomID` varchar(5) NOT NULL,
  `hotelID` varchar(5) NOT NULL,
  `roomType` varchar(15) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `picture` varchar(45) DEFAULT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` varchar(5) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `NIC` varchar(10) NOT NULL,
  `contactNo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingrooms`
--
ALTER TABLE `bookingrooms`
  ADD PRIMARY KEY (`roomID`,`userID`),
  ADD KEY `FkeyforroomId_idx` (`roomID`),
  ADD KEY `FkeyForUserID_idx` (`userID`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotelID`),
  ADD KEY `FKeyForUSerTable_idx` (`userID`);

--
-- Indexes for table `hotelroom`
--
ALTER TABLE `hotelroom`
  ADD PRIMARY KEY (`roomID`,`hotelID`),
  ADD KEY `hotelIDFKey` (`hotelID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `NIC_UNIQUE` (`NIC`),
  ADD UNIQUE KEY `contactNo_UNIQUE` (`contactNo`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookingrooms`
--
ALTER TABLE `bookingrooms`
  ADD CONSTRAINT `FkeyForUserID` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FkeyforroomId` FOREIGN KEY (`roomID`) REFERENCES `hotelroom` (`roomID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `FKeyForUSerTable` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hotelroom`
--
ALTER TABLE `hotelroom`
  ADD CONSTRAINT `hotelIDFKey` FOREIGN KEY (`hotelID`) REFERENCES `hotel` (`hotelID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
