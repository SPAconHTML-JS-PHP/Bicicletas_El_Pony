-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2024 a las 07:59:58
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
(1, 1, 'BICICLETA MTB OPTIMUS', 'DISEÑADA PARA OFRECERTE UN RENDIMIENTO EXCEPCIONAL Y VERSATILIDAD EN CUALQUIER TERRENO, ÚNICA EN SU CLASE PARA EXPLORAR SENDEROS CON CONFIANZA Y ESTILO. CON UN CUADRO DE ALUMINIO RESISTENTE Y LIGERO, Y UNA TRANSMISIÓN DE 13 VELOCIDADES.', 1540000.00, 50, 'img/productos/producto-2.jpg', '2024-05-14 03:42:04', '2024-05-14 22:40:18'),
(2, 1, 'BICICLETA DE MTB GW OCELOT DE 10V', 'DESCRIPCIÓN\r\nEXPERIMENTA LA EXCELENCIA EN BICICLETAS DE MONTAÑA CON LA GW OCELOT EQUIPADA CON EL AVANZADO GRUPO SHIMANO CUES DE 10 VELOCIDADES Y UN MONOPLATO, DISFRUTA DE UN RENDIMIENTO SIN IGUAL Y LA ÚLTIMA TECNOLOGÍA DE SHIMANO EN CADA PEDALEO. ', 1750000.00, 20, 'img/productos/producto-1.jpg', '2024-05-14 22:13:59', '2024-05-14 22:37:25'),
(3, 1, 'BICICLETA DE MTB VENZO ZORYA RIN 27.5 3X9', 'DESCRIPCIÓN\r\nLA MTB VENZO ZORYA ES UNA BICICLETA QUE CUENTA CON UNA COMBINACIÓN 3X9, PERFECTA DE RESISTENCIA Y LIGEREZA, TE DARÁ LA COMODIDAD QUE NECESITAS PARA ALCANZAR TU AVENTURA EN LA MONTAÑA.\r\nMARCA: VENZO\r\nREFERENCIA: ZORYA 3X9\r\n', 990000.00, 20, 'img/productos/producto-3.jpg', '2024-05-14 22:24:18', '2024-05-14 22:39:36'),
(4, 1, 'BICICLETA DE MTB GW PIRANHA ', 'DESCRIPCIÓN\r\nEXPERIMENTA LA EXCELENCIA EN BICICLETAS DE MONTAÑA CON LA GW PIRANHA EQUIPADA CON EL AVANZADO GRUPO SHIMANO CUES DE 9 VELOCIDADES Y UN MONOPLATO, DISFRUTA DE UN RENDIMIENTO SIN IGUAL Y LA ÚLTIMA TECNOLOGÍA DE SHIMANO EN CADA PEDALEO. \r\n', 1700000.00, 20, 'img/productos/producto-4..jpg', '2024-05-14 22:24:18', '2024-05-14 23:14:48'),
(5, 1, 'BICICLETA PIÑÓN LIBRE GW BROOKLYN ', 'DESCRIPCIÓN\r\nDOMINA LA CIUDAD CON LA BICICLETA GW BROOKLYN. DISEÑADA PARA LOS CICLISTAS URBANOS MODERNOS QUE BUSCAN ESTILO, SIMPLICIDAD Y FUNCIONALIDAD,MARCO: ALUMINIO\r\nTENEDOR: ALUMINIO\r\nPOSTE: GW\r\nMONOPLATO: POSEIDON DE 48 DIENTES EN ALUMINIO', 1200000.00, 30, 'img/productos/producto-5.jpg', '2024-05-14 22:44:39', '2024-05-14 22:46:12'),
(6, 1, 'BICICLETA RUTA ONTRAIL', 'DESCRIPCIÓN\r\n\r\nCON UN DISEÑO LIGERO Y AERODINÁMICO, LA BICICLETA DE RUTA POSEIDON TE PERMITE MOVERTE CON FACILIDAD EN CARRETERAS Y ALCANZAR VELOCIDADES IMPRESIONANTES. SU MARCO RESISTENTE Y DURADERO ESTÁ DISEÑADO PARA BRINDARTE ESTABILIDAD Y CONTROL. \r\n', 1000000.00, 10, 'img/productos/producto-6.jpg', '2024-05-15 01:54:40', '2024-05-15 01:59:24'),
(7, 1, 'BICICLETA RUTA ALUMINIO RUGOZ TECH 10V', 'DESCRIPCIÓN\r\nLA BICICLETA DE RUTA RUGOZ TECH EN ALUMINIO ES UNA OPCIÓN IDEAL PARA LLEVAR LA EMOCIÓN DE LA RUTA A LA CIUDAD. DISEÑADA CON MATERIALES DE ALTA CALIDAD Y PENSADA PARA UN RENDIMIENTO ÓPTIMO UNA COMBINACIÓN DE COMODIDAD Y DURABILIDAD.', 1300000.00, 15, 'img/productos/producto-7.jpg', '2024-05-15 02:06:15', '2024-05-15 02:10:38'),
(8, 1, 'BICICLETA FIXIE PIÑÓN LIBRE ONTRAIL', 'DESCRIPCIÓN\r\nEN POSEIDON ARMAMOS BICICLETAS PARA TODOS NUESTROS BIKERS, A MEDIDA DE LAS EXIGENCIAS Y GUSTOS DE NUESTRA FAMILIA, EN ESTA OCASIÓN TENEMOS LA BICICLETA DE PIÑÓN LIBRE ONTRAIL-COLOR LITE. RINES: DOBLE PARED CON LÍNEA DE FRENADO EN ALUMINIO', 890000.00, 20, 'img/productos/producto-8.jpg', '2024-05-15 02:14:55', '2024-05-15 02:18:58'),
(9, 1, 'BICICLETA FIXIE POSEIDÓN PHILOTIMO ALUMINIO', 'HILOTIMO ES UNA CONCETO GRIEGO, QUE SE TRADUCE COMO \"AMOR AL HONOR\"MARCO: ALUMINIO 6061 TRIPLE BUTTED, SOLDADURAS POLISH\r\nTENEDOR: FULL ALUMINIO 6061\r\nPOSTE: POSEIDON 27.2 MM ALUMINIO\r\nABRAZADERA: POSEIDON ALUMINIO.\r\nRUEDAS: POSEIDON DE PERFIL BAJO DOBLE PARED - 36H', 1150000.00, 25, 'img/productos/producto-9.jpg', '2024-05-15 06:39:23', '2024-05-15 06:39:23');

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
(1, 'Cliente', 'rodrigo.prias@gmail.com', 'Temp0ral*', 'Rodrigo', 'Prias', '2024-05-13 21:01:53', '2024-05-13 21:01:53'),
(3, 'Admin', 'alex@cun.edu.co', 'Temp0ral*', 'Alex', 'Echeverri', '2024-05-16 03:51:41', '2024-05-16 03:52:48'),
(4, 'Cliente', 'jose@xn--adfoja-wwa.com', '', 'Rodrigo', 'Prias', '2024-05-16 04:16:24', '2024-05-16 04:16:24');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
