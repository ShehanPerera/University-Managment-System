-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2017 at 07:25 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthcen`
--

-- --------------------------------------------------------

--
-- Table structure for table `newmeduser`
--

CREATE TABLE `newmeduser` (
  `uname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `job` varchar(30) NOT NULL,
  `reg` varchar(30) NOT NULL,
  `user_type` varchar(30) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(108) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newmeduser`
--

INSERT INTO `newmeduser` (`uname`, `email`, `job`, `reg`, `user_type`, `user_name`, `password`) VALUES
('doctor', 'Hilary@gmail.com', 'Doctor', 'N123', 'doctor', 'Hillary', 'c20ad4d76fe97759aa27a0c99bff6710'),
('kajasumanie', 'kajasumanie@gmail.com', 'Pharmacist', 'P1111', 'Pharmacist', 'pharmacist', '827ccb0eea8a706c4c34a16891f84e7b'),
('jenisha', 'jenisha@gmail.com', 'Receptionist', 'R1000', 'Receptionist', 'receptionist', '81dc9bdb52d04dc20036dbd8313ed055'),
('amirtha', 'amirtha@gmail.com', 'Technician', 'T2222', 'Technician', 'technician', 'e10adc3949ba59abbe56e057f20f883e'),
('testadmin', 'testadmin@gmail.com', 'Admin', '1000', 'admin', 'testadmin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `doctorname` varchar(40) NOT NULL,
  `stregno` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `symptoms` varchar(100) NOT NULL,
  `disease` varchar(150) NOT NULL,
  `drugname_drugvalue` text NOT NULL,
  `isChecked` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`doctorname`, `stregno`, `date`, `symptoms`, `disease`, `drugname_drugvalue`, `isChecked`) VALUES
('kajasumanie', '2014sp103', '2017-03-01', 'nothing', 'fever', 'panadol-5,priticirone-10', 1),
('jenisha', '2014sp167', '2017-02-08', 'headache', 'fever', 'panadol-5,cplepx-15', 1),
('njkjkk', 'jkj', '0006-06-05', 'uyiuy', 'nb', 'n nbnbbv', 1),
('G.Thenuga', '2000sp157', '0000-00-00', 'headache', 'fever', 'panadol-5', 0),
('laal', '2014sp103', '0002-01-12', 'fever', 'fff', 'panadol-3,nnn-8', 0),
('laal', '2014sp103', '0002-01-12', 'fever', 'fff', 'panadol-3,nnn-8', 0),
('bvm,hbvmk', '2222', '0000-00-00', 'glujk', 'khklki', 'huj-9,hjhk-0', 0),
('bvm,hbvmk', '2222', '0000-00-00', 'glujk', 'khklki', 'huj-9,hjhk-0', 0),
('iulytgliu', 'hghyuhy', '0043-04-05', 'iukg;hbjk', ';iugiukhghiuo', 'hjujh-0,hghjj-8', 0),
('', '', '0000-00-00', '', '', '', 0),
('', '', '0000-00-00', '', '', '', 0),
('', '', '0000-00-00', '', '', '', 0),
('', '', '0000-00-00', '', '', '', 0),
('', '', '0000-00-00', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staffdetails`
--

CREATE TABLE `staffdetails` (
  `sregno` varchar(10) NOT NULL,
  `faculty` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `martialstate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE `staff_details` (
  `sregno` varchar(11) NOT NULL,
  `faculty` text NOT NULL,
  `dob` date NOT NULL,
  `fullname` text NOT NULL,
  `raddress` varchar(50) NOT NULL,
  `paddress` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` text NOT NULL,
  `designation` text NOT NULL,
  `department` text NOT NULL,
  `martialstate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`sregno`, `faculty`, `dob`, `fullname`, `raddress`, `paddress`, `age`, `gender`, `designation`, `department`, `martialstate`) VALUES
('4hgbjhg', 'faculty', '0000-00-00', '', '', '', 0, '', '', '', ''),
('fjfjfj', 'faculty', '0000-00-00', '', '', '', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `stregno` varchar(20) NOT NULL,
  `faculty` varchar(30) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `lastschool` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `petname` varchar(10) NOT NULL,
  `tpno` int(10) NOT NULL,
  `illness` varchar(20) NOT NULL,
  `fartheroccup` varchar(20) NOT NULL,
  `fatherage` int(5) NOT NULL,
  `motheroccup` varchar(20) NOT NULL,
  `motherage` int(5) NOT NULL,
  `usertype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`stregno`, `faculty`, `fullname`, `address`, `dob`, `lastschool`, `password`, `petname`, `tpno`, `illness`, `fartheroccup`, `fatherage`, `motheroccup`, `motherage`, `usertype`) VALUES
