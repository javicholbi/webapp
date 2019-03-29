-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:8889
-- Tiempo de generación: 30-05-2018 a las 02:09:07
-- Versión del servidor: 5.5.42
-- Versión de PHP: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `daw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wa_comments`
--

CREATE TABLE `wa_comments` (
  `idComentario` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `comentario` text COLLATE utf8_bin NOT NULL,
  `user` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=227 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `wa_comments`
--

INSERT INTO `wa_comments` (`idComentario`, `idProducto`, `comentario`, `user`) VALUES
(1, 4, 'Buen producto', 'Invitado'),
(2, 4, 'hola', 'javi'),
(3, 4, 'Jajajajajajajajajajajaja', 'Invitado'),
(4, 3, 'gdhmngbf', 'javi'),
(5, 3, 'hgj', 'javi'),
(6, 3, 'ojhohih', 'Invitado'),
(7, 10, 'Hola', 'javi'),
(8, 10, 'Buen producto', 'javi'),
(9, 9, 'Buen ordenador', 'javi'),
(10, 1, 'holaaaaa', 'javi'),
(11, 11, 'Hola', 'javi'),
(12, 18, 'Hola', 'Invitado'),
(13, 18, 'jjjj', 'Invitado'),
(14, 9, 'ee', 'javi'),
(15, 17, 'ooh', 'javi'),
(220, 12, 'Hola', 'Invitado'),
(221, 12, 'Que tal', 'Invitado'),
(222, 12, 'kk', 'Invitado'),
(223, 12, 'hola', 'javier'),
(224, 13, 'muy guay', 'javi'),
(225, 13, 'jjejejej', 'javi'),
(226, 13, 'mola mucho', 'javi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wa_items`
--

CREATE TABLE `wa_items` (
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_bin NOT NULL,
  `precio` double NOT NULL,
  `fecha` date NOT NULL,
  `compra_venta` int(1) NOT NULL,
  `seccion` int(2) NOT NULL,
  `user` varchar(20) COLLATE utf8_bin NOT NULL,
  `imagen` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `wa_items`
--

INSERT INTO `wa_items` (`idProducto`, `nombre`, `descripcion`, `precio`, `fecha`, `compra_venta`, `seccion`, `user`, `imagen`) VALUES
(1, 'iPhone 5 16 GB nuevo a estrenar', 'Vendo iPhone 5 nuevo en su caja por no utilizarlo.', 550, '2014-02-05', 0, 2, 'javi', ''),
(3, 'iMac 27 pulgadas', 'Ordenador mac en perfecto estado. ', 1400, '2014-02-05', 1, 1, 'Juanjo', 'imac.jpg'),
(9, 'Ordenador HP', 'Se vende HP de 15" con i5 y 1TB de Disco duro. Muchos progamas instalados.', 550.5, '2014-02-20', 0, 1, 'Carlos', ''),
(10, 'Casco AGV Rossi', 'Se vende casco AGV talla XS de Valentino Rossi', 200, '2014-02-20', 0, 10, 'javi', 'casco.jpg'),
(11, 'Audi TT', 'Audi en buen estado', 123, '2014-02-24', 0, 10, 'javi', 'coche.jpg'),
(12, 'Cliente', 'Quiere una web', 120, '0000-00-00', 0, 10, 'javier', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wa_categories`
--

CREATE TABLE `wa_categories` (
  `idSeccion` int(2) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `wa_categories`
--

INSERT INTO `wa_categories` (`idSeccion`, `nombre`) VALUES
(1, 'Informática'),
(2, 'Telefonía'),
(3, 'Electrónica'),
(4, 'Electrodomésticos'),
(5, 'Ropa'),
(6, 'Joyas'),
(7, 'Fotografía'),
(8, 'Mobiliario'),
(9, 'Juguetes'),
(10, 'Deportes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wa_users`
--

CREATE TABLE `wa_users` (
  `user` varchar(20) COLLATE utf8_bin NOT NULL,
  `mail` varchar(100) COLLATE utf8_bin NOT NULL,
  `pass` varchar(255) COLLATE utf8_bin NOT NULL,
  `permiso` int(1) NOT NULL,
  `telefono` int(9) NOT NULL,
  `mostrarTelefono` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `wa_users`
--

INSERT INTO `wa_users` (`user`, `mail`, `pass`, `permiso`, `telefono`, `mostrarTelefono`) VALUES
('Carlos', 'carlsd@gfsd.com', '$2y$12$L1Q1zOisHi3mLCLQ.IPGSezX1zGYGolB6Dyia0qaEJ7RA9OVgNxGe', 1, 644454545, 0),
('Emilio', 'emilillons@hotmail.com', '$2y$12$NujKHUU0a1IvN68iFYhCxuUvkDibcu5BACFME7LfTLZDYPoo4ipbu', 1, 655656565, 1),
('Javier', 'javicholbi@gmail.com', '$2y$12$3j7g4i9iW8X6J8yPfmE4Ae5BQm9OfRD5vmWrV4BWpggwdDUas30o2', 1, 689237311, 0),
('Juanjo', 'juanjopoihoihoph@gmail.com', '$2y$12$UACBz17qudGloo4vUVg0G.iwMSAJ5.WR7tE/micJQFLY7l6Pf2Oc6', 1, 611222333, 1),
('Pascual', 'pascu@gmail.com', '$2y$12$DqeMeB/yzRFrpkySIy.0xOtfKMLlA/kK.ROve6MnDJVX3hI1osena', 1, 655656565, 1),
('Susi', 'susipas65@gmail.com', '$2y$12$uUSV3PoOEAWIreJFNVLtNeR.mquDEwActgQXh.PA44oIUvTqb6ugK', 1, 699979594, 1),
('javi', 'javicholbi@gmail.com', '$2y$12$0egVQQJvJp/l/89g9votbe6auxpMlyBtETjluKE4roIxnos2OTSgO', 1, 689237311, 1),
('javier', 'jabixo_69@hotmail.com', '$2y$12$7.w1tno3Mzh03GXKylNIDOIC7ALio4NX9ssBXEmI1fZrOoJIuO/Kq', 1, 689237311, 1),
('javito', 'javicholbi@gmail.com', '$2y$12$Dstexc0mDKbfQZTg1faTo.V/rUSAUWWpCxl8OxPEg0qYmIy7GY9p2', 1, 689237311, 0),
('marmotero', 'javicholbi@hotmail.com', '$2y$12$USIAXm14t.kuOCrUL8OY/OBvhNqJbUSh28ilxlwPPQICkXr4Y4Ju.', 1, 656454545, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `wa_comments`
--
ALTER TABLE `wa_comments`
  ADD PRIMARY KEY (`idComentario`);

--
-- Indices de la tabla `wa_items`
--
ALTER TABLE `wa_items`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `wa_categories`
--
ALTER TABLE `wa_categories`
  ADD PRIMARY KEY (`idSeccion`);

--
-- Indices de la tabla `wa_users`
--
ALTER TABLE `wa_users`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `wa_comments`
--
ALTER TABLE `wa_comments`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=227;
--
-- AUTO_INCREMENT de la tabla `wa_items`
--
ALTER TABLE `wa_items`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `wa_categories`
--
ALTER TABLE `wa_categories`
  MODIFY `idSeccion` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;