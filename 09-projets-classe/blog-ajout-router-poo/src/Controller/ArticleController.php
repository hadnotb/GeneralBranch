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
        // public function addComment()
        // {
        //     $articleId = (int) $_POST['article-id'];
        //     $content = trim($_POST['content']);
        //     $idUser = UserSession::getId();

            

        //     $_SESSION['flash'] = [
        //         'errors' => []
        //     ];
            
        //     if (!$content) {
        //     //  $_SESSION['flash']['errors'][] = 'Le champ Commentaire est obligatoire';
        //     FlashBag::addFlash('Le champ Commentaire est obligatoire', 'error');
        //     }

            
        //     // ------------------------------------------
        //     // Si le tableau d’erreurs est vide, on va insérer le commentaire dans la base de données. On commencera par créer la connexion PDO :

        //     if (empty($_SESSION['flash']['errors'])) {

        //         /*$dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=UTF8';
            
        //         $pdo = new PDO($dsn, DB_USER, DB_PASSWORD, [
        //             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        //             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        //         ]);

        //         $sql = 'INSERT INTO comment
        //         (content, created_at, idArticle) VALUES (?, NOW(), ?)';


        //     $pdoStatement = $pdo->prepare($sql);
        //     $pdoStatement->execute([$content, $articleId]);*/
        //         $commentModel = new CommentModel();
        //         $commentModel -> insertComment ($content, $articleId,$idUser);
            

        //     /*$_SESSION['flash']['success'] = ['Votre commentaire a bien été ajouté.'];*/
        //     FlashBag::addFlash('Votre commentaire a bien été ajouté.');
        //         // header('Location: ' . buildUrl('article', ['id' => $articleId]));
        //         // exit;
        //         include TEMPLATE_DIR . '/comment.phtml';
        //         exit;
        //     }
        // }
        public function addComment()
        {
            // Si l'utilisateur n'est pas connecté on n'ajoute pas de commentaire
            if (UserSession::isAuthenticated()) {
    
                $articleId = (int) $_POST['article-id'];
                $content = trim($_POST['content']);
    
                // Validation du formulaire : le champ commentaire est-il correctement rempli ?
                $errors = [];
    
                if (strlen($content)===0) {
                    $errors[] = 'Le champ Commentaire est obligatoire';
                }
    
                // Pour chaque erreur on ajoute un message flash d'erreur
                foreach ($errors as $error) {
                    // FlashBag::addFlash($error, 'error');
                }
    
                // S'il n'y a pas d'erreurs
                if (empty($errors)) {
    
                    $userId = UserSession::getId();
                    $commentModel = new CommentModel();
                    $commentId = $commentModel->insertComment($content, $articleId, $userId);
    
                    // FlashBag::addFlash('Votre commentaire a bien été ajouté.');
    
                    // On va sélectionner le commentaire ajouté pour récupérer toutes les données
                    $comment = $commentModel->getOneComment($commentId);
    
                    // Envoi du code HTML du commentaire ajouté
                    include TEMPLATE_DIR . '/comment.phtml';
                    exit;
                }
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