<?php

// Lecture du contenu du fichier
$content = file_get_contents('input/input1.txt');

// Découpage de la chaîne de caractère contenant toutes les données du fichier en tableau
$input = explode("\n", $content);

// On transforme la chaîne de caractères avec les plateformes en tableau, plus simple à manipuler
// Exemple : '-___-' devient ['-','_','_','_','-']
$plateformes = str_split($input[1]);

// On parcourt ensuite le tableau obtenu 
foreach ($plateformes as $case) {

    // On veut connaître la taille du plus grand trou, c'est-à-dire la plus grande succession de '_' à la suite

    // Que fait-on : 
    // Si on tombe sur de la terre ? 
    // Si on tombe dans un trou ?


}