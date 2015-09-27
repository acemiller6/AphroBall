-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2015 at 02:02 PM
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

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`firstname`, `lastname`, `userid`, `passwd`, `email`, `showemail`) VALUES
('Mike', 'Trout', 'test1', '*06C0BF5B64ECE2F648B5F048A71903906BA08E5C', 'test1@test1.com', 1),
('Dwayne', 'Johnson', 'test2', '*7CEB3FDE5F7A9C4CE5FBE610D7D8EDA62EBE5F4E', 'test2@test2.com', 1),
('Ryan', 'Miller', 'milnuts', '*3B8BF4DF29E5DF0A2AC8F8FD96D5CF50F7E85A48', 'acemiller6@gmail.com', 1),
('Temp', 'ID', 'guest', '*11DB58B0DD02E290377535868405F11E4CBEFF58', '', 0);

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
(2, '08/23/07  12:34:50', 'mattymill', 'I''m looking forward to another year of mopping up on some TU Trojans.  I hate rubbers!                    '),
(1, '08/23/07  11:08:53', 'milnuts', 'The message board is officially open.                 '),
(3, '08/24/07  06:41:02', 'milnuts', 'Look, lets face it, your win last year was a fluke.  I, like Joe Namath, am guaranteeing Aphro victory this year.  We might as well not even play, its just a formality at this point.                    '),
(4, '09/6/07  06:08:12', 'mattymill', '        Listen milnuts - I''m going to deliver a beat-down on you similar to the one Forks delivered to Jayco on a regular basis during the summer of ''92''.              '),
(5, '09/6/07  06:29:41', 'milnuts', ' Listen here, just because I give up game winning homers to Andy "FREAKING" Wilson is no reason to get fiesty.  How quickly you forget that Jayco had Amish Bash Brothers.  That''s right, Miller and Fletcher dropping bizzombs all over the Fork''s County Line General Store.  \r\n\r\nThat''s what up... Wilson!!!                   '),
(6, '09/6/07  06:33:03', 'mattymill', 'The truth must be told - we both know that Canseco Overholser had that routine fly ball bounce off his size 7 3/4 melon, and go over the fence.  Forks 9, Jayco 4.                      '),
(7, '09/6/07  07:28:20', 'milnuts', 'Milly, I understand the need to superimpose those false memories on the past in order to avoid the debilitating pain the truth would ultimately lead to.  One of these days you will face the facts that, (1) you served me some meat and (2) I grilled that baby over the left field fence.  History makes no distinction between an ''HR'' in the scorebook.\r\n\r\nAn interesting sidenote to this whole story.  I used Fletch''s gold 33in/30oz Easton that year.  So at age 15 I was swinging a bigger bat than I did in college (33in/28oz).  I''m amazed that my beefy 85lb frame could even swing that bat at 15.'),
(8, '09/7/07  10:41:43', 'milnuts', 'Elbs, c''mon!!! You picked the Saints?  You must be from Ohio.  '),
(9, '09/10/07  07:43:10', 'mattymill', '                    OK milnuts, I will admit that the scorecard does show a HR.  Your 85lb frame was able to drop a bomb over the 265ft sign simply b/c of the serious cheddar I was throwing.  I was clocked at 52-55mph that game - can you say Zumaya!'),
(10, '09/10/07  08:21:32', 'milnuts', 'Can I get a "what, what!" for the Fighting Irish?  Dang they look good.  I think we might have a shot to beat the Wolverines this year since they are looking so polished as well.'),
(11, '09/11/07  05:42:02', 'milnuts', ' What''s up with you Anderson boys?  That is one pathetic showing in week 1.  I''m surprised they even allow you back on campus.                   '),
(12, '09/25/07  12:36:58', 'milnuts', ' Fatso, where the heck are you?  Oh, there you are, way down at the bottom of the standings.  My bad.                   '),
(13, '09/27/07  05:12:26', 'mattymill', '                    Hey nuts - keep talking and you''ll be getting up close and personal with my jet black kitty.  And you know where he lives!  meow!!'),
(14, '09/27/07  10:00:30', 'milnuts', 'I''m pretty sure I won''t be able to sleep tonight after reading that.  It definitely falls into the "Too much information" department.  Don''t know if you''ve seen this before, but you have to check this video.  Its insane:<br><br>\r\n\r\nhttp://amishonline.blogspot.com/            ');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('hokie2pokie');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `milnuts`
--

