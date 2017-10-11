-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2017 at 01:24 PM
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
-- Table structure for table `gurdian_detail`
--

CREATE TABLE `gurdian_detail` (
  `reg_no` varchar(15) NOT NULL,
  `gurdian_name` varchar(50) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `police_station` varchar(50) NOT NULL,
  `emergency_name` varchar(50) NOT NULL,
  `emergency_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gurdian_detail`
--

INSERT INTO `gurdian_detail` (`reg_no`, `gurdian_name`, `relationship`, `contact_no`, `adress`, `police_station`, `emergency_name`, `emergency_no`) VALUES
('', '', '', 0, '', '', '', 0),
('2014/CSC/01', 'dkfjdlkf', 'ldskjf', 6546658, 'dsflsd, dfsdf,sdfsdf', 'dfsdf', 'sdfsdf', 456876),
('2014/CSC/02', 'dkfjdlkf', 'ldskjf', 6546658, 'dsflsd, dfsdf,sdfsdf', 'dfsdf', 'sdfsdf', 456876),
('2014/CSC/033', 'fdgdfg', 'dfgdf', 564, 'dsfsdfsd', 'sdfgsdf', 'jhgjhgjhg', 0),
('2014/CSC/17', 'dkfjdlkf', 'ldskjf', 6546658, 'dsflsd, dfsdf,sdfsdf', 'dfsdf', 'sdfsdf', 456876),
('2014/sp/03', 'dkfjdlkf', 'ldskjf', 6546658, 'dsflsd, dfsdf,sdfsdf', 'dfsdf', 'sdfsdf', 456876),
('2014/sp/04', 'dkfjdlkf', 'ldskjf', 6546658, 'dsflsd, dfsdf,sdfsdf', 'dfsdf', 'sdfsdf', 456876),
('2014/sp/05', 'dkfjdlkf', 'ldskjf', 6546658, 'dsflsd, dfsdf,sdfsdf', 'dfsdf', 'sdfsdf', 456876),
('2014/sp/08', 'dkfjdlkf', 'ldskjf', 6546658, 'dsflsd, dfsdf,sdfsdf', 'dfsdf', 'sdfsdf', 456876),
('2014/sp/09', 'dkfjdlkf', 'ldskjf', 6546658, 'dsflsd, dfsdf,sdfsdf', 'dfsdf', 'sdfsdf', 456876),
('2014/sp/10', 'dkfjdlkf', 'ldskjf', 6546658, 'dsflsd, dfsdf,sdfsdf', 'dfsdf', 'sdfsdf', 456876),
('2014/sp/11', 'dkfjdlkf', 'ldskjf', 6546658, 'dsflsd, dfsdf,sdfsdf', 'dfsdf', 'sdfsdf', 456876),
('2014/sp/12', 'dkfjdlkf', 'ldskjf', 6546658, 'dsflsd, dfsdf,sdfsdf', 'dfsdf', 'sdfsdf', 456876),
('2014/sp/13', 'dkfjdlkf', 'ldskjf', 6546658, 'dsflsd, dfsdf,sdfsdf', 'dfsdf', 'sdfsdf', 456876),
('2014/sp/14', 'dkfjdlkf', 'ldskjf', 6546658, 'dsflsd, dfsdf,sdfsdf', 'dfsdf', 'sdfsdf', 456876),
('2014/sp/15', 'dkfjdlkf', 'ldskjf', 6546658, 'dsflsd, dfsdf,sdfsdf', 'dfsdf', 'sdfsdf', 456876),
('2014/sp/16', 'dkfjdlkf', 'ldskjf', 6546658, 'dsflsd, dfsdf,sdfsdf', 'dfsdf', 'sdfsdf', 456876),
('2014/sp/17', 'dkfjdlkf', 'ldskjf', 6546658, 'dsflsd, dfsdf,sdfsdf', 'dfsdf', 'sdfsdf', 456876),
('2014CSC015', 'D.O.Gunarathne', 'Father', 728549647, 'Gold Road,Polonnaruwa', 'Polonnaruwa', 'Fast Gandolf', 728549647),
('2014CSC017', 'A.D.Gunasekara', 'Father', 714856724, '47,OldTown,Anuradhapura', 'Anuradhapura', 'Ruwan kalpage', 714856724),
('2014CSC033', 'U.G.Manathunga', 'Father', 724869514, 'Cols Street,Badulla', 'Badulla', 'Remong Samis', 724869514),
('2014CSC036', 'G.F.Sennanayaka', 'Father', 714859647, '45,Freeman Street,Anuradhapura', 'Anuradhapura', 'D.N.Gunasinghe', 714589625),
('2014CSC039', 'J.S.Jayalath', 'Father', 714865274, '45,Daw Road,Kurunegala', 'Kurunegala', 'Theenia Dangla', 714865274),
('2014CSC040', 'K.D.Bandara', 'Father', 719856320, '15,Food Road,Jaffna', 'Jaffna', 'Havan Jadog', 719856320),
('2014SP048', 'H.D.Ranathunga', 'Father', 714859624, '26,Faints Street,Colombo', 'Colombo', 'Grindolf Holl', 714859624),
('2014SP056', 'K.Dharamapriya', 'Father', 714859625, '25,Bats Street,Galle', 'Galle', 'Jacob Mahen', 714859625),
('2014SP112', 'J.K.Thennakoon', 'Father', 758496218, '74,Halls Street,Matara', 'Matara', 'Dan Chadeef', 758496218),
('2014SP245', 'B.D.Hewage', 'Father', 714852695, '56,Kain Road,Hambantota', 'Hambantota', 'Has Nand', 714852695),
('54545', 'yfuyjgbkjg', 'bhvjgvj', 6645631, '654645', 'yufuygvj', 'yfgy', 5636351),
('Reg No', 'Gurdian Name', 'Relationship', 0, 'Gurdian Address', 'Nearby Police Station', 'Emergency call Name', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hostel_addmission`
--

CREATE TABLE `hostel_addmission` (
  `reg_no` varchar(10) NOT NULL,
  `Admission_date` date NOT NULL,
  `vacate_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_addmission`
--

INSERT INTO `hostel_addmission` (`reg_no`, `Admission_date`, `vacate_date`) VALUES
('2014/CSC/0', '0000-00-00', '0000-00-00'),
('2014/CSC/1', '0000-00-00', '0000-00-00'),
('2014CSC015', '0000-00-00', '0000-00-00'),
('2014CSC017', '0000-00-00', '0000-00-00'),
('2014CSC033', '0000-00-00', '0000-00-00'),
('2014CSC036', '0000-00-00', '0000-00-00'),
('2014CSC039', '0000-00-00', '0000-00-00'),
('2014CSC040', '0000-00-00', '0000-00-00'),
('2014SP048', '0000-00-00', '0000-00-00'),
('2014SP056', '0000-00-00', '0000-00-00'),
('2014SP112', '0000-00-00', '0000-00-00'),
('2014SP245', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_detail`
--

CREATE TABLE `hostel_detail` (
  `id` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `anual_payment` int(11) NOT NULL,
  `category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_detail`
--

INSERT INTO `hostel_detail` (`id`, `name`, `address`, `contact_no`, `capacity`, `available`, `anual_payment`, `category`) VALUES
('H22', 'Kaladdi', 'sdflsdfj', 654654, 4, 2500, 4, 'Male'),
('H55', 'balasingham', 'jaffna', 0, 200, 50, 2500, 'male'),
('H66', 'AC', 'jaffna', 0, 300, 100, 2400, 'female'),
('kaladdi', 'H44', '64654654', 65465465, 60, 60, 0, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_room`
--

CREATE TABLE `hostel_room` (
  `Room_ID` varchar(10) NOT NULL,
  `Hos_ID` varchar(30) NOT NULL,
  `max_Cap` int(11) NOT NULL,
  `cur_Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_room`
--

INSERT INTO `hostel_room` (`Room_ID`, `Hos_ID`, `max_Cap`, `cur_Amount`) VALUES
('', '', 0, 0),
('RN005', '2', 0, 0),
('RN007', '1', 0, 0),
('RN009', '1', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hostel_staff`
--

CREATE TABLE `hostel_staff` (
  `hostel_id` varchar(10) NOT NULL,
  `warden_id` varchar(10) NOT NULL,
  `subwarden_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_staff`
--

INSERT INTO `hostel_staff` (`hostel_id`, `warden_id`, `subwarden_id`) VALUES
('H77', 'no', 'no'),
('H77', 'no', 'no'),
('kaladdi', 'no', 'no'),
('H22', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `new_gurdian_detail`
--

CREATE TABLE `new_gurdian_detail` (
  `reg_no` varchar(15) NOT NULL,
  `gurdian_name` varchar(50) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `police_station` varchar(50) NOT NULL,
  `emergency_name` varchar(50) NOT NULL,
  `emergency_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `new_student_contact`
--

CREATE TABLE `new_student_contact` (
  `reg_no` varchar(15) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `resedential_adress` varchar(50) NOT NULL,
  `district` varchar(10) NOT NULL,
  `gs_devision` varchar(10) NOT NULL,
  `ds_devision` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `new_student_detail`
--

CREATE TABLE `new_student_detail` (
  `reg_no` varchar(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `name_initial` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year_of_study` int(3) NOT NULL,
  `aproval` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `Index_No` int(11) NOT NULL,
  `reg_No` varchar(15) NOT NULL,
  `Paid_amount` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `BalanceToPay` int(11) NOT NULL,
  `payday` date NOT NULL,
  `admition_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`Index_No`, `reg_No`, `Paid_amount`, `payment`, `BalanceToPay`, `payday`, `admition_Date`) VALUES
(5, '2014/sp/08', 500, 500, 2000, '2017-03-07', '0000-00-00'),
(6, '2014/CSC/033', 1500, 1500, 1000, '2017-03-07', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `staff_service`
--

CREATE TABLE `staff_service` (
  `id` varchar(10) NOT NULL,
  `service_adress` varchar(50) NOT NULL,
  `relevent_hostel1` varchar(10) NOT NULL,
  `relevent_hostel2` varchar(10) NOT NULL,
  `relevent_hostel3` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_contact`
--

CREATE TABLE `student_contact` (
  `reg_no` varchar(15) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `resedential_adress` varchar(50) NOT NULL,
  `district` varchar(10) NOT NULL,
  `gs_devision` varchar(10) NOT NULL,
  `ds_devision` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_contact`
--

INSERT INTO `student_contact` (`reg_no`, `contact_no`, `email`, `resedential_adress`, `district`, `gs_devision`, `ds_devision`) VALUES
('', 0, '', '', '', '', ''),
('2014/CSC/01', 74654654, 'sampath@gmail.com', 'mathugama', 'kaluthara', 'owitigala', 'mathugama'),
('2014/CSC/02', 74654654, 'sampath@gmail.com', 'mathugama', 'kaluthara', 'owitigala', 'mathugama'),
('2014/CSC/033', 6548954, 'vikum.dheemantha@gma', 'dfgdfg', 'Badulla', 'lkjlkjlk', 'sdfgsdf'),
('2014/CSC/17', 74654654, 'sampath@gmail.com', 'mathugama', 'kaluthara', 'owitigala', 'mathugama'),
('2014/sp/03', 74654654, 'sampath@gmail.com', 'mathugama', 'kaluthara', 'owitigala', 'mathugama'),
('2014/sp/04', 74654654, 'sampath@gmail.com', 'mathugama', 'kaluthara', 'owitigala', 'mathugama'),
('2014/sp/05', 74654654, 'sampath@gmail.com', 'mathugama', 'kaluthara', 'owitigala', 'mathugama'),
('2014/sp/08', 74654654, 'sampath@gmail.com', 'mathugama', 'kaluthara', 'owitigala', 'mathugama'),
('2014/sp/09', 74654654, 'sampath@gmail.com', 'mathugama', 'kaluthara', 'owitigala', 'mathugama'),
('2014/sp/10', 74654654, 'sampath@gmail.com', 'mathugama', 'kaluthara', 'owitigala', 'mathugama'),
('2014/sp/11', 74654654, 'sampath@gmail.com', 'mathugama', 'kaluthara', 'owitigala', 'mathugama'),
('2014/sp/12', 74654654, 'sampath@gmail.com', 'mathugama', 'kaluthara', 'owitigala', 'mathugama'),
('2014/sp/13', 74654654, 'sampath@gmail.com', 'mathugama', 'kaluthara', 'owitigala', 'mathugama'),
('2014/sp/14', 74654654, 'sampath@gmail.com', 'mathugama', 'kaluthara', 'owitigala', 'mathugama'),
('2014/sp/15', 74654654, 'sampath@gmail.com', 'mathugama', 'kaluthara', 'owitigala', 'mathugama'),
('2014/sp/16', 74654654, 'sampath@gmail.com', 'mathugama', 'kaluthara', 'owitigala', 'mathugama'),
('2014/sp/17', 74654654, 'sampath@gmail.com', 'mathugama', 'kaluthara', 'owitigala', 'mathugama'),
('2014CSC015', 774586254, 'ruwan@gmail.com', 'Gold Road,Polonnaruwa', 'Polonnaruw', 'Polonnaruw', 'Polonnaruw'),
('2014CSC017', 715896541, 'vikka@gmail.com', '47,OldTown,Anuradhapura', 'Anuradhapu', 'Anuradhapu', 'Anuradhapu'),
('2014CSC033', 714869534, 'ruchcha@gmail.com', 'Cols Street,Badulla', 'Badulla', 'Badulla', 'Badulla'),
('2014CSC036', 714856947, 'sachini@gmail.com', '45,Freeman Street,Anuradhapura', 'Anuradhapu', 'Anuradhapu', 'Anuradhapu'),
('2014CSC039', 715984535, 'asha@yahoo.com', '45,Daw Road,Kurunegala', 'Kurunegala', 'Kurunegala', 'Kurunegala'),
('2014CSC040', 714852368, 'Salin@gmail.com', '15,Food Road,Jaffna', 'Jaffna', 'Jaffna', 'Jaffna'),
('2014SP048', 758361248, 'feat@gmail.com', '26,Faints Street,Colombo', 'Colombo', 'Colombo', 'Colombo'),
('2014SP056', 758965412, 'deen@gmail.com', '25,Bats Street,Galle', 'Galle', 'Galle', 'Galle'),
('2014SP112', 725984125, 'van@yahoo.com', '74,Halls Street,Matara', 'Matara', 'Matara', 'Matara'),
('2014SP245', 714896354, 'xenon@gmail.com', '56,Kain Road,Hambantota', 'Hambantota', 'Hambantota', 'Hambantota'),
('54545', 2147483647, 'uigikuhk', '465465313', '546453', '54653', '5465'),
('Reg No', 0, 'E-mail', 'residential address', 'district', 'gs Div', 'Ds Div');

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE `student_detail` (
  `reg_no` varchar(15) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `name_initial` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year_of_study` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_detail`
--

INSERT INTO `student_detail` (`reg_no`, `full_name`, `name_initial`, `sex`, `nic`, `dob`, `faculty`, `course`, `year_of_study`) VALUES
('2014/CSC/01', 'Sanjeewa Dias', 'S.Dias', 'male', '933254895V', '1993-04-20', 'Science', 'Physical Science', 2),
('2014/CSC/02', 'Sanjeewa Dias', 'S.Dias', 'male', '933254895V', '1993-04-20', 'Science', 'Physical Science', 2),
('2014/CSC/03', 'gfhgfh', 'hgfhgfhg', 'Male', '943250995v', '1993-01-02', 'Agriculture', 'Agree', 1),
('2014/CSC/033', 'Vikum Dheemantha', 'T. M. V. D. Gunasekara', 'Male', '943250995v', '1993-11-20', 'science', 'Computer Science', 1),
('2014/CSC/17', 'Sanjeewa Dias', 'S.Dias', 'male', '933254895V', '1993-04-20', 'Science', 'Physical Science', 2),
('2014/sp/03', 'sampath lakshan', 'S. Lakshan', 'male', '933254895V', '1993-04-20', 'Science', 'Physical Science', 2),
('2014/sp/04', 'sampath lakshan', 'S. Lakshan', 'male', '933254895V', '1993-04-20', 'Science', 'Physical Science', 2),
('2014/sp/05', 'sampath lakshan', 'S. Lakshan', 'male', '933254895V', '1993-04-20', 'Science', 'Physical Science', 2),
('2014/sp/08', 'sampath lakshan', 'S. Lakshan', 'male', '933254895V', '1993-04-20', 'Science', 'Physical Science', 2),
('2014/sp/09', 'sampath lakshan', 'S. Lakshan', 'male', '933254895V', '1993-04-20', 'Science', 'Physical Science', 2),
('2014/sp/10', 'sampath lakshan', 'S. Lakshan', 'male', '933254895V', '1993-04-20', 'Science', 'Physical Science', 2),
('2014/sp/11', 'sampath lakshan', 'S. Lakshan', 'male', '933254895V', '1993-04-20', 'Science', 'Physical Science', 2),
('2014/sp/12', 'sampath lakshan', 'S. Lakshan', 'male', '933254895V', '1993-04-20', 'Science', 'Physical Science', 2),
('2014/sp/13', 'sampath lakshan', 'S. Lakshan', 'male', '933254895V', '1993-04-20', 'Science', 'Physical Science', 2),
('2014/sp/14', 'sampath lakshan', 'S. Lakshan', 'male', '933254895V', '1993-04-20', 'Science', 'Physical Science', 2),
('2014/sp/15', 'sampath lakshan', 'S. Lakshan', 'male', '933254895V', '1993-04-20', 'Science', 'Physical Science', 2),
('2014/sp/16', 'sampath lakshan', 'S. Lakshan', 'male', '933254895V', '1993-04-20', 'Science', 'Physical Science', 2),
('2014/sp/17', 'sampath lakshan', 'S. Lakshan', 'male', '933254895V', '1993-04-20', 'Science', 'Physical Science', 2),
('2014CSC015', 'Asela Gunarathne', 'A.Gunarathne', 'Male', '935684217v', '0000-00-00', 'Science', 'Computer Science', 2),
('2014CSC017', 'Vikum Dheemantha Gunasekara', 'V.D.Gunasekara', 'Male', '930958442v', '0000-00-00', 'Science', 'Computer Science', 2),
('2014CSC033', 'Ruchira Sachinthana Manathunga', 'R.S.Manathunga', 'Male', '930145882v', '0000-00-00', 'Science', 'Computer Science', 2),
('2014CSC036', 'Sacini Iresha Nissanka', 'S.I.Nissanka', 'Female', '936852447v', '0000-00-00', 'Science', 'Computer Science', 2),
('2014CSC039', 'Ashan Sandaru Jayalath', 'A.S.Jayalath', 'Male', '926874531v', '0000-00-00', 'Science', 'Computer Science', 2),
('2014CSC040', 'Janaka Prasanna  Bandara', 'J.P.Bandara', 'Male', '930856745v', '0000-00-00', 'Science', 'Computer Science', 2),
('2014SP048', 'Lahiru Chammika Ranathunga', 'L.C.Ranathunga', 'Male', '930856771v', '0000-00-00', 'Science', 'Physical Science', 2),
('2014SP056', 'Dinesh Chandimal', 'D.Chnadimal', 'Male', '931597885v', '0000-00-00', 'Science', 'Physical Science', 2),
('2014SP112', 'Malinda Bandara Thennakoon', 'M.B.Thennakoon', 'Male', '930854776v', '0000-00-00', 'Science', 'Physical Science', 2),
('2014SP245', 'Ruwan Darshana Hewage', 'R.D.Hewage', 'Male', '931683147v', '0000-00-00', 'Science', 'Physical Science', 2),
('54545', 'bk,b', 'bkb,', 'Male', '6561351', '1993-04-20', 'Agriculture', '6252', 2);

-- --------------------------------------------------------

--
-- Table structure for table `student_hostel`
--

CREATE TABLE `student_hostel` (
  `reg_no` varchar(15) NOT NULL,
  `hostel_id` varchar(10) NOT NULL,
  `room_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_hostel`
--

INSERT INTO `student_hostel` (`reg_no`, `hostel_id`, `room_no`) VALUES
('2014/CSC/033', 'H55', '01'),
('54545', 'H55', 'hgjhgb');

-- --------------------------------------------------------

--
-- Table structure for table `student_log`
--

CREATE TABLE `student_log` (
  `id` int(11) NOT NULL,
  `reg_No` varchar(20) NOT NULL,
  `type` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `Discription` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_log`
--

INSERT INTO `student_log` (`id`, `reg_No`, `type`, `date`, `Discription`) VALUES
(1, '2014/csc/033', 'Medical', '0000-00-00', 'headeck'),
(2, '2014/sp/01', 'Medical', '2017-01-01', 'sdlkfjsdlkfjsldkjflksdjflkjsdlkfjlsdkjjjjjjjjjjjjj'),
(3, '2014/sp/01', 'Medical', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_pic`
--

CREATE TABLE `student_pic` (
  `reg_No` varchar(15) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `Image` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_pic`
--

INSERT INTO `student_pic` (`reg_No`, `name`, `Image`) VALUES
('2014CSC015', NULL, NULL),
('2014CSC017', NULL, NULL),
('2014CSC033', NULL, NULL),
('2014CSC036', NULL, NULL),
('2014CSC039', NULL, NULL),
('2014CSC040', NULL, NULL),
('2014SP048', NULL, NULL),
('2014SP056', NULL, NULL),
('2014SP112', NULL, NULL),
('2014SP245', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` varchar(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `UserName` varchar(40) NOT NULL,
  `pasword` varchar(65) NOT NULL,
  `type` varchar(10) NOT NULL,
  `Frist_login` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `Name`, `UserName`, `pasword`, `type`, `Frist_login`) VALUES
('s01', 'team Tracerts', 'admin', 'ecd00aa1acd325ba7575cb0f638b04a5', 'admin', 'no'),
('S001', 'Ruchira', 'ruc', '250cf8b51c773f3f8dc8b4be867a9a02', 'local', 'no'),
('S002', 'Vikum', 'vikum', '09ca3f5689e972d020088258b6a378ca', 'admin', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gurdian_detail`
--
ALTER TABLE `gurdian_detail`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `hostel_addmission`
--
ALTER TABLE `hostel_addmission`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `hostel_detail`
--
ALTER TABLE `hostel_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel_room`
--
ALTER TABLE `hostel_room`
  ADD PRIMARY KEY (`Room_ID`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`Index_No`);

--
-- Indexes for table `staff_service`
--
ALTER TABLE `staff_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_contact`
--
ALTER TABLE `student_contact`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `student_detail`
--
ALTER TABLE `student_detail`
  ADD PRIMARY KEY (`reg_no`,`nic`);

--
-- Indexes for table `student_hostel`
--
ALTER TABLE `student_hostel`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `student_log`
--
ALTER TABLE `student_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_pic`
--
ALTER TABLE `student_pic`
  ADD PRIMARY KEY (`reg_No`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `Index_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `student_log`
--
ALTER TABLE `student_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
