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
            
           
            if(!UserSession::hasRole('ADMIN','EDITOR')){
                http_response_code(403);
                echo "Accés interdit";
                exit;
            }
           
            $title = trim($_POST['title']);
            $content = trim($_POST['content']);
            $categoryId = intval($_POST['category']);
            $userId = UserSession::getId();
            
            $img=trim($_FILES['img']['name']);
            
            if(!$title){FlashBag::addFlash('Titre obligatoire','error');}
            if(!FlashBag::hasMessages('error'))
            {
                if ($_FILES['img'] && $_FILES['img']['error'] == 0)
                {

                    if($_FILES['img']['size'] <= 1000000)
                    {

                        $infosfichier = pathinfo($_FILES['img']['name']);
                        dump($infosfichier);
                        $extension_upload = $infosfichier['extension'];
                        dump($extension_upload);
                        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                        if (in_array($extension_upload,$extensions_autorisees))
                        {

                            move_uploaded_file($_FILES['img']['tmp_name'],PROJECT_BASE_DIR."/public/img"."/".$img);
                        }
                    }
                

                }
                // if($_FILES['img']){

                //     if($_FILES)
                //     move_uploaded_file($_FILES['img']['tmp_name'],PROJECT_BASE_DIR."/public/img"."/".$img);

                // }
                $articlemodel = new ArticleModel;
                $articlemodel -> insertArticle($title,$content,$categoryId,$userId,$img);
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
        if(!UserSession::hasRole('ADMIN','EDITOR')){
            http_response_code(403);
            echo "Accés interdit";
            exit;
        }    
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
            // 'libCat'=> $categories['libCategorie']
        ]);

    }
    


}