INSERT INTO `milnuts` (`week`, `game`, `winner`, `spread`, `made`, `missed`, `missSpread`, `picked`) VALUES
(1, 1, 'PIT', 7, 1, 0, 0, 0),
(1, 2, 'IND', 10, 1, 0, 0, 0),
(1, 3, 'GB', 7, 0, 1, 0, 0),
(1, 4, 'HOU', 5, 0, 1, 0, 0),
(1, 5, 'CAR', 10, 1, 0, 0, 0),
(1, 6, 'NYJ', 4, 1, 0, 0, 0),
(1, 7, 'SEA', 8, 0, 0, 1, 0),
(1, 8, 'MIA', 6, 0, 1, 0, 0),
(1, 9, 'ARZ', 8, 0, 1, 0, 0),
(1, 10, 'SD', 10, 0, 0, 1, 0),
(1, 11, 'DEN', 8, 1, 0, 0, 0),
(1, 12, 'CIN', 4, 0, 1, 0, 0),
(1, 13, 'TB', 7, 1, 0, 0, 0),
(1, 14, 'DAL', 9, 0, 1, 0, 0),
(1, 15, 'ATL', 10, 0, 0, 1, 0),
(1, 16, 'SF', 14, 0, 0, 1, 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `milnuts_rk`
--

INSERT INTO `milnuts_rk` (`week`, `rank`, `rankW`, `points`, `pointsW`, `percentage`, `percentageW`) VALUES
(1, 1, 1, 46, 46, 0.625, 0.625);

-- --------------------------------------------------------

--
-- Table structure for table `schedule2007`
--

DROP TABLE IF EXISTS `schedule2007`;
CREATE TABLE IF NOT EXISTS `schedule2007` (
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
-- Dumping data for table `schedule2007`
--

INSERT INTO `schedule2007` (`week`, `gamenum`, `visitor`, `home`, `vispoints`, `homepoints`, `winner`, `loser`) VALUES
(1, 1, 'NO', 'IND', 10, 41, 'IND', 'NO'),
(1, 2, 'PHI', 'GB', 13, 16, 'GB', 'PHI'),
(1, 3, 'KC', 'HOU', 3, 20, 'HOU', 'KC'),
(1, 4, 'DEN', 'BUF', 15, 14, 'DEN', 'BUF'),
(1, 5, 'PIT', 'CLE', 34, 7, 'PIT', 'CLE'),
(1, 6, 'CAR', 'STL', 27, 13, 'CAR', 'STL'),
(1, 7, 'ATL', 'MIN', 3, 24, 'MIN', 'ATL'),
(1, 8, 'NWE', 'NYJ', 38, 14, 'NWE', 'NYJ'),
(1, 9, 'MIA', 'WAS', 13, 16, 'WAS', 'MIA'),
(1, 10, 'TEN', 'JAX', 13, 10, 'TEN', 'JAX'),
(1, 11, 'CHI', 'SD', 3, 14, 'SD', 'CHI'),
(1, 12, 'TB', 'SEA', 6, 20, 'SEA', 'TB'),
(1, 13, 'DET', 'OAK', 36, 21, 'DET', 'OAK'),
(1, 14, 'NYG', 'DAL', 35, 45, 'DAL', 'NYG'),
(1, 15, 'BAL', 'CIN', 20, 27, 'CIN', 'BAL'),
(2, 1, 'BUF', 'PIT', 3, 26, 'PIT', 'BUF'),
(2, 2, 'HOU', 'CAR', 34, 21, 'HOU', 'CAR'),
(2, 3, 'ATL', 'JAX', 7, 13, 'JAX', 'ATL'),
(2, 4, 'NO', 'TB', 14, 31, 'TB', 'NO'),
(2, 5, 'GB', 'NYG', 35, 13, 'GB', 'NYG'),
(2, 6, 'SF', 'STL', 17, 16, 'SF', 'STL'),
(2, 7, 'CIN', 'CLE', 45, 51, 'CLE', 'CIN'),
(2, 8, 'IND', 'TEN', 22, 20, 'IND', 'TEN'),
(2, 9, 'MIN', 'DET', 17, 20, 'DET', 'MIN'),
(2, 10, 'DAL', 'MIA', 37, 20, 'DAL', 'MIA'),
(2, 11, 'SEA', 'ARZ', 20, 23, 'ARZ', 'SEA'),
(2, 12, 'NYJ', 'BAL', 13, 20, 'BAL', 'NYJ'),
(2, 13, 'OAK', 'DEN', 20, 23, 'DEN', 'OAK'),
(2, 14, 'KC', 'CHI', 10, 20, 'CHI', 'KC'),
(2, 15, 'SD', 'NWE', 14, 38, 'NWE', 'SD'),
(2, 16, 'WAS', 'PHI', 20, 12, 'WAS', 'PHI'),
(3, 1, 'DET', 'PHI', 21, 56, 'PHI', 'DET'),
(3, 2, 'MIA', 'NYJ', 28, 31, 'NYJ', 'MIA'),
(3, 3, 'BUF', 'NWE', 7, 38, 'NWE', 'BUF'),
(3, 4, 'ARZ', 'BAL', 23, 26, 'BAL', 'ARZ'),
(3, 5, 'STL', 'TB', 3, 24, 'TB', 'STL'),
(3, 6, 'SF', 'PIT', 16, 37, 'PIT', 'SF'),
(3, 7, 'IND', 'HOU', 30, 24, 'IND', 'HOU'),
(3, 8, 'SD', 'GB', 24, 31, 'GB', 'SD'),
(3, 9, 'MIN', 'KC', 10, 13, 'KC', 'MIN'),
(3, 10, 'CLE', 'OAK', 24, 26, 'OAK', 'CLE'),
(3, 11, 'JAX', 'DEN', 23, 14, 'JAX', 'DEN'),
(3, 12, 'CIN', 'SEA', 21, 24, 'SEA', 'CIN'),
(3, 13, 'NYG', 'WAS', 24, 17, 'NYG', 'WAS'),
(3, 14, 'CAR', 'ATL', 27, 20, 'CAR', 'ATL'),
(3, 15, 'DAL', 'CHI', 34, 10, 'DAL', 'CHI'),
(3, 16, 'TEN', 'NO', 31, 14, 'TEN', 'NO'),
(4, 1, 'GB', 'MIN', 23, 16, 'GB', 'MIN'),
(4, 2, 'OAK', 'MIA', 35, 17, 'OAK', 'MIA'),
(4, 3, 'NYJ', 'BUF', 14, 17, 'BUF', 'NYJ'),
(4, 4, 'HOU', 'ATL', 16, 26, 'ATL', 'HOU'),
(4, 5, 'CHI', 'DET', 27, 37, 'DET', 'CHI'),
(4, 6, 'BAL', 'CLE', 13, 27, 'CLE', 'BAL'),
(4, 7, 'STL', 'DAL', 7, 35, 'DAL', 'STL'),
(4, 8, 'TB', 'CAR', 20, 7, 'TB', 'CAR'),
(4, 9, 'SEA', 'SF', 23, 3, 'SEA', 'SF'),
(4, 10, 'KC', 'SD', 30, 16, 'KC', 'SD'),
(4, 11, 'PIT', 'ARZ', 14, 21, 'ARZ', 'PIT'),
(4, 12, 'DEN', 'IND', 20, 38, 'IND', 'DEN'),
(4, 13, 'PHI', 'NYG', 3, 16, 'NYG', 'PHI'),
(4, 14, 'NWE', 'CIN', 34, 13, 'NWE', 'CIN'),
(5, 1, 'MIA', 'HOU', 19, 22, 'HOU', 'MIA'),
(5, 2, 'ATL', 'TEN', 13, 20, 'TEN', 'ATL'),
(5, 3, 'JAX', 'KC', 17, 7, 'JAX', 'KC'),
(5, 4, 'NYJ', 'NYG', 24, 35, 'NYG', 'NYJ'),
(5, 5, 'CAR', 'NO', 16, 13, 'CAR', 'NO'),
(5, 6, 'ARZ', 'STL', 34, 31, 'ARZ', 'STL'),
(5, 7, 'CLE', 'NWE', 17, 34, 'NWE', 'CLE'),
(5, 8, 'SEA', 'PIT', 0, 21, 'PIT', 'SEA'),
(5, 9, 'DET', 'WAS', 3, 34, 'WAS', 'DET'),
(5, 10, 'TB', 'IND', 14, 33, 'IND', 'TB'),
(5, 11, 'SD', 'DEN', 41, 3, 'SD', 'DEN'),
(5, 12, 'BAL', 'SF', 9, 7, 'BAL', 'SF'),
(5, 13, 'CHI', 'GB', 27, 20, 'CHI', 'GB'),
(5, 14, 'DAL', 'BUF', 25, 24, 'DAL', 'BUF'),
(6, 1, 'MIN', 'CHI', 34, 31, 'MIN', 'CHI'),
(6, 2, 'MIA', 'CLE', 31, 41, 'CLE', 'MIA'),
(6, 3, 'WAS', 'GB', 14, 17, 'GB', 'WAS'),
(6, 4, 'CIN', 'KC', 20, 27, 'KC', 'CIN'),
(6, 5, 'TEN', 'TB', 10, 13, 'TB', 'TEN'),
(6, 6, 'STL', 'BAL', 3, 22, 'BAL', 'STL'),
(6, 7, 'HOU', 'JAX', 17, 37, 'JAX', 'HOU'),
(6, 8, 'PHI', 'NYJ', 16, 9, 'PHI', 'NYJ'),
(6, 9, 'CAR', 'ARZ', 25, 10, 'CAR', 'ARZ'),
(6, 10, 'OAK', 'SD', 14, 28, 'SD', 'OAK'),
(6, 11, 'NWE', 'DAL', 48, 27, 'NWE', 'DAL'),
(6, 12, 'NO', 'SEA', 28, 17, 'NO', 'SEA'),
(6, 13, 'NYG', 'ATL', 31, 10, 'NYG', 'ATL'),
(7, 1, 'TEN', 'HOU', 38, 36, 'TEN', 'HOU'),
(7, 2, 'BAL', 'BUF', 14, 19, 'BUF', 'BAL'),
(7, 3, 'MIN', 'DAL', 14, 24, 'DAL', 'MIN'),
(7, 4, 'TB', 'DET', 16, 23, 'DET', 'TB'),
(7, 5, 'ARZ', 'WAS', 19, 21, 'WAS', 'ARZ'),
(7, 6, 'SF', 'NYG', 15, 33, 'NYG', 'SF'),
(7, 7, 'ATL', 'NO', 16, 22, 'NO', 'ATL'),
(7, 8, 'NWE', 'MIA', 49, 28, 'NWE', 'MIA'),
(7, 9, 'KC', 'OAK', 12, 10, 'KC', 'OAK'),
(7, 10, 'NYJ', 'CIN', 31, 38, 'CIN', 'NYJ'),
(7, 11, 'CHI', 'PHI', 19, 16, 'CHI', 'PHI'),
(7, 12, 'STL', 'SEA', 6, 33, 'SEA', 'STL'),
(7, 13, 'PIT', 'DEN', 28, 31, 'DEN', 'PIT'),
(7, 14, 'IND', 'JAX', 29, 7, 'IND', 'JAX'),
(8, 1, 'IND', 'CAR', 31, 7, 'IND', 'CAR'),
(8, 2, 'CLE', 'STL', 27, 20, 'CLE', 'STL'),
(8, 3, 'NYG', 'MIA', 13, 10, 'NYG', 'MIA'),
(8, 4, 'PHI', 'MIN', 23, 16, 'PHI', 'MIN'),
(8, 5, 'PIT', 'CIN', 24, 13, 'PIT', 'CIN'),
(8, 6, 'DET', 'CHI', 16, 7, 'DET', 'CHI'),
(8, 7, 'OAK', 'TEN', 9, 13, 'TEN', 'OAK'),
(8, 8, 'BUF', 'NYJ', 13, 3, 'BUF', 'NYJ'),
(8, 9, 'JAX', 'TB', 24, 23, 'JAX', 'TB'),
(8, 10, 'HOU', 'SD', 10, 35, 'SD', 'HOU'),
(8, 11, 'NO', 'SF', 31, 10, 'NO', 'SF'),
(8, 12, 'WAS', 'NWE', 7, 52, 'NWE', 'WAS'),
(8, 13, 'GB', 'DEN', 19, 13, 'GB', 'DEN'),
(9, 1, 'DEN', 'DET', 7, 44, 'DET', 'DEN'),
(9, 2, 'SF', 'ATL', 16, 20, 'ATL', 'SF'),
(9, 3, 'CIN', 'BUF', 21, 33, 'BUF', 'CIN'),
(9, 4, 'CAR', 'TEN', 7, 20, 'TEN', 'CAR'),
(9, 5, 'GB', 'KC', 33, 22, 'GB', 'KC'),
(9, 6, 'SD', 'MIN', 17, 35, 'MIN', 'SD'),
(9, 7, 'JAX', 'NO', 24, 41, 'NO', 'JAX'),
(9, 8, 'WAS', 'NYJ', 23, 20, 'WAS', 'NYJ'),
(9, 9, 'ARZ', 'TB', 10, 17, 'TB', 'ARZ'),
(9, 10, 'SEA', 'CLE', 30, 33, 'CLE', 'SEA'),
(9, 11, 'NWE', 'IND', 24, 20, 'NWE', 'IND'),
(9, 12, 'HOU', 'OAK', 24, 17, 'HOU', 'OAK'),
(9, 13, 'DAL', 'PHI', 38, 17, 'DAL', 'PHI'),
(9, 14, 'BAL', 'PIT', 7, 38, 'PIT', 'BAL'),
(10, 1, 'CLE', 'PIT', 28, 31, 'PIT', 'CLE'),
(10, 2, 'PHI', 'WAS', 33, 25, 'PHI', 'WAS'),
(10, 3, 'ATL', 'CAR', 20, 13, 'ATL', 'CAR'),
(10, 4, 'STL', 'NO', 37, 29, 'STL', 'NO'),
(10, 5, 'BUF', 'MIA', 13, 10, 'BUF', 'MIA'),
(10, 6, 'DEN', 'KC', 27, 11, 'DEN', 'KC'),
(10, 7, 'JAX', 'TEN', 28, 13, 'JAX', 'TEN'),
(10, 8, 'MIN', 'GB', 0, 34, 'GB', 'MIN'),
(10, 9, 'CIN', 'BAL', 21, 7, 'CIN', 'BAL'),
(10, 10, 'DAL', 'NYG', 31, 20, 'DAL', 'NYG'),
(10, 11, 'DET', 'ARZ', 21, 31, 'ARZ', 'DET'),
(10, 12, 'CHI', 'OAK', 17, 6, 'CHI', 'OAK'),
(10, 13, 'IND', 'SD', 21, 23, 'SD', 'IND'),
(10, 14, 'SF', 'SEA', 0, 24, 'SEA', 'SF'),
(11, 1, 'CLE', 'BAL', 33, 30, 'CLE', 'BAL'),
(11, 2, 'SD', 'JAX', 17, 24, 'JAX', 'SD'),
(11, 3, 'MIA', 'PHI', 7, 17, 'PHI', 'MIA'),
(11, 4, 'PIT', 'NYJ', 16, 19, 'NYJ', 'PIT'),
(11, 5, 'OAK', 'MIN', 22, 29, 'MIN', 'OAK'),
(11, 6, 'KC', 'IND', 10, 13, 'IND', 'KC'),
(11, 7, 'CAR', 'GB', 17, 31, 'GB', 'CAR'),
(11, 8, 'WAS', 'DAL', 23, 28, 'DAL', 'WAS'),
(11, 9, 'TB', 'ATL', 31, 7, 'TB', 'ATL'),
(11, 10, 'NO', 'HOU', 10, 23, 'HOU', 'NO'),
(11, 11, 'NWE', 'BUF', 56, 10, 'NWE', 'BUF'),
(11, 12, 'ARZ', 'CIN', 35, 27, 'ARZ', 'CIN'),
(11, 13, 'NYG', 'DET', 16, 10, 'NYG', 'DET'),
(11, 14, 'STL', 'SF', 13, 9, 'STL', 'SF'),
(11, 15, 'CHI', 'SEA', 23, 30, 'SEA', 'CHI'),
(11, 16, 'TEN', 'DEN', 20, 34, 'DEN', 'TEN'),
(12, 2, 'NYJ', 'DAL', 3, 34, 'DAL', 'NYJ'),
(12, 3, 'IND', 'ATL', 31, 13, 'IND', 'ATL'),
(12, 4, 'SEA', 'STL', 24, 19, 'SEA', 'STL'),
(12, 5, 'MIN', 'NYG', 41, 17, 'MIN', 'NYG'),
(12, 6, 'BUF', 'JAX', 14, 36, 'JAX', 'BUF'),
(12, 7, 'NO', 'CAR', 31, 6, 'NO', 'CAR'),
(12, 8, 'WAS', 'TB', 13, 19, 'TB', 'WAS'),
(12, 9, 'HOU', 'CLE', 17, 27, 'CLE', 'HOU'),
(12, 10, 'TEN', 'CIN', 6, 35, 'CIN', 'TEN'),
(12, 11, 'DEN', 'CHI', 34, 37, 'CHI', 'DEN'),
(12, 12, 'OAK', 'KC', 20, 17, 'OAK', 'KC'),
(12, 13, 'SF', 'ARZ', 37, 31, 'SF', 'ARZ'),
(12, 14, 'BAL', 'SD', 14, 32, 'SD', 'BAL'),
(12, 15, 'PHI', 'NWE', 28, 31, 'NWE', 'PHI'),
(12, 16, 'MIA', 'PIT', 0, 3, 'PIT', 'MIA'),
(13, 1, 'GB', 'DAL', 27, 37, 'DAL', 'GB'),
(13, 2, 'SD', 'KC', 24, 10, 'SD', 'KC'),
(13, 3, 'HOU', 'TEN', 20, 28, 'TEN', 'HOU'),
(13, 4, 'JAX', 'IND', 25, 28, 'IND', 'JAX'),
(13, 5, 'BUF', 'WAS', 17, 16, 'BUF', 'WAS'),
(13, 6, 'SF', 'CAR', 14, 31, 'CAR', 'SF'),
(13, 7, 'DET', 'MIN', 10, 42, 'MIN', 'DET'),
(13, 8, 'NYJ', 'MIA', 40, 13, 'NYJ', 'MIA'),
(13, 9, 'ATL', 'STL', 16, 28, 'STL', 'ATL'),
(13, 10, 'SEA', 'PHI', 28, 24, 'SEA', 'PHI'),
(13, 11, 'TB', 'NO', 27, 23, 'TB', 'NO'),
(13, 12, 'CLE', 'ARZ', 21, 27, 'ARZ', 'CLE'),
(13, 13, 'DEN', 'OAK', 20, 34, 'OAK', 'DEN'),
(13, 14, 'NYG', 'CHI', 21, 16, 'NYG', 'CHI'),
(13, 15, 'CIN', 'PIT', 10, 24, 'PIT', 'CIN'),
(13, 16, 'NWE', 'BAL', 27, 24, 'NWE', 'BAL'),
(14, 1, 'CHI', 'WAS', 16, 24, 'WAS', 'CHI'),
(14, 2, 'CAR', 'JAX', 6, 37, 'JAX', 'CAR'),
(14, 3, 'NYG', 'PHI', 16, 13, 'NYG', 'PHI'),
(14, 4, 'PIT', 'NWE', 13, 34, 'NWE', 'PIT'),
(14, 5, 'STL', 'CIN', 10, 19, 'CIN', 'STL'),
(14, 6, 'TB', 'HOU', 14, 28, 'HOU', 'TB'),
(14, 7, 'MIA', 'BUF', 17, 38, 'BUF', 'MIA'),
(14, 8, 'OAK', 'GB', 7, 38, 'GB', 'OAK'),
(14, 9, 'DAL', 'DET', 28, 27, 'DAL', 'DET'),
(14, 10, 'SD', 'TEN', 23, 17, 'SD', 'TEN'),
(14, 11, 'MIN', 'SF', 27, 7, 'MIN', 'SF'),
(14, 12, 'ARZ', 'SEA', 21, 42, 'SEA', 'ARZ'),
(14, 13, 'CLE', 'NYJ', 24, 18, 'CLE', 'NYJ'),
(14, 14, 'KC', 'DEN', 7, 41, 'DEN', 'KC'),
(14, 15, 'IND', 'BAL', 44, 20, 'IND', 'BAL'),
(14, 16, 'NO', 'ATL', 34, 14, 'NO', 'ATL'),
(15, 1, 'DEN', 'HOU', 13, 31, 'HOU', 'DEN'),
(15, 2, 'CIN', 'SF', 13, 20, 'SF', 'CIN'),
(15, 3, 'JAX', 'PIT', 29, 22, 'JAX', 'PIT'),
(15, 4, 'ATL', 'TB', 3, 37, 'TB', 'ATL'),
(15, 5, 'SEA', 'CAR', 10, 13, 'CAR', 'SEA'),
(15, 6, 'GB', 'STL', 33, 14, 'GB', 'STL'),
(15, 7, 'BAL', 'MIA', 16, 22, 'MIA', 'BAL'),
(15, 8, 'NYJ', 'NWE', 10, 20, 'NWE', 'NYJ'),
(15, 9, 'ARZ', 'NO', 24, 31, 'NO', 'ARZ'),
(15, 10, 'BUF', 'CLE', 0, 8, 'CLE', 'BUF'),
(15, 11, 'TEN', 'KC', 26, 17, 'TEN', 'KC'),
(15, 12, 'IND', 'OAK', 21, 14, 'IND', 'OAK'),
(15, 13, 'DET', 'SD', 14, 51, 'SD', 'DET'),
(15, 14, 'PHI', 'DAL', 10, 6, 'PHI', 'DAL'),
(15, 15, 'WAS', 'NYG', 22, 10, 'WAS', 'NYG'),
(15, 16, 'CHI', 'MIN', 13, 20, 'MIN', 'CHI'),
(16, 1, 'PIT', 'STL', 41, 24, 'PIT', 'STL'),
(16, 2, 'DAL', 'CAR', 20, 13, 'DAL', 'CAR'),
(16, 3, 'OAK', 'JAX', 11, 49, 'JAX', 'OAK'),
(16, 4, 'WAS', 'MIN', 32, 21, 'WAS', 'MIN'),
(16, 5, 'MIA', 'NWE', 7, 28, 'NWE', 'MIA'),
(16, 6, 'PHI', 'NO', 38, 23, 'PHI', 'NO'),
(16, 7, 'KC', 'DET', 20, 25, 'DET', 'KC'),
(16, 8, 'CLE', 'CIN', 14, 19, 'CIN', 'CLE'),
(16, 9, 'GB', 'CHI', 7, 35, 'CHI', 'GB'),
(16, 10, 'NYG', 'BUF', 38, 21, 'NYG', 'BUF'),
(16, 11, 'HOU', 'IND', 15, 38, 'IND', 'HOU'),
(16, 12, 'ATL', 'ARZ', 27, 30, 'ARZ', 'ATL'),
(16, 13, 'BAL', 'SEA', 6, 27, 'SEA', 'BAL'),
(16, 14, 'NYJ', 'TEN', 6, 10, 'TEN', 'NYJ'),
(16, 15, 'TB', 'SF', 19, 21, 'SF', 'TB'),
(16, 16, 'DEN', 'SD', 3, 23, 'SD', 'DEN'),
(17, 1, 'NWE', 'NYG', 0, 0, '', ''),
(17, 2, 'BUF', 'PHI', 0, 0, '', ''),
(17, 3, 'CIN', 'MIA', 0, 0, '', ''),
(17, 4, 'PIT', 'BAL', 0, 0, '', ''),
(17, 5, 'DAL', 'WAS', 0, 0, '', ''),
(17, 6, 'CAR', 'TB', 0, 0, '', ''),
(17, 7, 'TEN', 'IND', 0, 0, '', ''),
(17, 8, 'NO', 'CHI', 0, 0, '', ''),
(17, 9, 'JAX', 'HOU', 0, 0, '', ''),
(17, 10, 'SEA', 'ATL', 0, 0, '', ''),
(17, 11, 'DET', 'GB', 0, 0, '', ''),
(17, 12, 'SF', 'CLE', 0, 0, '', ''),
(17, 13, 'MIN', 'DEN', 0, 0, '', ''),
(17, 14, 'SD', 'OAK', 0, 0, '', ''),
(17, 15, 'STL', 'ARZ', 0, 0, '', ''),
(17, 16, 'KC', 'NYJ', 0, 0, '', ''),
(1, 16, 'ARZ', 'SF', 17, 20, 'SF', 'ARZ'),
(12, 1, 'GB', 'DET', 37, 26, 'GB', 'DET');

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
(1, 1, 'PIT', 'NWE', 20, 10, 'PIT', 'NWE'),
(1, 2, 'IND', 'BUF', 44, 20, 'IND', 'BUF'),
(1, 3, 'GB', 'CHI', 10, 13, 'CHI', 'GB'),
(1, 4, 'KC', 'HOU', 24, 17, 'KC', 'HOU'),
(1, 5, 'CAR', 'JAX', 20, 6, 'CAR', 'JAX'),
(1, 6, 'CLE', 'NYJ', 7, 13, 'NYJ', 'CLE'),
(1, 7, 'SEA', 'STL', 21, 14, 'SEA', 'STL'),
(1, 8, 'MIA', 'WAS', 10, 13, 'WAS', 'MIA'),
(1, 9, 'NO', 'ARZ', 14, 13, 'NO', 'ARZ'),
(1, 10, 'DET', 'SD', 21, 24, 'SD', 'DET'),
(1, 11, 'BAL', 'DEN', 17, 34, 'DEN', 'BAL'),
(1, 12, 'CIN', 'OAK', 17, 21, 'OAK', 'CIN'),
(1, 13, 'TEN', 'TB', 7, 20, 'TB', 'TEN'),
(1, 14, 'NYG', 'DAL', 21, 10, 'NYG', 'DAL'),
(1, 15, 'PHI', 'ATL', 21, 28, 'ATL', 'PHI'),
(1, 16, 'MIN', 'SF', 17, 23, 'SF', 'MIN'),
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

--
-- Table structure for table `test1`
--

DROP TABLE IF EXISTS `test1`;
CREATE TABLE IF NOT EXISTS `test1` (
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
-- Dumping data for table `test1`
--

INSERT INTO `test1` (`week`, `game`, `winner`, `spread`, `made`, `missed`, `missSpread`, `picked`) VALUES
(1, 1, 'PIT', 6, 1, 0, 0, 0),
(1, 2, 'BUF', 5, 0, 1, 0, 0),
(1, 3, 'CHI', 7, 0, 0, 1, 0),
(1, 4, 'KC', 6, 1, 0, 0, 0),
(1, 5, 'CAR', 5, 1, 0, 0, 0),
(1, 6, 'CLE', 9, 0, 1, 0, 0),
(1, 7, 'SEA', 8, 0, 0, 1, 0),
(1, 8, 'WAS', 6, 0, 0, 1, 0),
(1, 9, 'ARZ', 8, 0, 1, 0, 0),
(1, 10, 'DET', 4, 0, 1, 0, 0),
(1, 11, 'DEN', 6, 1, 0, 0, 0),
(1, 12, 'CIN', 7, 0, 1, 0, 0),
(1, 13, 'TEN', 8, 0, 1, 0, 0),
(1, 14, 'DAL', 5, 0, 1, 0, 0),
(1, 15, 'ATL', 9, 0, 0, 1, 0),
(1, 16, 'SF', 7, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `test1_rk`
--

DROP TABLE IF EXISTS `test1_rk`;
CREATE TABLE IF NOT EXISTS `test1_rk` (
  `week` int(2) DEFAULT NULL,
  `rank` int(2) DEFAULT NULL,
  `rankW` int(2) DEFAULT NULL,
  `points` int(3) DEFAULT NULL,
  `pointsW` int(3) DEFAULT NULL,
  `percentage` float DEFAULT NULL,
  `percentageW` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test1_rk`
--

INSERT INTO `test1_rk` (`week`, `rank`, `rankW`, `points`, `pointsW`, `percentage`, `percentageW`) VALUES
(1, 2, 2, 23, 23, 0.563, 0.563);

-- --------------------------------------------------------

--
-- Table structure for table `test2`
--

DROP TABLE IF EXISTS `test2`;
CREATE TABLE IF NOT EXISTS `test2` (
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
-- Dumping data for table `test2`
--

INSERT INTO `test2` (`week`, `game`, `winner`, `spread`, `made`, `missed`, `missSpread`, `picked`) VALUES
(1, 1, 'PIT', 3, 1, 0, 0, 1),
(1, 2, 'IND', 3, 1, 0, 0, 1),
(1, 3, 'GB', 3, 0, 1, 0, 1),
(1, 4, 'KC', 3, 1, 0, 0, 1),
(1, 5, 'CAR', 3, 1, 0, 0, 1),
(1, 6, 'CLE', 3, 0, 1, 0, 1),
(1, 7, 'SEA', 3, 1, 0, 0, 1),
(1, 8, 'MIA', 3, 0, 1, 0, 1),
(1, 9, 'NO', 3, 0, 0, 1, 1),
(1, 10, 'DET', 3, 0, 1, 0, 1),
(1, 11, 'BAL', 3, 0, 1, 0, 1),
(1, 12, 'CIN', 3, 0, 1, 0, 1),
(1, 13, 'TEN', 3, 0, 1, 0, 1),
(1, 14, 'NYG', 3, 1, 0, 0, 1),
(1, 15, 'PHI', 3, 0, 1, 0, 1),
(1, 16, 'MIN', 3, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `test2_rk`
--

DROP TABLE IF EXISTS `test2_rk`;
CREATE TABLE IF NOT EXISTS `test2_rk` (
  `week` int(2) DEFAULT NULL,
  `rank` int(2) DEFAULT NULL,
  `rankW` int(2) DEFAULT NULL,
  `points` int(3) DEFAULT NULL,
  `pointsW` int(3) DEFAULT NULL,
  `percentage` float DEFAULT NULL,
  `percentageW` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test2_rk`
--

INSERT INTO `test2_rk` (`week`, `rank`, `rankW`, `points`, `pointsW`, `percentage`, `percentageW`) VALUES
(1, 3, 3, 18, 18, 0.438, 0.438);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
