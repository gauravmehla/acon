-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2014 at 06:52 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php_project_dremweaver`
--
CREATE DATABASE IF NOT EXISTS `php_project_dremweaver` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `php_project_dremweaver`;

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE IF NOT EXISTS `attendence` (
  `att_id` int(255) NOT NULL AUTO_INCREMENT,
  `att_class` varchar(255) NOT NULL,
  `att_date` varchar(255) NOT NULL,
  `att_present` varchar(255) NOT NULL,
  `att_absent` varchar(255) NOT NULL,
  PRIMARY KEY (`att_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`att_id`, `att_class`, `att_date`, `att_present`, `att_absent`) VALUES
(1, '4', '2014/07/18', '41,39', '40'),
(16, '4', '2014/07/20', '39,40,41', ''),
(17, '4', '2014/07/21', '40,41', '2,39'),
(18, '4', '2014/07/23', '39,40,41', ''),
(19, '4', '2014/07/24', '40,41', '39'),
(20, '4', '2014/07/25', '39,41', '40'),
(22, '9', '2014/07/20', '44,45', ''),
(23, '9', '2014/07/21', '45', '44'),
(24, '9', '2014/07/22', '44', '45'),
(26, '5', '2014/07/19', '42', ''),
(27, '5', '2014/07/20', '42', ''),
(28, '5', '2014/07/21', '42', ''),
(29, '5', '2014/07/22', '42', ''),
(33, '5', '2014/07/26', '46', '42');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(255) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) NOT NULL,
  `city_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `city_desc`) VALUES
(1, 'kurukshetra', 'kurukshetra'),
(2, 'karnal', 'karnal'),
(3, 'Kaithal', ''),
(4, 'Hisar', ''),
(5, 'Faridabad', ''),
(6, 'Bhiwani', ''),
(7, 'Gurgaon', ''),
(8, 'Sonipat', ''),
(9, 'Panipat', ''),
(10, 'Ambala', ''),
(11, 'Jind', ''),
(12, 'Sirsa', ''),
(13, 'Yamunanagar', ''),
(14, 'Mewat', ''),
(15, 'Rohtak', ''),
(16, 'Palwal', ''),
(17, 'Jhajjer', ''),
(18, 'Fatehabad', ''),
(19, 'Mahendergarh', ''),
(20, 'Panchkula', ''),
(21, 'Rewari', '');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) NOT NULL,
  `country_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `country_desc`) VALUES
(1, 'India', ''),
(2, 'USA', '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(255) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) NOT NULL,
  `course_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_desc`) VALUES
(1, 'BCA', ''),
(2, 'MCA', ''),
(3, 'BBA', ''),
(4, 'B. Tech', ''),
(5, 'M. Tech', ''),
(6, 'B. Sc', ''),
(7, 'M. Sc', ''),
(8, 'B.A', ''),
(9, 'M.A', '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `mem_id` int(255) NOT NULL AUTO_INCREMENT,
  `mem_id_1` varchar(255) NOT NULL,
  `mem_type` varchar(255) NOT NULL,
  `mem_name` varchar(255) NOT NULL,
  `mem_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`mem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `mem_id_1`, `mem_type`, `mem_name`, `mem_pass`) VALUES
