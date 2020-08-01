-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 04:49 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scsit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(35) NOT NULL,
  `lastname` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'peter', 'villaceran', 'pedrolang', 'pedrolang');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `code` varchar(35) NOT NULL,
  `title` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `code`, `title`) VALUES
(1, 'BSIT', 'Computer'),
(2, 'Mar-e', 'Maritime Engineering'),
(3, 'HRM', 'Hotel and restaurants management');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `student_id` int(11) NOT NULL,
  `student_no` varchar(50) NOT NULL,
  `inquiry_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(35) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(30) NOT NULL,
  `civilstatus` varchar(35) NOT NULL,
  `nationality` varchar(35) NOT NULL,
  `religion` varchar(35) NOT NULL,
  `birthplace` varchar(35) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(35) NOT NULL,
  `contact` varchar(35) NOT NULL,
  `status` varchar(35) NOT NULL,
  `course` varchar(35) NOT NULL,
  `schoolyear` varchar(35) NOT NULL,
  `year_level` varchar(35) NOT NULL,
  `semester` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`student_id`, `student_no`, `inquiry_id`, `firstname`, `middlename`, `lastname`, `email`, `gender`, `age`, `civilstatus`, `nationality`, `religion`, `birthplace`, `birthday`, `address`, `contact`, `status`, `course`, `schoolyear`, `year_level`, `semester`) VALUES
(9, 'ID009', 0, 'junrey', 'quezon', 'ducay', 'fhaj@gmail.com', 'Male', 13, 'Single', 'filipino', 'catholic', 'patao', '1994-12-14', 'dfdfefe', '213453211', 'enrolled', 'BSIT', '2017-2018', 'First year', 'First'),
(10, 'ID0010', 0, 'darlyn', 'ribo', 'doble', 'darlyn@gmail.com', 'Male', 23, 'Single', 'filipino', 'catholic', 'ticad', '1983-11-29', 'sitio gawot', '23523232', 'enrolled', 'BSIT', '2017-2018', 'first year', 'First'),
(11, 'ID0011', 0, 'nyl', 'rad', 'dada', 'dada@hotme.com', 'Female', 18, 'Single', 'filipino', 'catholic', 'tangke', '1994-06-30', 'tangke,basta sa tangke', '0909090909', 'enrolled', 'BSIT', '2017-2018', 'fourth year', 'Second'),
(12, 'ID0012', 0, 'ju', 'dy', 'ann', 'judy@hh.com', 'Female', 12, 'Single', 'filipino', 'catholic', 'balidbid', '1997-08-24', 'balidbid lage', '09876565432', 'enrolled', 'BSIT', '2017-2018', 'fourth year', 'First'),
(13, '', 0, '', '', '', '', '', 0, '', '', '', '', '0000-00-00', '', '', 'pending', '', '', '', ''),
(14, 'ID0014', 0, 'gfgfff', 'saasa', 'fdfd', 'jask@gmail.com', 'Male', 12, 'Single', 'zsxc', 'ssf', 'dfdf', '1991-01-02', 'ksdksjkd', '1212', 'enrolled', 'BSIT', '2017-2018', 'First year', 'First');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `grade_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `gen_ave` varchar(35) NOT NULL,
  `year_level` varchar(35) NOT NULL,
  `semester` varchar(35) NOT NULL,
  `remarks` varchar(35) NOT NULL,
  `unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`grade_id`, `student_id`, `subject_id`, `gen_ave`, `year_level`, `semester`, `remarks`, `unit`) VALUES
(84, 9, 17, '2.3', 'First year', 'first', 'PASS', 3),
(85, 11, 18, '1.0', 'fourth year', 'second', 'PASS', 3),
(86, 12, 19, '1.6', 'fourth year', 'first', 'PASS', 3),
(87, 12, 20, '', 'fourth year', 'First', 'Active', 3),
(88, 12, 21, '1.9', 'fourth year', 'first', 'PASS', 6),
(89, 10, 17, '1.5', 'first year', 'first', 'PASS', 3),
(90, 9, 22, '1.0', 'First year', 'first', 'PASS', 6),
(91, 14, 17, '2.1', 'First year', 'first', 'PASS', 3),
(92, 14, 22, '', 'First year', 'First', 'Active', 6);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inquiry_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `year_level` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inquiry_id`, `student_id`, `name`, `year_level`, `semester`, `content`, `status`) VALUES
(1, 9, 'junrey ducay', '1st', 'first', '				\r\n									Code: IT123 \r\n                                    Title: Computer Graphics \r\n                                    Unit: 6                    \r\n                                    Grade: 1.0									Remarks: PASS								    \r\n				', 'Done'),
(2, 10, 'darlyn ribo doble', '1st', 'First', '				\r\n									Code: IT111 \r\n                                    Title: IT Programming 1 \r\n                                    Unit: 3                    \r\n                                    Grade: 									Remarks: Active								    \r\n				', 'Done'),
(3, 14, 'gfgfffsaasafdfd', 'First year', 'First', '				\r\n									Code: IT123 \r\n                                    Title: Computer Graphics \r\n                                    Unit: 6                    \r\n                                    Grade: 									Remarks: Active								    \r\n				', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructor_id` int(11) NOT NULL,
  `fullname` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructor_id`, `fullname`, `username`, `password`) VALUES
(12, 'peter villaceran', 'justpedro', 'pedro'),
(13, 'darlyn doble DOBLE', 'dada', 'dada');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fullname` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fullname`, `email`, `password`) VALUES
(1, '', 'darlyn@gmail.com', 'darlyn123'),
(2, '', 'dada@hotme.com', 'hahahaha'),
(3, '', 'judy@hh.com', 'judyann');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `code` varchar(35) NOT NULL,
  `title` varchar(35) NOT NULL,
  `unit` varchar(35) NOT NULL,
  `year` varchar(35) NOT NULL,
  `semester` varchar(35) NOT NULL,
  `pre_requisite` varchar(35) NOT NULL,
  `course_id` int(11) NOT NULL,
  `instructor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `code`, `title`, `unit`, `year`, `semester`, `pre_requisite`, `course_id`, `instructor_id`) VALUES
(17, 'IT111', 'IT Programming 1', '3', 'First year', 'first', '', 1, 12),
(18, 'IT 411', 'OJT', '3', 'Fourth year', 'second', '17', 1, 12),
(19, 'IT 441', 'distributed', '3', 'Fourth year', 'first', '', 1, 12),
(20, 'IT 442', 'PHP', '3', 'Fourth year', 'first', '19', 1, 12),
(21, 'IT 443', 'capstone2', '6', 'Fourth year', 'first', '21', 1, 13),
(22, 'IT123', 'Computer Graphics', '6', 'First year', 'first', '', 1, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inquiry_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
