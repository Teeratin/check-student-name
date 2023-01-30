-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 08:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `lecturer_id` int(10) UNSIGNED NOT NULL,
  `lecturer_prefix` varchar(255) DEFAULT NULL,
  `lecturer_fname` varchar(255) NOT NULL,
  `lecturer_lname` varchar(255) NOT NULL,
  `lecturer_type` varchar(255) DEFAULT NULL,
  `lecturer_username` varchar(255) DEFAULT NULL,
  `lecturer_password` varchar(255) DEFAULT NULL,
  `lecturer_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecturer_id`, `lecturer_prefix`, `lecturer_fname`, `lecturer_lname`, `lecturer_type`, `lecturer_username`, `lecturer_password`, `lecturer_image`) VALUES
(1, 'นาย', 'ธีรทิน', 'ภู่ระมาต', '1', 'teeratin@rmutsb.ac.th', '$2y$10$Zcyn5ptXlXNnMR0zhs0Kn.BcopqSzCzhGO/.ih5RHLpnHv.pDNPJq', 'public/profile/EKFayE8MV08osUzOzIEAfTXCgqFiZVUrR9fltPrL.png'),
(5, 'นาย', 'ฆราวัฒน์', 'สนธิเณร', '2', 'karawat@rmutsb.ac.th', '$2y$10$m3OQJEfKqFCj8NMmaSrTDe0smx0XkUTIl95bPC9tWC8D5UEbYn5rW', 'public/profile/pk13c8Wz5KsRXatxx4uXjoe9cfonlcnqLc720jq5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `scoring`
--

CREATE TABLE `scoring` (
  `scoring_id` int(10) UNSIGNED NOT NULL,
  `scoring_name` varchar(255) NOT NULL,
  `scoring_present` varchar(255) NOT NULL,
  `scoring_late` varchar(255) NOT NULL,
  `scoring_absent` varchar(255) NOT NULL,
  `lecturer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `scoring`
--

INSERT INTO `scoring` (`scoring_id`, `scoring_name`, `scoring_present`, `scoring_late`, `scoring_absent`, `lecturer_id`) VALUES
(1, 'จิตพิสัย 10 คะแนน', '5', '3', '1', 1);

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
(3, 'ITS16521E'),
(4, 'CSS16441N'),
(5, 'DMT16521N');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `student_code` varchar(255) DEFAULT NULL,
  `student_prefix` varchar(255) DEFAULT NULL,
  `student_fname` varchar(255) DEFAULT NULL,
  `student_lname` varchar(255) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_code`, `student_prefix`, `student_fname`, `student_lname`, `section_id`) VALUES
(1, '164424221001', 'นาย', 'กรทอง', 'มากไอ', 1),
(2, '164424221002', 'นางสาว', 'กวินธิดา', 'กลบแก้ว', 1),
(3, '164424221003', 'นางสาว', 'กัญญารัตน์', ' นิลทัศ', 1),
(4, '164424221004', 'นาย', 'คมชาญ', 'เพ็ชร์กูล', 1),
(5, '164424221005', 'นาย', 'ฆราวัฒน์', ' สนธิเณร', 1),
(6, '164424221006', 'นาย', 'จิรภัทร', 'หวยสูงเนิน', 1),
(7, '164424221007', 'นาย', 'ฉันทกร', ' เสือสวัสดิ์', 1),
(8, '164424221008', 'นาย', 'ชุติพนธ์ ', 'แจ่มประภาพร', 1),
(9, '164424221009', 'นาย', 'ณัฐธัญ', ' อุ่นซิม', 1),
(10, '164424221010', 'นาย', 'ณัฐพล ', 'ชื่นบุญชม', 1),
(11, '164424221011', 'นาย', 'ธนวรรษ ', 'ธนวงศ์วิสูตร', 1),
(12, '164424221012', 'นางสาว', 'ธิดา ', 'โอบัวหงษ์', 1),
(13, '164424221013', 'นาย', 'ธีรทิน ', 'ภู่ระมาต', 1),
(14, '164424221014', 'นางสาว', 'นูรูลฟิตรี ', 'มูดอ', 1),
(15, '164424221015', 'นาย', 'บวรรัตน์ ', 'รักเพ็ง', 1),
(16, '164424221016', 'นาย', 'ปฐพี ', 'แก้วฉิม', 1),
(17, '164424221017', 'นาย', 'ปรมินทร์ ', 'ชายหงษ์', 1),
(18, '164424221018', 'นาย', 'ปรีดา ', 'เถื่อนเล็ก', 1),
(19, '164424221019', 'นาย', 'ปิยวัฒน์ ', 'ฤกษ์ถนอม', 1),
(20, '164424221020', 'นาย', 'ปิยะวัฒน์ ', 'บุญอาจ', 1),
(21, '164424221021', 'นาย', 'พงศกร ', 'แพงจักร', 1),
(22, '164424221022', 'นาย', 'พงศธร ', 'ปานจำรูญ', 1),
(23, '164424221023', 'นาย', 'พันกร ', 'โสบิน', 1),
(24, '164424221025', 'นาย', 'พิสิฐพงศ์ ', 'กิตติชัยมาพร', 1),
(25, '164424221026', 'นาย', 'พีรพัฒน์ ', 'ทับเงิน', 1),
(26, '164424221028', 'นาย', 'ภูมินทร์ ', 'ลายเครือวัลย์', 1),
(27, '164424221029', 'นาย', 'ภูมินทร์ ', 'หุมมะจันทร์', 1),
(28, '164424221030', 'นางสาว', 'มัลลิกา ', 'การเสี่ยงศรี', 1),
(29, '164424221031', 'นาย', 'เลิศชาย ', 'เจิมขุนทด', 1),
(30, '164424221032', 'นาย', 'สิทธิเดช ', 'ทวีกิจโชติรัตน์', 1),
(31, '164424221033', 'นาย', 'สิรวิชญ์ ', 'ชาติเผือก', 1),
(32, '164424221034', 'นาย', 'สุรศักดิ์ ', 'แสงสุกใส', 1),
(33, '164424221035', 'นาย', 'อธิศ ', 'มีเครือ', 1),
(34, '164424221036', 'นาย', 'อนพัทย์ ', 'แพงมา', 1),
(35, '164424221037', 'นาย', 'อรรถพร ', 'คำจักร', 1),
(36, '164424221038', 'นาย', 'พันธกานต์ ', 'รี้พลรุจี', 1),
(46, '165410222001', 'นางสาว', 'ชาลิสา', 'สุนทรวิภาต', 3),
(47, '165410222003', 'นางสาว', 'ธิดารัตณ์', 'จันทร์ขำ', 3),
(48, '165410222004', 'นาย', 'ภัทรสกล', 'บัวจันทร์', 3),
(49, '165410222005', 'นาย', 'ภานุวัฒน์', 'ทัดประดิษฐ์', 3),
(50, '165410222006', 'นาย', 'สิทธิชัย', 'ทองคง', 3),
(51, '165410222007', 'นางสาว', 'สุกัญญา', 'นะภิใจ', 3),
(52, '165410222008', 'นางสาว', 'จิราภรณ์', 'ตาแสงโว', 3),
(53, '165410222010', 'นาย', 'ปวเรศ', 'นนท์จันทร์', 3),
(54, '165410222011', 'นาย', 'พจน์สุวัฒน์', 'ซื่อสัตย์', 3),
(55, '164405241001', 'นางสาว', 'กรกนก', 'พิกุลสวัสดิ์', 4),
(56, '164405241002', 'นาย', 'กษิดิศ', 'วงษ์เทเวศ', 4),
(57, '164405241003', 'นาย', 'กิตติกร', 'ประเสริฐธรรม', 4),
(58, '164405241004', 'นาย', 'คมปกร', 'กมลเลิศไพบูลย์', 4),
(59, '164405241005', 'นาย', 'คริสต์มาส', 'อาจคงหาญ', 4),
(60, '164405241006', 'นาย', 'จิรวัฒน์', 'แหยมรักชาติ', 4),
(61, '164405241007', 'นาย', 'เจษฎา', 'รุ่งวานนท์ชัย', 4),
(62, '164405241008', 'นาย', 'เจษฎา', 'อิ่มจิตร', 4),
(63, '164405241009', 'นางสาว', 'ชลธิชา', 'ศรีจันทร์ดี', 4),
(64, '164405241010', 'นาย', 'ชาติชาย', 'ชัยทิพย์', 4),
(65, '164405241012', 'นาย', 'ธนโชติ', 'ใจตรง', 4),
(66, '164405241013', 'นาย', 'ธนวันต์', 'หนูเรือง', 4),
(67, '164405241014', 'นาย', 'นทีภัทร', 'ยามาเจริญ', 4),
(68, '164405241015', 'นาย', 'ภูเบศร์', 'ประเสริฐสุข', 4),
(69, '164405241016', 'นางสาว', 'ยุภาภรณ์', 'ชาพิภักดิ์', 4),
(70, '164405241018', 'นางสาว', 'สมฤดี', 'เปตะคุ', 4),
(71, '164405241019', 'นาย', 'สรวิชญ์', 'ช่วงชู', 4),
(72, '164405241020', 'นาย', 'อรรคพล', 'วรพันธ์', 4),
(73, '164405241021', 'นาย', 'ธนศักดิ์', 'ขำจันทร์', 4),
(74, '164405241022', 'นาย', 'ภูเบศ', 'พาริก', 4),
(75, '164405241023', 'นาย', 'อำพล', 'จันทร์อำรุง', 4),
(76, '164405241025', 'นาย', 'นภัสกร', 'ทองคำ', 4),
(77, '164405241026', 'นาย', 'กนกพิชญ์', 'รุณนก', 4),
(78, '164405241027', 'นาย', 'สุพศิน', 'ลีลาอุดม', 4),
(79, '164405241028', 'นาย', 'สุรศักดิ์', 'เข็มทอง', 4),
(80, '164405241029', 'นาย', 'ธาตรี', 'วชิรปราการสกุล', 4),
(81, '164405241030', 'นางสาว', 'ธนวันต์', 'บัวทอง', 4),
(82, '164405241031', 'นางสาว', 'กนกรัตน์', 'กิจผ่องแผ้ว', 4),
(83, '164405241033', 'นาย', 'เจษฎา', 'ถือมั่น', 4),
(84, '165429221001', 'นางสาว', 'กรวรรณ', 'พิมพาศ', 5),
(85, '165429221002', 'นาย', 'ก้องเกียรติ', 'ช้างแก้ว', 5),
(86, '165429221003', 'นาย', 'จักรกฤษณ์', 'แย้มรุ่ง', 5),
(87, '165429221004', 'นาย', 'เจษฎา', 'จิตร์พราหมณี', 5),
(88, '165429221005', 'นางสาว', 'ชลลดา', 'บุญชู', 5),
(89, '165429221006', 'นาย', 'ชัชวาล', 'มูลเมืองชัย', 5),
(90, '165429221007', 'นาย', 'ชัยอนันต์', 'แซ่ลิ้ม', 5),
(91, '165429221008', 'นางสาว', 'ญารินดา', 'อาดำ', 5),
(92, '165429221009', 'นาย', 'ธนวรรณ', 'พวงทอง', 5),
(93, '165429221010', 'นาย', 'ธนวิทย์', 'ไตรทิพย์', 5),
(94, '165429221011', 'นาย', 'ธวัชชัย', 'ทัศศรี', 5),
(95, '165429221012', 'นาย', 'ธีรดนย์', 'เอมรักษา', 5),
(96, '165429221013', 'นางสาว', 'นฤมล', 'โพธิ์พันธ์', 5),
(97, '165429221014', 'นางสาว', 'นัชชานันท์', 'สุวรรณหงษ์', 5),
(98, '165429221015', 'นาย', 'บุรชัย', 'บุญกลาง', 5),
(99, '165429221016', 'นาย', 'ปวริศร', 'ทองสะอาด', 5),
(100, '165429221017', 'นาย', 'ปิยพงษ์', 'ปิ่นโภคินทร์', 5),
(101, '165429221018', 'นางสาว', 'พรนภา', 'สุขสำราญ', 5),
(102, '165429221019', 'นางสาว', 'วรรณษา', 'สุขก้อน', 5),
(103, '165429221020', 'นาย', 'วรายุทธ', 'ไพรพนา', 5),
(104, '165429221021', 'นางสาว', 'วรินทร', 'ด้วงธิวงศ์', 5),
(105, '165429221022', 'นาย', 'วัฒนพล', 'เพิ่มศิริ', 5),
(106, '165429221023', 'นาย', 'วัฒนา', 'พรมเอี่ยม', 5),
(107, '165429221024', 'นางสาว', 'วิภารัตน์', 'รอดอำพันธุ์', 5),
(108, '165429221025', 'นาย', 'ศราวุธ', 'บำรุงชาติ', 5),
(109, '165429221026', 'นาย', 'ศุภกิจ', 'อรุณรักษ์ดลเดช', 5),
(110, '165429221027', 'นางสาว', 'ษาสินี', 'ชูอรัญ', 5),
(111, '165429221028', 'นาย', 'สถาพร', 'นาอุทัย', 5),
(112, '165429221029', 'นาย', 'สิรภัทร', 'กลิ่นดี', 5),
(113, '165429221030', 'นาย', 'สุกฤษฏิ์', 'หลำเอี่ยม', 5),
(114, '165429221031', 'นางสาว', 'สุนิศรา', 'สมตัว', 5),
(115, '165429221032', 'นาย', 'อดิเทพ', 'แก้วศรี', 5),
(116, '165429221034', 'นาย', 'อลงกรณ์', 'วิชานุ', 5),
(117, '165429221035', 'นาย', 'สุรเชษฐ์', 'แซ่เล้า', 5),
(118, '165429221036', 'นาย', 'นวพล', 'ปิ่นเกตุ', 5);

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
(1, '405-41-06', 'จันทร์', 'Information Technology Project 2', '17081 เขตเหนือ [ อาคาร 17 ]', 'เช้า', '08:00:00', '00:00:00', '2', 2565, '1', 1, 1, 1, 1),
(2, '405-42-07', 'จันทร์', 'Information Technology Seminar', '17081 เขตเหนือ [ อาคาร 17 ]', 'บ่าย', '15:00:00', '17:00:00', '2', 2565, '1', 1, 1, 1, 1),
(3, '405-37-03', 'อังคาร', 'Modern Information Management Technology', '17071 เขตเหนือ [อาคาร 17]', 'เช้า', '08:00:00', '00:00:00', '2', 2565, '1', 1, 1, 1, 1),
(4, '405-47-07', 'อังคาร', 'Cloud Computing', '17081 เขตเหนือ [ อาคาร 17 ]', 'บ่าย', '13:00:00', '17:00:00', '2', 2565, '1', 1, 1, 1, 1),
(5, '405-36-05', 'พฤหัส', 'Database Systems Administration and Management', '17081 เขตเหนือ [ อาคาร 17 ]', 'เช้า', '08:00:00', '00:00:00', '2', 2565, '1', 1, 1, 1, 1),
(6, '405-33-02', 'พฤหัส', 'Integrated Programming Technology', '17076 เขตเหนือ [ อาคาร 17 ]', 'บ่าย', '13:00:00', '17:00:00', '2', 2565, '1', 1, 1, 1, 1),
(7, '603-22-02', 'ศุกร์', 'Talent English', '17098 เขตเหนือ [ อาคาร 17 ]', 'เช้า', '08:00:00', '10:00:00', '2', 2565, '1', 1, 1, 1, 1),
(8, '405-37-01', 'ศุกร์', 'Information Technology for Presentation', '17081 เขตเหนือ [ อาคาร 17 ]', 'บ่าย', '13:00:00', '17:00:00', '2', 2565, '1', 1, 1, 1, 1);

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
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(2, 16),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(3, 9),
(3, 10),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(3, 15),
(3, 16),
(3, 17),
(3, 18),
(3, 19),
(3, 20),
(3, 21),
(3, 22),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(3, 27),
(3, 28),
(3, 29),
(3, 30),
(3, 31),
(3, 32),
(3, 33),
(3, 34),
(3, 35),
(3, 36),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(4, 6),
(4, 7),
(4, 8),
(4, 9),
(4, 10),
(4, 11),
(4, 12),
(4, 13),
(4, 14),
(4, 15),
(4, 16),
(4, 17),
(4, 18),
(4, 19),
(4, 20),
(4, 21),
(4, 22),
(4, 23),
(4, 24),
(4, 25),
(4, 26),
(4, 27),
(4, 28),
(4, 29),
(4, 30),
(4, 31),
(4, 32),
(4, 33),
(4, 34),
(4, 35),
(4, 36),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(5, 5),
(5, 6),
(5, 7),
(5, 8),
(5, 9),
(5, 10),
(5, 11),
(5, 12),
(5, 13),
(5, 14),
(5, 15),
(5, 16),
(5, 17),
(5, 18),
(5, 19),
(5, 20),
(5, 21),
(5, 22),
(5, 23),
(5, 24),
(5, 25),
(5, 26),
(5, 27),
(5, 28),
(5, 29),
(5, 30),
(5, 31),
(5, 32),
(5, 33),
(5, 34),
(5, 35),
(5, 36),
(6, 1),
(6, 2),
(6, 3),
(6, 4),
(6, 5),
(6, 6),
(6, 7),
(6, 8),
(6, 9),
(6, 10),
(6, 11),
(6, 12),
(6, 13),
(6, 14),
(6, 15),
(6, 16),
(6, 17),
(6, 18),
(6, 19),
(6, 20),
(6, 21),
(6, 22),
(6, 23),
(6, 24),
(6, 25),
(6, 26),
(6, 27),
(6, 28),
(6, 29),
(6, 30),
(6, 31),
(6, 32),
(6, 33),
(6, 34),
(6, 35),
(6, 36),
(7, 1),
(7, 2),
(7, 3),
(7, 4),
(7, 5),
(7, 6),
(7, 7),
(7, 8),
(7, 9),
(7, 10),
(7, 11),
(7, 12),
(7, 13),
(7, 14),
(7, 15),
(7, 16),
(7, 17),
(7, 18),
(7, 19),
(7, 20),
(7, 21),
(7, 22),
(7, 23),
(7, 24),
(7, 25),
(7, 26),
(7, 27),
(7, 28),
(7, 29),
(7, 30),
(7, 31),
(7, 32),
(7, 33),
(7, 34),
(7, 35),
(7, 36),
(8, 1),
(8, 2),
(8, 3),
(8, 4),
(8, 5),
(8, 6),
(8, 7),
(8, 8),
(8, 9),
(8, 10),
(8, 11),
(8, 12),
(8, 13),
(8, 14),
(8, 15),
(8, 16),
(8, 17),
(8, 18),
(8, 19),
(8, 20),
(8, 21),
(8, 22),
(8, 23),
(8, 24),
(8, 25),
(8, 26),
(8, 27),
(8, 28),
(8, 29),
(8, 30),
(8, 31),
(8, 32),
(8, 33),
(8, 34),
(8, 35),
(8, 36);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `tt_id` int(10) UNSIGNED NOT NULL,
  `tt_type` enum('present','absent','late','leave') DEFAULT NULL,
  `date` date DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `leave_description` varchar(255) DEFAULT NULL,
  `leave_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`tt_id`, `tt_type`, `date`, `student_id`, `subject_id`, `leave_description`, `leave_type`) VALUES
(1, 'late', '2023-01-30', 1, 1, NULL, NULL);

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
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `lecturer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `scoring`
--
ALTER TABLE `scoring`
  MODIFY `scoring_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `tt_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
