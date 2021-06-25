<?php 
require "../vendor/autoload.php";



//Inclusion du fichier de configuration
require '../config.php';

require '../library/functions.php';

// $path = "/" ;
// if(array_key_exists("PATH_INFO",$_SERVER)){

//     $path = $_SERVER["PATH_INFO"];
// }

// Pour faire la meme chose : 
$path = $_SERVER['PATH_INFO']??'/';

//Definir les routes //////////////////////////////////////
//(Pour chaqe route on doit définir le PATH et Le fichier Controlleur)//////
//// On va stocker en plus le nom de la route pour plus tard/////
$routes = [
        //route de la page d'accueil
    "homepage" => ['path'=>'/',
                   'controller'=>'home.php'
                    ],
        // Route de la page Article
    "contact" => ['path'=>'/article',
                    'controller'=>'article.php'
                     ],
                    

];
//On initialise le controller a nulle pour la condition ou il ne trouve pas le controller
//Ensuite on recuper la valeur de la route de la controller 
$controller = null ;
foreach($routes as $route){
    
    if($path == $route["path"]){

        $controller = $route["controller"];
        break ;
    }
} 

if($controller == null ){

    http_response_code(404);
    echo"404 not found";
    exit; // STOP on arrette le script

}

require CONTROLLER_DIR .'/' . $controller;
// Que se passe t'il ici ?