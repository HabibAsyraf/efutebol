-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2017 at 01:47 AM
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
(19, 'Baby', '013-6546 84984', 'baby@baby.jsdjs', '96c5c2c59dc109952be7462c50dcc621', 'user');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `ef_user`
--
ALTER TABLE `ef_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