(3, '2912044', 'student', 'Gaurav', 'gaurav'),
(4, '', 'admin', 'admin', 'admin'),
(6, '2511215', 'student', 'vijender', '7993'),
(7, '', 'admin', 'mehla', 'mehla'),
(8, '17', 'teacher', 'monty', 'sagwal'),
(9, '2912001', 'student', 'monty1', 'sagwal');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `msg_id` int(255) NOT NULL AUTO_INCREMENT,
  `msg_no` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `msg_st_id` varchar(255) NOT NULL,
  `msg_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `msg_no`, `date`, `time`, `msg_st_id`, `msg_desc`) VALUES
(16, 'war', '16-07-2014', '17:28:50', '40', 'hi..'),
(17, 'mes', '16-07-2014', '17:34:13', '40', 'what..?'),
(18, 'not', '16-07-2014', '17:38:39', '40', 'help'),
(20, 'war', '16-07-2014', '17:41:10', '41', 'Report Me immediately..!'),
(21, 'not', '16-07-2014', '17:43:15', '41', 'Last date of fee Submission is 10 July.! So Hurry up..?'),
(22, 'mes', '16-07-2014', '17:43:57', '39', 'Inform at Office.. Any time..!'),
(24, 'war', '16-07-2014', '20:05:49', '7', 'You cant Update your Profile Yet..!'),
(25, 'mes', '16-07-2014', '20:06:07', '7', 'okay..'),
(29, 'mes', '17-07-2014', '09:46:19', '41', 'hii..'),
(30, 'mes', '17-07-2014', '09:47:57', '41', 'hurr...'),
(33, 'mes', '17-07-2014', '18:34:15', '42', 'meet me immediatly.!  :- @admin'),
(34, 'not', '17-07-2014', '18:34:44', '42', '%random%.!'),
(35, 'war', '17-07-2014', '18:35:16', '42', 'hmm..!'),
(45, 'mes', '18-07-2014', '06:59:54', '39', 'Akon'),
(46, 'mes', '18-07-2014', '06:59:54', '40', 'Akon'),
(47, 'mes', '18-07-2014', '06:59:54', '41', 'Akon'),
(48, 'not', '18-07-2014', '20:58:52', '43', 'Please Submit Your Medical Certificate As soon As Possible..!'),
(49, 'not', '19-07-2014', '12:04:32', '44', 'How Are u..?'),
(50, 'war', '19-07-2014', '12:38:30', '43', 'meet me immediately..!'),
(51, 'not', '19-07-2014', '12:40:27', '39', 'test will be conducted tommorow..\r\nso be well prepared'),
(52, 'not', '19-07-2014', '12:40:27', '40', 'test will be conducted tommorow..\r\nso be well prepared'),
(53, 'not', '19-07-2014', '12:40:27', '41', 'test will be conducted tommorow..\r\nso be well prepared'),
(54, 'war', '19-07-2014', '14:11:04', '39', 'Hii..!'),
(56, 'war', '19-07-2014', '14:11:04', '41', 'Hii..!');

-- --------------------------------------------------------

--
-- Table structure for table `message_teacher`
--

CREATE TABLE IF NOT EXISTS `message_teacher` (
  `msg_id` int(255) NOT NULL AUTO_INCREMENT,
  `msg_no` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `msg_em_id` varchar(255) NOT NULL,
  `msg_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `message_teacher`
--

