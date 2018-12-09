-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2018 at 03:44 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yogo`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `address` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`firstname`, `lastname`, `email`, `mobile`, `gender`, `address`, `password`) VALUES
('Wei', 'lol', 'dexson9683@gmail.com', '174433951', 'M', 'N0 8, Jalan Gemilang Jaya', '123456'),
('Wei wen', 'Chang', 'dexson9683@hotmail.com', '174433951', 'M', 'N0 8, Jalan Gemilang Jaya', '123456'),
('h', 'q', 'gg@gmail.com', '1234566789', 'M', 'sadasdsad', '1235'),
('', '', '', '', '', '', ''),
('Wei', 'Chang', '', '174433951', '', 'N0 8, Jalan Gemilang Jaya', ''),
('Wei', 'Chang', '', '174433951', '', 'N0 8, Jalan Gemilang Jaya', ''),
('Wei', 'Chang', '', '174433951', '', 'N0 8, Jalan Gemilang Jaya', ''),
('Wei', 'Chang', '', '123456', '', 'N0 8, Jalan Gemilang Jaya', ''),
('kai', 'w', 'wkai@gmail.com', '123456789', 'F', 'fvebfwekfkwef', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `yoga_class`
--

CREATE TABLE `yoga_class` (
  `ID` int(11) UNSIGNED NOT NULL,
  `lesson` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yoga_class`
--

INSERT INTO `yoga_class` (`ID`, `lesson`, `email`) VALUES
(2, 'lesson2', 'dexson9683@gmail.com'),
(4, 'lesson3', 'dexson9683@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `yoga_class`
--
ALTER TABLE `yoga_class`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `yoga_class`
--
ALTER TABLE `yoga_class`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
