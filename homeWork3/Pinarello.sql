-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 05 2018 г., 22:20
-- Версия сервера: 5.6.38
-- Версия PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Pinarello`
--

-- --------------------------------------------------------

--
-- Структура таблицы `image_tab`
--

CREATE TABLE `image_tab` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `way_full` varchar(535) NOT NULL,
  `way_small` varchar(535) NOT NULL,
  `size` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `image_tab`
--

INSERT INTO `image_tab` (`id`, `title`, `way_full`, `way_small`, `size`) VALUES
(1, 'pin1', 'photo/1.jpg', 'photo/small/1.jpg', '12*18'),
(2, 'pin2', 'photo/2.jpg', 'photo/small/2.jpg', '12*18'),
(3, 'pin3', 'photo/3.jpg', 'photo/small/3.jpg', '12*18'),
(4, 'pin4', 'photo/4.jpg', 'photo/small/4.jpg', '12*18'),
(5, 'pin5', 'photo/5.jpg', 'photo/small/5.jpg', '12*18'),
(6, 'pin6', 'photo/6.jpg', 'photo/small/6.jpg', '12*18');

-- --------------------------------------------------------

--
-- Структура таблицы `view_tab`
--

CREATE TABLE `view_tab` (
  `id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `image_tab`
--
ALTER TABLE `image_tab`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `view_tab`
--
ALTER TABLE `view_tab`
  ADD PRIMARY KEY (`id`) KEY_BLOCK_SIZE=11,
  ADD KEY `photo_id` (`photo_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `image_tab`
--
ALTER TABLE `image_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `view_tab`
--
ALTER TABLE `view_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `view_tab`
--
ALTER TABLE `view_tab`
  ADD CONSTRAINT `view_tab_ibfk_1` FOREIGN KEY (`photo_id`) REFERENCES `image_tab` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
