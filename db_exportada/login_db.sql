-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2023 a las 11:23:20
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
-- Base de datos: `login_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_db`
--

CREATE TABLE `login_db` (
  `Usuario` int(250) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  `Photo` longblob NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Bio` varchar(500) NOT NULL,
  `Phone` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `login_db`
--

INSERT INTO `login_db` (`Usuario`, `Email`, `Contrasena`, `Photo`, `Name`, `Bio`, `Phone`) VALUES
(45, 'admin@admin', '$2y$10$ixIZI06Hj/FOJ42NRpCZg.SZ0iaEWtbrmUJictuEPipiE/j8Qfdbu', 0x3335303738373736335f313030383131393230333838333030315f333134363533353534343036363034333532305f6e2e6a7067, 'Ricardo Perez', 'Me gusta divertir, salir con mis amigos y estar d fiesta', 45568794113),
(46, 'test@test', '$2y$10$EI/gkqw1nChydr1U0JbgXuL19ve6SVarQ51tbtmKAHadpcghU/FJy', 0x313638323433303132373132332e6a7067, 'Susana Moctezuma', 'soy intrepida,, me gusta comer e ir al cine', 56546551),
(47, 'fgd@gffh', '$2y$10$y4CXfY9LArIlNguKmaQSlu.Aq3KzCgzVvG7LCOQyuLfX5QQ8s8OMO', 0x6d616b6569746d656d655f316f7754412e6a706567, 'fdsfss', 'ffgfdf', 84562);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login_db`
--
ALTER TABLE `login_db`
  ADD PRIMARY KEY (`Usuario`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login_db`
--
ALTER TABLE `login_db`
  MODIFY `Usuario` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
