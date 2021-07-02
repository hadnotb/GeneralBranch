'use strict';   // Mode strict du JavaScript

//////////////////////////////////////
// CONSTANTES & VARIABLES GLOBALES //
////////////////////////////////////

// L'intérêt de déclarer des variables globales est de pouvoir les utiliser partout dans le script y compris dans les fonctions
let bomb;
const START = 3;
let count = START;
let timer;

///////////////////////////////
// DECLARATION DE FONCTIONS //
/////////////////////////////
function countdown()
{
    // Cette fonction va être exécutée chaque seconde... qu'est-ce que je veux faire chaque seconde ?

    // On décrémente de 1 le compte à rebours : soit on récupère la valeur actuelle dans le code HTML, soit on crée une variable pour stocker cette information
    // count = bomb.textContent; 
    count--;

    // Si on est arrivé à 0 
    if (count == 0) {

        // Alors on arrête le chronomètre avec la fonction clearInterval()
        clearInterval(timer);

        // et on supprime la bombe du DOM
        bomb.remove();
    }
    // Sinon, on n'est pas encore arrivé à 0...
    else {

        // On affiche la nouvelle valeur du compteur
        bomb.textContent = count;
    }
}


/////////////////////
// CODE PRINCIPAL //
///////////////////
document.addEventListener('DOMContentLoaded', function () {

    // Ici je suis dans une fonction anonyme qui sera exécutée lorsque l'événement 'DOMContentLoaded' aura lieu (lorsque le DOM sera chargé)

    // Je sélectionne l'élément du DOM qui correspond à la balise <div> avec l'id 'countdown'
    bomb = document.getElementById('countdown');

    // J'écris dedans le chiffre de départ pour le compte à rebours (stocké dans la constante START)
    bomb.textContent = START;

    // Je programme un timer (chronomètre) pour exécuter la fonction countdow() toutes les secondes
    window.setInterval(countdown, 1000);
});
