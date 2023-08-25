-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 08:21 AM
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
-- Table structure for table `videogallery`
--

CREATE TABLE `videogallery` (
  `id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `upload` varchar(2222) NOT NULL,
  `datee` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videogallery`
--

INSERT INTO `videogallery` (`id`, `title`, `description`, `upload`, `datee`, `dttm`) VALUES
(2, 'fsdf', 'sdfs', '<iframe  class=\"embed-responsive\" src=\"https://www.youtube.com/embed/Zvp7UZC6TCU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '10/27/2021', '2022-03-08 10:34:04'),
(4, 'mmnf march', 'gsdfgadgasg', '<iframe class=\"embed-responsive\" src=\"https://www.youtube.com/embed/IIhoXcTrtGI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '10/27/2021', '2022-03-08 18:28:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `videogallery`
--
ALTER TABLE `videogallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `videogallery`
--
ALTER TABLE `videogallery`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
