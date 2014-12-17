-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2014 a las 20:44:17
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `nimbu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fos_user`
--

CREATE TABLE IF NOT EXISTS `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'willy', 'willy', 'willybertozzi@hotmail.com', 'willybertozzi@hotmail.com', 1, 'qirx3r6i7yso0sckg4ockcscscwg4co', '6nRG1R7mP9DNVEr11Cl6cd7oMsB3OxgFMCJUkI/esy5hTtoEN6Ylucq0Hs8WR1G5zowKzNeEDZyWvV8BNhhMMQ==', '2014-12-17 17:24:25', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL),
(2, 'leandro', 'leandro', 'lea@hotmail.com', 'lea@hotmail.com', 1, 'cgrisblo9c00kowsksgkws4cogococo', 'q2gPLSqozSxtgfOPSBsRCUGOwLHYW3FbRIAKKO4AvwaCg/B8Q+rOFGeUPYJj7FJNHHpc3+DO/BZc6VA9OAt/4w==', '2014-12-17 17:22:50', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL),
(3, 'pablo', 'pablo', 'pablo@hotmail.com', 'pablo@hotmail.com', 0, 'cd4g7kolw944owkwokkg40oc048gc00', 'nNrB7BqEqeV7hRO1tadG+SGisnZ3szxQAtPq9Nx1gdtGiuk0OgXizdnA4DN/aWi+6hRUcbWQbqJM09e0XxWGCg==', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL),
(6, 'pablos', 'pablos', 'pablo@gmail.com', 'pablo@gmail.com', 0, '5olpb9r1n6kgwkgs8o00c8cokog4gws', 'FFjCY8JFhOSwwi+yJpTZT+qGQRD/A6fh8OFW1L+c8iFXqlK0lJ/dX/iT3lGSk4RwtPjV+RRmdh9e/oL/G5+PTg==', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL),
(8, 'pabloss', 'pabloss', 'pablos@gmail.com', 'pablos@gmail.com', 0, 'lp0qla90bk00wccc48owogogk80k44o', '0MIk2qX8Nu3bav1NrbsUqq+f9AaNhqZbUx4vXqbGVWh7dr2ZI8rsPTGXd8fhwga7b9+nmI8moZ5KLVUts5wTCw==', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL),
(9, 'bruno', 'bruno', 'algo@gmail.com', 'algo@gmail.com', 0, 'xh1ewev6sdw848884g8c4wwcsswsoc', 'GEY+cQWsUODu6bpaZ/oTV+REAz14g1sa7Rnsw/L+J6gwHPmmGVrVADqvcMM1lO8jIo+GNxewg4AMDuyP2l3s3Q==', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocio`
--

CREATE TABLE IF NOT EXISTS `negocio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(60) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `logo` varchar(40) DEFAULT NULL,
  `pack` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pack` (`pack`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `negocio`
--

INSERT INTO `negocio` (`id`, `nombre`, `direccion`, `telefono`, `logo`, `pack`) VALUES
(1, 'La Perla', 'La Paz 345', '43454343', 'C:\\xampp\\tmp\\php1E0B.tmp', 1),
(2, 'Nano Heladeria', 'Ramirez 2343', '3343434', 'C:\\xampp\\tmp\\phpB62F.tmp', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE IF NOT EXISTS `notificacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mensaje` varchar(150) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `validez` int(5) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pack`
--

CREATE TABLE IF NOT EXISTS `pack` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `cantidad_mensaje_diario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `pack`
--

INSERT INTO `pack` (`id`, `nombre`, `cantidad_mensaje_diario`) VALUES
(1, 'Pack 1', 3),
(2, 'Pack 2', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `dni` int(11) DEFAULT NULL,
  `cuit` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `celular`, `sexo`, `dni`, `cuit`) VALUES
(2, 'Leandro', 'Estrada', 'Formosa 345', '4343434', '15434343', 'masculido', 31234223, '32-344343432-4'),
(4, 'Pablo', 'Cabrol', 'Arrollo 3423', '3233232', '2323232', 'masculido', 23232323, '23-23232232-2'),
(5, 'Pablo', 'Estrada', 'Formosa 345', '3233232', '2323232', 'masculido', 23232323, '32-344343432-4'),
(7, 'Pablo', 'Estrada', 'Formosa 345', '3233232', '2323232', 'masculido', 23232323, '32-344343432-4'),
(8, 'Bruno', 'Algo', 'Teniente 343', '34343434', '343434343', 'masculido', 34343434, '34-334343434-3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fos_id` int(11) DEFAULT NULL,
  `persona_id` int(11) DEFAULT NULL,
  `negocio_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fos_id` (`fos_id`),
  KEY `persona_id` (`persona_id`),
  KEY `negocio_id` (`negocio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `fos_id`, `persona_id`, `negocio_id`) VALUES
(6, NULL, 5, 1),
(7, 8, 7, 2),
(8, 9, 8, 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `negocio`
--
ALTER TABLE `negocio`
  ADD CONSTRAINT `negocio_ibfk_1` FOREIGN KEY (`pack`) REFERENCES `pack` (`id`);

--
-- Filtros para la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD CONSTRAINT `notificacion_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`negocio_id`) REFERENCES `negocio` (`id`),
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`fos_id`) REFERENCES `fos_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
