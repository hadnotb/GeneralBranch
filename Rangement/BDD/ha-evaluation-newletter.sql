-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 02 juil. 2021 à 13:51
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ha-evaluation-newletter`
--

-- --------------------------------------------------------

--
-- Structure de la table `origins`
--

DROP TABLE IF EXISTS `origins`;
CREATE TABLE IF NOT EXISTS `origins` (
  `id_origin` int(11) NOT NULL AUTO_INCREMENT,
  `origin_label` varchar(255) NOT NULL,
  PRIMARY KEY (`id_origin`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `origins`
--

INSERT INTO `origins` (`id_origin`, `origin_label`) VALUES
(1, 'Un ami m\'en a parler '),
(2, 'Recherche sur internet'),
(3, 'Publicité a la TV');

-- --------------------------------------------------------

--
-- Structure de la table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE IF NOT EXISTS `subscribers` (
  `id_subscriber` int(11) NOT NULL AUTO_INCREMENT,
  `createdAt` datetime NOT NULL,
  `email` varchar(100) NOT NULL,
  `origin_id` int(11) NOT NULL,
  PRIMARY KEY (`id_subscriber`),
  UNIQUE KEY `email` (`email`),
  KEY `origin_id` (`origin_id`),
  KEY `origin_id_2` (`origin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `subscribers`
--

INSERT INTO `subscribers` (`id_subscriber`, `createdAt`, `email`, `origin_id`) VALUES
(1, '2021-06-30 09:36:49', 'hichem.ahah@gmail.com', 1),
(2, '2021-06-30 09:38:42', 'ben_hichem@msn.com', 3),
(3, '2021-06-30 09:41:15', 'bibi.bobo@gmail.com', 2),
(4, '2021-06-30 09:43:29', 'marcel.patoulaci@gmail.com', 1),
(5, '2021-06-30 10:19:50', 'ah.ah@gmail.com', 2),
(6, '2021-06-30 10:32:32', 'bibi@bobo.com', 2),
(7, '2021-06-30 10:34:48', 'dqsd@gmail.com', 3),
(8, '2021-06-30 14:11:57', 'ahahahaha@gmail.com', 2);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `origins`
--
ALTER TABLE `origins`
  ADD CONSTRAINT `origins_ibfk_1` FOREIGN KEY (`id_origin`) REFERENCES `subscribers` (`origin_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
