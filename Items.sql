-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 10:16 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `sku` varchar(255) COLLATE utf8_bin NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `price` float NOT NULL,
  `size` varchar(50) COLLATE utf8_bin NOT NULL,
  `weight` varchar(50) COLLATE utf8_bin NOT NULL,
  `height` varchar(50) COLLATE utf8_bin NOT NULL,
  `width` varchar(50) COLLATE utf8_bin NOT NULL,
  `length` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `sku`, `name`, `price`, `size`, `weight`, `height`, `width`, `length`) VALUES
(1, 'GGWP007', 'War and Peace', 20, '', '2', '', '', ''),
(2, 'GGWP008', 'War and Peace', 20, '', '2', '', '', ''),
(3, 'GGWP009', 'War and Peace', 20, '', '2', '', '', ''),
(4, 'GGWP010', 'War and Peace', 20, '', '2', '', '', ''),
(5, 'JVC200122', 'Acme Disc', 1, '700', '', '', '', ''),
(6, 'JVC200123', 'Acme Disc', 1, '700', '', '', '', ''),
(7, 'JVC200124', 'Acme Disc', 1, '700', '', '', '', ''),
(8, 'JVC200125', 'Acme Disc', 1, '700', '', '', '', ''),
(9, 'TR120554', 'Chair', 40, '', '', '24', '45', '15'),
(10, 'TR120555', 'Chair', 40, '', '', '24', '45', '15'),
(11, 'TR120556', 'Chair', 40, '', '', '24', '45', '15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
