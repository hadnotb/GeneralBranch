<?php

// Lecture du contenu du fichier
$content = file_get_contents('input/input3.txt');

// Découpage de la chaîne de caractère contenant toutes les données du fichier en tableau
$input = explode("\n", $content);

