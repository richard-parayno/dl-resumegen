-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2015 at 03:45 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `userdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `ResumeGenerator-BasicInfo`
--

CREATE TABLE `ResumeGenerator-BasicInfo` (
`id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `telephone_number` int(11) NOT NULL,
  `mobile_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ResumeGenerator-EducBG`
--

CREATE TABLE `ResumeGenerator-EducBG` (
`id` int(11) NOT NULL,
  `year_of_graduation` date NOT NULL,
  `school` varchar(255) NOT NULL,
  `awards` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
`id` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `birth_day` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `create_date`, `email`, `first_name`, `last_name`, `password`, `college`, `birth_day`) VALUES
(1, '2015-03-27', 'richard_parayno@dlsu.edu.ph', 'Richard', 'Parayno', 'RichardCCS', 'College of Computer Studies (CCS)', '05-01-1997'),
(2, '2015-03-27', 'janzaeinstein_villamayor@dlsu.edu.ph', 'Janz', 'Villamayor', 'JanzCCS', 'College of Computer Studies (CCS)', '12-23-1997');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ResumeGenerator-BasicInfo`
--
ALTER TABLE `ResumeGenerator-BasicInfo`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ResumeGenerator-EducBG`
--
ALTER TABLE `ResumeGenerator-EducBG`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ResumeGenerator-BasicInfo`
--
ALTER TABLE `ResumeGenerator-BasicInfo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ResumeGenerator-EducBG`
--
ALTER TABLE `ResumeGenerator-EducBG`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
