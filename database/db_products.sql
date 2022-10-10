-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-09-2022 a las 18:02:26
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_products`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Categories`
--

CREATE TABLE `Categories` (
  `id_category` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Categories`
--

INSERT INTO `Categories` (`id_category`, `name`) VALUES
(1, 'Perifericos'),
(2, 'Monitores'),
(3, 'Componentes de PC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Products`
--

CREATE TABLE `Products` (
  `id` int(11) NOT NULL,
  `name` mediumtext NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `stock` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Products`
--

INSERT INTO `Products` (`id`, `name`, `price`, `description`, `stock`, `id_category`) VALUES
(2, 'MOUSE LOGITECH G G502 LIGHTSPEED', 14000, 'Características:\r\nAltura: 132 mm\r\nAnchura: 75 mm\r\nProfundidad: 40 mm\r\nPeso: 114 g, sólo mouse\r\nPesas adicionales opcionales: hasta 16 g.\r\nDPI: 100-16000\r\nInalambrico', 16, 1),
(3, 'MOUSE HYPERX PULSEFIRE DART RGB', 13000, 'Caracteristicas:\r\nInalambrico\r\nDPI: 100- 16000\r\nSensor Optico\r\nRango de frecuencia 2.4Ghz', 6, 1),
(4, 'MONITOR GIGABYTE G24F FHD 1MS IPS \r\n', 70000, 'Caracteristicas:\r\n165hz\r\n24 Pulgadas\r\nPlano\r\nPuerto USB 3.0\r\nEnchufe de audifonos\r\n', 3, 2),
(5, 'MONITOR VIEWSONIC VG2455 SUPERCLEAR', 93599, 'Caracteristicas:\r\n24 Pulgadas\r\n1920x1080\r\n75hz\r\nAltavoces', 2, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indices de la tabla `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Categories`
--
ALTER TABLE `Categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `Products`
--
ALTER TABLE `Products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Products`
--
ALTER TABLE `Products`
  ADD CONSTRAINT `Products_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `Categories` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
