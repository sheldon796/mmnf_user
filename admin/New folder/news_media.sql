-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 05:07 PM
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
-- Table structure for table `photogallery`
--

CREATE TABLE `photogallery` (
  `id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `upload` varchar(222) NOT NULL,
  `datee` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photogallery`
--

INSERT INTO `photogallery` (`id`, `title`, `description`, `upload`, `datee`, `dttm`) VALUES
(1, '', '', '', '', '2022-03-06 11:48:59'),
(2, '', '', '', '', '2022-03-06 11:49:04'),
(3, '', '', '', '', '2022-03-06 11:49:23'),
(4, '', '', '', '', '2022-03-06 11:49:27'),
(5, '', '', '', '', '2022-03-06 11:50:35'),
(6, '', '', '', '', '2022-03-06 11:51:10'),
(7, 'gdf', 'dfgd', '396183_394514463951660_207998085_n.jpg', 'dfgdf', '2022-03-07 20:59:17'),
(8, 'huda', 'noorul huda', '533840_10151110033779565_1069700441_n.jpg', '10/26/2021', '2022-06-26 20:34:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photogallery`
--
ALTER TABLE `photogallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photogallery`
--
ALTER TABLE `photogallery`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
