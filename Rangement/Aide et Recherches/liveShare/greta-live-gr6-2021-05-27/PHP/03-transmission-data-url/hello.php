<?php 

/*
if (array_key_exists('firstname', $_GET)) {
    $firstname = $_GET['firstname'];
}
else {
    $firstname = ' world';
}

if (array_key_exists('lastname', $_GET)) {
    $lastname = $_GET['lastname'];
}
else {
    $lastname = '';
}
*/

// On peut éviter de mettre des else en donnant une valeur par défaut au début
/*
$firstname = ' world';
if (array_key_exists('firstname', $_GET)) {
    $firstname = $_GET['firstname'];
}

$lastname = '';
if (array_key_exists('lastname', $_GET)) {
    $lastname = $_GET['lastname'];
}
*/

// Avec l'expression ternaire :
/*
$firstname = array_key_exists('firstname', $_GET) ? $_GET['firstname'] : 'world';
$lastname = array_key_exists('lastname', $_GET) ? $_GET['lastname'] : '';
*/

// Avec la fonction isset()
/*
$firstname = isset($_GET['firstname']) ? $_GET['firstname'] : 'world';
$lastname = isset($_GET['lastname']) ? $_GET['lastname'] : '';
*/

// Avec l'opérateur ??
$firstname = $_GET['firstname'] ?? 'world'; // Equivaut à $firstname = isset($_GET['firstname']) ? $_GET['firstname'] : 'world';
$lastname = $_GET['lastname'] ?? ''; // Equivaut à $lastname = isset($_GET['lastname']) ? $_GET['lastname'] : '';

/**
 * Dans le fichier .php on a UNIQUEMENT du PHP
 * On a ici les traitements PHP. On ira chercher par exemple des données dans la base de données
 * Ou bien on va récupérer les données d'un formulaire rempli par l'internaute
 */
$message = "Hello $firstname $lastname !!! :)";


/**
 * On termine par inclure le fichier de template pour afficher le code source HTML de la page
 */
include 'hello.phtml';