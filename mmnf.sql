-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 11:41 AM
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
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `upload` varchar(2222) NOT NULL,
  `datee` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `title`, `description`, `upload`, `datee`, `dttm`) VALUES
(1, '', '', '', '', '2022-03-06 11:48:59'),
(2, '', '', '', '', '2022-03-06 11:49:04'),
(3, '', '', '', '', '2022-03-06 11:49:23'),
(4, '', '', '', '', '2022-03-06 11:49:27'),
(5, '', '', '', '', '2022-03-06 11:50:35'),
(6, '', '', '', '', '2022-03-06 11:51:10'),
(7, 'gdf', 'dfgd', '<iframe class=\"embed-responsive\" src=\"https://www.youtube.com/embed/eW4n-Lbz7bc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'dfgdf', '2022-03-07 20:59:17'),
(8, 'bislary', 'sadadsd;aljkl;sa l;sak l;saksa l;sa kl;d saikdsl;akdl;sa l;dfjkkl;jaklgjsdfklaj ksdajkl;sd al;kjs fjsdal; fsdkl;a jfsdklaj fl; ', '<iframe class=\"embed-responsive\" src=\"https://www.youtube.com/embed/4KI6AGMBInM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '22 jan 2022', '2022-03-08 10:45:07');

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `upload` varchar(222) NOT NULL,
  `datee` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `title`, `description`, `upload`, `datee`, `dttm`) VALUES
(8, 'fdgdf', 'dfgd', 'Untitled-2 copy.jpg', 'dfgdf', '2022-03-07 21:01:39');

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

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `dttm`) VALUES
(1, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:32'),
(2, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:45'),
(3, 'Mohammad Sadarul Ula', 'mohd.noorulhuda@gmail.com', 'sdf', 'JKL', '2022-03-07 19:53:13'),
(4, 'Mohammad Sadarul Ula', 'mohd.noorulhuda@gmail.com', '', '', '2022-03-07 20:35:11'),
(5, 'Mohammad Sadarul Ula', 'mohd.noorulhuda@gmail.com', '', '', '2022-03-07 20:46:15'),
(6, 'Mohammad Sadarul Ula', 'mohd.noorulhuda@gmail.com', 'No Subject', 'ccczc', '2022-03-08 18:35:34'),
(7, 'Mohammad Sadarul Ula', 'mohd.noorulhuda@gmail.com', 'sdf', 'sad', '2022-04-12 12:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `dept_inq_ace`
--

CREATE TABLE `dept_inq_ace` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_inq_ace`
--

INSERT INTO `dept_inq_ace` (`id`, `name`, `email`, `subject`, `message`, `dttm`) VALUES
(1, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:32'),
(2, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `dept_inq_bdf`
--

CREATE TABLE `dept_inq_bdf` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_inq_bdf`
--

INSERT INTO `dept_inq_bdf` (`id`, `name`, `email`, `subject`, `message`, `dttm`) VALUES
(1, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:32'),
(2, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `dept_inq_cdc`
--

CREATE TABLE `dept_inq_cdc` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_inq_cdc`
--

INSERT INTO `dept_inq_cdc` (`id`, `name`, `email`, `subject`, `message`, `dttm`) VALUES
(1, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:32'),
(2, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `dept_inq_disaster_mg`
--

CREATE TABLE `dept_inq_disaster_mg` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_inq_disaster_mg`
--

INSERT INTO `dept_inq_disaster_mg` (`id`, `name`, `email`, `subject`, `message`, `dttm`) VALUES
(1, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:32'),
(2, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `dept_inq_dpc`
--

CREATE TABLE `dept_inq_dpc` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_inq_dpc`
--

INSERT INTO `dept_inq_dpc` (`id`, `name`, `email`, `subject`, `message`, `dttm`) VALUES
(1, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:32'),
(2, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `dept_inq_financial_dev`
--

CREATE TABLE `dept_inq_financial_dev` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_inq_financial_dev`
--

INSERT INTO `dept_inq_financial_dev` (`id`, `name`, `email`, `subject`, `message`, `dttm`) VALUES
(1, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:32'),
(2, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `dept_inq_healthcare`
--

CREATE TABLE `dept_inq_healthcare` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_inq_healthcare`
--

INSERT INTO `dept_inq_healthcare` (`id`, `name`, `email`, `subject`, `message`, `dttm`) VALUES
(1, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:32'),
(2, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `dept_inq_hrnl`
--

CREATE TABLE `dept_inq_hrnl` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_inq_hrnl`
--

INSERT INTO `dept_inq_hrnl` (`id`, `name`, `email`, `subject`, `message`, `dttm`) VALUES
(1, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:32'),
(2, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `dept_inq_marti`
--

CREATE TABLE `dept_inq_marti` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_inq_marti`
--

INSERT INTO `dept_inq_marti` (`id`, `name`, `email`, `subject`, `message`, `dttm`) VALUES
(1, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:32'),
(2, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `dept_inq_mdc`
--

CREATE TABLE `dept_inq_mdc` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_inq_mdc`
--

INSERT INTO `dept_inq_mdc` (`id`, `name`, `email`, `subject`, `message`, `dttm`) VALUES
(1, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:32'),
(2, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `dept_inq_sdf`
--

CREATE TABLE `dept_inq_sdf` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_inq_sdf`
--

INSERT INTO `dept_inq_sdf` (`id`, `name`, `email`, `subject`, `message`, `dttm`) VALUES
(1, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:32'),
(2, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `dept_inq_technobuiz`
--

CREATE TABLE `dept_inq_technobuiz` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_inq_technobuiz`
--

INSERT INTO `dept_inq_technobuiz` (`id`, `name`, `email`, `subject`, `message`, `dttm`) VALUES
(1, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:32'),
(2, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `dept_inq_travel`
--

CREATE TABLE `dept_inq_travel` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_inq_travel`
--

INSERT INTO `dept_inq_travel` (`id`, `name`, `email`, `subject`, `message`, `dttm`) VALUES
(1, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:32'),
(2, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:45');

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

-- --------------------------------------------------------

--
-- Table structure for table `dept_inq_women_emp`
--

CREATE TABLE `dept_inq_women_emp` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_inq_women_emp`
--

INSERT INTO `dept_inq_women_emp` (`id`, `name`, `email`, `subject`, `message`, `dttm`) VALUES
(1, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:32'),
(2, 'noorul huda', 'mohd.noorulhuda@gmail.com', 'Request for help', 'sadasdsad a g fa sda gasdg sdag sda ggsdg asg sdagas d sda sad  a g', '2022-03-06 10:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `events_achievement`
--

CREATE TABLE `events_achievement` (
  `id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `upload` varchar(2222) NOT NULL,
  `datee` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events_achievement`
--

INSERT INTO `events_achievement` (`id`, `title`, `description`, `upload`, `datee`, `dttm`) VALUES
(2, 'fsdf', 'sdfs', '<iframe  class=\"embed-responsive\" src=\"https://www.youtube.com/embed/Zvp7UZC6TCU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '10/27/2021', '2022-03-08 10:34:04'),
(4, 'mmnf march', 'gsdfgadgasg', '<iframe class=\"embed-responsive\" src=\"https://www.youtube.com/embed/IIhoXcTrtGI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '10/27/2021', '2022-03-08 18:28:12');

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
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `mob_no` varchar(222) NOT NULL,
  `email_id` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guest_lecture`
--

CREATE TABLE `guest_lecture` (
  `id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `speaker` varchar(222) NOT NULL,
  `upload` varchar(2222) NOT NULL,
  `datee` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest_lecture`
--

INSERT INTO `guest_lecture` (`id`, `title`, `description`, `speaker`, `upload`, `datee`, `dttm`) VALUES
(8, 'fghf', 'fghf', 'Noorul', '<iframe class=\"embed-responsive\" src=\"https://www.youtube.com/embed/4KI6AGMBInM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '10/27/2021', '2022-03-08 10:06:15');

-- --------------------------------------------------------

--
-- Table structure for table `helping_hands`
--

CREATE TABLE `helping_hands` (
  `id` int(222) NOT NULL,
  `amount` int(11) NOT NULL,
  `category` varchar(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `age` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `upload` varchar(222) NOT NULL,
  `ngo_name` varchar(222) NOT NULL,
  `verifier_name` varchar(222) NOT NULL,
  `datee` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `helping_hands`
--

INSERT INTO `helping_hands` (`id`, `amount`, `category`, `name`, `age`, `description`, `upload`, `ngo_name`, `verifier_name`, `datee`, `dttm`) VALUES
(1, 0, '', '', 0, '', '', '', '', '', '2022-03-06 11:48:59'),
(2, 0, '', '', 0, '', '', '', '', '', '2022-03-06 11:49:04'),
(3, 0, '', '', 0, '', '', '', '', '', '2022-03-06 11:49:23'),
(4, 0, '', '', 0, '', '', '', '', '', '2022-03-06 11:49:27'),
(5, 0, '', '', 0, '', '', '', '', '', '2022-03-06 11:50:35'),
(6, 0, '', '', 0, '', '', '', '', '', '2022-03-06 11:51:10'),
(7, 0, '', 'gdf', 0, 'dfgd', '396183_394514463951660_207998085_n.jpg', '', '', 'dfgdf', '2022-03-07 20:59:17'),
(8, 0, 'sada', 'sada', 0, 'asda', '', 'sadas', 'asda', 'asda', '2022-03-08 14:07:52'),
(9, 35000, 'Education', 'Noorul Huda', 35, 'Need money for digital marketing ', '531252_10151017133704565_564122034_n.jpg', 'DMM Fundation', 'Sadarul Ula', '22 jan 2022', '2022-03-08 14:15:30'),
(10, 500, '', '', 0, '', 'Untitled-1.jpg', '', '', '', '2022-03-08 14:16:42'),
(11, 500000, 'Education', 'Mohammad Sadarul Ula', 32, 'dgsagasdgsdagsad', 'DSC_8646.jpg', 'DMM Fundation', 'Sadarul Ula', '22 jan 2022', '2022-03-08 18:34:29'),
(12, 1500, 'huda', 'Mohammad Sadarul Ula', 32, 'qwe', 'WhatsApp Image 2022-03-27 at 5.22.13 PM.jpeg', 'qwewq', 'qweq', 'qweq', '2022-04-12 12:40:08');

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

--
-- Dumping data for table `news_media`
--

INSERT INTO `news_media` (`id`, `title`, `description`, `upload`, `datee`, `dttm`) VALUES
(10, '', '', 'new_media1.jpg', '', '2022-06-27 11:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE `notice_board` (
  `id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `upload` varchar(222) NOT NULL,
  `datee` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`id`, `title`, `description`, `upload`, `datee`, `dttm`) VALUES
(1, '567567567', '', '', '10/27/2021', '2022-03-06 10:43:46'),
(2, '', '', '', '', '2022-03-06 10:44:29'),
(3, '', 'dfgdfgd', '', '', '2022-03-06 10:44:55'),
(4, 'rt', 'reter', '15276_252963254829708_1564121595_n.jpg', 'erter', '2022-03-07 20:43:48'),
(5, 'fdgf', 'fgdf', 'Untitled-1.jpg', '10/27/2021', '2022-03-07 20:44:01'),
(6, 'notice of today', 'asdfsdafas', '15276_252963254829708_1564121595_n.jpg', '10/27/2021', '2022-03-08 18:23:06'),
(7, 'asda', 'asdasda', 'Hitachi_logo.png', 'dasd', '2022-06-27 12:45:57');

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
(3, 'State level NGO Conference', '', 'mmnf_1 (1).jpg', '', '2022-06-27 10:27:25'),
(4, '', '', 'mmnf_1 (53).jpg', '', '2022-06-27 10:43:42'),
(5, '', '', 'mmnf_1 (55).jpg', '', '2022-06-27 10:43:59'),
(6, '', '', 'mmnf_1 (60).jpg', '', '2022-06-27 10:44:14'),
(7, '', '', 'mmnf_1 (61).jpg', '', '2022-06-27 10:44:29'),
(8, '', '', 'mmnf_1 (62).jpg', '', '2022-06-27 10:44:46'),
(9, '', '', 'mmnf_1 (64).jpg', '', '2022-06-27 10:45:01'),
(10, '', '', 'mmnf_1 (66).jpg', '', '2022-06-27 10:45:14'),
(11, '', '', 'mmnf_1 (68).jpg', '', '2022-06-27 10:45:34'),
(12, '', '', 'mmnf_1 (70).jpg', '', '2022-06-27 10:45:59'),
(13, '', '', 'mmnf_1 (73).jpg', '', '2022-06-27 10:46:24'),
(14, '', '', 'mmnf_1 (76).jpg', '', '2022-06-27 10:46:38'),
(15, '', '', 'mmnf_1 (81).jpg', '', '2022-06-27 10:46:52'),
(16, '', '', 'mmnf_1 (82).jpg', '', '2022-06-27 10:47:02'),
(17, '', '', 'mmnf_1 (84).jpg', '', '2022-06-27 10:47:14'),
(18, '', '', 'mmnf_1 (86).jpg', '', '2022-06-27 10:47:26'),
(19, '', '', 'mmnf_1 (88).jpg', '', '2022-06-27 10:47:37'),
(20, '', '', 'mmnf_1 (91).jpg', '', '2022-06-27 10:47:48'),
(21, '', '', 'mmnf_1 (103).jpg', '', '2022-06-27 10:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `reg_cdc`
--

CREATE TABLE `reg_cdc` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `taluka` varchar(222) NOT NULL,
  `district` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `ap_name` varchar(222) NOT NULL,
  `ap_designation` varchar(222) NOT NULL,
  `ap_education` varchar(222) NOT NULL,
  `ap_mobile` varchar(222) NOT NULL,
  `member` varchar(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `waqf_reg` varchar(222) NOT NULL,
  `waqf_upload` varchar(222) NOT NULL,
  `s_cdc` varchar(222) NOT NULL,
  `a_masjid` int(222) NOT NULL,
  `a_address` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `m_masjid` varchar(222) NOT NULL,
  `s_masjid` varchar(222) NOT NULL,
  `r_masjid` varchar(222) NOT NULL,
  `l_permit` varchar(222) NOT NULL,
  `v1_name` varchar(222) NOT NULL,
  `v1_education` varchar(222) NOT NULL,
  `v1_tab` varchar(222) NOT NULL,
  `v1_phone` varchar(222) NOT NULL,
  `v1_time` varchar(222) NOT NULL,
  `v2_name` varchar(222) NOT NULL,
  `v2_education` varchar(222) NOT NULL,
  `v2_tab` varchar(222) NOT NULL,
  `v2_phone` varchar(222) NOT NULL,
  `v2_time` varchar(222) NOT NULL,
  `v3_name` varchar(222) NOT NULL,
  `v3_education` varchar(222) NOT NULL,
  `v3_tab` varchar(222) NOT NULL,
  `v3_phone` varchar(222) NOT NULL,
  `v3_time` varchar(222) NOT NULL,
  `v4_name` varchar(222) NOT NULL,
  `v4_education` varchar(222) NOT NULL,
  `v4_tab` varchar(222) NOT NULL,
  `v4_phone` varchar(222) NOT NULL,
  `v4_time` varchar(222) NOT NULL,
  `v5_name` varchar(222) NOT NULL,
  `v5_education` varchar(222) NOT NULL,
  `v5_tab` varchar(222) NOT NULL,
  `v5_phone` varchar(222) NOT NULL,
  `v5_time` varchar(222) NOT NULL,
  `tp_name` varchar(222) NOT NULL,
  `tp_mobile` varchar(222) NOT NULL,
  `tvp_name` varchar(222) NOT NULL,
  `tvp_mobile` varchar(222) NOT NULL,
  `s_name` varchar(222) NOT NULL,
  `s_mobile` varchar(222) NOT NULL,
  `gs_name` varchar(222) NOT NULL,
  `gs_mobile` varchar(222) NOT NULL,
  `tr_name` varchar(222) NOT NULL,
  `tr_mobile` varchar(222) NOT NULL,
  `m1_name` varchar(222) NOT NULL,
  `m1_mobile` varchar(222) NOT NULL,
  `m2_name` varchar(222) NOT NULL,
  `m2_mobile` varchar(222) NOT NULL,
  `m3_name` varchar(222) NOT NULL,
  `m3_mobile` varchar(222) NOT NULL,
  `m4_name` varchar(222) NOT NULL,
  `m4_mobile` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_cdc`
--

INSERT INTO `reg_cdc` (`id`, `name`, `address`, `taluka`, `district`, `state`, `ap_name`, `ap_designation`, `ap_education`, `ap_mobile`, `member`, `title`, `waqf_reg`, `waqf_upload`, `s_cdc`, `a_masjid`, `a_address`, `f_name`, `m_masjid`, `s_masjid`, `r_masjid`, `l_permit`, `v1_name`, `v1_education`, `v1_tab`, `v1_phone`, `v1_time`, `v2_name`, `v2_education`, `v2_tab`, `v2_phone`, `v2_time`, `v3_name`, `v3_education`, `v3_tab`, `v3_phone`, `v3_time`, `v4_name`, `v4_education`, `v4_tab`, `v4_phone`, `v4_time`, `v5_name`, `v5_education`, `v5_tab`, `v5_phone`, `v5_time`, `tp_name`, `tp_mobile`, `tvp_name`, `tvp_mobile`, `s_name`, `s_mobile`, `gs_name`, `gs_mobile`, `tr_name`, `tr_mobile`, `m1_name`, `m1_mobile`, `m2_name`, `m2_mobile`, `m3_name`, `m3_mobile`, `m4_name`, `m4_mobile`) VALUES
(1, 'sdfs', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', '', '', 'Maharashtra', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'dfgd', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'akshay', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', 'Havali', 'Pune', 'Maharashtra', 'akshay bavislar', '', 'bsc', '09767333310', 'Zldsjjkljjdlsj', 'fdgdfg', 'h463563', '', '345', 0, '', '23', 'fdhfd', 'hdfgh', 'gfjfgd', 'hgfhhfg', 'hgfhf', 'fgjhf', 'hfghg', '5475765', '2', 'dhfg', 'dhfg', 'hfhf', '45436456', '5', 'hfdh', 'hfhf', 'yreyre', '5754654', '4', 'reytery', 'ryre', 'yrete', '745657', '6', 'reert', 'ryret', 'ftr', '754767565', '6', 'yert', '6456546', 'erye', '6456546', 'yeryeyer', '564654', 'yerer', '46456', 'yetrr', '6456456', 'yert', '456', 'yryee', '645654', '', '65456546', 'erye', '5663454'),
(4, '', '', '', '', '', '', 'bsc', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'gdfs', 'ggdf', 'gdfgfd', '898776554', '7', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yryhrtyr', '09767333310', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reg_inam`
--

CREATE TABLE `reg_inam` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `taluka` varchar(222) NOT NULL,
  `district` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `location` varchar(225) NOT NULL,
  `ap_name` varchar(222) NOT NULL,
  `ap_mobile` varchar(222) NOT NULL,
  `ap_designation` varchar(222) NOT NULL,
  `inam_reg` varchar(222) NOT NULL,
  `reg_upload` varchar(222) NOT NULL,
  `tp_name` varchar(222) NOT NULL,
  `tp_mobile` varchar(222) NOT NULL,
  `tvp_name` varchar(222) NOT NULL,
  `tvp_mobile` varchar(222) NOT NULL,
  `s_name` varchar(222) NOT NULL,
  `s_mobile` varchar(222) NOT NULL,
  `gs_name` varchar(222) NOT NULL,
  `gs_mobile` varchar(222) NOT NULL,
  `tr_name` varchar(222) NOT NULL,
  `tr_mobile` varchar(222) NOT NULL,
  `m1_name` varchar(222) NOT NULL,
  `m1_mobile` varchar(222) NOT NULL,
  `m2_name` varchar(222) NOT NULL,
  `m2_mobile` varchar(222) NOT NULL,
  `m3_name` varchar(222) NOT NULL,
  `m3_mobile` varchar(222) NOT NULL,
  `m4_name` varchar(222) NOT NULL,
  `m4_mobile` varchar(222) NOT NULL,
  `b_detail` varchar(222) NOT NULL,
  `c_type` varchar(222) NOT NULL,
  `area` varchar(222) NOT NULL,
  `audit` varchar(222) NOT NULL,
  `compliance` varchar(222) NOT NULL,
  `if_pending` varchar(222) NOT NULL,
  `premises` varchar(222) NOT NULL,
  `expect` varchar(222) NOT NULL,
  `aff_reg` varchar(222) NOT NULL,
  `join_mmnf` varchar(222) NOT NULL,
  `fee_pdf` varchar(222) NOT NULL,
  `land_details` varchar(222) NOT NULL,
  `advice` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_inam`
--

INSERT INTO `reg_inam` (`id`, `name`, `address`, `taluka`, `district`, `state`, `location`, `ap_name`, `ap_mobile`, `ap_designation`, `inam_reg`, `reg_upload`, `tp_name`, `tp_mobile`, `tvp_name`, `tvp_mobile`, `s_name`, `s_mobile`, `gs_name`, `gs_mobile`, `tr_name`, `tr_mobile`, `m1_name`, `m1_mobile`, `m2_name`, `m2_mobile`, `m3_name`, `m3_mobile`, `m4_name`, `m4_mobile`, `b_detail`, `c_type`, `area`, `audit`, `compliance`, `if_pending`, `premises`, `expect`, `aff_reg`, `join_mmnf`, `fee_pdf`, `land_details`, `advice`) VALUES
(1, 'gfh', 'ram Nagar', 'Balapur', 'Akola', 'Maharashtra', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-Select Constructon Type-', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'asdf', 'Pune', 'Havali', 'Pune', 'Maharashtra', '', 'Rutuja', '9632587410', '', '789654', '', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', '', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'sfaf', 'Patra_Roof', '3456', 'yes', 'yess', 'Number', 'yes', 'Help', 'yes', 'yes', '', 'INDIA', 'Yes'),
(3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-Select Constructon Type-', '', '', '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-Select Constructon Type-', '', '', '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', 'public_html/safehandsakola.org/ban', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-Select Constructon Type-', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reg_individual`
--

CREATE TABLE `reg_individual` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `mobile` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `qualification` varchar(222) NOT NULL,
  `occ` varchar(222) NOT NULL,
  `experty` varchar(222) NOT NULL,
  `s_experience` varchar(222) NOT NULL,
  `age_group` varchar(222) NOT NULL,
  `gender` varchar(222) NOT NULL,
  `r_join` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_individual`
--

INSERT INTO `reg_individual` (`id`, `name`, `mobile`, `email`, `address`, `qualification`, `occ`, `experty`, `s_experience`, `age_group`, `gender`, `r_join`, `dttm`) VALUES
(1, 'Mohammad Sadarul Ula', '09767333310', 'mohd.noorulhuda@gmail.com', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', 'Post-Graduate', 'Web Designer', '16 yrs', 'Business_Development', '25-30', 'Male', 'No reason', '2022-03-07 00:00:00'),
(2, 'Mohammad Sadarul Ula', '09767333310', 'mohd.noorulhuda@gmail.com', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', '-Select-', '', '', '-Select-', '-Select-', '-Select', '', '2022-03-07 00:00:00'),
(3, 'Mohammad Sadarul Ula', '09767333310', 'mohd.noorulhuda@gmail.com', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', 'SSC', 'Web Designer', '16 yrs', 'Education', 'Below 15', 'Male', 'No reason', '2022-03-07 00:00:00'),
(4, 'ravi', '09767333310', 'mohd.noorulhuda@gmail.com', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', 'SSC', 'Web Designer', '16 yrs', 'Education', 'Below 15', 'Male', 'No reason', '2022-03-07 00:00:00'),
(5, 'samruddhi', '', '', '', '-Select-', '', '', '-Select-', '-Select-', '-Select', '', '2022-03-07 00:00:00'),
(6, 'Mohammad Sadarul Ula', '09767333310', 'mohd.noorulhuda@gmail.com', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', '-Select-', '', '', '-Select-', '-Select-', '-Select', '', '2022-03-07 00:00:00'),
(7, '', '', '', '', '-Select-', '', '', '-Select-', '-Select-', '-Select', '', '2022-03-07 00:00:00'),
(8, '', '', '', '', '-Select-', '', '', '-Select-', '-Select-', '-Select', '', '2022-03-07 00:00:00'),
(9, 'gdgdf', '', '', '', '-Select-', '', '', '-Select-', '-Select-', '-Select', '', '2022-03-07 00:00:00'),
(10, 'Mohammad Sadarul Ula', '09767333310', 'mohd.noorulhuda@gmail.com', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', '-Select-', '', '', '-Select-', '-Select-', '-Select', '', '2022-03-07 00:00:00'),
(11, 'Mohammad Sadarul Ula', '09767333310', 'mohd.noorulhuda@gmail.com', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', 'Docrate', 'Web Designer', '16 yrs', 'Business_Development', '30-35', 'Male', 'No reason', '2022-03-07 00:00:00'),
(12, 'Mohammad Sadarul Ula', '09767333310', 'mohd.noorulhuda@gmail.com', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', 'Post-Graduate', 'Web Designer', '16 yrs', 'Business_Development', '30-35', 'Male', 'No reason', '2022-03-08 18:29:36'),
(13, '', '', '', '', '-Select-', '', '', '-Select-', '-Select-', '-Select', '', '2022-03-31 10:32:47'),
(14, 'Mohammad Noorul Huda', '8857993980', 'mohd.noorulhud', 'Hinjawadi Phase 1, Pune', 'SSC', 'Web Designer', '16 yrs', 'Education', '15-20', 'Male', 'No reason', '2022-04-16 00:55:42'),
(15, 'Aishwaria asd', '9876543210', 'as@gmail.com', 'Hinjawadi, Pune', 'Post-Graduate', 'Web Designer', '16 yrs', 'Rural_Development', '25-30', 'Female', 'No reason', '2022-06-17 16:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `reg_kabrastan`
--

CREATE TABLE `reg_kabrastan` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `taluka` varchar(222) NOT NULL,
  `district` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `location` varchar(222) NOT NULL,
  `ap_name` varchar(222) NOT NULL,
  `ap_mobile` varchar(222) NOT NULL,
  `ap_designation` varchar(222) NOT NULL,
  `reg_no` varchar(222) NOT NULL,
  `reg_upload` varchar(222) NOT NULL,
  `tp_name` varchar(222) NOT NULL,
  `tp_mobile` varchar(222) NOT NULL,
  `tvp_name` varchar(222) NOT NULL,
  `tvp_mobile` varchar(222) NOT NULL,
  `s_name` varchar(222) NOT NULL,
  `s_mobile` varchar(222) NOT NULL,
  `gs_name` varchar(222) NOT NULL,
  `gs_mobile` varchar(222) NOT NULL,
  `tr_name` varchar(222) NOT NULL,
  `tr_mobile` varchar(222) NOT NULL,
  `m1_name` varchar(222) NOT NULL,
  `m1_mobile` varchar(222) NOT NULL,
  `m2_name` varchar(222) NOT NULL,
  `m2_mobile` varchar(222) NOT NULL,
  `m3_name` varchar(222) NOT NULL,
  `m3_mobile` varchar(222) NOT NULL,
  `m4_name` varchar(222) NOT NULL,
  `m4_mobile` varchar(222) NOT NULL,
  `p_detail` varchar(222) NOT NULL,
  `c_type` varchar(222) NOT NULL,
  `area` varchar(222) NOT NULL,
  `audit` varchar(222) NOT NULL,
  `compliance` varchar(222) NOT NULL,
  `if_pending` varchar(222) NOT NULL,
  `premises` varchar(222) NOT NULL,
  `expect` varchar(222) NOT NULL,
  `aff_reg` varchar(222) NOT NULL,
  `join_mmnf` varchar(222) NOT NULL,
  `fee_pdf` varchar(222) NOT NULL,
  `advice` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_kabrastan`
--

INSERT INTO `reg_kabrastan` (`id`, `name`, `address`, `taluka`, `district`, `state`, `location`, `ap_name`, `ap_mobile`, `ap_designation`, `reg_no`, `reg_upload`, `tp_name`, `tp_mobile`, `tvp_name`, `tvp_mobile`, `s_name`, `s_mobile`, `gs_name`, `gs_mobile`, `tr_name`, `tr_mobile`, `m1_name`, `m1_mobile`, `m2_name`, `m2_mobile`, `m3_name`, `m3_mobile`, `m4_name`, `m4_mobile`, `p_detail`, `c_type`, `area`, `audit`, `compliance`, `if_pending`, `premises`, `expect`, `aff_reg`, `join_mmnf`, `fee_pdf`, `advice`) VALUES
(1, 'sada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'dfs', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'b', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '65465', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', 'sdkajflsajdfkl', 'sada', 'Maharashtra', '', '', '09767333310', 'dfg', 'asdsadsa', '', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', '', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'sada', 'Patra_Roof', '34', 'yes', 'yess', 'sdfsdf', 'sdf', 'yes', 'sadfa', 'yes', '', 'sada'),
(5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mohammad Sadarul Ula', '09767333310', '', '', '', '', '', '', '', '', '', '', '', '', '', '-Select Constructon Type-', '', '', '', '', '', '', '', '', '', ''),
(6, 'cxvbcxv', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', 'Havali', 'Pune', 'Maharashtra', '', 'huda', '09767333310', 'sadfd', 'sada', '', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'sada', 'RCC', '34', 'yes', 'yess', 'tes', 'yes', 'yes', 'sadfa', 'yes', '', 'sdfas'),
(7, '', '', '', '', '', 'public_html/safehandsakola.org/ban', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-Select Constructon Type-', '', '', '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', 'public_html/safehandsakola.org/ban', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-Select Constructon Type-', '', '', '', '', '', '', '', '', '', ''),
(9, '', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', '', '', 'Maharashtra', 'public_html/safehandsakola.org/ban', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-Select Constructon Type-', '', '', '', '', '', '', '', '', '', ''),
(10, 'fgd', 'gdf', 'sdkajflsajdfkl', 'sada', '', 'dsadasd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-Select Constructon Type-', '', '', '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', 'public_html/safehandsakola.org/ban', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-Select Constructon Type-', '', '', '', '', '', '', '', '', '', ''),
(12, 'fgd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-Select Constructon Type-', '', '', '', '', '', '', '', '', '', ''),
(13, 'wqeqwqwewq', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', 'wqewq', 'wqe', 'Maharashtra', 'qweqw', 'wqewqqw', 'wqeqw', 'wqewq', 'qwewq', '', 'wqewq', 'wqeq', 'wqewq', 'wqeqw', 'wqewqe', 'wqewqe', 'wqewqe', 'wqewqe', 'wqe', 'wqewq', 'ewqe', 'wqewqe', 'wqe', 'wqewq', 'ewqe', 'wqewqe', 'wqe', 'wqewqe', 'wqe', 'Patra_Roof', '4324', '23423', '32423', '23423', '234', '342', '23423', '234', '', '234');

-- --------------------------------------------------------

--
-- Table structure for table `reg_madrasa`
--

CREATE TABLE `reg_madrasa` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `district` varchar(222) NOT NULL,
  `taluka` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `s_strength` varchar(222) NOT NULL,
  `course` varchar(222) NOT NULL,
  `p_name` varchar(222) NOT NULL,
  `p_mobile` varchar(222) NOT NULL,
  `p_designation` varchar(222) NOT NULL,
  `class` varchar(222) NOT NULL,
  `area` varchar(222) NOT NULL,
  `u1_name` varchar(222) NOT NULL,
  `u1_mobile` varchar(222) NOT NULL,
  `u1_qualification` varchar(222) NOT NULL,
  `d1_qualification` varchar(222) NOT NULL,
  `u2_name` varchar(222) NOT NULL,
  `u2_mobile` varchar(222) NOT NULL,
  `u2_qualification` varchar(222) NOT NULL,
  `d2_qualification` varchar(222) NOT NULL,
  `u3_name` varchar(222) NOT NULL,
  `u3_mobile` varchar(222) NOT NULL,
  `u3_qualification` varchar(222) NOT NULL,
  `d3_qualification` varchar(222) NOT NULL,
  `u4_name` varchar(222) NOT NULL,
  `u4_mobile` varchar(222) NOT NULL,
  `u4_qualification` varchar(222) NOT NULL,
  `d4_qualification` varchar(222) NOT NULL,
  `u5_name` varchar(222) NOT NULL,
  `u5_mobile` varchar(222) NOT NULL,
  `u5_qualification` varchar(222) NOT NULL,
  `d5_qualification` varchar(222) NOT NULL,
  `premise` varchar(222) NOT NULL,
  `av_ground` varchar(222) NOT NULL,
  `av_dining` varchar(222) NOT NULL,
  `source_water` varchar(222) NOT NULL,
  `em_mkit` varchar(222) NOT NULL,
  `govt_scheme` varchar(222) NOT NULL,
  `cgovt_scheme` varchar(222) NOT NULL,
  `diar_code` varchar(222) NOT NULL,
  `rl_teachers` varchar(222) NOT NULL,
  `r_audit` varchar(222) NOT NULL,
  `compliance` varchar(222) NOT NULL,
  `p_financial` varchar(222) NOT NULL,
  `f_raising` varchar(222) NOT NULL,
  `fee_receipt` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_madrasa`
--

INSERT INTO `reg_madrasa` (`id`, `name`, `title`, `address`, `district`, `taluka`, `state`, `s_strength`, `course`, `p_name`, `p_mobile`, `p_designation`, `class`, `area`, `u1_name`, `u1_mobile`, `u1_qualification`, `d1_qualification`, `u2_name`, `u2_mobile`, `u2_qualification`, `d2_qualification`, `u3_name`, `u3_mobile`, `u3_qualification`, `d3_qualification`, `u4_name`, `u4_mobile`, `u4_qualification`, `d4_qualification`, `u5_name`, `u5_mobile`, `u5_qualification`, `d5_qualification`, `premise`, `av_ground`, `av_dining`, `source_water`, `em_mkit`, `govt_scheme`, `cgovt_scheme`, `diar_code`, `rl_teachers`, `r_audit`, `compliance`, `p_financial`, `f_raising`, `fee_receipt`) VALUES
(1, '', '', '', '', '', '', '', '-Select Course-', '', '', '', '-Select-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'dmm foundati', 'charatable', 'sakdjaslkjklsajdlkasjkljkl', 'sdlkfjsklajklsaj', 'sdkajflsajdfkl', 'dsad', 'sadsad', 'RCC', 'sadas', 'sadas', 'sadas', 'RCC', '34', 'sadsa', 'asdasd', 'asdasd', 'sadsa', 'sadsa', 'sdasad', 'sadsa', 'sadsa', 'sadsa', 'sadsad', 'asdsa', 'dsadsa', 'dsad', 'sadsad', 'sad', 'sadsa', 'sadsa', 'sadsad', 'sadas', 'sad', 'sadas', 'sada', '', 'sadas', 'sad', '', 'sadas', 'sadas', 'sdaa', 'sadsa', 'sadsa', 'sad', 'sadas', ''),
(3, 'Madarsa Noorul Huda', 'Noorul Huda', 'ravivar Paith, Shivaji Nagar, Pune', 'Pune', 'Havali', 'Maharashtra', '500', 'Patra Roof', 'Akshay Baviskar', '9876543210', 'Presidet', 'RCC', '3456', 'akshay baviskar', '9385452458', 'bca', 'mca', 'aishwarya kashid', '6745645434', 'bcs', 'mcs', 'sadsa', '09767333310', 'asdsa', 'dsadsa', 'alash', '6534769767', 'bsc', 'msc', 'amir khan', '5476586868', 'bsc', 'msc', 'yes', 'yes', '', 'no', 'yes', 'yes', 'yes', 'yes', '24', 'yes', 'yes', 'yes', 'yes', ''),
(4, 'dsdsfdsf', 'sdfsd', 'sdfsd', 'sdfsd', 'sdfsd', 'sdfsdf', 'sdfsd', 'RCC', 'sdfsd', 'sdfsd', 'sdfsd', 'Patra Roof', '3456', 'fsdf', 'dfsdf', 'sdfsd', 'sdfds', 'dsfsd', 'fds', 'fsdf', 'dsfdsf', 'dsf', 'sdfds', 'fsd', 'fdsfds', 'fdsf', 'dsfsd', 'fsd', 'sdfdsf', 'dsfsd', 'df', 'sdf', 'sdf', 'dsfsd', 'dsfsd', '', 'dsf', 'sdf', 'sdf', 'sadas', 'sadas', 'hlkhl', 'sadsa', 'yess', 'sad', 'sadas', ''),
(5, '', '', '', '', '', '', '', '-Select Course-', '', '', '', '-Select-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '', '', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', '', '', 'Maharashtra', '', '-Select Course-', '', '', '', '-Select-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reg_mdc`
--

CREATE TABLE `reg_mdc` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `taluka` varchar(222) NOT NULL,
  `district` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `city` varchar(222) NOT NULL,
  `charity_reg` varchar(222) NOT NULL,
  `up_certificate` varchar(222) NOT NULL,
  `a_name` varchar(222) NOT NULL,
  `designation` varchar(222) NOT NULL,
  `m_id` varchar(222) NOT NULL,
  `mob_no` varchar(222) NOT NULL,
  `e_id` varchar(222) NOT NULL,
  `website` varchar(222) NOT NULL,
  `op_name` varchar(222) NOT NULL,
  `op_mob` varchar(222) NOT NULL,
  `op_edu` varchar(222) NOT NULL,
  `tp_name` varchar(222) NOT NULL,
  `tp_mobile` varchar(222) NOT NULL,
  `tvp_name` varchar(222) NOT NULL,
  `tvp_mobile` varchar(222) NOT NULL,
  `s_name` varchar(222) NOT NULL,
  `s_mobile` varchar(222) NOT NULL,
  `gs_name` varchar(222) NOT NULL,
  `gs_mobile` varchar(222) NOT NULL,
  `tr_name` varchar(222) NOT NULL,
  `tr_mobile` varchar(222) NOT NULL,
  `m1_name` varchar(222) NOT NULL,
  `m1_mobile` varchar(222) NOT NULL,
  `m2_name` varchar(222) NOT NULL,
  `m2_mobile` varchar(222) NOT NULL,
  `m3_name` varchar(222) NOT NULL,
  `m3_mobile` varchar(222) NOT NULL,
  `m4_name` varchar(222) NOT NULL,
  `m4_mobile` varchar(222) NOT NULL,
  `space` varchar(222) NOT NULL,
  `addr` longtext NOT NULL,
  `location` varchar(222) NOT NULL,
  `w_time` varchar(222) NOT NULL,
  `tables` varchar(222) NOT NULL,
  `chairs` varchar(222) NOT NULL,
  `cupboard` varchar(222) NOT NULL,
  `printer` varchar(222) NOT NULL,
  `scanner` varchar(222) NOT NULL,
  `internet` varchar(222) NOT NULL,
  `up_insideimg` varchar(222) NOT NULL,
  `up_outsideimg` varchar(222) NOT NULL,
  `up_boarding` varchar(222) NOT NULL,
  `up_regfee` varchar(222) NOT NULL,
  `acc_masjids` varchar(222) NOT NULL,
  `to_masjids` varchar(222) NOT NULL,
  `inst_city` varchar(222) NOT NULL,
  `inst_taluka` varchar(222) NOT NULL,
  `up_list` varchar(222) NOT NULL,
  `up_address` varchar(222) NOT NULL,
  `up_contact` varchar(222) NOT NULL,
  `t_notary` varchar(222) NOT NULL,
  `t_stamp` varchar(222) NOT NULL,
  `css_center` varchar(222) NOT NULL,
  `bc_bank` varchar(222) NOT NULL,
  `ins_advisor` varchar(222) NOT NULL,
  `int_mrc` varchar(222) NOT NULL,
  `min_exp` varchar(222) NOT NULL,
  `service` varchar(222) NOT NULL,
  `contribution` varchar(222) NOT NULL,
  `note_mdc` varchar(222) NOT NULL,
  `note_mmnf` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_mdc`
--

INSERT INTO `reg_mdc` (`id`, `name`, `address`, `taluka`, `district`, `state`, `city`, `charity_reg`, `up_certificate`, `a_name`, `designation`, `m_id`, `mob_no`, `e_id`, `website`, `op_name`, `op_mob`, `op_edu`, `tp_name`, `tp_mobile`, `tvp_name`, `tvp_mobile`, `s_name`, `s_mobile`, `gs_name`, `gs_mobile`, `tr_name`, `tr_mobile`, `m1_name`, `m1_mobile`, `m2_name`, `m2_mobile`, `m3_name`, `m3_mobile`, `m4_name`, `m4_mobile`, `space`, `addr`, `location`, `w_time`, `tables`, `chairs`, `cupboard`, `printer`, `scanner`, `internet`, `up_insideimg`, `up_outsideimg`, `up_boarding`, `up_regfee`, `acc_masjids`, `to_masjids`, `inst_city`, `inst_taluka`, `up_list`, `up_address`, `up_contact`, `t_notary`, `t_stamp`, `css_center`, `bc_bank`, `ins_advisor`, `int_mrc`, `min_exp`, `service`, `contribution`, `note_mdc`, `note_mmnf`) VALUES
(1, 'sdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'sdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'Mohammad Sadarul Ula', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', '', '', 'Maharashtra', 'Akola', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'Dmm Foundation', 'Ram Nagar, Akola', 'Balapur', 'Akola', 'Maharashta', 'Akola', 'CH_R123456789', '', 'Mohammad Sadarul Ula', 'Director', ' 123456789', '09767333310', 'mohd.noorulhuda@gmail.com', 'www.facebook.con', 'Ibrahim Khan', '8857993980', 'M.C.A.', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', '', '09767333310', 'Mohammad Sadarul Ula', '09767333310', '586', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', 'public_html/safehandsakola.org/ban', '9AM - 6PM', '', 'on', 'on', 'on', 'on', 'on', '', '', '', '', '5', 'Akola', 'Akola', 'yes', '', 'Dar-e-Arqam Lane No.12, near Babajan Masjid,', '09767333310', 'yes', 'yes', '', 'no', 'yes', 'yes', 'yes', '', 'yes', 'yes', 'yes'),
(5, 'Mohammad Sadarul Ula', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', 'Havali', 'Pune', 'Maharashtra', 'Akola', 'CH_R123456789', '', 'Mohammad Sadarul Ula', 'Director', '2121321321321321', '09767333310', 'mohd.noorulhuda@gmail.com', 'www.facebook.con', 'Ibrahim Khan', '09767333310', 'M.C.A.', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', '586', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', 'public_html/safehandsakola.org/ban', '9AM - 6PM', '', 'on', 'on', 'on', 'on', 'on', '', '', '', '', '5', 'Akola', 'Akola', 'yes', '', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', '09767333310', 'yes', 'yes', '', 'no', 'yes', 'yes', 'yes', '', 'yes', 'yes', 'yes'),
(6, 'Mohammad Sadarul Ula', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', '', '', 'Maharashtra', 'Akola', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'on', 'on', 'on', 'on', 'on', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'Mohammad Sadarul Ula', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', 'Havali', 'Pune', 'Maharashtra', 'Akola', 'CH_R123456789', '', 'Mohammad Sadarul Ula', 'Director', '2121321321321321', '09767333310', 'mohd.noorulhuda@gmail.com', 'www.facebook.con', 'Ibrahim Khan', '09767333310', 'M.C.A.', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', '586', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', 'public_html/safehandsakola.org/ban', '9AM - 6PM', '', 'on', 'on', 'on', 'on', 'on', '', '', '', '', '5', 'Akola', 'Akola', 'yes', '', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', '09767333310', 'yes', 'yes', '', 'no', 'yes', 'yes', 'yes', 'x-Ray', 'yes', 'yes', 'yes'),
(8, 'atgfdga', 'agdsds', 'ggds', 'ggdga', 'gdfg', 'Pune', 'Z-gdfg', '', 'Mohammad Sadarul Ula', 'Assistant Professional', '2121321321321321', '09767333310', 'mohd.noorulhuda@gmail.com', 'whatsapp', 'Ibrahim Khan', '09767333310', 'M.C.A.', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'Mohammad Sadarul Ula', '09767333310', 'gfdfd', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', 'hydrabad', '9AM - 6PM', '', 'on', 'on', 'on', 'on', 'on', '', '', '', '', 'ghsdg', 'Akola', 'Akola', '', '', 'gdfg', '09767333310', 'gf', 'yes', '', 'no', 'yes', 'yes', 'yes', 'x-Ray', 'yes', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `reg_mrc`
--

CREATE TABLE `reg_mrc` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `taluka` varchar(222) NOT NULL,
  `district` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `mdc_reg` varchar(222) NOT NULL,
  `ap_name` varchar(222) NOT NULL,
  `ap_mobile` varchar(222) NOT NULL,
  `ap_designation` varchar(222) NOT NULL,
  `w_time` varchar(222) NOT NULL,
  `d_name` varchar(222) NOT NULL,
  `d_qualification` varchar(222) NOT NULL,
  `d_mobile` varchar(222) NOT NULL,
  `space` varchar(222) NOT NULL,
  `lab` varchar(222) NOT NULL,
  `p_name` varchar(222) NOT NULL,
  `p_qualification` varchar(222) NOT NULL,
  `p_mobile` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_mrc`
--

INSERT INTO `reg_mrc` (`id`, `name`, `address`, `taluka`, `district`, `state`, `mdc_reg`, `ap_name`, `ap_mobile`, `ap_designation`, `w_time`, `d_name`, `d_qualification`, `d_mobile`, `space`, `lab`, `p_name`, `p_qualification`, `p_mobile`) VALUES
(1, 't', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'dsgadsg', 'dsaasga', 'gagdfg', 'gagfdfsa', 'maharashtra', 'Afg34234', 'dfshd fghg', '564778888', 'me', '9AM - 6PM', 'akshay baviskar', 'md', '9999999977', '586', 'hfhffgg', 'hhd', 'gfhffghdh', '6576998777');

-- --------------------------------------------------------

--
-- Table structure for table `reg_nct`
--

CREATE TABLE `reg_nct` (
  `id` int(11) NOT NULL,
  `r_no` varchar(2222) NOT NULL,
  `t_ngo` varchar(222) NOT NULL,
  `n_ngo` varchar(222) NOT NULL,
  `n_address` varchar(222) NOT NULL,
  `n_district` varchar(222) NOT NULL,
  `n_taluka` varchar(222) NOT NULL,
  `n_pin` varchar(222) NOT NULL,
  `o_contact` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `web` varchar(222) NOT NULL,
  `a_12` varchar(222) NOT NULL,
  `a_12_up` varchar(222) NOT NULL,
  `g_80` varchar(222) NOT NULL,
  `g_80_up` varchar(222) NOT NULL,
  `fcra` varchar(222) NOT NULL,
  `fcra_up` varchar(222) NOT NULL,
  `csr_1` varchar(222) NOT NULL,
  `csr_1_up` varchar(222) NOT NULL,
  `csr_2` varchar(222) NOT NULL,
  `csr_2_up` varchar(222) NOT NULL,
  `gst` varchar(222) NOT NULL,
  `gst_up` varchar(222) NOT NULL,
  `msme_reg` varchar(222) NOT NULL,
  `msme_reg_up` varchar(222) NOT NULL,
  `dar_reg` varchar(222) NOT NULL,
  `dar_reg_up` varchar(222) NOT NULL,
  `f1` varchar(222) NOT NULL,
  `f2` varchar(222) NOT NULL,
  `f3` varchar(222) NOT NULL,
  `f4` varchar(222) NOT NULL,
  `f5` varchar(222) NOT NULL,
  `ap1_name` varchar(222) NOT NULL,
  `ap1_mobile` varchar(222) NOT NULL,
  `ap1_mail` varchar(222) NOT NULL,
  `ap2_name` varchar(222) NOT NULL,
  `ap2_mobile` varchar(222) NOT NULL,
  `ap2_mail` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_nct`
--

INSERT INTO `reg_nct` (`id`, `r_no`, `t_ngo`, `n_ngo`, `n_address`, `n_district`, `n_taluka`, `n_pin`, `o_contact`, `email`, `web`, `a_12`, `a_12_up`, `g_80`, `g_80_up`, `fcra`, `fcra_up`, `csr_1`, `csr_1_up`, `csr_2`, `csr_2_up`, `gst`, `gst_up`, `msme_reg`, `msme_reg_up`, `dar_reg`, `dar_reg_up`, `f1`, `f2`, `f3`, `f4`, `f5`, `ap1_name`, `ap1_mobile`, `ap1_mail`, `ap2_name`, `ap2_mobile`, `ap2_mail`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', 'img7.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', '', '', '', '', '', 'img1.jpg', 'assets/documents/NGOC_CT/img2.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '', '', '', '', 'img1.jpg', 'assets/documents/NGOC_CT/img3.jpg', 'img3.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', '', '', '', 'img7.jpg', 'assets/documents/NGOC_CT/img6.jpg', 'img6.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', '', '', '', '', 'img7.jpg', 'assets/documents/NGOC_CT/img6.jpg', 'img6.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'Reg_12345678', 'Charity', 'DFF Foundation', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', 'Pune', 'havali', '411057', '09767333310', 'mohd.noorulhuda@gmail.com', 'www.mmnf.com', '1234578', '', 'assets/documents/NGOC_CT/', '', '12345678', '', '12345678', '', '12345678', '', '12345678', '', '12345678', '', '12345678', '', 'medical', 'health', 'education', 'development', 'xyz', 'noorul huda', '09767333310', 'mohd.noorulhuda@gmail.com', 'sadarul ula ', '09767333310', 'mohd.noorulhuda@gmail.com'),
(7, 'Reg_12345678', 'Trust', 'Mohammad Sadarul Ula', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', 'Pune', 'havali', '411057', '09767333310', 'mohd.noorulhuda@gmail.com', 'www.mmnf.com', '1234578', '', 'assets/documents/NGOC_CT/', '', '1123456789', '', '12345678', '', '12345678', '', '12345678', '', '12345678', '', '1234564132', '', 'medical', 'health', 'education', 'development', 'xyz', 'noorulhuda huda', '09767333310', 'mohd.noorulhuda@gmail.com', 'sadarul ula ', '09767333310', 'mohd.noorulhuda@gmail.com'),
(8, '', '', 'Mohammad Sadarul Ula', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', '', '', '', '09767333310', 'mohd.noorulhuda@gmail.com', '', '', 'WhatsApp Image 2022-03-09 at 6.48.34 PM.jpeg', '', 'WhatsApp Image 2022-03-09 at 6.48.34 PM.jpeg', '', 'WhatsApp Image 2022-03-09 at 11.54.25 AM.jpeg', '', 'WhatsApp Image 2022-03-09 at 6.48.34 PM.jpeg', '', 'beautiful-african-female-graduate-smiling-pointing-finger-side.jpg', '', '12 december 2021.jpg', '', 'WhatsApp Image 2022-03-09 at 6.48.34 PM.jpeg', '', 'WhatsApp Image 2022-03-09 at 6.48.34 PM.jpeg', 'medical', 'health', 'education', 'development', 'xyz', 'noorul huda', '09767333310', 'mohd.noorulhuda@gmail.com', 'sadarul ula ', '09767333310', 'mohd.noorulhuda@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reg_technobuiz`
--

CREATE TABLE `reg_technobuiz` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `district` varchar(222) NOT NULL,
  `talukha` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `ap_name` varchar(222) NOT NULL,
  `ap_mobile` varchar(222) NOT NULL,
  `ap_designation` varchar(222) NOT NULL,
  `s_strength` varchar(222) NOT NULL,
  `e_type` varchar(222) NOT NULL,
  `course` varchar(222) NOT NULL,
  `teaching` varchar(222) NOT NULL,
  `non_teaching` varchar(222) NOT NULL,
  `m_type` varchar(222) NOT NULL,
  `reg` varchar(222) NOT NULL,
  `infra_class_sq` varchar(222) NOT NULL,
  `infra_class_yn` varchar(222) NOT NULL,
  `infra_ground_sq` varchar(222) NOT NULL,
  `infra_ground_yn` varchar(222) NOT NULL,
  `infra_lab_sq` varchar(222) NOT NULL,
  `infra_lab_yn` varchar(222) NOT NULL,
  `infra_lib_sq` varchar(222) NOT NULL,
  `infra_lib_yn` varchar(222) NOT NULL,
  `infra_lob_sq` varchar(222) NOT NULL,
  `infra_lob_yn` varchar(222) NOT NULL,
  `infra_wifi_yn` varchar(222) NOT NULL,
  `institute` varchar(222) NOT NULL,
  `gov_enjoy` varchar(222) NOT NULL,
  `reg_nios` varchar(222) NOT NULL,
  `reg_center` varchar(222) NOT NULL,
  `add_activity` varchar(222) NOT NULL,
  `upload_fee_transfer` varchar(222) NOT NULL,
  `tp_name` varchar(222) NOT NULL,
  `tp_mobile` varchar(222) NOT NULL,
  `tvp_name` varchar(222) NOT NULL,
  `tvp_mobile` varchar(222) NOT NULL,
  `s_name` varchar(222) NOT NULL,
  `s_mobile` varchar(222) NOT NULL,
  `gs_name` varchar(222) NOT NULL,
  `gs_mobile` varchar(222) NOT NULL,
  `tr_name` varchar(222) NOT NULL,
  `tr_mobile` varchar(222) NOT NULL,
  `m1_name` varchar(222) NOT NULL,
  `m1_mobile` varchar(222) NOT NULL,
  `m2_name` varchar(222) NOT NULL,
  `m2_mobile` varchar(222) NOT NULL,
  `m3_name` varchar(222) NOT NULL,
  `m3_mobile` varchar(222) NOT NULL,
  `m4_name` varchar(222) NOT NULL,
  `m4_mobile` varchar(222) NOT NULL,
  `upload_trusty` varchar(222) NOT NULL,
  `support` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_technobuiz`
--

INSERT INTO `reg_technobuiz` (`id`, `name`, `title`, `address`, `district`, `talukha`, `state`, `ap_name`, `ap_mobile`, `ap_designation`, `s_strength`, `e_type`, `course`, `teaching`, `non_teaching`, `m_type`, `reg`, `infra_class_sq`, `infra_class_yn`, `infra_ground_sq`, `infra_ground_yn`, `infra_lab_sq`, `infra_lab_yn`, `infra_lib_sq`, `infra_lib_yn`, `infra_lob_sq`, `infra_lob_yn`, `infra_wifi_yn`, `institute`, `gov_enjoy`, `reg_nios`, `reg_center`, `add_activity`, `upload_fee_transfer`, `tp_name`, `tp_mobile`, `tvp_name`, `tvp_mobile`, `s_name`, `s_mobile`, `gs_name`, `gs_mobile`, `tr_name`, `tr_mobile`, `m1_name`, `m1_mobile`, `m2_name`, `m2_mobile`, `m3_name`, `m3_mobile`, `m4_name`, `m4_mobile`, `upload_trusty`, `support`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '-Select Education-', '', '', '', '-Select Language-', '', '', '', '', '', '', '', '', '', '', '', '', '-Select institute-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'gfhf'),
(2, 'fg', '', '', '', '', '', '', '', '', '', '-Select Education-', '', '', '', '-Select Language-', '', '', '', '', '', '', '', '', '', '', '', '', '-Select institute-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'rrerqw', 'agfddfg', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', 'Pune', '', 'Maharashtra', 'akshay', '936575675445', 'asda', '500', 'Primary', 'fgdgfd', '54', 'dgfdfg', 'Hindi', 'yes', '34', '', '345', '', '54', '', '45', '', '45', '', '', 'Permanent', 'yr', 'rtety', 'retr', 'reyeyre', '', 'ryery', '6756757', 'yeyre', '575575', 'ryreyer', '75765765', 'yerre', '75765', 'reyer', '575676', 'rey', '575657', 'eytr', '756765', '', '5474574', 'eyrrey', '7756', '', 'gfhf'),
(4, '', '', '', '', '', '', '', '', '', '', '-Select Education-', '', '', '', '-Select Language-', '', '', '', '', '', '', '', '', '', '', '', '', '-Select institute-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'aiskhfhd', '88888888', '', '', '', ''),
(5, '', '', '', '', 'haveli', '', '', '', '', '', '-Select Education-', '', '', '', '-Select Language-', '', '', '', '', '', '', '', '', '', '', '', '', '-Select institute-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'Madhuri', 'dy patil', 'pimpri', 'Pune', 'haveli', '', 'rakesh patil', '777777777', 'me', '', '-Select Education-', '', '', '', '-Select Language-', '', '', '', '', '', '', '', '', '', '', '', '', '-Select institute-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reg_tijarat`
--

CREATE TABLE `reg_tijarat` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `mobile` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `education` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `o_address` varchar(222) NOT NULL,
  `w_address` varchar(222) NOT NULL,
  `b_type` varchar(222) NOT NULL,
  `b_title` varchar(222) NOT NULL,
  `shopact` varchar(222) NOT NULL,
  `gst` varchar(222) NOT NULL,
  `msme` varchar(222) NOT NULL,
  `p_tax` varchar(222) NOT NULL,
  `esic` varchar(222) NOT NULL,
  `fassai` varchar(222) NOT NULL,
  `s_skilled` varchar(222) NOT NULL,
  `s_loan` varchar(222) NOT NULL,
  `m_scheme` varchar(222) NOT NULL,
  `f_loan` varchar(222) NOT NULL,
  `credit_loan` varchar(222) NOT NULL,
  `b_turnover` varchar(222) NOT NULL,
  `website` varchar(222) NOT NULL,
  `app` varchar(222) NOT NULL,
  `soc_media` varchar(222) NOT NULL,
  `platform` varchar(222) NOT NULL,
  `traning` varchar(222) NOT NULL,
  `account_h` varchar(222) NOT NULL,
  `coach` varchar(222) NOT NULL,
  `expect` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_tijarat`
--

INSERT INTO `reg_tijarat` (`id`, `name`, `mobile`, `email`, `education`, `address`, `o_address`, `w_address`, `b_type`, `b_title`, `shopact`, `gst`, `msme`, `p_tax`, `esic`, `fassai`, `s_skilled`, `s_loan`, `m_scheme`, `f_loan`, `credit_loan`, `b_turnover`, `website`, `app`, `soc_media`, `platform`, `traning`, `account_h`, `coach`, `expect`) VALUES
(1, '0', '0', '0', '0', '0', '', '', '-Type of business-', '', '', '', '', '', '', '', '-select-', '', '', '', '', '-select-', '', '', '-select-', '', '', '', '', ''),
(2, '0', '0', '0', '0', '0', 'hjfhjjhg', 'fghg', 'rcc', 'hfhgd', 'ffghfdg', 'fhhfg', 'gfhfghf', 'fhdgfdh', 'ghfdhh', 'dhghdh', 'skilled', 'fgdhdfh', 'fdhfdh', 'dhgf', 'fghdd', 'upto2', 'gfjhgdfh', 'fgjhdjh', 'fb', 'ghfh', '', 'fghghfg', 'fhffh', 'ghfhfg'),
(3, 'dsfdfgfd', 'fddhdfd', 'fhdfdhdf', 'hddfhfg', 'hdhfdhdh', 'fdhdhhd', 'hfhfhf', '-Type of business-', '', '', '', '', '', '', '', '-select-', '', '', '', '', '-select-', '', '', '-select-', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', 'patra_roof', 'rhydrdy', '', '', '', '', '', '', '-select-', '', '', '', '', '-select-', '', '', '-select-', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reg_waqf`
--

CREATE TABLE `reg_waqf` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `district` varchar(222) NOT NULL,
  `taluka` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `ap_name` varchar(222) NOT NULL,
  `ap_mobile` varchar(222) NOT NULL,
  `ap_designation` varchar(222) NOT NULL,
  `waqf_reg` varchar(222) NOT NULL,
  `reg_pdf` varchar(222) NOT NULL,
  `tp_name` varchar(222) NOT NULL,
  `tp_mobile` varchar(222) NOT NULL,
  `tvp_name` varchar(222) NOT NULL,
  `tvp_mobile` varchar(222) NOT NULL,
  `s_name` varchar(222) NOT NULL,
  `s_mobile` varchar(222) NOT NULL,
  `gs_name` varchar(222) NOT NULL,
  `gs_mobile` varchar(222) NOT NULL,
  `tr_name` varchar(222) NOT NULL,
  `tr_mobile` varchar(222) NOT NULL,
  `m1_name` varchar(222) NOT NULL,
  `m1_mobile` varchar(222) NOT NULL,
  `m2_name` varchar(222) NOT NULL,
  `m2_mobile` varchar(222) NOT NULL,
  `m3_name` varchar(222) NOT NULL,
  `m3_mobile` varchar(222) NOT NULL,
  `m4_name` varchar(222) NOT NULL,
  `m4_mobile` varchar(222) NOT NULL,
  `building` varchar(222) NOT NULL,
  `c_type` varchar(222) NOT NULL,
  `area` varchar(222) NOT NULL,
  `audit` varchar(222) NOT NULL,
  `compliance` varchar(222) NOT NULL,
  `if_pending` varchar(222) NOT NULL,
  `premises` varchar(222) NOT NULL,
  `expect` varchar(222) NOT NULL,
  `aff_reg` varchar(222) NOT NULL,
  `join_mmnf` varchar(222) NOT NULL,
  `fee_pdf` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_waqf`
--

INSERT INTO `reg_waqf` (`id`, `name`, `address`, `district`, `taluka`, `state`, `ap_name`, `ap_mobile`, `ap_designation`, `waqf_reg`, `reg_pdf`, `tp_name`, `tp_mobile`, `tvp_name`, `tvp_mobile`, `s_name`, `s_mobile`, `gs_name`, `gs_mobile`, `tr_name`, `tr_mobile`, `m1_name`, `m1_mobile`, `m2_name`, `m2_mobile`, `m3_name`, `m3_mobile`, `m4_name`, `m4_mobile`, `building`, `c_type`, `area`, `audit`, `compliance`, `if_pending`, `premises`, `expect`, `aff_reg`, `join_mmnf`, `fee_pdf`) VALUES
(1, 'sasad', 'Ram Nagar, Behind Lrt College, Amankhan Plots, Akola', 'sada', 'asda', 'Maharashtra', 'sadas', 'sadas', '', '', '', 'dsad', 'asda', 'asda', 'asdas', 'asda', 'asda', 'asdas', 'sadasd', 'asdas', 'dasd', 'asdas', 'dasd', 'asdsa', 'asdas', '', 'asd', 'asd', 'adsa', '', 'RCC', 'sadad', 'sad', 'yess', 'tes', 'yes', 'yes', 'sadfa', 'yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `upload` varchar(222) NOT NULL,
  `datee` varchar(222) NOT NULL,
  `dttm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `title`, `description`, `upload`, `datee`, `dttm`) VALUES
(7, 'gdf', 'dfgd', '396183_394514463951660_207998085_n.jpg', 'dfgdf', '2022-03-07 20:59:17'),
(8, 'sa', 'asa', 'Weg_logo.png', '', '2022-06-27 12:16:08'),
(9, 'xczcgzd', 'szfsa', 'Hitachi_logo.png', '10/26/2021', '2022-06-27 12:17:48');

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
(2, 'pranesh', 'pranesh@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2022-03-04 14:07:27'),
(3, 'm_noorul_huda', 'mohd.noorulhuda@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2022-04-15 22:39:44');

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
(4, 'mmnf march', 'gsdfgadgasg', '<iframe class=\"embed-responsive\" src=\"https://www.youtube.com/embed/IIhoXcTrtGI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '10/27/2021', '2022-03-08 18:28:12'),
(5, 'testing of Vedio Gallery', 'sdadas', '<iframe class=\"embed-responsive\"  src=\"https://www.youtube.com/embed/mmQ7PmDo2fQ?list=RDmmQ7PmDo2fQ\" title=\"Dino James - Pyaar Pyaar (Official Video) | Prod. By AAKASH | Def Jam India\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '10/27/2021', '2022-06-27 11:53:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_inq_ace`
--
ALTER TABLE `dept_inq_ace`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_inq_bdf`
--
ALTER TABLE `dept_inq_bdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_inq_cdc`
--
ALTER TABLE `dept_inq_cdc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_inq_disaster_mg`
--
ALTER TABLE `dept_inq_disaster_mg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_inq_dpc`
--
ALTER TABLE `dept_inq_dpc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_inq_financial_dev`
--
ALTER TABLE `dept_inq_financial_dev`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_inq_healthcare`
--
ALTER TABLE `dept_inq_healthcare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_inq_hrnl`
--
ALTER TABLE `dept_inq_hrnl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_inq_marti`
--
ALTER TABLE `dept_inq_marti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_inq_mdc`
--
ALTER TABLE `dept_inq_mdc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_inq_sdf`
--
ALTER TABLE `dept_inq_sdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_inq_technobuiz`
--
ALTER TABLE `dept_inq_technobuiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_inq_travel`
--
ALTER TABLE `dept_inq_travel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_inq_waqi_dev`
--
ALTER TABLE `dept_inq_waqi_dev`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_inq_women_emp`
--
ALTER TABLE `dept_inq_women_emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_achievement`
--
ALTER TABLE `events_achievement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guest_lecture`
--
ALTER TABLE `guest_lecture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helping_hands`
--
ALTER TABLE `helping_hands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_media`
--
ALTER TABLE `news_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_board`
--
ALTER TABLE `notice_board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photogallery`
--
ALTER TABLE `photogallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_cdc`
--
ALTER TABLE `reg_cdc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_inam`
--
ALTER TABLE `reg_inam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_individual`
--
ALTER TABLE `reg_individual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_kabrastan`
--
ALTER TABLE `reg_kabrastan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_madrasa`
--
ALTER TABLE `reg_madrasa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_mdc`
--
ALTER TABLE `reg_mdc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_mrc`
--
ALTER TABLE `reg_mrc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_nct`
--
ALTER TABLE `reg_nct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_technobuiz`
--
ALTER TABLE `reg_technobuiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_tijarat`
--
ALTER TABLE `reg_tijarat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_waqf`
--
ALTER TABLE `reg_waqf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videogallery`
--
ALTER TABLE `videogallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dept_inq_ace`
--
ALTER TABLE `dept_inq_ace`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dept_inq_bdf`
--
ALTER TABLE `dept_inq_bdf`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dept_inq_cdc`
--
ALTER TABLE `dept_inq_cdc`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dept_inq_disaster_mg`
--
ALTER TABLE `dept_inq_disaster_mg`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dept_inq_dpc`
--
ALTER TABLE `dept_inq_dpc`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dept_inq_financial_dev`
--
ALTER TABLE `dept_inq_financial_dev`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dept_inq_healthcare`
--
ALTER TABLE `dept_inq_healthcare`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dept_inq_hrnl`
--
ALTER TABLE `dept_inq_hrnl`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dept_inq_marti`
--
ALTER TABLE `dept_inq_marti`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dept_inq_mdc`
--
ALTER TABLE `dept_inq_mdc`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dept_inq_sdf`
--
ALTER TABLE `dept_inq_sdf`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dept_inq_technobuiz`
--
ALTER TABLE `dept_inq_technobuiz`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dept_inq_travel`
--
ALTER TABLE `dept_inq_travel`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dept_inq_waqi_dev`
--
ALTER TABLE `dept_inq_waqi_dev`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dept_inq_women_emp`
--
ALTER TABLE `dept_inq_women_emp`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events_achievement`
--
ALTER TABLE `events_achievement`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guest_lecture`
--
ALTER TABLE `guest_lecture`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `helping_hands`
--
ALTER TABLE `helping_hands`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news_media`
--
ALTER TABLE `news_media`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notice_board`
--
ALTER TABLE `notice_board`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `photogallery`
--
ALTER TABLE `photogallery`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reg_cdc`
--
ALTER TABLE `reg_cdc`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reg_inam`
--
ALTER TABLE `reg_inam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reg_individual`
--
ALTER TABLE `reg_individual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reg_kabrastan`
--
ALTER TABLE `reg_kabrastan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reg_madrasa`
--
ALTER TABLE `reg_madrasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reg_mdc`
--
ALTER TABLE `reg_mdc`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reg_mrc`
--
ALTER TABLE `reg_mrc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reg_nct`
--
ALTER TABLE `reg_nct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reg_technobuiz`
--
ALTER TABLE `reg_technobuiz`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reg_tijarat`
--
ALTER TABLE `reg_tijarat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reg_waqf`
--
ALTER TABLE `reg_waqf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videogallery`
--
ALTER TABLE `videogallery`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
