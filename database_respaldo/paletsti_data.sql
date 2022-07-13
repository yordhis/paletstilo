-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2022 a las 22:08:15
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paletsti_data`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `slug`, `title`, `body`, `img`, `section`, `created_at`, `updated_at`) VALUES
(1, 'nuestra-empresa', 'Nuestra empresa', 'Somos una microempresa con 6 años de trayectoria que nació a raíz de la aspiración por la autonomía de realizar nuestros propios muebles con productos amigables con el medio ambiente, en ese momento no nos imaginamos que estábamos creando una pyme que llegaría hasta estas instancias, todos estos años nos hemos dedicado a la reutilización de pallets para la fabricación de muebles y terrazas para los hogares de cientos de personas que sueñan con un planeta más limpio para nuestras futuras generaciones, nos interesa darles opciones a nuestros clientes para que puedan elegir a su gusto el producto que mas agraden con variedad de colores, telas y estilos que vamos renovando a lo largo de cada año.', 'pallet.png', 'empresa', NULL, NULL),
(2, 'mision', 'Misión', 'Nos apasionamos por entregar productos elaborados con la mayor para de estos con madera reciclada (pallets) generando con bellos muebles de bajo costo y gran calidad, así también promoviendo la conciencia ambiental a familias en su hogar./\r\nEs importante tener en cuenta que el recurso pallets es de un bajo costo, y muchas veces las empresas deben deshacerse de estos, es ahí donde nosotros los recolectamos, lo llevamos a nuestros taller, y le damos una nueva vida a este recurso.\r\n', NULL, 'empresa', NULL, NULL),
(3, 'vision', 'Visión', 'Ser un referente en sustentabilidad y líderes en preferencia de miles de hogares que sueñan con un planeta más limpio para nuestras futuras generaciones, construyendo juntos conciencia ecológica.', NULL, 'empresa', NULL, NULL),
(4, 'terminos-y-condiciones', 'Términos y condiciones', 'Plazos: la agenda cierra los Lunes  a las 18:30 horas para ser despachado el Jueves y Viernes siguiente.\r\n\r\n• Unidad de medida muebles: centímetros (cm)\r\n• Medidas: Largo x Ancho x Alto \r\n• Todos los respaldos son desmontables para un fácil almacenamiento (a excepción cod 050 al cod 057)\r\n• Imágenes de referencia\r\n\r\nSolicitud de productos \r\n\r\nPara confirmar tú pedido nos debes enviar un mail a ‪paletstilo@gmail.com‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬  con la siguiente información: \r\nDirección exacta de despacho:\r\nTeléfono de contacto:\r\nCódigo producto:  \r\nColor madera:\r\nColor tapiz (modelo-color):\r\nMedio de pago:\r\nInstalación:  si / no\r\n(efectuado el envió de tu solicitud, se responderá a la brevedad el cual debes nuevamente  confirmar el mail para que este ultimo quede agendado a la fecha indicada)\r\n\r\nHorario de atención al cliente : Lunes a Viernes 08:30 a las 18:30 horas\r\n', NULL, 'politicas', NULL, NULL),
(5, 'politicas-de-despacho', 'Políticas de Despacho ', 'Despachos Región Metropolitana: Jueves y Viernes GRATIS* (en la puerta de tu hogar ò conserjería) \r\nDespachos Regiones: Sábado (consultar valores)\r\nInstalación: $6000 CLP (el pago debe realizar en efectivo o transferencia bancaria), el despacho GRATIS aplica para la entrega de los muebles en la puerta del hogar o conserjería (edificios).**\r\nHorarios de despacho : 08:00 – 19:00 horas, si deseas una hora predeterminada tiene un recargo de $28.000 CLP, aplica solo para RM y el día en que se agendó tu pedido).‬‬‬‬‬‬‬‬‬‬‬‬‬‬‬***\r\nPagos: Transferencia Bancaria/ TD / TC (se debe realizar al momento de entrega de los productos)****\r\n\r\n*(Excepto ; Talagante, Buin, Peñaflor, Paine, Padre Hurtado, María Pinto, Lampa, Melipilla, Curacavi, San Pedro, Alhue, El Monte, Isla de Maipo, Lampa, Tiltil, Camino a Farellones, Colina, Lo Barnechea, San Bernardo, Pudahuel, Quilicura, Huechuraba, Maipú)\r\n.\r\nEl día asignado ( Jueves o Viernes) se informará el Viernes anterior al despacho. \r\n\r\n**Los muebles vienen armados (no necesitan ensamble) la instalación es por motivos de comodidad para el cliente, SI aceptas instalación los muebles quedan en tu terraza, si NO deseas instalación los muebles quedan en conserjería o en su efecto en la puerta de tu hogar (casa unifamiliar).\r\nSi el cliente desea instalación al momento de entrega de los productos (in situ), este ultimo tendrá un valor de $12.000, es importante indicar si se desea instalación al momento de enviar solicitud para que se respete el cobro de los $6000.\r\n*** La hora de entrega de los productos es entre las 08:00 y las 16:00 horas, si deseas que tu producto llegue en un rango de horario u hora predeterminada este tiene un costo de $28.000 CLP\r\n****Pago contra entrega : si estás conforme con el producto al de entrega se  debe  cancelar instantáneamente el valor total de este, se deberá firmar (cliente quien solicitó los productos) conformidad de los productos antes que los despachadores se retiren.\r\n- No se trasladarán muebles por escaleras, será responsabilidad del cliente su traslado.\r\n', NULL, 'politicas', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritos`
--

CREATE TABLE `carritos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `idUser` bigint(20) UNSIGNED NOT NULL,
  `idProduct` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carritos`
--

