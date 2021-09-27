CREATE TABLE `image` (
  `idImg` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idArt` int(10) unsigned NOT NULL,
  `idCoul` int(10) unsigned NOT NULL,
  `imgPath` varchar(128) NOT NULL,
  `imgNum` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idImg`),
  KEY `fk_img_article` (`idArt`),
  KEY `fk_img_coul` (`idCoul`),
  CONSTRAINT `fk_img_article` FOREIGN KEY (`idArt`) REFERENCES `model_article` (`idArticle`),
  CONSTRAINT `fk_img_coul` FOREIGN KEY (`idCoul`) REFERENCES `couleur` (`idCouleur`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
