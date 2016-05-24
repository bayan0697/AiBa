-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 24 2016 г., 05:23
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `br`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(1) NOT NULL,
  `name` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `last_log` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `last_log`) VALUES
(1, 'aiba', '68f9140a6e421c23a000e03e9116c958', '2016-05-17 11:12:29');

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int(7) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `status` enum('ÐÐµ Ð¿Ð¾ÐºÐ°Ð·Ð°Ð½Ð¾','ÐŸÐ¾ÐºÐ°Ð·Ð°Ð½Ð¾') NOT NULL DEFAULT 'ÐÐµ Ð¿Ð¾ÐºÐ°Ð·Ð°Ð½Ð¾',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `full_name`, `email`, `comment`, `status`, `date`) VALUES
(9, 'ÐÑÐµÐ»ÑŒ ÐÐ±ÑƒÐ±Ð°ÐºÐ¸Ñ€Ð¾Ð²Ð°', 'asssel009@gmail.com', '                                         ÐšÑƒÑ…Ð½Ñ Ð¾Ñ‡ÐµÐ½ÑŒ Ð²ÐºÑƒÑÐ½Ð°Ñ! Ð˜ ÑÐ»Ñ‹ÑˆÐ°Ð»Ð°, Ñ‡Ñ‚Ð¾ ÑÐ°Ð¹Ñ‚ ÑÐ¾Ð·Ð´Ð°Ð½ Ð½ÐµÐ´Ð°Ð²Ð½Ð¾, Ð¶ÐµÐ»Ð°ÑŽ ÑƒÑÐ¿ÐµÑ…Ð¾Ð² Ð¸ Ð²ÑÐµÐ¼ ÑÐ¾Ð²ÐµÑ‚ÑƒÑŽ Ð¿Ð¾Ð¹Ñ‚Ð¸ Ñ Ð»ÑŽÐ±Ð¸Ð¼Ñ‹Ð¼ Ð¸Ð»Ð¸ Ð»ÑŽÐ±Ð¸Ð¼Ð¾Ð¹ Ð² ÑÑ‚Ð¾Ñ‚ Ñ€ÐµÑÑ‚Ð¾Ñ€Ð°Ð½. ÐºÑÑ‚Ð°Ñ‚Ð¸ Ð²Ñ‹ Ð½Ð° ÑÑ‚Ð¾ ÑÐ°Ð¹Ñ‚Ðµ Ð¼Ð¾Ð¶ÐµÑ‚Ðµ Ð±Ñ€Ð°Ð½Ð¸Ñ€Ð¾Ð²Ð°Ñ‚ÑŒ Ð¼ÐµÑÑ‚Ð° Ð·Ð°Ñ€Ð°Ð½ÐµÐµ! Ð”Ð»Ñ ÑÑ‚Ð¾Ð³Ð¾ Ð¿Ñ€Ð¾ÑÑ‚Ð¾ Ð½Ð°Ð´Ð¾ Ð¿Ñ€Ð¾Ð¹Ñ‚Ð¸ Ñ€ÐµÐ³ÐµÑÑ‚Ñ€Ð°Ñ†Ð¸ÑŽ, Ð¾Ð½Ð° Ð·Ð°Ð½Ð¸Ð¼Ð°ÐµÑ‚ Ð¿Ñ€Ð¸Ð¼ÐµÑ€Ð½Ð¾ 2 Ð¼Ð¸Ð½ÑƒÑ‚Ñ‹!\r\n   ', 'ÐŸÐ¾ÐºÐ°Ð·Ð°Ð½Ð¾', '2015-04-23'),
(10, 'bayan', 'bayan@bayan', 'Cool!                                   ', 'ÐŸÐ¾ÐºÐ°Ð·Ð°Ð½Ð¾', '2016-05-16'),
(11, 'Bayan Aizhan', 'IKJHGFD@hnfds', '                                liuyjhtrfewsjnhygtfhygfrgtfr            ', 'ÐŸÐ¾ÐºÐ°Ð·Ð°Ð½Ð¾', '2016-05-17');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(7) NOT NULL,
  `type` varchar(100) NOT NULL,
  `meals` text NOT NULL,
  `count` varchar(50) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `type`, `meals`, `count`, `data`) VALUES
