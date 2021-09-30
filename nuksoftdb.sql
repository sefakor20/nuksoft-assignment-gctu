-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 30, 2021 at 02:02 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nuksoftdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactstb`
--

CREATE TABLE `contactstb` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `digital_address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone_number` char(16) NOT NULL DEFAULT '0000000000000000',
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactstb`
--

INSERT INTO `contactstb` (`id`, `names`, `digital_address`, `email`, `telephone_number`, `message`) VALUES
(1, 'Norvinu Linda', 'VH-182-9984', 'nlinda@gmail.com', '0509922345', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(2, 'Kofi Mensah', '9988940mds', 'example@me.com', '234355655', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'Stephen Wilkins', 'At sint libero esse ', 'jycu@mailinator.com', '0509228314', 'Quod numquam volupta'),
(4, 'Josiah Morales', 'Libero eos qui aperi', 'tyle@mailinator.com', '055322092', 'Fugiat ut sit exer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactstb`
--
ALTER TABLE `contactstb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactstb`
--
ALTER TABLE `contactstb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
