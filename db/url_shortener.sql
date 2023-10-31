-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 10:14 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `url_shortener`
--

-- --------------------------------------------------------

--
-- Table structure for table `url_list`
--

CREATE TABLE `url_list` (
  `id` int(30) NOT NULL,
  `code` varchar(50) NOT NULL,
  `url_redirect` text NOT NULL,
  `redirects` int(30) NOT NULL DEFAULT 0,
  `last_browsed` datetime DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `url_list`
--

INSERT INTO `url_list` (`id`, `code`, `url_redirect`, `redirects`, `last_browsed`, `date_created`) VALUES
(1, 'qh0So43CnO', 'https://www.sourcecodester.com/php/14832/simple-form-builder-web-app-using-php-and-jquery-source-code.html', 1, '2021-06-17 15:45:28', '2021-06-17 15:40:44'),
(2, 'iauHq7GkCg', 'https://philnews.ph/2021/06/16/trese-theme-song-paagi-udd-netizens-react-udd-performance/', 1, '2021-06-17 16:07:04', '2021-06-17 15:40:57'),
(6, 'asYzIyROnr', 'https://philnews.ph/2021/06/17/delivery-rider-nabbed-for-illegal-after-being-flagged-down-in-checkpoint/', 1, '2021-06-17 15:57:39', '2021-06-17 15:57:30'),
(7, 'Rb9f5aYMJJ', 'https://philnews.ph/2021/06/17/ano-ang-kagitingan-kahulugan-at-halimbawa-nito/', 1, '2021-06-17 16:01:18', '2021-06-17 16:00:36'),
(8, 'qaPG7V9GVq', 'https://philnews.ph/2021/06/17/ano-ang-kagitingan-kahulugan-at-halimbawa-nito/', 0, NULL, '2021-06-17 16:12:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `url_list`
--
ALTER TABLE `url_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `url_list`
--
ALTER TABLE `url_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
