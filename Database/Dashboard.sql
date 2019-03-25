-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 25 2019 г., 16:28
-- Версия сервера: 10.1.35-MariaDB
-- Версия PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Dashboard`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Groups`
--

CREATE TABLE `Groups` (
  `ID` int(11) NOT NULL,
  `Team` varchar(10) DEFAULT NULL,
  `Password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `Groups`
--

INSERT INTO `Groups` (`ID`, `Team`, `Password`) VALUES
(1, 'IT1A', 'robotA'),
(2, 'IT1B', 'robotB'),
(3, 'IT1C', 'robotC'),
(4, 'IT1D', 'robotD'),
(5, 'IT1E', 'robotE');

-- --------------------------------------------------------

--
-- Структура таблицы `Scoreboard`
--

CREATE TABLE `Scoreboard` (
  `Team` varchar(10) NOT NULL,
  `ObstacleRace` int(11) DEFAULT NULL,
  `Sumo` int(11) DEFAULT NULL,
  `FollowTheLine` int(11) DEFAULT NULL,
  `Football` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `Scoreboard`
--

INSERT INTO `Scoreboard` (`Team`, `ObstacleRace`, `Sumo`, `FollowTheLine`, `Football`) VALUES
('IT1A', 10, 1, 4, 5),
('IT1B', 5, 1, 4, 5),
('IT1C', 10, 1, 4, 5),
('IT1D', 10, 1, 4, 5),
('IT1E', 10, 1, 4, 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Groups`
--
ALTER TABLE `Groups`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `Scoreboard`
--
ALTER TABLE `Scoreboard`
  ADD PRIMARY KEY (`Team`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Groups`
--
ALTER TABLE `Groups`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
