-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2025 at 10:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eli_coffeedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'kobe', 'kobe@gmail.com', 'kobe'),
(2, 'von', 'von@gmail.com', '$2y$10$9BGk5QgQKTUT0I3igrgKjO/ofGxkbrmGoGgZEVWgdVAbK4u5G2rna'),
(4, 'raven', 'raven@gmail.com', '$2y$10$irI0QsgsgxUE2l0/XVbJP.eVa.Xe0KtanOOD0qO2AplhwHyDqrDOy'),
(5, 'sej', 'sej@gmail.com', '$2y$10$CZg91iLcGKA6TDg24G4gveSKcSfDv5TAJVGy1SPWIBtkyqQR9xo92');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_booking`
--

CREATE TABLE `schedule_booking` (
  `sched_Id` int(25) NOT NULL COMMENT 'Auto-increment for each event',
  `customer_Id` int(25) NOT NULL COMMENT 'Foreign key referencing Customer',
  `date` date NOT NULL COMMENT 'Event date',
  `start` time(6) NOT NULL COMMENT 'Time when the event starts',
  `end` time(6) NOT NULL COMMENT 'Time when the event ends',
  `event_Type` varchar(255) NOT NULL COMMENT 'Describes the event category',
  `guest_Count` int(255) UNSIGNED DEFAULT NULL COMMENT 'Number of attendees',
  `event_Location` varchar(255) NOT NULL COMMENT 'Venue or location name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule_booking`
--

INSERT INTO `schedule_booking` (`sched_Id`, `customer_Id`, `date`, `start`, `end`, `event_Type`, `guest_Count`, `event_Location`) VALUES
(1, 1, '2025-01-17', '12:00:00.982000', '11:30:00.551000', 'Wedding Receptions', 100, 'Binangonan, Rizal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'sample@gmail.com', 'sample123'),
(2, 'customer@gmail.com', '$2y$10$5ae/LDr5I4H1kW/1UoeVyuCdYNZ.BJtYLLkSM1z1x.KzbapwhAPiy'),
(3, 'admin@gmail.com', 'admin123'),
(4, 'kobe@gmail.com', '$2y$10$dr45gIiGxi02oU11w5xBzeMH5cklW0PVS3LblLMav1iX6Vzk/M21e'),
(7, 'mark@gmail.com', '$2y$10$fMa7xKEcpd4fXxus.wcd4eaWdO5O2RvcXQe5ez88OKF63V1hh1SBW'),
(8, 'linda@gmail.com', '$2y$10$eSssUq73.eGel61hElMOpuq9AHOVmY./9gKS64TiwMsUthB3HIjEq'),
(10, 'joshua@gmail.com', '$2y$10$HzCJOTRHT0LnvODhvd24E.avsxucj6JlUeT0ENB77PuK1coaxDkxi'),
(13, 'ronald@gmail.com', '$2y$10$97LLYbdQxS1rpOFPBHXiAusm3v.DPPvMOlQWKIdx.bXMUECEbpG12'),
(19, 'bulas@gmail.com', '$2y$10$HzBstcqej7BW8LUpuJe.M.kf0ITyDE1lhsz0VemiPEPQR/JvfNxwu'),
(24, 'lucy@gmail.com', '$2y$10$6ek0PianQZ5ShYlLiWVwLupiI0Ytd89pFyH2LImOQXweNzctVa49G'),
(25, 'test@gmail.com', '$2y$10$/dJZfMWE4ood9wLYLKy5/ufj253K4UPRPySgzxfu2n87f0tBNr03q'),
(30, 'sabrina@gmail.com', '$2y$10$2vndA7all3T/1wBVGPn35.e3fW4sdWoYrHAVVP.4y3ITGdaaSF6fa'),
(33, 'last@gmail.com', '$2y$10$cMyYqf5FxRaXTkQvTsw4O.aReVsdNAq.QqiV34vxiKTirXJzzTLN6'),
(35, 'tin@gmail.com', '$2y$10$whc5YUe4lStw1H0sHjykg.MOcUdgZiommZgQRsvXM/yJjJ8r2TgSq'),
(36, 'cd@gmail.com', '$2y$10$aF5/PrZruaevIBWipgSCxeVpX0E7i3gERk.6mvRdpfEYti/nibzxy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_booking`
--
ALTER TABLE `schedule_booking`
  ADD PRIMARY KEY (`sched_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schedule_booking`
--
ALTER TABLE `schedule_booking`
  MODIFY `sched_Id` int(25) NOT NULL AUTO_INCREMENT COMMENT 'Auto-increment for each event', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
