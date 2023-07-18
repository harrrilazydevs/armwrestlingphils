-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 04:00 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projects_awph`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clubpage_configuration`
--

CREATE TABLE `tbl_clubpage_configuration` (
  `id` int(11) NOT NULL,
  `club_id` int(11) NOT NULL,
  `background` text NOT NULL,
  `color` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_clubpage_configuration`
--

INSERT INTO `tbl_clubpage_configuration` (`id`, `club_id`, `background`, `color`) VALUES
(1, 1, '#141516', '#fff');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clubs`
--

CREATE TABLE `tbl_clubs` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `alias` varchar(200) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_clubs`
--

INSERT INTO `tbl_clubs` (`id`, `name`, `alias`, `img`) VALUES
(1, 'Titan Arms Taguig', 'TATAG', 'src/public/club_logos/tatag.png'),
(2, 'Cavite Arm Fighters', 'CAF', 'src/public/club_logos/caf.jpg'),
(3, 'Cavite Arm Warriors', 'CAW', 'src/public/club_logos/caw.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_club_members`
--

CREATE TABLE `tbl_club_members` (
  `id` int(11) NOT NULL,
  `club_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_club_members`
--

INSERT INTO `tbl_club_members` (`id`, `club_id`, `name`, `position`) VALUES
(1, 1, 'Dranreb', 'FOUNDER'),
(2, 1, 'Jay', 'MEMBER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_clubpage_configuration`
--
ALTER TABLE `tbl_clubpage_configuration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_clubs`
--
ALTER TABLE `tbl_clubs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_club_members`
--
ALTER TABLE `tbl_club_members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_clubpage_configuration`
--
ALTER TABLE `tbl_clubpage_configuration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_clubs`
--
ALTER TABLE `tbl_clubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_club_members`
--
ALTER TABLE `tbl_club_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
