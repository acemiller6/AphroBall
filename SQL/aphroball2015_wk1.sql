-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2015 at 10:02 PM
-- Server version: 5.5.44-37.3
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `milnuts_aphroball2015`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `firstname` varchar(25) DEFAULT NULL,
  `lastname` varchar(25) DEFAULT NULL,
  `userid` varchar(30) DEFAULT NULL,
  `passwd` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `showemail` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`firstname`, `lastname`, `userid`, `passwd`, `email`, `showemail`) VALUES
('Ryan', 'Miller', 'milnuts', '*D01B9B0923EA75543A3C312DC777965B48C928D2', 'acemiller6@gmail.com', 1),
('Guest', 'Guest', 'guest', '*11DB58B0DD02E290377535868405F11E4CBEFF58', '', 0),
('Drew', 'Vesterby', 'drewbie', '*808D39C3D8809CE209D183C7FF54B55F5F8C16BC', 'drewbie00@yahoo.com', 0),
('Trevor', 'Briggs', 'tbriggs', '*E6F31CD5C42538659CD2DB463CC53712F6A52E82', 'tbriggs27@gmail.com', 0),
('Chris', 'Williams', 'turdferguson', '*FC5B7B1FF0F6819F619F99D37530C5F27C0249A3', 'fiveiron@gmail.com', 0),
('Doug', 'Boecker', 'SloppyWaffles', '*FB3A00DFA666949EE023B96182B59412102F0BBD', 'dmmbmail@gmail.com', 0),
('Kevin', 'Roberts', 'TheHouse', '*4FD0F00467C5B74765C8D08D0DA7F4855DE5200A', 'kevinbrettfavre4@yahoo.com', 0),
('Hyun', 'Lee', 'megatron', '*98211209CEA4B16D171A7B13670DFDF89439016B', 'sweetmd23@hotmail.com', 0),
('Vince', 'Bartolome', 'jedi312', '*C07B8DC04AE160278C0D0FBDFF33804AC0772774', 'vince_bartolome@hotmail.com', 0),
('Steve', 'Vander Wal', 'vwal', '*61710AF48928425E3FEEF2669D6D966DA5E7A2E7', 'steve.vanderwal@hotmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blogtable`
--

DROP TABLE IF EXISTS `blogtable`;
CREATE TABLE IF NOT EXISTS `blogtable` (
  `row` int(11) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  `userid` varchar(15) DEFAULT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogtable`
--

INSERT INTO `blogtable` (`row`, `date`, `userid`, `message`) VALUES
(1, '08/18/15  08:50:37', 'drewbie', '                    Miller rules!'),
(2, '08/18/15  15:32:11', 'tbriggs', '            Miller sucks        '),
(3, '09/9/15  17:09:35', 'SloppyWaffles', ' Correction Pabst sucks!\r\n                   '),
(4, '09/11/15  10:28:04', 'milnuts', 'Hey Doug, how many points do you have so far?  Oh yeah, 0!!!!  Btw, I like the donut holes from Gingerbread house.'),
(5, '09/13/15  22:51:25', 'SloppyWaffles', 'Lookin forward to Drewbie treats to soften the pain incurred by the schooling by The House          ');

-- --------------------------------------------------------

--
-- Table structure for table `drewbie`
--

DROP TABLE IF EXISTS `drewbie`;
CREATE TABLE IF NOT EXISTS `drewbie` (
  `week` int(2) DEFAULT NULL,
  `game` int(2) DEFAULT NULL,
  `winner` char(3) DEFAULT NULL,
  `spread` int(3) DEFAULT NULL,
  `made` int(1) DEFAULT NULL,
  `missed` int(1) DEFAULT NULL,
  `missSpread` int(1) DEFAULT NULL,
  `picked` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drewbie`
--

INSERT INTO `drewbie` (`week`, `game`, `winner`, `spread`, `made`, `missed`, `missSpread`, `picked`) VALUES
(1, 1, 'NWE', 4, 1, 0, 0, 0),
(1, 2, 'IND', 3, 0, 1, 0, 0),
(1, 3, 'GB', 4, 1, 0, 0, 0),
(1, 4, 'KC', 2, 1, 0, 0, 0),
(1, 5, 'CAR', 2, 1, 0, 0, 0),
(1, 6, 'NYJ', 2, 1, 0, 0, 0),
(1, 7, 'SEA', 3, 0, 1, 0, 0),
(1, 8, 'MIA', 2, 1, 0, 0, 0),
(1, 9, 'ARZ', 2, 1, 0, 0, 0),
(1, 10, 'SD', 3, 1, 0, 0, 0),
(1, 11, 'DEN', 4, 1, 0, 0, 0),
(1, 12, 'OAK', 2, 0, 1, 0, 0),
(1, 13, 'TB', 3, 0, 1, 0, 0),
(1, 14, 'DAL', 4, 0, 0, 1, 0),
(1, 15, 'PHI', 2, 0, 1, 0, 0),
(1, 16, 'MIN', 2, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `drewbie_rk`
--

DROP TABLE IF EXISTS `drewbie_rk`;
CREATE TABLE IF NOT EXISTS `drewbie_rk` (
  `week` int(2) DEFAULT NULL,
  `rank` int(2) DEFAULT NULL,
  `rankW` int(2) DEFAULT NULL,
  `points` int(3) DEFAULT NULL,
  `pointsW` int(3) DEFAULT NULL,
  `percentage` float DEFAULT NULL,
  `percentageW` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drewbie_rk`
--

INSERT INTO `drewbie_rk` (`week`, `rank`, `rankW`, `points`, `pointsW`, `percentage`, `percentageW`) VALUES
(1, 8, 8, 25, 25, 0.625, 0.625);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

DROP TABLE IF EXISTS `guest`;
CREATE TABLE IF NOT EXISTS `guest` (
  `week` int(2) DEFAULT NULL,
  `game` int(2) DEFAULT NULL,
  `winner` char(3) DEFAULT NULL,
  `spread` int(3) DEFAULT NULL,
  `made` int(1) DEFAULT NULL,
  `missed` int(1) DEFAULT NULL,
  `missSpread` int(1) DEFAULT NULL,
  `picked` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guest_rk`
--

DROP TABLE IF EXISTS `guest_rk`;
CREATE TABLE IF NOT EXISTS `guest_rk` (
  `week` int(2) DEFAULT NULL,
  `rank` int(2) DEFAULT NULL,
  `rankW` int(2) DEFAULT NULL,
  `points` int(3) DEFAULT NULL,
  `pointsW` int(3) DEFAULT NULL,
  `percentage` float DEFAULT NULL,
  `percentageW` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jedi312`
--

DROP TABLE IF EXISTS `jedi312`;
CREATE TABLE IF NOT EXISTS `jedi312` (
  `week` int(2) DEFAULT NULL,
  `game` int(2) DEFAULT NULL,
  `winner` char(3) DEFAULT NULL,
  `spread` int(3) DEFAULT NULL,
  `made` int(1) DEFAULT NULL,
  `missed` int(1) DEFAULT NULL,
  `missSpread` int(1) DEFAULT NULL,
  `picked` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jedi312`
--

INSERT INTO `jedi312` (`week`, `game`, `winner`, `spread`, `made`, `missed`, `missSpread`, `picked`) VALUES
(1, 1, 'NWE', 6, 1, 0, 0, 0),
(1, 2, 'IND', 12, 0, 1, 0, 0),
(1, 3, 'GB', 10, 0, 0, 1, 0),
(1, 4, 'HOU', 6, 0, 1, 0, 0),
(1, 5, 'CAR', 6, 1, 0, 0, 0),
(1, 6, 'NYJ', 6, 1, 0, 0, 0),
(1, 7, 'SEA', 10, 0, 1, 0, 0),
(1, 8, 'MIA', 14, 0, 0, 1, 0),
(1, 9, 'ARZ', 6, 1, 0, 0, 0),
(1, 10, 'DET', 6, 0, 1, 0, 0),
(1, 11, 'DEN', 6, 1, 0, 0, 0),
(1, 12, 'CIN', 10, 1, 0, 0, 0),
(1, 13, 'TB', 6, 0, 1, 0, 0),
(1, 14, 'DAL', 6, 0, 0, 1, 0),
(1, 15, 'PHI', 6, 0, 1, 0, 0),
(1, 16, 'MIN', 6, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jedi312_rk`
--

DROP TABLE IF EXISTS `jedi312_rk`;
CREATE TABLE IF NOT EXISTS `jedi312_rk` (
  `week` int(2) DEFAULT NULL,
  `rank` int(2) DEFAULT NULL,
  `rankW` int(2) DEFAULT NULL,
  `points` int(3) DEFAULT NULL,
  `pointsW` int(3) DEFAULT NULL,
  `percentage` float DEFAULT NULL,
  `percentageW` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jedi312_rk`
--

INSERT INTO `jedi312_rk` (`week`, `rank`, `rankW`, `points`, `pointsW`, `percentage`, `percentageW`) VALUES
(1, 2, 2, 40, 40, 0.563, 0.563);

-- --------------------------------------------------------

--
-- Table structure for table `lgpass`
--

DROP TABLE IF EXISTS `lgpass`;
CREATE TABLE IF NOT EXISTS `lgpass` (
  `passwd` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lgpass`
--

INSERT INTO `lgpass` (`passwd`) VALUES
('BradyHasFlatBalls');

-- --------------------------------------------------------

--
-- Table structure for table `megatron`
--

DROP TABLE IF EXISTS `megatron`;
CREATE TABLE IF NOT EXISTS `megatron` (
  `week` int(2) DEFAULT NULL,
  `game` int(2) DEFAULT NULL,
  `winner` char(3) DEFAULT NULL,
  `spread` int(3) DEFAULT NULL,
  `made` int(1) DEFAULT NULL,
  `missed` int(1) DEFAULT NULL,
  `missSpread` int(1) DEFAULT NULL,
  `picked` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `megatron`
--

INSERT INTO `megatron` (`week`, `game`, `winner`, `spread`, `made`, `missed`, `missSpread`, `picked`) VALUES
(1, 1, 'NWE', 7, 1, 0, 0, 0),
(1, 2, 'IND', 10, 0, 1, 0, 0),
(1, 3, 'CHI', 3, 0, 1, 0, 0),
(1, 4, 'KC', 10, 0, 0, 1, 0),
(1, 5, 'CAR', 3, 1, 0, 0, 0),
(1, 6, 'NYJ', 3, 1, 0, 0, 0),
(1, 7, 'SEA', 7, 0, 1, 0, 0),
(1, 8, 'MIA', 7, 1, 0, 0, 0),
(1, 9, 'ARZ', 3, 1, 0, 0, 0),
(1, 10, 'SD', 6, 0, 0, 1, 0),
(1, 11, 'DEN', 6, 1, 0, 0, 0),
(1, 12, 'CIN', 3, 1, 0, 0, 0),
(1, 13, 'TEN', 3, 1, 0, 0, 0),
(1, 14, 'DAL', 3, 0, 0, 1, 0),
(1, 15, 'PHI', 10, 0, 1, 0, 0),
(1, 16, 'MIN', 4, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `megatron_rk`
--

DROP TABLE IF EXISTS `megatron_rk`;
CREATE TABLE IF NOT EXISTS `megatron_rk` (
  `week` int(2) DEFAULT NULL,
  `rank` int(2) DEFAULT NULL,
  `rankW` int(2) DEFAULT NULL,
  `points` int(3) DEFAULT NULL,
  `pointsW` int(3) DEFAULT NULL,
  `percentage` float DEFAULT NULL,
  `percentageW` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `megatron_rk`
--

INSERT INTO `megatron_rk` (`week`, `rank`, `rankW`, `points`, `pointsW`, `percentage`, `percentageW`) VALUES
(1, 5, 5, 35, 35, 0.688, 0.688);

-- --------------------------------------------------------

--
-- Table structure for table `milnuts`
--

DROP TABLE IF EXISTS `milnuts`;
CREATE TABLE IF NOT EXISTS `milnuts` (
  `week` int(2) DEFAULT NULL,
  `game` int(2) DEFAULT NULL,
  `winner` char(3) DEFAULT NULL,
  `spread` int(3) DEFAULT NULL,
  `made` int(1) DEFAULT NULL,
  `missed` int(1) DEFAULT NULL,
  `missSpread` int(1) DEFAULT NULL,
  `picked` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `milnuts`
--

INSERT INTO `milnuts` (`week`, `game`, `winner`, `spread`, `made`, `missed`, `missSpread`, `picked`) VALUES
(1, 1, 'NWE', 6, 1, 0, 0, 0),
(1, 2, 'IND', 7, 0, 1, 0, 0),
(1, 3, 'GB', 10, 0, 0, 1, 0),
(1, 4, 'HOU', 3, 0, 1, 0, 0),
(1, 5, 'CAR', 6, 1, 0, 0, 0),
(1, 6, 'NYJ', 7, 1, 0, 0, 0),
(1, 7, 'SEA', 6, 0, 1, 0, 0),
(1, 8, 'MIA', 6, 1, 0, 0, 0),
(1, 9, 'ARZ', 6, 1, 0, 0, 0),
(1, 10, 'SD', 7, 0, 0, 1, 0),
(1, 11, 'DEN', 7, 0, 0, 1, 0),
(1, 12, 'CIN', 6, 1, 0, 0, 0),
(1, 13, 'TB', 7, 0, 1, 0, 0),
(1, 14, 'DAL', 6, 0, 0, 1, 0),
(1, 15, 'PHI', 3, 0, 1, 0, 0),
(1, 16, 'MIN', 6, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `milnuts_rk`
--

DROP TABLE IF EXISTS `milnuts_rk`;
CREATE TABLE IF NOT EXISTS `milnuts_rk` (
  `week` int(2) DEFAULT NULL,
  `rank` int(2) DEFAULT NULL,
  `rankW` int(2) DEFAULT NULL,
  `points` int(3) DEFAULT NULL,
  `pointsW` int(3) DEFAULT NULL,
  `percentage` float DEFAULT NULL,
  `percentageW` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `milnuts_rk`
--

INSERT INTO `milnuts_rk` (`week`, `rank`, `rankW`, `points`, `pointsW`, `percentage`, `percentageW`) VALUES
(1, 4, 4, 37, 37, 0.625, 0.625);

-- --------------------------------------------------------

--
-- Table structure for table `schedule2015`
--

DROP TABLE IF EXISTS `schedule2015`;
CREATE TABLE IF NOT EXISTS `schedule2015` (
  `week` int(2) DEFAULT NULL,
  `gamenum` int(2) DEFAULT NULL,
  `visitor` varchar(5) DEFAULT NULL,
  `home` varchar(5) DEFAULT NULL,
  `vispoints` int(2) DEFAULT NULL,
  `homepoints` int(2) DEFAULT NULL,
  `winner` char(3) DEFAULT NULL,
  `loser` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule2015`
--

INSERT INTO `schedule2015` (`week`, `gamenum`, `visitor`, `home`, `vispoints`, `homepoints`, `winner`, `loser`) VALUES
(1, 1, 'PIT', 'NWE', 21, 28, 'NWE', 'PIT'),
(1, 2, 'IND', 'BUF', 14, 27, 'BUF', 'IND'),
(1, 3, 'GB', 'CHI', 31, 23, 'GB', 'CHI'),
(1, 4, 'KC', 'HOU', 27, 20, 'KC', 'HOU'),
(1, 5, 'CAR', 'JAX', 20, 9, 'CAR', 'JAX'),
(1, 6, 'CLE', 'NYJ', 10, 31, 'NYJ', 'CLE'),
(1, 7, 'SEA', 'STL', 31, 34, 'STL', 'SEA'),
(1, 8, 'MIA', 'WAS', 17, 10, 'MIA', 'WAS'),
(1, 9, 'NO', 'ARZ', 19, 31, 'ARZ', 'NO'),
(1, 10, 'DET', 'SD', 28, 33, 'SD', 'DET'),
(1, 11, 'BAL', 'DEN', 13, 19, 'DEN', 'BAL'),
(1, 12, 'CIN', 'OAK', 33, 13, 'CIN', 'OAK'),
(1, 13, 'TEN', 'TB', 42, 14, 'TEN', 'TB'),
(1, 14, 'NYG', 'DAL', 26, 27, 'DAL', 'NYG'),
(1, 15, 'PHI', 'ATL', 24, 26, 'ATL', 'PHI'),
(1, 16, 'MIN', 'SF', 3, 20, 'SF', 'MIN'),
(2, 1, 'DEN', 'KC', NULL, NULL, NULL, NULL),
(2, 2, 'NWE', 'BUF', NULL, NULL, NULL, NULL),
(2, 3, 'HOU', 'CAR', NULL, NULL, NULL, NULL),
(2, 4, 'ARZ', 'CHI', NULL, NULL, NULL, NULL),
(2, 5, 'SD', 'CIN', NULL, NULL, NULL, NULL),
(2, 6, 'TEN', 'CLE', NULL, NULL, NULL, NULL),
(2, 7, 'DET', 'MIN', NULL, NULL, NULL, NULL),
(2, 8, 'TB', 'NO', NULL, NULL, NULL, NULL),
(2, 9, 'ATL', 'NYG', NULL, NULL, NULL, NULL),
(2, 10, 'SF', 'PIT', NULL, NULL, NULL, NULL),
(2, 11, 'STL', 'WAS', NULL, NULL, NULL, NULL),
(2, 12, 'MIA', 'JAX', NULL, NULL, NULL, NULL),
(2, 13, 'BAL', 'OAK', NULL, NULL, NULL, NULL),
(2, 14, 'DAL', 'PHI', NULL, NULL, NULL, NULL),
(2, 15, 'SEA', 'GB', NULL, NULL, NULL, NULL),
(2, 16, 'NYJ', 'IND', NULL, NULL, NULL, NULL),
(3, 1, 'WAS', 'NYG', NULL, NULL, NULL, NULL),
(3, 2, 'CIN', 'BAL', NULL, NULL, NULL, NULL),
(3, 3, 'NO', 'CAR', NULL, NULL, NULL, NULL),
(3, 4, 'OAK', 'CLE', NULL, NULL, NULL, NULL),
(3, 5, 'ATL', 'DAL', NULL, NULL, NULL, NULL),
(3, 6, 'TB', 'HOU', NULL, NULL, NULL, NULL),
(3, 7, 'SD', 'MIN', NULL, NULL, NULL, NULL),
(3, 8, 'JAX', 'NWE', NULL, NULL, NULL, NULL),
(3, 9, 'PHI', 'NYJ', NULL, NULL, NULL, NULL),
(3, 10, 'PIT', 'STL', NULL, NULL, NULL, NULL),
(3, 11, 'IND', 'TEN', NULL, NULL, NULL, NULL),
(3, 12, 'SF', 'ARZ', NULL, NULL, NULL, NULL),
(3, 13, 'BUF', 'MIA', NULL, NULL, NULL, NULL),
(3, 14, 'CHI', 'SEA', NULL, NULL, NULL, NULL),
(3, 15, 'DEN', 'DET', NULL, NULL, NULL, NULL),
(3, 16, 'KC', 'GB', NULL, NULL, NULL, NULL),
(4, 1, 'BAL', 'PIT', NULL, NULL, NULL, NULL),
(4, 2, 'NYJ', 'MIA', NULL, NULL, NULL, NULL),
(4, 3, 'HOU', 'ATL', NULL, NULL, NULL, NULL),
(4, 4, 'NYG', 'BUF', NULL, NULL, NULL, NULL),
(4, 5, 'OAK', 'CHI', NULL, NULL, NULL, NULL),
(4, 6, 'KC', 'CIN', NULL, NULL, NULL, NULL),
(4, 7, 'JAX', 'IND', NULL, NULL, NULL, NULL),
(4, 8, 'CAR', 'TB', NULL, NULL, NULL, NULL),
(4, 9, 'PHI', 'WAS', NULL, NULL, NULL, NULL),
(4, 10, 'CLE', 'SD', NULL, NULL, NULL, NULL),
(4, 11, 'STL', 'ARZ', NULL, NULL, NULL, NULL),
(4, 12, 'MIN', 'DEN', NULL, NULL, NULL, NULL),
(4, 13, 'GB', 'SF', NULL, NULL, NULL, NULL),
(4, 14, 'DAL', 'NO', NULL, NULL, NULL, NULL),
(4, 15, 'DET', 'SEA', NULL, NULL, NULL, NULL),
(5, 1, 'IND', 'HOU', NULL, NULL, NULL, NULL),
(5, 2, 'WAS', 'ATL', NULL, NULL, NULL, NULL),
(5, 3, 'CLE', 'BAL', NULL, NULL, NULL, NULL),
(5, 4, 'SEA', 'CIN', NULL, NULL, NULL, NULL),
(5, 5, 'STL', 'GB', NULL, NULL, NULL, NULL),
(5, 6, 'CHI', 'KC', NULL, NULL, NULL, NULL),
(5, 7, 'NO', 'PHI', NULL, NULL, NULL, NULL),
(5, 8, 'JAX', 'TB', NULL, NULL, NULL, NULL),
(5, 9, 'BUF', 'TEN', NULL, NULL, NULL, NULL),
(5, 10, 'ARZ', 'DET', NULL, NULL, NULL, NULL),
(5, 11, 'NWE', 'DAL', NULL, NULL, NULL, NULL),
(5, 12, 'DEN', 'OAK', NULL, NULL, NULL, NULL),
(5, 13, 'SF', 'NYG', NULL, NULL, NULL, NULL),
(5, 14, 'PIT', 'SD', NULL, NULL, NULL, NULL),
(6, 1, 'ATL', 'NO', NULL, NULL, NULL, NULL),
(6, 2, 'CIN', 'BUF', NULL, NULL, NULL, NULL),
(6, 3, 'DEN', 'CLE', NULL, NULL, NULL, NULL),
(6, 4, 'CHI', 'DET', NULL, NULL, NULL, NULL),
(6, 5, 'HOU', 'JAX', NULL, NULL, NULL, NULL),
(6, 6, 'KC', 'MIN', NULL, NULL, NULL, NULL),
(6, 7, 'WAS', 'NYJ', NULL, NULL, NULL, NULL),
(6, 8, 'ARZ', 'PIT', NULL, NULL, NULL, NULL),
(6, 9, 'MIA', 'TEN', NULL, NULL, NULL, NULL),
(6, 10, 'CAR', 'SEA', NULL, NULL, NULL, NULL),
(6, 11, 'SD', 'GB', NULL, NULL, NULL, NULL),
(6, 12, 'BAL', 'SF', NULL, NULL, NULL, NULL),
(6, 13, 'NWE', 'IND', NULL, NULL, NULL, NULL),
(6, 14, 'NYG', 'PHI', NULL, NULL, NULL, NULL),
(7, 1, 'SEA', 'SF', NULL, NULL, NULL, NULL),
(7, 2, 'BUF', 'JAX', NULL, NULL, NULL, NULL),
(7, 3, 'MIN', 'DET', NULL, NULL, NULL, NULL),
(7, 4, 'NO', 'IND', NULL, NULL, NULL, NULL),
(7, 5, 'PIT', 'KC', NULL, NULL, NULL, NULL),
(7, 6, 'HOU', 'MIA', NULL, NULL, NULL, NULL),
(7, 7, 'NYJ', 'NWE', NULL, NULL, NULL, NULL),
(7, 8, 'CLE', 'STL', NULL, NULL, NULL, NULL),
(7, 9, 'ATL', 'TEN', NULL, NULL, NULL, NULL),
(7, 10, 'TB', 'WAS', NULL, NULL, NULL, NULL),
(7, 11, 'OAK', 'SD', NULL, NULL, NULL, NULL),
(7, 12, 'DAL', 'NYG', NULL, NULL, NULL, NULL),
(7, 13, 'PHI', 'CAR', NULL, NULL, NULL, NULL),
(7, 14, 'BAL', 'ARZ', NULL, NULL, NULL, NULL),
(8, 1, 'MIA', 'NWE', NULL, NULL, NULL, NULL),
(8, 2, 'DET', 'KC', NULL, NULL, NULL, NULL),
(8, 3, 'TB', 'ATL', NULL, NULL, NULL, NULL),
(8, 4, 'SD', 'BAL', NULL, NULL, NULL, NULL),
(8, 5, 'MIN', 'CHI', NULL, NULL, NULL, NULL),
(8, 6, 'ARZ', 'CLE', NULL, NULL, NULL, NULL),
(8, 7, 'TEN', 'HOU', NULL, NULL, NULL, NULL),
(8, 8, 'NYG', 'NO', NULL, NULL, NULL, NULL),
(8, 9, 'CIN', 'PIT', NULL, NULL, NULL, NULL),
(8, 10, 'SF', 'STL', NULL, NULL, NULL, NULL),
(8, 11, 'NYJ', 'OAK', NULL, NULL, NULL, NULL),
(8, 12, 'SEA', 'DAL', NULL, NULL, NULL, NULL),
(8, 13, 'GB', 'DEN', NULL, NULL, NULL, NULL),
(8, 14, 'IND', 'CAR', NULL, NULL, NULL, NULL),
(9, 1, 'CLE', 'CIN', NULL, NULL, NULL, NULL),
(9, 2, 'MIA', 'BUF', NULL, NULL, NULL, NULL),
(9, 3, 'GB', 'CAR', NULL, NULL, NULL, NULL),
(9, 4, 'STL', 'MIN', NULL, NULL, NULL, NULL),
(9, 5, 'WAS', 'NWE', NULL, NULL, NULL, NULL),
(9, 6, 'TEN', 'NO', NULL, NULL, NULL, NULL),
(9, 7, 'JAX', 'NYJ', NULL, NULL, NULL, NULL),
(9, 8, 'OAK', 'PIT', NULL, NULL, NULL, NULL),
(9, 9, 'ATL', 'SF', NULL, NULL, NULL, NULL),
(9, 10, 'NYG', 'TB', NULL, NULL, NULL, NULL),
(9, 11, 'DEN', 'IND', NULL, NULL, NULL, NULL),
(9, 12, 'PHI', '', NULL, NULL, NULL, NULL),
(9, 13, 'CHI', 'SD', NULL, NULL, NULL, NULL),
(10, 1, 'BUF', 'NYJ', NULL, NULL, NULL, NULL),
(10, 2, 'JAX', 'BAL', NULL, NULL, NULL, NULL),
(10, 3, 'DET', 'GB', NULL, NULL, NULL, NULL),
(10, 4, 'MIA', 'PHI', NULL, NULL, NULL, NULL),
(10, 5, 'CLE', 'PIT', NULL, NULL, NULL, NULL),
(10, 6, 'CHI', 'STL', NULL, NULL, NULL, NULL),
(10, 7, 'DAL', 'TB', NULL, NULL, NULL, NULL),
(10, 8, 'CAR', 'TEN', NULL, NULL, NULL, NULL),
(10, 9, 'NO', 'WAS', NULL, NULL, NULL, NULL),
(10, 10, 'MIN', 'OAK', NULL, NULL, NULL, NULL),
(10, 11, 'KC', 'DEN', NULL, NULL, NULL, NULL),
(10, 12, 'NWE', 'NYG', NULL, NULL, NULL, NULL),
(10, 13, 'ARZ', 'DAL', NULL, NULL, NULL, NULL),
(10, 14, 'HOU', 'CIN', NULL, NULL, NULL, NULL),
(11, 1, 'TEN', 'JAX', NULL, NULL, NULL, NULL),
(11, 2, 'IND', 'ATL', NULL, NULL, NULL, NULL),
(11, 3, 'STL', 'BAL', NULL, NULL, NULL, NULL),
(11, 4, 'WAS', 'CAR', NULL, NULL, NULL, NULL),
(11, 5, 'DEN', 'CHI', NULL, NULL, NULL, NULL),
(11, 6, 'OAK', 'DET', NULL, NULL, NULL, NULL),
(11, 7, 'NYJ', 'HOU', NULL, NULL, NULL, NULL),
(11, 8, 'DAL', 'MIA', NULL, NULL, NULL, NULL),
(11, 9, 'GB', 'MIN', NULL, NULL, NULL, NULL),
(11, 10, 'TB', 'PHI', NULL, NULL, NULL, NULL),
(11, 11, 'CIN', 'ARZ', NULL, NULL, NULL, NULL),
(11, 12, 'SF', 'SEA', NULL, NULL, NULL, NULL),
(11, 13, 'KC', 'SD', NULL, NULL, NULL, NULL),
(11, 14, 'BUF', 'NWE', NULL, NULL, NULL, NULL),
(12, 1, 'PHI', 'DET', NULL, NULL, NULL, NULL),
(12, 2, 'CAR', 'DAL', NULL, NULL, NULL, NULL),
(12, 3, 'CHI', 'GB', NULL, NULL, NULL, NULL),
(12, 4, 'MIN', 'ATL', NULL, NULL, NULL, NULL),
(12, 5, 'STL', 'CIN', NULL, NULL, NULL, NULL),
(12, 6, 'NO', 'HOU', NULL, NULL, NULL, NULL),
(12, 7, 'TB', 'IND', NULL, NULL, NULL, NULL),
(12, 8, 'SD', 'JAX', NULL, NULL, NULL, NULL),
(12, 9, 'BUF', 'KC', NULL, NULL, NULL, NULL),
(12, 10, 'MIA', 'NYJ', NULL, NULL, NULL, NULL),
(12, 11, 'OAK', 'TEN', NULL, NULL, NULL, NULL),
(12, 12, 'NYG', 'WAS', NULL, NULL, NULL, NULL),
(12, 13, 'ARZ', 'SF', NULL, NULL, NULL, NULL),
(12, 14, 'PIT', 'SEA', NULL, NULL, NULL, NULL),
(12, 15, 'NWE', 'DEN', NULL, NULL, NULL, NULL),
(12, 16, 'BAL', 'CLE', NULL, NULL, NULL, NULL),
(13, 1, 'GB', 'DET', NULL, NULL, NULL, NULL),
(13, 2, 'HOU', 'BUF', NULL, NULL, NULL, NULL),
(13, 3, 'SF', 'CHI', NULL, NULL, NULL, NULL),
(13, 4, 'CIN', 'CLE', NULL, NULL, NULL, NULL),
(13, 5, 'BAL', 'MIA', NULL, NULL, NULL, NULL),
(13, 6, 'SEA', 'MIN', NULL, NULL, NULL, NULL),
(13, 7, 'CAR', 'NO', NULL, NULL, NULL, NULL),
(13, 8, 'NYJ', 'NYG', NULL, NULL, NULL, NULL),
(13, 9, 'ARZ', 'STL', NULL, NULL, NULL, NULL),
(13, 10, 'ATL', 'TB', NULL, NULL, NULL, NULL),
(13, 11, 'JAX', 'TEN', NULL, NULL, NULL, NULL),
(13, 12, 'KC', 'OAK', NULL, NULL, NULL, NULL),
(13, 13, 'DEN', 'SD', NULL, NULL, NULL, NULL),
(13, 14, 'PHI', 'NWE', NULL, NULL, NULL, NULL),
(13, 15, 'IND', 'PIT', NULL, NULL, NULL, NULL),
(13, 16, 'DAL', 'WAS', NULL, NULL, NULL, NULL),
(14, 1, 'MIN', 'ARZ', NULL, NULL, NULL, NULL),
(14, 2, 'ATL', 'CAR', NULL, NULL, NULL, NULL),
(14, 3, 'WAS', 'CHI', NULL, NULL, NULL, NULL),
(14, 4, 'PIT', 'CIN', NULL, NULL, NULL, NULL),
(14, 5, 'SF', 'CLE', NULL, NULL, NULL, NULL),
(14, 6, 'NWE', 'HOU', NULL, NULL, NULL, NULL),
(14, 7, 'IND', 'JAX', NULL, NULL, NULL, NULL),
(14, 8, 'SD', 'KC', NULL, NULL, NULL, NULL),
(14, 9, 'TEN', 'NYJ', NULL, NULL, NULL, NULL),
(14, 10, 'BUF', 'PHI', NULL, NULL, NULL, NULL),
(14, 11, 'DET', 'STL', NULL, NULL, NULL, NULL),
(14, 12, 'NO', 'TB', NULL, NULL, NULL, NULL),
(14, 13, 'OAK', 'DEN', NULL, NULL, NULL, NULL),
(14, 14, 'DAL', 'GB', NULL, NULL, NULL, NULL),
(14, 15, 'SEA', 'BAL', NULL, NULL, NULL, NULL),
(14, 16, 'NYG', 'MIA', NULL, NULL, NULL, NULL),
(15, 1, 'TB', 'STL', NULL, NULL, NULL, NULL),
(15, 2, 'NYJ', 'DAL', NULL, NULL, NULL, NULL),
(15, 3, 'KC', 'BAL', NULL, NULL, NULL, NULL),
(15, 4, 'HOU', 'IND', NULL, NULL, NULL, NULL),
(15, 5, 'ATL', 'JAX', NULL, NULL, NULL, NULL),
(15, 6, 'CHI', 'MIN', NULL, NULL, NULL, NULL),
(15, 7, 'TEN', 'NWE', NULL, NULL, NULL, NULL),
(15, 8, 'CAR', 'NYG', NULL, NULL, NULL, NULL),
(15, 9, 'ARZ', 'PHI', NULL, NULL, NULL, NULL),
(15, 10, 'BUF', 'WAS', NULL, NULL, NULL, NULL),
(15, 11, 'GB', 'OAK', NULL, NULL, NULL, NULL),
(15, 12, 'CLE', 'SEA', NULL, NULL, NULL, NULL),
(15, 13, 'DEN', 'PIT', NULL, NULL, NULL, NULL),
(15, 14, 'MIA', 'SD', NULL, NULL, NULL, NULL),
(15, 15, 'CIN', 'SF', NULL, NULL, NULL, NULL),
(15, 16, 'DET', 'NO', NULL, NULL, NULL, NULL),
(16, 1, 'SD', 'OAK', NULL, NULL, NULL, NULL),
(16, 2, 'WAS', 'PHI', NULL, NULL, NULL, NULL),
(16, 3, 'CAR', 'ATL', NULL, NULL, NULL, NULL),
(16, 4, 'DAL', 'BUF', NULL, NULL, NULL, NULL),
(16, 5, 'SF', 'DET', NULL, NULL, NULL, NULL),
(16, 6, 'CLE', 'KC', NULL, NULL, NULL, NULL),
(16, 7, 'IND', 'MIA', NULL, NULL, NULL, NULL),
(16, 8, 'NYG', 'MIN', NULL, NULL, NULL, NULL),
(16, 9, 'JAX', 'NO', NULL, NULL, NULL, NULL),
(16, 10, 'NWE', 'NYJ', NULL, NULL, NULL, NULL),
(16, 11, 'CHI', 'TB', NULL, NULL, NULL, NULL),
(16, 12, 'HOU', 'TEN', NULL, NULL, NULL, NULL),
(16, 13, 'GB', 'ARZ', NULL, NULL, NULL, NULL),
(16, 14, 'STL', 'SEA', NULL, NULL, NULL, NULL),
(16, 15, 'PIT', 'BAL', NULL, NULL, NULL, NULL),
(16, 16, 'CIN', 'DEN', NULL, NULL, NULL, NULL),
(17, 1, 'NO', 'ATL', NULL, NULL, NULL, NULL),
(17, 2, 'NYJ', 'BUF', NULL, NULL, NULL, NULL),
(17, 3, 'TB', 'CAR', NULL, NULL, NULL, NULL),
(17, 4, 'DET', 'CHI', NULL, NULL, NULL, NULL),
(17, 5, 'BAL', 'CIN', NULL, NULL, NULL, NULL),
(17, 6, 'PIT', 'CLE', NULL, NULL, NULL, NULL),
(17, 7, 'WAS', 'DAL', NULL, NULL, NULL, NULL),
(17, 8, 'MIN', 'GB', NULL, NULL, NULL, NULL),
(17, 9, 'JAX', 'HOU', NULL, NULL, NULL, NULL),
(17, 10, 'TEN', 'IND', NULL, NULL, NULL, NULL),
(17, 11, 'OAK', 'KC', NULL, NULL, NULL, NULL),
(17, 12, 'NWE', 'MIA', NULL, NULL, NULL, NULL),
(17, 13, 'PHI', 'NYG', NULL, NULL, NULL, NULL),
(17, 14, 'SEA', 'ARZ', NULL, NULL, NULL, NULL),
(17, 15, 'SD', 'DEN', NULL, NULL, NULL, NULL),
(17, 16, 'STL', 'SF', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `SloppyWaffles`
--

DROP TABLE IF EXISTS `SloppyWaffles`;
CREATE TABLE IF NOT EXISTS `SloppyWaffles` (
  `week` int(2) DEFAULT NULL,
  `game` int(2) DEFAULT NULL,
  `winner` char(3) DEFAULT NULL,
  `spread` int(3) DEFAULT NULL,
  `made` int(1) DEFAULT NULL,
  `missed` int(1) DEFAULT NULL,
  `missSpread` int(1) DEFAULT NULL,
  `picked` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SloppyWaffles`
--

INSERT INTO `SloppyWaffles` (`week`, `game`, `winner`, `spread`, `made`, `missed`, `missSpread`, `picked`) VALUES
(1, 1, 'NWE', 14, 0, 0, 1, 0),
(1, 2, 'IND', 10, 0, 1, 0, 0),
(1, 3, 'GB', 13, 0, 0, 1, 0),
(1, 4, 'HOU', 10, 0, 1, 0, 0),
(1, 5, 'CAR', 14, 0, 0, 1, 0),
(1, 6, 'NYJ', 10, 1, 0, 0, 0),
(1, 7, 'SEA', 14, 0, 1, 0, 0),
(1, 8, 'MIA', 10, 0, 0, 1, 0),
(1, 9, 'ARZ', 10, 1, 0, 0, 0),
(1, 10, 'SD', 10, 0, 0, 1, 0),
(1, 11, 'DEN', 14, 0, 0, 1, 0),
(1, 12, 'CIN', 10, 1, 0, 0, 0),
(1, 13, 'TB', 10, 0, 1, 0, 0),
(1, 14, 'DAL', 14, 0, 0, 1, 0),
(1, 15, 'PHI', 10, 0, 1, 0, 0),
(1, 16, 'MIN', 14, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `SloppyWaffles_rk`
--

DROP TABLE IF EXISTS `SloppyWaffles_rk`;
CREATE TABLE IF NOT EXISTS `SloppyWaffles_rk` (
  `week` int(2) DEFAULT NULL,
  `rank` int(2) DEFAULT NULL,
  `rankW` int(2) DEFAULT NULL,
  `points` int(3) DEFAULT NULL,
  `pointsW` int(3) DEFAULT NULL,
  `percentage` float DEFAULT NULL,
  `percentageW` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SloppyWaffles_rk`
--

INSERT INTO `SloppyWaffles_rk` (`week`, `rank`, `rankW`, `points`, `pointsW`, `percentage`, `percentageW`) VALUES
(1, 6, 6, 30, 30, 0.625, 0.625);

-- --------------------------------------------------------

--
-- Table structure for table `tbriggs`
--

DROP TABLE IF EXISTS `tbriggs`;
CREATE TABLE IF NOT EXISTS `tbriggs` (
  `week` int(2) DEFAULT NULL,
  `game` int(2) DEFAULT NULL,
  `winner` char(3) DEFAULT NULL,
  `spread` int(3) DEFAULT NULL,
  `made` int(1) DEFAULT NULL,
  `missed` int(1) DEFAULT NULL,
  `missSpread` int(1) DEFAULT NULL,
  `picked` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbriggs`
--

INSERT INTO `tbriggs` (`week`, `game`, `winner`, `spread`, `made`, `missed`, `missSpread`, `picked`) VALUES
(1, 1, 'NWE', 3, 1, 0, 0, 0),
(1, 2, 'IND', 6, 0, 1, 0, 0),
(1, 3, 'GB', 7, 1, 0, 0, 0),
(1, 4, 'KC', 10, 0, 0, 1, 0),
(1, 5, 'CAR', 6, 1, 0, 0, 0),
(1, 6, 'NYJ', 6, 1, 0, 0, 0),
(1, 7, 'SEA', 13, 0, 1, 0, 0),
(1, 8, 'MIA', 7, 1, 0, 0, 0),
(1, 9, 'NO', 3, 0, 1, 0, 0),
(1, 10, 'DET', 4, 0, 1, 0, 0),
(1, 11, 'DEN', 3, 1, 0, 0, 0),
(1, 12, 'CIN', 7, 1, 0, 0, 0),
(1, 13, 'TB', 3, 0, 1, 0, 0),
(1, 14, 'NYG', 3, 0, 1, 0, 0),
(1, 15, 'PHI', 6, 0, 1, 0, 0),
(1, 16, 'MIN', 1, 0, 1, 0, 0),
(2, 1, 'KC', 7, 0, 0, 0, 0),
(2, 2, 'NWE', 3, 0, 0, 0, 0),
(2, 3, 'HOU', 6, 0, 0, 0, 0),
(2, 4, 'ARZ', 10, 0, 0, 0, 0),
(2, 5, 'SD', 13, 0, 0, 0, 0),
(2, 6, 'TEN', 6, 0, 0, 0, 0),
(2, 7, 'DET', 7, 0, 0, 0, 0),
(2, 8, 'NO', 20, 0, 0, 0, 0),
(2, 9, 'ATL', 7, 0, 0, 0, 0),
(2, 10, 'PIT', 10, 0, 0, 0, 0),
(2, 11, 'STL', 13, 0, 0, 0, 0),
(2, 12, 'MIA', 9, 0, 0, 0, 0),
(2, 13, 'BAL', 7, 0, 0, 0, 0),
(2, 14, 'PHI', 10, 0, 0, 0, 0),
(2, 15, 'GB', 2, 0, 0, 0, 0),
(2, 16, 'IND', 3, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbriggs_rk`
--

DROP TABLE IF EXISTS `tbriggs_rk`;
CREATE TABLE IF NOT EXISTS `tbriggs_rk` (
  `week` int(2) DEFAULT NULL,
  `rank` int(2) DEFAULT NULL,
  `rankW` int(2) DEFAULT NULL,
  `points` int(3) DEFAULT NULL,
  `pointsW` int(3) DEFAULT NULL,
  `percentage` float DEFAULT NULL,
  `percentageW` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbriggs_rk`
--

INSERT INTO `tbriggs_rk` (`week`, `rank`, `rankW`, `points`, `pointsW`, `percentage`, `percentageW`) VALUES
(1, 3, 3, 39, 39, 0.5, 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `TheHouse`
--

DROP TABLE IF EXISTS `TheHouse`;
CREATE TABLE IF NOT EXISTS `TheHouse` (
  `week` int(2) DEFAULT NULL,
  `game` int(2) DEFAULT NULL,
  `winner` char(3) DEFAULT NULL,
  `spread` int(3) DEFAULT NULL,
  `made` int(1) DEFAULT NULL,
  `missed` int(1) DEFAULT NULL,
  `missSpread` int(1) DEFAULT NULL,
  `picked` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TheHouse`
--

INSERT INTO `TheHouse` (`week`, `game`, `winner`, `spread`, `made`, `missed`, `missSpread`, `picked`) VALUES
(1, 1, 'NWE', 7, 1, 0, 0, 0),
(1, 2, 'IND', 7, 0, 1, 0, 0),
(1, 3, 'GB', 7, 1, 0, 0, 0),
(1, 4, 'KC', 3, 1, 0, 0, 0),
(1, 5, 'CAR', 6, 1, 0, 0, 0),
(1, 6, 'NYJ', 3, 1, 0, 0, 0),
(1, 7, 'SEA', 5, 0, 1, 0, 0),
(1, 8, 'MIA', 6, 1, 0, 0, 0),
(1, 9, 'ARZ', 5, 1, 0, 0, 0),
(1, 10, 'SD', 3, 1, 0, 0, 0),
(1, 11, 'DEN', 5, 1, 0, 0, 0),
(1, 12, 'CIN', 4, 1, 0, 0, 0),
(1, 13, 'TEN', 3, 1, 0, 0, 0),
(1, 14, 'DAL', 6, 0, 0, 1, 0),
(1, 15, 'PHI', 7, 0, 1, 0, 0),
(1, 16, 'SF', 3, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `TheHouse_rk`
--

DROP TABLE IF EXISTS `TheHouse_rk`;
CREATE TABLE IF NOT EXISTS `TheHouse_rk` (
  `week` int(2) DEFAULT NULL,
  `rank` int(2) DEFAULT NULL,
  `rankW` int(2) DEFAULT NULL,
  `points` int(3) DEFAULT NULL,
  `pointsW` int(3) DEFAULT NULL,
  `percentage` float DEFAULT NULL,
  `percentageW` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TheHouse_rk`
--

INSERT INTO `TheHouse_rk` (`week`, `rank`, `rankW`, `points`, `pointsW`, `percentage`, `percentageW`) VALUES
(1, 1, 1, 55, 55, 0.813, 0.813);

-- --------------------------------------------------------

--
-- Table structure for table `turdferguson`
--

DROP TABLE IF EXISTS `turdferguson`;
CREATE TABLE IF NOT EXISTS `turdferguson` (
  `week` int(2) DEFAULT NULL,
  `game` int(2) DEFAULT NULL,
  `winner` char(3) DEFAULT NULL,
  `spread` int(3) DEFAULT NULL,
  `made` int(1) DEFAULT NULL,
  `missed` int(1) DEFAULT NULL,
  `missSpread` int(1) DEFAULT NULL,
  `picked` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `turdferguson`
--

INSERT INTO `turdferguson` (`week`, `game`, `winner`, `spread`, `made`, `missed`, `missSpread`, `picked`) VALUES
(1, 1, 'NWE', 14, 0, 0, 1, 0),
(1, 2, 'IND', 7, 0, 1, 0, 0),
(1, 3, 'GB', 14, 0, 0, 1, 0),
(1, 4, 'KC', 3, 1, 0, 0, 0),
(1, 5, 'CAR', 3, 1, 0, 0, 0),
(1, 6, 'NYJ', 6, 1, 0, 0, 0),
(1, 7, 'SEA', 7, 0, 1, 0, 0),
(1, 8, 'MIA', 7, 1, 0, 0, 0),
(1, 9, 'ARZ', 3, 1, 0, 0, 0),
(1, 10, 'DET', 7, 0, 1, 0, 0),
(1, 11, 'DEN', 7, 0, 0, 1, 0),
(1, 12, 'CIN', 7, 1, 0, 0, 0),
(1, 13, 'TB', 3, 0, 1, 0, 0),
(1, 14, 'DAL', 10, 0, 0, 1, 0),
(1, 15, 'PHI', 7, 0, 1, 0, 0),
(1, 16, 'MIN', 6, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `turdferguson_rk`
--

DROP TABLE IF EXISTS `turdferguson_rk`;
CREATE TABLE IF NOT EXISTS `turdferguson_rk` (
  `week` int(2) DEFAULT NULL,
  `rank` int(2) DEFAULT NULL,
  `rankW` int(2) DEFAULT NULL,
  `points` int(3) DEFAULT NULL,
  `pointsW` int(3) DEFAULT NULL,
  `percentage` float DEFAULT NULL,
  `percentageW` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `turdferguson_rk`
--

INSERT INTO `turdferguson_rk` (`week`, `rank`, `rankW`, `points`, `pointsW`, `percentage`, `percentageW`) VALUES
(1, 7, 7, 29, 29, 0.625, 0.625);

-- --------------------------------------------------------

--
-- Table structure for table `vwal`
--

DROP TABLE IF EXISTS `vwal`;
CREATE TABLE IF NOT EXISTS `vwal` (
  `week` int(2) DEFAULT NULL,
  `game` int(2) DEFAULT NULL,
  `winner` char(3) DEFAULT NULL,
  `spread` int(3) DEFAULT NULL,
  `made` int(1) DEFAULT NULL,
  `missed` int(1) DEFAULT NULL,
  `missSpread` int(1) DEFAULT NULL,
  `picked` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vwal`
--

INSERT INTO `vwal` (`week`, `game`, `winner`, `spread`, `made`, `missed`, `missSpread`, `picked`) VALUES
(1, 1, 'PIT', 3, 0, 1, 0, 1),
(1, 2, 'IND', 3, 0, 1, 0, 1),
(1, 3, 'GB', 3, 1, 0, 0, 1),
(1, 4, 'KC', 3, 1, 0, 0, 1),
(1, 5, 'CAR', 3, 1, 0, 0, 1),
(1, 6, 'CLE', 3, 0, 1, 0, 1),
(1, 7, 'SEA', 3, 0, 1, 0, 1),
(1, 8, 'MIA', 3, 1, 0, 0, 1),
(1, 9, 'NO', 3, 0, 1, 0, 1),
(1, 10, 'DET', 3, 0, 1, 0, 1),
(1, 11, 'BAL', 3, 0, 1, 0, 1),
(1, 12, 'CIN', 3, 1, 0, 0, 1),
(1, 13, 'TEN', 3, 1, 0, 0, 1),
(1, 14, 'NYG', 3, 0, 1, 0, 1),
(1, 15, 'PHI', 3, 0, 1, 0, 1),
(1, 16, 'MIN', 3, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vwal_rk`
--

DROP TABLE IF EXISTS `vwal_rk`;
CREATE TABLE IF NOT EXISTS `vwal_rk` (
  `week` int(2) DEFAULT NULL,
  `rank` int(2) DEFAULT NULL,
  `rankW` int(2) DEFAULT NULL,
  `points` int(3) DEFAULT NULL,
  `pointsW` int(3) DEFAULT NULL,
  `percentage` float DEFAULT NULL,
  `percentageW` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vwal_rk`
--

INSERT INTO `vwal_rk` (`week`, `rank`, `rankW`, `points`, `pointsW`, `percentage`, `percentageW`) VALUES
(1, 9, 9, 18, 18, 0.375, 0.375);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
