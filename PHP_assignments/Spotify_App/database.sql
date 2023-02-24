-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 02:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spotify`
--

-- --------------------------------------------------------

--
-- Table structure for table `playlists`
--

CREATE TABLE `playlists` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `playlists`
--

INSERT INTO `playlists` (`id`, `name`, `user_id`, `created_at`) VALUES
(23, 'Top hits', 1, '2023-02-24 15:35:04'),
(24, 'New singles', 1, '2023-02-24 15:35:20'),
(25, 'favorite from radio', 1, '2023-02-24 15:35:29'),
(31, 'GOLD', 1, '2023-02-24 15:38:22'),
(32, 'GOLD', 1, '2023-02-24 15:39:03'),
(33, ' Rock', 1, '2023-02-24 15:40:33');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `link` varchar(255) NOT NULL,
  `playlist_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `photo`, `name`, `author`, `album`, `year`, `link`, `playlist_id`, `created_at`) VALUES
(23, '1677244461.jpg', 'How You Remind Me', 'Nickleback	', 'Album	', 2008, 'https://www.youtube.com/watch?v=Aiay8I5IPB8&list=PLf5I0IFDNUysiIY4JDi5XEoC4QJbdSMHU&index=99', NULL, '2023-02-24 15:14:21'),
(24, '1677244636.jpeg', 'Kolorado vabalai	', 'Vytautas Kernagis', 'Vaikyste', 1997, 'https://www.youtube.com/watch?v=zOAhjWwEyO0', NULL, '2023-02-24 15:17:16'),
(25, '1677244868.jpg', 'Enter Sandman', 'Metallica', 'gold', 2003, 'ttps://www.youtube.com/watch?v=CD-E-LDc384', NULL, '2023-02-24 15:21:08'),
(26, '1677244934.jpg', 'Everlong	', 'Foo Fighters	', 'Fighter', 2008, 'https://www.youtube.com/watch?v=eBG7P-K-r1Y	', NULL, '2023-02-24 15:22:14');

-- --------------------------------------------------------

--
-- Table structure for table `song_playlist`
--

CREATE TABLE `song_playlist` (
  `id` int(11) NOT NULL,
  `song_id` int(11) NOT NULL,
  `playlist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `song_playlist`
--

INSERT INTO `song_playlist` (`id`, `song_id`, `playlist_id`) VALUES
(26, 23, 23),
(27, 24, 23),
(28, 25, 23),
(29, 26, 23),
(30, 24, 24),
(31, 26, 24),
(32, 23, 25),
(33, 24, 25),
(34, 25, 25),
(35, 26, 25),
(56, 23, 31),
(57, 24, 31),
(58, 25, 31),
(59, 26, 31),
(60, 23, 32),
(61, 24, 32),
(62, 25, 32),
(63, 26, 32),
(64, 25, 33),
(65, 26, 33);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(155) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `role`) VALUES
(1, 'Mantas', 'Kub', 'mkubiliunas@gmail.com', '4d67195efb8f4e2a43cf0e6dc1df3c30', 1),
(3, 'Will', 'Smith', 'vartotojas@gmail.com', '4a5a2a0ca560e48ca59b1c898ac5b31b', 0),
(4, 'Tony', 'Brasko', 'brasko@gmail.com', '4a5a2a0ca560e48ca59b1c898ac5b31b', 0),
(5, 'Johny', 'DiAngelo', 'Angelo@gmail.com', '4a5a2a0ca560e48ca59b1c898ac5b31b', 0),
(6, 'Freddy', 'Wally', 'wally@gmail.com', '4a5a2a0ca560e48ca59b1c898ac5b31b', 0),
(7, 'Andrius', 'Tapinas', 'mkubiliunas@gmail.com', 'fccd5e61da51f1f3abdcdd23fba8933e', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `playlists`
--
ALTER TABLE `playlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Dainu grojarasciai` (`playlist_id`);

--
-- Indexes for table `song_playlist`
--
ALTER TABLE `song_playlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Songs` (`song_id`),
  ADD KEY `Playlists` (`playlist_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `playlists`
--
ALTER TABLE `playlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `song_playlist`
--
ALTER TABLE `song_playlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `Dainu grojarasciai` FOREIGN KEY (`playlist_id`) REFERENCES `playlists` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `song_playlist`
--
ALTER TABLE `song_playlist`
  ADD CONSTRAINT `Playlists` FOREIGN KEY (`playlist_id`) REFERENCES `playlists` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `Songs` FOREIGN KEY (`song_id`) REFERENCES `songs` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
