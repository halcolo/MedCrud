-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-01-2018 a las 14:36:07
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdunad301127_30`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla301127_30`
--

CREATE TABLE `tabla301127_30` (
  `sec_tercero` int(11) NOT NULL,
  `tipo_doc` int(2) NOT NULL,
  `id_doc` int(14) NOT NULL,
  `nom_ter` varchar(50) NOT NULL,
  `apell_ter` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `reg_med` varchar(20) NOT NULL,
  `telefono` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `especialidad` varchar(50) NOT NULL,
  `hospital` varchar(20) NOT NULL,
  `fecha_modificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tabla301127_30`
--

INSERT INTO `tabla301127_30` (`sec_tercero`, `tipo_doc`, `id_doc`, `nom_ter`, `apell_ter`, `direccion`, `reg_med`, `telefono`, `email`, `ciudad`, `especialidad`, `hospital`, `fecha_modificacion`) VALUES
(1, 1, 101956895, 'Juan Diego', 'Alfonso Ocampo', 'Cra 89 # 27 - 16', '12', 7896656, 'mymail@mail.com', 'Bogotá', 'Camillero', 'Meisen', '2018-01-10 08:29:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `sec_usuario` int(11) NOT NULL,
  `tipo_doc` int(2) NOT NULL,
  `id_doc` int(14) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `contrasena_usuario` varchar(50) NOT NULL,
  `estado_usuario` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fecha_modificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`sec_usuario`, `tipo_doc`, `id_doc`, `nombre_usuario`, `contrasena_usuario`, `estado_usuario`, `email`, `fecha_modificacion`) VALUES
(2, 1, 1018477844, 'halcolo', '202cb962ac59075b964b07152d234b70', '1', 'juda0408@hotmail.com', '2017-12-07 12:22:44');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla301127_30`
--
ALTER TABLE `tabla301127_30`
  ADD PRIMARY KEY (`sec_tercero`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`sec_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla301127_30`
--
ALTER TABLE `tabla301127_30`
  MODIFY `sec_tercero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `sec_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
