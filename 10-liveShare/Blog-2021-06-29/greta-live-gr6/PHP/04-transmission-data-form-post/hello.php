<?php 

// On définit au préalable un tableau contenant une liste de ville (plus tard ce tableau proviendra d'une base de données)
$cities = [
    'Aix-en-Provence',
    'Marseille',
    'Paris'
];

// Si le formulaire est soumis, càd si le tableau $_POST n'est PAS vide...
if (!empty($_POST)) {

    // Alors on traite les données du formulaire    
    $firstname = $_POST['firstname']; 
    $lastname = $_POST['lastname'];

    // Je récupère l'indice de la ville (valeur de l'option sélectionnée par l'internaute dans le champ <select name="city">)
    $cityIndex = $_POST['city'];

    // Puis on va chercher la valeur correspondant à cet indice dans le tableau $cities
    $city = $cities[$cityIndex];

    /**
     * On aurait pu tout écrire sur une seule ligne : 
     * 
     *     $city = $cities[$_POST['city']];
     */

    $sexe = $_POST['sexe'];

    // On construit le message pour l'internaute
    $message = "Hello $firstname $lastname de $city et de sexe $sexe !!! :)";
}


/**
 * On termine par inclure le fichier de template pour afficher le code source HTML de la page
 */
include 'hello.phtml';