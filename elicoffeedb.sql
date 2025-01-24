-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2025 at 09:24 PM
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
-- Database: `elicoffeedb`
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
(5, 'sej', 'sej@gmail.com', '$2y$10$CZg91iLcGKA6TDg24G4gveSKcSfDv5TAJVGy1SPWIBtkyqQR9xo92'),
(6, 'liam', 'liam@gmail.com', '$2y$10$890R/SkePG3XBrONw4mUQeKynQubKWIGmLLUP8uuQMkjHAEnG36DG'),
(7, 'mariz', 'mariz@gmail.com', '$2y$10$e0YpSc2Z0QUVu6mP/0qU.OtLykaSFd2PdPONut6nIM2I1MbeEhvN6');

-- --------------------------------------------------------

--
-- Table structure for table `calendar_events`
--

CREATE TABLE `calendar_events` (
  `id` int(11) NOT NULL,
  `event_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `guest_volume` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calendar_events`
--

INSERT INTO `calendar_events` (`id`, `event_date`, `start_time`, `end_time`, `event_type`, `guest_volume`, `location`, `comments`) VALUES
(32, '2025-01-17', '03:44:00', '15:44:00', 'Swimming', 10, 'DAZSMA', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sold` int(11) DEFAULT 0,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_img`, `product_name`, `category`, `sold`, `price`) VALUES
(45, '6789fba86077e.png', 'Mocha', 'coffee', 4, 300.00),
(46, '6789fbb894339.png', 'Espresso', 'coffee', 2, 350.00),
(47, '6789fbcc38a20.png', 'Latte', 'coffee', 1, 100.00),
(48, '6789fcd5e8567.png', 'iced milk coffee', 'tea', 1, 120.00),
(49, '6789fcef6ea0b.png', 'iced milk boba', 'tea', 2, 130.00),
(50, '6789fd02a2ce2.png', 'iced milk choco', 'tea', 1, 150.00),
(52, '6789fd2d84819.png', 'iced milk matcha', 'tea', 1, 365.00);

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE `supplies` (
  `id` int(11) NOT NULL,
  `supply` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `supplies`
--

INSERT INTO `supplies` (`id`, `supply`, `quantity`) VALUES
(1, 'cups', 50),
(2, 'straw', 100),
(3, 'cups', 50),
(4, 'straw', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `code`, `reset_token`, `reset_expires`) VALUES
(1, 'sample@gmail.com', 'sample123', 0, NULL, NULL),
(2, 'customer@gmail.com', '$2y$10$5ae/LDr5I4H1kW/1UoeVyuCdYNZ.BJtYLLkSM1z1x.KzbapwhAPiy', 0, NULL, NULL),
(3, 'admin@gmail.com', 'admin123', 0, NULL, NULL),
(4, 'kobe@gmail.com', '$2y$10$dr45gIiGxi02oU11w5xBzeMH5cklW0PVS3LblLMav1iX6Vzk/M21e', 0, NULL, NULL),
(7, 'mark@gmail.com', '$2y$10$fMa7xKEcpd4fXxus.wcd4eaWdO5O2RvcXQe5ez88OKF63V1hh1SBW', 0, NULL, NULL),
(8, 'linda@gmail.com', '$2y$10$eSssUq73.eGel61hElMOpuq9AHOVmY./9gKS64TiwMsUthB3HIjEq', 0, NULL, NULL),
(10, 'joshua@gmail.com', '$2y$10$HzCJOTRHT0LnvODhvd24E.avsxucj6JlUeT0ENB77PuK1coaxDkxi', 0, NULL, NULL),
(13, 'ronald@gmail.com', '$2y$10$97LLYbdQxS1rpOFPBHXiAusm3v.DPPvMOlQWKIdx.bXMUECEbpG12', 0, NULL, NULL),
(19, 'bulas@gmail.com', '$2y$10$HzBstcqej7BW8LUpuJe.M.kf0ITyDE1lhsz0VemiPEPQR/JvfNxwu', 0, NULL, NULL),
(24, 'lucy@gmail.com', '$2y$10$6ek0PianQZ5ShYlLiWVwLupiI0Ytd89pFyH2LImOQXweNzctVa49G', 0, NULL, NULL),
(25, 'test@gmail.com', '$2y$10$o3Wd7.tlonwxExCOJwyPCeMDeiiuDfwnPsJsID63Og7rMMA0bYkui', 0, NULL, NULL),
(30, 'sabrina@gmail.com', '$2y$10$2vndA7all3T/1wBVGPn35.e3fW4sdWoYrHAVVP.4y3ITGdaaSF6fa', 0, NULL, NULL),
(33, 'last@gmail.com', '$2y$10$cMyYqf5FxRaXTkQvTsw4O.aReVsdNAq.QqiV34vxiKTirXJzzTLN6', 0, NULL, NULL),
(35, 'tin@gmail.com', '$2y$10$REY0h31uTU01RiM2FgeH6em/PPy.qZqLbggKdnVe8Yjo3x/QcrxEe', 0, NULL, NULL),
(36, 'cd@gmail.com', '$2y$10$aF5/PrZruaevIBWipgSCxeVpX0E7i3gERk.6mvRdpfEYti/nibzxy', 0, NULL, NULL),
(37, 'wait@gmail.com', '$2y$10$P5IRLT.Spg8ug9hiSVOUqOO7rSlazYBdu2RVa/Zwpsd87TjZ97md6', 0, NULL, NULL),
(38, 'gl@gmail.com', '$2y$10$hsjB.k9DHU2DwJs27iEv/u2qx24QNaAw4C.etd74iK/JGwrU4XGZu', 0, NULL, NULL),
(39, 'wa@gmail.com', '$2y$10$aR5C9sXKFS6G84uoLT4l2uh5PLfZaw8gH6WjHK9oXXf/8KZZJLk2e', 0, NULL, NULL),
(43, 'kobefajardo0995@gmail.com', '$2y$10$NBWCKSdWVzxfntRQ0nG76uperI4TTMtgWGlMdblUS.FS4B3gkzu1G', 0, '476315', '2025-01-24 02:31:09'),
(44, 'kobefajardo2002@gmail.com', '$2y$10$XMSa9fSuyJBZKaPpuYjIxeqRlfftSeUD7IGKJ/fQb9fjKyv9qMD3C', 0, '506692', '2025-01-24 01:34:29'),
(45, 'kobefajardo09@gmail.com', '$2y$10$RP0vfgnWFmlnR3ULcNNWlOgmvix3G3f/hnoPoV3tNOp4Yl7o60XNe', 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendar_events`
--
ALTER TABLE `calendar_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `calendar_events`
--
ALTER TABLE `calendar_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `supplies`
--
ALTER TABLE `supplies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
