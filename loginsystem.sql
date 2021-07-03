-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 11:32 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookapp`
--

CREATE TABLE `bookapp` (
  `AppoID` int(11) NOT NULL,
  `appdate` datetime NOT NULL,
  `username` varchar(255) NOT NULL,
  `docname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookapp`
--

INSERT INTO `bookapp` (`AppoID`, `appdate`, `username`, `docname`) VALUES
(4, '2020-11-11 11:11:00', 'binod', 'Dr Boby'),
(5, '2021-01-26 11:11:00', 'domi', 'Dr Yashika'),
(6, '2020-02-22 14:22:00', 'champak', 'Dr Hash'),
(7, '2021-03-31 15:33:00', 'brijesh', 'Dr Rahul'),
(8, '2020-04-11 10:13:00', 'pranab', 'Dr Yashika'),
(9, '2021-05-10 11:38:00', 'pranab', 'Dr Rony'),
(11, '2020-04-28 10:00:00', 'domi', 'Dr Sakshi'),
(12, '2020-06-11 14:30:00', 'domi', 'Dr Rahul'),
(13, '2021-01-25 10:30:00', 'domi', 'Dr Pretty'),
(14, '2020-10-12 04:00:00', 'domi', 'Dr Boby'),
(16, '2021-03-13 16:00:00', 'abhimanyu', 'Dr Rahul'),
(17, '2020-11-13 15:00:00', 'abhimanyu', 'Dr Rony'),
(18, '2020-02-10 11:00:00', 'abhimanyu', 'Dr Yashika'),
(19, '2020-01-10 10:30:00', 'abhimanyu', 'Dr Krisha'),
(20, '2020-03-25 11:00:00', 'abhimanyu', 'Dr Krishti'),
(21, '2020-10-12 10:30:00', 'bhavna', 'Dr Sakshi'),
(22, '2020-01-09 11:00:00', 'bhavna', 'Dr Pretty'),
(23, '2020-10-26 11:00:00', 'bhavna', 'Dr Yashika'),
(24, '2020-08-04 09:30:00', 'dhriti', 'Dr Sakshi'),
(25, '2020-03-09 11:00:00', 'dhriti', 'Dr Pretty'),
(26, '2020-05-28 16:00:00', 'dhriti', 'Dr Hash'),
(27, '2020-02-20 09:30:00', 'binod', 'Dr Krisha'),
(28, '2021-04-01 15:00:00', 'binod', 'Dr Hash'),
(29, '2020-12-10 17:00:00', 'brijesh', 'Dr Rony'),
(30, '2020-01-10 17:00:00', 'brijesh', 'Dr Ali'),
(31, '2020-10-02 17:00:00', 'darika', 'Dr Sakshi'),
(32, '2020-03-17 15:00:00', 'darika', 'Dr Krisha'),
(33, '2020-02-10 11:00:00', 'darika', 'Dr Ali'),
(34, '2020-02-13 10:00:00', 'jeevika', 'Dr Sakshi'),
(35, '2020-08-10 15:00:00', 'champak', 'Dr Rony'),
(36, '2020-03-15 14:30:00', 'champak', 'Dr Yashika'),
(37, '2020-08-06 18:00:00', 'jeevika', 'Dr Pretty'),
(38, '2020-06-04 15:00:00', 'jeevika', 'Dr Boby'),
(39, '2021-01-05 10:30:00', 'bhavna', 'Dr Hash'),
(40, '2021-03-10 15:00:00', 'pranab', 'Dr Krisha'),
(41, '2021-04-11 14:00:00', 'pranab', 'Dr Ali'),
(42, '2021-02-18 22:30:00', 'binod', 'Dr Rony'),
(43, '2021-04-20 12:00:00', 'brijesh', 'Dr Boby'),
(44, '2021-02-18 16:00:00', 'champak', 'Dr Krisha'),
(45, '2021-04-25 14:30:00', 'dhriti', 'Dr Boby'),
(46, '2021-03-15 10:00:00', 'jeevika', 'Dr Yashika'),
(48, '2021-01-15 13:00:00', 'jeevika', 'Dr Krishti'),
(49, '2021-05-01 18:00:00', 'darika', 'Dr Pretty'),
(50, '2021-02-10 16:00:00', 'darika', 'Dr Hash'),
(51, '2021-05-03 10:00:00', 'dhriti', 'Dr Ali'),
(52, '2021-02-05 10:00:00', 'champak', 'Dr Ali'),
(53, '2021-03-20 14:00:00', 'bhavna', 'Dr Krishti'),
(54, '2021-04-22 16:00:00', 'brijesh', 'Dr Krishti'),
(56, '2021-01-09 16:00:00', 'binod', 'Dr Rahul'),
(57, '2020-06-03 19:06:00', 'pranab', 'Dr Rahul'),
(58, '2021-01-04 11:00:00', 'pranab', 'Dr Sakshi'),
(62, '2020-10-12 16:00:00', 'domi', 'Dr Krishti');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `docname` varchar(255) NOT NULL,
  `docaddress` varchar(255) NOT NULL,
  `docnumber` text NOT NULL,
  `docemail` varchar(255) NOT NULL,
  `docpassword` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `docname`, `docaddress`, `docnumber`, `docemail`, `docpassword`, `type`) VALUES
(7, 'Dr Joshi', 'Delhi', '9599339591', 'drjosh@example.com', 'Drjosh', 'ENT Specalist'),
(14, 'Dr Sakshi', 'Jorhat', '8484202801', 'drsakshi@example.com', 'Drsakshi', 'Gynecologist'),
(15, 'Dr Ali', 'Dibrugarh', '9544535459', 'drali@example.com', 'Drali', 'ENT Specalist'),
(16, 'Dr Boby', 'Digboi', '7979759010', 'drboby@example.com', 'Drboby', 'ENT Specalist'),
(17, 'Dr Hash', 'North Lakhimpur', '9898220411', 'drhash@example.com', 'Drhash', 'Surgeon'),
(18, 'Dr Krisha', 'Nagaon', '6000655611', 'drkrisha@example.com', 'Drkrisha', 'Eye Specialist'),
(19, 'Dr Krishti', 'Guwahati', '6044535563', 'drkrishti@example.com', 'Drkrishti', 'Surgeon'),
(20, 'Dr Pretty', 'Kolkata', '6079509601', 'drpretty@example.com', 'Drpretty', 'Gynecologist'),
(21, 'Dr Rahul', 'Chennai', '7007660331', 'drrahul@example.com', 'Drrahul', 'Eye Specialist'),
(22, 'Dr Rony', 'Mumbai', '9996703411', 'drrony@example.com', 'Drrony', 'Dentist'),
(23, 'Dr Yashika', 'Shillong', '8896054121', 'dryashika@example.com', 'Dryashika', 'Dentist'),
(27, 'Dr Kumar', 'Beltola', '9887799701', 'drkumar@example.com', 'drkumar', 'Neuro Specialist'),
(29, 'Dr Bora', 'Jorhat', '9870880810', 'drbora@example.com', 'drbora', 'General');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_type`
--

