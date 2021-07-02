<?php
require __DIR__ . '/../config.php';
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../library/functions.php';


$path = $_SERVER['PATH_INFO'] ?? '/';
dump($path);

$routes = [];
$routes = [
    
"homepage" => ['path'=>'/',
               'controller'=>'home.php'],
    
"article" => ['path'=>'/article',
                'controller'=>'article.php',
             'isParam' => true],
                
"categorie"=> ['path' => '/categorie',
                    'controller' => 'categorie.php'],

"signup"=> ['path' => '/signup',
                    'controller' => 'signup.php'],

"login"=> ['path' => '/login',
                    'controller' => 'login.php'],

"logout"=> ['path' => '/logout',
                    'controller' => 'logout.php'],                  

];
define('ROUTES', $routes);

$controller = null;
// --------boucle qui attribue les controller au path avec un slash
$getParams = array();
foreach ($routes as $route) {

    $curPath = $path;
    $isParam = (isset($route['isParam']) && $route['isParam']);
    if($isParam) {
        $getParams = explode('/', $path); 
        $curPath = '/' . $getParams[1];
    }

   if ($route['path'] === $curPath) {
       $controller = $route['controller'];
       break;
   }
}
// --------boucle qui attribue les controller au path avec le ?id=...
// foreach ($routes as $route) {
//     if ($route['path'] === $path) {
//         $controller = $route['controller'];
//         break;
//     }
//  }

$controller = $controller ?? '404.php';

// ob_start();


$content = require CONTROLLER_DIR . '/' . $controller;
// $content = ob_get_clean();
echo $content ;



// require('../controller/article.php');