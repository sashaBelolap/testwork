-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 09 2021 г., 20:17
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testbase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about` text,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `name`, `about`, `created_at`, `updated_at`) VALUES
(1, 'Лев Толстой', '1828-1910 ', '2021-03-07 07:18:00', '2021-03-08 15:56:07'),
(2, 'Джордж Оруэлл', '1903-1950 ', '2021-03-06 04:30:00', '2021-03-08 16:04:48'),
(3, 'Джеймс Джойс', '1882-1941 ', '2021-03-06 04:30:00', '2021-03-08 16:05:19'),
(4, 'Владимир Набоков', '1899-1977', '2021-03-06 04:30:00', NULL),
(5, 'Уильям Фолкнер', '1897-1962', '2021-03-07 10:23:00', NULL),
(6, 'Ральф Эллисон', '1914-1994', '2021-03-07 10:23:00', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` int(11) NOT NULL,
  `year` varchar(50) DEFAULT NULL,
  `genre` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `year`, `genre`, `created_at`, `updated_at`) VALUES
(9, 'Война и мир', 1, '1869', 'роман', '2021-03-07 07:18:00', '2021-03-08 16:00:41'),
(10, '1984', 2, '1949', 'роман', '2021-03-06 04:30:00', '2021-03-08 16:01:06'),
(11, 'Улисс', 3, '1922', '', '2021-03-06 04:30:00', '2021-03-08 16:02:07'),
(12, 'Лолита', 4, '1955', 'роман', '2021-03-06 04:30:00', '2021-03-08 16:02:25'),
(13, 'Шум и ярость', 5, '1929', ' ', '2021-03-07 10:23:00', '2021-03-08 16:03:23'),
(14, 'Невидимка', 6, '1952', ' ', '2021-03-07 10:23:00', '2021-03-08 16:03:38'),
(21, 'Анна Каренина', 1, '1878', 'роман ', '2021-03-07 10:23:00', '2021-03-08 16:03:53');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
