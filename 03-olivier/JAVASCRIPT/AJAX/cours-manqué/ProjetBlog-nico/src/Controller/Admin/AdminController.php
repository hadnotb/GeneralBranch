<?php

namespace App\Controller\Admin;

use App\Framework\AbstractController;
use App\Model\ArticleModel;

class AdminController extends AbstractController
{
    // Fonction responsable de l'affichage du tableau de bord.
    public function index()
    {
        return $this->render('admin/admin', [
            'articles' => (new ArticleModel())->getAllArticles()
        ]);
    }
}