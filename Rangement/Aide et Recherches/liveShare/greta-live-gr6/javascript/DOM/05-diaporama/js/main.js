'use strict';   // Mode strict du JavaScript

/*************************************************************************************************/
/* ****************************************** DONNEES ****************************************** */
/*************************************************************************************************/
let slides; // Va contenir la liste des objets <figure>, càd la liste des images présentes dans le code HTML
let currentIndex; // Va contenir l'indice du tableau slides qui correspond à l'image actuellement affichée
let timer = null;  // Va contenir l'identifiant du chronomètre qui sera créé lorsqu'on lancera la lecture automatique du diaporama
let playPauseIcon;

/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/
function onClickNextButton()
{
    // Mise à jour de l'indice de l'image courante
    currentIndex++;
    if (currentIndex == slides.length) {
        currentIndex = 0;
    }

    // Mise à jour de l'affichage
    refresh();
}

function onClickPrevButton()
{
    // Mise à jour de l'indice de l'image courante
    currentIndex--;
    if (currentIndex == -1) { // si on est allé trop vers la gauche (on était sur la première image et on a cliqué sur "Précédent")
        currentIndex = slides.length - 1; // alors on retourne à la dernière image pour faire boucler le diaporama
        // Remarque : l'indice du dernier élément d'un tableau est toujours égal à sa longueur - 1
    }

    // Mise à jour de l'affichage
    refresh();
}

function onClickPlayPause()
{
    // Si le diaporama est stoppé...
    if (timer == null) {

        // ... on le lance !
        timer = setInterval(onClickNextButton, 3000);

        // On inverse le picto pour afficher "pause"
        playPauseIcon.classList.replace('fa-play', 'fa-pause');
    }

    // Sinon (si le diaporama est lancé)
    else {
        // ... on l'arrête
        clearInterval(timer);

        // On met à jour la variable timer pour dire "le diaporama est arrêté"
        timer = null;

        // On inverse le picto pour afficher "pause"
        playPauseIcon.classList.replace('fa-pause', 'fa-play');
    }
}


function onKeyDown(event)
{
    /**
     * Lorsque JavaScript appelle un gestionnaire d'événement, il lui donne en paramètre un objet qui représente l'événement
     * Pour un événement de type clavier, cet objet sera de la classe KeyboardEvent : https://developer.mozilla.org/fr/docs/Web/API/KeyboardEvent
     * Chaque classe d'événement va avoir des propriétés spécifiques. Un objet KeyboardEvent va avoir des propriétés qui 
     * vont permettre de déterminer quelle touche du clavier a été enfoncée : code et key. 
     * 
     * console.log('event.key:' + event.key, 'event.key:' + event.code);  
     * 
     * On utilisera plutôt ic la propriété .code qui contient une chaîne de caractères pour identifier chaque touche du clavier
     * Pour voir le code correspondant aux flèches, on fait un console.log(event.code) et on teste en appuyant sur les flèches
     * On peut aussi aller voir un site comme https://keycode.info/ 
     */
    switch(event.code) {
        case 'ArrowRight':
            onClickNextButton();
            break;

        case 'ArrowLeft':
            onClickPrevButton();
            break;

        case 'Space':
            onClickPlayPause();
            break;
    }
    
}

function onClickRandom()
{
    currentIndex = getRandomInteger(0, slides.length-1);

    refresh();
}

/**
 * Fonction chargée de mettre à jour l'affichage du slider
 */
function refresh()
{
    document.querySelector('.active').classList.remove('active'); // On enlève la classe 'active' de l'élément qui la possède 
    slides[currentIndex].classList.add('active'); // On ajoute la classe 'active' sur la nouvelle image qu'on souhaite afficher
}

/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/

/**
 * Code principal : code JavaScript exécuté dès le chargement de la page
 *
 * Pour s'assurer que le DOM est chargé (puisqu'on va le manipuler), on écoute l'événement 'DOMContentLoaded'
 * sur le document entier. Cet événement est lancé lorsque le navigateur a terminé de constuire le DOM.
 *
 * https://developer.mozilla.org/fr/docs/Web/Events/DOMContentLoaded
 *
 * On utilise en général comme fonction gestionnaire d'événement associée une fonction anonyme car
 * on ne l'appellera jamais ailleurs nous-même.
*/
document.addEventListener('DOMContentLoaded', function(){

    // On sélectionne toutes les balises <figure> qui possèdent la classe 'slider-figure'. On récupère un tableau d'objets dans la variable slides
    slides = document.querySelectorAll('.slider-figure');

    // Initialisation de l'indice courant : au départ, c'est la première image qui est affichée, donc indice 0
    currentIndex = 0;

    // Sélection de l'icône du bouton play/pause
    playPauseIcon = document.querySelector('#play-pause i');

    // Installation du gestionnaire d'événement au click sur le bouton "Suivant"
    document.getElementById('next').addEventListener('click', onClickNextButton);

    // Installation du gestionnaire d'événement au click sur le bouton "Précédent"
    document.getElementById('prev').addEventListener('click', onClickPrevButton);

    // Installation du gestionnaire d'événement au click sur le bouton "Play / Pause"
    document.getElementById('play-pause').addEventListener('click', onClickPlayPause);

    // Installation d'un gestionnaire d'événement sur l'événement 'keydown' (touche du clavier enfoncée) sur l'ensemble du document
    document.addEventListener('keydown', onKeyDown);

    // Installation du gestionnaire d'événement au click sur le bouton "Random"
    document.getElementById('random').addEventListener('click', onClickRandom);
});