CREATE TABLE `doctor_type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_type`
--

INSERT INTO `doctor_type` (`id`, `type`, `doctor_name`) VALUES
(1, 'Gynecologist', 'Dr Sakshi'),
(2, 'Eye Specialist', 'Dr Rahul'),
(3, 'Dentist', 'Dr Rony'),
(4, 'ENT Specalist', 'Dr Boby'),
(5, 'Eye Specialist', 'Dr Rahul'),
(6, 'Dentist', 'Dr Rony'),
(7, 'Dentist', 'Dr Yashika'),
(8, 'ENT Specalist', 'Dr Ali'),
(9, 'Surgeon', 'Dr Krishti'),
(10, 'Eye Specialist', 'Dr Krisha'),
(11, 'Gynecologist', 'Dr Sakshi'),
(12, 'Gynecologist', 'Dr Pretty'),
(13, 'Dentist', 'Dr Yashika'),
(14, 'Surgeon', 'Dr Hash'),
(15, 'Surgeon', 'Dr Krishti'),
(16, 'Gynecologist', 'Dr Sakshi'),
(17, 'Gynecologist', 'Dr Pretty'),
(18, 'Surgeon', 'Dr Hash'),
(19, 'ENT Specalist', 'Dr Ali'),
(20, 'ENT Specalist', 'Dr Boby'),
(21, 'Gynecologist', 'Dr Sakshi'),
(22, 'Gynecologist', 'Dr Pretty'),
(23, 'Surgeon', 'Dr Hash'),
(24, 'ENT Specalist', 'Dr Ali'),
(25, 'Eye Specialist', 'Dr Krisha'),
(26, 'Gynecologist', 'Dr Sakshi'),
(27, 'Gynecologist', 'Dr Pretty'),
(28, 'Dentist', 'Dr Yashika'),
(29, 'Surgeon', 'Dr Krishti'),
(30, 'ENT Specalist', 'Dr Boby'),
(31, 'Eye Specialist', 'Dr Rahul'),
(32, 'Dentist', 'Dr Rony'),
(33, 'Dentist', 'Dr Yashika'),
(34, 'Eye Specialist', 'Dr Krisha'),
(35, 'Surgeon', 'Dr Krishti'),
(36, 'Eye Specialist', 'Dr Rahul'),
(37, 'Dentist', 'Dr Rony'),
(38, 'ENT Specalist', 'Dr Ali'),
(39, 'Eye Specialist', 'Dr Rahul'),
(40, 'Dentist', 'Dr Rony'),
(41, 'Surgeon', 'Dr Hash'),
(42, 'ENT Specalist', 'Dr Boby'),
(43, 'Eye Specialist', 'Dr Krisha'),
(44, 'Dentist', 'Dr Rony'),
(45, 'Dentist', 'Dr Yashika'),
(46, 'Surgeon', 'Dr Hash'),
(47, 'ENT Specalist', 'Dr Ali'),
(48, 'Eye Specialist', 'Dr Krisha'),
(49, 'ENT Specalist', 'Dr Boby'),
(50, 'Surgeon', 'Dr Krishti'),
(51, 'Dentist', 'Dr x'),
(52, 'ENT Specalist', 'Dr Joshi'),
(53, 'ENT Specalist', 'Dr Boby'),
(54, 'ENT Specalist', 'Dr Boby'),
(55, 'ENT Specalist', 'Dr Boby'),
(56, 'ENT Specalist', 'Dr Boby'),
(57, 'ENT Specalist', 'Dr Boby'),
(58, 'Eye Specialist', 'Dr Rahul'),
(59, 'Gynecologist', 'Dr Pretty'),
(60, 'Dentist', 'Dr Yashika'),
(61, 'Neuro Specialist', 'Dr Kumar'),
(62, 'ENT Specalist', 'Dr Joshi'),
(63, 'Gynecologist', 'Dr Sakshi'),
(64, 'Surgeon', 'Dr Hash'),
(65, 'Surgeon', 'Dr Krishti'),
(66, 'Gynecologist', 'Dr Pretty'),
(67, 'Dentist', 'Dr Yashika'),
(68, 'General', 'Dr Bora'),
(69, 'Gynecologist', 'Dr Sakshi'),
(70, 'ENT Specalist', 'Dr Ali'),
(71, 'ENT Specalist', 'Dr Boby'),
(72, 'Surgeon', 'Dr Hash'),
(73, 'Gynecologist', 'Dr Pretty'),
(74, 'Neuro Specialist', 'Dr Kumar'),
(75, 'ENT Specalist', 'Dr Joshi'),
(76, 'ENT Specalist', 'Dr Ali'),
(77, 'Eye Specialist', 'Dr Krisha'),
(78, 'Eye Specialist', 'Dr Rahul'),
(79, 'Dentist', 'Dr Rony'),
(80, 'Dentist', 'Dr Yashika'),
(81, 'General', 'Dr Bora'),
(82, 'ENT Specalist', 'Dr Ali'),
(83, 'Surgeon', 'Dr Hash'),
(84, 'Eye Specialist', 'Dr Krisha'),
(85, 'Gynecologist', 'Dr Pretty'),
(86, 'Dentist', 'Dr Yashika'),
(87, 'Neuro Specialist', 'Dr Kumar'),
(88, 'Gynecologist', 'Dr Sakshi'),
(89, 'ENT Specalist', 'Dr Boby'),
(90, 'Surgeon', 'Dr Krishti'),
(91, 'Gynecologist', 'Dr Pretty'),
(92, 'Dentist', 'Dr Yashika'),
(93, 'General', 'Dr Bora'),
(94, 'ENT Specalist', 'Dr Joshi'),
(95, 'ENT Specalist', 'Dr Boby'),
(96, 'Surgeon', 'Dr Hash'),
(97, 'Eye Specialist', 'Dr Krisha'),
(98, 'Eye Specialist', 'Dr Rahul'),
(99, 'Dentist', 'Dr Rony'),
(100, 'Neuro Specialist', 'Dr Kumar'),
(101, 'Eye Specialist', 'Dr Krisha'),
(102, 'Surgeon', 'Dr Krishti'),
(103, 'Eye Specialist', 'Dr Rahul'),
(104, 'Dentist', 'Dr Rony'),
(105, 'Dentist', 'Dr Yashika'),
(106, 'General', 'Dr Bora'),
(107, 'ENT Specalist', 'Dr Ali'),
(108, 'ENT Specalist', 'Dr Boby'),
(109, 'Surgeon', 'Dr Krishti'),
(110, 'Eye Specialist', 'Dr Rahul'),
(111, 'Dentist', 'Dr Rony'),
(112, 'Neuro Specialist', 'Dr Kumar'),
(113, 'ENT Specalist', 'Dr Boby'),
(114, 'Surgeon', 'Dr Hash'),
(115, 'Eye Specialist', 'Dr Krisha'),
(116, 'Dentist', 'Dr Rony'),
(117, 'Dentist', 'Dr Yashika'),
(118, 'General', 'Dr Bora');

