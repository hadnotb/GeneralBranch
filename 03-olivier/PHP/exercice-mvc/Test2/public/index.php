<?php 

require __DIR__ .  "/../vendor/autoload.php";

$path = $_SERVER['PATH_INFO']?? '/';


$routes = [
    //route de la page d'accueil
"homepage" => ['path'=>'/',
               'controller'=>'home.php'
                ],
    // Route de la page Article
"article" => ['path'=>'/article',
                'controller'=>'article.php'
                 ],
                
];

$controller = null;
foreach ($routes as $route) {
   if ($route['path'] === $path) {
       $controller = $route['controller'];
       break;
   }
}

if($controller == null ){

    http_response_code(404);
    echo"404 not found";
    exit; // STOP on arrette le script

}

ob_start();

require __DIR__ . '/../controller/' . $controller;

$content = ob_get_clean();

echo $content;
