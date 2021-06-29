<?php 


/*******************************************/
/* FONCTIONS **********************/
/******************************/

// Définition de la fonction translate()
function translate(string $word, string $direction) 
{
    // Définition du dictionnaire
    $dictionnary = [
        'chien' => 'dog',
        'chat' => 'cat',
        'singe' => 'monkey'
    ];

   /**
    * Si je traduis un mot français en anglais, je cherche le mot à traduire dans les clés du tableau, et je récupère la valeur correspondante
    */
    if ($direction == 'toEnglish') {

        // Si je ne trouve pas le mot dans le dictionnaire je retourne la valeur false, sinon le mot traduit
        if (array_key_exists($word, $dictionnary)) {
            return $dictionnary[$word];
        }
        return false;
    }

   /**
    * Si je traduis un mot anglais en français, je cherche le mot à traduire dans les valeurs du tableau, et je récupère la clé correspondante
    */
    else { // $direction == 'toFrench'
    
        // Si je ne trouve pas le mot dans le dictionnaire je retourne la valeur false, sinon le mot traduit
        return array_search($word, $dictionnary);
    }
}


/*******************************************/
/*  CODE PRINCIPAL **********************/
/******************************/

// Si le formulaire a été soumis
if (!empty($_POST)) {

    // On récupère les données du formulaire
    $word = $_POST['word'];
    $direction = $_POST['direction'];

    // On lance la fonction de traduction
    $result = translate($word, $direction);

    // On prépare l'affichage du résultat
    // Si il n'y a pas de résultat : le mot n'a pas été trouvé
    if ($result === false) {
        $message = "Le mot $word n'existe pas";
    }
    else { // Si il y a un résultat
        $message = "Le mot '$word' se traduit par '$result'.";
    }
}

// Inclusion du fichier de template
include 'traducteur.phtml';