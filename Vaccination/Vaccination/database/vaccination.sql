-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2024 at 03:06 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vaccination`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `PLog_Id` text NOT NULL,
  `HLog_Id` text NOT NULL,
  `pname` varchar(100) NOT NULL,
  `doc_name` varchar(100) NOT NULL,
  `contactno` text NOT NULL,
  `diseases` text NOT NULL,
  `typ` text NOT NULL,
  `stat` varchar(100) NOT NULL,
  `dat` date NOT NULL,
  `btime` time NOT NULL,
  `cname` varchar(200) NOT NULL,
  `vname` varchar(200) NOT NULL,
  `tme` varchar(200) NOT NULL,
  `bdat` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `amt` double NOT NULL,
  `statvtk` varchar(200) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE IF NOT EXISTS `child` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `cname` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `aadharno` varchar(100) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `cntno` varchar(10) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `about` text NOT NULL,
  `PLog_Id` text NOT NULL,
  `location` varchar(200) NOT NULL,
  `dat` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `fdk_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(55) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `dat` date NOT NULL,
  `reply` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`fdk_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fdk_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(55) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `dat` date NOT NULL,
  `reply` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`fdk_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `special_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `contact1` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `licence` varchar(255) NOT NULL,
  `specialty` varchar(255) NOT NULL,
  `specialize` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `dat` date NOT NULL,
  PRIMARY KEY (`special_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `not_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(55) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `dat` date NOT NULL,
  `location` varchar(200) NOT NULL,
  PRIMARY KEY (`not_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `PLog_Id` text NOT NULL,
  `HLog_Id` text NOT NULL,
  `pname` varchar(100) NOT NULL,
  `doc_name` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `rating` int(11) NOT NULL,
  `review` text NOT NULL,
  `dat` date NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `cntno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `utype` varchar(50) NOT NULL,
  `age` varchar(10) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `addr` text NOT NULL,
  `HLog_Id` text NOT NULL,
  `stats` varchar(200) NOT NULL,
  `dat` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `Log_Id`, `name`, `cntno`, `email`, `location`, `username`, `password`, `utype`, `age`, `sex`, `addr`, `HLog_Id`, `stats`, `dat`) VALUES
(16, 'ADMINKL00002', 'Administrator', '90748 87087', 'nandhu@gmail.com', 'Palakkad', 'nandhu', 'nandhu', 'Admin', '', '', '', '', '', '2024-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `vaccination`
--

CREATE TABLE IF NOT EXISTS `vaccination` (
  `vacci_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `age` text NOT NULL,
  `sex` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `aadhar_No` text NOT NULL,
  `hospital_name` text NOT NULL,
  `contact_no` text NOT NULL,
  `vaccination_type` text NOT NULL,
  `vaccination_gp` text NOT NULL,
  `next_date` date NOT NULL,
  `date` date NOT NULL,
  `PLog_Id` text NOT NULL,
  `HLog_Id` text NOT NULL,
  `descp` text NOT NULL,
  PRIMARY KEY (`vacci_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE IF NOT EXISTS `vaccine` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `vname` varchar(200) NOT NULL,
  `vtype` varchar(200) NOT NULL,
  `vusage` varchar(200) NOT NULL,
  `schedule` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vaccinegroup`
--

CREATE TABLE IF NOT EXISTS `vaccinegroup` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `vname` varchar(200) NOT NULL,
  `vtype` varchar(200) NOT NULL,
  `vusage` varchar(200) NOT NULL,
  `schedule` varchar(200) NOT NULL,
  `vaccine` text NOT NULL,
  `date` date NOT NULL,
  `amt` double NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