INSERT INTO `message_teacher` (`msg_id`, `msg_no`, `date`, `time`, `msg_em_id`, `msg_desc`) VALUES
(1, 'mes', '19-07-2014', '11:17:30', '14', 'hi..?'),
(3, 'mes', '19-07-2014', '11:27:14', '16', ':D'),
(4, 'not', '19-07-2014', '11:58:32', '16', 'hwz..u');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(255) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(255) NOT NULL,
  `state_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `state_desc`) VALUES
(1, 'haryana', ''),
(2, 'Punjab', ''),
(3, 'Andhra Pradesh	', ''),
(4, 'Arunachal Pradesh', ''),
(5, 'Assam', ''),
(6, 'Bihar', ''),
(7, 'Chandigarh', ''),
(8, 'Chhattisgarh', ''),
(9, 'Goa', ''),
(10, 'Gujarat', ''),
(11, 'Himachal Pradesh', ''),
(12, 'Jammu and Kashmir', ''),
(13, 'Jharkhand', ''),
(14, 'Karnataka', ''),
(15, 'Kerala', ''),
(16, 'Madhya Pradesh', ''),
(17, 'Maharashtra', ''),
(18, 'Manipur', ''),
(19, 'Meghalaya', ''),
(20, 'Mizoram', ''),
(21, 'Nagaland', ''),
(22, 'Odisha', ''),
(23, 'Puducherry', ''),
(24, 'Rajasthan', ''),
(25, 'Tamil Nadu', ''),
(26, 'Sikkim', ''),
(27, 'Uttar Pradesh', ''),
(28, 'Uttarakhand', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `st_id` int(100) NOT NULL AUTO_INCREMENT,
  `st_name` varchar(100) NOT NULL,
  `st__father` varchar(100) NOT NULL,
  `st_rollno` varchar(255) NOT NULL,
  `st_mail` varchar(255) NOT NULL,
  `st_add1` varchar(100) NOT NULL,
  `st_add2` varchar(100) NOT NULL,
  `st_city` varchar(100) NOT NULL,
  `st_state` varchar(100) NOT NULL,
  `st_country` varchar(100) NOT NULL,
  `st_nat` varchar(100) NOT NULL,
  `st_gender` varchar(100) NOT NULL,
  `st_qul` varchar(100) NOT NULL,
  `st_course` varchar(100) NOT NULL,
  `st_photo` varchar(255) NOT NULL,
  `st_mobile` varchar(100) NOT NULL,
  `st_hobbies` varchar(100) NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `st_name`, `st__father`, `st_rollno`, `st_mail`, `st_add1`, `st_add2`, `st_city`, `st_state`, `st_country`, `st_nat`, `st_gender`, `st_qul`, `st_course`, `st_photo`, `st_mobile`, `st_hobbies`) VALUES
(35, 'Amit', 'Sumit', '', '0', ' Dummy\r\n ', 'Dummy', '2', '3', '2', 'Dummy', 'Male', '1', '2', 'Assassins-Creed-5-Years-v.2-Wallpaper.jpg', 'Dummy', 'Dummy'),
(36, 'sans-sarif', 'sans-sarif', '', '0', '  sans-sarifsans-sarif', 'sans-sarif', '2', '18', '1', 'sans-sarif', 'Female', '1', '1', 'asd', 'sans-sarif', 'sans-sarifsans-sarif'),
(39, 'gaurav chaudhary', 'Shriram Mehla', '132456', 'abc@xyz.com', '     House No. 2676/12 , Gali No. 1 , Shanti Nagar  , Kurukshetra   ', '  House No. 2676/12 , Gali No. 1 , Shanti Nagar  , Kurukshetra', '1', '1', '1', 'Indian', 'Male', '4', '4', 'Assassins-Creed-5-Years-v.2-Wallpaper.jpg', '918950376636', 'Action Movies'),
(40, 'Vijender Sharma', 'Rajinder Sharma', '2511215', 'vijenderattray@gmail.com', '    Shanti Nagar , Thanesar  ', 'Shanti Nagar , Thanesar', '1', '1', '1', 'Indian', 'Male', '4', '4', 'Picture 239.jpg', '8529303984', 'Reality Shows'),
(41, 'Teji', 'asd', '', '0', 'asd  ', 'asd', '7', '16', '1', 'sardar', 'Female', '6,4,8,3,1,7,5,9,2', '4', 'dabangg-2-21.jpg', '1235467890', 'nothing'),
(42, 'gaurav mehla', 'Shriram mehla', '2912044', 'Gaurav.ror007@gmail.com', '    shanti nagar , kurukshetra  ', '  shanti nagar , kurukshetra', '1', '1', '1', 'Indian', 'Male', '4', '5', 'Picture 238.jpg', '8950376636', 'Nothing'),
(43, 'Kunal Vohra', 'Dr. Anil Vohra', '2912048', 'kunalvohra@gmail.com', '  Kurukshetra University', '  Kurukshetra University', '1', '1', '1', 'Indian', 'Male', '6', '7', 'Assassins-Creed-5-Years-v.2-Wallpaper.jpg', '9991110716', 'Android , Linux kernal'),
(44, 'Monty', 'Sukhbir Singh', '2912001', 'montysagwal@gamil.com', '  kaul , Kaithal', '  kaul , Kaithal', '1', '1', '1', 'Indian', 'Male', '8', '9', 'Assassins-Creed-5-Years-v.2-Wallpaper.jpg', '9996966065', 'Running'),
(45, 'Mandeep', 'Ram Gopal', '205972', 'mandeep@defaulter.com', 'sector 9 ,  karnal', 'sector 9 ,  karnal', '2', '1', '1', 'Indian', 'Male', '8', '9', 'Assassins-Creed-5-Years-v.2-Wallpaper.jpg', '9416691472', 'bakwass..'),
(46, 'Yashankit Mehla', 'Shri Mehla', '2912027', 'yashankitmehla@gmail.com', 'Mirzapur , kurukshetra  ', 'Mirzapur , kurukshetra', '1', '1', '1', 'Indian', 'Male', '4', '5', '', '1234567890', 'Cricket');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `em_id` int(255) NOT NULL AUTO_INCREMENT,
  `em_fname` varchar(255) NOT NULL,
  `em_lname` varchar(255) NOT NULL,
  `em_gender` varchar(255) NOT NULL,
  `em_dob` varchar(255) NOT NULL,
  `em_mobile` varchar(255) NOT NULL,
  `em_add` varchar(255) NOT NULL,
  `em_mail` varchar(255) NOT NULL,
  `em_state` varchar(255) NOT NULL,
  `em_qul` varchar(255) NOT NULL,
  `em_uni` varchar(255) NOT NULL,
  `em_ex` varchar(255) NOT NULL,
  `em_pre` varchar(255) NOT NULL,
  PRIMARY KEY (`em_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`em_id`, `em_fname`, `em_lname`, `em_gender`, `em_dob`, `em_mobile`, `em_add`, `em_mail`, `em_state`, `em_qul`, `em_uni`, `em_ex`, `em_pre`) VALUES
(2, 'gaurav', 'asd', 'Male', 'asd', '918950376636', 'as', 'gaurav.ror007@gmail.com', '1', '4,1', 'asd', 'asd', 'darkClaw'),
(14, 'Tajender', 'Abc', 'Female', '2014/07/18', 'iam', 'iam', 'iam', '1', '4,3', 'iam', 'iam', 'iam'),
(16, 'Gaurav', 'chaudhary', 'Male', '2014/07/01', '918950376636', 'Kurukshtera 136118', 'gaurav.ror007@gmail.com', '1', '4', 'Kurukshetra Institute of Engineering and management', '0', 'darkClaw'),
(17, 'Monty', 'Sagwal', 'Male', '2014/07/20', '9996966065', '  kaul , Kaithal', 'montysagwal@gmail.com', '1', '8', 'KUK', '3', 'JMIT');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
