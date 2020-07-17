-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2020 a las 04:02:26
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academico`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ejercicio` ()  NO SQL
BEGIN
	DECLARE cod, muni Text;
	DECLARE curl CURSOR FOR SELECT codigo, municipio FROM municipio;
 	OPEN curl;
    read_loop: LOOP
	FETCH FROM curl INTO cod, muni;
	SELECT cod, muni;
    END LOOP;
	CLOSE curl;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `identificador`
--

CREATE TABLE `identificador` (
  `ci` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `nombrecompleto` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fechanac` date DEFAULT NULL,
  `lugarresi` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `identificador`
--

INSERT INTO `identificador` (`ci`, `nombrecompleto`, `fechanac`, `lugarresi`) VALUES
('6840841', 'Miguel Angel Pozo Morales', '1989-01-16', 'lp'),
('7547891', 'Pepito Flores Flini', '1990-05-02', 'co'),
('9874566', 'Juancito Pinto Belini', '2000-12-24', 'sz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `ci` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `materia` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`ci`, `materia`, `nota`) VALUES
('6840841', 'inf-111', 80),
('6840841', 'inf-112', 90),
('6840841', 'inf-113', 60),
('7547891', 'inf-111', 80),
('7547891', 'inf-112', 50),
('7547891', 'inf-113', 30),
('9874566', 'inf-111', 5),
('9874566', 'inf-112', 90),
('9874566', 'inf-113', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `clave` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ci` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `color` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `foto` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`clave`, `ci`, `color`, `foto`) VALUES
('123456', '6840841', '#a3c323', 'fotos/foto1.jpg'),
('1234567', '7547891', '#58d19e', 'fotos/foto2.jpg'),
('12345678', '9874566', '#3811f4', 'fotos/foto3.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `identificador`
--
ALTER TABLE `identificador`
  ADD PRIMARY KEY (`ci`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
