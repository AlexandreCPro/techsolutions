-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 12 déc. 2025 à 00:12
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `techsolutions`
--

-- --------------------------------------------------------

--
-- Structure de la table `components`
--

CREATE TABLE `components` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `components`
--

INSERT INTO `components` (`id`, `name`, `description`) VALUES
(1, 'Intel Core i9-14900KF (3.2 GHz / 5.8 GHz)', 'CPU1 DUX/UI'),
(2, 'Intel Core i5-14600KF (3.5 GHz / 5.3 GHz)', 'CPU2 DEV'),
(3, 'AMD Ryzen 7 9700X (3.8 GHz / 5.5 GHz)', 'CPU3 RES'),
(4, 'AMD Ryzen 5 8400F Wraith Stealth (4.2 GHz / 4.7 GHz)', 'CPU4 MARKET/SUPP/RH'),
(5, 'be quiet! Silent Loop 3 420mm', 'V1 DUX/UI'),
(6, 'Corsair Nautilus 360 RS (Noir)', 'V2 DEV'),
(7, 'Arctic Liquid Freezer III Pro 360 (Noir)', 'V3 RES'),
(8, 'be quiet! Pure Rock 3 Black', 'V4 MARKET/SUPP/RH'),
(9, 'ASUS ROG STRIX B760-F GAMING WIFI', 'CM1 DUX/UI'),
(10, 'ASUS PRIME B760-PLUS', 'CM2 DEV'),
(11, 'Gigabyte B850M DS3H', 'CM3 RES'),
(12, 'Gigabyte A620M H', 'CM4 MARKET/SUPP/RH'),
(13, 'Kingston FURY Beast 32 Go (2 x 16 Go) DDR5 5200 MHz CL40', 'RAM1 DUX/UI'),
(14, 'Crucial Pro DDR5 32 Go (2 x 16 Go) 5600 MHz CL46', 'RAM2 DEV'),
(15, 'Crucial Pro DDR5 Overclocking 32 Go (2 x 16 Go) 6000 MHz CL36 Blanc', 'RAM3 RES'),
(16, 'Kingston FURY Beast 8 Go DDR5 5600 MHz CL40', 'RAM4 MARKET/SUPP/RH'),
(17, 'ASUS Dual GeForce RTX 5060 Ti OC Edition 8GB', 'CG1 DUX/UI'),
(18, 'Gigabyte GT 1030 Low Profile D4 2G', 'CG2 DEV/RES/RH'),
(19, 'MSI GeForce GT 710 2GD3H LP', 'CG3 MARKET/SUPP'),
(20, 'Gainward GeForce RTX 3050 Pegasus 6G', 'CG4 SUPP MALVOYANT'),
(21, 'Samsung SSD 990 PRO M.2 PCIe NVMe 4 To', 'SSD1 DUX/UI'),
(22, 'Samsung SSD 870 EVO 2 To', 'SSD2 DEV'),
(23, 'Corsair Force MP600 CORE XT R2 2 To', 'SSD3 RES'),
(24, 'Samsung SSD 870 EVO 1 To', 'SSD4 MARKET'),
(25, 'Kingston SSD A400 960 Go', 'SSD5 SUPP'),
(26, 'Seagate BarraCuda 4 To (ST4000DM004)', 'DD1 RH'),
(27, 'Fox Spirit EG1 Core', 'B1 DUX/UI'),
(28, 'NZXT H7 Flow Noir (2024)', 'B2 DEV'),
(29, 'Fractal Design Pop XL Silent Solid (Noir)', 'B3 RES'),
(30, 'Cooler Master Silencio S600', 'B4 MARKET'),
(31, 'Fractal Design Focus 2 Solid (Noir)', 'B5 SUPP'),
(32, 'be quiet! Pure Base 500 (Noir)', 'B6 RH'),
(33, 'Fractal Design Pop Air Solid (Noir)', 'B7 SUPP MALVOYANT'),
(34, 'Corsair RM850e (2025)', 'BA1 DUX/UI'),
(35, 'Fox Spirit HG 850 White 80PLUS Gold', 'BA2 DEV'),
(36, 'MSI MPG A850G PCIE5', 'BA3 RES'),
(37, 'MSI MAG A850GL PCIE5', 'BA4 MARKET'),
(38, 'MSI MAG A650GL', 'BA5 SUPP/RH'),
(39, 'ASUS PCE-BE6500', 'CR1 ALL (sans direction)'),
(40, 'be quiet! Silent Wings 4 120mm PWM', 'VB1 DUX/UI/DEV/RES'),
(41, 'Noctua NF-A14 FLX', 'VB2 MARKET/SUPP'),
(42, 'be quiet! Pure Wings 3 140mm', 'VB3 RH'),
(43, 'PORT Connect Ergo Rechargeable Bluetooth Mouse (Droitier)', 'S1 ALL (sans malvoyant)'),
(44, 'ECHTPower 2024 Update Souris Ergonomique sans Fil', 'S2 SUPP MALVOYANT'),
(45, 'INOVU LK120 (AZERTY, Français)', 'C1 ALL (sans malvoyant)'),
(46, 'OMOTON Clavier Rétro-éclairé AZERTY', 'C2 SUPP MALVOYANT'),
(47, 'ASUS 23.8\" LED - ProArt PA247CV', 'M1 DUX/UI'),
(48, 'Lenovo 27\" LED - L27i-4B', 'M2 DEV'),
(49, 'ASUS 25\" LED - VA259HGA', 'M3 RES'),
(50, 'Samsung 24\" LED - S24D402GAU', 'M4 MARKET/SUPP/RH/DIRECT'),
(51, 'Samsung 34\" LED - Odyssey G5 C34G55TWWP', 'M5 SUPP MALVOYANT'),
(52, 'Logitech BRIO 100 (Graphite)', 'W1 ALL (sans direction)'),
(53, 'Altyk Tapis de souris Taille XXL', 'TS1 ALL'),
(54, 'JBL Quantum 200 Noir', 'CMIC1 ALL'),
(55, 'HP OfficeJet Pro 8135e All in One', 'I1 RH/DIRECT'),
(56, 'SanDisk Ultra Dual Drive Go USB-C 256 Go', 'USB1 ALL'),
(57, 'ASUS Vivobook S 15 OLED Copilot+ PC S5507QA-MA064X', 'OP1 DIRECT'),
(58, 'LibreOffice 25.8.3', 'SO1 ALL'),
(59, 'Linux Mint 2,22 Cinnamon edition', 'OS1 ALL (sans direction)'),
(60, 'Avast Premium Business Security', 'AV1 ALL');

