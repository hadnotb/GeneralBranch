<?php
namespace App\Model;
use App\Framework\AbstractModel;


class ArticleModel extends AbstractModel {

    function getOneArticle(int $idArt): array
    {
       $sql = 'call Sp_modelArticleLire(:idArt)';
    
       $article = $this -> database -> getOneResult($sql,['idArt' => $idArt]);
    
       return $article;


    }
}