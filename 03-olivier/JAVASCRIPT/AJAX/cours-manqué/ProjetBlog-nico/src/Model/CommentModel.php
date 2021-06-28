<?php

namespace App\Model;

use App\Framework\AbstractModel;

// Création de l'objet commentaires
class CommentModel extends AbstractModel
// Va chercher les propriétés parents s'il le faut. Le database est dans l'abstractModel par exemple ici. 
{
    // Création d'une fonction qui va chercher tous les commentaires en prenant en paramètre l'id du commenaire et l'utilisateur qui a commenté. 
    function getAllComments(int $articleId): array
    {
        $sql = 'SELECT *
        FROM comment com
        INNER JOIN user u ON com.user_id = u.id
        WHERE article_id = ?
        ORDER BY com.created_at DESC;';

        // Enfin, on stocke dans $comments, la variable $database qui exéculte tous les résultats de la fonction getAllResults en prenant en paramètre la requête $sql du dessus et en recevant en second paramètre la variable de l'id $articleId.
        $comments = $this->database->getAllResults($sql, [$articleId]);

        return $comments;
    }
    // Fonction d'insertion d'un commentaire prenant en paramètre le contenu du commentaire et l'id de l'article. Enfin, on stock dans $comments la procédure d'exécution de la requête sql qui reçoit un tableau avec la variable $content du contenu du commentaire et $articleId qui correspond à l'id de l'article commenté en question, on ajoute également l'id du commentateur.
    function insertComment(string $content, int $articleId, int $userId)
    {
    $sql = 'INSERT INTO comment
           (content, created_at, article_id, user_id) 
           VALUES (?, NOW(), ?, ?);';
    $comments = $this->database->insert($sql, [$content, $articleId, $userId]);
    }
    // Fonction qui ramène un seul commentaire.
    function getOneComment(int $commentId)
    {
        $sql = 'SELECT C.content, C.created_at, U.firstname, U.lastname
                FROM comment AS C
                INNER JOIN user AS U ON U.id = C.user_id
                WHERE C.id = ?';

        $comment = $this->database->getOneResult($sql, [$commentId]);

        return $comment;
    }
}