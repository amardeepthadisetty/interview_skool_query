-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 21, 2020 at 02:12 PM
-- Server version: 5.5.58
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `INTERVIEWTASK`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `class` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `class`) VALUES
(1, '10'),
(2, '11'),
(3, '12');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `mark_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `term_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`mark_id`, `student_id`, `class_id`, `term_id`, `subject_id`, `marks`) VALUES
(1, 1, 1, 1, 1, 15),
(2, 1, 1, 1, 2, 13),
(3, 1, 1, 1, 3, 25),
(4, 1, 1, 1, 4, 35),
(5, 1, 1, 1, 5, 22),
(6, 1, 1, 2, 1, 44),
(7, 1, 1, 2, 2, 25),
(8, 1, 1, 2, 3, 44),
(9, 1, 1, 2, 4, 10),
(10, 1, 1, 2, 5, 38),
(11, 1, 1, 3, 1, 25),
(12, 1, 1, 3, 2, 25),
(13, 1, 1, 3, 3, 31),
(14, 1, 1, 3, 4, 32),
(15, 1, 1, 3, 5, 20),
(16, 3, 2, 1, 1, 15),
(17, 3, 2, 1, 2, 25),
(18, 3, 2, 1, 3, 19),
(19, 3, 2, 1, 4, 35),
(20, 3, 2, 1, 5, 29),
(21, 3, 2, 2, 1, 10),
(22, 3, 2, 2, 2, 33),
(23, 3, 2, 2, 3, 26),
(24, 3, 2, 2, 4, 22),
(25, 3, 2, 2, 5, 28),
(26, 3, 2, 3, 1, 41),
(27, 3, 2, 3, 2, 35),
(28, 3, 2, 3, 3, 30),
(29, 3, 2, 3, 4, 19),
(30, 3, 2, 3, 5, 33),
(31, 7, 3, 1, 1, 23),
(32, 7, 3, 1, 2, 41),
(33, 7, 3, 1, 3, 26),
(34, 7, 3, 1, 4, 47),
(35, 7, 3, 1, 5, 35),
(36, 7, 3, 2, 1, 52),
(37, 7, 3, 2, 2, 36),
(38, 7, 3, 2, 3, 29),
(39, 7, 3, 2, 4, 39),
(40, 7, 3, 2, 5, 36),
(41, 2, 1, 1, 1, 28),
(42, 2, 1, 1, 2, 32),
(43, 2, 1, 1, 3, 35),
(44, 2, 1, 1, 4, 10),
(45, 2, 1, 1, 5, 36),
(46, 2, 1, 2, 1, 22),
(47, 2, 1, 2, 2, 32),
(48, 2, 1, 2, 3, 30),
(49, 2, 1, 2, 4, 28),
(50, 2, 1, 2, 5, 30),
(51, 2, 1, 3, 1, 30),
(52, 2, 1, 3, 2, 16),
(53, 2, 1, 3, 3, 25),
(54, 2, 1, 3, 4, 40),
(55, 2, 1, 3, 5, 18),
(56, 4, 2, 1, 1, 25),
(57, 4, 2, 1, 2, 35),
(58, 4, 2, 1, 3, 45),
(59, 4, 2, 1, 4, 35),
(60, 4, 2, 1, 5, 30),
(61, 4, 2, 2, 1, 35),
(62, 4, 2, 2, 2, 41),
(63, 4, 2, 2, 3, 36),
(64, 4, 2, 2, 4, 41),
(65, 4, 2, 2, 5, 55),
(66, 4, 2, 3, 1, 40),
(67, 4, 2, 3, 2, 24),
(68, 4, 2, 3, 3, 19),
(69, 4, 2, 3, 4, 24),
(70, 4, 2, 3, 5, 15),
(71, 5, 3, 1, 1, 10),
(72, 5, 3, 1, 2, 39),
(73, 5, 3, 1, 3, 30),
(74, 5, 3, 1, 4, 28),
(75, 5, 3, 1, 5, 30),
(76, 5, 3, 2, 1, 10),
(77, 5, 3, 2, 2, 15),
(78, 5, 3, 2, 3, 42),
(79, 5, 3, 2, 4, 10),
(80, 5, 3, 2, 5, 10),
(81, 5, 3, 3, 1, 48),
(82, 5, 3, 3, 2, 25),
(83, 5, 3, 3, 3, 16),
(84, 5, 3, 3, 4, 38),
(85, 5, 3, 3, 5, 32),
(86, 6, 1, 1, 1, 15),
(87, 6, 1, 1, 2, 35),
(88, 6, 1, 1, 3, 25),
(89, 6, 1, 1, 4, 15),
(90, 6, 1, 1, 5, 26),
(91, 6, 1, 2, 1, 35),
(92, 6, 1, 2, 2, 30),
(93, 6, 1, 2, 3, 29),
(94, 6, 1, 2, 4, 23),
(95, 6, 1, 2, 5, 38),
(96, 6, 1, 3, 1, 28),
(97, 6, 1, 3, 2, 23),
(98, 6, 1, 3, 3, 27),
(99, 6, 1, 3, 4, 37),
(100, 6, 1, 3, 5, 12),
(101, 9, 1, 1, 1, 33),
(102, 9, 1, 1, 2, 10),
(103, 9, 1, 1, 3, 27),
(104, 9, 1, 1, 4, 23),
(105, 9, 1, 1, 5, 35),
(106, 9, 1, 2, 1, 19),
(107, 9, 1, 2, 2, 41),
(108, 9, 1, 2, 3, 36),
(109, 9, 1, 2, 4, 28),
(110, 9, 1, 2, 5, 15),
(111, 9, 1, 3, 1, 31),
(112, 9, 1, 3, 2, 17),
(113, 9, 1, 3, 3, 19),
(114, 9, 1, 3, 4, 28),
(115, 9, 1, 3, 5, 15),
(116, 8, 2, 1, 1, 29),
(117, 8, 2, 1, 2, 15),
(118, 8, 2, 1, 3, 42),
(119, 8, 2, 1, 4, 33),
(120, 8, 2, 1, 5, 20),
(121, 8, 2, 2, 1, 28),
(122, 8, 2, 2, 2, 45),
(123, 8, 2, 2, 3, 19),
(124, 8, 2, 2, 4, 28),
(125, 8, 2, 2, 5, 39),
(126, 8, 2, 3, 1, 36),
(127, 8, 2, 3, 2, 20),
(128, 8, 2, 3, 3, 23),
(129, 8, 2, 3, 4, 27),
(130, 8, 2, 3, 5, 16),
(131, 11, 2, 1, 1, 28),
(132, 11, 2, 1, 2, 15),
(133, 11, 2, 1, 3, 38),
(134, 11, 2, 1, 4, 15),
(135, 11, 2, 1, 5, 20),
(136, 11, 2, 2, 1, 15),
(137, 11, 2, 2, 2, 34),
(138, 11, 2, 2, 3, 27),
(139, 11, 2, 2, 4, 26),
(140, 11, 2, 2, 5, 36),
(141, 11, 2, 3, 1, 32),
(142, 11, 2, 3, 2, 28),
(143, 11, 2, 3, 3, 19),
(144, 11, 2, 3, 4, 34),
(145, 11, 2, 3, 5, 28),
(146, 7, 3, 3, 1, 0),
(147, 7, 3, 3, 2, 0),
(148, 7, 3, 3, 3, 0),
(149, 7, 3, 3, 4, 0),
(150, 7, 3, 3, 5, 0),
(151, 10, 3, 1, 1, 8),
(152, 10, 3, 1, 2, 35),
(153, 10, 3, 1, 3, 44),
(154, 10, 3, 1, 4, 22),
(155, 10, 3, 1, 5, 27),
(156, 10, 3, 2, 1, 43),
(157, 10, 3, 2, 2, 10),
(158, 10, 3, 2, 3, 18),
(159, 10, 3, 2, 4, 30),
(160, 10, 3, 2, 5, 20),
(161, 10, 3, 3, 1, 28),
(162, 10, 3, 3, 2, 44),
(163, 10, 3, 3, 3, 16),
(164, 10, 3, 3, 4, 20),
(165, 10, 3, 3, 5, 19),
(166, 12, 3, 1, 1, 25),
(167, 12, 3, 1, 2, 28),
(168, 12, 3, 1, 3, 20),
(169, 12, 3, 1, 4, 15),
(170, 12, 3, 1, 5, 30),
(171, 12, 3, 2, 1, 35),
(172, 12, 3, 2, 2, 33),
(173, 12, 3, 2, 3, 20),
(174, 12, 3, 2, 4, 15),
(175, 12, 3, 2, 5, 30),
(176, 12, 3, 3, 1, 18),
(177, 12, 3, 3, 2, 15),
(178, 12, 3, 3, 3, 39),
(179, 12, 3, 3, 4, 48),
(180, 12, 3, 3, 5, 18);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `roll_no`, `name`, `gender`) VALUES
(1, 110051, 'Student1', 'Male'),
(2, 110052, 'Student2', 'Male'),
(3, 110053, 'Student3', 'Male'),
(4, 110054, 'Student4', 'Female'),
(5, 110055, 'Student5', 'Male'),
(6, 110056, 'Student6', 'Male'),
(7, 110057, 'Student7', 'Female'),
(8, 110058, 'Student8', 'Male'),
(9, 110059, 'Student9', 'Female'),
(10, 110060, 'Student10', 'Male'),
(11, 110061, 'Student11', 'Male'),
(12, 110062, 'Student12', 'FeMale');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `subjectname` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subjectname`) VALUES
(1, 'Subject1'),
(2, 'Subject2'),
(3, 'Subject3'),
(4, 'Subject4'),
(5, 'Subject5');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `term_id` int(11) NOT NULL,
  `terms` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`term_id`, `terms`) VALUES
(1, 'Term1'),
(2, 'Term2'),
(3, 'Term3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`mark_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`term_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `mark_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
