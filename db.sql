-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2016 at 04:46 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fossmeet16`
--

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

CREATE TABLE IF NOT EXISTS `final` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `PHONE_NUMBER` varchar(10) NOT NULL,
  `E_MAIL` varchar(100) NOT NULL,
  `BUYER_NAME` varchar(100) NOT NULL,
  `AMOUNT_PAID` int(11) NOT NULL,
  `FOOD_PREFS` varchar(100) NOT NULL,
  `T_SHIRTS` char(1) NOT NULL,
  `ORG_NAME` varchar(500) NOT NULL,
  `TSHIRT_SPEC` varchar(10) NOT NULL,
  `STAY` varchar(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1123 ;

--
-- Dumping data for table `final`
--


-- --------------------------------------------------------

--
-- Table structure for table `instamojo_responses`
--

CREATE TABLE IF NOT EXISTS `instamojo_responses` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `ID` varchar(32) NOT NULL,
  `PHONE_NUMBER` varchar(10) NOT NULL,
  `E_MAIL` varchar(100) NOT NULL,
  `BUYER_NAME` varchar(100) NOT NULL,
  `AMOUNT_PAID` int(11) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `STATUS` varchar(100) NOT NULL,
  `SHORT_URL` varchar(100) NOT NULL,
  `LONG_URL` varchar(500) NOT NULL,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `FOOD_PREFS` varchar(100) NOT NULL,
  `T_SHIRTS` char(1) NOT NULL,
  `ORG_NAME` varchar(500) NOT NULL,
  `TSHIRT_SPEC` varchar(10) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Table structure for table `ws_prefs`
--

CREATE TABLE IF NOT EXISTS `ws_prefs` (
  `MOJO_ID` varchar(20) NOT NULL,
  `PREFS` varchar(100) NOT NULL,
  PRIMARY KEY (`MOJO_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
