-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2018 at 05:17 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'admin', '2017-12-27 15:06:11'),
(2, 'admin', 'admin1', '2017-12-30 19:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `tblcart`
--

CREATE TABLE `tblcart` (
  `cart_id` int(20) NOT NULL,
  `extra_id` int(50) NOT NULL,
  `qty` int(10) NOT NULL,
  `RollId` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `trans` int(11) NOT NULL,
  `checkedon` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcart`
--

INSERT INTO `tblcart` (`cart_id`, `extra_id`, `qty`, `RollId`, `status`, `added`, `trans`, `checkedon`) VALUES
(15, 12345, 1, '961120', 'Completed', '2018-01-06 14:59:25', 29036, '2018-01-07 15:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `tblclasses`
--

CREATE TABLE `tblclasses` (
  `id` int(11) NOT NULL,
  `ClassName` varchar(80) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclasses`
--

INSERT INTO `tblclasses` (`id`, `ClassName`, `CreationDate`, `UpdationDate`) VALUES
(4, 'Inovatifff', '2017-12-25 08:55:26', '2018-01-06 22:04:57'),
(6, 'Amanah', '2018-01-01 10:33:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblextras`
--

CREATE TABLE `tblextras` (
  `extra_id` int(50) NOT NULL,
  `extra_name` varchar(50) NOT NULL,
  `extra_desc` varchar(100) NOT NULL,
  `extra_price` float NOT NULL,
  `extra_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblextras`
--

INSERT INTO `tblextras` (`extra_id`, `extra_name`, `extra_desc`, `extra_price`, `extra_type`) VALUES
(5611, 'Mathematics Exercise Book Form 3', 'Mathematics Exercise Book Form 3 is suitable for the students to study.', 15.5, 'book'),
(5612, 'Mathematics Exercise Book Form 4', 'Mathematics Exercise Book Form 4 is suitable for the students to study.', 15.5, 'book'),
(5613, 'Mathematics Exercise Book Form 5', 'Mathematics Exercise Book Form 5 is suitable for the students to study.', 15.5, 'book'),
(12345, 'Yuran Sukan', 'Yuran Sukan', 180, 'fee');

-- --------------------------------------------------------

--
-- Table structure for table `tblresult`
--

CREATE TABLE `tblresult` (
  `id` int(11) NOT NULL,
  `RollId` int(11) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresult`
--

INSERT INTO `tblresult` (`id`, `RollId`, `ClassId`, `SubjectId`, `marks`, `PostingDate`, `UpdationDate`) VALUES
(87, 961120, 4, 9, 30, '2018-01-04 18:50:58', NULL),
(90, 961120, 4, 4, 30, '2018-01-04 18:50:59', NULL),
(91, 961120, 4, 11, 30, '2018-01-04 18:50:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `StudentId` int(11) NOT NULL,
  `StudentName` varchar(100) NOT NULL,
  `RollId` varchar(100) NOT NULL,
  `StudentEmail` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `pass` int(50) NOT NULL,
  `ClassId` int(11) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`StudentId`, `StudentName`, `RollId`, `StudentEmail`, `Gender`, `DOB`, `pass`, `ClassId`, `RegDate`, `UpdationDate`, `Status`) VALUES
(0, 'Norfatihah Bistamam', '960127', 'fbistamam@gmail.com', 'Female', '1996-01-27', 1234, 6, '2018-01-06 19:45:16', '2018-01-06 22:07:13', 'Active'),
(0, 'Test 1', '961120', 'fakrulsmkawa@gmail.com', 'Female', '2018-12-31', 1234, 4, '2018-01-04 16:54:00', '2018-01-06 16:06:27', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjectcombination`
--

CREATE TABLE `tblsubjectcombination` (
  `id` int(11) NOT NULL,
  `ClassId` int(11) NOT NULL,
  `SubjectId` int(11) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjectcombination`
--

INSERT INTO `tblsubjectcombination` (`id`, `ClassId`, `SubjectId`, `status`, `CreationDate`, `Updationdate`) VALUES
(1, 1, 1, 1, '2017-11-12 07:36:57', '2017-11-12 07:36:57'),
(3, 6, 2, 1, '2017-11-12 07:37:07', '2017-11-12 07:37:07'),
(4, 1, 4, 1, '2017-12-13 16:55:30', '2017-12-13 16:55:30'),
(6, 1, 2, 1, '2017-12-14 08:31:56', '2017-12-14 08:31:56'),
(7, 1, 3, 1, '2017-12-24 09:48:15', '2017-12-24 09:48:15'),
(8, 5, 7, 1, '2017-12-26 09:44:03', '2017-12-26 09:44:03'),
(11, 2, 6, 1, '2017-12-26 10:10:08', '2017-12-26 10:10:08'),
(12, 6, 8, 1, '2017-12-26 10:30:55', '2017-12-26 10:30:55'),
(13, 5, 6, 1, '2017-12-26 10:31:11', '2017-12-26 10:31:11'),
(14, 5, 8, 1, '2017-12-26 10:31:18', '2017-12-26 10:31:18'),
(16, 4, 9, 1, '2017-12-29 03:59:56', '2017-12-29 03:59:56'),
(18, 1, 5, 1, '2017-12-30 20:24:58', '2017-12-30 20:24:58'),
(19, 1, 9, 1, '2017-12-30 20:26:00', '2017-12-30 20:26:00'),
(20, 4, 1, 1, '2018-01-01 09:45:49', '2018-01-01 09:45:49'),
(21, 4, 3, 1, '2018-01-01 09:46:43', '2018-01-01 09:46:43'),
(22, 4, 4, 1, '2018-01-01 09:47:19', '2018-01-01 09:47:19'),
(23, 4, 11, 1, '2018-01-01 09:47:45', '2018-01-01 09:47:45');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `id` int(11) NOT NULL,
  `SubjectName` varchar(100) NOT NULL,
  `SubjectCode` varchar(100) NOT NULL,
  `Creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`id`, `SubjectName`, `SubjectCode`, `Creationdate`, `UpdationDate`) VALUES
(1, 'Bahasa Melayuu', '1001', '2017-11-12 07:35:45', '2018-01-04 17:57:22'),
(4, 'Arabic', '1003', '2017-11-12 07:36:16', '2017-12-27 22:02:02'),
(6, 'Sciences', '1005', '2017-12-25 08:25:13', '2017-12-27 22:02:29'),
(7, 'Mathematicss', '1006', '2017-12-25 08:25:38', '2018-01-07 15:03:37'),
(8, 'Ekonomi', '4001', '2017-12-26 10:30:25', '2017-12-27 22:02:23'),
(9, 'Add Math', '5001', '2017-12-27 15:55:20', '2017-12-27 22:02:16'),
(11, 'Biology', '1100', '2017-12-30 19:11:17', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcart`
--
  ADD ALTER TABLE `tblcart`
PRIMARY KEY (`cart_id`),
  ADD KEY `extra_id` (`extra_id`),
  ADD KEY `RollId` (`RollId`);

--
-- Indexes for table `tblclasses`
--
ALTER TABLE `tblclasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblextras`
--
ALTER TABLE `tblextras`
  ADD PRIMARY KEY (`extra_id`);

--
-- Indexes for table `tblresult`
--
ALTER TABLE `tblresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`RollId`);

--
-- Indexes for table `tblsubjectcombination`
--
ALTER TABLE `tblsubjectcombination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblcart`
--
ALTER TABLE `tblcart`
  MODIFY `cart_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tblclasses`
--
ALTER TABLE `tblclasses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tblextras`
--
ALTER TABLE `tblextras`
  MODIFY `extra_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;
--
-- AUTO_INCREMENT for table `tblresult`
--
ALTER TABLE `tblresult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `tblsubjectcombination`
--
ALTER TABLE `tblsubjectcombination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblcart`
--
ALTER TABLE `tblcart`
  ADD CONSTRAINT `tblcart_ibfk_1` FOREIGN KEY (`RollId`) REFERENCES `tblstudents` (`RollId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
