<?php

// Afin de réaliser cela, on fait un tableau qu'on stocke dans une variable nommée $routes grâce à un tableau associatif.

/**
 * On définit le tableau des routes : on associe à chaque route un fichier PHP 
 * qui jouera la rôle de contrôleur. Par exemple pour la page d'accueil, c'est un fichier home.php
 * qui sera inclus. Pour la page Article, ce sera un fichier article.php, pour la page category, ce sera category.php.
 */

$routes = [
    'homepage' => [
        'path' => '/',
        'controller' => 'Home',
        'method' => 'index'
    ],

    // Route de la page Article.
    'article' => [
        'path' => '/article',
        'controller' => 'Article',
        'method' => 'index'

    ],
    // Route du template Commentaires.
    'add-comment' => [
        'path' => '/add-comment',
        'controller' => 'Article',
        'method' => 'addComment'
    ],
    // Route du template Category.
    'category' => [
        'path' => '/category',
        'controller' => 'Article',
        'method' => 'showArticlesByCategory'
    ],
    // Route du template signup (Inscription)
    'signup' => [
        'path' => '/signup',
        'controller' => 'Account',
        'method' => 'signup'
    ],
    // Route du template login (connexion)
    'login' => [
        'path' => '/login',
        'controller' => 'Auth',
        'method' => 'login'

    ],
    // Route de logout (déconnexion)
    'logout' => [
        'path' => '/logout',
        'controller' => 'Auth',
        'method' => 'logout'
    ],
    'admin' => [
        'path' => '/admin',
        'controller' => 'Admin\\Admin',
        'method' => 'index'
    ],
    'add-article' => [
        'path' => '/admin/article/new',
        'controller' => 'Admin\\Article',
        'method' => 'new'
    ],
    'edit-article' => [
        'path' => '/admin/article/edit',
        'controller' => 'Admin\\Article',
        'method' => 'editArticle'
    ],
    'delete-article' => [ 
        'path' => '/admin/article/delete',
        'controller' => 'Admin\\Article',
        'method' => 'delete'
    ]
];

define('ROUTES', $routes);

return $routes;