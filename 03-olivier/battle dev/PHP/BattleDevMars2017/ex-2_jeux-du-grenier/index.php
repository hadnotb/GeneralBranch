<?php

// Lecture du contenu du fichier
$content = file_get_contents('input/input3.txt');

// Découpage de la chaîne de caractère contenant toutes les données du fichier en tableau
$input = explode("\n", $content);

// On transforme la chaîne de caractères avec les plateformes en tableau, plus simple à manipuler
// Exemple : '-___-' devient ['-','_','_','_','-']
$plateformes = str_split($input[1]);

// On parcourt ensuite le tableau obtenu 
foreach ($plateformes as $case) {

    // On veut connaître la taille du plus grand trou, c'est-

    // Que fait-on : 
    // Si on était sur de la terre et qu'on tombe dans un trou ?
    // Si on était dans un trou et qu'on continue à être dans un trou ?
    // Si on était dans un trou et qu'on retombe sur la terre ?


}