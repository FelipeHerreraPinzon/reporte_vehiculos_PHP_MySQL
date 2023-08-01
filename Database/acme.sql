-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2022 a las 00:36:56
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `acme`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductores`
--

CREATE TABLE `conductores` (
  `id` int(11) NOT NULL,
  `documento` int(11) NOT NULL,
  `primer_nombre` varchar(30) NOT NULL,
  `segundo_nombre` varchar(30) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` int(11) NOT NULL,
  `ciudad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes`
--

CREATE TABLE `informes` (
  `id` int(11) NOT NULL,
  `placa` int(11) NOT NULL,
  `marca` int(11) NOT NULL,
  `nombre_completo_conductor` int(11) NOT NULL,
  `nombre_completo_propietario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `id` int(11) NOT NULL,
  `documento` int(11) NOT NULL,
  `primer_nombre` varchar(30) NOT NULL,
  `segundo_nombre` varchar(30) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` int(30) NOT NULL,
  `ciudad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` int(11) NOT NULL,
  `placa` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `tipo_vehiculo` varchar(30) NOT NULL,
  `conductor` int(11) NOT NULL,
  `propietario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conductores`
--
ALTER TABLE `conductores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informes`
--
ALTER TABLE `informes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre_completo_conductor` (`nombre_completo_conductor`),
  ADD KEY `nombre_completo_propietario` (`nombre_completo_propietario`),
  ADD KEY `placa` (`placa`),
  ADD KEY `marca` (`marca`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conductor` (`conductor`),
  ADD KEY `propietario` (`propietario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conductores`
--
ALTER TABLE `conductores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `informes`
--
ALTER TABLE `informes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `informes`
--
ALTER TABLE `informes`
  ADD CONSTRAINT `informes_ibfk_1` FOREIGN KEY (`nombre_completo_conductor`) REFERENCES `conductores` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `informes_ibfk_2` FOREIGN KEY (`nombre_completo_propietario`) REFERENCES `propietarios` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `informes_ibfk_3` FOREIGN KEY (`placa`) REFERENCES `vehiculos` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `informes_ibfk_4` FOREIGN KEY (`marca`) REFERENCES `vehiculos` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`propietario`) REFERENCES `propietarios` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `vehiculos_ibfk_2` FOREIGN KEY (`conductor`) REFERENCES `conductores` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
