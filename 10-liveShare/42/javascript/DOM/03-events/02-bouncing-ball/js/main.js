'use strict'; // Mode strict de JavaScript

///////////////////////////////
// DECLARATION DE FONCTIONS //
/////////////////////////////
function onClickButton()
{
    // On switche la classe hide pour faire disparaître / apparaître la balle
    const hidden = ball.classList.toggle('hide'); 

    const spanElement = document.querySelector('#toggle-bouncing-ball span');

    if (hidden) {
        spanElement.textContent = 'Apparais !';
    } else {
        spanElement.textContent = 'Disparais !';
    }
}

function onMouseEnterBall()
{
    // Pour arrêter de rebondir, on supprime la classe 'bouncing' de la balle
    ball.classList.remove('bouncing');
}

function onMouseLeaveBall()
{
    // Pour faire rebondir la balle à nouveau, on lui ajoute la classe 'bouncing'
    ball.classList.add('bouncing');
}

function onClickBall()
{
    // J'alterne la classe 'selected' pour passer en rouge ou retirer le rouge de la balle
    ball.classList.toggle('selected');
}

function onDoubleClickBall()
{
    // On alterne la classe 'small' pour changer la taille de la balle
    ball.classList.toggle('small');
}

/////////////////////
// CODE PRINCIPAL //
///////////////////
const ball = document.querySelector('.ball');
const button = document.getElementById('toggle-bouncing-ball');


// Installation d'un gestionnaire d'événement au click sur le bouton 
button.addEventListener('click', onClickButton);

// Installation des gestionnaires d'événement sur la balle
ball.addEventListener('mouseenter', onMouseEnterBall);
ball.addEventListener('mouseleave', onMouseLeaveBall);
ball.addEventListener('click', onClickBall);
ball.addEventListener('dblclick', onDoubleClickBall);