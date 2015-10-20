-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2015 a las 03:17:43
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `lab4`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `BorrarUsuario`(IN `idd` INT)
    NO SQL
delete from usuario where id=idd$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarUsuario`(IN `us` VARCHAR(50), IN `pass` VARCHAR(50), IN `nom` VARCHAR(50), IN `tp` VARCHAR(10))
    NO SQL
insert into usuario(usuario,clave,nombre,tipo) values(us,pass,nom,tp)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ModificarUsuario`(IN `nom` VARCHAR(50), IN `idd` INT)
    NO SQL
update usuario set nombre=nom where id=idd$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerUsuarios`()
    NO SQL
select id,usuario,clave,nombre,tipo from usuario$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerUsuariosId`(IN `idd` INT)
    NO SQL
select * from usuario where id=idd$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `validarLogin`(IN `us` VARCHAR(50), IN `pass` VARCHAR(50))
    NO SQL
select * from usuario where usuario=us and clave=pass$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` varchar(6) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `clave`, `nombre`, `tipo`) VALUES
(3, 'algo@algo.com', '123', 'Pepe', NULL),
(5, 'algo@algo.com', '1234', 'lalala', NULL),
(6, 'algo@algo.com', '<br />\n<b>Notice</b>:  Undefined index: clave in <', 't', NULL),
(7, 'algo@algo.com', '12', 's', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
