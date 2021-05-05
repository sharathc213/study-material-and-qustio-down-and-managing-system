-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 05:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentscorner`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sl_no` int(5) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sl_no`, `admin_name`, `email`, `password`) VALUES
(1, 'sharath', 'sharath@123', '123'),
(4, 'GGGGGG', 'adhithashomedecor@gmail.com', '*m23Av9%'),
(10, 'DDDDD', 'asdfsfa@gmail.com', 'uA-R6GlV');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `sl_no` int(5) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`sl_no`, `subject_code`, `book_name`, `location`) VALUES
(2, '55555', 'SDD5', '../files/books/ConfirmationSlip.pdf'),
(3, '55555', 'GHFH', '../files/books/ApplicationDetails.pdf'),
(4, '545454', 'KKKKK', '202003231628179190srikimar_Principle_of_phonemic_analysis.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `sl_no` int(3) NOT NULL,
  `college_code` varchar(50) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`sl_no`, `college_code`, `college_name`, `email`, `password`) VALUES
(9, 'DDDD5', 'FFFFFFF6', 'admin', '123'),
(1, 'GW18', 'GREEN WOODS', 'sharath@123', '123'),
(3, 'SDFSF', 'SDFSF', 'sdfsf', '(o0GN1&Y'),
(6, 'WS55582', 'WDWD555582', 'wedwd', 'Wcl$K*j;');

-- --------------------------------------------------------

--
-- Table structure for table `college_compination`
--

CREATE TABLE `college_compination` (
  `sl_no` int(5) NOT NULL,
  `college_code` varchar(50) NOT NULL,
  `compination_code` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college_compination`
--