-- --------------------------------------------------------

--
-- Table structure for table `userdoctor`
--

CREATE TABLE `userdoctor` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doctor_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `bloodgroup` varchar(50) NOT NULL,
  `contactnumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `address`, `bloodgroup`, `contactnumber`) VALUES
(1, 'domi', 'user55@example.com', 'domi', 'house no55', 'b+', '9569965642'),
(2, 'bhavna', 'user22@example.com', 'bhavna', 'house no22', 'o', '7005602311'),
(3, 'dhriti', 'user52@example.com', 'dhriti', 'house no-52', 'b', '9995691147'),
(4, 'pranab', 'user31@example.com', 'pranab', 'house no- 31', 'b', '7002321851'),
(5, 'darika', 'user50@example.com', 'darika', 'house no-50', 'b', '7000501001'),
(6, 'jeevika', 'user21@example.com', 'jeevika', 'house no-21', 'b', '8656561109'),
(7, 'binod', 'user56@example.com', 'binod', 'house no-56', 'a+', '8008877609'),
(8, 'abhimanyu', 'user57@example.com', 'abhimanyu', 'house no-57', 'o+', '7007560167'),
(9, 'brijesh', 'user58@example.com', 'brijesh', 'house no-58', 'b+', '6008778450'),
(10, 'champak', 'user59@example.com', 'champak', 'hosue no-59', 'a+', '9876983456');

-- --------------------------------------------------------

--
-- Table structure for table `usersdoctor`
--

CREATE TABLE `usersdoctor` (
  `id` int(11) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `doctor_rating` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersdoctor`
