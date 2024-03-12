-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 03:19 PM
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
-- Database: `fernnfriend`
--

-- --------------------------------------------------------

--
-- Table structure for table `bakery`
--

CREATE TABLE `bakery` (
  `bakery_id` int(11) NOT NULL,
  `bakery_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT 80.00,
  `bakery_picture_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bakery`
--

INSERT INTO `bakery` (`bakery_id`, `bakery_name`, `price`, `bakery_picture_path`) VALUES
(1, 'ราสเบอร์รี่เค้ก', 110.00, './menu/bakery/ราสเบอร์รี่เค้ก.png'),
(2, 'สวีทตี้โดรายากิ', 120.00, './menu/bakery/สวีทตี้โดรายากิ.png'),
(3, 'ปังช็อกโกบานาน่า', 65.00, './menu/bakery/ปังช็อกโกบานาน่า.png'),
(4, 'แพนเค้กดั้งเดิม', 100.00, './menu/bakery/แพนเค้กดั้งเดิม.png'),
(5, 'เลเยอร์เชอร์รี่', 140.00, './menu/bakery/เลเยอร์เชอร์รี่.png'),
(6, 'วาฟเฟิลสกู้ปคิส', 120.00, './menu/bakery/วาฟเฟิลสกู้ปคิส.png'),
(7, 'มัฟฟินโอริโอ้', 100.00, './menu/bakery/มัฟฟินโอริโอ้.png'),
(8, 'ชีสเค้กมะม่วง', 130.00, './menu/bakery/ชีสเค้กมะม่วง.png'),
(9, 'ปังครีมนุ่ม', 100.00, './menu/bakery/ปังวิปครีมนุ่ม.png'),
(10, 'ไอศกรีมไจแอ้นท์', 165.00, './menu/bakery/ไอศกรีมไจแอ้นท์.png'),
(11, 'บิสกิตคุกกี้', 55.00, './menu/bakery/บิสกิตคุกกี้.png'),
(12, 'เค้กส้มจี๊ด', 85.00, './menu/bakery/เค้กส้มจี๊ด.png'),
(13, 'ครัวซองช็อกโก', 50.00, './menu/bakery/ครัวซองช็อกโก.png'),
(14, 'แพนเค้กฟูครีม', 130.00, './menu/bakery/แพนเค้กฟูครีม.png'),
(15, 'บราวนี่เครป', 90.00, './menu/bakery/บราวนี่เครป.png'),
(16, 'ช็อกโกบลูเบอร์รี่', 140.00, './menu/bakery/ช็อกโกบลูเบอร์รี่.png'),
(17, 'เบอร์รี่ชีสเค้ก', 100.00, './menu/bakery/เบอร์รี่ชีสเค้ก.png'),
(18, 'โดนัทคาราเมล', 45.00, './menu/bakery/โดนัทคาราเมล.PNG'),
(19, 'คัพเค้กช็อกโกแลต', 55.00, './menu/bakery/คัพเค้กช็อกโกแลต.PNG'),
(20, 'โดนัทช็อกโกแลต', 45.00, './menu/bakery/โดนัทช็อกโกแลต.PNG'),
(21, 'เค้กกล้วยหอม', 45.00, './menu/bakery/เค้กกล้วยหอม.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `cart_1`
--

CREATE TABLE `cart_1` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `menutype` enum('bakery','drink') DEFAULT NULL,
  `size` enum('small','medium','large') DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_2`
--

CREATE TABLE `cart_2` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `menutype` enum('bakery','drink') DEFAULT NULL,
  `size` enum('small','medium','large') DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_3`
--

CREATE TABLE `cart_3` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `menutype` enum('bakery','drink') DEFAULT NULL,
  `size` enum('small','medium','large') DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_4`
--

CREATE TABLE `cart_4` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `menutype` enum('bakery','drink') DEFAULT NULL,
  `size` enum('small','medium','large') DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_5`
--

CREATE TABLE `cart_5` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `menutype` enum('bakery','drink') DEFAULT NULL,
  `size` enum('small','medium','large') DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_6`
--

CREATE TABLE `cart_6` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `menutype` enum('bakery','drink') DEFAULT NULL,
  `size` enum('small','medium','large') DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `drink_id` int(11) NOT NULL,
  `drink_name` varchar(255) NOT NULL,
  `drink_picture_path` varchar(255) NOT NULL,
  `price_small` decimal(10,2) NOT NULL DEFAULT 60.00,
  `price_med` decimal(10,2) NOT NULL DEFAULT 80.00,
  `price_large` decimal(10,2) NOT NULL DEFAULT 100.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`drink_id`, `drink_name`, `drink_picture_path`, `price_small`, `price_med`, `price_large`) VALUES
