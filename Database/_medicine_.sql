-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 11:18 PM
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
-- Database: `medicines`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_med`
--

CREATE TABLE `add_med` (
  `sele` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_med`
--

INSERT INTO `add_med` (`sele`, `file`) VALUES
('Select', 'patient.png');

-- --------------------------------------------------------

--
-- Table structure for table `med`
--

CREATE TABLE `med` (
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `composition` varchar(100) NOT NULL,
  `group1` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `min` int(11) NOT NULL,
  `order1` varchar(100) NOT NULL,
  `tax` int(11) NOT NULL,
  `packing` varchar(100) NOT NULL,
  `vat` varchar(50) NOT NULL,
  `note` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `med`
--

INSERT INTO `med` (`name`, `category`, `company`, `composition`, `group1`, `unit`, `min`, `order1`, `tax`, `packing`, `vat`, `note`, `file`) VALUES
('Fedaa', 'Pharmacy Medicines ', 'Cairo ', 'compo', 'two', 'unit1', 23, 'first may', 20, 'packing', 'vat', 'no', 'patient.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
