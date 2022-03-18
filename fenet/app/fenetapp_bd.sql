-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2020 a las 12:39:33
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fenetapp_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metas`
--

CREATE TABLE `metas` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `meta` text COLLATE utf8_bin NOT NULL,
  `motivacion` text COLLATE utf8_bin NOT NULL,
  `posicion` text COLLATE utf8_bin NOT NULL,
  `smart` text COLLATE utf8_bin NOT NULL,
  `plan` text COLLATE utf8_bin NOT NULL,
  `medicion` text COLLATE utf8_bin NOT NULL,
  `estatus` text COLLATE utf8_bin NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_list`
--

CREATE TABLE `servicios_list` (
  `id` int(11) NOT NULL,
  `servicio` text COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `servicios_list`
--

INSERT INTO `servicios_list` (`id`, `servicio`, `descripcion`) VALUES
(1, 'Educacion', 'Te presentamos diferentes oportunidades de estudios online para que puedas desarrollar habilidades y \r\nconocimientos en diferentes areas segun tu interes '),
(2, 'Empleo', 'Un servicio pensado para ubicar talento en el trabajo que desean, nuestros aliados te mostraran diferentes opciones para que encuentes una fuenta de ingresos'),
(3, 'Tecnologia', 'Servicios enfocados a la solucion de problemas informaticos, (Soporte Tecnico, Redes, Programacion, Diseno Grafico Digital, entre otros igual de relevantes)...'),
(4, 'Logistica', 'Servicios de transporte, carga y almacenamiento de mercancias supervisados por expertos en el tema que garantizan la seguridad de tu mercancia ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `tipo` text COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `fecha` datetime NOT NULL,
  `estatus` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(100) COLLATE utf8_bin NOT NULL,
  `whatsapp` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(100) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(300) COLLATE utf8_bin NOT NULL,
  `pais` text COLLATE utf8_bin NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios_list`
--
ALTER TABLE `servicios_list`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `metas`
--
ALTER TABLE `metas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios_list`
--
ALTER TABLE `servicios_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
