-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 03:11 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_customer`
--
ALTER TABLE `order_customer`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_customer`
--
ALTER TABLE `order_customer`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
