-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 02:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `check_student_name`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `lecturer_id` int(11) NOT NULL,
  `lecturer_perfix` varchar(255) NOT NULL,
  `lecturer_fname` varchar(255) NOT NULL,
  `lecturer_lname` varchar(255) NOT NULL,
  `lecturer_type` int(11) NOT NULL,
  `lecturer_username` varchar(255) NOT NULL,
  `lecturer_password` varchar(255) NOT NULL,
  `lecturer_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecturer_id`, `lecturer_perfix`, `lecturer_fname`, `lecturer_lname`, `lecturer_type`, `lecturer_username`, `lecturer_password`, `lecturer_image`) VALUES
(3, 'นาย', 'ธีรทิน', 'ภู่ระมาต', 1, 'teeratin@gmail.com', '$2y$10$UjWPyQ700TV5nGIbukkFFuen6ZRjDtN.LT.rRaGLCZeS83lz0t3oG', 'uploads/1671110969_Screenshot_20221127_014252.png'),
(5, 'นาย', 'ฆราวัฒน์', 'สนธิเณร', 2, 'karawat@gmail.com', '$2y$10$2jTNoGF/8IV5LASQ5f4h7ucxQiUIR.nWiXBON.E1el.jh1HpHvt1a', 'uploads/1671109164_Screenshot_20221202_102113.png');

-- --------------------------------------------------------

--
-- Table structure for table `rate_score`
--

CREATE TABLE `rate_score` (
  `rs_id` int(11) NOT NULL,
  `rs_name` varchar(255) NOT NULL,
  `rs_punctual` int(11) NOT NULL,
  `rs_late` int(11) NOT NULL,
  `rs_absent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roll_call`
--

CREATE TABLE `roll_call` (
  `rc_id` int(11) NOT NULL,
  `rc_punctual` int(11) NOT NULL,
  `rc_late` int(11) NOT NULL,
  `rc_absent` int(11) NOT NULL,
  `rc_leave` int(11) NOT NULL,
  `rc_leave_type` varchar(255) NOT NULL,
  `rc_leave_detailed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_name`) VALUES
(1, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_code` varchar(255) NOT NULL,
  `student_perfix` varchar(255) NOT NULL,
  `student_fname` varchar(255) NOT NULL,
  `student_lname` varchar(255) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `subject_day` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_place` varchar(255) NOT NULL,
  `subject_period` varchar(255) NOT NULL,
  `subject_timeS` time NOT NULL,
  `subject_timeE` time NOT NULL,
  `subject_term` varchar(255) NOT NULL,
  `subject_year` int(11) NOT NULL,
  `subject_semester` varchar(255) NOT NULL,
  `subject_score` int(11) NOT NULL,
  `lecturer_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `rc_id` int(11) NOT NULL,
  `rs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lecturer_id`);

--
-- Indexes for table `rate_score`
--
ALTER TABLE `rate_score`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `roll_call`
--
ALTER TABLE `roll_call`
  ADD PRIMARY KEY (`rc_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `lecturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rate_score`
--
ALTER TABLE `rate_score`
  MODIFY `rs_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roll_call`
--
ALTER TABLE `roll_call`
  MODIFY `rc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
