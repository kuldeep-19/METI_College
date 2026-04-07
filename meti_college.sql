-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2026 at 10:43 AM
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
-- Database: `meti_college`
--

-- --------------------------------------------------------

--
-- Table structure for table `banaer_slider`
--

CREATE TABLE `banaer_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `button_text` varchar(100) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banaer_slider`
--

INSERT INTO `banaer_slider` (`id`, `title`, `subtitle`, `button_text`, `button_link`, `image`, `status`, `created_at`) VALUES
(6, 'Welcome To Marine Engineering Training Institute', '', 'expoler', 'www.google.com', '577a7723-2643x1762.jpg', 1, '2026-03-17 06:47:35'),
(7, '', '', '', '', 'students-2000x1279.jpg', 1, '2026-03-17 06:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `content_section`
--

CREATE TABLE `content_section` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `button_text` varchar(100) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content_section`
--

INSERT INTO `content_section` (`id`, `title`, `description`, `button_text`, `button_link`, `image`, `status`) VALUES
(1, 'sadcac', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae iste rerum dolorem harum aperiam, veritatis amet! Ab ipsa aperiam dolores. Rerum ab odit enim error modi nemo eos. Quod temporibus consequatur libero inventore iusto accusantium rem, modi laudantium at pariatur amet velit illo voluptatem reiciendis placeat assumenda perspiciatis ea eaque.', 'adga', '', '1775477888_Screenshot from 2026-04-04 15-35-51.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` int(11) NOT NULL,
  `label` varchar(100) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `delay` int(11) DEFAULT 0,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `status`) VALUES
(1, 'kuldeep gupta', 'Telecon@gmail.com', '26378467', 'hi ', 'world', '2026-03-17 07:22:17', 0),
(2, 'Telecon Systems', 'ER.PANKAJ12345@GMAIL.COM', '07983116873', 'GTCO', 'gerw', '2026-04-03 05:09:07', 0),
(3, 'GEM', 'pankaj.gangwar@telecon-systems.com', '07983116873', 'gyid', 'se', '2026-04-03 05:09:40', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banaer_slider`
--
ALTER TABLE `banaer_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_section`
--
ALTER TABLE `content_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banaer_slider`
--
ALTER TABLE `banaer_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `content_section`
--
ALTER TABLE `content_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
