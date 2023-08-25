-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 06:33 AM
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
-- Table structure for table `dept_inq_waqi_dev`
--

CREATE TABLE `dept_inq_waqi_dev` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_inq_waqi_dev`
--

INSERT INTO `dept_inq_waqi_dev` (`id`, `name`, `email`, `subject`, `message`, `dttm`) VALUES
(1, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:32'),
(2, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dept_inq_waqi_dev`
--
ALTER TABLE `dept_inq_waqi_dev`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dept_inq_waqi_dev`
--
ALTER TABLE `dept_inq_waqi_dev`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
