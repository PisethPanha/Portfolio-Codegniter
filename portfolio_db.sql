-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2026 at 08:11 PM
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
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutinfo`
--

CREATE TABLE `aboutinfo` (
  `id` int(11) NOT NULL,
  `job_title` text NOT NULL,
  `bio` text NOT NULL,
  `story` text NOT NULL,
  `cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutinfo`
--

INSERT INTO `aboutinfo` (`id`, `job_title`, `bio`, `story`, `cv`) VALUES
(1, 'Full-Stack Developer', '👋 Hi, I’m Yorn Pisethpanha — a curious creator who loves turning ideas into digital experiences. I thrive at the intersection of innovation and code, crafting websites, apps, and projects that are not just functional but memorable.\r\n\r\nWhen I’m not building things on React.js, Vue.js, or experimenting with new tech, you’ll find me exploring creative ways to solve problems and learn something new every day.\r\n\r\nLet’s make something amazing together. 🚀', 'Once upon a time in the digital realm, there was a curious mind named Yorn Pisethpanha. From the first line of code to the final pixel, Pisethpanha has always been fascinated by how ideas transform into experiences people love.\r\n\r\nWhat started as tinkering with React.js and Vue.js soon became a journey of crafting websites, apps, and projects that don’t just work—they tell a story. Each project is a small adventure, blending creativity, problem-solving, and a touch of curiosity.\r\n\r\nPisethpanha believes in learning by doing, experimenting fearlessly, and leaving a little magic in every digital corner. The mission? To turn visions into experiences, one code snippet at a time.\r\n\r\nAnd the story? Well… it’s still being written. 🚀', 'uploads/1770403168.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `client_tbl`
--

CREATE TABLE `client_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `subject` text NOT NULL,
  `description` text NOT NULL,
  `contact_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_tbl`
--

