-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2019 a las 23:41:56
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE IF NOT EXISTS `detalle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `venta` int(11) DEFAULT NULL,
  `producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `precio`, `stock`) VALUES
(1, 'bolsa de papel 1 lib ', 2600, 5),
(2, 'bolsa de papel 1/2 lib ', 2000, 5),
(3, 'bolsa de papel 2 lib', 2900, 5),
(4, 'bolsa de papel 3 lib', 3500, 5),
(5, 'bolsa plastica de 2 kilos', 1600, 20),
(6, 'bolsa plastica de 3 kilos', 1700, 20),
(7, 'bolsa plastica de 5 kilos', 2500, 20),
(8, 'bolsa plastica de 10 kilos', 3200, 20),
(9, 'bolsa plastica de 15 kilos', 5500, 20),
(10, 'bolsa plastica de 25 kilos', 7500, 20),
(11, 'salsas de kilos tomate ', 3900, 6),
(12, 'salsas de kilos mayonesa', 5000, 6),
(13, 'salsas de kilos tartara ', 5000, 6),
(14, 'salsas de kilos gel o piña ', 3200, 6),
(15, 'salsas de kilos trocito o piña ', 4400, 6),
(16, 'vasos plastico color  7 onz x 50 bart', 1800, 6),
(17, 'vasos plastico transp 7 onz  x 25 caribe', 1000, 6),
(18, 'vasos plastico color 5.5 onz x50', 1600, 6),
(19, 'vasos plastico transp 5.5 onz x50', 1600, 6),
(20, 'vasos plastico transp 3.3 onz x50 ', 1800, 6),
(21, 'vasos plastico color 3.3 onz x50', 1400, 6),
(22, 'vasos plastico color 2.5 onz x 50', 900, 6),
(23, 'vasos plastico color 1.5 onz x 50', 900, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
