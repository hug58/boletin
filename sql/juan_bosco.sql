-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-03-2020 a las 06:06:10
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `juan_bosco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

DROP TABLE IF EXISTS `estudiante`;
CREATE TABLE IF NOT EXISTS `estudiante` (
  `id_ci` varchar(12) COLLATE utf8_bin NOT NULL,
  `nombres` varchar(100) COLLATE utf8_bin NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_bin NOT NULL,
  `anio_actual` varchar(12) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_ci`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_ci`, `nombres`, `apellidos`, `anio_actual`) VALUES
('', '', '', ''),
('2766371', 'Rafael Jose', 'Amaya NosÃ©', '2B'),
('27663719', 'Hugo Henrrique', 'Montañez Higuera', '1A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

DROP TABLE IF EXISTS `materia`;
CREATE TABLE IF NOT EXISTS `materia` (
  `id_curricular` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `nota` int(11) NOT NULL,
  `lapso` int(11) NOT NULL,
  PRIMARY KEY (`id_materia`),
  KEY `id_curricular` (`id_curricular`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_curricular`, `id_materia`, `nombre`, `nota`, `lapso`) VALUES
(1, 1, 'Programación', 20, 1),
(2, 2, 'Idiomas', 16, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_curricular`
--

DROP TABLE IF EXISTS `unidad_curricular`;
CREATE TABLE IF NOT EXISTS `unidad_curricular` (
  `id_ci` varchar(12) COLLATE utf8_bin NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anio` int(11) NOT NULL,
  `seccion` varchar(3) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_ci` (`id_ci`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `unidad_curricular`
--

INSERT INTO `unidad_curricular` (`id_ci`, `id`, `anio`, `seccion`) VALUES
('27663719', 1, 1, 'A'),
('27663719', 2, 2, 'B');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `materia_ibfk_1` FOREIGN KEY (`id_curricular`) REFERENCES `unidad_curricular` (`id`);

--
-- Filtros para la tabla `unidad_curricular`
--
ALTER TABLE `unidad_curricular`
  ADD CONSTRAINT `unidad_curricular_ibfk_1` FOREIGN KEY (`id_ci`) REFERENCES `estudiante` (`id_ci`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
