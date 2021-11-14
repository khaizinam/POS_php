-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 05:03 AM
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
(4, 3, 'Coffee', 'coffee.jpg', 10000, 'active', '', '2021-11-09', '2021-11-10', 'Nhà NEST', 'drink', 'drink'),
(125, 0, 'Bánh pavlova', 'banh-pavlova.jpg', 45000, 'active', '', '0000-00-00', '0000-00-00', '', 'main_food', 'main_food'),
(126, 20, 'chè bông gòn', 'hot dog phô mai.png', 45000, 'active', '', '0000-00-00', '0000-00-00', '', 'main_food', 'main_food'),
(127, 45, 'bánh cốm', 'banh-tao.jpg', 50000, 'active', '', '0000-00-00', '0000-00-00', '', 'cake', 'cake'),
(130, 78, 'bánh gato', 'banh-tiramisu.jpg', 25000, 'active', '', '0000-00-00', '0000-00-00', '', 'cake', 'cake'),
(131, 78, 'ComBO tứ tuyệt', 'comboA.jpg', 125000, 'active', '', '0000-00-00', '0000-00-00', '', 'main_food', 'main_food'),
(132, 78, 'ComBo đôi', 'comboA.jpg', 0, 'active', '', '0000-00-00', '0000-00-00', '', 'main_food', 'main_food'),
(133, 0, '', '', 0, 'active', '', '0000-00-00', '0000-00-00', '', 'main_food', 'main_food');

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
  `id_user` int(30) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pay` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `item_1`
--
ALTER TABLE `item_1`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `item_1`
--
ALTER TABLE `item_1`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `item_menu`
--
ALTER TABLE `item_menu`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `my_cart`
--
ALTER TABLE `my_cart`
  MODIFY `id_item` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `username`
--
ALTER TABLE `username`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
