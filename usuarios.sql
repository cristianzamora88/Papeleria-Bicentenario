-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-04-2018 a las 16:31:06
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `comentario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`nombres`, `apellidos`, `correo`, `telefono`, `comentario`) VALUES
('Cristian Manuel', 'Zamora Coyote', '315030055@upjr.edu.mx', '4121291147', 'Buena Pagina'),
('Diego', 'Pizano', 'sdfsac', '4121291147', 'fwenhfjknwe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `producto` varchar(200) NOT NULL,
  `precio` varchar(200) NOT NULL,
  `mayoreo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `producto`, `precio`, `mayoreo`) VALUES
(1, 'Copia', '0.50 c', 'Después de 10 copias a 0.30 c'),
(2, 'Impresión a blanco y negro	', '$1.00', 'Después de 10 copias a 0.50 c'),
(3, 'Impresión a color', '$2.00', 'Después de 10 copias a $1.00'),
(4, 'Productos bic', 'Precio estándar', 'Después de 10 articulos -20%'),
(5, 'Lista de útiles escolares	', '----', 'Descuento del 10%'),
(6, 'Escaner', '$5.00', 'Después de 10 escaners a $3.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `populares`
--

CREATE TABLE IF NOT EXISTS `populares` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `producto` varchar(200) NOT NULL,
  `precio` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `populares`
--

INSERT INTO `populares` (`id`, `producto`, `precio`) VALUES
(1, 'Libretas', '$35.00'),
(2, 'Lápiz HB2', '$3.50'),
(3, 'Pluma bic color azúl	', '$5.00'),
(4, 'Corrector bic', '$16.00'),
(5, 'Cartulina', '$6.00'),
(6, 'Hojas de máquina', '2 por 0.50c'),
(7, 'Colores Big de 34 piezas', '$54.00'),
(8, 'Sacapuntas metálico', '$5.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(200) NOT NULL,
  `paterno` varchar(200) NOT NULL,
  `materno` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombres`, `paterno`, `materno`, `correo`, `usuario`, `password`) VALUES
(1, 'Diego', 'Pizano', 'Lopez', 'diegopizano@htomail.com', 'diego', '1234'),
(2, 'Cristian Manuel', 'Zamora', 'Coyote', '315030055@upjr.edu.mx', 'cmzc', '1234'),
(3, 'Diego', 'alvarez', 'Lopez', 'diegopizano@htomail.com', 'cerros', '1234'),
(4, 'Carlos', 'Lopez', 'Merino', 'carlos_lopez@hotmial.com', 'carlos', '1234'),
(5, 'christian', 'padilla', 'navarro', 'jpadilla_ptc@upjr.edu.mx', 'jpadilla', 'jpadilla'),
(6, 'Administrador', 'Administrador', 'Administrador', 'Admin@gmail.com', 'admin', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajos`
--

CREATE TABLE IF NOT EXISTS `trabajos` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `producto` varchar(200) NOT NULL,
  `precio` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `trabajos`
--

INSERT INTO `trabajos` (`id`, `producto`, `precio`) VALUES
(1, 'Engargolado', '$25.00'),
(2, 'Forrar Libros', '$15.00'),
(3, 'Forrar Libretas	', '$10.00'),
(4, 'Fotocopias de libros', '$95.00'),
(5, 'Escanear un libro', '$200.00'),
(6, 'Corte de etiquetas', '$4.00 por hoja'),
(7, 'Enmicar', '$5.00'),
(8, 'Encuadernado', '$250.00'),
(9, 'Rotular discos', '$50.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
