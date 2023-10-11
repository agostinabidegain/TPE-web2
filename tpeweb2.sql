-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2023 a las 17:43:14
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
-- Base de datos: `tpeweb2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicios`
--

CREATE TABLE `ejercicios` (
  `Ejercicio_id` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Zona` int(11) NOT NULL,
  `Requerimientos` varchar(255) NOT NULL,
  `Lugar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ejercicios`
--

INSERT INTO `ejercicios` (`Ejercicio_id`, `Nombre`, `Zona`, `Requerimientos`, `Lugar`) VALUES
(1, 'Curl en Polea Baja', 1, 'Polea', 'Gimnasio'),
(2, 'Dominadas Supinas', 1, 'Barra', 'Gimnasio'),
(3, 'Flexiones Diamante', 1, 'Ninguno', 'Gimnasio/Casa'),
(4, 'Press banca + Agarre central', 2, 'Pesas, Banca', 'Gimnasio'),
(5, 'Fondo de Banco', 2, 'Banco', 'Gimnasio'),
(6, 'Extensiones con Bandas', 2, 'Bandas', 'Gimnasio'),
(7, 'Elevaciones Laterales', 3, 'Mancuernas', 'Gimnasio'),
(8, 'Push Press', 3, 'Pesas', 'Gimnasio'),
(9, 'Flexiones de Hombros', 3, 'Ninguno', 'Gimnasio/Casa'),
(10, 'Puente Isometrico', 4, 'Ninguno', 'Gimnasio/Casa'),
(11, 'Curl Nórdico', 4, 'Ninguno', 'Gimnasio/Casa'),
(12, 'Peso Muerto Rumano', 4, 'Pesa', 'Gimnasio'),
(13, 'Puente de Glúteos', 5, 'Ninguno', 'Gimnasio/Casa'),
(14, 'Patada de Glúteos', 5, 'Ninguno', 'Gimnasio/Casa'),
(15, 'Sentadillas Sumo', 5, 'Ninguno/Algo para dar peso', 'Gimnasio/Casa'),
(16, 'Plancha', 6, 'Ninguno', 'Gimnasio/Casa'),
(17, 'Knee Tuck', 6, 'Ninguno', 'Gimnasio/Casa'),
(18, 'Tijera', 6, 'Ninguno', 'Gimnasio/Casa'),
(19, 'Polea Alta al Pecho', 7, 'Polea', 'Gimnasio'),
(20, 'Dominadas', 7, 'Barra', 'Gimnasio'),
(21, 'Remo en Barra T', 7, 'Barra', 'Gimnasio'),
(22, 'Flexiones de Arquero', 8, 'Ninguno', 'Gimnasio/Casa'),
(23, 'Apertura con Mancuerna', 8, 'Mancuerna/Banca', 'Gimnasio'),
(24, 'Cruce de Poleas', 8, 'Poleas', 'Gimnasio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonascorporales`
--

CREATE TABLE `zonascorporales` (
  `Zona_id` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Ubicacion` varchar(255) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `HuesosInvolucrados` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `zonascorporales`
--

INSERT INTO `zonascorporales` (`Zona_id`, `Nombre`, `Ubicacion`, `Descripcion`, `HuesosInvolucrados`) VALUES
(1, 'Bíceps', 'Brazo', 'Músculo grande y grueso del brazo, formado por dos cabezas', 'Húmero'),
(2, 'Tríceps', 'Brazo', 'Músculo de 3 cabezas, a las cuáles se les da el nombre de vastos', 'Húmero'),
(3, 'Hombros', 'Hombro', 'Parte del cuerpo que sirve de nexo entre el brazo y el cuerpo', 'Clavícula, Homóplato y Húmero'),
(4, 'Isquiotibiales', 'Parte posterior del Muslo', 'Grupo de músculos que ayudan a extender la pierna hacia atrás y doblar la rodilla', 'Isquion'),
(5, 'Glúteos', 'Región glútea', 'Complejo muscular formado por tres vientres musculares: glúteo mayor, mediano y menor', 'Coxal'),
(6, 'Abdominales', 'Abdomen', 'Músculos ubicados en la parte delantera del abdomen, la zona que se encuentra debajo del pecho y por encima del ombligo', 'Costillas inferiores, Vértebras lumbares, y Huesos pélvicos'),
(7, 'Espalda', 'Dorso', 'Parte posterior del cuerpo humano que va de la base del cuello y hombros hasta la cintura', 'Vértebras'),
(8, 'Pectorales', 'Pecho', ' Músculos que conectan la parte delantera del pecho humano con los huesos de la parte superior del brazo y el hombro', 'Escápula y Clavícula');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  ADD PRIMARY KEY (`Ejercicio_id`),
  ADD KEY `Zona` (`Zona`);

--
-- Indices de la tabla `zonascorporales`
--
ALTER TABLE `zonascorporales`
  ADD PRIMARY KEY (`Zona_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  MODIFY `Ejercicio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `zonascorporales`
--
ALTER TABLE `zonascorporales`
  MODIFY `Zona_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  ADD CONSTRAINT `ejercicios_ibfk_1` FOREIGN KEY (`Zona`) REFERENCES `zonascorporales` (`Zona_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
