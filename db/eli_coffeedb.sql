-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2025 at 03:47 PM
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
(2, 'customer@gmail.com', '$2y$10$5ae/LDr5I4H1kW/1UoeVyuCdYNZ.BJtYLLkSM1z1x.KzbapwhAPiy');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `schedule_booking`
--
ALTER TABLE `schedule_booking`
  MODIFY `sched_Id` int(25) NOT NULL AUTO_INCREMENT COMMENT 'Auto-increment for each event', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
