-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2018 at 01:32 PM
-- Server version: 5.7.19
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
-- Database: `nerdpap1_nerdpapers`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `client_id` int(100) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(100) NOT NULL,
  `client_email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_at` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_name`, `client_email`, `contact`, `password`, `created_at`, `created_by`, `modified_at`, `modified_by`) VALUES
(1, 'client', 'client@yahoo.com', '123456789', 'client', '2018-05-10 00:00:00', 'client', '2018-05-26 00:00:00', 'client'),
(2, 'malik@yahoo.com', 'malik@yahoo.com', '123456', '123', '2018-05-10 00:00:00', 'malik', '0000-00-00 00:00:00', ''),
(3, 'test', 'test@gmail.com', '123', '123', '2018-05-10 00:00:00', 'test', '0000-00-00 00:00:00', ''),
(4, 'malik', 'malik@yahoo.com', '123456', '123', '2018-05-22 00:00:00', 'malik', '0000-00-00 00:00:00', ''),
(5, 'malik', 'malik12@yahoo.com', '123456', '123', '2018-05-22 00:00:00', 'malik', '0000-00-00 00:00:00', ''),
(9, 'junaid', 'junaid@yahoo.com', '123456', '123', '2018-05-22 00:00:00', 'junaid', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

DROP TABLE IF EXISTS `leads`;
CREATE TABLE IF NOT EXISTS `leads` (
  `lead_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `document_type` varchar(100) NOT NULL,
  `academic_level` varchar(200) NOT NULL,
  `due_date` date NOT NULL,
  `no_of_pages` int(11) NOT NULL,
  `quoted_price` int(11) NOT NULL,
  `lead_status` tinyint(8) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_at` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  PRIMARY KEY (`lead_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`lead_id`, `user_name`, `user_email`, `user_phone`, `document_type`, `academic_level`, `due_date`, `no_of_pages`, `quoted_price`, `lead_status`, `created_at`, `created_by`, `modified_at`, `modified_by`) VALUES
