-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 03:14 AM
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
(125, 50, 'Palova cake', 'banh-pavlova.jpg', 34000, 'active', '', '0000-00-00', '0000-00-00', '', 'cake', 'main_food'),
(126, 20, 'Cheese Hot dog', 'hot dog phô mai.png', 17000, 'active', '', '0000-00-00', '0000-00-00', '', 'KFC', 'main_food'),
(127, 45, 'Apple Cake', 'banh-tao.jpg', 40000, 'active', '', '0000-00-00', '0000-00-00', '', 'cake', 'cake'),
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
(166, 0, 'Matcha Green Tea', 'matcha-green-tea-latte-bubble-260nw-1471951250.jpg', 48000, 'active', '', '0000-00-00', '0000-00-00', '', 'drink', 'main_food'),
(167, 20, 'Nước ép bưởi da xanh', 'nuoc_ep_buoi_da_xanh.jpg', 39000, 'active', 'Nước ép bưởi da xanh', '0000-00-00', '0000-00-00', 'Nhà NEST', 'juice', 'juice'),
(168, 37, 'Nước ép cà rốt', 'nuoc_ep_ca_rot.jpg', 49000, 'active', 'Nước ép cà rốt', '0000-00-00', '0000-00-00', 'Nhà NEST', 'juice', 'juice'),
(169, 50, 'Nước ép cần tây', 'nuoc_ep_can_tay.jpg', 29000, 'active', 'Nước ép cần tây', '0000-00-00', '0000-00-00', 'Nhà NEST', 'juice', 'juice'),
(170, 20, 'Nước ép bưởi cam', 'nuoc_ep_buoi_cam.jpg', 39000, 'active', 'Nước ép bưởi cam', '0000-00-00', '0000-00-00', 'Nhà NEST', 'juice', 'juice'),
(171, 25, 'Nước ép dưa lưới', 'nuoc_ep_dua_luoi.jpg', 39000, 'active', 'Nước ép dưa lưới', '0000-00-00', '0000-00-00', 'Nhà NEST', 'juice', 'juice'),
(172, 25, 'Nước ép lựu', 'nuoc_ep_luu.jpg', 29000, 'active', 'Nước ép lựu', '0000-00-00', '0000-00-00', 'Nhà NEST', 'juice', 'juice'),
(173, 37, 'Nước ép táo đỏ', 'nuoc_ep_tao_do.jpeg', 39000, 'active', 'Nước ép táo đỏ', '0000-00-00', '0000-00-00', 'Nhà NEST', 'juice', 'juice'),
(174, 20, 'Nước ép táo lê', 'nuoc_ep_tao_le.jpeg', 49000, 'active', 'Nước ép táo lê', '0000-00-00', '0000-00-00', 'Nhà NEST', 'juice', 'juice'),
(175, 50, 'Nước ép táo thơm', 'nuoc_ep_tao_thom.jpg', 39000, 'active', 'Nước ép táo thơm', '0000-00-00', '0000-00-00', 'Nhà NEST', 'juice', 'juice'),
(176, 37, 'Nước ép táo xanh', 'nuoc_ep_tao_xanh.jpg', 49000, 'active', 'Nước ép táo xanh', '0000-00-00', '0000-00-00', 'Nhà NEST', 'juice', 'juice'),
(177, 50, 'Cơm gà truyền thống', 'com_ga_truyen_thong.jpg', 39000, 'active', 'Cơm gà truyền thống', '0000-00-00', '0000-00-00', 'Nhà NEST', 'KFC', 'KFC'),
(178, 37, 'Gà quay 1 miếng', 'ga_quay_1_mieng.jpg', 49000, 'active', 'Gà quay 1 miếng', '0000-00-00', '0000-00-00', 'Nhà NEST', 'KFC', 'KFC'),
(179, 20, 'Gà rán 1 miếng', 'ga_ran_1_mieng.jpg', 29000, 'active', 'Gà quay 1 miếng', '0000-00-00', '0000-00-00', 'Nhà NEST', 'KFC', 'KFC'),
(180, 25, 'Gà rán 2 miếng', 'ga_ran_2_mieng.jpg', 39000, 'active', 'Gà rán 2 miếng', '0000-00-00', '0000-00-00', 'Nhà NEST', 'KFC', 'KFC'),
(181, 37, 'Gà rán 3 miếng', 'ga_ran_3_mieng.jpg', 59000, 'active', 'Gà rán 3 miếng', '0000-00-00', '0000-00-00', 'Nhà NEST', 'KFC', 'KFC'),
(182, 20, 'Gà rán 6 miếng', 'ga_ran_6_mieng.jpg', 89000, 'active', 'Gà rán 6 miếng', '0000-00-00', '0000-00-00', 'Nhà NEST', 'KFC', 'KFC'),
(183, 50, 'Gà rán 9 miếng', 'ga_ran_9_mieng.jpg', 109000, 'active', 'Gà rán 9 miếng', '0000-00-00', '0000-00-00', 'Nhà NEST', 'KFC', 'KFC'),
(184, 37, 'Gà quay 12 miếng', 'ga_ran_12_mieng.jpg', 120000, 'active', 'Gà quay 12 miếng', '0000-00-00', '0000-00-00', 'Nhà NEST', 'KFC', 'KFC'),
(185, 20, 'Hot wings 3 miếng', 'hot_wings_3_mieng.jpg', 59000, 'active', 'Hot wings 3 miếng', '0000-00-00', '0000-00-00', 'Nhà NEST', 'KFC', 'KFC'),
(186, 37, 'Hot wings 5 miếng', 'hot_wings_5_mieng.jpg', 89000, 'active', 'Hot wings 5 miếng', '0000-00-00', '0000-00-00', 'Nhà NEST', 'KFC', 'KFC');

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
  `pay` int(4) NOT NULL,
  `so_ban` varchar(300) NOT NULL,
  `code` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `my_cart`
