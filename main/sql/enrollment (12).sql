-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 03:36 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollment`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_code` varchar(10) NOT NULL,
  `department` varchar(30) NOT NULL,
  `course_name` varchar(70) NOT NULL,
  `required_units` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_code`, `department`, `course_name`, `required_units`) VALUES
('BSA', 'CBA', 'Bachelor of Science in Accountancy', 200),
('BSBA', 'CBA', 'Bachelor of Science in Business Administration', 200),
('BSCE', 'CEA', 'Bachelor of Science in Civil Engineering', 200),
('BSCS', 'CCS', 'Bachelor of Science in Computer Science', 200),
('BSECE', 'CEA', 'Bachelor of Science in Electronics Engineering', 200),
('BSEE', 'CEA', 'Bachelor of Science in Electrical Engineering', 200),
('BSHRM', 'CBA', 'Bachelor of Science in Hotel and Restaurant Management', 200),
('BSIT', 'CCS', 'Bachelor of Science in Information Technology', 200),
('BSMATH', 'CAS', 'Bachelor of Science in Mathematics', 200),
('BSME', 'CEA', 'Bachelor of Science in Mechanical Engineering', 200),
('BSN', 'CN', 'Bachelor of Science in Nursing', 200),
('BSPH', 'CPH', 'Bachelor of Science in Public Health', 200),
('BSPS', 'CS', 'Bachelor of Science in Pharmacy', 200),
('BSSTAT', 'CAS', 'Bachelor of Science in Statistics', 200),
('BSTM', 'CAS', 'Bachelor of Science in Tourism Management', 200);

-- --------------------------------------------------------

--
-- Table structure for table `curriculum`
--

CREATE TABLE `curriculum` (
  `subject_code` varchar(10) NOT NULL,
  `subject_desc` varchar(100) NOT NULL,
  `units` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curriculum`
--

