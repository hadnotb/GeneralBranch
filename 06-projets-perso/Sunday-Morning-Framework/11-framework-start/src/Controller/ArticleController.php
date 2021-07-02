<?php

namespace App\Controller;

use App\Model\ArticleModel;

use App\Framework\AbstractController;

class ArticleController extends AbstractController
{

    public function index()
    {

        if(!isset($_GET["idArt"])) {
            return;
        }

        $articleModel = new ArticleModel();
        $article = $articleModel->getOneArticle($_GET["idArt"]);
        return $this->render('article');

    }

}