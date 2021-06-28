<?php

// Inclusion du fichier d'autoload de composer
require __DIR__.'/../vendor/autoload.php';

// inclusion du fichier de configuration
require __DIR__.'/../config.php';

// Inclusion des dépendances (fichiers de fonctions)
require __DIR__.'/../library/functions.php';

use App\Framework\Router;

// Inclusion des fichiers de classes (Inutile une fois le composer.json modifiée et l'autoload.json créé pour)
// require __DIR__.'/../src/Framework/AbstractModel.php';
// require __DIR__.'/../src/Framework/Database.php';
// require __DIR__.'/../src/Framework/FlashBag.php';
// require __DIR__.'/../src/Model/ArticleModel.php';
// require __DIR__.'/../src/Model/CommentModel.php';

// On valide ensuite le formulaire en vérifiant si le champ content est bien rempli. Comme on redirigera dans tous les cas l’internaute vers la page de l’article, on va stocker les messages d’erreurs dans la session. On pourra la démarrer dans l’index.php pour éviter d’avoir à le refaire dans plusieurs endroits.

session_start();

/**
 * On récupère le chemin de l'URL (le "path")
 * /!\ Attention /!\ si on est sur la page d'accueil et qu'il n'y a pas de path, 
 * la clé 'PATH_INFO' n'existe pas dans le tableau $_SERVER. Il faut donc vérifier son existence.
 */ 

// Ce fichier php sert de porte d'entrée. 
if (array_key_exists('PATH_INFO', $_SERVER)) // Je vais chercher la clé PATH_INFO dans le tableau $_SERVER.
{
    $path = $_SERVER['PATH_INFO']; // Si cette clé existe, alors on l'affiche en la stockant dans la variable $path.
}
else
{
    $path = '/'; // Si elle n'existe pas, on met le '/' dans la variable de même nom : $path.
}

// Autre syntaxe : $path = $_SERVER['PATH_INFO']??'/';

// var_dump($path); // On teste avec un var_dump($path)

// A partir de là, on va définir les routes :

// Path
// Fichier de contrôleur
// Et nom de la route en chaînes de caractères

// On va chercher les routes
$routes = include '../app/routes.php';

// On appelle l'objet Router qu'on stocke dans $router, il prend en paramètres les routes de la variable $routes.
$router = new Router($routes);
$action = $router->match($path);

// Gestion des erreurs 404
if (!$action) 
{
    http_response_code(404); // On modifie le code de status de la réponse HTTP 
    echo '404 NOT FOUND'; // On affiche un message à l'internaute
    exit; // On arrête le script PHP, on n'a plus rien à faire ! 
}

// On construit le nom complet de la classe de contrôleur
$classname = 'App\\Controller\\'.$action['controller'].'Controller';

// On instancie la classe de contrôleur
$controller = new $classname();

// On va chercher le nom de la méthode.
$method = $action['method'];

// On appelle la méthode sur l'objet Contrôleur
echo $controller->$method();




/**
 * A partir de la variable $path, qui contient le chemin de la page qu'on souhaite afficher,
 * on doit retrouver le contrôleur correspondant dans le tableau des routes.
 * 
 * On stockera le nom du fichier de contrôleur dans une variable $controller 
 */

// $controller = null;
// foreach ($routes as $route) {
//     if ($path == $route['path']) {
//         $controller = $route['controller'];
//         break;
//     }
// }

/**
 * Si aucun contrôleur n'a été récupéré, c'est que la route n'existe pas,
 * on affiche alors une page 404 !
 */
// if ($controller == null) {
//     http_response_code(404); // On modifie le code de status de la réponse HTTP 
//     echo '404 NOT FOUND'; // On affiche un message à l'internaute
//     exit; // On arrête le script PHP, on n'a plus rien à faire ! 
// }

// Inclusion du contrôleur
// $content = require CONTROLLER_DIR . '/' . $controller;

// echo $content;