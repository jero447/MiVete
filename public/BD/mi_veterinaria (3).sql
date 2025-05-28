-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2025 a las 00:49:24
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mi_veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amos`
--

CREATE TABLE `amos` (
  `idAmo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` bigint(30) NOT NULL,
  `fechaAlta` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `amos`
--

INSERT INTO `amos` (`idAmo`, `nombre`, `direccion`, `telefono`, `fechaAlta`) VALUES
(6, 'Jeronimo', 'Av.Cuchi Corral', 2665038790, '2025-05-14'),
(7, 'Enzo Puto', 'Pito muy corto', 26645678, '2025-05-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amo_mascotas`
--

CREATE TABLE `amo_mascotas` (
  `idAmo_Mascotas` int(11) NOT NULL,
  `idAmo` int(11) DEFAULT NULL,
  `idMascota` int(11) DEFAULT NULL,
  `fechaInicio` date NOT NULL DEFAULT current_timestamp(),
  `fechaFin` date DEFAULT NULL,
  `motivoFin` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `amo_mascotas`
--

INSERT INTO `amo_mascotas` (`idAmo_Mascotas`, `idAmo`, `idMascota`, `fechaInicio`, `fechaFin`, `motivoFin`) VALUES
(30, 6, 15, '2025-05-14', '2025-05-15', 'vendida'),
(31, 7, 15, '2025-05-14', NULL, NULL),
(32, 6, 16, '2025-05-14', '2025-05-15', 'fallecimiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `idMascotas` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `especie` varchar(30) NOT NULL,
  `raza` varchar(30) NOT NULL,
  `nroRegistro` int(11) NOT NULL,
  `edad` int(11) DEFAULT NULL,
  `amoActual` int(11) DEFAULT NULL,
  `fechaAlta` date NOT NULL DEFAULT current_timestamp(),
  `fechaDefuncion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`idMascotas`, `nombre`, `especie`, `raza`, `nroRegistro`, `edad`, `amoActual`, `fechaAlta`, `fechaDefuncion`) VALUES
(15, 'Pancho', 'Gato', 'Rama', 4535, 4, 7, '2025-05-14', NULL),
(16, 'Roco', 'Perro Malo', 'Caniche', 345678, 14, NULL, '2025-05-14', '2025-05-15'),
(17, 'Puchi', 'Perro Malo', 'Bengala', 4564, 10, NULL, '2025-05-15', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veterinario`
--

CREATE TABLE `veterinario` (
  `idVeterinario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `especialidad` varchar(50) NOT NULL,
  `telefono` bigint(50) NOT NULL,
  `fechaIngreso` date NOT NULL DEFAULT current_timestamp(),
  `fechaEgreso` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `veterinario`
--

INSERT INTO `veterinario` (`idVeterinario`, `nombre`, `especialidad`, `telefono`, `fechaIngreso`, `fechaEgreso`) VALUES
(5, 'Ramiro el come viejos negros', 'Cirujano de putos', 2665039856, '2025-05-14', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veterinario_mascota`
--

CREATE TABLE `veterinario_mascota` (
  `idVeterinario_mascota` int(11) NOT NULL,
  `idMascota` int(11) DEFAULT NULL,
  `idVeterinario` int(11) DEFAULT NULL,
  `fechaAtencion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `amos`
--
ALTER TABLE `amos`
  ADD PRIMARY KEY (`idAmo`);

--
-- Indices de la tabla `amo_mascotas`
--
ALTER TABLE `amo_mascotas`
  ADD PRIMARY KEY (`idAmo_Mascotas`),
  ADD UNIQUE KEY `uq_amo_mascota` (`idAmo`,`idMascota`,`fechaInicio`) USING BTREE,
  ADD KEY `fk_amo` (`idAmo`),
  ADD KEY `idMascota` (`idMascota`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`idMascotas`),
  ADD UNIQUE KEY `nroRegistro` (`nroRegistro`);

--
-- Indices de la tabla `veterinario`
--
ALTER TABLE `veterinario`
  ADD PRIMARY KEY (`idVeterinario`);

--
-- Indices de la tabla `veterinario_mascota`
--
ALTER TABLE `veterinario_mascota`
  ADD PRIMARY KEY (`idVeterinario_mascota`),
  ADD KEY `fk_mascota` (`idMascota`),
  ADD KEY `fk_veterinario` (`idVeterinario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `amos`
--
ALTER TABLE `amos`
  MODIFY `idAmo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `amo_mascotas`
--
ALTER TABLE `amo_mascotas`
  MODIFY `idAmo_Mascotas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `idMascotas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `veterinario`
--
ALTER TABLE `veterinario`
  MODIFY `idVeterinario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `veterinario_mascota`
--
ALTER TABLE `veterinario_mascota`
  MODIFY `idVeterinario_mascota` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `amo_mascotas`
--
ALTER TABLE `amo_mascotas`
  ADD CONSTRAINT `amo_mascotas_ibfk_1` FOREIGN KEY (`idMascota`) REFERENCES `mascotas` (`idMascotas`),
  ADD CONSTRAINT `fk_amo` FOREIGN KEY (`idAmo`) REFERENCES `amos` (`idAmo`);

--
-- Filtros para la tabla `veterinario_mascota`
--
ALTER TABLE `veterinario_mascota`
  ADD CONSTRAINT `fk_mascota` FOREIGN KEY (`idMascota`) REFERENCES `mascotas` (`idMascotas`),
  ADD CONSTRAINT `fk_veterinario` FOREIGN KEY (`idVeterinario`) REFERENCES `veterinario` (`idVeterinario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
