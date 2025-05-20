-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2025 at 09:31 AM
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
-- Database: `db_movieworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `phone`, `message`, `submitted_at`) VALUES
(1, 'Melvin Kent Andajer Celeste', 'melvinkentc@gmail.com', '09302531696', 'test', '2025-05-19 09:29:04'),
(2, 'Melvin Kent Andajer Celeste', 'melvinkentc@gmail.com', '222', 'aedw', '2025-05-19 09:29:24'),
(3, 'Melvin Kent Andajer Celeste', 'melvinkentc@gmail.com', '09302531696', 'sss', '2025-05-19 09:31:46'),
(4, 'Melvin Kent Andajer Celeste', 'melvinkentc@gmail.com', '09302531696', 'test', '2025-05-19 09:32:20'),
(5, 'Melvin Kent Andajer Celeste', 'melvinkentc@gmail.com', '09302531696', 'test', '2025-05-19 09:36:53'),
(6, 'Melvin Kent Andajer Celeste', 'melvinkentc@gmail.com', '09230200202', 'test', '2025-05-19 09:38:38'),
(7, 'Melvin Kent Andajer Celeste', 'melvinkentc@gmail.com', 'test', 'test', '2025-05-19 09:40:55'),
(8, 'Melvin Kent Andajer Celeste', 'melvinkentc@gmail.com', '09230200202', 'test', '2025-05-19 09:41:05'),
(9, 'Cath', 'cathyfinez@gmail.com', '09302531696', 'Cath', '2025-05-19 09:41:23'),
(10, 'Melvin Kent Andajer Celeste', 'melvinkentc@gmail.com', '09302531696', 'test', '2025-05-19 09:41:49'),
(11, 'Melvin Kent Andajer Celeste', 'melvinkentc@gmail.com', '09302531696', 'asdas', '2025-05-19 09:45:31');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `sypnosis` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_registered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `username`, `email`, `password`, `date_registered`) VALUES
(1, 'Ronnel Brosola', 'rnnlbrsl', 'ronnel.brosola@gmail.com', '$2y$10$LqnzWMevGV7TsyXTvjN8OeryPX5xXCsbTbXeaX.fdyZNsrktdTtii', '0000-00-00 00:00:00'),
(2, 'Catherine Finez', 'cathy', 'catherinefinez@gmail.com', '$2y$10$yY2tVvoqS5HbCsKjO66bqOnGmu4BP2oURpyCBhYK3EFzzSxMGdS1u', '0000-00-00 00:00:00'),
(3, 'Melvin Kent Andajer Celeste', 'mkac02', 'melvinkentc@gmail.com', '$2y$10$elHxo0kgWBqZdUSkl5bQQeY4Be0xAhVEhII3p4OGx2w7IKNbKZE7i', '0000-00-00 00:00:00'),
(4, 'aki', 'aki', 'aki@gmail.com', '$2y$10$hdMEvKr3cVIYuZNS2XWtj.6joRyYAnD26Mb/WqeZlP5XT6VXE5GOa', '0000-00-00 00:00:00'),
(5, 'aki', 'akirah', 'aki@gmail.com', '$2y$10$sC7eqiLA5iAvLcN7jzE.VexjWLjt/g0TdZRmgsLJxByEo7AXyl6nu', '0000-00-00 00:00:00'),
(6, 'maomao', 'maomao', 'maomao@gmail.com', '$2y$10$s6Bph9YtLsjPFITmJLiaQO4cwDRHgZWiiNHgdsOpVF4bk.AGwPweG', '0000-00-00 00:00:00'),
(7, 'Melvin Kent Andajer Celeste', 'mkac02', 'melvinkentc@gmail.com', '$2y$10$JGlgcBTPfxcPsSaAUCoGUuRi05ORSpr3j5lZJtIdakxzrlfQAoTTK', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
