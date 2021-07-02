<?php 

/**
 * On définit le tableau des routes : on associe à chaque route un fichier PHP 
 * qui jouera la rôle de contrôleur. Par exemple pour la page d'accueil, c'est un fichier home.php
 * qui sera inclus. Pour la page Article, ce sera un fichier article.php, etc
 */
$routes = [

    // Route de la page d'accueil
    'homepage' => [
        'path' => '/',
        'controller' => 'Home',
        'method' => 'index'
    ],
    'newsletter' => [
        'path' => '/newsletter',
        'controller' => 'Newsletter',
        'method' => 'newsLetterAdd'
    ]
];

define('ROUTES', $routes);

return $routes;