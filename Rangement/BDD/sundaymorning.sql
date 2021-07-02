-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 02 juil. 2021 à 13:52
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
-- Base de données :  `sundaymorning`
--

DELIMITER $$
--
-- Procédures
--
DROP PROCEDURE IF EXISTS `Sp_ArticleAllLire`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_ArticleAllLire` (`idArt` INT)  BEGIN
	SELECT mdar.libArticle, cat.libCategorie, tai.libTaille, mdar.details, mdar.prix
	FROM model_article mdar 
	INNER JOIN article art on art.idArt = mdar.idArticle
							AND art.nbEle > 0
	INNER JOIN couleur col on art.idCoul = col.idCouleur
	INNER JOIN taille tai on art.idTai = tai.idTaille
	INNER JOIN categorie cat on mdar.idCategorie = cat.idCategorie
	INNER JOIN marque mrq on mdar.idMarque = mrq.idMarque
    WHERE mdar.idArticle = idArt;
END$$

DROP PROCEDURE IF EXISTS `Sp_modelArticleLire`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_modelArticleLire` (`idArt` INT)  BEGIN
	SELECT mdar.libArticle, cat.libCategorie,GROUP_CONCAT(tai.libTaille SEPARATOR ";") AS artail , mdar.details, mdar.prix, GROUP_CONCAT(col.libCouleur SEPARATOR ";") AS listcoul, 
    GROUP_CONCAT(DISTINCT img.imgPath SEPARATOR ";") AS imgLst
	FROM model_article mdar 
	INNER JOIN article art on art.idArt = mdar.idArticle
							AND art.nbEle > 0
	INNER JOIN couleur col on art.idCoul = col.idCouleur
	INNER JOIN taille tai on art.idTai = tai.idTaille
	INNER JOIN categorie cat on mdar.idCategorie = cat.idCategorie
	INNER JOIN marque mrq on mdar.idMarque = mrq.idMarque
    INNER JOIN image img ON img.idArt = art.idArt
						AND img.idCoul = col.idCouleur
    WHERE mdar.idArticle = idArt;
END$$

