-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-01-2002 a las 04:09:20
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
-- Base de datos: `db_juan_bosco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

DROP TABLE IF EXISTS `estudiante`;
CREATE TABLE IF NOT EXISTS `estudiante` (
  `id_estudiante` int(11) NOT NULL AUTO_INCREMENT,
  `ci` varchar(12) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `anio_actual` varchar(11) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  PRIMARY KEY (`id_estudiante`),
  UNIQUE KEY `ci` (`ci`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estudiante`, `ci`, `nombres`, `apellidos`, `anio_actual`, `fecha_nacimiento`) VALUES
(1, '27663719', 'Hugo Henrrique', 'Montañez Higuera', '2S', NULL),
(2, '27722266', 'Rachuo', 'Data', '3S', NULL),
(3, '312737876', 'Itachi', 'Uchiha', '5A', NULL),
(4, '21369613', 'Die for', 'you', '2F', NULL),
(5, '43234234', 'Do do ', 'for you', '3D', NULL),
(6, '12321312312', 'The', 'Weeknd', '1A', NULL),
(7, '12312312', 'Baby', 'Die', '7D', NULL),
(8, '312312321', 'Check', 'shit', '5D', NULL),
(9, '23123123123', 'Jon', 'Jota', '9D', NULL),
(10, '2312321', 'La la ', 'land', '9D', NULL),
(11, '32132123123', 'Melee', 'Smash', '0D', NULL),
(12, '8088546', 'JULIAN MONSITO ', 'ARCOS', 'B2', NULL),
(13, '7635979', 'IGNACIO', 'MARI TEJERA', 'B1', NULL),
(14, '5946266', 'RAUL', 'DEL PINO DONOSO', 'C2', NULL),
(15, '2704447', 'GONZALO', 'MANCEBO LORITE', 'D3', NULL),
(16, '5512776', 'HECTOR LECHUGA', 'ZURITA', 'A1', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

DROP TABLE IF EXISTS `materia`;
CREATE TABLE IF NOT EXISTS `materia` (
  `id_curricular` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `nota_1` int(11) NOT NULL DEFAULT '0',
  `nota_2` int(11) NOT NULL DEFAULT '0',
  `nota_3` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_materia`),
  KEY `id_curricular` (`id_curricular`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_curricular`
--

DROP TABLE IF EXISTS `unidad_curricular`;
CREATE TABLE IF NOT EXISTS `unidad_curricular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_estudiante` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `seccion` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_estudiante` (`id_estudiante`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidad_curricular`
--

INSERT INTO `unidad_curricular` (`id`, `id_estudiante`, `anio`, `seccion`) VALUES
(1, 1, 1, 'A');

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
  ADD CONSTRAINT `unidad_curricular_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
