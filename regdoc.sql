-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2024 a las 00:38:21
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
-- Base de datos: `regdoc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulogenerals`
--

CREATE TABLE `articulogenerals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombrearticulo` varchar(120) NOT NULL,
  `anio` varchar(255) NOT NULL,
  `organopublicacion` varchar(120) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `coautor` varchar(50) NOT NULL,
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulorevistas`
--

CREATE TABLE `articulorevistas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombrearticulo` varchar(120) NOT NULL,
  `anio` varchar(255) NOT NULL,
  `organopublicacion` varchar(120) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `coautor` varchar(50) NOT NULL,
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('mserrano.l@gmail.com|::1', 'i:1;', 1717793544),
('mserrano.l@gmail.com|::1:timer', 'i:1717793544;', 1717793544),
('teamn300@gmail.com|::1', 'i:1;', 1717797766),
('teamn300@gmail.com|::1:timer', 'i:1717797766;', 1717797766);

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
  `ciudadresidencia` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefonofijo` varchar(9) NOT NULL,
  `celular` varchar(9) NOT NULL,
  `correo` varchar(25) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `telegram` varchar(50) NOT NULL,
  `whatsapp` varchar(50) NOT NULL,
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonas`
--

CREATE TABLE `datospersonas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecharegistro` date NOT NULL DEFAULT current_timestamp(),
  `nombre` varchar(27) NOT NULL,
  `apellidoPaterno` varchar(20) NOT NULL,
  `apellidoMaterno` varchar(20) NOT NULL,
  `profesion` varchar(50) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `lugarNacimiento` enum('La Paz','Oruro','Potosi','Cochabamba','Santa Cruz','Beni','Pando','Tarija','Chuquisaca','Otro') NOT NULL,
  `edad` varchar(2) NOT NULL,
  `estadoCivil` enum('Soltero/a','Casado/a','Compromiso','Viudo/a') NOT NULL,
  `sexo` enum('Masculino','Femenino') NOT NULL,
  `carnetidentidad` varchar(8) NOT NULL,
  `ciexpedido` enum('LP','OR','PT','CB','SC','BN','PA','TJ','CH') NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `datospersonas`
--

INSERT INTO `datospersonas` (`id`, `fecharegistro`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `profesion`, `fechaNacimiento`, `lugarNacimiento`, `edad`, `estadoCivil`, `sexo`, `carnetidentidad`, `ciexpedido`, `user_id`, `created_at`, `updated_at`) VALUES
(4, '2024-06-07', 'David', 'Ontiveiros', 'Sampieri', 'Lic. en Ingenieria Aeroespacial', '1999-07-08', 'Santa Cruz', '25', 'Soltero/a', 'Masculino', '7256153', 'SC', 1, '2024-06-07 23:04:26', '2024-06-07 23:04:26'),
(5, '2024-06-12', 'Marcelo', 'Romero', 'Vaca', 'Lic. en Ingenieria Mecanica', '1998-06-08', 'Santa Cruz', '25', 'Soltero/a', 'Masculino', '7537887', 'BN', 1, '2024-06-13 00:43:11', '2024-06-13 00:43:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonbs`
--

CREATE TABLE `datospersonbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `celular` varchar(9) NOT NULL,
  `correo` varchar(25) NOT NULL,
  `idiomaNativo` enum('Español','Inglés','Portugués','Frances','Italiano','Chino','Japones','Coreano','Aleman','Ruso','Quechua','Aymara','Guarani','Otros') NOT NULL,
  `nivelidiomaescritura` enum('Bajo','Medio','Alto') NOT NULL,
  `nivelidiomalectura` enum('Bajo','Medio','Alto') NOT NULL,
  `nivelidiomahabla` enum('Bajo','Medio','Alto') NOT NULL,
  `idiomaSecundario` enum('Español','Inglés','Portugués','Frances','Italiano','Chino','Japones','Coreano','Aleman','Ruso','Quechua','Aymara','Guarani','Otros') NOT NULL,
  `nivelidiomaSecundarioescritura` enum('Bajo','Medio','Alto') NOT NULL,
  `nivelidiomaSecundariolectura` enum('Bajo','Medio','Alto') NOT NULL,
  `nivelidiomaSecundariohabla` enum('Bajo','Medio','Alto') NOT NULL,
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expdocentes`
--

