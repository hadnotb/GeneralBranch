<?php
use App\Model\ArticleModel;
use App\Framework\UserSession;
$articleModel = new ArticleModel();
$articles = $articleModel -> getAllArticles();










// --------------------------------------------------------------

/*$dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=UTF8';

$pdo = new PDO($dsn, DB_USER, DB_PASSWORD, [
   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

// --------------------------------------------------------------
$sql = 'SELECT *
       FROM article
       ORDER BY created_at DESC';

$pdoStatement = $pdo->prepare($sql);
$pdoStatement->execute();
$articles = $pdoStatement->fetchAll();
dump($articles); */








return render('home', [
   'pageTitle' => 'Accueil',
   'articles' => $articles
   
]);