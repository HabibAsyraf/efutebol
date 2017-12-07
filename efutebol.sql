-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2017 at 02:01 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

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
  `booking_method` varchar(100) NOT NULL DEFAULT 'Online Booking',
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
(32, 'Tuesday, 5th December 2017', '8:00 AM - 9:00 AM', '2017-12-05 08:00:00', '2017-12-05 09:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'B', 'Online Booking', 0, 4, '2017-12-04 21:20:44'),
(33, 'Tuesday, 5th December 2017', '9:00 AM - 10:00 AM', '2017-12-05 09:00:00', '2017-12-05 10:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'B', 'Online Booking', 0, 4, '2017-12-04 21:22:04'),
(34, 'Tuesday, 5th December 2017', '10:00 AM - 11:00 AM', '2017-12-05 10:00:00', '2017-12-05 11:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'B', 'Online Booking', 0, 4, '2017-12-04 21:23:42'),
(35, 'Tuesday, 5th December 2017', '11:00 AM - 12:00 PM', '2017-12-05 11:00:00', '2017-12-05 12:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'B', 'Online Booking', 0, 4, '2017-12-04 21:27:06'),
(36, 'Tuesday, 5th December 2017', '1:00 PM - 2:00 PM', '2017-12-05 13:00:00', '2017-12-05 14:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'C', 'Online Booking', 14, 4, '2017-12-04 21:57:52'),
(37, 'Tuesday, 5th December 2017', '1:00 PM - 2:00 PM', '2017-12-05 13:00:00', '2017-12-05 14:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'B', 'Online Booking', 0, 4, '2017-12-04 21:58:00'),
(38, 'Tuesday, 5th December 2017', '12:00 PM - 1:00 PM', '2017-12-05 12:00:00', '2017-12-05 13:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'B', 'Online Booking', 0, 4, '2017-12-04 21:59:55'),
(39, 'Tuesday, 5th December 2017', '2:00 PM - 3:00 PM', '2017-12-05 14:00:00', '2017-12-05 15:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'B', 'Online Booking', 0, 4, '2017-12-04 22:00:43'),
(40, 'Tuesday, 5th December 2017', '5:00 PM - 6:00 PM', '2017-12-05 17:00:00', '2017-12-05 18:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'B', 'Online Booking', 0, 4, '2017-12-04 22:16:20'),
(41, 'Friday, 8th December 2017', '8:00 AM - 9:00 AM', '2017-12-08 08:00:00', '2017-12-08 09:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'B', 'Online Booking', 0, 4, '2017-12-07 13:30:26'),
(42, 'Friday, 8th December 2017', '8:00 AM - 9:00 AM', '2017-12-08 08:00:00', '2017-12-08 09:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'B', 'Online Booking', 0, 4, '2017-12-07 13:30:30'),
(43, 'Friday, 8th December 2017', '9:00 AM - 10:00 AM', '2017-12-08 09:00:00', '2017-12-08 10:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'B', 'Online Booking', 0, 4, '2017-12-07 13:35:25'),
(44, 'Friday, 8th December 2017', '10:00 AM - 11:00 AM', '2017-12-08 10:00:00', '2017-12-08 11:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Habib', 'habib@logicwise.com.my', '012938120', 'B', 'Online Booking', 0, 4, '2017-12-07 13:52:43'),
(45, 'Thursday, 7th December 2017', '7:00 PM - 8:00 PM', '2017-12-07 19:00:00', '2017-12-07 20:00:00', 1, '80.00', 1, '1', 'Pay at Venue', 'Hahaha', '', '013-6545556', 'B', 'Walk In', 0, 14, '2017-12-07 13:59:42');

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

--
-- Dumping data for table `ef_email_history`
--

INSERT INTO `ef_email_history` (`log_id`, `email_address`, `subject`, `body`, `remarks`, `status`, `created_date`) VALUES
(1, 'habib@logicwise.com.my', 'Reservation has been made', 'Dear Cutomer,<br/><br/>Reservation has been made. Below is the link that shows your reservation details. Pleaase show this at the counter.<br/><br/><a href=\"http://localhost/efutebol/reservation/receipt/MzQ>http://localhost/efutebol/reservation/receipt/MzQ</a>\".<br/><br/>See you soon.<br/><br/><br/>eFutebol.', 'Email has been sent.', 'Success', '0000-00-00 00:00:00'),
(2, 'habib@logicwise.com.my', 'Reservation has been made', 'Dear Cutomer,<br/><br/>Reservation has been made. Below is the link that shows your reservation details. Pleaase show this at the counter.<br/><br/>Receipt: <a href=\"http://localhost/efutebol/reservation/receipt/MzU\">http://localhost/efutebol/reservation/receipt/MzU</a>\".<br/><br/>See you soon.<br/><br/><br/>eFutebol.', 'Email has been sent.', 'Success', '0000-00-00 00:00:00'),
(3, 'habib@logicwise.com.my', 'Reservation has been made (Reservation ID: 0038)', 'Dear Cutomer,<br/><br/>Reservation has been made. Below is the link that shows your reservation details. Pleaase show this at the counter.<br/><br/>Receipt: <a href=\"http://localhost/efutebol/reservation/receipt/Mzg\">http://localhost/efutebol/reservation/receipt/Mzg</a>\".<br/><br/>See you soon.<br/><br/><br/>eFutebol.', 'Email has been sent.', 'Success', '0000-00-00 00:00:00'),
(4, 'habib@logicwise.com.my', 'Reservation has been made (Reservation ID: 0039)', 'Dear Cutomer,<br/><br/>Reservation has been made. Below is the link that shows your reservation details. Pleaase show this at the counter.<br/><br/>Receipt: <a href=\"http://localhost/efutebol/reservation/receipt/Mzk\">http://localhost/efutebol/reservation/receipt/Mzk</a>\".<br/><br/>See you soon.<br/><br/><br/>eFutebol.', 'Email has been sent.', 'Success', '0000-00-00 00:00:00'),
(5, 'habib@logicwise.com.my', 'Reservation has been made (Reservation ID: 0040)', 'Dear Cutomer,<br/><br/>Reservation has been made. Below is the link that shows your reservation details. Pleaase show this at the counter.<br/><br/>Receipt: <a href=\"http://localhost/efutebol/reservation/receipt/NDA\">http://localhost/efutebol/reservation/receipt/NDA</a>\".<br/><br/>See you soon.<br/><br/><br/>eFutebol.', 'Email has been sent.', 'Success', '0000-00-00 00:00:00'),
(6, 'habibulmuhadzir@gmail.com', 'Welcome To eFutebol', 'Dear habibulmuhadzir@gmail.com,<br/><br/>Thanks for becoming a members of eFutebol.<br/><br/>Hope you has a wonderful day ahead.<br/><br/><br/>eFutebol.', 'Email has been sent.', 'Success', '0000-00-00 00:00:00'),
(7, 'habibulmuhadzir@gmail.com', 'eFutebol Account Reset Password', 'Dear Bibul,<br/><br/>Here is your new password : 5a2564b985226<br/><br/>Hope you has a wonderful day ahead.<br/><br/><br/>eFutebol.', 'Email has been sent.', 'Success', '0000-00-00 00:00:00'),
(8, 'habibulmuhadzir@gmail.com', 'eFutebol Account Reset Password', 'Dear Bibul,<br/><br/>Here is your new password : 5a25653d23527<br/><br/>Hope you has a wonderful day ahead.<br/><br/><br/>eFutebol.', 'Email has been sent.', 'Success', '0000-00-00 00:00:00'),
(9, 'habib@logicwise.com.my', 'Reservation has been made (Reservation ID: 0041)', 'Dear Cutomer,<br/><br/>Reservation has been made. Below is the link that shows your reservation details. Pleaase show this at the counter.<br/><br/>Receipt: <a href=\"http://localhost/efutebol/reservation/receipt/NDE\">http://localhost/efutebol/reservation/receipt/NDE</a>.<br/><br/>See you soon.<br/><br/><br/>eFutebol.', 'SMTP connect() failed. https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting', 'Failed', '0000-00-00 00:00:00'),
(10, 'habib@logicwise.com.my', 'Reservation has been made (Reservation ID: 0042)', 'Dear Cutomer,<br/><br/>Reservation has been made. Below is the link that shows your reservation details. Pleaase show this at the counter.<br/><br/>Receipt: <a href=\"http://localhost/efutebol/reservation/receipt/NDI\">http://localhost/efutebol/reservation/receipt/NDI</a>.<br/><br/>See you soon.<br/><br/><br/>eFutebol.', 'SMTP connect() failed. https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting', 'Failed', '0000-00-00 00:00:00'),
(11, 'habib@logicwise.com.my', 'Reservation has been made (Reservation ID: 0043)', 'Dear Cutomer,<br/><br/>Reservation has been made. Below is the link that shows your reservation details. Pleaase show this at the counter.<br/><br/>Receipt: <a href=\"http://localhost/efutebol/reservation/receipt/NDM\">http://localhost/efutebol/reservation/receipt/NDM</a>.<br/><br/>See you soon.<br/><br/><br/>eFutebol.', 'SMTP connect() failed. https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting', 'Failed', '0000-00-00 00:00:00'),
(12, 'helloefutebol@gmail.com', 'Reservation has been made (Reservation ID: 0043)', 'Dear eFutebol,<br/><br/>Reservation has been made by Habib.<br/><br/>See Details: <a href=\"http://localhost/efutebol//admin/reservation\">http://localhost/efutebol//admin/reservation</a>', 'SMTP connect() failed. https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting', 'Failed', '0000-00-00 00:00:00'),
(13, 'habib@logicwise.com.my', 'Reservation has been made (Reservation ID: 0044)', 'Dear Cutomer,<br/><br/>Reservation has been made. Below is the link that shows your reservation details. Pleaase show this at the counter.<br/><br/>Receipt: <a href=\"http://localhost/efutebol/reservation/receipt/NDQ\">http://localhost/efutebol/reservation/receipt/NDQ</a>.<br/><br/>See you soon.<br/><br/><br/>eFutebol.', 'SMTP connect() failed. https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting', 'Failed', '0000-00-00 00:00:00'),
(14, 'helloefutebol@gmail.com', 'Reservation has been made (Reservation ID: 0044)', 'Dear eFutebol,<br/><br/>Reservation has been made by Habib.<br/><br/>See Details: <a href=\"http://localhost/efutebol/admin/reservation\">http://localhost/efutebol/admin/reservation</a>', 'SMTP connect() failed. https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting', 'Failed', '0000-00-00 00:00:00'),
(15, 'helloefutebol@gmail.com', 'Reservation (Walk In) has been made (Reservation ID: 0045)', 'Dear eFutebol,<br/><br/>Walk In Reservation has been made by Hahaha.<br/><br/>See Details: <a href=\"http://localhost/efutebol/admin/reservation\">http://localhost/efutebol/admin/reservation</a>', 'SMTP connect() failed. https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting', 'Failed', '0000-00-00 00:00:00');

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

--
-- Dumping data for table `ef_sessions`
--

INSERT INTO `ef_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('29jm30jrk2mr83bsudh8dlhlgs52ogee', '::1', 1512393828, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323339333632373b6c6f67696e5f757365727c613a353a7b733a373a22757365725f6964223b733a313a2234223b733a343a226e616d65223b733a353a224861626962223b733a31333a22656d61696c5f61646472657373223b733a32323a226861626962406c6f676963776973652e636f6d2e6d79223b733a31303a22636f6e746163745f6e6f223b733a393a22303132393338313230223b733a393a226c6f676765645f696e223b623a313b7d),
('6mg4tlhj935h1cc8eit46jb83pc2oi9d', '::1', 1512394341, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323339343035343b6c6f67696e5f757365727c613a353a7b733a373a22757365725f6964223b733a313a2234223b733a343a226e616d65223b733a353a224861626962223b733a31333a22656d61696c5f61646472657373223b733a32323a226861626962406c6f676963776973652e636f6d2e6d79223b733a31303a22636f6e746163745f6e6f223b733a393a22303132393338313230223b733a393a226c6f676765645f696e223b623a313b7d),
('019l3du28pp0cb996ivhcq7j0jqsjpis', '::1', 1512394760, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323339343437313b6c6f67696e5f757365727c613a353a7b733a373a22757365725f6964223b733a313a2234223b733a343a226e616d65223b733a353a224861626962223b733a31333a22656d61696c5f61646472657373223b733a32323a226861626962406c6f676963776973652e636f6d2e6d79223b733a31303a22636f6e746163745f6e6f223b733a393a22303132393338313230223b733a393a226c6f676765645f696e223b623a313b7d),
('p2114o7tid9el90sf4ud5764b74tuhck', '::1', 1512394910, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323339343739363b6c6f67696e5f757365727c613a353a7b733a373a22757365725f6964223b733a313a2234223b733a343a226e616d65223b733a353a224861626962223b733a31333a22656d61696c5f61646472657373223b733a32323a226861626962406c6f676963776973652e636f6d2e6d79223b733a31303a22636f6e746163745f6e6f223b733a393a22303132393338313230223b733a393a226c6f676765645f696e223b623a313b7d),
('uml7ttif1bll2811in68am4aslrfb19c', '::1', 1512395880, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323339353632373b6c6f67696e5f757365727c613a353a7b733a373a22757365725f6964223b733a313a2234223b733a343a226e616d65223b733a353a224861626962223b733a31333a22656d61696c5f61646472657373223b733a32323a226861626962406c6f676963776973652e636f6d2e6d79223b733a31303a22636f6e746163745f6e6f223b733a393a22303132393338313230223b733a393a226c6f676765645f696e223b623a313b7d),
('pmegqvkosib6baiuc5vl5iq6ej4b4tjt', '::1', 1512396146, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323339353933363b6c6f67696e5f757365727c613a353a7b733a373a22757365725f6964223b733a313a2234223b733a343a226e616d65223b733a353a224861626962223b733a31333a22656d61696c5f61646472657373223b733a32323a226861626962406c6f676963776973652e636f6d2e6d79223b733a31303a22636f6e746163745f6e6f223b733a393a22303132393338313230223b733a393a226c6f676765645f696e223b623a313b7d6c6f67696e5f61646d696e7c613a353a7b733a373a22757365725f6964223b733a323a223134223b733a343a226e616d65223b733a353a2241686d6164223b733a31333a22656d61696c5f61646472657373223b733a31353a22686162696240676d61696c2e636f6d223b733a31303a22636f6e746163745f6e6f223b733a31343a223031322d32313332312032313335223b733a393a226c6f676765645f696e223b623a313b7d),
('dljvq59s4s2rhorfrindu18k8v7ukcqq', '::1', 1512397156, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323339373037363b),
('oj4ucci2j2gvvc6bhi207t0v0u1uqfdq', '::1', 1512398316, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323339383131343b6c6f67696e5f757365727c613a353a7b733a373a22757365725f6964223b733a323a223230223b733a343a226e616d65223b733a353a22426962756c223b733a31333a22656d61696c5f61646472657373223b733a32353a226861626962756c6d756861647a697240676d61696c2e636f6d223b733a31303a22636f6e746163745f6e6f223b733a31333a223031332d363534362036353439223b733a393a226c6f676765645f696e223b623a313b7d),
('veh9kll346dbnnd0nhme0gn2e0ems0so', '::1', 1512398447, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323339383433363b6c6f67696e5f757365727c613a353a7b733a373a22757365725f6964223b733a323a223230223b733a343a226e616d65223b733a353a22426962756c223b733a31333a22656d61696c5f61646472657373223b733a32353a226861626962756c6d756861647a697240676d61696c2e636f6d223b733a31303a22636f6e746163745f6e6f223b733a31333a223031332d363534362036353439223b733a393a226c6f676765645f696e223b623a313b7d),
('8cmkk0qsd14c7ntestqrp37o7ih57sf5', '::1', 1512399630, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323339393337373b),
('j27127jco44ti3cunshufq2rehbdmad0', '::1', 1512400036, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323339393733363b),
('npoaall073b6m60ee5bjv0fct48h8oe5', '::1', 1512400353, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323430303035373b6c6f67696e5f757365727c613a363a7b733a373a22757365725f6964223b733a323a223230223b733a343a226e616d65223b733a353a22426962756c223b733a31333a22656d61696c5f61646472657373223b733a32353a226861626962756c6d756861647a697240676d61696c2e636f6d223b733a31303a22636f6e746163745f6e6f223b733a31333a223031332d363534362036353439223b733a393a22757365725f74797065223b733a343a2275736572223b733a393a226c6f676765645f696e223b623a313b7d),
('78m8j5ma2f3avpfoeb2giogve9ebn6sn', '::1', 1512400604, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323430303432373b6c6f67696e5f757365727c613a363a7b733a373a22757365725f6964223b733a323a223230223b733a343a226e616d65223b733a353a22426962756c223b733a31333a22656d61696c5f61646472657373223b733a32353a226861626962756c6d756861647a697240676d61696c2e636f6d223b733a31303a22636f6e746163745f6e6f223b733a31333a223031332d363534362036353439223b733a393a22757365725f74797065223b733a343a2275736572223b733a393a226c6f676765645f696e223b623a313b7d),
('r8tjjdtm9h2s4fat2n5m2bv1d8nmdn7l', '::1', 1512400857, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323430303735343b6c6f67696e5f757365727c613a363a7b733a373a22757365725f6964223b733a323a223230223b733a343a226e616d65223b733a353a22426962756c223b733a31333a22656d61696c5f61646472657373223b733a32353a226861626962756c6d756861647a697240676d61696c2e636f6d223b733a31303a22636f6e746163745f6e6f223b733a31333a223031332d363534362036353439223b733a393a22757365725f74797065223b733a343a2275736572223b733a393a226c6f676765645f696e223b623a313b7d),
('8ed50jhlsa1h5ubjh08d8drfl084d5t7', '::1', 1512401592, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323430313438303b),
('po3bssrjgk8064t6drmt6agsdiblaa74', '::1', 1512624925, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323632343631373b6c6f67696e5f757365727c613a363a7b733a373a22757365725f6964223b733a313a2234223b733a343a226e616d65223b733a353a224861626962223b733a31333a22656d61696c5f61646472657373223b733a32323a226861626962406c6f676963776973652e636f6d2e6d79223b733a31303a22636f6e746163745f6e6f223b733a393a22303132393338313230223b733a393a22757365725f74797065223b733a343a2275736572223b733a393a226c6f676765645f696e223b623a313b7d73797374656d2d6d6573736167657c733a38323a22426f6f6b696e6720686173206265656e20636f6e6669726d65642e20506c656173652073686f77207468697320726563656970742061742074686520636f756e7465722e2053656520796f7520736f6f6e2e223b6d6573736167652d747970657c733a373a2273756363657373223b),
('ce0u2bukv1lkcaobb4e254a8iuf868rm', '::1', 1512624925, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323632343932353b6c6f67696e5f757365727c613a363a7b733a373a22757365725f6964223b733a313a2234223b733a343a226e616d65223b733a353a224861626962223b733a31333a22656d61696c5f61646472657373223b733a32323a226861626962406c6f676963776973652e636f6d2e6d79223b733a31303a22636f6e746163745f6e6f223b733a393a22303132393338313230223b733a393a22757365725f74797065223b733a343a2275736572223b733a393a226c6f676765645f696e223b623a313b7d),
('ck9u5ks9v47lfom27e7iqkcqjskpvldt', '::1', 1512625963, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323632353634323b6c6f67696e5f757365727c613a363a7b733a373a22757365725f6964223b733a313a2234223b733a343a226e616d65223b733a353a224861626962223b733a31333a22656d61696c5f61646472657373223b733a32323a226861626962406c6f676963776973652e636f6d2e6d79223b733a31303a22636f6e746163745f6e6f223b733a393a22303132393338313230223b733a393a22757365725f74797065223b733a343a2275736572223b733a393a226c6f676765645f696e223b623a313b7d73797374656d2d6d6573736167657c733a38323a22426f6f6b696e6720686173206265656e20636f6e6669726d65642e20506c656173652073686f77207468697320726563656970742061742074686520636f756e7465722e2053656520796f7520736f6f6e2e223b6d6573736167652d747970657c733a373a2273756363657373223b),
('oigfkkarkqrqd8ko97ccu4t9glj8vpmi', '::1', 1512625984, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323632353936333b6c6f67696e5f757365727c613a363a7b733a373a22757365725f6964223b733a313a2234223b733a343a226e616d65223b733a353a224861626962223b733a31333a22656d61696c5f61646472657373223b733a32323a226861626962406c6f676963776973652e636f6d2e6d79223b733a31303a22636f6e746163745f6e6f223b733a393a22303132393338313230223b733a393a22757365725f74797065223b733a343a2275736572223b733a393a226c6f676765645f696e223b623a313b7d6c6f67696e5f61646d696e7c613a363a7b733a373a22757365725f6964223b733a323a223134223b733a343a226e616d65223b733a353a2241686d6164223b733a31333a22656d61696c5f61646472657373223b733a31353a22686162696240676d61696c2e636f6d223b733a31303a22636f6e746163745f6e6f223b733a31343a223031322d32313332312032313335223b733a393a22757365725f74797065223b733a353a2261646d696e223b733a393a226c6f676765645f696e223b623a313b7d),
('b0bf01ovr7suiruo3ud5bs2vfsmg9cb1', '::1', 1512626415, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323632363334393b6c6f67696e5f757365727c613a363a7b733a373a22757365725f6964223b733a313a2234223b733a343a226e616d65223b733a353a224861626962223b733a31333a22656d61696c5f61646472657373223b733a32323a226861626962406c6f676963776973652e636f6d2e6d79223b733a31303a22636f6e746163745f6e6f223b733a393a22303132393338313230223b733a393a22757365725f74797065223b733a343a2275736572223b733a393a226c6f676765645f696e223b623a313b7d6c6f67696e5f61646d696e7c613a363a7b733a373a22757365725f6964223b733a323a223134223b733a343a226e616d65223b733a353a2241686d6164223b733a31333a22656d61696c5f61646472657373223b733a31353a22686162696240676d61696c2e636f6d223b733a31303a22636f6e746163745f6e6f223b733a31343a223031322d32313332312032313335223b733a393a22757365725f74797065223b733a353a2261646d696e223b733a393a226c6f676765645f696e223b623a313b7d);

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
(20, 'Bibul', '013-6546 6549', 'habibulmuhadzir@gmail.com', '4297f44b13955235245b2497399d7a93', 'user');

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
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `ef_court`
--
ALTER TABLE `ef_court`
  MODIFY `court_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ef_email_history`
--
ALTER TABLE `ef_email_history`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `ef_user`
--
ALTER TABLE `ef_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
