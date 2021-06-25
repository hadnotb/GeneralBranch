'use strict';

// Il peut être intéressant de déclarer dans une constante le prix maximum du jeu
const MAX_PRICE = 100;

/**
 * On commence par tirer au hasard un prix entre 1 et 100 €
 * On utilise pour cela la fonction Math.random() et une formule mathématique trouvée 
 * sur la page de documentation de cette fonction. Pour le moment, on n'utilise pas de fonction
 */ 
const price = Math.floor(Math.random() * (MAX_PRICE + 1));

// On vérifie toujours au fur-et-à-mesure que chaque ligne de code écrite fonctionne correctement
// console.log(price);

/**
 * On demande ensuite à l'internaute de deviner le prix, tant qu'il ne l'a pas trouvé
 * On stocke sa réponse dans la variable trial
 */
let trial;

// Pour compter le nombre de tentatives, on déclare une variable attemps qu'on initialise à zéro au départ
let attemps = 0;

do {

    // On demande au joueur de faire une tentative
    trial = window.prompt("Devinez le prix entre 1 et " + MAX_PRICE + "€ ! Tentative n°" + (attemps+1));

    // Si le joueur a cliqué sur le bouton "Annuler", on arrête le jeu
    if(trial == null){
        break;
    }

    // Si la joueur a donné quelque chose qui n'est pas un nombre, on lui repose la question
    if(isNaN(trial) || trial.trim().length == 0){
        alert("Ce n'est pas un nombre !")
        continue;
    }

    // On incrémente le nombre de tentatives
    attemps++;

    // On teste la réponse du joueur 
    if(trial > price){
        alert("C'est moins !");
    }
    else if(trial < price) {
        alert("C'est plus !");
    }
    else {
        document.write("<p>Vous avez trouvé le juste prix " + price + " en " + attemps + " tentatives !");
    }
}
while(trial != price);
