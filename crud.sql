-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2023 a las 04:18:48
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
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `Id` int(11) NOT NULL,
  `nombredepartamento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`Id`, `nombredepartamento`) VALUES
(1, 'Smart'),
(2, 'Jala'),
(3, 'Smart121'),
(4, 'Jala12121');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Id` int(11) NOT NULL,
  `Area` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`Id`, `Area`) VALUES
(1, 'Informatica'),
(2, 'Arte'),
(3, 'Informatica1212'),
(4, 'Apollo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `Idpersona` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Sueldo` varchar(100) NOT NULL,
  `Nacimiento` varchar(100) NOT NULL,
  `edad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`Idpersona`, `nombre`, `Correo`, `Sueldo`, `Nacimiento`, `edad`) VALUES
(1, 'Santiago Cardenas', 'santiago@gmail.com', '123123', '15 de julio', '23'),
(2, 'Santiago Cardenas1', 'santiago1@gmail.com', '123123111', '15 de julio', '23'),
(5, '3', '', '5000sasasa', 'saporanaconejo', 'estudiant'),
(6, '1', '', '123', 'eqw', 'vxv'),
(11, '', '2', '5000dsd', 'polodsd', 'dsadasdasdds'),
(12, '', '4', '5000', '6565', '656565fddf'),
(13, '', '3', 'dasdasdas', 'dasdas', 'dadsvxcv'),
(14, '', '4', '5000', '6565', 'santiagoter'),
(15, '', '', '123', 'fsds', 'fsdf'),
(16, '', '3', 'fsdf', 'fsdfs', 'fsdfsd'),
(17, '', '3', 'rrrrrrrr', 'rrrrrrrrrrrrrr', 'rrrrrrrrrrr'),
(18, '1', '2', 'fsdffdsfds', 'fsdfdfsdfdsfsd', 'fsdfsfdsfsdfds'),
(20, '2', '3', 'dasdas', 'dasdas', 'das'),
(21, '4', '1', 'dasdas', 'das', 'dads'),
(22, '2', '2', 'fdsfs', 'fsdfs', 'fsdfsdfsdfsdfsd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`Idpersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `Idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