DROP PROCEDURE IF EXISTS `Sp_Sp_ArticleAllLire`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_Sp_ArticleAllLire` (`idArt` INT)  BEGIN
	SELECT mdar.libArticle, cat.libCategorie, tai.libTaille, mdar.details, mdar.prix, art.nbEle
	FROM model_article mdar 
	INNER JOIN article art on art.idArt = mdar.idArticle
	INNER JOIN couleur col on art.idCoul = col.idCouleur
	INNER JOIN taille tai on art.idTai = tai.idTaille
	INNER JOIN categorie cat on mdar.idCategorie = cat.idCategorie
	INNER JOIN marque mrq on mdar.idMarque = mrq.idMarque
    WHERE mdar.idArticle = idArt;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `idArt` int(10) UNSIGNED NOT NULL,
  `idCoul` int(10) UNSIGNED NOT NULL,
  `idTai` int(10) UNSIGNED NOT NULL,
  `nbEle` int(10) UNSIGNED NOT NULL,
  UNIQUE KEY `idArt` (`idArt`,`idCoul`,`idTai`),
  KEY `fk_coul` (`idCoul`),
  KEY `fk_taille` (`idTai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idArt`, `idCoul`, `idTai`, `nbEle`) VALUES
(1, 1, 1, 1),
(1, 1, 2, 2),
(1, 2, 1, 1),
(2, 3, 2, 1),
(2, 4, 6, 2),
(3, 2, 3, 2),
(3, 3, 4, 1),
(4, 2, 5, 2),
(4, 3, 6, 0),
(5, 1, 1, 2),
(6, 4, 2, 1),
(7, 1, 4, 1),
(7, 4, 5, 5);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idCategorie` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libCategorie` varchar(128) NOT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `libCategorie`) VALUES
(1, 'Chemises'),
(2, 'Pantalons'),
(3, 'Pulls'),
(4, 'T-shirts');

-- --------------------------------------------------------

--
-- Structure de la table `couleur`
--

DROP TABLE IF EXISTS `couleur`;
CREATE TABLE IF NOT EXISTS `couleur` (
  `idCouleur` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libCouleur` varchar(128) NOT NULL,
  PRIMARY KEY (`idCouleur`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `couleur`
--

INSERT INTO `couleur` (`idCouleur`, `libCouleur`) VALUES
(1, 'Noir'),
(2, 'Blanc'),
(3, 'Bleu'),
(4, 'Rouge');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `idImg` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idArt` int(10) UNSIGNED NOT NULL,
  `idCoul` int(10) UNSIGNED NOT NULL,
  `imgPath` varchar(128) NOT NULL,
  `imgNum` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`idImg`),
  KEY `fk_img_article` (`idArt`),
  KEY `fk_img_coul` (`idCoul`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`idImg`, `idArt`, `idCoul`, `imgPath`, `imgNum`) VALUES
(1, 1, 1, 'article_1_bleu.jpg', 1),
(2, 1, 2, 'article_1_vert.jpg', 2);

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `idMarque` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libMarque` varchar(128) NOT NULL,
  PRIMARY KEY (`idMarque`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`idMarque`, `libMarque`) VALUES
(1, 'Levi\\\'s'),
(2, 'Vans'),
(3, 'Volcom'),
(4, 'Lacoste');

-- --------------------------------------------------------

--
-- Structure de la table `model_article`
--

DROP TABLE IF EXISTS `model_article`;
CREATE TABLE IF NOT EXISTS `model_article` (
  `idArticle` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libArticle` varchar(128) NOT NULL,
  `idMarque` int(10) UNSIGNED DEFAULT NULL,
  `idCategorie` int(10) UNSIGNED DEFAULT NULL,
  `prix` int(10) UNSIGNED NOT NULL,
  `details` mediumtext,
  PRIMARY KEY (`idArticle`),
  KEY `fk_marque` (`idMarque`),
  KEY `fk_categorie` (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `model_article`
--

INSERT INTO `model_article` (`idArticle`, `libArticle`, `idMarque`, `idCategorie`, `prix`, `details`) VALUES
(1, 'Jackson chemise delave ', 1, 1, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ita cum ea volunt retinere, quae superiori sententiae conveniunt, in Aristonem incidunt; Nam ceteris in rebus síve praetermissum sivesum sive'),
(2, 'Smith Trouser', 2, 2, 50, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ita cum ea volunt retinere, quae superiori sententiae conveniunt, in Aristonem incidunt; Nam ceteris in rebus síve praetermissum sive'),
(3, 'Guner crew neck', 3, 3, 45, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ita cum ea volunt retinere, quae superiori sententiae conveniunt, in Aristonem incidunt; Nam ceteris in rebus síve praetermissum sive'),
(4, 'Kronos', 4, 4, 17, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ita cum ea volunt retinere, quae superiori sententiae conveniunt, in Aristonem incidunt; Nam ceteris in rebus síve praetermissum sive ignoratum est quippiam, non plus incommodi est, quam quanti quaeque earum rerum est, in quibus neglectum est aliquíd. Ratio ista, quam defendis, praecepta, quae didicisti, quae probas, funditus evertunt amicitiam, quamvis eam Epicurus, ut facit, in caelum efferat laudibus. Nulla profecto est, quin suam vim retineat a primo ad extremum. '),
(5, '501', 1, 2, 50, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ita cum ea volunt retinere, quae superiori sententiae conveniunt, in Aristonem incidunt; Nam ceteris in rebus síve praetermissum sive'),
(6, 'Flemming', 3, 3, 50, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ita cum ea volunt retinere, quae superiori sententiae conveniunt, in Aristonem incidunt; Nam ceteris in rebus síve praetermissum sive'),
(7, 'Brutus', 3, 3, 45, ' Nam ceteris in rebus síve praetermissum sive ignoratum est quippiam, non plus incommodi est');

-- --------------------------------------------------------

--
-- Structure de la table `taille`
--

DROP TABLE IF EXISTS `taille`;
CREATE TABLE IF NOT EXISTS `taille` (
  `idTaille` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libTaille` varchar(128) NOT NULL,
  PRIMARY KEY (`idTaille`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `taille`
--

INSERT INTO `taille` (`idTaille`, `libTaille`) VALUES
(1, 'XS'),
(2, 'S'),
(3, 'M'),
(4, 'L'),
(5, 'Xl'),
(6, 'XXL');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article` FOREIGN KEY (`idArt`) REFERENCES `model_article` (`idArticle`),
  ADD CONSTRAINT `fk_coul` FOREIGN KEY (`idCoul`) REFERENCES `couleur` (`idCouleur`),
  ADD CONSTRAINT `fk_taille` FOREIGN KEY (`idTai`) REFERENCES `taille` (`idTaille`);

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk_img_article` FOREIGN KEY (`idArt`) REFERENCES `model_article` (`idArticle`),
  ADD CONSTRAINT `fk_img_coul` FOREIGN KEY (`idCoul`) REFERENCES `couleur` (`idCouleur`);

--
-- Contraintes pour la table `model_article`
--
ALTER TABLE `model_article`
  ADD CONSTRAINT `fk_categorie` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`),
  ADD CONSTRAINT `fk_marque` FOREIGN KEY (`idMarque`) REFERENCES `marque` (`idMarque`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
