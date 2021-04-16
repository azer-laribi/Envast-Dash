-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 28 sep. 2020 à 10:18
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `envast`
--

-- --------------------------------------------------------

--
-- Structure de la table `envasts`
--

CREATE TABLE `envasts` (
  `id` int(10) UNSIGNED NOT NULL,
  `membre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tache` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Release_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estimation_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `projet_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `user_id`, `projet_id`, `created_at`, `updated_at`) VALUES
(2, '4', '2', '2020-09-27 16:03:33', '2020-09-27 16:03:33');

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
(28, '2020_09_21_163509_create_projects_table', 1),
(97, '2014_10_12_000000_create_users_table', 2),
(98, '2014_10_12_100000_create_password_resets_table', 2),
(99, '2020_09_13_131704_create_envasts_table', 2),
(100, '2020_09_20_160104_create_taches_table', 2),
(101, '2020_09_22_110414_create_projets_table', 2),
(102, '2020_09_24_143241_create_membres_table', 2);

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
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_deadline` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `memberId` int(11) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `project_name`, `project_description`, `project_deadline`, `user_id`, `memberId`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'Dashboard', '2020-08-23', 1, NULL, '1', '2020-09-27 15:56:05', '2020-09-27 16:02:46'),
(2, 'Jeux', 'placejolder=\"chef ou membre\"', '2020-10-11', 2, NULL, '1', '2020-09-27 16:03:12', '2020-09-27 16:27:35');

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

CREATE TABLE `taches` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `projet_id` int(11) NOT NULL,
  `tache_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tache_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `taches`
--

INSERT INTO `taches` (`id`, `user_id`, `projet_id`, `tache_name`, `tache_description`, `status`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Dashboard', 'Dashboard', '1', '2020-08-23', '2020-08-26', '2020-09-27 15:56:04', '2020-09-27 16:26:31'),
(4, 4, 2, 'Site E-commerce', '$projet', '0', '2020-09-27', '2020-10-03', '2020-09-27 16:28:35', '2020-09-27 16:28:35'),
(5, 4, 1, 'SMFS-Responsive Layouts', '$projet', '0', '2020-10-02', '2020-10-11', '2020-09-27 16:29:07', '2020-09-27 16:29:07');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `usertype`, `post`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'azer', '9058910', 'chef', 'ingenieur', 'azer@gamil.com', NULL, '$2y$10$Rcuk5UsUanuzSeZqIh5aiutbabBwA34RmqyPmip9l0qsiUUWTdHza', NULL, '2020-09-27 15:56:05', '2020-09-27 15:56:05'),
(2, 'Achref Dawahi', '24441053', 'chef', 'CTO', 'achref.daouahi@envast.tn', NULL, '$2y$10$a2NktDd19LvjlSFC2nVNMeWnYSBsdCCRMCmIVhA86E9ftm2WWwwrq', 'JQLCusPCHBtLRKTRvTNJW660zaMustQh5ebp03kfAj6y1D0JaDgHeqiciXHh', '2020-09-27 15:58:55', '2020-09-27 15:58:55'),
(3, 'AZER LARIBI', '+21690589101', 'chef', 'ingenieur', 'azer2017laribi@gmail.com', NULL, '$2y$10$CPc6anjSBYIZNuLL0zbViu45V3CNwl7H3J8w2jBpZl3T7ZBC/VJqC', '2Y1MHWiFTZGOVnmggPwWQjQmaGx7MUXicJvs1Y9rfSqla9npbwee4NAHEvFe', '2020-09-27 15:59:16', '2020-09-27 15:59:16'),
(4, 'amine', '24589631', 'membre', 'ingenieur', 'amine@gmail.com', NULL, '$2y$10$L3BzXA7xtYY4IT5f2GHVE.Re2vKLdXAz4a6iQauxHs4mhcJDBrl/2', 'AQJwj1SKv8c61l0X4xR1H4RxsHAK58piboOTgNN0oDeTzOvEIVixZsbaX6Sl', '2020-09-27 15:59:48', '2020-09-27 15:59:48'),
(6, 'achref Daouahi', '24441053', 'chef', 'CTO', 'achref@envast.tn', NULL, '$2y$10$BVynvgD.A98J6b.cZdRkJ.mCuIJq7o2Zdnm2k/f5Jy3IR99gTo/s6', 'yZnpRoByr3gK0jumLmetbjVsXSWab6CyWwabirM0LxrUlVNYWIahUYqWLQDS', '2020-09-27 16:24:56', '2020-09-27 16:24:56');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `envasts`
--
ALTER TABLE `envasts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
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
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `taches`
--
ALTER TABLE `taches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `envasts`
--
ALTER TABLE `envasts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `taches`
--
ALTER TABLE `taches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
