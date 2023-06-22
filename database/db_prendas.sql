-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2023 a las 00:51:32
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
-- Base de datos: `db_prendas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partes`
--

CREATE TABLE `partes` (
  `ID_prendas` int(11) NOT NULL,
  `nombre_categoria` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `partes`
--

INSERT INTO `partes` (`ID_prendas`, `nombre_categoria`) VALUES
(1, 'Pantalones'),
(2, 'vestidos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prendas`
--

CREATE TABLE `prendas` (
  `ID` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` int(11) NOT NULL,
  `prendas_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prendas`
--

INSERT INTO `prendas` (`ID`, `img`, `nombre`, `descripcion`, `precio`, `prendas_ID`) VALUES
(1, '', 'Pantalon', 'Retro Mod a cuadros vintage de los años 60\' Pantalones de cintura alta mezcla de lana destellos.', 1200, 1),
(2, '', ' Vestido ', 'Maxi Vestido Mujer Rayas M Verde Blanco Vintage Años 60 Años 70 Halter Tie Mod MCM-\r\n', 2300, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`ID`, `username`, `password`) VALUES
(1, 'Prendas@indumentaria', 'prendas#345%iux68');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `partes`
--
ALTER TABLE `partes`
  ADD PRIMARY KEY (`ID_prendas`);

--
-- Indices de la tabla `prendas`
--
ALTER TABLE `prendas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `prendas_ID` (`prendas_ID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `partes`
--
ALTER TABLE `partes`
  MODIFY `ID_prendas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `prendas`
--
ALTER TABLE `prendas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `prendas`
--
ALTER TABLE `prendas`
  ADD CONSTRAINT `prendas_ibfk_1` FOREIGN KEY (`prendas_ID`) REFERENCES `partes` (`ID_prendas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
