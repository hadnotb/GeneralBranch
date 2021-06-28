<?php
namespace App\Controller;
use App\Model\ArticleModel;
use App\Framework\UserSession;
use App\Framework\AbstractController;

class HomeController extends AbstractController{

    public function index()
    {
        $articleModel = new ArticleModel();
        $articles = $articleModel -> getAllArticles();

        return render('home', [
            'pageTitle' => 'Accueil',
            'articles' => $articles
            
         ]);
        // $this->redirect('homepage');
    }

}