-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Чрв 14 2019 р., 11:05
-- Версія сервера: 5.7.23
-- Версія PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `feedbacks`
--

-- --------------------------------------------------------

--
-- Структура таблиці `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `description`, `rating`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Dima', 'dima.yaroshevskyi@gmail.com', 'It\'s a good work.', 4, '206.jpeg', '2019-06-12 21:00:00', '2019-06-12 21:00:00'),
(2, 'Dima', 'dima.yaroshevskyi@gmail.com', 'It\'s a good work.', 4, '206.jpeg', '2019-06-12 21:00:00', '2019-06-12 21:00:00'),
(3, 'Vasyl', 'vasyl@vasyl.com', 'Bad', 1, '206.jpeg', '2019-06-11 21:00:00', '2019-06-11 21:00:00'),
(4, 'Vasyl', 'vasyl@vasyl.com', 'Bad', 1, '206.jpeg', '2019-06-11 21:00:00', '2019-06-11 21:00:00'),
(5, 'Dimas', 'yarish@gsdf.gr', 'woresrgopuh', 4, '', '2019-06-13 15:54:34', '2019-06-13 15:54:34'),
(6, 'weif', 'wef@jra.fe', 'orwng;ring', 5, '', '2019-06-13 17:29:48', '2019-06-13 17:29:48'),
(7, 'wdnhpkg', 'edntpkh@sethk.dgh', 'dgtblkdgb', 5, '', '2019-06-13 17:31:25', '2019-06-13 17:31:25'),
(8, 'etlheth', 'espomg@lsrkes.srhr', 'dtngndsgn', 5, '', '2019-06-13 17:32:05', '2019-06-13 17:32:05'),
(9, 'wakgwar', 'erwgj;wr@razpig.esg', 'seotgih', 2, '', '2019-06-13 17:37:59', '2019-06-13 17:37:59'),
(10, 'oirsg', 'sdro@seg.rseg', 'seogjnosngos', 4, '', '2019-06-14 01:41:25', '2019-06-14 01:41:25'),
(11, 'regv', 'erg@sdrg.serb', 'estgseg', 4, '', '2019-06-14 03:31:11', '2019-06-14 03:31:11'),
(12, 'q3g', 'ewtbe@raewg.rab', 'sdbtsdbebserbesrb', 4, '', '2019-06-14 03:31:42', '2019-06-14 03:31:42'),
(13, 'a[ef', 'ewarhg@esrg.tnh', 'seltkgjoiopn', 4, '', '2019-06-14 03:33:21', '2019-06-14 03:33:21'),
(14, 'a;wrlg', 'awprm@lskramg.arwga', 'sergswrgpkmswepkm', 4, '', '2019-06-14 03:34:57', '2019-06-14 03:34:57'),
(15, 'aewrg', 'awrg@wrg.arb', 'asrlkgnalwkrnv', 2, '', '2019-06-14 03:37:01', '2019-06-14 03:37:01'),
(16, 'waelm', 'warpogj@spri.awrgawr', 'sreognsrogbspmrbp', 3, '1560494332_lab4.py', '2019-06-14 03:38:52', '2019-06-14 03:38:52'),
(17, 'awpr[p', 'awpeomg@rarg.awr', 'speropsoarmg', 4, '1560496757_lab4.py', '2019-06-14 04:19:17', '2019-06-14 04:19:17'),
(18, 'alsrkeb', 'sebkgn@srg.aren', 'sraknb', 5, '', '2019-06-14 04:26:20', '2019-06-14 04:26:20'),
(19, 'a[sorv', 'spebm@sarb.awrbaw', 'awrgb', 4, '1560497411_P70810-182449.jpg', '2019-06-14 04:30:11', '2019-06-14 04:30:11');

-- --------------------------------------------------------

--
-- Структура таблиці `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_06_13_164025_create_feedback_table', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблиці `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
