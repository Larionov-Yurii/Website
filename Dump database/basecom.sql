-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3308
-- Время создания: Сен 20 2020 г., 19:30
-- Версия сервера: 8.0.18
-- Версия PHP: 7.4.0

 SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `basecom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `userID`, `name`, `comment`, `date`) VALUES
(103, 6, 'Superman', 'I recommend this shop for true champions ', '2020-08-28 16:00:10'),
(118, 8, 'Bein', 'Cool shop ', '2020-09-16 21:28:56'),
(127, 7, 'Batman', 'Interesting shop ', '2020-09-20 21:48:11'),
(128, 7, 'Batman', 'Untypical shop ', '2020-09-20 21:48:36');

-- --------------------------------------------------------

--
-- Структура таблицы `new users`
--

DROP TABLE IF EXISTS `new users`;
CREATE TABLE IF NOT EXISTS `new users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `new users`
--

INSERT INTO `new users` (`id`, `login`, `email`, `password`) VALUES
(6, 'Superman', 'Superman@gmail.com', '$2y$10$spSaXXXeCHvVhPhruif2Lu8cZOOFjCT0jIemqucLbzbaJmP0C2R5S'),
(7, 'Batman', 'Batman@ukr.net', '$2y$10$U9gEqFms.0VUr7P77QKGZurWJGtAXz1FPV1eKmID6FqaXlXIP7V/i'),
(8, 'Bein', 'Bein@gugu.ua', '$2y$10$oiFqKhQfshjp7n0II7xkM..icDRfB6xtpj60bX/IgKGokBSNEJn4S');

-- --------------------------------------------------------

--
-- Структура таблицы `replycom`
--

DROP TABLE IF EXISTS `replycom`;
CREATE TABLE IF NOT EXISTS `replycom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL,
  `userID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userID` (`userID`),
  KEY `commentID` (`commentID`)
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=utf8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `new users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `replycom`
--
ALTER TABLE `replycom`
  ADD CONSTRAINT `replycom_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `new users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `replycom_ibfk_2` FOREIGN KEY (`commentID`) REFERENCES `comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
