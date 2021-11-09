-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2021 at 11:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_1`
--

CREATE TABLE `item_1` (
  `id` int(30) NOT NULL,
  `thu_tu` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `img` varchar(500) NOT NULL,
  `cost` int(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `HSD` date NOT NULL,
  `NXS` date NOT NULL,
  `Supply` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_1`
--

INSERT INTO `item_1` (`id`, `thu_tu`, `name`, `img`, `cost`, `status`, `details`, `HSD`, `NXS`, `Supply`, `type`, `category`) VALUES
(1, 1, 'Flan Milk Tea', 'Flan Milk tea.jpg', 76000, 'kích hoạt', 'abccccccc', '2021-11-10', '2021-11-18', 'Khải', 'milk_tea', 'milk_tea'),
(2, 2, 'Fruit Milk Tea', 'Fruit Milk Tea 1.jpg', 80000, 'kích hoạt', '', '2021-11-09', '2021-11-10', 'Khải', 'milk_tea', 'milk_tea');

-- --------------------------------------------------------

--
-- Table structure for table `item_menu`
--

CREATE TABLE `item_menu` (
  `id` int(30) NOT NULL,
  `name` varchar(225) NOT NULL,
  `type` varchar(150) NOT NULL,
  `cost` int(30) NOT NULL,
  `detail` varchar(225) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `my_cart`
--

CREATE TABLE `my_cart` (
  `id_item` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `img` varchar(100) NOT NULL,
  `cost` int(30) NOT NULL,
  `amount` int(30) NOT NULL,
  `id_cart` int(30) NOT NULL,
  `id_user` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `my_cart`
--

INSERT INTO `my_cart` (`id_item`, `name`, `img`, `cost`, `amount`, `id_cart`, `id_user`) VALUES
(1, 'Donut', 'banh-Donut.jpg', 28000, 5, 11001, 111),
(2, 'Marcaron', 'banh-macaron.jpg', 26000, 7, 11001, 111),
(4, 'Flan Milk Tea', 'Flan Milk tea.jpg', 76000, 7, 11001, 111);

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE `username` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`id`, `username`, `password`, `name`, `email`) VALUES
(1, 'admin', '123', 'Clerk Kenz', ''),
(2, 'user1', '123', 'Nezuko Demii', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_menu`
--
ALTER TABLE `item_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_cart`
--
ALTER TABLE `my_cart`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_menu`
--
ALTER TABLE `item_menu`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `my_cart`
--
ALTER TABLE `my_cart`
  MODIFY `id_item` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `username`
--
ALTER TABLE `username`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
