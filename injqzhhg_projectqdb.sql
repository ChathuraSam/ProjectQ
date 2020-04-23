-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 09:16 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `injqzhhg_projectqdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE IF NOT EXISTS `models` (
  `modelID` varchar(10) NOT NULL,
  `categoryID` varchar(10) NOT NULL,
  `DesignerID` varchar(10) NOT NULL,
  `ThumbnailURL` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(150) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `first_name` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `last_name` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `first_name`, `last_name`, `mobile_number`, `email`) VALUES
(1, '', 'e359d1a949dac99a0cd65cb5fb5ed942', 'Chathura', 'Samarajeewa', '0716301615', 'chathura.samarajeewa@gmail.com'),
(2, '', 'b95291eb00bd0a653c9a0e4af7d97e14', 'Sandeep', 'Ruwan', '0777777777', 'sandeep@gmail.com'),
(3, '', '6da750376f431f19f81d9373775ff06a', 'sandeep', 'ruwan', '0777777777', 'sandeep@gmail.com'),
(4, '', 'a1039f7f04d01c7a1ee05a5777577bfe', 'Dimuth', 'Prasanna', '0000000000', 'dimuth@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
