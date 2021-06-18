-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 08:01 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prodaja`
--
CREATE DATABASE IF NOT EXISTS `7224_prodaja` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `7224_prodaja`;

-- --------------------------------------------------------

--
-- Table structure for table `prodaja`
--

CREATE TABLE `prodaja` (
  `id` int(11) NOT NULL,
  `barkod` int(3) NOT NULL,
  `kolicina` int(3) NOT NULL,
  `cena` double(9,2) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodaja`
--

INSERT INTO `prodaja` (`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES
(1, 100, 3, 220.00, '2021-06-17'),
(2, 100, 1, 200.00, '2021-06-16'),
(3, 100, 5, 200.00, '2021-05-01'),
(4, 100, 2, 220.00, '2021-06-17'),
(5, 200, 1, 300.00, '2021-06-16'),
(6, 200, 2, 300.00, '2021-05-01'),
(7, 200, 1, 330.00, '2021-06-17'),
(8, 200, 5, 300.00, '2021-05-01'),
(9, 300, 1, 100.00, '2021-06-16'),
(10, 300, 2, 110.00, '2021-06-17'),
(11, 300, 4, 100.00, '2021-06-16'),
(12, 776, 30, 50.00, '2021-05-01'),
(13, 761, 25, 88.00, '2021-06-17'),
(14, 761, 60, 80.00, '2021-06-16'),
(15, 761, 25, 80.00, '2021-05-01'),
(17, 789, 20, 220.00, '2021-06-17'),
(18, 789, 40, 275.00, '2021-06-17'),
(19, 789, 10, 242.00, '2021-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `barkod` int(3) NOT NULL,
  `naziv` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cena` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`barkod`, `naziv`, `cena`) VALUES
(100, 'patike', '200.00'),
(200, 'cipele', '300.00'),
(300, 'papuce', '100.00'),
(761, 'beli luk', '80.00'),
(776, 'crni luk', '50.00'),
(789, 'paradajz', '200.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barkod` (`barkod`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`barkod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodaja`
--
ALTER TABLE `prodaja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD CONSTRAINT `prodaja_ibfk_1` FOREIGN KEY (`barkod`) REFERENCES `proizvodi` (`barkod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
