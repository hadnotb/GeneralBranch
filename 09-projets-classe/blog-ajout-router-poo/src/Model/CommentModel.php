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

        return $this -> database -> insert($sql, [$content, $articleId,$idUser]);
        }

    function getOneComment(int $commentId)
        {
                $sql = 'SELECT C.content, C.created_at, U.firstname, U.lastname
                        FROM comment AS C
                        INNER JOIN user AS U ON U.idUser = C.idUser
                        WHERE C.id = ?';

                $comment = $this->database->getOneResult($sql, [$commentId]);

                return $comment;
        }
}