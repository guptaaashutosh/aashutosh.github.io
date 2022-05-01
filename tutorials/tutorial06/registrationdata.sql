-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql106.byetcluster.com
-- Generation Time: Apr 04, 2022 at 01:00 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_30796718_tutorial06`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrationdata`
--

CREATE TABLE `registrationdata` (
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` int(50) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `note` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrationdata`
--

INSERT INTO `registrationdata` (`name`, `username`, `password`, `age`, `birthdate`, `country`, `state`, `city`, `note`) VALUES
('', '', 0, 0, '0000-00-00', '', '', '', ''),
('', '', 0, 0, '0000-00-00', '', '', '', ''),
('', '', 0, 0, '0000-00-00', '', '', '', ''),
('', '', 0, 0, '0000-00-00', '', '', '', ''),
('', '', 0, 0, '0000-00-00', '', '', '', ''),
('', '', 0, 0, '0000-00-00', '', '', '', ''),
('', '', 0, 0, '0000-00-00', '', '', '', ''),
('', '', 0, 0, '0000-00-00', '', '', '', ''),
('', '', 0, 0, '0000-00-00', '', '', '', ''),
('', '', 0, 0, '0000-00-00', '', '', '', ''),
('Aashutosh Gupta', 'agupta354@rku.ac.in', 12, 12, '2022-03-24', 'India', 'Gujarat', 'Rajkot', '					aasdf'),
('Aashutosh Gupta', 'agupta354@rku.ac.in', 12, 12, '2022-03-24', 'India', 'Gujarat', 'Rajkot', '					aasdf'),
('Aashu', 'g@gmail.com', 12, 12, '2022-03-24', 'India', 'Gujarat', 'Rajkot', '					aasdf'),
('Aashutosh Gupta', 'agupta354@rku.ac.in', 1234, 21, '0000-00-00', 'India', 'Gujarat', 'Rajkot', '				dgssd	'),
('amit', 'ajha417@gmail.com', 1234, 22, '0000-00-00', 'India', 'Gujarat', 'Rajkot', '				ff	'),
('aj', 'aj@gmail.com', 12, 22, '0000-00-00', 'India', 'Gujarat', 'Rajkot', '					'),
('a', 'agupta354@rku.ac.in', 12, 0, '0000-00-00', 'India', 'Gujarat', 'Rajkot', '					'),
('a', 'agupta354@rku.ac.in', 12, 12, '2022-04-10', 'India', 'Gujarat', 'Rajkot', '					'),
('Aashutosh', 'agupta354@rku.ac.in', 12, 20, '2022-04-10', 'India', 'Gujarat', 'Rajkot', '					');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
