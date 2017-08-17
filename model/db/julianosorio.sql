-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2017 a las 23:31:57
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `julianosorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `ban_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ban_subtitulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ban_titulo` longtext COLLATE utf8_spanish_ci NOT NULL,
  `ban_ruta` varchar(120) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`ban_id`, `ban_subtitulo`, `ban_titulo`, `ban_ruta`) VALUES
('2VXe2DUcj3I4KnfeF33CFCfrWREs32', 'Descarga la aplicacións', 'Infinitos', '1502909425.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `blo_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `blo_titulo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `blo_descripcion` longtext COLLATE utf8_spanish_ci NOT NULL,
  `bli_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `blo_fecha` date NOT NULL,
  `blo_lectura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`blo_id`, `blo_titulo`, `blo_descripcion`, `bli_id`, `blo_fecha`, `blo_lectura`) VALUES
('jEZI227oqQbmk4otAclQxx57RZq9TP', 'Peloooooooos', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae, maiores, magni dolorum aliquam culpa inventore ullam quae qui optio obcaecati doloribus minus perferendis error dolor blanditiis! Culpa, enim Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae, maiores, magni dolorum aliquam culpa inventore ullam quae qui optio obcaecati doloribus minus perferendis error dolor blanditiis! Culpa, enim Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae, maiores, magni dolorum aliquam culpa inventore ullam quae qui optio obcaecati doloribus minus perferendis error dolor blanditiis! Culpa, enim', '6hH8n7LovBVbjuj0rcS5a3iSbkvD2O', '2017-07-19', 2),
('Kf5kUtm2CgsjXEDX5F2yyzU8k2cCYu', 'Holaaa', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae, maiores, magni dolorum aliquam culpa inventore ullam quae qui optio obcaecati doloribus minus perferendis error dolor blanditiis! Culpa, enim', 'ogLy9nGYZA6zPOTd6ZiLRGUQ7b8mp1', '2017-07-19', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_comentario`
--

