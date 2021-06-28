<?php

// use App\Model\ArticleModel;
// use App\Model\CommentModel;

// // Récupérer le paramètre de l'URL category_Id.

// // Validation du paramètre id de la chaîne de requête de la clé.
// if (!array_key_exists('categoryId', $_GET) || !$_GET['categoryId'] || !ctype_digit($_GET['categoryId'])) {
//     http_response_code(404); // On modifie le code de status de la réponse HTTP 
//     echo '404 NOT FOUND'; // On affiche un message à l'internaute
//     exit; // On arrête le script PHP, on n'a plus rien à faire ! 
// }

// // On range dans la variable $categoryId le name ['categoryId'] de category.phtml et la construction de son URL.
// $categoryId = (int) $_GET['categoryId']; 
// // On range dans $articleModel l'objet new ArticleModel.
// $articleModel = new ArticleModel();
// // On range dans la variable $articles le constructeur de ArticleModel, qui va chercher la fonction getAllArticlesByCategoryId et qui prend en paramètre l'URL changeante selon le category_Id (id) dont la fonction getAllArticlesCategoryId s'est chargée dans ArticleModel.
// $articles = $articleModel->getAllArticlesByCategoryId($categoryId);

// // Affichage de la fonction render, et du template.
// // Affichage de la table catégories contenant un tableau associatif avec articles et $articles contenant la liste des articles dont la catégorie est celle prise en paramètre. 
// return render('category', [
//     'articles' => $articles
// ]);