(1, '', '', '', '0000-00-00'),
(2, 'Ð¡ÐÐ›ÐÐ¢Ð«', 'Ð“Ð Ð•Ð§Ð•Ð¡ÐšÐ˜Ð™ ÐšÐ›ÐÐ¡Ð¡Ð˜Ð§Ð•Ð¡ÐšÐ˜Ð™, Ð¦Ð•Ð—ÐÐ Ð¬, Ð¢Ð•ÐŸÐ›Ð«Ð™ Ð¡ÐÐ›ÐÐ¢ Ð¡ ÐšÐžÐÐ˜ÐÐžÐ™, Ð¡ÐÐ›ÐÐ¢ Ð¡ Ð›ÐÐ¡ÐžÐ¡Ð•Ðœ', '1000-2000Ð¢Ð«Ð¡Ð¯Ð§', '0000-00-00'),
(3, 'Ð“ÐžÐ Ð¯Ð§Ð˜Ð• Ð—ÐÐšÐ£Ð¡ÐšÐ˜', 'Ð¡Ð£Ð”ÐÐš Ð’ ÐŸÐ˜Ð’ÐÐžÐœ ÐšÐ›Ð¯Ð Ð•, Ð§Ð•Ð‘Ð£Ð Ð•ÐšÐ˜, ÐšÐ˜Ð¢ÐÐ™Ð¡ÐšÐ˜Ð• ÐŸÐ˜Ð¡Ð¬ÐœÐ•Ð¨ÐšÐ˜ Ð¡ Ð¡ÐžÐ£Ð¡ÐžÐœ Ð”Ð–Ð˜', '1000-1400Ð¢Ð«Ð¡Ð¯Ð§', '0000-00-00'),
(4, 'Ð“ÐžÐ Ð¯Ð§Ð˜Ð• Ð—ÐÐšÐ£Ð¡ÐšÐ˜', 'Ð¡Ð£Ð”ÐÐš Ð’ ÐŸÐ˜Ð’ÐÐžÐœ ÐšÐ›Ð¯Ð Ð•, Ð§Ð•Ð‘Ð£Ð Ð•ÐšÐ˜, ÐšÐ˜Ð¢ÐÐ™Ð¡ÐšÐ˜Ð• ÐŸÐ˜Ð¡Ð¬ÐœÐ•Ð¨ÐšÐ˜ Ð¡ Ð¡ÐžÐ£Ð¡ÐžÐœ Ð”Ð–Ð˜', '1000-1400Ð¢Ð«Ð¡Ð¯Ð§', '0000-00-00'),
(5, 'Ð—ÐÐšÐ£Ð¡ÐšÐ˜ Ðš ÐŸÐ˜Ð’Ð£', 'ÐÐ¡Ð¡ÐžÐ Ð¢Ð˜ Ð˜Ð— ÐšÐžÐ›Ð‘ÐÐ¡ÐžÐš, ÐšÐžÐ›Ð‘ÐÐ¡ÐšÐ˜ Ð˜Ð— Ð¢Ð•Ð›Ð¯Ð¢Ð˜ÐÐ«, ÐšÐ Ð•Ð’Ð•Ð¢ÐšÐ˜ Ð–ÐÐ Ð•ÐÐ«Ð•, Ð¤Ð˜Ð¡Ð¢ÐÐ¨ÐšÐ˜', '1000-4000Ð¢Ð«Ð¡Ð¯Ð§', '0000-00-00'),
(6, 'ÐŸÐÐ¡Ð¢Ð', 'Ð‘ÐžÐ›ÐžÐÐ¬Ð•Ð—Ð•, ÐŸÐ•ÐÐÐ• Ð¡ ÐšÐžÐÐ˜ÐÐžÐ™ Ð˜ Ð“Ð Ð˜Ð‘ÐÐœÐ˜', '1890 Ð¢Ð•ÐÐ“Ð•', '0000-00-00'),
(7, 'Ð‘Ð›Ð®Ð”Ð Ð“ÐžÐ Ð¯Ð§Ð˜Ð•', 'ÐšÐ£Ð Ð˜Ð¦Ð ÐšÐÐ Ð Ð˜ Ð¡ Ð‘ÐÐ¡ÐœÐÐ¢Ð˜, Ð‘Ð£Ð Ð˜Ð¢ÐžÐ¡ Ð¡ ÐšÐ£Ð Ð˜Ð¦Ð•Ð™, ÐœÐ˜ÐÐ¬ÐžÐ Ð¡ ÐŸÐ ÐžÐ’ÐÐÐ¡ÐšÐ˜ÐœÐ˜ Ð¢Ð ÐÐ’ÐÐœÐ˜', '2000-5000Ð¢Ð«Ð¡Ð¯Ð§', '0000-00-00');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(7) NOT NULL,
  `msg_name` varchar(100) NOT NULL,
  `msg_email` varchar(80) NOT NULL,
  `msg_subject` varchar(50) NOT NULL,
  `msg_message` mediumtext NOT NULL,
  `msg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `msg_name`, `msg_email`, `msg_subject`, `msg_message`, `msg_date`) VALUES
(6, 'bayan', 'ba@ba', '234567890', '     blahblah                                       ', '2016-05-16');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(9) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `address` text NOT NULL,
  `ip` varchar(15) NOT NULL,
  `last_log` datetime NOT NULL,
  `signup` date NOT NULL,
  `activated` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `city`, `phone`, `email`, `password`, `address`, `ip`, `last_log`, `signup`, `activated`) VALUES
(24, 'dfghjkl ghjklcfghjkl', 'ÐÐ»Ð¼Ð°Ñ‚Ñ‹', '456789045567', 'hygtfrdedfghj@dsfghjk', 'b003a1124c3e44567aba0ceb96190052', 'lokjnhygtfrdeswaUJHYGTFDS YBGTRVFDESW', '::1', '0000-00-00 00:00:00', '2016-05-16', '0'),
(25, 'Bayan Aizhan', 'ÐÐ»Ð¼Ð°Ñ‚Ñ‹', '87086547729', 'bayannnn@bayan', '01a652d92386563680fd23cf3afa5869', 'qwertyuiopasdfghjkl;zxcvbnm,', '::1', '0000-00-00 00:00:00', '2016-05-16', '0'),
(26, 'Bayan Orazbekova', 'ÐÐ»Ð¼Ð°Ñ‚Ñ‹', '87056999000', 'bayan@bayannnn', '01a652d92386563680fd23cf3afa5869', 'blahblahblah', '::1', '2016-05-16 15:11:57', '2016-05-16', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz`
--

