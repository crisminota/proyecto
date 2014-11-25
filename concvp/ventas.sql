-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-11-2014 a las 13:07:17
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE IF NOT EXISTS `caja` (
  `ID_TRANSACCION` int(11) NOT NULL,
  `ID_VENTA` int(11) NOT NULL,
  `VALOR_RECAUDADO` int(11) NOT NULL,
  PRIMARY KEY (`ID_TRANSACCION`),
  KEY `ID_VENTA` (`ID_VENTA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `caja`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles`
--

CREATE TABLE IF NOT EXISTS `detalles` (
  `ID_VENTA` int(11) NOT NULL,
  `ID_PRODUCTO` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  PRIMARY KEY (`ID_VENTA`,`ID_PRODUCTO`),
  KEY `ID_PRODUCTO` (`ID_PRODUCTO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `detalles`
--

INSERT INTO `detalles` (`ID_VENTA`, `ID_PRODUCTO`, `CANTIDAD`) VALUES
(1, 1, 2),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plazos`
--

CREATE TABLE IF NOT EXISTS `plazos` (
  `ID_PLAZO` int(11) NOT NULL,
  `NOMBRE_PLAZO` varchar(40) NOT NULL,
  `TIEMPO` int(11) NOT NULL,
  PRIMARY KEY (`ID_PLAZO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `plazos`
--

INSERT INTO `plazos` (`ID_PLAZO`, `NOMBRE_PLAZO`, `TIEMPO`) VALUES
(1, 'mensual', 1),
(2, 'BIMENSUAL', 2),
(3, 'Trimesttral', 3),
(4, 'ANUAL', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `ID_PRODUCTO` int(11) NOT NULL,
  `NOMBRE_PRODUCTO` varchar(40) NOT NULL,
  `VALOR` int(11) NOT NULL,
  PRIMARY KEY (`ID_PRODUCTO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `producto`
--

INSERT INTO `producto` (`ID_PRODUCTO`, `NOMBRE_PRODUCTO`, `VALOR`) VALUES
(1, 'chocolate', 7000),
(2, 'leche', 2000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promotor`
--

CREATE TABLE IF NOT EXISTS `promotor` (
  `ID_PROMOTOR` int(11) NOT NULL,
  `NOMBRE_PROMOTOR` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ID_ZONA` int(11) NOT NULL,
  `DIRECCION` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_PROMOTOR`),
  KEY `ID_ZONA` (`ID_ZONA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `promotor`
--

INSERT INTO `promotor` (`ID_PROMOTOR`, `NOMBRE_PROMOTOR`, `ID_ZONA`, `DIRECCION`) VALUES
(1, 'primero', 1, 'casa'),
(2, 'SEGUNDO', 2, 'OTRA CASA2'),
(3, 'tercero', 3, 'sdvdfvsdv'),
(4, 'JUNIOR', 3, 'BOSQUES'),
(5, 'juli', 2, 'florencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `Id_usuario` int(15) NOT NULL AUTO_INCREMENT,
  `Nombre_Usuario` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `telefono` int(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_usuario`, `Nombre_Usuario`, `Password`, `telefono`, `correo`) VALUES
(1, 'cristian', '1120574787', 2147483647, 'crisminota@gmail.com'),
(2, 'angie', '123', 31112222, 'gieminota@gmail.com'),
(3, 'miguel', 'MR', 3133, 'ELREGRESOMIO@HOTMAIL.ES'),
(4, 'miguelLIO', 'MR', 3133, 'ELREGRESOMIO@HOTMAIL.ES'),
(5, 'hernan', '12323', 3131, 'hernan@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `ID_VENTA` int(11) NOT NULL AUTO_INCREMENT,
  `NIT` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ID_PLAZO` int(11) NOT NULL,
  `ID_PROMOTOR` int(11) NOT NULL,
  PRIMARY KEY (`ID_VENTA`),
  KEY `ID_PLAZO` (`ID_PLAZO`),
  KEY `ID_PROMOTOR` (`ID_PROMOTOR`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`ID_VENTA`, `NIT`, `ID_PLAZO`, `ID_PROMOTOR`) VALUES
(1, '123', 1, 1),
(2, '1122', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE IF NOT EXISTS `zona` (
  `ID_ZONA` int(11) NOT NULL,
  `NOMBRE_ZONA` varchar(40) NOT NULL,
  PRIMARY KEY (`ID_ZONA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `zona`
--

INSERT INTO `zona` (`ID_ZONA`, `NOMBRE_ZONA`) VALUES
(1, 'EL TRIUNFO'),
(2, 'CENTRO'),
(3, 'caudal'),
(4, 'villa maria');

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `caja`
--
ALTER TABLE `caja`
  ADD CONSTRAINT `caja_ibfk_1` FOREIGN KEY (`ID_VENTA`) REFERENCES `ventas` (`ID_VENTA`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD CONSTRAINT `detalles_ibfk_1` FOREIGN KEY (`ID_PRODUCTO`) REFERENCES `producto` (`ID_PRODUCTO`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `detalles_ibfk_2` FOREIGN KEY (`ID_VENTA`) REFERENCES `ventas` (`ID_VENTA`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `promotor`
--
ALTER TABLE `promotor`
  ADD CONSTRAINT `promotor_ibfk_1` FOREIGN KEY (`ID_ZONA`) REFERENCES `zona` (`ID_ZONA`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`ID_PLAZO`) REFERENCES `plazos` (`ID_PLAZO`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`ID_PROMOTOR`) REFERENCES `promotor` (`ID_PROMOTOR`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
