 Server:localhost - Database: bharateshbca_alumina
 
-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 16, 2019 at 03:46 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `bharateshbca_alumina`
--

-- --------------------------------------------------------

--
-- Table structure for table `principal`
--

CREATE TABLE IF NOT EXISTS `principal` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `principal`
--

INSERT INTO `principal` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'a', '111');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` bigint(15) NOT NULL,
  `company` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `current_place` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `contact`, `company`, `designation`, `batch`, `current_place`, `password`, `photo`, `status`) VALUES
(48, 'Janaki Kangalgouda', 'janaki@gmail.com', 9999999994, 'bcca', 'designer', '2003-2004', 'belgaum', '123', 'manufacturer/_DSC0436.JPG', 'Yes'),
(49, 'ankita', 'ankita@gmail.com', 3698745210, 'hcl', 'developer', '2003-2004', 'belgaum', '123', 'manufacturer/pro2.png', 'Yes');

