-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 07:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `constants_about`
--

CREATE TABLE `constants_about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `instruction` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `constants_about`
--

INSERT INTO `constants_about` (`id`, `title`, `instruction`, `text`) VALUES
(1, 'heading', '', 'Your One-Stop Creative Solution'),
(2, 'text', '', 'Hey there <i class=\"fa-regular fa-face-smile-wink\"></i>, I\'m Denzel Go, a passionate creative professional specializing in 𝐯𝐢𝐝𝐞𝐨 𝐞𝐝𝐢𝐭𝐢𝐧𝐠, 𝐠𝐫𝐚𝐩𝐡𝐢𝐜 𝐝𝐞𝐬𝐢𝐠𝐧, and 𝐰𝐞𝐛 𝐝𝐞𝐯𝐞𝐥𝐨𝐩𝐦𝐞𝐧𝐭/𝐝𝐞𝐬𝐢𝐠𝐧.. \n<br>\nSince 2018, I\'ve been weaving my expertise across these dynamic fields, constantly exploring new avenues of creativity. Beyond the digital realm, I find my rhythm in playing 𝐦𝐮𝐬𝐢𝐜𝐚𝐥 𝐢𝐧𝐬𝐭𝐫𝐮𝐦𝐞𝐧𝐭𝐬, where melodies become my sanctuary and inspiration. \n<br>\nLet\'s collaborate and bring our combined talents to life in your next project! <i class=\"fa-regular fa-handshake\"></i>'),
(3, 'picture', 'https://www.youtube.com/watch?v=aFw8Q4KuX9Y', 'https://i.ibb.co/hCD4JRd/plv-denz.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `constants_about`
--
ALTER TABLE `constants_about`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `constants_about`
--
ALTER TABLE `constants_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
