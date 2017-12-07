-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 06:31 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lestari_fd`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user_name` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `hostel` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `menu_name` varchar(10) NOT NULL,
  `menu_price` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `menu_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_price`) VALUES
(1, 'Nasi Goreng Kampung', 6.5),
(3, 'Char Kuew Teow', 6),
(5, 'Nasi Lemak Ayam', 7),
(6, 'Nasi Ayam', 5.5),
(7, 'Teh O Ais Limau', 1.5),
(9, 'Mee Goreng Basah', 6),
(10, 'Jus Oren', 2.5),
(11, 'Limau Ais', 1.5);

-- --------------------------------------------------------

--
-- Table structure for table `ordermenu`
--

CREATE TABLE `ordermenu` (
  `order_id` int(11) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `menu_id` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordermenu`
--

INSERT INTO `ordermenu` (`order_id`, `quantity`, `menu_id`, `price`) VALUES
(82, '1', '6', 5.5),
(82, '1', '7', 1.5),
(82, '1', '9', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(4) NOT NULL,
  `menu_id` int(4) NOT NULL,
  `quantity` int(4) NOT NULL,
  `price` float NOT NULL,
  `dates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `menu_id`, `quantity`, `price`, `dates`) VALUES
(1, 0, 0, 0, '2017-11-22'),
(2, 0, 0, 12.5, '2017-11-22'),
(3, 0, 0, 12.5, '2017-11-22'),
(4, 0, 0, 12.5, '2017-11-22'),
(5, 0, 0, 12.5, '2017-11-22'),
(6, 0, 0, 12.5, '2017-11-22'),
(7, 0, 0, 12.5, '2017-11-22'),
(8, 0, 0, 12.5, '2017-11-22'),
(9, 0, 0, 12.5, '2017-11-22'),
(10, 0, 0, 69, '2017-11-22'),
(11, 0, 0, 49.5, '2017-11-22'),
(12, 0, 0, 12.5, '2017-11-22'),
(13, 0, 0, 12.5, '2017-11-22'),
(14, 0, 0, 14.5, '2017-11-22'),
(15, 0, 0, 18.5, '2017-11-22'),
(16, 0, 0, 25.5, '2017-11-29'),
(17, 0, 0, 0, '2017-11-29'),
(18, 0, 0, 0, '2017-11-29'),
(19, 0, 0, 5, '2017-11-29'),
(20, 0, 0, 0, '2017-11-29'),
(21, 0, 0, 0, '2017-11-29'),
(22, 0, 0, 0, '2017-11-29'),
(23, 0, 0, 6, '2017-11-29'),
(24, 0, 0, 20.2, '2017-11-29'),
(25, 0, 0, 24.5, '2017-11-29'),
(26, 0, 0, 24.5, '2017-11-29'),
(27, 0, 0, 24.5, '2017-11-29'),
(28, 0, 0, 24.5, '2017-11-29'),
(29, 0, 0, 13.5, '2017-11-29'),
(30, 0, 0, 6.5, '2017-11-29'),
(31, 0, 0, 0, '2017-11-29'),
(32, 0, 0, 6.5, '2017-11-29'),
(33, 0, 0, 0, '2017-11-29'),
(34, 0, 0, 0, '2017-11-29'),
(35, 0, 0, 13, '2017-11-29'),
(36, 0, 0, 13, '2017-11-29'),
(37, 0, 0, 13, '2017-11-29'),
(38, 0, 0, 13, '2017-11-29'),
(39, 0, 0, 6.5, '2017-11-29'),
(40, 0, 0, 6.5, '2017-11-29'),
(41, 0, 0, 13, '2017-11-29'),
(42, 0, 0, 13, '2017-11-29'),
(43, 0, 0, 12.5, '2017-11-29'),
(44, 0, 0, 7, '2017-11-29'),
(45, 0, 0, 5.5, '2017-11-29'),
(46, 0, 0, 0, '2017-11-29'),
(47, 0, 0, 0, '2017-11-29'),
(48, 0, 0, 0, '2017-11-29'),
(49, 0, 0, 20.5, '2017-11-29'),
(50, 0, 0, 26.5, '2017-11-29'),
(51, 0, 0, 48.2, '2017-12-03'),
(52, 0, 0, 49.9, '2017-12-03'),
(53, 0, 0, 48.2, '2017-12-03'),
(54, 0, 0, 46.5, '2017-12-03'),
(55, 0, 0, 1.7, '2017-12-03'),
(56, 0, 0, 4.2, '2017-12-03'),
(57, 0, 0, 8.5, '2017-12-03'),
(58, 0, 0, 27.5, '2017-12-03'),
(59, 0, 0, 45, '2017-12-03'),
(60, 0, 0, 19.5, '2017-12-04'),
(61, 0, 0, 19.5, '2017-12-04'),
(62, 0, 0, 0, '2017-12-04'),
(63, 0, 0, 0, '2017-12-04'),
(64, 0, 0, 12.5, '2017-12-04'),
(65, 0, 0, 6.5, '2017-12-04'),
(66, 0, 0, 6.5, '2017-12-04'),
(67, 0, 0, 6.5, '2017-12-04'),
(68, 0, 0, 0, '2017-12-04'),
(69, 0, 0, 0, '2017-12-04'),
(70, 0, 0, 0, '2017-12-04'),
(71, 0, 0, 6.5, '2017-12-04'),
(72, 0, 0, 0, '2017-12-04'),
(73, 0, 0, 0, '2017-12-04'),
(74, 0, 0, 0, '2017-12-04'),
(75, 0, 0, 0, '2017-12-04'),
(76, 0, 0, 0, '2017-12-04'),
(77, 0, 0, 0, '2017-12-04'),
(78, 0, 0, 12.5, '2017-12-04'),
(79, 0, 0, 19.5, '2017-12-04'),
(80, 0, 0, 39, '2017-12-04'),
(81, 0, 0, 25, '2017-12-04'),
(82, 0, 0, 18, '2017-12-04'),
(83, 0, 0, 13, '2017-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(3) NOT NULL,
  `role` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` varchar(12) NOT NULL,
  `hostel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `role`, `name`, `user_name`, `password`, `email`, `phone_no`, `hostel`) VALUES
(1, 'admin', 'admin', 'admin', 'admin123', 'admin.lestaricafe@gmail.com', '0192408372', 'Cafe Lestari '),
(9, 'customer', 'jamsyeiqa', 'jam', 'jam123', 'jam@gmail.com', '0122676689', 'Kasturi'),
(11, '', 'muttaqin ', 'mutt', 'mut123', 'mut@gmail.com', '0176848595', 'Tuah'),
(14, '', 'farahin', 'eton', 'eton123', 'eton@gmail.com', '0193456445', 'Emerald Park'),
(17, '', 'syahirah', 'syira', 'syira123', 'syira@gmail.com', '0123333222', 'Lekir'),
(18, '', 'atikah', 'ika', 'ika123', 'ika@gmail.com', '0143255332', 'Lekir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `ordermenu`
--
ALTER TABLE `ordermenu`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `price` (`price`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
