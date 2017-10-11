-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2015 at 03:36 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `acyear`
--

CREATE TABLE IF NOT EXISTS `acyear` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yearcd` varchar(10) NOT NULL,
  `fromdt` date NOT NULL,
  `todt` date NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `acyear`
--

INSERT INTO `acyear` (`id`, `yearcd`, `fromdt`, `todt`, `status`) VALUES
(1, '2010', '0000-00-00', '2013-03-29', 'INACTIVE'),
(4, '2011', '2013-04-22', '2014-03-28', 'INACTIVE'),
(5, '2013', '2014-04-07', '2015-04-17', 'ACTIVE'),
(7, '2014', '2014-04-26', '2015-04-09', 'INACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `acyearsubject`
--

CREATE TABLE IF NOT EXISTS `acyearsubject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yearcd` varchar(10) NOT NULL,
  `subjectcd` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=388 ;

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

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `RegNo` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `RegNo`, `password`, `fname`, `lname`, `email`, `status`, `gender`, `phone`) VALUES
(1, 'admin', 'c93ccd78b2076528346216b3b2f701e6', 'Registrar', 'Assistant', 'admin@unistudentguider.com', 'single', 'Male', 772478150);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coursecode` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `coursecode`, `description`) VALUES
(3, 'CSC', 'ComputerScience'),
(7, 'SP', 'PhysicalScience'),
(8, 'SB', 'BioScience');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `inum` int(4) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `credit` int(1) NOT NULL,
  `grade` varchar(3) NOT NULL,
  `points` float NOT NULL,
  PRIMARY KEY (`id`,`inum`,`unit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=49;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `inum`, `unit`, `credit`, `grade`, `points`) VALUES
(1, 7985, 'BPS104GA2', 2, 'B+', 3.3),
(2, 7985, 'COM105GA2', 2, 'C+', 2.3),
(3, 7985, 'CSC101GC2', 2, 'A-', 3.7),
(4, 7985, 'CSC102GC2', 2, 'B+', 3.3),
(5, 7985, 'CSC104GC2', 2, 'B-', 2.7),
(6, 7985, 'CSC105GC2', 2, 'B', 3),
(7, 7985, 'ENG101GA0', 0, 'B+', 3.3),
(8, 7985, 'PMM101GC2', 2, 'A-', 3.7),
(9, 7985, 'PMM102GC2', 2, 'B+', 3.3),
(10, 7985, 'PMM103GC2', 2, 'B-', 2.7),
(11, 7985, 'PMM104GC2', 2, 'C', 2),
(12, 7985, 'SAS106GA2', 2, 'B', 3),
(13, 7985, 'SLS102GA0', 0, 'B-', 2.7),
(14, 7985, 'STA104GC3', 3, 'B', 3),
(15, 7985, 'STA105GC3', 3, 'B', 3),
(16, 7985, 'STA106GC2', 2, 'B+', 3.3),
(17, 7986, 'BPS104GA2', 2, 'B', 3),
(18, 7986, 'COM105GA2', 2, 'B+', 3.3),
(19, 7986, 'CSC101GC2', 2, 'A-', 3.7),
(20, 7986, 'CSC102GC2', 2, 'B', 3),
(21, 7986, 'CSC104GC2', 2, 'B+', 3.3),
(22, 7986, 'CSC105GC2', 2, 'B+', 3.3),
(23, 7986, 'ENG101GA0', 0, 'A-', 3.7),
(24, 7986, 'PMM101GC2', 2, 'A-', 3.7),
(25, 7986, 'PMM102GC2', 2, 'A+', 4),
(26, 7986, 'PMM103GC2', 2, 'B', 3),
(27, 7986, 'PMM104GC2', 2, 'C+', 2.3),
(28, 7986, 'SAS106GA2', 2, 'B', 3),
(30, 7986, 'SLS102GA0', 0, 'B', 3),
(31, 7986, 'STA104GC3', 3, 'A-', 3.7),
(32, 7986, 'STA105GC3', 3, 'B', 3),
(33, 7986, 'STA106GC2', 2, 'A', 4),
(34, 8168, 'AMM101GC2', 2, 'C+', 2.3),
(35, 8168, 'AMM102GC2', 2, 'B', 3),
(36, 8168, 'AMM103GC2', 2, 'C+', 2.3),
(37, 8168, 'AMM104GC2', 2, 'B-', 2.7),
(38, 8168, 'BPS104GA2', 2, 'D', 1),
(39, 8168, 'COM105GA2', 2, 'D+', 1.3),
(40, 8168, 'ENG101GA0', 0, 'C', 2),
(41, 8168, 'PHY101GC2', 2, 'C-', 1.7),
(42, 8168, 'PHY102GC3', 3, 'C+', 2.3),
(43, 8168, 'PHY103GC3', 3, 'B+', 3.3),
(44, 8168, 'SAS106GA2', 2, 'B', 3),
(45, 8168, 'SLS102GA0', 0, 'E', 0),
(46, 8168, 'STA104GC3', 3, 'E', 0),
(47, 8168, 'STA105GC3', 3, 'D', 1),
(48, 8168, 'STA106GC2', 2, 'D', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `did` text NOT NULL,
  `discription` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `RegNo` varchar(30) NOT NULL,
  `term` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `score` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

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

CREATE TABLE IF NOT EXISTS `examapp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `regno` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL,
  `subjectcode` varchar(20) NOT NULL,
  `category` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=182 ;

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

CREATE TABLE IF NOT EXISTS `examdate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `semi` int(11) NOT NULL,
  `fromdt` date NOT NULL,
  `todt` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `examdate`
--

INSERT INTO `examdate` (`id`, `semi`, `fromdt`, `todt`) VALUES
(2, 2, '2014-01-01', '2014-08-01'),
(21, 1, '2014-01-14', '2014-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE IF NOT EXISTS `hod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `RegNo` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`id`, `fname`, `lname`, `email`, `RegNo`, `password`, `department`, `gender`, `phone`) VALUES
(3, 'Dr. E.Y.A.', 'Charles', 'charles.ey@jfn.ac.lk', 'head', '7b8b2f694135e2a4cf5515175c4bfe51', 'Computer Science', 'Male', 771234567),
(6, 'Prof. R.', 'Vigneswaran', 'vicky@jfn.ac.lk', 'UID-2MEVCA7R', 'BpBDEfzpk', 'Mathematics', '', 0),
(9, 'Prof.K.', 'Kandasamy', 'kkanda@jfn.ac.lk', 'UID-6MWKABEZ', 'EHkDYfnCE', 'Physics', '', 0),
(10, 'Dr.J.P.J.', 'Jeyadevan', 'prince@jfn.ac.lk', 'UID-G0TCS6O4', 'KjJZChmnI', 'Chemistry', '', 0),
(11, 'Mrs.N.', 'Rajan', '', 'UID-OQZ7JTUB', 'fpZJqr0dm', 'Zoology', '', 0),
(12, 'Mrs.N.', 'Ravimannan', 'nravi@jfn.ac.lk', 'UID-VA7AISYX', 'kiBxrGKkm', 'Botany', '', 0),
(13, 'Dr.(Mrs).S.', 'Kuganathan', 'sivashanthini@gmail.com', 'UID-UMQUQYPY', 'juAfvhdnD', 'Fisheries', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `RegNo` varchar(20) NOT NULL,
  `login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `logout` datetime NOT NULL,
  `lname` text NOT NULL,
  `location` text NOT NULL,
  `position` text NOT NULL,
  `action` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=138 ;

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
(137, 'admin', '2015-02-06 17:39:57', '0000-00-00 00:00:00', 'Assistant', '', 'admin', 'login');

-- --------------------------------------------------------

--
-- Table structure for table `mysubjects`
--

CREATE TABLE IF NOT EXISTS `mysubjects` (
  `StudentId` varchar(10) NOT NULL,
  `SubCode` varchar(10) NOT NULL,
  `SubYear` int(11) NOT NULL,
  PRIMARY KEY (`StudentId`,`SubCode`)
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

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `position` varchar(30) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `date`, `position`, `message`) VALUES
(1, '0000-00-00 00:00:00', 'student', 'Level 1G results are displayed at the Notice Board of the Office of the Dean Faculty of Science and other results are kept at the office.'),
(2, '0000-00-00 00:00:00', 'student', 'All students are requested to see their results as soon as possible.'),
(3, '0000-00-00 00:00:00', 'teacher', 'The vacation is announced from 23.12.2013 to 27.12.2013 as per approved academic calendar.');

-- --------------------------------------------------------

--
-- Table structure for table `seatwork`
--

CREATE TABLE IF NOT EXISTS `seatwork` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `term` varchar(30) NOT NULL,
  `week` varchar(30) NOT NULL,
  `idnumber` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `score` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

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

CREATE TABLE IF NOT EXISTS `seatworkpercentage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` varchar(30) NOT NULL,
  `spercentage` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

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

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `RegNo` varchar(13) NOT NULL,
  `indNo` int(4) NOT NULL,
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
  `special` text NOT NULL,
  PRIMARY KEY (`id`,`indNo`),
  UNIQUE KEY `RegNo` (`RegNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `RegNo`, `indNo`, `prefix`, `fname`, `lname`, `gender`, `address`, `email`, `phone`, `password`, `course`, `level`, `yearcd`, `subject_combination`, `special`) VALUES
