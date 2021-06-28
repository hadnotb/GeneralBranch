<?php
namespace App\Controller;
use App\Model\ArticleModel;
use App\Model\CommentModel;
use App\Framework\FlashBag;
use App\Framework\AbstractController;

use App\Framework\UserSession;

    class ArticleController extends AbstractController
    {
        public function index()
        {
            if (!array_key_exists('id', $_GET) || !$_GET['id'] || !ctype_digit($_GET['id']) ) {
                include CONTROLLER_DIR . '/404.php';
                exit;
             }
             
            $id = (int) $_GET['id'];
            $articleModel = new ArticleModel();
            $article = $articleModel -> getOneArticle($id);

            if (!$article) {
                include CONTROLLER_DIR . '/404.php';
                exit;
            }
            if (!$article) {
                include CONTROLLER_DIR . '/404.php';
                exit;
             }
             $commentModel = new CommentModel ();
             $comments = $commentModel -> getAllComments($id);

             return render('article', [
                'article' => $article,
                'comments' => $comments,
                'pageTitle'=> $article['title']
             ]);
            // $this->redirect('homepage');
        }
        public function addComment()
        {
            $articleId = (int) $_POST['article-id'];
            $content = trim($_POST['content']);
            $idUser = UserSession::getId();

            

            $_SESSION['flash'] = [
                'errors' => []
            ];
            
            if (!$content) {
            //  $_SESSION['flash']['errors'][] = 'Le champ Commentaire est obligatoire';
            FlashBag::addFlash('Le champ Commentaire est obligatoire', 'error');
            }

            
            // ------------------------------------------
            // Si le tableau d’erreurs est vide, on va insérer le commentaire dans la base de données. On commencera par créer la connexion PDO :

            if (empty($_SESSION['flash']['errors'])) {

                /*$dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=UTF8';
            
                $pdo = new PDO($dsn, DB_USER, DB_PASSWORD, [
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]);

                $sql = 'INSERT INTO comment
                (content, created_at, idArticle) VALUES (?, NOW(), ?)';


            $pdoStatement = $pdo->prepare($sql);
            $pdoStatement->execute([$content, $articleId]);*/
                $commentModel = new CommentModel();
                $commentModel -> insertComment ($content, $articleId,$idUser);
            

            /*$_SESSION['flash']['success'] = ['Votre commentaire a bien été ajouté.'];*/
            FlashBag::addFlash('Votre commentaire a bien été ajouté.');
                header('Location: ' . buildUrl('article', ['id' => $articleId]));
                exit;
            }
        }
        public function showArticlebyCat(){

            $id = (int) $_GET['id'];
            $articleModel = new ArticleModel();

            $category = $articleModel ->getAllArticleByCategorie($id);



            return $this -> render('category', [
                'category' => $category
            ]);
            
        }

    }