-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2023 a las 22:30:00
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
-- Estructura de tabla para la tabla `estaciones`
--

CREATE TABLE `estaciones` (
  `id_estaciones` int(11) NOT NULL,
  `nombre_estaciones` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estaciones`
--

INSERT INTO `estaciones` (`id_estaciones`, `nombre_estaciones`) VALUES
(1, 'Verano'),
(2, 'Otoño'),
(3, 'Invierno'),
(4, 'Primavera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prendas`
--

CREATE TABLE `prendas` (
  `id_prendas` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` int(11) NOT NULL,
  `estaciones_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prendas`
--

INSERT INTO `prendas` (`id_prendas`, `img`, `nombre`, `descripcion`, `precio`, `estaciones_id`) VALUES
(7, 'https://m.media-amazon.com/images/I/71l+-p4JmzL._AC_UF894,1000_QL80_.jpg', 'Pantalones retro Mod', 'A cuadros vintage de los años 60, pantalones de cintura alta mezcla de lana destellos\r\n', 3000, 2),
(8, 'https://media.istockphoto.com/id/1324844529/es/foto/hermosa-mujer-con-hermoso-vestido-maxi-posando-contra-la-pared-con-una-uva-silvestre.jpg?s=612x612&w=0&k=20&c=NPZ1gii3n5OsfCFoiAq6lhLp4M-xxrotwgcijOI8JSY=', 'Maxi Vestido Mujer ', 'Rayas M Verde Blanco Vintage Años 60 Años 70 Halter Tie Mod MCM-\r\n', 4500, 1),
(10, 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Museo_del_Bicentenario_-_Zapatos_de_N%C3%A9stor_Kirchner.jpg/1200px-Museo_del_Bicentenario_-_Zapatos_de_N%C3%A9stor_Kirchner.jpg', 'zapatos', 'zapatos', 4000, 2),
(13, 'https://media.istockphoto.com/id/1324844529/es/foto/hermosa-mujer-con-hermoso-vestido-maxi-posando-contra-la-pared-con-una-uva-silvestre.jpg?s=612x612&w=0&k=20&c=NPZ1gii3n5OsfCFoiAq6lhLp4M-xxrotwgcijOI8JSY=', ' 2 martin  ', 'Rayaddds M Verde Blanco Vintage Años 60 Años 70 Halter Tie Mod MCM-\r\n', 42500, 4),
(14, 'https://media.istockphoto.com/id/1324844529/es/foto/hermosa-mujer-con-hermoso-vestido-maxi-posando-contra-la-pared-con-una-uva-silvestre.jpg?s=612x612&w=0&k=20&c=NPZ1gii3n5OsfCFoiAq6lhLp4M-xxrotwgcijOI8JSY=', ' 2444martin  ', 'Rayaddds M Verde Blanco Vintage Años 60 Años 70 Halter Tie Mod MCM-\r\n', 42560, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `token` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `token`) VALUES
(1, 'Prendas@indumentaria', '$2y$10$d3DEBGuoFJeVd1vGvm4Odeu60K2Yn7aFO.mVwvbsNUu', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estaciones`
--
ALTER TABLE `estaciones`
  ADD PRIMARY KEY (`id_estaciones`);

--
-- Indices de la tabla `prendas`
--
ALTER TABLE `prendas`
  ADD PRIMARY KEY (`id_prendas`),
  ADD KEY `prendas_ID` (`estaciones_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estaciones`
--
ALTER TABLE `estaciones`
  MODIFY `id_estaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `prendas`
--
ALTER TABLE `prendas`
  MODIFY `id_prendas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  ADD CONSTRAINT `prendas_ibfk_1` FOREIGN KEY (`estaciones_id`) REFERENCES `estaciones` (`id_estaciones`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
