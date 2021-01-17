-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 04:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`) VALUES
(49, 'hagar', 'gog@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `users_id` int(11) NOT NULL,
  `games_games_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `games_id` int(11) NOT NULL,
  `games_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`games_id`, `games_name`) VALUES
(1, 'pubg'),
(2, 'freefire'),
(3, 'call-of-duty'),
(4, 'Tekken'),
(5, 'Warframe'),
(6, 'Team-Fortress'),
(7, 'League-of-Legends'),
(8, 'Starcraft'),
(9, 'World-of-Tanks'),
(10, 'Rainbow-Six-Siege'),
(11, 'EVE'),
(12, 'Titanfall'),
(13, 'PathofExile'),
(14, 'Borderlands'),
(15, 'Battlefield'),
(16, 'star-war'),
(17, 'apex'),
(18, 'distny'),
(19, 'cs-go'),
(20, 'dota'),
(21, 'overwatch'),
(22, 'fortnite'),
(23, 'valorant');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'mokhtar mohamed', 'mokhtar@gmail.com', '$2y$10$9xaNhuo5cRf13tN1sZe3geLRip0rKrDc6/zK3X/IuE2hZwfWukAeK'),
(2, 'yusuf hassan', 'yusuf@gmail.com', '$2y$10$4b2tR52eZkKHP5Hu4me79.TeAbYDGENzGjG04QHInjHniFXT8BQo2'),
(3, 'hadeer ali', 'hadeer@gmail.com', '$2y$10$Ocn6TbaNfOzPiZFxDcS/ROoSK/eDteKT9KBhaAJNF/RJFNdALcDoK'),
(4, 'hagar abdelaliem', 'hagar@gmail.com', '$2y$10$Po66Cz0eFp/Vw7QFZvWDauQTTnEH0uBTB2Y7qDIyidk5jD1cccNIK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`users_id`,`games_games_id`),
  ADD KEY `fk_download_games1_idx` (`games_games_id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`games_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `games_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `download`
--
ALTER TABLE `download`
  ADD CONSTRAINT `fk_download_games1` FOREIGN KEY (`games_games_id`) REFERENCES `games` (`games_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_download_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
