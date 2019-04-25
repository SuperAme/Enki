-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 06:31 AM
-- Server version: 10.1.32-MariaDB
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
-- Database: `bienesraices`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `pass` text COLLATE utf8_bin NOT NULL,
  `type` varchar(5) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `pass`, `type`) VALUES
(1, 'cliente1', '$2y$10$8lF5QyzguPvUFGp09v8jF.PofPCeXMf1z5ADHDlxvKXL0mOruX2jG', 'C'),
(2, 'empleado1', '$2y$10$Qgcs9dYzyrRuqLTRRtaYaeLJa3j3tpuGTX89wPWvpcvQ/gZ8v.TuK', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `viviendas`
--

CREATE TABLE `viviendas` (
  `id` int(10) NOT NULL,
  `tipo` varchar(500) COLLATE utf8_bin NOT NULL,
  `propietario` varchar(500) COLLATE utf8_bin NOT NULL,
  `precio` varchar(100) COLLATE utf8_bin NOT NULL,
  `recamaras` int(3) NOT NULL,
  `modalidad` varchar(100) COLLATE utf8_bin NOT NULL,
  `pais` varchar(255) COLLATE utf8_bin NOT NULL,
  `estado` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `viviendas`
--

INSERT INTO `viviendas` (`id`, `tipo`, `propietario`, `precio`, `recamaras`, `modalidad`, `pais`, `estado`) VALUES
(1, 'Departamento', 'Inmobiliaria', '$8,000', 3, 'Renta', 'México', 'Ciudad de México'),
(2, 'Departamento', 'Inmobiliaria', '$8,000', 3, 'Renta', 'México', 'Ciudad de México'),
(3, 'Casa', 'Unico Dueño', '$4,000,000', 3, 'Venta', 'México', 'Yucatan'),
(4, 'Departamento', 'Fantasmas', '$18,000,000', 3, 'Venta', 'España', 'Madrid'),
(5, 'Casa', 'Unico Dueño', '$15,000', 1, 'Renta', 'Francia', 'Paris'),
(6, 'Departamento', 'Inmobiliaria', '$9,000', 2, 'Renta', 'España', 'Barcelona'),
(7, 'Departamento', 'Inmobiliaria', '$25,000', 4, 'Renta', 'Italia', 'Roma'),
(8, 'Casa', 'Inmobiliaria', '$200,000', 5, 'Venta', 'México', 'Ciudad de México'),
(9, 'Departamento', 'Inmobiliaria', '$1,000', 3, 'Renta', 'Afganistan', 'hjsajs'),
(10, 'Departamento', 'Inmobiliaria', '$1,000', 3, 'Renta', 'Hawai', 'kilawea'),
(11, 'Departamento', 'Unico dueño', '$130,000', 3, 'Venta', 'México', 'Baja California'),
(12, 'Departamento', 'Inmobiliaria', '$8,000', 3, 'Renta', 'Argentina', 'Buenos Aires'),
(13, 'Casa', 'Unico dueño', '$5,000', 3, 'Renta', 'Canada', 'Toronto'),
(14, 'Casa', 'Inmobiliaria', '$1,000,000', 3, 'Venta', 'Italia', 'Roma'),
(15, 'Casa', 'Inmobiliaria', '$8,000', 3, 'Renta', 'México', 'Ciudad de México'),
(16, 'Departamento', 'Inmobiliaria', '$8,000', 3, 'Renta', 'México', 'Ciudad de México'),
(17, 'Departamento', 'Inmobiliaria', '$8,000', 3, 'Renta', 'México', 'Tuxpan, Ver.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viviendas`
--
ALTER TABLE `viviendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `viviendas`
--
ALTER TABLE `viviendas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
