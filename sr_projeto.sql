-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 25-Mar-2021 às 14:52
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sr_projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`) VALUES
(14, 'Edie'),
(13, 'Damon'),
(12, 'Charlie'),
(11, 'Bob'),
(10, 'Alice');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_movies`
--

DROP TABLE IF EXISTS `user_movies`;
CREATE TABLE IF NOT EXISTS `user_movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `movie_rating` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user_movies`
--

INSERT INTO `user_movies` (`id`, `user_id`, `movie_name`, `movie_rating`) VALUES
(14, 11, 'Before sunset', '2'),
(13, 11, 'Garden State', '5'),
(12, 11, 'Rockey', '2'),
(11, 11, 'Rambo', '2'),
(10, 10, 'Garden State', '2'),
(9, 10, 'Rockey', '3'),
(8, 10, 'Rambo', '5'),
(15, 12, 'Rambo', '2'),
(16, 12, 'Before sunset', '4'),
(17, 12, 'Training day', '4'),
(18, 12, 'Thor', '5'),
(19, 13, 'Rambo', '5'),
(20, 13, 'Garden State', '3'),
(21, 13, 'Before sunset', '4'),
(22, 14, 'Rambo', '4'),
(23, 14, 'Rockey', '3'),
(24, 14, 'Garden State', '2'),
(25, 14, 'Before sunset', '4'),
(26, 14, 'Training day', '3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
