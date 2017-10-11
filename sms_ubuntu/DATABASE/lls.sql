-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2014 at 05:39 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lls`
--

-- --------------------------------------------------------

--
-- Table structure for table `facilitator`
--

CREATE TABLE IF NOT EXISTS `facilitator` (
  `Session_Code` varchar(9) NOT NULL,
  `Facilitator` varchar(30) NOT NULL,
  PRIMARY KEY (`Session_Code`,`Facilitator`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilitator`
--

INSERT INTO `facilitator` (`Session_Code`, `Facilitator`) VALUES
('CSC101GC2', 'Dr.S.Mahesan'),
('CSC101GC2', 'Miss.Rathai'),
('CSC301GC2', 'Mr.K.Saraveswaran'),
('CSC304GC2', 'Mr.K.Sarveswaran'),
('CSC304GC2', 'Mr.Visithan');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` text NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Time` varchar(55) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`Id`, `Username`, `Date`, `Time`, `Description`) VALUES
(1, 'jara', '', '10:11:3', 'update as  Day=Tuesday Period=1 ,Session_Code=CSK ,Venue_No=M1'),
(2, 'jara', '', '', 'Add new session sdfF 1 period @efe in Monday'),
(3, 'jara', '', '', 'Delete session sdfF 1 period @efe in Monday'),
(4, 'jara', '', '', 'Add new session w 1 period @w in Monday'),
(5, 'jara', '', '', 'update as  Day=Monday Period=2 ,Session_Code=CSC ,Venue_No=M1'),
(6, 'jara', '', '', 'update as  Day=Monday Period=2 ,Session_Code=w ,Venue_No=w'),
(7, 'jara', '', '', 'update as  Day=Monday Period=1 ,Session_Code=w ,Venue_No=ww'),
(8, 'jara', '', '', 'update as  Day=Monday Period=2 ,Session_Code=w ,Venue_No=ww'),
(9, 'jara', '', '', 'Delete session w 1 period @ww in Monday'),
(10, 'jara', '23', '', 'update as  Day=Monday Period=1 ,Session_Code=ww ,Venue_No=ww'),
(11, 'jara', '23', '5:20:19', 'update as  Day=Monday Period=1 ,Session_Code=ww ,Venue_No=w'),
(12, 'jara', '03/02/2012', '5:23:16', 'Add new session ww 1 period @ww in Monday'),
(13, 'jara', '03/02/2012', '5:23:29', 'Delete session ww 1 period @ww in Monday'),
(14, 'jara', '03/02/2012', '5:23:33', 'Delete session ww 1 period @w in Monday'),
(15, 'jara', '03/02/2012', '5:28:26', 'update as  Day=Monday Period=1 ,Session_Code=CSC ,Venue_No=M2'),
(16, 'jara', '03/02/2012', '5:29:13', 'update as  Day=Monday Period=1 ,Session_Code=CSC ,Venue_No=M1'),
(17, 'jara', '03/02/2012', '5:36:12', 'Add new session CSC 1 period @ in Monday'),
(18, 'jara', '03/02/2012', '5:38:43', 'Delete session CSC 1 period @M1 in Monday'),
(19, 'jara', '03/02/2012', '5:40:2', 'update as  Day=Tuesday Period=1 ,Session_Code=CHE ,Venue_No=CL'),
(20, 'jara', '03/02/2012', '5:40:8', 'update as  Day=Tuesday Period=1 ,Session_Code=CHE ,Venue_No=CL'),
(21, 'jara', '03/02/2012', '6:6:2', 'inset the w class on Monday 1 period at '),
(22, 'jara', '03/02/2012', '6:6:58', 'Delete the Monday 1 period w class'),
(23, 'jara', '03/02/2012', '6:7:7', 'inset the ww class on Monday 1 period at ww'),
(24, 'jara', '03/02/2012', '6:7:32', 'update the Monday 1 period ww class to w the old venue is ww'),
(25, 'jara', '03/02/2012', '6:7:53', 'Delete the Monday 1 period ww class'),
(26, '', '01/16/2014', '', 'Delete the Monday 5 period CHE class'),
(27, '', '01/21/2014', '', 'update the Tuesday 1 period STA class to CL the old venue is CL'),
(28, '', '01/21/2014', '', 'update the Tuesday 1 period PMM class to CL the old venue is CL'),
(29, '', '01/21/2014', '', 'update the Tuesday 3 period SLS class to BB the old venue is BB'),
(30, '', '01/21/2014', '', 'update the Tuesday 5 period SLS class to F1 the old venue is F1'),
(31, '', '01/21/2014', '', 'Delete the Wednesday 2 period PHY class'),
(32, '', '01/21/2014', '', 'Delete the Monday 6 period ZOO class'),
(33, '', '01/21/2014', '', 'Delete the Tuesday 2 period ZOO class'),
(34, '', '01/21/2014', '', 'Delete the Monday 7 period ZOO class'),
(35, '', '01/21/2014', '', 'Delete the Wednesday 7 period PHY class'),
(36, '', '01/21/2014', '', 'Delete the Wednesday 5 period PHY class'),
(37, '', '01/21/2014', '', 'update the Monday 4 period FSC class to CS the old venue is CS');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `Session_Code` varchar(9) NOT NULL,
  `Session_Name` text NOT NULL,
  `Level` text NOT NULL,
  `Head_Count` int(11) NOT NULL,
  PRIMARY KEY (`Session_Code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`Session_Code`, `Session_Name`, `Level`, `Head_Count`) VALUES
('CSC301GC2', 'Rapid Application Development', '3G', 24),
('CSC304GC2', 'Practical Computing3', '3G', 24),
('CSC303GC2', 'OperatingSystem', '3G', 24),
('CSC302GC2', 'Database', '2G', 45);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--



-- --------------------------------------------------------

--
-- Table structure for table `timetable1`
--

CREATE TABLE IF NOT EXISTS `timetable1` (
  `Day` varchar(9) NOT NULL,
  `Period` varchar(10) NOT NULL,
  `Session_Code` varchar(10) NOT NULL,
  `Venue_No` varchar(10) NOT NULL,
  PRIMARY KEY (`Day`,`Period`,`Venue_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable1`
--

INSERT INTO `timetable1` (`Day`, `Period`, `Session_Code`, `Venue_No`) VALUES
('Monday', '1', 'CSC', 'P1'),
('Monday', '2', 'CSC', 'M1'),
('Monday', '3', 'CSC', 'L1'),
('Monday', '4', 'FSC', 'CS'),
('Monday', '5', 'PHY', 'PH1'),
('Monday', '6', 'PHY', 'PH1'),
('Monday', '7', 'PHY', 'PH1'),
('Monday', '8', 'PHY', 'P1'),
('Monday', '6', 'CHE', 'C1'),
('Monday', '7', 'CHE', 'C1'),
('Monday', '8', 'CHE', 'C1'),
('Monday', '5', 'BOT', 'BB'),
('Monday', '6', 'BOT', 'BB'),
('Monday', '7', 'BOT', 'BB'),
('Monday', '5', 'ZOO', 'Z1'),
('Tuesday', '1', 'PMM', 'CL'),
('Tuesday', '1', 'PHY', 'P1'),
('Tuesday', '2', 'BOT', 'B1'),
('Tuesday', '2', 'CSC', 'P1'),
('Tuesday', '3', 'SLS', 'BB'),
('Tuesday', '3', 'STA', 'M1'),
('Tuesday', '3', 'ZOO', 'Z1'),
('Tuesday', '4', 'BOT', 'BB'),
('Tuesday', '4', 'STA', 'M1'),
('Tuesday', '4', 'ZOO', 'Z1'),
('Tuesday', '5', 'SLS', 'F1'),
('Tuesday', '6', 'FSC', 'F1'),
('Tuesday', '7', 'FSC', 'F1'),
('Tuesday', '8', 'FSC', 'B2'),
('Tuesday', '5', 'PMM', 'M1'),
('Tuesday', '6', 'AMM', 'M1'),
('Tuesday', '7', 'CSC', 'P1'),
('Tuesday', '8', 'AMM', 'M1'),
('Wednesday', '1', 'ENG', 'P1'),
('Wednesday', '1', 'ENG', 'P2'),
('Wednesday', '2', 'CHE', 'CL'),
('Wednesday', '3', 'STA', 'M1'),
('Wednesday', '3', 'ZOO', 'B1'),
('Wednesday', '4', 'SLS', 'CL'),
('Wednesday', '5', 'CHE', 'C1'),
('Wednesday', '6', 'CHE', 'C1'),
('Wednesday', '7', 'CHE', 'C1'),
('Wednesday', '5', 'FSC', 'B1'),
('Wednesday', '6', 'PHY', 'PH1'),
('Wednesday', '5', 'CSC', 'L1'),
('Wednesday', '6', 'CSC', 'L1'),
('Wednesday', '7', 'CSC', 'L1'),
('Wednesday', '7', 'FSC', 'B2'),
('Wednesday', '8', 'PBS', 'CL'),
('Wednesday', '8', 'BOT', 'B1'),
('Thursday', '1', 'ENG', 'P1'),
('Thursday', '1', 'ENG', 'P2'),
('Thursday', '2', 'CSC', 'P1'),
('Thursday', '2', 'ZOO', 'B1'),
('Thursday', '3', 'BOT', 'B1'),
('Thursday', '3', 'AMM', 'M1'),
('Thursday', '4', 'ZOO', 'B1'),
('Thursday', '4', 'AMM', 'M1'),
('Thursday', '5', 'CHE', 'C1'),
('Thursday', '6', 'CHE', 'C1'),
('Thursday', '7', 'CHE', 'C1'),
('Thursday', '5', 'PMM', 'M1'),
('Thursday', '6', 'STA', 'M1'),
('Thursday', '7', 'PMM', 'M1'),
('Thursday', '8', 'STA', 'M1'),
('Thursday', '8', 'MBS', 'P1'),
('Friday', '1', 'ENG', 'P1'),
('Friday', '1', 'ENG', 'P2'),
('Friday', '2', 'CSC', 'L1'),
('Friday', '2', 'BOT', 'B1'),
('Friday', '3', 'PHY', 'P1'),
('Friday', '3', 'CHE', 'CL'),
('Friday', '4', 'ZOO', 'B1'),
('Friday', '4', 'PMM', 'M1'),
('Friday', '5', 'CSC', 'L1'),
('Friday', '6', 'CSC', 'L1'),
('Friday', '7', 'CSC', 'L1'),
('Friday', '5', 'BOT', 'BB'),
('Friday', '6', 'BOT', 'BB'),
('Friday', '7', 'BOT', 'BB'),
('Friday', '5', 'ZOO', 'Z1'),
('Friday', '6', 'ZOO', 'Z1'),
('Friday', '7', 'ZOO', 'Z1'),
('Friday', '8', 'BOT', 'B2'),
('Friday', '8', 'AMM', 'M1'),
('Monday', '4', 'PMM', 'M1');

-- --------------------------------------------------------

--
-- Table structure for table `timetable2`
--

CREATE TABLE IF NOT EXISTS `timetable2` (
  `Day` varchar(9) NOT NULL,
  `Period` varchar(10) NOT NULL,
  `Session_Code` varchar(10) NOT NULL,
  `Venue_No` varchar(10) NOT NULL,
  PRIMARY KEY (`Day`,`Period`,`Venue_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable2`
--

INSERT INTO `timetable2` (`Day`, `Period`, `Session_Code`, `Venue_No`) VALUES
('Monday', '1', 'CSC', 'P2'),
('Monday', '2', 'CSC', 'L2'),
('Monday', '3', 'CSC', 'M2'),
('Monday', '4', 'CSC', 'P1'),
('Monday', '4', 'ZOO', 'B1'),
('Monday', '5', 'PHY', 'PH2'),
('Monday', '6', 'PHY', 'PH2'),
('Monday', '7', 'PHY', 'PH2'),
('Monday', '5', 'CHE', 'C2'),
('Monday', '6', 'CHE', 'C2'),
('Monday', '7', 'CHE', 'C2'),
('Monday', '5', 'STA', 'M2'),
('Monday', '7', 'STA', 'M2'),
('Monday', '8', 'BAD', 'M1'),
('Tuesday', '1', 'PMM', 'M2'),
('Tuesday', '1', 'ZOO', 'B1'),
('Tuesday', '2', 'ENG', 'P2'),
('Tuesday', '2', 'ENG', 'B1'),
('Tuesday', '3', 'CHE', 'CL'),
('Tuesday', '3', 'PHY', 'P1'),
('Tuesday', '4', 'CSC', 'P3'),
('Tuesday', '4', 'FSC', 'B2'),
('Tuesday', '4', 'BOT', 'B1'),
('Tuesday', '5', 'CSC', 'L1'),
('Tuesday', '6', 'CSC', 'L1'),
('Tuesday', '7', 'CSC', 'L1'),
('Tuesday', '5', 'BTE', 'CS'),
('Tuesday', '5', 'BAC', 'P1'),
('Tuesday', '6', 'BAC', 'P1'),
('Tuesday', '6', 'FSC', 'B2'),
('Tuesday', '7', 'PHY', 'P2'),
('Tuesday', '7', 'CHE', 'CL'),
('Tuesday', '8', 'BOT', 'CS'),
('Tuesday', '8', 'AMM', 'M2'),
('Wednesday', '1', 'AMM', 'M2'),
('Wednesday', '1', 'BOT', 'B2'),
('Wednesday', '1', 'FSC', 'CT3'),
('Wednesday', '2', 'ENG', 'P2'),
('Wednesday', '2', 'ENG', 'B1'),
('Wednesday', '3', 'CHE', 'CL'),
('Wednesday', '3', 'PHY', 'P2'),
('Wednesday', '4', 'CSC', 'P3'),
('Wednesday', '4', 'ZOO', 'B1'),
('Wednesday', '5', 'PMM', 'M1'),
('Wednesday', '5', 'BOT', 'CS'),
('Wednesday', '5', 'FSC', 'B2'),
('Wednesday', '6', 'CHE', 'CS'),
('Wednesday', '6', 'PHY', 'P1'),
('Wednesday', '7', 'AMM', 'M1'),
('Wednesday', '7', 'ZOO', 'B1'),
('Wednesday', '8', 'BAD', 'M1'),
('Thursday', '1', 'AMM', 'M2'),
('Thursday', '1', 'BTE', 'B2'),
('Thursday', '2', 'CSC', 'L1'),
('Thursday', '3', 'CSC', 'L1'),
('Thursday', '4', 'CSC', 'L1'),
('Thursday', '2', 'PMM', 'M1'),
('Thursday', '2', 'ENS', 'CS'),
('Thursday', '3', 'ENS', 'CS'),
('Thursday', '3', 'STA', 'M2'),
('Thursday', '4', 'BOT', 'CS'),
('Thursday', '4', 'PMM', 'M2'),
('Thursday', '5', 'BOT', 'BB2'),
('Thursday', '6', 'BOT', 'BB2'),
('Thursday', '7', 'BOT', 'BB2'),
('Thursday', '5', 'ZOO', 'Z2'),
('Thursday', '6', 'ZOO', 'Z2'),
('Thursday', '7', 'ZOO', 'Z2'),
('Thursday', '5', 'PHY', 'P1'),
('Thursday', '6', 'CSC', 'P1'),
('Thursday', '7', 'STA', 'M2'),
('Thursday', '8', 'CHE', 'CL'),
('Friday', '1', 'ZOO', 'CT2'),
('Friday', '1', 'AMM', 'M2'),
('Friday', '2', 'PHY', 'PH2'),
('Friday', '3', 'PHY', 'PH2'),
('Friday', '4', 'PHY', 'PH2'),
('Friday', '2', 'CHE', 'C2'),
('Friday', '3', 'CHE', 'C2'),
('Friday', '4', 'CHE', 'C2'),
('Friday', '2', 'FSC', 'F2'),
('Friday', '3', 'FSC', 'F2'),
('Friday', '4', 'FSC', 'F2'),
('Friday', '2', 'PMM', 'M1'),
('Friday', '3', 'CSC', 'P2'),
('Friday', '5', 'BOT', 'BB2'),
('Friday', '6', 'BOT', 'BB2'),
('Friday', '7', 'BOT', 'BB2'),
('Friday', '5', 'ZOO', 'Z2'),
('Friday', '6', 'ZOO', 'Z2'),
('Friday', '7', 'ZOO', 'Z2'),
('Friday', '5', 'ELE', 'E1'),
('Friday', '6', 'ELE', 'E1'),
('Friday', '7', 'ELE', 'E1'),
('Friday', '5', 'STA', 'P1'),
('Friday', '6', 'PMM', 'M1'),
('Friday', '7', 'STA', 'M2'),
('Friday', '8', 'FSC', 'P2'),
('Friday', '8', 'AMM', 'M2');

-- --------------------------------------------------------

--
-- Table structure for table `timetable3`
--

CREATE TABLE IF NOT EXISTS `timetable3` (
  `Day` varchar(9) NOT NULL,
  `Period` varchar(10) NOT NULL,
  `Session_Code` varchar(10) NOT NULL,
  `Venue_No` varchar(10) NOT NULL,
  PRIMARY KEY (`Day`,`Period`,`Venue_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable3`
--

INSERT INTO `timetable3` (`Day`, `Period`, `Session_Code`, `Venue_No`) VALUES
('Monday', '1', 'CSC', 'M1'),
('Monday', '2', 'CSC', 'P1'),
('Monday', '3', 'CSC', 'L1'),
('Monday', '4', 'CSK', 'CL'),
('Monday', '5', 'CSC', 'L1'),
('Monday', '6', 'CSC', 'L1'),
('Monday', '7', 'CSC', 'L1'),
('Monday', '5', 'CHE', 'CL'),
('Monday', '5', 'PHY', 'P1'),
('Monday', '6', 'BAC', 'P1'),
('Monday', '7', 'BAC', 'P1'),
('Monday', '8', 'BOT', 'CS'),
('Monday', '8', 'FSC', 'B1'),
('Monday', '8', 'STA', 'M2'),
('Tuesday', '1', 'CSK', 'M1'),
('Tuesday', '2', 'CHE', 'C3'),
('Tuesday', '3', 'CHE', 'C3'),
('Tuesday', '4', 'CHE', 'C3'),
('Tuesday', '2', 'PHY', 'PH3'),
('Tuesday', '3', 'PHY', 'PH3'),
('Tuesday', '4', 'PHY', 'PH3'),
('Tuesday', '2', 'STA', 'M2'),
('Tuesday', '3', 'CSC', 'M2'),
('Tuesday', '4', 'STA', 'M2'),
('Tuesday', '5', 'AMM', 'M2'),
('Tuesday', '5', 'BOT', 'B1'),
('Tuesday', '5', 'FSC', 'B2'),
('Tuesday', '6', 'CHE', 'CL'),
('Tuesday', '6', 'PHY', 'P1'),
('Tuesday', '7', 'PMM', 'M2'),
('Tuesday', '7', 'ZOO', 'B1'),
('Tuesday', '8', 'CSC', 'P2'),
('Tuesday', '8', 'FSC', 'B1'),
('Wednesday', '1', 'PHY', 'P3'),
('Wednesday', '1', 'CHE', 'CT1'),
('Wednesday', '2', 'BOT', 'BB3'),
('Wednesday', '3', 'BOT', 'BB3'),
('Wednesday', '4', 'BOT', 'BB3'),
('Wednesday', '2', 'ZOO', 'Z3'),
('Wednesday', '3', 'ZOO', 'Z3'),
('Wednesday', '4', 'ZOO', 'Z3'),
('Wednesday', '2', 'AMM', 'M1'),
('Wednesday', '3', 'CSC', 'P3'),
('Wednesday', '4', 'PHY', 'P1'),
('Wednesday', '5', 'ELE', 'E2'),
('Wednesday', '6', 'ELE', 'E2'),
('Wednesday', '7', 'ELE', 'E2'),
('Wednesday', '5', 'PHY', 'PH3'),
('Wednesday', '6', 'PHY', 'PH3'),
('Wednesday', '7', 'PHY', 'PH3'),
('Wednesday', '5', 'CHE', 'C3'),
('Wednesday', '6', 'CHE', 'C3'),
('Wednesday', '7', 'CHE', 'C3'),
('Wednesday', '5', 'FSC', 'F3'),
('Wednesday', '6', 'FSC', 'F3'),
('Wednesday', '7', 'FSC', 'F3'),
('Wednesday', '5', 'PMM', 'M2'),
('Wednesday', '7', 'PMM', 'M2'),
('Wednesday', '8', 'ZOO', 'CS'),
('Wednesday', '8', 'AMM', 'P1'),
('Thursday', '1', 'FSC', 'CT3'),
('Thursday', '1', 'BOT', 'CT2'),
('Thursday', '1', 'STA', 'P3'),
('Thursday', '2', 'BOT', 'BB3'),
('Thursday', '3', 'BOT', 'BB3'),
('Thursday', '4', 'BOT', 'BB3'),
('Thursday', '2', 'ZOO', 'Z3'),
('Thursday', '3', 'ZOO', 'Z3'),
('Thursday', '4', 'ZOO', 'Z3'),
('Thursday', '2', 'AMM', 'M2'),
('Thursday', '3', 'PMM', 'M2'),
('Thursday', '4', 'CSC', 'P1'),
('Thursday', '5', 'ZOO', 'B1'),
('Thursday', '5', 'PMM', 'M2'),
('Thursday', '6', 'STA', 'M2'),
('Thursday', '6', 'BOT', 'B1'),
('Thursday', '7', 'CHE', 'CL'),
('Thursday', '7', 'PHY', 'P1'),
('Thursday', '8', 'BTE', 'B1'),
('Thursday', '8', 'BAD', 'CS'),
('Friday', '1', 'AMM', 'P3'),
('Friday', '1', 'ENS', 'CT3'),
('Friday', '2', 'CSC', 'L1'),
('Friday', '3', 'CSC', 'L1'),
('Friday', '4', 'CSC', 'L1'),
('Friday', '2', 'BAD', 'CL'),
('Friday', '2', 'BOT', 'CS'),
('Friday', '3', 'STA', 'M2'),
('Friday', '3', 'ZOO', 'CS'),
('Friday', '4', 'ENS', 'CS'),
('Friday', '5', 'PMM', 'M2'),
('Friday', '5', 'ZOO', 'B2'),
('Friday', '6', 'CSC', 'P1'),
('Friday', '6', 'FSC', 'B1'),
('Friday', '7', 'CHE', 'CL'),
('Friday', '8', 'AMM', 'P1'),
('Friday', '8', 'BTE', 'CL');

-- --------------------------------------------------------

--
-- Table structure for table `user_administrator`
--

CREATE TABLE IF NOT EXISTS `user_administrator` (
  `Id` int(11) NOT NULL,
  `Fullname` text NOT NULL,
  `mail_id` text NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Entity` text NOT NULL,
  `Created_by` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_administrator`
--

INSERT INTO `user_administrator` (`Id`, `Fullname`, `mail_id`, `Username`, `Password`, `Entity`, `Created_by`) VALUES
(1, 'Jarachanthan', 'jara@gmail.com', 'jara', 'c93ccd78b2076528346216b3b2f701e6', 'Lecturer', 'Owner');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE IF NOT EXISTS `venue` (
  `Venue_No` varchar(5) NOT NULL,
  `Venue_Type` text NOT NULL,
  `Head_Count` int(11) NOT NULL,
  `Projector` varchar(3) NOT NULL,
  `Water_Facility` varchar(3) NOT NULL,
  PRIMARY KEY (`Venue_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`Venue_No`, `Venue_Type`, `Head_Count`, `Projector`, `Water_Facility`) VALUES
('P1', 'Lecture hall', 150, 'Yes', 'Yes'),
('lab1', 'Laboratory', 24, 'Yes', 'No'),
('P2', 'Lecture hall', 35, 'Yes', 'Yes'),
('P3', 'Lecture hall', 24, 'Yes', 'No'),
('P4', 'Lecture hall', 20, 'No', 'No'),
('M1', 'Lecture hall', 200, 'Yes', 'No'),
('M2', 'Lecture hall', 50, 'Yes', 'No'),
('lab2', 'Laboratory', 47, 'Yes', 'No'),
('lab3', 'Laboratory', 75, 'Yes', 'Yes'),
('lab4', 'Laboratory', 23, 'Yes', 'Yes'),
('lab5', 'Laboratory', 90, 'Yes', 'Yes'),
('lab6', 'Laboratory', 150, 'Yes', 'Yes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
