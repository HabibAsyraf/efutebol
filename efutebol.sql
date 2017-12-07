-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2017 at 10:36 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `efutebol`
--

-- --------------------------------------------------------

--
-- Table structure for table `ef_booking`
--

CREATE TABLE `ef_booking` (
  `booking_id` int(11) NOT NULL,
  `booking_date` varchar(255) NOT NULL,
  `booking_time` varchar(255) NOT NULL,
  `booking_date_time` datetime NOT NULL,
  `booking_date_time_end` datetime NOT NULL,
  `duration` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `court_id` int(11) NOT NULL,
  `court_name` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `booking_method` varchar(255) NOT NULL DEFAULT 'Online Booking',
  `action_by` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ef_booking`
--

INSERT INTO `ef_booking` (`booking_id`, `booking_date`, `booking_time`, `booking_date_time`, `booking_date_time_end`, `duration`, `amount`, `court_id`, `court_name`, `payment_method`, `name`, `email_address`, `contact_no`, `status`, `booking_method`, `action_by`, `created_by`, `created_date`) VALUES
(22, 'Sunday, 3rd December 2017', '8:00 AM - 11:00 AM', '2017-12-03 08:00:00', '2017-12-03 11:00:00', 3, '240.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'D', 'Online Booking', 14, 4, '2017-12-03 23:24:51'),
(23, 'Monday, 4th December 2017', '8:00 AM - 9:00 AM', '2017-12-04 08:00:00', '2017-12-04 09:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'C', 'Online Booking', 14, 4, '2017-12-03 22:03:53'),
(24, 'Monday, 4th December 2017', '9:00 AM - 10:00 AM', '2017-12-04 09:00:00', '2017-12-04 10:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'C', 'Online Booking', 14, 4, '2017-12-03 22:05:31'),
(25, 'Monday, 4th December 2017', '10:00 AM - 11:00 AM', '2017-12-04 10:00:00', '2017-12-04 11:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'C', 'Online Booking', 14, 4, '2017-12-03 22:13:13'),
(26, 'Monday, 4th December 2017', '12:00 PM - 1:00 PM', '2017-12-04 12:00:00', '2017-12-04 13:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'C', 'Online Booking', 14, 4, '2017-12-03 22:20:39'),
(27, 'Monday, 4th December 2017', '8:00 AM - 9:00 AM', '2017-12-04 08:00:00', '2017-12-04 09:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'C', 'Online Booking', 14, 4, '2017-12-03 23:02:35'),
(28, 'Monday, 4th December 2017', '8:00 AM - 9:00 AM', '2017-12-04 08:00:00', '2017-12-04 09:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'C', 'Online Booking', 14, 4, '2017-12-03 23:08:08'),
(29, 'Monday, 4th December 2017', '10:00 AM - 12:00 PM', '2017-12-04 10:00:00', '2017-12-04 12:00:00', 2, '160.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'C', 'Online Booking', 14, 4, '2017-12-03 23:15:49'),
(31, 'Monday, 4th December 2017', '8:00 AM - 9:00 AM', '2017-12-04 08:00:00', '2017-12-04 09:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'D', 'Online Booking', 14, 4, '2017-12-03 23:35:03'),
(32, 'Tuesday, 5th December 2017', '8:00 AM - 9:00 AM', '2017-12-05 08:00:00', '2017-12-05 09:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'D', 'Online Booking', 14, 4, '2017-12-04 21:20:44'),
(33, 'Tuesday, 5th December 2017', '9:00 AM - 10:00 AM', '2017-12-05 09:00:00', '2017-12-05 10:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'D', 'Online Booking', 14, 4, '2017-12-04 21:22:04'),
(34, 'Tuesday, 5th December 2017', '10:00 AM - 11:00 AM', '2017-12-05 10:00:00', '2017-12-05 11:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'D', 'Online Booking', 14, 4, '2017-12-04 21:23:42'),
(35, 'Tuesday, 5th December 2017', '11:00 AM - 12:00 PM', '2017-12-05 11:00:00', '2017-12-05 12:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'D', 'Online Booking', 14, 4, '2017-12-04 21:27:06'),
(36, 'Tuesday, 5th December 2017', '1:00 PM - 2:00 PM', '2017-12-05 13:00:00', '2017-12-05 14:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'C', 'Online Booking', 14, 4, '2017-12-04 21:57:52'),
(37, 'Tuesday, 5th December 2017', '1:00 PM - 2:00 PM', '2017-12-05 13:00:00', '2017-12-05 14:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'D', 'Online Booking', 14, 4, '2017-12-04 21:58:00'),
(38, 'Tuesday, 5th December 2017', '12:00 PM - 1:00 PM', '2017-12-05 12:00:00', '2017-12-05 13:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'D', 'Online Booking', 14, 4, '2017-12-04 21:59:55'),
(39, 'Tuesday, 5th December 2017', '2:00 PM - 3:00 PM', '2017-12-05 14:00:00', '2017-12-05 15:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'D', 'Online Booking', 14, 4, '2017-12-04 22:00:43'),
(40, 'Tuesday, 5th December 2017', '5:00 PM - 6:00 PM', '2017-12-05 17:00:00', '2017-12-05 18:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'D', 'Online Booking', 14, 4, '2017-12-04 22:16:20'),
(41, 'Wednesday, 6th December 2017', '8:00 AM - 9:00 AM', '2017-12-06 08:00:00', '2017-12-06 09:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Kuzam', '', '012-332 2235', 'B', 'Walk In', 0, 14, '2017-12-05 21:33:15'),
(42, 'Wednesday, 6th December 2017', '12:00 AM - 1:00 AM', '2017-12-06 00:00:00', '2017-12-06 01:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Adam Sykes', '', '014-6548 5545', 'B', 'Walk In', 0, 14, '2017-12-05 21:34:07'),
(43, 'Tuesday, 5th December 2017', '10:00 PM - 11:00 PM', '2017-12-05 22:00:00', '2017-12-05 23:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Kaka', '', '013-6545 5545', 'B', 'Walk In', 0, 14, '2017-12-05 21:41:14'),
(44, 'Tuesday, 5th December 2017', '11:00 PM - 12:00 AM', '2017-12-05 23:00:00', '2017-12-06 00:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Dua Lipa', '', '013-6545 556', 'B', 'Walk In', 0, 14, '2017-12-05 21:47:02'),
(45, 'Tuesday, 5th December 2017', '11:00 PM - 12:00 AM', '2017-12-05 23:00:00', '2017-12-06 00:00:00', 1, '80.00', 2, '2', 'Pay at Venue', 'Siti Siri', '', '012-5488 65478', 'B', 'Walk In', 0, 14, '2017-12-05 21:48:37'),
(46, 'Wednesday, 6th December 2017', '1:00 AM - 2:00 AM', '2017-12-06 01:00:00', '2017-12-06 02:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Taylor', '', '011-655 8544', 'B', 'Walk In', 0, 21, '2017-12-05 22:35:17');

-- --------------------------------------------------------

--
-- Table structure for table `ef_court`
--

CREATE TABLE `ef_court` (
  `court_id` int(11) NOT NULL,
  `court_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ef_court`
--

INSERT INTO `ef_court` (`court_id`, `court_name`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4');

-- --------------------------------------------------------

--
-- Table structure for table `ef_email_history`
--

CREATE TABLE `ef_email_history` (
  `log_id` int(11) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  `remarks` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ef_operation_hour`
--

CREATE TABLE `ef_operation_hour` (
  `monday_open` int(11) NOT NULL,
  `monday_open_time` time NOT NULL,
  `monday_close_time` time NOT NULL,
  `tuesday_open` int(11) NOT NULL,
  `tuesday_open_time` time NOT NULL,
  `tuesday_close_time` time NOT NULL,
  `wednesday_open` int(11) NOT NULL,
  `wednesday_open_time` time NOT NULL,
  `wednesday_close_time` time NOT NULL,
  `thursday_open` int(11) NOT NULL,
  `thursday_open_time` time NOT NULL,
  `thursday_close_time` time NOT NULL,
  `friday_open` int(11) NOT NULL,
  `friday_open_time` time NOT NULL,
  `friday_close_time` time NOT NULL,
  `saturday_open` int(11) NOT NULL,
  `saturday_open_time` time NOT NULL,
  `saturday_close_time` time NOT NULL,
  `sunday_open` int(11) NOT NULL,
  `sunday_open_time` time NOT NULL,
  `sunday_close_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ef_sessions`
--

CREATE TABLE `ef_sessions` (
  `id` varchar(40) CHARACTER SET latin1 NOT NULL,
  `ip_address` varchar(45) CHARACTER SET latin1 NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ef_user`
--

CREATE TABLE `ef_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ef_user`
--

INSERT INTO `ef_user` (`user_id`, `name`, `contact_no`, `email_address`, `password`, `user_type`) VALUES
(4, 'Habib', '012938120', 'habib@logicwise.com.my', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(5, 'Anati', '017-8378473', 'anati@gmail.com', '4297f44b13955235245b2497399d7a93', 'user'),
(6, 'Lewis', '01354654', 'lewis@gmail.com', '4297f44b13955235245b2497399d7a93', 'user'),
(7, 'syafiq effendi', '0183896860', 'syafiqfnd@gmail.com', '03927a6f212eec449037ff3b5a23f82b', 'user'),
(8, 'anati', '0149629817', 'anati@yahoo.com', 'b88f0bf5a5cf47191a9b372ac924c960', 'user'),
(9, 'abu', '0149629818', 'abu@yahoo.com', '09d0714edbfe6a5be5f51a8d706cefb6', 'user'),
(10, 'Kurzawa', '017-665421321', 'haha@haha.haha', '202cb962ac59075b964b07152d234b70', 'user'),
(11, 'Bhai', '017-321541654', 'hasdfbib@ogicwise.com.my', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(12, 'Akmal', '016-65465465', 'haaaaaha@haha.hahaa', '4297f44b13955235245b2497399d7a93', 'user'),
(13, 'kaka', '2131351', 'kaka@kaka.kaka', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(14, 'Ahmad', '012-21321 2135', 'habib@gmail.com', '4297f44b13955235245b2497399d7a93', 'admin'),
(15, 'Ahmad Idham', '019-65416 321584', 'hahaha@ajsh.as', 'bc1cc74bfbb8c00cf65beb45c9c2bfb2', 'admin'),
(16, 'Abah', '32135413', 'abah@abah.abah', 'd80483916e785824937c825756e1f9c0', 'user'),
(17, 'Ayah', '32132132', 'ayah@ayah.ayah', '952813915574718e35b54509a2828ced', 'user'),
(18, 'Kucing', '013-654 65484', 'hahah@hhuhu.s', '5e16343ed94ef05fc9a8c470e5f46935', 'user'),
(19, 'Baby', '013-6546 84984', 'baby@baby.jsdjs', '96c5c2c59dc109952be7462c50dcc621', 'user'),
(20, 'Bibul', '013-6546 6549', 'habibulmuhadzir@gmail.com', '4297f44b13955235245b2497399d7a93', 'user'),
(21, 'Asyraf Aley', '013-6545 6544', 'habibasyraf44@gmail.com', '4297f44b13955235245b2497399d7a93', 'staff'),
(22, 'Michael Evans', '011-6586 6658', 'gile.kerete@gmail.com', 'cb8dc653a206ed2f3d32b003000a85ce', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ef_booking`
--
ALTER TABLE `ef_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `ef_court`
--
ALTER TABLE `ef_court`
  ADD PRIMARY KEY (`court_id`);

--
-- Indexes for table `ef_email_history`
--
ALTER TABLE `ef_email_history`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `ef_sessions`
--
ALTER TABLE `ef_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `ef_user`
--
ALTER TABLE `ef_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ef_booking`
--
ALTER TABLE `ef_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `ef_court`
--
ALTER TABLE `ef_court`
  MODIFY `court_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ef_email_history`
--
ALTER TABLE `ef_email_history`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `ef_user`
--
ALTER TABLE `ef_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
