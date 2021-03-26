-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 02:58 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_has`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationdate`) VALUES
(10, 'admin', 'admin', '2020-05-24 20:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `docSpecialization` varchar(255) NOT NULL,
  `d_id` int(11) NOT NULL,
  `patientsid` int(11) NOT NULL,
  `consultancyFees` int(11) NOT NULL,
  `appointmentDate` varchar(255) NOT NULL,
  `appointmentTime` varchar(255) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `patientsStatus` int(11) NOT NULL,
  `doctorStatus` int(11) NOT NULL,
  `updationDate` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `docSpecialization`, `d_id`, `patientsid`, `consultancyFees`, `appointmentDate`, `appointmentTime`, `postingDate`, `patientsStatus`, `doctorStatus`, `updationDate`, `city`) VALUES
(1, 'dentist(master)', 1, 0, 500, '2020-05-07', '04:16', '2020-05-29 17:20:33', 1, 1, '', ''),
(2, 'dentist(master)', 1, 2, 500, '2020-05-07', '04:16', '2020-05-29 17:23:42', 1, 1, '', ''),
(3, 'ENT', 3, 0, 800, '2020-06-10', '15:30', '2020-06-03 16:30:06', 0, 1, '', ''),
(4, 'Gynecologist', 4, 0, 700, '2020-06-24', '16:30', '2020-06-14 13:22:42', 0, 1, '', ''),
(5, 'dentist(master)', 2, 0, 700, '2020-07-24', '17:30', '2020-06-14 13:38:18', 1, 1, '', ''),
(6, 'ENT', 3, 0, 800, '2020-07-21', '15:30', '2020-06-25 19:24:37', 1, 1, '', ''),
(7, 'Gynecologist', 4, 0, 700, '2020-07-05', '09:50', '2020-06-26 13:00:15', 1, 1, '', ''),
(8, 'Gynecologist', 4, 0, 700, '2020-07-24', '18:30', '2020-06-28 05:34:18', 1, 1, '', ''),
(9, 'dentist(master)', 1, 0, 500, '2020-07-21', '17:30', '2020-07-01 15:10:12', 1, 1, '', ''),
(10, 'ENT', 3, 0, 800, '2020-07-12', '17:15', '2020-07-01 15:56:32', 1, 1, '', ''),
(11, 'ENT', 3, 0, 800, '2020-07-12', '17:15', '2020-07-01 16:08:04', 1, 1, '', ''),
(12, 'ENT', 3, 4, 800, '2020-07-12', '17:30', '2020-07-01 16:15:06', 1, 0, '', ''),
(13, 'ENT', 3, 1, 800, '2020-07-23', '16:45', '2020-07-15 12:53:33', 1, 1, '', ''),
(14, 'Gynecologist', 4, 2, 700, '2020-07-25', '18:30', '2020-07-15 13:35:10', 1, 1, '', ''),
(15, 'dentist', 2, 1, 700, '2020-07-20', '11:30', '2020-07-16 13:17:11', 0, 1, '', ''),
(16, 'Gynecologist', 4, 1, 700, '2020-07-20', '11:30', '2020-07-16 13:33:10', 1, 1, '', ''),
(17, 'Gynecologist', 4, 1, 700, '2020-07-20', '11:30', '2020-07-16 13:34:41', 1, 1, '', ''),
(18, 'dentist', 1, 1, 500, '2020-07-19', '11:30', '2020-07-16 18:07:24', 1, 1, '', ''),
(19, 'dentist', 1, 1, 500, '2020-07-19', '11:30', '2020-07-16 18:10:37', 1, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `d_id` int(11) NOT NULL,
  `docName` varchar(255) NOT NULL,
  `specialist` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `docFees` varchar(255) NOT NULL,
  `contactno` bigint(13) NOT NULL,
  `docemail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `patientsid` varchar(30) NOT NULL,
  `creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`d_id`, `docName`, `specialist`, `city`, `address`, `docFees`, `contactno`, `docemail`, `password`, `patientsid`, `creationdate`, `updationdate`) VALUES