INSERT INTO `client_tbl` (`id`, `name`, `email`, `subject`, `description`, `contact_date`) VALUES
(1, 'Sarah Johnson', 'sarah.johnson@company.com', 'Web Design Project', 'Hi, I am interested in discussing a website redesign project for my e-commerce business. We are looking for a modern, responsive design that can handle high traffic.', '2024-01-22'),
(2, 'Sarah Johnson2', 'sarah.johnson@company.com22', 'Web Design Project', 'Hi, I am interested in discussing a website redesign project for my e-commerce business. We are looking for a modern, responsive design that can handle high traffic.', '2024-01-22'),
(3, 'Yorn Pisethpanha', 'yornpisethpanha58@gmail.com', 'POS sys', 'dsadd2432423', '2026-02-06'),
(4, 'Yorn Pisethpanha', 'yornpisethpanha58@gmail.com', 'POS sys', 'dsadd2432423', '2026-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE `contactinfo` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `linkedin` text NOT NULL,
  `github` text NOT NULL,
  `twitter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO `contactinfo` (`id`, `email`, `phone`, `address`, `linkedin`, `github`, `twitter`) VALUES
(1, 'john.doe@example.com', '+1 (555) 123-4567dff', 'San Francisco, CA, USA', 'https://linkedin.com/in/johndoe', 'https://github.com/johndoe', 'https://twitter.com/johndoe');

-- --------------------------------------------------------

--
-- Table structure for table `experience_tbl`
--

CREATE TABLE `experience_tbl` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience_tbl`
--

INSERT INTO `experience_tbl` (`id`, `company_name`, `job_title`, `duration`, `description`) VALUES
(7, 'Facebook', 'cleaner', 'Jan 2020 - Jan 2025', 'clean bathroom\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `hero_tbl`
--

CREATE TABLE `hero_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `short_bio` varchar(255) NOT NULL,
  `experience` decimal(10,0) NOT NULL,
  `satisfaction` int(225) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hero_tbl`
--

INSERT INTO `hero_tbl` (`id`, `name`, `job_title`, `short_bio`, `experience`, `satisfaction`, `image`) VALUES
(1, 'Touch Oeun', 'Full-Stack Developer', 'Building beautiful, scalable digital experiences', 4, 100, 'https://res.cloudinary.com/dbylpzlji/image/upload/v1770376453/ci4_uploads/od0zzmejeylsiuhep35l.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logo_tbl`
--

CREATE TABLE `logo_tbl` (
  `id` int(11) NOT NULL,
  `short_name` varchar(2) NOT NULL,
  `long_name` varchar(10) NOT NULL,
  `font_style` varchar(50) NOT NULL,
  `font_weight` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logo_tbl`
--

INSERT INTO `logo_tbl` (`id`, `short_name`, `long_name`, `font_style`, `font_weight`, `color`) VALUES
(12, 'TO', 'OEUN', 'inter', 'Bold', '#657bd2');

-- --------------------------------------------------------

--
-- Table structure for table `project_cate`
--

CREATE TABLE `project_cate` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_cate`
--

INSERT INTO `project_cate` (`id`, `cate_name`) VALUES
(1, 'Frontend'),
(2, 'Backend'),
(3, 'Full Stack');

-- --------------------------------------------------------

--
-- Table structure for table `project_tbl`
--

CREATE TABLE `project_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `stack` text NOT NULL,
  `category` int(5) NOT NULL,
  `image` varchar(500) NOT NULL,
  `demo_link` varchar(255) NOT NULL,
  `github` varchar(225) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_tbl`
--

INSERT INTO `project_tbl` (`id`, `name`, `description`, `stack`, `category`, `image`, `demo_link`, `github`, `created_at`) VALUES
(3, 'Yorn Pisethpanha', 'zxzXZxzxzx', 'Express JS, Fluter, React JS', 1, 'https://res.cloudinary.com/dbylpzlji/image/upload/v1770269578/ci4_uploads/aph80colxlajn1o4wf8w.png', '', '', '2026-02-06'),
(4, 'sadsad44', '55565565', 'xcvccvxvcvxcv, React JS, CI/CD', 2, 'https://res.cloudinary.com/dbylpzlji/image/upload/v1770293448/ci4_uploads/xv853ycowxhifdpxlkup.jpg', '', '', '2026-02-07'),
(5, 'sadsad444fdfff', '55565565', 'xcvccvxvcvxcv, React JS, CI/CD', 3, 'https://res.cloudinary.com/dbylpzlji/image/upload/v1770293448/ci4_uploads/xv853ycowxhifdpxlkup.jpg', '', '', '2026-02-08'),
(6, 'sadsad444fdfff000000', '55565565', 'xcvccvxvcvxcv, React JS, CI/CD', 1, 'https://res.cloudinary.com/dbylpzlji/image/upload/v1770293448/ci4_uploads/xv853ycowxhifdpxlkup.jpg', '', '', '2026-02-08'),
(7, 'asdsad', 'vccxvxcv', 'React JS, xcvccvxvcvxcv, Express JS', 0, 'https://res.cloudinary.com/dbylpzlji/image/upload/v1770389507/ci4_uploads/fegon8xsz3rwhvtt9fbf.jpg', '', '', '2026-02-06'),
(8, 'asdsad33', 'xxzXZ32234324234', 'React JS, xcvccvxvcvxcv', 3, 'https://res.cloudinary.com/dbylpzlji/image/upload/v1770389624/ci4_uploads/acfgqhznwst2js8vp1cu.jpg', 'https://linguavid.vercel.app/', 'https://github.com/johndoe', '2026-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `skill_cate_tbl`
--

CREATE TABLE `skill_cate_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skill_cate_tbl`
--

INSERT INTO `skill_cate_tbl` (`id`, `name`) VALUES
(1, 'Frontend Development'),
(2, 'Backend Development'),
(3, 'Tools & DevOps'),
(4, 'Other skill');

-- --------------------------------------------------------

--
-- Table structure for table `skill_tbl`
--

CREATE TABLE `skill_tbl` (
  `id` int(11) NOT NULL,
  `skill_name` varchar(225) NOT NULL,
  `category` int(11) NOT NULL,
  `level` decimal(50,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skill_tbl`
--

INSERT INTO `skill_tbl` (`id`, `skill_name`, `category`, `level`) VALUES
(1, 'React JS', 1, 76),
(2, 'xcvccvxvcvxcv', 2, 100),
(4, 'Veu JS', 1, 75),
(5, 'Fluter', 1, 75),
(6, 'CI/CD', 3, 96),
(8, 'UX/UI', 4, 77),
(10, 'Express JS', 2, 58);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutinfo`
--
ALTER TABLE `aboutinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_tbl`
--
ALTER TABLE `client_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactinfo`
--
ALTER TABLE `contactinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience_tbl`
--
ALTER TABLE `experience_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_tbl`
--
ALTER TABLE `hero_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo_tbl`
--
ALTER TABLE `logo_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_cate`
--
ALTER TABLE `project_cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_tbl`
--
ALTER TABLE `project_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_cate_tbl`
--
ALTER TABLE `skill_cate_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_tbl`
--
ALTER TABLE `skill_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutinfo`
--
ALTER TABLE `aboutinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_tbl`
--
ALTER TABLE `client_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactinfo`
--
ALTER TABLE `contactinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `experience_tbl`
--
ALTER TABLE `experience_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hero_tbl`
--
ALTER TABLE `hero_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logo_tbl`
--
ALTER TABLE `logo_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `project_cate`
--
ALTER TABLE `project_cate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_tbl`
--
ALTER TABLE `project_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `skill_cate_tbl`
--
ALTER TABLE `skill_cate_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skill_tbl`
--
ALTER TABLE `skill_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
