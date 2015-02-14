-- Servidor: localhost
-- Examen UF3 - 2014
-- Versión de PHP: 5.3.10-1ubuntu3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `recetas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autonomia`
--

CREATE TABLE IF NOT EXISTS `autonomia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Autonomías' AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `autonomia`
--

INSERT INTO `autonomia` (`id`, `slug`, `nombre`) VALUES
(22, 'cataluna', 'Cataluña'),
(23, 'canarias', 'Canarias'),
(24, 'madrid', 'Madrid'),
(25, 'Cantabria', 'Cantabria'),
(26, 'andalucia', 'Andalucia'),
(27, 'extremadura', 'Extremadura'),
(28, 'galicia', 'Galicia'),
(29, 'aragon', 'Aragon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `asunto` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Mensajes del formulario de contacto' AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `email`, `asunto`, `texto`) VALUES
(1, 'example@example.org', 'srthrth', 'srthsrthsthr');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro`
--

CREATE TABLE IF NOT EXISTS `foro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `autonomia` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `autonomia` (`autonomia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Foros' AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `foro`
--

INSERT INTO `foro` (`id`, `slug`, `nombre`, `autonomia`) VALUES
(11, 'recetas', 'Recetas', 22),
(12, 'restaurantes-y-alojamiento', 'Restaurantes y alojamiento', 22),
(13, 'lugares-de-interes', 'Lugares de interés', 22),
(14, 'fiestas', 'Fiestas', 22),
(15, 'recetas', 'Recetas', 23),
(16, 'restaurantes-y-alojamiento', 'Restaurantes y alojamiento', 23),
(17, 'lugares-de-interes', 'Lugares de interés', 23),
(18, 'fiestas', 'Fiestas', 23),
(19, 'postres', 'Postres', 26),
(20, 'cenas-romanticas', 'Cenas romanticas', 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multimedia`
--

CREATE TABLE IF NOT EXISTS `multimedia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `autonomia` int(11) NOT NULL,
  `multimedia` varchar(255) NOT NULL,
  `autor` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `comunidad` (`autonomia`),
  KEY `autor` (`autor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Multimedia' AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `multimedia`
--

INSERT INTO `multimedia` (`id`, `slug`, `titulo`, `descripcion`, `autonomia`, `multimedia`, `autor`) VALUES
(11, 'coca-de-llardons', 'Coca de Llardons', 'Lorem ipsum sit amet. Lorem ipsum sit amet. Lorem ipsum sit amet.', 22, 'coca_llardons.jpg', 19),
(12, 'parrillada-de-verduras', 'Parrillada de verduras', 'Lorem ipsum sit amet. Lorem ipsum sit amet. Lorem ipsum sit amet. Lorem ipsum sit amet. Lorem ipsum sit amet. Lorem ipsum sit amet. Lorem ipsum sit amet. Lorem ipsum sit amet. Lorem ipsum sit amet. Lorem ipsum sit amet. Lorem ipsum sit amet. Lorem ipsum sit amet. Lorem ipsum sit amet. Lorem ipsum sit amet. Lorem ipsum sit amet. Lorem ipsum sit amet. Lorem ipsum sit amet. Lorem ipsum sit amet. Lorem ipsum sit amet. ', 22, 'Parrillada-de-verduras-628x418.jpg', 19),
(13, 'conejo-salmorejo', 'Conejo salmorejo', 'Lorem ipsum sit amet. Lorem ipsum sit amet. Lorem ipsum sit amet.', 23, 'conejo_salmorejo.jpg', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `parent` int(11) NOT NULL,
  `foro` int(11) NOT NULL,
  `autor` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`,`foro`),
  KEY `foro` (`foro`),
  KEY `parent_2` (`parent`),
  KEY `autor` (`autor`),
  KEY `fecha` (`fecha`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Posts' AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id`, `slug`, `titulo`, `descripcion`, `parent`, `foro`, `autor`, `fecha`) VALUES
(14, 'tapa', 'Tapa', '\r\n\r\n1 - Comenzar tostando las rebanadas de chapata, a la parrilla, en el horno o en una tostadora.<br />\r\n\r\n2 - En una fuente honda mezclar la cebolla, el ajo, el aceite de oliva, el zumo de limón y el pimiento chile. A continuación, enrollar las hojas de albahaca y cortarlas a tiras. Añadirlas a la fuente y luego incorporar los tomates picados.<br />\r\n\r\n3 - Para servir, cubrir cada rebanada de chapata con la mezcla.<br />', 0, 11, 19, '2013-02-15 16:13:37'),
(15, 'test', 'Test', 'Test post', 0, 12, 19, '2013-02-15 16:15:57'),
(16, 'tapa', 'Tapa', 'Respuesta al hilo', 14, 11, 19, '2013-02-15 16:16:07'),
(17, 'test', 'Test', 'Otra respuesta para otro hilo', 15, 12, 19, '2013-02-15 16:16:27'),
(18, 'empieza-el-foro', 'Empieza el foro', 'Esto es una pruebaaaaa!!', 0, 14, 23, '2013-02-26 14:47:18'),
(19, 'otra-prueba', 'Otra prueba de post', 'Esto es una pruebaaaaa!!', 0, 15, 24, '2013-02-26 14:47:18'),
(20, 'empieza-el-foro', 'Empieza el foro', 'Esto es una pruebaaaaa!!', 0, 18, 27, '2013-02-26 14:48:05'),
(21, 'otra-prueba', 'Otra prueba de post', 'Esto es una pruebaaaaa!!Esto es una pruebaaaaa!!Esto es una pruebaaaaa!!', 0, 19, 28, '2013-02-26 14:48:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE IF NOT EXISTS `receta` (
  `id` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `ingredientes` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Recetas';

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`id`, `imagen`, `ingredientes`) VALUES
(14, '0001.jpg', '1 barra de chapata, cortada en rebanadas de 2,5 cm de grosor<br />\r\n1 cebolla roja grande, finamente picada<br />\r\n1 diente de ajo, machacado<br />\r\n2 cucharadas de aceite de oliva<br />\r\nEl zumo de ½ limón<br />\r\n1 pimiento chile rojo pequeño,picado muy fino<br />\r\n1 puñado de albahaca fresca<br />\r\n8 tomates medianos, sin semillas y picados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rol` tinyint(1) NOT NULL,
  `autonomia` int(11) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `autonomia` (`autonomia`),
  KEY `pass` (`pass`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Usuarios' AUTO_INCREMENT=29 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `nombre`, `apellidos`, `email`, `rol`, `autonomia`, `pass`) VALUES
(16, 'admin', 'Administrador', 'admin', 'admin@spainfood.com', 0, 22, '12345678'),
(19, 'usuario', 'Usuario', 'Usuario', 'example@example.org', 1, 22, '12345678'),
(20, 'juli', 'Julian', ' del Amo', 'juli@juli.com', 1, 22, '12345678'),
(23, 'alex', 'Alex', 'Martin', 'amartin@example.com', 1, 24, '12345678'),
(24, 'dani', 'Daniel', 'Garcia', 'dgarcia@example.org', 1, 25, '12345678'),
(25, 'sergio', 'Sergio', 'Perez', 'sperez@hp.com', 1, 26, '12345678'),
(26, 'ana', 'Ana', 'Gonzalez', 'agonz@alez.com', 1, 27, '12345678'),
(27, 'ivan', 'Ivan', 'Hernandez', 'ihernan@dez.com', 1, 27, '12345678'),
(28, 'fran', 'Francisco', 'Garcia', 'fgarc@cia.com', 0, 28, '12345678');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE IF NOT EXISTS `valoracion` (
  `usuario` int(11) NOT NULL,
  `multimedia` int(11) NOT NULL,
  `valoracion` tinyint(1) NOT NULL,
  PRIMARY KEY (`usuario`,`multimedia`),
  KEY `multimedia` (`multimedia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Valoración de los usuarios sobre los elementos multimedia.';

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `foro`
--
ALTER TABLE `foro`
  ADD CONSTRAINT `foro_ibfk_1` FOREIGN KEY (`autonomia`) REFERENCES `autonomia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `multimedia`
--
ALTER TABLE `multimedia`
  ADD CONSTRAINT `multimedia_ibfk_1` FOREIGN KEY (`autonomia`) REFERENCES `autonomia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `multimedia_ibfk_2` FOREIGN KEY (`autor`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`foro`) REFERENCES `foro` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`autor`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `receta`
--
ALTER TABLE `receta`
  ADD CONSTRAINT `receta_ibfk_1` FOREIGN KEY (`id`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`autonomia`) REFERENCES `autonomia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `valoracion_ibfk_2` FOREIGN KEY (`multimedia`) REFERENCES `multimedia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
