-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 13 2022 г., 14:53
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sql_learn`
--

-- --------------------------------------------------------

--
-- Структура таблицы `laptop`
--

CREATE TABLE `laptop` (
  `code` int NOT NULL,
  `model` int NOT NULL,
  `speed` int NOT NULL,
  `ram` int NOT NULL,
  `hd` int NOT NULL,
  `price` int NOT NULL,
  `screen` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `laptop`
--

INSERT INTO `laptop` (`code`, `model`, `speed`, `ram`, `hd`, `price`, `screen`) VALUES
(1, 1298, 350, 32, 4, 700, 11),
(2, 1321, 500, 64, 8, 970, 12),
(3, 1750, 750, 128, 12, 1200, 14),
(4, 1298, 600, 64, 10, 1050, 15),
(5, 1752, 750, 128, 10, 1150, 14),
(6, 1298, 450, 64, 10, 950, 12);

-- --------------------------------------------------------

--
-- Структура таблицы `pc`
--

CREATE TABLE `pc` (
  `code` int NOT NULL,
  `model` int NOT NULL,
  `speed` int NOT NULL,
  `ram` int NOT NULL,
  `hd` int NOT NULL,
  `cd` varchar(3) NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pc`
--

INSERT INTO `pc` (`code`, `model`, `speed`, `ram`, `hd`, `cd`, `price`) VALUES
(1, 1232, 500, 64, 5, '12x', 600),
(10, 1260, 500, 32, 10, '12x', 350),
(11, 1233, 900, 128, 40, '40x', 980),
(12, 1233, 800, 128, 20, '50x', 970),
(2, 1121, 750, 128, 14, '40x', 850),
(3, 1233, 500, 64, 5, '12x', 600),
(4, 1121, 600, 128, 14, '40x', 850),
(5, 1121, 600, 128, 8, '40x', 850),
(6, 1233, 750, 128, 20, '50x', 950),
(7, 1232, 500, 32, 10, '12x', 400),
(8, 1232, 450, 64, 8, '24x', 350),
(9, 1232, 450, 32, 10, '24x', 350);

-- --------------------------------------------------------

--
-- Структура таблицы `printer`
--

CREATE TABLE `printer` (
  `code` int NOT NULL,
  `model` int NOT NULL,
  `color` varchar(1) NOT NULL,
  `type` varchar(6) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `printer`
--

INSERT INTO `printer` (`code`, `model`, `color`, `type`, `price`) VALUES
(1, 1276, 'n', 'Laser', 400),
(2, 1433, 'y', 'Jet', 270),
(3, 1434, 'y', 'Jet', 290),
(4, 1401, 'n', 'Matrix', 150),
(5, 1408, 'n', 'Matrix', 270),
(6, 1288, 'n', 'Laser', 400);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `maker` varchar(1) NOT NULL,
  `model` int NOT NULL,
  `type` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`maker`, `model`, `type`) VALUES
('A', 1232, 'PC'),
('A', 1233, 'PC'),
('A', 1276, 'Printer'),
('A', 1298, 'Laptop'),
('A', 1401, 'Printer'),
('A', 1408, 'Printer'),
('A', 1752, 'Laptop'),
('B', 1121, 'PC'),
('B', 1750, 'Laptop'),
('C', 1321, 'Laptop'),
('D', 1288, 'Printer'),
('D', 1433, 'Printer'),
('E', 1260, 'PC'),
('E', 1434, 'Printer'),
('E', 2112, 'PC'),
('E', 2113, 'PC');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
