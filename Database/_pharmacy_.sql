-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 11:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `hosptialdoc` varchar(100) NOT NULL,
  `docname` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `net` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `mode` varchar(100) NOT NULL,
  `note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`hosptialdoc`, `docname`, `total`, `discount`, `tax`, `net`, `amount`, `mode`, `note`) VALUES
('', 'Ahmed', 122, 3, 5, 10, 0, 'Cheque', 117),
('', 'Ahmed', 122, 3, 5, 10, 0, 'Cheque', 117),
('hesham', 'Ahmed', 222, 22, 20, 20, 80, 'UPI', 0),
('marwa', 'saeed', 400, 100, 50, 50, 200, 'Transfer to Bank Account', 0),
('marwa', 'saeed', 400, 100, 50, 50, 200, 'Transfer to Bank Account', 0),
('marwa', 'saeed', 400, 100, 50, 50, 200, 'Transfer to Bank Account', 0),
('adam', 'lili', 45, 454, 443, 455, 200, 'Transfer to Bank Account', 0),
('adam', 'lili', 45, 454, 443, 455, 200, 'Transfer to Bank Account', 0),
('adam', 'lili', 45, 454, 443, 455, 200, 'Transfer to Bank Account', 0),
('doaa', 'celene', 242, 89, 888, 899, 33, 'Transfer to Bank Account', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `medcat` varchar(100) NOT NULL,
  `medname` varchar(100) NOT NULL,
  `batchno` int(11) NOT NULL,
  `date` date NOT NULL,
  `quan` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `tax` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`medcat`, `medname`, `batchno`, `date`, `quan`, `sale`, `tax`) VALUES
('general status', '', 2, '2022-09-07', 12, 35, 15),
('general status', '', 2, '2022-09-07', 12, 35, 15),
('general status', 'apidra', 2, '2022-09-22', 12, 35, 15),
('heart', 'cetal', 4, '2022-09-21', 20, 75, 20),
('heart', 'cetal', 4, '2022-09-21', 20, 75, 20),
('heart', 'cetal', 4, '2022-09-21', 20, 75, 20),
('blood', 'Nifedipine.', 5, '2021-06-16', 9, 55, 6),
(' status', 'apidra', 6, '2022-06-29', 6, 66, 11),
(' status', 'apidra', 6, '2022-06-29', 6, 66, 11),
(' status', 'apidra', 6, '2022-06-29', 6, 66, 11),
('blood', 'cetal', 4, '2024-06-14', 88, 231, 11),
('blood', 'cetal', 4, '2024-06-14', 88, 231, 11),
('blood', 'cetal', 4, '2024-06-14', 88, 231, 11),
('repiratory', 'profien', 7, '2024-09-30', 5, 56, 65),
('general status', 'panadol', 4, '2022-09-26', 88, 21, 32),
('general status', 'panadol', 4, '2022-09-26', 88, 21, 32),
('general status', 'panadol', 4, '2022-09-26', 88, 21, 32),
('general status', 'panadol', 4, '2022-09-26', 88, 21, 32),
('general status', 'panadol', 4, '2022-09-26', 88, 21, 32),
('general status', 'panadol', 4, '2022-09-26', 88, 21, 32);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `note` varchar(300) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `blood` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`ID`, `name`, `gender`, `date`, `year`, `month`, `day`, `phone`, `email`, `note`, `gname`, `blood`, `status`, `file`, `address`) VALUES
(1, 'Fatma Saeed', 'Female', '2022-09-16', 2022, 9, 16, 1278521788, 'farmasaeedwasal@gmail.com', 'yes', 'Saeed', '', '', 'USA.png', 'menofia'),
(2, 'Fatma Saeed', 'Female', '2022-09-08', 2022, 9, 8, 1278521788, 'rahaf@gmail.com', 'tt', 'Saeed', '', '', 'USA.png', 'menofia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
