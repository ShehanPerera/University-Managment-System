-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2017 at 09:55 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostelms`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_hostel`
--

CREATE TABLE `student_hostel` (
  `reg_no` varchar(15) NOT NULL,
  `hostel_id` varchar(10) NOT NULL,
  `room_no` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_hostel`
--

INSERT INTO `student_hostel` (`reg_no`, `hostel_id`, `room_no`) VALUES
('2013/eng/005', 'H02', '124'),
('2014/csc/028', 'H04', '0'),
('2014/csc/038', 'H02', '0'),
('2014/SB/111', 'H01', 'H01-01'),
('2014CSC015', 'H01', 'H01-01'),
('2014SP048', 'H04', '0'),
('2014SP056', 'H04', '0'),
('2014SP112', 'H04', '0'),
('2014sp149', 'H01', 'H01-02'),
('2014sp212', 'H01', 'H01-01'),
('2014SP245', 'H04', '0'),
('2015/sp/112', 'H04', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_hostel`
--
ALTER TABLE `student_hostel`
  ADD PRIMARY KEY (`reg_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
