<?php

namespace App\Model;

use App\Framework\AbstractModel;

class ArticleModel extends AbstractModel
// Va chercher les propriétés parents s'il le faut. Le database est dans l'abstractModel par exemple ici. 
{   
    // Récupère un article ainsi que sa catégorie. L'alias article_id pour art.id évitera de confondre id de la table category.
    /**
     * Sélectionne un article à partir de son identifiant
     */
    function getOneArticle(int $id): array
    {
        $sql = 'SELECT A.id AS article_id, title, content, A.created_at, C.label AS category_label, A.category_id, U.firstname, U.lastname
        FROM article AS A
        INNER JOIN category AS C ON A.category_id = C.id
        INNER JOIN user AS U ON U.id = A.user_id
        WHERE A.id = ?';
    
        $article = $this->database->getOneResult($sql, [$id]);

        return $article;
    }
    /**
     * Sélectionne plusieurs articles
     * Le paramètre $categoryId est facultatif. S'il n'est pas présent ou si sa valeur est null, tous les articles sont sélectionnés
     * Si le paramètre $categoryId est présent et non null, on sélectionne uniquement les articles de la catégorie correspondante
     * 
     * Rem. : la jointure va chercher les données dans 2 tables qui ont le champ id en commun. Il est alors nécessaire 
     *        de spécifier dans la clause SELECT les champs individuellement en précisant éventuellement pour les champs ambigus la table et un alias
     */
    function getAllArticles(int $categoryId = null): array
    {
        $sql = 'SELECT A.id AS article_id, title, content, A.created_at, C.label AS category_label, A.category_id, U.firstname, U.lastname
                FROM article AS A
                INNER JOIN category AS C ON A.category_id = C.id
                INNER JOIN user AS U ON U.id = A.user_id';

        $params = [];

        /**
         * Si on cherche les articles d'une catégorie spécifique, on ajoute une clause WHERE à la requête SQL pour filtrer les articles sur cette catégorie
         * On complète également le tableau de paramètres
         */
        if ($categoryId) {
            $sql .= ' WHERE A.category_id = ?';
            $params[] = $categoryId;
        }
                
        $sql .= ' ORDER BY A.created_at DESC';

        $articles = $this->database->getAllResults($sql, $params);

        return $articles;
    }
    // Sélection des articles selon leur id en prenant en paramètre l'id de la catégorie.
    function getAllArticlesByCategoryId($id)
    {
        $sql = 'SELECT  *, art.id AS article_id 
        FROM article art 
        INNER JOIN category cat ON art.category_Id = cat.id 
        WHERE art.category_Id = ?;';
    
    // Prend en paramètre la requête sql et l'id de la catégorie recherchée. 
    $articles = $this->database->getAllResults($sql, [$id]);
    return $articles;
    }
    // Fonction d'insertion d'un article dans la base de données :
    // Elle prend en paramètre le titre, le contenu et l'id de la catégorie. 
    // On rédige la requête SQL qu'on stocke dans $sql. La fonction NOW() de SQL permet de donner la date d'insertion dans la base de données, ici, MAINTENANT.
    public function insert(string $title, string $content, int $categoryId, int $userId)
    {
        $sql = 'INSERT INTO article 
                (title, content, category_id, user_id, created_at)
                VALUES (?,?,?,?,NOW())';

    // On procède à l'exécution de la requête SQL via la fonction executeQuery provenant de l'objet database. Cette fonction, reçoit en paramètre la requête SQL dans la variable $sql, ainsi qu'un tablea contenant les variables du titre, du contenu, et de l'id de la catégorie. 
    $this->database->executeQuery($sql, [$title, $content, $categoryId, $userId]);
    }
    // Fonction de modification d'un article en base de données. 
    // Elle prend en paramètre le titre, le contenu la catégorie et l'id de l'article. 
    // On rédige la requête SQL de modification grâce à UPDATE.
    // Enfin, on exécute la requête avec les paramètres précédents grâce à la fonction executeQuery.
    public function edit(string $title, string $content, int $categoryId, int $articleId)
    {
        $sql = 'UPDATE article
                SET title = ?,
                content = ?,
                category_Id = ?
                WHERE id = ?';
    $this->database->executeQuery($sql, [$title, $content, $categoryId, $articleId]);
    }
    // Fonction de suppresion d'un article en base de données.
    // Cette fonction prend en paramètre l'id de l'article.
    // Ensuite on stock dans la variable $sql la requête SQL de suppression à effectuer. 
    // Enfin, on execute la requête via la fonction executeQuery qui se trouve dans l'objet database. Cette fonction reçoit en paramètre la variable sql ainsi que l'id de l'article à supprimer. 
    public function delete(int $articleId)
    {
        $sql = 'DELETE
                FROM article
                WHERE id = ?';
        $this->database->executeQuery($sql, [$articleId]);
    }
}