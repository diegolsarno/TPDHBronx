-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2019 a las 14:41:46
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bronx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`) VALUES
(1, 'Zevallos', NULL, 'gonzalo.zev@gmail.com', '$2y$10$lgT8mhqUoO09vedTCPtm8OdcIf69eX4lDwYjSmww5aSr2qO/fO1em'),
(2, NULL, 'askldmasd', 'asd@asd.com', '$2y$10$4Cc2IV9upp9Xxub0LPuoOuLgpiEkznMYBTNwvnHL/yqP0eDn113BG'),
(3, NULL, 'asdf', 'asdf@asdf.com', '$2y$10$WCZ03wpbLH/ZCnzckO5J0e2tvagShpEmDDMCCWgog4MDpY7ULsscW'),
(5, 'ale', 'vivone', 'ale@dh.com', '$2y$10$FvI6ze5bXqkORc4oCtwlwOE0vXG/zhSnZSStmIH07yaIX3igMKog2'),
(6, 'rodrigo', 'villalba', 'rodrigo@gmail.com', '$2y$10$gxAkp8/02tZESvAE2f0iFO4NpgFLuUPAICixSOym9sR4BF3qg2CBO'),
(7, 'juan', 'perez', 'juan@dh.com', '$2y$10$Bmj9jvSayRYZidj0ZMfT6OHyDv1zCBjAorFflESTsa85i3X3cBwji');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
