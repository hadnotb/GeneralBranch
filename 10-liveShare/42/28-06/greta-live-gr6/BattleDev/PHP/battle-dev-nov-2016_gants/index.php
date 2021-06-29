<?php 

/**
 * Lecture du fichier d'entrée et stockage des données d'entrée dans un tableau $input
 ****************************************************************************************/

/**
 * SOLUTION 1 : fonction file() 
 */
/*
// Utilisation de la fonction file() qui lis les lignes du fichier et les range dans un tableau
$input = file('input/input1.txt');

// On doit cependant parcourir le tableau pour supprimer le retour chariot récupéré par la fonction file() en fin de chaque ligne
foreach ($input as $index => $item) {
    $input[$index] = rtrim($item);
}

var_dump($input);
*/

/**
 * SOLUTION 2 : fonction fopen() + fgets() 
 */
/*
// Ouverture du fichier en lecture ("read")
$file = fopen('input/input1.txt', 'r');

// On crée un tableau vide
$input = [];

// Tant qu'on peut lire une ligne... 
while ($line = fgets($file)) {
    $input[] = rtrim($line);
}

var_dump($input);
*/

/**
 * SOLUTION 3 : fonction fopen() + fgetcsv() 
 */
/*
// Ouverture du fichier en lecture ("read")
$file = fopen('input/input1.txt', 'r');

// On crée un tableau vide
$input = [];

// Tant qu'on peut lire une ligne... 
while ($line = fgetcsv($file)) {
    $input[] = $line[0];
}

var_dump($input);
*/


/**
 * SOLUTION 4 : fonction file_get_contents() + explode()
 */

// Lecture du contenu du fichier
$content = file_get_contents('input/input3.txt');

// Découpage de la chaîne de caractère contenant toutes les données du fichier en tableau
$input = explode("\n", $content);



/**
 * Résolution du challenge
****************************************************************************************/

// SOLUTION 1 //
/*
array_shift($input);
$pairs = 0;
$singles = [];

foreach ($input as $color) {
    if (in_array($color, $singles)) {
        $pairs++;
        $index = array_search($color, $singles);
        array_splice($singles, $index, 1);
    }
    else {
        $singles[] = $color;
    }
}

echo $pairs;
*/

// SOLUTION 2 //
array_shift($input);
$pairs = 0;
/*
$colorCount = [];
foreach ($input as $color) {
    if (array_key_exists($color, $colorCount)) {
        $colorCount[$color]++;
    }
    else {
        $colorCount[$color] = 1;
    }
}
*/

$colorCount = array_count_values($input);

foreach ($colorCount as $count) {
    $pairs += floor($count/2);
}

echo $pairs;
















