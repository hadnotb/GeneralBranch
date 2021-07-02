<?php
/*dump($_GET);

echo 'PAGE Article';
if (!isset($_GET['idArt']) || !ctype_digit($_GET['idArt']) ) {
   include CONTROLLER_DIR . '/404.php';
   exit;
}*/



if(count($getParams) < 3) {
   include CONTROLLER_DIR . '/404.php';
   exit;
}

$dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=UTF8';

$pdo = new PDO($dsn, DB_USER, DB_PASSWORD, [
   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$idArt = $getParams[2];

dump($getParams);

$sql = 'call Sp_modelArticleLire(:idArt)';

$pdoStatement = $pdo->prepare($sql);
$pdoStatement->execute(array('idArt' => $idArt));
$articles = $pdoStatement->fetchAll();
$article = $articles[0];
$images = explode(";", $article["imgLst"]);
$template = 'article';

include TEMPLATE_DIR . '/base.phtml';

// return render ('article');

