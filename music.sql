-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 24 2023 г., 17:34
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `music`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `date` datetime NOT NULL,
  `status` text NOT NULL,
  `products_info` text NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `date`, `status`, `products_info`, `cost`, `comment`) VALUES
(2, 2, '2023-05-24 17:06:44', 'Новый', '3;8', '670166.00', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `about` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` text NOT NULL,
  `category` text NOT NULL,
  `country` text NOT NULL,
  `model` text NOT NULL,
  `year` int NOT NULL,
  `count` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `about`, `price`, `image`, `category`, `country`, `model`, `year`, `count`) VALUES
(1, 'Синтезатор', 'Прикольный синтезатор', '54411.00', 'eef58e896eb2b75fa6526e15a30c74f4', 'Клавишные', 'США', 'R2D2', 2015, 6),
(2, 'Бело-синяя гитара', 'Просто гитара', '9552.00', 'e9a917c442e68e8721fb6dcece67ea7c', 'Струнные', 'Китай', 'GA21', 2000, 0),
(3, 'Скрипка Страдивари', 'Очень старая скрипка', '654651.00', '64cfdacbf99b58def0266e5637f67a60', 'Смычковые', 'Италия', 'HDRTF3', 1771, 9),
(4, 'Скрипун', 'Умеет скрипеть, поскольку это скрипка', '16925.00', 'bc3f295c155fe95474fd70350b6860b7', 'Смычковые', 'США', 'FGO02', 2019, 90),
(5, 'Супер синтезатор', 'Очень классная штука', '61101.00', 'b39e8882d68fed2dce3984d12319718a', 'Клавишные', 'Китай', 'АО31', 1956, 6),
(6, 'Гитарка', 'Красивая гитара', '25116.00', 'ca41b0a3824f7aa1d155a726162e9f5d', 'Струнные', 'США', 'CV33', 2003, 945),
(7, 'Чудесная скрипка', 'Просто скрипка', '65441.00', 'b28b73ae0e2e324c2859b070762755e6', 'Смычковые', 'Италия', 'GOGA123', 2000, 85),
(8, 'Мини синтезатор', 'Маленький синтезатор', '15515.00', 'e1ff08ec4e7e75ce79595f17698b79fd', 'Клавишные', 'Италия', 'HS3', 2017, 52),
(9, 'Тоже гитара', 'Прикольная классная гитара', '56446.00', '6b8ff4aa5dbb588a6060bdd0aa681d06', 'Струнные', 'Китай', 'HSD30', 1984, 37),
(10, 'Светлая гитара', 'Ничем не отличается от других гитар', '81444.00', '9e1e3bf9c49924a6f73cf10b6f0d3a91', 'Струнные', 'Италия', 'KKQ', 2023, 41);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `patronymic` text,
  `login` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `patronymic`, `login`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin@admin.com', 'admin22'),
(2, '1', '1', '1', '1', '1@1', '1'),
(4, 'Иван', 'Иванов', 'Иванович', '555', '555@555', '123456');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
