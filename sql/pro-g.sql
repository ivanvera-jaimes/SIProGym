-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2021 a las 06:30:15
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pro-g`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_30_012526_create_planes_table', 1),
(5, '2021_05_30_191330_create_personas_table', 1),
(6, '2021_07_04_004319_create_pagos_table', 1),
(7, '2021_07_08_030458_create_productos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `costo` double DEFAULT NULL,
  `estado` double DEFAULT NULL,
  `idPersona` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `costo`, `estado`, `idPersona`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 456, '2021-07-12 08:49:32', '2021-07-12 08:51:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `tipo_documento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` double NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altura` double NOT NULL,
  `peso` double NOT NULL,
  `imc` double NOT NULL,
  `plan_id` bigint(20) UNSIGNED NOT NULL,
  `pago_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`tipo_documento`, `id`, `foto`, `nombre`, `apellido`, `edad`, `email`, `altura`, `peso`, `imc`, `plan_id`, `pago_id`, `created_at`, `updated_at`) VALUES
('Cedula', 456, NULL, 'Diana Alejandra', 'Barrera Wilches', 18, 'dianabarrera105@gmail.com', 1.58, 78, 31.24, 1, 1, '2021-07-12 08:49:32', '2021-07-12 08:49:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE `planes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`id`, `nombre`, `valor`, `created_at`, `updated_at`) VALUES
(1, 'Normal', 60000, '2021-07-12 08:48:47', '2021-07-12 08:48:47'),
(2, 'Completo', 90000, '2021-07-12 08:48:47', '2021-07-12 08:48:47'),
(3, 'Completo + Trainer', 160000, '2021-07-12 08:48:47', '2021-07-12 08:48:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `foto`, `nombre`, `descripcion`, `valor`, `created_at`, `updated_at`) VALUES
(1, 'Home/ImagenesPro-Gym/proteina1.jpg', 'Whey Protein', 'Es un suplemento con amplia evidencia científica y que se encuentra en el grupo A de la clasificación del Instituto Australiano \n                            del Deporte (AIS), una entidad referente en cuanto a nutrición deportiva.', 88000, '2021-07-12 08:48:47', '2021-07-12 08:48:47'),
(2, 'Home/ImagenesPro-Gym/proteina2.jpg', 'Isopure', 'Isopure proteina cero carbohidratos vainilla - 3 Lb. Suplemento a base de albúmina de huevo en polvo, \n                            fuente de proteínas de alto valor biológico con el menor contenido de fósforo, potasio y sodio.', 100000, '2021-07-12 08:48:47', '2021-07-12 08:48:47'),
(3, 'Home/ImagenesPro-Gym/proteina3.jpg', 'Nitro Tech', 'Nitrotech 100% Whey Gold de Muscletech es una mezcla de proteína de suero aislada y concentrada de alta calidad y pureza, con péptidos\n                           de suero lácteo añadidos. Esta proteína tiene una rápida absorción y digestibilidad, ideal para recuperarse después de un entrenamiento.', 160000, '2021-07-12 08:48:47', '2021-07-12 08:48:47'),
(4, 'Home/ImagenesPro-Gym/proteina4.jpg', 'Mass Tech', 'Es un producto de avanzada para ganar masa muscular diseñado para cualquier persona a quien le cueste trabajo aumentar el tamaño, \n                            que esté en fase de voluminización o deseen adquirir incluso más fuerza.', 150000, '2021-07-12 08:48:47', '2021-07-12 08:48:47'),
(5, 'Home/ImagenesPro-Gym/proteina5.jpg', 'Mega Whey', 'MEGA WHEY PROTEIN es proteína de suero altamente bioasimilable adicionada con: Picolinato de cromo, y un excelente balance de vitaminas; \n                            de esta manera los deportistas obtienen mejores resultados en comparación con otras fórmulas comunes de proteína de suero.', 170000, '2021-07-12 08:48:47', '2021-07-12 08:48:47'),
(6, 'Home/ImagenesPro-Gym/proteina6.jpg', 'Cell Tech', 'Cell Tech Performance Series de Muscletech es un producto alimenticio en polvo con un 79% de hidratos de carbono de lenta y rápida \n                            absorción, creatina y aminoácidos esenciales.', 150000, '2021-07-12 08:48:48', '2021-07-12 08:48:48'),
(7, 'Home/ImagenesPro-Gym/proteina7.jpg', 'Creatine Power', 'Por esta compra obtienes la Proteína Megaplex Creatine Power por 10Lb con nueva fórmula que incluye HMB.\n                           Adicional recibes la bolsa por 2Lb de la versión clásica (hasta agotar existencias).', 167000, '2021-07-12 08:48:48', '2021-07-12 08:48:48'),
(8, 'Home/ImagenesPro-Gym/proteina8.jpg', 'Super Mega Gainer', 'Super mega gainer de GMN es un excelente complemento alimenticio capaz de mejorar en forma notable tu disponibilidad energética \n                            en el entrenamiento y de aumentar tu masa muscular, peso y fuerza rápidamente', 50000, '2021-07-12 08:48:48', '2021-07-12 08:48:48'),
(9, 'Home/ImagenesPro-Gym/proteina9.jpg', 'Hydroxycut Elite', 'Hydroxycut Hardcore Elite es un super termogénico 4 en 1 con una fórmula que ofrece una experiencia sensorial increíble y que aporta cuatro ventajas distintas:\n                             Super-termogénesis, Energía extrema, Mayor concentración, Pérdida de peso de gran alcance.', 98000, '2021-07-12 08:48:48', '2021-07-12 08:48:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_usuario` enum('admin','auxiliar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `tipo_usuario`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'admin', 'admin@gmail.com', NULL, '$2y$10$O.MIZcQigMlqOuRQwZUDZuZZfpbqhxuvExd3rOtDwa0/9Z4T4Ddzi', 'Hello Admin!', '2021-07-12 08:48:47', '2021-07-12 08:48:47');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pagos_idpersona_foreign` (`idPersona`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personas_plan_id_foreign` (`plan_id`);

--
-- Indices de la tabla `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `planes_nombre_unique` (`nombre`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=457;

--
-- AUTO_INCREMENT de la tabla `planes`
--
ALTER TABLE `planes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_idpersona_foreign` FOREIGN KEY (`idPersona`) REFERENCES `personas` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `planes` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
