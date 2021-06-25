<?php

// var_dump($_SERVER);

$url = $_SERVER["REQUEST_URI"];

// print ($url);

// var_dump($url);

$titre ="";

switch ($url){

    case "/Workingclass/sylvain/Template/php/accueil":
        $titre = "Acceuil";
    case "/Workingclass/sylvain/Template/php/nos-produits":
        $titre = "Nos Produit";
    case "/Workingclass/sylvain/Template/php/contact":
        $titre = "Contact";
}

include ("../Template.phtml");