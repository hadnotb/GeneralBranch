<?php 

class CommentModel extends AbstractModel {

    function getAllComments(int $articleId): array
    {
        $sql = 'SELECT *
                FROM comment
                WHERE article_id = ?
                ORDER BY created_at DESC';

        $comments = $this->database->getAllResults($sql, [$articleId]);

        return $comments;
    }
}