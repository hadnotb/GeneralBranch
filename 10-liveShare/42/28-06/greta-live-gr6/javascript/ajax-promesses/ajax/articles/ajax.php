<?php 

// COnnexion à la base de données
$dsn = 'mysql:host=localhost;dbname=blog;charset=UTF8';

$pdo = new PDO($dsn, 'root', '', [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
]);

// Requête SQL de sélection des articles
$sql = 'SELECT A.id AS article_id, title, content, A.created_at, C.label AS category_label, A.category_id
        FROM article AS A
        INNER JOIN category AS C ON A.category_id = C.id';

$pdoStatement = $pdo->prepare($sql);
$pdoStatement->execute();

$articles = $pdoStatement->fetchAll();

// Envoi au client au format JSON
echo json_encode($articles);