CREATE TABLE `expdocentes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institucion` varchar(120) NOT NULL,
  `carrera` varchar(120) NOT NULL,
  `fechainicio` date NOT NULL,
  `fechafin` date NOT NULL,
  `duracion` varchar(4) NOT NULL COMMENT 'En horas',
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expoconferencias`
--

CREATE TABLE `expoconferencias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institucion` varchar(120) NOT NULL,
  `tipoevento` enum('Conferencia') NOT NULL,
  `tematica` varchar(120) NOT NULL,
  `fechainicio` date NOT NULL,
  `fechafin` date NOT NULL,
  `duracion` varchar(4) NOT NULL COMMENT 'En horas',
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expoeventos`
--

CREATE TABLE `expoeventos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institucion` varchar(120) NOT NULL,
  `tipoevento` enum('Cientifico') NOT NULL,
  `tematica` varchar(120) NOT NULL,
  `fechainicio` date NOT NULL,
  `fechafin` date NOT NULL,
  `duracion` varchar(4) NOT NULL COMMENT 'En horas',
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exposeminarios`
--

CREATE TABLE `exposeminarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institucion` varchar(120) NOT NULL,
  `tipoevento` enum('Seminario') NOT NULL,
  `tematica` varchar(120) NOT NULL,
  `fechainicio` date NOT NULL,
  `fechafin` date NOT NULL,
  `duracion` varchar(4) NOT NULL COMMENT 'En horas',
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expprograrels`
--

CREATE TABLE `expprograrels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institucion` varchar(120) NOT NULL,
  `cargoactividad` varchar(120) NOT NULL COMMENT 'indique cargo o actividad',
  `fechainicio` date NOT NULL,
  `fechafin` date NOT NULL,
  `duracion` varchar(4) NOT NULL COMMENT 'En horas',
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Estructura de tabla para la tabla `formcursos`
--

CREATE TABLE `formcursos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institucion` varchar(120) NOT NULL,
  `tipo` enum('Curso','Seminario','Simposio','Otros') NOT NULL,
  `nombreevento` varchar(120) NOT NULL,
  `fechainicio` date NOT NULL,
  `fechafin` date NOT NULL,
  `duracion` varchar(4) NOT NULL COMMENT 'En horas',
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formpostgrados`
--

CREATE TABLE `formpostgrados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institucionUniversidad` varchar(120) NOT NULL,
  `anio` varchar(255) NOT NULL,
  `gradoacademico` enum('Diplomado','Maestria','Especialidad','Doctorado','MBA') NOT NULL,
  `titulodiploma` varchar(120) NOT NULL,
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formprofesionals`
--

CREATE TABLE `formprofesionals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `universidad` varchar(120) NOT NULL,
  `anio` varchar(255) NOT NULL,
  `gradoacademico` enum('Tecnico','Tecnologo','Licenciatura','Maestria','Doctorado') NOT NULL,
  `titulodiploma` varchar(120) NOT NULL,
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcadminacads`
--

CREATE TABLE `funcadminacads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institucion` varchar(120) NOT NULL,
  `cargoempleado` varchar(120) NOT NULL,
  `fechainicio` date NOT NULL,
  `fechafin` date NOT NULL,
  `duracion` varchar(4) NOT NULL COMMENT 'En horas',
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Estructura de tabla para la tabla `libropublicados`
--

