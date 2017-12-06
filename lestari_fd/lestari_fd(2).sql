-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2017 at 03:15 PM
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
  `order_id` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `menu_id` int(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordermenu`
--

INSERT INTO `ordermenu` (`order_id`, `quantity`, `menu_id`, `price`) VALUES
(0, 4, 9, 24),
(0, 1, 11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `menu_id` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `price` float NOT NULL,
  `dates` date NOT NULL,
  `user_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `menu_id`, `quantity`, `price`, `dates`, `user_name`) VALUES
(0, 0, 0, 88, '2017-12-06', 'jam'),
(8, 0, 0, 25.5, '2017-12-06', 'jam');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `role` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` varchar(12) NOT NULL,
  `hostel` varchar(50) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`role`, `name`, `user_name`, `password`, `email`, `phone_no`, `hostel`, `order_id`) VALUES
('admin', 'admin', 'admin', 'admin123', 'admin.lestaricafe@gmail.com', '0192408372', 'Cafe Lestari ', 1),
('', 'farahin', 'eton', 'eton123', 'eton@gmail.com', '0193456445', 'Emerald Park', 2),
('', 'atikah', 'ika', 'ika123', 'ika@gmail.com', '0143255332', 'Lekir', 3),
('customer', 'jamsyeiqa', 'jam', 'jam123', 'jam@gmail.com', '0122676689', 'Kasturi', 4),
('', 'muttaqin ', 'mutt', 'mut123', 'mut@gmail.com', '0176848595', 'Tuah', 5),
('', 'syahirah', 'syira', 'syira123', 'syira@gmail.com', '0123333222', 'Lekir', 6);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_name`),
  ADD UNIQUE KEY `order_id` (`order_id`);

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
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
