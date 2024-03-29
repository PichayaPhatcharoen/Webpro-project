-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2024 at 08:38 AM
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
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `NickName` varchar(50) DEFAULT NULL,
  `Tel` varchar(50) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Position` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `FirstName`, `LastName`, `NickName`, `Tel`, `Username`, `Password`, `Position`) VALUES
(1, 'สยาม', 'เมืองยิ้ม', 'สยาม', '080-567-1111', 'sayam', 'password', 'พนักงาน'),
(2, 'สมหมาย', 'ประสิทธิ์', 'หมาย', '081-567-2222', 'sommai', 'password2', 'พ่อครัว'),
(3, 'สมชาติ', 'วงศ์สุข', 'ชาติ', '082-567-3333', 'somchart', 'password3', 'พ่อครัว'),
(4, 'สมรัก', 'สุขใจ', 'รัก', '083-456-4444', 'somrak', 'password4', 'พ่อครัว'),
(5, 'สมรส', 'วงศ์รส', 'รส', '084-567-5555', 'somros', 'password5', 'พ่อครัว'),
(6, 'สมศรี', 'ใจดี', 'ศรี', '085-123-4567', 'somsri', 'password6', 'พนักงาน'),
(7, 'สมหมาย', 'ประสิทธิ์', 'หมาย', '085-234-5678', 'sommai', 'password7', 'พนักงาน'),
(8, 'สมชาย', 'วงศ์สุข', 'ชาย', '085-345-6789', 'somchai', 'password8', 'พนักงาน'),
(9, 'สมใจ', 'สุขใจ', 'ใจ', '085-456-7890', 'somjai', 'password9', 'พนักงาน'),
(10, 'สมหวัง', 'สวัสดี', 'หวัง', '085-567-8901', 'somwang', 'password10', 'พนักงาน'),
(11, 'สมใหม่', 'มากล้น', 'ใหม่', '085-678-9012', 'sommai', 'password11', 'พนักงาน'),
(12, 'สมปอง', 'รุ่งเรือง', 'ปอง', '085-789-0123', 'sompong', 'password12', 'พนักงาน'),
(13, 'สมหมี', 'สุดใจ', 'หมี', '085-890-1234', 'sommee', 'password13', 'พนักงาน'),
(14, 'สมดี', 'เจริญสุข', 'ดี', '085-901-2345', 'somdi', 'password14', 'พนักงาน'),
(15, 'สมฤดี', 'พรหมสุข', 'ฤดี', '085-012-3456', 'somrudee', 'password15', 'พนักงาน'),
(16, 'สมสวย', 'อ่อนงาม', 'สวย', '085-123-4567', 'somsuai', 'password16', 'พนักงาน'),
(17, 'สมสมาน', 'สุขประดิษฐ์', 'สมาน', '085-234-5678', 'somsaman', 'password17', 'พนักงาน'),
(18, 'สมสู่', 'สุขสบาย', 'สมสู่', '085-345-6789', 'somsu', 'password18', 'พนักงาน'),
(19, 'สมบูรณ์', 'สุขภาพ', 'บูรณ์', '085-456-7890', 'sombun', 'password19', 'พนักงาน'),
(20, 'สมเกียรติ', 'ทวีสุข', 'เกียรติ', '085-567-8901', 'somkiat', 'password20', 'พนักงาน'),
(44, 'emp', 'emp', 'emp', '12345678', 'emp', 'emp1234', 'พนักงาน'),
(45, 'cook', 'cook', 'cook', '1234567890', 'cook', 'cook1234', 'พ่อครัว');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_id` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `nickname` varchar(50) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `first_name`, `last_name`, `nickname`, `tel`, `username`, `password`, `position`) VALUES
(1, 'สุดสวย', 'สง่างาม', 'สวย', 812345678, 'beautiful_manager', 'beautiful123', 'ผู้จัดการ');

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
(9, 6, 'bakery', 'วาฟเฟิลสกู้ปคิส', '', 1, 120.00, 'เตรียมอาหารเสร็จสิ้น', '2024-03-12 08:13:33', 'ชำระแล้ว'),
(10, 6, 'bakery', 'ชีสเค้กมะม่วง', '', 1, 130.00, 'เตรียมอาหารเสร็จสิ้น', '2024-03-12 08:13:33', 'ชำระแล้ว'),
(11, 6, 'drink', 'ชานมไข่มุกดั้งเดิม', 'medium', 1, 80.00, 'เตรียมอาหารเสร็จสิ้น', '2024-03-12 08:13:33', 'ชำระแล้ว'),
(12, 1, 'bakery', 'ราสเบอร์รี่เค้ก', '', 1, 110.00, 'เตรียมอาหารเสร็จสิ้น', '2024-03-12 08:13:59', 'ชำระแล้ว'),
(13, 1, 'bakery', 'ราสเบอร์รี่เค้ก', '', 1, 110.00, 'เตรียมอาหารเสร็จสิ้น', '2024-03-12 08:28:42', 'ชำระแล้ว'),
(14, 6, 'bakery', 'ราสเบอร์รี่เค้ก', '', 1, 110.00, 'เตรียมอาหารเสร็จสิ้น', '2024-03-12 20:21:34', 'ชำระแล้ว'),
(15, 6, 'bakery', 'ปังช็อกโกบานาน่า', '', 1, 65.00, 'เตรียมอาหารเสร็จสิ้น', '2024-03-12 20:21:34', 'ชำระแล้ว'),
(17, 6, 'bakery', 'ปังช็อกโกบานาน่า', '', 1, 65.00, 'เตรียมอาหารเสร็จสิ้น', '2024-03-12 20:40:40', 'ชำระแล้ว'),
(18, 6, 'bakery', 'เค้กส้มจี๊ด', '', 1, 85.00, 'เตรียมอาหารเสร็จสิ้น', '2024-03-12 20:41:36', 'ชำระแล้ว'),
(20, 1, 'bakery', 'ราสเบอร์รี่เค้ก', '', 2, 110.00, 'เตรียมอาหารเสร็จสิ้น', '2024-03-13 02:28:39', 'ชำระแล้ว'),
(21, 1, 'bakery', 'สวีทตี้โดรายากิ', '', 4, 120.00, 'เตรียมอาหารเสร็จสิ้น', '2024-03-13 02:28:39', 'ชำระแล้ว'),
(22, 1, 'drink', 'ชานมไข่มุกดั้งเดิม', 'medium', 1, 80.00, 'เตรียมอาหารเสร็จสิ้น', '2024-03-13 02:29:13', 'ชำระแล้ว'),
(23, 1, 'bakery', 'แพนเค้กดั้งเดิม', '', 1, 100.00, 'เตรียมอาหารเสร็จสิ้น', '2024-03-13 06:12:31', 'ชำระแล้ว'),
(24, 1, 'bakery', 'ปังช็อกโกบานาน่า', '', 1, 65.00, 'เตรียมอาหารเสร็จสิ้น', '2024-03-13 06:12:31', 'ชำระแล้ว');

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
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `drink_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `order_customer`
--
ALTER TABLE `order_customer`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
