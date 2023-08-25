-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 05:27 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmnf`
--

-- --------------------------------------------------------

--
-- Table structure for table `brilliantachievers`
--

CREATE TABLE `brilliantachievers` (
  `id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `upload` varchar(222) NOT NULL,
  `datee` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events_achievement`
--

CREATE TABLE `events_achievement` (
  `id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `upload` varchar(222) NOT NULL,
  `datee` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exam_notice_board`
--

CREATE TABLE `exam_notice_board` (
  `id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `upload` varchar(222) NOT NULL,
  `datee` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(222) NOT NULL,
  `type` varchar(222) NOT NULL,
  `email_id` varchar(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `feedback` varchar(222) NOT NULL,
  `mobile` varchar(222) NOT NULL,
  `dttm` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `general_notice_board`
--

CREATE TABLE `general_notice_board` (
  `id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `upload` varchar(222) NOT NULL,
  `datee` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news_media`
--

CREATE TABLE `news_media` (
  `id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `upload` varchar(222) NOT NULL,
  `datee` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `result_notice_board`
--

CREATE TABLE `result_notice_board` (
  `id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `upload` varchar(222) NOT NULL,
  `datee` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `upload` varchar(222) NOT NULL,
  `datee` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_events_achievement`
--

CREATE TABLE `upcoming_events_achievement` (
  `id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `upload` varchar(222) NOT NULL,
  `datee` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(1, 'huda', 'mohd.noorulhuda@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2022-03-04 13:19:20'),
(2, 'pranesh', 'pranesh@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2022-03-04 14:07:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brilliantachievers`
--
ALTER TABLE `brilliantachievers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_achievement`
--
ALTER TABLE `events_achievement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_notice_board`
--
ALTER TABLE `exam_notice_board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_notice_board`
--
ALTER TABLE `general_notice_board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_media`
--
ALTER TABLE `news_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result_notice_board`
--
ALTER TABLE `result_notice_board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_events_achievement`
--
ALTER TABLE `upcoming_events_achievement`
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
-- AUTO_INCREMENT for table `brilliantachievers`
--
ALTER TABLE `brilliantachievers`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events_achievement`
--
ALTER TABLE `events_achievement`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam_notice_board`
--
ALTER TABLE `exam_notice_board`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_notice_board`
--
ALTER TABLE `general_notice_board`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_media`
--
ALTER TABLE `news_media`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `result_notice_board`
--
ALTER TABLE `result_notice_board`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upcoming_events_achievement`
--
ALTER TABLE `upcoming_events_achievement`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
