SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `matkoz_shoplo`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20201004212915', '2020-10-04 23:30:22', 398);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `promo_price` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `count`, `price`, `promo_price`, `status`, `created_at`) VALUES
(1, 'Lorem ipsum dolor 1', 'img-1.jpg', 10, 6350, 7500, 1, '2020-10-05 21:50:17'),
(2, 'Lorem ipsum dolor 2', 'img-3.jpg', 15, 4350, NULL, 1, '2020-10-05 21:50:20'),
(3, 'Lorem ipsum dolor 3', 'img-5.jpg', 11, 8500, NULL, 1, '2020-10-06 21:55:00'),
(4, 'Lorem ipsum dolor 4', 'img-7.jpg', 11, 6320, 5599, 1, '2020-10-01 21:58:51'),
(5, 'Lorem ipsum dolor 5', 'img-1.jpg', 15, 9855, 7539, 1, '2020-10-05 16:44:38'),
(6, 'Lorem ipsum dolor 6', 'img-3.jpg', 15, 3320, NULL, 1, '2020-10-04 16:45:43'),
(7, 'Lorem ipsum dolor 7', 'img-5.jpg', 25, 5560, 1550, 1, '2020-10-06 16:46:31'),
(8, 'Lorem ipsum dolor 8', 'img-7.jpg', 12, 6350, NULL, 1, '2020-10-05 16:47:25'),
(9, 'Lorem ipsum dolor 9', 'img-1.jpg', 20, 2590, NULL, 1, '2020-10-05 16:54:23'),
(10, 'Lorem ipsum dolor 10', 'img-3.jpg', 30, 6799, 4555, 1, '2020-10-07 16:54:59'),
(11, 'Lorem ipsum dolor 11', 'img-5.jpg', 20, 6350, 1550, 1, '2020-10-05 16:56:09'),
(12, 'Lorem ipsum dolor 12', 'img-7.jpg', 20, 4350, NULL, 1, '2020-10-05 16:56:45'),
(13, 'Lorem ipsum dolor 13', 'img-1.jpg', 20, 8520, 7500, 1, '2020-10-05 16:57:16'),
(14, 'Lorem ipsum dolor 14', 'img-2.jpg', 20, 4350, NULL, 1, '2020-10-05 16:57:36'),
(15, 'Lorem ipsum dolor 15', 'img-3.jpg', 20, 3325, 2520, 1, '2020-10-06 16:57:53'),
(16, 'Lorem ipsum dolor 16', 'img-4.jpg', 20, 6350, NULL, 1, '2020-10-04 16:58:15');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `product_image`
--

INSERT INTO `product_image` (`id`, `product_id`, `path`, `created_at`) VALUES
(1, 1, 'img-2.jpg', '2020-10-05 21:50:10'),
(2, 2, 'img-4.jpg', '2020-10-05 21:50:13'),
(3, 3, 'img-6.jpg', '2020-10-05 21:56:48'),
(4, 4, 'img-8.jpg', '2020-10-15 21:59:16'),
(5, 5, 'img-2.jpg', '2020-10-05 16:45:27'),
(6, 6, 'img-4.jpg', '2020-10-02 16:46:12'),
(7, 7, 'img-6.jpg', '2020-10-05 16:47:03'),
(8, 8, 'img-8.jpg', '2020-10-04 16:47:59'),
(9, 9, 'img-2.jpg', '2020-10-04 16:54:44'),
(10, 10, 'img-4.jpg', '2020-10-05 16:55:31'),
(11, 12, 'img-8.jpg', '2020-10-07 16:57:04');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indeksy dla tabeli `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_64617F034584665A` (`product_id`);

--
-- AUTO_INCREMENT dla tabel zrzutów
--

--
-- AUTO_INCREMENT dla tabeli `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT dla tabeli `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `FK_64617F034584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
