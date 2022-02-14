-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2019 a las 20:38:30
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `nombre_producto` varchar(80) NOT NULL,
  `precio` decimal(9,0) NOT NULL,
  `imagen` varchar(120) NOT NULL,
  `descripcion` text NOT NULL,
  `especificaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `nombre_producto`, `precio`, `imagen`, `descripcion`, `especificaciones`) VALUES
(12, 'Cuadro GT Zaskar Pro', '12000', 'cuadro_gt_zaskar_pro.jpg', 'Cuadro triple triangle', 'Marca GT'),
(13, 'Gt bicycle', '13000', 'p4pb16264620.jpg', 'La mejor marca', 'Marca GT'),
(14, 'Gt bicycle 2019', '35000', 'gt_bicycle.png', 'Los mejores diseÃ±os', 'Marca GT'),
(18, 'Avalanche Elite ', '52000', 'avalanche_elite.jpg', 'Frame Description  All new 6061 alloy triple triangle frame design featuring floating seat stays, internal cable routing, Stealth dropper post routing, forged drop outs w chainstay mounted disc brake, Boost 141mm rear spacing, direct mount front derailleur, tapered 1 1/8â€- 1 Â½\" zero stack head tube.', 'Marca GT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(80) NOT NULL,
  `dni` int(8) NOT NULL,
  `fecha_nac` date NOT NULL,
  `mail` varchar(80) NOT NULL,
  `direccion` varchar(120) NOT NULL,
  `codigo_postal` int(15) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `provincia` varchar(100) NOT NULL,
  `pais` varchar(80) NOT NULL,
  `telefono` int(11) NOT NULL,
  `fax` int(50) NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  `tipo_usuario` varchar(15) NOT NULL,
  `foto_usuario` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `dni`, `fecha_nac`, `mail`, `direccion`, `codigo_postal`, `localidad`, `provincia`, `pais`, `telefono`, `fax`, `usuario`, `password`, `tipo_usuario`, `foto_usuario`) VALUES
('Myriam ', 'Ruiz ', 35452698, '1988-03-26', 'myriamruiz@gmail.com ', 'Av. America 1956 ', 4000, 'capital ', 'tucuman', 'Argentina', 2147483647, 423561656, 'miriam', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'comun', 'Myriam Ruiz.jpg'),
('jppepe ', 'pepe ', 38412536, '1988-05-12', 'jppepe@hotmail.com ', 'av roca 255 ', 4000, 'capital ', 'tucuman', 'Argentina', 2147483647, 2147483647, 'juanppepe', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'comun', 'jppepe pepe.jpg'),
('Franco ', 'de la Rosa ', 41375141, '1998-07-13', 'franco@gmail.com', 'Julio Prebisch 124 ', 4000, 'Capital ', 'Tucuman', 'Argentina', 2147483647, 423561, 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'admin', 'franco nicolas de la rosa.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
