-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 05:38 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `Owner` varchar(255) NOT NULL,
  `Item` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Weight` float NOT NULL,
  `Request_for_Shipment` varchar(255) NOT NULL,
  `Tracking_ID` varchar(11) NOT NULL,
  `Shipment_Size` varchar(255) NOT NULL,
  `Box_Count` int(11) NOT NULL,
  `Specification` varchar(255) NOT NULL,
  `CheckList_Quantity` varchar(255) NOT NULL,
  `Company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `order_date`, `Owner`, `Item`, `Quantity`, `Weight`, `Request_for_Shipment`, `Tracking_ID`, `Shipment_Size`, `Box_Count`, `Specification`, `CheckList_Quantity`, `Company`) VALUES
(2, '0000-00-00', 'Raj', 'laptop', 1, 2, 'yes', 'sn123', '10*5*6', 1, 'core i7 ', '1', 'sapiens'),
(2, '0000-00-00', 'jayant', 'macbook', 2, 4, 'yes', 'js123', '3*3*3', 4, 'm2', '2', 'wellsfargo'),
(2, '2023-06-02', 'jangra', 'iphone', 5, 1, 'no', 'ab2', '3*3*3', 6, 'a15', '3', 'expedia'),
(3, '2023-06-04', 'anuttam', 'tab', 10, 2, 'yes', 'an1244', '23*3*3', 5, 'sn 870', '2', 'appD'),
(3, '2023-06-04', 'anuttam', 'tab', 10, 2, 'yes', 'an1244', '23*3*3', 5, 'sn 870', '2', 'appD'),
(3, '2023-05-31', 'sajal', 'android watch', 20, 1, 'yes', 'abc', '3*3*3', 3, 'core i7 ', '123', 'acc'),
(2, '2023-06-22', 'tata', 'cars', 100, 1200, 'no', 'SN100', '120*80*40', 80, '1.2L turbo', '10', 'TCS'),
(3, '2024-02-02', 'Sandeep', 'cars', 12, 800, 'yes', 'HJ2343q2', '10*5*6', 4, '1.4L mannual', '3', 'maruti');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'admin', '1234', 'admin'),
(2, 'customer1', '1234', 'customer1'),
(3, 'customer2', '1234', 'customer2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
