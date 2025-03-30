-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 30 mars 2025 à 13:38
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `doctrine`
--

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

DROP TABLE IF EXISTS `billets`;
CREATE TABLE IF NOT EXISTS `billets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `billets`
--

INSERT INTO `billets` (`id`, `titre`, `contenu`, `date`) VALUES
(1, ' \"Seven\" : La quête de justice à travers les péchés capitaux', ' Seven est plus qu’un simple thriller policier : c’est une réflexion sur la nature du crime, de la justice et de la souffrance humaine. Les détectives Somerset (Morgan Freeman) et Mills (Brad Pitt) poursuivent un tueur en série qui tue ses victimes en fon', '2025-03-30 13:15:51'),
(3, 'Usual Suspects : Le twist ultime du cinéma noir', ' Usual Suspects est un thriller criminel qui déstabilise le spectateur avec un twist final magistral. Réalisé par Bryan Singer et écrit par Christopher McQuarrie, le film raconte l’histoire de l’enquête sur un groupe de criminels, dont le chef, Keyser Söz', '2025-03-30 13:17:06'),
(6, 'Zodiac : L\'obsession de la vérité et le poids de l\'échec', 'ATTENTION SPOILER. <BR>\r\n\r\n\r\n       <p style=\"text-indent: 20px;\"> Zodiac raconte l’histoire de l’enquête sur le tueur du Zodiac, un criminel insaisissable qui a terrorisé la région de San Francisco dans les années 60 et 70. Ce thriller magistral de David', '2025-03-30 13:16:20'),
(5, 'Le Silence des Agneaux : Un chef-d\'œuvre du thriller psychologique', 'Le Silence des Agneaux est un incontournable du cinéma qui a marqué l\'histoire du thriller psychologique. Réalisé par Jonathan Demme et sorti en 1991, ce film nous plonge dans l\'univers tordu de la criminalité et de la psychologie criminelle, avec une per', '2025-03-30 13:16:42'),
(7, 'Mindhunter : Une exploration psychologique captivante', 'Si vous êtes passionné par les enquêtes criminelles et l\'esprit des tueurs en série, Mindhunter, la série de David Fincher, est faite pour vous. Disponible sur Netflix, elle suit deux agents du FBI, Holden Ford et Bill Tench, qui interrogent des tueurs en', '2025-03-30 13:17:26'),
(8, 'Si vous avez aimé Zodiac, découvrez le nouveau documentaire sur Netflix', 'Pour les amateurs de mystères non résolus, Netflix a récemment sorti un documentaire passionnant sur l’affaire du tueur du Zodiaque. Si le film Zodiac de David Fincher vous a captivé, ce documentaire va plus loin en explorant des preuves, des témoignages,', '2025-03-30 13:17:47');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int NOT NULL AUTO_INCREMENT,
  `commentaire` varchar(255) NOT NULL,
  `id_auteur` int NOT NULL,
  `id_billet` int NOT NULL,
  `date_com` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_auteur`, `id_billet`, `date_com`) VALUES
(9, 'La saison 1 est meilleure', 2, 7, '2025-03-30 13:20:12'),
(8, 'super !!', 3, 8, '2025-03-30 13:19:48'),
(7, 'je viens de la regarder, j\'ai adoré <3', 4, 8, '2025-03-30 13:19:16'),
(10, 'mon film prefere <3', 2, 3, '2025-03-30 13:20:56'),
(11, 'je lai trouvé un peu gore', 2, 5, '2025-03-30 13:21:23'),
(12, 'meilleur film ever !!', 4, 1, '2025-03-30 13:21:45');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `mdp`, `photo`) VALUES
(1, 'root', '$2y$10$L6uc6Ox8QFZnikFdc7upbelG/rs5JUiIvSm5oJ8hDoVbGC1C/Q0z6', NULL),
(2, 'louna', '$2y$10$VBrIUI.cB.5OW1NvOh/I2eJT0TIBv0QnJKLISk.XBuXXZJiVtbYCe', NULL),
(5, 'test', '$2y$10$9MNV0tNyZ2bbdrYFjw4FdOByKOXWKsTSazVMANozkFcthjwLg9Po.', NULL),
(4, 'ines', '$2y$10$t6ee/xCtYYMcC6bOIzM.1e5gmB2RkoWBYokeVdUvhw0ShEHHNn8Ku', NULL),
(3, 'marguerite', '$2y$10$qQ/qoM5NHBw3SMCyg8z91OYxHOtt2T7a/YHNFsEsUDpEo224WC4qG', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
