DELIMITER //
DROP PROCEDURE IF EXISTS Sp_AmodelArticleLire//
CREATE PROCEDURE Sp_modelArticleLire(idArt INT) 
BEGIN
	SELECT mdar.libArticle, cat.libCategorie,GROUP_CONCAT(tai.libTaille SEPARATOR ";") AS artail , mdar.details, mdar.prix, col.libCouleur 
	FROM model_article mdar 
	INNER JOIN article art on art.idArticle = mdar.idArticle
							AND art.nbEle > 0
	INNER JOIN couleur col on art.idCouleur = col.idCouleur
	INNER JOIN taille tai on art.idTaille = tai.idTaille
	INNER JOIN categorie cat on mdar.idCategorie = cat.idCategorie
	INNER JOIN marque mrq on mdar.idMarque = mrq.idMarque
    WHERE mdar.idArticle = idArt;
END//