-- --------------------------------------------------------

--
-- Structure de la table `loginadmin`
--

CREATE TABLE `loginadmin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `loginadmin`
--

INSERT INTO `loginadmin` (`id`, `email`, `password`) VALUES
(1, 'annalise@techsolutions.com', '$2y$10$fmFReohQ94zwcCSbhlPb8OfHT5zNS5cnYcIpD.klnqqbckr11mH4e');

-- --------------------------------------------------------

--
-- Structure de la table `pc`
--

CREATE TABLE `pc` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `effectif` int(11) NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `date_ajout` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pc`
--

INSERT INTO `pc` (`id`, `nom`, `service`, `effectif`, `description`, `image`, `date_ajout`) VALUES
(1, 'PC Designer', 'Design UX/UI', 5, 'PC avec 17 composants/périphériques. 2362,67€ HT', 'Photo\\pcdesign.jpg', '2025-12-11 11:41:40'),
(2, 'PC Développeur', 'Développement logiciel', 15, 'PC avec 17 composants/périphériques. 1636€ HT', 'Photo\\pcdev.jpg', '2025-12-11 11:44:57'),
(3, 'PC Infrastructure', 'Gestion des infrastructures systèmes et réseau', 5, 'PC avec 17 composants/périphériques. 1806,84€ HT', 'Photo\\pcinfra.jpg', '2025-12-11 11:54:15'),
(4, 'PC Vente', 'Marketing et vente', 10, 'PC avec 17 composants/périphériques. 1037,67€ HT', 'Photo\\pcvente.jpg', '2025-12-11 11:57:18'),
(5, 'PC Support', 'Support client', 4, 'PC avec 17 composants/périphériques. 991,85€ HT', 'Photo\\pcsupport.jpg', '2025-12-11 12:00:53'),
(6, 'PC Ressources', 'Ressources humaines et administration', 5, 'PC avec 18 composants/périphériques. 1202,64€ HT', 'Photo\\pcrh.jpg', '2025-12-11 12:04:16'),
(7, 'PC Direction', 'Direction', 5, 'PC portable avec 7 périphériques. 1683,91€ HT', 'Photo\\pcdirection.jpg', '2025-12-11 12:07:52'),
(8, 'PC Malvoyant', 'Support client', 1, 'PC avec 17 composants/périphériques. 1294,71€ HT', 'Photo\\pcmalvoyant.jpg', '2025-12-11 12:10:11');

-- --------------------------------------------------------

--
-- Structure de la table `pc_components`
--