INSERT INTO `college_compination` (`sl_no`, `college_code`, `compination_code`) VALUES
(13, 'DDDD5', 34),
(16, 'DDDD5', 35);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `sl_no` int(5) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `course_cat` int(5) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `year` int(3) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`sl_no`, `course_code`, `course_cat`, `course_name`, `year`, `date`) VALUES
(13, '123', 7, 'BCA', 3, '0000-00-00 00:00:00'),
(4, 'GGGG', 4, 'MCA', 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `course_cat`
--

CREATE TABLE `course_cat` (
  `cat_code` int(5) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_cat`
--

INSERT INTO `course_cat` (`cat_code`, `cat_name`, `date`) VALUES
(4, 'PG', '0000-00-00 00:00:00'),
(7, 'UG', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `sl_no` int(5) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_type` int(5) NOT NULL,
  `status` int(10) NOT NULL,
  `teacher_code` int(5) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `disc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `file_type`
--

CREATE TABLE `file_type` (
  `type_code` int(5) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `max_size` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file_type`
--

INSERT INTO `file_type` (`type_code`, `file_type`, `max_size`) VALUES
(1, 'PDF', 1000),
(2, 'IMAGE', 10),
(3, 'VEDIO', 500),
(4, 'PPT', 500),
(5, 'WORD FILE', 500);

-- --------------------------------------------------------

--
-- Table structure for table `qustion`
--

CREATE TABLE `qustion` (
  `sl_no` int(5) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `date` year(4) NOT NULL,
  `location` varchar(100) NOT NULL,
  `answer_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qustion`
--

INSERT INTO `qustion` (`sl_no`, `subject_code`, `date`, `location`, `answer_location`) VALUES
(9, '55555', 2021, 'ApplicationDetails.pdf', 'sample.pdf'),
(10, '55555', 2019, 'Document (8).pdf', '202003231628179190srikimar_Principle_of_phonemic_analysis.pdf'),
(11, '545454', 2019, '202003231628179190srikimar_Principle_of_phonemic_analysis.pdf', 'ApplicationDetails_3.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sl_no` int(5) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sl_no`, `subject_code`, `subject_name`, `date`) VALUES
(6, '545454', 'SHARATH', '0000-00-00 00:00:00'),
(5, '55555', 'SOFTWARE ENG', '0000-00-00 00:00:00'),
(1, 'FFF', 'SSS5', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `subject_course`
--

CREATE TABLE `subject_course` (
  `compination_code` int(5) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `sem_1_sub_1` varchar(50) NOT NULL,
  `sem_1_sub_2` varchar(50) NOT NULL,
  `sem_1_sub_3` varchar(50) NOT NULL,
  `sem_1_sub_4` varchar(50) NOT NULL,
  `sem_1_sub_5` varchar(50) NOT NULL,
  `sem_2_sub_1` varchar(50) NOT NULL,
  `sem_2_sub_2` varchar(50) NOT NULL,
  `sem_2_sub_3` varchar(50) NOT NULL,
  `sem_2_sub_4` varchar(50) NOT NULL,
  `sem_2_sub_5` varchar(50) NOT NULL,
  `sem_3_sub_1` varchar(50) NOT NULL,
  `sem_3_sub_2` varchar(50) NOT NULL,
  `sem_3_sub_3` varchar(50) NOT NULL,
  `sem_3_sub_4` varchar(50) NOT NULL,
  `sem_3_sub_5` varchar(50) NOT NULL,
  `sem_4_sub_1` varchar(50) NOT NULL,
  `sem_4_sub_2` varchar(50) NOT NULL,
  `sem_4_sub_3` varchar(50) NOT NULL,
  `sem_4_sub_4` varchar(50) NOT NULL,
  `sem_4_sub_5` varchar(50) NOT NULL,
  `sem_5_sub_1` varchar(50) DEFAULT NULL,
  `sem_5_sub_2` varchar(50) DEFAULT NULL,
  `sem_5_sub_3` varchar(50) DEFAULT NULL,
  `sem_5_sub_4` varchar(50) DEFAULT NULL,
  `sem_5_sub_5` varchar(50) DEFAULT NULL,
  `sem_6_sub_1` varchar(50) DEFAULT NULL,
  `sem_6_sub_2` varchar(50) DEFAULT NULL,
  `sem_6_sub_3` varchar(50) DEFAULT NULL,
  `sem_6_sub_4` varchar(50) DEFAULT NULL,
  `sem_6_sub_5` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_course`
--

INSERT INTO `subject_course` (`compination_code`, `course_code`, `sem_1_sub_1`, `sem_1_sub_2`, `sem_1_sub_3`, `sem_1_sub_4`, `sem_1_sub_5`, `sem_2_sub_1`, `sem_2_sub_2`, `sem_2_sub_3`, `sem_2_sub_4`, `sem_2_sub_5`, `sem_3_sub_1`, `sem_3_sub_2`, `sem_3_sub_3`, `sem_3_sub_4`, `sem_3_sub_5`, `sem_4_sub_1`, `sem_4_sub_2`, `sem_4_sub_3`, `sem_4_sub_4`, `sem_4_sub_5`, `sem_5_sub_1`, `sem_5_sub_2`, `sem_5_sub_3`, `sem_5_sub_4`, `sem_5_sub_5`, `sem_6_sub_1`, `sem_6_sub_2`, `sem_6_sub_3`, `sem_6_sub_4`, `sem_6_sub_5`) VALUES
(34, '123', 'FFF', 'FFF', 'FFF', 'FFF', '55555', 'FFF', '55555', '55555', 'FFF', '55555', 'FFF', 'FFF', 'FFF', '55555', '55555', '55555', '55555', '55555', '55555', '55555', 'FFF', 'FFF', 'FFF', '55555', 'FFF', 'FFF', 'FFF', 'FFF', '55555', '55555'),
(35, '123', '545454', '55555', 'FFF', '55555', '55555', '55555', '55555', '55555', '55555', '55555', '55555', 'FFF', '55555', '55555', '55555', '55555', 'FFF', '545454', '545454', '55555', '55555', '545454', '55555', '55555', '55555', '545454', '55555', '55555', '55555', '55555'),
(36, 'GGGG', '55555', '55555', '55555', '55555', '55555', 'FFF', '55555', '55555', 'FFF', 'FFF', '55555', '55555', '55555', '55555', '55555', '55555', '55555', '55555', '55555', '55555', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_code` int(5) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `college_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_code`, `teacher_name`, `email`, `password`, `college_code`) VALUES
(2, 'sharath', 'sharath@123', '123', 'GW18'),
(3, 'SHARATH C', 'admin', '123', 'DDDD5'),
(7, 'MAZYUNA', 'mazyuna@gmail.com', 'd#$(gQuN', 'DDDD5');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subject`
--

CREATE TABLE `teacher_subject` (
  `sl_no` int(5) NOT NULL,
  `teacher_code` int(5) NOT NULL,
  `subject_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_subject`
--

INSERT INTO `teacher_subject` (`sl_no`, `teacher_code`, `subject_code`) VALUES
(2, 3, '545454');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sl_no`),
  ADD UNIQUE KEY `admin_name` (`admin_name`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`sl_no`),
  ADD KEY `subject_code` (`subject_code`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`college_code`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `sl_no` (`sl_no`);

--
-- Indexes for table `college_compination`
--
ALTER TABLE `college_compination`
  ADD PRIMARY KEY (`sl_no`),
  ADD KEY `college_compination_ibfk_1` (`college_code`),
  ADD KEY `college_compination_ibfk_2` (`compination_code`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_code`),
  ADD KEY `sl_no` (`sl_no`),
  ADD KEY `course_ibfk_1` (`course_cat`);

--
-- Indexes for table `course_cat`
--
ALTER TABLE `course_cat`
  ADD PRIMARY KEY (`cat_code`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`sl_no`),
  ADD KEY `subject_code` (`subject_code`),
  ADD KEY `teacher_code` (`teacher_code`),
  ADD KEY `file_type` (`file_type`);

--
-- Indexes for table `file_type`
--
ALTER TABLE `file_type`
  ADD PRIMARY KEY (`type_code`);

--
-- Indexes for table `qustion`
--
ALTER TABLE `qustion`
  ADD PRIMARY KEY (`sl_no`),
  ADD KEY `subject_code` (`subject_code`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_code`),
  ADD KEY `sl_no` (`sl_no`);

--
-- Indexes for table `subject_course`
--
ALTER TABLE `subject_course`
  ADD PRIMARY KEY (`compination_code`),
  ADD KEY `sem_5_sub_1` (`sem_5_sub_1`),
  ADD KEY `sem_5_sub_2` (`sem_5_sub_2`),
  ADD KEY `sem_5_sub_3` (`sem_5_sub_3`),
  ADD KEY `sem_5_sub_4` (`sem_5_sub_4`),
  ADD KEY `sem_5_sub_5` (`sem_5_sub_5`),
  ADD KEY `sem_6_sub_1` (`sem_6_sub_1`),
  ADD KEY `sem_6_sub_2` (`sem_6_sub_2`),
  ADD KEY `sem_6_sub_3` (`sem_6_sub_3`),
  ADD KEY `sem_6_sub_4` (`sem_6_sub_4`),
  ADD KEY `sem_6_sub_5` (`sem_6_sub_5`),
  ADD KEY `subject_course_ibfk_1` (`course_code`),
  ADD KEY `sem_1_sub_1` (`sem_1_sub_1`),
  ADD KEY `subject_course_ibfk_10` (`sem_1_sub_2`),
  ADD KEY `subject_course_ibfk_11` (`sem_1_sub_3`),
  ADD KEY `subject_course_ibfk_12` (`sem_1_sub_4`),
  ADD KEY `subject_course_ibfk_13` (`sem_3_sub_3`),
  ADD KEY `subject_course_ibfk_14` (`sem_3_sub_4`),
  ADD KEY `subject_course_ibfk_15` (`sem_3_sub_5`),
  ADD KEY `subject_course_ibfk_16` (`sem_4_sub_1`),
  ADD KEY `subject_course_ibfk_17` (`sem_4_sub_2`),
  ADD KEY `subject_course_ibfk_18` (`sem_4_sub_3`),
  ADD KEY `subject_course_ibfk_19` (`sem_4_sub_4`),
  ADD KEY `subject_course_ibfk_2` (`sem_1_sub_5`),
  ADD KEY `subject_course_ibfk_20` (`sem_4_sub_5`),
  ADD KEY `subject_course_ibfk_3` (`sem_2_sub_1`),
  ADD KEY `subject_course_ibfk_4` (`sem_2_sub_2`),
  ADD KEY `subject_course_ibfk_5` (`sem_2_sub_3`),
  ADD KEY `subject_course_ibfk_6` (`sem_2_sub_4`),
  ADD KEY `subject_course_ibfk_7` (`sem_2_sub_5`),
  ADD KEY `subject_course_ibfk_8` (`sem_3_sub_1`),
  ADD KEY `subject_course_ibfk_9` (`sem_3_sub_2`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_code`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `teacher_ibfk_1` (`college_code`);

--
-- Indexes for table `teacher_subject`
--
ALTER TABLE `teacher_subject`
  ADD PRIMARY KEY (`sl_no`),
  ADD KEY `teacher_subject_ibfk_1` (`subject_code`),
  ADD KEY `teacher_subject_ibfk_2` (`teacher_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `sl_no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `college_compination`
--
ALTER TABLE `college_compination`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `course_cat`
--
ALTER TABLE `course_cat`
  MODIFY `cat_code` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `file_type`
--
ALTER TABLE `file_type`
  MODIFY `type_code` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `qustion`
--
ALTER TABLE `qustion`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject_course`
--
ALTER TABLE `subject_course`
  MODIFY `compination_code` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_code` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teacher_subject`
--
ALTER TABLE `teacher_subject`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`subject_code`) REFERENCES `subject` (`subject_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `college_compination`
--
ALTER TABLE `college_compination`
  ADD CONSTRAINT `college_compination_ibfk_1` FOREIGN KEY (`college_code`) REFERENCES `college` (`college_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `college_compination_ibfk_2` FOREIGN KEY (`compination_code`) REFERENCES `subject_course` (`compination_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`course_cat`) REFERENCES `course_cat` (`cat_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`subject_code`) REFERENCES `subject` (`subject_code`),
  ADD CONSTRAINT `files_ibfk_2` FOREIGN KEY (`teacher_code`) REFERENCES `teacher` (`teacher_code`),
  ADD CONSTRAINT `files_ibfk_3` FOREIGN KEY (`file_type`) REFERENCES `file_type` (`type_code`);

--
-- Constraints for table `qustion`
--
ALTER TABLE `qustion`
  ADD CONSTRAINT `qustion_ibfk_1` FOREIGN KEY (`subject_code`) REFERENCES `subject` (`subject_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`college_code`) REFERENCES `college` (`college_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher_subject`
--
ALTER TABLE `teacher_subject`
  ADD CONSTRAINT `teacher_subject_ibfk_1` FOREIGN KEY (`subject_code`) REFERENCES `subject` (`subject_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_subject_ibfk_2` FOREIGN KEY (`teacher_code`) REFERENCES `teacher` (`teacher_code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