--

INSERT INTO `my_cart` (`id_item`, `name`, `img`, `cost`, `amount`, `id_cart`, `id_user`, `user_name`, `status`, `pay`, `so_ban`, `code`) VALUES
(125, 'Palova cake', 'banh-pavlova.jpg', 33000, 2, 14, 1, 'Clak kenz', 'Hoàn thành', 2, '', 7),
(125, 'Palova cake', 'banh-pavlova.jpg', 33000, 2, 15, 1, 'Clak kenz', 'Hoàn thành', 2, '', 10),
(182, 'Gà rán 6 miếng', 'ga_ran_6_mieng.jpg', 89000, 6, 16, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 11),
(127, 'Apple Cake', 'banh-tao.jpg', 22000, 6, 17, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 12),
(125, 'Palova cake', 'banh-pavlova.jpg', 33000, 3, 18, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 13),
(137, 'Donut', 'banh-Donut.jpg', 16000, 3, 19, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 14),
(157, 'Bánh su kem', 'banh-su-kem-phủ-socola-recipe-main-photo.jpg', 12000, 3, 19, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 15),
(4, 'Coffee', 'coffee.jpg', 23000, 1, 19, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 16),
(130, 'Tiramisu', 'banh-tiramisu.jpg', 23000, 1, 20, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 17),
(181, 'Gà rán 3 miếng', 'ga_ran_3_mieng.jpg', 59000, 2, 21, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 18),
(127, 'Apple Cake', 'banh-tao.jpg', 22000, 2, 22, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 20),
(125, 'Palova cake', 'banh-pavlova.jpg', 33000, 18, 23, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 21),
(157, 'Bánh su kem', 'banh-su-kem-phủ-socola-recipe-main-photo.jpg', 12000, 7, 23, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 22),
(142, 'Bánh canh chả cá', 'bánh canh chả cá.jpg', 31000, 2, 24, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 23),
(168, 'Nước ép cà rốt', 'nuoc_ep_ca_rot.jpg', 49000, 2, 24, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 24),
(139, 'Mochi Matcha', 'banh-mochi-matcha.jpg', 13000, 2, 26, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 25),
(137, 'Donut', 'banh-Donut.jpg', 16000, 2, 26, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 26),
(125, 'Palova cake', 'banh-pavlova.jpg', 33000, 2, 27, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 27),
(138, 'Macaron', 'banh-macaron.jpg', 14000, 2, 28, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 28),
(125, 'Palova cake', 'banh-pavlova.jpg', 33000, 1, 29, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 29),
(127, 'Apple Cake', 'banh-tao.jpg', 22000, 2, 29, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 30),
(153, 'Coca Cola', 'coca.jpg', 18000, 2, 29, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 31),
(157, 'Bánh su kem', 'banh-su-kem-phủ-socola-recipe-main-photo.jpg', 12000, 3, 30, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 32),
(130, 'Tiramisu', 'banh-tiramisu.jpg', 23000, 2, 31, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 33),
(157, 'Bánh su kem', 'banh-su-kem-phủ-socola-recipe-main-photo.jpg', 12000, 5, 32, 1, 'Clak kenz', 'Hoàn thành', 2, '25', 34),
(137, 'Donut', 'banh-Donut.jpg', 16000, 2, 33, 2, 'Nezuko Demii', 'Hoàn thành', 2, '25', 35),
(139, 'Mochi Matcha', 'banh-mochi-matcha.jpg', 13000, 3, 33, 2, 'Nezuko Demii', 'Hoàn thành', 2, '25', 36),
(125, 'Palova cake', 'banh-pavlova.jpg', 33000, 6, 33, 2, 'Nezuko Demii', 'Hoàn thành', 2, '25', 37),
(155, '7 up', '7-up-lon-cao-330ml.jpg', 18000, 4, 33, 2, 'Nezuko Demii', 'Hoàn thành', 2, '25', 38);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gio_hang`
--

CREATE TABLE `tbl_gio_hang` (
  `id_cart` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gio_hang`
