DROP DATABASE IF EXISTS trabajo_final;
CREATE DATABASE trabajo_final CHARACTER SET utf8mb4;
USE trabajo_final;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `alumnos` (
  `id` int(10) UNSIGNED NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `nombres` varchar(32) NOT NULL,
  `edad` int(11) NOT NULL,
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `apellido`, `nombres`, `edad`, `email`) VALUES
(1, 'Gerez', 'Juan Albertito', 23, 'gerez.perez@unvime.edu.ar'),
(2, 'Martinez', 'Cristian', 22, 'martinez.cristian@unvime.edu.ar'),
(3, 'Gaggino', 'Agustin', 21, 'gaggino.agustin@unvime.edu.ar'),
(4, 'Pessio', 'Cristian', 23, 'pessio.cristian@unvime.edu.ar'),
(5, 'Carboneti', 'Lucio Gabriel', 29, 'carboneti.lucio@unvime.edu.ar'),
(6, 'Boschin', 'Facundo', 28, 'boschin.facundo@unvime.edu.ar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE `inscripciones` (
  `id` int(10) UNSIGNED NOT NULL,
  `alumnos_id` int(11) NOT NULL,
  `materias_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `curso` varchar(3) NOT NULL,
  `carrera` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `curso`, `carrera`) VALUES
(1, 'Programacion 1', '1', 'Analista de sistemas'),
(2, 'Programacion 2', '2', 'Analista de sistemas'),
(3, 'Programacion 3', '3', 'Analista de sistemas'),
(4, 'Analisis de datos', '2', 'Ingenieria en comput'),
(5, 'Anatomia', '1', 'Kinesiología'),
(6, 'Fisionomia', '2', 'Kinesiología');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

