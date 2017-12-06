-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-12-2017 a las 14:07:03
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `moonlight`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--
use moonlight;
CREATE TABLE `articulos` (
  `ID_ARTICULO` int(11) NOT NULL,
  `CANTIDAD` int(20) NOT NULL,
  `PRECIO` int(20) NOT NULL,
  `NOMBRE` varchar(150) NOT NULL,
  `PAGINA` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `ID_IMAGEN` int(11) NOT NULL,
  `NOMBRE` varchar(200) NOT NULL,
  `CATEGORIA` varchar(200) NOT NULL,
  `PRECIO` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`ID_IMAGEN`, `NOMBRE`, `CATEGORIA`, `PRECIO`) VALUES
(1, 'Vampiro', 'H', 230),
(2, 'Pirata', 'H', 220),
(3, 'Aladdin', 'H', 250),
(4, 'Conde', 'H', 280),
(5, 'Jesucristo', 'H', 300),
(6, 'Ladron', 'H', 140),
(7, 'Moises', 'H', 250),
(8, 'Galleta', 'H', 450),
(9, 'Unicornio', 'H', 750),
(10, 'Boxeadora', 'M', 400),
(11, 'Cupido', 'M', 600),
(12, 'Gitana', 'M', 500),
(13, 'Hada', 'M', 200),
(14, 'Ladrona', 'M', 400),
(15, 'Pitufina', 'M', 890),
(16, 'Monja', 'M', 890),
(17, 'Beisbolista', 'M', 785),
(18, 'Mariachi', 'M', 740);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`ID_ARTICULO`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`ID_IMAGEN`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `ID_ARTICULO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `ID_IMAGEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
