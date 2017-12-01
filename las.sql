-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2017 at 02:55 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `las`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `course_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`course_id`, `ip_add`, `qty`) VALUES
(7, '::1', 9),
(8, '::1', 15);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(100) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`) VALUES
(1, 'Web Development'),
(2, 'Music'),
(3, 'Art'),
(4, 'Business'),
(5, 'Management'),
(6, 'Coffee'),
(7, 'Software Dev'),
(8, 'Cooking');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(100) NOT NULL,
  `course_cat` int(100) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `course_desc` text NOT NULL,
  `course_price` int(100) NOT NULL,
  `course_image` text NOT NULL,
  `course_keywords` text NOT NULL,
  `course_video` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_cat`, `course_title`, `course_desc`, `course_price`, `course_image`, `course_keywords`, `course_video`) VALUES
(3, 1, 'Web Course', '<p>Web Development Course</p>', 200, 'webCourse.jpg', 'Web', ''),
(4, 2, 'Music Course', '<p>Music&nbsp;</p>', 200, 'musicCourse.jpg', 'music', ''),
(5, 3, 'Design Course', '<p>Design Course</p>', 20, 'designCourse.jpg', 'design', ''),
(6, 5, 'Management Course', '<p>Management Course</p>', 100, 'managementCourse.jpg', 'management', ''),
(7, 6, 'Coffee Course', '<p>coffee course</p>', 20, 'coffeeCourse.jpg', 'coffee', ''),
(8, 4, 'Business Course', '<p>Business Course</p>', 100, 'businessCourse.jpg', 'business', ''),
(9, 3, 'Art Course', '<p>Art Course</p>', 40, 'artCourse.jpg', 'art', ''),
(10, 7, 'Software Course', '<p>Software Course</p>', 100, 'softwareCourse.jpg', 'software', ''),
(11, 1, 'web design', '<p>web design</p>', 100, 'course1.jpg', 'web', ''),
(12, 1, 'C#', '<p>C#</p>', 100, 'course5.jpg', 'web', 'http://127.0.0.1/LMS/admin/course_videos/$course_video'),
(13, 1, 'ASP.Net', '<p>web design</p>', 100, 'course3.jpg', 'web', 'http://127.0.0.1/LMS/admin/course_videos/$course_video'),
(14, 2, '1', '', 0, '', '', 'http://127.0.0.1/LMS/admin/course_videos/IMG_0802.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_password` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_username` text NOT NULL,
  `customer_image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_ip`, `customer_name`, `customer_password`, `customer_email`, `customer_username`, `customer_image`) VALUES
(9, '::1', 'ds', 'nhfjh', 'A@GMAIL.COM', 'csd', 'image3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
