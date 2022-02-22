-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 20 fév. 2022 à 19:39
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `groupemcs`
--

-- --------------------------------------------------------

--
-- Structure de la table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `icon` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `advertisements`
--

INSERT INTO `advertisements` (`id`, `tag`, `category`, `icon`, `image_1`, `image_2`, `image_3`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Acheter des ordniateurs depuis chez vous', 1, 'icon-desktop', '5501642891861.jpg', NULL, NULL, 'Aucune limite ne peut empêcher Mcs Groupe de vous offrir votre ordinateur de rêve. Même à la maison vous pouvez obtenir ce que vous voulez Lorem ipsum dolor sit amet consectetur', '2022-01-22 21:51:01', '2022-01-22 21:51:01'),
(2, 'Des prises vues à couper le souffle', 8, 'icon-videocam-1', '2971642892670.jpg', NULL, NULL, 'Consommez nos services multi-média en excusivité notamment des montages 3D..Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', '2022-01-22 22:04:31', '2022-01-22 22:04:31'),
(3, 'Un bureau numérique pour vous', 1, 'icon-desktop', '7991642895023.jpg', NULL, NULL, 'Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum', '2022-01-22 22:43:43', '2022-01-22 22:43:43'),
(4, 'Équipements réseaux Hight-Tech', 4, 'icon-network', '3021642895455.jpg', NULL, NULL, 'Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum', '2022-01-22 22:50:55', '2022-01-22 22:50:55');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `solde_price` decimal(10,2) DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nbre_exemplaire` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `disk` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ram` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processor` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `tag`, `category`, `price`, `solde_price`, `desc`, `nbre_exemplaire`, `picture_1`, `picture_2`, `picture_3`, `created_at`, `updated_at`, `disk`, `model`, `ram`, `processor`) VALUES
(1, 'Pc Acer 2022', 1, '300.00', '250.00', 'Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum', '20', '9581642895840.jpg', '2581642895840.jpg', '5941642895840.jpg', '2022-01-22 22:57:20', '2022-01-22 22:57:20', NULL, NULL, NULL, NULL),
(2, 'Acer Hybride', 1, '400.00', '300.00', 'Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum', '10', '2981642896036.jpg', '1211642896036.png', '7721642896036.jpg', '2022-01-22 23:00:36', '2022-01-22 23:00:36', NULL, NULL, NULL, NULL),
(3, 'HP Elitebook 840', 1, '350.00', '300.00', 'Lorem ispum Lorem ispum Lorem ispum Lorem ispum Lorem ispum Lorem ispum Lorem ispum Lorem ispum Lorem ispum', '5', '5701642896126.jpg', '5861642896126.jpg', '401642896126.png', '2022-01-22 23:02:06', '2022-01-22 23:02:06', NULL, NULL, NULL, NULL),
(4, 'Msi', 1, '250.00', '200.00', 'Lorem ispum Lorem ispum Lorem ispum Lorem ispum Lorem ispum Lorem ispum Lorem ispum Lorem ispum Lorem ispum', '12', '2171642896197.jpg', '5871642896197.jpg', '4551642896197.jpg', '2022-01-22 23:03:17', '2022-01-22 23:03:17', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `baskets`
--

CREATE TABLE `baskets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `baskets`
--

INSERT INTO `baskets` (`id`, `user_id`, `article_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '2022-01-22 23:18:27', '2022-01-22 23:18:27'),
(2, 3, 3, '2022-01-23 03:47:19', '2022-01-23 03:47:19'),
(3, 1, 1, '2022-01-23 14:44:01', '2022-01-23 14:44:01'),
(4, 1, 3, '2022-01-23 14:44:50', '2022-01-23 14:44:50'),
(5, 1, 4, '2022-02-01 21:06:15', '2022-02-01 21:06:15'),
(6, 1, 1, '2022-02-02 03:38:24', '2022-02-02 03:38:24');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `label` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `label`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Ordinateur', 'Le consommable informatique le plus disponible chez Mcs Group', '2022-01-22 22:01:59', '2022-01-22 22:01:59'),
(3, 'Smartphone', '', '2022-01-22 22:04:34', '2022-01-22 22:04:34'),
(4, 'Équipement Réseau', '', '2022-01-22 22:04:34', '2022-01-22 22:04:34'),
(5, 'Article vestimentaire', 'Boutique d\'habillement', '2022-01-22 22:06:33', '2022-01-22 22:06:33'),
(6, 'Walkers', 'Casques, Ecouteurs, etc.', '2022-01-22 22:06:33', '2022-01-22 22:06:33'),
(7, 'Accessoires d\'ordinateurs', 'Disque dur, RAM, Carte réseau etc.', '2022-01-22 22:07:55', '2022-01-22 22:07:55'),
(8, 'Multi-média', '', '2022-01-22 23:01:47', '2022-01-22 23:01:47');

-- --------------------------------------------------------

--
-- Structure de la table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonecode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `countries`
--

INSERT INTO `countries` (`id`, `c_name`, `phonecode`, `created_at`, `updated_at`) VALUES
(1, 'RD Congo', '+243', '2021-12-22 01:41:24', '2021-12-22 01:41:24'),
(2, 'Afrique du Sud', '+27', '2021-12-22 01:41:24', '2021-12-22 01:41:24'),
(3, 'Algérie', '+213', NULL, NULL),
(4, 'Allemagne', '+49', NULL, NULL),
(5, 'Angola', '+244', NULL, NULL),
(6, 'Belgique', '+32', NULL, NULL),
(7, 'Cameroun', '+237', NULL, NULL),
(8, 'Canada', '+1', NULL, NULL),
(9, 'République du Congo', '+242', NULL, NULL),
(10, 'Côte d\'Ivoire', '+225', NULL, NULL),
(11, 'Égypte', '+20', NULL, NULL),
(12, 'France', '+33', NULL, NULL),
(13, 'Gabon', '+241', NULL, NULL),
(14, 'Sénégal', '+221', NULL, NULL),
(15, 'Tunisie', '+216', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `feed_backs`
--

CREATE TABLE `feed_backs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `feed_backs`
--

INSERT INTO `feed_backs` (`id`, `user_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lorem ipsum Lorem ipsum Lorem ipsum', '2022-02-15 10:48:30', '2022-02-15 10:48:30'),
(2, 1, 'Lorem ipsum Lorem ipsum Lorem ipsum', '2022-02-15 10:48:54', '2022-02-15 10:48:54'),
(3, 1, 'Lorem ipsum Lorem ipsum Lorem ipsum', '2022-02-15 10:49:58', '2022-02-15 10:49:58');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_30_163431_create_countries_table', 1),
(6, '2021_11_30_163950_create_towns_table', 1),
(7, '2021_11_30_164746_create_advertisements_table', 1),
(8, '2021_11_30_165141_create_poles_table', 1),
(9, '2021_11_30_171040_create_articles_table', 1),
(10, '2021_11_30_171904_create_purchases_table', 1),
(11, '2021_11_30_181556_create_baskets_table', 1),
(12, '2022_01_12_121017_create_categories_table', 1),
(13, '2022_02_15_111241_create_feed_backs_table', 2),
(14, '2022_02_17_161448_create_terminals_table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `poles`
--

CREATE TABLE `poles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `netlink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `delivery_mode` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'En attente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `purchases`
--

INSERT INTO `purchases` (`id`, `quantity`, `total_price`, `delivery_mode`, `payment_mode`, `created_at`, `updated_at`, `user_id`, `article_id`, `state`) VALUES
(1, 3, '1200.00', 'Adomicile', 'espece', '2022-01-22 23:20:22', '2022-01-22 23:20:22', 1, 2, 'Validé'),
(2, 2, '500.00', 'Adomicile', 'espece', '2022-02-01 21:17:35', '2022-02-01 21:17:35', 1, 4, 'Validé'),
(5, 4, '350.00', 'Adomicile', 'espece', '2022-02-02 01:19:05', '2022-02-02 01:19:05', 1, 3, 'Validé');

-- --------------------------------------------------------

--
-- Structure de la table `terminals`
--

CREATE TABLE `terminals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `mac_addres` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_addres` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `terminals`
--

INSERT INTO `terminals` (`id`, `id_user`, `mac_addres`, `ip_addres`, `user_agent`, `created_at`, `updated_at`) VALUES
(1, 1, '62-67-20-F8-A6-F0   N/A', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:93.0) Gecko/20100101 Firefox/93.0', '2022-02-17 17:29:08', '2022-02-17 17:29:08'),
(7, 0, '62-67-20-F8-A6-F0   N/A', '192.168.137.129', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-02-17 18:22:53', '2022-02-17 18:22:53');

-- --------------------------------------------------------

--
-- Structure de la table `towns`
--

CREATE TABLE `towns` (
  `id_town` bigint(20) UNSIGNED NOT NULL,
  `t_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `towns`
--

INSERT INTO `towns` (`id_town`, `t_name`, `created_at`, `updated_at`, `country_id`) VALUES
(1, 'Pretoria', NULL, NULL, 2),
(2, 'Alger', NULL, NULL, 3),
(3, 'Lubumbashi', NULL, NULL, 1),
(4, 'Kinshasa', NULL, NULL, 1),
(5, 'Lyon', NULL, NULL, 12),
(6, 'Paris', NULL, NULL, 12),
(7, 'Yaoundé', NULL, NULL, 7),
(8, 'Bruxelles', NULL, NULL, 6),
(9, 'Luanda', NULL, NULL, 5),
(10, 'Goma', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `town` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `fullname`, `sexe`, `phone_number`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `town`) VALUES
(1, 'Philippe Mbambi', NULL, '+243826686661', 'philippembambi413@gmail.com', NULL, '$2y$10$2ANn2nX.LBFIvSntnevIn.WDiM2457wdWXlHaBqB89fKVUxpzSaWS', '7ui2UPFSjTc6Ci1K0VLG3aziTcDTGoFxdNXjdXszmOLOed1oP08Pn6ygPQWV', '2021-12-22 02:21:17', '2021-12-22 02:21:17', NULL, 'Kinshasa'),
(2, 'Ben', NULL, '+243826686665', 'ben43@gmail.com', NULL, '$2y$10$y4s3qB0Mzz3JNnKhGH8aQuiYbR7s3amu.Zu7jtl6Saiw6tUOcD1EK', 'BpSXVaCZBoH1DO8dI8w6flyFb9QGwvvHOVPeZvCxXPcxaxdrHAEhIAozqxIN', '2022-01-23 03:26:09', '2022-01-23 03:26:09', NULL, 'Kinshasa'),
(3, 'Espe', NULL, '+3333333333', 'Espe45@gmail.com', NULL, '$2y$10$vRwigpjwsCfNxqla8SK8lel32ept7K5sxKVRM/6IrCXbLNhjC1X2m', 'VNF9zzCAJ5EzApWXZn3PjrwrghtcYUn2lDv0F0uMP65cho8pUr6u4wf2UsKe', '2022-01-23 03:45:24', '2022-01-23 03:45:24', NULL, 'Lyon');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `baskets`
--
ALTER TABLE `baskets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `baskets_user_id_foreign` (`user_id`),
  ADD KEY `baskets_article_id_foreign` (`article_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `feed_backs`
--
ALTER TABLE `feed_backs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `poles`
--
ALTER TABLE `poles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `achat_article_constraint` (`article_id`),
  ADD KEY `achat_client_constraint` (`user_id`);

--
-- Index pour la table `terminals`
--
ALTER TABLE `terminals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ip_addres` (`ip_addres`);

--
-- Index pour la table `towns`
--
ALTER TABLE `towns`
  ADD PRIMARY KEY (`id_town`),
  ADD KEY `ville_pays_constraint` (`country_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`),
  ADD UNIQUE KEY `users_password_unique` (`password`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `baskets`
--
ALTER TABLE `baskets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `feed_backs`
--
ALTER TABLE `feed_backs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `poles`
--
ALTER TABLE `poles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `terminals`
--
ALTER TABLE `terminals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `towns`
--
ALTER TABLE `towns`
  MODIFY `id_town` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `baskets`
--
ALTER TABLE `baskets`
  ADD CONSTRAINT `baskets_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `baskets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `achat_article_constraint` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `achat_client_constraint` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `towns`
--
ALTER TABLE `towns`
  ADD CONSTRAINT `ville_pays_constraint` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
