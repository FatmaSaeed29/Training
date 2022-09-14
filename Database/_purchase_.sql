-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 11:17 PM
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
-- Database: `purchase_medicine`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `Medicine_category` varchar(100) NOT NULL,
  `Medicine_name` varchar(100) NOT NULL,
  `Bath_no` int(11) NOT NULL,
  `Expiry_date` date NOT NULL,
  `MRP` int(11) NOT NULL,
  `Bath_amount` int(11) NOT NULL,
  `Sale_price` int(11) NOT NULL,
  `Packing_Qty` varchar(100) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Purchase_price` int(11) NOT NULL,
  `Tax` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Note` varchar(300) NOT NULL,
  `Attach_document` varchar(500) NOT NULL,
  `Total` int(11) NOT NULL,
  `Discount` int(11) NOT NULL,
  `Tax2` int(11) NOT NULL,
  `Net_amount` int(11) NOT NULL,
  `Payment_mode` varchar(100) NOT NULL,
  `Payment_note` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`Medicine_category`, `Medicine_name`, `Bath_no`, `Expiry_date`, `MRP`, `Bath_amount`, `Sale_price`, `Packing_Qty`, `Quantity`, `Purchase_price`, `Tax`, `Amount`, `Note`, `Attach_document`, `Total`, `Discount`, `Tax2`, `Net_amount`, `Payment_mode`, `Payment_note`) VALUES
('hot', 'profien ', 1, '2023-06-22', 10, 10, 60, '30', 5, 0, 20, 80, 'manar', ' ', 300, 60, 50, 0, 'Cash', 'manar'),
('blood', 'cetal ', 4, '2023-06-28', 19, 2, 35, 'yes', 15, 1000, 32, 15, 'manar', ' ', 122, 22, 47, 23, 'Transfer To Bank Account', 'manar'),
('blood', 'cetal ', 4, '2023-06-28', 19, 2, 35, 'yes', 15, 1000, 32, 15, 'manar', ' ', 122, 22, 47, 23, 'Transfer To Bank Account', 'manar'),
('blood', 'cetal ', 4, '2023-06-28', 19, 2, 35, 'yes', 15, 1000, 32, 15, 'manar', ' ', 122, 22, 47, 23, 'Transfer To Bank Account', 'manar'),
('heart', 'panadol ', 6, '2024-03-31', 7, 45, 45, '22', 2, 1, 6, 78, '40', ' 1mini_logo.jpg', 122, 22, 29, 19, 'UPI', 'manarmanar'),
('heart', 'panadol ', 6, '2024-03-31', 7, 45, 45, '22', 2, 1, 6, 78, '40', ' 1mini_logo.jpg', 122, 22, 29, 19, 'UPI', 'manarmanar'),
('blood2', 'cetal1 ', 6, '2022-09-21', 19, 33, 98, '22', 88, 1112, 55, 33, 'manar2', ' 1mini_logo.jpg', 45, 43, 16, 17, 'Other', 'manarmanar'),
('repasotiry', 'profien ', 5, '2024-04-05', 45, 32, 90, 'no', 60, 78, 4, 10, 'manoo', ' USA.png', 122, 100, 20, 30, 'Cash', 'manar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
