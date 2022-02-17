-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 16, 2022 at 10:39 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `election_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

DROP TABLE IF EXISTS `candidate`;
CREATE TABLE IF NOT EXISTS `candidate` (
  `Id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) DEFAULT NULL,
  `position` varchar(200) DEFAULT NULL,
  `details` varchar(200) DEFAULT NULL,
  `votecount` varchar(200) DEFAULT NULL,
  `candidate_image` varchar(5000) NOT NULL,
  `candidate_symbol` varchar(5000) NOT NULL,
  `regstime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`Id`, `fullname`, `position`, `details`, `votecount`, `candidate_image`, `candidate_symbol`, `regstime`) VALUES
(1, 'Ashwin', 'leader', '', '1', '../candidate_image/download (1).jpg', '../candidate_symbol/hhh.png', '2022-02-16 10:32:36'),
(2, 'Basil', 'leader', '', '', '../candidate_image/download.jpg', '../candidate_symbol/yyy.png', '2022-02-16 10:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `e_table`
--

DROP TABLE IF EXISTS `e_table`;
CREATE TABLE IF NOT EXISTS `e_table` (
  `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `emails` varchar(200) NOT NULL,
  `user` varchar(200) NOT NULL,
  `passwords` varchar(200) NOT NULL,
  `confirmpass` varchar(200) NOT NULL,
  `result` varchar(200) DEFAULT NULL,
  `regtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_table`
--

INSERT INTO `e_table` (`id`, `fname`, `emails`, `user`, `passwords`, `confirmpass`, `result`, `regtime`) VALUES
(1, 'Adarsh', 'adhiidukki42@gmail.com', 'adarsh_42', 'Adarsh#2002', 'Adarsh#2002', '0', '2022-02-16 10:26:11');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `userid` varchar(200) NOT NULL,
  `regno` varchar(200) NOT NULL,
  `phonenumber` varchar(200) NOT NULL,
  `reggtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `vote` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `position`, `userid`, `regno`, `phonenumber`, `reggtime`, `vote`) VALUES
(1, 'Rahul', '', 'Ele-160222-102715-36', '', '9495125184', '2022-02-16 10:27:34', NULL),
(2, 'Cibil', '', 'Ele-160222-102734-17', '', '9061862997', '2022-02-16 10:32:36', 'true'),
(3, 'Alan', '', 'Ele-160222-102748-10', '', '9876543210', '2022-02-16 10:28:00', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
