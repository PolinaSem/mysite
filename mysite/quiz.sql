-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 03 2022 г., 14:02
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `quiz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `quiz`
--

CREATE TABLE `quiz` (
  `id` int NOT NULL,
  `que` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `option 1` varchar(222) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `option 2` varchar(222) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `option 3` varchar(222) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `option 4` varchar(222) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ans` varchar(222) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `userans` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'MULTI'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `quiz`
--

INSERT INTO `quiz` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`, `type`) VALUES
(1, 'Перечислите средства защиты кожи при уборки помещения:', 'Ватно-марлевая повязка', 'Респиратор, противогаз, спецодежда', 'Спецодежда, мази, перчатки', 'Защита не требуется', 'Спецодежда, мази, перчатки', 'Респиратор, противогаз, спецодежда', 'MULTI'),
(2, 'При уборке следует учитывать следующие нормы безопасности?', 'Не применять легковоспламеняющиеся жидкости', 'Не протирать влажной тряпкой электро-розетки и электроприборы, находящиеся под напряжением', 'Не применять уборочный материал, предназначенный для уборки туалетов в других помещениях', 'Все перечисленное', 'Все перечисленное', 'Все перечисленное', 'MULTI'),
(3, 'Укажите верную цветовую кодировку инвентаря для уборки пола:', 'Красный цвет - для уборки пола', 'Красный цвет - для уборки оборудования', 'Сини цвет - для уборки пола', 'Синий цвет - для уборки оборудования', 'Красный цвет - для уборки пола', 'Красный цвет - для уборки оборудования', 'MULTI'),
(4, 'Чем эффективнее протереть стекло, чтоб не оставалось разводов?', 'Бумажные полотенца, влажные салфетки, вискоза', 'Изделия из микрофибры, вискозы, искусственной замши', 'Изделия из хлопка, шерсти, ветоши', 'Любым изделием, выше перечисленным', 'Изделия из микрофибры, вискозы, искусственной замши', 'Изделия из микрофибры, вискозы, искусственной замши', 'MULTI'),
(5, 'Опасные и вредные производственные факторы:', 'Скользкий пол', 'Термические факторы', 'Движущиеся механизмы, детали и узлы оборудования', 'Все ответы верны', 'Все ответы верны', 'Скользкий пол', 'MULTI');

-- --------------------------------------------------------

--
-- Структура таблицы `quiz2`
--

CREATE TABLE `quiz2` (
  `id` int NOT NULL,
  `que` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `option 1` varchar(222) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `option 2` varchar(222) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `option 3` varchar(222) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `option 4` varchar(222) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ans` varchar(222) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `userans` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'MULTI'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `quiz2`
--

INSERT INTO `quiz2` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`, `type`) VALUES
(1, 'Как активизировать старого клиента?', 'позвонить и поинтересоваться, как у него дела', 'предложить ему новую услугу', 'предложить услугу, которая будет дополнением к ранее сделанной им покупке', 'не стоит о нем вспоминать', 'предложить услугу, которая будет дополнением к ранее сделанной им покупке', 'предложить услугу, которая будет дополнением к ранее сделанной им покупке', 'MULTI'),
(2, 'Работая в режиме личных продаж, успешный продавец ищет клиентов среди:', 'тех, кто звонит и приходит в вашу компанию', 'своих друзей и знакомых', 'людей \"с улицы\"', 'всех потенциальных клиентов, у которых может возникнуть потребности в вашем товаре', 'всех потенциальных клиентов, у которых может возникнуть потребности в вашем товаре', 'всех потенциальных клиентов, у которых может возникнуть потребности в вашем товаре', 'MULTI'),
(3, 'Как вы считаете, должен ли менеджер по продажам повышать свою квалификацию на специальных тренингах и самостоятельно?(да/нет)', 'NULL', 'NULL', 'NULL', 'NULL', 'да', 'да', 'SHORT'),
(4, 'Менеджер по продажам должен быть ориентирован:', 'исключительно на индивидуальную работу', 'на взаимодействие с командой', 'на выполнение должностных обязанностей', '50% - на выполнение должностных обязанностей, 50% - на взаимодействие с командой', '50% - на выполнение должностных обязанностей, 50% - на взаимодействие с командой', '50% - на выполнение должностных обязанностей, 50% - на взаимодействие с командой', 'MULTI'),
(5, 'Продолжительность рабочего времени работника не может превышать:', '36 часов в неделю', '40 часов в неделю', '35 часов в неделю', '32 часов в неделю', '40 часов в неделю', '40 часов в неделю', 'MULTI');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `option 1` (`option 1`);

--
-- Индексы таблицы `quiz2`
--
ALTER TABLE `quiz2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `option 1` (`option 1`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
