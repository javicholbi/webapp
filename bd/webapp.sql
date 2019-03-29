-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:8889
-- Tiempo de generación: 29-03-2019 a las 02:22:32
-- Versión del servidor: 5.5.42
-- Versión de PHP: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `classification`
--

CREATE TABLE `classification` (
  `id` int(3) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `points` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `classification`
--

INSERT INTO `classification` (`id`, `name`, `points`) VALUES
(10, 'Johann Zarco', 64),
(11, 'Marc Márquez', 95),
(13, 'Andrea Dovizioso', 66),
(14, 'Danilo Petrucci', 63),
(16, 'Cal Crutchlow', 56),
(17, 'Jack Miller', 48),
(18, 'Jorge Lorenzo', 41),
(20, 'Alex Rins', 33),
(21, 'Dani Pedrosa', 29),
(22, 'Tito Rabat', 27),
(23, 'Pol Espargaró', 23),
(24, 'Álvaro Bautista', 19),
(25, 'Hafizh Syahrin', 17),
(26, 'Franco Morbidelli', 17),
(27, 'Aleix Espargaro', 13),
(28, 'Takaaki Nakagami', 10),
(29, 'Bradley Smith', 7),
(32, 'Karel Abraham', 1),
(33, 'Thomas Luthi', 0),
(48, 'Xavier Simeon', 0),
(49, 'Mika Kallio', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wa_categories`
--

CREATE TABLE `wa_categories` (
  `idCategory` int(2) NOT NULL,
  `name` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `wa_categories`
--

INSERT INTO `wa_categories` (`idCategory`, `name`) VALUES
(1, 'MotoGP'),
(2, 'WorldSBK'),
(4, 'Moto2'),
(6, 'Moto3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wa_users`
--

CREATE TABLE `wa_users` (
  `user` varchar(20) COLLATE utf8_bin NOT NULL,
  `mail` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `wa_users`
--

INSERT INTO `wa_users` (`user`, `mail`, `password`) VALUES
('admin', 'javicholbi@gmail.com', '$2y$12$OWstSCboqYyjaNyBOV3xpOC/CikAO7OdaHdRwYvBZnvi1nF4v8zS.'),
('example', 'example@example.com', '$2y$12$D3YxgCTu9BO8qksod0OE4uyo9qsXACyOBf8cjD5OkVM6n18LzVk4O'),
('hola', 'hola@hola.com', '$2y$12$SAYOBCY/zeVGeXqdDeM7GO2yANs0EVx55P3b9krJ8WMgPs.0UzmDy'),
('nacho', 'nacho@nacho.com', '$2y$12$PRJYlK86bdzSeJAB6jjrTuAhnwGt2zN6RT8Ny3CI1qEkReJVR.E5a'),
('visitor', 'visitor@gmail.com', '$2y$12$Ce/uMTmjqFPMp6sIKamdLev.bihwJ5pVhB5Gn7XhaLYXK.ZAItXDa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `classification`
--
ALTER TABLE `classification`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `wa_categories`
--
ALTER TABLE `wa_categories`
  ADD PRIMARY KEY (`idCategory`);

--
-- Indices de la tabla `wa_users`
--
ALTER TABLE `wa_users`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `classification`
--
ALTER TABLE `classification`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT de la tabla `wa_categories`
--
ALTER TABLE `wa_categories`
  MODIFY `idCategory` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
