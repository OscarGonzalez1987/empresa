-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-02-2020 a las 21:03:04
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `cedula` int(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `direccion` text NOT NULL,
  `telefono` int(11) NOT NULL,
  `celular` int(25) NOT NULL,
  `correo` text NOT NULL,
  `notas` text NOT NULL,
  `usuario` int(11) NOT NULL,
  `fecha_registro` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `cedula`, `nombre`, `apellidos`, `direccion`, `telefono`, `celular`, `correo`, `notas`, `usuario`, `fecha_registro`) VALUES
(1, 1, '1', '1', '1', 1, 1, '1', '1', 1, '2020-02-19'),
(2, 2, '2', '2', '2', 2, 2, '2', '2', 2, '2020-02-19'),
(3, 3, '3', '3', '3', 3, 3, '3', '3', 3, '2020-02-19'),
(4, 4, '4', '4', '4', 4, 4, '4', '4', 4, '2020-02-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `cedula` int(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `direccion` text NOT NULL,
  `telefono` int(11) NOT NULL,
  `celular` int(25) NOT NULL,
  `correo` text NOT NULL,
  `notas` text NOT NULL,
  `usuario` int(11) NOT NULL,
  `fecha_registro` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `cedula`, `nombre`, `apellidos`, `direccion`, `telefono`, `celular`, `correo`, `notas`, `usuario`, `fecha_registro`) VALUES
(1, 1, '1', '1', '1', 1, 1, '1', '1', 1, '2020-02-19'),
(2, 2, '2', '2', '2', 2, 2, '2', '2', 2, '2020-02-19'),
(3, 3, '3', '3', '3', 3, 3, '3', '3', 3, '2020-02-19'),
(5, 5, '5', '5', '5', 5, 5, '5', '5', 5, '2020-02-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `cedula` int(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `direccion` text NOT NULL,
  `telefono` int(11) NOT NULL,
  `celular` int(25) NOT NULL,
  `correo` text NOT NULL,
  `notas` text NOT NULL,
  `usuario` int(11) NOT NULL,
  `fecha_registro` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `cedula`, `nombre`, `apellidos`, `direccion`, `telefono`, `celular`, `correo`, `notas`, `usuario`, `fecha_registro`) VALUES
(1, 1, '1', '1', '1', 1, 1, '1', '1', 1, '2020-02-19'),
(2, 2, '2', '2', '2', 2, 2, '2', '2', 2, '2020-02-19'),
(3, 3, '3', '3', '3', 3, 3, '3', '3', 3, '2020-02-19'),
(6, 6, '6', '6', '6', 6, 6, '6', '6', 6, '2020-02-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_sistemas`
--

CREATE TABLE `servicios_sistemas` (
  `id` int(11) NOT NULL,
  `responsable` varchar(90) NOT NULL,
  `contacto` text NOT NULL,
  `actividad` text NOT NULL,
  `tiempo` text NOT NULL,
  `costo` text NOT NULL,
  `fecha_requerimiento` text NOT NULL,
  `fecha_entrega` text NOT NULL,
  `ESTADO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios_sistemas`
--

INSERT INTO `servicios_sistemas` (`id`, `responsable`, `contacto`, `actividad`, `tiempo`, `costo`, `fecha_requerimiento`, `fecha_entrega`, `ESTADO`) VALUES
(1, 'OSCAR IVAN GONZALEZ PENA', 'oigonzalez83@misena.edu.co 322 8858439', 'SISTEMA DE INFORMACION PARA LA EMPRESA', '64 HORAS', '800.000', '19 02 2020', '26 02 2020', 'EN PROCESO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios_sistemas`
--
ALTER TABLE `servicios_sistemas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `servicios_sistemas`
--
ALTER TABLE `servicios_sistemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
