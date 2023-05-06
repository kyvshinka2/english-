-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 06 2023 г., 08:02
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
-- База данных: `English_School`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Class`
--

CREATE TABLE `Class` (
  `ID` int NOT NULL COMMENT 'AUTO_INCREMENT',
  `ID student` int NOT NULL,
  `ID teacher` int NOT NULL,
  `Date` date NOT NULL,
  `Type of activity` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Class`
--

INSERT INTO `Class` (`ID`, `ID student`, `ID teacher`, `Date`, `Type of activity`) VALUES
(1, 1, 1, '2023-04-13', 'Урок');

-- --------------------------------------------------------

--
-- Структура таблицы `Feedback`
--

CREATE TABLE `Feedback` (
  `ID` int NOT NULL,
  `Log_In` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Comment` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Feedback`
--

INSERT INTO `Feedback` (`ID`, `Log_In`, `Comment`) VALUES
(4, 'chern123', 'Школа самая лучшая, спасибо вам'),
(22, 'baz123', 'Школа принесла мне немало знаний, я научился понимать фильмы на английском языке и даже разговаривать с иностранцами'),
(23, 'kuasb123', 'Ужос'),
(24, 'Nastya123', 'Какая хорошая школа'),
(25, 'Migula228', 'Крутая школа');

-- --------------------------------------------------------

--
-- Структура таблицы `Product`
--

CREATE TABLE `Product` (
  `ID` int NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Content` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Product`
--

INSERT INTO `Product` (`ID`, `Name`, `Content`, `ID_Type`) VALUES
(1, 'Общий Разговорный', 'Словарь', 1),
(2, 'Английский с нуля', 'Видео-курс', 2),
(3, 'Бизнес-английский', 'Учебник', 1),
(4, 'Подготовка к собесу', 'Урок с учителем', 3),
(5, 'Общий Разговорный', 'Общий курс', 4),
(6, 'Английский для начинающих', 'Для начинающих', 4),
(7, 'Бизнес-английский', 'Собеседования, работа', 4),
(8, 'Английский для детей', 'Учим с малых лет', 4),
(9, 'Английский для путешествий', 'Бронь отеля, общение с иностранцами', 4),
(10, 'Общий Разговорный', 'Пиши, читай, говори', 4),
(11, 'Подготовка к собеседованию', 'Собеседование', 4),
(12, 'Подготовка к экзаменам', 'Экзамены', 4),
(13, 'Английский язык', 'Артемий Беляев', 1),
(14, 'Английский язык [Базовый курс]', 'Валерий Долгановский', 1),
(15, 'Английский язык [Быстро расширяем словарный запас]', 'Сергей Сапцов, Татьяна Сапцова', 1),
(16, 'Английский язык для медиков', 'Елена Владимировна Беликова', 1),
(17, 'Английский язык с Г. Уэллсом. Человек-невидимка', 'Герберт Уэллс', 1),
(18, 'Английский язык', 'Артемий Беляев', 1),
(19, 'Английский язык [Базовый курс]', 'Валерий Долгановский', 1),
(20, 'Английский язык [Быстро расширяем словарный запас]', 'Сергей Сапцов, Татьяна Сапцова', 1),
(21, 'Английский язык для медиков', 'Елена Владимировна Беликова', 1),
(22, 'Английский язык с Г. Уэллсом. Человек-невидимка', 'Герберт Уэллс', 1),
(23, 'Английский язык \"Путешествия Гулливера\"', 'Джонатан Свифт', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `Product_Type`
--

CREATE TABLE `Product_Type` (
  `ID` int NOT NULL,
  `Type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Product_Type`
--

INSERT INTO `Product_Type` (`ID`, `Type`) VALUES
(1, 'Книга'),
(2, 'Видео'),
(3, 'Урок'),
(4, 'Курс');

-- --------------------------------------------------------

--
-- Структура таблицы `Purchase history`
--

CREATE TABLE `Purchase history` (
  `ID` int NOT NULL,
  `ID_Product` int NOT NULL,
  `ID_Student` int NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Purchase history`
--

INSERT INTO `Purchase history` (`ID`, `ID_Product`, `ID_Student`, `Date`) VALUES
(1, 1, 1, '2023-04-12'),
(2, 2, 1, '2023-04-10');

-- --------------------------------------------------------

--
-- Структура таблицы `Student`
--

CREATE TABLE `Student` (
  `ID` int NOT NULL,
  `Full name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Log_In` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Student`
--

INSERT INTO `Student` (`ID`, `Full name`, `Log_In`, `Password`) VALUES
(1, 'Владислав Томашевский', 'Vlad', '123456'),
(2, 'Вильгаук Анастасия Андреевна', 'vilgauck123', '123456'),
(3, 'Чернышев Николай Васильевич', 'chern123', '$2y$10$Cp4SdqJ1P3lWFZvcYtOZV.eTmGO5TG36eBwOaHA6Xew5yXurVVW8S'),
(4, 'Бузуев Никита Сергеевич', 'baz123', '$2y$10$Td4AlRs/DSGbypSTwWEsYeROXB/HrNiDgqMC7SafBu0M81YrYCSpK'),
(5, 'Титенок Анастасия', 'tit123', '$2y$10$9NNTgwHbsQMp5n2lHSlRaO5QP5bdV336cCSp7l1gfLSDF42Q.l5I2'),
(6, 'Пахомов Ярослав', 'are123', '$2y$10$SELBpV590KPE1w9RI1L/Reo3e2VokTOR3oqtctuo62NpAffJsNAGe');

-- --------------------------------------------------------

--
-- Структура таблицы `Teacher`
--

CREATE TABLE `Teacher` (
  `ID` int NOT NULL,
  `Full_Name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diploma` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Number` int NOT NULL,
  `City` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Teacher`
--

INSERT INTO `Teacher` (`ID`, `Full_Name`, `Diploma`, `Number`, `City`) VALUES
(1, 'Екатерина Е.В', 'ЧЕлГУ', 89541023, 'Челябинск'),
(2, 'Василиса В.К', 'ЮУРГУ', 84512073, 'Москва'),
(3, 'Радия Е.А', 'ЮУМК', 84510247, 'Питер');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Class`
--
ALTER TABLE `Class`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID student` (`ID student`),
  ADD KEY `ID teacher` (`ID teacher`);

--
-- Индексы таблицы `Feedback`
--
ALTER TABLE `Feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Type` (`ID_Type`);

--
-- Индексы таблицы `Product_Type`
--
ALTER TABLE `Product_Type`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `Purchase history`
--
ALTER TABLE `Purchase history`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Product` (`ID_Product`),
  ADD KEY `ID_Student` (`ID_Student`);

--
-- Индексы таблицы `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `Teacher`
--
ALTER TABLE `Teacher`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Class`
--
ALTER TABLE `Class`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT COMMENT 'AUTO_INCREMENT', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Feedback`
--
ALTER TABLE `Feedback`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `Product`
--
ALTER TABLE `Product`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `Product_Type`
--
ALTER TABLE `Product_Type`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `Purchase history`
--
ALTER TABLE `Purchase history`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Student`
--
ALTER TABLE `Student`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `Teacher`
--
ALTER TABLE `Teacher`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Class`
--
ALTER TABLE `Class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`ID student`) REFERENCES `Student` (`ID`),
  ADD CONSTRAINT `class_ibfk_2` FOREIGN KEY (`ID teacher`) REFERENCES `Teacher` (`ID`);

--
-- Ограничения внешнего ключа таблицы `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ID_Type`) REFERENCES `Product_Type` (`ID`);

--
-- Ограничения внешнего ключа таблицы `Purchase history`
--
ALTER TABLE `Purchase history`
  ADD CONSTRAINT `purchase history_ibfk_1` FOREIGN KEY (`ID_Product`) REFERENCES `Product` (`ID`),
  ADD CONSTRAINT `purchase history_ibfk_2` FOREIGN KEY (`ID_Student`) REFERENCES `Student` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
