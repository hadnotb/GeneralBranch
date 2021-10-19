<?php 

// Inclusion du fichier d'autoload de composer
require 'vendor/autoload.php';

// Inclusion du fichier de fonctions
require 'functions.php';

// Import des classes utilisées en dessous
use App\Avatar\Avatar;
use App\Avatar\AvatarSvgTransformer;
use App\Avatar\AvatarSvgFactory;

// // Initialisation de la taille et du nombre de couleurs avec des valeurs par défaut
// $size = AvatarSvgFactory::DEFAULT_SIZE;
// $nbColors = AvatarSvgFactory::DEFAULT_NB_COLORS;

// // Traitement du formulaire le cas échéant
// if (!empty($_POST)) {

//     $size = (int) $_POST['size'];
//     $nbColors = (int) $_POST['nb-colors'];
// }

$size = $_POST['size'] ?? AvatarSvgFactory::DEFAULT_SIZE;
$nbColors = $_POST['nb-colors']) ?? AvatarSvgFactory::DEFAULT_NB_COLORS;

// Création d'un avatar
$svg = (new AvatarSvgFactory)->createRandomAvatar($size,$nbColors);

// La variable SVG contient le code SVG de l'avatar, il ne reste plus qu'à l'écrire dans le fichier de template
include 'index.phtml';