--

INSERT INTO `tbl_gio_hang` (`id_cart`, `id_user`, `status`, `date`, `time`) VALUES
(8, 1, 'done', '0000-00-00', 'November 14, 2021 08:04:03 AM'),
(10, 1, 'done', '0000-00-00', 'November 14, 2021 08:11:54 AM'),
(11, 1, 'done', '0000-00-00', 'November 14, 2021 08:13:08 AM'),
(12, 1, 'done', '0000-00-00', 'November 14, 2021 08:24:55 AM'),
(13, 1, 'done', '0000-00-00', 'November 14, 2021 08:25:22 AM'),
(14, 1, 'done', '0000-00-00', 'November 14, 2021 10:35:03 AM'),
(15, 1, 'done', '0000-00-00', 'November 14, 2021 10:35:32 AM'),
(16, 1, 'done', '0000-00-00', 'November 14, 2021 01:36:41 PM'),
(17, 1, 'done', '0000-00-00', 'November 15, 2021 02:11:10 PM'),
(18, 1, 'done', '0000-00-00', 'November 15, 2021 02:18:28 PM'),
(19, 1, 'done', '0000-00-00', 'November 15, 2021 02:49:02 PM'),
(20, 1, 'done', '0000-00-00', 'November 15, 2021 03:02:48 PM'),
(21, 1, 'done', '0000-00-00', 'November 15, 2021 03:31:20 PM'),
(22, 1, 'done', '0000-00-00', 'November 16, 2021 03:53:48 AM'),
(23, 1, 'done', '0000-00-00', 'November 16, 2021 04:25:02 PM'),
(24, 1, 'done', '0000-00-00', 'November 17, 2021 03:05:55 PM'),
(25, 1, 'done', '0000-00-00', 'November 17, 2021 03:09:21 PM'),
(26, 1, 'done', '0000-00-00', 'November 19, 2021 03:43:25 AM'),
(27, 1, 'done', '0000-00-00', 'November 19, 2021 03:46:38 AM'),
(28, 1, 'done', '0000-00-00', 'November 19, 2021 03:47:27 AM'),
(29, 1, 'done', '0000-00-00', 'November 20, 2021 02:12:37 PM'),
(30, 1, 'done', '0000-00-00', 'November 21, 2021 05:05:27 AM'),
(31, 1, 'done', '0000-00-00', 'November 21, 2021 09:11:08 AM'),
(32, 1, 'done', '0000-00-00', 'November 21, 2021 09:41:19 AM'),
(33, 1, 'done', '0000-00-00', 'November 21, 2021 09:51:07 AM'),
(34, 2, 'not', '0000-00-00', 'November 21, 2021 10:15:58 AM'),
(35, 1, 'not', '0000-00-00', 'November 21, 2021 05:15:00 PM');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `my_cart`
--
ALTER TABLE `my_cart`
  ADD PRIMARY KEY (`code`),
  ADD KEY `fk_id_item` (`id_item`),
  ADD KEY `id_cart` (`id_cart`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_gio_hang`
--
ALTER TABLE `tbl_gio_hang`
  ADD PRIMARY KEY (`id_cart`);

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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `my_cart`
--
ALTER TABLE `my_cart`
  MODIFY `code` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_gio_hang`
--
ALTER TABLE `tbl_gio_hang`
  MODIFY `id_cart` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `username`
--
ALTER TABLE `username`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `my_cart`
--
ALTER TABLE `my_cart`
  ADD CONSTRAINT `fk_id_item` FOREIGN KEY (`id_item`) REFERENCES `item_1` (`id`),
  ADD CONSTRAINT `my_cart_ibfk_1` FOREIGN KEY (`id_cart`) REFERENCES `tbl_gio_hang` (`id_cart`),
  ADD CONSTRAINT `my_cart_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `username` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
