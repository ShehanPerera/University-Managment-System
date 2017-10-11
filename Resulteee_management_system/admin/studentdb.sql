-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2017 at 06:51 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SUBJ_ID` int(3) NOT NULL,
  `SUBJ_CODE` varchar(18) DEFAULT NULL,
  `SUBJ_DESCRIPTION` varchar(38) DEFAULT NULL,
  `UNIT` int(1) DEFAULT NULL,
  `PRE_REQUISITE` varchar(10) DEFAULT NULL,
  `COURSE_ID` int(2) DEFAULT NULL,
  `AY` varchar(9) DEFAULT NULL,
  `SEMESTER` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SUBJ_ID`, `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `AY`, `SEMESTER`) VALUES
(1, 'Spiral Filipino', 'Filipino for Grade 7 - Spiral Filipino', 3, '', 47, '2013-2014', 'First'),
(2, 'Spiral English', 'English for Grade 7', 3, '', 47, '2013-2014', 'First'),
(3, 'Spiral Mathematics', 'Mathematics for Grade 7 - Spiral Math', 3, '', 47, '2013-2014', 'First'),
(4, 'Spiral Science', 'Science for Grade 7', 3, '', 47, '2013-2014', 'First'),
(5, 'Spiral T.L.E', 'T.L.E for Grade 7', 3, '', 47, '2013-2014', 'First'),
(6, 'Spiral A.P', 'Araling Panlipunan for Grade 7', 3, '', 47, '2013-2014', 'First'),
(7, 'Spiral Religion', 'rekligion for Grade 7', 3, '', 47, '2013-2014', 'First'),
(8, 'Spiral EsP.', 'EsP. for Grade 7', 3, '', 47, '2013-2014', 'First'),
(9, 'MAPEH', 'MAPEH for Grade 8 ', 3, '', 48, '2013-2014', 'First'),
(10, 'MAPEH', 'MAPEH for Grade 7', 3, '', 47, '2013-2014', 'First'),
(11, 'Religion', 'Religion for Grade 8', 3, '', 48, '2013-2014', 'First'),
(12, 'Spiral Filipino', 'Filipino for Grade 8 ', 3, '', 48, '2013-2014', 'First'),
(13, 'Spiral English', 'English for Grade 8', 3, '', 48, '2013-2014', 'First'),
(14, 'Spiral Mathematics', 'Mathematics for Grade 8 ', 3, '', 48, '2013-2014', 'First'),
(15, 'Spiral Science', 'Science for Grade ', 3, '', 48, '2013-2014', 'First'),
(16, 'Spiral T.L.E.', 'T.L.E for Grade 7 ', 3, '', 48, '2013-2014', 'First'),
(17, 'Spiral A.P.', 'Araling Panlipunan for Grade 8', 3, '', 48, '2013-2014', 'First'),
(18, 'Spiral EsP.', 'EsP. for Grade 7', 3, '', 48, '2013-2014', 'First'),
(19, 'Spiral Filipino', 'Filipino for Grade 9', 3, '', 49, '2013-2014', 'First'),
(20, 'Spiral English', 'English for Grade 9', 3, '', 49, '2013-2014', 'First'),
(21, 'Spiral Mathematics', 'Mathematics for Grade 9', 3, '', 49, '2013-2014', 'First'),
(22, 'Spiral Science', 'Science for Grade 9', 3, '', 49, '2013-2014', 'First'),
(23, 'Spiral A.P.', 'Araling Panlipunan for Grade 9', 3, '', 49, '2013-2014', 'First'),
(24, 'Spiral T.L.E.', 'T.L.E for Grade 9', 3, '', 49, '2013-2014', 'First'),
(25, 'Spiral MAPEH', 'MAPEH for Grade 9', 3, '', 49, '2013-2014', 'First'),
(26, 'Values Education', 'Values Education for Grade 9', 3, '', 49, '2013-2014', 'First'),
(27, 'Computer', 'Computer for grade 9', 3, '', 49, '2013-2014', 'First'),
(28, 'Religion IV', 'Religion for Grade 10', 3, '', 50, '2013-2014', 'First'),
(29, 'Spiral Filipino', 'Filipino for Grade 10', 3, '', 50, '2013-2014', 'First'),
(30, 'Spiral Mathematics', 'Mathematics for Grade 10', 3, '', 50, '2013-2014', 'First'),
(31, 'Spiral Science', 'Science for Grade 10', 3, '', 50, '2013-2014', 'First'),
(32, 'Spiral T.L.E.', 'T.L.E for Grade 10', 3, '', 50, '2013-2014', 'First'),
(33, 'Spiral MAPEH', 'MAPEH for Grade 10', 3, '', 50, '2013-2014', 'First'),
(34, 'Values Education', 'Values Education for Grade 10', 3, '', 50, '2013-2014', 'First'),
(35, 'CAT', 'Citizens Advancement Training', 3, '', 50, '2013-2014', 'First'),
(36, 'Computer', 'Computer for grade 10', 3, '', 50, '2013-2014', 'First'),
(37, 'hjgjhggh', 'gj', 3, '', 51, '2013-2014', 'First');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SUBJ_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `SUBJ_ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
