-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 11:45 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `entrenamiento`
--

-- --------------------------------------------------------

--
-- Table structure for table `entrenamiento`
--

CREATE TABLE `entrenamiento` (
  `id_entrenamiento` int(11) NOT NULL,
  `Nombre_del_deportista` varchar(50) NOT NULL,
  `Lugar` varchar(50) NOT NULL,
  `posicionamiento` varchar(30) NOT NULL,
  `Mensaje` varchar(10) NOT NULL,
  `hora` varchar(12) NOT NULL,
  `ampm` varchar(12) NOT NULL,
  `mes` varchar(12) NOT NULL,
  `dia` varchar(12) NOT NULL,
  `email` varchar(12) NOT NULL,
  `celular` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entrenamiento`
--

INSERT INTO `entrenamiento` (`id_entrenamiento`, `Nombre_del_deportista`, `Lugar`, `posicionamiento`, `Mensaje`, `hora`, `ampm`, `mes`, `dia`, `email`, `celular`) VALUES
(23, 'Geraldine Joya Prieto', 'Canchas la morena', 'Defensa', '', '6:00', 'am', 'Diciembre', '7', 'g@g.com', '3115054626'),
(22, 'Geraldine Joya Prieto', 'SimÃ³n BolÃ­var', 'Delantera', 'Sobrecarga', '08:00', 'am', 'Noviembre', '25', 'g@g.com', '3115054626'),
(24, 'Geraldine Joya ', 'Timiza', 'Volante', '', '4:00', 'pm', 'Noviembre', '25', 'g@g.com', '3115054626');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entrenamiento`
--
ALTER TABLE `entrenamiento`
  ADD PRIMARY KEY (`id_entrenamiento`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entrenamiento`
--
ALTER TABLE `entrenamiento`
  MODIFY `id_entrenamiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
