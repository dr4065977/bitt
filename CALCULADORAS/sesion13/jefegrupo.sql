-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-02-2023 a las 04:53:06
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jefegrupo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) DEFAULT NULL,
  `clave` varchar(50) DEFAULT NULL,
  `candidato` enum('sí','no') NOT NULL DEFAULT 'no',
  `vota_a` int(10) UNSIGNED DEFAULT NULL,
  `fecha_hora_voto` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `nombre`, `apellido1`, `apellido2`, `clave`, `candidato`, `vota_a`, `fecha_hora_voto`) VALUES
(1, 'Jared', 'Aguilar', 'Cruz', 'jar123', 'sí', 1, '2023-02-10 04:08:56'),
(2, 'Carlos', 'Aguilar', 'Mendoza', 'car123', 'sí', 2, '2023-02-10 04:20:39'),
(3, 'Beatriz', 'Aguilar', 'Sánchez', 'bea123', 'sí', 3, '2023-02-10 04:24:53'),
(4, 'Citlally', 'Estrada', 'Cerón', 'cit123', 'sí', 4, '2023-02-10 04:29:34'),
(5, 'Caleb', 'López', 'Zenteno', 'cal123', 'no', NULL, NULL),
(6, 'Osvaldo', 'lópez', 'García', 'osv123', 'no', 4, '2023-02-10 04:09:40'),
(7, 'Brandon', 'Martínez', 'Roldan', 'bra123', 'sí', 1, '2023-02-10 04:20:49'),
(8, 'Edwin', 'Pérez', 'Bernal', 'edw123', 'sí', NULL, NULL),
(9, 'Efren', 'Quijano', 'Hernández', 'efr123', 'sí', NULL, NULL),
(10, 'Maylen', 'Ríos', 'Jímenez', 'may123', 'sí', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vota_a` (`vota_a`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`vota_a`) REFERENCES `alumno` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
