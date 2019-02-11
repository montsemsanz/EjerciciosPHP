-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-01-2012 a las 11:09:45
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdpeliculas`
--
CREATE DATABASE `bdpeliculas` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `bdpeliculas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actores`
--

CREATE TABLE IF NOT EXISTS `actores` (
  `id_actor` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_actor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=17 ;

--
-- Volcar la base de datos para la tabla `actores`
--

INSERT INTO `actores` (`id_actor`, `nombre`, `apellido`) VALUES
(1, 'Penélope', 'Cruz'),
(2, 'Johnny', 'Deep'),
(3, 'Luis', 'Tosar'),
(4, 'Adrian', 'Brody'),
(5, 'Sean', 'Connery'),
(6, 'Kevin', 'Spacey'),
(7, 'Jeremy', 'Irons'),
(8, 'Owen', 'Wilson'),
(9, 'Marion', 'Cotillard');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE IF NOT EXISTS `peliculas` (
  `cod_pelicula` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `titulo` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `annio` int(11) NOT NULL,
  PRIMARY KEY (`cod_pelicula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcar la base de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`cod_pelicula`, `titulo`, `annio`) VALUES
('DV01', 'Piratas del caribe', 2003),
('DV02', 'Todo sobre mi madre', 1999),
('DV03', 'Celda 211', 2009),
('DV04', 'La trampa', 1999),
('DV05', 'Medianoche en París', 2011),
('DV06', 'Margin call', 2011);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas_actores`
--

CREATE TABLE IF NOT EXISTS `peliculas_actores` (
  `cod_pelicula` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `id_actor` int(3) NOT NULL,
  PRIMARY KEY (`cod_pelicula`,`id_actor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcar la base de datos para la tabla `peliculas_actores`
--

INSERT INTO `peliculas_actores` (`cod_pelicula`, `id_actor`) VALUES
('DV01', 1),
('DV01', 2),
('DV02', 1),
('DV03', 3),
('DV04', 5),
('DV05', 4),
('DV05', 8),
('DV05', 9),
('DV06', 6),
('DV06', 7);
