<?php 

namespace App\Model;

use App\Framework\AbstractModel;

class ArticleModel extends AbstractModel {

    function getOneArticle(int $id): array
    {

        $sql = 'call Sp_modelArticleLire(:idArt)'; 
        $article = $this ->database ->getOneResult($sql,['idArt'=> $id]);
        return $article;

    }

}