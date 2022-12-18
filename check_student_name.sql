-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 07:49 PM
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

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`) VALUES
(1, 'สาขาวิชาเทคโนโลยีสารสนเทศ'),
(2, 'สาขาวิชาวิทยาการคอมพิวเตอร์'),
(3, 'สาขาวิชาเทคโนโลยีดิจิทัลมิเดีย');

-- --------------------------------------------------------

--
-- Table structure for table `leave_information`
--

CREATE TABLE `leave_information` (
  `li_id` int(10) UNSIGNED NOT NULL,
  `li_description` varchar(255) DEFAULT NULL,
  `li_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `lecturer_id` int(10) UNSIGNED NOT NULL,
  `lecturer_perfix` varchar(255) DEFAULT NULL,
  `lecturer_fname` varchar(255) NOT NULL,
  `lecturer_lname` varchar(255) NOT NULL,
  `lecturer_type` varchar(255) DEFAULT NULL,
  `lecturer_username` varchar(255) DEFAULT NULL,
  `lecturer_password` varchar(255) DEFAULT NULL,
  `lecturer_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecturer_id`, `lecturer_perfix`, `lecturer_fname`, `lecturer_lname`, `lecturer_type`, `lecturer_username`, `lecturer_password`, `lecturer_image`) VALUES
(1, 'นาย', 'ธีรทิน', 'ภู่ระมาต', '1', 'teeratin@rmutsb.ac.th', '$2y$10$Zcyn5ptXlXNnMR0zhs0Kn.BcopqSzCzhGO/.ih5RHLpnHv.pDNPJq', 'asda');

-- --------------------------------------------------------

--
-- Table structure for table `roll_call`
--

