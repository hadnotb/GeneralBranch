<?php 

class ArticleModel extends AbstractModel {
    
    function getOneArticle(int $id): array
    {
        $sql = 'SELECT *
                FROM article
                WHERE id = ?';
    
        $article = $this->database->getOneResult($sql, [$id]);
    
        return $article;
    }

    function getAllArticles(): array
    {
        $sql = 'SELECT *
                FROM article
                ORDER BY created_at DESC';

        $articles = $this->database->getAllResults($sql);

        return $articles;
    }

}