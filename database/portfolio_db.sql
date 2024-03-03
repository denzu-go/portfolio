-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2024 at 02:18 PM
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
(1, 'heading', '', 'Your One-Stop Creative Solution'),
(2, 'text', '', 'Hey there <i class=\"fa-regular fa-face-smile-wink\"></i>, I\'m Denzel Go, a passionate creative professional specializing in 𝐯𝐢𝐝𝐞𝐨 𝐞𝐝𝐢𝐭𝐢𝐧𝐠, 𝐠𝐫𝐚𝐩𝐡𝐢𝐜 𝐝𝐞𝐬𝐢𝐠𝐧, and 𝐰𝐞𝐛 𝐝𝐞𝐯𝐞𝐥𝐨𝐩𝐦𝐞𝐧𝐭/𝐝𝐞𝐬𝐢𝐠𝐧.. \n<br>\nSince 2018, I\'ve been weaving my expertise across these dynamic fields, constantly exploring new avenues of creativity. Beyond the digital realm, I find my rhythm in playing 𝐦𝐮𝐬𝐢𝐜𝐚𝐥 𝐢𝐧𝐬𝐭𝐫𝐮𝐦𝐞𝐧𝐭𝐬, where melodies become my sanctuary and inspiration. \n<br>\nLet\'s collaborate and bring our combined talents to life in your next project! <i class=\"fa-regular fa-handshake\"></i>'),
(3, 'picture', 'paste image address link', 'https://img.hotimg.com/plv-denz.png');

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
(4, '<i class=\"fa-solid fa-plane-lock\"></i>', '@denzel.go.31', 'facebook.com', '2024-03-03 09:13:26'),
(5, '<i class=\"fa-solid fa-plane-lock\"></i>', 'instagrame', '', '2024-03-03 09:13:32');

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
(1, 'footer text', 'To God be all the Glory');

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
(1, 'name logo', '', 'Denzu'),
(2, 'welcome', '', 'Welcome </i> <i class=\"fa-regular fa-face-laugh-beam\"></i><i class=\"fa-regular fa-hand-peace\"></i>'),
(3, 'texts below welcome', '', 'This is a Hub of Innovation and Digital Excellence <i class=\"fa-solid fa-fire\"></i>'),
(4, 'button text', '', 'Get in touch'),
(5, 'background image', 'https://www.facebook.com/', 'https://img.hotimg.com/Untitled-design-19833cfa6951c0e8d.png');

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
(4, '<i class=\"fa-solid fa-plane\"></i>', NULL, 'Video', 'blah blach', 'facebook.com', '2024-02-26 11:58:53'),
(7, '<i class=\"fa-solid fa-plane-departure\"></i>', NULL, 'title', 'text ', '', '2024-03-03 09:11:03');

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
(3, 'https://i.ibb.co/N7Y77RY/denzel-cover-photo-upwork-2.png', 'Denzel', 'CEO', 'lupet', '2024-03-03 09:12:40');

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
(1, '&#039;levona', 1, '2024-02-25 16:00:00'),
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

--
-- Dumping data for table `social_media_outputs`
--

INSERT INTO `social_media_outputs` (`id`, `link`, `is_visible`, `date_added`, `client_id`) VALUES
(6, '\"asd', 1, '2024-02-26 16:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE `tutorials` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutorials`
--

INSERT INTO `tutorials` (`id`, `title`, `link`) VALUES
(1, 'video', 'https://www.youtube.com/watch?v=IGWtNqeZMp0'),
(2, 'graphics', 'https://www.youtube.com/watch?v=G86V5loIsSM'),
(3, 'fontawesome', 'https://www.youtube.com/watch?v=G86V5loIsSM');

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
(86, 'long form', 1, '2024-03-25 16:00:00'),
(89, 'promotional', 1, '2024-03-24 16:00:00'),
(90, 'reels', 1, '2024-03-26 16:00:00'),
(91, 'slideshow', 1, '2024-03-03 13:02:53');

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
(83, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mU-ipmYue9o?si=uh3D2nqUHGNHZF4K\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, 0, '2024-02-29 16:00:00', 86),
(87, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/aW35-_8Ge5I?si=cEgY_DDTf0CKW1US\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, 0, '2024-03-01 14:46:04', 86),
(88, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ddUT8WusSOY?si=y2rKbMLNgn8Xz8Fn\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, 0, '2024-03-01 14:46:14', 86),
(91, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/8VCo0zqXF1Y?si=2cSOp_1YBfbSTSDY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0, 0, '2024-02-29 16:00:00', 86),
(92, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/KaHgznO8n2U?si=mz3C1Ucr_kzjepOU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, 0, '2024-03-24 16:00:00', 86),
(93, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/5ZEOpRxBSBE?si=b82Ys7pS1el-kXoc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, 0, '2024-03-24 16:00:00', 86),
(94, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/iO83qlbir9Q?si=l7P5qeCOnDxrQfuR\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, 0, '2024-03-24 16:00:00', 86),
(95, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/YnFQLxXXb1A?si=uvUsGo6Fk12Vg60Z\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, 0, '2024-03-01 14:51:08', 89),
(96, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/BGcXtNLAWwA?si=jiiP6TAKrdjMz5Yg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, 0, '2024-03-29 16:00:00', 89),
(97, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/YPNp-Il1VJc?si=XRFxEheXKYvdLniW\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, 0, '2024-03-27 16:00:00', 89),
(98, 'nrYzRYkRMGk', 1, 1, '2024-03-26 16:00:00', 90),
(101, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/YWZ7xdqyVKo?si=13MyM5tSurdTPI4F\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, 0, '2024-02-29 16:00:00', 86),
(102, 'YDlBQYXoUGM', 1, 1, '2024-03-03 12:54:57', 90),
(103, '0OtazOR_mug', 0, 1, '2024-03-02 16:00:00', 90),
(104, 'W_aYiiLz7SI', 1, 1, '2024-03-26 16:00:00', 90),
(105, 'ZAQA2M4mFkI', 1, 1, '2024-03-27 16:00:00', 90),
(106, 'IoqFHOEnUJ0', 1, 1, '2024-03-03 12:57:01', 90),
(107, 'dzL5BqYAvlM', 1, 1, '2024-03-03 12:57:10', 90),
(108, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/00V_iDjPZi0?si=5szJdKqEAEEuZqOk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, 0, '2024-03-03 13:02:59', 91);

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
-- Indexes for table `tutorials`
--
ALTER TABLE `tutorials`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `constants_testimonials`
--
ALTER TABLE `constants_testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `video_clients`
--
ALTER TABLE `video_clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `video_outputs`
--
ALTER TABLE `video_outputs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

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