(1, 'Ali s', 'alis@gmail.com', '222', 'doctypemnk', 'sdf', '2012-03-11', 4, 23, 0, '2018-03-30 00:00:00', 'ali', '2018-03-28 00:00:00', 'ali'),
(2, 'Umair', 'umair22@outlook.com', '111', 'essay', 'sdfasdfsadf', '2015-03-11', 45, 4, 1, '2018-03-28 00:00:00', 'anees', '2018-03-15 03:16:07', 'anees'),
(3, 'Hamza', 'hamza@gmail.com', '3333', 'article', 'bfafsdfsd', '2017-03-11', 23, 22, 0, '2018-03-30 00:00:00', 'ali', '2018-03-28 00:00:00', 'ali'),
(4, 'Anees', 'anees@yahoo.com', '4444', 'thesis', 'sxvcxczc', '2017-03-11', 34, 323, 2, '2018-03-28 00:00:00', 'anees', '2018-03-15 03:16:07', 'anees'),
(5, 'Ali', 'ali@gmail.com', '232', 'abc', 'gfgfghsd', '2018-04-12', 223, 32, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(6, 'malik', 'malik@yahoo.com', '123456', 'Book Reports', 'Masters', '0000-00-00', 3, 71, 0, '2018-05-15 00:00:00', 'malik', '0000-00-00 00:00:00', ''),
(7, 'ahmed', 'a@y.com', '123', 'Assignment', 'College', '0000-00-00', 3, 65, 0, '2018-05-17 00:00:00', 'ahmed', '0000-00-00 00:00:00', ''),
(8, 'asad', 'asad@yahoo.com', '123456', 'Book Reports', 'College', '0000-00-00', 2, 43, 0, '2018-05-17 00:00:00', 'asad', '0000-00-00 00:00:00', ''),
(9, 'malik', 'malik@gmail.com', '123456', 'Assignment', 'College', '0000-00-00', 2, 43, 0, '2018-05-17 00:00:00', 'malik', '0000-00-00 00:00:00', ''),
(10, 'asad', 'a@y.com', '123456', 'Assignment', 'College', '0000-00-00', 3, 65, 0, '2018-05-17 00:00:00', 'asad', '0000-00-00 00:00:00', ''),
(11, 'asad', 'asad@y.com', '123456', 'Book Reports', 'College', '0000-00-00', 3, 65, 0, '2018-05-17 00:00:00', 'asad', '0000-00-00 00:00:00', ''),
(12, 'test', 'test@yahoo.com', '1234567', 'Assignment', 'High_School', '0000-00-00', 3, 56, 0, '2018-05-17 00:00:00', 'test', '0000-00-00 00:00:00', ''),
(13, 'saad', 'saad@gmail.com', '123456', 'Assignment', 'High_School', '0000-00-00', 2, 37, 0, '2018-05-20 00:00:00', 'saad', '0000-00-00 00:00:00', ''),
(14, 'sample', 'sample@yahoo.com', '123456', 'Assignment', 'College', '0000-00-00', 3, 65, 0, '2018-05-20 00:00:00', 'sample', '0000-00-00 00:00:00', ''),
(15, 'abc', 'a@y.com', '123456', 'Articles', 'High_School', '0000-00-00', 2, 40, 0, '2018-05-21 00:00:00', 'abc', '0000-00-00 00:00:00', ''),
(16, 'ali', 'ali@yahoo.com', '1234567', 'Articles', 'High_School', '0000-00-00', 2, 37, 0, '2018-05-21 00:00:00', 'ali', '0000-00-00 00:00:00', ''),
(17, 'asad', 'malik12@yahoo.com', '123456', 'Assignment', 'High_School', '0000-00-00', 2, 37, 0, '2018-05-22 00:00:00', 'asad', '0000-00-00 00:00:00', ''),
(18, 'junaid', 'junaid@yahoo.com', '123456', 'Assignment', 'College', '0000-00-00', 2, 43, 0, '2018-05-22 00:00:00', 'junaid', '0000-00-00 00:00:00', ''),
(19, 'junaid', 'junaid@yahoo.com', '123456', 'Articles', 'High_School', '0000-00-00', 2, 40, 0, '2018-05-22 00:00:00', 'junaid', '0000-00-00 00:00:00', ''),
(20, 'junaid', 'junaid@yahoo.com', '123456', 'Articles', 'High_School', '0000-00-00', 2, 40, 0, '2018-05-22 00:00:00', 'junaid', '0000-00-00 00:00:00', ''),
(21, 'malik', 'malik12@yahoo.com', '123456', 'Assignment', 'College', '0000-00-00', 2, 45, 0, '2018-05-22 00:00:00', 'malik', '0000-00-00 00:00:00', ''),
(22, 'malik', 'junaid@yahoo.com', '123456', 'Articles', 'High_School', '0000-00-00', 2, 40, 0, '2018-05-22 00:00:00', 'malik', '0000-00-00 00:00:00', ''),
(23, 'junaid', 'junaid@yahoo.com', '123456', 'Assignment', 'High_School', '0000-00-00', 3, 60, 0, '2018-05-22 00:00:00', 'junaid', '0000-00-00 00:00:00', ''),
(24, 'sdas', 'abcdesigns6@gmail.com', '123', 'Assignment', 'College', '0000-00-00', 3, 68, 0, '2018-05-22 00:00:00', 'sdas', '0000-00-00 00:00:00', ''),
(25, 'client', 'client@yahoo.com', '123456', 'Assignment', 'College', '0000-00-00', 3, 68, 0, '2018-05-22 00:00:00', 'client', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `lead_notes`
--

DROP TABLE IF EXISTS `lead_notes`;
CREATE TABLE IF NOT EXISTS `lead_notes` (
  `lead_note_Id` int(11) NOT NULL AUTO_INCREMENT,
  `lead_id` int(11) NOT NULL,
  `lead_note` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`lead_note_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lead_notes`
--

INSERT INTO `lead_notes` (`lead_note_Id`, `lead_id`, `lead_note`, `created_at`, `created_by`) VALUES
(1, 1, 'sdf', '2018-04-10 12:31:18', NULL),
(2, 2, 'invalid details', '2018-04-10 12:33:08', NULL),
(3, 1, 'sda', '2018-04-16 18:06:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(100) NOT NULL AUTO_INCREMENT,
  `order_name` varchar(100) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `order_price` varchar(50) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `order_file` varchar(255) NOT NULL,
  `document_type` varchar(100) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_due_date` datetime NOT NULL,
  `order_sub_title` varchar(100) NOT NULL,
  `client_id` int(10) NOT NULL,
  `order_notes` varchar(255) NOT NULL,
  `order_writer_due_date` datetime NOT NULL,
  `order_no_of_pages` int(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_at` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_name`, `order_status`, `order_price`, `payment_status`, `order_file`, `document_type`, `order_date`, `order_due_date`, `order_sub_title`, `client_id`, `order_notes`, `order_writer_due_date`, `order_no_of_pages`, `created_at`, `created_by`, `modified_at`, `modified_by`) VALUES
(1, 'Write essay', '0', '6700', '0', 'file', 'pdf', '2018-03-21 00:00:00', '2018-03-21 00:00:00', 'descritpion', 2, 'order notes', '2018-03-28 00:00:00', 45, '2018-03-28 00:00:00', 'mehran', '2018-03-13 00:00:00', ''),
(2, 'Theiss', '0', 'order notes', '1', 'wifi driver.png', 'doc', '2018-03-23 00:00:00', '2018-03-22 00:00:00', 'this is thesis subtitle', 2, 'this is thesis notes', '2018-03-28 00:00:00', 45, '2018-03-28 00:00:00', 'mehran', '2018-03-13 00:00:00', ''),
(3, 'Write Letter', '0', '400', '1', 'file', 'csv', '2018-03-28 00:00:00', '2018-03-30 00:00:00', 'working', 2, 'writer a letter', '2018-03-29 00:00:00', 2, '2018-03-28 00:00:00', 'mehran', '2018-03-20 00:00:00', ''),
(4, 'Recomendation', '0', '400', '1', 'file', 'pdf', '2018-03-28 00:00:00', '2018-03-30 00:00:00', 'working', 2, 'writer a letter', '2018-03-29 00:00:00', 2, '2018-03-28 00:00:00', 'mehran', '2018-03-20 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_assign`
--

DROP TABLE IF EXISTS `order_assign`;
CREATE TABLE IF NOT EXISTS `order_assign` (
  `order_assign_id` int(50) NOT NULL AUTO_INCREMENT,
  `order_id` int(50) NOT NULL,
  `region_id` int(11) DEFAULT NULL,
  `writer_id` int(11) DEFAULT NULL,
  `writer_due_date` datetime NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 = not accepted 1 = accepted  2 = submitted',
  `created_at` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_at` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  PRIMARY KEY (`order_assign_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_assign`
--

INSERT INTO `order_assign` (`order_assign_id`, `order_id`, `region_id`, `writer_id`, `writer_due_date`, `status`, `created_at`, `created_by`, `modified_at`, `modified_by`) VALUES
(1, 5, -1, -1, '1970-01-01 00:00:00', 2, '2018-05-15 17:34:35', 'mehran abbasiss', '0000-00-00 00:00:00', ''),
(2, 7, -1, 5, '2018-04-20 13:00:00', 2, '2018-04-26 10:06:50', 'imran', '0000-00-00 00:00:00', ''),
(3, 10, -1, 5, '2018-04-19 01:00:00', 0, '2018-04-27 12:23:14', 'Mehran abbasi', '0000-00-00 00:00:00', ''),
(4, 9, 6, -1, '2018-04-28 01:00:00', 0, '2018-04-27 13:19:19', 'Mehran abbasi', '0000-00-00 00:00:00', ''),
(5, 5, -1, -1, '1970-01-01 00:00:00', 0, '2018-05-15 17:34:35', 'mehran abbasiss', '0000-00-00 00:00:00', ''),
(6, 20, -1, 7, '1970-01-01 00:00:00', 0, '2018-05-12 17:35:33', 'mehran abbasiss', '0000-00-00 00:00:00', ''),
(7, 14, -1, -1, '1970-01-01 00:00:00', 0, '2018-05-15 17:38:19', 'mehran abbasiss', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `order_detail_id` int(10) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(50) NOT NULL,
  `client_email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `acedamic_level` varchar(50) DEFAULT NULL,
  `document_type` varchar(50) DEFAULT NULL,
  `end_date` varchar(50) DEFAULT NULL,
  `end_time` varchar(50) DEFAULT NULL,
  `no_of_pages` int(10) DEFAULT NULL,
  `no_of_words` int(10) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `citation_style` varchar(50) DEFAULT NULL,
  `name_of_sources` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `order_note` varchar(500) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `order_price` varchar(11) NOT NULL,
  `payment_status` tinyint(4) NOT NULL DEFAULT '0',
  `order_status` tinyint(4) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT ' 1= assigned 2=submitted by writer',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  `verified_at` datetime NOT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`order_detail_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1556 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_detail_id`, `order_id`, `client_email`, `phone`, `acedamic_level`, `document_type`, `end_date`, `end_time`, `no_of_pages`, `no_of_words`, `title`, `subject`, `citation_style`, `name_of_sources`, `description`, `order_note`, `file`, `order_price`, `payment_status`, `order_status`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `verified_at`, `verified_by`) VALUES
(5, '', 'junaidmalik764@gmail.com', '12345678', 'College-underGraduate', 'University', '04/25/2018', '02:12', 12, 300, 'Nerdpaper', 'Business and Management', 'APA', '', 'this is description', 'dsfsd', NULL, '', 0, 0, 0, '2018-04-23 04:49:10', '', '2018-05-10 04:00:00', '', '2018-04-26 09:04:58', 'imran'),
(7, '', 'malik@gmail.com', '12345678', 'high_school', 'essay', '04/02/2018', '15:00', 2323, 700, 'Nerdpaper', 'Select Subject', 'Select Citation Style', 'W3schools,Stackoverflow', '           this is description         ', 'sdf', 'wifi driver.png', '', 1, 1, 0, '2018-03-29 04:49:10', '', '2018-05-10 04:00:00', '', '2018-04-06 12:04:16', 'Mehran'),
(9, '', 'demo@gmail.com', '2323', 'high_school', 'essay', '10/2/2018', '11:00', 2, 300, 'DEMO', 'Select Subject', 'Select Citation Style', 'demo', '                      good                  ', NULL, 'nerdpaper.docx', '', 1, 0, 0, '2018-03-29 04:49:10', '', '2018-05-10 04:00:00', '', '2018-04-11 12:04:03', 'mehran abbasiss'),
(10, '', 'ali@gmail.com', '33', 'high_school', 'essay', '01/04/2018', '10:00', 4, 400, 'DEMO', 'Select Subject', 'Select Citation Style', 'demo', '                                                                                                   good                                                                                 ', NULL, 'Mehrans_Resume.pdf', '', 0, 1, 0, '2018-03-29 04:49:10', '', '2018-05-10 04:00:00', '', '2018-04-16 03:04:28', 'Mehran abbasi'),
(11, '1', 'client@yahoo.com', NULL, 'High_School', '1', '05/02/2018', '01:00', 2, 2, 'Nerdpaper', 'Biology_and_Life_Sciences', 'AMA', '3', 'abx', 'abx', 'no_image.jpg', '30.00', 0, 0, 0, '2018-05-10 17:43:18', '', '0000-00-00 00:00:00', '', '2018-05-12 05:05:26', 'mehran abbasiss'),
(17, 'NDP-017', 'client@yahoo.com', '123456789', 'College', 'Essay', '05/13/2018', '04:00', NULL, 2, 'test order', '', '', '12', 'sample', 'sample', NULL, '', 1, 0, 0, '2018-05-12 16:29:15', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', NULL),
(13, '1', '1', '123456789', 'High_School', '2', '05/12/2018', '02:00', 1, 1, 'avx', 'Chemistry', 'AMS', '4', 'azx', 'azx', 'no_image.jpg', '18.50', 0, 0, 0, '2018-05-10 17:50:08', '', '0000-00-00 00:00:00', '', '2018-05-15 05:05:50', 'mehran abbasiss'),
(14, '1', '1', '123456789', 'High_School', '2', '05/12/2018', '02:00', 1, 1, 'avx', 'Chemistry', 'AMS', '4', 'azx', 'azx', 'no_image.jpg', '18.50', 0, 0, 0, '2018-05-10 17:50:09', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', NULL),
(15, 'NDP-015', '1', '123456789', 'High_School', '1', '05/11/2018', '01:00', 1, 1, 'test sample', 'Biology_and_Life_Sciences', 'AMS', '12', 'test', 'test', 'no_image.jpg', '20.00', 0, 0, 0, '2018-05-10 18:06:32', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', NULL),
(16, 'NDP-016', 'client@yahoo.com', '123456789', 'College-underGraduate', 'Essay', '05/12/2018', '02:00', 1, 1, 'sample order', 'Education', 'AMA', '3', 'abc', 'abc', 'no_image.jpg', '20.00', 1, 0, 0, '2018-05-11 15:30:45', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', NULL),
(22, 'NDP-022', 'ali@yahoo.com', '1234567', 'High_School', 'Articles', '05/23/2018', '02:00', NULL, 2, 'simple', 'Business_and_Management', 'APA', '7', 'hello world', 'hello world', 'no_image.jpg', '', 0, 0, 0, '2018-05-21 18:57:36', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', NULL),
(21, 'NDP-021', 'a@y.com', '123456', 'High_School', 'Articles', '05/22/2018', '03:00', NULL, 2, 'abc', 'Business_and_Management', 'APA', '5', 'xyz', 'xyz', 'no_image.jpg', '200:00', 0, 0, 0, '2018-05-21 17:38:20', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', NULL),
(20, 'NDP-020', 'client@yahoo.com', '123456789', 'Masters', 'Essay', '05/13/2018', '02:00', 4, 4, 'simple', 'English', 'Harvard', '11', 'abc', 'abc', 'no_image.jpg', '100.00', 2, 1, 0, '2018-05-12 16:38:44', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', NULL),
(1550, 'NDP-1550', 'client@yahoo.com', '1234567', 'High_School', 'Articles', '05/23/2018', '02:00', NULL, 2, 'simple', 'Chemistry', 'Chicago', '7', 'hello test', 'hello test', 'no_image.jpg', '', 0, 0, 0, '2018-05-21 19:00:45', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', NULL),
(1551, 'NDP-01551', '<div style=\"border:1px solid #990000;padding-left:', '123456', 'High_School', 'Articles', '05/23/2018', '02:00', NULL, 2, 'simple assignment', 'Business_and_Management', 'APA', '7', 'simple asignment', 'simple asignment', 'no_image.jpg', '', 0, 0, 0, '2018-05-22 15:19:11', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', NULL),
(1552, 'NDP-01552', 'malik@yahoo.com', '123456', 'High_School', 'Articles', '05/23/2018', '03:00', NULL, 1, 'simple', 'Biology_and_Life_Sciences', 'AMS', '8', 'ABC', 'ABC', 'no_image.jpg', '', 0, 0, 0, '2018-05-22 15:25:02', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', NULL),
(1553, 'NDP-01553', '<div style=\"border:1px solid #990000;padding-left:', '123456', 'College', 'Assignment', '05/23/2018', '02:00', NULL, 2, 'abc', 'Business_and_Management', 'AMS', '9', 'abx', 'abx', 'no_image.jpg', '', 0, 0, 0, '2018-05-22 15:31:50', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', NULL),
(1554, 'NDP-1554', 'junaid@yahoo.com', '123', 'High_School', 'Assignment', '05/23/2018', '02:00', NULL, 1, 'asdsa', 'Business_and_Management', 'APA', '10', 'asdfdass', 'asdfdass', 'login1.jpeg', '20.00', 1, 0, 0, '2018-05-22 17:45:45', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', NULL),
(1555, 'NDP-1555', 'client@yahoo.com', '123456', 'College', 'Assignment', '05/23/2018', '03:00', NULL, 3, 'assignment', 'Biology_and_Life_Sciences', 'APA', '9', 'sdadadasd', 'sdadadasd', 'image_1200x625.jpg', '67.50', 0, 0, 0, '2018-05-22 18:21:50', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_files`
--

DROP TABLE IF EXISTS `order_files`;
CREATE TABLE IF NOT EXISTS `order_files` (
  `order_files_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(100) NOT NULL,
  `file_path` varchar(500) NOT NULL,
  `order_id_fk` int(11) NOT NULL,
  PRIMARY KEY (`order_files_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_files`
--

INSERT INTO `order_files` (`order_files_id`, `file_name`, `file_path`, `order_id_fk`) VALUES
(3, 'no_image.jpg', 'E:\\Setup_Softwares\\wampserver\\wamp\\www\\nerdpapers_codeignitor\\files', 20),
(4, 'no_image.jpg', 'E:\\Setup_Softwares\\wampserver\\wamp\\www\\nerdpapers_codeignitor\\files', 21),
(5, 'no_image.jpg', 'E:\\Setup_Softwares\\wampserver\\wamp\\www\\nerdpapers_codeignitor\\files', 22),
(6, 'no_image.jpg', 'E:\\Setup_Softwares\\wampserver\\wamp\\www\\nerdpapers_codeignitor\\files', 23),
(7, 'no_image.jpg', 'E:\\Setup_Softwares\\wampserver\\wamp\\www\\nerdpapers_codeignitor\\files', 1551),
(8, 'no_image.jpg', 'E:\\Setup_Softwares\\wampserver\\wamp\\www\\nerdpapers_codeignitor\\files', 1552),
(9, 'no_image.jpg', 'E:\\Setup_Softwares\\wampserver\\wamp\\www\\nerdpapers_codeignitor\\files', 1553),
(10, 'login1.jpeg', 'E:\\Setup_Softwares\\wampserver\\wamp\\www\\nerdpapers_codeignitor\\files', 1554),
(11, 'image_1200x625.jpg', 'E:\\Setup_Softwares\\wampserver\\wamp\\www\\nerdpapers_codeignitor\\files', 1555);

-- --------------------------------------------------------

--
-- Table structure for table `order_notes`
--

DROP TABLE IF EXISTS `order_notes`;
CREATE TABLE IF NOT EXISTS `order_notes` (
  `note_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `note_description` varchar(1000) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(50) NOT NULL,
  PRIMARY KEY (`note_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_notes`
--

INSERT INTO `order_notes` (`note_id`, `order_id`, `note_description`, `status`, `created_at`, `created_by`) VALUES
(1, 5, 'note add for junaid@gmail.com on new order\r\n                                                      ', 0, '2018-04-26 12:40:14', 'imran'),
(2, 5, 'order in progress note', 1, '2018-04-26 14:21:01', ''),
(3, 5, 'Submission Note for junaid\r\n                                                                    ', 2, '2018-04-26 15:05:13', 'imran'),
(4, 5, 'Note in revision in progress\r\n                                                  ', 3, '2018-04-26 16:05:54', 'imran'),
(5, 5, 'new note on all revisions tab\r\n                                                                    ', 5, '2018-04-27 11:52:22', 'Mehran abbasi');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `region_id` int(50) NOT NULL AUTO_INCREMENT,
  `region_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_at` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  PRIMARY KEY (`region_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`region_id`, `region_name`, `created_at`, `created_by`, `modified_at`, `modified_by`) VALUES
(6, 'workingdess', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(3, 'dummy regions', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(7, 'California', '2018-03-15 00:00:00', 'mehran', '2018-03-22 00:00:00', ''),
(8, 'washington', '2018-03-14 00:00:00', 'me', '2018-03-23 00:00:00', ''),
(9, 'dummy', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(10, 'sfsdf', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(11, 'new region', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `revised_work`
--

DROP TABLE IF EXISTS `revised_work`;
CREATE TABLE IF NOT EXISTS `revised_work` (
  `revised_work_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `writer_id` int(11) NOT NULL,
  `revised_work_note` varchar(1000) DEFAULT NULL,
  `revised_work_file` varchar(500) NOT NULL,
  `revised_report_file` varchar(500) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  PRIMARY KEY (`revised_work_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `revised_work_files`
--

DROP TABLE IF EXISTS `revised_work_files`;
CREATE TABLE IF NOT EXISTS `revised_work_files` (
  `revised_work_file_id` int(11) NOT NULL AUTO_INCREMENT,
  `revised_work_file_name` varchar(500) NOT NULL,
  `revised_work_file_path` varchar(500) NOT NULL,
  `revised_work_id` int(11) NOT NULL,
  PRIMARY KEY (`revised_work_file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `revisions`
--

DROP TABLE IF EXISTS `revisions`;
CREATE TABLE IF NOT EXISTS `revisions` (
  `revision_id` int(50) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(150) NOT NULL,
  `writer_id` int(11) NOT NULL,
  `revision_note` varchar(2000) NOT NULL,
  `mark_as_invalid_note` varchar(500) DEFAULT NULL,
  `writer_revision_note` varchar(500) DEFAULT NULL,
  `revision_file` varchar(300) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(100) NOT NULL,
  `modified_at` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  PRIMARY KEY (`revision_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `revisions`
--

INSERT INTO `revisions` (`revision_id`, `order_id`, `writer_id`, `revision_note`, `mark_as_invalid_note`, `writer_revision_note`, `revision_file`, `status`, `created_at`, `created_by`, `modified_at`, `modified_by`) VALUES
(1, '5', 5, 'revision note by admin (client)', NULL, ' invalid revvvvv', '', 1, '2018-04-26 11:03:36', '', '2018-05-12 06:00:00', ''),
(2, 'NDP-020', 5, '2nd other revisoin', NULL, ' revision note form writer', '', 1, '2018-04-27 06:18:53', '', '2018-05-12 08:00:00', 'imran'),
(3, 'NDP-016', 5, '2nd other revisoin', NULL, ' revision note form writer', '', 1, '2018-04-27 06:18:53', '', '2018-05-12 08:00:00', 'imran');

-- --------------------------------------------------------

--
-- Table structure for table `revision_files`
--

DROP TABLE IF EXISTS `revision_files`;
CREATE TABLE IF NOT EXISTS `revision_files` (
  `revision_file_id` int(11) NOT NULL AUTO_INCREMENT,
  `revision_file_name` varchar(500) NOT NULL,
  `revision_file_path` varchar(500) NOT NULL,
  `revision_id` int(11) NOT NULL,
  PRIMARY KEY (`revision_file_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `revision_files`
--

INSERT INTO `revision_files` (`revision_file_id`, `revision_file_name`, `revision_file_path`, `revision_id`) VALUES
(1, 'Main_Website1.docx', 'Main Website.docx', 1),
(2, 'RDP1.docx', 'RDP.docx', 1),
(3, 'Sir_Usman_backup.docx', 'Sir Usman backup.docx', 3),
(4, 'Dummy_file_for_testing1.docx', 'Dummy file for testing.docx', 2),
(5, 'nerdpaper.docx', 'nerdpaper.docx', 2),
(6, 'Resume_test1.docx', 'Resume test.docx', 2);

-- --------------------------------------------------------

--
-- Table structure for table `revision_rejection_notes`
--

DROP TABLE IF EXISTS `revision_rejection_notes`;
CREATE TABLE IF NOT EXISTS `revision_rejection_notes` (
  `rejection_note_id` int(11) NOT NULL AUTO_INCREMENT,
  `rejection_note_desc` varchar(1000) NOT NULL,
  `revision_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`rejection_note_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `revision_rejection_notes`
--

INSERT INTO `revision_rejection_notes` (`rejection_note_id`, `rejection_note_desc`, `revision_id`, `status`) VALUES
(1, 'accepting invalid revision request\r\n                                                  ', 1, 0),
(2, 'note invalid\r\n                                                  ', 1, 0),
(3, 'Revision is notttttttttt invalid\r\n                                                  ', 1, 0),
(4, 'revision is invalid (admin/agent)', 1, 0),
(5, 'invalid revision request rejected by admin\r\n                                                  ', 2, 0),
(6, 'Marked as invalid by imran abbasi', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

DROP TABLE IF EXISTS `submissions`;
CREATE TABLE IF NOT EXISTS `submissions` (
  `submission_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(150) NOT NULL,
  `writer_id` int(11) NOT NULL,
  `work_file` varchar(300) NOT NULL,
  `report_file` varchar(300) NOT NULL,
  `half_file` varchar(200) DEFAULT NULL,
  `writer_note` varchar(1000) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 = show submissions to admin/support    1 = submitted to paid client   2=submit half file to client  3 = first revision marked',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`submission_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`submission_id`, `order_id`, `writer_id`, `work_file`, `report_file`, `half_file`, `writer_note`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, '5', 5, 'picture', 'picture', NULL, 'i am writer mehran uploaded work of junaid', 3, '2018-05-12 18:31:40', 'Mehran abbasi', '2018-05-14 10:00:00', NULL),
(2, 'NDP-020', 5, 'picture', 'picture', 'halffile.doc', '                                                                                                                                                        work done for malik... Mehran                                                                                                                                                ', 3, '2018-05-12 18:38:12', 'Mehran abbasi', '2018-04-26 07:56:34', 'imran'),
(3, 'NDP-018', 5, 'picture', 'picture', 'halffile.doc', '                                                                                                                                                        work done for malik... Mehran                                                                                                                                                ', 3, '2018-05-12 18:38:12', 'Mehran abbasi', '2018-04-26 07:56:34', 'imran'),
(4, 'NDP-016', 5, 'picture', 'picture', 'halffile.doc', '                                                                                                                                                        work done for malik... Mehran                                                                                                                                                ', 3, '2018-05-12 18:38:12', 'Mehran abbasi', '2018-04-26 07:56:34', 'imran');

-- --------------------------------------------------------

--
-- Table structure for table `submission_files`
--

DROP TABLE IF EXISTS `submission_files`;
CREATE TABLE IF NOT EXISTS `submission_files` (
  `submission_file_id` int(11) NOT NULL AUTO_INCREMENT,
  `submission_file_name` varchar(400) NOT NULL,
  `submission_file_path` varchar(500) NOT NULL,
  `submission_id` int(11) NOT NULL,
  PRIMARY KEY (`submission_file_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submission_files`
--

INSERT INTO `submission_files` (`submission_file_id`, `submission_file_name`, `submission_file_path`, `submission_id`) VALUES
(1, 'Word_List.docx', 'Word_List.docx', 1),
(2, 'backgroundimage.jpg', 'backgroundimage.jpg', 1),
(3, 'SCAN0000.jpg', 'SCAN0000.jpg', 2),
(4, 'wifi_driver.png', 'wifi_driver.png', 2),
(8, 'Doc3_template.docx', 'Doc3 template.docx', 2),
(9, 'Dummy_file_for_testing.docx', 'Dummy file for testing.docx', 2),
(10, 'Resume_test.docx', 'Resume test.docx', 2),
(11, 'Resume_test.docx', 'Resume test.docx', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_coantact` varchar(50) NOT NULL,
  `user_password` varchar(150) NOT NULL,
  `user_role` varchar(50) NOT NULL,
  `writer_region_id` int(100) DEFAULT NULL,
  `writer_rate_perpage` varchar(50) NOT NULL,
  `allowed_orders` int(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_at` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_coantact`, `user_password`, `user_role`, `writer_region_id`, `writer_rate_perpage`, `allowed_orders`, `created_at`, `created_by`, `modified_at`, `modified_by`) VALUES
(5, 'Mehran abbasi', 'mehran@yahoo.com', '123445', 'writer', 'writer', 6, '20', 2, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(6, 'Ali', 'ali@yahoo.com', '2121', 'ali', 'writer', 7, '20', 2, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(4, 'mehran abbasiss', 'mehran@gmail.com', '2342333', 'admin', 'Admin', 6, '20', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(7, 'Anees', 'anees@yahoo.com', '2312', 'anees', 'writer', 7, '35', 2, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(8, 'Hamza', 'hamza@yahoo.com', '23423', 'hamza', 'writer', 7, '22', 2, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(9, 'Zahid', 'zahid@yahoo.com', '23234', 'writer', 'writer', 7, '2', 2, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(10, 'Faisal', 'faisal@yahoo.com', '222', 'faisal', 'writer', 7, '22', 3, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(11, 'imran', 'imran@gmail.com', '', '123', 'Admin', NULL, '2', 2, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(12, 'asim', 'asim@gmail.com', '', '123', 'Admin', NULL, '4', 2, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(13, 'sami', 'sami@gmail.com', '2342', '1234', 'Writer', NULL, '', 2, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(14, 'sdf', 'sdf@gmail.com', '23', 'writer', 'Writer', 6, '2', 4, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(15, 'asdf', 'asdf@gamil.com', '232', 'sdf', 'Writer', 7, '2', 2, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(16, 'nisar', 'nisar@gmail.com', '2323', 'admin', 'Admin', NULL, '', 4, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(17, 'ab', 'ab@gmail.com', '23232', 'admin', 'Support', NULL, '', 5, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(18, 'asif', 'asif@gmail.com', '232323', '22222', 'Sales', NULL, '', 2, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(19, 'sdfasdf', 'ssssss@yahoo.com', '233', '', '', 7, '2', 2, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
