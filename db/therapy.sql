-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2024 at 12:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `therapy`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `sl` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `text` longtext NOT NULL,
  `stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `sl` double NOT NULL,
  `firstname` varchar(2000) NOT NULL,
  `lastname` varchar(1000) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` mediumtext NOT NULL,
  `date` mediumtext NOT NULL,
  `stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`sl`, `firstname`, `lastname`, `email`, `message`, `date`, `stat`) VALUES
(1, 'Biswajit', 'Muherjee', 'mukherjee.koushik78@gmail.com', 'Good msg', '2024-11-21', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `sl` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
