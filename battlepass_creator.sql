-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 22, 2020 at 07:03 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_zibuu`
--

-- --------------------------------------------------------

--
-- Table structure for table `battlepass_creator`
--

CREATE TABLE `battlepass_creator` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `creator` varchar(15) NOT NULL,
  `week` int(2) NOT NULL,
  `week_day` int(2) NOT NULL,
  `type` varchar(120) NOT NULL,
  `variable` varchar(120) NOT NULL,
  `name` varchar(120) NOT NULL,
  `requiredprogress` mediumint(9) NOT NULL,
  `expworth` bigint(20) NOT NULL,
  `exclusive` varchar(120) NOT NULL,
  `item` varchar(120) NOT NULL,
  `item_name` varchar(120) NOT NULL,
  `lore` varchar(30) NOT NULL,
  `lore_second` varchar(30) NOT NULL,
  `lore_third` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `battlepass_creator`
--
ALTER TABLE `battlepass_creator`
  ADD PRIMARY KEY (`id`),
  ADD KEY `week` (`week`),
  ADD KEY `week_index` (`week_day`),
  ADD KEY `type` (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `battlepass_creator`
--
ALTER TABLE `battlepass_creator`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
