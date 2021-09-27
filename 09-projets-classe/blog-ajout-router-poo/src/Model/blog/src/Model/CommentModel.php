<?php
namespace App\Model;
use App\Framework\AbstractModel;
use App\Framework\Database;

class CommentModel extends AbstractModel {

    function getAllComments(int $articleId): array
    {
        $sql = 'SELECT *
                FROM comment com
                INNER JOIN user us on us.idUser = com.idUser
                WHERE idArticle = ?
                ORDER BY com.created_at  DESC';

        $comments = $this->database->getAllResults($sql, [$articleId]);

        return $comments;
    }

    function insertComment(string $content, int $articleId, int $idUser)
        {
        $sql = 'INSERT INTO comment
                (content, created_at, idArticle,idUser) VALUES (?, NOW(), ?,?)';
        $database = new Database();

        $database -> executeQuery($sql, [$content, $articleId,$idUser]);
        }

}