CREATE TABLE `zakaz` (
  `id` int(7) NOT NULL,
  `numcart` varchar(50) NOT NULL,
  `infor` text NOT NULL,
  `answer` text NOT NULL,
  `mem_id` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zakaz`
--

INSERT INTO `zakaz` (`id`, `numcart`, `infor`, `answer`, `mem_id`) VALUES
(5, '456789056789', 'Ð¡Ð°Ð»Ð°Ñ‚ Ð¸ Ð”Ð¾Ð½ÐµÑ€ Ð½Ð° ÑÐ°Ð¼Ñ‹Ð¹ ÐºÑ€Ð°ÑÐ¸Ð²Ñ‹Ð¹ ÑÑ‚Ð¾Ð»!                ', '', '1'),
(6, '456789056789', 'Ð¡Ð°Ð»Ð°Ñ‚ Ð¸ Ð”Ð¾Ð½ÐµÑ€ Ð½Ð° ÑÐ°Ð¼Ñ‹Ð¹ ÐºÑ€Ð°ÑÐ¸Ð²Ñ‹Ð¹ ÑÑ‚Ð¾Ð»!                ', '', '1'),
(7, '987654', '                     kjhgfdsa                       ', '', '1'),
(8, '09876543', '                            loiyjuhgtrfdesza               ', '', '1'),
(9, '76543', '                      nhbgvfcdx                      ', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT для таблицы `zakaz`
--
ALTER TABLE `zakaz`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
