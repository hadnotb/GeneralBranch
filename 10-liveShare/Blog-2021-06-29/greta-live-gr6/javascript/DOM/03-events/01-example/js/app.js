// 3°) Définition du gestionnaire d'événement
function onClickButton()
{
    console.log('On a cliqué sur le bouton !');
}

// 1°) On sélectionne l'élément du DOM à écouter
const button = document.getElementById('my-button');

// 2°) Installation d'un gestionnaire d'événement au click
button.addEventListener('click', onClickButton);

