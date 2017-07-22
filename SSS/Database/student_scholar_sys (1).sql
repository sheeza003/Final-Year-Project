-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2016 at 06:44 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student_scholar_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_name` text NOT NULL,
  `admin_pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_name`, `admin_pass`) VALUES
('admin', 'admin'),
('khan', 'khan');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `age` int(11) NOT NULL,
  `current_degree` text NOT NULL,
  `location` text NOT NULL,
  `institution` text NOT NULL,
  `file` text NOT NULL,
  `status` text NOT NULL,
  `comments` text NOT NULL,
  `ref_no` int(11) NOT NULL,
  `ref_job` text NOT NULL,
  `ref_relation` text NOT NULL,
  `user_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `fname`, `lname`, `email`, `age`, `current_degree`, `location`, `institution`, `file`, `status`, `comments`, `ref_no`, `ref_job`, `ref_relation`, `user_name`) VALUES
(14, 'Ali', 'khan', 'Alikhan@gmail.com', 20, 'Bachelors in Computer Science', 'Islamabad', 'Punjab-uni', ' Financial issues, cant afford the complete semseter fee', 'Pending', 'Needs Improvement', 300899780, 'General Manager, Ovex Pvt Ltd', 'Uncle', 'Ali khan'),
(15, 'Sarah', 'Ahmed', 'Sarahahmed@yahoo.com', 21, 'BSSE (hons.)', 'Islamabad', 'Punjab University', ' Financial problems, lack of resources and good academic careed ', 'Completed', 'Application is Accepted.', 343898904, 'Professor, Allama Iqbal University', 'Uncle (mamo)', 'Sarah'),
(16, 'Ali', 'Hassan', 'ali_hassan@yahoo.com', 22, 'BS - Mechanical Engeenering', 'Lahore', 'NUST University', 'Financial problems, lack of resources and good academic careed', 'Declined', 'Fill the Form again with proper information.', 923435455, 'Teacher, ABC School', 'Father', 'Ali'),
(17, 'Rabia', 'Muneeb', 'RabiaMuneeb@yahoo.com', 22, 'BS-MicroBiology', 'Rawalpindi', 'FAST University', 'Financial problems, lack of resources and good academic career. Financial problems, lack of resources and good academic career', 'Pending', 'Please fill all fields', 0, '-', '-', 'Rabia Ali'),
(18, 'Ahmed Ali', 'Khan', 'Ahmed_123@yahoo.com', 23, 'MBA', 'Rawalpindi', 'NUST University', 'Financial problems, lack of resources and good academic careed ', 'Accepted', '', 300899845, 'Principal, Abc School', 'Unt (Khala)', 'Ahmed Khan');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE IF NOT EXISTS `student_login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `student_name` text NOT NULL,
  `student_pass` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `location` text NOT NULL,
  `institute` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`id`, `student_name`, `student_pass`, `email`, `location`, `institute`) VALUES
(17, 'Ali', 'ali', 'ali@gmail.com', 'Islamabad', 'FAST University'),
(18, 'Sarah', 'sarah', 'sarahkhan@yahoo.com', 'Lahore', 'NUST University'),
(19, 'Ahmed Khan', 'ahmed', 'ahmed@yahoo.com', 'Islamabad', 'Comsats University'),
(20, 'Rabia Ali', 'rabia', 'rabiakhan@gmail.com', 'Rawalpindi', 'Punjab University'),
(21, 'Ali khan', 'ali', 'alikhan@gmail.com', 'Islamabad', 'FAST University');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
