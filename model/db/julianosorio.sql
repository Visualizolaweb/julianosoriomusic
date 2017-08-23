-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-08-2017 a las 17:04:39
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
('2VXe2DUcj3I4KnfeF33CFCfrWREs32', 'Descarga la aplicacións', 'Infinitos', '1502985213.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `blo_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `blo_titulo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `blo_descripcion` longtext COLLATE utf8_spanish_ci NOT NULL,
  `blo_estado` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `bli_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `blo_fecha` date NOT NULL,
  `blo_lectura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`blo_id`, `blo_titulo`, `blo_descripcion`, `blo_estado`, `bli_id`, `blo_fecha`, `blo_lectura`) VALUES
('aXQ3vM08g4qXxzn', 'Lanzamiento Album', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet nisi ut erat imperdiet interdum. Nullam eleifend efficitur luctus. Ut interdum tellus nisl, sed pulvinar est vehicula lacinia. Aenean in sollicitudin leo. Mauris sit amet augue a ex varius varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id dignissim ex. Nulla at pharetra lorem, a tempus neque. Integer dignissim lorem quis lorem ornare, vel aliquet lectus efficitur. Integer nunc ipsum, euismod non elementum a, sodales id erat.\r\n\r\nMauris egestas tellus ut hendrerit pulvinar. Quisque cursus tempus sapien, tincidunt rutrum sapien auctor vel. Phasellus suscipit scelerisque est sit amet porttitor. Nullam justo neque, volutpat sed felis in, efficitur dictum mi. Nunc quis purus at nisl malesuada fringilla non feugiat diam. Nam tristique velit in justo euismod porttitor. Morbi mollis arcu dui, vel tincidunt diam pretium non. Quisque aliquet et sapien non tincidunt. Mauris eget vehicula augue, eget convallis erat. Morbi dapibus mi ac lorem vulputate, eget finibus lacus eleifend. Morbi volutpat eleifend arcu, eget sagittis elit interdum nec. Aliquam dui elit, hendrerit eu vulputate sed, facilisis sit amet mi. Pellentesque vel lobortis dolor, sit amet faucibus velit. Etiam ornare purus eros, a vulputate erat vehicula a. Aenean ut feugiat risus. Quisque nec diam sit amet sapien placerat scelerisque.\r\n\r\nPellentesque aliquet, ex rutrum finibus dapibus, magna dolor sagittis nisi, eu volutpat elit nisi vitae felis. Vivamus et sollicitudin justo. Curabitur cursus tortor est, ut tempus est volutpat vitae. Pellentesque iaculis suscipit augue. Nam sollicitudin mattis mauris, in iaculis odio. Cras lobortis porta mi, nec ornare erat sollicitudin at. Duis congue rhoncus molestie. Donec et velit sollicitudin, egestas quam ac, feugiat purus. Nullam a iaculis justo, at dapibus magna. Ut laoreet lorem id ipsum tincidunt, nec mollis odio condimentum. Ut fermentum neque sed nisi egestas, vel pellentesque lorem laoreet. Cras id massa nisl. Aliquam sodales augue tortor, at molestie lacus euismod eget. Suspendisse potenti. Mauris id feugiat eros. Aliquam magna eros, laoreet eu odio at, bibendum vehicula sapien.', 'PUBLICADO', 'IJuojA1ENoJS4C9FBnLmXatoR8mYn4', '2017-08-19', 6),
('EQjRmGxSY9IuD7F', 'Lanzamiento sencillo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet nisi ut erat imperdiet interdum. Nullam eleifend efficitur luctus. Ut interdum tellus nisl, sed pulvinar est vehicula lacinia. Aenean in sollicitudin leo. Mauris sit amet augue a ex varius varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id dignissim ex. Nulla at pharetra lorem, a tempus neque. Integer dignissim lorem quis lorem ornare, vel aliquet lectus efficitur. Integer nunc ipsum, euismod non elementum a, sodales id erat.\r\n\r\nMauris egestas tellus ut hendrerit pulvinar. Quisque cursus tempus sapien, tincidunt rutrum sapien auctor vel. Phasellus suscipit scelerisque est sit amet porttitor. Nullam justo neque, volutpat sed felis in, efficitur dictum mi. Nunc quis purus at nisl malesuada fringilla non feugiat diam. Nam tristique velit in justo euismod porttitor. Morbi mollis arcu dui, vel tincidunt diam pretium non. Quisque aliquet et sapien non tincidunt. Mauris eget vehicula augue, eget convallis erat. Morbi dapibus mi ac lorem vulputate, eget finibus lacus eleifend. Morbi volutpat eleifend arcu, eget sagittis elit interdum nec. Aliquam dui elit, hendrerit eu vulputate sed, facilisis sit amet mi. Pellentesque vel lobortis dolor, sit amet faucibus velit. Etiam ornare purus eros, a vulputate erat vehicula a. Aenean ut feugiat risus. Quisque nec diam sit amet sapien placerat scelerisque.\r\n\r\nPellentesque aliquet, ex rutrum finibus dapibus, magna dolor sagittis nisi, eu volutpat elit nisi vitae felis. Vivamus et sollicitudin justo. Curabitur cursus tortor est, ut tempus est volutpat vitae. Pellentesque iaculis suscipit augue. Nam sollicitudin mattis mauris, in iaculis odio. Cras lobortis porta mi, nec ornare erat sollicitudin at. Duis congue rhoncus molestie. Donec et velit sollicitudin, egestas quam ac, feugiat purus. Nullam a iaculis justo, at dapibus magna. Ut laoreet lorem id ipsum tincidunt, nec mollis odio condimentum. Ut fermentum neque sed nisi egestas, vel pellentesque lorem laoreet. Cras id massa nisl. Aliquam sodales augue tortor, at molestie lacus euismod eget. Suspendisse potenti. Mauris id feugiat eros. Aliquam magna eros, laoreet eu odio at, bibendum vehicula sapien.', 'PUBLICADO', 'vytYPIQNGQJJordavXztvuTTgzh8VC', '2017-08-19', 12),
('inGYASIU3HQ0Ay7', 'Rifa de cd\'s', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet nisi ut erat imperdiet interdum. Nullam eleifend efficitur luctus. Ut interdum tellus nisl, sed pulvinar est vehicula lacinia. Aenean in sollicitudin leo. Mauris sit amet augue a ex varius varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id dignissim ex. Nulla at pharetra lorem, a tempus neque. Integer dignissim lorem quis lorem ornare, vel aliquet lectus efficitur. Integer nunc ipsum, euismod non elementum a, sodales id erat.\r\n\r\nMauris egestas tellus ut hendrerit pulvinar. Quisque cursus tempus sapien, tincidunt rutrum sapien auctor vel. Phasellus suscipit scelerisque est sit amet porttitor. Nullam justo neque, volutpat sed felis in, efficitur dictum mi. Nunc quis purus at nisl malesuada fringilla non feugiat diam. Nam tristique velit in justo euismod porttitor. Morbi mollis arcu dui, vel tincidunt diam pretium non. Quisque aliquet et sapien non tincidunt. Mauris eget vehicula augue, eget convallis erat. Morbi dapibus mi ac lorem vulputate, eget finibus lacus eleifend. Morbi volutpat eleifend arcu, eget sagittis elit interdum nec. Aliquam dui elit, hendrerit eu vulputate sed, facilisis sit amet mi. Pellentesque vel lobortis dolor, sit amet faucibus velit. Etiam ornare purus eros, a vulputate erat vehicula a. Aenean ut feugiat risus. Quisque nec diam sit amet sapien placerat scelerisque.\r\n\r\nPellentesque aliquet, ex rutrum finibus dapibus, magna dolor sagittis nisi, eu volutpat elit nisi vitae felis. Vivamus et sollicitudin justo. Curabitur cursus tortor est, ut tempus est volutpat vitae. Pellentesque iaculis suscipit augue. Nam sollicitudin mattis mauris, in iaculis odio. Cras lobortis porta mi, nec ornare erat sollicitudin at. Duis congue rhoncus molestie. Donec et velit sollicitudin, egestas quam ac, feugiat purus. Nullam a iaculis justo, at dapibus magna. Ut laoreet lorem id ipsum tincidunt, nec mollis odio condimentum. Ut fermentum neque sed nisi egestas, vel pellentesque lorem laoreet. Cras id massa nisl. Aliquam sodales augue tortor, at molestie lacus euismod eget. Suspendisse potenti. Mauris id feugiat eros. Aliquam magna eros, laoreet eu odio at, bibendum vehicula sapien.', 'PUBLICADO', 'r8BkuinGAShnB9Fn4ZIDTrAZQ4ilY9', '2017-08-19', 69),
('q2Y1ZeIS0RU3zTj', 'Prueba con parrafos', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a odio finibus, porttitor ante eu, pharetra purus. Aliquam tincidunt eros eget posuere consequat. Praesent eget facilisis arcu, non faucibus justo. Sed bibendum, nulla at fermentum facilisis, sem diam tincidunt sem, quis ultricies est erat quis leo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec quis vestibulum mi, in commodo est. Nam vel hendrerit dolor, ac elementum lacus. Ut at urna sit amet augue tempor sodales nec sit amet erat. Integer vulputate, tellus eget consequat tempus, elit ligula lobortis eros, eget rhoncus orci augue ut ligula. In ac sagittis nunc. Maecenas tincidunt, diam vel consectetur ultricies, massa lacus varius elit, id ultrices elit odio auctor mi.</p>\n<p>Suspendisse pellentesque pretium varius. Donec ut dui at justo elementum tincidunt sit amet nec est. Vivamus efficitur vitae magna sed egestas. Aenean sit amet odio vel sapien venenatis lobortis sed porta mi. In feugiat tortor porttitor velit interdum luctus. Aenean nibh sem, posuere vel auctor luctus, auctor vel arcu. Aliquam maximus, eros vitae fermentum blandit, odio quam venenatis est, in dapibus lorem ante non arcu. Praesent ipsum risus, vestibulum sit amet nisl eu, molestie eleifend purus. Curabitur imperdiet, neque non blandit facilisis, sapien quam pretium sem, viverra imperdiet arcu dolor et purus. Maecenas sagittis porta metus sit amet fringilla. Pellentesque tristique at odio placerat dictum. Vivamus congue efficitur odio, sed tempus ex suscipit eget. Vivamus interdum lobortis nisi et bibendum. Pellentesque ante lacus, lacinia ac tincidunt ut, placerat eu magna.</p>\n<p>Praesent eget lorem eu justo tincidunt accumsan id eget justo. Nam eu turpis fringilla, vestibulum mi id, laoreet orci. Integer convallis metus magna, eu volutpat nisi tincidunt et. Praesent a consequat ante. Integer congue aliquet enim, et semper arcu feugiat vel. Sed eu arcu ac massa sagittis ornare vitae nec dolor. Nulla eu venenatis purus. Phasellus bibendum, felis id tempor aliquam, nisl ipsum condimentum ligula, a varius diam eros vel purus. Praesent eu accumsan ante, nec lobortis nisi. Praesent eu lorem eu augue aliquet ullamcorper sed eu magna. Proin ac mi in felis bibendum luctus. Suspendisse aliquam pellentesque arcu sed bibendum.</p>', 'PUBLICADO', 'F2lyoi1f4rKqfJf0bH05VTeZU2TQ1x', '2017-08-23', 30);

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
('EM4lbvpKr6Ua9Nq', 'inGYASIU3HQ0Ay7', 'asdasdasd'),
('V7Kcx9iidsz1ALQ', 'q2Y1ZeIS0RU3zTj', 'Hola, muy buenos días');

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
('F2lyoi1f4rKqfJf0bH05VTeZU2TQ1x', '1503497155.png', '2017-08-23 09:05:55', 'SI'),
('IJuojA1ENoJS4C9FBnLmXatoR8mYn4', '1503181646.png', '2017-08-19 05:27:26', 'SI'),
('qUv4yILxIrhchCapTj4oVSqH3quRAq', '1503438710.png', '2017-08-22 04:51:50', 'SI'),
('r8BkuinGAShnB9Fn4ZIDTrAZQ4ilY9', '1503181600.png', '2017-08-19 05:26:40', 'SI'),
('vytYPIQNGQJJordavXztvuTTgzh8VC', '1503181570.png', '2017-08-19 05:26:10', 'SI');

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
  `dis_cancion` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `dis_letra` longtext COLLATE utf8_spanish_ci NOT NULL,
  `dis_estado` char(20) COLLATE utf8_spanish_ci NOT NULL,
  `dis_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `discografia`
--

INSERT INTO `discografia` (`dis_id`, `dis_titulo`, `dis_cancion`, `dis_letra`, `dis_estado`, `dis_num`) VALUES
('bRg0UvBinT1cTgH80enoKyQJviNMmV', 'Kalimba', 'Kalimba.mp3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet risus non velit auctor sodales. Donec sapien ligula, condimentum sed malesuada non, varius at enim. In ligula ipsum, sodales non nisi quis, placerat ultricies arcu. Duis tristique odio at lectus imperdiet, id aliquet nisi condimentum. Nunc id turpis aliquet turpis lobortis faucibus ut ut risus. Maecenas fermentum elit vitae consequat porta. Maecenas mattis suscipit dapibus. Ut consequat pharetra erat, a malesuada lorem tincidunt eu. Morbi rhoncus auctor interdum. Nam ullamcorper tincidunt mattis. Praesent facilisis tortor nisi, pharetra mollis ante accumsan posuere. Nam volutpat justo quis nibh porta, et euismod mauris hendrerit.\r\n\r\nDuis et feugiat sapien. Cras in finibus sem. Pellentesque a dolor mauris. Vivamus id iaculis metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus nisl velit, dapibus eget consectetur sit amet, bibendum sed dui. Sed luctus accumsan sem, non aliquet risus. Sed nulla sem, lacinia consequat est et, rutrum maximus nibh. Praesent faucibus neque et est fermentum pharetra. Etiam laoreet lectus eu orci euismod sagittis. Nullam fermentum et risus eget gravida. In non consequat augue, eu sodales mauris.\r\n\r\nPellentesque quis lorem non ante pretium fermentum. Maecenas semper ornare risus sed convallis. Vivamus orci sem, maximus ac turpis blandit, ultrices scelerisque arcu. Quisque eu urna eu dui mattis semper. Nulla facilisi. Mauris luctus, neque non tristique dignissim, neque tellus tincidunt purus, sed vestibulum augue neque nec ante. Sed in posuere libero.\r\n\r\nProin posuere risus sit amet suscipit pretium. Integer orci magna, iaculis in euismod eu, venenatis a urna. Etiam porttitor placerat sem, in consectetur nulla lacinia ac. Pellentesque non vulputate ligula, vel malesuada diam. Phasellus eu convallis mauris. Etiam cursus turpis justo, ut euismod ligula efficitur non. Integer a consectetur lorem. Maecenas in mi lorem. Nullam hendrerit luctus dui eu tempus.\r\n\r\nPhasellus ac diam et lacus pulvinar iaculis sit amet non lorem. Duis nulla neque, aliquet a dictum quis, dapibus pharetra arcu. Maecenas placerat condimentum interdum. Maecenas fringilla, nibh efficitur mattis volutpat, nisi nisi euismod neque, eget scelerisque magna nisl ut sem. Morbi consectetur nulla ligula. Sed accumsan convallis bibendum. Praesent faucibus, augue sit amet consectetur feugiat, nunc est maximus eros, in semper arcu tellus viverra urna. Morbi laoreet fermentum interdum. Cras quis nisi sit amet neque ornare suscipit sed quis nibh.', 'Activo', 1),
('lcL9Fsq5PQnS1Dmumjtc1vjIcHNB0k', 'Canción para mentir', 'Maid with the Flaxen Hair.mp3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet risus non velit auctor sodales. Donec sapien ligula, condimentum sed malesuada non, varius at enim. In ligula ipsum, sodales non nisi quis, placerat ultricies arcu. Duis tristique odio at lectus imperdiet, id aliquet nisi condimentum. Nunc id turpis aliquet turpis lobortis faucibus ut ut risus. Maecenas fermentum elit vitae consequat porta. Maecenas mattis suscipit dapibus. Ut consequat pharetra erat, a malesuada lorem tincidunt eu. Morbi rhoncus auctor interdum. Nam ullamcorper tincidunt mattis. Praesent facilisis tortor nisi, pharetra mollis ante accumsan posuere. Nam volutpat justo quis nibh porta, et euismod mauris hendrerit.\r\n\r\nDuis et feugiat sapien. Cras in finibus sem. Pellentesque a dolor mauris. Vivamus id iaculis metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus nisl velit, dapibus eget consectetur sit amet, bibendum sed dui. Sed luctus accumsan sem, non aliquet risus. Sed nulla sem, lacinia consequat est et, rutrum maximus nibh. Praesent faucibus neque et est fermentum pharetra. Etiam laoreet lectus eu orci euismod sagittis. Nullam fermentum et risus eget gravida. In non consequat augue, eu sodales mauris.\r\n\r\nPellentesque quis lorem non ante pretium fermentum. Maecenas semper ornare risus sed convallis. Vivamus orci sem, maximus ac turpis blandit, ultrices scelerisque arcu. Quisque eu urna eu dui mattis semper. Nulla facilisi. Mauris luctus, neque non tristique dignissim, neque tellus tincidunt purus, sed vestibulum augue neque nec ante. Sed in posuere libero.\r\n\r\nProin posuere risus sit amet suscipit pretium. Integer orci magna, iaculis in euismod eu, venenatis a urna. Etiam porttitor placerat sem, in consectetur nulla lacinia ac. Pellentesque non vulputate ligula, vel malesuada diam. Phasellus eu convallis mauris. Etiam cursus turpis justo, ut euismod ligula efficitur non. Integer a consectetur lorem. Maecenas in mi lorem. Nullam hendrerit luctus dui eu tempus.\r\n\r\nPhasellus ac diam et lacus pulvinar iaculis sit amet non lorem. Duis nulla neque, aliquet a dictum quis, dapibus pharetra arcu. Maecenas placerat condimentum interdum. Maecenas fringilla, nibh efficitur mattis volutpat, nisi nisi euismod neque, eget scelerisque magna nisl ut sem. Morbi consectetur nulla ligula. Sed accumsan convallis bibendum. Praesent faucibus, augue sit amet consectetur feugiat, nunc est maximus eros, in semper arcu tellus viverra urna. Morbi laoreet fermentum interdum. Cras quis nisi sit amet neque ornare suscipit sed quis nibh.\r\n\r\nUt nec est et mi dapibus iaculis et ac libero. Proin fermentum congue varius. Aliquam auctor cursus mauris at vehicula. Ut aliquet turpis nunc, vitae pulvinar mi condimentum in. Nam nec congue mi, ullamcorper lobortis est. Nullam aliquam augue accumsan mi aliquet, rhoncus sagittis lorem bibendum. Curabitur dapibus, nisl non suscipit elementum, elit lorem aliquet velit, aliquet vestibulum justo ante quis sapien. In scelerisque justo et ornare tristique. Nulla enim nulla, euismod quis bibendum eu, semper eget justo.\r\n\r\nAliquam non neque at nisi fermentum luctus nec gravida nisi. Donec a dui vel massa gravida rutrum at et enim. Integer lobortis urna nec vulputate blandit. Proin id nibh aliquam, molestie magna quis, ultricies orci. Maecenas sed eleifend dui, nec elementum odio. Nam et mi consequat urna laoreet sollicitudin. Quisque sit amet dolor vitae erat commodo suscipit eu non est. In aliquam euismod nisi. Integer nibh nibh, malesuada in dui id, pulvinar congue sem. Mauris vestibulum eros quis ipsum vestibulum volutpat. Vivamus lobortis enim mi, dapibus facilisis sem ullamcorper id.\r\n\r\nMauris convallis finibus erat, in fringilla urna venenatis in. Nunc volutpat orci risus, at finibus dolor tristique pretium. Phasellus efficitur lorem sit amet euismod semper. Proin in mauris eget odio tempus interdum. Nunc auctor vehicula massa eget posuere. Vestibulum ornare augue quis mauris hendrerit fringilla. Nam eu massa nunc. Curabitur vulputate ligula sed risus tempor, eget vestibulum leo luctus. Nunc dui nulla, efficitur et condimentum condimentum, laoreet ut massa. Donec malesuada ullamcorper scelerisque. Nullam ullamcorper orci augue, ac convallis dolor commodo elementum. Sed hendrerit sed nisl eget consectetur. Nunc posuere nisl lectus, sit amet porta nulla pharetra at. Sed vitae felis lacinia, porttitor diam sed, ultrices dui. Nullam rutrum pulvinar facilisis. Quisque id viverra nunc.', 'Activo', 3),
('NIMRezc4sk8ZKRZRhPhpCUNJZ8400s', 'Sleep Away', 'Sleep Away.mp3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet risus non velit auctor sodales. Donec sapien ligula, condimentum sed malesuada non, varius at enim. In ligula ipsum, sodales non nisi quis, placerat ultricies arcu. Duis tristique odio at lectus imperdiet, id aliquet nisi condimentum. Nunc id turpis aliquet turpis lobortis faucibus ut ut risus. Maecenas fermentum elit vitae consequat porta. Maecenas mattis suscipit dapibus. Ut consequat pharetra erat, a malesuada lorem tincidunt eu. Morbi rhoncus auctor interdum. Nam ullamcorper tincidunt mattis. Praesent facilisis tortor nisi, pharetra mollis ante accumsan posuere. Nam volutpat justo quis nibh porta, et euismod mauris hendrerit.\r\n\r\nDuis et feugiat sapien. Cras in finibus sem. Pellentesque a dolor mauris. Vivamus id iaculis metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus nisl velit, dapibus eget consectetur sit amet, bibendum sed dui. Sed luctus accumsan sem, non aliquet risus. Sed nulla sem, lacinia consequat est et, rutrum maximus nibh. Praesent faucibus neque et est fermentum pharetra. Etiam laoreet lectus eu orci euismod sagittis. Nullam fermentum et risus eget gravida. In non consequat augue, eu sodales mauris.\r\n\r\nPellentesque quis lorem non ante pretium fermentum. Maecenas semper ornare risus sed convallis. Vivamus orci sem, maximus ac turpis blandit, ultrices scelerisque arcu. Quisque eu urna eu dui mattis semper. Nulla facilisi. Mauris luctus, neque non tristique dignissim, neque tellus tincidunt purus, sed vestibulum augue neque nec ante. Sed in posuere libero.\r\n\r\nProin posuere risus sit amet suscipit pretium. Integer orci magna, iaculis in euismod eu, venenatis a urna. Etiam porttitor placerat sem, in consectetur nulla lacinia ac. Pellentesque non vulputate ligula, vel malesuada diam. Phasellus eu convallis mauris. Etiam cursus turpis justo, ut euismod ligula efficitur non. Integer a consectetur lorem. Maecenas in mi lorem. Nullam hendrerit luctus dui eu tempus.\r\n\r\nPhasellus ac diam et lacus pulvinar iaculis sit amet non lorem. Duis nulla neque, aliquet a dictum quis, dapibus pharetra arcu. Maecenas placerat condimentum interdum. Maecenas fringilla, nibh efficitur mattis volutpat, nisi nisi euismod neque, eget scelerisque magna nisl ut sem. Morbi consectetur nulla ligula. Sed accumsan convallis bibendum. Praesent faucibus, augue sit amet consectetur feugiat, nunc est maximus eros, in semper arcu tellus viverra urna. Morbi laoreet fermentum interdum. Cras quis nisi sit amet neque ornare suscipit sed quis nibh.', 'Activo', 2),
('xJ6glT5grEao6YCnjs0rhEbiJ86aPH', 'HHH', 'Maid with the Flaxen Hair.mp3', 'sdfsd', 'Activo', 4);

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
  `evento_hora_fin` time NOT NULL,
  `evento_estado` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`evento_code`, `evento_nombre`, `evento_descripcion`, `evento_direccion`, `evento_fecha_inicio`, `evento_hora_inicio`, `evento_fecha_fin`, `evento_hora_fin`, `evento_estado`) VALUES
('29B66ZcNKgHjegf', 'Toque de sencillos', 'Disfruta una noche con mis mejores sencillos', 'Discoteca fahrenheit ', '2017-10-02', '20:00:00', '2017-10-02', '23:00:00', 'PUBLICADO'),
('nmOp31BG5XHxxmi', 'Concierto itagui', 'Evento del municipio de itagui donde estare como cantante invitado', 'Cr 50 # 40- 12', '2017-02-13', '14:00:00', '2017-02-13', '16:00:00', 'PUBLICADO'),
('PFuxilryZg9cApN', 'Canta Conmigo', 'Participa en este evento donde tendras la oportunidad de cantar conmigo ', 'Cr 37 sur #25b - 13', '2017-04-15', '12:00:00', '2017-04-17', '15:00:00', 'PUBLICADO'),
('TFZNf7j9lFfjs4D', 'Noche de estreno', 'Ven y canta conmigo las nuevas canciones de mi proximo album', 'Cll 10 #20 - 22', '2017-06-23', '20:00:00', '2017-06-25', '22:00:00', 'PUBLICADO'),
('VaJioz48dfAUOjl', 'Firma de cd\'s', 'Te estare acompañando y mostrando los exitos de mi nuevo album te espero!', 'CC: Premium plaza', '2017-08-22', '12:00:00', '2017-08-22', '14:00:00', 'PUBLICADO'),
('x3majEsqgieIA7B', 'Concierto ', 'Ven a este concierto que tendra varios artistas invitados', 'Plaza de toros la macarena', '2017-09-25', '18:00:00', '2017-09-25', '20:00:00', 'PUBLICADO');

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
('mek0YRcGTvUsfIGnhGDUf6ExBOecKV', '1502986049.png');

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
('lO23cOv23PC2ei4dJV829CWVvivi32', 'Phasellus pablo ullamcorper magna id sagittis. Finibus ante non iaculis. purus quis bibendum elementum Ut lorem tortor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempor purus quis bibendum elementum. Nulla luctus, velit vel dignissim volutpat, elit neque ullamcorper eros, vel commodo enim ex vel erat. Etiam nisi odio, dictum in scelerisque ut, accumsan in tortor. Etiam consequat nibh sit amet varius posuere. Integer pulvinar justo sed ante egestas, sit amet molestie velit lacinia.', 'Donec at nulla quis massa egestas tempor at eget est. Maecenas eget laoreet ante, ut egestas turpis. Maecenas sed elit vel arcu sagittis suscipit. Aliquam erat volutpat. Sed sit amet arcu et elit congue bibendum eget in ante. Nunc ligula augue, aliquam et nulla non, bibendum imperdiet diam. Phasellus semper, nisi at fringilla rhoncus, mauris diam dapibus purus, eu varius odio mi vitae mauris. Aenean pellentesque diam luctus augue dapibus luctus.\n', '1502991027.png');

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
('AXiZqbBLuCd7y9PA6IMeqjqzMZh2FV', 'Julian Osorio', 'manager@julianosoriomusic', '$2y$10$LvgBl0H/Qsd5ncGDhl3ha.1c2NkeyP70uuSEfYKz19.4U7qcY/twe');

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
