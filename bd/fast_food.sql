-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2017 a las 17:36:42
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fast_food`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locales`
--

CREATE TABLE `locales` (
  `ID_LOCAL` int(11) NOT NULL,
  `NOMBRE_LOCAL` varchar(100) DEFAULT NULL,
  `DIRECCION` varchar(100) DEFAULT NULL,
  `HORARIO` varchar(100) DEFAULT NULL,
  `TELEFONO` int(11) DEFAULT NULL,
  `LATITUD` varchar(50) NOT NULL,
  `LONGITUD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `locales`
--

INSERT INTO `locales` (`ID_LOCAL`, `NOMBRE_LOCAL`, `DIRECCION`, `HORARIO`, `TELEFONO`, `LATITUD`, `LONGITUD`) VALUES
(1, 'Ricuras de Sal y Dulce', 'Olmedo 16-33 y Gonzalez Suarez', 'Todos los dias de 07:00 - 22:00', 994559714, '-79.199998', '-4.005565'),
(2, 'Forno di Fango', '24 de Mayo y Azuay Esquina', 'Martes a Sabado de 12:00 - 22:30', 2582905, '-79.197768', '-3.999730'),
(3, 'Oink Bar & Grill', '24 de Mayo entre Rocafuerte y Miguel Riofrio', 'Lunes a Miercoles de 17:30 - 23:00', 2562315, '-79.198059', '-3.998423'),
(4, 'Morelia', 'Macara y Mercadillo', 'Lunes a Viernes de 16:30 - 22:30', 984671001, '-79.197304', '-4.000912'),
(5, 'Gollerias', '24 de Mayo 13-39 entre Lourdes y Leopoldo Palacios', 'Lunes a Sabado de 15:00 - 21:00', 2585694, '-79.197730', '-4.002183'),
(6, 'Restaurant Cevicheria 200 Millas', 'Juan Jose Pena 07-41Â y 10 de Agosto', 'Lunes a Domingo de 9:00 - 16:30', 992290676, '-79.199112', '-3.996629');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `ID_PLATO` int(11) NOT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_LOCAL` int(11) NOT NULL,
  `FECHA_PEDIDO` date NOT NULL,
  `HORA_ENTREGA` time DEFAULT NULL,
  `DIRECCION` varchar(100) DEFAULT NULL,
  `TELEFONO` int(11) DEFAULT NULL,
  `OBSERVACION` varchar(100) DEFAULT NULL,
  `ESTADO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`ID_PLATO`, `ID_USUARIO`, `ID_LOCAL`, `FECHA_PEDIDO`, `HORA_ENTREGA`, `DIRECCION`, `TELEFONO`, `OBSERVACION`, `ESTADO`) VALUES
(1, 1105678894, 1, '2017-05-30', '15:00:00', 'Belen', 2345678, 'Su pedido ha sido atendido.', 'Entregado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

CREATE TABLE `platos` (
  `ID_PLATO` int(11) NOT NULL,
  `NOMBRE_PLATO` varchar(100) DEFAULT NULL,
  `DETALLE` varchar(100) DEFAULT NULL,
  `PRECIO` decimal(10,2) DEFAULT NULL,
  `TIEMPO_PREPARACION` varchar(50) DEFAULT NULL,
  `IMAGEN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `platos`
--

INSERT INTO `platos` (`ID_PLATO`, `NOMBRE_PLATO`, `DETALLE`, `PRECIO`, `TIEMPO_PREPARACION`, `IMAGEN`) VALUES
(1, 'Hamburguesa Completa', 'Carne, lechuga, tomate, pollo, papas fritas, bebida.', '7.00', '20min', 'hamburguesaCompleta.jpg'),
(2, 'Hamburguesa Mediana', 'Carne, lechuga, tomate, papas fritas, bebida.', '5.00', '15min', 'hamburguesaMediana.jpg'),
(3, 'Hamburguesa Pequenia', 'Carne, lechuga, tomate, bebida.', '3.00', '10min', 'hamburguesaPequenia.jpg'),
(4, 'Hot Dog', 'Mayonesa, salsa, queso.', '5.00', '10min', 'hotDog.jpg'),
(5, 'Papas Fritas', 'Porcion de papas fritas.', '3.00', '10min', 'papasFritas.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preparacion`
--

CREATE TABLE `preparacion` (
  `ID_PLATO` int(11) NOT NULL,
  `ID_LOCAL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `preparacion`
--

INSERT INTO `preparacion` (`ID_PLATO`, `ID_LOCAL`) VALUES
(1, 3),
(1, 5),
(2, 1),
(2, 5),
(3, 1),
(3, 2),
(4, 2),
(4, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` int(11) NOT NULL,
  `NOMBRES` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `TELEFONO` int(11) NOT NULL,
  `DIRECCION` varchar(100) DEFAULT NULL,
  `CONTRASENIA` varchar(50) DEFAULT NULL,
  `ROL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `NOMBRES`, `EMAIL`, `TELEFONO`, `DIRECCION`, `CONTRASENIA`, `ROL`) VALUES
(1123456, 'Diana', 'diana@utpl.edu.ec', 2222, 'ddd', '123', 'user'),
(1103755672, 'Ruben Quezada', 'rdquezada@utpl.edu.ec', 2540389, 'Las pitas', 'admin', 'admin'),
(1104865736, 'Carlos Hidalgo', 'cxhidalgo@utpl.edu.ec', 2431268, 'El valle', 'admin', 'admin'),
(1105678894, 'Maria', 'maria@utpl.edu.ec', 2789435, 'Carigan', '123', 'user'),
(1123456789, 'Miguel', 'miguel@utpl.edu,ec', 2532766, 'Sauces norte', '123', 'user'),
(1124536788, 'Tania Bermeo', 'tania@utpl.edu.ec', 231456, 'Menfis', '123', 'user'),
(1156776523, 'Jorge', 'jperez@utpl.edu.ec', 2643211, 'San cayetano', '123', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `locales`
--
ALTER TABLE `locales`
  ADD PRIMARY KEY (`ID_LOCAL`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`ID_PLATO`,`ID_USUARIO`),
  ADD KEY `FK_PEDIDOS2` (`ID_USUARIO`);

--
-- Indices de la tabla `platos`
--
ALTER TABLE `platos`
  ADD PRIMARY KEY (`ID_PLATO`);

--
-- Indices de la tabla `preparacion`
--
ALTER TABLE `preparacion`
  ADD PRIMARY KEY (`ID_PLATO`,`ID_LOCAL`),
  ADD KEY `FK_PREPARACION2` (`ID_LOCAL`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `locales`
--
ALTER TABLE `locales`
  MODIFY `ID_LOCAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `platos`
--
ALTER TABLE `platos`
  MODIFY `ID_PLATO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `FK_PEDIDOS` FOREIGN KEY (`ID_PLATO`) REFERENCES `platos` (`ID_PLATO`),
  ADD CONSTRAINT `FK_PEDIDOS2` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`);

--
-- Filtros para la tabla `preparacion`
--
ALTER TABLE `preparacion`
  ADD CONSTRAINT `FK_PREPARACION` FOREIGN KEY (`ID_PLATO`) REFERENCES `platos` (`ID_PLATO`),
  ADD CONSTRAINT `FK_PREPARACION2` FOREIGN KEY (`ID_LOCAL`) REFERENCES `locales` (`ID_LOCAL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