--

INSERT INTO `usersdoctor` (`id`, `doctor_name`, `pid`, `username`, `type`, `doctor_rating`) VALUES
(1, 'Dr Joshi', 1, 'domi', 'ENT Specialist', '5'),
(5, 'Dr Boby', 1, 'domi', 'ENT Specalist', '4'),
(6, 'Dr Krishti', 1, 'domi', 'Surgeon', '4'),
(7, 'Dr Rahul', 1, 'domi', 'Eye Specialist', '4'),
(8, 'Dr Pretty', 1, 'domi', 'Gynecologist', '4'),
(9, 'Dr Yashika', 1, 'domi', 'Dentist', '4'),
(10, 'Dr Kumar', 1, 'domi', 'Neuro Specialist', '3'),
(11, 'Dr Joshi', 2, 'bhavna', 'ENT Specalist', '4'),
(12, 'Dr Sakshi', 2, 'bhavna', 'Gynecologist', '5'),
(13, 'Dr Hash', 2, 'bhavna', 'Surgeon', '3'),
(14, 'Dr Krishti', 2, 'bhavna', 'Surgeon', '4'),
(15, 'Dr Pretty', 2, 'bhavna', 'Gynecologist', '3'),
(16, 'Dr Yashika', 2, 'bhavna', 'Dentist', '3'),
(17, 'Dr Bora', 2, 'bhavna', 'General', '4'),
(18, 'Dr Sakshi', 3, 'dhriti', 'Gynecologist', '5'),
(19, 'Dr Ali', 3, 'dhriti', 'ENT Specalist', '4'),
(20, 'Dr Boby', 3, 'dhriti', 'ENT Specalist', '4'),
(21, 'Dr Hash', 3, 'dhriti', 'Surgeon', '3'),
(22, 'Dr Pretty', 3, 'dhriti', 'Gynecologist', '3'),
(23, 'Dr Kumar', 3, 'dhriti', 'Neuro Specialist', '3'),
(24, 'Dr Joshi', 4, 'pranab', 'ENT Specalist', '5'),
(25, 'Dr Ali', 4, 'pranab', 'ENT Specalist', '4'),
(26, 'Dr Krisha', 4, 'pranab', 'Eye Specialist', '4'),
(27, 'Dr Rahul', 4, 'pranab', 'Eye Specialist', '3'),
(28, 'Dr Rony', 4, 'pranab', 'Dentist', '3'),
(29, 'Dr Yashika', 4, 'pranab', 'Dentist', '4'),
(30, 'Dr Bora', 4, 'pranab', 'General', '4'),
(31, 'Dr Ali', 5, 'darika', 'ENT Specalist', '5'),
(32, 'Dr Hash', 5, 'darika', 'Surgeon', '5'),
(33, 'Dr Krisha', 5, 'darika', 'Eye Specialist', '5'),
(34, 'Dr Pretty', 5, 'darika', 'Gynecologist', '5'),
(35, 'Dr Yashika', 5, 'darika', 'Dentist', '3'),
(36, 'Dr Kumar', 5, 'darika', 'Neuro Specialist', '3'),
(37, 'Dr Sakshi', 6, 'jeevika', 'Gynecologist', '5'),
(38, 'Dr Boby', 6, 'jeevika', 'ENT Specalist', '4'),
(39, 'Dr Krishti', 6, 'jeevika', 'Surgeon', '5'),
(40, 'Dr Pretty', 6, 'jeevika', 'Gynecologist', '3'),
(41, 'Dr Yashika', 6, 'jeevika', 'Dentist', '5'),
(42, 'Dr Bora', 6, 'jeevika', 'General', '4'),
(43, 'Dr Joshi', 7, 'binod', 'ENT Specalist', '5'),
(44, 'Dr Boby', 7, 'binod', 'ENT Specalist', '4'),
(45, 'Dr Hash', 7, 'binod', 'Surgeon', '4'),
(46, 'Dr Krisha', 7, 'binod', 'Eye Specialist', '3'),
(47, 'Dr Rahul', 7, 'binod', 'Eye Specialist', '5'),
(48, 'Dr Rony', 7, 'binod', 'Dentist', '3'),
(49, 'Dr Kumar', 7, 'binod', 'Neuro Specialist', '5'),
(50, 'Dr Krisha', 8, 'abhimanyu', 'Eye Specialist', '3'),
(51, 'Dr Krishti', 8, 'abhimanyu', 'Surgeon', '3'),
(52, 'Dr Rahul', 8, 'abhimanyu', 'Eye Specialist', '3'),
(53, 'Dr Rony', 8, 'abhimanyu', 'Dentist', '5'),
(54, 'Dr Yashika', 8, 'abhimanyu', 'Dentist', '4'),
(55, 'Dr Bora', 8, 'abhimanyu', 'General', '3'),
(56, 'Dr Ali', 9, 'brijesh', 'ENT Specalist', '5'),
(57, 'Dr Boby', 9, 'brijesh', 'ENT Specalist', '4'),
(58, 'Dr Krishti', 9, 'brijesh', 'Surgeon', '3'),
(59, 'Dr Rahul', 9, 'brijesh', 'Eye Specialist', '3'),
(60, 'Dr Rony', 9, 'brijesh', 'Dentist', '3'),
(61, 'Dr Kumar', 9, 'brijesh', 'Neuro Specialist', '4'),
(62, 'Dr Boby', 10, 'champak', 'ENT Specalist', '5'),
(63, 'Dr Hash', 10, 'champak', 'Surgeon', '4'),
(64, 'Dr Krisha', 10, 'champak', 'Eye Specialist', '5'),
(65, 'Dr Rony', 10, 'champak', 'Dentist', '4'),
(66, 'Dr Yashika', 10, 'champak', 'Dentist', '4'),
(67, 'Dr Bora', 10, 'champak', 'General', '3');

