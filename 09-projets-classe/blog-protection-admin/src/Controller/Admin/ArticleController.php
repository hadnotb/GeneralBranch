<?php 
namespace App\Controller\Admin;
use App\Framework\AbstractController;
use App\Model\CategoryModel;
use App\Framework\Database;
use App\Framework\FlashBag;
use App\Framework\UserSession;
use App\Model\ArticleModel;

class ArticleController extends AbstractController{

    public function new()
    {   
        if($_POST)
        {
            $title = trim($_POST['title']);
            $content = trim($_POST['content']);
            $categoryId = intval($_POST['category']);
            $userId = UserSession::getId();

            if(!$title){FlashBag::addFlash('Titre obligatoire','error');}
            if(!FlashBag::hasMessages('error'))
            {
                $articlemodel = new ArticleModel;
                $articlemodel -> insertArticle($title,$content,$categoryId,$userId);
                FlashBag::addFlash('Article ajouté');
                $this -> redirect('admin');
            }
        }
        $categoryModel = new CategoryModel;
        $categories = $categoryModel -> getAllCategorie();

        return $this->render('admin/article/new',[
            'categories' => $categories]);

    }
    public function edit()
    {          
            
        $id = $_GET['id'];
        // $title = $_GET['title'];
        // dump($title);
        // dump($id);
        $ArticleModel = new ArticleModel;
        $article = $ArticleModel -> getOneArticle($id);
        $categoryModel = new CategoryModel;
        $categories = $categoryModel -> getAllCategorie();


        return $this->render('admin/article/edit',[
            'article' => $article,
            'categories' => $categories,
            'libCat'=> $categories['libCategorie']
        ]);

    }
    


}