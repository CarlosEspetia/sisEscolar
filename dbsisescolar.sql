-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-08-2017 a las 05:02:30
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbsisescolar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL,
  `escual_alumno` int(11) NOT NULL,
  `estado_alumno` int(11) NOT NULL,
  `nombre_alumno` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_alumno` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `direccion_alumno` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_emergencia` int(11) NOT NULL,
  `autoizados_alumno` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones_alumno` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `foto_alumno` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `edad_alumno` int(11) NOT NULL,
  `telefono_alumno` int(11) NOT NULL,
  `nombre_padre_alumno` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_madre_alumno` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `fecha_asistencia` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `hora_entrada` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `hora_salida` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuelas`
--

CREATE TABLE `escuelas` (
  `id_escuela` int(11) NOT NULL,
  `tipo_escuela` int(11) NOT NULL,
  `nombre_escuela` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `direcion_escuela` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_tipo`
--

CREATE TABLE `estado_tipo` (
  `id_estado_tipo` int(11) NOT NULL,
  `descripcion_estado_tipo` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos_usuario`
--

CREATE TABLE `pagos_usuario` (
  `id_pago_usuario` int(11) NOT NULL,
  `concepto_pago_usuario` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `adeudo_pago_usuario` float(4,2) NOT NULL,
  `fechahora` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `id_tarifa` int(11) NOT NULL,
  `pagos_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_alumnos`
--

CREATE TABLE `pago_alumnos` (
  `id_pagos_alumnos` int(11) NOT NULL,
  `concepto_pago` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fechahora_pago` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `adeudo_pago` float(4,2) DEFAULT NULL,
  `id_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifas`
--

CREATE TABLE `tarifas` (
  `id_tarifa` int(11) NOT NULL,
  `concepto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `monto` float(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_escuela`
--

CREATE TABLE `tipo_escuela` (
  `id_tipo_escuela` int(11) NOT NULL,
  `descripcion_tipo_escuela` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuatio` int(11) NOT NULL,
  `descripcion_tipo_usuario` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  `estado_usuario` int(11) NOT NULL,
  `escuela_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_usuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `correo_usuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena_usuario` varchar(12) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `alumno_escuala_idx` (`escual_alumno`),
  ADD KEY `alumno_estado_idx` (`estado_alumno`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD KEY `asistencia_alumno_idx` (`id_alumno`);

--
-- Indices de la tabla `escuelas`
--
ALTER TABLE `escuelas`
  ADD PRIMARY KEY (`id_escuela`),
  ADD KEY `fk_tipo_escuela_idx` (`tipo_escuela`);

--
-- Indices de la tabla `estado_tipo`
--
ALTER TABLE `estado_tipo`
  ADD PRIMARY KEY (`id_estado_tipo`);

--
-- Indices de la tabla `pagos_usuario`
--
ALTER TABLE `pagos_usuario`
  ADD PRIMARY KEY (`id_pago_usuario`),
  ADD KEY `fk_tarifa_idx` (`id_tarifa`),
  ADD KEY `pago_usuario_idx` (`pagos_usuarios`);

--
-- Indices de la tabla `pago_alumnos`
--
ALTER TABLE `pago_alumnos`
  ADD PRIMARY KEY (`id_pagos_alumnos`),
  ADD KEY `pago_alumno_idx` (`id_alumno`);

--
-- Indices de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  ADD PRIMARY KEY (`id_tarifa`);

--
-- Indices de la tabla `tipo_escuela`
--
ALTER TABLE `tipo_escuela`
  ADD PRIMARY KEY (`id_tipo_escuela`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuatio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_escuela_idx` (`escuela_usuario`),
  ADD KEY `fk_tipo_usuario_idx` (`tipo_usuario`),
  ADD KEY `usuario_estado_idx` (`estado_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `escuelas`
--
ALTER TABLE `escuelas`
  MODIFY `id_escuela` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estado_tipo`
--
ALTER TABLE `estado_tipo`
  MODIFY `id_estado_tipo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pagos_usuario`
--
ALTER TABLE `pagos_usuario`
  MODIFY `id_pago_usuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pago_alumnos`
--
ALTER TABLE `pago_alumnos`
  MODIFY `id_pagos_alumnos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  MODIFY `id_tarifa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_escuela`
--
ALTER TABLE `tipo_escuela`
  MODIFY `id_tipo_escuela` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo_usuatio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumno_escuala` FOREIGN KEY (`escual_alumno`) REFERENCES `escuelas` (`id_escuela`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `alumno_estado` FOREIGN KEY (`estado_alumno`) REFERENCES `estado_tipo` (`id_estado_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `escuelas`
--
ALTER TABLE `escuelas`
  ADD CONSTRAINT `fk_tipo_escuela` FOREIGN KEY (`tipo_escuela`) REFERENCES `tipo_escuela` (`id_tipo_escuela`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pagos_usuario`
--
ALTER TABLE `pagos_usuario`
  ADD CONSTRAINT `fk_tarifa` FOREIGN KEY (`id_tarifa`) REFERENCES `tarifas` (`id_tarifa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pago_usuario` FOREIGN KEY (`pagos_usuarios`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pago_alumnos`
--
ALTER TABLE `pago_alumnos`
  ADD CONSTRAINT `pago_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_escuela` FOREIGN KEY (`escuela_usuario`) REFERENCES `escuelas` (`id_escuela`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tipo_usuario` FOREIGN KEY (`tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuatio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario_estado` FOREIGN KEY (`estado_usuario`) REFERENCES `estado_tipo` (`id_estado_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