-- --------------------------------------------------------

--
-- Table structure for table `user_disease`
--

CREATE TABLE `user_disease` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `disease_name` varchar(255) DEFAULT NULL,
  `symtomps` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_disease`
--

INSERT INTO `user_disease` (`id`, `username`, `disease_name`, `symtomps`) VALUES
(6, 'binod', 'cold', 'running nose'),
(8, 'abhimanyu', 'illness', 'high temp'),
(9, 'abhimanyu', 'headache', 'head pain'),
(10, 'abhimanyu', 'body pain', 'joint pain'),
(11, 'brijesh', 'body pain', 'back pain'),
(12, 'champak', 'toothache', 'tooth decay'),
(13, 'bhavna', 'itching in eyes', 'dry eyes'),
(14, 'pranab', 'cough', 'high temp'),
(15, 'pranab', 'cough', 'high temp'),
(16, 'pranab', 'cough', 'high temp'),
(17, 'pranab', 'cough', 'high temp'),
(18, 'pranab', 'cough', 'high temp'),
(19, 'domi', 'disease', 'dry eyes');

-- --------------------------------------------------------

--
-- Table structure for table `user_doctor`
--
-- Error reading structure for table loginsystem.user_doctor: #1932 - Table 'loginsystem.user_doctor' doesn't exist in engine
-- Error reading data for table loginsystem.user_doctor: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `loginsystem`.`user_doctor`' at line 1

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookapp`
--
ALTER TABLE `bookapp`
  ADD PRIMARY KEY (`AppoID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_type`
--
ALTER TABLE `doctor_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersdoctor`
--
ALTER TABLE `usersdoctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_disease`
--
ALTER TABLE `user_disease`
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
-- AUTO_INCREMENT for table `bookapp`
--
ALTER TABLE `bookapp`
  MODIFY `AppoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `doctor_type`
--
ALTER TABLE `doctor_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usersdoctor`
--
ALTER TABLE `usersdoctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user_disease`
--
ALTER TABLE `user_disease`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
