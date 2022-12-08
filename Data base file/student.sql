-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2022 at 08:55 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `unique_id` varchar(50) NOT NULL,
  `image` text,
  `phone` text,
  `address` text,
  `f_name` text,
  `f_number` text,
  `m_name` text,
  `p_class` text,
  `p_percentage` text,
  `class` text,
  `section` text,
  `status` text,
  `pincode` text,
  `country` text,
  `state` text,
  `year` text,
  `doa` text,
  `dob` text,
  `m_mobile` text,
  `p_country` text,
  `p_state` text,
  `p_pincode` text,
  `institute` text,
  `p_address` text,
  `course` text,
  `city` text,
  `p_city` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `type`, `name`, `email`, `password`, `unique_id`, `image`, `phone`, `address`, `f_name`, `f_number`, `m_name`, `p_class`, `p_percentage`, `class`, `section`, `status`, `pincode`, `country`, `state`, `year`, `doa`, `dob`, `m_mobile`, `p_country`, `p_state`, `p_pincode`, `institute`, `p_address`, `course`, `city`, `p_city`) VALUES
(11, 'admin', 'admin', 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'student', 'Prince kumar', 'kumar.princepapneja@gmail.com', '10121999', '20Mca1082', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'class1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'clerk', 'clerk1', 'clerk@gmail.com', '8c29ca915c1a22583f0274e5e806d237', '5451', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'teacher', 'teacher2', 'teacher1@gmail.com', '8c29ca915c1a22583f0274e5e806d237', '121212', 'my.jfif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'student', 'prince', 'prince@gmail.com', '8c29ca915c1a22583f0274e5e806d237', 'yy', 'john.jpg', '1234567890', 'yty', 'hh', 'h', 'hh', 'h', 'h', 'h', 'h', 'h', '152141', 'h', 'h', 'h', '2022-05-25', '1999-12-10', 'h', 'h', 'hh', 'h', 'h', 'h', 'h', 'h', 'h'),
(50, 'teacher', 'teacher2', 'teacher1@gmail.com', '8c29ca915c1a22583f0274e5e806d237', '121212', 'my.jfif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'student', 's', 'student1@dmail.com', '10121999', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `category` text NOT NULL,
  `duration` text NOT NULL,
  `image` text NOT NULL,
  `fees` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `category`, `duration`, `image`, `fees`) VALUES
(1, 'Master of Computer Application', 'Programing', '2 years', 'http://localhost/student/assets/img/university.jfif', '2 lakh'),
(2, 'Mba', 'master', '2 yrs', 'mba.jpg', '1 lakh'),
(3, 'bca', 'bachelor', '3 yrs', 'bca.jpg', '3 lakh'),
(4, 'bcom', 'bachelor', '3 yrs', 'teacher1.jpg', '50 000'),
(5, 'BA', 'bachelor', '3 yrs', 'teacher2.jpg', '20000'),
(6, 'djd', 'bachelor', 'djd', 'john.jpg', 'djd'),
(7, 'trt', 'bachelor', '5ty5', 'school.jpg', 't5t'),
(8, 'uthhr', 'master', 'rhgur', 'school2.jpg', 'ghuhfg'),
(9, 'prince', 'bachelor', '2 years', 'teacher3.jpg', 'jbb');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `file` text,
  `type` varchar(50) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `details` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `file`, `type`, `date`, `details`) VALUES
(14, 'event', '442b68792a29bde3f34b879d93aef470.Review Paper on Search-Engine Optimization.pdf', 'event', '2022-05-16 18:30:00', ''),
(13, 'Datesheet', '20MCA1013_Pulkit Verma_Web Opt_3.pdf', 'datesheet', '2022-05-16 18:30:00', ''),
(15, '', 'emarketing.ppt', 'event', '2022-05-16 18:30:00', ''),
(16, '', '442b68792a29bde3f34b879d93aef470.Review Paper on Search-Engine Optimization.pdf', 'result', '2022-05-16 18:30:00', ''),
(17, '', 'Minor project presentation.pptx', 'notes', '2022-05-16 18:30:00', ''),
(18, '', 'deloitte-nl-etp-devops-point-of-view.pdf', 'notes', '2022-05-16 23:57:52', ''),
(19, '', 'emarketing.ppt', 'notice', '2022-05-17 00:06:00', ''),
(21, 'Notice2022', 'final awad .pdf', 'notice', '2022-05-21 04:05:06', ' it is information about new notice and for details download file  '),
(22, 'forgv', 'emarketing.ppt', 'event', '2022-05-21 05:04:03', '1'),
(23, '', '', 'event', '2022-05-21 05:09:49', ''),
(24, 'prince', 'synopsis 20mca1082docx.docx', 'notes', '2022-05-24 06:45:05', 'nkjghvb  nbhj  h'),
(25, ' nb j', 'WAD_20MCA1082.docx', 'timetable', '2022-05-24 06:46:10', ' bhb');

-- --------------------------------------------------------

--
-- Table structure for table `metadata`
--

DROP TABLE IF EXISTS `metadata`;
CREATE TABLE IF NOT EXISTS `metadata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `meta_key` text NOT NULL,
  `meta_value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `metadata`
--

