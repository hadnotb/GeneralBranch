<?php
use App\Framework\FlashBag;
use App\Model\CommentModel;
use App\Framework\UserSession;
//  On recuper et verifie que l'id de l'article est bien un entier et on supprime les esppaces du contenu

$articleId = (int) $_POST['article-id'];
$content = trim($_POST['content']);
$idUser = UserSession::getId();

// ===========================================================================================================

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





