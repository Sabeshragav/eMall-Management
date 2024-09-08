-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 08:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_mall`
--

-- --------------------------------------------------------

--
-- Table structure for table `dress_admin`
--

CREATE TABLE `dress_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dress_admin`
--

INSERT INTO `dress_admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'xyz', 'xyz@gmail.com', '000'),
(2, 'asd', 'asd@gmail.com', '111'),
(3, 'fgh', 'fgh@gmail.com', '222');

-- --------------------------------------------------------

--
-- Table structure for table `dress_billing`
--

CREATE TABLE `dress_billing` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `mobile_number` bigint(100) DEFAULT NULL,
  `item_purchased` varchar(100) DEFAULT NULL,
  `MRP` int(100) DEFAULT NULL,
  `quantity` int(100) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dress_billing`
--

INSERT INTO `dress_billing` (`customer_id`, `customer_name`, `mobile_number`, `item_purchased`, `MRP`, `quantity`, `total_price`) VALUES
(1, 'john', 56879876, 'T-Shirt', 250, 3, 750.00),
(2, 'lisa', 3456789, 'Coat', 750, 4, 3000.00),
(3, 'bennet', 9876543, 'T-shirt', 250, 8, 2000.00),
(4, 'lumine', 987654, 'Formal-pant', 550, 6, 3300.00),
(5, 'aether', 234567890, 'Formal-shirt', 600, 7, 4200.00),
(6, 'ramesh', 9876543, 'Jean', 350, 5, 1750.00),
(7, 'suresh', 9876543, 'T-shirt', 250, 33, 8250.00),
(8, 'knave', 987654, 'Coat', 750, 1, 750.00),
(10, 'sudha mam', 876543567, 'Coat', 750, 5, 3750.00);

-- --------------------------------------------------------

--
-- Table structure for table `dress_sales`
--

CREATE TABLE `dress_sales` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dress_sales`
--

INSERT INTO `dress_sales` (`id`, `username`, `email`, `password`) VALUES
(1, 'qwer', 'qwer@gmail.com', '1234'),
(2, 'jkl', 'jkl@gmail.com', '12345'),
(3, 'tyu', 'tyu@gmail.com', '567'),
(4, 'bnm', 'bnm@gmail.com', '890'),
(5, 'abc', 'abc@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `food_admin`
--

CREATE TABLE `food_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_admin`
--

INSERT INTO `food_admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'asd', 'asd@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `food_billing`
--

CREATE TABLE `food_billing` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `mobile_number` bigint(100) DEFAULT NULL,
  `item_purchased` varchar(100) DEFAULT NULL,
  `MRP` int(100) DEFAULT NULL,
  `quantity` int(100) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_billing`
--

INSERT INTO `food_billing` (`customer_id`, `customer_name`, `mobile_number`, `item_purchased`, `MRP`, `quantity`, `total_price`) VALUES
(1, 'Veera', 756434234, 'Ghee-Roast', 90, 2, 180.00);

-- --------------------------------------------------------

--
-- Table structure for table `food_sales`
--

CREATE TABLE `food_sales` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_sales`
--

INSERT INTO `food_sales` (`id`, `username`, `email`, `password`) VALUES
(1, 'def', 'def@gmail.com', '456'),
(2, 'zxc', 'zxc@gmail.com', '789');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_admin`
--

CREATE TABLE `furniture_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_admin`
--

INSERT INTO `furniture_admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'asd', 'asd@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_billing`
--

CREATE TABLE `furniture_billing` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `mobile_number` bigint(100) DEFAULT NULL,
  `item_purchased` varchar(100) DEFAULT NULL,
  `MRP` int(100) DEFAULT NULL,
  `quantity` int(100) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_billing`
--

INSERT INTO `furniture_billing` (`customer_id`, `customer_name`, `mobile_number`, `item_purchased`, `MRP`, `quantity`, `total_price`) VALUES
(1, 'murph', 987654, 'Rolling-Chair', 2000, 4, 8000.00),
(3, 'pallad', 345678, 'Dining-Table', 2500, 4, 10000.00);

-- --------------------------------------------------------

--
-- Table structure for table `furniture_sales`
--

CREATE TABLE `furniture_sales` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furniture_sales`
--

INSERT INTO `furniture_sales` (`id`, `username`, `email`, `password`) VALUES
(1, 'ert', 'asd@gmail.com', '456'),
(2, 'hjk', 'hjk@gmail.com', '678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dress_admin`
--
ALTER TABLE `dress_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dress_billing`
--
ALTER TABLE `dress_billing`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `dress_sales`
--
ALTER TABLE `dress_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_admin`
--
ALTER TABLE `food_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_billing`
--
ALTER TABLE `food_billing`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `food_sales`
--
ALTER TABLE `food_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_admin`
--
ALTER TABLE `furniture_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_billing`
--
ALTER TABLE `furniture_billing`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `furniture_sales`
--
ALTER TABLE `furniture_sales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dress_admin`
--
ALTER TABLE `dress_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dress_billing`
--
ALTER TABLE `dress_billing`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dress_sales`
--
ALTER TABLE `dress_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `food_admin`
--
ALTER TABLE `food_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food_billing`
--
ALTER TABLE `food_billing`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food_sales`
--
ALTER TABLE `food_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `furniture_admin`
--
ALTER TABLE `furniture_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `furniture_billing`
--
ALTER TABLE `furniture_billing`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `furniture_sales`
--
ALTER TABLE `furniture_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
