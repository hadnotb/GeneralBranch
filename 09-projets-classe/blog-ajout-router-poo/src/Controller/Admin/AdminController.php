<?php
namespace App\Controller\Admin;
use App\Framework\AbstractController;
use App\Model\ArticleModel;
use App\Framework\UserSession;

class AdminController extends AbstractController{

    public function index()
    {
        return $this-> render('Admin/Admin', [
            'articles' => (new ArticleModel())->getAllArticles()
        ]);
    }    
} 
