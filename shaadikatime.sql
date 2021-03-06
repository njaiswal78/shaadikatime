-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 29, 2020 at 05:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shaadikatime`
--

-- --------------------------------------------------------

--
-- Table structure for table `signups`
--

CREATE TABLE `signups` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Number` text NOT NULL,
  `DOB` date NOT NULL,
  `Religion` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `State` varchar(100) DEFAULT NULL,
  `Caste` varchar(100) DEFAULT NULL,
  `Tongue` varchar(100) DEFAULT NULL,
  `Occupation` varchar(100) DEFAULT NULL,
  `College` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signups`
--

INSERT INTO `signups` (`Id`, `Name`, `Email`, `Password`, `Number`, `DOB`, `Religion`, `Gender`, `image`, `City`, `State`, `Caste`, `Tongue`, `Occupation`, `College`) VALUES
(5, 'Rangrajan', 'rajan@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '4324234', '3534-04-05', 'hindu', 'Male', 'uploads/119-500x500.jpeg', '', '', '', '', '', ''),
(20, 'Natrajan Jaiswal', 'njaiswal78@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '09619218231', '0001-11-11', 'hindu', 'Male', 'uploads/03 Use-cases.jpg', 'bhadohi', 'kerala', 'Gaur Brahmin', 'Tamil', 'Defence', 'Other'),
(26, 'Sagar', 'sagar@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '123', '0011-11-11', 'Hindu', 'Male', 'uploads/29coronavirus_editorial-facebookJumbo-v7.jpg', 'sfds', 'kerala', 'Kurmi Kshatriya', 'English', 'Lawyers', 'ISB'),
(28, 'chotu', 'chotu@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '123', '0011-11-11', 'Hindu', 'Male', 'uploads/Screenshot 2020-06-26 at 6.39.18 PM.png', 'bhadohi', 'Jammu & Kashmir', 'Maratha', 'Tamil', 'Lawyers', 'ICAI'),
(31, 'test', 'test@test.com', '098f6bcd4621d373cade4e832627b4f6', '1234', '2019-11-11', 'Hindu', 'Male', 'uploads/images.jpeg', '', '', '', '', '', ''),
(32, 'Natrajan Jaiswal', 'natrajan@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '07388489036', '1990-05-12', 'Hindu', 'Male', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signups`
--
ALTER TABLE `signups`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signups`
--
ALTER TABLE `signups`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
