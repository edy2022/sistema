-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-05-2020 a las 03:56:15
-- Versión del servidor: 5.7.23
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

DROP TABLE IF EXISTS `detalle`;
CREATE TABLE IF NOT EXISTS `detalle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `venta` int(11) DEFAULT NULL,
  `producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`id`, `venta`, `producto`, `cantidad`, `subtotal`) VALUES
(1, 1, 27, 4, 11600),
(2, 1, 31, 15, 37500),
(3, 2, 26, 2, 4000),
(4, 2, 32, 15, 48000),
(5, 2, 45, 2, 2800),
(6, 2, 47, 2, 1800),
(7, 3, 26, 2, 4000),
(8, 3, 31, 4, 10000),
(9, 4, 36, 4, 20000),
(10, 4, 38, 5, 16000),
(11, 4, 41, 2, 2000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `precio`, `stock`) VALUES
(24, 'bolsa plastica de 25 kilos', 7500, 20),
(25, 'bolsa de papel 1 lib ', 2600, 5),
(26, 'bolsa de papel 1/2 lib ', 2000, 1),
(27, 'bolsa de papel 2 lib', 2900, 1),
(28, 'bolsa de papel 3 lib', 3500, 5),
(29, 'bolsa plastica de 2 kilos', 1600, 20),
(30, 'bolsa plastica de 3 kilos', 1700, 20),
(31, 'bolsa plastica de 5 kilos', 2500, 1),
(32, 'bolsa plastica de 10 kilos', 3200, 5),
(33, 'bolsa plastica de 15 kilos', 5500, 20),
(34, 'bolsa plastica de 25 kilos', 7500, 20),
(35, 'salsas de kilos tomate ', 3900, 6),
(36, 'salsas de kilos mayonesa', 5000, 2),
(37, 'salsas de kilos tartara ', 5000, 6),
(38, 'salsas de kilos gel o piña ', 3200, 1),
(39, 'salsas de kilos trocito o piña ', 4400, 6),
(40, 'vasos plastico color  7 onz x 50 bart', 1800, 6),
(41, 'vasos plastico transp 7 onz  x 25 caribe', 1000, 4),
(42, 'vasos plastico color 5.5 onz x50', 1600, 6),
(43, 'vasos plastico transp 5.5 onz x50', 1600, 6),
(44, 'vasos plastico transp 3.3 onz x50 ', 1800, 6),
(45, 'vasos plastico color 3.3 onz x50', 1400, 4),
(46, 'vasos plastico color 2.5 onz x 50', 900, 6),
(47, 'vasos plastico color 1.5 onz x 50', 900, 4),
(48, 'harina elite x 1600 lib ', 1600, 99999),
(49, 'pan hamburguesa', 3400, 6),
(50, 'pan super', 3500, 5),
(51, 'pan mini', 2200, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

DROP TABLE IF EXISTS `venta`;
CREATE TABLE IF NOT EXISTS `venta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id`, `fecha`, `total`) VALUES
(1, '2020-04-24 12:35:00', 49100),
(2, '2020-04-24 12:37:36', 56600),
(3, '2020-04-24 12:39:30', 14000),
(4, '2020-04-24 12:41:30', 38000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