CREATE TABLE `libropublicados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(120) NOT NULL,
  `anio` varchar(4) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `coautor` varchar(50) NOT NULL,
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_21_200542_create_datospersonas_table', 1),
(5, '2024_05_21_200546_create_datospersonbs_table', 1),
(6, '2024_05_21_210839_create_formprofesionals_table', 1),
(7, '2024_05_21_210937_create_formpostgrados_table', 1),
(8, '2024_05_21_210954_create_formcursos_table', 1),
(9, '2024_05_21_211118_create_expdocentes_table', 1),
(10, '2024_05_21_211209_create_funcadminacads_table', 1),
(11, '2024_05_21_211231_create_tutortribunals_table', 1),
(12, '2024_05_21_211305_create_expoeventos_table', 1),
(13, '2024_05_21_211340_create_expoconferencias_table', 1),
(14, '2024_05_21_211353_create_exposeminarios_table', 1),
(15, '2024_05_21_211537_create_expprograrels_table', 1),
(16, '2024_05_21_211701_create_libropublicados_table', 1),
(17, '2024_05_21_211716_create_textopublicados_table', 1),
(18, '2024_05_21_211803_create_articulorevistas_table', 1),
(19, '2024_05_21_211822_create_articulogenerals_table', 1),
(20, '2024_05_21_211856_create_trabproyinvconcluidos_table', 1),
(21, '2024_06_05_153240_create_reconocimientos_table', 1),
(22, '2024_06_05_153316_create_contactos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('miguel.vertis.villanueva@gmail.com', '$2y$12$rO3Tzn8l6t3P0r7ZeBJNBeR0nAwO216jA9JibkX3Ul0AnpSix5rNO', '2024-06-08 01:42:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reconocimientos`
--

