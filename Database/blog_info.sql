-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 07, 2021 at 01:30 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qed42_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_info`
--

DROP TABLE IF EXISTS `blog_info`;
CREATE TABLE IF NOT EXISTS `blog_info` (
  `blogid` int(11) NOT NULL AUTO_INCREMENT,
  `userid1` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description1` text NOT NULL,
  `date1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`blogid`),
  KEY `userid1` (`userid1`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_info`
--

INSERT INTO `blog_info` (`blogid`, `userid1`, `title`, `description1`, `date1`) VALUES
(2, 15, 'FirstBlog', ' Hello ', '2021-08-06 18:50:00'),
(4, 15, 'Third ', ' Third blog welcome back', '2021-08-06 18:51:57'),
(5, 15, 'Fourth Blog', ' This blog should be displayed on admin page ', '2021-08-06 19:05:06'),
(10, 16, 'nigth blog', ' testing', '2021-08-07 08:03:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
