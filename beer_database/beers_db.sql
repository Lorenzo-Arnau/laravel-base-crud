-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 22, 2021 at 10:37 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beers_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `beers`
--

CREATE TABLE `beers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bitter` tinyint(4) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `image` varchar(2088) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beers`
--

INSERT INTO `beers` (`id`, `name`, `color`, `bitter`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Gulden Draak', 'Brune', 65, 'Birra bruna tenue rifermentata in bottiglia dalla ricca schiuma persistente e ben aderente. Sentori olfattivi orientali sul malto caramellato e sui composti dolciari ma in buon equilibrio con il luppolo. Buon corpo e grado alcoolico coperto dai composti dolciari. Birra equilibrata e dedicata agli amanti delle birre scure di elevato grado alcoolico.', 3.56, 'https://www.beerparadise.it/wp-content/uploads/2016/11/GULDEN-DRAAK.gif', '2021-03-19 08:58:00', '2021-03-19 08:58:00'),
(2, 'Hobgoblin IPA', 'Gold', 30, 'La Hobgoblin IPA, rimane fedele alle sue tradizioni ancestrali attraverso l’ utilizzo dei luppoli fuggles, golding e stiria e poi ampliati con l’ aggiunta di alcuni potenti luppoli americani. Questa collisione di luppoli del vecchio e nuovo mondo, fornisce una esplosione di aroma tropicale e di amarezza succosa unica.', 4.70, 'https://www.beerparadise.it/wp-content/uploads/2018/06/HOBGOBLIN-IPA-1.gif', '2021-03-19 08:58:00', '2021-03-19 08:58:00'),
(3, 'Ganter Wodan', 'Stout/Bock', 80, 'Per tutti quelli che hanno doppiamente voglia di Bock, la risposta è la Wodan. La specialità di casa GANTER, forte, scura e aromatica, soddisfa per il suo carattere unicamente maltato.\r\n\r\nPreparata con amore e perfezione artigianale secondo la ricetta originale del 1898, in uno dei birrifici più moderni della Germania. Con 18,8 gradi plato, 7,5 gradi alcol e 23 IBU, è una birra per conoscitori.\r\n\r\nProdotta con amore in uno dei birrifici più moderni della Germania con le limpide acque della Foresta Nera, materie prime regionali e l’ingrediente più importante: la passione del nostro mastro birraio.', 6.80, 'https://www.beerparadise.it/wp-content/uploads/2020/08/WODAN.gif', '2021-03-19 08:58:00', '2021-03-19 08:58:00'),
(4, 'De Graal', 'Dubbel/Amber', 65, 'Come la sorella bionda, anche nella Dubbel viene eseguito un Dry Hopping (aggiunta di una piccola percentuale di foglie di luppolo a fermentazione avviata, che conferisce un aroma più spiccato di luppolo alla birra). Colore marrone lievemente opalescente, non troppo scuro, con notevoli riflessi ramati. Si distingue per una vivace complessità aromatica che evidenzia toni fruttati di fragola e prugna, floreali ed erbacei da luppolo, ricche note di frutta secca (mandorle e nocciole), fragranze speziate e di miele. In bocca l’ingresso è morbido e dolce di malto caramellato e frutta matura, con un’evidente nota speziata ed una saporosità astringete di luppolo che accompagna tutta la degustazione. Di carbonatazione media, finisce con un retrogusto leggermente erbaceo.', 9.35, 'https://www.beerparadise.it/wp-content/uploads/2020/04/DE-GRAAL-DUBBEL.gif', '2021-03-19 08:58:00', '2021-03-19 08:58:00'),
(5, 'Baptiste', 'Blanche', 25, 'Birra bianca di frumento ad alta fermentazione  Birra bianca dall’ aroma speziato e dal gusto rinfrescante con note di coriandolo e buccia d’arancia.', 2.75, 'https://www.beerparadise.it/wp-content/uploads/2020/10/BAPTIST-BLANCHE-1.gif', '2021-03-19 12:56:48', '2021-03-19 12:56:48'),
(6, 'Lindemans Kriek', 'red', 10, 'Birra a fermentazione spontanea con aggiunta di amarene (come frutti) e poi rifermentata in bottiglia. Sentori olfattivi deviati sull’ aroma della ciliegia. Al gusto è acidula e frizzantina con note aromatiche di ciliegia e zucchero candito. Leggero sentore astringente e bassissimo grado alcolico.  Dissetante e ottima come aperitivo è anche dedicata a coloro che preferiscono un basso grado alcolico.', 4.75, 'https://www.beerparadise.it/wp-content/uploads/2017/04/LINDEMANS-KRIEK.gif', '2021-03-19 12:58:38', '2021-03-19 12:58:38'),
(7, 'St. Feuillien', 'Brune', 75, 'La St. Feuillien Brune è la versione scura di questa Brasserie. Ha un colore marrone con riflessi ramati e con una schiuma generosa e bianchissima. Al naso lascia note fruttate che si fondono armoniosamente con sentori di liquirizia e caramello. Il suo sapore è maltato con una sottile nota di cioccolato scuro. Il finale e piacevole e intenso.', 7.69, 'https://www.beerparadise.it/wp-content/uploads/2017/01/ST-FEUILLIEN-BRUNE.gif', '2021-03-19 13:55:10', '2021-03-19 13:55:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_03_18_141836_create_beer_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `beers`
--
ALTER TABLE `beers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beers`
--
ALTER TABLE `beers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