(1, '2011csc002', 7985, 'Miss', 'Thavaruby', 'Thankeswarar', 'Female', 'Address1', 'put.your.id@gmail.com', 771234567, '6bf733bb7f81e866306e9b5f012419cb', 'Computer_Science', '3G', '2015', 'Cs_', 'Y'),
(2, '2011csc003', 7986, 'Miss', 'Arulini', 'Selvaratnam', 'Female', 'Address2', 'put.your.id@gmail.com', 771234567, '4158f6d19559955bae372bb00f6204e4', 'Computer_Science', '3G', '2015', 'Cs_', 'Y'),
(3, '2011csc004', 7987, 'Mr', 'Gowshikan', 'Theiventhiramoorththi', 'Male', 'Address3', 'put.your.id@gmail.com', 771234567, 'e9287a53b94620249766921107fe70a3', 'Computer_Science', '3G', '2015', 'Cs_', 'Y'),
(4, '2011csc005', 7988, 'Mr', 'Magure', 'Gamaaethige Nuwan Siriwardane', 'Male', 'Address4', 'put.your.id@gmail.com', 771234567, 'c02d0450cdd75ce7595f5eaeb5f041a3', 'Computer_Science', '3G', '2015', 'Cs_', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `studentsubject`
--

CREATE TABLE IF NOT EXISTS `studentsubject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=113 ;

--
-- Dumping data for table `studentsubject`
--

INSERT INTO `studentsubject` (`id`, `student_id`, `subject_id`, `subject`, `section`, `course`, `level`) VALUES
(78, 35, 21, '', '', '', '1G'),
(79, 35, 41, '', '', '', '1G'),
(80, 35, 24, '', '', '', '1G'),
(81, 35, 25, '', '', '', '1G'),
(82, 35, 67, '', '', '', '1G'),
(91, 35, 8, '', '', '', '2G'),
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
(112, 36, 24, '', '', '', '1G');

-- --------------------------------------------------------

--
-- Table structure for table `student_combination`
--

CREATE TABLE IF NOT EXISTS `student_combination` (
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
('16', '2014sp014', 3);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(15) NOT NULL,
  `title` text NOT NULL,
  `level` varchar(3) NOT NULL,
  `credit` int(1) NOT NULL,
  `lecHrs` int(2) NOT NULL,
  `prHrs` int(3) NOT NULL,
  `semi` int(2) NOT NULL,
  `lecturer` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

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
(19, 'CSC104GC2', 'Practical Computing I', '1G', 2, 0, 90, 0, ''),
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
(76, 'STA302GC4', 'Data Analysis', '3G', 4, 36, 48, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `subjectdate`
--

CREATE TABLE IF NOT EXISTS `subjectdate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `semi` int(11) NOT NULL,
  `fromdt` date NOT NULL,
  `todt` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

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

CREATE TABLE IF NOT EXISTS `subject_com` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `subject1` varchar(50) NOT NULL,
  `subject2` varchar(50) NOT NULL,
  `subject3` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

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
(18, 'Computer_Science', 'Applied_Maths', 'Chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `RegNo` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `position` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `RegNo` (`RegNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2074 ;

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
(21, 'UID-DNIJJJPT', 'YIxYGGswx', 'hod');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
