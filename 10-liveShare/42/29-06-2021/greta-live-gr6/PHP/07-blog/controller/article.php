<?php 

// Validation du paramètre id de la chaîne de requête. Si PB => 404
if (!array_key_exists('id', $_GET) || !$_GET['id'] || !ctype_digit($_GET['id'])) {
    http_response_code(404); // On modifie le code de status de la réponse HTTP 
    echo '404 NOT FOUND'; // On affiche un message à l'internaute
    exit; // On arrête le script PHP, on n'a plus rien à faire ! 
}

// Récupérer le paramètre id de la chaîne de requête
$articleId = (int) $_GET['id']; // ou bien $articleId = intval($_GET['id']);

// Connexion PDO à la base de données
$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=UTF8', DB_USER, DB_PASSWORD);

// Modification de la gestion des erreurs SQL => on veut des exceptions (erreurs PHP)
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Mode de récupération des résultats => tableaux associatifs (clés = noms des colonnes de la table)
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// Requête de sélection de l'article à afficher en fonction de l'id récupéré
// ATTENTION : requête préparée pour se protéger des injections SQL
$pdoStatement = $pdo->prepare('SELECT * FROM article WHERE id = ?');

// Exécution de la requête 
$pdoStatement->execute([$articleId]);

// Récupération du résultat
$article = $pdoStatement->fetch();

// Est-ce qu'il y a bien un résultat ? Sinon => 404
if (!$article) {
    http_response_code(404); // On modifie le code de status de la réponse HTTP 
    echo '404 NOT FOUND'; // On affiche un message à l'internaute
    exit; // On arrête le script PHP, on n'a plus rien à faire ! 
}

// Inclusion du fichier de template
$template = 'article';
$pageTitle = $article['title'];
include TEMPLATE_DIR . '/base.phtml';