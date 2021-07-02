<?php

// Inclusion du fichier d'autoload de composer pour pouvoir utiliser les librairies externes téléchargées
require '../vendor/autoload.php';

/**
 * On récupère le chemin de l'URL (le "path")
 * /!\ Attention /!\ si on est sur la page d'accueil et qu'il n'y a pas de path, 
 * la clé 'PATH_INFO' n'existe pas dans le tableau $_SERVER. Il faut donc vérifier son existence.
 */ 

/* 
$path = '/';
if (array_key_exists('PATH_INFO', $_SERVER)) {
    $path = $_SERVER['PATH_INFO']; 
}
*/

$path = $_SERVER['PATH_INFO'] ?? '/';

/**
 * On définit le tableau des routes : on associe à chaque route un fichier PHP 
 * qui jouera la rôle de contrôleur. Par exemple pour la page d'accueil, c'est un fichier home.php
 * qui sera inclus. Pour la page Article, ce sera un fichier article.php, etc
 */
$routes = [

    // Route de la page d'accueil
    'homepage' => [
        'path' => '/',
        'controller' => 'home.php'
    ],

    // Route de la page de contact
    'contact' => [
        'path' => '/contact',
        'controller' => 'contact.php'
    ]
];

/**
 * A partir de la pvariable $path, qui contient le chemin de la page qu'on souhaite afficher,
 * on doit retrouver le contrôleur correspondant dans le tableau des routes.
 * 
 * On stockera le nom du fichier de contrôleur dans une variable $controller 
 */
$controller = null;
foreach ($routes as $route) {
    if ($path == $route['path']) {
        $controller = $route['controller'];
        break;
    }
}

/**
 * Si aucun contrôleur n'a été récupéré, c'est que la route n'existe pas,
 * on affiche alors une page 404 !
 */
if ($controller == null) {
    http_response_code(404); // On modifie le code de status de la réponse HTTP 
    echo '404 NOT FOUND'; // On affiche un message à l'internaute
    exit; // On arrête le script PHP, on n'a plus rien à faire ! 
}