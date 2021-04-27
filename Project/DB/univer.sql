-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 11:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `univer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `pass` varchar(15) COLLATE utf8_croatian_ci NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `mail`, `pass`, `id`) VALUES
('Amr', 'admin@admin', 'admin', 1),
('Mohamed', 'admin@admin', 'admin', 3),
('test', 'test@test', 'test', 5);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `faculty_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `c1` varchar(30) COLLATE utf8_croatian_ci NOT NULL,
  `c2` varchar(30) COLLATE utf8_croatian_ci NOT NULL,
  `c3` varchar(30) COLLATE utf8_croatian_ci NOT NULL,
  `c4` varchar(30) COLLATE utf8_croatian_ci NOT NULL,
  `c5` varchar(30) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`faculty_id`, `id`, `c1`, `c2`, `c3`, `c4`, `c5`) VALUES
(1, 7, 'DataStructure', 'Logic Design', 'Math 1', 'Math 2', 'Math  3'),
(1, 8, 'Algoritms', 'Programming', 'Multimedia', 'Network', 'GIS'),
(20, 9, 'Drawing', 'Photoshop', 'Colours', 'Design', 'Shop Drawing');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `university` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `expirtise` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `interest` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `department` varchar(30) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `university`, `expirtise`, `interest`, `image`, `department`) VALUES
(1, 'Computer Science', 'Cairo', 'Programming , Analysis', 'software engineering', 'FCI.jpg', 'science'),
(20, 'Applied Arts', 'Cairo', 'Art', 'Photography , drawing ', 'AA.jpg', 'Photography , Design'),
(21, 'test', 'test', 'test', 'test', 'FCI.jpg', 'test'),
(22, 'test', 'test', 'test', 'test', 'headerBack.jpg', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
