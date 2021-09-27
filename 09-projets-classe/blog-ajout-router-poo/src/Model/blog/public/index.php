<?php 

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config.php';
require __DIR__ . '/../library/functions.php';

// require '../src/Framework/Database.php';
// require '../src/Framework/AbstractModel.php';
// require '../src/Model/ArticleModel.php';
// require '../src/Model/CommentModel.php';
// require '../src/Framework/FlashBag.php';
session_start();

$path = $_SERVER['PATH_INFO'] ?? '/';
// ----------------
$routes = [];
$routes = [
    //route de la page d'accueil
"homepage" => ['path'=>'/',
               'controller'=>'home.php'],
    // Route de la page Article
"article" => ['path'=>'/article',
                'controller'=>'article.php'],
                
"add-comment"=> ['path' => '/add-comment',
                    'controller' => 'add_comment.php'],

"category"=> ['path' => '/category',
                    'controller' => 'category.php'],

"signup"=> ['path' => '/signup',
                    'controller' => 'signup.php'],

"login"=> ['path' => '/login',
                    'controller' => 'login.php'],

"logout"=> ['path' => '/logout',
                    'controller' => 'logout.php'],                  

];
define('ROUTES', $routes);
// ----------------
$controller = null;
foreach ($routes as $route) {
   if ($route['path'] === $path) {
       $controller = $route['controller'];
       break;
   }
}
// -------------------
$controller = $controller ?? '404.php';
// --------------------
















$content = require CONTROLLER_DIR . '/' . $controller;

echo $content;