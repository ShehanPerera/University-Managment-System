-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2017 at 07:13 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `acyear`
--

CREATE TABLE `acyear` (
  `id` int(11) NOT NULL,
  `yearcd` varchar(10) NOT NULL,
  `fromdt` date NOT NULL,
  `todt` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acyear`
--

INSERT INTO `acyear` (`id`, `yearcd`, `fromdt`, `todt`, `status`) VALUES
(4, '2011', '2013-04-22', '2014-03-28', 'INACTIVE'),
(5, '2013', '2014-04-07', '2015-04-17', 'ACTIVE'),
(7, '2014', '2014-04-26', '2015-04-09', 'INACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `acyearsubject`
--

CREATE TABLE `acyearsubject` (
  `id` int(11) NOT NULL,
  `yearcd` varchar(10) NOT NULL,
  `subjectcd` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acyearsubject`
--

INSERT INTO `acyearsubject` (`id`, `yearcd`, `subjectcd`) VALUES
(209, '2012', 'AMM102GC2'),
(210, '2012', 'BAD2127'),
(211, '2012', 'BOT101GC2'),
(212, '2012', 'BOT102GC2'),
(365, '2010', 'AMM102GC2'),
(366, '2010', 'BOT102GC2'),
(367, '2010', 'CHE101GC2'),
(368, '2011', 'BOT102GC2'),
(369, '2011', 'CHE101GC2'),
(370, '2011', 'CHE102GC2'),
(371, '2011', 'CSC102GC2'),
(372, '2011', 'CSC201GC2'),
(373, '2011', 'CSC202GC2'),
(382, '2013', 'BOT101GC2'),
(383, '2013', 'BOT102GC2'),
(384, '2013', 'BOT104GC2'),
(385, '2013', 'CHE101GC2'),
(386, '2013', 'CHE103GC2'),
(387, '2013', 'CSC101GC2');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `RegNo` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `RegNo`, `password`, `fname`, `lname`, `email`, `status`, `gender`, `phone`) VALUES
(1, 'admin', 'c93ccd78b2076528346216b3b2f701e6', 'Registrar', 'Assistant', 'admin@unistudentguider.com', 'single', 'Male', 772478150);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `coursecode` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `coursecode`, `description`) VALUES
(3, 'CSC', 'ComputerScience'),
(7, 'SP', 'PhysicalScience'),
(8, 'SB', 'BioScience');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `did` text NOT NULL,
  `discription` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `RegNo` varchar(30) NOT NULL,
  `term` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `score` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `RegNo`, `term`, `subject`, `score`) VALUES
(1, '09-0001', 'Prelim', 'ENG 03', '100'),
(2, '09-0002', 'Prelim', 'ENG 03', '100'),
(3, '09-0001', 'Midterm', 'ENG 03', '90'),
(4, '09-0002', 'Midterm', 'ENG 03', '90'),
(5, '09-0001', 'Endterm', 'ENG 03', '98'),
(6, '09-0002', 'Endterm', 'ENG 03', '98');

-- --------------------------------------------------------

--
-- Table structure for table `examapp`
--

CREATE TABLE `examapp` (
  `id` int(11) NOT NULL,
  `regno` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL,
  `subjectcode` varchar(20) NOT NULL,
  `category` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examapp`
--

INSERT INTO `examapp` (`id`, `regno`, `level`, `subjectcode`, `category`) VALUES
(168, 'test1', '1G', 'CHE103GC2', '3R'),
(169, 'test1', '1G', 'CSC101GC2', '2R'),
(170, 'test1', '2G', 'BOT102GC2', 'P'),
(171, 'test1', '2G', 'CHE101GC2', 'P'),
(172, '2010SP033', '1G', 'CHE103GC2', '1R'),
(173, '2010SP033', '1G', 'CSC101GC2', '2R'),
(174, '2010SP033', '1G', 'CSC102GC2', '3R'),
(175, '2010SP033', '1G', 'CSC103GC2', '2R'),
(176, '2010SP033', '2G', 'BOT102GC2', 'P'),
(177, '2010SP033', '2G', 'CHE101GC2', 'P'),
(178, '2010SP033', '2G', 'CSC201GC2', 'P'),
(179, '2014sp014', '1G', 'CSC101GC2', 'P'),
(180, '2014sp014', '1G', 'CSC102GC2', 'P'),
(181, '2014sp014', '1G', 'CSC103GC2', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `examdate`
--

CREATE TABLE `examdate` (
  `id` int(11) NOT NULL,
  `semi` int(11) NOT NULL,
  `fromdt` date NOT NULL,
  `todt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examdate`
--

INSERT INTO `examdate` (`id`, `semi`, `fromdt`, `todt`) VALUES
(22, 2, '2014-01-01', '2014-08-01'),
(23, 1, '2014-01-14', '2016-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `RegNo` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`id`, `fname`, `lname`, `email`, `RegNo`, `password`, `department`, `gender`, `phone`) VALUES
(149, 'Dr.Amirthalingam', 'Ramanan', 'a.ramana@jfn.ac.lk', '', 'baa2133a166353138c8a5ec66f17286e', 'CSC', '', 212218194),
(150, 'Mr.S', 'Selvarajan', 'selvarajan09@gmail.com', '', 'baa2133a166353138c8a5ec66f17286e', 'Maths', '', 212218196);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `RegNo` varchar(20) NOT NULL,
  `login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `logout` datetime NOT NULL,
  `lname` text NOT NULL,
  `location` text NOT NULL,
  `position` text NOT NULL,
  `action` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `RegNo`, `login`, `logout`, `lname`, `location`, `position`, `action`) VALUES
