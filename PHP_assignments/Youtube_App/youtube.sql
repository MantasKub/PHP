-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 01:58 PM
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
-- Database: `youtube`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `thumnail_url` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `name`, `video_url`, `thumnail_url`, `created_at`) VALUES
(1, 'Fishing', '', '', '2023-03-01 10:04:11'),
(2, 'Basketball', '', '', '2023-03-01 10:22:19'),
(3, 'Music', '', '', '2023-03-01 10:22:23'),
(4, 'Movies', '', '', '2023-03-01 10:22:24'),
(5, 'Painting', '', '', '2023-03-01 10:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `com_name` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `com_name`, `comment`) VALUES
(74, '', ''),
(75, 'Andrius', 'Puiku'),
(76, 'Marius', 'Blogai'),
(77, 'Arturas', 'Nieko gero'),
(78, '', ''),
(79, '', ''),
(80, '', ''),
(81, 'asd', 'ad'),
(82, '', ''),
(83, '', ''),
(84, 'asd', 'asd'),
(85, '', ''),
(86, '', ''),
(87, '', ''),
(88, '', ''),
(89, '', ''),
(90, '', ''),
(91, '', ''),
(92, '', ''),
(93, '', ''),
(94, '', ''),
(95, '', ''),
(96, '', ''),
(97, '', ''),
(98, '', ''),
(99, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(6, 'Mantas', 'mkubiliunas@gmail.com', '12345', '2023-03-09 11:11:21'),
(7, 'Tadas', 'tadas@gmail.com', 'tadas', '2023-03-09 13:13:48'),
(8, 'Paulius', 'paulius@gmail.com', 'paulius', '2023-03-09 13:48:03'),
(9, 'Marius', 'marius@gmail.com', 'marius', '2023-03-09 13:53:07'),
(10, 'Tomas', 'tomas@gmail.com', 'tomas', '2023-03-09 13:55:06'),
(11, 'Donatas', 'donatas@gmail.com', 'donatas', '2023-03-09 14:15:33'),
(12, 'Juozas', 'juozas@gmail.com', 'juozas', '2023-03-09 14:30:44'),
(13, 'Arturas', 'arturas@gmail.com', 'arturas', '2023-03-13 15:25:22');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `thumbnail_url` varchar(255) NOT NULL,
  `iframe` varchar(500) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `video_url`, `thumbnail_url`, `iframe`, `category_id`, `created_at`) VALUES
(1, '21 Savage - a lot (Official Video) ft. J. Cole\n', 'https://www.youtube.com/embed/DmWWqogr_r8', 'https://img.youtube.com/vi/DmWWqogr_r8/maxresdefault.jpg', ' <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/DmWWqogr_r8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 3, '2023-02-28 11:07:15'),
(2, 'Low Hum - Comatose\n', 'https://www.youtube.com/embed/JRLFr6THaTI', 'https://img.youtube.com/vi/JRLFr6THaTI/maxresdefault.jpg', '', 3, '2023-02-28 11:07:41'),
(3, 'Gorillaz - Feel Good Inc. (Official Video)\n', 'https://www.youtube.com/embed/HyHNuVaZJ-k', 'https://img.youtube.com/vi/HyHNuVaZJ-k/maxresdefault.jpg', '', 3, '2023-02-28 11:11:42'),
(27, 'Kendrick Lamar - Money Trees', 'https://www.youtube.com/watch?v=qu8CyoVcU1A&list=RDGMEMHDXYb1_DDSgDsobPsOFxpAVMqu8CyoVcU1A&index=1', 'http://i3.ytimg.com/vi/qu8CyoVcU1A/hqdefault.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/qu8CyoVcU1A\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, '2023-03-17 14:31:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video category` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `video category` FOREIGN KEY (`category_id`) REFERENCES `categorie` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
