'use strict';   // Mode strict du JavaScript

//////////////////////////////////////
// CONSTANTES & VARIABLES GLOBALES //
////////////////////////////////////
const IMG_PATH = 'images/';
const START = 9;

let countdownTimer;
let takeOffTimer;
let count;

///////////////////////////////
// DECLARATION DE FONCTIONS //
/////////////////////////////

// Gestionnaire d'événement au clic sur le bouton de mise à feu
function onClickFiringButton()
{
    // Une fois que la mise à feu lancée, on désactive le bouton de mise à feu...
    firingButton.removeEventListener('click', onClickFiringButton);
    firingButton.classList.add('disabled');

    // ... et on active le bouton d'annulation
    cancelButton.addEventListener('click', onClickCancelButton);
    cancelButton.classList.remove('disabled');

    // Programmation du décollage de la fusée à la fin du compte à rebours
    scheduleTakeOff();
    
    // Affichage initial du compte à rebours
    countDown();
    
    // Lancement du compte à rebours
    countdownTimer = window.setInterval(countDown, 1000);
    
    // On change la source de l'image de la fusée
    updateRocket('rocket2.gif');
}

// Gestionnaire d'événement au clic sur le bouton d'annulation'
function onClickCancelButton()
{
    // On active le bouton de mise à feu...
    firingButton.addEventListener('click', onClickFiringButton);
    firingButton.classList.remove('disabled');

    // ... et on désactive le bouton d'annulation
    cancelButton.removeEventListener('click', onClickCancelButton);
    cancelButton.classList.add('disabled');

    // On arrête le compte à rebours 
    window.clearInterval(countdownTimer);
  
    // On efface le panneau et on réinitialise le compteur
    billboard.textContent = '';
    count = START;

    // On annule la programmation du décollage
    window.clearTimeout(takeOffTimer);

    // On change la source de l'image de la fusée
    updateRocket('rocket1.png');
}

/**
 * Programme le décollage de la fusée à la fin du compte à rebours
 */
function scheduleTakeOff()
{
    // Programmation du décollage pour dans x secondes
    takeOffTimer = setTimeout(function(){

        // On change la source de l'image de la fusée
        updateRocket('rocket3.gif');

        // On fait décoller la fusée en lui donnant la classe 'tookOff', la transition CSS fera le reste
        rocket.classList.add('tookOff');

        // ... et on désactive le bouton d'annulation
        cancelButton.removeEventListener('click', onClickCancelButton);
        cancelButton.classList.add('disabled');

    }, count * 1000);
}

// Gestion du compte à rebours
function countDown()
{
    // Affichage sur le panneau du compte à rebours
    billboard.textContent = count;
    
    // On décrémente le compteur
    count--;
    
    // Si le compteur arrive à -1, on stoppe le chronomètre
    if( count == -1 ){
        
        window.clearInterval(countdownTimer);
    }
}

/**
 * Met à jour l'image de la fusée
 */
function updateRocket(filename)
{
    rocket.src = IMG_PATH + filename;
}

function addStar()
{
    // Tableau contenant les différentes classes CSS possibles pour les étoiles
    const sizes = ['tiny', 'normal', 'big'];
    
    // Création d'un élément <div>
    const divElement = document.createElement('div');
    
    // Ajout de la classe 'star'
    divElement.classList.add('star');
    
    // On tire au hasard un index pour le tableau des tailles
    const index = getRandomInteger(0,sizes.length-1);
    
    // Ajout d'une classe pour la taille de l'étoile
    divElement.classList.add(sizes[index]);
    
    // On tire au hasard la position de l'étoile entre 0 et 100%
    divElement.style.top = getRandomInteger(0, 100) + '%';
    divElement.style.left = getRandomInteger(0, 100) + '%';
    
    // On insère l'élément <div> dans le body du document
    document.body.appendChild(divElement);
}

/////////////////////
// CODE PRINCIPAL //
//////////////////

// Initialisation des variables globales
count = START;

// Sélection des différents éléments du DOM sur lesquels nous allons agir
const rocket = document.getElementById('rocket');
const billboard = document.querySelector('#billboard span');
const firingButton = document.getElementById('firing-button');
const cancelButton = document.getElementById('cancel-button');

// Installation du gestionnaire d'événement au clic sur le bouton de mise à feu
firingButton.addEventListener('click', onClickFiringButton);

// Ajout des étoiles
for(let i = 0 ; i < 150 ; i++){
    addStar();
}