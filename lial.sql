-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2022 a las 01:52:43
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calzado`
--

CREATE TABLE `calzado` (
  `modelo` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `Imagen` varchar(10) NOT NULL,
  `marca` varchar(10) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `numero_medida` int(3) NOT NULL,
  `caracteristicas` varchar(20) NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `id_ubicacionC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `id_cotizacion` int(10) NOT NULL,
  `id_calzado` int(11) NOT NULL,
  `num_piezas` int(11) NOT NULL,
  `envio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion`
--

CREATE TABLE `descripcion` (
  `ID_DESCRIPCION` int(10) NOT NULL,
  `DESCRIPCION` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `existencias`
--

CREATE TABLE `existencias` (
  `id_calzadoE` int(11) NOT NULL,
  `id_ubicacionE` int(11) NOT NULL,
  `numeroExistencias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id_ubicacion` int(11) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `delegacion` varchar(20) NOT NULL,
  `calle` varchar(20) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `password`) VALUES
('Admin01', '2022admin'),
('Gerente', '2022grete'),
('Sistema', '2022stema'),
('Admin01', '2022admin'),
('Gerente', '2022grete'),
('Sistema', '2022stema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosbd`
--

CREATE TABLE `usuariosbd` (
  `num_usuario` int(11) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `contraseña` varchar(10) NOT NULL,
  `permisos` varchar(10) NOT NULL,
  `id_cotizaciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calzado`
--
ALTER TABLE `calzado`
  ADD PRIMARY KEY (`modelo`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`),
  ADD KEY `fk_ubicC` (`id_ubicacionC`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`id_cotizacion`),
  ADD KEY `fk_calz` (`id_calzado`);

--
-- Indices de la tabla `existencias`
--
ALTER TABLE `existencias`
  ADD KEY `fk_exis` (`id_calzadoE`),
  ADD KEY `fk_exis2` (`id_ubicacionE`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id_ubicacion`);

--
-- Indices de la tabla `usuariosbd`
--
ALTER TABLE `usuariosbd`
  ADD PRIMARY KEY (`num_usuario`),
  ADD KEY `fk_usua` (`id_cotizaciones`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `fk_ubicC` FOREIGN KEY (`id_ubicacionC`) REFERENCES `ubicacion` (`id_ubicacion`);

--
-- Filtros para la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD CONSTRAINT `fk_calz` FOREIGN KEY (`id_calzado`) REFERENCES `calzado` (`modelo`);

--
-- Filtros para la tabla `existencias`
--
ALTER TABLE `existencias`
  ADD CONSTRAINT `fk_exis` FOREIGN KEY (`id_calzadoE`) REFERENCES `calzado` (`modelo`),
  ADD CONSTRAINT `fk_exis2` FOREIGN KEY (`id_ubicacionE`) REFERENCES `ubicacion` (`id_ubicacion`);

--
-- Filtros para la tabla `usuariosbd`
--
ALTER TABLE `usuariosbd`
  ADD CONSTRAINT `fk_usua` FOREIGN KEY (`id_cotizaciones`) REFERENCES `cotizacion` (`id_cotizacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