INSERT INTO `carritos` (`id`, `cantidad`, `idUser`, `idProduct`, `created_at`, `updated_at`) VALUES
(10, 1, 2, 3, '2022-04-05 00:10:50', '2022-04-05 00:10:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eslogan` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `eslogan`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Terrazas', 'terrazas', 'Especial', '/storage/categorias/XUb2yG25og6RCKGWB5I1D7jNOuImdnVj3kSL5mVA.png', 1, '2022-02-23 11:46:58', '2022-03-03 07:20:45'),
(2, 'Mesas  deco', 'mesas-deco', 'Hogar', '/storage/categorias/iODeMOhbwqFimLRIFSsI3tirvYuoVHu8QfywH4Sh.png', 1, '2022-02-23 11:46:58', '2022-03-03 07:29:55'),
(3, 'Complemento hogar', 'complemento-hogar', 'Accesorios del hogar', '/storage/categorias/nYQtwdwM1pOBxoDPD8G4l0W6pk9V3JYbypadmaUU.png', 1, '2022-02-23 11:46:59', '2022-03-03 07:23:16'),
(4, 'Protector de muebles', 'protector-de-muebles', NULL, '', 0, '2022-02-23 11:46:59', '2022-03-03 07:24:23'),
(5, 'Combos Premiums', 'combos-premiums', 'Especial', '/storage/categorias/KTDmVggn5fFtbgjDQ1Nmj5oDZMpVcdNenDcJKDSM.png', 1, '2022-02-23 11:46:59', '2022-03-03 07:24:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `communes`
--

CREATE TABLE `communes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idProvince` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `communes`
--

INSERT INTO `communes` (`id`, `name`, `slug`, `idProvince`, `created_at`, `updated_at`) VALUES
(1, 'Cerrilos', 'cerrilos', 1, '2022-02-23 11:46:55', '2022-02-23 11:46:55'),
(2, 'Cerro Navia', 'cerro-navia', 1, '2022-02-23 11:46:55', '2022-02-23 11:46:55'),
(3, 'Conchali', 'conchali', 1, '2022-02-23 11:46:55', '2022-02-23 11:46:55'),
(4, 'El Bosque', 'el-bosque', 1, '2022-02-23 11:46:55', '2022-02-23 11:46:55'),
(5, 'Estacion Central', 'estacion-central', 1, '2022-02-23 11:46:55', '2022-02-23 11:46:55'),
(6, 'Huechuraba', 'huechuraba', 1, '2022-02-23 11:46:55', '2022-02-23 11:46:55'),
(7, 'Independencia', 'independencia', 1, '2022-02-23 11:46:56', '2022-02-23 11:46:56'),
(8, 'La Cisterna', 'la-cisterna', 1, '2022-02-23 11:46:56', '2022-02-23 11:46:56'),
(9, 'La Florida', 'la-florida', 1, '2022-02-23 11:46:56', '2022-02-23 11:46:56'),
(10, 'La  Granja', 'la-granja', 1, '2022-02-23 11:46:56', '2022-02-23 11:46:56'),
(11, 'La Pintana', 'la-pintana', 1, '2022-02-23 11:46:56', '2022-02-23 11:46:56'),
(12, 'La Reina', 'la-reina', 1, '2022-02-23 11:46:56', '2022-02-23 11:46:56'),
(13, 'Las Condes', 'las-condes', 1, '2022-02-23 11:46:56', '2022-02-23 11:46:56'),
(14, 'Lo Barnechea', 'lo-barnechea', 1, '2022-02-23 11:46:56', '2022-02-23 11:46:56'),
(15, 'Lo Espejo', 'lo-espejo', 1, '2022-02-23 11:46:56', '2022-02-23 11:46:56'),
(16, 'Lo Prado', 'lo-prado', 1, '2022-02-23 11:46:56', '2022-02-23 11:46:56'),
(17, 'Macul', 'macul', 1, '2022-02-23 11:46:56', '2022-02-23 11:46:56'),
(18, 'Maipu', 'maipu', 1, '2022-02-23 11:46:56', '2022-02-23 11:46:56'),
(19, 'Ñuñoa', 'nunoa', 1, '2022-02-23 11:46:56', '2022-02-23 11:46:56'),
(20, 'P.A.C', 'pac', 1, '2022-02-23 11:46:56', '2022-02-23 11:46:56'),
(21, 'Peñalolen', 'penalolen', 1, '2022-02-23 11:46:56', '2022-02-23 11:46:56'),
(22, 'Providencia', 'providencia', 1, '2022-02-23 11:46:56', '2022-02-23 11:46:56'),
(23, 'Pudahuel', 'pudahuel', 1, '2022-02-23 11:46:56', '2022-02-23 11:46:56'),
(24, 'Quilicura', 'quilicura', 1, '2022-02-23 11:46:57', '2022-02-23 11:46:57'),
(25, 'Quinta Normal', 'quinta-normal', 1, '2022-02-23 11:46:57', '2022-02-23 11:46:57'),
(26, 'Recoleta', 'recoleta', 1, '2022-02-23 11:46:57', '2022-02-23 11:46:57'),
(27, 'Renca', 'renca', 1, '2022-02-23 11:46:57', '2022-02-23 11:46:57'),
(28, 'San Joaquin', 'san-joaquin', 1, '2022-02-23 11:46:57', '2022-02-23 11:46:57'),
(29, 'San Miguel', 'san-miguel', 1, '2022-02-23 11:46:57', '2022-02-23 11:46:57'),
(30, 'San Ramon', 'san-ramon', 1, '2022-02-23 11:46:57', '2022-02-23 11:46:57'),
(31, 'Santiago', 'santiago', 1, '2022-02-23 11:46:57', '2022-02-23 11:46:57'),
(32, 'Vitacura', 'vitacura', 1, '2022-02-23 11:46:57', '2022-02-23 11:46:57'),
(33, 'Puente Alto', 'puente-alto', 2, '2022-02-23 11:46:57', '2022-02-23 11:46:57'),
(34, 'San Jose del Maipo', 'san-jose-del-maipo', 2, '2022-02-23 11:46:57', '2022-02-23 11:46:57'),
(35, 'Pirque', 'pirque', 2, '2022-02-23 11:46:57', '2022-02-23 11:46:57'),
(36, 'Talagante', 'talagante', 3, '2022-02-23 11:46:57', '2022-02-23 11:46:57'),
(37, 'El Monte', 'el-monte', 3, '2022-02-23 11:46:57', '2022-02-23 11:46:57'),
(38, 'Isla de Maipo', 'isla-de-maipo', 3, '2022-02-23 11:46:57', '2022-02-23 11:46:57'),
(39, 'Peñaflor', 'penaflor', 3, '2022-02-23 11:46:58', '2022-02-23 11:46:58'),
(40, 'Padre Hurtado', 'padre-hurtado', 3, '2022-02-23 11:46:58', '2022-02-23 11:46:58'),
(41, 'San Bernardo', 'san-bernardo', 4, '2022-02-23 11:46:58', '2022-02-23 11:46:58'),
(42, 'Calera de Tango', 'calera-de-tango', 4, '2022-02-23 11:46:58', '2022-02-23 11:46:58'),
(43, 'Buin', 'buin', 4, '2022-02-23 11:46:58', '2022-02-23 11:46:58'),
(44, 'Paine', 'paine', 4, '2022-02-23 11:46:58', '2022-02-23 11:46:58'),
(45, 'Colina', 'colina', 5, '2022-02-23 11:46:58', '2022-02-23 11:46:58'),
(46, 'Lampa', 'lampa', 5, '2022-02-23 11:46:58', '2022-02-23 11:46:58'),
(47, 'Til-Til', 'til-til', 5, '2022-02-23 11:46:58', '2022-02-23 11:46:58'),
(48, 'Alhue', 'alhue', 6, '2022-02-23 11:46:58', '2022-02-23 11:46:58'),
(49, 'Curacavi', 'curacavi', 6, '2022-02-23 11:46:58', '2022-02-23 11:46:58'),
(50, 'Maria Pinto', 'maria-pinto', 6, '2022-02-23 11:46:58', '2022-02-23 11:46:58'),
(51, 'Melipilla', 'melipilla', 6, '2022-02-23 11:46:58', '2022-02-23 11:46:58'),
(52, 'San Pedro', 'san-pedro', 6, '2022-02-23 11:46:58', '2022-02-23 11:46:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idProduct` bigint(20) UNSIGNED DEFAULT NULL,
  `idArticle` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `files`
--

INSERT INTO `files` (`id`, `url`, `idProduct`, `idArticle`, `created_at`, `updated_at`) VALUES
(1, '/storage/productos/eONfrFX8Mpr9DkP6LaKlpRNmpMht1nLiZ67RK8vi.jpg', 14, NULL, '2022-02-23 12:04:36', '2022-02-23 12:04:36'),
(2, '/storage/productos/OBL4YObeWeHdOBu2jeDhrWJWeSwR330wZLSZwh8u.jpg', 24, NULL, '2022-02-23 12:08:04', '2022-02-23 12:08:04'),
(3, '/storage/productos/L3wKrytf8eU52zXjQKQt0SF4AGrNEzLQFkguirz3.jpg', 24, NULL, '2022-02-23 12:08:09', '2022-02-23 12:08:09'),
(4, '/storage/productos/leJRq3WJgLUrKlYiWIh9vjq0OdC9soDXpfHrleF3.jpg', 24, NULL, '2022-02-23 12:08:14', '2022-02-23 12:08:14'),
(5, '/storage/productos/V3P89ABX4ouw3yxbpHMwnEqz4zstkHomXIoIB6H1.jpg', 24, NULL, '2022-02-23 12:08:21', '2022-02-23 12:08:21'),
(6, '/storage/productos/1ecz2NGE4siYV27NJmD9VJGJDnzDrqInxJNUQ7s9.jpg', 24, NULL, '2022-02-23 12:08:34', '2022-02-23 12:08:34'),
(7, '/storage/productos/LbtC2AkwVkknBXDmtyPxXvHFahXuUM9shpRmgRnF.jpg', 24, NULL, '2022-02-23 12:08:35', '2022-02-23 12:08:35'),
(8, '/storage/productos/7E6NfiWAeKhHru6qE9el4db3W1R0wc2oo7eitnA5.png', 1, NULL, '2022-02-23 21:24:20', '2022-02-23 21:24:20'),
(9, '/storage/productos/5GbpHYSp0x9Cjgfs0d6oplOmi9ws6JIn4W063Qx0.png', 2, NULL, '2022-02-23 21:26:41', '2022-02-23 21:26:41'),
(10, '/storage/productos/um455aJlZNGfRkFWWDxeViyHYPeXn7peUxL210ff.png', 2, NULL, '2022-02-23 21:26:42', '2022-02-23 21:26:42'),
(11, '/storage/productos/kE9VMRwFFE3SRU4pg89vr2tuncIa7ZB7MkrIqYDa.png', 3, NULL, '2022-02-23 21:28:39', '2022-02-23 21:28:39'),
(12, '/storage/productos/vIRHmqsPheW5giIicicYQocOF7OQJKQV7RtT0IDY.png', 4, NULL, '2022-02-23 21:43:49', '2022-02-23 21:43:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `measureproducts`
--

CREATE TABLE `measureproducts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idProduct` bigint(20) UNSIGNED NOT NULL,
  `idMeasure` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `measureproducts`
--

INSERT INTO `measureproducts` (`id`, `idProduct`, `idMeasure`, `created_at`, `updated_at`) VALUES
(1, 14, 1, '2022-02-23 12:06:22', '2022-02-23 12:06:22'),
(2, 14, 12, '2022-02-23 12:06:22', '2022-02-23 12:06:22'),
(3, 14, 15, '2022-02-23 12:06:22', '2022-02-23 12:06:22'),
(4, 14, 20, '2022-02-23 12:06:22', '2022-02-23 12:06:22'),
(5, 24, 1, '2022-02-23 12:10:33', '2022-02-23 12:10:33'),
(6, 24, 12, '2022-02-23 12:10:33', '2022-02-23 12:10:33'),
(7, 24, 15, '2022-02-23 12:10:33', '2022-02-23 12:10:33'),
(8, 24, 20, '2022-02-23 12:10:33', '2022-02-23 12:10:33'),
(9, 24, 18, '2022-02-23 12:11:49', '2022-02-23 12:11:49'),
(10, 24, 20, '2022-02-23 12:11:49', '2022-02-23 12:11:49'),
(11, 1, 1, '2022-02-23 21:25:24', '2022-02-23 21:25:24'),
(12, 1, 11, '2022-02-23 21:25:24', '2022-02-23 21:25:24'),
(13, 2, 1, '2022-02-23 21:27:36', '2022-02-23 21:27:36'),
(14, 2, 12, '2022-02-23 21:27:36', '2022-02-23 21:27:36'),
(15, 2, 15, '2022-02-23 21:27:36', '2022-02-23 21:27:36'),
(16, 3, 19, '2022-02-23 21:29:33', '2022-02-23 21:29:33'),
(17, 4, 22, '2022-02-23 21:44:08', '2022-02-23 21:44:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `measures`
--

CREATE TABLE `measures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `largo` double(8,2) NOT NULL,
  `ancho` double(8,2) NOT NULL,
  `alto` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `measures`
--

INSERT INTO `measures` (`id`, `name`, `slug`, `largo`, `ancho`, `alto`, `created_at`, `updated_at`) VALUES
(1, 'Sillón', 'sillon', 124.00, 84.00, 43.00, '2022-02-23 11:46:52', '2022-02-23 11:46:52'),
(2, 'Arrimo', 'arrimo', 110.00, 40.00, 90.00, '2022-02-23 11:46:52', '2022-02-23 11:46:52'),
(3, 'Arrimo Doble', 'arrimo-doble', 80.00, 40.00, 90.00, '2022-02-23 11:46:52', '2022-02-23 11:46:52'),
(4, 'Librero', 'librero', 100.00, 40.00, 100.00, '2022-02-23 11:46:52', '2022-02-23 11:46:52'),
(5, 'Rack', 'rack', 120.00, 46.00, 52.00, '2022-02-23 11:46:52', '2022-02-23 11:46:52'),
(6, 'Ecritorio', 'ecritorio', 125.00, 61.00, 73.00, '2022-02-23 11:46:52', '2022-02-23 11:46:52'),
(7, 'Banqueta', 'banqueta', 150.00, 40.00, 43.00, '2022-02-23 11:46:53', '2022-02-23 11:46:53'),
(8, 'Taburete', 'taburete', 40.00, 40.00, 40.00, '2022-02-23 11:46:53', '2022-02-23 11:46:53'),
(9, 'Cojín Base', 'cojin-base', 150.00, 40.00, 13.00, '2022-02-23 11:46:53', '2022-02-23 11:46:53'),
(10, 'Cojín Base', 'cojin-base', 124.00, 84.00, 43.00, '2022-02-23 11:46:53', '2022-02-23 11:46:53'),
(11, 'Cojín Base', 'cojin-base', 120.00, 80.00, 13.00, '2022-02-23 11:46:53', '2022-02-23 11:46:53'),
(12, 'Cojín Base', 'cojin-base', 122.00, 50.00, 13.00, '2022-02-23 11:46:53', '2022-02-23 11:46:53'),
(13, 'Cojín Base', 'cojin-base', 90.00, 50.00, 13.00, '2022-02-23 11:46:53', '2022-02-23 11:46:53'),
(14, 'Cojín Base', 'cojin-base', 120.00, 50.00, 9.00, '2022-02-23 11:46:53', '2022-02-23 11:46:53'),
(15, 'Cojín Respaldo', 'cojin-respaldo', 110.00, 40.00, 9.00, '2022-02-23 11:46:53', '2022-02-23 11:46:53'),
(16, 'Cojín Respaldo', 'cojin-respaldo', 90.00, 40.00, 9.00, '2022-02-23 11:46:53', '2022-02-23 11:46:53'),
(17, 'Cojín Respaldo', 'cojin-respaldo', 50.00, 40.00, 9.00, '2022-02-23 11:46:53', '2022-02-23 11:46:53'),
(18, 'Cojín Base', 'cojin-base', 40.00, 40.00, 9.00, '2022-02-23 11:46:53', '2022-02-23 11:46:53'),
(19, 'Mesa', 'mesa', 90.00, 70.00, 34.00, '2022-02-23 11:46:53', '2022-02-23 11:46:53'),
(20, 'Mesa', 'mesa', 84.00, 84.00, 55.00, '2022-02-23 11:46:53', '2022-02-23 11:46:53'),
(21, 'Mesa', 'mesa', 120.00, 80.00, 39.00, '2022-02-23 11:46:53', '2022-02-23 11:46:53'),
(22, 'Mesa', 'mesa', 80.00, 50.00, 34.00, '2022-02-23 11:46:54', '2022-02-23 11:46:54');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_02_03_051124_create_categories_table', 1),
(7, '2022_02_03_051251_create_articles_table', 1),
(8, '2022_02_03_051350_create_typepayments_table', 1),
(9, '2022_02_03_051504_create_products_table', 1),
(10, '2022_02_03_051619_create_regions_table', 1),
(11, '2022_02_03_051721_create_provinces_table', 1),
(12, '2022_02_03_051801_create_communes_table', 1),
(13, '2022_02_03_051920_create_shippingvalues_table', 1),
(14, '2022_02_03_052005_create_profiles_table', 1),
(15, '2022_02_03_052040_create_payments_table', 1),
(16, '2022_02_03_052119_create_orders_table', 1),
(17, '2022_02_03_052214_create_scheduledispatches_table', 1),
(18, '2022_02_10_001442_create_sessions_table', 1),
(19, '2022_02_12_050149_create_files_table', 1),
(20, '2022_02_16_134748_create_measures_table', 1),
(21, '2022_02_16_144640_create_measureproducts_table', 1),
(22, '2022_02_23_203657_update_producto_table', 2),
(23, '2022_02_28_050055_create_carritos_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direction` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Pendiente','Enviado') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pendiente',
  `idUser` bigint(20) UNSIGNED NOT NULL,
  `idProduct` bigint(20) UNSIGNED NOT NULL,
  `idPayment` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Estructura de tabla para la tabla `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay` double(8,2) NOT NULL,
  `refferencePay` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `idUser` bigint(20) UNSIGNED NOT NULL,
  `idProduct` bigint(20) UNSIGNED NOT NULL,
  `idTypepayment` bigint(20) UNSIGNED NOT NULL,
  `idShipping` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `available` tinyint(1) NOT NULL DEFAULT 1,
  `code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idCategorie` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `destacado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `price`, `available`, `code`, `idCategorie`, `created_at`, `updated_at`, `destacado`) VALUES
(1, 'Sillón Puf Paletstilo', 'sillon-puf-paletstilo', 75137.00, 1, '001', 1, '2022-02-23 11:46:59', '2022-02-23 11:46:59', 1),
(2, 'Sillón Premium Paletstilo', 'sillon-premium-paletstilo', 119460.00, 1, '002', 1, '2022-02-23 11:46:59', '2022-02-23 11:46:59', 1),
(3, 'Mesa de centro Paletstilo', 'mesa-de-centro-paletstilo', 65450.00, 1, '003', 2, '2022-02-23 11:46:59', '2022-02-23 11:46:59', 1),
(4, 'Mesa de Centro Cubo Premium', 'mesa-de-centro-cubo-premium', 54450.00, 1, '004', 2, '2022-02-23 11:46:59', '2022-02-23 11:46:59', 0),
(5, 'Mesa de Centro doble', 'mesa-de-centro-doble', 95590.00, 1, '005', 2, '2022-02-23 11:46:59', '2022-02-23 11:46:59', 0),
(6, 'Mesa de Centro Mini', 'mesa-de-centro-mini', 65720.00, 1, '006', 2, '2022-02-23 11:46:59', '2022-02-23 11:46:59', 0),
(7, 'Banqueta + cojín de alta densidad', 'banqueta-cojin-de-alta-densidad', 109730.00, 1, '007', 1, '2022-02-23 11:46:59', '2022-02-23 11:46:59', 0),
(8, 'Banqueta XL + cojín de alta densidad', 'banqueta-xl-cojin-de-alta-densidad', 148360.00, 1, '008', 1, '2022-02-23 11:47:00', '2022-02-23 11:47:00', 0),
(9, 'Sillón Premium + Banqueta + Mesa centro mini', 'sillon-premium-banqueta-mesa-centro-mini', 289012.00, 1, '009', 5, '2022-02-23 11:47:00', '2022-02-23 11:47:00', 0),
(10, 'Sillón Premium + Banqueta XL + Mesa de Centro Mini', 'sillon-premium-banqueta-xl-mesa-de-centro-mini', 326869.00, 1, '010', 5, '2022-02-23 11:47:00', '2022-02-23 11:47:00', 0),
(11, 'Sillón Premium + Mesa de Centro', 'sillon-premium-mesa-de-centro', 181212.00, 1, '011', 5, '2022-02-23 11:47:00', '2022-02-23 11:47:00', 0),
(12, '2 Sillones Premium + Mesa de Centro', '2-sillones-premium-mesa-de-centro', 298283.00, 1, '012', 5, '2022-02-23 11:47:00', '2022-02-23 11:47:00', 0),
(13, '2 Sillones Premium + 1 Sillón L + 1 Banqueta + Mesa de Centro', '2-sillones-premium-1-sillon-l-1-banqueta-mesa-de-centro', 513532.00, 1, '013', 5, '2022-02-23 11:47:00', '2022-02-23 11:47:00', 0),
(14, '3 Sillones Premium + Mesa de Centro', '3-sillones-premium-mesa-de-centro', 402639.00, 1, '014', 5, '2022-02-23 11:47:00', '2022-02-23 11:47:00', 1),
(15, '4 Sillones Premium + 2 Mesas de Centro', '4-sillones-premium-2-mesas-de-centro', 560041.00, 1, '015', 5, '2022-02-23 11:47:00', '2022-02-23 11:47:00', 1),
(16, 'Sillón L Derecho Premium', 'sillon-l-derecho-premium', 126460.00, 1, '016', 1, '2022-02-23 11:47:00', '2022-02-23 11:47:00', 1),
(17, 'Sillón L Izquierdo Premium', 'sillon-l-izquierdo-premium', 126460.00, 1, '017', 1, '2022-02-23 11:47:00', '2022-02-23 11:47:00', 1),
(18, '1 Sillón Premium +1 Sillón L + Mesa de Centro Mini', '1-sillon-premium-1-sillon-l-mesa-de-centro-mini', 298915.00, 1, '018', 5, '2022-02-23 11:47:00', '2022-02-23 11:47:00', 0),
(19, '2 Sillones Premium + 1 Sillón L + Mesa de Centro', '2-sillones-premium-1-sillon-l-mesa-de-centro', 397225.00, 1, '019', 5, '2022-02-23 11:47:00', '2022-02-23 11:47:00', 0),
(20, '2 Sillones Premium + Mesa Taburete', '2-sillones-premium-mesa-taburete', 386390.00, 1, '021', 5, '2022-02-23 11:47:00', '2022-02-23 11:47:00', 0),
(21, '2 Sillones Premium + 1 Sillón L + Mesa de Centro + Puf', '2-sillones-premium-1-sillon-l-mesa-de-centro-puf', 471975.00, 1, '022', 5, '2022-02-23 11:47:00', '2022-02-23 11:47:00', 0),
(22, 'Mesa Taburete Paletstilo', 'mesa-taburete-paletstilo', 158663.00, 1, '023', 2, '2022-02-23 11:47:00', '2022-02-23 11:47:00', 0),
(23, '2 Sillones Premium + 1 Sillón L + Mesa Taburete', '2-sillones-premium-1-sillon-l-mesa-taburete', 478700.00, 1, '024', 5, '2022-02-23 11:47:00', '2022-02-23 11:47:00', 0),
(24, '1 Sillon Premium + 1 Sillon L + Mesa Taburete', '1-sillon-premium-1-sillon-l-mesa-taburete', 393110.00, 1, '025', 5, '2022-02-23 11:47:00', '2022-02-23 11:47:00', 0),
(25, '3 Silones Premium + 2 Sillónes L + Mesa de Centro', '3-silones-premium-2-sillones-l-mesa-de-centro', 609075.00, 1, '026', 5, '2022-02-23 11:47:01', '2022-02-23 11:47:01', 0),
(26, '2 Sillones Premium + 1 Puf+ Mesa de Centro', '2-sillones-premium-1-puf-mesa-de-centro', 358178.00, 1, '027', 5, '2022-02-23 11:47:01', '2022-02-23 11:47:01', 0),
(27, '1 Sillón Premium + 1 Sillón L Premium', '1-sillon-premium-1-sillon-l-premium', 241002.00, 1, '028', 5, '2022-02-23 11:47:01', '2022-02-23 11:47:01', 0),
(28, '3 Sillones Premium + 2 Sillón L + Mesa Taburete', '3-sillones-premium-2-sillon-l-mesa-taburete', 697738.00, 1, '029', 5, '2022-02-23 11:47:01', '2022-02-23 11:47:01', 0),
(29, '1 Sillón Premium + 1 Puf + Mesa Centro', '1-sillon-premium-1-puf-mesa-centro', 256348.00, 1, '030', 5, '2022-02-23 11:47:01', '2022-02-23 11:47:01', 0),
(30, 'Sillón Clásico', 'sillon-clasico', 97350.00, 1, '031', 1, '2022-02-23 11:47:01', '2022-02-23 11:47:01', 0),
(31, '3 Sillónes Clásico + Mesa de Centro', '3-sillones-clasico-mesa-de-centro', 350350.00, 1, '032', 5, '2022-02-23 11:47:01', '2022-02-23 11:47:01', 0),
(32, 'Arrimo Clásico', 'arrimo-clasico', 74274.00, 1, '033', 3, '2022-02-23 11:47:01', '2022-02-23 11:47:01', 0),
(33, 'Arrimo doble Premium', 'arrimo-doble-premium', 77518.00, 1, '034', 3, '2022-02-23 11:47:01', '2022-02-23 11:47:01', 0),
(34, 'Mesa Paletstilo', 'mesa-paletstilo', 94940.00, 1, '035', 2, '2022-02-23 11:47:01', '2022-02-23 11:47:01', 0),
(35, 'Librero Paletstilo', 'librero-paletstilo', 64357.00, 1, '036', 3, '2022-02-23 11:47:01', '2022-02-23 11:47:01', 0),
(36, 'Rack tv Paletstilo', 'rack-tv-paletstilo', 75205.00, 1, '037', 3, '2022-02-23 11:47:01', '2022-02-23 11:47:01', 0),
(37, 'Sillón kubo Paletstilo', 'sillon-kubo-paletstilo', 125685.00, 1, '038', 1, '2022-02-23 11:47:01', '2022-02-23 11:47:01', 0),
(38, 'Piso Bar Paletstilo', 'piso-bar-paletstilo', 81360.00, 1, '039', 3, '2022-02-23 11:47:01', '2022-02-23 11:47:01', 0),
(39, 'Kubo móvil Paletstilo', 'kubo-movil-paletstilo', 74910.00, 1, '040', 3, '2022-02-23 11:47:01', '2022-02-23 11:47:01', 0),
(40, 'Apoya Pies Paletstilo', 'apoya-pies-paletstilo', 24816.00, 1, '041', 3, '2022-02-23 11:47:02', '2022-02-23 11:47:02', 0),
(41, 'Escritorio Euro Paletstilo', 'escritorio-euro-paletstilo', 89760.00, 1, '042', 3, '2022-02-23 11:47:02', '2022-02-23 11:47:02', 0),
(42, 'Mini Taburete Paletstilo', 'mini-taburete-paletstilo', 40838.00, 1, '043', 2, '2022-02-23 11:47:02', '2022-02-23 11:47:02', 0),
(43, 'Sillón Yugo Paletstilo', 'sillon-yugo-paletstilo', 75141.00, 1, '044', 1, '2022-02-23 11:47:02', '2022-02-23 11:47:02', 0),
(44, 'Sillón + Mesa centro Mini + 2 mini Taburetes', 'sillon-mesa-centro-mini-2-mini-taburetes', 262326.00, 1, '045', 5, '2022-02-23 11:47:02', '2022-02-23 11:47:02', 0),
(45, '2 Banquetas + cojín de alta densidad', '2-banquetas-cojin-de-alta-densidad', 217265.00, 1, '046', 5, '2022-02-23 11:47:02', '2022-02-23 11:47:02', 0),
(46, '1 Sillón Premium + Mesa Taburete', '1-sillon-premium-mesa-taburete', 272560.00, 1, '047', 5, '2022-02-23 11:47:02', '2022-02-23 11:47:02', 0),
(47, '2 Sillones Premium + 1 Sillón L', '2-sillones-premium-1-sillon-l', 358072.00, 1, '048', 5, '2022-02-23 11:47:02', '2022-02-23 11:47:02', 0),
(48, 'Estante Multiuso Paletstilo', 'estante-multiuso-paletstilo', 69670.00, 1, '049', 3, '2022-02-23 11:47:02', '2022-02-23 11:47:02', 0),
(49, 'Sillón Premium Gold', 'sillon-premium-gold', 164540.00, 1, '050', 1, '2022-02-23 11:47:02', '2022-02-23 11:47:02', 0),
(50, 'Sillón L Izquierdo Premium Gold', 'sillon-l-izquierdo-premium-gold', 174328.00, 1, '051', 1, '2022-02-23 11:47:02', '2022-02-23 11:47:02', 0),
(51, 'Sillón Derecho Premium Gold', 'sillon-derecho-premium-gold', 174328.00, 1, '052', 1, '2022-02-23 11:47:02', '2022-02-23 11:47:02', 0),
(52, '1 Sillón Premium Gold + 1 Sillón Izquierdo Premium Gold + mesa centro', '1-sillon-premium-gold-1-sillon-izquierdo-premium-gold-mesa-centro', 384102.00, 1, '053', 5, '2022-02-23 11:47:02', '2022-02-23 11:47:02', 0),
(53, '2 Sillones Premium Gold + 1 Sillón Izquierdo Premium Gold + mesa centro', '2-sillones-premium-gold-1-sillon-izquierdo-premium-gold-mesa-centro', 540415.00, 1, '054', 5, '2022-02-23 11:47:02', '2022-02-23 11:47:02', 0),
(54, '3 Sillones Premium Gold + 1 Sillón Izquierdo Premium Gold + mesa centro', '3-sillones-premium-gold-1-sillon-izquierdo-premium-gold-mesa-centro', 682060.00, 1, '055', 5, '2022-02-23 11:47:02', '2022-02-23 11:47:02', 0),
(55, '3 Sillones Premium Gold + 2 Sillones L Izquierdo Premium Gold + mesa centro', '3-sillones-premium-gold-2-sillones-l-izquierdo-premium-gold-mesa-centro', 844185.00, 1, '056', 5, '2022-02-23 11:47:02', '2022-02-23 11:47:02', 0),
(56, '3 Sillones Premium Gold + 2 Sillones L Derecho Premium Gold + mesa centro', '3-sillones-premium-gold-2-sillones-l-derecho-premium-gold-mesa-centro', 997207.00, 1, '057', 5, '2022-02-23 11:47:02', '2022-02-23 11:47:02', 0),
(57, 'Reposera Paletstilo', 'reposera-paletstilo', 135620.00, 1, '058', 3, '2022-02-23 11:47:03', '2022-02-23 11:47:03', 0),
(58, 'Fundas protectoras', 'fundas-protectoras', 18900.00, 1, '000', 4, '2022-02-23 11:47:03', '2022-02-23 11:47:03', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direction` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idRegion` bigint(20) UNSIGNED NOT NULL,
  `idProvince` bigint(20) UNSIGNED NOT NULL,
  `idCommune` bigint(20) UNSIGNED NOT NULL,
  `idUser` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idRegion` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `slug`, `idRegion`, `created_at`, `updated_at`) VALUES
(1, 'Santiago', 'santiago', 1, '2022-02-23 11:46:54', '2022-02-23 11:46:54'),
(2, 'Talagante', 'talagante', 1, '2022-02-23 11:46:54', '2022-02-23 11:46:54'),
(3, 'Maipo', 'maipo', 1, '2022-02-23 11:46:54', '2022-02-23 11:46:54'),
(4, 'Chacabuco', 'chacabuco', 1, '2022-02-23 11:46:54', '2022-02-23 11:46:54'),
(5, 'Melipilla', 'melipilla', 1, '2022-02-23 11:46:54', '2022-02-23 11:46:54'),
(6, 'Los Andes', 'los-andes', 2, '2022-02-23 11:46:55', '2022-02-23 11:46:55'),
(7, 'Marga Marga', 'marga-marga', 2, '2022-02-23 11:46:55', '2022-02-23 11:46:55'),
(8, 'Petorca', 'petorca', 2, '2022-02-23 11:46:55', '2022-02-23 11:46:55'),
(9, 'Quillota', 'quillota', 2, '2022-02-23 11:46:55', '2022-02-23 11:46:55'),
(10, 'San Antonio', 'san-antonio', 2, '2022-02-23 11:46:55', '2022-02-23 11:46:55'),
(11, 'San Felipe', 'san-felipe', 2, '2022-02-23 11:46:55', '2022-02-23 11:46:55'),
(12, 'Valparaiso', 'valparaiso', 2, '2022-02-23 11:46:55', '2022-02-23 11:46:55'),
(13, 'Cachapoal', 'cachapoal', 3, '2022-02-23 11:46:55', '2022-02-23 11:46:55'),
(14, 'Cardenal Caro', 'cardenal-caro', 3, '2022-02-23 11:46:55', '2022-02-23 11:46:55'),
(15, 'Colchahua', 'colchahua', 3, '2022-02-23 11:46:55', '2022-02-23 11:46:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `regions`
--

INSERT INTO `regions` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Región Metropolitana', 'region-metropolitana', '2022-02-23 11:46:54', '2022-02-23 11:46:54'),
(2, 'Valparaiso', 'valparaiso', '2022-02-23 11:46:54', '2022-02-23 11:46:54'),
(3, 'Ohgging', 'ohgging', '2022-02-23 11:46:54', '2022-02-23 11:46:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `scheduledispatches`
--

CREATE TABLE `scheduledispatches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hour` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minute` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idUser` bigint(20) UNSIGNED NOT NULL,
  `idOrder` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9L2lG3Jlnf3rIqhZvMfR2lzg8UeknK70wP7Uosww', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieUh0Y2dncnk2OWF1ZERHZmdiWXBLNWtjb2dqcndtUVQzREM1cFZVbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly9wYWxldHN0aWxvLnRlc3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1647547212),
('STelLjlQUvIvLBsiWAjj2RknnJG5A269YeIkKY11', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiQUMxOVpROGxIM3BhSzl6eHJab1RyMzBkWWZBREJhajIzUWNiNDhqeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly9wYWxldHN0aWxvLnRlc3QvYWRtaW4vcmVnaW9uZXMvY3JlYXIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkMFZVaUJkQkE4cm9mT2pKNU4ybEgxT0ZRaHR5cE9ERUJ6bnJGbEhPMm9URGJLVEhYZzcvdWEiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJDBWVWlCZEJBOHJvZk9qSjVOMmxIMU9GUWh0eXBPREVCem5yRmxITzJvVERiS1RIWGc3L3VhIjt9', 1647552167),
('TMRT3xH9flSHsTOLioDFjkITIc1Wr5FNzXLbhxkb', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiQWdkRUY1TVhQcDV1N1d4WTJ5T3RMY1p0MTRaZ0YzZTUwMVlFb2VPayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9wYWxldHN0aWxvLnRlc3QvZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJDBWVWlCZEJBOHJvZk9qSjVOMmxIMU9GUWh0eXBPREVCem5yRmxITzJvVERiS1RIWGc3L3VhIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQwVlVpQmRCQThyb2ZPako1TjJsSDFPRlFodHlwT0RFQnpuckZsSE8yb1REYktUSFhnNy91YSI7fQ==', 1650825606),
('w2qK47Hv668Vmnf4gNLyZbJkKO8zof8UCtUAWP2s', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiQzRFR3dldHY0VnRlVWM5eUpiRXVaSGl6TEVCelZ5Y1V5ZGRoa1g4aCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly9wYWxldHN0aWxvLnRlc3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkdkhKS2RPT1NWemR5RVNkNUxaS1EyLjBMUGJJUjNqWDZ4RWouTmNKUmVSbktQNGd4TTVLVWUiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJHZISktkT09TVnpkeUVTZDVMWktRMi4wTFBiSVIzalg2eEVqLk5jSlJlUm5LUDRneE01S1VlIjt9', 1649103134);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shippingvalues`
--

CREATE TABLE `shippingvalues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kmValue` double(8,2) DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `kmDiference` double(8,2) DEFAULT NULL,
  `idCommune` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typepayments`
--

CREATE TABLE `typepayments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titular` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountNumber` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idCard` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `typepayments`
--

INSERT INTO `typepayments` (`id`, `name`, `slug`, `titular`, `accountNumber`, `idCard`, `email`, `created_at`, `updated_at`) VALUES
(4, 'paypal', 'paypal', 'yordhis', '0000000000', '24823972', 'yordhis.10@gmail.com', '2022-03-18 01:04:55', '2022-03-18 01:05:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@paletstilo.cl', 1, NULL, '$2y$10$0VUiBdBA8rofOjJ5N2lH1OFQhtypODEBznrFlHO2oTDbKTHXg7/ua', NULL, NULL, NULL, NULL, NULL, '2022-02-23 11:46:54', '2022-02-23 11:46:54'),
(2, 'debora', 'dn.debora22@gmail.com', 0, NULL, '$2y$10$vHJKdOOSVzdyESd5LZKQ2.0LPbIR3jX6xEj.NcJReRnKP4gxM5KUe', NULL, NULL, NULL, NULL, NULL, '2022-02-27 06:58:24', '2022-02-27 06:58:24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carritos`
--
ALTER TABLE `carritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carritos_iduser_foreign` (`idUser`),
  ADD KEY `carritos_idproduct_foreign` (`idProduct`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indices de la tabla `communes`
--
ALTER TABLE `communes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `communes_name_unique` (`name`),
  ADD KEY `communes_idprovince_foreign` (`idProvince`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `files_idproduct_foreign` (`idProduct`),
  ADD KEY `files_idarticle_foreign` (`idArticle`);

--
-- Indices de la tabla `measureproducts`
--
ALTER TABLE `measureproducts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `measureproducts_idproduct_foreign` (`idProduct`),
  ADD KEY `measureproducts_idmeasure_foreign` (`idMeasure`);

--
-- Indices de la tabla `measures`
--
ALTER TABLE `measures`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_code_unique` (`code`),
  ADD KEY `orders_iduser_foreign` (`idUser`),
  ADD KEY `orders_idproduct_foreign` (`idProduct`),
  ADD KEY `orders_idpayment_foreign` (`idPayment`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_code_unique` (`code`),
  ADD UNIQUE KEY `payments_refferencepay_unique` (`refferencePay`),
  ADD KEY `payments_iduser_foreign` (`idUser`),
  ADD KEY `payments_idproduct_foreign` (`idProduct`),
  ADD KEY `payments_idtypepayment_foreign` (`idTypepayment`),
  ADD KEY `payments_idshipping_foreign` (`idShipping`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `products_idcategorie_foreign` (`idCategorie`);

--
-- Indices de la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_idregion_foreign` (`idRegion`),
  ADD KEY `profiles_idprovince_foreign` (`idProvince`),
  ADD KEY `profiles_idcommune_foreign` (`idCommune`),
  ADD KEY `profiles_iduser_foreign` (`idUser`);

--
-- Indices de la tabla `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `provinces_name_unique` (`name`),
  ADD KEY `provinces_idregion_foreign` (`idRegion`);

--
-- Indices de la tabla `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `regions_name_unique` (`name`);

--
-- Indices de la tabla `scheduledispatches`
--
ALTER TABLE `scheduledispatches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scheduledispatches_iduser_foreign` (`idUser`),
  ADD KEY `scheduledispatches_idorder_foreign` (`idOrder`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `shippingvalues`
--
ALTER TABLE `shippingvalues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shippingvalues_idcommune_foreign` (`idCommune`);

--
-- Indices de la tabla `typepayments`
--
ALTER TABLE `typepayments`
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
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `carritos`
--
ALTER TABLE `carritos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `communes`
--
ALTER TABLE `communes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `measureproducts`
--
ALTER TABLE `measureproducts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `measures`
--
ALTER TABLE `measures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `scheduledispatches`
--
ALTER TABLE `scheduledispatches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `shippingvalues`
--
ALTER TABLE `shippingvalues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `typepayments`
--
ALTER TABLE `typepayments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carritos`
--
ALTER TABLE `carritos`
  ADD CONSTRAINT `carritos_idproduct_foreign` FOREIGN KEY (`idProduct`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `carritos_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `communes`
--
ALTER TABLE `communes`
  ADD CONSTRAINT `communes_idprovince_foreign` FOREIGN KEY (`idProvince`) REFERENCES `provinces` (`id`);

--
-- Filtros para la tabla `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_idarticle_foreign` FOREIGN KEY (`idArticle`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `files_idproduct_foreign` FOREIGN KEY (`idProduct`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `measureproducts`
--
ALTER TABLE `measureproducts`
  ADD CONSTRAINT `measureproducts_idmeasure_foreign` FOREIGN KEY (`idMeasure`) REFERENCES `measures` (`id`),
  ADD CONSTRAINT `measureproducts_idproduct_foreign` FOREIGN KEY (`idProduct`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_idpayment_foreign` FOREIGN KEY (`idPayment`) REFERENCES `payments` (`id`),
  ADD CONSTRAINT `orders_idproduct_foreign` FOREIGN KEY (`idProduct`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `orders_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_idproduct_foreign` FOREIGN KEY (`idProduct`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `payments_idshipping_foreign` FOREIGN KEY (`idShipping`) REFERENCES `shippingvalues` (`id`),
  ADD CONSTRAINT `payments_idtypepayment_foreign` FOREIGN KEY (`idTypepayment`) REFERENCES `typepayments` (`id`),
  ADD CONSTRAINT `payments_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_idcategorie_foreign` FOREIGN KEY (`idCategorie`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_idcommune_foreign` FOREIGN KEY (`idCommune`) REFERENCES `communes` (`id`),
  ADD CONSTRAINT `profiles_idprovince_foreign` FOREIGN KEY (`idProvince`) REFERENCES `provinces` (`id`),
  ADD CONSTRAINT `profiles_idregion_foreign` FOREIGN KEY (`idRegion`) REFERENCES `regions` (`id`),
  ADD CONSTRAINT `profiles_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `provinces`
--
ALTER TABLE `provinces`
  ADD CONSTRAINT `provinces_idregion_foreign` FOREIGN KEY (`idRegion`) REFERENCES `regions` (`id`);

--
-- Filtros para la tabla `scheduledispatches`
--
ALTER TABLE `scheduledispatches`
  ADD CONSTRAINT `scheduledispatches_idorder_foreign` FOREIGN KEY (`idOrder`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `scheduledispatches_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `shippingvalues`
--
ALTER TABLE `shippingvalues`
  ADD CONSTRAINT `shippingvalues_idcommune_foreign` FOREIGN KEY (`idCommune`) REFERENCES `communes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
