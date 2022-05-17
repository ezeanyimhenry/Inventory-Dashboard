-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2019 at 07:08 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `bought`
--

CREATE TABLE `bought` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(100) NOT NULL,
  `b_color` varchar(100) NOT NULL,
  `b_quantity` varchar(100) NOT NULL,
  `unit_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bought`
--

INSERT INTO `bought` (`b_id`, `b_name`, `b_color`, `b_quantity`, `unit_price`, `date`) VALUES
(3, '1132', 'WHITE', '4', '10000', '2019-10-20 02:42:34');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color`) VALUES
(1, 'BLACK'),
(2, 'WHITE');

-- --------------------------------------------------------

--
-- Table structure for table `sold`
--

CREATE TABLE `sold` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `pro_color` varchar(100) NOT NULL,
  `quantity_sold` varchar(100) NOT NULL,
  `unit_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sold`
--

INSERT INTO `sold` (`pro_id`, `pro_name`, `pro_color`, `quantity_sold`, `unit_price`, `date`) VALUES
(1, '1132', 'WHITE', '3', '10000', '2019-10-16 21:25:08'),
(2, '1132', 'WHITE', '1', '10000', '2019-10-16 21:27:11'),
(3, '1132', 'WHITE', '3', '10000', '2019-10-17 19:56:57'),
(4, '1132', 'WHITE', '6', '10000', '2019-10-20 02:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `unitprice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`product_id`, `product_name`, `color`, `quantity`, `unitprice`) VALUES
(6, '1132', 'WHITE', '12', '10000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bought`
--
ALTER TABLE `bought`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sold`
--
ALTER TABLE `sold`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bought`
--
ALTER TABLE `bought`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sold`
--
ALTER TABLE `sold`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
