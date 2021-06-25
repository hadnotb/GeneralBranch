<?php 

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config.php';
require __DIR__ . '/../library/functions.php';
use App\Framework\Router;
// require '../src/Framework/Database.php';
// require '../src/Framework/AbstractModel.php';
// require '../src/Model/ArticleModel.php';
// require '../src/Model/CommentModel.php';
// require '../src/Framework/FlashBag.php';
session_start();

$path = $_SERVER['PATH_INFO'] ?? '/';
// ----------------
$routes = include '../app/routes.php';
$router = new Router($routes);
$action = $router -> match($path);
if(!$action){
    http_response_code(404); // On modifie le code de status de la réponse HTTP 
    echo '404 NOT FOUND'; // On affiche un message à l'internaute
    exit;
}
$className = 'App\\Controller\\'.$action['controller'].'Controller';
$controller = new $className();
$method = $action['method'];
echo $controller -> $method();
// ----------------
// $controller = null;
// foreach ($routes as $route) {
//    if ($route['path'] === $path) {
//        $controller = $route['controller'];
//        break;
//    }
// }
// // -------------------
// $controller = $controller ?? '404.php';
// // --------------------
// $content = require CONTROLLER_DIR . '/' . $controller;

// echo $content;