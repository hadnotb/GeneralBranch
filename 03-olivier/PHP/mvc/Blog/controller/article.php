<?php

// Validation du parametre id de lachaine de requette si il y a un pb ==> 404
if(!array_key_exists('id',$_GET)|| !$_GET['id'] || !ctype_digit($_GET['id'])){

    http_response_code(404);
    echo '404 NOT FOUND';
    exit ;
}
dump($_GET['id']);
//Recuperer le parametre id de la chaine de requete

$articleId = (int)$_GET['id']; // ou bien $article = intval($_GET['id]);


//On établit la connexion
$conn = new PDO(/* */'mysql:host='. DB_HOST .';dbname='.DB_NAME.';charset=UTF8'/* */, DB_USER, DB_PASSWORD);
    //On appelle cette partie  le ↑ DATA SOURCE NAME 

//Modificiation de la gestion des erreus SQL on veut des exeption erreur php                   
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  


//Mode de récup des résultast = tableaux associatif(clés = noms des colonnes)
$conn ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC) ;

$reponse = $conn->prepare('SELECT * from article Where id = ?');
        // je remplace ↑ query par replace pour se proteger des injections sql
$reponse->execute([$articleId]); 
$article = $reponse->fetch();
if(!$article){
    http_response_code(404);
    echo'404 NOT FOUND';
    exit ;
}


$idUrl = $_GET['id'];













$template = 'article';
$pageTitle = $article["title"];
dump($pageTitle);
include TEMPLATE_DIR . '/base.phtml';

   