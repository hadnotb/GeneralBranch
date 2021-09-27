<?php
namespace App\Model;
use App\Framework\AbstractModel;


class ArticleModel extends AbstractModel {

    function getAllArticles(): array
    {
       $sql = 'SELECT *
               FROM article art
               INNER JOIN categorie cat on cat.idCategorie = art.idCategorie
               ORDER BY created_at DESC';
    
       $articles = $this -> database -> getAllResults($sql);
    
       return $articles;
    }
    
    function getOneArticle(int $id): array
    {
       $sql = 'SELECT *
               FROM article art
               INNER JOIN categorie cat on cat.idCategorie = art.idCategorie
               WHERE art.idArticle = ?';
    
       $article = $this -> database -> getOneResult($sql,[$id]);
    
       return $article;
    }

   function getAllArticleByCategorie($id){

        $sql = 'SELECT art.*,cat.*
               FROM article art
               INNER JOIN categorie cat on cat.idCategorie = art.idCategorie
               WHERE cat.idCategorie = ?
               ORDER BY created_at DESC';
            

        $category = $this -> database -> getAllResults($sql,[$id]);
        return $category;

   }
    
}