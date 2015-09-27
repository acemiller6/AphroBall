
--
-- Table structure for table `mfelton`
--

DROP TABLE IF EXISTS `mfelton`;
CREATE TABLE IF NOT EXISTS `mfelton` (
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
-- Dumping data for table `mfelton`
--

INSERT INTO `mfelton` (`week`, `game`, `winner`, `spread`, `made`, `missed`, `missSpread`, `picked`) VALUES
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
