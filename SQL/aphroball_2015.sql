-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 10, 2015 at 03:47 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aphroball_2015`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `firstname` varchar(25) DEFAULT NULL,
  `lastname` varchar(25) DEFAULT NULL,
  `userid` varchar(10) DEFAULT NULL,
  `passwd` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `showemail` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



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
(1, 1, 'PIT', 'NWE', NULL, NULL, NULL, NULL),
(1, 2, 'IND', 'BUF', NULL, NULL, NULL, NULL),
(1, 3, 'GB', 'CHI', NULL, NULL, NULL, NULL),
(1, 4, 'KC', 'HOU', NULL, NULL, NULL, NULL),
(1, 5, 'CAR', 'JAX', NULL, NULL, NULL, NULL),
(1, 6, 'CLE', 'NYJ', NULL, NULL, NULL, NULL),
(1, 7, 'SEA', 'STL', NULL, NULL, NULL, NULL),
(1, 8, 'MIA', 'WAS', NULL, NULL, NULL, NULL),
(1, 9, 'NO', 'ARZ', NULL, NULL, NULL, NULL),
(1, 10, 'DET', 'SD', NULL, NULL, NULL, NULL),
(1, 11, 'BAL', 'DEN', NULL, NULL, NULL, NULL),
(1, 12, 'CIN', 'OAK', NULL, NULL, NULL, NULL),
(1, 13, 'TEN', 'TB', NULL, NULL, NULL, NULL),
(1, 14, 'NYG', 'DAL', NULL, NULL, NULL, NULL),
(1, 15, 'PHI', 'ATL', NULL, NULL, NULL, NULL),
(1, 16, 'MIN', 'SF', NULL, NULL, NULL, NULL),
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
(4, 2, 'NYJ', '', NULL, NULL, NULL, NULL),
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
(5, 13, 'SF', '', NULL, NULL, NULL, NULL),
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
(6, 13, 'NWE', '', NULL, NULL, NULL, NULL),
(6, 14, 'NYG', 'PHI', NULL, NULL, NULL, NULL),
(7, 1, 'SEA', 'SF', NULL, NULL, NULL, NULL),
(7, 2, 'BUF', '', NULL, NULL, NULL, NULL),
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
(7, 13, 'PHI', '', NULL, NULL, NULL, NULL),
(7, 14, 'BAL', 'ARZ', NULL, NULL, NULL, NULL),
(8, 1, 'MIA', 'NWE', NULL, NULL, NULL, NULL),
(8, 2, 'DET', '', NULL, NULL, NULL, NULL),
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
(8, 13, 'GB', '', NULL, NULL, NULL, NULL),
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
(10, 13, 'ARZ', '', NULL, NULL, NULL, NULL),
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
(11, 13, 'KC', '', NULL, NULL, NULL, NULL),
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
(12, 15, 'NWE', '', NULL, NULL, NULL, NULL),
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
(13, 15, 'IND', '', NULL, NULL, NULL, NULL),
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
(14, 15, 'SEA', '', NULL, NULL, NULL, NULL),
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
(15, 15, 'CIN', '', NULL, NULL, NULL, NULL),
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
(16, 15, 'PIT', '', NULL, NULL, NULL, NULL),
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
