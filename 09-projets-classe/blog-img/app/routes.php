<?php


$routes = [];
$routes = [
    //route de la page d'accueil
"homepage" => ['path'=>'/',
               'controller'=>'Home',
                'method' => 'index'],
    // Route de la page Article
"article" => ['path'=>'/article',
                'controller'=>'Article',
                'method' => 'index'],
                
"add-comment"=> ['path' => '/add-comment',
                    'controller' => 'Article',
                    "method" =>'addComment'],

"category"=> ['path' => '/category',
                    'controller' => 'Article',
                    "method" =>'showArticlebyCat'],

"signup"=> ['path' => '/signup',
                    'controller' => 'Account',
                    'method' => 'signup'],

"login"=> ['path' => '/login',
                    'controller' => 'Auth',
                    'method' => 'login'],

"logout"=> ['path' => '/logout',
                    'controller' => 'Auth',
                    'method' => 'logout'],
                    
"admin"=> ['path' => '/admin',
                'controller' => 'Admin\\Admin',
                'method' => 'index'],

"admin_article_new" => ['path' => '/admin/article/new',
                'controller' => 'Admin\\Article',
                'method' => 'new'],
                
"admin_article_edit" => ['path' => '/admin/article/edit',
                'controller' => 'Admin\\Article',
                'method' => 'edit']                   
                 

];
define('ROUTES', $routes);
return $routes;