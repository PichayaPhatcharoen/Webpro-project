-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 10:24 PM
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
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) DEFAULT NULL,
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
(NULL, 'เฟิร', 'เฟิร', 'เฟิร', '1234567890', 'fernfern', 'fern1234', 'พนักงาน'),
(NULL, 'เฟิร', 'เฟิร', 'เฟิรร', '12345567890', 'fernfern', 'fern1234', 'พ่อครัว');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
