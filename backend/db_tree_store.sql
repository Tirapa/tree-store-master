-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 01:31 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tree_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `name`, `detail`, `price`, `picture`) VALUES
(10, 'Rosemary', 'Rosemary are import from Netherlands. ', 1000, '178232_main_large.jpg'),
(12, 'ทานตะวัน', 'ทานตะวัน อายุ 30 วัน', 30, 'images (1).jpeg'),
(13, 'หน้าวัว', 'ต้นหน้าวัว อายุ 30 วัน', 100, 'ดาวน์โหลด.jpeg'),
(14, 'มะลิ', 'ต้นมะลิ อายุ 60 วัน', 100, 'images (2).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) NOT NULL,
  `goods_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `goods_id`, `user_id`, `amount`, `picture`, `date_time`, `status`) VALUES
(1, 10, 1001, 4, 'IMG_20181203_153934_009.jpg', '04/12', 2),
(2, 10, 1002, 1, '20181123_220638.jpg', '4/12/61', 2),
(3, 10, 1002, 1, '20181123_220638.jpg', '4/12/61', 2),
(4, 10, 1003, 6, 'unnamed (1).jpg', '04/61', 1),
(5, 13, 1003, 2, 'unnamed (1).jpg', '04/61', 2),
(6, 15, 1003, 1, 'unnamed.jpg', '04/61', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `picture`, `status`) VALUES
(999, 'admin', '1234', 'Perzelita Koniz', '1.jpg', 2),
(1000, 'user1', 'user1', 'Chaowarin Tuchanto', '1.jpg', 1),
(1001, 'user2', '1234', 'faii', '1.jpg', 1),
(1002, 'amy', '1111', 'boy', '1.jpg', 1),
(1003, 'tester1', '1234', 'testttt', '1.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
