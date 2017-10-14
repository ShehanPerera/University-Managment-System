-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2017 at 05:00 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `code` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`, `code`) VALUES
(1, 'pheonix', 'admin@gmail.com', 'adminadmin', 'adminadmin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Index_no` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user_name`, `email`, `Index_no`, `message`, `date`) VALUES
(1, 'Meruja Selvamanikkam', 'meruja@gmail.com', '6262626', 'jnjbjbj', '2017-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Course_Code` varchar(15) NOT NULL,
  `Course_Title` varchar(100) NOT NULL,
  `Credit_Value` int(2) NOT NULL,
  `Level` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `dept`, `Subject`, `Course_Code`, `Course_Title`, `Credit_Value`, `Level`) VALUES
(1, 'CSC', 'Computer Scince ', 'CSC234SC3', 'Computer Architecture', 3, '2S'),
(2, 'CSC', 'Computer Scince ', 'CSC236SC2', 'Operating System', 2, '2S'),
(3, 'CSC', 'Computer Scince ', 'CSC237SC3', 'Concepts of Programming Language', 3, '2S'),
(4, 'CSC', 'Computer Scince ', 'CSC238SC2', 'Data Stuctures And Algorithm 2', 2, '2S'),
(5, 'CSC', 'Computer Scince ', 'CSC241SC2', 'Group project 1', 2, '2S'),
(6, 'CSC', 'Computer Scince ', 'CSC243SE2', 'Numerical Method', 2, '2S'),
(7, 'MS', 'Applied Mathematics', 'AMM101GC2', 'Vector Analysis', 2, '1G'),
(8, 'MS', 'Applied Mathematics', 'AMM102GC2', 'Dynamics', 2, '1G'),
(9, 'MS', 'Applied Mathematics', 'AMM103GC2', 'Ordinary Differential Equations', 2, '1G'),
(10, 'MS', 'Applied Mathematics', 'AMM104GC2', 'Matrices & Statics', 2, '1G'),
(11, 'CHE', 'Chemistry', 'CHE101GC2', 'General Chemistry and Chemistry of main group elements', 2, '1G'),
(12, 'CHE', 'Chemistry', 'CHE102GC2', 'Introductory Physical Chemistry', 2, '1G'),
(13, 'CHE', 'Chemistry', 'CHE103GC2', 'Stereochemistry and Reaction Mechanisms', 2, '1G'),
(14, 'CHE', 'Chemistry', 'CHE106GC1', 'Practical Chemistry 1 (Inorganic Chemistry)', 1, '1G'),
(15, 'CHE', 'Chemistry', 'CHE107GC1', 'Practical Chemistry 1 (Organic and Physical Chemistry)', 1, '1G'),
(17, 'CHE', 'Chemistry', 'CHE201GC2', 'Application of Spectroscopic Methods and Coordination Chemistry', 2, '2G'),
(18, 'CHE', 'Chemistry', 'CHE202GC3', 'Atomic and Molecular Structure and Basic Principles of Molecular Spectroscopy', 3, '1G'),
(19, 'CSC', 'Computer Science', 'CSC111GC3', 'Foundations of Computer Science', 3, '1G'),
(20, 'CSC', 'Computer Science', 'CSC112GC3', 'Computer Programming(1)', 3, '1G'),
(21, 'CSC', 'Computer Science', 'CSC113GC2', 'Data Structures and Algorithms(1)', 2, '1G'),
(22, 'PHY', 'Physics', 'PHY101GC2', 'Practical Physics(1)', 2, '1G'),
(23, 'PHY', 'Physics', 'PHY102GC3', 'Mechanics,Vibrations and Waves', 3, '1G'),
(24, 'PHY', 'Physics', 'PHY105GC3', 'Electricity,Electromagnetic Fields and Electronics', 3, '1G'),
(25, 'MS', 'Pure Mathematics', 'PMM101GC2', 'Set Theory', 2, '1G'),
(26, 'MS', 'Pure Mathematics', 'PMM102GC2', 'Limit Process', 2, '1G'),
(27, 'MS', 'Pure Mathematics', 'PMM103GC2', 'Algebra', 2, '1G'),
(28, 'MS', 'Pure Mathematics', 'PMM104GC2', 'Calculus', 2, '1G'),
(29, 'MS', 'Statistics', 'STA104GC3', 'Probability Theory', 3, '1G'),
(31, 'MS', 'Statistics', 'STA106GC2', 'Applied Statistics', 2, '1G'),
(33, 'CSC', 'Computer Science', 'CSC233GC2', 'Database Management System', 2, '2G'),
(34, 'CSC', 'Computer Science', 'CSC231GC2', 'Software Engineering', 2, '2G'),
(216, 'CSC', 'NEWs', 'CSC216GC3', 'NEWSAA\r\n', 3, '2G'),
(217, 'CSC', 'Computer Science ', 'CSC246SE2', 'Multimedia Technologies\r\n', 2, '2G'),
(218, 'CSC', 'Computer Science', 'CSC235GE2', 'Group Projecct', 2, '2G');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade_type` varchar(10) NOT NULL,
  `gpv_value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade_type`, `gpv_value`) VALUES
('A', 4),
('A+', 4),
('A-', 3.7),
('B', 3),
('B+', 3.3),
('B-', 2.7),
('C', 2),
('C+', 2.3),
('C-', 1.7),
('D', 1),
('D+', 1.3),
('E', 0);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `name`, `email`, `pass`, `dept`, `mob`, `status`) VALUES
(2, 'meera', 'me@live.com', '202cb962ac59075b964b07152d234b70', 'csc', '0771384600', '0'),
(5, 'Thabotharan Kathiravelu', 'thabotharan@gmail.com', '202cb962ac59075b964b07152d234b70', 'CSC', '0', '0'),
(15, 'shehan', '12shehan@gmail.com', '202cb962ac59075b964b07152d234b70', 'csc', '0722955071', '0'),
(153, 'Mr head&warden testing', 'HW@gmail.com', '50819f56bce608a52068dded80851b24', 'CSC', '0729550715', '1'),
(146, 'Mr sdfgfdg sdgf', 'd@g.c', '50819f56bce608a52068dded80851b24', 'CSC', '', '1'),
(30, 'Mr Phamasists testings', 'pha@gmail.coms', '', 'csscs', '0124475456', '1'),
(149, 'Dr Amirthalingam Ramanan', 'a.ramana@jfn.ac.lk', 'baa2133a166353138c8a5ec66f17286e', 'CSC', '0212218194', '1'),
(150, 'Mr S Selvarajan', 'selvarajan09@gmail.com', 'baa2133a166353138c8a5ec66f17286e', 'Maths', '0212218196', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ip_address`
--

