<!-- <?php //
// use App\Model\CommentModel;
// use App\Framework\UserSession;
// use App\Framework\FlashBag;

// if (UserSession::isAuthenticated())
// {
//     // On ajoute un commentaire en fonction de l'id de l'article et bien sûr de son contenu. ON stocke dans les variables $articleId l'Int, le numéro de l'article, et dans $content, le contenu du commentaire. afin de ne pas écrire un commentaire sur un article différent. 
//     $articleId = (int) $_POST['article-id'];
//     $content = trim($_POST['content']);
//     $userId =  UserSession::getId();

//     // Validation du formulaire et gestion des messages d'erreurs
//     if (!$content) // S'il n'y a pas de commentaires et qu'on appuie sur envoyer : 
//     {
//         App\Framework\FlashBag::addFlash('error','Le champ Commentaire est obligatoire');
//     }

//     if (empty($_SESSION['flash']['errors'])) // S'il n'y a pas de messages d'erreurs et que le commentaire est bien envoyé : 
//     {
//         // On exécute l'objet CommentModel () qu'on sotcke dans commentModel, puis on exécute la fonction d'insertComment() qui prend en paramètre le contenu et l'id de l'article qui doit être commenté. 
//         $commentModel = new CommentModel();
//         $commentModel->insertComment($content, $articleId, $userId);

//         App\Framework\FlashBag::addFlash('Votre commentaire a bien été ajouté.');
//     }
// }
// header('Location: ' . buildUrl('article', ['id' => $articleId]));
// exit;