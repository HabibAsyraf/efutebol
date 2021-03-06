-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 04:36 PM
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
-- Database: `book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `b_id` int(4) NOT NULL,
  `b_nm` varchar(60) NOT NULL,
  `b_desc` varchar(50) NOT NULL,
  `b_price` int(5) NOT NULL,
  `b_qt` int(2) NOT NULL,
  `b_st` varchar(20) NOT NULL,
  `b_img` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`b_id`, `b_nm`, `b_desc`, `b_price`, `b_qt`, `b_st`, `b_img`) VALUES
(70, 'Wireless', 'raspberry pie', 15, 1, 'available', 'upload_image/Wireless.JPG'),
(61, 'Database', '...', 56, 1, 'Sold', 'upload_image/Database.JPG'),
(67, 'Mandarin', '....', 50, 1, 'Sold', 'upload_image/Mandarin.JPG'),
(64, 'Software Engineering', '....', 11, 3, 'Sold', 'upload_image/SoftwareEngineering.JPG'),
(65, 'Computer Organization and Architecture', '....', 55, 4, 'Sold', 'upload_image/COA.JPG'),
(69, 'Operating System', '....', 20, 2, 'available', 'upload_image/OS.JPG'),
(71, 'Calculus and Numerical Number', 'Mathemathic', 35, 2, 'available', 'upload_image/Statistic.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(4) NOT NULL,
  `cat_nm` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_nm`) VALUES
(30, 'sssss'),
(28, 'Language'),
(27, 'University_Compulsary'),
(26, 'Elective'),
(25, 'Programme_Core'),
(23, 'Course_Core'),
(29, 'saja');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(50) NOT NULL,
  `f_fullname` varchar(50) NOT NULL,
  `f_email` varchar(50) NOT NULL,
  `f_subject` varchar(50) NOT NULL,
  `f_message` varchar(50) NOT NULL,
  `f_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_fullname`, `f_email`, `f_subject`, `f_message`, `f_status`) VALUES
(1, 'Nur Jamsyeiqa binti Jamaluddin', 'syeiqaqa@gmail.com', 'BITS 1213 Operating System', 'Is this book available at this sytem?', 'Settle'),
(2, 'Fatimah bin Ali', 'fatimah_ali@yahoo.com', 'BITS 2313 Local Area Network', 'How much for this book?', 'Settle'),
(3, 'Munirah binti Sharudin', 'munirah.sharudin@gmail.com', 'BITP 2213 Software Engineering', 'How to sell this book? Thank you.', ''),
(4, 'Nuratikah binti Abu Bakar', 'natikahab95@gmail.com', 'Mandarin', 'Can you write more description about this book.', ''),
(5, 'Amirul bin Rashid', 'mirul.utem@gmail.com', 'BITP 2213 Software Engineering', 'Thank you ! I can get this book with cheapest pric', '');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `s_id` int(4) NOT NULL,
  `u_id` int(4) NOT NULL,
  `b_id` int(4) NOT NULL,
  `s_qt` int(50) NOT NULL,
  `s_price` int(50) NOT NULL,
  `s_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`s_id`, `u_id`, `b_id`, `s_qt`, `s_price`, `s_address`) VALUES
(1, 0, 0, 123, 0, 'sdf'),
(2, 0, 0, 1136295354, 1, 'RM8.00');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_details`
--

CREATE TABLE `shipping_details` (
  `id` int(11) NOT NULL,
  `b_nm` varchar(50) NOT NULL,
  `name` char(50) NOT NULL,
  `address` text NOT NULL,
  `phone` bigint(20) NOT NULL,
  `f_id` varchar(50) NOT NULL,
  `c_seller` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_details`
--

INSERT INTO `shipping_details` (`id`, `b_nm`, `name`, `address`, `phone`, `f_id`, `c_seller`) VALUES
(6, '', 'Amalina', ' Kolej Kediaman Satria', 1234567890, '12345678', 0),
(8, 'adsva', 'dsafssdaf', 'dsfad', 0, '', 0),
(9, 'Database, mandarin, ', 'sarah', ' lestari', 1136295354, '', 0),
(10, 'Statistic', 'Atikah', 'SAtria ', 1136295354, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE `subcat` (
  `subcat_id` int(4) NOT NULL,
  `parent_id` int(4) NOT NULL,
  `subcat_nm` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`subcat_id`, `parent_id`, `subcat_nm`) VALUES
(49, 28, 'saja'),
(48, 28, 'mandarin'),
(47, 23, 'BITS2313_LAN'),
(46, 25, 'BITS1123_ComputerOrganizationAndArc'),
(45, 25, 'BITS1213_OperatingSystem'),
(44, 25, 'BITP1323_Database'),
(43, 25, 'BITI2233_StatisticAndProbability'),
(42, 26, 'BITS3533_WirelessNetwork'),
(41, 27, 'BLHW2712_Ethnic'),
(40, 27, 'BLHW1702_TITAS'),
(39, 28, 'BLHL1112_Arabic'),
(38, 28, 'BLHL1012_Malay'),
(37, 28, 'BLHL1312_Japanese'),
(36, 28, 'BLHL1212_Mandarin'),
(50, 30, 'ggggg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(4) NOT NULL,
  `u_fnm` varchar(35) NOT NULL,
  `u_unm` varchar(25) NOT NULL,
  `u_pwd` varchar(20) NOT NULL,
  `u_email` varchar(35) NOT NULL,
  `u_contact` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_fnm`, `u_unm`, `u_pwd`, `u_email`, `u_contact`) VALUES
(4, 'admin', 'admin', 'admin123', 'admin@gmail.com', '9859632561'),
(7, 'atikah', 'natikah', '12345678', 'natikahab@gmail.com', '011123'),
(8, 'Nur Ainani binti Abu Bakar', 'nani', '12345678', 'nani2005@gmail.com', '0124566346'),
(10, 'jamsyeiqa jamaluddin', 'jam', 'jam123', 'syeiqaqa@gmail.com', '0175897789'),
(11, 'Puteri Syaheera', 'Puyi', 'puyi123', 'psyaheera.pss@gmail.com', '0123456789'),
(13, 'Nurul Najeeha Binti Sahdan', 'Najeeha', 'najeeha123', 'najeeha123@gmail.com', '0136789903'),
(17, 'atikah', '011233456', 'qwe', 'faizbaharum@gmail.com', 'qwer'),
(18, 'atikah', 'ika', 'ika123', 'natikahab@gmail.com', '0175863457'),
(19, 'dfad', 'dsa', 'asd', 'faizbaharum@gmail.com', '1234454765h');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `b_nm` (`b_nm`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `shipping_details`
--
ALTER TABLE `shipping_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcat`
--
ALTER TABLE `subcat`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`) USING BTREE,
  ADD UNIQUE KEY `u_unm` (`u_unm`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `b_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `s_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shipping_details`
--
ALTER TABLE `shipping_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `subcat`
--
ALTER TABLE `subcat`
  MODIFY `subcat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
