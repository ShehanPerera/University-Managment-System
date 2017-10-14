-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2017 at 08:38 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmanagementsystem1`
--

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `Reg_No` varchar(10) NOT NULL,
  `Game` varchar(15) NOT NULL,
  `Tournament_Name` varchar(20) NOT NULL,
  `Tournament_Year` varchar(10) NOT NULL,
  `Place` varchar(20) NOT NULL,
  `Achievment` varchar(20) NOT NULL,
  `Colours` varchar(20) NOT NULL,
  `Medal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`Reg_No`, `Game`, `Tournament_Name`, `Tournament_Year`, `Place`, `Achievment`, `Colours`, `Medal`) VALUES
('2014SP168', 'netball', 'interfaculty', '2016', '', '', '-', '-'),
('2014SP085', 'cricket', 'big match', '2016', 'first', '3 wickets', 'Full', 'Gold'),
('2014SP187', '3000m', 'inter university', '2016', '', 'faculty record', 'Full', 'Gold'),
('2014SP023', 'cricket', 'big match', '2016', '', 'man of the match', 'Full', '-'),
('2014SP115', 'cricket', 'inter faculty', '2016', 'first', '', 'Half', 'Gold');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
(1, 'All Day Event', '#40E0D0', '2016-01-01 00:00:00', '0000-00-00 00:00:00'),
(2, 'Long Event', '#FF0000', '2016-01-07 00:00:00', '2016-01-10 00:00:00'),
(3, 'Repeating Event', '#0071c5', '2016-01-09 16:00:00', '0000-00-00 00:00:00'),
(4, 'Conference', '#40E0D0', '2016-01-11 00:00:00', '2016-01-13 00:00:00'),
(5, 'Meeting', '#000', '2016-01-12 10:30:00', '2016-01-12 12:30:00'),
(6, 'Lunch', '#0071c5', '2016-01-12 12:00:00', '0000-00-00 00:00:00'),
(7, 'Happy Hour', '#0071c5', '2016-01-12 17:30:00', '0000-00-00 00:00:00'),
(8, 'Dinner', '#0071c5', '2016-01-12 20:00:00', '0000-00-00 00:00:00'),
(9, 'Birthday Party', '#FFD700', '2016-01-14 07:00:00', '2016-01-14 07:00:00'),
(10, 'Double click to change', '#008000', '2016-01-28 00:00:00', '0000-00-00 00:00:00'),
(11, '', '', '2017-05-02 00:00:00', '2017-05-03 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `logindtails`
--

CREATE TABLE `logindtails` (
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logindtails`
--

INSERT INTO `logindtails` (`username`, `password`, `phonenumber`, `email`) VALUES
('admin', 'a43c27c2babefd68df8a694900f30a1c', 776072701, 'kasun@gmail.com'),
('gayan', '3c31dfa838d963ce92606c7645d9870f', 2147483647, 'kk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `Reg_No` varchar(15) NOT NULL,
  `Category` varchar(15) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Date_of_start_Acadamic_Course` date NOT NULL,
  `Date_of_completion_of_Course` date NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Phone_Number` int(20) DEFAULT NULL,
  `Gender` varchar(6) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Place` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`Reg_No`, `Category`, `Name`, `Date_of_Birth`, `Date_of_start_Acadamic_Course`, `Date_of_completion_of_Course`, `NIC`, `Address`, `Phone_Number`, `Gender`, `Status`, `Place`) VALUES
(' 2014SB238', 'football', 'Chathura Kottapola', '1990-03-12', '2014-04-05', '2018-04-10', '902300100V', 'aranayaka,kegalla', 782933645, 'male', 'Active', ''),
('2010A023', 'gymnastic', 'Buddika Bandara', '1989-01-20', '2010-02-03', '2014-02-20', '895623111V', 'pinnawala,kurunrgala', 725699821, 'male', 'Deactive', ''),
('2010A056', 'karate', 'Dasuni Darsha', '1987-12-02', '2010-04-15', '2014-04-15', '875236220V', 'dewala para,kaluthara.', 712000100, 'female', 'Active', ''),
('2010SB101', 'carrom', 'shirithi hasn', '1988-10-12', '2010-04-02', '2014-04-10', '883552658V', 'No:5,vavniya', 785523369, 'female', 'Deactive', ''),
('2011CSC036', '200m', 'A.W.Chathura Nawarathna', '1989-01-03', '2011-04-21', '2015-04-21', '8925336021V', 'No:21,Pahalagama,gampaha.', 784569863, 'male', 'Deactive', ''),
('2011CSC036', 'basketball', 'A.W.Chathura Nawarathna', '1989-01-03', '2011-04-21', '2015-04-21', '892533602V', 'No:21,Pahalagama,gampaha.', 784569863, 'male', 'Deactive', 'Captan'),
('2012BAD168', 'netball', 'Nelum Lakmali', '1990-06-11', '2012-02-25', '2016-03-02', '906541250V', 'Galayaya,Pannala', 775886488, 'female', 'Deactive', ''),
('2012BAD230', 'rugby', 'Jiwantha kumara thunga', '1990-06-18', '2012-01-20', '2016-01-25', '901336558V', 'Pallewela ,gampaha', 752222300, 'male', 'Deactive', ''),
('2012BAD230', 'taekwondo', 'Jiwantha kumara thunga', '1990-06-18', '2012-01-20', '2016-03-25', '901336558V', 'Pallewela ,gampaha', 0, 'male', 'Deactive', ''),
('2012BCO240', 'elle', 'Hasini Lanka', '1991-09-12', '2012-01-05', '2016-01-05', '915554212V', '"Punchigma,Rathnapuraya, "', 721022506, 'male', 'Deactive', ''),
('2012L023', 'hockey', 'Tharidu Rathnaya', '1990-10-11', '2012-03-20', '2016-03-25', '901256352V', 'miriswththa,gampaha', 725666912, 'male', 'Deactive', ''),
('2012L042', 'tennis', 'Ashan Madawa', '1992-10-25', '2012-02-05', '2016-02-05', '910223569V', 'kirulapana,', 0, 'male', 'Deactive', ''),
('2012L042', 'weightlifting', 'Ashan Madawa', '1991-10-25', '2012-02-05', '2016-02-05', '910223569V', 'kirulapana,', 711253363, 'male', 'Deactive', ''),
('2012SB032', 'baseball', 'Sivasuthan athitan', '1990-07-15', '2012-01-20', '2016-01-21', '901236892V', 'No:25,Nallur Road,Jaffna.', 771555530, 'male', 'Active', ''),
('2012SP202', 'cricket', 'Kasun Kalu Arachchi', '1993-05-24', '2013-03-25', '2017-04-10', '930225686V', 'No:31.thulhiriya,', 712566338, 'male', 'Active', ''),
('2013A029', 'taekwondo', 'Nilupiul Idrajith', '1991-01-22', '2013-03-20', '2017-03-20', '912300200V', 'moragahakanda,badulla', 705555111, 'male', 'Active', ''),
('2013A036', 'cricket', 'A.M.Suraj Chathuraga', '1992-12-23', '2013-03-21', '2016-03-21', '923568912V', 'Ihala kubura,anuradapura', 752336215, 'male', 'Deactive', ''),
('2013CSC126', 'elle', 'Samith dilanka', '1991-08-09', '2013-03-25', '2017-03-25', '910223065V', 'No,15,Bemmulla,gampaha', 752213361, 'male', 'Active', ''),
('2013L085', 'volleyball', 'Kasthuri Raja', '1992-02-27', '2013-03-10', '2017-03-20', '920122536V', 'Sabapathi Lane,jaffna', 715528333, 'male', 'Active', ''),
('2013SB075', 'netball', 'Damith Sadaruwan', '1991-05-21', '2013-02-25', '2017-02-28', '912336201V', 'Bech Rode,Hambanthota.', 723336521, 'male', 'Active', ''),
('2013SB075', 'rawing', 'Damith Sadaruwan', '1991-05-21', '2013-02-25', '2017-02-25', '912336201V', 'Bech Rode,Hambanthota.', 723336521, 'male', 'Active', ''),
('2013SB075', 'swimming', 'Damith Sadaruwan', '1991-05-21', '2013-02-25', '2017-02-25', '912336201V', 'Bech Rode,Hambanthota.', 723336521, 'male', 'Active', ''),
('2013SB075', 'wrestling', 'Damith Sadaruwan', '1991-05-21', '2013-02-25', '2017-02-25', '912336201V', 'Bech Rode,Hambanthota.', 723336521, 'male', 'Active', ''),
('2013SP122', '100m', 'Ruwan De Soisa', '1990-02-10', '2013-04-05', '2017-04-05', '903256896V', 'Ma Oya para,Giriulla', 724568935, 'male', 'Active', ''),
('2013SP122', 'rawing', 'Ruwan De Soisa', '1990-02-10', '2013-04-05', '2017-04-05', '903256896V', 'Ma Oya para,Giriulla', 724568935, 'male', 'Active', ''),
('2014L069', 'rugby', 'Piyumi Perera', '1992-02-03', '2014-04-05', '2017-04-10', '925663208V', 'Pahala Horavadunna,Pannala', 755869123, 'female', 'Active', ''),
('2014SB012', '200m', 'T.M.Dilshan Munasiha', '1993-05-12', '2014-04-05', '2017-04-05', '932215521V', 'No:61,Suriya wewa,Hambanthota.', 715223861, 'male', 'Active', ''),
('2014SB012', 'baseball', 'T.M.Dilshan Munasiha', '1993-05-12', '2014-04-05', '2017-04-15', '932215521V', 'No:12,Suriya wewa,Hambanthota.', 752336482, 'male', 'Active', ''),
('2014SB102', 'hockey', 'Parvika sri devi', '1991-02-09', '2014-04-05', '2018-04-08', '911923556V', 'bruns rode,jaffna.', 712223652, 'female', 'Active', ''),
('2014SB111', 'chess', 'Madawa melan', '1994-08-11', '2014-04-05', '2018-04-25', '942240966V', 'Ihala bamunessa,kurunegala', 758996423, 'male', 'Active', ''),
('2014SCS032', 'volleyball', 'Pruthwi raj', '1993-05-18', '2014-04-05', '2018-04-05', '942553215V', 'Raja amman,Vavniya.', 0, 'male', 'Active', ''),
('2014SP012', 'tennis', 'Lahiru madushanka', '1994-01-20', '2014-04-05', '2018-04-05', '942002510V', 'Vewa para,Rathnapura', 788933522, 'male', 'Active', ''),
('2014SP012', 'weightlifting', 'Lahiru madushanka', '1994-01-20', '2014-04-05', '2018-04-05', '942002510V', 'Vewa para,Rathnapura', 0, 'male', 'Active', ''),
('2014SP085', 'chess', 'kasun', '1994-06-02', '2013-04-12', '2018-03-16', '941542336v', '5143543', 0, 'male', 'Active', 'caption'),
('2014SP115', '200m', 'gayan', '1995-01-28', '2014-02-03', '2018-04-30', '95083010v', 'gjhgjguj', 667852432, 'male', 'Active', 'captain'),
('2014SP115', 'cricket', 'gayan', '1995-01-28', '2014-03-03', '2018-04-02', '950282010v', 'jaffna', 767881226, 'male', 'Active', 'Captain'),
('2014SP121', 'chess', 'Sadari mithrika', '1995-01-02', '2014-04-05', '2017-04-10', '952111362V', 'pukuna para,ampara', 752223395, 'female', 'Active', ''),
('2014SP131', 'karate', 'Asith Wanigasekara', '1993-11-12', '2014-04-05', '2018-04-05', '932226554V', 'samdi prara,nittabuwa', 712556223, 'male', 'Active', ''),
('2014SP141', 'badminton', 'A.lahiru nirmal', '1993-08-10', '2014-04-10', '2017-04-15', '937530221V', 'No 275/43,Negadagamuwa,Kotugoda', 710437545, 'male', 'Active', ''),
('2014SP141', 'wrestling', 'A.lahiru nirmal', '1993-08-10', '2014-04-10', '2017-04-15', '937530221V', 'No 275/43,Negadagamuwa,Kotugoda', 710437545, 'male', 'Active', ''),
('2014SP145', 'badminton', 'Oshada dushan ranasinha', '1993-05-08', '2014-04-10', '2017-04-15', '932514234v', 'No:61,Suriya wewa,Hambanthota.', 715223861, 'male', 'Active', ''),
('2014SP210', 'football', 'G.shehan akalanka', '1993-02-27', '2014-04-21', '2018-04-28', '935554283V', 'pallewela,gampaha', 782448236, 'male', 'Active', ''),
('2014SP212', 'badminton', 'W.Sakuni Pabasara', '1994-02-06', '2014-04-10', '2018-04-15', '943620012V', 'No:43/21,pansala para,pannala.', 715869322, 'female', 'Active', ''),
('2014SP231', 'thachchi', 'Sakuni Gunasekara', '1994-01-20', '2014-04-05', '2017-04-05', '940211889V', 'Mathle', 0, 'female', 'Active', ''),
('2015CSC008', 'gymnastic', 'Sanjeew Dias', '1995-10-25', '2015-03-30', '2018-04-05', '952111456V', 'wewa para,anuradapura', 785222362, 'male', 'Active', ''),
('2015L012', 'carrom', 'W.S.chathura alwis', '1994-05-02', '2015-04-21', '2018-04-22', '942336152V', '05,walwwaththa,colombo', 712536689, 'male', 'Active', ''),
('2015SB105', '100m', 'Tiruni Amasinha', '1994-08-24', '2015-03-20', '2019-03-25', '942000352V', 'siyabalapitiya,Anuradapura', 723330021, 'female', 'Active', ''),
('2015SB105', 'swimming', 'Tiruni Amasinha', '1994-08-24', '2015-03-20', '2019-03-25', '942000352V', 'siyabalapitiya,Anuradapura', 723330021, 'female', 'Active', ''),
('2015SP110', 'basketball', 'D.P.piyasena', '1993-02-10', '2015-04-15', '2019-04-05', '932221015V', 'No 275/45,Pahalagama,Rathgama.', 786632312, 'male', 'Active', ''),
('2015SP110', 'thachchi', 'D.P.piyasena', '1993-02-10', '2015-04-15', '2018-04-15', '932221015V', 'polgahawela', 772435692, 'male', 'Active', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`Reg_No`,`Category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
