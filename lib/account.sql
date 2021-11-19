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
(4, 3, 'Coffee', 'coffee.jpg', 23000, 'active', '', '2021-11-09', '2021-11-10', 'Nhà NEST', 'drink', 'main_food'),
(125, 50, 'Palova cake', 'banh-pavlova.jpg', 33000, 'active', '', '0000-00-00', '0000-00-00', '', 'cake', 'main_food'),
(126, 20, 'Cheese Hot dog', 'hot dog phô mai.png', 17000, 'active', '', '0000-00-00', '0000-00-00', '', 'KFC', 'main_food'),
(127, 45, 'Apple Cake', 'banh-tao.jpg', 22000, 'active', '', '0000-00-00', '0000-00-00', '', 'cake', 'main_food'),
(130, 78, 'Tiramisu', 'banh-tiramisu.jpg', 23000, 'active', '', '0000-00-00', '0000-00-00', '', 'cake', 'main_food'),
(134, 0, 'Cơm tấm', 'Cơm tấm.jpg', 37000, 'active', '', '0000-00-00', '0000-00-00', '', 'main_food', 'main_food'),
(135, 0, 'Phở bò tái', 'Phở bò tái.jpg', 35000, 'active', '', '0000-00-00', '0000-00-00', '', 'main_food', 'main_food'),
(136, 0, 'Bún bò Huế', 'bún bò huế.png', 35000, 'active', '', '0000-00-00', '0000-00-00', '', 'main_food', 'main_food'),
(137, 0, 'Donut', 'banh-Donut.jpg', 16000, 'active', '', '0000-00-00', '0000-00-00', '', 'cake', 'main_food'),
(138, 0, 'Macaron', 'banh-macaron.jpg', 14000, 'active', '', '0000-00-00', '0000-00-00', '', 'cake', 'main_food'),
(139, 0, 'Mochi Matcha', 'banh-mochi-matcha.jpg', 13000, 'active', '', '0000-00-00', '0000-00-00', '', 'cake', 'main_food'),
(140, 0, 'Cherry cake', 'Bánh bông lan.jpg', 17000, 'active', '', '0000-00-00', '0000-00-00', '', 'cake', 'main_food'),
(141, 0, 'Cơm gà xối mỡ', 'Cơm gà xối mỡ.jpg', 38000, 'active', '', '0000-00-00', '0000-00-00', '', 'main_food', 'main_food'),
(142, 0, 'Bánh canh chả cá', 'bánh canh chả cá.jpg', 31000, 'active', '', '0000-00-00', '0000-00-00', '', 'main_food', 'main_food'),
(143, 0, 'Bún mắm nêm', 'bún mắm nêm.jpg', 34000, 'active', '', '0000-00-00', '0000-00-00', '', 'main_food', 'main_food'),
(144, 0, 'Phở gà', 'phở gà.jpg', 33000, 'active', '', '0000-00-00', '0000-00-00', '', 'main_food', 'main_food'),
(145, 0, 'Bánh canh cua', 'Bánh canh cua.jpg', 42000, 'active', '', '0000-00-00', '0000-00-00', '', 'main_food', 'main_food'),
(147, 0, 'Cháo ếch', 'Cháo ếch.jpg', 37000, 'active', '', '0000-00-00', '0000-00-00', '', 'main_food', 'main_food'),
(148, 0, 'Cháo lòng', 'Cháo lòng.jpg', 26000, 'active', '', '0000-00-00', '0000-00-00', '', 'main_food', 'main_food'),
(149, 0, 'Miến măng vịt', 'Miến măng vịt.jpg', 36000, 'active', '', '0000-00-00', '0000-00-00', '', 'main_food', 'main_food'),
(150, 0, 'Miến xào hải sản', 'mien-xao-hai-san-9.jpg', 45000, 'active', '', '0000-00-00', '0000-00-00', '', 'main_food', 'main_food'),
(151, 0, 'Cơm chiên kim chi', 'Cơm chiên kim chi.jpg', 31000, 'active', '', '0000-00-00', '0000-00-00', '', 'main_food', 'main_food'),
(152, 0, 'Cơm chiên hải sản', 'Cơm chiên hải sản.png', 46000, 'active', '', '0000-00-00', '0000-00-00', '', 'main_food', 'main_food'),
(153, 0, 'Coca Cola', 'coca.jpg', 18000, 'active', '', '0000-00-00', '0000-00-00', '', 'drink', 'main_food'),
(154, 0, 'Fanta', 'fanta.jpg', 18000, 'active', '', '0000-00-00', '0000-00-00', '', 'drink', 'main_food'),
(155, 0, '7 up', '7-up-lon-cao-330ml.jpg', 18000, 'active', '', '0000-00-00', '0000-00-00', '', 'drink', 'main_food'),
(156, 0, 'Water', 'nước khoáng.png', 10000, 'active', '', '0000-00-00', '0000-00-00', '', 'drink', 'main_food'),
(157, 0, 'Bánh su kem', 'banh-su-kem-phủ-socola-recipe-main-photo.jpg', 12000, 'active', '', '0000-00-00', '0000-00-00', '', 'cake', 'main_food'),
(158, 0, 'Cheese Cake', '94f91c16162870d2bbdacf3e2952dc49-best-cheesecake-recipe-2-1-of-1-4.jpg', 27000, 'active', '', '0000-00-00', '0000-00-00', '', 'cake', 'main_food'),
(159, 0, 'Muffin', 'muffin.jpg', 19000, 'active', '', '0000-00-00', '0000-00-00', '', 'cake', 'main_food'),
(160, 0, 'Trà đá', '0519-iced-tea-8-1.jpg', 9000, 'active', '', '0000-00-00', '0000-00-00', '', 'drink', 'main_food'),
(161, 0, 'Brown Sugar Bubble Milk Tea', 'Brown-sugar-bubble-milk-tea 1.jpg', 39000, 'active', '', '0000-00-00', '0000-00-00', '', 'drink', 'main_food'),
(162, 0, 'Flan Milk Tea', 'Flan Milk tea.jpg', 34000, 'active', '', '0000-00-00', '0000-00-00', '', 'drink', 'main_food'),
(163, 0, 'Fruit Milk Tea', 'Fruit Milk Tea 1.jpg', 45000, 'active', '', '0000-00-00', '0000-00-00', '', 'drink', 'main_food'),
(164, 0, 'Special Milk Tea & Jelly', 'Special Milk tea & Jelly.jpg', 47000, 'active', '', '0000-00-00', '0000-00-00', '', 'drink', 'main_food'),
(165, 0, 'Taiwan Milk Tea', 'Taiwan Milk Tea with Bubble.jpg', 42000, 'active', '', '0000-00-00', '0000-00-00', '', 'drink', 'main_food'),
(166, 0, 'Matcha Green Tea', 'matcha-green-tea-latte-bubble-260nw-1471951250.jpg', 48000, 'active', '', '0000-00-00', '0000-00-00', '', 'drink', 'main_food');

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
