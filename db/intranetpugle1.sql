-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2016 at 04:39 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `intranetpugle`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categorias` int(10) NOT NULL AUTO_INCREMENT,
  `intranet_cat` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_categorias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `trackboards`
--

CREATE TABLE IF NOT EXISTS `trackboards` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `main_cat` int(50) DEFAULT NULL,
  `sub_cat` int(50) DEFAULT NULL,
  `to_do` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `comments` longtext COLLATE utf8_spanish2_ci NOT NULL,
  `priority` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `done` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `trackboards`
--

INSERT INTO `trackboards` (`id`, `main_cat`, `sub_cat`, `to_do`, `comments`, `priority`, `done`, `fecha`) VALUES
(1, 1, 2, '3', '4', 'Hola', 'Justin', NULL),
(2, 1, 2, '3', '4', 'Hola', 'Justin', NULL),
(3, 1, 2, '3', '4', 'Hola', 'Justin', NULL),
(4, 1, 2, '3', '4', 'Hola', 'Justin', NULL),
(5, 1, 2, '3', '4', 'Hola', 'Amaia Rascon', NULL),
(6, 1, 2, '3', '4', 'Hola', 'Amaia Rascon', NULL),
(7, 1, 2, '3', '4', 'Hola', 'Amaia Rascon', NULL),
(8, 1, 2, '3', '4', 'Hola', 'Amaia Rascon', NULL),
(9, 1, 2, '3', '4', 'Hola', 'Maitane Rascon', NULL),
(10, 1, 2, '3', 'Hot Maitane', 'Hola', 'Maitane Rascon', NULL),
(11, 1, 2, 'Fuck Maitane', 'Hot Maitane', 'Hola', 'Maitane Rascon', NULL),
(12, 1, 2, '$sharonstone', '$diana', '$bitch', '$babe ', NULL),
(13, 1, 2, 'Fuck Maitane', 'Diana Anthony', 'Cindy Crawford', 'Leonora', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
