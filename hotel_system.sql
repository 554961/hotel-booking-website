-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2025 at 03:20 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingID` int(11) NOT NULL PRIMARY KEY,
  `BookingDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL PRIMARY KEY,
  `CustomerEmail` varchar(255) DEFAULT NULL,
  `CustomerPassword` varchar(255) DEFAULT NULL,
  `CustomerPhoneNo` varchar(255) DEFAULT NULL,
  `CustomerAddress` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `CustomerEmail`, `CustomerPassword`, `CustomerPhoneNo`, `CustomerAddress`) VALUES
(0, '', 'admin123', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `HotelID` int(11) NOT NULL PRIMARY KEY,
  `HotelLocation` varchar(255) DEFAULT NULL,
  `HotelDescription` varchar(500) DEFAULT NULL,
  `HotelRating` varchar(255) DEFAULT NULL,
  `HotelImageFilePath` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `RoomID` int(11) NOT NULL PRIMARY KEY,
  `RoomPrice` int(11) DEFAULT NULL,
  `RoomCapacity` varchar(255) DEFAULT NULL,
  `RoomDescription` varchar(500) DEFAULT NULL,
  `RoomImageFilePath` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  `StaffEmail` varchar(255) DEFAULT NULL,
  `StaffPassword` varchar(255) DEFAULT NULL,
  `StaffName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffEmail`, `StaffPassword`, `StaffName`) VALUES
(1, 'admin@hotel.com', 'admin123', 'Admin Man');