CREATE TABLE `ip_address` (
  `id` int(11) NOT NULL,
  `mac_id` varchar(20) NOT NULL,
  `ip_add` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `up_status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ip_address`
--

INSERT INTO `ip_address` (`id`, `mac_id`, `ip_add`, `date`, `up_status`) VALUES
(1, '0', '1010', '2017-03-07 16:57:31', 'successfull'),
(2, '', '10.10.10.164', '2017-03-07 17:01:45', 'successfull'),
(3, '::1', '10.10.10.164', '2017-03-07 17:03:18', 'successfull');

-- --------------------------------------------------------

--
-- Table structure for table `marks_photo`
--

CREATE TABLE `marks_photo` (
  `id` int(11) NOT NULL,
  `level` varchar(10) NOT NULL,
  `semester` int(2) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks_photo`
--

INSERT INTO `marks_photo` (`id`, `level`, `semester`, `subject`, `image`) VALUES
(3262, '2S', 2, 'CSC243SE2', '60751-img-20170919-wa0013.jpg'),
(3263, '2S', 2, 'CSC246SE2', '48805-img-20170919-wa0014.jpg'),
(3264, '2S', 2, 'CSC241SC2', '68963-img-20170919-wa0015.jpg'),
(3265, '2S', 2, 'CSC238SC2', '15973-img-20170919-wa0016.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `admin` varchar(50) NOT NULL,
  `Instructor` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `notification` text NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `admin`, `Instructor`, `subject`, `notification`, `date`) VALUES
(1, 'admin@gmail.com', 'aaru@gmail.com', 'jbnmb', 'hkbkbkjn', '2017-02-05'),
(2, 'admin@gmail.com', '12shehan@gmail.com', 'csc', 'test', '2017-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `Index_no` varchar(10) NOT NULL,
  `Course_Code` varchar(50) NOT NULL,
  `credit` int(2) NOT NULL,
  `semester` int(5) NOT NULL,
  `attempt` int(5) NOT NULL,
  `Level` varchar(5) NOT NULL,
  `marks` int(5) NOT NULL,
  `Result` varchar(10) NOT NULL,
  `gpv` varchar(10) NOT NULL,
  `credit*gpv` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `Index_no`, `Course_Code`, `credit`, `semester`, `attempt`, `Level`, `marks`, `Result`, `gpv`, `credit*gpv`) VALUES
(1, 'S8993', 'CSC234SC3', 3, 2, 1, '2S', 72, 'A-', '3.7', '11.1'),
(2, 'S8996', 'CSC234SC3', 3, 2, 1, '2S', 88, 'A+', '4', '12'),
(3, 'S8997', 'CSC234SC3', 3, 2, 1, '2S', 63, 'B-', '2.7', '8.1'),
(4, 'S8998', 'CSC234SC3', 3, 2, 1, '2S', 68, 'B+', '3.3', '9.9'),
(5, 'S8999', 'CSC234SC3', 3, 2, 1, '2S', 78, 'A', '4', '12'),
(6, 'S9000', 'CSC234SC3', 3, 2, 1, '2S', 73, 'A-', '3.7', '11.1'),
(7, 'S9001', 'CSC234SC3', 3, 2, 1, '2S', 69, 'B+', '3.3', '9.9'),
(8, 'S9002', 'CSC234SC3', 3, 2, 1, '2S', 82, 'A', '4', '12'),
(9, 'S9003', 'CSC234SC3', 3, 2, 1, '2S', 88, 'A+', '4', '12'),
(10, 'S9004', 'CSC234SC3', 3, 2, 1, '2S', 65, 'B', '3', '9'),
(11, 'S9005', 'CSC234SC3', 3, 2, 1, '2S', 38, 'D+', '1.3', '3.9'),
(12, 'S9006', 'CSC234SC3', 3, 2, 1, '2S', 80, 'A', '4', '12'),
(13, 'S9007', 'CSC234SC3', 3, 2, 1, '2S', 65, 'B', '3', '9'),
(14, 'S9008', 'CSC234SC3', 3, 2, 1, '2S', 62, 'B-', '2.7', '8.1'),
(15, 'S9009', 'CSC234SC3', 3, 2, 1, '2S', 94, 'A+', '4', '12'),
(16, 'S9010', 'CSC234SC3', 3, 2, 1, '2S', 65, 'B', '3', '9'),
(17, 'S9011', 'CSC234SC3', 3, 2, 1, '2S', 63, 'B-', '2.7', '8.1'),
(18, 'S9012', 'CSC234SC3', 3, 2, 1, '2S', 73, 'A-', '3.7', '11.1'),
(19, 'S9013', 'CSC234SC3', 3, 2, 1, '2S', 65, 'B', '3', '9'),
(20, 'S9014', 'CSC234SC3', 3, 2, 1, '2S', 62, 'B-', '2.7', '8.1'),
(21, 'S9015', 'CSC234SC3', 3, 2, 1, '2S', 55, 'C+', '2.3', '6.9'),
(22, 'S9016', 'CSC234SC3', 3, 2, 1, '2S', 65, 'B', '3', '9'),
(23, 'S9017', 'CSC234SC3', 3, 2, 1, '2S', 58, 'C+', '2.3', '6.9'),
(24, 'S9018', 'CSC234SC3', 3, 2, 1, '2S', 71, 'A-', '3.7', '11.1'),
(25, 'S8693', 'CSC234SC3', 3, 2, 1, '2S', 0, 'NA', '0', '0'),
(26, 'S9019', 'CSC234SC3', 3, 2, 1, '2S', 53, 'C+', '2.3', '6.9'),
(27, 'S9020', 'CSC234SC3', 3, 2, 1, '2S', 68, 'B+', '3.3', '9.9'),
(28, 'S8993', 'CSC236SC2', 2, 2, 1, '2S', 69, 'B+', '3.3', '6.6'),
(29, 'S8996', 'CSC236SC2', 2, 2, 1, '2S', 89, 'A+', '4', '8'),
(30, 'S8997', 'CSC236SC2', 2, 2, 1, '2S', 56, 'C+', '2.3', '4.6'),
(31, 'S8998', 'CSC236SC2', 2, 2, 1, '2S', 68, 'B+', '3.3', '6.6'),
(32, 'S8999', 'CSC236SC2', 2, 2, 1, '2S', 93, 'A+', '4', '8'),
(33, 'S9000', 'CSC236SC2', 2, 2, 1, '2S', 69, 'B+ ', '3.3', '6.6'),
(34, 'S9001', 'CSC236SC2', 2, 2, 1, '2S', 68, 'B+', '3.3', '6.6'),
(35, 'S9002', 'CSC236SC2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(36, 'S9003', 'CSC236SC2', 2, 2, 1, '2S', 75, 'A', '4', '8'),
(37, 'S9004', 'CSC236SC2', 2, 2, 1, '2S', 75, 'A', '4', '8'),
(38, 'S9005', 'CSC236SC2', 2, 2, 1, '2S', 50, 'C', '2', '4'),
(39, 'S9006', 'CSC236SC2', 2, 2, 1, '2S', 50, 'C', '2', '4'),
(40, 'S9007', 'CSC236SC2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(41, 'S9008', 'CSC236SC2', 2, 2, 1, '2S', 53, 'C+', '2.3', '4.6'),
(42, 'S9009', 'CSC236SC2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(43, 'S9010', 'CSC236SC2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(44, 'S9011', 'CSC236SC2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(45, 'S9012', 'CSC236SC2', 2, 2, 1, '2S', 69, 'B+', '3.3', '6.6'),
(46, 'S9013', 'CSC236SC2', 2, 2, 1, '2S', 68, 'B+', '3.3', '6.6'),
(47, 'S9014', 'CSC236SC2', 2, 2, 1, '2S', 58, 'C+', '2.3', '4.6'),
(48, 'S9015', 'CSC236SC2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(49, 'S9016', 'CSC236SC2', 2, 2, 1, '2S', 36, 'D+', '1.3', '2.6'),
(50, 'S9017', 'CSC236SC2', 2, 2, 1, '2S', 50, 'C', '2', '4'),
(51, 'S9018', 'CSC236SC2', 2, 2, 1, '2S', 59, 'B-', '2.7', '5.4'),
(52, 'S8693', 'CSC236SC2', 2, 2, 1, '2S', 0, 'NA', '0', '0'),
(53, 'S9019', 'CSC236SC2', 2, 2, 1, '2S', 39, 'D+', '1.3', '2.6'),
(54, 'S9020', 'CSC236SC2', 2, 2, 1, '2S', 50, 'C', '2', '4'),
(55, 'S8993', 'CSC237SC3', 3, 2, 1, '2S', 65, 'B', '3', '9'),
(56, 'S8996', 'CSC237SC3', 3, 2, 1, '2S', 72, 'A-', '3.7', '11.1'),
(57, 'S8997', 'CSC237SC3', 3, 2, 1, '2S', 0, 'E', '0', '0'),
(58, 'S8998', 'CSC237SC3', 3, 2, 1, '2S', 72, 'A-', '3.7', '11.1'),
(59, 'S8999', 'CSC237SC3', 3, 2, 1, '2S', 89, 'A+', '4', '12'),
(60, 'S9000', 'CSC237SC3', 3, 2, 1, '2S', 65, 'B', '3', '9'),
(61, 'S9001', 'CSC237SC3', 3, 2, 1, '2S', 50, 'C+', '2.3', '6.9'),
(62, 'S9002', 'CSC237SC3', 3, 2, 1, '2S', 50, 'C+', '2.3', '6.9'),
(63, 'S9003', 'CSC237SC3', 3, 2, 1, '2S', 65, 'B', '3', '9'),
(64, 'S9004', 'CSC237SC3', 3, 2, 1, '2S', 75, 'A', '4', '12'),
(65, 'S9005', 'CSC237SC3', 3, 2, 1, '2S', 0, 'IC', '0', '0'),
(66, 'S9006', 'CSC237SC3', 3, 2, 1, '2S', 65, 'B', '3', '9'),
(67, 'S9007', 'CSC237SC3', 3, 2, 1, '2S', 30, 'D', '1', '3'),
(68, 'S9008', 'CSC237SC3', 3, 2, 1, '2S', 62, 'B-', '2.7', '8.1'),
(69, 'S9009', 'CSC237SC3', 3, 2, 1, '2S', 65, 'B', '3', '9'),
(70, 'S9010', 'CSC237SC3', 3, 2, 1, '2S', 30, 'D', '1', '3'),
(71, 'S9011', 'CSC237SC3', 3, 2, 1, '2S', 75, 'A', '4', '12'),
(72, 'S9012', 'CSC237SC3', 3, 2, 1, '2S', 65, 'B', '3', '9'),
(73, 'S9013', 'CSC237SC3', 3, 2, 1, '2S', 68, 'B+', '3.3', '9.9'),
(74, 'S9014', 'CSC237SC3', 3, 2, 1, '2S', 30, 'D', '1', '3'),
(75, 'S9015', 'CSC237SC3', 3, 2, 1, '2S', 30, 'D', '1', '3'),
(76, 'S9016', 'CSC237SC3', 3, 2, 1, '2S', 69, 'B+', '3.3', '9.9'),
(77, 'S9017', 'CSC237SC3', 3, 2, 1, '2S', 65, 'B', '3', '9'),
(78, 'S9018', 'CSC237SC3', 3, 2, 1, '2S', 50, 'C', '2', '6'),
(79, 'S8693', 'CSC237SC3', 3, 2, 1, '2S', 0, 'NA', '0', '0'),
(80, 'S9019', 'CSC237SC3', 3, 2, 1, '2S', 0, 'E', '0', '0'),
(81, 'S9020', 'CSC237SC3', 3, 2, 1, '2S', 65, 'B', '3', '9'),
(82, 'S8993', 'CSC238SC2', 2, 2, 1, '2S', 72, 'A-', '3.7', '7.4'),
(83, 'S8996', 'CSC238SC2', 2, 2, 1, '2S', 69, 'B+', '3.3', '6.6'),
(84, 'S8997', 'CSC238SC2', 2, 2, 1, '2S', 32, 'C-', '1.7', '3.4'),
(85, 'S8998', 'CSC238SC2', 2, 2, 1, '2S', 72, 'A-', '3.7', '7.4'),
(86, 'S8999', 'CSC238SC2', 2, 2, 1, '2S', 69, 'B+', '3.3', '6.6'),
(87, 'S9000', 'CSC238SC2', 2, 2, 1, '2S', 50, 'C', '2', '4'),
(88, 'S9001', 'CSC238SC2', 2, 2, 1, '2S', 56, 'C+', '2.3', '4.6'),
(89, 'S9002', 'CSC238SC2', 2, 2, 1, '2S', 69, 'B+', '3.3', '6.6'),
(90, 'S9003', 'CSC238SC2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(91, 'S9004', 'CSC238SC2', 2, 2, 1, '2S', 75, 'A', '4', '8'),
(92, 'S9005', 'CSC238SC2', 2, 2, 1, '2S', 32, 'C-', '1.7', '3.4'),
(93, 'S9006', 'CSC238SC2', 2, 2, 1, '2S', 69, 'B+', '3.3', '6.6'),
(94, 'S9007', 'CSC238SC2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(95, 'S9008', 'CSC238SC2', 2, 2, 1, '2S', 36, 'C+', '2.3', '4.6'),
(96, 'S9009', 'CSC238SC2', 2, 2, 1, '2S', 32, 'C-', '1.7', '3.4'),
(97, 'S9010', 'CSC238SC2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(98, 'S9011', 'CSC238SC2', 2, 2, 1, '2S', 69, 'B+', '3.3', '6.6'),
(99, 'S9012', 'CSC238SC2', 2, 2, 1, '2S', 58, 'B-', '2.7', '5.4'),
(100, 'S9013', 'CSC238SC2', 2, 2, 1, '2S', 67, 'B+', '3.3', '6.6'),
(101, 'S9014', 'CSC238SC2', 2, 2, 1, '2S', 46, 'C-', '1.7', '3.4'),
(102, 'S9015', 'CSC238SC2', 2, 2, 1, '2S', 39, 'D+', '1.3', '2.6'),
(103, 'S9016', 'CSC238SC2', 2, 2, 1, '2S', 49, 'B-', '2.7', '5.4'),
(104, 'S9017', 'CSC238SC2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(105, 'S9018', 'CSC238SC2', 2, 2, 1, '2S', 56, 'B-', '2.7', '5.4'),
(106, 'S8693', 'CSC238SC2', 2, 2, 1, '2S', 0, 'NA', '0', '0'),
(107, 'S9019', 'CSC238SC2', 2, 2, 1, '2S', 30, 'D', '1', '2'),
(108, 'S9020', 'CSC238SC2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(109, 'S8993', 'CSC241SC2', 2, 2, 1, '2S', 75, 'A', '4', '8'),
(110, 'S8996', 'CSC241SC2', 2, 2, 1, '2S', 75, 'A', '4', '8'),
(111, 'S8997', 'CSC241SC2', 2, 2, 1, '2S', 72, 'A-', '3.7', '7.4'),
(112, 'S8998', 'CSC241SC2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(113, 'S8999', 'CSC241SC2', 2, 2, 1, '2S', 92, 'A+', '4', '8'),
(114, 'S9000', 'CSC241SC2', 2, 2, 1, '2S', 55, 'C+', '2.3', '4.6'),
(115, 'S9001', 'CSC241SC2', 2, 2, 1, '2S', 69, 'B+', '3.3', '6.6'),
(116, 'S9002', 'CSC241SC2', 2, 2, 1, '2S', 72, 'A-', '3.7', '7.4'),
(117, 'S9003', 'CSC241SC2', 2, 2, 1, '2S', 68, 'B+', '3.3', '6.6'),
(118, 'S9004', 'CSC241SC2', 2, 2, 1, '2S', 89, 'A+', '4', '8'),
(119, 'S9005', 'CSC241SC2', 2, 2, 1, '2S', 69, 'B+', '3.3', '6.6'),
(120, 'S9006', 'CSC241SC2', 2, 2, 1, '2S', 72, 'A-', '3.7', '7.4'),
(121, 'S9007', 'CSC241SC2', 2, 2, 1, '2S', 59, 'C+', '2.3', '4.6'),
(122, 'S9008', 'CSC241SC2', 2, 2, 1, '2S', 69, 'B+', '3.3', '6.6'),
(123, 'S9009', 'CSC241SC2', 2, 2, 1, '2S', 69, 'B+', '3.3', '6.6'),
(124, 'S9010', 'CSC241SC2', 2, 2, 1, '2S', 55, 'C+', '2.3', '4.6'),
(125, 'S9011', 'CSC241SC2', 2, 2, 1, '2S', 89, 'A+', '4', '8'),
(126, 'S9012', 'CSC241SC2', 2, 2, 1, '2S', 72, 'A-', '3.7', '7.4'),
(127, 'S9013', 'CSC241SC2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(128, 'S9014', 'CSC241SC2', 2, 2, 1, '2S', 69, 'B+', '3.3', '6.6'),
(129, 'S9015', 'CSC241SC2', 2, 2, 1, '2S', 75, 'A', '4', '8'),
(130, 'S9016', 'CSC241SC2', 2, 2, 1, '2S', 72, 'A+', '4', '8'),
(131, 'S9017', 'CSC241SC2', 2, 2, 1, '2S', 73, 'A+', '4', '8'),
(132, 'S9018', 'CSC241SC2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(133, 'S9019', 'CSC241SC2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(134, 'S9020', 'CSC241SC2', 2, 2, 1, '2S', 45, 'C+', '2.3', '4.6'),
(135, 'S8993', 'CSC243SE2', 2, 2, 1, '2S', 72, 'A-', '3.7', '7.4'),
(136, 'S8996', 'CSC243SE2', 2, 2, 1, '2S', 93, 'A+', '4', '8'),
(137, 'S8997', 'CSC243SE2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(138, 'S8998', 'CSC243SE2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(139, 'S8999', 'CSC243SE2', 2, 2, 1, '2S', 75, 'A', '4', '8'),
(140, 'S9000', 'CSC243SE2', 2, 2, 1, '2S', 58, 'B-', '2.7', '5.4'),
(141, 'S9001', 'CSC243SE2', 2, 2, 1, '2S', 69, 'B+', '3.3', '6.6'),
(142, 'S9002', 'CSC243SE2', 2, 2, 1, '2S', 69, 'B+', '3.3', '6.6'),
(143, 'S9003', 'CSC243SE2', 2, 2, 1, '2S', 72, 'A-', '3.7', '7.4'),
(144, 'S9004', 'CSC243SE2', 2, 2, 1, '2S', 73, 'A-', '3.7', '7.4'),
(145, 'S9005', 'CSC243SE2', 2, 2, 1, '2S', 0, 'E', '0', '0'),
(146, 'S9006', 'CSC243SE2', 2, 2, 1, '2S', 36, 'D+', '1.3', '2.6'),
(147, 'S9007', 'CSC243SE2', 2, 2, 1, '2S', 58, 'C+', '2.3', '4.6'),
(148, 'S9008', 'CSC243SE2', 2, 2, 1, '2S', 59, 'B-', '2.7', '5.4'),
(149, 'S9009', 'CSC243SE2', 2, 2, 1, '2S', 50, 'C', '2', '4'),
(150, 'S9010', 'CSC243SE2', 2, 2, 1, '2S', 50, 'C', '2', '4'),
(151, 'S9011', 'CSC243SE2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(152, 'S9012', 'CSC243SE2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(153, 'S9013', 'CSC243SE2', 2, 2, 1, '2S', 69, 'B+', '3.3', '6.6'),
(154, 'S9014', 'CSC243SE2', 2, 2, 1, '2S', 69, 'B+', '3.3', '6.6'),
(155, 'S9015', 'CSC243SE2', 2, 2, 1, '2S', 58, 'C+', '2.3', '4.6'),
(156, 'S9016', 'CSC243SE2', 2, 2, 1, '2S', 46, 'D+', '1.3', '2.6'),
(157, 'S9017', 'CSC243SE2', 2, 2, 1, '2S', 42, 'C-', '1.7', '3.4'),
(158, 'S9018', 'CSC243SE2', 2, 2, 1, '2S', 49, 'C-', '1.7', '3.4'),
(159, 'S8693', 'CSC243SE2', 2, 2, 1, '2S', 0, 'NA', '0', '0'),
(160, 'S9019', 'CSC243SE2', 2, 2, 1, '2S', 0, 'E', '0', '0'),
(161, 'S9020', 'CSC243SE2', 2, 2, 1, '2S', 49, 'C+', '2.3', '4.6'),
(162, 'S8993', 'CSC246SE2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(163, 'S8996', 'CSC246SE2', 2, 2, 1, '2S', 95, 'A+', '4', '8'),
(164, 'S8997', 'CSC246SE2', 2, 2, 1, '2S', 36, 'D+', '1.3', '2.6'),
(165, 'S8998', 'CSC246SE2', 2, 2, 1, '2S', 68, 'B+', '3.3', '6.6'),
(166, 'S8999', 'CSC246SE2', 2, 2, 1, '2S', 75, 'A', '4', '8'),
(167, 'S9000', 'CSC246SE2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(168, 'S9001', 'CSC246SE2', 2, 2, 1, '2S', 38, 'D+', '1.3', '2.6'),
(169, 'S9002', 'CSC246SE2', 2, 2, 1, '2S', 59, 'B-', '2.7', '5.4'),
(170, 'S9003', 'CSC246SE2', 2, 2, 1, '2S', 72, 'A-', '3.7', '7.4'),
(171, 'S9004', 'CSC246SE2', 2, 2, 1, '2S', 73, 'A-', '3.7', '7.4'),
(172, 'S9005', 'CSC246SE2', 2, 2, 1, '2S', 0, 'E', '0', '0'),
(173, 'S9006', 'CSC246SE2', 2, 2, 1, '2S', 35, 'D+', '1.3', '2.6'),
(174, 'S9007', 'CSC246SE2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(175, 'S9008', 'CSC246SE2', 2, 2, 1, '2S', 68, 'B+', '3.3', '6.6'),
(176, 'S9009', 'CSC246SE2', 2, 2, 1, '2S', 50, 'C', '2', '4'),
(177, 'S9010', 'CSC246SE2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(178, 'S9011', 'CSC246SE2', 2, 2, 1, '2S', 68, 'B+', '3.3', '6.6'),
(179, 'S9012', 'CSC246SE2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(180, 'S9013', 'CSC246SE2', 2, 2, 1, '2S', 39, 'D+', '1.3', '2.6'),
(181, 'S9014', 'CSC246SE2', 2, 2, 1, '2S', 0, 'E', '0', '0'),
(182, 'S9015', 'CSC246SE2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(183, 'S9016', 'CSC246SE2', 2, 2, 1, '2S', 0, 'E', '0', '0'),
(184, 'S9017', 'CSC246SE2', 2, 2, 1, '2S', 69, 'B+', '3.3', '6.6'),
(185, 'S9018', 'CSC246SE2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(186, 'S8693', 'CSC246SE2', 2, 2, 1, '2S', 0, 'NA', '0', '0'),
(187, 'S9019', 'CSC246SE2', 2, 2, 1, '2S', 0, 'E', '0', '0'),
(188, 'S9020', 'CSC246SE2', 2, 2, 1, '2S', 65, 'B', '3', '6'),
(189, 'S8732', 'CSC235GE2', 2, 2, 1, '2G', 72, 'A-', '3.7', '7.4'),
(190, 'S8733', 'CSC235GE2', 2, 2, 1, '2G', 69, 'B+', '3.3', '6.6'),
(191, 'S8734', 'CSC235GE2', 2, 2, 1, '2G', 71, 'A-', '3.7', '7.4'),
(192, 'S8735', 'CSC235GE2', 2, 2, 1, '2G', 92, 'A+', '4', '8'),
(193, 'S8736', 'CSC235GE2', 2, 2, 1, '2G', 95, 'A+', '4', '8'),
(194, 'S8724', 'CSC235GE2', 2, 2, 1, '2G', 68, 'B+', '3.3', '6.6'),
(195, 'S8737', 'CSC235GE2', 2, 2, 1, '2G', 75, 'A', '4', '8'),
(196, 'S8739', 'CSC235GE2', 2, 2, 1, '2G', 93, 'A+', '4', '8'),
(197, 'S8740', 'CSC235GE2', 2, 2, 1, '2G', 75, 'A', '4', '8'),
(198, 'S8725', 'CSC235GE2', 2, 2, 1, '2G', 73, 'A-', '3.7', '7.4'),
(199, 'S8742', 'CSC235GE2', 2, 2, 1, '2G', 71, 'A-', '3.7', '7.4'),
(200, 'S8744', 'CSC235GE2', 2, 2, 1, '2G', 72, 'A-', '3.7', '7.4'),
(201, 'S8745', 'CSC235GE2', 2, 2, 1, '2G', 73, 'A-', '3.7', '7.4'),
(202, 'S8748', 'CSC235GE2', 2, 2, 1, '2G', 60, 'B-', '2.7', '5.4'),
(203, 'S8750', 'CSC235GE2', 2, 2, 1, '2G', 72, 'A-', '3.7', '7.4'),
(204, 'S8751', 'CSC235GE2', 2, 2, 1, '2G', 93, 'A+', '4', '8'),
(205, 'S8727', 'CSC235GE2', 2, 2, 1, '2G', 67, 'B+', '3.3', '6.6'),
(206, 'S8752', 'CSC235GE2', 2, 2, 1, '2G', 69, 'B+', '3.3', '6.6'),
(207, 'S8728', 'CSC235GE2', 2, 2, 1, '2G', 75, 'A', '4', '8'),
(208, 'S8754', 'CSC235GE2', 2, 2, 1, '2G', 75, 'A', '4', '8'),
(209, 'S8755', 'CSC235GE2', 2, 2, 1, '2G', 75, 'A', '4', '8'),
(210, 'S8757', 'CSC235GE2', 2, 2, 1, '2G', 69, 'B+', '3.3', '6.6'),
(211, 'S8760', 'CSC235GE2', 2, 2, 1, '2G', 50, 'C', '2', '4'),
(212, 'S8730', 'CSC235GE2', 2, 2, 1, '2G', 68, 'B+', '3.3', '6.6'),
(213, 'S8722', 'CSC235GE2', 2, 2, 1, '2G', 72, 'A-', '3.7', '7.4'),
(214, 'S8723', 'CSC235GE2', 2, 2, 1, '2G', 52, 'C', '2', '4'),
(215, 'S8747', 'CSC235GE2', 2, 2, 1, '2G', 92, 'A+', '4', '8'),
(216, 'S8749', 'CSC235GE2', 2, 2, 1, '2G', 68, 'B+', '3.3', '6.6'),
(217, 'S8784', 'CSC235GE2', 2, 2, 1, '2G', 62, 'B-', '2.7', '5.4'),
(218, 'S8841', 'CSC235GE2', 2, 2, 1, '2G', 69, 'B+', '3.3', '6.6'),
(219, 'S8765', 'CSC235GE2', 2, 2, 1, '2G', 96, 'A+', '4', '8'),
(220, 'S8767', 'CSC235GE2', 2, 2, 1, '2G', 95, 'A+', '4', '8'),
(221, 'S8768', 'CSC235GE2', 2, 2, 1, '2G', 62, 'B-', '2.7', '5.4'),
(222, 'S8769', 'CSC235GE2', 2, 2, 1, '2G', 72, 'A-', '3.7', '7.4'),
(223, 'S8770', 'CSC235GE2', 2, 2, 1, '2G', 89, 'A+', '4', '8'),
(224, 'S8772', 'CSC235GE2', 2, 2, 1, '2G', 89, 'A+', '4', '8'),
(225, 'S8773', 'CSC235GE2', 2, 2, 1, '2G', 65, 'B+', '3.3', '6.6'),
(226, 'S8774', 'CSC235GE2', 2, 2, 1, '2G', 75, 'A', '4', '8'),
(227, 'S8775', 'CSC235GE2', 2, 2, 1, '2G', 65, 'B', '3', '6228'),
(229, 'S8776', 'CSC235GE2', 2, 2, 1, '2G', 65, 'B', '3', '6'),
(230, 'S8777', 'CSC235GE2', 2, 2, 1, '2G', 75, 'A', '4', '8'),
(231, 'S8778', 'CSC235GE2', 2, 2, 1, '2G', 72, 'A-', '3.7', '7.4'),
(232, 'S8779', 'CSC235GE2', 2, 2, 1, '2G', 75, 'A', '4', '8'),
(233, 'S8780', 'CSC235GE2', 2, 2, 1, '2G', 95, 'A+', '4', '8'),
(234, 'S8781', 'CSC235GE2', 2, 2, 1, '2G', 75, 'A', '4', '8'),
(235, 'S8782', 'CSC235GE2', 2, 2, 1, '2G', 72, 'A-', '3.7', '7.4'),
(236, 'S8783', 'CSC235GE2', 2, 2, 1, '2G', 75, 'A', '4', '8'),
(237, 'S8785', 'CSC235GE2', 2, 2, 1, '2G', 72, 'A-', '3.7', '7.4'),
(238, 'S8786', 'CSC235GE2', 2, 2, 1, '2G', 65, 'B', '3', '6'),
(239, 'S8788', 'CSC235GE2', 2, 2, 1, '2G', 93, 'A+', '4', '8'),
(240, 'S8789', 'CSC235GE2', 2, 2, 1, '2G', 66, 'B+', '3.3', '6.6'),
(241, 'S8790', 'CSC235GE2', 2, 2, 1, '2G', 69, 'B+', '3.3', '6.6'),
(242, 'S8791', 'CSC235GE2', 2, 2, 1, '2G', 65, 'B', '3', '6'),
(243, 'S8792', 'CSC235GE2', 2, 2, 1, '2G', 65, 'B', '3', '6'),
(244, 'S8793', 'CSC235GE2', 2, 2, 1, '2G', 93, 'A+', '4', '8'),
(245, 'S8794', 'CSC235GE2', 2, 2, 1, '2G', 73, 'A-', '3.7', '7.4'),
(246, 'S8795', 'CSC235GE2', 2, 2, 1, '2G', 68, 'B+', '3.3', '6.6'),
(247, 'S8796', 'CSC235GE2', 2, 2, 1, '2G', 45, 'C', '2', '4'),
(248, 'S8797', 'CSC235GE2', 2, 2, 1, '2G', 74, 'A-', '3.7', '7.4'),
(249, 'S8798', 'CSC235GE2', 2, 2, 1, '2G', 68, 'B+', '3.3', '6.6'),
(250, 'S8799', 'CSC235GE2', 2, 2, 1, '2G', 75, 'A', '4', '8');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` char(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `Index_no` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `pass`, `Index_no`, `status`, `course`) VALUES
(3, 'Meruja Selvamanikkam', 'meruja@gmail.com', '202cb962ac59075b964b07152d234b70', 'S8765', '0', ''),
(4, 'Aaraney Sivakumar', 'aara@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0', ''),
(6, '2014sp0548', 'adsjfjoasf@gmail.com', '20838a8df7cc0babd745c7af4b7d94e2', 'S12484', '1', ''),
(155, 'Mr Ruchira Sachinthana Manathunga', 'rucsacman@gmail.com', 'baa2133a166353138c8a5ec66f17286e', 'S9017', '1', 'csc'),
(101, 'Parkavi Kabilathas', 'parkavi@gmail.com', '202cb962ac59075b964b07152d234b70', 'S88791', '0', ''),
(11, 'Tharmini Thalayasingam', 'tharmini@gmail.com', '28742468abb3f5faeda64e4325cf4a5d', '', '0', ''),
(12, 'Cheromi Ibo', 'cheromi@gmail.com', '5b5d5c2a3d81585f7ebd721451875a9a', '', '0', ''),
(21, 'Thameera Tharmakulasingam', 'thamee@gmail.com', 'fcd99a327ddd404fdb9c187f3ed2c59c', 'S8780', '1', ''),
(156, 'Mr janaka rajapaksha', 'janapbrajapaksha@gmail.com', 'baa2133a166353138c8a5ec66f17286e', 'S8724', '1', 'csc,amm'),
(152, 'Mr Gayan jayamal', 'jayamalgayan@gmail.com', 'a2a2970ab7771f426a20e0ac2c9aed71', 'S8747', '1', 'csc,pmm'),
(151, 'Mr Kasun Suminda', 'kasunsuminda94@gmail.com', 'c69bfdd039d04e7392ec89dc70ae0d73', 'S8786', '1', 'csc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Course_Code` (`Course_Code`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`grade_type`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `ip_address`
--
ALTER TABLE `ip_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks_photo`
--
ALTER TABLE `marks_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;
--
-- AUTO_INCREMENT for table `ip_address`
--
ALTER TABLE `ip_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `marks_photo`
--
ALTER TABLE `marks_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3266;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
