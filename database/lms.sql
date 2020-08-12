-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 05:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `coursecode` varchar(250) NOT NULL,
  `coursetitle` varchar(250) NOT NULL,
  `coursedescription` varchar(250) NOT NULL,
  `credithours` varchar(250) NOT NULL,
  `courselevel` varchar(250) NOT NULL,
  `coursestatus` varchar(250) NOT NULL,
  `courseImage` varchar(250) NOT NULL,
  `registrationdate` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `lecturerid` int(10) NOT NULL,
  `lecturertitle` varchar(250) NOT NULL,
  `lecturername` varchar(250) NOT NULL,
  `lecturercontact` varchar(250) NOT NULL,
  `lecturerdepartment` varchar(250) NOT NULL,
  `lecturerimage` varchar(250) NOT NULL,
  `registrationdate` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecturerid`, `lecturertitle`, `lecturername`, `lecturercontact`, `lecturerdepartment`, `lecturerimage`, `registrationdate`) VALUES
(2, 'Dr', 'Awuni Grace', '0258965412', 'Information Techonology', 'GBWA-20180921164140.jpg', '2020-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageid` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL,
  `sentdate` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `indexnumber` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `studentemail` varchar(250) NOT NULL,
  `studentpassword` varchar(250) NOT NULL,
  `programofstudy` varchar(250) NOT NULL,
  `studentlevel` varchar(250) NOT NULL,
  `studentimage` varchar(250) NOT NULL,
  `registrationdate` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`indexnumber`, `fullname`, `studentemail`, `studentpassword`, `programofstudy`, `studentlevel`, `studentimage`, `registrationdate`) VALUES
('5151040001', 'Bernard Arhin', 'bern@gmail.com', '123', 'Information Technology', 'level_100', 'GBWA-20180327170123.jpg', 'June-24-2020 14:37:43'),
('5151040002', 'Edmond Forson', 'fg@gmail.com', '210', 'Information Technology', 'level_200', 'GBWA-20180423174655.jpg', 'June-24-2020 14:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `username` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `occupation` varchar(250) NOT NULL,
  `companyname` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `userimage` varchar(250) NOT NULL,
  `registrationdate` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`username`, `fullname`, `occupation`, `companyname`, `phone`, `email`, `password`, `userimage`, `registrationdate`) VALUES
('admin', 'Administrator', 'Administrator', 'Administrator', '233245123456', 'Admin@gmail.com', 'admin', 'pic1.jpg', '2020-06-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`coursecode`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lecturerid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`indexnumber`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `lecturerid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageid` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
