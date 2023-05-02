-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 26 2022 г., 18:54
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_milk`
--

-- --------------------------------------------------------

--
-- Структура таблицы `диеты`
--

CREATE TABLE `диеты` (
  `ID_диеты` int(11) NOT NULL,
  `Тип_корма` text NOT NULL,
  `Масса_корма_в_день` int(11) NOT NULL,
  `Частота_кормления` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `диеты`
--

INSERT INTO `диеты` (`ID_диеты`, `Тип_корма`, `Масса_корма_в_день`, `Частота_кормления`) VALUES
(1, 'Сено бобовое', 2, 3),
(2, 'Сено злаковое', 4, 3),
(3, 'Солома яровая', 4, 4),
(4, 'Силос кукурузный', 7, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `коровы`
--

CREATE TABLE `коровы` (
  `ID_коровы` int(11) NOT NULL,
  `Вес` int(11) NOT NULL,
  `Дата_рождения` date NOT NULL,
  `ID_породы` int(11) NOT NULL,
  `Молока_ежедневно` int(11) NOT NULL,
  `№_загона` int(11) NOT NULL,
  `ID_диеты` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `коровы`
--

INSERT INTO `коровы` (`ID_коровы`, `Вес`, `Дата_рождения`, `ID_породы`, `Молока_ежедневно`, `№_загона`, `ID_диеты`) VALUES
(1, 540, '2019-02-04', 1, 10, 2, 1),
(2, 559, '2018-06-12', 1, 9, 17, 2),
(3, 510, '2017-02-28', 3, 8, 5, 4),
(4, 501, '2018-03-17', 3, 9, 8, 2),
(5, 555, '2016-12-21', 2, 7, 11, 1),
(6, 514, '2019-09-14', 4, 9, 1, 3),
(7, 528, '2019-09-14', 4, 9, 3, 2),
(8, 509, '2017-04-23', 6, 9, 16, 3),
(9, 509, '2018-11-14', 6, 9, 4, 1),
(10, 532, '2018-05-01', 4, 8, 13, 4),
(11, 538, '2020-01-03', 5, 7, 15, 4),
(12, 529, '2016-12-22', 1, 9, 9, 3),
(13, 519, '2017-10-19', 1, 10, 7, 2),
(14, 500, '2019-04-07', 1, 9, 12, 1),
(15, 540, '2018-01-08', 5, 8, 14, 1),
(16, 552, '2020-02-01', 2, 8, 6, 3),
(17, 548, '2017-09-17', 2, 9, 10, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `порода`
--

CREATE TABLE `порода` (
  `ID_породы` int(11) NOT NULL,
  `Название` text NOT NULL,
  `Средняя_производительность` int(11) NOT NULL,
  `Средний_вес` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `порода`
--

INSERT INTO `порода` (`ID_породы`, `Название`, `Средняя_производительность`, `Средний_вес`) VALUES
(1, 'Айрширская', 10, 550),
(2, 'Джерсейская', 9, 530),
(3, 'Голштинская', 9, 540),
(4, 'Красная датская', 8, 525),
(5, 'Швицкая', 8, 560),
(6, 'Чёрно-пёстрая', 9, 545);

-- --------------------------------------------------------

--
-- Структура таблицы `загоны`
--

CREATE TABLE `загоны` (
  `№_загона` int(11) NOT NULL,
  `№_цеха` int(11) NOT NULL,
  `ID_работника` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `загоны`
--

INSERT INTO `загоны` (`№_загона`, `№_цеха`, `ID_работника`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 1, 1),
(7, 2, 2),
(8, 2, 2),
(9, 2, 2),
(10, 2, 2),
(11, 2, 2),
(12, 2, 2),
(13, 3, 3),
(14, 3, 3),
(15, 3, 3),
(16, 3, 3),
(17, 3, 3),
(18, 3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `работники`
--

CREATE TABLE `работники` (
  `ID_работника` int(11) NOT NULL,
  `ФИО` text NOT NULL,
  `Дата_рождения` date NOT NULL,
  `№_паспорта` text NOT NULL,
  `Телефон` text NOT NULL,
  `ИНН` text NOT NULL,
  `Место_проживания` text NOT NULL,
  `Дата_начала_работы` date NOT NULL,
  `Зарплата` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `работники`
--

INSERT INTO `работники` (`ID_работника`, `ФИО`, `Дата_рождения`, `№_паспорта`, `Телефон`, `ИНН`, `Место_проживания`, `Дата_начала_работы`, `Зарплата`) VALUES
(1, 'Петухов Николай Аристархович', '1999-01-11', '7831983576', '89006311293', '961639789354', 'пр-кт Мира 42, кв. 74', '2021-08-06', '60000'),
(2, 'Николаев Борис Феликсович', '1990-05-23', '9813579826', '88129863267', '753693123967', 'ул. Ленина 4, кв. 21', '2020-04-13', '60000'),
(3, 'Агафонов Ираклий Яковлевич', '1996-09-09', '4697863612', '88127826517', '563982168697', 'пр-кт Героев 37, кв 113', '2019-03-17', '50000');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `диеты`
--
ALTER TABLE `диеты`
  ADD PRIMARY KEY (`ID_диеты`);

--
-- Индексы таблицы `коровы`
--
ALTER TABLE `коровы`
  ADD PRIMARY KEY (`ID_коровы`),
  ADD UNIQUE KEY `№_загона` (`№_загона`) USING BTREE,
  ADD KEY `ID_породы` (`ID_породы`) USING BTREE,
  ADD KEY `ID_диеты` (`ID_диеты`) USING BTREE;

--
-- Индексы таблицы `порода`
--
ALTER TABLE `порода`
  ADD PRIMARY KEY (`ID_породы`),
  ADD KEY `ID породы` (`ID_породы`);

--
-- Индексы таблицы `загоны`
--
ALTER TABLE `загоны`
  ADD PRIMARY KEY (`№_загона`),
  ADD KEY `ID работника` (`ID_работника`);

--
-- Индексы таблицы `работники`
--
ALTER TABLE `работники`
  ADD PRIMARY KEY (`ID_работника`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `диеты`
--
ALTER TABLE `диеты`
  MODIFY `ID_диеты` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `коровы`
--
ALTER TABLE `коровы`
  MODIFY `ID_коровы` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT для таблицы `порода`
--
ALTER TABLE `порода`
  MODIFY `ID_породы` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `загоны`
--
ALTER TABLE `загоны`
  MODIFY `№_загона` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `работники`
--
ALTER TABLE `работники`
  MODIFY `ID_работника` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `коровы`
--
ALTER TABLE `коровы`
  ADD CONSTRAINT `коровы_ibfk_1` FOREIGN KEY (`№_загона`) REFERENCES `загоны` (`№_загона`),
  ADD CONSTRAINT `коровы_ibfk_2` FOREIGN KEY (`ID_породы`) REFERENCES `порода` (`ID_породы`),
  ADD CONSTRAINT `коровы_ibfk_3` FOREIGN KEY (`ID_диеты`) REFERENCES `диеты` (`ID_диеты`);

--
-- Ограничения внешнего ключа таблицы `загоны`
--
ALTER TABLE `загоны`
  ADD CONSTRAINT `загоны_ibfk_1` FOREIGN KEY (`ID_работника`) REFERENCES `работники` (`ID_работника`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