CREATE TABLE `blog_comentario` (
  `com_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `blo_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `com_text` longtext COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `blog_comentario`
--

INSERT INTO `blog_comentario` (`com_id`, `blo_id`, `com_text`) VALUES
('74345', 'jEZI227oqQbmk4otAclQxx57RZq9TP', 'adasfdas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_imagen`
--

CREATE TABLE `blog_imagen` (
  `bli_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `bli_ruta` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `bli_fecha` datetime NOT NULL,
  `bli_formulario` varchar(2) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `blog_imagen`
--

INSERT INTO `blog_imagen` (`bli_id`, `bli_ruta`, `bli_fecha`, `bli_formulario`) VALUES
('6hH8n7LovBVbjuj0rcS5a3iSbkvD2O', '1500516016.png', '2017-07-19 09:00:16', 'SI'),
('ogLy9nGYZA6zPOTd6ZiLRGUQ7b8mp1', '1500515402.png', '2017-07-19 08:50:02', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `con_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `con_email` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `con_telefono` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`con_id`, `con_email`, `con_telefono`) VALUES
('AeU839Cekf02Cw9fEcoe293c0vD2D1', 'manager@julianosoriomusic.com', '(57) 300 610 0192');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discografia`
--

CREATE TABLE `discografia` (
  `dis_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `dis_titulo` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `dis_cancion` varchar(120) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `evento_code` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `evento_nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `evento_descripcion` longtext COLLATE utf8_spanish_ci NOT NULL,
  `evento_direccion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `evento_fecha_inicio` date NOT NULL,
  `evento_hora_inicio` time NOT NULL,
  `evento_fecha_fin` date NOT NULL,
  `evento_hora_fin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`evento_code`, `evento_nombre`, `evento_descripcion`, `evento_direccion`, `evento_fecha_inicio`, `evento_hora_inicio`, `evento_fecha_fin`, `evento_hora_fin`) VALUES
('02FUeFLGfJyjGC5', 'Mi pinche titulo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Mi pinche direccion', '2017-07-19', '00:11:00', '1111-00-00', '11:00:00'),
('8QGhdnpvGeodcLi', 'Mi pinche titulo2', 'Mi pinche descripcion222', 'Mi pinche direccion2222', '2017-07-18', '00:00:00', '0000-00-00', '00:00:00'),
('rUVaI3XkaLjhoN0', 'Marcha Gay', 'asomadre', 'Casa de MF', '2018-06-20', '10:20:00', '2018-06-20', '10:22:00'),
('x4ZzGDU6l9RUVgG', 'Pablo', 'hoa', 'pablito', '0000-11-11', '00:00:00', '0000-11-11', '00:00:00'),
('YgjGChmNirUVaI3', 'title', 'descripcion', 'address', '2017-07-23', '00:00:00', '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_imagen`
--

CREATE TABLE `eventos_imagen` (
  `evi_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `evi_ruta` varchar(120) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `eventos_imagen`
--

INSERT INTO `eventos_imagen` (`evi_id`, `evi_ruta`) VALUES
('mek0YRcGTvUsfIGnhGDUf6ExBOecKV', '1502910010.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `gal_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `gal_ruta` varchar(70) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`gal_id`, `gal_ruta`) VALUES
('0tcMus5UMPvqRi9NlTgaNymOurfISO', '1500155198.png'),
('9XKA8MFKgzOgY62hjrIJp6E7vumoe3', '1500177510.png'),
('e8XEDum8dH692vLnQE4Sk8GbmeLImx', '1500177471.png'),
('h0CMd2Czp0tK9xkTOpi7hzH22GPIQz', '1500147587.png'),
('INrQBrNAUPK7AcSTgazG9tckcfZnTR', '1500177290.png'),
('LYIkEA07OF9upL6fyaOAmYhkkKDFqX', '1500177450.png'),
('uEFpJ7aXpP05opch4E9294JZQO6jhc', '1500177484.png'),
('YVFvfFd9KE72tvbXDJstbqzSvVTyVl', '1500177497.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sobre`
--

CREATE TABLE `sobre` (
  `sob_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `sob_frase` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `sob_parrafo1` longtext COLLATE utf8_spanish_ci NOT NULL,
  `sob_parrafo2` longtext COLLATE utf8_spanish_ci NOT NULL,
  `sob_ruta` varchar(120) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sobre`
--

INSERT INTO `sobre` (`sob_id`, `sob_frase`, `sob_parrafo1`, `sob_parrafo2`, `sob_ruta`) VALUES
('lO23cOv23PC2ei4dJV829CWVvivi32', 'Phasellus pablo ullamcorper magna id sagittis. Finibus ante non iaculis. purus quis bibendum elementum Ut lorem tortor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempor purus quis bibendum elementum. Nulla luctus, velit vel dignissim volutpat, elit neque ullamcorper eros, vel commodo enim ex vel erat. Etiam nisi odio, dictum in scelerisque ut, accumsan in tortor. Etiam consequat nibh sit amet varius posuere. Integer pulvinar justo sed ante egestas, sit amet molestie velit lacinia.', 'Donec at nulla quis massa egestas tempor at eget est. Maecenas eget laoreet ante, ut egestas turpis. Maecenas sed elit vel arcu sagittis suscipit. Aliquam erat volutpat. Sed sit amet arcu et elit congue bibendum eget in ante. Nunc ligula augue, aliquam et nulla non, bibendum imperdiet diam. Phasellus semper, nisi at fringilla rhoncus, mauris diam dapibus purus, eu varius odio mi vitae mauris. Aenean pellentesque diam luctus augue dapibus luctus.\n', '1502907300.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `usu_nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `usu_email` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `usu_password` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_id`, `usu_nombre`, `usu_email`, `usu_password`) VALUES
('AXiZqbBLuCd7y9PA6IMeqjqzMZh2FV', 'Julian Osorio', 'manager@julianosoriomusic', '$2y$10$BUc.LIx5BMNozchNG/KgH.Uv4oeMLAn4bk7V4llQ6SzMmfDib1j4m');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`ban_id`);

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blo_id`),
  ADD KEY `bli_id` (`bli_id`);

--
-- Indices de la tabla `blog_comentario`
--
ALTER TABLE `blog_comentario`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `blo_id` (`blo_id`);

--
-- Indices de la tabla `blog_imagen`
--
ALTER TABLE `blog_imagen`
  ADD PRIMARY KEY (`bli_id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`con_id`);

--
-- Indices de la tabla `discografia`
--
ALTER TABLE `discografia`
  ADD PRIMARY KEY (`dis_id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`evento_code`);

--
-- Indices de la tabla `eventos_imagen`
--
ALTER TABLE `eventos_imagen`
  ADD PRIMARY KEY (`evi_id`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`gal_id`);

--
-- Indices de la tabla `sobre`
--
ALTER TABLE `sobre`
  ADD PRIMARY KEY (`sob_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`bli_id`) REFERENCES `blog_imagen` (`bli_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `blog_comentario`
--
ALTER TABLE `blog_comentario`
  ADD CONSTRAINT `blog_comentario_ibfk_1` FOREIGN KEY (`blo_id`) REFERENCES `blog` (`blo_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
