-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-05-2022 a las 17:12:17
-- Versión del servidor: 5.7.37-cll-lve
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cga81478_bddcesfam`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `nombreProducto` varchar(25) DEFAULT NULL,
  `fabricaProducto` varchar(25) DEFAULT NULL,
  `descripcionProducto` varchar(250) DEFAULT NULL,
  `cantidadProducto` varchar(20) DEFAULT NULL,
  `gramajeProducto` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombreProducto`, `fabricaProducto`, `descripcionProducto`, `cantidadProducto`, `gramajeProducto`) VALUES
(52, 'paraetamos', 'chile', 'dolor', '23', '500gr'),
(53, 'antobioticos', 'chile', 'antiflama', '55 unidades', '300gr'),
(54, 'ketamina', 'OMS', 'InhalaciÃ³n (ga', '255', '50 mg'),
(55, 'CODEINA', 'BRRRRRRR', 'la que usa el duki', '420', 'mucha');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'jose', '$2y$10$rQuCO0dCs7Dz6PtbU162r.S8qWh2VHHshX4LRBYYAmEd/lUMyXPFi', '2022-05-02 13:00:29'),
(2, 'nicolas123', '$2y$10$eg25EmVcnyU42yUSsa6b1uP1B7GPBR2CHPTue9pfX2eXSm3G7Lqp2', '2022-05-02 13:01:19'),
(3, 'marco', '$2y$10$P4XtxftR73n2uGnN/By0hOJdbddwU4khi.iDGWiiG2fD4YPF0MRaO', '2022-05-02 13:03:54'),
(4, 'dani.valdebenito', '$2y$10$WionMiJtLrsgXUnnyngfauj7oXdMVWS0IC7UxASFjuqEeHiYIV9Tu', '2022-05-02 13:04:39'),
(5, 'marcoo', '$2y$10$DEn15.fJvCxkigpFAdPp5eXulw/NAMCZPsXEEmjOkvPRpEaCvtzBm', '2022-05-02 13:09:51'),
(6, 'danilo el huaso', '$2y$10$dvTCWbG04zbk4ihYfV7LJOjp2c0qnwQfgrNcSZalSZY.FgO8knoqO', '2022-05-03 11:29:20'),
(7, 'juancho', '$2y$10$7MUbzDTzuBPQDyG9rE0/xeMRC9IJ9OryceLRS9EC5Xn9JYM7S2KAm', '2022-05-03 11:39:46'),
(8, 'danilo2', '$2y$10$JLMmggqD6tq6KfJHpxRE6erJ71.W6B0BrxgJtmxSVOlqHlfLoEILK', '2022-05-09 13:01:49');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
