-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2024 a las 02:11:45
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
-- Base de datos: `deliveryapp_public`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_plato` bigint(20) UNSIGNED NOT NULL,
  `cantidad` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Hamburguesa', 'Deliciosas hamburguesas con ingredientes frescos y variadas combinaciones.', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(2, 'Pizza', 'Pizzas artesanales con diferentes tipos de masa y una gran variedad de ingredientes.', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(3, 'Pasta', 'Pastas italianas tradicionales con salsas caseras y opciones vegetarianas.', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(4, 'Sushi', 'Auténtico sushi japonés, con ingredientes frescos y opciones de maki, nigiri y sashimi.', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(5, 'Refrescos', 'Refrescos 100% naturales', '2024-12-06 00:54:05', '2024-12-06 00:54:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cliente_id` bigint(20) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `estado` enum('pendiente','en_proceso','completado','cancelado') NOT NULL DEFAULT 'pendiente',
  `direccion_envio` varchar(255) DEFAULT NULL,
  `notas` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `cliente_id`, `fecha`, `total`, `estado`, `direccion_envio`, `notas`, `created_at`, `updated_at`) VALUES
(1, 2, '2024-11-20 17:17:33', 11.50, 'completado', '1', NULL, '2024-11-20 23:17:33', '2024-11-20 23:20:53'),
(2, 2, '2024-11-20 17:23:27', 25.00, 'completado', '1', NULL, '2024-11-20 23:23:27', '2024-12-04 00:56:21'),
(3, 2, '2024-11-28 12:35:57', 8.99, 'cancelado', '1', NULL, '2024-11-28 20:35:57', '2024-12-04 01:02:57'),
(4, 2, '2024-12-03 19:04:04', 25.49, 'pendiente', '1', 'Si no llega en 30 minutos quiero que sean gratis', '2024-12-04 01:04:04', '2024-12-04 01:04:04'),
(5, 2, '2024-12-03 19:08:59', 31.99, 'completado', '1', 'Graciaaass', '2024-12-04 01:08:59', '2024-12-04 01:09:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_has_plato`
--

CREATE TABLE `pedido_has_plato` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pedido_id` bigint(20) UNSIGNED NOT NULL,
  `plato_id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_unitario` decimal(10,2) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pedido_has_plato`
--

INSERT INTO `pedido_has_plato` (`id`, `pedido_id`, `plato_id`, `cantidad`, `precio_unitario`, `subtotal`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 1, 11.50, 11.50, '2024-11-20 23:17:33', '2024-11-20 23:17:33'),
(2, 2, 5, 1, 11.50, 11.50, '2024-11-20 23:23:28', '2024-11-20 23:23:28'),
(3, 2, 8, 1, 13.50, 13.50, '2024-11-20 23:23:28', '2024-11-20 23:23:28'),
(4, 3, 1, 1, 8.99, 8.99, '2024-11-28 20:35:57', '2024-11-28 20:35:57'),
(5, 4, 8, 1, 13.50, 13.50, '2024-12-04 01:04:04', '2024-12-04 01:04:04'),
(6, 4, 7, 1, 11.99, 11.99, '2024-12-04 01:04:04', '2024-12-04 01:04:04'),
(7, 5, 4, 1, 9.99, 9.99, '2024-12-04 01:08:59', '2024-12-04 01:08:59'),
(8, 5, 13, 1, 13.00, 13.00, '2024-12-04 01:08:59', '2024-12-04 01:08:59'),
(9, 5, 17, 1, 9.00, 9.00, '2024-12-04 01:08:59', '2024-12-04 01:08:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

CREATE TABLE `platos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `id_categoria` bigint(20) UNSIGNED NOT NULL,
  `disponible` tinyint(1) NOT NULL DEFAULT 1,
  `img_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `platos`
--

INSERT INTO `platos` (`id`, `nombre`, `descripcion`, `precio`, `id_categoria`, `disponible`, `img_path`, `created_at`, `updated_at`) VALUES
(1, 'Hamburguesa Clásica', 'Hamburguesa con carne de res, queso, lechuga y tomate.', 8.99, 1, 1, 'imagenes/menu/h-clasica.webp', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(2, 'Hamburguesa BBQ', 'Hamburguesa con salsa BBQ, tocino y cebolla caramelizada.', 10.99, 1, 1, 'imagenes/menu/h-bbq.webp', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(3, 'Hamburguesa Doble', 'Hamburguesa con doble carne y doble queso.', 12.50, 1, 1, 'imagenes/menu/h-doble.webp', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(4, 'Hamburguesa Vegana', 'Hamburguesa con carne de soya, aguacate y vegetales frescos.', 9.99, 1, 1, 'imagenes/menu/h-vegana.webp', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(5, 'Hamburguesa Picante', 'Hamburguesa con jalapeños y salsa picante.', 11.50, 1, 1, 'imagenes/menu/h-picante.webp', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(6, 'Pizza Margarita', 'Pizza con base de salsa de tomate, mozzarella y albahaca fresca.', 9.99, 2, 1, 'imagenes/menu/p-margarita.webp', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(7, 'Pizza Pepperoni', 'Pizza con salsa de tomate, mozzarella y pepperoni.', 11.99, 2, 1, 'imagenes/menu/p-pepperoni.webp', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(8, 'Pizza Cuatro Quesos', 'Pizza con mezcla de mozzarella, parmesano, gorgonzola y ricotta.', 13.50, 2, 1, 'imagenes/menu/p-cuatro-quesos.webp', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(9, 'Pizza Hawaiana', 'Pizza con jamón, piña y mozzarella.', 12.00, 2, 1, 'imagenes/menu/p-hawai.webp', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(10, 'Pizza Vegetariana', 'Pizza con una variedad de vegetales frescos y queso mozzarella.', 10.99, 2, 1, 'imagenes/menu/p-vegetariana.webp', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(11, 'Spaghetti Bolognesa', 'Pasta con salsa de carne y tomate casera.', 12.99, 3, 1, 'imagenes/menu/p-bolognesa.webp', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(12, 'Fettuccine Alfredo', 'Fettuccine con salsa cremosa de queso parmesano.', 11.50, 3, 1, 'imagenes/menu/p-alfredos.webp', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(13, 'Pasta Carbonara', 'Pasta con tocino, huevo y queso parmesano.', 13.00, 3, 1, 'imagenes/menu/p-carbonara.webp', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(14, 'Lasaña de Carne', 'Lasaña de carne con salsa bechamel y queso gratinado.', 14.99, 3, 1, 'imagenes/menu/p-lasagna.webp', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(15, 'Pasta Pesto', 'Pasta con salsa de pesto de albahaca fresca.', 10.99, 3, 1, 'imagenes/menu/p-pesto.webp', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(16, 'Maki de Salmón', 'Rollo de sushi con salmón fresco y arroz.', 8.50, 4, 1, 'imagenes/menu/s-salmon.webp', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(17, 'Nigiri de Atún', 'Bolita de arroz cubierta con atún fresco.', 9.00, 4, 1, 'imagenes/menu/s-atun.webp', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(18, 'California Roll', 'Rollo de sushi con cangrejo, pepino y aguacate.', 7.99, 4, 1, 'imagenes/menu/s-california.webp', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(19, 'Tempura Roll', 'Rollo de sushi frito relleno de camarón.', 10.50, 4, 1, 'imagenes/menu/s-tempura.webp', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(20, 'Sashimi de Salmón', 'Finísimas lonjas de salmón fresco.', 11.50, 4, 1, 'imagenes/menu/s-sashimi.webp', '2024-11-20 23:09:26', '2024-11-20 23:09:26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carrito_id_plato_foreign` (`id_plato`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedido_has_plato`
--
ALTER TABLE `pedido_has_plato`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedido_has_plato_pedido_id_foreign` (`pedido_id`),
  ADD KEY `pedido_has_plato_plato_id_foreign` (`plato_id`);

--
-- Indices de la tabla `platos`
--
ALTER TABLE `platos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `platos_id_categoria_foreign` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pedido_has_plato`
--
ALTER TABLE `pedido_has_plato`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `platos`
--
ALTER TABLE `platos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_id_plato_foreign` FOREIGN KEY (`id_plato`) REFERENCES `platos` (`id`);

--
-- Filtros para la tabla `pedido_has_plato`
--
ALTER TABLE `pedido_has_plato`
  ADD CONSTRAINT `pedido_has_plato_pedido_id_foreign` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`),
  ADD CONSTRAINT `pedido_has_plato_plato_id_foreign` FOREIGN KEY (`plato_id`) REFERENCES `platos` (`id`);

--
-- Filtros para la tabla `platos`
--
ALTER TABLE `platos`
  ADD CONSTRAINT `platos_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
