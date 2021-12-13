-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 07:12 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_id`
--

CREATE TABLE `all_id` (
  `main_id` int(10) NOT NULL,
  `customerid` int(10) NOT NULL,
  `softwareid` int(10) NOT NULL,
  `descriptionid` int(10) NOT NULL,
  `Price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_id`
--

INSERT INTO `all_id` (`main_id`, `customerid`, `softwareid`, `descriptionid`, `Price`) VALUES
(1, 1, 1, 1, NULL),
(233, 2, 1, 2, 50);

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `customerid` int(10) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Softwarename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`customerid`, `Surname`, `Name`, `Softwarename`) VALUES
(1, 'Shaikh', 'Name', 'Browser'),
(2, 'dayatar', 'Shaikh', 'gj'),
(3, 'Zaremba', 'Piotr', 'XAMPP');

-- --------------------------------------------------------

--
-- Table structure for table `software_description`
--

CREATE TABLE `software_description` (
  `descriptionid` int(10) NOT NULL,
  `language_used` varchar(20) NOT NULL,
  `release_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `software_description`
--

INSERT INTO `software_description` (`descriptionid`, `language_used`, `release_date`) VALUES
(1, 'html', 20210609),
(2, 'html', 21),
(555, 'jn', 2);

-- --------------------------------------------------------

--
-- Table structure for table `software_info`
--

CREATE TABLE `software_info` (
  `softwareid` int(10) NOT NULL,
  `software_version` int(11) NOT NULL,
  `operating_system` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `software_info`
--

INSERT INTO `software_info` (`softwareid`, `software_version`, `operating_system`) VALUES
(1, 1111, 'likh'),
(2, 32, 'dfg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_id`
--
ALTER TABLE `all_id`
  ADD PRIMARY KEY (`main_id`),
  ADD KEY `customerid` (`customerid`,`softwareid`,`descriptionid`),
  ADD KEY `softwareid` (`softwareid`),
  ADD KEY `descriptionid` (`descriptionid`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `software_description`
--
ALTER TABLE `software_description`
  ADD PRIMARY KEY (`descriptionid`);

--
-- Indexes for table `software_info`
--
ALTER TABLE `software_info`
  ADD PRIMARY KEY (`softwareid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_id`
--
ALTER TABLE `all_id`
  MODIFY `main_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `customerid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `software_description`
--
ALTER TABLE `software_description`
  MODIFY `descriptionid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=556;

--
-- AUTO_INCREMENT for table `software_info`
--
ALTER TABLE `software_info`
  MODIFY `softwareid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `all_id`
--
ALTER TABLE `all_id`
  ADD CONSTRAINT `all_id_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customer_info` (`customerid`),
  ADD CONSTRAINT `all_id_ibfk_2` FOREIGN KEY (`softwareid`) REFERENCES `software_info` (`softwareid`),
  ADD CONSTRAINT `all_id_ibfk_3` FOREIGN KEY (`descriptionid`) REFERENCES `software_description` (`descriptionid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