(1, 'dr Patel', 'dentist', 'Patan', 'main bazar', '500', 9836254089, 'rajendra@gmail.com', 'rutu123', '', '2020-05-26 17:23:19', ''),
(2, 'dr vani', 'dentist', 'Ahmedabad', 'main bazar', '700', 9836254089, 'vani@gmail.com', 'vani123', '', '2020-05-26 18:35:22', ''),
(3, 'dr ani', 'ENT', 'Patan', 'mina bazar,main road', '800', 8903647162, 'ani@gmail.com', 'ani123', '', '2020-05-30 16:16:57', ''),
(4, 'dr avni', 'Gynecologist', 'Patan', 'tb road,vyas market', '700', 9340172902, 'avni@gmail.com', 'avni123', '', '2020-05-31 13:42:06', ''),
(5, 'Dr Anuj', 'Opthalmologist', 'Patan', 'tb road', '800', 9028376519, 'anuj@gmail.com', 'anuj123', '', '2020-07-03 13:11:13', ''),
(6, 'Dr Dharmesh', 'Dermetologist', 'Patan', 'Old bus stop', '700', 8293087635, 'dharmesh@gmail.com', 'dharm123', '', '2020-07-03 13:13:26', ''),
(7, 'Dr Mahi', 'Pathologist', 'Patan', 'navjivan road', '500', 7293809380, 'mahi@gmail.com', 'mahi123', '', '2020-07-03 13:54:37', ''),
(8, 'Dr Manish', 'Radiologist', 'Patan', 'seven eleven complex', '800', 9380289379, 'manish@gmail.com', 'man123', '', '2020-07-03 13:57:24', ''),
(9, 'Dr Mayank', 'Physician', 'Patan', 'sadbhav complex,disa road', '500', 9482787387, 'mayank@gmail.com', 'mayank123', '', '2020-07-03 13:59:12', ''),
(10, 'Dr Chirag', 'General Surgeon', 'Patan', 'Chindiya road', '500', 8273902817, 'chirag@gmail.com', 'chir123', '', '2020-07-03 14:19:15', ''),
(11, 'dr hathi', 'dentist', 'Patan', 'teerupati complex', '400', 8945370378, 'hathi@gmail.com', 'hat123', '', '2020-07-08 15:45:58', '');

-- --------------------------------------------------------

--
-- Table structure for table `doc_specialization`
--

CREATE TABLE `doc_specialization` (
  `id` int(11) NOT NULL,
  `specialist` varchar(255) NOT NULL,
  `creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_specialization`
--

INSERT INTO `doc_specialization` (`id`, `specialist`, `creationdate`, `updationdate`) VALUES
(14, 'dentist', '2020-05-24 10:51:07', '03-07-2020 05:47:00 PM'),
(15, 'ENT', '2020-05-30 16:15:04', ''),
(16, 'Gynecologist', '2020-05-31 13:40:13', ''),
(17, 'Orthopedic', '2020-07-03 12:13:22', ''),
(18, 'General Surgeon', '2020-07-03 12:14:00', ''),
(19, 'Physician', '2020-07-03 12:14:12', ''),
(20, 'Radiologist', '2020-07-03 12:14:27', ''),
(21, 'Pathologist', '2020-07-03 12:14:46', ''),
(22, 'Dermetologist', '2020-07-03 12:15:14', ''),
(23, 'Opthalmologist', '2020-07-03 12:15:52', '');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `medicine` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `medicine`, `description`) VALUES
(1, 'abcc', 'widheff'),
(15, 'ehn', 'ks,lll');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contactno` varchar(25) NOT NULL,
  `address` longtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regisDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `fullName`, `gender`, `contactno`, `address`, `city`, `email`, `password`, `regisDate`, `updationDate`) VALUES
(1, 'zeel patel', 'female', '9836254089', 'new bazar', 'mehshana', 'zeel@gmail.com', 'zeel123', '2020-05-27 19:11:53', ''),
(2, 'geet patel', 'female', '9364782701', 'mina park', 'mehsana', 'geet@gmail.com', 'geet123', '2020-05-28 05:55:56', ''),
(3, 'rutu patel', 'male', '8273906470', 'gayatri mandir', 'ahmedabad', 'rutu@gmail.com', '9e3d2b3a26c4ad9b9496abb64726bb46', '2020-05-31 13:56:29', ''),
(4, 'anu patel', 'female', '9785234152', 'valinath chowk,tb road', 'patan', 'anu@gmail.com', 'anu123', '2020-06-03 09:23:55', ''),
(5, 'leena patel', 'female', '', '102,prathna residency', 'Patan', 'leena@gmail.com', 'f39c8f313f3449a39d36c761d028efc7', '2020-07-07 06:45:43', ''),
(6, 'rutvik patel', 'male', '', 'abcdef', 'Patan', 'rutvik@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '2020-07-16 13:10:39', '');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `preid` bigint(20) NOT NULL,
  `patid` int(11) NOT NULL,
  `patName` varchar(255) NOT NULL,
  `docName` varchar(255) NOT NULL,
  `medicine` text NOT NULL,
  `day` int(11) NOT NULL,
  `dose` int(11) NOT NULL,
  `details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`preid`, `patid`, `patName`, `docName`, `medicine`, `day`, `dose`, `details`) VALUES
(4, 4, 'anu patel', '', 'abcc', 5, 1, 'heufheuf'),
(11, 1, 'zeel patel', '', 'ehn', 3, 1, 'jenduhruf'),
(14, 0, 'geet patel', 'dr avni', 'abcc', 4, 1, 'fjndfrbf'),
(15, 1, 'zeel patel', 'dr vani', 'abcc', 2, 1, 'rrr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `doc_specialization`
--
ALTER TABLE `doc_specialization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`preid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `doc_specialization`
--
ALTER TABLE `doc_specialization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `preid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