CREATE TABLE `reconocimientos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reconocimiento` varchar(120) NOT NULL,
  `institucion` varchar(50) NOT NULL,
  `anio` varchar(255) NOT NULL,
  `actividad` varchar(50) NOT NULL,
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('0tydqrivkg5XM8HYHNy9WShyGBa8Z7vLB1cNPt1K', NULL, '192.168.1.26', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36 EdgA/125.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR0VBV0FlTldIaUVqcGtZRG1tSmhpMU5jVE9MdkVzVHBNSDVpU09ZSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xOTIuMTY4LjEuMjgvcmVnaXNkb2NlbnRlL3B1YmxpYy9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1718221774),
('5Pv6CfipqY2MSKCJxeZxxkFh0BM0qnH20eIMc6Dl', 5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY1lGTFlFZWtpdjNtaGtQVDRSZm1uNjI3blMyS2U2eWliR2hqUXdvaCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9sb2NhbGhvc3QvcmVnaXNkb2NlbnRlL3B1YmxpYy9ob21lIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NTt9', 1718226852),
('fODMetlA51Dw4FyNHlGAWmQEDJu7FpxpkRrV4v0D', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiam91TzhKS1RzcWlwMWFFeklSNHFuWVdXZVZmVFRySkxPZXZNQTZrMiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjU3OiJodHRwOi8vbG9jYWxob3N0L3JlZ2lzZG9jZW50ZS9wdWJsaWMvZGF0b3NwZXJzb25icy9jcmVhdGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTcxODI4OTcwMDt9fQ==', 1718295459),
('JAb4pOdjAxp2JZkqmF0MZ0ttNGsWnQhDx5RxC8tP', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUEpWbUFuRExUVlhTUWIxMTBQbWY4OHR5MjFaMlNoakV3eWkyck54ayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly9sb2NhbGhvc3QvcmVnaXNkb2NlbnRlL3B1YmxpYy9kYXRvc3BlcnNvbmFzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE3MTgzMDQ3MDg7fX0=', 1718304778),
('x0XNHbbZFgJmiZGJwXCTsoe0cqUA08glbI5lbb7E', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoic00wTjN6TkFRTFA1bXFPZUxoUVJFYVVJYzlNM3h0cVBkSjJQOUNOVSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjU3OiJodHRwOi8vbG9jYWxob3N0L3JlZ2lzZG9jZW50ZS9wdWJsaWMvZGF0b3NwZXJzb25icy9jcmVhdGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTcxODMxMzEwMDt9fQ==', 1718313213);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `textopublicados`
--

CREATE TABLE `textopublicados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(120) NOT NULL,
  `anio` varchar(4) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `coautor` varchar(50) NOT NULL,
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabproyinvconcluidos`
--

CREATE TABLE `trabproyinvconcluidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trabajoproyecto` enum('Proyecto','Trabajo') NOT NULL COMMENT 'Proy o Trab investigación concluido',
  `fechainicio` date NOT NULL,
  `fechafin` date NOT NULL,
  `duracion` varchar(4) NOT NULL COMMENT 'En horas',
  `autor` varchar(75) NOT NULL,
  `coautor` varchar(75) NOT NULL,
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutortribunals`
--

CREATE TABLE `tutortribunals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institucion` varchar(120) NOT NULL,
  `pregradopostgrado` enum('Pregrado','Postgrado') NOT NULL,
  `nivelprograma` varchar(120) NOT NULL,
  `tutorevalutribu` enum('Tutor','Tutora','Evaluador','Tribunal','Coordinador','Asesor') NOT NULL,
  `tituloinvestigacion` varchar(120) NOT NULL,
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Miguel Angel Vertis Villanueva', 'miguel.vertis.villanueva@gmail.com', NULL, '$2y$12$W2NzUxID6MX0FQjS06e1G.BEdNWkqt.mXHxI3mMVxNx0tYlOdjnp6', 'j5s8ZO3pYU6ZJrvpkI5sKq3cXZ2Kwm8qOOBUThCVNfM94E1y3wxoYzhqbS1l', '2024-06-05 23:51:34', '2024-06-05 23:51:34'),
(2, 'Prueba desde telefono', 'Teamn300@gmail.com', NULL, '$2y$12$b.a3ofu2ywLhJvRXbcPuTeCPmkb7GeweF7BAXy8UdSNQfNqKVsws.', NULL, '2024-06-07 23:19:07', '2024-06-07 23:19:07'),
(3, 'pruebas 2', 'miguelvertiscca@gmail.com', NULL, '$2y$12$q3T.eKd./SYlwtjZgShvm.cdg.H4eIIFZANI1KmmoSCzcrue6clia', NULL, '2024-06-08 00:54:08', '2024-06-08 00:54:08'),
(4, 'Andrea Lucia Aramayo Martinez', 'lucia.aramayo@esam.edu.bo', NULL, '$2y$12$.5UP4qZx.1vAlLt5urkY1OMpeqXiJmMKXt9gp8UuzijYFQle8TuIO', NULL, '2024-06-13 00:46:29', '2024-06-13 00:46:29'),
(5, 'Erick Mauricio Manjón Romero', 'erick.manjon@esam.edu.bo', NULL, '$2y$12$mesEZqJTaTXZpeLD0AYdmOp87EI6BZEHvxk9lI2xuNN76fBLXlTCW', NULL, '2024-06-13 00:52:55', '2024-06-13 00:52:55');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulogenerals`
--
ALTER TABLE `articulogenerals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articulogenerals_datospersona_id_foreign` (`datospersona_id`),
  ADD KEY `articulogenerals_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `articulorevistas`
--
ALTER TABLE `articulorevistas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articulorevistas_datospersona_id_foreign` (`datospersona_id`),
  ADD KEY `articulorevistas_user_id_foreign` (`user_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contactos_correo_unique` (`correo`),
  ADD KEY `contactos_datospersona_id_foreign` (`datospersona_id`),
  ADD KEY `contactos_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `datospersonas`
--
ALTER TABLE `datospersonas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datospersonas_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `datospersonbs`
--
ALTER TABLE `datospersonbs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `datospersonbs_correo_unique` (`correo`),
  ADD KEY `datospersonbs_datospersona_id_foreign` (`datospersona_id`),
  ADD KEY `datospersonbs_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `expdocentes`
--
ALTER TABLE `expdocentes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expdocentes_datospersona_id_foreign` (`datospersona_id`),
  ADD KEY `expdocentes_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `expoconferencias`
--
ALTER TABLE `expoconferencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expoconferencias_datospersona_id_foreign` (`datospersona_id`),
  ADD KEY `expoconferencias_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `expoeventos`
--
ALTER TABLE `expoeventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expoeventos_datospersona_id_foreign` (`datospersona_id`),
  ADD KEY `expoeventos_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `exposeminarios`
--
ALTER TABLE `exposeminarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exposeminarios_datospersona_id_foreign` (`datospersona_id`),
  ADD KEY `exposeminarios_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `expprograrels`
--
ALTER TABLE `expprograrels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expprograrels_datospersona_id_foreign` (`datospersona_id`),
  ADD KEY `expprograrels_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `formcursos`
--
ALTER TABLE `formcursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formcursos_datospersona_id_foreign` (`datospersona_id`),
  ADD KEY `formcursos_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `formpostgrados`
--
ALTER TABLE `formpostgrados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formpostgrados_datospersona_id_foreign` (`datospersona_id`),
  ADD KEY `formpostgrados_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `formprofesionals`
--
ALTER TABLE `formprofesionals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formprofesionals_datospersona_id_foreign` (`datospersona_id`),
  ADD KEY `formprofesionals_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `funcadminacads`
--
ALTER TABLE `funcadminacads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `funcadminacads_datospersona_id_foreign` (`datospersona_id`),
  ADD KEY `funcadminacads_user_id_foreign` (`user_id`);

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
-- Indices de la tabla `libropublicados`
--
ALTER TABLE `libropublicados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `libropublicados_datospersona_id_foreign` (`datospersona_id`),
  ADD KEY `libropublicados_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `reconocimientos`
--
ALTER TABLE `reconocimientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reconocimientos_datospersona_id_foreign` (`datospersona_id`),
  ADD KEY `reconocimientos_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `textopublicados`
--
ALTER TABLE `textopublicados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `textopublicados_datospersona_id_foreign` (`datospersona_id`),
  ADD KEY `textopublicados_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `trabproyinvconcluidos`
--
ALTER TABLE `trabproyinvconcluidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trabproyinvconcluidos_datospersona_id_foreign` (`datospersona_id`),
  ADD KEY `trabproyinvconcluidos_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `tutortribunals`
--
ALTER TABLE `tutortribunals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tutortribunals_datospersona_id_foreign` (`datospersona_id`),
  ADD KEY `tutortribunals_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT de la tabla `articulogenerals`
--
ALTER TABLE `articulogenerals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `articulorevistas`
--
ALTER TABLE `articulorevistas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datospersonas`
--
ALTER TABLE `datospersonas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `datospersonbs`
--
ALTER TABLE `datospersonbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `expdocentes`
--
ALTER TABLE `expdocentes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `expoconferencias`
--
ALTER TABLE `expoconferencias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `expoeventos`
--
ALTER TABLE `expoeventos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `exposeminarios`
--
ALTER TABLE `exposeminarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `expprograrels`
--
ALTER TABLE `expprograrels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formcursos`
--
ALTER TABLE `formcursos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formpostgrados`
--
ALTER TABLE `formpostgrados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formprofesionals`
--
ALTER TABLE `formprofesionals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `funcadminacads`
--
ALTER TABLE `funcadminacads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `libropublicados`
--
ALTER TABLE `libropublicados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `reconocimientos`
--
ALTER TABLE `reconocimientos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `textopublicados`
--
ALTER TABLE `textopublicados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `trabproyinvconcluidos`
--
ALTER TABLE `trabproyinvconcluidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tutortribunals`
--
ALTER TABLE `tutortribunals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulogenerals`
--
ALTER TABLE `articulogenerals`
  ADD CONSTRAINT `articulogenerals_datospersona_id_foreign` FOREIGN KEY (`datospersona_id`) REFERENCES `datospersonas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articulogenerals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `articulorevistas`
--
ALTER TABLE `articulorevistas`
  ADD CONSTRAINT `articulorevistas_datospersona_id_foreign` FOREIGN KEY (`datospersona_id`) REFERENCES `datospersonas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articulorevistas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD CONSTRAINT `contactos_datospersona_id_foreign` FOREIGN KEY (`datospersona_id`) REFERENCES `datospersonas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contactos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `datospersonas`
--
ALTER TABLE `datospersonas`
  ADD CONSTRAINT `datospersonas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `datospersonbs`
--
ALTER TABLE `datospersonbs`
  ADD CONSTRAINT `datospersonbs_datospersona_id_foreign` FOREIGN KEY (`datospersona_id`) REFERENCES `datospersonas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `datospersonbs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `expdocentes`
--
ALTER TABLE `expdocentes`
  ADD CONSTRAINT `expdocentes_datospersona_id_foreign` FOREIGN KEY (`datospersona_id`) REFERENCES `datospersonas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `expdocentes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `expoconferencias`
--
ALTER TABLE `expoconferencias`
  ADD CONSTRAINT `expoconferencias_datospersona_id_foreign` FOREIGN KEY (`datospersona_id`) REFERENCES `datospersonas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `expoconferencias_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `expoeventos`
--
ALTER TABLE `expoeventos`
  ADD CONSTRAINT `expoeventos_datospersona_id_foreign` FOREIGN KEY (`datospersona_id`) REFERENCES `datospersonas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `expoeventos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `exposeminarios`
--
ALTER TABLE `exposeminarios`
  ADD CONSTRAINT `exposeminarios_datospersona_id_foreign` FOREIGN KEY (`datospersona_id`) REFERENCES `datospersonas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exposeminarios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `expprograrels`
--
ALTER TABLE `expprograrels`
  ADD CONSTRAINT `expprograrels_datospersona_id_foreign` FOREIGN KEY (`datospersona_id`) REFERENCES `datospersonas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `expprograrels_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `formcursos`
--
ALTER TABLE `formcursos`
  ADD CONSTRAINT `formcursos_datospersona_id_foreign` FOREIGN KEY (`datospersona_id`) REFERENCES `datospersonas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `formcursos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `formpostgrados`
--
ALTER TABLE `formpostgrados`
  ADD CONSTRAINT `formpostgrados_datospersona_id_foreign` FOREIGN KEY (`datospersona_id`) REFERENCES `datospersonas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `formpostgrados_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `formprofesionals`
--
ALTER TABLE `formprofesionals`
  ADD CONSTRAINT `formprofesionals_datospersona_id_foreign` FOREIGN KEY (`datospersona_id`) REFERENCES `datospersonas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `formprofesionals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `funcadminacads`
--
ALTER TABLE `funcadminacads`
  ADD CONSTRAINT `funcadminacads_datospersona_id_foreign` FOREIGN KEY (`datospersona_id`) REFERENCES `datospersonas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `funcadminacads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `libropublicados`
--
ALTER TABLE `libropublicados`
  ADD CONSTRAINT `libropublicados_datospersona_id_foreign` FOREIGN KEY (`datospersona_id`) REFERENCES `datospersonas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `libropublicados_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `reconocimientos`
--
ALTER TABLE `reconocimientos`
  ADD CONSTRAINT `reconocimientos_datospersona_id_foreign` FOREIGN KEY (`datospersona_id`) REFERENCES `datospersonas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reconocimientos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `textopublicados`
--
ALTER TABLE `textopublicados`
  ADD CONSTRAINT `textopublicados_datospersona_id_foreign` FOREIGN KEY (`datospersona_id`) REFERENCES `datospersonas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `textopublicados_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `trabproyinvconcluidos`
--
ALTER TABLE `trabproyinvconcluidos`
  ADD CONSTRAINT `trabproyinvconcluidos_datospersona_id_foreign` FOREIGN KEY (`datospersona_id`) REFERENCES `datospersonas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `trabproyinvconcluidos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tutortribunals`
--
ALTER TABLE `tutortribunals`
  ADD CONSTRAINT `tutortribunals_datospersona_id_foreign` FOREIGN KEY (`datospersona_id`) REFERENCES `datospersonas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tutortribunals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