(4, 'test1', '2014-02-07 01:08:57', '0000-00-00 00:00:00', 'test', '', 'student', ''),
(5, 'admin', '2014-02-07 01:16:52', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', ''),
(6, 'test1', '2014-02-07 01:22:28', '0000-00-00 00:00:00', 'test', '', 'student', ''),
(8, 'head', '2014-02-07 02:07:54', '0000-00-00 00:00:00', 'Charles', '', 'Head of the department', ''),
(9, 'admin', '2014-02-07 03:38:26', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', ''),
(10, '2010SP033', '2014-02-07 03:38:57', '0000-00-00 00:00:00', 'VIJAYANATHAN', '', 'student', ''),
(11, '2010SP033', '2014-02-07 03:49:12', '0000-00-00 00:00:00', 'VIJAYANATHAN', '', 'student', ''),
(12, '2010SP033', '2014-02-07 05:07:11', '0000-00-00 00:00:00', 'VIJAYANATHAN', '', 'student', ''),
(13, 'head', '2014-02-07 05:07:29', '0000-00-00 00:00:00', 'Charles', '', 'Head of the department', ''),
(14, 'admin', '2014-02-07 05:07:41', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', ''),
(15, 'admin', '2014-02-07 05:14:24', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', ''),
(16, 'head', '2014-02-07 07:03:56', '0000-00-00 00:00:00', 'Charles', '', 'Head of the department', ''),
(17, 'head', '2014-02-07 07:04:21', '0000-00-00 00:00:00', 'Charles', '', 'Head of the department', ''),
(18, '2010SP033', '2014-02-07 07:04:35', '0000-00-00 00:00:00', 'VIJAYANATHAN', '', 'student', ''),
(19, 'admin', '2014-02-07 07:05:44', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', ''),
(20, 'admin', '2014-02-14 02:50:51', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', ''),
(21, 'admin', '2014-02-14 04:44:35', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', ''),
(22, 'admin', '2014-04-07 15:55:18', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', ''),
(23, 'admin', '2014-04-09 13:16:16', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', ''),
(24, 'admin', '2014-04-09 15:25:26', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', ''),
(25, '2014sp014', '2014-04-09 15:58:57', '0000-00-00 00:00:00', 'user', '', 'student', ''),
(26, '2014sp014', '2014-04-09 17:05:23', '0000-00-00 00:00:00', 'user', '', 'student', 'login'),
(27, '2014sp014', '2014-04-09 17:20:40', '0000-00-00 00:00:00', 'user', '', 'student', 'subject combination form submitted'),
(28, '2014sp014', '2014-04-09 17:20:40', '0000-00-00 00:00:00', 'user', '', 'student', 'subject combination form submitted'),
(29, '2014sp014', '2014-04-09 17:20:40', '0000-00-00 00:00:00', 'user', '', 'student', 'subject combination form submitted'),
(30, '', '2014-04-09 17:24:43', '0000-00-00 00:00:00', '', '', 'student', 'subject combination form submitted'),
(31, '', '2014-04-09 17:26:20', '0000-00-00 00:00:00', '', '', 'student', 'subject combination form submitted'),
(32, '2014sp014', '2014-04-09 17:32:10', '0000-00-00 00:00:00', 'user', '', 'student', 'login'),
(33, '', '2014-04-09 17:37:04', '0000-00-00 00:00:00', '', '', 'student', 'subject selection form has been submitted'),
(34, '', '2014-04-09 17:40:22', '0000-00-00 00:00:00', '', '', 'student', 'subject selection form has been submitted'),
(35, '2014sp014', '2014-04-09 17:41:49', '0000-00-00 00:00:00', 'user', '', 'student', 'subject selection form has been submitted'),
(36, '2014sp014', '2014-04-09 17:42:32', '0000-00-00 00:00:00', 'user', '', 'student', 'subject combination form submitted'),
(37, '2014sp014', '2014-04-09 17:45:54', '0000-00-00 00:00:00', 'user', '', 'student', 'Exam form has been submitted'),
(38, '', '2014-04-09 17:56:08', '0000-00-00 00:00:00', '', '', 'student', 'Dynamicssssubject has been edited'),
(39, '', '2014-04-09 17:57:33', '0000-00-00 00:00:00', '', '', 'student', 'proLogsubject has been added'),
(40, '', '2014-04-09 17:59:11', '0000-00-00 00:00:00', '', '', 'student', 'Dynamicssubject has been edited'),
(41, 'admin', '2014-04-09 18:00:00', '0000-00-00 00:00:00', 'Nilukshan', '', 'student', 'Dynamicsddsubject has been edited'),
(42, 'admin', '2014-04-09 18:00:53', '0000-00-00 00:00:00', 'Nilukshan', '', 'student', 'Dynamicssubject has been edited'),
(43, 'admin', '2014-04-09 18:01:46', '0000-00-00 00:00:00', 'Nilukshan', '', 'student', 'Dynamics aa subject has been edited'),
(44, '', '2014-04-09 18:12:38', '0000-00-00 00:00:00', 'Nilukshan', '', 'student', 'Zoology Department Head has been updated'),
(45, '', '2014-04-09 18:12:58', '0000-00-00 00:00:00', 'Nilukshan', '', 'student', 'Zoology Department Head has been updated'),
(46, '', '2014-04-09 18:13:21', '0000-00-00 00:00:00', 'Nilukshan', '', 'student', 'htrjyjy Department Head has been added'),
(47, 'admin', '2014-04-09 18:14:41', '0000-00-00 00:00:00', 'Nilukshan', '', 'student', 'rhresh Department Head has been added'),
(48, 'admin', '2014-04-09 18:17:54', '0000-00-00 00:00:00', 'Nilukshan', '', 'student', ' Department Head has been deleted'),
(49, 'admin', '2014-04-09 18:22:03', '0000-00-00 00:00:00', 'Nilukshan', '', 'student', 'dept Department Head has been added'),
(50, 'admin', '2014-04-09 18:23:01', '0000-00-00 00:00:00', 'Nilukshan', '', 'student', ' Department Head has been deleted'),
(51, 'admin', '2014-04-09 18:24:16', '0000-00-00 00:00:00', 'Nilukshan', '', 'student', 'mydept Department Head has been added'),
(52, 'admin', '2014-04-09 18:24:31', '0000-00-00 00:00:00', 'Nilukshan', '', 'student', ' Department Head has been deleted'),
(53, '', '2014-04-09 18:31:41', '0000-00-00 00:00:00', '', '', 'admin', 'hdfhhgf student has been added'),
(54, 'admin', '2014-04-09 18:36:01', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'Kalyani student has been updated'),
(55, 'admin', '2014-04-09 18:39:20', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'Kalyani s profile has been updated'),
(56, 'admin', '2014-04-09 18:57:20', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'academic year2014 has been added'),
(57, 'admin', '2014-04-09 18:59:39', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'academic year2013 has been updated'),
(58, 'admin', '2014-04-09 18:59:40', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'academic year2013 has been updated'),
(59, 'admin', '2014-04-09 19:02:17', '0000-00-00 00:00:00', 'Nilukshan', '', 'student', 'Subject has been offered'),
(60, 'admin', '2014-04-09 19:04:34', '0000-00-00 00:00:00', 'Nilukshan', '', 'student', 'Subject has been offered in 2013'),
(61, 'admin', '2014-04-09 19:05:03', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'academic year has been deleted'),
(62, '2014sp014', '2014-04-09 19:31:45', '0000-00-00 00:00:00', 'user', '', 'student', 'subject combination form submitted'),
(63, '2014sp014', '2014-04-09 19:35:10', '0000-00-00 00:00:00', 'user', '', 'student', 'subject combination form submitted'),
(64, 'admin', '2014-04-10 16:43:15', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(65, '2014sp014', '2014-04-10 17:46:11', '0000-00-00 00:00:00', 'user', '', 'student', 'login'),
(66, '2014sp014', '2014-04-10 17:46:35', '0000-00-00 00:00:00', 'user', '', 'student', 'subject combination form submitted'),
(67, '2014sp014', '2014-04-10 17:47:10', '0000-00-00 00:00:00', 'user', '', 'student', 'subject combination form submitted'),
(68, '2014sp014', '2014-04-10 17:51:11', '0000-00-00 00:00:00', 'user', '', 'student', 'subject combination form submitted'),
(69, '2014sp014', '2014-04-10 17:51:37', '0000-00-00 00:00:00', 'user', '', 'student', 'subject combination form submitted'),
(70, '2014sp014', '2014-04-10 17:51:55', '0000-00-00 00:00:00', 'user', '', 'student', 'subject combination form submitted'),
(71, 'admin', '2014-04-10 17:53:33', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'academic year2011 has been updated'),
(72, 'admin', '2014-04-10 17:55:02', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'academic year2013 has been updated'),
(73, 'admin', '2014-04-10 17:55:31', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'academic year2014 has been added'),
(74, 'admin', '2014-04-10 17:56:00', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'academic year2014 has been updated'),
(75, 'admin', '2014-04-10 17:56:05', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'academic year2013 has been updated'),
(76, 'admin', '2014-04-10 17:57:18', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'test  profile has been updated'),
(77, '2014sp014', '2014-04-10 18:01:44', '0000-00-00 00:00:00', 'user', '', 'student', 'login'),
(78, 'admin', '2014-04-10 18:02:26', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(79, 'admin', '2014-04-10 18:03:08', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'Nilukshan  profile has been updated'),
(80, '2014sp014', '2014-04-10 18:03:30', '0000-00-00 00:00:00', 'user', '', 'student', 'login'),
(81, 'admin', '2014-04-10 18:04:00', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'test  profile has been updated'),
(82, 'admin', '2014-04-10 18:07:21', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'Nilukshan  profile has been updated'),
(83, 'admin', '2014-04-10 18:08:12', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'Nilu  profile has been updated'),
(84, 'admin', '2014-04-10 18:09:05', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'nilu  profile has been updated'),
(85, 'admin', '2014-04-10 18:15:45', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'nilu  profile has been updated'),
(86, '2014sp014', '2014-04-10 18:17:18', '0000-00-00 00:00:00', 'croos', '', 'student', 'login'),
(87, 'admin', '2014-04-10 18:17:31', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'Nilukshan  profile has been updated'),
(88, '2014sp014', '2014-04-10 18:17:46', '0000-00-00 00:00:00', 'croos', '', 'student', 'login'),
(89, '2014sp014', '2014-04-10 18:18:33', '0000-00-00 00:00:00', 'croos', '', 'student', 'subject combination form submitted'),
(90, '2014sp014', '2014-04-10 18:26:26', '0000-00-00 00:00:00', 'croos', '', 'student', 'subject combination form submitted'),
(91, 'admin', '2014-04-11 04:21:00', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(92, '2014sp014', '2014-04-11 04:21:34', '0000-00-00 00:00:00', 'croos', '', 'student', 'login'),
(93, 'admin', '2014-04-11 04:49:25', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(94, 'admin', '2014-04-11 04:51:16', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(95, '2014sp014', '2014-04-11 04:56:12', '0000-00-00 00:00:00', 'croos', '', 'student', 'login'),
(96, '2014sp014', '2014-04-11 06:01:35', '0000-00-00 00:00:00', 'croos', '', 'student', 'subject combination form submitted'),
(97, 'admin', '2014-04-11 06:39:35', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(98, 'admin', '2014-04-11 06:39:46', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'Nilukshan  profile has been updated'),
(99, 'admin', '2014-04-11 06:40:19', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'Nilukshan  profile has been updated'),
(100, 'admin', '2014-04-11 06:40:56', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(101, 'admin', '2014-04-11 06:41:39', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(102, 'admin', '2014-04-11 06:42:31', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'Nilukshan  profile has been updated'),
(103, 'admin', '2014-04-11 06:43:47', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'Nilukshan  profile has been updated'),
(104, 'admin', '2014-04-11 06:47:07', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'Kalyani has been added'),
(105, '2014sp014', '2014-04-11 10:07:28', '0000-00-00 00:00:00', 'croos', '', 'student', 'login'),
(106, '2014sp014', '2014-04-11 10:09:05', '0000-00-00 00:00:00', 'croos', '', 'student', 'subject combination form submitted'),
(107, '2014sp014', '2014-04-11 10:10:56', '0000-00-00 00:00:00', 'croos', '', 'student', 'login'),
(108, 'admin', '2014-04-11 10:11:20', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(109, '2014sp014', '2014-04-11 10:15:28', '0000-00-00 00:00:00', 'croos', '', 'student', 'login'),
(110, 'admin', '2014-04-13 16:21:58', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(111, 'admin', '2014-11-20 05:00:55', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(112, 'admin', '2014-11-20 05:18:38', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(113, 'admin', '2014-11-20 08:06:39', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(114, 'admin', '2014-11-20 08:11:15', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(115, 'admin', '2014-11-20 08:59:36', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(116, 'admin', '2014-11-20 09:03:08', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(117, 'admin', '2014-12-04 14:05:35', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(118, 'admin', '2014-12-04 16:50:15', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(119, 'admin', '2014-12-04 18:41:33', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(120, 'admin', '2014-12-04 20:31:57', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(121, 'admin', '2014-12-04 21:26:28', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(122, 'admin', '2014-12-04 21:32:16', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(123, 'admin', '2014-12-04 22:09:51', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(124, 'admin', '2014-12-05 08:49:42', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(125, 'admin', '2014-12-05 08:59:32', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(126, 'admin', '2014-12-07 14:13:45', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(127, 'admin', '2014-12-10 08:46:51', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(128, 'admin', '2015-01-18 03:35:24', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(129, 'admin', '2015-01-18 05:56:17', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(130, 'admin', '2015-01-18 06:13:01', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(131, 'admin', '2015-01-18 06:28:54', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(132, 'admin', '2015-01-18 07:42:23', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(133, 'admin', '2015-01-18 07:43:29', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(134, 'admin', '2015-01-18 08:35:01', '0000-00-00 00:00:00', 'Nilukshan', '', 'admin', 'login'),
(135, 'admin', '2015-02-06 16:49:31', '0000-00-00 00:00:00', 'Assistant', '', 'admin', 'login'),
(136, '2011csc004', '2015-02-06 17:27:29', '0000-00-00 00:00:00', 'Theiventhiramoorththi', '', 'student', 'login'),
(137, 'admin', '2015-02-06 17:39:57', '0000-00-00 00:00:00', 'Assistant', '', 'admin', 'login'),
(138, 'admin', '2017-08-08 12:58:57', '0000-00-00 00:00:00', 'Assistant', '', 'admin', 'login'),
(139, 'admin', '2017-09-17 03:16:24', '0000-00-00 00:00:00', 'Assistant', '', 'admin', 'login'),
(140, 'admin', '2017-09-17 05:25:36', '0000-00-00 00:00:00', 'Assistant', '', 'admin', 'login'),
(141, 'head', '2017-09-17 05:38:28', '0000-00-00 00:00:00', 'Charles', '', 'Head of the department', 'login'),
(142, 'admin', '2017-09-17 05:43:21', '0000-00-00 00:00:00', 'Assistant', '', 'admin', 'login'),
(143, 'admin', '2017-09-17 05:44:47', '0000-00-00 00:00:00', 'Assistant', '', 'admin', 'academic year has been deleted'),
(144, 'admin', '2017-09-17 05:45:52', '0000-00-00 00:00:00', 'Assistant', '', 'student', 'Vecs subject has been added'),
(145, 'head', '2017-09-17 06:00:02', '0000-00-00 00:00:00', 'Charles', '', 'Head of the department', 'login'),
(146, 'admin', '2017-09-17 06:00:26', '0000-00-00 00:00:00', 'Assistant', '', 'admin', 'login'),
(147, 'admin', '2017-09-17 06:12:11', '0000-00-00 00:00:00', 'Assistant', '', 'admin', 'login'),
(148, 'admin', '2017-09-17 06:18:59', '0000-00-00 00:00:00', 'Assistant', '', 'admin', 'login'),
(149, 'head', '2017-09-17 06:38:53', '0000-00-00 00:00:00', 'Charles', '', 'Head of the department', 'login'),
(150, 'head', '2017-09-17 06:49:02', '0000-00-00 00:00:00', 'Charles', '', 'head', 'CSC105GC2 for 7985 results has been added'),
(151, 'admin', '2017-09-17 06:59:04', '0000-00-00 00:00:00', 'Assistant', '', 'admin', 'login'),
(152, '2011csc005', '2017-09-17 07:05:40', '0000-00-00 00:00:00', 'Gamaaethige Nuwan Siriwardane', '', 'student', 'login'),
(153, '2011csc002', '2017-09-17 07:06:34', '0000-00-00 00:00:00', 'Thankeswarar', '', 'student', 'login'),
(154, 'head', '2017-09-17 07:17:19', '0000-00-00 00:00:00', 'Charles', '', 'Head of the department', 'login'),
(155, 'head', '2017-09-17 07:18:31', '0000-00-00 00:00:00', 'Charles', '', 'head', 'PHY102GC3 for 7985 results has been added'),
(156, '2011csc002', '2017-09-17 07:19:12', '0000-00-00 00:00:00', 'Thankeswarar', '', 'student', 'login'),
(157, '2011csc002', '2017-09-17 07:45:51', '0000-00-00 00:00:00', 'Thankeswarar', '', 'student', 'login'),
(158, '2011csc002', '2017-09-17 07:58:43', '0000-00-00 00:00:00', 'Thankeswarar', '', 'student', 'login'),
(159, '2011csc002', '2017-09-17 08:19:49', '0000-00-00 00:00:00', 'Thankeswarar', '', 'student', 'login'),
(160, '2011csc002', '2017-09-17 08:23:48', '0000-00-00 00:00:00', 'Thankeswarar', '', 'student', 'login'),
(161, '2011csc002', '2017-09-17 08:26:03', '0000-00-00 00:00:00', 'Thankeswarar', '', 'student', 'subject selection form has been submitted'),
(162, '2011csc002', '2017-09-17 08:26:40', '0000-00-00 00:00:00', 'Thankeswarar', '', 'student', 'login'),
(163, '2011csc002', '2017-09-17 08:30:32', '0000-00-00 00:00:00', 'Thankeswarar', '', 'student', 'subject combination form submitted'),
(164, '2011csc002', '2017-09-17 08:31:07', '0000-00-00 00:00:00', 'Thankeswarar', '', 'student', 'subject combination form submitted'),
(165, '2011csc002', '2017-09-17 08:31:36', '0000-00-00 00:00:00', 'Thankeswarar', '', 'student', 'subject combination form submitted'),
(166, 'head', '2017-09-17 08:32:43', '0000-00-00 00:00:00', 'Charles', '', 'Head of the department', 'login'),
(167, 'admin', '2017-09-17 08:33:08', '0000-00-00 00:00:00', 'Assistant', '', 'admin', 'login'),
(168, '2011csc002', '2017-09-17 08:33:45', '0000-00-00 00:00:00', 'Thankeswarar', '', 'student', 'login'),
(169, 'admin', '2017-09-17 08:55:11', '0000-00-00 00:00:00', 'Assistant', '', 'admin', 'login'),
(170, '', '2017-09-17 15:16:19', '0000-00-00 00:00:00', '', '', 'head', 'CSC105GC2 for 7986 results has been added'),
(171, '', '2017-09-17 15:17:24', '0000-00-00 00:00:00', '', '', 'head', 'CSC105GC2 for 7986 results has been added'),
(172, '', '2017-09-17 15:25:21', '0000-00-00 00:00:00', '', '', 'head', 'CSC105GC2 for 7986 results has been added');

-- --------------------------------------------------------

--
-- Table structure for table `mysubjects`
--

CREATE TABLE `mysubjects` (
  `StudentId` varchar(10) NOT NULL,
  `SubCode` varchar(10) NOT NULL,
  `SubYear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mysubjects`
--

INSERT INTO `mysubjects` (`StudentId`, `SubCode`, `SubYear`) VALUES
('22', '', 2014);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `position` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `date`, `position`, `message`) VALUES
(1, '0000-00-00 00:00:00', 'student', 'Level 1G results are displayed at the Notice Board of the Office of the Dean Faculty of Science and other results are kept at the office.'),
(2, '0000-00-00 00:00:00', 'student', 'All students are requested to see their results as soon as possible.'),
(3, '0000-00-00 00:00:00', 'teacher', 'The vacation is announced from 23.12.2013 to 27.12.2013 as per approved academic calendar.');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(100) NOT NULL,
  `inum` varchar(10) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `credit` int(1) NOT NULL,
  `grade` varchar(3) NOT NULL,
  `points` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `inum`, `unit`, `credit`, `grade`, `points`) VALUES
(1, 'S8993', 'CSC234SC3', 3, 'A-', 3.7),
(2, 'S8996', 'CSC234SC3', 3, 'A+', 4),
(3, 'S8997', 'CSC234SC3', 3, 'B-', 2.7),
(4, 'S8998', 'CSC234SC3', 3, 'B+', 3.3),
(5, 'S8999', 'CSC234SC3', 3, 'A', 4),
(6, 'S9000', 'CSC234SC3', 3, 'A-', 3.7),
(7, 'S9001', 'CSC234SC3', 3, 'B+', 3.3),
(8, 'S9002', 'CSC234SC3', 3, 'A', 4),
(9, 'S9003', 'CSC234SC3', 3, 'A+', 4),
(10, 'S9004', 'CSC234SC3', 3, 'B', 3),
(11, 'S9005', 'CSC234SC3', 3, 'D+', 1.3),
(12, 'S9006', 'CSC234SC3', 3, 'A', 4),
(13, 'S9007', 'CSC234SC3', 3, 'B', 3),
(14, 'S9008', 'CSC234SC3', 3, 'B-', 2.7),
(15, 'S9009', 'CSC234SC3', 3, 'A+', 4),
(16, 'S9010', 'CSC234SC3', 3, 'B', 3),
(17, 'S9011', 'CSC234SC3', 3, 'B-', 2.7),
(18, 'S9012', 'CSC234SC3', 3, 'A-', 3.7),
(19, 'S9013', 'CSC234SC3', 3, 'B', 3),
(20, 'S9014', 'CSC234SC3', 3, 'B-', 2.7),
(21, 'S9015', 'CSC234SC3', 3, 'C+', 2.3),
(22, 'S9016', 'CSC234SC3', 3, 'B', 3),
(23, 'S9017', 'CSC234SC3', 3, 'C+', 2.3),
(24, 'S9018', 'CSC234SC3', 3, 'A-', 3.7),
(25, 'S8693', 'CSC234SC3', 3, 'NA', 0),
(26, 'S9019', 'CSC234SC3', 3, 'C+', 2.3),
(27, 'S9020', 'CSC234SC3', 3, 'B+', 3.3),
(28, 'S8993', 'CSC236SC2', 2, 'B+', 3.3),
(29, 'S8996', 'CSC236SC2', 2, 'A+', 4),
(30, 'S8997', 'CSC236SC2', 2, 'C+', 2.3),
(31, 'S8998', 'CSC236SC2', 2, 'B+', 3.3),
(32, 'S8999', 'CSC236SC2', 2, 'A+', 4),
(33, 'S9000', 'CSC236SC2', 2, 'B+ ', 3.3),
(34, 'S9001', 'CSC236SC2', 2, 'B+', 3.3),
(35, 'S9002', 'CSC236SC2', 2, 'B', 3),
(36, 'S9003', 'CSC236SC2', 2, 'A', 4),
(37, 'S9004', 'CSC236SC2', 2, 'A', 4),
(38, 'S9005', 'CSC236SC2', 2, 'C', 2),
(39, 'S9006', 'CSC236SC2', 2, 'C', 2),
(40, 'S9007', 'CSC236SC2', 2, 'B', 3),
(41, 'S9008', 'CSC236SC2', 2, 'C+', 2.3),
(42, 'S9009', 'CSC236SC2', 2, 'B', 3),
(43, 'S9010', 'CSC236SC2', 2, 'B', 3),
(44, 'S9011', 'CSC236SC2', 2, 'B', 3),
(45, 'S9012', 'CSC236SC2', 2, 'B+', 3.3),
(46, 'S9013', 'CSC236SC2', 2, 'B+', 3.3),
(47, 'S9014', 'CSC236SC2', 2, 'C+', 2.3),
(48, 'S9015', 'CSC236SC2', 2, 'B', 3),
(49, 'S9016', 'CSC236SC2', 2, 'D+', 1.3),
(50, 'S9017', 'CSC236SC2', 2, 'C', 2),
(51, 'S9018', 'CSC236SC2', 2, 'B-', 2.7),
(52, 'S8693', 'CSC236SC2', 2, 'NA', 0),
(53, 'S9019', 'CSC236SC2', 2, 'D+', 1.3),
(54, 'S9020', 'CSC236SC2', 2, 'C', 2),
(55, 'S8993', 'CSC237SC3', 3, 'B', 3),
(56, 'S8996', 'CSC237SC3', 3, 'A-', 3.7),
(57, 'S8997', 'CSC237SC3', 3, 'E', 0),
(58, 'S8998', 'CSC237SC3', 3, 'A-', 3.7),
(59, 'S8999', 'CSC237SC3', 3, 'A+', 4),
(60, 'S9000', 'CSC237SC3', 3, 'B', 3),
(61, 'S9001', 'CSC237SC3', 3, 'C+', 2.3),
(62, 'S9002', 'CSC237SC3', 3, 'C+', 2.3),
(63, 'S9003', 'CSC237SC3', 3, 'B', 3),
(64, 'S9004', 'CSC237SC3', 3, 'A', 4),
(65, 'S9005', 'CSC237SC3', 3, 'IC', 0),
(66, 'S9006', 'CSC237SC3', 3, 'B', 3),
(67, 'S9007', 'CSC237SC3', 3, 'D', 1),
(68, 'S9008', 'CSC237SC3', 3, 'B-', 2.7),
(69, 'S9009', 'CSC237SC3', 3, 'B', 3),
(70, 'S9010', 'CSC237SC3', 3, 'D', 1),
(71, 'S9011', 'CSC237SC3', 3, 'A', 4),
(72, 'S9012', 'CSC237SC3', 3, 'B', 3),
(73, 'S9013', 'CSC237SC3', 3, 'B+', 3.3),
(74, 'S9014', 'CSC237SC3', 3, 'D', 1),
(75, 'S9015', 'CSC237SC3', 3, 'D', 1),
(76, 'S9016', 'CSC237SC3', 3, 'B+', 3.3),
(77, 'S9017', 'CSC237SC3', 3, 'B', 3),
(78, 'S9018', 'CSC237SC3', 3, 'C', 2),
(79, 'S8693', 'CSC237SC3', 3, 'NA', 0),
(80, 'S9019', 'CSC237SC3', 3, 'E', 0),
(81, 'S9020', 'CSC237SC3', 3, 'B', 3),
(82, 'S8993', 'CSC238SC2', 2, 'A-', 3.7),
(83, 'S8996', 'CSC238SC2', 2, 'B+', 3.3),
(84, 'S8997', 'CSC238SC2', 2, 'C-', 1.7),
(85, 'S8998', 'CSC238SC2', 2, 'A-', 3.7),
(86, 'S8999', 'CSC238SC2', 2, 'B+', 3.3),
(87, 'S9000', 'CSC238SC2', 2, 'C', 2),
(88, 'S9001', 'CSC238SC2', 2, 'C+', 2.3),
(89, 'S9002', 'CSC238SC2', 2, 'B+', 3.3),
(90, 'S9003', 'CSC238SC2', 2, 'B', 3),
(91, 'S9004', 'CSC238SC2', 2, 'A', 4),
(92, 'S9005', 'CSC238SC2', 2, 'C-', 1.7),
(93, 'S9006', 'CSC238SC2', 2, 'B+', 3.3),
(94, 'S9007', 'CSC238SC2', 2, 'B', 3),
(95, 'S9008', 'CSC238SC2', 2, 'C+', 2.3),
(96, 'S9009', 'CSC238SC2', 2, 'C-', 1.7),
(97, 'S9010', 'CSC238SC2', 2, 'B', 3),
(98, 'S9011', 'CSC238SC2', 2, 'B+', 3.3),
(99, 'S9012', 'CSC238SC2', 2, 'B-', 2.7),
(100, 'S9013', 'CSC238SC2', 2, 'B+', 3.3),
(101, 'S9014', 'CSC238SC2', 2, 'C-', 1.7),
(102, 'S9015', 'CSC238SC2', 2, 'D+', 1.3),
(103, 'S9016', 'CSC238SC2', 2, 'B-', 2.7),
(104, 'S9017', 'CSC238SC2', 2, 'B', 3),
(105, 'S9018', 'CSC238SC2', 2, 'B-', 2.7),
(106, 'S8693', 'CSC238SC2', 2, 'NA', 0),
(107, 'S9019', 'CSC238SC2', 2, 'D', 1),
(108, 'S9020', 'CSC238SC2', 2, 'B', 3),
(109, 'S8993', 'CSC241SC2', 2, 'A', 4),
(110, 'S8996', 'CSC241SC2', 2, 'A', 4),
(111, 'S8997', 'CSC241SC2', 2, 'A-', 3.7),
(112, 'S8998', 'CSC241SC2', 2, 'B', 3),
(113, 'S8999', 'CSC241SC2', 2, 'A+', 4),
(114, 'S9000', 'CSC241SC2', 2, 'C+', 2.3),
(115, 'S9001', 'CSC241SC2', 2, 'B+', 3.3),
(116, 'S9002', 'CSC241SC2', 2, 'A-', 3.7),
(117, 'S9003', 'CSC241SC2', 2, 'B+', 3.3),
(118, 'S9004', 'CSC241SC2', 2, 'A+', 4),
(119, 'S9005', 'CSC241SC2', 2, 'B+', 3.3),
(120, 'S9006', 'CSC241SC2', 2, 'A-', 3.7),
(121, 'S9007', 'CSC241SC2', 2, 'C+', 2.3),
(122, 'S9008', 'CSC241SC2', 2, 'B+', 3.3),
(123, 'S9009', 'CSC241SC2', 2, 'B+', 3.3),
(124, 'S9010', 'CSC241SC2', 2, 'C+', 2.3),
(125, 'S9011', 'CSC241SC2', 2, 'A+', 4),
(126, 'S9012', 'CSC241SC2', 2, 'A-', 3.7),
(127, 'S9013', 'CSC241SC2', 2, 'B', 3),
(128, 'S9014', 'CSC241SC2', 2, 'B+', 3.3),
(129, 'S9015', 'CSC241SC2', 2, 'A', 4),
(130, 'S9016', 'CSC241SC2', 2, 'A+', 4),
(131, 'S9017', 'CSC241SC2', 2, 'A+', 4),
(132, 'S9018', 'CSC241SC2', 2, 'B', 3),
(134, 'S9019', 'CSC241SC2', 2, 'B', 3),
(135, 'S9020', 'CSC241SC2', 2, 'C+', 2.3),
(136, 'S8993', 'CSC243SE2', 2, 'A-', 3.7),
(137, 'S8996', 'CSC243SE2', 2, 'A+', 4),
(138, 'S8997', 'CSC243SE2', 2, 'B', 3),
(139, 'S8998', 'CSC243SE2', 2, 'B', 3),
(140, 'S8999', 'CSC243SE2', 2, 'A', 4),
(141, 'S9000', 'CSC243SE2', 2, 'B-', 2.7),
(142, 'S9001', 'CSC243SE2', 2, 'B+', 3.3),
(143, 'S9002', 'CSC243SE2', 2, 'B+', 3.3),
(144, 'S9003', 'CSC243SE2', 2, 'A-', 3.7),
(145, 'S9004', 'CSC243SE2', 2, 'A-', 3.7),
(146, 'S9005', 'CSC243SE2', 2, 'E', 0),
(147, 'S9006', 'CSC243SE2', 2, 'D+', 1.3),
(148, 'S9007', 'CSC243SE2', 2, 'C+', 2.3),
(149, 'S9008', 'CSC243SE2', 2, 'B-', 2.7),
(150, 'S9009', 'CSC243SE2', 2, 'C', 2),
(151, 'S9010', 'CSC243SE2', 2, 'C', 2),
(152, 'S9011', 'CSC243SE2', 2, 'B', 3),
(153, 'S9012', 'CSC243SE2', 2, 'B', 3),
(154, 'S9013', 'CSC243SE2', 2, 'B+', 3.3),
(155, 'S9014', 'CSC243SE2', 2, 'B+', 3.3),
(156, 'S9015', 'CSC243SE2', 2, 'C+', 2.3),
(157, 'S9016', 'CSC243SE2', 2, 'D+', 1.3),
(158, 'S9017', 'CSC243SE2', 2, 'C-', 1.7),
(159, 'S9018', 'CSC243SE2', 2, 'C-', 1.7),
(160, 'S8693', 'CSC243SE2', 2, 'NA', 0),
(161, 'S9019', 'CSC243SE2', 2, 'E', 0),
(162, 'S9020', 'CSC243SE2', 2, 'C+', 2.3),
(163, 'S8993', 'CSC246SE2', 2, 'B', 3),
(164, 'S8996', 'CSC246SE2', 2, 'A+', 4),
(165, 'S8997', 'CSC246SE2', 2, 'D+', 1.3),
(166, 'S8998', 'CSC246SE2', 2, 'B+', 3.3),
(167, 'S8999', 'CSC246SE2', 2, 'A', 4),
(168, 'S9000', 'CSC246SE2', 2, 'B', 3),
(169, 'S9001', 'CSC246SE2', 2, 'D+', 1.3),
(170, 'S9002', 'CSC246SE2', 2, 'B-', 2.7),
(171, 'S9003', 'CSC246SE2', 2, 'A-', 3.7),
(172, 'S9004', 'CSC246SE2', 2, 'A-', 3.7),
(173, 'S9005', 'CSC246SE2', 2, 'E', 0),
(174, 'S9006', 'CSC246SE2', 2, 'D+', 1.3),
(175, 'S9007', 'CSC246SE2', 2, 'B', 3),
(176, 'S9008', 'CSC246SE2', 2, 'B+', 3.3),
(177, 'S9009', 'CSC246SE2', 2, 'C', 2),
(178, 'S9010', 'CSC246SE2', 2, 'B', 3),
(179, 'S9011', 'CSC246SE2', 2, 'B+', 3.3),
(180, 'S9012', 'CSC246SE2', 2, 'B', 3),
(181, 'S9013', 'CSC246SE2', 2, 'D+', 1.3),
(182, 'S9014', 'CSC246SE2', 2, 'E', 0),
(183, 'S9015', 'CSC246SE2', 2, 'B', 3),
(184, 'S9016', 'CSC246SE2', 2, 'E', 0),
(185, 'S9017', 'CSC246SE2', 2, 'B+', 3.3),
(186, 'S9018', 'CSC246SE2', 2, 'B', 3),
(187, 'S8693', 'CSC246SE2', 2, 'NA', 0),
(188, 'S9019', 'CSC246SE2', 2, 'E', 0),
(189, 'S9020', 'CSC246SE2', 2, 'B', 3),
(190, 'S8732', 'CSC235GE2', 2, 'A-', 3.7),
(191, 'S8733', 'CSC235GE2', 2, 'B+', 3.3),
(192, 'S8734', 'CSC235GE2', 2, 'A-', 3.7),
(193, 'S8735', 'CSC235GE2', 2, 'A+', 4),
(194, 'S8736', 'CSC235GE2', 2, 'A+', 4),
(195, 'S8724', 'CSC235GE2', 2, 'B+', 3.3),
(196, 'S8737', 'CSC235GE2', 2, 'A', 4),
(197, 'S8739', 'CSC235GE2', 2, 'A+', 4),
(198, 'S8740', 'CSC235GE2', 2, 'A', 4),
(199, 'S8725', 'CSC235GE2', 2, 'A-', 3.7),
(200, 'S8742', 'CSC235GE2', 2, 'A-', 3.7),
(201, 'S8744', 'CSC235GE2', 2, 'A-', 3.7),
(202, 'S8745', 'CSC235GE2', 2, 'A-', 3.7),
(203, 'S8748', 'CSC235GE2', 2, 'B-', 2.7),
(204, 'S8750', 'CSC235GE2', 2, 'A-', 3.7),
(205, 'S8751', 'CSC235GE2', 2, 'A+', 4),
(206, 'S8727', 'CSC235GE2', 2, 'B+', 3.3),
(207, 'S8752', 'CSC235GE2', 2, 'B+', 3.3),
(208, 'S8728', 'CSC235GE2', 2, 'A', 4),
(209, 'S8754', 'CSC235GE2', 2, 'A', 4),
(210, 'S8755', 'CSC235GE2', 2, 'A', 4),
(211, 'S8757', 'CSC235GE2', 2, 'B+', 3.3),
(212, 'S8760', 'CSC235GE2', 2, 'C', 2),
(213, 'S8730', 'CSC235GE2', 2, 'B+', 3.3),
(214, 'S8722', 'CSC235GE2', 2, 'A-', 3.7),
(215, 'S8723', 'CSC235GE2', 2, 'C', 2),
(216, 'S8747', 'CSC235GE2', 2, 'A+', 4),
(217, 'S8749', 'CSC235GE2', 2, 'B+', 3.3),
(218, 'S8784', 'CSC235GE2', 2, 'B-', 2.7),
(219, 'S8841', 'CSC235GE2', 2, 'B+', 3.3),
(220, 'S8765', 'CSC235GE2', 2, 'A+', 4),
(221, 'S8767', 'CSC235GE2', 2, 'A+', 4),
(222, 'S8768', 'CSC235GE2', 2, 'B-', 2.7),
(223, 'S8769', 'CSC235GE2', 2, 'A-', 3.7),
(224, 'S8770', 'CSC235GE2', 2, 'A+', 4),
(225, 'S8772', 'CSC235GE2', 2, 'A+', 4),
(226, 'S8773', 'CSC235GE2', 2, 'B+', 3.3),
(227, 'S8774', 'CSC235GE2', 2, 'A', 4),
(228, 'S8775', 'CSC235GE2', 2, 'B', 3),
(229, 'S8776', 'CSC235GE2', 2, 'B', 3),
(230, 'S8777', 'CSC235GE2', 2, 'A', 4),
(231, 'S8778', 'CSC235GE2', 2, 'A-', 3.7),
(232, 'S8779', 'CSC235GE2', 2, 'A', 4),
(233, 'S8780', 'CSC235GE2', 2, 'A+', 4),
(234, 'S8781', 'CSC235GE2', 2, 'A', 4),
(235, 'S8782', 'CSC235GE2', 2, 'A-', 3.7),
(236, 'S8783', 'CSC235GE2', 2, 'A', 4),
(238, 'S8785', 'CSC235GE2', 2, 'A-', 3.7),
(239, 'S8786', 'CSC235GE2', 2, 'B', 3),
(240, 'S8788', 'CSC235GE2', 2, 'A+', 4),
(241, 'S8789', 'CSC235GE2', 2, 'B+', 3.3),
(242, 'S8790', 'CSC235GE2', 2, 'B+', 3.3),
(243, 'S8791', 'CSC235GE2', 2, 'B', 3),
(244, 'S8792', 'CSC235GE2', 2, 'B', 3),
(245, 'S8793', 'CSC235GE2', 2, 'A+', 4),
(246, 'S8794', 'CSC235GE2', 2, 'A-', 3.7),
(247, 'S8795', 'CSC235GE2', 2, 'B+', 3.3),
(248, 'S8796', 'CSC235GE2', 2, 'C', 2),
(249, 'S8797', 'CSC235GE2', 2, 'A-', 3.7),
(250, 'S8798', 'CSC235GE2', 2, 'B+', 3.3),
(251, 'S8799', 'CSC235GE2', 2, 'A', 4);

-- --------------------------------------------------------

--
-- Table structure for table `seatwork`
--

CREATE TABLE `seatwork` (
  `id` int(11) NOT NULL,
  `term` varchar(30) NOT NULL,
  `week` varchar(30) NOT NULL,
  `idnumber` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `score` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seatwork`
--

INSERT INTO `seatwork` (`id`, `term`, `week`, `idnumber`, `subject`, `score`) VALUES
(1, 'Prelim', '1', '09-0001', 'ENG 03', '90'),
(2, 'Prelim', '1', '09-0002', 'ENG 03', '90'),
(3, 'Prelim', '2', '09-0001', 'ENG 03', '98'),
(4, 'Prelim', '2', '09-0002', 'ENG 03', '98'),
(5, 'Prelim', '3', '09-0001', 'ENG 03', '89'),
(6, 'Prelim', '3', '09-0002', 'ENG 03', '89'),
(7, 'Prelim', '4', '09-0001', 'ENG 03', '88'),
(8, 'Prelim', '4', '09-0002', 'ENG 03', '88'),
(9, 'Prelim', '5', '09-0001', 'ENG 03', '99'),
(10, 'Prelim', '5', '09-0002', 'ENG 03', '99'),
(11, 'Prelim', '6', '09-0001', 'ENG 03', '88'),
(12, 'Prelim', '6', '09-0002', 'ENG 03', '88'),
(13, 'Midterm', '7', '09-0001', 'ENG 03', '99'),
(14, 'Midterm', '7', '09-0002', 'ENG 03', '99'),
(15, 'Midterm', '8', '09-0001', 'ENG 03', '99'),
(16, 'Midterm', '8', '09-0002', 'ENG 03', '99'),
(17, 'Midterm', '9', '09-0001', 'ENG 03', '88'),
(18, 'Midterm', '9', '09-0002', 'ENG 03', '88'),
(19, 'Midterm', '10', '09-0001', 'ENG 03', '88'),
(20, 'Midterm', '10', '09-0002', 'ENG 03', '88'),
(21, 'Midterm', '11', '09-0001', 'ENG 03', '99'),
(22, 'Midterm', '11', '09-0002', 'ENG 03', '99'),
(23, 'Midterm', '12', '09-0001', 'ENG 03', '77'),
(24, 'Midterm', '12', '09-0002', 'ENG 03', '77'),
(25, 'Endterm', '13', '09-0001', 'ENG 03', '88'),
(26, 'Endterm', '13', '09-0002', 'ENG 03', '88'),
(27, 'Endterm', '14', '09-0001', 'ENG 03', '99'),
(28, 'Endterm', '14', '09-0002', 'ENG 03', '99'),
(29, 'Endterm', '15', '09-0001', 'ENG 03', '88'),
(30, 'Endterm', '15', '09-0002', 'ENG 03', '88'),
(31, 'Endterm', '16', '09-0001', 'ENG 03', '88'),
(32, 'Endterm', '16', '09-0002', 'ENG 03', '88'),
(33, 'Endterm', '17', '09-0001', 'ENG 03', '88'),
(34, 'Endterm', '17', '09-0002', 'ENG 03', '88'),
(35, 'Endterm', '18', '09-0001', 'ENG 03', '88'),
(36, 'Endterm', '18', '09-0002', 'ENG 03', '88'),
(37, 'Prelim', '1', 'p', 'ENG-000', '99'),
(38, 'Prelim', '2', 'p', 'ENG-000', '88'),
(39, 'Prelim', '3', 'p', 'ENG-000', '77'),
(40, 'Prelim', '4', 'p', 'ENG-000', '99'),
(41, 'Prelim', '5', 'p', 'ENG-000', '89'),
(42, 'Prelim', '6', 'p', 'ENG-000', '98'),
(43, 'Midterm', '7', 'p', 'ENG-000', '90'),
(44, 'Midterm', '8', 'p', 'ENG-000', '89'),
(45, 'Midterm', '9', 'p', 'ENG-000', '88'),
(46, 'Midterm', '10', 'p', 'ENG-000', '70'),
(47, 'Midterm', '11', 'p', 'ENG-000', '89'),
(48, 'Midterm', '12', 'p', 'ENG-000', '99'),
(49, 'Endterm', '13', 'p', 'ENG-000', '88'),
(50, 'Endterm', '14', 'p', 'ENG-000', '90'),
(51, 'Endterm', '15', 'p', 'ENG-000', '97'),
(52, 'Endterm', '16', 'p', 'ENG-000', '90'),
(53, 'Endterm', '17', 'p', 'ENG-000', '99'),
(54, 'Endterm', '18', 'p', 'ENG-000', '89');

-- --------------------------------------------------------

--
-- Table structure for table `seatworkpercentage`
--

CREATE TABLE `seatworkpercentage` (
  `id` int(11) NOT NULL,
  `tid` varchar(30) NOT NULL,
  `spercentage` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seatworkpercentage`
--

INSERT INTO `seatworkpercentage` (`id`, `tid`, `spercentage`) VALUES
(1, '00-2222', '.10'),
(2, 'TID-RXK0RUM0', '.10'),
(3, 'TID-IHS3ZDS5', '.10');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `RegNo` varchar(13) NOT NULL,
  `indNo` varchar(6) NOT NULL,
  `prefix` varchar(5) CHARACTER SET utf8 NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `course` varchar(50) NOT NULL,
  `level` varchar(2) NOT NULL,
  `yearcd` varchar(10) NOT NULL,
  `subject_combination` varchar(3) NOT NULL,
  `special` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `RegNo`, `indNo`, `prefix`, `fname`, `lname`, `gender`, `address`, `email`, `phone`, `password`, `course`, `level`, `yearcd`, `subject_combination`, `special`) VALUES
(151, '2014SP142', 'S8786', 'Mr', 'kasun', 'suminda', 'Male', 'negombo', 'kasunsuminda94@gmail.com', 0, 'c69bfdd039d04e7392ec89dc70ae0d73', 'physical', '3M', '', '', 'Y'),
(152, '2014SP115', 'S8747', 'Mr', 'Gayan', 'jayamal', 'Male', 'Matale', 'jayamalgayan@gmail.com', 767881226, 'a2a2970ab7771f426a20e0ac2c9aed71', 'physical', '3G', '', 'CSC', 'Y'),
(155, '2014csc039', 'S9017', 'Mr', 'Ruchira Sachinthana', 'Manathunga', 'Male', '"Jayasewana",Kosgahathanna,Mirahawatta', 'rucsacman@gmail.com', 715531479, 'baa2133a166353138c8a5ec66f17286e', 'Computer Science', '3S', '', 'CSC', 'Y'),
(156, '2014sp030', 'S8724', 'Mr', 'janaka ', 'rajapaksha', 'Male', 'no 11 kokuvill jaffna', 'janapbrajapaksha@gmail.com', 0, 'baa2133a166353138c8a5ec66f17286e', 'physical', '3G', '', 'CSC', 'N'),
(157, '2014csc021', 'S9001', 'Mr', 'Chamara', 'Madhusanka', 'Male', 'Nikaweratiya', 'cmbandara31@gmail.com', 711588766, 'baa2133a166353138c8a5ec66f17286e', 'Computer Science', '3S', '', 'CSC', 'Y'),
(158, '2014csc032', 'S9010', 'Mr', 'dinusha ', 'lakpriya', 'Male', 'pallama', 'dinushalakrpiya5@gmail.com', 719252909, 'baa2133a166353138c8a5ec66f17286e', 'Computer Science', '3s', '', 'csc', 'Y'),
(159, '2014csc027', 'S9007', 'Mr', 'Saditha', 'Udayanga', 'Male', 'badulla', 'tmsaditha@gmail.com', 717893455, 'baa2133a166353138c8a5ec66f17286e', 'Computer Science', '3S', '', 'csc', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `studentsubject`
--

CREATE TABLE `studentsubject` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentsubject`
--

INSERT INTO `studentsubject` (`id`, `student_id`, `subject_id`, `subject`, `section`, `course`, `level`) VALUES
(79, 35, 41, '', '', '', '1G'),
(80, 35, 24, '', '', '', '1G'),
(81, 35, 25, '', '', '', '1G'),
(82, 35, 67, '', '', '', '1G'),
(91, 1, 8, '', '', '', '2G'),
(92, 35, 19, '', '', '', '2G'),
(93, 35, 45, '', '', '', '2G'),
(94, 35, 46, '', '', '', '2G'),
(104, 36, 21, '', '', '', '1G'),
(105, 36, 41, '', '', '', '1G'),
(106, 36, 24, '', '', '', '1G'),
(107, 36, 21, '', '', '', '1G'),
(108, 36, 41, '', '', '', '1G'),
(109, 36, 24, '', '', '', '1G'),
(110, 36, 21, '', '', '', '1G'),
(111, 36, 41, '', '', '', '1G'),
(112, 36, 24, '', '', '', '1G'),
(113, 1, 1, '', '', '', '1G'),
(114, 1, 2, '', '', '', '1G');

-- --------------------------------------------------------

--
-- Table structure for table `student_combination`
--

CREATE TABLE `student_combination` (
  `com_id` varchar(50) NOT NULL,
  `RegNo` varchar(10) NOT NULL,
  `preference_order` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_combination`
--

INSERT INTO `student_combination` (`com_id`, `RegNo`, `preference_order`) VALUES
('8', '2014sp014', 1),
('10', '2014sp014', 2),
('16', '2014sp014', 3),
('4', '2011csc002', 1),
('16', '2011csc002', 2),
('4', '2011csc002', 3);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `code` varchar(15) NOT NULL,
  `title` text NOT NULL,
  `level` varchar(3) NOT NULL,
  `credit` int(1) NOT NULL,
  `lecHrs` int(2) NOT NULL,
  `prHrs` int(3) NOT NULL,
  `semi` int(2) NOT NULL,
  `lecturer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `code`, `title`, `level`, `credit`, `lecHrs`, `prHrs`, `semi`, `lecturer`) VALUES
(1, 'BOT101GC2', 'Cell Biology', '1G', 2, 22, 24, 1, ''),
(2, 'BOT102GC2', 'Prokaryotic organisms', '1G', 2, 22, 24, 1, ''),
(3, 'BOT103GC2', 'Biology of Thallophytes & Fungi', '1G', 2, 22, 24, 0, ''),
(4, 'BOT104GC2', 'Bryophytes and Lower vascular plants', '1G', 2, 22, 24, 2, ''),
(5, 'ZOO101GC2', 'Origin of Life,Evolutionary Biology and Systematics', '1G', 2, 22, 24, 1, ''),
(6, 'ZOO102GC2', 'Cell Biology and Systematics', '1G', 2, 22, 24, 2, ''),
(7, 'ZOO103GC2', 'Development Biology', '1G', 2, 22, 24, 3, ''),
(8, 'ZOO104GC2', 'Genetics', '1G', 2, 22, 24, 0, ''),
(9, 'FSC101GC2', 'World & Sri Lanka', '1G', 2, 22, 24, 0, ''),
(10, 'FSC102GC2', 'Marine environment & Oceanography', '1G', 2, 22, 24, 0, ''),
(11, 'FSC103GC2', 'Aquatic resources', '1G', 2, 22, 24, 0, ''),
(12, 'FSC104GC2', 'Aqatic animals', '1G', 2, 22, 24, 0, ''),
(13, 'CHE101GC2', 'General Chemistry and chemistry of main group elements', '1G', 2, 30, 0, 0, ''),
(14, 'CHE102GC2', 'Introductory Physical Chemistry', '1G', 2, 30, 0, 0, ''),
(15, 'CHE103GC2', 'Stereochemistry and Reaction Mechanisms', '1G', 2, 30, 0, 0, ''),
(16, 'CHE105GC2', 'Practical Chemistry I', '1G', 2, 0, 90, 0, ''),
(17, 'CSC101GC2', 'Foundation of Computer Science', '1G', 2, 30, 0, 0, ''),
(18, 'CSC102GC2', 'Object Oriented Programming', '1G', 2, 30, 0, 2, ''),
(20, 'CSC105GC2', 'Computer Networks and Internet Computing', '1G', 2, 30, 0, 0, ''),
(21, 'PHY101GC2', 'Practical Physics I', '1G', 2, 0, 90, 0, ''),
(22, 'PHY102GC3', 'Mechanics,Relativity and Structure of Matter', '1G', 3, 45, 0, 0, ''),
(23, 'PHY103GC3', 'Fields,Vibrations and waves', '1G', 3, 45, 0, 0, ''),
(24, 'PMM101GC2', 'Set Theory', '1G', 2, 30, 0, 0, ''),
(25, 'PMM102GC2', 'Limit Process', '1G', 2, 30, 0, 0, ''),
(26, 'PMM103GC2', 'Algebra', '1G', 2, 30, 0, 0, ''),
(27, 'PMM104GC2', 'Calculus', '1G', 2, 30, 0, 0, ''),
(28, 'AMM101GC2', 'Vector Analysis', '1G', 2, 30, 0, 0, ''),
(29, 'AMM102GC2', 'Dynamics', '1G', 2, 30, 0, 0, ''),
(30, 'AMM103GC2', 'Ordinary differential equations', '1G', 2, 27, 6, 0, ''),
(31, 'AMM104GC2', 'Matrics & statics', '1G', 2, 30, 0, 0, ''),
(32, 'STA104GC3', 'Probability Theory', '1G', 3, 45, 0, 0, ''),
(33, 'STA105GC3', 'Basic Statistical Interference', '1G', 3, 40, 10, 0, ''),
(34, 'STA106GC2', 'Applied Statistics', '1G', 2, 25, 10, 0, ''),
(35, 'ENG101GA0', 'English Language I', '1G', 0, 45, 0, 0, ''),
(36, 'SLS102GA0', 'Srilankan Studies and Social Harmony', '1G', 0, 15, 0, 0, ''),
(37, 'MBS103GA2', 'Mathematics for Biological Science students', '1G', 2, 30, 0, 0, ''),
(38, 'BPS104GA2', 'Biology for Physical Science students', '1G', 2, 30, 0, 0, ''),
(39, 'COM105GA2', 'Computer Literacy', '1G', 2, 20, 20, 0, ''),
(40, 'SAS106GA2', 'Science and Society', '1G', 2, 30, 0, 0, ''),
(41, 'CSC201GC2', 'Data Structures and Algorithms', '2G', 2, 30, 0, 0, ''),
(42, 'CSC202GC2', 'Database Management Systems', '2G', 2, 30, 0, 0, ''),
(43, 'CSC203GC2', 'Software Engineering', '2G', 2, 30, 0, 0, ''),
(44, 'CSC204GC2', 'Practical Computing II', '2G', 2, 0, 90, 0, ''),
(45, 'CSC221GE2', 'Numerical Computing', '2G', 2, 30, 0, 0, ''),
(46, 'CSC222GE2', 'Programming in Logic', '2G', 2, 30, 0, 0, ''),
(47, 'CSC201SC3', 'Principles of Computer Architecture', '2S', 3, 30, 30, 0, ''),
(48, 'CSC202SC3', 'Concept of Programming Languages', '2S', 3, 30, 30, 0, ''),
(49, 'CSC203SC3', 'Cryptography and Data Security', '2S', 3, 30, 30, 0, ''),
(50, 'CSC204SC3', 'E-technologies', '2S', 3, 30, 30, 0, ''),
(51, 'CSC301GC2', 'Rapid Application Development', '3G', 2, 30, 0, 0, ''),
(52, 'CSC302GC2', 'Internet Programming', '3G', 2, 30, 0, 0, ''),
(53, 'CSC303GC2', 'Operating Syatem', '3G', 2, 30, 0, 0, ''),
(54, 'CSC304GC2', 'Practical Computing III', '3G', 2, 30, 0, 0, ''),
(55, 'CSC321GE2', 'Computer Graphics', '3G', 2, 30, 0, 0, ''),
(56, 'CSC322GE2', 'Multimedia Technologies', '3G', 2, 30, 0, 0, ''),
(57, 'CSC301MC3', 'Advanced database design and systems', '3M', 3, 45, 0, 0, ''),
(58, 'CSC302MC3', 'Artificial Intelligence I', '3M', 3, 45, 0, 0, ''),
(59, 'CSC303MC4', 'Data Communication and computer networks', '3M', 4, 60, 0, 0, ''),
(60, 'CSC304MC3', 'Digital Image Processing', '1G', 3, 45, 0, 0, ''),
(61, 'CSC305MC3', 'Practical Computing 3M', '3M', 3, 0, 90, 0, ''),
(62, 'CSC401MC4', 'Advanced algorithms', '4M', 4, 60, 0, 0, ''),
(63, 'CSC402MC2', 'Artificial Intelligence II', '4M', 2, 30, 0, 0, ''),
(64, 'CSC403MC4', 'Numerical linear algebra and solutions of differential equation', '4M', 4, 60, 0, 0, ''),
(65, 'CSC404MC4', 'Project', '4M', 4, 60, 0, 0, ''),
(66, 'CSC405MC3', 'Parallel Computing', '4M', 3, 45, 0, 0, ''),
(67, 'CSC406MC3', 'System design,analysis and project management', '4M', 3, 45, 0, 0, ''),
(68, 'CSC407MC4', 'Data mining and Machine', '4M', 4, 60, 0, 0, ''),
(69, 'CSC421ME3', 'Compiler design', '4M', 3, 45, 0, 0, ''),
(70, 'CSC422ME3', 'Mobile Computing', '4M', 3, 45, 0, 0, ''),
(71, 'PMM221GE2', 'Advanced Calculus', '2G', 2, 30, 0, 0, ''),
(72, 'PMM222GE2', 'Number Theory and cyptography', '2G', 2, 30, 0, 0, ''),
(73, 'STA201GC4', 'Statistical Theory and Methods', '2G', 4, 60, 0, 0, ''),
(74, 'STA202GC4', 'Design of Experiments', '2G', 4, 30, 0, 0, ''),
(75, 'STA222GE2', 'Statistical Modeling', '2G', 2, 30, 0, 0, ''),
(76, 'STA302GC4', 'Data Analysis', '3G', 4, 36, 48, 0, ''),
(77, 'AMM116', 'Vecs', '', 2, 30, 0, 0, ''),
(78, 'CSC234SC3', 'Computer Architecture', '2S', 3, 30, 0, 2, ''),
(79, 'CSC236SC2', 'Operating System', '2S', 2, 30, 0, 2, 'Dr.A.Ramanan'),
(80, 'CSC237SC3', 'Concepts of Programming Language', '2S', 3, 30, 0, 2, ''),
(81, 'CSC238SC2', 'Data Stuctures And Algorithm 2', '2S', 2, 30, 0, 2, 'Dr.K.Thabotharan'),
(82, 'CSC241SC2', 'Group project 1', '2S', 2, 0, 90, 2, 'Mr.K.Sarveswaran'),
(83, 'CSC243SE2', 'Numerical Method', '2S', 2, 30, 0, 2, 'Mr.S.Suthakar'),
(84, 'CSC246SE2', 'Multimedia Technologies', '2S', 2, 30, 0, 2, ''),
(85, 'CSC235GE2', 'Group project 1', '2G', 2, 0, 90, 2, 'Mr.K.Sarveswaran');

-- --------------------------------------------------------

--
-- Table structure for table `subjectdate`
--

CREATE TABLE `subjectdate` (
  `id` int(11) NOT NULL,
  `semi` int(11) NOT NULL,
  `fromdt` date NOT NULL,
  `todt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectdate`
--

INSERT INTO `subjectdate` (`id`, `semi`, `fromdt`, `todt`) VALUES
(2, 2, '2014-01-01', '2014-08-01'),
(12, 1, '2014-01-14', '2014-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `subject_com`
--

CREATE TABLE `subject_com` (
  `id` int(10) NOT NULL,
  `subject1` varchar(50) NOT NULL,
  `subject2` varchar(50) NOT NULL,
  `subject3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_com`
--

INSERT INTO `subject_com` (`id`, `subject1`, `subject2`, `subject3`) VALUES
(4, 'Botany', 'Zoology', 'Chemistry'),
(5, 'Botany', 'Zoology', 'Fisheries'),
(6, 'Botany', 'Chemistry', 'Fisheries'),
(7, 'Chemistry', 'Zoology', 'Fisheries'),
(8, 'Pure_Maths', 'Applied_Maths', 'Statistics'),
(9, 'Pure_Maths', 'Applied_Maths', 'Computer_Science'),
(10, 'Pure_Maths', 'Applied_Maths', 'Physics'),
(11, 'Pure_Maths', 'Applied_Maths', 'Chemistry'),
(12, 'Statistics', 'Pure_Maths', 'Chemistry'),
(13, 'Statistics', 'Pure_Maths', 'Compute_Science'),
(14, 'Statistics', 'Applied_Maths', 'Chemistry'),
(15, 'Statistics', 'Applied_Maths', 'Physics'),
(16, 'Computer_Science', 'Pure_Maths', 'Physics'),
(17, 'Computer_Science', 'Applied_Maths', 'Physics'),
(18, 'Computer_Science', 'Applied_Maths', 'Chemistry'),
(19, 'computer Scince', 'Electronic', 'PMM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `RegNo` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `position` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `RegNo`, `password`, `position`) VALUES
(1, '2011csc002', '6bf733bb7f81e866306e9b5f012419cb', 'student'),
(2, '2011csc003', '4158f6d19559955bae372bb00f6204e4', 'student'),
(3, '2011csc004', 'e9287a53b94620249766921107fe70a3', 'student'),
(4, '2011csc005', 'c02d0450cdd75ce7595f5eaeb5f041a3', 'student'),
(5, 'admin', 'c93ccd78b2076528346216b3b2f701e6', 'admin'),
(6, 'head', '7b8b2f694135e2a4cf5515175c4bfe51', 'hod'),
(7, 'UID-TD30RRIT', 'qAEiqAlHH', 'hod'),
(8, 'UID-2MEVCA7R', 'BpBDEfzpk', 'hod'),
(9, 'UID-4V2JQ74W', 'IKzdfkxDj', 'hod'),
(10, 'UID-JMRBJ6XA', 'wguzevfKg', 'hod'),
(11, 'UID-6MWKABEZ', 'EHkDYfnCE', 'hod'),
(12, 'UID-G0TCS6O4', 'KjJZChmnI', 'hod'),
(13, 'UID-OQZ7JTUB', 'fpZJqr0dm', 'hod'),
(14, 'UID-VA7AISYX', 'kiBxrGKkm', 'hod'),
(15, 'UID-UMQUQYPY', 'juAfvhdnD', 'hod'),
(16, 'UID-ATEZOXGR', 'JEuFiCtrs', 'hod'),
(17, 'UID-H04UUNQ4', 'ycsjwhuKE', 'hod'),
(18, 'UID-TFKC3K7K', 'noirnFgdK', 'hod'),
(19, 'UID-AI3CWX22', 'IqpDEunGX', 'hod'),
(20, 'UID-RSLNNLHK', 'mwZvjHdKv', 'hod'),
(21, 'UID-DNIJJJPT', 'YIxYGGswx', 'hod'),
(101, '2014sp141', '202cb962ac59075b964b07152d234b70', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acyear`
--
ALTER TABLE `acyear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acyearsubject`
--
ALTER TABLE `acyearsubject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examapp`
--
ALTER TABLE `examapp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examdate`
--
ALTER TABLE `examdate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mysubjects`
--
ALTER TABLE `mysubjects`
  ADD PRIMARY KEY (`StudentId`,`SubCode`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`,`inum`,`unit`);

--
-- Indexes for table `seatwork`
--
ALTER TABLE `seatwork`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seatworkpercentage`
--
ALTER TABLE `seatworkpercentage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`,`indNo`),
  ADD UNIQUE KEY `RegNo` (`RegNo`);

--
-- Indexes for table `studentsubject`
--
ALTER TABLE `studentsubject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `subjectdate`
--
ALTER TABLE `subjectdate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_com`
--
ALTER TABLE `subject_com`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `RegNo` (`RegNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acyear`
--
ALTER TABLE `acyear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `acyearsubject`
--
ALTER TABLE `acyearsubject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=388;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `examapp`
--
ALTER TABLE `examapp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;
--
-- AUTO_INCREMENT for table `examdate`
--
ALTER TABLE `examdate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;
--
-- AUTO_INCREMENT for table `seatwork`
--
ALTER TABLE `seatwork`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `seatworkpercentage`
--
ALTER TABLE `seatworkpercentage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `studentsubject`
--
ALTER TABLE `studentsubject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `subjectdate`
--
ALTER TABLE `subjectdate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `subject_com`
--
ALTER TABLE `subject_com`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
