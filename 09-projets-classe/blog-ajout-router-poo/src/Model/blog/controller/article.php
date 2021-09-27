<?php
use App\Model\ArticleModel;
use App\Model\CommentModel;

if (!array_key_exists('id', $_GET) || !$_GET['id'] || !ctype_digit($_GET['id']) ) {
    include CONTROLLER_DIR . '/404.php';
    exit;
 }
 
$id = (int) $_GET['id'];
$articleModel = new ArticleModel();
$article = $articleModel -> getOneArticle($id);


// ------------------------------------- 

/* $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=UTF8';

$pdo = new PDO($dsn, DB_USER, DB_PASSWORD, [
   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

// --------------------------------------------------------



$sql = 'SELECT *
       FROM article
       WHERE idArticle = ?';

$pdoStatement = $pdo->prepare($sql);
$pdoStatement->execute([$id]);
$article = $pdoStatement->fetch();
dump($article); */


if (!$article) {
    include CONTROLLER_DIR . '/404.php';
    exit;
 }

//  ------------------------------------------------------


// Affichage des message flash
/*if (isset($_SESSION['flash']['errors']) && !empty($_SESSION['flash']['errors'])) {
   $errors = $_SESSION['flash']['errors'];
   $_SESSION['flash']['errors'] = null;
}

if (isset($_SESSION['flash']['success']) && !empty($_SESSION['flash']['success'])) {
   $success = $_SESSION['flash']['success'];
   $_SESSION['flash']['success'] = null;
}*/

// -------------------On va recup les coms en bdd apres avoir verifié qu'ils existe

if (!$article) {
   include CONTROLLER_DIR . '/404.php';
   exit;
}
$commentModel = new CommentModel ();
$comments = $commentModel -> getAllComments($id);
/*$sql = 'SELECT *
        FROM comment
        WHERE idArticle = ?
        ORDER BY created_at DESC';

$pdoStatement = $pdo->prepare($sql);
$pdoStatement->execute([$id]);
$comments = $pdoStatement->fetchAll();*/



return render('article', [
   'article' => $article,
   'comments' => $comments,
   'pageTitle'=> $article['title']
]);

