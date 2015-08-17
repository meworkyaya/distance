-- phpMyAdmin SQL Dump
-- version 4.0.10.8
-- http://www.phpmyadmin.net
--
-- Host: 192.168.14.116
-- Generation Time: Aug 17, 2015 at 05:56 PM
-- Server version: 5.6.21-log
-- PHP Version: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `distance`
--

-- --------------------------------------------------------

--
-- Table structure for table `ds_predmets`
--

CREATE TABLE IF NOT EXISTS `ds_predmets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `predmet` text COMMENT 'predmet name',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='list of predmets' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ds_programs`
--

CREATE TABLE IF NOT EXISTS `ds_programs` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `id_predmet` int(11) NOT NULL DEFAULT '0' COMMENT 'id of predmet - linked table predmets',
  `order` int(11) NOT NULL DEFAULT '0' COMMENT 'order at which theme display',
  `theme` text COMMENT 'theme of program item',
  `class` int(11) NOT NULL DEFAULT '0' COMMENT 'class of program',
  `program` text COMMENT 'program description',
  `hours` int(11) NOT NULL DEFAULT '0' COMMENT 'hours that theme is taken',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'when created',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'when modified',
  PRIMARY KEY (`id`),
  KEY `predmet` (`id_predmet`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='describe programs for classes' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
