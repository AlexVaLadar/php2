-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 10 2018 г., 10:34
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ShopOnline`
--

-- --------------------------------------------------------

--
-- Структура таблицы `good`
--

CREATE TABLE `good` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `full_src` varchar(255) NOT NULL,
  `small_src` varchar(255) NOT NULL,
  `available` int(11) NOT NULL,
  `seen_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `good`
--

INSERT INTO `good` (`id`, `title`, `description`, `price`, `full_src`, `small_src`, `available`, `seen_count`) VALUES
(1, 'Pinarello Dogma 2', 'The Dogma 2 featured aerodynamic improvements which increased the efficiency of the frame', 3199, 'img/item1.jpg', 'img/small/item1.jpg', 5, 0),
(2, 'Pinarello Dogma K', 'The Pinarello Dogma K features Pinarellos \'Century Ride\' geometry and uses frame design that provides increased comfort without compromising the overall performance', 4999, 'img/item2.jpg', 'img/small/item2.jpg', 3, 0),
(3, 'Pinarello Prince Easy Fit Ultegra Bike', 'The frames focus around a completely asymmetric design made entirely of 60HM1K carbon fibre, with the right hand side of the Dogma frame is different in shape and section to that of the left side, thus providing increased rigidity against forces placed upon the frame by the action of pedalling', 4150, 'img/item5.jpg', 'img/small/item5.jpg', 3, 0),
(4, 'Pinarello Prince FX Dura Ace Bike', 'Prince frames are the latest evolution of the allround bike from Pinarello for a wide range of users', 6999, 'img/item6.jpg', 'img/small/item6.jpg', 1, 0),
(5, 'Pinarello Dogma K8 Shimano Dura-Ace', 'Designed in collaboration with Team Sky the Pinarello K8 has all the aero tech, weight advantage and ride quality of the F8 but a geometry designed to take the pro\'s across the cobbles and you anywhere', 7949, 'img/item3.jpg', 'img/small/item3.jpg', 2, 0),
(6, 'SIDI Road', 'MICROFIBRA TECHPRO is a microfiber PU Made in Italy. It is considered a highly technological and innovative, eco-friendly leather suitable for technical and sports products which require high performance levels. TECHPRO MICROFIBER incorporates features of resistancy, stability, lightness, water-repellency and eco-friendliness.', 199, 'img/item4.jpg', 'img/small/item4.jpg', 4, 0),
(7, 'Pinarello1', 'additional content', 4000, 'img/item1.jpg', 'img/small/item1.jpg', 1, 0),
(8, 'Pinarello2', 'additional content', 4000, 'img/item2.jpg', 'img/small/item2.jpg', 1, 0),
(9, 'Pinarello3', 'additional content', 4000, 'img/item3.jpg', 'img/small/item3.jpg', 1, 0),
(10, 'Pinarello4', 'additional content', 4000, 'img/item4.jpg', 'img/small/item4.jpg', 1, 0),
(11, 'Pinarello5', 'additional content', 4000, 'img/item5.jpg', 'img/small/item5.jpg', 1, 0),
(12, 'Pinarello6', 'additional content', 4000, 'img/item6.jpg', 'img/small/item6.jpg', 1, 0),
(13, 'Pinarello1', 'additional content', 4000, 'img/item1.jpg', 'img/small/item1.jpg', 1, 0),
(14, 'Pinarello2', 'additional content', 4000, 'img/item2.jpg', 'img/small/item2.jpg', 1, 0),
(15, 'Pinarello3', 'additional content', 4000, 'img/item3.jpg', 'img/small/item3.jpg', 1, 0),
(16, 'Pinarello4', 'additional content', 4000, 'img/item4.jpg', 'img/small/item4.jpg', 1, 0),
(17, 'Pinarello5', 'additional content', 4000, 'img/item5.jpg', 'img/small/item5.jpg', 1, 0),
(18, 'Pinarello6', 'additional content', 4000, 'img/item6.jpg', 'img/small/item6.jpg', 1, 0),
(19, 'Pinarello1', 'additional content', 4000, 'img/item1.jpg', 'img/small/item1.jpg', 1, 0),
(20, 'Pinarello2', 'additional content', 4000, 'img/item2.jpg', 'img/small/item2.jpg', 1, 0),
(21, 'Pinarello3', 'additional content', 4000, 'img/item3.jpg', 'img/small/item3.jpg', 1, 0),
(22, 'Pinarello4', 'additional content', 4000, 'img/item4.jpg', 'img/small/item4.jpg', 1, 0),
(23, 'Pinarello5', 'additional content', 4000, 'img/item5.jpg', 'img/small/item5.jpg', 1, 0),
(24, 'Pinarello6', 'additional content', 4000, 'img/item6.jpg', 'img/small/item6.jpg', 1, 0),
(25, 'Pinarello1', 'additional content', 4000, 'img/item1.jpg', 'img/small/item1.jpg', 1, 0),
(26, 'Pinarello2', 'additional content', 4000, 'img/item2.jpg', 'img/small/item2.jpg', 1, 0),
(27, 'Pinarello3', 'additional content', 4000, 'img/item3.jpg', 'img/small/item3.jpg', 1, 0),
(28, 'Pinarello4', 'additional content', 4000, 'img/item4.jpg', 'img/small/item4.jpg', 1, 0),
(29, 'Pinarello5', 'additional content', 4000, 'img/item5.jpg', 'img/small/item5.jpg', 1, 0),
(30, 'Pinarello6', 'additional content', 4000, 'img/item6.jpg', 'img/small/item6.jpg', 1, 0),
(31, 'Pinarello1', 'additional content', 4000, 'img/item1.jpg', 'img/small/item1.jpg', 1, 0),
(32, 'Pinarello2', 'additional content', 4000, 'img/item2.jpg', 'img/small/item2.jpg', 1, 0),
(33, 'Pinarello3', 'additional content', 4000, 'img/item3.jpg', 'img/small/item3.jpg', 1, 0),
(34, 'Pinarello4', 'additional content', 4000, 'img/item4.jpg', 'img/small/item4.jpg', 1, 0),
(35, 'Pinarello5', 'additional content', 4000, 'img/item5.jpg', 'img/small/item5.jpg', 1, 0),
(36, 'Pinarello6', 'additional content', 4000, 'img/item6.jpg', 'img/small/item6.jpg', 1, 0),
(37, 'Pinarello1', 'additional content', 4000, 'img/item1.jpg', 'img/small/item1.jpg', 1, 0),
(38, 'Pinarello2', 'additional content', 4000, 'img/item2.jpg', 'img/small/item2.jpg', 1, 0),
(39, 'Pinarello3', 'additional content', 4000, 'img/item3.jpg', 'img/small/item3.jpg', 1, 0),
(40, 'Pinarello4', 'additional content', 4000, 'img/item4.jpg', 'img/small/item4.jpg', 1, 0),
(41, 'Pinarello5', 'additional content', 4000, 'img/item5.jpg', 'img/small/item5.jpg', 1, 0),
(42, 'Pinarello6', 'additional content', 4000, 'img/item6.jpg', 'img/small/item6.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `order_tab`
--

CREATE TABLE `order_tab` (
  `id` int(11) NOT NULL,
  `id_good` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `login` varchar(128) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `login` varchar(128) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `good`
--
ALTER TABLE `good`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `order_tab`
--
ALTER TABLE `order_tab`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `order_user` (`id_user`),
  ADD KEY `order_good` (`id_good`);

--
-- Индексы таблицы `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `user_review` (`login`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `good`
--
ALTER TABLE `good`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `order_tab`
--
ALTER TABLE `order_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order_tab`
--
ALTER TABLE `order_tab`
  ADD CONSTRAINT `order_good` FOREIGN KEY (`id_good`) REFERENCES `good` (`id`),
  ADD CONSTRAINT `order_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Ограничения внешнего ключа таблицы `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `user_review` FOREIGN KEY (`login`) REFERENCES `user` (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
