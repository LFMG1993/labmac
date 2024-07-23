-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-07-2024 a las 00:24:48
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `labmac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_clientes` int(10) NOT NULL,
  `tipo_doc` varchar(14) DEFAULT NULL,
  `identificacion` varchar(15) DEFAULT NULL,
  `nombre_empresa` varchar(50) DEFAULT NULL,
  `nombre_contacto` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `municipio` varchar(50) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_clientes`, `tipo_doc`, `identificacion`, `nombre_empresa`, `nombre_contacto`, `direccion`, `municipio`, `telefono`, `correo`) VALUES
(1, 'CC', '1127580819', 'plastico maria&paz', 'Emily Karin Rodríguez Gómez', 'calle 34b #13b-34 toledo plata', 'Cucuta', '3219723422', 'emilyrodriguez020603@gmail.com'),
(2, 'CC', '1093769266', 'Ladrillos m&m', 'Maria Contreras', 'Toledo plata av 1', 'cucuta', '3224567687', 'Maria@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `Nombre` text DEFAULT NULL,
  `precio_minimo` varchar(50) DEFAULT NULL,
  `precio_maximo` varchar(50) DEFAULT NULL,
  `medida` varchar(50) DEFAULT NULL,
  `clase` varchar(50) DEFAULT NULL,
  `codigo_familiar` varchar(50) DEFAULT NULL,
  `nombre_familia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `codigo`, `Nombre`, `precio_minimo`, `precio_maximo`, `medida`, `clase`, `codigo_familiar`, `nombre_familia`) VALUES
(1, '8130100367', 'NV 100\n', '226814', '252015', 'Unidad', 'Servicios de laboratorio', '8130', 'Servicios tecnológicos'),
(9, '123334', 'INV E143-10 Resistencia al agua', '100', '200', 'unica', 'Servicios de laboratorio', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_detalles`
--

CREATE TABLE `servicios_detalles` (
  `id_servicios_detalles` int(10) NOT NULL,
  `servicio_id` int(10) DEFAULT NULL,
  `producto_id` int(10) DEFAULT NULL,
  `costo` varchar(50) DEFAULT NULL,
  `observaciones` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios_detalles`
--

INSERT INTO `servicios_detalles` (`id_servicios_detalles`, `servicio_id`, `producto_id`, `costo`, `observaciones`) VALUES
(2, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_detalle_informe`
--

CREATE TABLE `servicios_detalle_informe` (
  `id_detalles_informe` int(11) NOT NULL,
  `detalle_id` int(11) DEFAULT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `resultado` varchar(50) DEFAULT NULL,
  `magnitud` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios_detalle_informe`
--

INSERT INTO `servicios_detalle_informe` (`id_detalles_informe`, `detalle_id`, `codigo`, `resultado`, `magnitud`) VALUES
(0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_ensayos`
--

CREATE TABLE `servicios_ensayos` (
  `id_servicios_ensayos` int(10) NOT NULL,
  `cotizacion` varchar(50) DEFAULT NULL,
  `prefactura` varchar(50) DEFAULT NULL,
  `cliente_id` varchar(15) DEFAULT NULL,
  `fecha_solicitud` date DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `observaciones` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios_ensayos`
--

INSERT INTO `servicios_ensayos` (`id_servicios_ensayos`, `cotizacion`, `prefactura`, `cliente_id`, `fecha_solicitud`, `fecha_pago`, `fecha_entrega`, `observaciones`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(2) NOT NULL,
  `identificacion` varchar(15) NOT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `usuario` varchar(40) NOT NULL,
  `contrasena` varchar(10) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `telefono` varchar(14) DEFAULT NULL,
  `rol_id` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `identificacion`, `nombres`, `usuario`, `contrasena`, `email`, `telefono`, `rol_id`) VALUES
(18, '37862195', NULL, '121212', '11111', 'emily@sena.edu.co', '123456', 0),
(19, '1127580819', NULL, 'emilyk_rodriguez@soy.sena.edu.co', '123456', 'emilyk_rodriguez@soy.sena.edu.co', '3219197342', 0),
(23, '1093769266', 'Leonardo Montes Garcia', 'lefemoga@gmail.com', '123456', 'lefemoga@gmail.com', '3221465775', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_clientes`),
  ADD UNIQUE KEY `identificacion` (`identificacion`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Indices de la tabla `servicios_detalles`
--
ALTER TABLE `servicios_detalles`
  ADD PRIMARY KEY (`id_servicios_detalles`),
  ADD KEY `servicio_id` (`servicio_id`);

--
-- Indices de la tabla `servicios_detalle_informe`
--
ALTER TABLE `servicios_detalle_informe`
  ADD PRIMARY KEY (`id_detalles_informe`),
  ADD KEY `detalle_id` (`detalle_id`);

--
-- Indices de la tabla `servicios_ensayos`
--
ALTER TABLE `servicios_ensayos`
  ADD PRIMARY KEY (`id_servicios_ensayos`),
  ADD KEY `cliente_id` (`cliente_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_clientes` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `servicios_detalles`
--
ALTER TABLE `servicios_detalles`
  MODIFY `id_servicios_detalles` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `servicios_ensayos`
--
ALTER TABLE `servicios_ensayos`
  MODIFY `id_servicios_ensayos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `servicios_ensayos`
--
ALTER TABLE `servicios_ensayos`
  ADD CONSTRAINT `servicios_ensayos_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`identificacion`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
