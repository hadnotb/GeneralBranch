<?php
namespace App\Model;
use App\Framework\AbstractModel;
use App\Framework\Database;


class ArticleModel extends AbstractModel {

    function getAllArticles(): array
    {
       $sql = 'SELECT *
               FROM article art
               INNER JOIN categorie cat on cat.idCategorie = art.idCategorie
               INNER JOIN user us on art.idUser = us.idUser
               ORDER BY art.created_at DESC';
    
       $articles = $this -> database -> getAllResults($sql);
    
       return $articles;
    }
    
    function getOneArticle(int $id): array
    {
       $sql = 'SELECT *
               FROM article art
               INNER JOIN categorie cat on cat.idCategorie = art.idCategorie
               INNER JOIN user us on art.idUser = us.idUser
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
   function insertArticle ($title,$content,$idCat,$idUser,$img){

      $sql = 'INSERT INTO article (title,content,created_at,idCategorie,idUser,img)
                Values (?,?,now(),?,?,?)';

        $database = new Database();
        $database -> executeQuery($sql, [$title,$content,$idCat,$idUser,$img]);
   }
   function editArticle($title,$content,$idCat,$img,$idArt){

      $sql = 'UPDATE article
              set title = :titre,
                  content =:content,
                  idCat= :idCat,
                  img= :img
                  Where idArticle = :idArticle';
      $database = new Database();
      $database -> executeQuery($sql,['titre' => $title, 'content' =>$content, 'idCat' =>$idCat, 'img'=>$img, 'idArticle' =>$idArt]);

   }
  
    
}