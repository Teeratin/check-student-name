-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 09, 2023 at 01:45 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

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
  `course_id` int NOT NULL,
  `course_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`) VALUES
(1, 'สาขาวิชาเทคโนโลยีสารสนเทศ'),
(2, 'สาขาวิชาวิทยาการคอมพิวเตอร์'),
(3, 'สาขาวิชาเทคโนโลยีดิจิทัลมิเดีย');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `lecturer_id` int UNSIGNED NOT NULL,
  `lecturer_prefix` varchar(255) DEFAULT NULL,
  `lecturer_fname` varchar(255) NOT NULL,
  `lecturer_lname` varchar(255) NOT NULL,
  `lecturer_type` varchar(255) DEFAULT NULL,
  `lecturer_username` varchar(255) DEFAULT NULL,
  `lecturer_password` varchar(255) DEFAULT NULL,
  `lecturer_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecturer_id`, `lecturer_prefix`, `lecturer_fname`, `lecturer_lname`, `lecturer_type`, `lecturer_username`, `lecturer_password`, `lecturer_image`) VALUES
(1, 'นาย', 'ธีรทิน', 'ภู่ระมาต', '1', 'teeratin@rmutsb.ac.th', '$2y$10$Zcyn5ptXlXNnMR0zhs0Kn.BcopqSzCzhGO/.ih5RHLpnHv.pDNPJq', 'public/profile/TGeWgVODEpXo7tzd19KSfTQrTSEF79T1DizL82iS.jpg'),
(5, 'นาย', 'ฆราวัฒน์', 'สนธิเณร', '2', 'karawat@rmutsb.ac.th', '$2y$10$m3OQJEfKqFCj8NMmaSrTDe0smx0XkUTIl95bPC9tWC8D5UEbYn5rW', 'public/profile/pk13c8Wz5KsRXatxx4uXjoe9cfonlcnqLc720jq5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `scoring`
--

CREATE TABLE `scoring` (
  `scoring_id` int UNSIGNED NOT NULL,
  `scoring_name` varchar(255) NOT NULL,
  `scoring_present` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `scoring_late` varchar(255) NOT NULL,
  `scoring_absent` varchar(255) NOT NULL,
  `lecturer_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `scoring`
--

INSERT INTO `scoring` (`scoring_id`, `scoring_name`, `scoring_present`, `scoring_late`, `scoring_absent`, `lecturer_id`) VALUES
(1, 'จิตพิสัย 10 คะแนน', '5', '4', '3', 1),
(2, 'จิตพิสัย 11 คะแนน', '5', '4', '3', 2);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int UNSIGNED NOT NULL,
  `section_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_name`) VALUES
(1, 'ITS16421N'),
(3, 'ITS16422N');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int UNSIGNED NOT NULL,
  `student_code` varchar(255) DEFAULT NULL,
  `student_prefix` varchar(255) DEFAULT NULL,
  `student_fname` varchar(255) DEFAULT NULL,
  `student_lname` varchar(255) NOT NULL,
  `section_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_code`, `student_prefix`, `student_fname`, `student_lname`, `section_id`) VALUES
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
(42, '164424221001', 'นาย', 'กรทอง', 'มากไอ', 3),
(43, '164424221002', 'นางสาว', 'กวินธิดา', 'กลบแก้ว', 3),
(44, '164424221003', 'นางสาว', 'กัญญารัตน์', 'นิลทัศ', 3),
(45, '164424221004', 'นาย', 'คมชาญ', 'เพ็ชร์กูล', 3),
(46, '164424221005', 'นาย', 'ฆราวัฒน์', 'สนธิเณร', 3),
(47, '164424221006', 'นาย', 'จิรภัทร', 'หวยสูงเนิน', 3),
(48, '164424221007', 'นาย', 'ฉันทกร', 'เสือสวัสดิ์', 3),
(49, '164424221008', 'นาย', 'ชุติพนธ์', 'แจ่มประภาพร', 3),
(50, '164424221009', 'นาย', 'ณัฐธัญ', 'อุ่นซิม', 3),
(51, '164424221010', 'นาย', 'ณัฐพล', 'ชื่นบุญชม', 3),
(52, '164424221011', 'นาย', 'ธนวรรษ', 'ธนวงศ์วิสูตร', 3),
(53, '164424221012', 'นางสาว', 'ธิดา', 'โอบัวหงษ์', 3),
(54, '164424221013', 'นาย', 'ธีรทิน', 'ภู่ระมาต', 3),
(55, '164424221014', 'นางสาว', 'นูรูลฟิตรี', 'มูดอ', 3),
(56, '164424221015', 'นาย', 'บวรรัตน์', 'รักเพ็ง', 3),
(57, '164424221016', 'นาย', 'ปฐพี', 'แก้วฉิม', 3),
(58, '164424221017', 'นาย', 'ปรมินทร์', 'ชายหงษ์', 3),
(59, '164424221018', 'นาย', 'ปรีดา', 'เถื่อนเล็ก', 3),
(60, '164424221019', 'นาย', 'ปิยวัฒน์', 'ฤกษ์ถนอม', 3),
(61, '164424221020', 'นาย', 'ปิยะวัฒน์', 'บุญอาจ', 3),
(62, '164424221021', 'นาย', 'พงศกร', 'แพงจักร', 3),
(63, '164424221022', 'นาย', 'พงศธร', 'ปานจำรูญ', 3),
(64, '164424221023', 'นาย', 'พันกร', 'โสบิน', 3),
(65, '164424221025', 'นาย', 'พิสิฐพงศ์', 'กิตติชัยมาพร', 3),
(66, '164424221026', 'นาย', 'พีรพัฒน์', 'ทับเงิน', 3),
(67, '164424221028', 'นาย', 'ภูมินทร์', 'ลายเครือวัลย์', 3),
(68, '164424221029', 'นาย', 'ภูมินทร์', 'หุมมะจันทร์', 3),
(69, '164424221030', 'นางสาว', 'มัลลิกา', 'การเสี่ยงศรี', 3),
(70, '164424221031', 'นาย', 'เลิศชาย', 'เจิมขุนทด', 3),
(71, '164424221032', 'นาย', 'สิทธิเดช', 'ทวีกิจโชติรัตน์', 3),
(72, '164424221033', 'นาย', 'สิรวิชญ์', 'ชาติเผือก', 3),
(73, '164424221034', 'นาย', 'สุรศักดิ์', 'แสงสุกใส', 3),
(74, '164424221035', 'นาย', 'อธิศ', 'มีเครือ', 3),
(75, '164424221036', 'นาย', 'อนพัทย์', 'แพงมา', 3),
(76, '164424221037', 'นาย', 'อรรถพร', 'คำจักร', 3),
(77, '164424221038', 'นาย', 'พันธกานต์', 'รี้พลรุจี', 3);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int UNSIGNED NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `subject_day` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_place` varchar(255) NOT NULL,
  `subject_period` varchar(4) NOT NULL,
  `subject_timeS` time NOT NULL,
  `subject_timeE` time NOT NULL,
  `subject_term` varchar(255) NOT NULL,
  `subject_year` int NOT NULL,
  `subject_semester` varchar(255) NOT NULL,
  `scoring_id` int NOT NULL,
  `course_id` int NOT NULL,
  `section_id` int NOT NULL,
  `lecturer_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subject_day`, `subject_name`, `subject_place`, `subject_period`, `subject_timeS`, `subject_timeE`, `subject_term`, `subject_year`, `subject_semester`, `scoring_id`, `course_id`, `section_id`, `lecturer_id`) VALUES
(11, '405-41-06', 'จันทร์', 'Information Technology Project 2', '17081 เขตเหนือ [ อาคาร 17 ]', 'เช้า', '08:00:00', '12:00:00', '2', 2565, '1', 1, 1, 1, 1),
(12, '405-41-06', 'จันทร์', 'Information Technology Project 2', '17081 เขตเหนือ [ อาคาร 17 ]', 'บ่าย', '13:00:00', '15:00:00', '2', 2565, '1', 1, 1, 1, 1),
(13, '405-42-07', 'จันทร์', 'Information Technology Seminar', '17081 เขตเหนือ [ อาคาร 17 ]', 'บ่าย', '15:00:00', '17:00:00', '2', 2565, '1', 1, 1, 1, 1),
(14, '405-37-03', 'อังคาร', 'Modern Information Management Technology', '17071 เขตเหนือ [ อาคาร 17 ]', 'เช้า', '08:00:00', '12:00:00', '2', 2565, '1', 1, 1, 1, 1),
(15, '405-47-07', 'อังคาร', 'Cloud Computing', '17081 เขตเหนือ [ อาคาร 17 ]', 'บ่าย', '13:00:00', '17:00:00', '2', 2565, '1', 1, 1, 1, 1),
(16, '405-36-05', 'พฤหัส', 'Database Systems Administration and Management', '17081 เขตเหนือ [ อาคาร 17 ]', 'เช้า', '08:00:00', '12:00:00', '2', 2565, '1', 1, 1, 1, 1),
(17, '405-33-02', 'พฤหัส', 'Integrated Programming Technology', '17076 เขตเหนือ [ อาคาร 17 ]', 'บ่าย', '13:00:00', '17:00:00', '2', 2565, '1', 1, 1, 1, 1),
(18, '603-22-02', 'ศุกร์', 'Talent English', '17098 เขตเหนือ [ อาคาร 17 ]', 'เช้า', '08:00:00', '10:00:00', '2', 2565, '1', 1, 1, 1, 1),
(19, '405-37-01', 'ศุกร์', 'Information Technology for Presentation', '17081 เขตเหนือ [ อาคาร 17 ]', 'บ่าย', '13:00:00', '17:00:00', '2', 2565, '1', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject_student`
--

CREATE TABLE `subject_student` (
  `subject_id` int UNSIGNED NOT NULL,
  `student_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
(11, 40),
(12, 5),
(12, 6),
(12, 7),
(12, 8),
(12, 9),
(12, 10),
(12, 11),
(12, 12),
(12, 13),
(12, 14),
(12, 15),
(12, 16),
(12, 17),
(12, 18),
(12, 19),
(12, 20),
(12, 21),
(12, 22),
(12, 23),
(12, 24),
(12, 25),
(12, 26),
(12, 27),
(12, 28),
(12, 29),
(12, 30),
(12, 31),
(12, 32),
(12, 33),
(12, 34),
(12, 35),
(12, 36),
(12, 37),
(12, 38),
(12, 39),
(12, 40),
(13, 5),
(13, 6),
(13, 7),
(13, 8),
(13, 9),
(13, 10),
(13, 11),
(13, 12),
(13, 13),
(13, 14),
(13, 15),
(13, 16),
(13, 17),
(13, 18),
(13, 19),
(13, 20),
(13, 21),
(13, 22),
(13, 23),
(13, 24),
(13, 25),
(13, 26),
(13, 27),
(13, 28),
(13, 29),
(13, 30),
(13, 31),
(13, 32),
(13, 33),
(13, 34),
(13, 35),
(13, 36),
(13, 37),
(13, 38),
(13, 39),
(13, 40),
(14, 5),
(14, 6),
(14, 7),
(14, 8),
(14, 9),
(14, 10),
(14, 11),
(14, 12),
(14, 13),
(14, 14),
(14, 15),
(14, 16),
(14, 17),
(14, 18),
(14, 19),
(14, 20),
(14, 21),
(14, 22),
(14, 23),
(14, 24),
(14, 25),
(14, 26),
(14, 27),
(14, 28),
(14, 29),
(14, 30),
(14, 31),
(14, 32),
(14, 33),
(14, 34),
(14, 35),
(14, 36),
(14, 37),
(14, 38),
(14, 39),
(14, 40),
(15, 5),
(15, 6),
(15, 7),
(15, 8),
(15, 9),
(15, 10),
(15, 11),
(15, 12),
(15, 13),
(15, 14),
(15, 15),
(15, 16),
(15, 17),
(15, 18),
(15, 19),
(15, 20),
(15, 21),
(15, 22),
(15, 23),
(15, 24),
(15, 25),
(15, 26),
(15, 27),
(15, 28),
(15, 29),
(15, 30),
(15, 31),
(15, 32),
(15, 33),
(15, 34),
(15, 35),
(15, 36),
(15, 37),
(15, 38),
(15, 39),
(15, 40),
(16, 5),
(16, 6),
(16, 7),
(16, 8),
(16, 9),
(16, 10),
(16, 11),
(16, 12),
(16, 13),
(16, 14),
(16, 15),
(16, 16),
(16, 17),
(16, 18),
(16, 19),
(16, 20),
(16, 21),
(16, 22),
(16, 23),
(16, 24),
(16, 25),
(16, 26),
(16, 27),
(16, 28),
(16, 29),
(16, 30),
(16, 31),
(16, 32),
(16, 33),
(16, 34),
(16, 35),
(16, 36),
(16, 37),
(16, 38),
(16, 39),
(16, 40),
(17, 5),
(17, 6),
(17, 7),
(17, 8),
(17, 9),
(17, 10),
(17, 11),
(17, 12),
(17, 13),
(17, 14),
(17, 15),
(17, 16),
(17, 17),
(17, 18),
(17, 19),
(17, 20),
(17, 21),
(17, 22),
(17, 23),
(17, 24),
(17, 25),
(17, 26),
(17, 27),
(17, 28),
(17, 29),
(17, 30),
(17, 31),
(17, 32),
(17, 33),
(17, 34),
(17, 35),
(17, 36),
(17, 37),
(17, 38),
(17, 39),
(17, 40),
(18, 5),
(18, 6),
(18, 7),
(18, 8),
(18, 9),
(18, 10),
(18, 11),
(18, 12),
(18, 13),
(18, 14),
(18, 15),
(18, 16),
(18, 17),
(18, 18),
(18, 19),
(18, 20),
(18, 21),
(18, 22),
(18, 23),
(18, 24),
(18, 25),
(18, 26),
(18, 27),
(18, 28),
(18, 29),
(18, 30),
(18, 31),
(18, 32),
(18, 33),
(18, 34),
(18, 35),
(18, 36),
(18, 37),
(18, 38),
(18, 39),
(18, 40),
(19, 5),
(19, 6),
(19, 7),
(19, 8),
(19, 9),
(19, 10),
(19, 11),
(19, 12),
(19, 13),
(19, 14),
(19, 15),
(19, 16),
(19, 17),
(19, 18),
(19, 19),
(19, 20),
(19, 21),
(19, 22),
(19, 23),
(19, 24),
(19, 25),
(19, 26),
(19, 27),
(19, 28),
(19, 29),
(19, 30),
(19, 31),
(19, 32),
(19, 33),
(19, 34),
(19, 35),
(19, 36),
(19, 37),
(19, 38),
(19, 39),
(19, 40);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `tt_id` int UNSIGNED NOT NULL,
  `tt_type` enum('present','absent','late','leave') DEFAULT NULL,
  `date` date DEFAULT NULL,
  `student_id` int DEFAULT NULL,
  `subject_id` int DEFAULT NULL,
  `leave_description` varchar(255) DEFAULT NULL,
  `leave_type` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`tt_id`, `tt_type`, `date`, `student_id`, `subject_id`, `leave_description`, `leave_type`) VALUES
(1, 'present', '2022-12-26', 5, 11, NULL, NULL),
(2, 'present', '2022-12-26', 5, 11, NULL, NULL),
(3, 'present', '2022-12-26', 5, 11, NULL, NULL),
(4, 'present', '2022-12-26', 5, 11, NULL, NULL),
(5, 'present', '2022-12-26', 5, 11, NULL, NULL),
(6, 'late', '2022-12-26', 5, 11, NULL, NULL),
(7, 'late', '2022-12-26', 5, 11, NULL, NULL),
(8, 'absent', '2022-12-26', 5, 11, NULL, NULL),
(9, 'absent', '2022-12-26', 5, 11, NULL, NULL),
(10, 'absent', '2022-12-26', 5, 11, NULL, NULL),
(11, 'absent', '2022-12-26', 6, 11, NULL, NULL),
(12, 'absent', '2022-12-26', 6, 11, NULL, NULL),
(13, 'absent', '2022-12-26', 6, 11, NULL, NULL),
(14, 'absent', '2022-12-26', 6, 11, NULL, NULL),
(15, 'absent', '2022-12-26', 6, 11, NULL, NULL),
(16, 'absent', '2022-12-26', 6, 11, NULL, NULL),
(17, 'absent', '2022-12-26', 6, 11, NULL, NULL),
(18, 'absent', '2022-12-26', 6, 11, NULL, NULL),
(19, 'absent', '2022-12-26', 6, 11, NULL, NULL),
(20, 'absent', '2022-12-26', 6, 11, NULL, NULL),
(21, 'late', '2022-12-26', 7, 11, NULL, NULL),
(22, 'late', '2022-12-26', 7, 11, NULL, NULL),
(23, 'late', '2022-12-26', 7, 11, NULL, NULL),
(24, 'late', '2022-12-26', 7, 11, NULL, NULL),
(25, 'late', '2022-12-26', 7, 11, NULL, NULL),
(26, 'late', '2022-12-26', 7, 11, NULL, NULL),
(27, 'late', '2022-12-26', 7, 11, NULL, NULL),
(28, 'late', '2022-12-26', 7, 11, NULL, NULL),
(29, 'late', '2022-12-26', 7, 11, NULL, NULL),
(30, 'late', '2022-12-26', 7, 11, NULL, NULL);

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
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`tt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `lecturer_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `scoring`
--
ALTER TABLE `scoring`
  MODIFY `scoring_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `tt_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
