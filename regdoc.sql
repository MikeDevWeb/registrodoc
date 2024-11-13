-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2024 a las 23:21:04
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
  `fecharegistro` date NOT NULL DEFAULT current_timestamp(),
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

--
-- Volcado de datos para la tabla `articulogenerals`
--

INSERT INTO `articulogenerals` (`id`, `fecharegistro`, `nombrearticulo`, `anio`, `organopublicacion`, `autor`, `coautor`, `datospersona_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2024-07-15', 'Articulo en salud: Los sabores aportan nociones de metales pesados?...', '2021', 'Revista Mallorca de ciencia y salud', 'David Ontiveiros Sampieri', '-', 4, 1, '2024-07-16 02:17:53', '2024-07-16 02:17:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulorevistas`
--

CREATE TABLE `articulorevistas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecharegistro` date NOT NULL DEFAULT current_timestamp(),
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

--
-- Volcado de datos para la tabla `articulorevistas`
--

INSERT INTO `articulorevistas` (`id`, `fecharegistro`, `nombrearticulo`, `anio`, `organopublicacion`, `autor`, `coautor`, `datospersona_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2024-07-16', 'Artículo: Novedades en el formato de distribución de masa en construcción de puentes', '2022', 'Merida Blank Revistas de ciencia y tecnología', 'David Ontiveiros Sampieri', '-', 4, 1, '2024-07-16 19:00:20', '2024-07-16 19:00:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `fecharegistro` date NOT NULL DEFAULT current_timestamp(),
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

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `fecharegistro`, `ciudadresidencia`, `direccion`, `telefonofijo`, `celular`, `correo`, `facebook`, `twitter`, `linkedin`, `instagram`, `telegram`, `whatsapp`, `datospersona_id`, `user_id`, `created_at`, `updated_at`) VALUES
(3, '2024-07-08', 'Cochabamba', 'Loa 23', '6412121', '61752371', 'ejemplar@correo.com', 'fb.com/espera', 'x.com/arepse', 'linkedin.com/user', 'ig.com/3231', '75312121', '73111111', 4, 1, '2024-07-09 06:33:03', '2024-07-09 06:33:03'),
(4, '2024-07-12', 'Sucre', 'Condominio la florida N° 80', '0', '75817082', 'rogumichel25@outlook.com', '0', '0', '0', '0', '0', '75817082', 10, 5, '2024-07-12 19:25:44', '2024-07-12 19:25:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonas`
--

CREATE TABLE `datospersonas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecharegistro` date DEFAULT current_timestamp(),
  `nombre` varchar(27) NOT NULL,
  `apellidoPaterno` varchar(20) NOT NULL,
  `apellidoMaterno` varchar(20) NOT NULL,
  `profesion` enum('Abogacía','Administradora De Empresas','Agrimensor','Arqueología','Arquitecto Urbanista','Auditoría Financiera','Auxiliar En Enfermería','Chef','Cirujano Dentista','Comunicador Audiovisual Con Mención En Radio Y Televisión','Contador General','Contaduría Financiera','Contaduría Pública Con Autorización','Contaduría Pública Y Auditoria Forense','Doctor Anestesiólogo','Doctor En Medicina','Economista','Educación Parvularia','Educación Secundaria Comunitaria Productiva','Educación Secundaria Comunitaria','Educador Especial','Especialista En Pediatría','Fisioterapeuta','Fonoaudiología','Funcionario Policial','Historia','Ing. Acuicultor','Ing. Aeroespacial','Ing. Aeronáutica','Ing. Agrícola','Ing. Agroforestal','Ing. Agroindustrial','Ing. Agronómica','Ing. Agropecuaria','Ing. Ambiental','Ing. Biomédica','Ing. Civil','Ing. Comercial','Ing. De Alimentos','Ing. De Recursos Hídricos','Ing. De Sistemas','Ing. Desarrollo Rural','Ing. Electricista','Ing. Eléctrico','Ing. Electromecánica','Ing. Electrónica','Ing. Electrónico','Ing. En Agronomía','Ing. En Biología Marina','Ing. En Desarrollo Rural Sostenible','Ing. En Desarrollo Socioeconómico Y Ambiente','Ing. En Eco Piscicultura','Ing. En Ecología Y Medio Ambiente','Ing. En Electromecánica','Ing. En Fitotecnia','Ing. En Gas Y Petróleo','Ing. En Geodesia Y Topografía','Ing. En Geodesia','Ing. En Geografía','Ing. En Irrigación','Ing. En Materiales','Ing. En Mecánica Agropecuaria','Ing. En Medio Ambiente','Ing. En Minas','Ing. En Recursos Naturales','Ing. En Redes Y Telecomunicaciones','Ing. En Robótica','Ing. En Sistemas Electrónicos','Ing. En Sonido','Ing. Financiera','Ing. Forestal','Ing. Geográfica Militar','Ing. Geográfica','Ing. Geológica','Ing. Industrial','Ing. Informática','Ing. Informático','Ing. Mecánica','Ing. Mecánico','Ing. Mecatrónica','Ing. Médico Anestesista','Ing. Metalúrgica','Ing. Meteorológica','Ing. Nuclear','Ing. Petro Ambientalista','Ing. Petrolera','Ing. Petroquímica','Ing. Química','Ing. Químico Tecnólogo En El Carbono Y Sus Derivados','Ing. Sanitario Y Ambiental','Ing. Tecnologías De Información Y Seguridad','Ing. Telecomunicaciones','Ing. Zootécnico','Lic. Auditoría Contaduría Pública','Lic. Ciencias Militares Terrestres','Lic. Ciencias Policiales','Lic. Construcción Civil','Lic. Diseño De Interiores E Inmobiliario','Lic. Educación Técnica Tecnológica','Lic. En Actividad Física','Lic. En Administración De Empresas','Lic. En Administración Educativa','Lic. En Administración Financiera','Lic. En Administración Y Gestión Publica','Lic. En Agronomía','Lic. En Antropología','Lic. En Arquitectura Y Urbanismo','Lic. En Arquitectura','Lic. En Auditoría Y Contaduría Pública','Lic. En Auditoria','Lic. En Bio-Imagenología','Lic. En Bioquímica Farmacéutica','Lic. En Bioquímica Y Farmacia','LIC. En Bioquímica','Lic. En Bioquímico Farmacéutico','Lic. En Ciencias De La Comunicación Social','Lic. En Ciencias De La Educación Para El Desarrollo Humano','Lic. En Ciencias De La Educación','Lic. En Ciencias Jurídicas Y Políticas','Lic. En Ciencias Jurídicas','Lic. En Ciencias Naturales: Biología - Geografía','Lic. En Ciencias Naturales: Física-Química','Lic. En Ciencias Políticas','Lic. En Ciencias Y Artes Militares Navales','Lic. En Comercio Internacional','Lic. En Comunicación Social','Lic. En Construcción Civil','Lic. En Contabilidad Y Finanzas','Lic. En Contaduría Pública','Lic. En Contaduría Y Auditoría De Sistemas','Lic. En Derecho Ciencias Políticas Y Sociales','Lic. En Derecho Y Ciencias Jurídicas','Lic. En Derecho','Lic. En Diseño Gráfico Y Comunicación Visual','Lic. En Economía','Lic. En Educación Escolar','Lic. En Educación Especial','Lic. En Educación Inicial En Familia Comunitaria','Lic. En Educación Intercultural Bilingüe','Lic. En Educación Intercultural Innovadora','Lic. En Educación Técnica Y Tecnológica','Lic. En Educación','Lic. En Electricidad','Lic. En Electro Mecánica','Lic. En Enfermería Obstetríz','Lic. En Enfermería Y Obstetricia','Lic. En Enfermería','Lic. En Estadística','Lic. En Farmacia','Lic. En Filosofía Y Letras','Lic. En Física','Lic. En Fisioterapia Y Kinesiología','Lic. En Fonoaudiología','Lic. En Geografía','Lic. En Gestión Ambiental','Lic. En Gestión Del Desarrollo Endógeno Y Agroecología','Lic. En Idioma Inglés','Lic. En Idiomas Inglés Y Francés','Lic. En Informática','Lic. En Ingeniería Agrónoma','Lic. En Ingeniería Civil','Lic. En Ingeniería De Sistemas','Lic. En Ingeniería Electrónica','Lic. En Ingeniería En Redes Y Telecomunicaciones','Lic. En Ingeniería Geológica','Lic. En Ingeniería Mecánica Automotriz','Lic. En Laboratorio Clínico','Lic. En Lingüística Aplicada A La Enseñanza De Lenguas','Lic. En Lingüística E Idiomas','Lic. En Marketing Y Publicidad','Lic. En Matemática','Lic. En Mecánica Industrial','Lic. En Medicina Veterinaria Y Zootecnia','Lic. En Medicina','Lic. En Negocios Internacionales','Lic. En Nutrición Y Dietética','Lic. En Odontología','Lic. En Orden Y Seguridad','Lic. En Pedagogía Social','Lic. En Pedagogía','Lic. En Psicología','Lic. En Psicopedagogía','Lic. En Química Farmacéutica','Lic. En Química Industrial','Lic. En Relaciones Internacionales','Lic. En Teología','Lic. En Trabajo Social','Lic. En Turismo Y Hotelería','Lic. En Turismo','Lic. Farmacia Y Bioquímica','Lic. Ingeniería Química Industrial','Lic. Laboratorista','Lic. Literatura','Lic. Medicina Forense','Lic. Planificación Territorial','Lic. Psicomotricidad','Lic. Técnica Tecnológica Comunitaria','Lic. Técnica Tecnológica General','Licenciada En Trabajo Social','Licenciatura En Sociología','Maestra De Educación Alternativa Educación De Personas Jóvenes Y Adultas','Maestra De Educación Primaria Comunitaria Vocacional','Maestra De Física Y Química','Maestra De Matemática','Maestra De Técnica Tecnológica General','Maestro De Cosmovisiones, Filosofía Y Psicología','Mecánico','Medicina Familiar','Medico Anestesiólogo','Médico Cirujano','Médico Especialista En Radiología','Médico General','Médico Ginecólogo Obstetra','Médico Integral Comunitario','Médico Internista','Médico Reumatólogo','Médico Veterinario','Nutricionista','Oficial De Policía','Optometría','Profesor','Químico Farmacéutico','Relaciones Internacionales','Sociólogo','Técnico Electrónico','Técnico En Bibliotecología','Técnico Medio En Auxiliar De Enfermería','Técnico Medio En Enfermería','Técnico Medio En Gastronomía','Técnico Superior Electrónica Y Telecomunicaciones','Técnico Superior En Electricidad Industrial','Técnico Superior En Electromecánica','Técnico Superior En Mantenimiento De Equipo Pesado','Técnico Superior En Química Industrial','Técnico Superior En Secretariado Ejecutivo','Técnico Superior En Topografía','Técnico Superior Mecánica Automotriz','Trabajadora Social') NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `lugarNacimiento` enum('La Paz','Oruro','Potosi','Cochabamba','Santa Cruz','Beni','Pando','Tarija','Chuquisaca','Otro') NOT NULL,
  `edad` varchar(2) NOT NULL,
  `estadoCivil` enum('Soltero/a','Casado/a','Concubinato','Viudo/a') NOT NULL,
  `sexo` enum('Masculino','Femenino') NOT NULL,
  `carnetidentidad` varchar(8) NOT NULL,
  `ciexpedido` enum('LP','OR','PT','CB','SC','BN','PA','TJ','CH','') DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `datospersonas`
--

INSERT INTO `datospersonas` (`id`, `fecharegistro`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `profesion`, `fechaNacimiento`, `lugarNacimiento`, `edad`, `estadoCivil`, `sexo`, `carnetidentidad`, `ciexpedido`, `user_id`, `created_at`, `updated_at`) VALUES
(4, '2024-06-07', 'David', 'Ontiveiros', 'Sampieri', 'Ing. Comercial', '1999-07-08', 'Santa Cruz', '26', 'Soltero/a', 'Masculino', '7256153', 'SC', 1, '2024-06-07 23:04:26', '2024-07-30 00:16:53'),
(5, '2024-06-12', 'Marcelo', 'Romero', 'Vaca', 'Contaduría Financiera', '1998-06-08', 'Santa Cruz', '25', 'Soltero/a', 'Masculino', '7537887', 'BN', 1, '2024-06-13 00:43:11', '2024-07-11 00:02:24'),
(6, '2024-06-14', 'Hugo Martín', 'Carrasco', 'Pinaya', 'Educación Parvularia', '1995-05-04', 'Cochabamba', '29', 'Casado/a', 'Masculino', '1189234', 'CB', 1, '2024-06-15 02:01:48', '2024-07-11 00:02:42'),
(7, '2024-06-17', 'Rafael', 'Urquizu', 'Mendieta', 'Contaduría Pública Y Auditoria Forense', '1994-06-15', 'Chuquisaca', '30', 'Soltero/a', 'Masculino', '1109283', 'LP', 1, '2024-06-18 00:52:36', '2024-07-11 00:02:54'),
(8, '2024-07-09', 'Marco Javier', 'Ugarte', 'Salazar', 'Fonoaudiología', '1996-05-24', 'Beni', '28', 'Casado/a', 'Masculino', '1102293', 'BN', 1, '2024-07-09 23:17:17', '2024-07-09 23:18:05'),
(9, '2024-07-09', 'Samuel', 'Contreras', 'Paredes', 'Ing. En Gas Y Petróleo', '1990-01-10', 'Santa Cruz', '34', 'Casado/a', 'Masculino', '1129102', 'SC', 1, '2024-07-10 01:13:21', '2024-07-10 01:13:21'),
(10, '2024-07-12', 'Ronald', 'Gutierrez', 'Michel', 'Médico Cirujano', '2000-01-01', 'La Paz', '25', 'Soltero/a', 'Masculino', '00000000', NULL, 5, '2024-07-12 19:13:20', '2024-07-12 19:13:20'),
(11, '2024-08-23', 'Raquel', 'Salinas', 'Buitrago', 'Abogacía', '1999-05-20', 'Cochabamba', '25', 'Soltero/a', 'Femenino', '6371621', 'CB', 1, '2024-08-24 01:53:21', '2024-08-24 01:53:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonbs`
--

CREATE TABLE `datospersonbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecharegistro` date NOT NULL DEFAULT current_timestamp(),
  `idiomaNativo` enum('Español','Inglés','Portugués','Frances','Italiano','Chino','Japones','Coreano','Aleman','Ruso','Quechua','Aymara','Guarani','Otros') NOT NULL,
  `nivelidiomaescritura` enum('Bajo','Medio','Alto') DEFAULT NULL,
  `nivelidiomalectura` enum('Bajo','Medio','Alto') DEFAULT NULL,
  `nivelidiomahabla` enum('Bajo','Medio','Alto') DEFAULT NULL,
  `idiomaSecundario` enum('Ninguno','Inglés','Español','Portugués','Frances','Italiano','Chino','Japones','Coreano','Aleman','Ruso','Quechua','Aymara','Guarani','Otros') DEFAULT NULL,
  `nivelidiomaSecundarioescritura` enum('Bajo','Medio','Alto') DEFAULT NULL,
  `nivelidiomaSecundariolectura` enum('Bajo','Medio','Alto') DEFAULT NULL,
  `nivelidiomaSecundariohabla` enum('Bajo','Medio','Alto') DEFAULT NULL,
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `datospersonbs`
--

INSERT INTO `datospersonbs` (`id`, `fecharegistro`, `idiomaNativo`, `nivelidiomaescritura`, `nivelidiomalectura`, `nivelidiomahabla`, `idiomaSecundario`, `nivelidiomaSecundarioescritura`, `nivelidiomaSecundariolectura`, `nivelidiomaSecundariohabla`, `datospersona_id`, `user_id`, `created_at`, `updated_at`) VALUES
(3, '2024-07-08', 'Español', 'Alto', 'Alto', 'Alto', 'Inglés', 'Medio', 'Medio', 'Alto', 6, 1, '2024-07-09 03:40:27', '2024-07-09 03:40:27'),
(4, '2024-07-12', 'Español', 'Medio', 'Medio', 'Medio', 'Español', 'Medio', 'Medio', 'Medio', 10, 5, '2024-07-12 19:21:28', '2024-07-12 19:21:28'),
(5, '2024-08-23', 'Español', 'Medio', 'Alto', 'Alto', 'Inglés', 'Medio', 'Medio', 'Medio', 11, 1, '2024-08-24 01:53:51', '2024-08-24 01:53:51'),
(6, '2024-08-24', 'Español', 'Medio', 'Alto', 'Alto', 'Inglés', 'Medio', 'Bajo', 'Medio', 4, 1, '2024-08-24 19:27:59', '2024-08-24 19:27:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expdocentes`
--

CREATE TABLE `expdocentes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecharegistro` date NOT NULL DEFAULT current_timestamp(),
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

--
-- Volcado de datos para la tabla `expdocentes`
--

INSERT INTO `expdocentes` (`id`, `fecharegistro`, `institucion`, `carrera`, `fechainicio`, `fechafin`, `duracion`, `datospersona_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2024-07-12', 'UTEPSA', 'ING. MECÁNICA', '2015-02-02', '2017-11-29', '31', 4, 1, '2024-07-12 17:38:29', '2024-07-12 17:43:52'),
(2, '2024-07-12', 'USFX', 'Medicina', '2000-02-10', '2000-02-01', '0', 10, 5, '2024-07-12 19:41:15', '2024-07-12 19:41:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expoconferencias`
--

CREATE TABLE `expoconferencias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecharegistro` date NOT NULL DEFAULT current_timestamp(),
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

--
-- Volcado de datos para la tabla `expoconferencias`
--

INSERT INTO `expoconferencias` (`id`, `fecharegistro`, `institucion`, `tipoevento`, `tematica`, `fechainicio`, `fechafin`, `duracion`, `datospersona_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2024-07-16', 'EMAS', 'Conferencia', 'Energía renovable de la combustión de gases de orgánicos residuales provenientes de mercados', '2020-07-18', '2020-07-25', '150', 4, 1, '2024-07-17 02:26:56', '2024-07-17 02:27:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expoeventos`
--

CREATE TABLE `expoeventos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecharegistro` date NOT NULL DEFAULT current_timestamp(),
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

--
-- Volcado de datos para la tabla `expoeventos`
--

INSERT INTO `expoeventos` (`id`, `fecharegistro`, `institucion`, `tipoevento`, `tematica`, `fechainicio`, `fechafin`, `duracion`, `datospersona_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2024-07-16', 'Saguapac', 'Cientifico', 'Científico Ecológico', '2024-02-16', '2024-02-17', '50', 4, 1, '2024-07-17 00:25:03', '2024-07-17 00:25:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exposeminarios`
--

CREATE TABLE `exposeminarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecharegistro` date NOT NULL DEFAULT current_timestamp(),
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

--
-- Volcado de datos para la tabla `exposeminarios`
--

INSERT INTO `exposeminarios` (`id`, `fecharegistro`, `institucion`, `tipoevento`, `tematica`, `fechainicio`, `fechafin`, `duracion`, `datospersona_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2024-07-16', 'Cessa - Sucre', 'Seminario', 'Energías limpias y su enfoque en la energía nuclear', '2022-02-18', '2022-02-23', '150', 4, 1, '2024-07-17 02:00:12', '2024-07-17 02:03:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expprograrels`
--

CREATE TABLE `expprograrels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecharegistro` date NOT NULL DEFAULT current_timestamp(),
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

--
-- Volcado de datos para la tabla `expprograrels`
--

INSERT INTO `expprograrels` (`id`, `fecharegistro`, `institucion`, `cargoactividad`, `fechainicio`, `fechafin`, `duracion`, `datospersona_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2024-07-13', 'UMRPSFXCH', 'Coordinador de programas', '2023-02-13', '2023-12-18', '10', 4, 1, '2024-07-13 19:59:59', '2024-07-13 19:59:59');

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
  `fecharegistro` date NOT NULL DEFAULT current_timestamp(),
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

--
-- Volcado de datos para la tabla `formcursos`
--

INSERT INTO `formcursos` (`id`, `fecharegistro`, `institucion`, `tipo`, `nombreevento`, `fechainicio`, `fechafin`, `duracion`, `datospersona_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2024-07-11', 'UMRPSFXCH', 'Curso', 'Curso internacional de actualización control de calidad interno y externo en hematología', '2022-06-07', '2022-07-13', '500', 4, 1, '2024-07-12 00:58:09', '2024-07-12 01:06:07'),
(2, '2024-07-12', 'usfx', 'Curso', 'odontologia', '2005-02-10', '2005-02-01', '10', 10, 5, '2024-07-12 19:36:26', '2024-07-12 19:36:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formpostgrados`
--

CREATE TABLE `formpostgrados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecharegistro` date NOT NULL DEFAULT current_timestamp(),
  `institucionUniversidad` varchar(120) NOT NULL,
  `anio` varchar(255) NOT NULL,
  `gradoacademico` enum('Diplomado','Maestria','Especialidad','Doctorado','MBA') NOT NULL,
  `titulodiploma` varchar(120) NOT NULL,
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `formpostgrados`
--

INSERT INTO `formpostgrados` (`id`, `fecharegistro`, `institucionUniversidad`, `anio`, `gradoacademico`, `titulodiploma`, `datospersona_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2024-07-10', 'UPDS', '2021', 'Diplomado', 'Diplomado en educación superior modelo por objetivos', 4, 1, '2024-07-11 01:39:20', '2024-07-11 23:47:39'),
(2, '2024-07-11', 'UMSA', '2016', 'Especialidad', 'Diplomado en educación superior con modelo por competencias', 5, 1, '2024-07-11 23:16:04', '2024-07-11 23:16:04'),
(3, '2024-07-12', 'UMSA', '2005', 'Maestria', 'Gerencia de Sistemas de Salud', 10, 5, '2024-07-12 19:33:07', '2024-07-12 19:33:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formprofesionals`
--

CREATE TABLE `formprofesionals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecharegistro` date NOT NULL DEFAULT current_timestamp(),
  `universidad` varchar(120) NOT NULL,
  `anio` varchar(255) NOT NULL,
  `gradoacademico` enum('Tecnico','Licenciatura') NOT NULL,
  `titulodiploma` varchar(120) NOT NULL,
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `formprofesionals`
--

INSERT INTO `formprofesionals` (`id`, `fecharegistro`, `universidad`, `anio`, `gradoacademico`, `titulodiploma`, `datospersona_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2024-07-09', 'USFX', '2020', 'Licenciatura', 'Lic. en Administración de Empresas', 6, 1, '2024-07-09 19:14:41', '2024-07-09 19:14:41'),
(2, '2024-07-09', 'USFX', '2010', 'Licenciatura', 'Lic. en Ingeniería de redes y telecomunicaciones', 4, 1, '2024-07-09 19:55:37', '2024-07-09 19:55:37'),
(7, '2024-07-09', 'UPDS', '2019', 'Licenciatura', 'Ing. En Redes Y Telecomunicaciones', 5, 1, '2024-07-10 01:21:53', '2024-07-10 01:29:32'),
(8, '2024-07-12', 'Mayor de San Andres', '1981', 'Licenciatura', 'Médico Cirujano', 10, 5, '2024-07-12 19:28:13', '2024-07-12 19:28:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcadminacads`
--

CREATE TABLE `funcadminacads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecharegistro` date NOT NULL DEFAULT current_timestamp(),
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

--
-- Volcado de datos para la tabla `funcadminacads`
--

INSERT INTO `funcadminacads` (`id`, `fecharegistro`, `institucion`, `cargoempleado`, `fechainicio`, `fechafin`, `duracion`, `datospersona_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2024-07-12', 'CAINCO', 'Coordinador Acción Social', '2024-01-12', '2024-11-20', '10', 4, 1, '2024-07-12 23:15:30', '2024-07-12 23:20:07');

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
  `fecharegistro` date NOT NULL DEFAULT current_timestamp(),
  `titulo` varchar(120) NOT NULL,
  `anio` varchar(4) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `coautor` varchar(50) NOT NULL,
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `libropublicados`
--

INSERT INTO `libropublicados` (`id`, `fecharegistro`, `titulo`, `anio`, `autor`, `coautor`, `datospersona_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2024-07-15', 'Las frases para vivir bien', '2022', 'David Ontiveiros Sampieri', '-', 4, 1, '2024-07-15 19:03:49', '2024-07-15 19:03:49');

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
(22, '2024_06_05_153316_create_contactos_table', 1),
(23, '2024_07_17_200515_create_pdfprinters_table', 2);

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
('miguel.vertis.villanueva@gmail.com', '$2y$12$WyYQMZJoJ6W6QkefIEc8S.fERDG.peEuKxw07QfTh1N5Jqp3/9Jna', '2024-07-01 19:53:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pdfprinters`
--

CREATE TABLE `pdfprinters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `articulogeneral_id` bigint(20) UNSIGNED NOT NULL,
  `articulorevista_id` bigint(20) UNSIGNED NOT NULL,
  `contacto_id` bigint(20) UNSIGNED NOT NULL,
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `datospersonb_id` bigint(20) UNSIGNED NOT NULL,
  `expdocente_id` bigint(20) UNSIGNED NOT NULL,
  `expoconferencia_id` bigint(20) UNSIGNED NOT NULL,
  `expoevento_id` bigint(20) UNSIGNED NOT NULL,
  `exposeminario_id` bigint(20) UNSIGNED NOT NULL,
  `expprograrel_id` bigint(20) UNSIGNED NOT NULL,
  `formcurso_id` bigint(20) UNSIGNED NOT NULL,
  `formpostgrado_id` bigint(20) UNSIGNED NOT NULL,
  `formprofesional_id` bigint(20) UNSIGNED NOT NULL,
  `funcadminacad_id` bigint(20) UNSIGNED NOT NULL,
  `libropublicado_id` bigint(20) UNSIGNED NOT NULL,
  `reconocimiento_id` bigint(20) UNSIGNED NOT NULL,
  `textopublicado_id` bigint(20) UNSIGNED NOT NULL,
  `trabproyinvconcluido_id` bigint(20) UNSIGNED NOT NULL,
  `tutortribunal_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reconocimientos`
--

CREATE TABLE `reconocimientos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecharegistro` date NOT NULL DEFAULT current_timestamp(),
  `reconocimiento` varchar(120) NOT NULL,
  `institucion` varchar(50) NOT NULL,
  `anio` varchar(255) NOT NULL,
  `actividad` varchar(100) NOT NULL,
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reconocimientos`
--

INSERT INTO `reconocimientos` (`id`, `fecharegistro`, `reconocimiento`, `institucion`, `anio`, `actividad`, `datospersona_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2024-07-30', 'Premio a docente destacable en el área de las ciencias computacionales', 'Colegio La Salle - Santa Cruz', '2017', 'Tutor y coach en destreza de programación en Java para Arduino para olimpiadas locales', 4, 1, '2024-07-30 22:09:23', '2024-07-30 22:09:23');

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
('RHVoAmmB5cmww8y7PnvmSzAgzwLZ5wJD3CwqZNox', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRW9HS1VkNVBuNlB3dnR5QVJrVFVQZnZjRlRGUGY0ampqdGFVTGdvdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3QvZGF0b3NwZXJzb25hcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzI5MTkzODE3O319', 1729193861),
('TRY6GGNbcdYixoOQfCe6y97v4VoxYg7S78ZCooKB', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVW5lWlgxR05PRFlGVVNBYXphQXl0eXZNUTh1U1JsTUUzVGxPNG1zOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly9sb2NhbGhvc3QvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1729714799);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `textopublicados`
--

CREATE TABLE `textopublicados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecharegistro` date NOT NULL DEFAULT current_timestamp(),
  `titulo` varchar(120) NOT NULL,
  `anio` varchar(4) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `coautor` varchar(50) NOT NULL,
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `textopublicados`
--

INSERT INTO `textopublicados` (`id`, `fecharegistro`, `titulo`, `anio`, `autor`, `coautor`, `datospersona_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2024-07-15', 'Texto de fórmulas matemáticas para finanzas', '2019', 'David Ontiveiros Sampieri', '-', 4, 1, '2024-07-16 01:50:29', '2024-07-16 01:50:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabproyinvconcluidos`
--

CREATE TABLE `trabproyinvconcluidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecharegistro` date NOT NULL DEFAULT current_timestamp(),
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

--
-- Volcado de datos para la tabla `trabproyinvconcluidos`
--

INSERT INTO `trabproyinvconcluidos` (`id`, `fecharegistro`, `trabajoproyecto`, `fechainicio`, `fechafin`, `duracion`, `autor`, `coautor`, `datospersona_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2024-07-16', 'Proyecto', '2019-03-20', '2019-10-18', '7', 'David Ontiveiros Sampieri', '-', 4, 1, '2024-07-16 20:13:15', '2024-07-16 20:13:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutortribunals`
--

CREATE TABLE `tutortribunals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecharegistro` date NOT NULL DEFAULT current_timestamp(),
  `institucion` varchar(120) NOT NULL,
  `pregradopostgrado` enum('Pregrado','Postgrado') NOT NULL,
  `nivelprograma` varchar(120) NOT NULL,
  `tutorevalutribu` enum('Tutor','Evaluador','Tribunal','Coordinador','Asesor') NOT NULL,
  `tituloinvestigacion` varchar(120) NOT NULL,
  `datospersona_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tutortribunals`
--

INSERT INTO `tutortribunals` (`id`, `fecharegistro`, `institucion`, `pregradopostgrado`, `nivelprograma`, `tutorevalutribu`, `tituloinvestigacion`, `datospersona_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2024-07-13', 'CCA', 'Pregrado', 'Tecnico Superior', 'Tutor', 'La calidad de software, un hueco en el proceso de investigación', 4, 1, '2024-07-13 18:45:14', '2024-07-13 18:45:14');

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
(1, 'Miguel Angel Vertis Villanueva', 'miguel.vertis.villanueva@gmail.com', NULL, '$2y$12$ShZEeih/a4EHgo0vYQb0TORQEaROMCPHP2toEqocUGoHem4gqVeEK', 'LmACivMGE0LoEbeS4bDjQazuvS6OlqQn3GeUvhoyn9e7jKBRiN8vZs3Ju0jh', '2024-06-05 23:51:34', '2024-06-29 01:51:29'),
(2, 'Prueba desde telefono', 'Teamn300@gmail.com', NULL, '$2y$12$b.a3ofu2ywLhJvRXbcPuTeCPmkb7GeweF7BAXy8UdSNQfNqKVsws.', NULL, '2024-06-07 23:19:07', '2024-06-07 23:19:07'),
(3, 'pruebas 2', 'miguelvertiscca@gmail.com', NULL, '$2y$12$q3T.eKd./SYlwtjZgShvm.cdg.H4eIIFZANI1KmmoSCzcrue6clia', NULL, '2024-06-08 00:54:08', '2024-06-08 00:54:08'),
(4, 'Andrea Lucia Aramayo Martinez', 'lucia.aramayo@esam.edu.bo', NULL, '$2y$12$.5UP4qZx.1vAlLt5urkY1OMpeqXiJmMKXt9gp8UuzijYFQle8TuIO', NULL, '2024-06-13 00:46:29', '2024-06-13 00:46:29'),
(5, 'Erick Mauricio Manjón Romero', 'erick.manjon@esam.edu.bo', NULL, '$2y$12$mesEZqJTaTXZpeLD0AYdmOp87EI6BZEHvxk9lI2xuNN76fBLXlTCW', NULL, '2024-06-13 00:52:55', '2024-06-13 00:52:55'),
(6, 'probanding', 'fret.rer.21@gmail.com', NULL, '$2y$12$AKWzJieyJ9itYNaLjbtTC.oLqfX4pL5lNZzGip1wsd3DMGhrV1gMu', NULL, '2024-07-01 18:27:17', '2024-07-01 18:27:17');

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
  ADD UNIQUE KEY `datospersona_id` (`datospersona_id`),
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
  ADD UNIQUE KEY `datospersona_id` (`datospersona_id`),
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
-- Indices de la tabla `pdfprinters`
--
ALTER TABLE `pdfprinters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pdfprinters_articulogeneral_id_foreign` (`articulogeneral_id`),
  ADD KEY `pdfprinters_articulorevista_id_foreign` (`articulorevista_id`),
  ADD KEY `pdfprinters_contacto_id_foreign` (`contacto_id`),
  ADD KEY `pdfprinters_datospersona_id_foreign` (`datospersona_id`),
  ADD KEY `pdfprinters_datospersonb_id_foreign` (`datospersonb_id`),
  ADD KEY `pdfprinters_expdocente_id_foreign` (`expdocente_id`),
  ADD KEY `pdfprinters_expoconferencia_id_foreign` (`expoconferencia_id`),
  ADD KEY `pdfprinters_expoevento_id_foreign` (`expoevento_id`),
  ADD KEY `pdfprinters_exposeminario_id_foreign` (`exposeminario_id`),
  ADD KEY `pdfprinters_expprograrel_id_foreign` (`expprograrel_id`),
  ADD KEY `pdfprinters_formcurso_id_foreign` (`formcurso_id`),
  ADD KEY `pdfprinters_formpostgrado_id_foreign` (`formpostgrado_id`),
  ADD KEY `pdfprinters_formprofesional_id_foreign` (`formprofesional_id`),
  ADD KEY `pdfprinters_funcadminacad_id_foreign` (`funcadminacad_id`),
  ADD KEY `pdfprinters_libropublicado_id_foreign` (`libropublicado_id`),
  ADD KEY `pdfprinters_reconocimiento_id_foreign` (`reconocimiento_id`),
  ADD KEY `pdfprinters_textopublicado_id_foreign` (`textopublicado_id`),
  ADD KEY `pdfprinters_trabproyinvconcluido_id_foreign` (`trabproyinvconcluido_id`),
  ADD KEY `pdfprinters_tutortribunal_id_foreign` (`tutortribunal_id`),
  ADD KEY `pdfprinters_user_id_foreign` (`user_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `articulorevistas`
--
ALTER TABLE `articulorevistas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `datospersonas`
--
ALTER TABLE `datospersonas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `datospersonbs`
--
ALTER TABLE `datospersonbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `expdocentes`
--
ALTER TABLE `expdocentes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `expoconferencias`
--
ALTER TABLE `expoconferencias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `expoeventos`
--
ALTER TABLE `expoeventos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `exposeminarios`
--
ALTER TABLE `exposeminarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `expprograrels`
--
ALTER TABLE `expprograrels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formcursos`
--
ALTER TABLE `formcursos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `formpostgrados`
--
ALTER TABLE `formpostgrados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `formprofesionals`
--
ALTER TABLE `formprofesionals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `funcadminacads`
--
ALTER TABLE `funcadminacads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `libropublicados`
--
ALTER TABLE `libropublicados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `pdfprinters`
--
ALTER TABLE `pdfprinters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reconocimientos`
--
ALTER TABLE `reconocimientos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `textopublicados`
--
ALTER TABLE `textopublicados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `trabproyinvconcluidos`
--
ALTER TABLE `trabproyinvconcluidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tutortribunals`
--
ALTER TABLE `tutortribunals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- Filtros para la tabla `pdfprinters`
--
ALTER TABLE `pdfprinters`
  ADD CONSTRAINT `pdfprinters_articulogeneral_id_foreign` FOREIGN KEY (`articulogeneral_id`) REFERENCES `articulogenerals` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pdfprinters_articulorevista_id_foreign` FOREIGN KEY (`articulorevista_id`) REFERENCES `articulorevistas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pdfprinters_contacto_id_foreign` FOREIGN KEY (`contacto_id`) REFERENCES `contactos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pdfprinters_datospersona_id_foreign` FOREIGN KEY (`datospersona_id`) REFERENCES `datospersonas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pdfprinters_datospersonb_id_foreign` FOREIGN KEY (`datospersonb_id`) REFERENCES `datospersonbs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pdfprinters_expdocente_id_foreign` FOREIGN KEY (`expdocente_id`) REFERENCES `expdocentes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pdfprinters_expoconferencia_id_foreign` FOREIGN KEY (`expoconferencia_id`) REFERENCES `expoconferencias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pdfprinters_expoevento_id_foreign` FOREIGN KEY (`expoevento_id`) REFERENCES `expoeventos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pdfprinters_exposeminario_id_foreign` FOREIGN KEY (`exposeminario_id`) REFERENCES `exposeminarios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pdfprinters_expprograrel_id_foreign` FOREIGN KEY (`expprograrel_id`) REFERENCES `expprograrels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pdfprinters_formcurso_id_foreign` FOREIGN KEY (`formcurso_id`) REFERENCES `formcursos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pdfprinters_formpostgrado_id_foreign` FOREIGN KEY (`formpostgrado_id`) REFERENCES `formpostgrados` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pdfprinters_formprofesional_id_foreign` FOREIGN KEY (`formprofesional_id`) REFERENCES `formprofesionals` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pdfprinters_funcadminacad_id_foreign` FOREIGN KEY (`funcadminacad_id`) REFERENCES `funcadminacads` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pdfprinters_libropublicado_id_foreign` FOREIGN KEY (`libropublicado_id`) REFERENCES `libropublicados` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pdfprinters_reconocimiento_id_foreign` FOREIGN KEY (`reconocimiento_id`) REFERENCES `reconocimientos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pdfprinters_textopublicado_id_foreign` FOREIGN KEY (`textopublicado_id`) REFERENCES `textopublicados` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pdfprinters_trabproyinvconcluido_id_foreign` FOREIGN KEY (`trabproyinvconcluido_id`) REFERENCES `trabproyinvconcluidos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pdfprinters_tutortribunal_id_foreign` FOREIGN KEY (`tutortribunal_id`) REFERENCES `tutortribunals` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pdfprinters_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
