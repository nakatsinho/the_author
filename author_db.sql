-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Jul-2021 às 04:15
-- Versão do servidor: 10.4.16-MariaDB
-- versão do PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `author_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `authors`
--

INSERT INTO `authors` (`id`, `user_id`, `book_id`, `created_at`, `updated_at`) VALUES
(3, 1, 3, '2021-07-22 14:32:22', '2021-07-22 14:32:22'),
(4, 1, 4, '2021-07-22 14:34:54', '2021-07-22 14:34:54'),
(7, 2, 5, '2021-07-22 22:31:36', '2021-07-22 22:31:36'),
(9, 1, 7, '2021-07-23 00:10:27', '2021-07-23 00:10:27'),
(10, 1, 8, '2021-07-23 00:11:57', '2021-07-23 00:11:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `books`
--

INSERT INTO `books` (`id`, `name`, `edition`, `isbn`, `company`, `cover`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(3, 'Rumbela', 'Novo Lançamento', '1544-7881-7468R-766A', 'Shine Writing', '64_img.jpg', 'Uma vitima de amores forçados kdsmfkj js dj n cashbdhsabdheb hawbsnhab hasvgabskjjn lAKljanj HASJBAHSBjk djlsds hskdh', 6, '2021-07-22 14:32:22', '2021-07-22 14:32:22'),
(4, 'Ridding in the Shadows', '1 Edicao', '1544-7881-7468R-7RPA', 'Blue Vision', '28_img.jpg', 'sdcksmskl dsmclsdkm  napsokdoa paosk,dox;as p;lsam kxlcnasj ajsnjdklkanmsi iaSNAjkndsmcdanfc l;mfsdj njkdsk jiesdmk', 4, '2021-07-22 14:34:54', '2021-07-22 14:34:54'),
(5, 'Capuchinho Vermelho', '1 Edicao', '1544-7881-UOER-7RPA', 'The Tape', 'c-dp.jpg', 'dsikfmklsn nvpds;vmosdv ps;oddmc slkd;mv pa;smciasokcmkfd bkd df;vmi dlskmv  ldfn v sdjnvm dskl vsdnmv osdknc osdk vssvl smdjkzjdncmp[a;lsdmv j  psdkmcisjndkk vsdomc j sdknmcvv sopd;m cvjdsk', 6, '2021-07-22 22:31:36', '2021-07-22 22:31:36'),
(7, 'Ridding in the Shadows 2', '2 Edicao', '1544-5566-7468R-766A', 'The Tape', '72_img.jpg', 'n bjh jhvvjghvgjv', 4, '2021-07-23 00:10:27', '2021-07-23 00:10:27'),
(8, 'Maria Margarida', '1 Edicao', '1544-7881-7468R-766A', 'Legocode', '70_img.jpg', 'nmhv  jh j jhvjv ghvbjhvcgfcvjkhv gf', 6, '2021-07-23 00:11:57', '2021-07-23 00:11:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Programming', NULL, NULL),
(2, 'Romance', NULL, NULL),
(3, 'Literary Fiction', NULL, NULL),
(4, 'Horror', NULL, NULL),
(5, 'Historical Fiction', NULL, NULL),
(6, 'Fantasy', NULL, NULL),
(7, 'Detective and Mystery', NULL, NULL),
(8, 'Comic Book or Graphic Novel', NULL, NULL),
(9, 'Classics', NULL, NULL),
(10, 'Action and Adventure', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Mozambique', 'MZ', NULL, NULL),
(2, 'Angola', 'AG', NULL, NULL),
(3, 'South Africa', 'RAS', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `genders`
--

CREATE TABLE `genders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `genders`
--

INSERT INTO `genders` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Male', NULL, NULL),
(2, 'Female', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2021_07_21_155946_create_countries_table', 1),
(9, '2021_07_21_161130_create_genders_table', 1),
(10, '2021_07_21_162510_create_books_table', 1),
(11, '2021_07_21_194635_create_categories_table', 2),
(12, '2021_07_22_040505_create_authors_table', 3),
(13, '2021_07_22_041923_create_sharings_table', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sharings`
--

CREATE TABLE `sharings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `shared_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sharings`
--

INSERT INTO `sharings` (`id`, `user_id`, `shared_id`, `book_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 4, '2021-07-22 23:23:57', '2021-07-22 23:23:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bith` date DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `backimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `bith`, `number`, `gender_id`, `country_id`, `image`, `backimage`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cumbe', '1995-09-15', '842536927', 1, 1, 'Screenshot (8).png', NULL, 'naka@gmail.com', NULL, '$2y$10$7yGYGm1upU7hdZDehNp6cuOSPRBwNL/XLRRkX1lN.L2nluSjR6FE2', NULL, '2021-07-21 16:35:44', '2021-07-21 17:12:29'),
(2, 'Mazuze M', '1995-09-15', '825248888', 1, 1, 'Car-dp.jpg', NULL, 'mazuze@gmail.com', NULL, '$2y$10$7yGYGm1upU7hdZDehNp6cuOSPRBwNL/XLRRkX1lN.L2nluSjR6FE2', NULL, '2021-07-21 16:35:44', '2021-07-22 22:29:24');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `sharings`
--
ALTER TABLE `sharings`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `genders`
--
ALTER TABLE `genders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `sharings`
--
ALTER TABLE `sharings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
