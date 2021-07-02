Use SundayMorning ;

CREATE TABLE taille (
	idTaille INT UNSIGNED NOT NULL AUTO_INCREMENT,
    libTaille VARCHAR(128) NOT NULL,
    PRIMARY KEY (idTaille)
) ENGINE = InnoDB;

CREATE TABLE marque (
	idMarque INT UNSIGNED NOT NULL AUTO_INCREMENT,
    libMarque VARCHAR(128) NOT NULL,
    PRIMARY KEY (idMarque)
) ENGINE = InnoDB;

CREATE TABLE couleur (
	idCouleur INT UNSIGNED NOT NULL AUTO_INCREMENT,
	libCouleur VARCHAR(128) NOT NULL,
    PRIMARY KEY (idCouleur)
) ENGINE = InnoDB;

CREATE TABLE categorie (
	idCategorie INT UNSIGNED NOT NULL AUTO_INCREMENT,
	libCategorie VARCHAR(128) NOT NULL,
    PRIMARY KEY (idCategorie)
) ENGINE = InnoDB;

CREATE TABLE model_article (
	idArticle INT UNSIGNED NOT NULL AUTO_INCREMENT,
    libArticle VARCHAR(128) NOT NULL,
    idMarque INT UNSIGNED NULL,
    idCategorie INT UNSIGNED NULL,
    prix INT UNSIGNED NOT NULL,
    details mediumtext,
    type VARCHAR(254),  
    PRIMARY KEY (idArticle),
    CONSTRAINT fk_marque
    FOREIGN KEY (idMarque)
	REFERENCES marque(idMarque),
    CONSTRAINT fk_categorie
    FOREIGN KEY (idCategorie)
	REFERENCES categorie(idCategorie)
) ENGINE = InnoDB;



CREATE TABLE article (
	idArticle INT UNSIGNED NOT NULL,
    idCoul INT UNSIGNED NOT NULL,
    idTai INT UNSIGNED NOT NULL,
    nbEle INT UNSIGNED NOT NULL,
    UNIQUE (idArticle, idCouleur,idTaille),
    CONSTRAINT fk_article
    FOREIGN KEY (idArticle)
    REFERENCES model_article(idArticle),
    CONSTRAINT fk_couleur
    FOREIGN KEY (idCouleur)
    REFERENCES couleur(idCouleur),
    CONSTRAINT fk_taille
    FOREIGN KEY (idTaille)
    REFERENCES taille(idTaille)
) ENGINE = InnoDB;


