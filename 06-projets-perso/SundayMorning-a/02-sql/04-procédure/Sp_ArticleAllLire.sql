DELIMITER //
DROP PROCEDURE IF EXISTS Sp_ArticleAllLire//
CREATE PROCEDURE Sp_Sp_ArticleAllLire(idArt INT) 
BEGIN
	SELECT art.libArticle, cat.libCategorie, tai.libTaille, art.details, art.prix
	FROM article art 
	INNER JOIN article_couleur arco on art.idArticle = arco.idArticle
	INNER JOIN couleur col on arco.idCouleur = col.idCouleur
	INNER JOIN article_taille arta on art.idArticle = arta.idArticle
	INNER JOIN taille tai on arta.idTaille = tai.idTaille
	INNER JOIN categorie cat on art.idCategorie = cat.idCategorie
	INNER JOIN marque mrq on art.idMarque = mrq.idMarque
    WHERE art.idArticle = idArt;
END//