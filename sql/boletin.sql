-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-03-2020 a las 13:33:06
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
-- Base de datos: `boletin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

DROP TABLE IF EXISTS `estudiante`;
CREATE TABLE IF NOT EXISTS `estudiante` (
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `ci` varchar(30) NOT NULL,
  `id_estudiante` int(11) NOT NULL AUTO_INCREMENT,
  `anio_actual` varchar(3) NOT NULL,
  PRIMARY KEY (`id_estudiante`),
  UNIQUE KEY `ci` (`ci`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`nombres`, `apellidos`, `ci`, `id_estudiante`, `anio_actual`) VALUES
('Hugo Henrrique', 'Montañez Higuera', '27663719', 1, '1B'),
('Juanita ', 'Perez', '27247221', 2, '3A'),
('Pedro', 'Perez', '26719663', 3, '4C'),
('Rafael', 'Jimenez', '27663780', 4, '4B'),
('dasd', 'dds', '212', 5, '4B'),
('Ramirez', 'Conio', '276639129', 6, '1b'),
('Ramirez', 'Conio', '276639122', 8, '1b'),
('Lopez', 'Conio', '276639133', 9, '1b'),
('Lops', 'Conio', '276639123', 11, '1b'),
('Lops', 'Conio', '276639ddd', 12, '1b'),
('Lops', 'Conio', '27663911', 13, '1b'),
('Hugo', 'sad', '27663722', 16, 'asd'),
('', '', '', 17, ''),
('Julia', 'Pablo', '26888191', 18, '2B'),
('Juliano', 'Sepeda', '26888192', 19, '3C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

DROP TABLE IF EXISTS `materia`;
CREATE TABLE IF NOT EXISTS `materia` (
  `nombre` varchar(100) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `nota` int(11) NOT NULL,
  `anio` varchar(3) NOT NULL,
  PRIMARY KEY (`id_materia`),
  KEY `FC_id_estudiante` (`id_estudiante`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`nombre`, `id_estudiante`, `id_materia`, `nota`, `anio`) VALUES
('Historia Universal', 1, 1, 20, '1A'),
('Historia Universal', 1, 2, 20, '1A'),
('Programación', 1, 3, 20, '2B'),
('INGLES', 1, 4, 16, '4C');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `materia_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