INSERT INTO `curriculum` (`subject_code`, `subject_desc`, `units`, `Year`, `Semester`) VALUES
('ACCTG2', 'Financial Accounting 2', 3, 2, 1),
('BA2', 'Applied Economics', 3, 1, 1),
('BA4', 'Business Law and Taxation', 3, 3, 1),
('CMSC11', 'Introduction to Computer Science', 3, 1, 1),
('CMSC122', 'Operating Systems', 3, 2, 2),
('CMSC128', 'Computer Networks', 3, 3, 1),
('CMSC137', 'Introduction to Artificial Intelligence', 3, 3, 2),
('CMSC141', 'Database Systems', 3, 3, 1),
('CMSC170', 'Software Engineering 1', 3, 3, 2),
('CMSC180', 'Parallel and Distributed Computing', 3, 4, 1),
('CMSC181', 'Cloud Computing', 3, 5, 1),
('CMSC190', 'Capstone Project', 6, 4, 2),
('CMSC21', 'Data Structures', 3, 1, 2),
('CMSC231', 'Computer Networks 2', 3, 3, 2),
('CMSC245', 'Artificial Intelligence', 3, 4, 2),
('CMSC323', 'Database Management Systems', 3, 3, 1),
('CMSC541', 'Software Engineering 2', 3, 4, 1),
('CMSC56', 'Web Development', 3, 2, 1),
('CS101', 'Introduction to Computing', 3, 1, 1),
('CS102', 'Computer Programming 1', 3, 1, 1),
('CS450', 'Capstone Project 1', 3, 1, 1),
('ECON1', 'Applied Economics', 3, 1, 1),
('ENG131', 'English Composition 1', 3, 1, 1),
('FIN2', 'Investments', 3, 4, 2),
('GE-EL1', 'Living in the IT Era', 3, 1, 1),
('HIST101', 'World History', 3, 1, 2),
('HRM3', 'Human Resource Management', 3, 3, 2),
('IT318', 'Integrative Programming and Tech 2', 3, 3, 2),
('IT322', 'Network Administration and Security', 3, 4, 1),
('IT332', 'Web Systems and Technologies', 3, 4, 2),
('IT410', 'Enterprise Systems Development', 3, 1, 1),
('IT420', 'Data Science and Analytics', 3, 1, 2),
('IT430', 'Mobile and Pervasive Computing', 3, 2, 2),
('IT460', 'Capstone Project 2', 3, 2, 2),
('IT470', 'IT Governance and Ethics', 3, 1, 1),
('IT480', 'Special Topics in IT', 3, 4, 2),
('LANG101', 'Introductory Spanish', 3, 1, 2),
('MARK2', 'Marketing Management', 3, 2, 2),
('MATH122', 'Trigonometry', 3, 1, 1),
('MATH124', 'College Algebra', 3, 1, 1),
('MATH126', 'College Algebra', 3, 1, 1),
('MATH127', 'Trigonometry', 3, 1, 1),
('MATH200', 'Calculus 2', 3, 2, 1),
('NSTP1', 'National Service Training Program 1', 3, 1, 1),
('PE1', 'Movement Enhancement', 3, 1, 1),
('PHYS201', 'Physics 1', 3, 2, 1),
('PSYC101', 'Introduction to Psychology', 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `subject_code` varchar(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `day` varchar(10) NOT NULL,
  `room` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `course_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `subject_code`, `start_time`, `end_time`, `day`, `room`, `section`, `course_code`) VALUES
(1000, 'CMSC11', '11:45:00', '12:45:00', 'Friday', 'Room 411', 'B', 'BSCS'),
(1001, 'CMSC21', '10:00:00', '11:30:00', 'Monday', 'Room 305', 'A', 'BSCS'),
(1002, 'CMSC56', '13:00:00', '14:30:00', 'Wednesday', 'Room 210', 'C', 'BSCS'),
(1003, 'CMSC122', '09:00:00', '10:30:00', 'Tuesday', 'Room 302', 'D', 'BSCS'),
(1004, 'CMSC128', '14:00:00', '15:30:00', 'Thursday', 'Room 402', 'E', 'BSCS'),
(1005, 'CMSC137', '15:00:00', '16:30:00', 'Thursday', 'Room 404', 'B', 'BSCS'),
(1006, 'CMSC141', '10:30:00', '12:00:00', 'Wednesday', 'Room 202', 'A', 'BSCS'),
(1007, 'CMSC170', '09:00:00', '10:30:00', 'Tuesday', 'Room 409', 'C', 'BSCS'),
(1008, 'CMSC180', '13:00:00', '14:30:00', 'Monday', 'Room 303', 'D', 'BSCS'),
(1009, 'CMSC190', '11:00:00', '13:00:00', 'Friday', 'Room 410', 'E', 'BSCS'),
(1010, 'CMSC323', '13:30:00', '15:00:00', 'Monday', 'Room 302', 'B', 'BSCS'),
(1011, 'CMSC231', '10:00:00', '11:30:00', 'Wednesday', 'Room 211', 'A', 'BSCS'),
(1012, 'CMSC541', '09:00:00', '10:30:00', 'Thursday', 'Room 305', 'C', 'BSCS'),
(1013, 'CMSC245', '13:00:00', '14:30:00', 'Tuesday', 'Room 404', 'D', 'BSCS'),
(1014, 'CMSC181', '14:00:00', '15:30:00', 'Friday', 'Room 410', 'E', 'BSCS'),
(1016, 'IT318', '10:00:00', '11:30:00', 'Wednesday', 'Room 211', 'A', 'BSIT'),
(1017, 'IT322', '09:00:00', '10:30:00', 'Thursday', 'Room 305', 'C', 'BSIT'),
(1018, 'IT332', '13:00:00', '14:30:00', 'Tuesday', 'Room 404', 'D', 'BSIT'),
(1019, 'IT410', '14:00:00', '15:30:00', 'Friday', 'Room 410', 'E', 'BSIT'),
(1020, 'IT420', '13:30:00', '15:00:00', 'Monday', 'Room 302', 'B', 'BSIT'),
(1021, 'IT430', '10:00:00', '11:30:00', 'Wednesday', 'Room 211', 'A', 'BSIT'),
(1022, 'CS450', '09:00:00', '12:00:00', 'Thursday', 'Room 305', 'C', 'BSIT'),
(1023, 'IT460', '13:00:00', '16:00:00', 'Tuesday', 'Room 404', 'D', 'BSIT'),
(1024, 'IT470', '14:00:00', '15:30:00', 'Friday', 'Room 410', 'E', 'BSIT'),
(1025, 'IT480', '13:30:00', '15:00:00', 'Monday', 'Room 302', 'B', 'BSIT'),
(1027, 'BA4', '08:30:00', '10:00:00', 'Monday', 'Room 301', 'B', 'BSBA'),
(1028, 'FIN2', '13:00:00', '15:00:00', 'Thursday', 'Room 402', 'A', 'BSBA'),
(1029, 'HRM3', '09:00:00', '11:00:00', 'Friday', 'Room 305', 'C', 'BSHRM'),
(1030, 'MARK2', '16:00:00', '18:00:00', 'Tuesday', 'Room 210', 'B', 'BSBA'),
(1031, 'ACCTG2', '10:30:00', '12:00:00', 'Wednesday', 'Room 101', 'A', 'BSBA'),
(1032, 'CS101', '09:00:00', '10:30:00', 'Monday', 'Room 301', 'A', 'BSCS'),
(1033, 'CS102', '08:30:00', '10:00:00', 'Wednesday', 'Room 101', 'B', 'BSCS'),
(1034, 'GE-EL1', '13:00:00', '14:30:00', 'Tuesday', 'Room 202', 'A', 'BSCS'),
(1035, 'NSTP1', '11:00:00', '12:30:00', 'Thursday', 'Room 302', 'C', 'BSCS'),
(1036, 'PE1', '14:00:00', '15:30:00', 'Friday', 'Room 211', 'A', 'BSCS'),
(1037, 'ENG131', '08:00:00', '09:30:00', 'Monday', 'Room 101', 'A', 'BSBA'),
(1038, 'ECON1', '10:00:00', '11:30:00', 'Monday', 'Room 102', 'B', 'BSBA'),
(1039, 'MATH124', '08:00:00', '09:30:00', 'Tuesday', 'Room 201', 'C', 'BSBA'),
(1040, 'MATH122', '10:00:00', '11:30:00', 'Tuesday', 'Room 202', 'D', 'BSBA'),
(1041, 'BA2', '13:30:00', '15:00:00', 'Monday', 'Room 302', 'B', 'BSBA'),
(1043, 'MATH126', '08:00:00', '09:30:00', 'Tuesday', 'Room 201', 'C', 'BSIT'),
(1044, 'MATH127', '10:00:00', '11:30:00', 'Tuesday', 'Room 202', 'D', 'BSIT');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `user_type` enum('admin','student') NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `first_name`, `last_name`, `date_of_birth`, `address`, `phone_number`, `gender`, `user_type`, `username`, `password`) VALUES
(1, 'William', 'Bailey', '1996-05-20', 'Philippines', '09123456789', 'Male', 'student', 'user', 'test'),
(2, 'James', 'Riley', '1998-06-12', 'Germany', '09345678901', 'Male', 'admin', 'admin', 'test'),
(5, 'Sarah', 'Johnson', '1999-11-11', 'New Zealand', '09123456785', 'Female', 'student', 'user5', 'test5'),
(6, 'David', 'Lee', '1997-02-23', 'South Korea', '09123456784', 'Male', 'student', 'user6', 'test6'),
(7, 'Emily', 'Chen', '1998-08-08', 'Taiwan', '09123456783', 'Female', 'student', 'user7', 'test7'),
(8, 'Michael', 'Wang', '1995-03-15', 'China', '09123456782', 'Male', 'student', 'user8', 'test8'),
(9, 'Amanda', 'Nguyen', '1997-07-20', 'Vietnam', '09123456781', 'Female', 'student', 'user9', 'test9'),
(10, 'Matthew', 'Garcia', '1996-01-30', 'Mexico', '09123456780', 'Male', 'student', 'user10', 'test10'),
(11, 'Olivia', 'Brown', '1999-10-01', 'United Kingdom', '09123456779', 'Female', 'student', 'user11', 'test11'),
(12, 'Daniel', 'Davis', '1998-05-05', 'Canada', '09123456778', 'Male', 'student', 'user12', 'test12'),
(13, 'Jessica', 'Miller', '1996-04-17', 'USA', '09123456777', 'Female', 'student', 'user13', 'test13'),
(14, 'Ryan', 'Wilson', '1997-09-03', 'Australia', '09123456776', 'Male', 'student', 'user14', 'test14'),
(15, 'Ashley', 'Anderson', '1999-12-31', 'New Zealand', '09123456775', 'Female', 'student', 'user15', 'test15'),
(16, 'Christopher', 'Lopez', '1996-03-10', 'Mexico', '09123456774', 'Male', 'student', 'user16', 'test16'),
(20, 'John', 'Doe', '1998-09-15', 'USA', '09123456788', 'Male', 'student', 'user2', 'test2'),
(30, 'Jane', 'Doe', '1997-06-01', 'Canada', '09123456787', 'Female', 'student', 'user3', 'test3'),
(40, 'James', 'Smith', '1995-04-03', 'Australia', '09123456786', 'Male', 'student', 'user4', 'test4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `curriculum`
--
ALTER TABLE `curriculum`
  ADD PRIMARY KEY (`subject_code`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `subject_code` (`subject_code`),
  ADD KEY `course_code` (`course_code`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1045;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `fk_schedule_course_code` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`),
  ADD CONSTRAINT `fk_schedule_subject` FOREIGN KEY (`subject_code`) REFERENCES `curriculum` (`subject_code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
