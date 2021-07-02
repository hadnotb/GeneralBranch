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
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articlecategorie`
--

DROP TABLE IF EXISTS `articlecategorie`;
CREATE TABLE IF NOT EXISTS `articlecategorie` (
  `idArt` int(11) DEFAULT NULL,
  `idCat` int(11) DEFAULT NULL,
  UNIQUE KEY `idArt` (`idArt`,`idCat`),
  KEY `fk_categorie` (`idCat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articlecategorie`
--

INSERT INTO `articlecategorie` (`idArt`, `idCat`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 4),
(3, 1),
(3, 4),
(4, 1),
(4, 3),
(5, 5),
(6, 5),
(7, 5),
(8, 5),
(9, 6),
(10, 6);

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `idAut` int(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libPrenomAut` varchar(128) NOT NULL,
  `libNomAut` varchar(128) NOT NULL,
  PRIMARY KEY (`idAut`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`idAut`, `libPrenomAut`, `libNomAut`) VALUES
(1, 'Jonathan', 'Stellon'),
(2, 'Philippe', 'Etchebest'),
(3, 'Helene', 'Darroze'),
(4, 'Paul', 'Pairet');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idCat` int(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libCat` varchar(128) NOT NULL,
  PRIMARY KEY (`idCat`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCat`, `libCat`) VALUES
(1, 'recettes'),
(2, 'entrees'),
(3, 'plats'),
(4, 'desserts'),
(5, 'spiritueux'),
(6, 'adresses');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `idCom` int(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libCom` text,
  `idArt` int(11) DEFAULT NULL,
  `idAut` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`idCom`),
  KEY `fk_article` (`idArt`),
  KEY `fk_auteur` (`idAut`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`idCom`, `libCom`, `idArt`, `idAut`, `date`) VALUES
(1, 'blabla', 1, 1, '2021-12-01'),
(2, 'blabla', 1, 1, '2020-07-22'),
(3, 'blabla', 2, 2, '2021-02-13'),
(4, 'blabla', 5, 3, '2019-08-16'),
(5, 'blabla', 7, 1, '2019-09-13'),
(6, 'blabla', 7, 2, '2017-06-23'),
(8, 'bouloubi5', 5, 2, '2018-06-22');

-- --------------------------------------------------------

--
-- Structure de la table `couleur`
--

DROP TABLE IF EXISTS `couleur`;
CREATE TABLE IF NOT EXISTS `couleur` (
  `idCouleur` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libCouleur` varchar(128) NOT NULL,
  PRIMARY KEY (`idCouleur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `idMarque` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libMarque` varchar(128) NOT NULL,
  PRIMARY KEY (`idMarque`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `taille`
--

DROP TABLE IF EXISTS `taille`;
CREATE TABLE IF NOT EXISTS `taille` (
  `idTaille` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libTaille` varchar(128) NOT NULL,
  PRIMARY KEY (`idTaille`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