CREATE TABLE `pc_components` (
  `id` int(11) NOT NULL,
  `pc_id` int(11) NOT NULL,
  `component_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pc_components`
--

INSERT INTO `pc_components` (`id`, `pc_id`, `component_id`) VALUES
(1, 1, 1),
(3, 1, 1),
(4, 1, 5),
(5, 1, 9),
(6, 1, 13),
(7, 1, 17),
(8, 1, 21),
(9, 1, 27),
(10, 1, 34),
(11, 1, 39),
(12, 1, 40),
(13, 1, 43),
(14, 1, 45),
(15, 1, 47),
(16, 1, 52),
(17, 1, 53),
(18, 1, 54),
(19, 1, 56),
(20, 2, 2),
(21, 2, 6),
(22, 2, 10),
(23, 2, 14),
(24, 2, 18),
(25, 2, 22),
(26, 2, 28),
(27, 2, 35),
(28, 2, 39),
(29, 2, 40),
(30, 2, 43),
(31, 2, 45),
(32, 2, 48),
(33, 2, 52),
(34, 2, 53),
(35, 2, 54),
(36, 2, 56),
(37, 3, 3),
(38, 3, 7),
(39, 3, 11),
(40, 3, 15),
(41, 3, 18),
(42, 3, 23),
(43, 3, 29),
(44, 3, 36),
(45, 3, 39),
(46, 3, 40),
(47, 3, 43),
(48, 3, 45),
(49, 3, 49),
(50, 3, 52),
(51, 3, 53),
(52, 3, 54),
(53, 3, 56),
(54, 4, 4),
(55, 4, 8),
(56, 4, 12),
(57, 4, 16),
(58, 4, 19),
(59, 4, 24),
(60, 4, 30),
(61, 4, 37),
(62, 4, 39),
(63, 4, 41),
(64, 4, 43),
(65, 4, 45),
(66, 4, 50),
(67, 4, 52),
(68, 4, 53),
(69, 4, 54),
(70, 4, 56),
(71, 5, 4),
(72, 5, 8),
(73, 5, 12),
(74, 5, 16),
(75, 5, 19),
(76, 5, 25),
(77, 5, 31),
(78, 5, 38),
(79, 5, 39),
(80, 5, 41),
(81, 5, 43),
(82, 5, 45),
(83, 5, 50),
(84, 5, 52),
(85, 5, 53),
(86, 5, 54),
(87, 5, 56),
(88, 6, 4),
(89, 6, 8),
(90, 6, 12),
(91, 6, 16),
(92, 6, 18),
(93, 6, 26),
(94, 6, 32),
(95, 6, 38),
(96, 6, 39),
(97, 6, 42),
(98, 6, 43),
(99, 6, 45),
(100, 6, 50),
(101, 6, 52),
(102, 6, 53),
(103, 6, 54),
(104, 6, 55),
(105, 6, 56),
(106, 7, 43),
(108, 7, 50),
(109, 7, 53),
(110, 7, 54),
(111, 7, 55),
(112, 7, 56),
(113, 7, 57),
(114, 8, 4),
(115, 8, 8),
(116, 8, 12),
(117, 8, 16),
(118, 8, 20),
(119, 8, 25),
(120, 8, 33),
(121, 8, 38),
(122, 8, 39),
(123, 8, 41),
(124, 8, 44),
(125, 8, 46),
(126, 8, 51),
(127, 8, 52),
(128, 8, 53),
(129, 8, 54),
(130, 8, 56);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `postal_code` varchar(20) DEFAULT NULL,
  `country` varchar(100) DEFAULT 'France',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `phone`, `address`, `city`, `postal_code`, `country`, `created_at`, `updated_at`) VALUES
(1, 'alexandrecbrs', 'alexandre@fictif.fr', '$2y$10$msVY8jeSxf.Nar1NLFaRHOQEDxJj4E.VOg8GQlWaa22lPvSSQHIVe', 'Alexandre', 'COUBERES', '+33 0122334455', '7 rue de Bahuet', 'Ussac', '19270', 'France', '2025-12-11 14:27:03', '2025-12-11 14:27:03');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `loginadmin`
--
ALTER TABLE `loginadmin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`email`);

--
-- Index pour la table `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pc_components`
--
ALTER TABLE `pc_components`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pc_id` (`pc_id`),
  ADD KEY `component_id` (`component_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `components`
--
ALTER TABLE `components`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pour la table `loginadmin`
--
ALTER TABLE `loginadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `pc`
--
ALTER TABLE `pc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `pc_components`
--
ALTER TABLE `pc_components`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `pc_components`
--
ALTER TABLE `pc_components`
  ADD CONSTRAINT `fk_pc_components_component` FOREIGN KEY (`component_id`) REFERENCES `components` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_pc_components_pc` FOREIGN KEY (`pc_id`) REFERENCES `pc` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
