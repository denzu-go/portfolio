-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2024 at 07:10 AM
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
-- Table structure for table `brand_logo_clients`
--

CREATE TABLE `brand_logo_clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `is_visible` tinyint(1) NOT NULL DEFAULT 1,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand_logo_clients`
--

INSERT INTO `brand_logo_clients` (`client_id`, `client_name`, `is_visible`, `date_added`) VALUES
(1, 'f', 1, '2024-02-26 11:46:42');

-- --------------------------------------------------------

--
-- Table structure for table `brand_logo_outputs`
--

CREATE TABLE `brand_logo_outputs` (
  `id` int(11) NOT NULL,
  `link` text DEFAULT NULL,
  `is_visible` tinyint(1) NOT NULL DEFAULT 1,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `client_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand_logo_outputs`
--

INSERT INTO `brand_logo_outputs` (`id`, `link`, `is_visible`, `date_added`, `client_id`) VALUES
(1, 'https://scontent.fmnl33-3.fna.fbcdn.net/v/t39.30808-6/429668849_379657438269069_1790110676605181067_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=dd5e9f&_nc_eui2=AeHiaZjKQuxTIpa13tsSrURuqRF-JzsH4rKpEX4nOwfishCOSzvttcypeH_cr7wgZ3H40d-fcfkqw9Nv0JpEZuKt&_nc_ohc=Ki14IdWNT00AX_-QUeU&_nc_ht=scontent.fmnl33-3.fna&oh=00_AfDJNCEeP6dpL7u6Ocy5dLBeFZSq-7od3Fp0uEgxSYQnRw&oe=65E06D62', 1, '2024-02-25 16:00:00', 1),
(2, 'dfs', 1, '2024-02-26 16:00:00', 1),
(3, 'sdf', 1, '2024-02-26 16:00:00', 0);

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
(1, 'heading', 'paragraph about you', 'dasdasdasd'),
(2, 'text', NULL, 'ako si'),
(3, 'picture', NULL, 'https://img.hotimg.com/WIN_20240217_22_36_15_Pro.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `constants_contacts`
--

CREATE TABLE `constants_contacts` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `constants_contacts`
--

INSERT INTO `constants_contacts` (`id`, `icon`, `text`, `link`, `date_added`) VALUES
(1, '<i class=\"fa-solid fa-plane\"></i>', 'basdbhasd', 'basdbhasd', '2024-02-26 12:56:31'),
(3, '<i class=\"fa-solid fa-plane\"></i>', 'sa', 'das', '2024-02-26 13:00:56');

-- --------------------------------------------------------

--
-- Table structure for table `constants_footer`
--

CREATE TABLE `constants_footer` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `constants_footer`
--

INSERT INTO `constants_footer` (`id`, `title`, `text`) VALUES
(1, 'footer text', 'Thank you <3');

-- --------------------------------------------------------

--
-- Table structure for table `constants_home`
--

CREATE TABLE `constants_home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `instruction` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `constants_home`
--

INSERT INTO `constants_home` (`id`, `title`, `instruction`, `text`) VALUES
(1, 'name logo', 'asdad', 'Denzu'),
(2, 'welcome', 'text', 'Hello!'),
(3, 'texts below welcome', 'text', 'Ako si Nicole'),
(4, 'button text', 'text', 'contact m1e'),
(5, 'background image', 'image link address', 'https://scontent.fmnl33-2.fna.fbcdn.net/v/t39.30808-6/411815549_2730494337102743_3580538383150399030_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=783fdb&_nc_eui2=AeEmQJnHv4u00d49ydu4EN5oW2XX4Dj-oh9bZdfgOP6iHxRSGUfw2LnIWoiOm0kr3kVrx-Z-RcQgjRej6ApXWnim&_nc_ohc=UXvWT0iem0oAX9mxYj6&_nc_ht=scontent.fmnl33-2.fna&oh=00_AfDNXa_gG40IRSXAnPmyDGhJ4WSubRj8Fx7TcKLB5E33-Q&oe=65E28F90');

-- --------------------------------------------------------

--
-- Table structure for table `constants_services`
--

CREATE TABLE `constants_services` (
  `id` int(11) NOT NULL,
  `icon` text DEFAULT NULL,
  `instruction` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `constants_services`
--

INSERT INTO `constants_services` (`id`, `icon`, `instruction`, `title`, `text`, `link`, `date_added`) VALUES
(4, '<i class=\"fa-solid fa-film\"></i>', NULL, 'Video Editing', 'blah bla ha asdashdjasdjasdhj', 'https://www.facebook.com/', '2024-02-26 11:58:53'),
(5, '<i class=\"fa-solid fa-wand-magic-sparkles\"></i>', NULL, 'Graphic Designing', 'yowyowyowyow', '', '2024-02-26 11:59:44'),
(6, '<i class=\"fa-solid fa-xmark\"></i>', NULL, 'asd', 'asd', 'asd', '2024-02-26 12:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `constants_testimonials`
--

CREATE TABLE `constants_testimonials` (
  `id` int(11) NOT NULL,
  `icon` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `testimony` text DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `constants_testimonials`
--

INSERT INTO `constants_testimonials` (`id`, `icon`, `name`, `position`, `testimony`, `date_added`) VALUES
(1, 'https://scontent.fmnl33-2.fna.fbcdn.net/v/t39.30808-6/428617500_122122533974177150_111028998910544720_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=c42490&_nc_eui2=AeH3WeA7mYLfsUcyt5eAiY3mR8-zUV3y4YdHz7NRXfLhh-PpVhvVmM_cvL_MoigXNxjHhLQXbugd9Wyv-1hhcLFa&_nc_ohc=Abw8ed6yzHUAX_-csCJ&_nc_ht=scontent.fmnl33-2.fna&oh=00_AfBxqM5O58BOxY7RH3ecBEhtjb-BbJDxvPWdQBeqzDaC3A&oe=65E179AF', 'babbaab', 'babbaab', 'testiasdasdbabbababaa', '2024-02-26 12:22:53'),
(2, 'kl', 'ASDASDASD', 'klkl', 'kkklk', '2024-02-26 12:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `graphic_clients`
--

CREATE TABLE `graphic_clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `is_visible` tinyint(1) NOT NULL DEFAULT 1,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `graphic_clients`
--

INSERT INTO `graphic_clients` (`client_id`, `client_name`, `is_visible`, `date_added`) VALUES
(1, 'client sa grphic', 1, '2024-02-22 14:49:44');

-- --------------------------------------------------------

--
-- Table structure for table `graphic_outputs`
--

CREATE TABLE `graphic_outputs` (
  `id` int(11) NOT NULL,
  `link` text DEFAULT NULL,
  `is_visible` tinyint(1) NOT NULL DEFAULT 1,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `client_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `graphic_outputs`
--

INSERT INTO `graphic_outputs` (`id`, `link`, `is_visible`, `date_added`, `client_id`) VALUES
(7, 'asd', 1, '2024-02-27 06:05:34', 0),
(8, 'asd', 1, '2024-02-27 06:05:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `social_media_clients`
--

CREATE TABLE `social_media_clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `is_visible` tinyint(1) NOT NULL DEFAULT 1,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_media_clients`
--

INSERT INTO `social_media_clients` (`client_id`, `client_name`, `is_visible`, `date_added`) VALUES
(1, 'levona', 1, '2024-02-25 16:00:00'),
(2, 'BMI', 1, '2024-02-25 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `social_media_outputs`
--

CREATE TABLE `social_media_outputs` (
  `id` int(11) NOT NULL,
  `link` text DEFAULT NULL,
  `is_visible` tinyint(1) NOT NULL DEFAULT 1,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `client_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `video_clients`
--

CREATE TABLE `video_clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `is_visible` tinyint(1) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video_clients`
--

INSERT INTO `video_clients` (`client_id`, `client_name`, `is_visible`, `date_added`) VALUES
(86, 'reels', 1, '2024-02-27 06:08:50'),
(87, 'long form', 1, '2024-02-27 06:08:53');

-- --------------------------------------------------------

--
-- Table structure for table `video_outputs`
--

CREATE TABLE `video_outputs` (
  `id` int(11) NOT NULL,
  `link` text DEFAULT NULL,
  `is_visible` tinyint(4) DEFAULT 1,
  `is_portrait` tinyint(4) NOT NULL DEFAULT 0,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `client_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video_outputs`
--

INSERT INTO `video_outputs` (`id`, `link`, `is_visible`, `is_portrait`, `date_added`, `client_id`) VALUES
(46, 'MBaVan03m-k', 1, 1, '2024-02-26 16:00:00', 86),
(47, 'https://www.youtube.com/embed/74pvXZ_SbqM?si=jNB60LvxV7Z3orgp', 1, 0, '2024-02-27 06:09:17', 87);

-- --------------------------------------------------------

--
-- Table structure for table `web_clients`
--

CREATE TABLE `web_clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `is_visible` tinyint(1) NOT NULL DEFAULT 1,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web_clients`
--

INSERT INTO `web_clients` (`client_id`, `client_name`, `is_visible`, `date_added`) VALUES
(1, 'dsa', 1, '2024-02-27 06:07:55');

-- --------------------------------------------------------

--
-- Table structure for table `web_outputs`
--

CREATE TABLE `web_outputs` (
  `id` int(11) NOT NULL,
  `link` text DEFAULT NULL,
  `is_visible` tinyint(1) NOT NULL DEFAULT 1,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `client_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web_outputs`
--

INSERT INTO `web_outputs` (`id`, `link`, `is_visible`, `date_added`, `client_id`) VALUES
(1, 'https://scontent.fmnl33-3.fna.fbcdn.net/v/t39.30808-6/429668849_379657438269069_1790110676605181067_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=dd5e9f&_nc_eui2=AeHiaZjKQuxTIpa13tsSrURuqRF-JzsH4rKpEX4nOwfishCOSzvttcypeH_cr7wgZ3H40d-fcfkqw9Nv0JpEZuKt&_nc_ohc=Ki14IdWNT00AX_-QUeU&_nc_ht=scontent.fmnl33-3.fna&oh=00_AfDJNCEeP6dpL7u6Ocy5dLBeFZSq-7od3Fp0uEgxSYQnRw&oe=65E06D62', 1, '2024-02-25 16:00:00', 0),
(2, 'asd', 1, '2024-02-27 06:07:50', 0),
(3, 'd', 1, '2024-02-27 06:07:58', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand_logo_clients`
--
ALTER TABLE `brand_logo_clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `brand_logo_outputs`
--
ALTER TABLE `brand_logo_outputs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `constants_about`
--
ALTER TABLE `constants_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `constants_contacts`
--
ALTER TABLE `constants_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `constants_footer`
--
ALTER TABLE `constants_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `constants_home`
--
ALTER TABLE `constants_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `constants_services`
--
ALTER TABLE `constants_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `constants_testimonials`
--
ALTER TABLE `constants_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graphic_clients`
--
ALTER TABLE `graphic_clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `graphic_outputs`
--
ALTER TABLE `graphic_outputs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media_clients`
--
ALTER TABLE `social_media_clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `social_media_outputs`
--
ALTER TABLE `social_media_outputs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_clients`
--
ALTER TABLE `video_clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `video_outputs`
--
ALTER TABLE `video_outputs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_clients`
--
ALTER TABLE `web_clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `web_outputs`
--
ALTER TABLE `web_outputs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand_logo_clients`
--
ALTER TABLE `brand_logo_clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand_logo_outputs`
--
ALTER TABLE `brand_logo_outputs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `constants_about`
--
ALTER TABLE `constants_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `constants_contacts`
--
ALTER TABLE `constants_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `constants_footer`
--
ALTER TABLE `constants_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `constants_home`
--
ALTER TABLE `constants_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `constants_services`
--
ALTER TABLE `constants_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `constants_testimonials`
--
ALTER TABLE `constants_testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `graphic_clients`
--
ALTER TABLE `graphic_clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `graphic_outputs`
--
ALTER TABLE `graphic_outputs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `social_media_clients`
--
ALTER TABLE `social_media_clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `social_media_outputs`
--
ALTER TABLE `social_media_outputs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `video_clients`
--
ALTER TABLE `video_clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `video_outputs`
--
ALTER TABLE `video_outputs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `web_clients`
--
ALTER TABLE `web_clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `web_outputs`
--
ALTER TABLE `web_outputs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
