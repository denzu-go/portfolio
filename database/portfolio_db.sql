-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 07, 2024 at 04:32 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21953298_portfolio_denzel_db`
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
(2, 'CORE', 1, '2024-03-03 00:00:00'),
(3, 'Divine Skin', 1, '2024-03-06 00:00:00'),
(4, 'other logos', 1, '2024-03-02 00:00:00'),
(5, 'Shawarma Chum', 1, '2024-03-05 02:22:52'),
(6, 'StartUp', 1, '2024-03-04 00:00:00'),
(8, 'ArtArmouryCo', 1, '2024-03-07 00:00:00');

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
(4, 'https://i.ibb.co/DtGM1Bp/Firestarter-min-comp.png', 1, '2024-03-05 00:00:00', 2),
(5, 'https://i.ibb.co/mX0nmbr/Battleground-min-comp-2-comp.png', 1, '2024-03-05 00:00:00', 2),
(6, 'https://i.ibb.co/Mg1rMPY/mockup-comp.jpg', 1, '2024-03-05 00:00:00', 3),
(7, 'https://i.ibb.co/zS15TFq/mockup-2-day-cream-comp.jpg', 1, '2024-03-05 00:00:00', 3),
(8, 'https://i.ibb.co/BV4MKpj/mockup-1-comp.jpg', 1, '2024-03-05 00:00:00', 3),
(9, 'https://i.ibb.co/jZSYn05/mockup-design-3-soap-comp.png', 1, '2024-03-05 00:00:00', 3),
(12, 'https://i.ibb.co/XbH3DGQ/SC-Shawarma-Chum-logo-comp.jpg', 1, '2024-03-05 00:00:00', 5),
(13, 'https://i.ibb.co/DrQcRn8/SC-Shawarma-Chum-Poster-2-comp.jpg', 1, '2024-03-05 00:00:00', 5),
(14, 'https://i.ibb.co/k87yx7v/Start-Up-Digital-Services-1-comp.jpg', 1, '2024-03-05 00:00:00', 6),
(15, 'https://i.ibb.co/35XN29W/SDS-Feedback-Ching-comp.jpg', 1, '2024-03-05 00:00:00', 6),
(17, 'https://i.ibb.co/Q8Mm0BS/KDGRND-logo-copy-comp.png', 1, '2024-03-05 00:00:00', 4),
(22, 'https://i.ibb.co/WzWW1py/Outlaw-Props-Branding-Kit-v4-copy.png', 1, '2024-03-09 00:00:00', 8),
(23, 'https://i.ibb.co/mhcNzHL/Art-Armoury-Co-Tank-logo-compressed.png', 1, '2024-03-05 03:22:04', 8),
(24, 'https://i.ibb.co/027DKCZ/artarmouryco-word-logo4-198dda-1.png', 1, '2024-03-09 00:00:00', 8),
(25, 'https://i.ibb.co/6vNLLd1/Denzel-Logo.png', 1, '2024-03-06 03:14:40', 4),
(31, 'https://i.ibb.co/GdjZrc6/2a-min.png', 1, '2024-03-06 00:00:00', 8),
(32, 'https://i.ibb.co/FJP65pk/1a-min.png', 1, '2024-03-06 00:00:00', 8),
(33, 'https://i.ibb.co/CVVZF9q/30-off-min.png', 1, '2024-03-08 00:00:00', 8),
(34, 'https://i.ibb.co/nsnnHkf/Gel-Dotaaa-Logo-comp.jpg', 1, '2024-03-06 17:55:46', 4),
(35, 'https://i.ibb.co/b7yCk3x/Pogizxc-comp-comp.png', 1, '2024-03-06 17:55:56', 4);

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
(2, 'text', '', 'Hey there <i class=\"fa-regular fa-face-smile-wink\"></i>, I\'m Denzel Go, a passionate creative professional specializing in video editing, graphic design, and web development/design.\n<br>\nSince 2018, I\'ve been weaving my expertise across these dynamic fields, constantly exploring new avenues of creativity. Beyond the digital realm, I find my rhythm in playing musical instruments, where melodies become my sanctuary and inspiration. \n<br>\nLet\'s collaborate and bring our combined talents to life in your next project! <i class=\"fa-regular fa-handshake\"></i>'),
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
(6, '<i class=\"fa-brands fa-facebook-f\"></i>', '@denzel.go.31', 'https://www.facebook.com/denzel.go.31/', '2024-03-05 04:15:36'),
(7, '<i class=\"fa-brands fa-instagram\"></i>', '@denz.u_', 'https://www.instagram.com/denz.u_/', '2024-03-05 04:16:09'),
(9, '<i class=\"fa-brands fa-tiktok\"></i>', '@denzu_17', 'https://www.tiktok.com/@denzu_17', '2024-03-05 04:27:15'),
(10, '<i class=\"fa-regular fa-envelope\"></i>', 'denzelgo17@gmail.com', '', '2024-03-05 04:27:54'),
(11, '<i class=\"fa-solid fa-phone\"></i>', '+63 977 025 7461', '', '2024-03-05 04:29:02'),
(12, '<i class=\"fa-brands fa-linkedin\"></i>', '@denzelgo', 'https://www.linkedin.com/in/denzelgo/', '2024-03-05 04:29:41');

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
(5, 'background image', 'https://www.facebook.com/', 'https://i.ibb.co/hcy5S8T/Untitled-design-1-min.jpg');

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
(8, '<i class=\"fa-solid fa-hashtag\"></i>', NULL, 'Social Media Management', 'Elevating your online presence with strategic content creation, captivating captions, and meticulous strategizing. Let\'s optimize your social media strategy to foster meaningful connections with your audience, enhance engagement, and drive results for your brand.', '', '2024-03-05 04:53:52'),
(9, '<i class=\"fa-solid fa-circle-dot\"></i>', NULL, 'Motion Graphics', 'Elevating your videos with captivating motion graphics that enhance storytelling and visual appeal, creating dynamic and engaging content for your audience.', '', '2024-03-05 04:55:46'),
(10, '<i class=\"fa-brands fa-joomla\"></i>', NULL, 'Logo Animation', 'Bringing your brand to life with dynamic logo animations that leave a memorable impression on your audience, increasing brand recognition and engagement.', '', '2024-03-05 04:56:17'),
(11, '<i class=\"fa-solid fa-microphone-lines\"></i>', NULL, 'Dubbing', 'Enhancing your videos with professional dubbing services to reach a broader audience and convey your message effectively in different languages.', '', '2024-03-05 04:58:06'),
(12, '<i class=\"fa-solid fa-film\"></i>', NULL, 'Long Form Video Editing', 'Capturing the essence of your story and bringing it to life through meticulous editing. From documentaries to narrative films, I ensure your message resonates with audiences, keeping them captivated from start to finish.', '', '2024-03-05 04:58:48'),
(13, '<i class=\"fa-solid fa-play\"></i>', NULL, 'Short Form Video Editing', 'Crafting captivating videos tailored to your brand\'s style and objectives, leaving a lasting impression on your audience. Specializing in scroll-stopper content that grabs attention and engages viewers instantly.', '', '2024-03-05 04:59:06'),
(14, '<i class=\"fa-solid fa-wand-magic-sparkles\"></i>', NULL, 'Graphic Design & Branding', 'Elevating your brand\'s visual identity with custom designs that effectively communicate your message and resonate with your audience. Let\'s bring your brand vision to life and make a lasting impression in today\'s competitive market.', '', '2024-03-05 05:03:18'),
(16, '<i class=\"fa-solid fa-laptop-code\"></i>', NULL, 'Web Development UI/UX', 'Creating dynamic web systems, intuitive UI designs, and engaging UX solutions. Let\'s collaborate to craft seamless online experiences that elevate your brand and captivate your audience.', '', '2024-03-05 06:41:25'),
(17, '<i class=\"fa-solid fa-filter-circle-dollar\"></i>', NULL, 'Funnels and Landing Pages', 'Expertly crafting high-converting funnels and landing pages to drive business effectiveness. Let\'s collaborate to optimize your online presence and boost your conversion rates.', '', '2024-03-05 06:43:28');

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
(3, 'https://i.ibb.co/JCMMTwQ/SDS-Feedback-Ching-copy-comp.jpg', 'Richard Baguio', 'Content Creator', 'The work is excellent, very kind, and incredibly approachable. The creations perfectly match my taste. No regrets at all.', '2024-03-03 09:12:40'),
(4, 'https://i.ibb.co/w6sW3D5/306602427-2013476378863190-2159122660644102317-n-comp.jpg', 'Giro Gilberte', 'Content Creator', 'I am impressed with Denzel\'s work. He\'s not only friendly and approachable but also incredibly talented. His creations align perfectly with my vision.', '2024-03-06 09:25:38'),
(5, 'https://i.ibb.co/0BbGnNp/358421419-6305285782852351-1931426938934660340-n.jpg', 'Happy Rafols', 'CEO of Upskill Multimedia', 'His work is amazing. He\'s easy to work with and delivers exactly what I want every time.', '2024-03-06 09:29:41'),
(6, 'https://i.ibb.co/2jJ1MX7/365978708-7391112107581918-6616325517572873584-n-comp.jpg', 'Dennis Cabangis', 'Social Media Specialist at Krooberg Flagship', 'His ad creations are excellent, each design and edit grabs attention. Plus, he\'s easy to work with.', '2024-03-06 09:38:31'),
(7, 'https://i.ibb.co/QYQjShk/415535181-1414823999455260-6147857234306018131-n-comp.jpg', 'Myles Tan', 'Content Creator', 'I like the way Denzel edits, every cut and transition flows smoothly, keeping viewers engaged. Highly recommend him for the next video projects.', '2024-03-06 09:40:38'),
(8, 'https://i.ibb.co/2h4kd1p/412287368-7415240771829051-5160771824234753200-n-comp.jpg', 'Jayson Magadan', 'CEO of IdealTrend', 'Denzel\'s web development and design skills are good. Each page layout and element is crafted nicely, ensuring a seamless user experience. He is punctual and manages revisions quickly.', '2024-03-06 09:44:23'),
(9, 'https://i.ibb.co/TMdmYKP/376280415-588545376825314-5607383541739217557-n-comp.jpg', 'Stephen Gusi', 'Entrepreneur', 'Honestly, I gave Denzel a high level of complexity of tasks to see how capable he was. However, he surpassed my expectations, and surprisingly he delivered exceptional results beyond what I imagined.', '2024-03-06 16:02:04');

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
(1, 'clothing', 1, '2024-02-22 00:00:00'),
(2, 'flyers', 1, '2024-03-07 00:00:00'),
(3, 'Amazon listing', 1, '2024-03-05 00:00:00'),
(4, 'photo manipulation', 1, '2024-03-05 02:05:39'),
(5, 'ads', 1, '2024-03-06 00:00:00'),
(6, 'thumbnails', 1, '2024-03-03 00:00:00');

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
(73, 'https://i.ibb.co/s2cTVjt/Curse-Breaking-comp.jpg', 1, '2024-03-15 00:00:00', 6),
(74, 'https://i.ibb.co/8zWkMHw/unbox-shure-comp.jpg', 1, '2024-03-06 16:57:56', 6),
(75, 'https://i.ibb.co/8zX5dmN/MTM-Out-of-the-body-dream-comp.jpg', 1, '2024-03-06 16:58:20', 6),
(76, 'https://i.ibb.co/ZdSSjKk/JNCIC-32nd-Anniv-poster-min-comp.jpg', 1, '2024-03-06 16:58:58', 2),
(77, 'https://i.ibb.co/FYZwVsN/Firestarter-A-Life-With-A-Purpose-min-comp.jpg', 1, '2024-03-15 00:00:00', 2),
(78, 'https://i.ibb.co/hC33cT5/CORE-DOSE-final-min-comp.jpg', 1, '2024-03-06 16:59:24', 2),
(79, 'https://i.ibb.co/GJ0qxQK/Battleground-min-comp-1-comp.png', 1, '2024-03-06 16:59:58', 2),
(80, 'https://i.ibb.co/zrBtf29/Battleground-min-comp-1.jpg', 1, '2024-03-15 00:00:00', 2),
(81, 'https://i.ibb.co/Bt8tbhn/Blessed-and-Satisfied-Limited-Tees-min-comp.jpg', 1, '2024-03-06 17:00:19', 1),
(82, 'https://i.ibb.co/F4ZBqqh/Radiate-min-comp.jpg', 1, '2024-03-06 17:00:34', 2),
(83, 'https://i.ibb.co/ZWLJXRY/FTL-facebook-min-comp.png', 1, '2024-03-08 00:00:00', 2),
(84, 'https://i.ibb.co/619hTMG/fb-min-comp.png', 1, '2024-03-06 17:01:03', 2),
(85, 'https://i.ibb.co/PtsRr2N/Younite-He-Cares-min-comp.png', 1, '2024-03-06 17:01:17', 2),
(86, 'https://i.ibb.co/r3s3Zkd/10-10-shopee-1080-comp.png', 1, '2024-03-09 00:00:00', 5),
(87, 'https://i.ibb.co/84tGwXm/LUMINO-1080-part-comp.png', 1, '2024-03-06 17:02:01', 5),
(88, 'https://i.ibb.co/WcFgvb1/Octoberfest-1080x1080-shopee-comp.png', 1, '2024-03-06 17:02:14', 5),
(89, 'https://i.ibb.co/jwXgK98/h2off-Highlight-rocks-comp.png', 1, '2024-03-15 00:00:00', 5),
(90, 'https://i.ibb.co/GPzDsBb/LUMINO-Highlight-1080-comp.png', 1, '2024-03-06 17:02:34', 5),
(91, 'https://i.ibb.co/8jj25KR/LUMINO-1080-Smoke-particles-comp.jpg', 1, '2024-03-15 00:00:00', 5),
(92, 'https://i.ibb.co/zx4v0V4/Cali2-highlight-1080-2-comp.png', 1, '2024-03-08 00:00:00', 5),
(93, 'https://i.ibb.co/h1b6gRn/Banner-Coming-soon-comp.jpg', 1, '2024-03-05 00:00:00', 5),
(94, 'https://i.ibb.co/QC5rRJ8/411411659-1101908857666221-5215644537152030396-n-comp.png', 1, '2024-03-06 17:04:24', 1),
(95, 'https://i.ibb.co/QY0kVwD/410916998-2000982596952161-1893156247747749928-n-comp.png', 1, '2024-03-06 17:05:04', 1),
(96, 'https://i.ibb.co/TKz6wVf/3-comp.png', 1, '2024-03-06 17:06:03', 3),
(97, 'https://i.ibb.co/SPzvfR0/1-comp.png', 1, '2024-03-09 00:00:00', 3),
(98, 'https://i.ibb.co/cbg19Mg/5-comp.png', 1, '2024-03-06 17:06:57', 3),
(99, 'https://i.ibb.co/WBp34ww/W1-D4-comp.jpg', 1, '2024-03-06 17:08:20', 4),
(100, 'https://i.ibb.co/ymzQYc2/scenery-with-scent-comp.jpg', 1, '2024-03-06 17:08:33', 4),
(101, 'https://i.ibb.co/Rv1BhKj/day-5-comp.jpg', 1, '2024-03-06 17:08:45', 4),
(102, 'https://i.ibb.co/4WbJg69/W2-D5-comp.jpg', 1, '2024-03-15 00:00:00', 4),
(103, 'https://i.ibb.co/Z1CKfR9/w1-d3-scenery-edited-comp.jpg', 1, '2024-03-06 17:09:16', 4),
(104, 'https://i.ibb.co/qC7fPPB/W3-D3-edited-comp.jpg', 1, '2024-03-06 17:09:32', 4),
(105, 'https://i.ibb.co/G98QKzh/w1-day-2-edited-comp.jpg', 1, '2024-03-15 00:00:00', 4),
(106, 'https://i.ibb.co/9twBkR2/W3-D4-comp.jpg', 1, '2024-03-09 00:00:00', 4),
(107, 'https://i.ibb.co/F3xfkYQ/W2-D4-comp.jpg', 1, '2024-03-09 00:00:00', 4),
(108, 'https://i.ibb.co/PrRpR3c/W2-D2-comp.jpg', 1, '2024-03-06 17:10:27', 4),
(109, 'https://i.ibb.co/2Mt1ys0/W2-D1-comp.jpg', 1, '2024-03-06 17:10:39', 4),
(110, 'https://i.ibb.co/sC0pPnM/day-3-comp.jpg', 1, '2024-03-08 00:00:00', 4),
(111, 'https://i.ibb.co/sFjJ9Xq/photo-3-min-min-comp.jpg', 1, '2024-03-06 17:12:25', 3),
(112, 'https://i.ibb.co/gwb7QTQ/image-2-kid-each-granola-min-min-comp-2-comp.jpg', 1, '2024-03-06 17:12:49', 3),
(113, 'https://i.ibb.co/DbFHYc7/bag-each-granola-min-min-comp.jpg', 1, '2024-03-09 00:00:00', 3),
(114, 'https://i.ibb.co/GPckyCd/photo-6-granola-min-min-comp.jpg', 1, '2024-03-06 17:13:15', 3),
(115, 'https://i.ibb.co/XLj7S75/whats-inside-granola-page1-min-min-comp.jpg', 1, '2024-03-08 00:00:00', 3),
(116, 'https://i.ibb.co/bmY7pXH/scarf-model-5-mincomp-1.jpg', 1, '2024-03-15 00:00:00', 1),
(117, 'https://i.ibb.co/HCk2H2j/comp-scarf-min.jpg', 1, '2024-03-06 17:14:21', 1),
(118, 'https://i.ibb.co/G5Htfc1/scarf-model-5-mincomp-2.jpg', 1, '2024-03-06 17:14:29', 1);

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
(3, 'RG Gaming', 1, '2024-03-05 02:11:56'),
(4, 'Doglove', 1, '2024-03-05 02:31:33'),
(5, 'Levona Scent', 1, '2024-03-05 09:58:23'),
(6, 'Upskill Multimedia', 1, '2024-03-07 00:00:00');

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
(18, 'https://i.ibb.co/wNkBqD8/lveona.png', 1, '2024-03-06 16:27:32', 5),
(19, 'https://i.ibb.co/WHkQ3gX/Untitled-1.png', 1, '2024-03-06 16:27:45', 6),
(20, 'https://i.ibb.co/pdQ0Nvn/doglove-comp.png', 1, '2024-03-06 16:28:33', 4),
(21, 'https://i.ibb.co/wpHxThf/received-420309359942295-comp.jpg', 1, '2024-03-06 16:29:54', 3),
(22, 'https://i.ibb.co/dLky42z/received-3962423103880534-comp.jpg', 1, '2024-03-06 16:30:05', 3),
(23, 'https://i.ibb.co/NNFZQZZ/received-876583823065109-comp.jpg', 1, '2024-03-06 16:30:15', 3),
(24, 'https://i.ibb.co/3kDFccn/received-1827007234166411-comp.jpg', 1, '2024-03-06 16:30:26', 3);

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
(83, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mU-ipmYue9o?si=uh3D2nqUHGNHZF4K\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0, 0, '2024-02-29 00:00:00', 86),
(87, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/aW35-_8Ge5I?si=cEgY_DDTf0CKW1US\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, 0, '2024-03-01 14:46:04', 86),
(88, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ddUT8WusSOY?si=y2rKbMLNgn8Xz8Fn\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0, 0, '2024-03-01 00:00:00', 86),
(91, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/8VCo0zqXF1Y?si=2cSOp_1YBfbSTSDY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0, 0, '2024-02-29 16:00:00', 86),
(92, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/KaHgznO8n2U?si=mz3C1Ucr_kzjepOU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, 0, '2024-03-24 16:00:00', 86),
(93, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/5ZEOpRxBSBE?si=b82Ys7pS1el-kXoc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, 0, '2024-03-24 16:00:00', 86),
(94, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/iO83qlbir9Q?si=l7P5qeCOnDxrQfuR\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, 0, '2024-03-24 16:00:00', 86),
(95, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/YnFQLxXXb1A?si=uvUsGo6Fk12Vg60Z\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0, 0, '2024-03-01 00:00:00', 89),
(96, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/BGcXtNLAWwA?si=jiiP6TAKrdjMz5Yg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, 0, '2024-03-29 16:00:00', 89),
(97, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/YPNp-Il1VJc?si=XRFxEheXKYvdLniW\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, 0, '2024-03-27 16:00:00', 89),
(98, 'nrYzRYkRMGk', 0, 1, '2024-03-26 00:00:00', 90),
(101, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/YWZ7xdqyVKo?si=13MyM5tSurdTPI4F\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, 0, '2024-02-29 16:00:00', 86),
(102, 'YDlBQYXoUGM', 1, 1, '2024-03-03 00:00:00', 90),
(103, '0OtazOR_mug', 0, 1, '2024-03-02 16:00:00', 90),
(104, 'W_aYiiLz7SI', 1, 1, '2024-03-26 16:00:00', 90),
(105, 'ZAQA2M4mFkI', 1, 1, '2024-03-27 16:00:00', 90),
(106, 'IoqFHOEnUJ0', 0, 1, '2024-03-03 00:00:00', 90),
(107, 'dzL5BqYAvlM', 0, 1, '2024-03-03 00:00:00', 90),
(108, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/00V_iDjPZi0?si=5szJdKqEAEEuZqOk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, 0, '2024-03-03 13:02:59', 91),
(109, 'vavbPB3pqGo', 1, 1, '2024-03-05 06:37:32', 89),
(110, 'TZp_fKPqHdw', 1, 1, '2024-03-06 00:00:00', 89),
(111, 'O8IueJfsVgw', 1, 1, '2024-03-29 00:00:00', 90),
(112, '6VaOj0bEYJg', 1, 1, '2024-03-29 00:00:00', 90);

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
(2, 'Pixenifty', 1, '2024-03-05 04:06:30'),
(3, 'STKRHUB', 1, '2024-03-07 00:00:00'),
(4, 'JML', 1, '2024-03-22 00:00:00');

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
(4, 'https://i.ibb.co/ygpzpz3/284850392-3084611221850072-1114299089688238973-n.png', 1, '2024-03-05 04:06:48', 2),
(5, 'https://i.ibb.co/61VSbvh/282248931-737825400583723-9118560135036108368-n.png', 1, '2024-03-05 04:06:59', 2),
(6, 'https://i.ibb.co/KjFGpJW/281857781-1025866144972555-6206312597824010298-n.png', 1, '2024-03-05 04:07:07', 2),
(8, 'https://i.ibb.co/sqf9mX2/431517046-390024673781789-5437720647695430318-n.jpg', 1, '2024-03-05 04:07:55', 3),
(9, 'https://i.ibb.co/5jPn7HF/427791110-283481228099874-2765761663197719200-n.jpg', 1, '2024-03-05 04:07:59', 3),
(11, 'https://i.ibb.co/mJCTHTC/394651058-337854205442370-6151559805462574485-n.png', 1, '2024-03-05 04:08:17', 3),
(12, 'https://i.ibb.co/DfjyR6r/jml-min-jpg-page2-min-comp.jpg', 1, '2024-03-06 00:00:00', 4),
(13, 'https://i.ibb.co/18F9x5h/jml-min-jpg-page1-min-comp.jpg', 1, '2024-03-07 00:00:00', 4);

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
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brand_logo_outputs`
--
ALTER TABLE `brand_logo_outputs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `constants_about`
--
ALTER TABLE `constants_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `constants_contacts`
--
ALTER TABLE `constants_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `constants_testimonials`
--
ALTER TABLE `constants_testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `graphic_clients`
--
ALTER TABLE `graphic_clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `graphic_outputs`
--
ALTER TABLE `graphic_outputs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `social_media_clients`
--
ALTER TABLE `social_media_clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `social_media_outputs`
--
ALTER TABLE `social_media_outputs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `video_clients`
--
ALTER TABLE `video_clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `video_outputs`
--
ALTER TABLE `video_outputs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `web_clients`
--
ALTER TABLE `web_clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `web_outputs`
--
ALTER TABLE `web_outputs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
