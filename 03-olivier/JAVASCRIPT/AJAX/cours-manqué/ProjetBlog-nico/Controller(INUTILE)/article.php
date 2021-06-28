<!-- <?php //

// use App\Model\ArticleModel;
// use App\Model\CommentModel;

// // Validation du paramètre id de la chaîne de requête. Si PB => 404
// if (!array_key_exists('id', $_GET) || !$_GET['id'] || !ctype_digit($_GET['id'])) {
//     http_response_code(404); // On modifie le code de status de la réponse HTTP 
//     echo '404 NOT FOUND'; // On affiche un message à l'internaute
//     exit; // On arrête le script PHP, on n'a plus rien à faire ! 
// }

// // Récupérer le paramètre id de la chaîne de requête selon l'article. 
// $articleId = (int) $_GET['id']; // ou bien $articleId = intval($_GET['id']);

// $articleModel = new ArticleModel();
// $article = $articleModel->getOneArticle($articleId);

// // Est-ce qu'il y a bien un résultat ? Sinon => 404
// if (!$article) {
//     http_response_code(404); // On modifie le code de status de la réponse HTTP 
//     echo '404 NOT FOUND'; // On affiche un message à l'internaute
//     exit; // On arrête le script PHP, on n'a plus rien à faire ! 
// }
// // Get comments
// $commentModel = new CommentModel();
// $comments = $commentModel->getAllComments($articleId);

// // Affichage
// return render('article', [
//     'article' => $article,
//     'comments' => $comments
// ]);