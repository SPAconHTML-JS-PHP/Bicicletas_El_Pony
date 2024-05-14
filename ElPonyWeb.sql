-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2024 a las 04:33:46
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `elponyweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_tienda`
--

CREATE TABLE `admin_tienda` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `tienda_id` int(11) NOT NULL,
  `ingreso_en` timestamp NOT NULL DEFAULT current_timestamp(),
  `actualizado_en` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admin_tienda`
--

INSERT INTO `admin_tienda` (`id`, `email`, `contrasena`, `nombres`, `apellidos`, `tienda_id`, `ingreso_en`, `actualizado_en`) VALUES
(2, 'rbolanos@tiendaselpony.com', 'Temp0ral', 'Roberto', 'Gomez Bolaños', 1, '2024-05-13 20:11:34', '2024-05-13 20:11:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(11) NOT NULL,
  `tienda_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `imagen` varchar(255) DEFAULT 'img/productos/sinimagen.png',
  `ingreso_en` timestamp NOT NULL DEFAULT current_timestamp(),
  `actualizado_en` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `tienda_id`, `nombre`, `descripcion`, `precio`, `cantidad`, `imagen`, `ingreso_en`, `actualizado_en`) VALUES
(1, 1, 'Bicicleta 1', 'Linda Bicicleta', 1540000.00, 50, 'img/productos/sinimagen.png', '2024-05-13 22:42:04', '2024-05-13 23:29:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_compra`
--

CREATE TABLE `lista_compra` (
  `id` int(11) NOT NULL,
  `nombre_producto` varchar(25) NOT NULL,
  `precio_producto` float DEFAULT NULL,
  `imagen_producto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_compras`
--

CREATE TABLE `lista_compras` (
  `id` int(11) NOT NULL,
  `sesion_compras_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `ingreso_en` timestamp NOT NULL DEFAULT current_timestamp(),
  `actualizado_en` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion_compra`
--

CREATE TABLE `sesion_compra` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `ingreso_en` timestamp NOT NULL DEFAULT current_timestamp(),
  `actualizado_en` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` enum('Pendiente_Pago','Pago_Confirmado','Pendiente_Envio','Enviado','Recibido') NOT NULL DEFAULT 'Pendiente_Pago',
  `tienda_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendas`
--

CREATE TABLE `tiendas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `ingreso_en` timestamp NOT NULL DEFAULT current_timestamp(),
  `actualizado_en` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tiendas`
--

INSERT INTO `tiendas` (`id`, `nombre`, `direccion`, `ingreso_en`, `actualizado_en`) VALUES
(1, 'Tienda Principal', 'Calle 27 No. 11-54, Barrio Nariño', '2024-05-13 20:09:32', '2024-05-13 20:10:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `rol` enum('Cliente','Admin','AdminWeb') NOT NULL DEFAULT 'Cliente',
  `email` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `ingreso_en` timestamp NOT NULL DEFAULT current_timestamp(),
  `actualizado_en` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `rol`, `email`, `contrasena`, `nombres`, `apellidos`, `ingreso_en`, `actualizado_en`) VALUES
(1, 'Cliente', 'rodrigo.prias@gmail.com', 'Temp0ral*', 'Rodrigo', 'Prias', '2024-05-13 21:01:53', '2024-05-13 21:01:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin_tienda`
--
ALTER TABLE `admin_tienda`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `tienda_id` (`tienda_id`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tienda_id` (`tienda_id`);

--
-- Indices de la tabla `lista_compra`
--
ALTER TABLE `lista_compra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lista_compras`
--
ALTER TABLE `lista_compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sesion_compras_id` (`sesion_compras_id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `sesion_compra`
--
ALTER TABLE `sesion_compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `tienda_id` (`tienda_id`) USING BTREE;

--
-- Indices de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `admin_tienda`
--
ALTER TABLE `admin_tienda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `lista_compra`
--
ALTER TABLE `lista_compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lista_compras`
--
ALTER TABLE `lista_compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sesion_compra`
--
ALTER TABLE `sesion_compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admin_tienda`
--
ALTER TABLE `admin_tienda`
  ADD CONSTRAINT `admin_tienda_ibfk_1` FOREIGN KEY (`tienda_id`) REFERENCES `tiendas` (`id`);

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`tienda_id`) REFERENCES `tiendas` (`id`);

--
-- Filtros para la tabla `lista_compras`
--
ALTER TABLE `lista_compras`
  ADD CONSTRAINT `lista_compras_ibfk_1` FOREIGN KEY (`sesion_compras_id`) REFERENCES `sesion_compra` (`id`),
  ADD CONSTRAINT `lista_compras_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `inventario` (`id`);

--
-- Filtros para la tabla `sesion_compra`
--
ALTER TABLE `sesion_compra`
  ADD CONSTRAINT `sesion_compra_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
