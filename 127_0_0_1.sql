-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-08-2017 a las 07:47:56
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegio_fatima`
--
CREATE DATABASE IF NOT EXISTS `colegio_fatima` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `colegio_fatima`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cf_grados`
--

CREATE TABLE `cf_grados` (
  `cfg_codigo` int(255) NOT NULL,
  `cfg_descripcion` varchar(255) COLLATE utf8_bin NOT NULL,
  `cfg_estatus` varchar(255) COLLATE utf8_bin NOT NULL,
  `cfu_codigo` varchar(255) COLLATE utf8_bin NOT NULL,
  `cfg_fecha` date NOT NULL,
  `cfg_hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cf_grados`
--

INSERT INTO `cf_grados` (`cfg_codigo`, `cfg_descripcion`, `cfg_estatus`, `cfu_codigo`, `cfg_fecha`, `cfg_hora`) VALUES
(1, 'Primer Grado', 'Activo', '', '0000-00-00', '00:00:00'),
(4, 'Segundo Grado', 'Activo', '', '0000-00-00', '00:00:00'),
(5, 'Tercer Grado', 'Activo', '', '0000-00-00', '00:00:00'),
(6, 'Cuarto Grado', 'Inactivo', '', '0000-00-00', '00:00:00'),
(11, 'Cuarto Año', 'Activo', '', '0000-00-00', '00:00:00'),
(13, 'Séptimo Grado', 'Activo', '123', '2017-08-07', '06:28:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cf_plantel`
--

CREATE TABLE `cf_plantel` (
  `cfpl_codigo` varchar(255) COLLATE utf8_bin NOT NULL,
  `cfpl_nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `cfpl_direccion` varchar(255) COLLATE utf8_bin NOT NULL,
  `cfpl_telefono` varchar(255) COLLATE utf8_bin NOT NULL,
  `cfpl_correo` varchar(255) COLLATE utf8_bin NOT NULL,
  `cfpl_estatus` varchar(255) COLLATE utf8_bin NOT NULL,
  `cfu_codigo` varchar(255) COLLATE utf8_bin NOT NULL,
  `cfpl_fecha` date NOT NULL,
  `cfpl_hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cf_plantel`
--

INSERT INTO `cf_plantel` (`cfpl_codigo`, `cfpl_nombre`, `cfpl_direccion`, `cfpl_telefono`, `cfpl_correo`, `cfpl_estatus`, `cfu_codigo`, `cfpl_fecha`, `cfpl_hora`) VALUES
('as', 'as', 'as', '(2323)132-23-13', 'as@d.com', 'Activo', '', '0000-00-00', '00:00:00'),
('qweqw', 'wqeqwe', 'qweqwe', '(5446)455-46-56', 'sdddas@sdjaslk', 'Activo', '123', '2017-08-07', '06:10:49'),
('werwer', 'prueba', 'werwer', '(1231)311-33-12', 'rwe@dsfhsdfhf.com', 'Activo', '', '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cf_usuarios`
--

CREATE TABLE `cf_usuarios` (
  `cfu_codigo` varchar(255) COLLATE utf8_bin NOT NULL,
  `cfp_cedula` varchar(255) COLLATE utf8_bin NOT NULL,
  `cfu_clave` varchar(255) COLLATE utf8_bin NOT NULL,
  `cfu_intentos` varchar(255) COLLATE utf8_bin NOT NULL,
  `cfu_estatus` varchar(255) COLLATE utf8_bin NOT NULL,
  `cfu_perfil` varchar(255) COLLATE utf8_bin NOT NULL,
  `cfu_acceso` varchar(255) COLLATE utf8_bin NOT NULL,
  `cfu_privilegios` varchar(255) COLLATE utf8_bin NOT NULL,
  `cfu_observacion` varchar(255) COLLATE utf8_bin NOT NULL,
  `cfp_cedula1` varchar(255) COLLATE utf8_bin NOT NULL,
  `cfu_fecha` date NOT NULL,
  `cfu_tema` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cf_usuarios`
--

INSERT INTO `cf_usuarios` (`cfu_codigo`, `cfp_cedula`, `cfu_clave`, `cfu_intentos`, `cfu_estatus`, `cfu_perfil`, `cfu_acceso`, `cfu_privilegios`, `cfu_observacion`, `cfp_cedula1`, `cfu_fecha`, `cfu_tema`) VALUES
('123', '123', '123', '0', 'Activo', 'Administrador', '123', '123', '123', '123', '2017-07-25', 'deep-purple');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cf_grados`
--
ALTER TABLE `cf_grados`
  ADD PRIMARY KEY (`cfg_codigo`);

--
-- Indices de la tabla `cf_plantel`
--
ALTER TABLE `cf_plantel`
  ADD PRIMARY KEY (`cfpl_codigo`);

--
-- Indices de la tabla `cf_usuarios`
--
ALTER TABLE `cf_usuarios`
  ADD PRIMARY KEY (`cfu_codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cf_grados`
--
ALTER TABLE `cf_grados`
  MODIFY `cfg_codigo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