INSERT INTO `metadata` (`id`, `item_id`, `meta_key`, `meta_value`) VALUES
(1, 2, 'section', '3'),
(2, 2, 'section', '4'),
(23, 25, 'class_id', '1'),
(25, 25, 'teacher_id', '2'),
(24, 25, 'section_id', '3'),
(15, 13, 'to', '11:10'),
(14, 13, 'from', '10:30'),
(13, 12, 'to', '02:25'),
(12, 12, 'from', '01:25'),
(16, 14, 'from', '11:20'),
(17, 14, 'to', '12:00'),
(18, 15, 'from', '13:00'),
(19, 15, 'to', '13:40'),
(20, 17, 'from', '09:40'),
(21, 17, 'to', '10:20'),
(26, 25, 'lecture_id', '12'),
(27, 25, 'subject_id', '26'),
(28, 25, 'day_name', 'monday'),
(29, 27, 'class_id', '1'),
(30, 27, 'section_id', '4'),
(31, 27, 'teacher_id', '2'),
(32, 27, 'lecture_id', '13'),
(33, 27, 'subject_id', '1'),
(34, 27, 'day_name', 'tuesday'),
(35, 28, 'class_id', '1'),
(36, 28, 'section_id', '4'),
(37, 28, 'teacher_id', '2'),
(38, 28, 'lecture_id', '12'),
(39, 28, 'subject_id', '26'),
(40, 28, 'day_name', 'tuesday'),
(41, 29, 'class_id', '2'),
(42, 29, 'section_id', '3'),
(43, 29, 'teacher_id', '2'),
(44, 29, 'lecture_id', '13'),
(45, 29, 'subject_id', '26'),
(46, 29, 'day_name', 'friday'),
(47, 30, 'from', '09:40'),
(48, 30, 'to', '10:20'),
(49, 31, 'from', '10:30'),
(50, 31, 'to', '11:10'),
(51, 32, 'from', '11:20'),
(52, 32, 'to', '12:00'),
(53, 33, 'from', '13:00'),
(54, 33, 'to', '13:40'),
(55, 34, 'from', '13:50'),
(56, 34, 'to', '14:30'),
(57, 35, 'from', '14:40'),
(58, 35, 'to', '15:20'),
(59, 36, 'from', '15:30'),
(60, 36, 'to', '16:10'),
(61, 37, 'class_id', '2'),
(62, 37, 'section_id', '3'),
(63, 37, 'teacher_id', '2'),
(64, 37, 'lecture_id', '30'),
(65, 37, 'subject_id', '26'),
(66, 37, 'day_name', 'monday');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) DEFAULT '1',
  `title` text,
  `description` text,
  `type` text,
  `publish_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) DEFAULT NULL,
  `parent` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `author`, `title`, `description`, `type`, `publish_date`, `modified_date`, `status`, `parent`) VALUES
(1, 1, 'class-1', 'class-1desc', 'class', '2022-05-08 11:36:36', '2022-05-08 11:36:36', 'publish', '0'),
(2, 1, 'class-2', 'class', 'class', '2022-05-08 11:36:36', '2022-05-08 11:36:36', 'publish', '0'),
(25, 1, NULL, NULL, 'timetable', '2022-05-12 08:57:13', '2022-05-12 14:27:13', 'publish', '0'),
(37, 1, NULL, NULL, 'timetable', '2022-05-12 05:24:28', '2022-05-12 22:54:28', 'publish', '0'),
(27, 1, NULL, NULL, 'timetable', '2022-05-12 09:24:28', '2022-05-12 14:54:28', 'publish', '0'),
(28, 1, NULL, NULL, 'timetable', '2022-05-12 09:25:49', '2022-05-12 14:55:49', 'publish', '0'),
(29, 1, NULL, NULL, 'timetable', '2022-05-12 10:21:25', '2022-05-12 15:51:25', 'publish', '0'),
(30, 1, 'First Lecture', NULL, 'lecture', '2022-05-12 05:17:15', '2022-05-12 22:47:15', 'publish', '0'),
(26, 1, 'Awad', NULL, 'subject', '2022-05-12 14:51:30', '2022-05-12 14:51:30', 'publish', '0'),
(31, 1, '2nd Lecture', NULL, 'lecture', '2022-05-12 05:17:54', '2022-05-12 22:47:54', 'publish', '0'),
(32, 1, '3rd Lecture', NULL, 'lecture', '2022-05-12 05:18:21', '2022-05-12 22:48:21', 'publish', '0'),
(33, 1, '4th Lecture', NULL, 'lecture', '2022-05-12 05:18:45', '2022-05-12 22:48:45', 'publish', '0'),
(34, 1, '5th Lecture', NULL, 'lecture', '2022-05-12 05:19:12', '2022-05-12 22:49:12', 'publish', '0'),
(35, 1, '6th Lecture', NULL, 'lecture', '2022-05-12 05:19:34', '2022-05-12 22:49:34', 'publish', '0'),
(36, 1, '7th Lecture', NULL, 'lecture', '2022-05-12 05:20:05', '2022-05-12 22:50:05', 'publish', '0');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

DROP TABLE IF EXISTS `query`;
CREATE TABLE IF NOT EXISTS `query` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `email` text,
  `phone` text,
  `query` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
