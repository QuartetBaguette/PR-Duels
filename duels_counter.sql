-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 03:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duels_counter`
--

-- --------------------------------------------------------

--
-- Table structure for table `gamemodes`
--

CREATE TABLE `gamemodes` (
  `mode_id` int(11) NOT NULL,
  `mode_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gamemodes`
--

INSERT INTO `gamemodes` (`mode_id`, `mode_name`) VALUES
(1, 'CTF_'),
(2, 'CP_'),
(3, 'KOTH_'),
(4, 'PAYLOAD_');

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `map_id` int(11) NOT NULL,
  `gamemode` int(11) NOT NULL,
  `map_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`map_id`, `gamemode`, `map_name`) VALUES
(1, 2, '5Gorge'),
(2, 2, 'Badlands'),
(3, 2, 'Coldfront'),
(4, 2, 'Dustbowl'),
(5, 2, 'Egypt'),
(6, 2, 'Fastlane'),
(7, 2, 'Foundry'),
(8, 2, 'Freight_final1'),
(9, 2, 'Gorge'),
(10, 2, 'Granary'),
(11, 2, 'Gravel pit'),
(12, 2, 'Gullywash_final1'),
(13, 2, 'Junction_final'),
(14, 2, 'Mercenarypark'),
(15, 2, 'Metalworks'),
(16, 2, 'Mossrock'),
(17, 2, 'Mountainlab'),
(18, 2, 'Powerhouse'),
(19, 2, 'Process_final'),
(20, 2, 'Snakewater_final1'),
(21, 2, 'Snowplow'),
(22, 2, 'Standin_final'),
(23, 2, 'Steel'),
(24, 2, 'Sunshine'),
(25, 2, 'Vanguard'),
(26, 2, 'Well'),
(27, 2, 'Yukon_final'),
(28, 1, '2Fort'),
(29, 1, 'Doublecross'),
(30, 1, 'Landfall'),
(31, 1, 'Sawmill'),
(32, 1, 'Snowfall_final'),
(33, 1, 'Turbine'),
(34, 1, 'Well'),
(35, 3, 'Badlands'),
(36, 3, 'Brazil'),
(37, 3, 'Harvest_final'),
(38, 3, 'Highpass'),
(39, 3, 'King'),
(40, 3, 'Lakeside_final'),
(41, 3, 'Lazarus'),
(42, 3, 'Nucleus'),
(43, 3, 'Sawmill'),
(44, 3, 'Suijin'),
(45, 3, 'Viaduct'),
(60, 4, 'Badwater'),
(61, 4, 'Barnblitz'),
(62, 4, 'Borneo'),
(63, 4, 'Enclosure_final'),
(64, 4, 'Frontier_final'),
(65, 4, 'Goldrush'),
(66, 4, 'Hoodoo_final'),
(67, 4, 'Pier'),
(68, 4, 'Snowycoast'),
(69, 4, 'Swiftwater_final1'),
(70, 4, 'Thundermountain'),
(71, 4, 'Upward');

-- --------------------------------------------------------

--
-- Table structure for table `match_history`
--

CREATE TABLE `match_history` (
  `match_id` int(11) NOT NULL,
  `match_map` int(11) NOT NULL,
  `DK_patrick` int(11) NOT NULL,
  `DK_ruben` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `player_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`player_id`, `name`, `points`) VALUES
(1, 'Patrick', 2),
(2, 'Ruben', 21);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`) VALUES
(1, 'Ruby', 'Hans!69'),
(2, 'Patty', 'Garfield');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gamemodes`
--
ALTER TABLE `gamemodes`
  ADD PRIMARY KEY (`mode_id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`map_id`),
  ADD KEY `gamemode` (`gamemode`);

--
-- Indexes for table `match_history`
--
ALTER TABLE `match_history`
  ADD PRIMARY KEY (`match_id`),
  ADD KEY `maps` (`match_map`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gamemodes`
--
ALTER TABLE `gamemodes`
  MODIFY `mode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `map_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `match_history`
--
ALTER TABLE `match_history`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `maps`
--
ALTER TABLE `maps`
  ADD CONSTRAINT `gamemode` FOREIGN KEY (`gamemode`) REFERENCES `gamemodes` (`mode_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `match_history`
--
ALTER TABLE `match_history`
  ADD CONSTRAINT `maps` FOREIGN KEY (`match_map`) REFERENCES `maps` (`map_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
