<?php 

namespace App\Controller;

use App\Framework\AbstractController;
use App\Model\CommentModel;
use App\Framework\UserSession;
use App\Framework\FlashBag;
use App\Model\ArticleModel;

class ArticleController extends AbstractController
{

    public function index()
    {
        // Validation du paramètre id de la chaîne de requête. Si PB => 404
        if (!array_key_exists('id', $_GET) || !$_GET['id'] || !ctype_digit($_GET['id'])) {
            http_response_code(404); // On modifie le code de status de la réponse HTTP 
            echo '404 NOT FOUND'; // On affiche un message à l'internaute
            exit; // On arrête le script PHP, on n'a plus rien à faire ! 
        }

        // Récupérer le paramètre id de la chaîne de requête
        $articleId = (int) $_GET['id']; // ou bien $articleId = intval($_GET['id']);

        $articleModel = new ArticleModel();
        $article = $articleModel->getOneArticle($articleId);

        // Est-ce qu'il y a bien un résultat ? Sinon => 404
        if (!$article) {
            http_response_code(404); // On modifie le code de status de la réponse HTTP 
            echo '404 NOT FOUND'; // On affiche un message à l'internaute
            exit; // On arrête le script PHP, on n'a plus rien à faire ! 
        }

        // Get comments
        $commentModel = new CommentModel();
        $comments = $commentModel->getAllComments($articleId);

        // Affichage
        return $this->render('article', [
            'article' => $article,
            'comments' => $comments
        ]);
    }

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
                FlashBag::addFlash($error, 'error');
            }

            // S'il n'y a pas d'erreurs
            if (empty($errors)) {

                $userId = UserSession::getId();
                $commentModel = new CommentModel();
                $commentId = $commentModel->insertComment($content, $articleId, $userId);

                FlashBag::addFlash('Votre commentaire a bien été ajouté.');
            }

            // On va sélectionner le commentaire ajouté pour récupérer toutes les données
            $comment = $commentModel->getOneComment($commentId);
        }

        // Redirection
        $this->redirect('homepage');
        exit;
    }
    public function showArticlesByCategory()
    {
        // Récupérer le paramètre de l'URL category_Id.

        // Validation du paramètre id de la chaîne de requête de la clé.
        if (!array_key_exists('categoryId', $_GET) || !$_GET['categoryId'] || !ctype_digit($_GET['categoryId'])) {
            http_response_code(404); // On modifie le code de status de la réponse HTTP 
            echo '404 NOT FOUND'; // On affiche un message à l'internaute
            exit; // On arrête le script PHP, on n'a plus rien à faire ! 
        }

        // On range dans la variable $categoryId le name ['categoryId'] de category.phtml et la construction de son URL.
        $categoryId = (int) $_GET['categoryId']; 
        // On range dans $articleModel l'objet new ArticleModel.
        $articleModel = new ArticleModel();
        // On range dans la variable $articles le constructeur de ArticleModel, qui va chercher la fonction getAllArticlesByCategoryId et qui prend en paramètre l'URL changeante selon le category_Id (id) dont la fonction getAllArticlesCategoryId s'est chargée dans ArticleModel.
        $articles = $articleModel->getAllArticlesByCategoryId($categoryId);

        // Affichage de la fonction render, et du template.
        // Affichage de la table catégories contenant un tableau associatif avec articles et $articles contenant la liste des articles dont la catégorie est celle prise en paramètre. 
        return  $this->render('category', [
            'articles' => $articles
        ]);
    }
}