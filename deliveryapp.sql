-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2024 a las 02:11:37
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
-- Base de datos: `deliveryapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:24:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:16:\"navigation.admin\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:16:\"categorias.index\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:15:\"categorias.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:17:\"categorias.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:15:\"categorias.show\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:10:\"menu.index\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:9:\"menu.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:11:\"menu.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:9:\"menu.show\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:11:\"users.index\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:10:\"users.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:12:\"users.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:12;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:10:\"users.show\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:13;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:11:\"roles.index\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:14;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:10:\"roles.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:15;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:12:\"roles.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:16;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:10:\"roles.show\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:17;a:4:{s:1:\"a\";i:18;s:1:\"b\";s:13:\"pedidos.index\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:18;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:12:\"pedidos.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:19;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:14:\"pedidos.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:20;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:12:\"pedidos.show\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:21;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:15:\"public.contacto\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:22;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:9:\"dashboard\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:23;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:10:\"repartidor\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}}s:5:\"roles\";a:3:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:10:\"repartidor\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:4:\"user\";s:1:\"c\";s:3:\"web\";}}}', 1733533337);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `mensaje` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nombre`, `correo`, `telefono`, `mensaje`, `created_at`, `updated_at`) VALUES
(1, 'Alejandro Cortez', 'soigei@mail.com', '12345678', 'La comida es muy deliciosa, pero llego un poco fría.', '2024-12-04 00:02:38', '2024-12-04 00:02:38'),
(2, 'Alejandro Cortez', 'soigei@mail.com', '12345678', 'La comida es muy deliciosa, pero llego un poco fría.', '2024-12-04 00:05:27', '2024-12-04 00:05:27'),
(3, 'Alejandro Cortez', 'soigei@mail.com', '12345678', 'La comida estaba deliciosa', '2024-12-04 00:10:24', '2024-12-04 00:10:24'),
(4, 'Juan Hernandez', 'juan@mail.com', '24324637', 'Cuando enviaran comida al extranjero?', '2024-12-04 00:15:32', '2024-12-04 00:15:32'),
(5, 'Alana Martinez', 'am@mail.com', '541324124', 'Delicioso!!', '2024-12-04 00:17:58', '2024-12-04 00:17:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `direcciones`
--

INSERT INTO `direcciones` (`id`, `id_user`, `direccion`, `created_at`, `updated_at`) VALUES
(1, 2, 'La Libertad, El Salvador', '2024-11-20 23:17:22', '2024-11-20 23:17:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(30, '0001_01_01_000000_create_users_table', 1),
(31, '0001_01_01_000001_create_cache_table', 1),
(32, '0001_01_01_000002_create_jobs_table', 1),
(33, '2024_10_27_194003_add_two_factor_columns_to_users_table', 1),
(34, '2024_10_27_194023_create_personal_access_tokens_table', 1),
(35, '2024_10_27_200907_create_permission_tables', 1),
(36, '2024_11_02_151001_create_platos_table', 1),
(37, '2024_11_10_190201_create_carrito_table', 1),
(38, '2024_11_18_000657_create_pedidos_table', 1),
(39, '2024_11_18_204910_create_contactos_table', 1),
(40, '2024_11_18_205114_create_direcciones_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'navigation.admin', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(2, 'categorias.index', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(3, 'categorias.edit', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(4, 'categorias.delete', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(5, 'categorias.show', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(6, 'menu.index', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(7, 'menu.edit', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(8, 'menu.delete', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(9, 'menu.show', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(10, 'users.index', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(11, 'users.edit', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(12, 'users.delete', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(13, 'users.show', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(14, 'roles.index', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(15, 'roles.edit', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(16, 'roles.delete', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(17, 'roles.show', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(18, 'pedidos.index', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(19, 'pedidos.edit', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(20, 'pedidos.delete', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(21, 'pedidos.show', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(22, 'public.contacto', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(23, 'dashboard', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(24, 'repartidor', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(2, 'repartidor', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26'),
(3, 'user', 'web', '2024-11-20 23:09:26', '2024-11-20 23:09:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(20, 1),
(21, 1),
(21, 2),
(22, 1),
(22, 3),
(23, 1),
(23, 3),
(24, 1),
(24, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('jZjmKe9JFmADFhrovy05Rq6rbWdQ1z9rI6e3z5jk', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWjlCblBMQ1hwUjZLbWZUQ1gzUTlicTJsOGR2ZVBuUFVpQ2RkeTgyVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wZWRpZG9zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1733446951);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Test User ', 'test@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'ZpQLtAXtv2cEbpsHfLtlkdqrr0SjIYkSVzuYwIikBTA8D0RX2QSTT9CtlLwu', NULL, NULL, '2023-08-18 13:21:51', '2024-11-20 23:28:33'),
(2, 'Ronald', 'ronaldmoran285@gmail.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'ECQnZa6D5iJPWEswrwkf8IGmfNsl9nDH75YKbFNjevdJsX9NrpGP7hEYRiV4', NULL, NULL, '2024-05-24 06:48:16', '2024-11-20 23:09:26'),
(3, 'Wilfredo Auer', 'ukertzmann@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'Pnn6neSbmxg6ffDCZex1QQjCtPnATycID3bAHXPLURVxzEh3VNmavMpafoo2', NULL, NULL, '2023-04-10 14:54:46', '2024-11-20 23:09:26'),
(4, 'Mr. Tremaine Wehner', 'hassan.walker@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'CbZJ2YbhRc', NULL, NULL, '2024-01-12 05:54:04', '2024-11-20 23:09:26'),
(5, 'Neva Weissnat MD', 'eturcotte@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'CHAZbX98Ff', NULL, NULL, '2023-07-12 15:12:49', '2024-11-20 23:09:26'),
(6, 'Prof. Crawford Greenholt', 'kianna.conn@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'N1PV1rQMbV', NULL, NULL, '2023-01-14 05:21:22', '2024-11-20 23:09:26'),
(7, 'Dr. George Jacobs Jr.', 'monte.dietrich@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'm500nSXN3E', NULL, NULL, '2023-08-01 00:27:14', '2024-11-20 23:09:26'),
(8, 'Sonia Jacobson IV', 'casimir06@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'Q6RxVe5QpS', NULL, NULL, '2024-05-16 18:37:09', '2024-11-20 23:09:26'),
(9, 'Tamara Wintheiser', 'reinger.rebeca@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'om1FlutvIG', NULL, NULL, '2023-03-19 23:11:47', '2024-11-20 23:09:26'),
(10, 'Fletcher Cronin', 'ford92@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'Vf5bw45ZBK', NULL, NULL, '2023-07-22 11:31:03', '2024-11-20 23:09:26'),
(11, 'Miss Emely Hoppe', 'spouros@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'MYLUhU6XJN', NULL, NULL, '2023-11-08 11:27:48', '2024-11-20 23:09:26'),
(12, 'Sister Wintheiser', 'jana.mckenzie@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'muN4cFq0oK', NULL, NULL, '2023-12-30 13:25:29', '2024-11-20 23:09:26'),
(13, 'Vergie Streich IV', 'orn.crawford@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'RHTO7NZDaI', NULL, NULL, '2023-08-10 15:33:31', '2024-11-20 23:09:26'),
(14, 'Monique Nicolas', 'madison19@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'NmXb1iUnIN', NULL, NULL, '2023-11-29 09:02:06', '2024-11-20 23:09:27'),
(15, 'Alvena Hilpert', 'reggie.abbott@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'JN1UNF9iX3', NULL, NULL, '2023-02-03 12:34:36', '2024-11-20 23:09:27'),
(16, 'Bill Bailey', 'ayden48@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, '8bWnWzDWEx', NULL, NULL, '2023-06-24 12:59:43', '2024-11-20 23:09:27'),
(17, 'Clemens Zulauf', 'bessie.lockman@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'QEHR8sUiHe', NULL, NULL, '2023-12-07 22:45:53', '2024-11-20 23:09:27'),
(18, 'Maureen Goldner', 'tjohns@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, '6DeyrlkB8M', NULL, NULL, '2023-10-03 17:04:49', '2024-11-20 23:09:27'),
(19, 'Miss Clotilde Lemke IV', 'christy34@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'HDE9XblWl1', NULL, NULL, '2024-05-30 16:01:22', '2024-11-20 23:09:27'),
(20, 'Jeromy Becker Jr.', 'garnett23@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'eA0Yok7oXk', NULL, NULL, '2024-10-04 09:27:20', '2024-11-20 23:09:27'),
(21, 'Donny Kuhlman', 'eskiles@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'iUk0SUxvIR', NULL, NULL, '2023-01-28 18:25:25', '2024-11-20 23:09:27'),
(22, 'Dr. Fredrick Weber V', 'ida46@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, '8KvCtOfvRq', NULL, NULL, '2024-09-01 17:16:41', '2024-11-20 23:09:27'),
(23, 'Amely Heaney', 'thickle@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'aH8eRvDQMG', NULL, NULL, '2024-08-10 01:20:11', '2024-11-20 23:09:27'),
(24, 'Dr. Viola Sipes', 'aufderhar.favian@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, '1fNFaeDw4P', NULL, NULL, '2023-05-11 00:06:52', '2024-11-20 23:09:27'),
(25, 'Mrs. Kaci Walker IV', 'hbalistreri@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'Z4agZJVXUi', NULL, NULL, '2023-02-10 04:32:32', '2024-11-20 23:09:27'),
(26, 'Libby Stoltenberg Sr.', 'ondricka.gregoria@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'C2RMtefYeL', NULL, NULL, '2024-02-11 01:12:28', '2024-11-20 23:09:27'),
(27, 'Kip Pollich', 'maya.cremin@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'rr5A7P153J', NULL, NULL, '2024-08-21 14:54:40', '2024-11-20 23:09:27'),
(28, 'Dandre Tillman', 'amari.berge@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, '6zvizdDS4G', NULL, NULL, '2024-06-11 03:05:24', '2024-11-20 23:09:27'),
(29, 'Queen Bruen', 'cleo02@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, '82CDPGQjAx', NULL, NULL, '2024-03-31 09:50:27', '2024-11-20 23:09:27'),
(30, 'Prof. Cecil Shanahan', 'verona52@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'OF49OnBqOF', NULL, NULL, '2024-08-29 17:36:16', '2024-11-20 23:09:27'),
(31, 'Erich Fisher', 'davion89@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'mjaCIX93YI', NULL, NULL, '2024-02-01 20:42:21', '2024-11-20 23:09:27'),
(32, 'Antonina Davis', 'fschaden@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'e1ual0XngF', NULL, NULL, '2023-07-07 07:10:20', '2024-11-20 23:09:27'),
(33, 'Eden Bartoletti', 'andreane.mosciski@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'Zey4QBVbNl', NULL, NULL, '2024-03-27 19:57:14', '2024-11-20 23:09:27'),
(34, 'Dr. Michale Crona IV', 'emmie95@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'B4J036jCwe', NULL, NULL, '2024-02-11 14:47:52', '2024-11-20 23:09:27'),
(35, 'Ashtyn Stracke', 'itoy@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'vgoErgtCcQ', NULL, NULL, '2023-10-02 11:25:06', '2024-11-20 23:09:27'),
(36, 'Alexandra Price', 'aiden27@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'vRItiAXVmB', NULL, NULL, '2023-09-11 09:12:41', '2024-11-20 23:09:27'),
(37, 'Thora Waelchi', 'fboehm@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'JH2ehj7Y8e', NULL, NULL, '2024-03-20 15:50:02', '2024-11-20 23:09:27'),
(38, 'Prof. Jordy Mayert PhD', 'abraham.klocko@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'V03Jyw9PiS', NULL, NULL, '2024-06-29 08:26:22', '2024-11-20 23:09:27'),
(39, 'Prof. Verlie Larson', 'travon72@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'XfTWwntR3f', NULL, NULL, '2024-03-05 14:51:27', '2024-11-20 23:09:27'),
(40, 'Franz Reynolds', 'eichmann.germaine@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'CS71nkcpIi', NULL, NULL, '2023-05-24 20:50:10', '2024-11-20 23:09:27'),
(41, 'Mireille Shanahan', 'kbergnaum@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'VEfaUqSeWu', NULL, NULL, '2024-09-01 06:09:58', '2024-11-20 23:09:27'),
(42, 'Lesly Ryan', 'lkoss@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, '6q49Sgr7Qg', NULL, NULL, '2023-01-16 09:23:04', '2024-11-20 23:09:27'),
(43, 'Mr. Nickolas Herman PhD', 'torrance15@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'NqVGV91zce', NULL, NULL, '2024-10-06 17:26:25', '2024-11-20 23:09:27'),
(44, 'Terrill Bergstrom', 'kadin10@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'xdinyuUoJ7', NULL, NULL, '2023-07-14 20:27:10', '2024-11-20 23:09:27'),
(45, 'Maeve Mertz', 'macy.heidenreich@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, '3VT0JG8Qkh', NULL, NULL, '2024-07-26 01:28:41', '2024-11-20 23:09:27'),
(46, 'Anne Greenholt', 'berge.maia@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'kuOcrVR3an', NULL, NULL, '2023-08-29 17:39:26', '2024-11-20 23:09:27'),
(47, 'Diamond Wintheiser', 'johnathan13@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'B8JV0W31hU', NULL, NULL, '2023-04-05 10:41:57', '2024-11-20 23:09:27'),
(48, 'Prince Beier', 'mariane34@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'zbLpYZuLMl', NULL, NULL, '2023-11-04 09:04:41', '2024-11-20 23:09:27'),
(49, 'Crystel Schuster Jr.', 'bhills@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'u6F9LiZy3K', NULL, NULL, '2023-03-29 00:39:48', '2024-11-20 23:09:27'),
(50, 'Mr. Afton Mosciski V', 'lilian03@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'IXtuUV0NIv', NULL, NULL, '2023-10-10 23:35:21', '2024-11-20 23:09:27'),
(51, 'Dr. Justyn Grady', 'jolie.fadel@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'hL0HKS8zwt', NULL, NULL, '2024-08-01 07:21:25', '2024-11-20 23:09:27'),
(52, 'Jess Weimann MD', 'cameron71@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'XzMivFowPE', NULL, NULL, '2024-04-10 02:45:54', '2024-11-20 23:09:27'),
(53, 'Deanna Cremin III', 'trantow.eudora@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'VXgr8I5sWe', NULL, NULL, '2023-03-09 18:40:03', '2024-11-20 23:09:27'),
(54, 'Rozella Johns', 'jeff50@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'WfaYItZaUN', NULL, NULL, '2023-01-08 11:54:09', '2024-11-20 23:09:27'),
(55, 'Rebekah Lebsack', 'yundt.sydni@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'JYoX7Bwykp', NULL, NULL, '2024-01-08 17:09:16', '2024-11-20 23:09:27'),
(56, 'Gerhard Schuster', 'sasha25@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, '3JxhJzKcW5', NULL, NULL, '2024-02-19 08:31:53', '2024-11-20 23:09:27'),
(57, 'Mrs. Amie Ondricka', 'lockman.michel@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'w6qWyAJsoO', NULL, NULL, '2023-06-10 21:11:50', '2024-11-20 23:09:27'),
(58, 'Cathryn Schoen', 'swift.dorian@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'nUNupPatjy', NULL, NULL, '2024-09-28 19:27:41', '2024-11-20 23:09:27'),
(59, 'Edgardo Tillman', 'lockman.darrell@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, '7FgOXqjHpN', NULL, NULL, '2024-01-23 09:40:56', '2024-11-20 23:09:27'),
(60, 'Carol Fadel', 'iemard@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, '3Z77EI81ij', NULL, NULL, '2023-05-23 19:38:32', '2024-11-20 23:09:27'),
(61, 'Mrs. Tara Kozey', 'bcrooks@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'VuIEjC8fYt', NULL, NULL, '2024-01-30 10:59:16', '2024-11-20 23:09:27'),
(62, 'Adrian Corkery', 'dustin39@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'J6fGblsMRl', NULL, NULL, '2023-04-25 02:28:51', '2024-11-20 23:09:27'),
(63, 'Mrs. Alessandra Renner', 'jesse12@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'zvjdhy1A4C', NULL, NULL, '2024-02-20 14:36:01', '2024-11-20 23:09:27'),
(64, 'Carrie Boyer', 'vidal75@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'S96rWsRkHD', NULL, NULL, '2024-10-19 20:14:06', '2024-11-20 23:09:27'),
(65, 'Mr. Jeramie Klocko Jr.', 'stephen.pouros@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'Q7F2dbszNS', NULL, NULL, '2024-05-24 20:57:04', '2024-11-20 23:09:27'),
(66, 'Yasmeen Prohaska II', 'ebraun@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'DamzZaFtej', NULL, NULL, '2024-06-20 06:04:03', '2024-11-20 23:09:27'),
(67, 'Margot Pfeffer', 'cassin.eunice@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'zfrrkEYuFP', NULL, NULL, '2024-03-01 12:49:29', '2024-11-20 23:09:27'),
(68, 'Toney Abbott PhD', 'eulah00@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'DISyBOSfIZ', NULL, NULL, '2024-03-04 10:30:48', '2024-11-20 23:09:27'),
(69, 'Nikki Rutherford', 'kerluke.efren@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, '1I27WemURK', NULL, NULL, '2023-12-21 17:53:27', '2024-11-20 23:09:27'),
(70, 'Prof. Justus Krajcik', 'pklocko@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'TKdRs8ybeO', NULL, NULL, '2024-06-07 08:09:45', '2024-11-20 23:09:27'),
(71, 'Otilia Sporer', 'mcdermott.maymie@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'bhoX6Jw1u9', NULL, NULL, '2023-12-30 09:17:54', '2024-11-20 23:09:27'),
(72, 'Nicolette West', 'schmeler.eric@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'XJng4OHF0b', NULL, NULL, '2024-02-24 18:07:30', '2024-11-20 23:09:27'),
(73, 'Carlotta Murphy', 'keshawn.frami@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'MusoteT3t7', NULL, NULL, '2024-02-01 08:01:47', '2024-11-20 23:09:27'),
(74, 'Dr. Colin Schumm', 'homenick.carmelo@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'w873FQYPe3', NULL, NULL, '2023-09-03 03:51:31', '2024-11-20 23:09:27'),
(75, 'Ewald Swaniawski', 'barrett.luettgen@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'Q6X2mSFbRJ', NULL, NULL, '2024-06-06 23:51:12', '2024-11-20 23:09:27'),
(76, 'Dr. Melissa Mayer', 'kelli02@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, '5hgW2vRtbr', NULL, NULL, '2024-02-10 05:33:15', '2024-11-20 23:09:27'),
(77, 'Matilda Cruickshank', 'ferry.bernita@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'bZNy2QQt31', NULL, NULL, '2024-07-04 23:12:38', '2024-11-20 23:09:27'),
(78, 'Dr. Karley Roberts', 'kchamplin@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'Q4BoMCTcGv', NULL, NULL, '2023-09-11 19:11:14', '2024-11-20 23:09:27'),
(79, 'Dr. Nola Goodwin', 'jimmy.witting@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'uzlumUXuJQ', NULL, NULL, '2023-10-12 03:04:21', '2024-11-20 23:09:27'),
(80, 'Evelyn Osinski', 'kozey.frida@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'A94dmmoqCP', NULL, NULL, '2023-08-23 09:54:46', '2024-11-20 23:09:27'),
(81, 'Shanel Mohr Sr.', 'macejkovic.barton@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'Y1sZXQ79nl', NULL, NULL, '2023-01-03 02:27:29', '2024-11-20 23:09:27'),
(82, 'Mr. Ernest Kunde', 'nyah18@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'rmQOhpuQlr', NULL, NULL, '2024-07-10 07:28:28', '2024-11-20 23:09:27'),
(83, 'Mohamed Dooley', 'leola.runolfsson@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'KqIk6ikBf0', NULL, NULL, '2023-10-16 17:30:27', '2024-11-20 23:09:27'),
(84, 'Ida Maggio', 'hwhite@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'Gi56QUjSUO', NULL, NULL, '2023-03-24 12:43:06', '2024-11-20 23:09:27'),
(85, 'Lavinia Dare', 'brycen.kutch@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'rzCbp2KAXK', NULL, NULL, '2024-04-15 20:27:18', '2024-11-20 23:09:27'),
(86, 'Ms. Annabell Kutch MD', 'dameon65@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'cubsespVmc', NULL, NULL, '2023-11-01 21:45:19', '2024-11-20 23:09:27'),
(87, 'Maia Reinger I', 'dgrant@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'uc4UgDtgjn', NULL, NULL, '2023-10-03 03:33:37', '2024-11-20 23:09:27'),
(88, 'Dr. Walter Kerluke', 'bernhard.connie@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'fSVkumCbsG', NULL, NULL, '2023-10-09 16:52:17', '2024-11-20 23:09:27'),
(89, 'Mrs. Marjolaine Schoen', 'mosciski.josephine@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'nVDlpoCowA', NULL, NULL, '2023-07-30 23:27:54', '2024-11-20 23:09:27'),
(90, 'Dr. Michel Walter', 'fkerluke@example.com', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'OdZqdklcDd', NULL, NULL, '2024-10-27 15:40:34', '2024-11-20 23:09:27'),
(91, 'Prof. Davion Oberbrunner', 'edgardo.reilly@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'Ab1U3sCoew', NULL, NULL, '2024-05-07 07:31:22', '2024-11-20 23:09:27'),
(92, 'Mr. Will Bednar V', 'melyna83@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'jGccqHac5F', NULL, NULL, '2024-08-07 12:27:27', '2024-11-20 23:09:27'),
(93, 'Prof. Zoe Eichmann', 'camila66@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'KNxY7Jhgj5', NULL, NULL, '2023-07-05 16:49:43', '2024-11-20 23:09:27'),
(94, 'Mr. Jo Donnelly IV', 'padberg.russel@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'P3ZmPRUEt0', NULL, NULL, '2023-10-30 04:52:33', '2024-11-20 23:09:27'),
(95, 'Hortense Zieme', 'aida.funk@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'UqChCiz1LV', NULL, NULL, '2023-11-11 19:08:43', '2024-11-20 23:09:27'),
(96, 'Adeline Wisoky Sr.', 'heaney.nico@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'WPEJtT7mZV', NULL, NULL, '2023-10-25 02:47:33', '2024-11-20 23:09:27'),
(97, 'Emilia Klein', 'johns.gustave@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'mkcYZfPHSP', NULL, NULL, '2023-07-05 07:27:22', '2024-11-20 23:09:27'),
(98, 'Prof. Domingo Bode IV', 'marion.pfannerstill@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'I0GrPa4Lft', NULL, NULL, '2024-03-18 09:43:51', '2024-11-20 23:09:27'),
(99, 'Kaitlin Ankunding', 'judd74@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'R4YmkLYfb5', NULL, NULL, '2023-05-23 23:28:51', '2024-11-20 23:09:27'),
(100, 'Mateo Murazik', 'mayer.isabell@example.org', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'fGxYELCIFf', NULL, NULL, '2023-06-25 08:30:01', '2024-11-20 23:09:27'),
(101, 'Berniece Fahey', 'gorczany.sonya@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, 'NZcb96uRL4', NULL, NULL, '2023-04-17 03:56:07', '2024-11-20 23:09:27'),
(102, 'Maximus Schinner', 'gleason.magali@example.net', '2024-11-20 23:09:26', '$2y$12$BA5YHZww7fhynNJcUh6nuuBi0WLlcjeTekY07IXRklvpjVt0h0LxK', NULL, NULL, NULL, '7zVwNlRaiY', NULL, NULL, '2024-03-14 04:34:22', '2024-11-20 23:09:27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `direcciones_id_user_foreign` (`id_user`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD CONSTRAINT `direcciones_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
