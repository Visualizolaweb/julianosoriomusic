-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2017 a las 21:50:58
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
('2VXe2DUcj3I4KnfeF33CFCfrWREs32', 'Sub banner', 'Banner ', '1500147189.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `blo_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `blo_titulo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `blo_descripcion` longtext COLLATE utf8_spanish_ci NOT NULL,
  `bli_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`blo_id`, `blo_titulo`, `blo_descripcion`, `bli_id`) VALUES
('LYI1vxUMVHeoP9tiU2mm35RE5qRnlt', 'Blog', 'Des Blog', 'bX3ZMlOXMTGAgtYPtjcl2CHBy8u3TR');

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
('bX3ZMlOXMTGAgtYPtjcl2CHBy8u3TR', '1500147439.png', '2017-07-15 02:37:19', 'SI');

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
('AeU839Cekf02Cw9fEcoe293c0vD2D1', 'manager@julianosoriomusic', '(57) 300 610 0192');

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
('mek0YRcGTvUsfIGnhGDUf6ExBOecKV', '1500147468.png');

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
('h0CMd2Czp0tK9xkTOpi7hzH22GPIQz', '1500147587.png');

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