CREATE TABLE `roll_call` (
  `rc_id` int(10) UNSIGNED NOT NULL,
  `rc_type` enum('present','absent','late','leave') DEFAULT NULL,
  `date` date DEFAULT NULL,
  `student_id` int(10) DEFAULT NULL,
  `subject_id` int(10) DEFAULT NULL,
  `li_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scoring`
--

CREATE TABLE `scoring` (
  `scoring_id` int(10) UNSIGNED NOT NULL,
  `scoring_name` varchar(255) NOT NULL,
  `scoring_punctual` varchar(255) NOT NULL,
  `scoring_late` varchar(255) NOT NULL,
  `scoring_absent` varchar(255) NOT NULL,
  `lecturer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `scoring`
--

INSERT INTO `scoring` (`scoring_id`, `scoring_name`, `scoring_punctual`, `scoring_late`, `scoring_absent`, `lecturer_id`) VALUES
(1, 'จิตพิสัย 10 คะแนน', '5', '4', '3', 1),
(2, 'จิตพิสัย 11 คะแนน', '5', '4', '3', 2);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(10) UNSIGNED NOT NULL,
  `section_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_name`) VALUES
(1, 'ITS16421N'),
(2, 'ITS144242N');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `student_code` varchar(255) DEFAULT NULL,
  `student_perfix` varchar(255) DEFAULT NULL,
  `student_fname` varchar(255) DEFAULT NULL,
  `student_lname` varchar(255) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_code`, `student_perfix`, `student_fname`, `student_lname`, `section_id`) VALUES
(5, '164424221001', 'นาย', 'กรทอง', 'มากไอ', 1),
(6, '164424221002', 'นางสาว', 'กวินธิดา', 'กลบแก้ว', 1),
(7, '164424221003', 'นางสาว', 'กัญญารัตน์', ' นิลทัศ', 1),
(8, '164424221004', 'นาย', 'คมชาญ', 'เพ็ชร์กูล', 1),
(9, '164424221005', 'นาย', 'ฆราวัฒน์', ' สนธิเณร', 1),
(10, '164424221006', 'นาย', 'จิรภัทร', 'หวยสูงเนิน', 1),
(11, '164424221007', 'นาย', 'ฉันทกร', ' เสือสวัสดิ์', 1),
(12, '164424221008', 'นาย', 'ชุติพนธ์ ', 'แจ่มประภาพร', 1),
(13, '164424221009', 'นาย', 'ณัฐธัญ', ' อุ่นซิม', 1),
(14, '164424221010', 'นาย', 'ณัฐพล ', 'ชื่นบุญชม', 1),
(15, '164424221011', 'นาย', 'ธนวรรษ ', 'ธนวงศ์วิสูตร', 1),
(16, '164424221012', 'นางสาว', 'ธิดา ', 'โอบัวหงษ์', 1),
(17, '164424221013', 'นาย', 'ธีรทิน ', 'ภู่ระมาต', 1),
(18, '164424221014', 'นางสาว', 'นูรูลฟิตรี ', 'มูดอ', 1),
(19, '164424221015', 'นาย', 'บวรรัตน์ ', 'รักเพ็ง', 1),
(20, '164424221016', 'นาย', 'ปฐพี ', 'แก้วฉิม', 1),
(21, '164424221017', 'นาย', 'ปรมินทร์ ', 'ชายหงษ์', 1),
(22, '164424221018', 'นาย', 'ปรีดา ', 'เถื่อนเล็ก', 1),
(23, '164424221019', 'นาย', 'ปิยวัฒน์ ', 'ฤกษ์ถนอม', 1),
(24, '164424221020', 'นาย', 'ปิยะวัฒน์ ', 'บุญอาจ', 1),
(25, '164424221021', 'นาย', 'พงศกร ', 'แพงจักร', 1),
(26, '164424221022', 'นาย', 'พงศธร ', 'ปานจำรูญ', 1),
(27, '164424221023', 'นาย', 'พันกร ', 'โสบิน', 1),
(28, '164424221025', 'นาย', 'พิสิฐพงศ์ ', 'กิตติชัยมาพร', 1),
(29, '164424221026', 'นาย', 'พีรพัฒน์ ', 'ทับเงิน', 1),
(30, '164424221028', 'นาย', 'ภูมินทร์ ', 'ลายเครือวัลย์', 1),
(31, '164424221029', 'นาย', 'ภูมินทร์ ', 'หุมมะจันทร์', 1),
(32, '164424221030', 'นางสาว', 'มัลลิกา ', 'การเสี่ยงศรี', 1),
(33, '164424221031', 'นาย', 'เลิศชาย ', 'เจิมขุนทด', 1),
(34, '164424221032', 'นาย', 'สิทธิเดช ', 'ทวีกิจโชติรัตน์', 1),
(35, '164424221033', 'นาย', 'สิรวิชญ์ ', 'ชาติเผือก', 1),
(36, '164424221034', 'นาย', 'สุรศักดิ์ ', 'แสงสุกใส', 1),
(37, '164424221035', 'นาย', 'อธิศ ', 'มีเครือ', 1),
(38, '164424221036', 'นาย', 'อนพัทย์ ', 'แพงมา', 1),
(39, '164424221037', 'นาย', 'อรรถพร ', 'คำจักร', 1),
(40, '164424221038', 'นาย', 'พันธกานต์ ', 'รี้พลรุจี', 1),
(41, '164424221013', 'นางสาว', 'asdasd', 'adadad', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(10) UNSIGNED NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `subject_day` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_place` varchar(255) NOT NULL,
  `subject_period` varchar(4) NOT NULL,
  `subject_timeS` time NOT NULL,
  `subject_timeE` time NOT NULL,
  `subject_term` varchar(255) NOT NULL,
  `subject_year` int(11) NOT NULL,
  `subject_semester` varchar(255) NOT NULL,
  `scoring_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `lecturer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subject_day`, `subject_name`, `subject_place`, `subject_period`, `subject_timeS`, `subject_timeE`, `subject_term`, `subject_year`, `subject_semester`, `scoring_id`, `course_id`, `section_id`, `lecturer_id`) VALUES
(11, '405-41-06-42464', 'จันทร์', 'Information Technology Project2', '17081 เขตเหนือ [อาคาร 17 ]', 'เช้า', '08:00:00', '11:30:00', '1', 2565, 'ภาคปกติ', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject_lecturer`
--

CREATE TABLE `subject_lecturer` (
  `subject_id` int(10) NOT NULL,
  `lecturer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject_student`
--

CREATE TABLE `subject_student` (
  `subject_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `subject_student`
--

INSERT INTO `subject_student` (`subject_id`, `student_id`) VALUES
(11, 5),
(11, 6),
(11, 7),
(11, 8),
(11, 9),
(11, 10),
(11, 11),
(11, 12),
(11, 13),
(11, 14),
(11, 15),
(11, 16),
(11, 17),
(11, 18),
(11, 19),
(11, 20),
(11, 21),
(11, 22),
(11, 23),
(11, 24),
(11, 25),
(11, 26),
(11, 27),
(11, 28),
(11, 29),
(11, 30),
(11, 31),
(11, 32),
(11, 33),
(11, 34),
(11, 35),
(11, 36),
(11, 37),
(11, 38),
(11, 39),
(11, 40);

-- --------------------------------------------------------

--
-- Table structure for table `total_score`
--

CREATE TABLE `total_score` (
  `ts_id` int(10) UNSIGNED NOT NULL,
  `ts_score` varchar(255) DEFAULT NULL,
  `student_id` int(10) DEFAULT NULL,
  `subject_id` int(10) DEFAULT NULL
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
-- Indexes for table `leave_information`
--
ALTER TABLE `leave_information`
  ADD PRIMARY KEY (`li_id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lecturer_id`);

--
-- Indexes for table `roll_call`
--
ALTER TABLE `roll_call`
  ADD PRIMARY KEY (`rc_id`);

--
-- Indexes for table `scoring`
--
ALTER TABLE `scoring`
  ADD PRIMARY KEY (`scoring_id`);

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
-- Indexes for table `subject_student`
--
ALTER TABLE `subject_student`
  ADD KEY `subject_id` (`subject_id`,`student_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `total_score`
--
ALTER TABLE `total_score`
  ADD PRIMARY KEY (`ts_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leave_information`
--
ALTER TABLE `leave_information`
  MODIFY `li_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `lecturer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roll_call`
--
ALTER TABLE `roll_call`
  MODIFY `rc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scoring`
--
ALTER TABLE `scoring`
  MODIFY `scoring_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `total_score`
--
ALTER TABLE `total_score`
  MODIFY `ts_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subject_student`
--
ALTER TABLE `subject_student`
  ADD CONSTRAINT `subject_student_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subject_student_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