(1, 'ชาสตรอว์เบอร์รี', './menu/drinks/ชาสตรอว์เบอร์รี.png', 60.00, 80.00, 100.00),
(2, 'ชานมไข่มุกดั้งเดิม', './menu/drinks/ชานมไข่มุกดั้งเดิม.png', 60.00, 80.00, 100.00),
(3, 'ชาเขียวนุ่มชีส', './menu/drinks/ชาเขียวนุ่มชีส.png', 60.00, 80.00, 100.00),
(4, 'นมปั่นสตรอว์เบอร์รี่', './menu/drinks/นมปั่นสครอว์เบอร์รี่.png', 60.00, 80.00, 100.00),
(5, 'นมปั่นมะม่วง', './menu/drinks/นมปั่นมะม่วง.png', 60.00, 80.00, 100.00),
(6, 'นมปั่นโอริโอ้', './menu/drinks/นมปั่นโอริโอ้.png', 60.00, 80.00, 100.00),
(7, 'มัชชะลาเต้', './menu/drinks/มัชชะลาเต้.png', 60.00, 80.00, 100.00),
(8, 'นมปั่นคาราเมล', './menu/drinks/นมปั่นคาราเมล.png', 60.00, 80.00, 100.00),
(9, 'ช็อกโกวิป', './menu/drinks/ช็อกโกวิป.png', 60.00, 80.00, 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `order_customer`
--

CREATE TABLE `order_customer` (
  `order_id` int(11) NOT NULL,
  `tableNum` int(11) NOT NULL,
  `menu_type` enum('bakery','drink') NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `size` enum('small','medium','large') DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `state` enum('กำลังจัดเตรียมอาหาร..','เตรียมอาหารเสร็จสิ้น') NOT NULL,
  `order_datetime` datetime DEFAULT current_timestamp(),
  `ispaid` enum('ชำระแล้ว','ยังไม่ได้ชำระ') NOT NULL DEFAULT 'ยังไม่ได้ชำระ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_customer`
--

INSERT INTO `order_customer` (`order_id`, `tableNum`, `menu_type`, `menu_name`, `size`, `amount`, `price`, `state`, `order_datetime`, `ispaid`) VALUES
(9, 6, 'bakery', 'วาฟเฟิลสกู้ปคิส', '', 1, 120.00, 'กำลังจัดเตรียมอาหาร..', '2024-03-12 08:13:33', 'ยังไม่ได้ชำระ'),
(10, 6, 'bakery', 'ชีสเค้กมะม่วง', '', 1, 130.00, 'กำลังจัดเตรียมอาหาร..', '2024-03-12 08:13:33', 'ยังไม่ได้ชำระ'),
(11, 6, 'drink', 'ชานมไข่มุกดั้งเดิม', 'medium', 1, 80.00, 'กำลังจัดเตรียมอาหาร..', '2024-03-12 08:13:33', 'ยังไม่ได้ชำระ'),
(12, 1, 'bakery', 'ราสเบอร์รี่เค้ก', '', 1, 110.00, 'กำลังจัดเตรียมอาหาร..', '2024-03-12 08:13:59', 'ยังไม่ได้ชำระ'),
(13, 1, 'bakery', 'ราสเบอร์รี่เค้ก', '', 1, 110.00, 'กำลังจัดเตรียมอาหาร..', '2024-03-12 08:28:42', 'ยังไม่ได้ชำระ'),
(14, 6, 'bakery', 'ราสเบอร์รี่เค้ก', '', 1, 110.00, 'กำลังจัดเตรียมอาหาร..', '2024-03-12 20:21:34', 'ยังไม่ได้ชำระ'),
(15, 6, 'bakery', 'ปังช็อกโกบานาน่า', '', 1, 65.00, 'กำลังจัดเตรียมอาหาร..', '2024-03-12 20:21:34', 'ยังไม่ได้ชำระ'),
(17, 6, 'bakery', 'ปังช็อกโกบานาน่า', '', 1, 65.00, 'กำลังจัดเตรียมอาหาร..', '2024-03-12 20:40:40', 'ยังไม่ได้ชำระ'),
(18, 6, 'bakery', 'เค้กส้มจี๊ด', '', 1, 85.00, 'เตรียมอาหารเสร็จสิ้น', '2024-03-12 20:41:36', 'ชำระแล้ว');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `review_text` text NOT NULL,
  `photo_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bakery`
--
ALTER TABLE `bakery`
  ADD PRIMARY KEY (`bakery_id`),
  ADD UNIQUE KEY `bakery_name` (`bakery_name`);

--
-- Indexes for table `cart_1`
--
ALTER TABLE `cart_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_2`
--
ALTER TABLE `cart_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_3`
--
ALTER TABLE `cart_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_4`
--
ALTER TABLE `cart_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_5`
--
ALTER TABLE `cart_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_6`
--
ALTER TABLE `cart_6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`drink_id`),
  ADD UNIQUE KEY `drink_name` (`drink_name`);

--
-- Indexes for table `order_customer`
--
ALTER TABLE `order_customer`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bakery`
--
ALTER TABLE `bakery`
  MODIFY `bakery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `cart_1`
--
ALTER TABLE `cart_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `cart_2`
--
ALTER TABLE `cart_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart_3`
--
ALTER TABLE `cart_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart_4`
--
ALTER TABLE `cart_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart_5`
--
ALTER TABLE `cart_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart_6`
--
ALTER TABLE `cart_6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `drink_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_customer`
--
ALTER TABLE `order_customer`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