('2014bad123', 'management', 'M.Malar', 'jaffna', '2016-01-05', 'jaffna centerl', '123', 'mala', 771239658, 'cancer', 'farmer', 87, 'house wife', 89, 'student'),
('2014sp103', 'science', 'kajasumanie kanapathipillai', 'karampakam,mirusuvil.', '2016-10-03', ' Hindu College', '123', 'kajas', 770000000, 'fever', 'principal', 61, 'architecture &design', 60, 'student'),
('2014sp122', 'science', 'G.Thenuga', 'pallai', '2016-10-02', 'pallai', '123456', 'thenu', 770123456, 'fever', 'farmer', 45, 'house wife', 45, 'student'),
('2015bad172', 'management', 'ramana arulthas', 'pallai', '2014-01-13', 'centerl college', '1234', 'rama', 771234567, 'fever', 'farmer', 54, 'house wife', 53, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `stregno` varchar(14) NOT NULL,
  `faculty` text NOT NULL,
  `date` date NOT NULL,
  `fullname` text NOT NULL,
  `raddress` varchar(20) NOT NULL,
  `paddress` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `lastsch` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `usertype` text NOT NULL,
  `pname` text NOT NULL,
  `address` varchar(25) NOT NULL,
  `tpno` varchar(10) NOT NULL,
  `illness` text NOT NULL,
  `foccup` text NOT NULL,
  `fage` int(2) NOT NULL,
  `fill` text NOT NULL,
  `fstate` text NOT NULL,
  `moccup` text NOT NULL,
  `mage` int(2) NOT NULL,
  `mill` text NOT NULL,
  `mstate` text NOT NULL,
  `boccup` text NOT NULL,
  `bage` int(2) NOT NULL,
  `bill` text NOT NULL,
  `bstate` text NOT NULL,
  `soccup` varchar(20) NOT NULL,
  `sage` int(2) NOT NULL,
  `sill` text NOT NULL,
  `sstate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`stregno`, `faculty`, `date`, `fullname`, `raddress`, `paddress`, `dob`, `lastsch`, `password`, `usertype`, `pname`, `address`, `tpno`, `illness`, `foccup`, `fage`, `fill`, `fstate`, `moccup`, `mage`, `mill`, `mstate`, `boccup`, `bage`, `bill`, `bstate`, `soccup`, `sage`, `sill`, `sstate`) VALUES
('', 'faculty', '0000-00-00', '', '', '', '0000-00-00', '', 'd41d8cd98f00', 'student', '', '', '', '', '', 0, '', '', '', 0, '', '', '', 0, '', ' ', '', 0, '', ''),
('4', '5', '0000-00-00', '8', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', 0, '', '', '', 0, '', ''),
('ccc', 'faculty', '0000-00-00', '', '', '', '0000-00-00', '', 'e5bb23797bfe', 'student', '', '', '', '', '', 0, '', '', '', 0, '', '', '', 0, '', ' ', '', 0, '', ''),
('cfgbfcdghb', 'faculty', '0000-00-00', '', '', '', '0000-00-00', '', 'd41d8cd98f00', 'student', '', '', '', '', '', 0, '', '', '', 0, '', '', '', 0, '', ' ', '', 0, '', ''),
('dfbvdf', 'faculty', '0000-00-00', '', '', '', '0000-00-00', '', 'd41d8cd98f00', 'student', '', '', '', '', '', 0, '', '', '', 0, '', '', '', 0, '', ' ', '', 0, '', ''),
('dffg', 'Science', '4534-02-05', 'bhjgj', 'khkjhjk', 'khkjhkjhg', '0000-00-00', 'gjhgjhgjh', '96e79218965e', 'student', 'ujtgjy', 'gtjh', '4444444444', '', 'mnbmn', 45, 'kl;;k', 'alive', 'hjkhkj', 78, 'iol', 'alive', '23.5', 45, 'gjhg', ' alive', 'hkjhkj', 45, 'xvcx', 'alive'),
('fvfdgfdfh', 'faculty', '0000-00-00', '', '', '', '0000-00-00', '', 'e5bb23797bfe', 'student', '', '', '', '', '', 0, '', '', '', 0, '', '', '', 0, '', ' ', '', 0, '', ''),
('gjhgj', 'faculty', '0000-00-00', '', '', '', '0000-00-00', '', 'd41d8cd98f00', 'student', '', '', '', '', '', 0, '', '', '', 0, '', '', '', 0, '', ' ', '', 0, '', ''),
('llkl', 'faculty', '0000-00-00', '', '', '', '0000-00-00', '', '82d0df5653e1', 'student', '', '', '', '', '', 0, '', '', '', 0, '', '', '', 0, '', ' ', '', 0, '', ''),
('tuuiytiuyt', 'faculty', '0000-00-00', '', '', '', '0000-00-00', '', 'd41d8cd98f00', 'student', '', '', '', '', '', 0, '', '', '', 0, '', '', '', 0, '', ' ', '', 0, '', ''),
('xcdvfd', 'faculty', '0000-00-00', '', '', '', '0000-00-00', '', '277b0f5dae92', 'student', '', '', '', '', '', 0, '', '', '', 0, '', '', '', 0, '', ' ', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tabletavai`
--

CREATE TABLE `tabletavai` (
  `no` int(11) NOT NULL,
  `tabletName` varchar(15) NOT NULL,
  `storkAvail` int(11) NOT NULL,
  `isChecked` tinyint(2) NOT NULL,
  `Dosage_form` varchar(50) NOT NULL,
  `Strength` varchar(50) NOT NULL,
  `Marketing_status` varchar(50) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Expires_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabletavai`
--

INSERT INTO `tabletavai` (`no`, `tabletName`, `storkAvail`, `isChecked`, `Dosage_form`, `Strength`, `Marketing_status`, `Company`, `Expires_date`) VALUES
(2, 'cplepx', 500, 0, 'Injectable,Injection', '100mg', 'Discontinued', 'LABI', '2017-07-28'),
(3, 'digene', 789, 0, '', '', '', '', '2017-04-04'),
(4, 'panadol', 100, 0, '', '', '', '', '2017-03-05'),
(7, 'gdawk', 0, 0, 'sjo;i', 'rsrijh', 'jgen', 'djh', '2017-04-18');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_type` varchar(20) NOT NULL,
  `stregno` varchar(15) NOT NULL,
  `treatmentid` varchar(15) NOT NULL,
  `test_result` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_type`, `stregno`, `treatmentid`, `test_result`, `date`) VALUES
('urine', '2014sp103', '1234', '', '2017-03-02'),
('blood', '2015bad172', '1235', 'negative', '2017-02-13'),
('', '', '', '', '0000-00-00'),
('Urine', '2015sp123', 'K456', 'possitive', '2014-08-09'),
('Blood', 'ewf', 'qewqae', 'qaewaqe', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `test_require`
--

CREATE TABLE `test_require` (
  `stregno` varchar(10) NOT NULL,
  `test_type` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `isChecked` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_require`
--

INSERT INTO `test_require` (`stregno`, `test_type`, `date`, `isChecked`) VALUES
('2014sp103', 'blood', '2017-03-01', 1),
('2015bad172', 'urine', '2017-03-03', 1),
('ghbjn', 'Blood', '0000-00-00', 0),
('2016art123', 'Urine', '2014-03-09', 0),
('2000sp156', 'Blood', '2000-09-03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `usertype` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phoneno` int(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`usertype`, `name`, `phoneno`, `password`, `username`) VALUES
('doctor', 'kajasumanie', 0, '123456', 'doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newmeduser`
--
ALTER TABLE `newmeduser`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD PRIMARY KEY (`sregno`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`stregno`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`stregno`);

--
-- Indexes for table `tabletavai`
--
ALTER TABLE `tabletavai`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabletavai`
--
ALTER TABLE `tabletavai`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
