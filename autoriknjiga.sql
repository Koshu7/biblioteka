-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 12:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autoriknjiga`
--

-- --------------------------------------------------------

--
-- Table structure for table `autor`
--

CREATE TABLE `autor` (
  `id` int(10) UNSIGNED NOT NULL,
  `ime` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `autor`
--

INSERT INTO `autor` (`id`, `ime`, `prezime`) VALUES
(1, 'Ivo', 'Andric'),
(2, 'Mesa', 'Selimovic'),
(3, 'Den', 'Brown'),
(4, 'Miroslav', 'Krleza');

-- --------------------------------------------------------

--
-- Table structure for table `knjiga`
--

CREATE TABLE `knjiga` (
  `id` int(10) UNSIGNED NOT NULL,
  `naslov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `izdavac` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `godina` int(10) UNSIGNED NOT NULL,
  `autor_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `knjiga`
--

INSERT INTO `knjiga` (`id`, `naslov`, `izdavac`, `godina`, `autor_id`) VALUES
(1, 'Na Drini cuprija', 'Narodna Knjiga', 1940, 1),
(2, 'Most na Zepi', 'Biblioteka Jugoslavija', 1950, 1),
(3, 'Inferno', 'Laguna', 2012, 3),
(4, 'Dervis i Smrt', 'NIN', 1960, 2);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tabela`
-- (See below for the actual view)
--
CREATE TABLE `tabela` (
`id` int(10) unsigned
,`ime` varchar(64)
,`prezime` varchar(64)
,`naslov` varchar(255)
,`izdavac` varchar(255)
,`godina` int(10) unsigned
);

-- --------------------------------------------------------

--
-- Structure for view `tabela`
--
DROP TABLE IF EXISTS `tabela`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tabela`  AS  select `knjiga`.`id` AS `id`,`autor`.`ime` AS `ime`,`autor`.`prezime` AS `prezime`,`knjiga`.`naslov` AS `naslov`,`knjiga`.`izdavac` AS `izdavac`,`knjiga`.`godina` AS `godina` from (`autor` join `knjiga` on(`autor`.`id` = `knjiga`.`autor_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `knjiga`
--
ALTER TABLE `knjiga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_autor_id` (`autor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `knjiga`
--
ALTER TABLE `knjiga`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `knjiga`
--
ALTER TABLE `knjiga`
  ADD CONSTRAINT `fk_autor_id` FOREIGN KEY (`autor_id`) REFERENCES `autor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
