-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-12-2022 a las 05:22:48
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
-- Base de datos: `cmslucas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`) VALUES
(0, 4, 12),
(0, 4, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_description` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_likes` int(255) NOT NULL,
  `post_author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_description`, `post_image`, `post_date`, `post_likes`, `post_author`) VALUES
(11, 'Viaje al Coliseo', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. ', 'hermoso-paisaje-coliseo-roma-maravillas-mundo-noche-italia_501530-8435.jpg', '2022-12-24', 3, 'LucasAbbona'),
(12, 'Viaje a España', 'España es un país transcontinental situado en el suroeste de Europa y en el norte de África. Además de ocupar la mayor parte de la península ibérica, España está formada por dos archipiélagos (el de las islas Canarias en el océano Atlántico y el de las islas Baleares en el mar Mediterráneo) y dos ciudades autónomas (Ceuta y Melilla) en el norte de África, aparte de varias islas menores', '37f93c7924cb320de906a1f1b9f4e12a.jpg', '2022-12-24', 2, 'LucasAbbona'),
(13, 'Trip to Paris', 'La ciudad de París, dentro de sus estrechos límites administrativos, tiene una población de 2 273 305 habitantes en 2015.2​ Sin embargo, en el siglo xx, el área metropolitana de París se expandió más allá de los límites del municipio de París, y es hoy en día, con una población de 12 405 426 habitantes en 2013, la segunda área metropolitana del continente europeo (después de Londres) y la 28 del mundo', 'paris_37bc088a_1280x720.jpg', '2022-12-24', 0, 'LucasAbbona'),
(14, 'Viaje a Zurich', 'my trip to zurich', 'a24-547543_1000x837.jpg', '2022-12-26', 0, 'LucasAbbona'),
(15, 'Viaje a Miami', 'This is my trip to miami where i bought some clothes and drove arround the streets with my Porche', 'CM2WQLPQZFDSZAOG2CG6NYYB4A.jpeg', '2022-12-28', 2, 'CR7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_email`, `user_password`, `user_image`) VALUES
(1, 'Lucas', 'rayo@example.com', '$2y$10$UXel3Na8elnGmT9TxjB96uTRkcqIApIL0IB6Wb1jEbOpmMH3iCvCm', '16473384290007.jpg'),
(3, 'LucasAbbona', 'lucasabbona@example.com', '$2y$10$qUoCBM3icYm7N7Fd0GyBiuG.HAdXT7XzzqLT36/kXGycusP0aPwk.', '585e4bd7cb11b227491c3397.png'),
(4, 'CR7', 'asdasdas@asdas.com', '$2y$10$iw4H7Ig0uICdkyvrp1sNbekUSlEc5huikV9cvdHI9OL.ORfWUcIeG', 'cristiano-ronaldo.352c95f5.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
